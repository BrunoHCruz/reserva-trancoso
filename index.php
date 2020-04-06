<?php

    $title       = 'Fasano Trancoso: tão exclusivo quanto o lugar onde nasceu';
    $description = 'Sol, mar, amigos, eventos inesquecíveis, momentos especiais. O Fasano Trancoso Villas, Estâncias &#038; Hotel é um lugar para viver tudo o que o inspira e o faz feliz';
    $keywords    = '';
    $local = 'home';
    
    include('header.php');

?>


<main>
    <section class="webdoor-home">
        <div class="webdoor webdoor__home"></div>
        <ul class="webdoor-home__container">
            <li class="webdoor-home__item">
                <a class="webdoor-home__link" data-bg="assets/images/fasano-reserva-home-hoteis-hover.jpg" href="/hotel">
                    Hotel<span>CLIQUE E SAIBA MAIS</span>
                </a>
            </li>
            <li class="webdoor-home__item middle">
                <a href="#" class="webdoor-home__link villas" data-bg="">Villas<br>
                    <img src="assets/images/seta.png" width="20" height="7" alt="seta" id="setaHome">
                </a>
                <div>
                    <span><a class="webdoor-home__link" data-bg="assets/images/fasano-reserva-home-villas-hover.jpg" href="/pt/villas">Villas Fasano Trancoso por Isay Weinfeld</a></span>
                    <span><a class="webdoor-home__link" class="lancamento" data-bg="assets/images/thiago-bernardes.jpg" href="/pt/thiago-bernardes/">Villas Fasano Trancoso por Bernardes Arquitetura <b>LANÇAMENTO</b></a></span>
                </div>
            </li>
            <li class="webdoor-home__item">
                <a class="webdoor-home__link" data-bg="assets/images/fasano-reserva-home-estancias-new-hover.jpg" href="/estancias">Estâncias<span>CLIQUE E SAIBA MAIS</span></a>
            </li>
        </ul>
        <div class="webdoor-home__video">
            <video playsinline="" autoplay="" loop="" muted="">
                <source src="assets/videos/fasano-trancoso-home.mp4" type="video/mp4">
                <source src="#" type="video/webm">
            </video>
        </div>
        <div class="webdoor-home__opacity"></div>
        <a href="#home-desc" class="webdoor-home__rodape--mobile hide-desktop">
            DESCUBRA MAIS
            <br>
            <img class="seta-img" src="assets/images/seta-baixo.png">
        </a>
    </section>
    <div class="webdoor-home__rodape">
        <div class="webdoor-home__rodape--left hide-mobile">
            <div class="webdoor-home__rodape--date">
                <?php 
                    date_default_timezone_set('America/Bahia');
                ?>
                <span><?= date('H:i'); ?></span>
            </div>
        </div>
        <div class="webdoor-home__rodape--right hide-mobile">
            <a target="_blank" href="https://www.instagram.com/reservatrancoso"><i class="icon icon-instagram"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UC6sjG37tGxsn8DpAHcZyVMg"><i class="icon icon-youtube"></i></a>
        </div>
        
    </div>
    <section class="webdoor-home__relative"></section>

    <section id="home-desc" class="areas-textos">
        <h2 class="areas-textos__title home-desc">Um empreendimento tão exclusivo quanto o lugar onde nasceu</h2>
        <div class="areas-textos__text">
            <p>Sol, mar, amigos, eventos inesquecíveis, momentos especiais. O Fasano Trancoso | Villas, Estâncias &amp; Hotel é um lugar para viver tudo o que o inspira e o faz feliz. Um paraíso que vai mudar o seu olhar e os seus dias.</p>
            <a class="areas-textos__link" href="https://reservatrancoso.com.br/o-empreendimento/">SAIBA MAIS</a>
        </div>
    </section>
    
    <section id="home-maps">
		<div id="gmap"></div>
	</section>  

    <section id="trancoso-info" class="areas-textos">
        <h2 class="areas-textos__title trancoso-info">Trancoso, o cenário perfeito</h2>
        <div class="areas-textos__text">
            <p>Trancoso já nasceu sonho – aqui começou o nosso país. Um dos destinos turísticos mais desejados do Brasil, essa praia ao sul da Bahia encanta pelo charme e pela beleza irresistíveis.</p>
            <p>Tudo por aqui nos conta: este é o lugar. As praias deslumbrantes, o mar transparente, as reservas naturais, a mata nativa, a Vila do Quadrado e suas casinhas coloridas… Impossível conhecer e não querer se demorar.</p>
            <a class="areas-textos__link" href="https://reservatrancoso.com.br/trancoso/">SAIBA MAIS</a>
        </div>
    </section>

    <section id="frm-info" class="areas-textos">
        <h2 class="areas-textos__title">Informações</h2>
        <div class="areas-textos__text">
            <p>Caso você tenha alguma dúvida ou precise de mais informações sobre o Reserva Trancoso, preencha os campos abaixo com seus dados e envie-nos uma mensagem. Será um prazer atende-lo.</p>
            <div class="areas-textos__form">
                <form action="">
                    <label for="fname">NOME</label>
                    <input class="areas-textos__form--item" type="text" id="fname" name="fname" value="">
                    <label for="femail">E-MAIL</label>
                    <input class="areas-textos__form--item" type="email" id="femail" name="femail" value="">
                    <label for="textarea">MENSAGEM</label>
                    <textarea class="areas-textos__form--item" name="textarea" rows="3" minlength="10" maxlength="20"></textarea>
                    <input class="areas-textos__link" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="instagram__container">
            <a class="instagram__link" href="">
                <img class="instagram__image" src="assets/images/insta-1.jpg" alt="Imagem 1">
            </a>
            <a class="instagram__link" href="">
                <img class="instagram__image" src="assets/images/insta-2.jpg" alt="Imagem 2">
            </a>
            <a class="instagram__link" href="">
                <img class="instagram__image" src="assets/images/insta-3.jpg" alt="Imagem 3">
            </a>
            <a class="instagram__link" href="">
                <img class="instagram__image" src="assets/images/insta-4.jpg" alt="Imagem 4">
            </a>
        </div>
        <strong class="instagram__title"><i class="icon icon-instagram"></i> Instagram</strong>
    </section>

    <div style="display:none;">
        <img src="assets/images/fasano-reserva-home-hoteis-hover.jpg" alt="webdoors">
        <img src="assets/images//fasano-reserva-home-villas-hover.jpg" alt="webdoors">
        <img src="assets/images/thiago-bernardes.jpg" alt="webdoors">
        <img src="assets/images/fasano-reserva-home-estancias-new-hover.jpg" alt="webdoors">
    </div>

</main>


<?php 

   include('footer.php');
    
?>