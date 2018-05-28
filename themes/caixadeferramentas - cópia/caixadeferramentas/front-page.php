<?php
/**
 * Homepage File
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Caixa_de_Ferramentas
 */

get_header();
?>

<div class="home-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-6 align-self-center">
				<div class="card">
				  <div class="card-body">
				  	<img class="d-block" src="<?php echo get_template_directory_uri();?>/img/logo_escola_livre.png" alt="">
				    <p class="lead">Sistematização posuere lectus dui, sit amet congue ipsum pharetra.</p>

						<p>A Escola de Jornalismo accumsan faucibus accumsan. Proin ullamcorper hendrerit metus, quis pretium arcu hendrerit nec. Pellentesque lacinia posuere placerat. Phasellus sapien sapien.</p>

						<p>Condimentum eu nisl eu, tincidunt semper velit. Aliquam ligula dolor, ornare non elit vel, vulputate dictum risus.</p>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-lg-6 align-self-center">
				<div class="front-menu">
					<ul class="list-unstyled">
						<li>
							<a href="#">

							<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="64.4px" height="77.3px" viewBox="0 0 64.4 77.3" style="enable-background:new 0 0 64.4 77.3;"
								 xml:space="preserve">
								<g>
									<g>
										<g>
											<path style="&st0;" d="M32.2,47.7c-3.6,0-6.4,2.9-6.4,6.4c0,3.6,2.9,6.4,6.4,6.4c3.6,0,6.4-2.9,6.4-6.4
												C38.7,50.6,35.8,47.7,32.2,47.7z M32.2,58c-2.1,0-3.9-1.7-3.9-3.9s1.7-3.9,3.9-3.9s3.9,1.7,3.9,3.9S34.4,58,32.2,58z"/>
										</g>
									</g>
									<g>
										<g>
											<path style="&st0;" d="M53.9,54.1c-0.5-1.5-2-2.6-3.6-2.6h-2.6c-2.1,0-3.9,1.7-3.9,3.9v5.2c0,0.7-0.6,1.3-1.3,1.3H21.9
												c-0.7,0-1.3-0.6-1.3-1.3v-5.2c0-2.1-1.7-3.9-3.9-3.9h-2.6c-2.1,0-3.9,1.7-3.9,3.9c0,1.6,1,3.1,2.6,3.6v1.5c0,5,4,9,9,9h1.3V76
												c0,0.7,0.6,1.3,1.3,1.3h15.5c0.7,0,1.3-0.6,1.3-1.3v-6.4h1.3c5,0,9-4,9-9v-1.5C53.6,58.3,54.6,56.1,53.9,54.1z M50.3,56.7
												c-0.7,0-1.3,0.6-1.3,1.3v2.6c0,3.6-2.9,6.4-6.4,6.4h-2.6c-0.7,0-1.3,0.6-1.3,1.3v6.4H25.8v-6.4c0-0.7-0.6-1.3-1.3-1.3h-2.6
												c-3.6,0-6.4-2.9-6.4-6.4V58c0-0.7-0.6-1.3-1.3-1.3c-0.7,0-1.3-0.6-1.3-1.3c0-0.7,0.6-1.3,1.3-1.3h2.6c0.7,0,1.3,0.6,1.3,1.3v5.2
												c0,2.1,1.7,3.9,3.9,3.9h20.6c2.1,0,3.9-1.7,3.9-3.9v-5.2c0-0.7,0.6-1.3,1.3-1.3h2.6c0.7,0,1.3,0.6,1.3,1.3
												C51.5,56.1,51,56.7,50.3,56.7z"/>
										</g>
									</g>
									<g>
										<g>
											<path style="&st0;" d="M34.8,32.2h-3.9c-2.1,0-3.9,1.7-3.9,3.9h2.6c0-0.7,0.6-1.3,1.3-1.3h3.9c0.7,0,1.3,0.6,1.3,1.3
												s-0.6,1.3-1.3,1.3c-2.1,0-3.9,1.7-3.9,3.9h2.6c0-0.7,0.6-1.3,1.3-1.3c2.1,0,3.9-1.7,3.9-3.9S36.9,32.2,34.8,32.2z"/>
										</g>
									</g>
									<g>
										<g>
											<path style="&st0;" d="M19.3,11.6H9V9c0-0.5-0.3-1-0.8-1.2c-0.5-0.2-1-0.1-1.4,0.3l-6.4,6.4c-0.5,0.5-0.5,1.3,0,1.8l6.4,6.4
												c0.5,0.5,1.3,0.5,1.8,0C8.9,22.6,9,22.2,9,21.9v-2.6h9v9c0,0.7,0.6,1.3,1.3,1.3h5.2c0.7,0,1.3-0.6,1.3-1.3V18
												C25.8,14.5,22.9,11.6,19.3,11.6z M23.2,27.1h-2.6v-7.7c0-1.4-1.2-2.6-2.6-2.6H7.7c-0.7,0-1.3,0.6-1.3,1.3v0.8l-3.3-3.3l3.3-3.3
												v0.8c0,0.7,0.6,1.3,1.3,1.3h11.6c2.1,0,3.9,1.7,3.9,3.9V27.1z"/>
										</g>
									</g>
									<g>
										<g>
											<path style="&st0;" d="M64.1,14.6l-6.4-6.4c-0.5-0.5-1.3-0.5-1.8,0c-0.2,0.2-0.4,0.6-0.4,0.9v2.6H45.1c-3.6,0-6.4,2.9-6.4,6.4
												v10.3c0,0.7,0.6,1.3,1.3,1.3h5.2c0.7,0,1.3-0.6,1.3-1.3v-9h9v2.6c0,0.5,0.3,1,0.8,1.2c0.5,0.2,1,0.1,1.4-0.3l6.4-6.4
												C64.6,15.9,64.6,15.1,64.1,14.6z M58,18.8V18c0-0.7-0.6-1.3-1.3-1.3H46.4c-1.4,0-2.6,1.2-2.6,2.6v7.7h-2.6v-9
												c0-2.1,1.7-3.9,3.9-3.9h11.6c0.7,0,1.3-0.6,1.3-1.3v-0.8l3.3,3.3L58,18.8z"/>
										</g>
									</g>
									<g>
										<g>
											<path style="&st0;" d="M39.6,6.8l-6.4-6.4c-0.5-0.5-1.3-0.5-1.8,0l-6.4,6.4c-0.5,0.5-0.5,1.3,0,1.8C25.1,8.9,25.4,9,25.8,9h2.6
												v19.3c0,0.7,0.6,1.3,1.3,1.3h5.2c0.7,0,1.3-0.6,1.3-1.3V9h2.6c0.7,0,1.3-0.6,1.3-1.3C39.9,7.4,39.8,7.1,39.6,6.8z M34.8,6.4
												c-0.7,0-1.3,0.6-1.3,1.3v19.3h-2.6V7.7c0-0.7-0.6-1.3-1.3-1.3h-0.8l3.3-3.3l3.3,3.3H34.8z"/>
										</g>
									</g>
								</g>
							</svg>

							Como Usar?</a>
						</li>
						<li>
							<a href="#">
							
							<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="61.3px" height="56px" viewBox="0 0 61.3 56" style="enable-background:new 0 0 61.3 56;"
								 xml:space="preserve">
								<defs>
								</defs>
								<g>
									<path style="&st0;" d="M61.1,16.4c-3-5.2-6.1-10.2-8.9-15.6c-0.6-1.2-2.6-0.9-3,0.4c-1.5,5.4-3.4,11.9-3.1,17.4
										c0,1.2,1.4,1.5,2.1,0.9c0.1,0.1,0.4,0.1,0.6,0.1c1.4-0.1,2.7-0.4,4-0.5c4.5,11.4,8.1,31.1-9.1,32.4c-1.7,0.1-3.1-0.2-4.1-1
										c2.4-2,4.4-4.5,5.4-7.4c1.4-3.7-1.4-11.7-6.5-9.5c-4.1,1.9-5,9.4-4.2,13.1c0.2,1.1,0.6,2.1,1,3c-0.4,0.3-0.6,0.4-1,0.6
										c-3.2,1.9-7.1,2.7-10.9,2.6c-2.7-0.1-4.4-1.6-5.4-3.6c3.4-1.7,6.1-4.5,6.9-7.4c1.5-6.1-6.4-10.1-9.6-4.1c-1.5,2.7-1.7,6.6-0.9,10
										c-0.1,0.1-0.4,0.1-0.5,0.2C3.1,52.4-0.1,38.8,6,32c0.5-0.6-0.1-1.6-0.9-1.1C-2.3,36.1-1.6,47.4,6.9,51c2.2,1,5.5,0.6,8.5-0.4
										c1.4,2.7,3.6,4.9,6.9,5.2c4.9,0.6,10.5-0.8,15-3.5c2.6,2.1,6.4,2.6,10.2,1.7c16.4-3.2,13.4-23.2,8.6-35.1c1.2-0.1,2.4-0.1,3.6-0.1
										C60.9,18.9,61.7,17.4,61.1,16.4z M17,46.4c-0.1-0.9-0.2-1.7-0.2-2.6c0-1.4,0.2-2.7,0.6-4c0.9-3,6.1-2,4.5,2
										C20.9,43.6,19,45.3,17,46.4z M36.9,44.3c0-1.7,0.8-8,3.4-8.1c2-0.1,2,5.4,1.9,6.2c-0.5,2.4-2.2,4.4-4.4,5.9
										C37.1,47,36.9,45.6,36.9,44.3z M51.5,6.3c1.7,3.2,3.6,6.4,5.5,9.5c-2.6,0.4-5.2,0.9-7.7,1.5C50.4,13.9,50.9,10,51.5,6.3z"/>
								</g>
							</svg>


							Percurso</a>
						</li>
						<li>
							<a href="#">
							
							<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In  -->
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="61.3px" height="70px" viewBox="0 0 61.3 70" style="enable-background:new 0 0 61.3 70;"
								 xml:space="preserve">
								<defs>
								</defs>
								<g>
									<g>
										<path style="&st0;" d="M59.8,40.1h-4.9L54.3,37c0.4,0,0.7-0.2,1-0.4c0.3-0.3,0.4-0.6,0.4-1v-3.9c0-0.4-0.1-0.8-0.4-1
											c-0.3-0.3-0.7-0.4-1.1-0.4h-2V16.7l1.8-3c0.1-0.2,0.2-0.5,0.2-0.7V8c0-0.8-0.7-1.5-1.5-1.5h-6.8c-0.8,0-1.4,0.7-1.4,1.5v5
											c0,0.2,0.1,0.4,0.1,0.6l1.5,3v13.5l-2.2,0c-0.8,0-1.4,0.7-1.4,1.5v3.8c0,0.8,0.6,1.4,1.4,1.5h0h0l-0.6,3.2H40v-6
											c0-0.8-0.7-1.4-1.5-1.4h-1.4v-2l2.5-1.8V0H26.7v28.9l2.5,1.8v2h-1.5c-0.8,0-1.4,0.6-1.5,1.4v0v6h-4.2v-25L0,9.8v24.3l7.1-1.7
											l6.3-1.5v9.3h-5c-0.8,0-1.5,0.6-1.5,1.4v24.2c0,2.4,1.9,4.3,4.3,4.3H57c2.3,0,4.3-1.9,4.3-4.3V41.5C61.3,40.7,60.6,40.1,59.8,40.1
											z M5.4,29.8l-2.5,0.6V13.5L5.4,14V29.8z M47.4,9.4h3.9v3.2l-1.8,3c-0.1,0.2-0.2,0.5-0.2,0.7v13.9H49V16.3c0-0.2-0.1-0.4-0.1-0.6
											l-1.5-3V9.4z M45.3,33.1l5.4,0l2,0v1l-7.2,0h-0.2V33.1z M51.9,40.1h-5.7l0.6-3.1l4.5,0L51.9,40.1z M29.6,2.9h7v0.6l-7,3.2V2.9z
											 M29.6,9.9l7-3.2v2.9l-7,3.2V9.9z M29.6,16l7-3.2v2.9l-7,3.2V16z M29.6,22.1l7-3.2v2.9l-7,3.2V22.1z M30.3,27.9l6.3-2.9v2.5
											l-2.5,1.8v3.5h-2v-3.4L30.3,27.9z M29.2,35.6h7.8v4.5h-7.8V35.6z M8.3,29.1V14.7l10.9,2.6v9l-4.7,1.1L8.3,29.1z M19.2,29.4v10.7
											h-2.9v-10L19.2,29.4z M58.4,65.8c0,0.8-0.6,1.4-1.4,1.4H11.1c-0.8,0-1.4-0.6-1.4-1.4v-5.5h48.7V65.8z M58.4,57.4H9.7V43h48.7V57.4
											z"/>
									</g>
								</g>
							</svg>


							Caixa de Ferramentas</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="credits">Desenvolvido por <a href="http://viniciusofp.com.br"><strong>viniciusofp</strong></a></div>

</div>

<?php
get_footer();
