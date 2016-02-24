<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller {

    public function index() {

        header( "refresh:5;".base_url());

        $postData = $this->getPostData();

        if(isset($postData['msg'])) {
            $this->load->library('email');

            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);

            $this->email->from('scsuca', 'Susanno Correia');
            $this->email->to('scsuca@gmail.com');

            $this->email->subject('[4SO CONTATO SITE]'.$postData['nome']);
            $this->email->message(
                "NOME".$postData['nome']."\n".
                "EMAIL".$postData['email']."\n".
                "TEKEFIBE".$postData['telefone']."\n".
                $postData['msg']
            );

            $this->email->smtp_port = '587';

            $this->email->send();


            echo "Mensagem enviada, você será redirecionado para o site novamente em 5 segundos.";
        } else {
            echo "Ocorreu um erro.";
        }

        echo "<a href='".base_url()."'>Voltar para o site</a>";

    }

    private function getPostData()
    {
        $postData = [
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post['telefone'],
            'msg' => $this->input->post("msg")
        ];

        return $postData;
    }

}
