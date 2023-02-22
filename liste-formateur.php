<?php
    $titre = "liste-formateur";
    $pageActive = "liste-formateur";
    include("header.php");
?>
<!-- liste formateur
1.    Photo d’identité
2.    Nom
3.    Prénom
4.    Mail
5.    Rôle (Président, Associé, formateur)
6.    Téléphone
7.    Réseaux sociaux
7.1.    LinkedIn
7.2.    Twitter
8.    Certifications (liste d’icônes, avec des icônes à 50% de la photo, On doit pouvoir montrer 6 icônes de certifications)
8.1.    PMP
8.2.    PSM1
8.3.    DASSM
8.4.    Etc.
9.    Domaines de prédilections (liste de thèmes, on doit pouvoir voir au moins 3 domaines d’une liste déroulante infinie)
9.1.    Agilité
9.2.    Gestion de projet
9.3.    Sécurité
9.4.    Etc.
10.    Les liens vers des conférences youtube (on doit pouvoir voir au moins 3 liens vers 3 conférences sur une liste infinie)
10.1.    Nom de la conférence et date
11.    Présence à des évènements (on doit pouvoir voir au moins 3 présences à des évènements sur une liste infinie)

-->
<!-- Main -->
<section id="main">
					<div class="container">
						<div class="row">

							<!-- Sidebar -->
								<div id="sidebar" class="col-12-medium">

									<!-- Highlights -->
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Jean-Yves KLEIN</a></h3>
															</header>
															<span class="image left "><img class="img-formateurs" src="images/pic06.jpg" alt="" /></span>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a target="_blank" href="https://www.linkedin.com/in/jean-yves-klein/" class="button icon solid fa-file">LinkedIn</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Frank ORTEGA</a></h3>
															</header>
															<a href="#" class="image left "><img class="img-formateurs" src="images/pic09.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a target="_blank" href="#" class="button icon solid fa-file">LinkedIn</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Yannis MARTIN</a></h3>
															</header>
															<a href="#" class="image left "><img class="img-formateurs" src="images/pic08.jpg" alt="" /></a>
															<p>Professionnel expérimenté des Systèmes d'Information, je soutiens dorénavant les entreprises dans les changements technologiques impactant leurs métiers. J’aide à coconstruire leur transformation numérique en étudiant leurs stratégies d'évolution.</p>
															<p>Au cours de mes expériences, j’ai pu gérer des équipes pluridisciplinaires et multinationales, internes comme externes, des infrastructures variées dans le monde entier à plus récemment du soutien aux équipes de développement.</p>
															<p>Ayant œuvrer dans des secteurs très différents (Formation, Energie, Logistique, Industrie, Commerce, Transport, …), j’ai mené un très large éventail de missions m’amenant aujourd’hui à soutenir mes clients sur leurs innovations techniques et méthodologiques (cloud, agilité, intégration continue, DevOps, etc.)..</p>
															<ul class="actions">
																<li><a target="_blank" href="#" class="button icon solid fa-file">LinkedIn</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Matthieu LECOUPEAU</a></h3>
															</header>
															<a href="#" class="image left "><img class="img-formateurs" src="images/pic07.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a target="_blank" href="https://www.linkedin.com/in/matthieulecoupeau/" class="button icon solid fa-file">LinkedIn</a></li>
															</ul>
														</article>

												</li>
											</ul>
										</section>

								</div>

						</div>
					</div>
				</section>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

<?php
    include("footer.php");
?>