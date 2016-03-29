<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()	{
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

		switch ($lang) {
			case 'pt':
				$i18n_tags = $this->pt_tags();
				break;
			case 'en':
				$i18n_tags = $this->en_tags();
				break;
			default:
				$i18n_tags = $this->en_tags();;
				break;
		}


		$data = array(
			't' => $i18n_tags
		);

		$this->load->view('home', $data);
	}

	private function pt_tags() {
		return array(
			'menu-sobre-o-artista' => 'SOBRE',
			'menu-galeria' => 'GALERIA',
			'menu-exposicoes' => 'EXPOSIÇÕES',
			'menu-blog' => 'BLOG',
			'menu-loja' => 'LOJA',
			'menu-contato' => 'CONTATO',
			'header-ola' => 'Olá',
			'header-bem-vindo' => 'BEM VINDO',
			'descricao-susano' => 'Olá, me chamo Susano Correia. Nasci em Florianópolis e sou artista visual formado em Artes Visuais pela UDESC. Trabalho principalmente com desenho e pintura, mas de vez em quando gosto de experimentar outras técnicas. Me interesso especialmente pelas pessoas e a condição humana. Penso que a minha pesquisa em arte é um processo contínuo que abrange toda minha vida, transformo em trabalhos artísticos minhas experiências e meus estudos. Para acompanhar meu trabalho você pode me seguir nas redes sociais e no meu blog. Nas redes posto os trabalhos que venho desenvolvendo na medida em que eles são criados, e no blog tenho escrito um pouco sobre minhas ideias e meu processo criativo. Acredito que a interação com o público é muito importante tendo em vista que ele é parte fundamental da significação dos trabalhos. Sem público não há arte. Então vamos lá!',
			'galeria-bottom' => 'Conheça o trabalho de Susano Correia',
			'obra-cante-para-mim' => 'Cante Para Mim',
			'obra-morte-embruxada' => 'Morte Embruxada',
			'obra-eu-transbordo-eu' => 'Eu Transbordo Eu',
			'obra-rosa-embruxada' => 'Rosa Embruxada',
			'obra-fome-embruxada' => 'Fome Embruxada',
			'obra-embruxamento-de-coracao' => 'Embruxamento de Coração',
			'obra-ignorante-proativo' => 'Ignorante Proativo',
			'obra-menino-com-catavento' => 'Menino com Cata-vento',
			'obra-cante-para-mim-estudo' => 'Cante Para Mim (estudo)',
			'obra-homem-chorando-homens-que-nao-choram' => 'Homem Chorando Homens que Não Choram',
			'obra-o-pensador-meio-burro' => 'O Pensador Meio Burro',
			'obra-homem-feliz-para-sempre-embruxado' => 'Homem Feliz Para Sempre Embruxado',
			'obra-eu-transbordo-eu-estudo' => 'Eu Transbordo Eu (estudo)',
			'obra-ignorante-proativo-estudo' => 'Ignorante Proativo (estudo)',
			'obra-homem-crussificado-em-si' => 'Homem Crucificado Em Si com Osso Entalado',
			'obra-o-escroto-triste' => 'O Escroto Triste',
			'obra-msg-aquarela-e-grafite-sobre-papel' => '',
			'obra-msg-oleo-sobre-tela' => '',
			'obra-msg-grafite-sobre-papel' => '',
			'contato-nome' => 'NOME *',
			'contato-email' => 'EMAIL *',
			'contato-telefone' => 'TELEFONE *',
			'contato-mensagem' => 'MENSAGEM *',
			'contato-enviar' => 'ENVIAR',
			'contato-insira-nome' => 'NOME *',
			'contato-insira-email' => 'EMAIL *',
			'contato-insira-telefone' => 'TELEFONE *',
			'contato-insira-mensagem' => 'MENSAGEM *',
			'contato-enviar' => 'ENVIAR',
			'contato-insira-nome' => 'Por favor insira o seu nome.',
			'contato-insira-email' => 'Por favor insira o seu email.',
			'contato-insira-telefone' => 'Por favor insira o seu telefone.',
			'contato-insira-mensagem' => 'Por favor insira uma mensage.',
			'fechar' => 'Fechar'
		);
	}

	private function en_tags() {
		return array(
			'menu-sobre-o-artista' => 'ABOUT THE ARTIST',
			'menu-galeria' => 'GALLERY',
			'menu-exposicoes' => 'EXHIBITIONS',
			'menu-blog' => 'BLOG',
			'menu-loja' => 'STORE',
			'menu-contato' => 'CONTACT',
			'header-ola' => 'Hello,',
			'header-bem-vindo' => 'WELCOME',
			'descricao-susano' => 'Susano Correia (Florianópolis, January 17th, 1989) is a visual artist who develops, mainly, the drawing and painting techniques. He holds a degree in Visual Arts from the State University of Santa Catarina (UDESC). Recently, he has been developing a series of works entitled Embruxados (Bewitched). In this series, the artist discusses many contemporary everyday issues connected to , reflecting, mainly, about psychological subjects. The word bewitched is not related to religious issues but to a way of being in the world.',
			'galeria-bottom' => 'Get to know Susano Correia\'s work',
			'obra-cante-para-mim' => 'Cante Para Mim',
			'obra-morte-embruxada' => 'Morte Embruxada',
			'obra-eu-transbordo-eu' => 'Eu Transbordo Eu',
			'obra-rosa-embruxada' => 'Rosa Embruxada',
			'obra-fome-embruxada' => 'Fome Embruxada',
			'obra-embruxamento-de-coracao' => 'Embruxamento de Coração',
			'obra-ignorante-proativo' => 'Ignorante Proativo',
			'obra-menino-com-catavento' => 'Menino com Cata-vento',
			'obra-cante-para-mim-estudo' => 'Cante Para Mim (estudo)',
			'obra-homem-chorando-homens-que-nao-choram' => 'Homem Chorando Homens que Não Choram',
			'obra-o-pensador-meio-burro' => 'O Pensador Meio Burro',
			'obra-homem-feliz-para-sempre-embruxado' => 'Homem Feliz Para Sempre Embruxado',
			'obra-eu-transbordo-eu-estudo' => 'Eu Transbordo Eu (estudo)',
			'obra-ignorante-proativo-estudo' => 'Ignorante Proativo (estudo)',
			'obra-homem-crussificado-em-si' => 'Homem Crucificado Em Si com Osso Entalado',
			'obra-o-escroto-triste' => 'O Escroto Triste',
			'obra-msg-aquarela-e-grafite-sobre-papel' => 'Watercolor and Graphite On Paper',
			'obra-msg-oleo-sobre-tela' => 'Oil On Canvas',
			'obra-msg-grafite-sobre-papel' => 'Graphite On Paper',
			'contato-nome' => 'NAME *',
			'contato-email' => 'E-MAIL *',
			'contato-telefone' => 'PHONE NUMBER *',
			'contato-mensagem' => 'MESSAGE *',
			'contato-enviar' => 'SEND',
			'contato-insira-nome' => 'Please enter your name.',
			'contato-insira-email' => 'Please enter your email address.',
			'contato-insira-telefone' => 'Please enter your phone number.',
			'contato-insira-mensagem' => 'Please enter a message.',
			'fechar' => 'Close'
		);
	}
}