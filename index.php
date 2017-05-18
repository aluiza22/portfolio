<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Portfolio | anadev</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/png" href="fav2.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='css/reset.css' rel='stylesheet' type='text/css'>
		<link href='css/basic.css' rel='stylesheet' type='text/css'>
		<link href='css/styles.css' rel='stylesheet' type='text/css'>
	</head>

	<!-- SVG Background based on http://jsbin.com/deboliqiji/1/edit?html,output -->
		<svg xmlns='http://www.w3.org/2000/svg' width='8' height='8' class="svbg">
			<path d='M-2 10L10 -2ZM10 6L6 10ZM-2 2L2 -2' stroke='#372B2E' stroke-width='4.5'/>
		</svg>
		<svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' class="svbg">
			<linearGradient id='g' x2='1' y2='1'>
				<stop stop-color='#CC09EE'>
		      <animate attributeName="stop-color" values="#CC09EE;#87244C;#6AFAA9;#CC09EE" dur="10s" repeatCount="indefinite"/>
		    </stop>
				<stop offset='50%' stop-color='#87244C'>
		      <animate attributeName="stop-color" values="#87244C;#6AFAA9;#CC09EE;#87244C" dur="10s" repeatCount="indefinite"/>
		    </stop>
		    <stop offset='100%' stop-color='#6AFAA9'>
		      <animate attributeName="stop-color" values="#6AFAA9;#CC09EE;#87244C;#6AFAA9" dur="10s" repeatCount="indefinite"/>
		    </stop>
			</linearGradient>
			<rect width='100%' height='100%' fill='url(#g)'/>
		</svg>
	<!-- / SVG Background based on http://jsbin.com/deboliqiji/1/edit?html,output -->
	
	<?php include_once("css/svg/symbol-defs.svg"); //SVG Icons ?> 

	<body>
		<header>
			<h1>Ana Luiza da Silva</h1>
			<span id="me">web developer</span>
			<div class="socialIcons">
				<a href="tel:+5547991894933">
					<svg viewBox="0 0 100 100" class="social-icon icon-phone">
					  <use xlink:href="#icon-phone"></use>
					</svg>
				</a>
				<a href="mailto:aluiza.silva22@gmail.com">
					<svg viewBox="0 0 100 100" class="social-icon icon-mail">
					  <use xlink:href="#icon-mail"></use>
					</svg>
				</a>
				<a href="https://br.linkedin.com/in/aluizasilva22" target="_blank">
					<svg viewBox="0 0 100 100" class="social-icon icon-linkedin2">
					  <use xlink:href="#icon-linkedin2"></use>
					</svg>
				</a>
				<a href="https://github.com/aluiza22" target="_blank">
					<svg viewBox="0 0 100 100" class="social-icon icon-github">
					  <use xlink:href="#icon-github"></use>
					</svg>
				</a>
				<div id="SkypeButton_Call_ana.luiza.s_1" class="skypeLink social-icon"></div>
				<a href="https://plus.google.com/u/0/104048577558453957903" target="_blank">
					<svg viewBox="0 0 100 100" class="social-icon icon-google-plus">
					  <use xlink:href="#icon-google-plus"></use>
					</svg>
				</a>
				<a href="https://twitter.com/anadev22" target="_blank">
					<svg viewBox="0 0 100 100" class="social-icon icon-twitter">
					  <use xlink:href="#icon-twitter"></use>
					</svg>
				</a>
				<a href="https://www.facebook.com/ana.l.dasilva.75" target="_blank">
					<svg viewBox="0 0 100 100" class="social-icon icon-facebook">
					  <use xlink:href="#icon-facebook"></use>
					</svg>
				</a>
				<a href="https://www.instagram.com/nalu2204/" target="_blank">
					<svg viewBox="0 0 100 100" class="social-icon icon-instagram">
					  <use xlink:href="#icon-instagram"></use>
					</svg>
				</a>
			</div>
			<!--<a id="lang" href="/portfolio/pt/" hreflang="pt">Português</a>-->
		</header>
		<main>	
		
			<section id="projects">
				<h2 class='sectionTitle'>Projects</h2>
				<ul class="projects">
					<li>
						<a target="_blank" href="https://vmspot.com.br" style="background-image: url(projects/images/thumbs/ambientelab.jpg);">
							<span>VM Spot</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="http://importadorakima.com.br" style="background-image: url(projects/images/thumbs/kima.jpg);">
							<span>Loja Kima</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="#" style="background-image: url(projects/images/thumbs/anapaulapujol.jpg);">
							<span>Instituto Paula Pujol</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="http://atmosbeach.com.br" style="background-image: url(projects/images/thumbs/atmos.jpg);">
							<span>Atmos Beach</span>
						</a>
					</li>
					<!--<li class="invert">
						<a href="#" style="background-image: url(projects/images/iwx.jpg);">
							<span>IWX Web</span>
						</a>
					</li>-->
					<li class="invert">
						<a target="_blank" href="http://mdoiscabeleireiros.com.br" style="background-image: url(projects/images/thumbs/mdois.jpg);">
							<span>MDois Cabelereiros</span>
						</a>
					</li>
					<li class="invert">
						<a target="_blank" href="http://rochadecoracoes.com.br" style="background-image: url(projects/images/thumbs/rocha.jpg);">
							<span>Rocha decorações</span>
						</a>
					</li>
					<li class="invert">
						<a target="_blank" href="http://atacadopavan.com" style="background-image: url(projects/images/thumbs/pavan.jpg);">
							<span>Pavan</span>
						</a>
					</li>
					<li class="invert">
						<a target="_blank" href="http://itacolomieventos.com.br" style="background-image: url(projects/images/thumbs/itacolomi.jpg);">
							<span>Itacolomi</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="http://santatrilha.com.br" style="background-image: url(projects/images/thumbs/santatrilha.jpg);">
							<span>Santa Trilha</span>
						</a>
					</li>
					<li>
						<a target="_blank" href="http://casanobreconstrutora.com.br" style="background-image: url(projects/images/thumbs/casanobre.jpg);">
							<span>Casa Nobre</span>
						</a>
					</li>
				</ul>
			</section>
			
			<section id="about">
				<h2 class='sectionTitle'>About me</h2>
				<div class="row">
					<div id="sumary" class="col col70 middle">
						<p>I am a technology lover from Brazil who started working with front end development at first year of college and got passionate about it. Then, I started adventuring myself at back end development, because challenges are never enough. </p>
						<p>Later, I had the amazing opportunitty to study abroad and that gave me a multicultural vision and awesome experiences, but also made me realize I have a lot to learn about the world, myself and my work.</p>
						<p>And I believe that when we do what we like, we can learn faster and get better results.</p>
					</div>
				</div>
				<div class="row">
					<div class="col col70 pr">
						<div class="timeline">
							<h2 class="title">Experiences</h2>
						    <h2 class="shapped">2009</h2>
						    <ul>
						      <li>
						      	<svg viewBox="0 0 398.97 398.97" class="timeline-icon icon-college">
								  <use xlink:href="#icon-college"></use>
								</svg>
						        <h3>Technician, Computing</h3>
						        <h4>Instituto Federal Catarinense - Campus Camboriú</h4>
						        <p>I learned software development, operational systems instalation and its features, hadware maintenance, network projects and implatations.</p>
						        <time>2009 – 2011</time>
						      </li>
						    </ul>
						    <h2 class="shapped">2010</h2>
						    <ul>
						      <li style="display: none;"></li>
						      <li>
						      	<svg viewBox="0 0 511.626 511.627" class="timeline-icon icon-briefcase">
								  <use xlink:href="#icon-briefcase"></use>
								</svg>
						        <h3>IT Intern</h3>
						        <h4>Dr. Chip</h4>
						        <p>I learned and worked with hardware maintenance.</p>
						        <time>September 2010 – October 2011</time>
						      </li>
						    </ul>
						    <h2 class="shapped">2013</h2>
						    <ul>
						      <li class="active">
						      	<svg viewBox="0 0 398.97 398.97" class="timeline-icon icon-college">
								  <use xlink:href="#icon-college"></use>
								</svg>
						        <h3>Technologist, Internet Systems</h3>
						        <h4>Universidade do Vale do Itajaí</h4>
						        <p>I am learning to identify, analyze, design, implement, deploy, evaluate and maintain efficient and secure web systems, based on free software and based on appropriate methodologies and techniques, following ethical and scientific precepts</p>
						        <time>2013 – Present [2017]</time>
						      </li>
						      <li>
						      	<svg viewBox="0 0 511.626 511.627" class="timeline-icon icon-briefcase">
								  <use xlink:href="#icon-briefcase"></use>
								</svg>
						        <h3>Front-end Developer</h3>
						        <h4>IWX Web</h4>
						        <p>I developed static websites and the front end part of e-commerce Magento stores.</p>
						        <time>March 2013 – January 2014</time>
						      </li>
						    </ul>
						    <h2 class="shapped">2014</h2>
						    <ul>
						      <li>
						      	<svg viewBox="0 0 511.626 511.627" class="timeline-icon icon-briefcase">
								  <use xlink:href="#icon-briefcase"></use>
								</svg>
						        <h3>Web Developer</h3>
						        <h4>BPM Comunicações</h4>
						        <p>I developed websites and web systems using HTML, CSS, JavaScript, PHP and MySQL.</p>
						        <time>January 2014 – July 2015</time>
						      </li>
						      <li>
						      	<svg viewBox="0 0 511.626 511.627" class="timeline-icon icon-briefcase">
								  <use xlink:href="#icon-briefcase"></use>
								</svg>
						        <h3>Marketing Manager of Outgoing Exchanges</h3>
						        <h4>AIESEC in Balneário Camboriú</h4>
						        <p>I analysed conversion numbers of people registering and doing the AIESEC exchange, from different marketing medias, and monitor processes of the customer service team.</p>
						        <time>September 2014 – July 2015</time>
						      </li>
						    </ul>
						    <h2 class="shapped">2015</h2>
						    <ul>
						      <li>
						      	<svg viewBox="0 0 398.97 398.97" class="timeline-icon icon-college">
								  <use xlink:href="#icon-college"></use>
								</svg>
						        <h3>Exchange, Information Systems</h3>
						        <h4>New Jersey Institute of Technology</h4>
						        <p>Brazilian Scientific Mobility Program Student – USA ​(08/2015 – 08-2016) Competitive scholarship program, provides students atriculated at Brazilian universities an opportunity to pursue study at universities in many countries.</p>
						        <time>2015 – 2016</time>
						      </li>
						    </ul>
						    <h2 class="shapped">2016</h2>
						    <ul>
						      <li style="display: none;"></li>
						      <li class="active">
						      	<svg viewBox="0 0 511.626 511.627" class="timeline-icon icon-briefcase">
								  <use xlink:href="#icon-briefcase"></use>
								</svg>
						        <h3>Web Developer</h3>
						        <h4>PrismaFive</h4>
						        <p>I develop and take care of Magento stores and apps integrated with pharmacy ERP system.</p>
						        <time>October 2016 – Present</time>
						      </li>
						    </ul>
						</div>
					</div>
					<div class="col col30 pl">
						<h3 class='sectionSubtitle'>Skills</h3>
						<ul class="skills">
							<li>HTML</li>
							<li>CSS </li>
							<li>JavaScript</li>
							<li>JQuery</li>
							<li>PHP</li>
							<li>Magento</li>
							<li>Wordpress</li>
							<li>XML</li>
							<li>MySQL</li>
							<li>PostgreSQL</li>
							<li>Adobe Photoshop</li>
							<li>Windows</li>
							<li>Linux</li>
							<li>Git</li>
						</ul>							
						<h3 class='sectionSubtitle'>Knowledge</h3>
						<ul class="know">
							<li>MongoDB</li>
							<li>SVN</li>
							<li>Webservices</li>
							<li>Java</li>
							<li>Cordova</li>
							<li>Mobile</li>
							<li>REST</li>
						</ul>
						<h3 class='sectionSubtitle'>Side Projects</h3>
							<ul class='projects'>
								<li>
									<a target="_blank" href="http://ana.projetointegrador.org/ParkinGPS/" style="background-image: url(projects/images/thumbs/parkingps.jpg);">
										<span>ParginGPS</span>
									</a>
								</li>
								<li>
									<a target="_blank" href="http://ana.projetointegrador.org/connuntius/" style="background-image: url(projects/images/thumbs/connuntius.jpg);">
										<span>Connuntius</span>
									</a>
								</li>
								<li>
									<a target="_blank" href="http://busao-sisnetpi.rhcloud.com/map/" style="background-image: url(projects/images/thumbs/busaoapp.jpg);">
										<span>Busao App</span>
									</a>
								</li>
								<li>
									<a target="_blank" href="/portfolio/projects/Giforecast" style="background-image: url(projects/images/thumbs/giforecast.jpg);">										
										<span>Giforecast</span>
									</a>
								</li>
								<li>
									<a target="_blank" href="/portfolio/projects/Wordinary" style="background-image: url(projects/images/thumbs/wordinary.jpg);">
										<span>Wordinary</span>
									</a>
								</li>
								<li>
									<a target="" href="#" style="background-image: url(projects/images/thumbs/plugged.png);">
										<span style="background:#babaca">Plugged</span>
									</a>
								</li>
							</ul>
						<!--<h3 class='sectionSubtitle'>Statistics</h3>
						<ul>
							<li>Projects</li>
							<li>Cups of coffee</li>
							<li>Lines</li>
							<li>Layouts</li>
						</ul>-->
					</div>
					
				</div>
			</section>
			<section id="contact">
				<h2>Contacts</h2>
				<div class="row">
					<div class="footer-info">
						<a href="">
							<svg viewBox="0 0 100 100" class="social-icon icon-phone">
							  <use xlink:href="#icon-phone"></use>
							</svg>
							<span>+55 47 9 91894933</span>
						</a>
						<a href="">
							<svg viewBox="0 0 100 100" class="social-icon icon-mail">
							  <use xlink:href="#icon-mail"></use>
							</svg>
							<span>aluiza.silva22@gmail.com</span>
						</a>
					</div>
					<div class="footer-si">
						<a href="https://br.linkedin.com/in/aluizasilva22" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-linkedin2">
							  <use xlink:href="#icon-linkedin2"></use>
							</svg>
						</a>
						<a href="https://github.com/aluiza22" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-github">
							  <use xlink:href="#icon-github"></use>
							</svg>
						</a>
						<!--<a href="" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-skype">
							  <use xlink:href="#icon-skype"></use>
							</svg></a>-->
						<div id="SkypeButton_Call_ana.luiza.s_2" class="skypeLink social-icon"></div>
						
						<a href="https://plus.google.com/u/0/104048577558453957903" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-google-plus">
							  <use xlink:href="#icon-google-plus"></use>
							</svg>
						</a>
						<a href="https://twitter.com/anadev22" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-twitter">
							  <use xlink:href="#icon-twitter"></use>
							</svg>
						</a>
						<a href="https://www.facebook.com/ana.l.dasilva.75" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-facebook">
							  <use xlink:href="#icon-facebook"></use>
							</svg>
						</a>
						<a href="https://www.instagram.com/nalu2204/" target="_blank">
							<svg viewBox="0 0 100 100" class="social-icon icon-instagram">
							  <use xlink:href="#icon-instagram"></use>
							</svg>
						</a>
					</div>					
				</div>
			</section>
		</main>

		<!-- SCRIPTS -->
		<script type="text/javascript" src='js/main.js'></script>
		<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
		<script type="text/javascript">
		 Skype.ui({
		 "name": "chat",
		 "element": "SkypeButton_Call_ana.luiza.s_1",
		 "participants": ["ana.luiza.s"],
		 "imageColor": "white",
		 "imageSize": 24
		 });
		 Skype.ui({
		 "name": "chat",
		 "element": "SkypeButton_Call_ana.luiza.s_2",
		 "participants": ["ana.luiza.s"],
		 "imageColor": "white",
		 "imageSize": 24
		 });
		 </script>
	</body>
</html>
