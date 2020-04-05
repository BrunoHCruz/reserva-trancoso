<?php

   $title       = ((isset($title) && !empty($title)) ? $title : '');
   $description = ((isset($description) && !empty($description)) ? $description : '');
   $keywords    = ((isset($keywords) && !empty($keywords)) ? $keywords : '');

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="title" content="<?= $title;?>" />
    <meta name="description" content="<?= $description;?>" />
    <meta name="keywords" content="<?= $keywords;?>" />
    <meta name="robots" content="index,follow" />

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $title;?>" />
    <meta property="og:description" content="<?= $description;?>" />

    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:locale" content="" />

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://reservatrancoso.com.br/apple-touch-icon-57x57.png" />

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://reservatrancoso.com.br/apple-touch-icon-114x114.png" />

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://reservatrancoso.com.br/apple-touch-icon-72x72.png" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://reservatrancoso.com.br/apple-touch-icon-144x144.png" />

    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="https://reservatrancoso.com.br/apple-touch-icon-60x60.png" />

    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://reservatrancoso.com.br/https://reservatrancoso.com.br/apple-touch-icon-120x120.png" />

    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="https://reservatrancoso.com.br/apple-touch-icon-76x76.png" />

    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://reservatrancoso.com.br/apple-touch-icon-152x152.png" />

    <link rel="icon" type="image/png" href="https://reservatrancoso.com.br/favicon-196x196.png" sizes="196x196" />

    <link rel="icon" type="image/png" href="https://reservatrancoso.com.br/favicon-96x96.png" sizes="96x96" />

    <link rel="icon" type="image/png" href="https://reservatrancoso.com.br/favicon-32x32.png" sizes="32x32" />

    <link rel="icon" type="image/png" href="https://reservatrancoso.com.br/favicon-16x16.png" sizes="16x16" />

    <link rel="icon" type="image/png" href="https://reservatrancoso.com.br/favicon-128.png" sizes="128x128" />

    <title><?= $title;?></title>

    <link rel="stylesheet" href="/assets/styles/styles.min.css" media="all">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <header class="header">
    <div class="header__btn-menu default">
      <span>MENU</span>
    </div>
    <div class="header__logo">
      <a href="#">
        <h1>
            <img class="header__logo--image" src="assets/images/logo-fasano-header.svg" alt="Fasano Trancoso">
        </h1>
      </a>
    </div>
    <div class="header__lang">
      <a class="header__lang--link" href="#">PT</a>
      <span class="header__lang--icon">|</span>
      <a class="header__lang--link" href="#">EN</a>
    </div>
  </header>

  <div class="header fixo">
    <div class="header__btn-menu menu-fixo">
      <span>MENU</span>
    </div>
    <div class="header__logo">
      <a href="#">
        <h1>
            <img class="header__logo--image menu-fixo" src="assets/images/logo-fasano-header-color.svg" alt="Fasano Trancoso">
        </h1>
      </a>
    </div>
    <div class="header__lang">
      <a class="header__lang--link open menu-fixo" href="#">PT</a>
      <span class="header__lang--icon open menu-fixo">|</span>
      <a class="header__lang--link open menu-fixo" href="#">EN</a>
    </div>
  </div>

  <div class="header__menu">
    <nav class="header__menu--container">
      <ul class="header__menu--ul">
        <li class="header__menu--column">
          <a class="header__menu--title" href="https://reservatrancoso.com.br/o-empreendimento/">O Empreendimento Fasano Trancoso</a>
          <ul class="sub-menu">
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/o-empreendimento/#home-desc">Apresentação</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/o-empreendimento/#galeria01-empreendimento">Arquitetura</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/o-empreendimento/#home-maps">Localização</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/o-empreendimento/#status-obras">Status</a></li>
            <li><a class="header__menu--link" href="https://reservatrancoso.com.br/hotel">HOTEL</a></li>
            <li><a class="header__menu--link" href="https://reservatrancoso.com.br/villas">VILLAS</a></li>
            <li><a class="header__menu--link" href="https://reservatrancoso.com.br/estancias">ESTÂNCIAS</a></li>
          </ul>
        </li>
        <li class="header__menu--column middle">
          <a class="header__menu--title" href="https://reservatrancoso.com.br/trancoso/">Trancoso</a>
          <ul class="sub-menu">
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/trancoso/#conheca">Conheça</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/trancoso/#olhares">Olhares</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/trancoso/#o-que-fazer">O que fazer</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/trancoso/#como-chegar">Como chegar</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/trancoso/#itapororoca">Itapororoca</a></li>
            <li><a class="header__menu--title blog hide-mobile" href="https://reservatrancoso.com.br/blog/">Blog</a></li>
            <li><a class="header__menu--link hide-mobile" href="/blog/category/cultura/">Cultura</a></li>
            <li><a class="header__menu--link hide-mobile" href="/blog/category/lazer/">Lazer</a></li>
            <li><a class="header__menu--link hide-mobile" href="/blog/category/servicos/">Serviços</a></li>
          </ul>
        </li>
        <li class="header__menu--column">
          <a class="header__menu--title" href="https://reservatrancoso.com.br/institucional/">Institucional</a>
          <ul class="sub-menu">
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/institucional/#fasano">Fasano</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/institucional/#bahia-beach">Bahia Beach</a></li>
            <li><a class="header__menu--link hide-mobile" href="https://reservatrancoso.com.br/institucional/#contato-fasano">Contato</a></li>
          </ul>
        </li>
        <div class="header__menu--redes-sociais hide-desktop">
          <a href="https://www.instagram.com/reservatrancoso" target="_blank"><i class="icon icon-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UC6sjG37tGxsn8DpAHcZyVMg" target="_blank"><i class="icon icon-youtube"></i></a>
        </div>
      </ul>

    </nav>
  </div>
