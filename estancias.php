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
            <h1 class="webdoor__title">Sua personalidade no paraíso <br> tropical</h1> 
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
                <source src="assets/videos/fasano-trancoso-estancias.mp4" type="video/mp4">
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
    <section class="estancias">
         <div class="container">
             <div class="flex">
                 <div class="estancias__video">
                    <video playsinline="" autoplay="" loop="" muted="">
                        <source src="assets/videos/fasano-trancoso-estancias-sobre.mp4" type="video/mp4">
                        <source src="#" type="video/webm">
                    </video> 
                 </div> 
                 <div class="estancias__textMidRight">
                     <p class="estancias__textMidRight--text">
                         <span>» 29 lotes de 1.630m² a 5.161m²</span> para construção de projetos próprios em um terreno com uma espetacular vista para o mar. <span>» Acesso aos serviços e facilities do Hotel Fasano Trancoso, como room service, concierge e laundry service. »</span>  Para o desenvolvimento dos projetos residenciais das Estâncias Fasano, renomados escritórios de arquitetura – David Bastos, Gálvez & Márton, Gui Mattos e U Design e Cavani – criaram projetos únicos como sugestão para as Estâncias Fasano, idealizando seu paraíso particular.
                     </p>
                 </div>
             </div> 
             <h2 class="estancias__title">Uma experiência completa <br> com a sua cara</h2>
             <div class="estancias__primarySlide">
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/1-Galvez-Marton-_-Implantacao-Estancias-A16-a-A21.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/1-Galvez-Marton-_-Implantacao-Estancias-A16-a-A21.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/1-Galvez-Marton-_-Implantacao-Estancias-A16-a-A21.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Gálvez & Márton <br>
                            <span>Implantação projeto Estâncias A16 à A21</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/2-Galvez-Marton-_-Vista-da-Casa.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/2-Galvez-Marton-_-Vista-da-Casa.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/2-Galvez-Marton-_-Vista-da-Casa.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Gálvez & Márton <br> 
                            <span>Vista da Casa</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/6_U-Design-e-Cavani-_Vista-da-Casa.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/6_U-Design-e-Cavani-_Vista-da-Casa.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/6_U-Design-e-Cavani-_Vista-da-Casa.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Design e Cavani<br> 
                            <span>Vista da Casa</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/David-Bastos-2.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/David-Bastos-2.png" type="image/png"> 
                            <img class="img-fluid" src="assets/David-Bastos-2.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>David Bastos<br> 
                            <span>Vista da Casa</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/6_U-Design-e-Cavani-_Vista-da-Casa.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/6_U-Design-e-Cavani-_Vista-da-Casa.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/6_U-Design-e-Cavani-_Vista-da-Casa.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Design e Cavani<br> 
                            <span>Vista da Casa</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/3_Gui-Mattos_Vista-da-Casa.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/3_Gui-Mattos_Vista-da-Casa.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/3_Gui-Mattos_Vista-da-Casa.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Gui Mattos<br> 
                            <span>Vista da Casa</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/david-bastos-1.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/david-bastos-1.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/david-bastos-1.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>David Batos<br> 
                            <span>Vista da Casa</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-estancias-experiencias-aerea-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-estancias-experiencias-aerea-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-estancias-experiencias-aerea-01.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Vista Geral<br> 
                            <span>Vista Aérea das Estâncias Fasano</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-estancias-experiencias-rua-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-estancias-experiencias-rua-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-estancias-experiencias-rua-01.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Vista da Rua<br> 
                            <span>Vista da Rua</span>
                         </p>
                     </div>
                 </div>
                 <div class="slide">
                    <div class="estancias__primarySlide--img">
                        <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-estancias-experiencias-tennis-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-estancias-experiencias-tennis-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-estancias-experiencias-tennis-01.png" alt="">
                        </picture> 
                    </div>
                    <div class="estancias__primarySlide--text">
                         <p>Quadra de Tennis<br> 
                            <span>Com vista para o mar</span>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="estancias__secondarySlide">
                <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-suite-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-suite-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-galeria-suite-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-02.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-02.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-experiencias-restaurante-02.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-spa-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-spa-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-experiencias-spa-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-fitness-center-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-facilidades-fitness-center-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-facilidades-fitness-center-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-villas-galeria-02.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-villas-galeria-02.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-villas-galeria-02.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-experiencias-restaurante-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-experiencias-restaurante-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-lago-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-lago-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-galeria-lago-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
                 <div class="slide">
                     <div class="estancias__secondary--img">
                         <picture>
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-ponte-01.webp" type="image/webp">
                            <source class="img-fluid" srcset="assets/images/fasano-reserva-hotel-galeria-ponte-01.png" type="image/png"> 
                            <img class="img-fluid" src="assets/images/fasano-reserva-hotel-galeria-ponte-01.png" alt="">
                        </picture> 
                     </div> 
                 </div>
             </div>
             <div class="estancias__lotes">
                <h2 class="estancias__title">Uma experiência completa <br> com a sua cara</h2>
                 <picture>
                    <source class="img-fluid" srcset="assets/images/lotes.webp" type="image/webp">
                    <source class="img-fluid" srcset="assets/images/lotes.jpg" type="image/jpg"> 
                    <img class="img-fluid" src="assets/images/lotes.jpg" alt="">
                </picture> 
             </div>
         </div>
    </section>

</main>


<?php 

   include('footer.php');
    
?>