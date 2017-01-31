<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Portfolio | anadev</title>
		<meta charset="utf-8">
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
			<h1>title</h1>
			<span>subtitle that can be larger</span>
			<div class="socialIcons">
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-linkedin2">
					  <use xlink:href="#icon-linkedin2"></use>
					</svg>
				</a>
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-github">
					  <use xlink:href="#icon-github"></use>
					</svg>
				</a>
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-skype">
					  <use xlink:href="#icon-skype"></use>
					</svg>
				</a>
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-google-plus">
					  <use xlink:href="#icon-google-plus"></use>
					</svg>
				</a>
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-twitter">
					  <use xlink:href="#icon-twitter"></use>
					</svg>
				</a>
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-facebook">
					  <use xlink:href="#icon-facebook"></use>
					</svg>
				</a>
				<a href="">
					<svg viewBox="0 0 100 100" class="social-icon icon-instagram">
					  <use xlink:href="#icon-instagram"></use>
					</svg>
				</a>
			</div>
			<a id="lang" href="/pt/" hreflang="pt">Portuguese</a>
		</header>
		<main>	
			<section>
				<h2 class='sectionTitle'>About me</h2>
				<div class="row">
					<div class="col col100">
						<p>I am a technology lover from Brazil who started working with front end development at first year of college and got passionate about it. Then, I started adventuring myself at back end development, because challenges are never enough. </p>
						<p>Later, I had the amazing opportunitty to study abroad and that gave me a multicultural vision and awesome experiences, but also made me realize I have a lot to learn about the world, myself and my work.</p>
						<p>And I believe that when we do what we like, we can learn faster and get better results.</p>
					</div>
				</div>
				<div class="row">
					<div class="col col70 pr">
						<div class="timeline">
							<h2 class="title">Experiences</h2>
						    <h2>2009</h2>
						    <ul>
						      <li>
						        <h3>Technician, Computing</h3>
						        <h4>Instituto Federal Catarinense - Campus Camboriú</h4>
						        <p>XXXX</p>
						        <time>2009 – 2011</time>
						      </li>
						    </ul>
						    <h2>2010</h2>
						    <ul>
						      <li>
						        <h3>IT Intern</h3>
						        <h4>Dr. Chip</h4>
						        <p>I learned and worked with hardware maintenance.</p>
						        <time>September 2010 – October 2011</time>
						      </li>
						    </ul>
						    <h2>2013</h2>
						    <ul>
						      <li>
						        <h3>Technologist, Internet Systems</h3>
						        <h4>Universidade do Vale do Itajaí</h4>
						        <p>XXXX</p>
						        <time>2013 – 2017</time>
						      </li>
						      <li>
						        <h3>Front-end Developer</h3>
						        <h4>IWX Web</h4>
						        <p>I developed static websites and the front end part of e-commerce Magento stores.</p>
						        <time>March 2013 – January 2014</time>
						      </li>
						    </ul>
						    <h2>2014</h2>
						    <ul>
						      <li>
						        <h3>Web Developer</h3>
						        <h4>BPM Comunicações</h4>
						        <p>I developed websites and web systems using HTML, CSS, JavaScript, PHP and MySQL.</p>
						        <time>January 2014 – July 2015</time>
						      </li>
						      <li>
						        <h3>Marketing Manager of Outgoing Exchanges</h3>
						        <h4>AIESEC in Balneário Camboriú</h4>
						        <p>I analysed conversion numbers of people registering and doing the AIESEC exchange, from different marketing medias, and monitor processes of the customer service team.</p>
						        <time>September 2014 – July 2015</time>
						      </li>
						    </ul>
						    <h2>2015</h2>
						    <ul>
						      <li>
						        <h3>Exchange, Information Systems</h3>
						        <h4>New Jersey Institute of Technology</h4>
						        <p>Brazilian Scientific Mobility Program Student – USA ​(08/2015 – 08-2016) Competitive scholarship program, provides students atriculated at Brazilian universities an opportunity to pursue study at universities in many countries.</p>
						        <time>2015 – 2016</time>
						      </li>
						    </ul>
						    <h2>2016</h2>
						    <ul>
						      <li>
						        <h3>Web Developer</h3>
						        <h4>PrismaFive</h4>
						        <p>I take care of Magento stores and apps integrated with pharmacy system.</p>
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
							<ul>
								<li>ParginGPS</li>
								<li>Connuntius</li>
								<li>Busao App</li>
								<li>Giforecast</li>
								<li>Wordinary</li>
								<li>Plugged</li>
							</ul>
						<h3 class='sectionSubtitle'>Statistics</h3>
						<ul>
							<li>Projects</li>
							<li>Cups of coffee</li>
							<li>Lines</li>
							<li>Layouts</li>
						</ul>
					</div>
					
				</div>
				<div class="row">
					<div class="col col50 pr">
						
					</div>
					<div class="col col50 pl">
						
				</div>
			</section>
			<section>
				<h2 class='sectionTitle'>Projects</h2>
				<ul>
					<li>Ambiente Lab</li>
					<li>Loja Kima</li>
					<li>Instituto Paula Pujol</li>
					<li>Atmos Beach</li>
					<li>IWX Web</li>
					<li>MDois Cabelereiros</li>
					<li>Rocha decorações</li>
					<li>Merkbras</li>
					<li>Itamirim?</li>
					<li>Santa Trilha</li>
					<li>Casa Nobre</li>
				</ul>
			</section>
			<section>
				<h2 class='sectionTitle'>Contacts</h2>
				<div>
					<a href="">email</a>
					<a href="">celular</a>
					<a href="">linkedin</a>
					<a href="">facebook</a>
					<a href="">g+</a>
					<a href="">instagram</a>
					<a href="">github</a>
				</div>
			</section>
		</main>

		<!-- SCRIPTS -->
		<script type="text/javascript" src='js/main.js'></script>
	</body>
</html>