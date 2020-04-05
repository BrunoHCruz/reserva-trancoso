  	<footer class="footer">
	  	<div class="footer__container">
	  		<div class="footer__left">
			  	<div class="footer__left--top">
					<nav class="footer__nav">
						<ul class="footer__ul">
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/o-empreendimento/">O Empreendimento Fasano Trancoso</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/hotel/">– Hotel</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/villas/">– Villas</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/estancias/">– Estâncias</a>
							</li>
						</ul>					
					</nav>
					<nav class="footer__nav">
						<ul class="footer__ul">
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/trancoso/">Trancoso</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="/trancoso/#conheca">– Conheça</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="/trancoso/#o-que-fazer">– O que fazer</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="/trancoso/#como-chegar">– Como chegar</a>
							</li>
						</ul>					
					</nav>
					<nav class="footer__nav">
						<ul class="footer__ul">
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/institutional/">Institutional</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="/institucional/#fasano">– Fasano</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="/institucional/#contato-fasano">– Contato</a>
							</li>
						</ul>					
					</nav>
					<nav class="footer__nav">
						<ul class="footer__ul">
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/blog">Blog</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/blog/category/cultura/">– Cultura</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/blog/category/lazer/">– Lazer</a>
							</li>
							<li class="footer__li">
								<a class="footer__link" href="https://reservatrancoso.com.br/blog/category/servicos/">– Serviços</a>
							</li>
						</ul>					
					</nav>
				</div>
				<div class="footer__form--mobile hide-desktop">
					<p class="footer__form--title">Cadastre-se para receber nossas informações</p>
					<div>
						<form action="#" autocomplete="off">
							<p class="footer__right--email">
								<input type="text" id="fname" name="fname" placeholder="PREENCHA SEU EMAIL">
							</p>
							<p class="footer__right--confirmar">
								<input  type="submit" value="CONFIRMAR">
							</p>
						</form>
					</div>
				</div>
				<div class="footer__left--bottom">
					<div class="footer__logo">
						<img src="assets/images/logo1-footer.png">
					</div>

					<div class="footer__logo">
						<p>PARTICIPAÇÃO</p>
						<img class="logo-footer" src="https://reservatrancoso.com.br/wp-content/themes/trancoso/images/fasano-logo.svg">
					</div>

					<div class="footer__logo">
						<p>REALIZAÇÃO</p>
						<img class="logo-footer" src="https://reservatrancoso.com.br/wp-content/themes/trancoso/images/bahia-beach-logo.svg">
					</div>
				</div>
			</div>
			<div class="footer__right">
				<div class="footer__right--title hide-mobile">
					<p>Cadastre-se em nossa newsletter e fique atualizado</p>
				</div>
				<div class="footer__right--form hide-mobile">
	  				<form action="#" autocomplete="off">
						  <p class="footer__right--email">
							  <input type="text" id="fname" name="fname" placeholder="PREENCHA SEU EMAIL">
						  </p>
						  <p class="footer__right--confirmar">
							  <input  type="submit" value="CONFIRMAR">
						  </p>
					</form>
				</div>


				<div>
					<div class="footer__right--redes-sociais">
						<a href="https://www.instagram.com/reservatrancoso" target="_blank"><i class="icon icon-instagram"></i></a>
						<a href="https://www.youtube.com/channel/UC6sjG37tGxsn8DpAHcZyVMg" target="_blank"><i class="icon icon-youtube"></i></a>
					</div>

					<div class="footer__right--terms">
						<?php 
							$texto_termos = "TERMOS E CONDIÇÕES";
							$link_termos = "http://reservatrancoso.com.br/termos-e-condicoes";
						?>
						<p>
							<a href="<?= $link_termos ?>" class="termos"><?= $texto_termos ?></a>
						</p>
						<p>
							© 2017 Copyright FASANO RESERVA 
						</p>
						<a href="http://agenciasmart.com.br/" target="_blank">
							<img src="assets/images/smart-logo.svg" class="logo-smart">
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	  
	  <script defer async src="/assets/scripts/scripts.min.js">
	  </script> 
  
	<script type="text/javascript">
		
		function initMap() {
			var LatLng = new google.maps.LatLng(-16.621152018022052, -39.09398764371872);

			var map = new google.maps.Map(document.getElementById('gmap'), {
				center: {lat: -16.621152018022052, lng: -39.09398764371872},
				mapTypeId: google.maps.MapTypeId.SATELLITE,
				zoom: 16	
			});

			var marker = new google.maps.Marker({
				position: LatLng,
				map: map,
				title: 'Fasano Trancoso',
				icon: 'assets/images/fasano-marker.png'
			});
		}
	</script>   

	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5z17EsQ4otOiSrbvfSLXqepaY9T2my_c&callback=initMap">
    </script>
  </body>
</html>
