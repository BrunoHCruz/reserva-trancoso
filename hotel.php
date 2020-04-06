<?php

    $title       = 'Fasano Trancoso: tão exclusivo quanto o lugar onde nasceu';
    $description = 'Sol, mar, amigos, eventos inesquecíveis, momentos especiais. O Fasano Trancoso Villas, Estâncias &#038; Hotel é um lugar para viver tudo o que o inspira e o faz feliz';
    $keywords    = '';
    
    include('header.php');

?>


<main>
    <section class="webdoor-home">
        <div class="webdoor webdoor__home"></div>
        <div class="webdoor-hotel__container"> 
            <h1 class="webdoor__title">Um Fasano exclusivo para <br> desfrutar e viver o melhor de <br> Trancoso</h1> 
            <a href="#" class="webdoor__scroll">
                <picture>
                    <source class="img-fluid" srcset="assets/images/seta-baixo.webp" type="image/webp">
                    <source class="img-fluid" srcset="assets/images/seta-baixo.png" type="image/png"> 
                    <img class="img-fluid" src="assets/images/seta-baixo.png" alt="">
                </picture> 
            </a>
        </div>
        <div class="webdoor-home__video">
            <video playsinline="" autoplay="" loop="" muted="">
                <source src="assets/videos/fasano-trancoso-hotel.mp4" type="video/mp4">
                <source src="#" type="video/webm">
            </video>
        </div>
        <div class="webdoor-home__opacity"></div> 
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
    </section>
    <section class="hotel">
         <div class="container">
             <div class="flex">
                 <div class="hotel__textMid">
                     <p class="hotel__textMid--text">
                         Com um projeto assinado por Isay Weinfeld, o projeto Fasano Trancoso foi concebido respeitando a essência do local e de sua comunidade. Cada um de seus detalhes foi projetado para garantir a redução de impactos e uma integração harmoniosa com a natureza.
                     </p>
                 </div>
                 <div class="hotel__textMidRight">
                     <p class="hotel__textMidRight--text">
                         <span>» 40 bangalôs</span> de 60m² a 90m² <span>» Beach Club -</span> integrado ao restaurante assinado pelo restaurador <span>Rogério Fasano. »2 piscinas (olímpicas e infantis)</span> dispostas em um deck de 250 metros ao longo de toda a frente do hotel. <span>» Spa com 4 salas de tratamento</span> , academia, sauna e piscina. » Recepção com boutique e business center. » Salas de reunião. » Instalações de acomodação para os funcionários dos proprietários das Villas.
                     </p>
                 </div>
             </div>
             <div class="hotel__video">
                <video playsinline="" autoplay="" loop="" muted="">
                    <source src="assets/videos/O-Hotel-Fasano-Reserva-Trancoso.mp4" type="video/mp4">
                    <source src="#" type="video/webm">
                </video> 
             </div>
             <h2 class="hotel__title">Qualidade, sofisticação <br> e cuidados especiais</h2>
             <div class="hotel__primarySlide">
                 <div class="flex">
                     <div class="hotel__primarySlide--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-piscina-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-piscina-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-facilidades-piscina-01.png" alt="">
                        </picture> 
                     </div>
                     <div class="hotel__primarySlide--text">
                         <p>Piscina olímpica <br> <span>Ao lado do Beach Club</span></p>
                     </div>
                 </div>
                 <div class="flex">
                     <div class="hotel__primarySlide--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-fitness-center-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-fitness-center-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-facilidades-fitness-center-01.png" alt="">
                        </picture> 
                     </div>
                     <div class="hotel__primarySlide--text">
                         <p>Fitness Center</p>
                     </div>
                 </div>
                 <div class="flex">
                     <div class="hotel__primarySlide--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-recepcao-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-recepcao-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-facilidades-recepcao-01.png" alt="">
                        </picture> 
                     </div>
                     <div class="hotel__primarySlide--text">
                         <p>Recepção / Entrada do Hotel e Villas Fasano <br> <span>Com uma Boutique Boutique, um salão para visitantes e visitantes, um business center e sala de reuniões.</span></p>
                     </div>
                 </div>  
             </div>
             <h2 class="hotel__title">Experiências Fasano</h2>
             <div class="hotel__secondarySlide">
                 <div class="slide">
                    <div class="hotel__secondarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-experiencias-restaurante-01.png" alt="">
                        </picture> 
                    </div>
                    <div class="hotel__secondarySlide--text">
                         <p>Bar Fasano, Restaurante e Clube de Praia</p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="hotel__secondarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-02.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-02.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-experiencias-restaurante-02.png" alt="">
                        </picture> 
                    </div>
                    <div class="hotel__secondarySlide--text">
                         <p>Fasano Restaurant <br> 
                            <span>Integrado com o deck, a piscina e o Beach Club</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="hotel__secondarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-spa-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-spa-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-experiencias-spa-01.png" alt="">
                        </picture> 
                    </div>
                    <div class="hotel__secondarySlide--text">
                         <p>SPA<br> 
                            <span>Com sauna, piscina e 4 salas de tratamento.</span>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="hotel__thirdSlide">
                 <div class="slide">
                     <div class="hotel__thirdSlide--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-suite-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-suite-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-galeria-suite-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="hotel__thirdSlide--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-lago-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-lago-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-galeria-lago-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="hotel__thirdSlide--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-ponte-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-ponte-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-galeria-ponte-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
             </div>
         </div>
    </section>

</main>


<?php 

   include('footer.php');
    
?>