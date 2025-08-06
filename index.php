<?php
	$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
	$url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Lobo - Bombas e Equipamentos Industriais</title>
	  <meta name="description" content="Soluções em bombas industriais, dosadoras, medidoras, pneumáticas e centrífugas. Potência e confiabilidade para o seu negócio.">
	  <link rel="canonical" href="<?= $url; ?>">

	  <!-- Favicon -->
	  <link rel="icon" href="images/favicon.png" type="image/x-icon">

	  <!-- Open Graph (Facebook, WhatsApp) -->
	  <meta property="og:type" content="website">
	  <meta property="og:title" content="Lobo - Bombas Industriais">
	  <meta property="og:description" content="Bombas dosadoras, pneumáticas e centrífugas para todo o Brasil.">
	  <meta property="og:image" content="<?= $url; ?>images/og-image.jpg"> 
	  <meta property="og:url" content="<?= $url; ?>">
	  <meta property="og:site_name" content="Lobo">

	  <!-- Twitter Card -->
	  <meta name="twitter:card" content="summary_large_image">
	  <meta name="twitter:title" content="Lobo - Bombas Industriais">
	  <meta name="twitter:description" content="Especialistas em soluções de bombeamento industrial.">
	  <meta name="twitter:image" content="<?= $url; ?>images/og-image.jpg">

	  <!-- Schema.org / JSON-LD -->
	  <script type="application/ld+json">
	  {
	    "@context": "https://schema.org",
	    "@type": "Organization",
	    "name": "Lobo",
	    "url": "<?= $url; ?>",
	    "logo": "<?= $url; ?>images/logo.webp",
	    "contactPoint": {
	      "@type": "ContactPoint",
	      "telephone": "+55 19 99617-2707",
	      "contactType": "Customer Service",
	      "areaServed": "BR"
	    },
	    "sameAs": [
	      "https://www.instagram.com/Lobobombas",
	      "https://wa.me/5519996172707"
	    ]
	  }
	  </script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="topo">
	<main>
		<!-- Menu -->
		<nav>
			<div class="container container-nav">
				<div class="logo-menu">
					<a href="#topo" title="Lobo Bombas">
						<img loading="lazy" src="images/logo.png" class="logo-full" alt="Lobo">
						<img loading="lazy" src="images/logo-min.png" class="logo-min" alt="Lobo">
					</a>
				</div>
				<div class="ent-menu-responsivo">
					<button class="close-menu" title="Fechar Menu">
						<i class="fa-solid fa-xmark"></i>
					</button>
					<ul>
						<li>
							<a class="menu-link active" href="#sobre" title="A Lobo">A Lobo</a>
						</li>
						<li>
							<a class="menu-link active" href="#topo" title="Lobo Store">Lobo Store</a>
						</li>
						<li>
							<a class="menu-link active" href="#planos" title="Planos">Planos</a>
						</li>
						<li>
							<a class="menu-link active" href="#blog" title="Blog">Blog</a>
						</li>
						<li>
							<a class="menu-link active" href="#provas" title="Provas 2025">Provas 2025</a>
						</li>
						<li>
							<a class="menu-link active" href="#faq" title="FAQ">FAQ</a>
						</li>
						<li>
							<span>APP Lobo</span>
							<a href="#">
								<i class="fab fa-apple"></i>
							</a>
							<a href="#">
								<i class="fab fa-android"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="social-menu">
					<a href="https://wa.me/5519996172707" target="_blank" title="Whatsapp Lobo">
						<i class="fab fa-whatsapp"></i>
					</a>
					<button class="open-menu" title="abrir menu">
						<i class="fa-solid fa-bars-staggered"></i>
					</button>
				</div>
			</div>
		</nav>
		<!-- Menu -->

		<!-- Header -->
		<header>
			<div class="sobre-header">
				<img src="images/sobre-banner.png" alt="">
				<div class="content-sobre-header">
					<h2 class="title-header">BLOG<span>LOBO</span></h2>
					<h6 class="sub-title-header">Conteúdos sobre treinos e estilo de vida Lobo.</h6>
				</div>
			</div>
			<div class="ent-header">
				<div class="carrosel">
					<img src="https://placehold.co/1920x700/EEE/31343C" class="desk" alt="">
					<img src="https://placehold.co/1080x1200/EEE/31343C" class="mobile" alt="">
				</div>
				<div class="carrosel">
					<img src="https://placehold.co/1920x700/EEE/31343C" class="desk" alt="">
					<img src="https://placehold.co/1080x1200/EEE/31343C" class="mobile" alt="">
				</div>
				<div class="carrosel">
					<img src="https://placehold.co/1920x700/EEE/31343C" class="desk" alt="">
					<img src="https://placehold.co/1080x1200/EEE/31343C" class="mobile" alt="">
				</div>
				<div class="carrosel">
					<img src="https://placehold.co/1920x700/EEE/31343C" class="desk" alt="">
					<img src="https://placehold.co/1080x1200/EEE/31343C" class="mobile" alt="">
				</div>
			</div>
		</header>
		<!-- Header -->

		<!-- Patrocinadores -->
		<section>
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h5>PATROCINADORES</h5>
						<div class="logos-patrocinio">
							<img src="images/pt-1.png" alt="">
							<img src="images/pt-2.png" alt="">
							<img src="images/pt-3.png" alt="">
							<img src="images/pt-4.png" alt="">
							<img src="images/pt-5.png" alt="">
						</div>
						<h5>PATROCINADORES</h5>
						<div class="logos-patrocinio">
							<img src="images/pt-6.png" alt="">
							<img src="images/pt-7.png" alt="">
							<img src="images/pt-8.png" alt="">
							<img src="images/pt-9.png" alt="">
							<img src="images/pt-10.png" alt="">
							<img src="images/pt-11.png" alt="">
							<img src="images/pt-12.png" alt="">
							<img src="images/pt-13.png" alt="">
							<img src="images/pt-14.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Patrocinadores -->

		<!-- Sobre -->
		<section id="sobre">
			<div class="container">
				<div class="row">
					<div class="w-6">
						<h1>A Lobo</h1>
						<p>Somos a Lobo, assessoria especializada em oferecer treinos direcionados para alcançar seu sonho no esporte. Através do nosso método de treinamentos com DNA USP, estamos comprometidos em impulsionar o desempenho dos nossos clientes. Nosso foco está em melhorar o condicionamento físico, a técnica e a estratégia, capacitando cada atleta a atingir seus objetivos esportivos.</p>
					</div>
					<div class="w-6">
						<div class="row itens-numbers">
							<div class="w-6 row">
								<div class="w-4">
									<img src="images/ic-1.png" alt="">
								</div>
								<div class="w-8">
									<h6>MAIS DE</h6>
									<h2>15 MIL</h2>
									<h6>ATLETAS<br>ATENDIDOS</h6>
								</div>
							</div>
							<div class="w-6 row">
								<div class="w-4">
									<img src="images/ic-2.png" alt="">
								</div>
								<div class="w-8">
									<h6>MAIS DE</h6>
									<h2>900</h2>
									<h6>ATLETAS NO BRASIL E NO MUNDO</h6>
								</div>
							</div>
							<div class="w-6 row">
								<div class="w-4">
									<img src="images/ic-3.png" alt="">
								</div>
								<div class="w-8">
									<h6>METODOLOGIA</h6>
									<h2>DNA</h2>
									<h6>USP</h6>
								</div>
							</div>
							<div class="w-6 row">
								<div class="w-4">
									<img src="images/ic-4.png" alt="">
								</div>
								<div class="w-8">
									<h6>O SEGREDO É</h6>
									<h2>VIVER</h2>
									<h6>O ESPORTE</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Sobre -->

		<!-- Proposito -->
		<section id="proposito">
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2>
							<img src="images/ic-5.png" alt="">
							<span>NOSSO PROPÓSITO</span>
						</h2>
						<h3>TRANSFORMAMOS VIDAS POR MEIO DO ESPORTE, COM SUPORTE INDIVIDUAL E UMA COMUNIDADE QUE INSPIRA EVOLUÇÃO.</h3>

						<div class="proposito-carrosel">
							<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
								<img src="images/videos/vd-1.png" alt="">
							</a>
							<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
								<img src="images/videos/vd-2.png" alt="">
							</a>
							<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
								<img src="images/videos/vd-3.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Proposito -->

		<!-- Videos lobo -->
		<section class="videos-lobo">
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2>
							<img src="images/ic-6.png" alt="">
							<span>COM A LOBO É DIFERENTE</span>
						</h2>

						<div class="carrosel-videos-lobo">
							<div class="nav-videos-lobo">
								<button class="btn-carrosel-video active" data-video="video-1">METODOLOGIA</button>
								<button class="btn-carrosel-video" data-video="video-2">EXPERIÊNCIA DOS ATLETAS</button>
								<button class="btn-carrosel-video" data-video="video-3">EVENTOS</button>
								<button class="btn-carrosel-video" data-video="video-4">INSTITUCIONAIS</button>
							</div>

							<div class="controle-video">
		                        <span class="slick-videos-lobo-prev" style="">
		                            <img src="images/carrosel-prev.svg" alt="carrosel prev">
		                        </span>
		                    </div>

							<div class="slick-videos-lobo">
								<div class="ent-video video-1">
									<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
										<img src="images/videos/vd-4.png" alt="">
									</a>
								</div>
								<div class="ent-video video-2">
									<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
										<img src="images/videos/vd-4.png" alt="">
									</a>
								</div>
								<div class="ent-video video-3">
									<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
										<img src="images/videos/vd-4.png" alt="">
									</a>
								</div>
								<div class="ent-video video-4">
									<a href="javascript:void(0)" class="open-video" data-url="https://youtube.com/embed/dfs87f8939">
										<img src="images/videos/vd-4.png" alt="">
									</a>
								</div>
							</div>

							<div class="controle-video">
		                        <span class="slick-videos-lobo-next" style="">
		                            <img src="images/carrosel-next.svg" alt="carrosel next">
		                        </span>
		                    </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Videos lobo -->

		<!-- Planos lobo -->
		<section>
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2>
							<img src="images/ic-6.png" alt="">
							<span>COM A LOBO É DIFERENTE</span>
							<span class="nav-plans">
								<button class="btn-plans active" data-plan="run">RUN</button>
								<button class="btn-plans" data-plan="triathlon">TRIATHLON</button>
							</span>
						</h2>

						<div class="ent-plans run">
							<div class="row">
								<div class="w-4">
									<h3>
										<span>GOLD</span>
										PLAN
										<i>POPULAR</i>
									</h3>

									<ul>
										<li><span>›</span> Treinos Livre acesso</li>
										<li><span>›</span> Entrada Kit Lobo Store + Brindes</li>
										<li><span>›</span> Alinhamento 1x/semana</li>
										<li><span>›</span> Ajustes na Planilha 1x/semana</li>
										<li><span>›</span> Alinhamento via ligação 1x por mês</li>
										<li><span>›</span> Dúvidas livre Seg. a Sex.</li>
										<li><span>›</span> Estratégia de Prova Whats + TrainningPeaks</li>
										<li><span>›</span> Treino de Força Específico para a modalidade</li>
										<li><span>›</span> Race Experience Aquisição por evento</li>
										<li><span>›</span> Profissional Coaches Lobo</li>
									</ul>
									
									<hr>

									<h4><strong>R$ 299,00</strong> / MÊS</h4>
									<h6>Pagamento recorrente</h6>
									<a href="https://wa.me/551100000000">
										<button>Quero ser lobo</button>
									</a>
								</div>
								<div class="w-4">
									<h3>
										<span>PLATINUM</span>
										PLAN
										<i></i>
									</h3>

									<ul>
										<li><span>›</span> Treinos Livre acesso</li>
										<li><span>›</span> Entrada Kit Lobo Store + Brindes</li>
										<li><span>›</span> Alinhamento 2-3x/semana</li>
										<li><span>›</span> Ajustes na Planilha Seg. a Sex.</li>
										<li><span>›</span> Alinhamento via ligação 1x por mês</li>
										<li><span>›</span> Dúvidas livre Seg. a Sex.</li>
										<li><span>›</span> Estratégia de Prova Telefone + TrainningPeaks</li>
										<li><span>›</span> Treino de Força Específico para a modalidade</li>
										<li><span>›</span> Race Experience Aquisição por evento</li>
										<li><span>›</span> Profissional Coaches Lobo</li>
									</ul>
									
									<hr>

									<h4><strong>R$ 385,00</strong> / MÊS</h4>
									<h6>Pagamento recorrente</h6>
									<a href="https://wa.me/551100000000">
										<button>Quero ser lobo</button>
									</a>
								</div>
								<div class="w-4">
									<h3>
										<span>BLACK</span>
										PLAN
										<i></i>
									</h3>

									<ul>
										<li><span>›</span> Treinos Livre acesso</li>
										<li><span>›</span> Entrada Kit Lobo Store + Brindes</li>
										<li><span>›</span> Alinhamento 1x/semana</li>
										<li><span>›</span> Ajustes na Planilha 1x/semana</li>
										<li><span>›</span> Alinhamento via ligação 1x por mës</li>
										<li><span>›</span> Dúvidas livre Seg. a Sex.</li>
										<li><span>›</span> Estratégia de Prova Whats + TrainningPeaks</li>
										<li><span>›</span> Treino de Força Específico para a modalidade</li>
										<li><span>›</span> Race Experience Grátis</li>
										<li><span>›</span> Profissional Coaches Rodrigo Lobo</li>
									</ul>
									
									<hr>

									<h4><strong>R$ 1.450,00</strong> / MÊS</h4>
									<h6>Pagamento recorrente</h6>
									<a href="https://wa.me/551100000000">
										<button>Quero ser lobo</button>
									</a>
								</div>
							</div>
						</div>

						<div class="ent-plans triathlon">
							<div class="row">
								<div class="w-4">
									<h3>
										<span>GOLD</span>
										PLAN
										<i>POPULAR</i>
									</h3>

									<ul>
										<li><span>›</span> Treinos Livre acesso</li>
										<li><span>›</span> Entrada Kit Lobo Store + Brindes</li>
										<li><span>›</span> Alinhamento 1x/semana</li>
										<li><span>›</span> Ajustes na Planilha 1x/semana</li>
										<li><span>›</span> Alinhamento via ligação 1x por mês</li>
										<li><span>›</span> Dúvidas livre Seg. a Sex.</li>
										<li><span>›</span> Estratégia de Prova Whats + TrainningPeaks</li>
										<li><span>›</span> Treino de Força Específico para a modalidade</li>
										<li><span>›</span> Race Experience Aquisição por evento</li>
										<li><span>›</span> Profissional Coaches Lobo</li>
									</ul>
									
									<hr>

									<h4><strong>R$ 299,00</strong> / MÊS</h4>
									<h6>Pagamento recorrente</h6>
									<a href="https://wa.me/551100000000">
										<button>Quero ser lobo</button>
									</a>
								</div>
								<div class="w-4">
									<h3>
										<span>PLATINUM</span>
										PLAN
										<i></i>
									</h3>

									<ul>
										<li><span>›</span> Treinos Livre acesso</li>
										<li><span>›</span> Entrada Kit Lobo Store + Brindes</li>
										<li><span>›</span> Alinhamento 2-3x/semana</li>
										<li><span>›</span> Ajustes na Planilha Seg. a Sex.</li>
										<li><span>›</span> Alinhamento via ligação 1x por mês</li>
										<li><span>›</span> Dúvidas livre Seg. a Sex.</li>
										<li><span>›</span> Estratégia de Prova Telefone + TrainningPeaks</li>
										<li><span>›</span> Treino de Força Específico para a modalidade</li>
										<li><span>›</span> Race Experience Aquisição por evento</li>
										<li><span>›</span> Profissional Coaches Lobo</li>
									</ul>
									
									<hr>

									<h4><strong>R$ 385,00</strong> / MÊS</h4>
									<h6>Pagamento recorrente</h6>
									<a href="https://wa.me/551100000000">
										<button>Quero ser lobo</button>
									</a>
								</div>
								<div class="w-4">
									<h3>
										<span>BLACK</span>
										PLAN
										<i></i>
									</h3>

									<ul>
										<li><span>›</span> Treinos Livre acesso</li>
										<li><span>›</span> Entrada Kit Lobo Store + Brindes</li>
										<li><span>›</span> Alinhamento 1x/semana</li>
										<li><span>›</span> Ajustes na Planilha 1x/semana</li>
										<li><span>›</span> Alinhamento via ligação 1x por mës</li>
										<li><span>›</span> Dúvidas livre Seg. a Sex.</li>
										<li><span>›</span> Estratégia de Prova Whats + TrainningPeaks</li>
										<li><span>›</span> Treino de Força Específico para a modalidade</li>
										<li><span>›</span> Race Experience Grátis</li>
										<li><span>›</span> Profissional Coaches Rodrigo Lobo</li>
									</ul>
									
									<hr>

									<h4><strong>R$ 1.450,00</strong> / MÊS</h4>
									<h6>Pagamento recorrente</h6>
									<a href="https://wa.me/551100000000">
										<button>Quero ser lobo</button>
									</a>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>
		<!-- Planos lobo -->

		<!-- Provas -->
		<section id="provas">
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2>
							<span>PROVAS 2025</span>
							<span class="nav-plans">
								<button class="btn-plans active" data-plan="ago">AGO</button>
								<button class="btn-plans" data-plan="set">SET</button>
								<button class="btn-plans" data-plan="out">OUT</button>
								<button class="btn-plans" data-plan="nov">NOV</button>
								<button class="btn-plans" data-plan="dez">DEZ</button>
							</span>
						</h2>

						<div class="provas-tab active ago">
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
						</div>
						<div class="provas-tab set">
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
						</div>
						<div class="provas-tab out">
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
						</div>
						<div class="provas-tab nov">
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
						</div>
						<div class="provas-tab dez">
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
							<div class="item-date">
								<img src="images/bandeiras/br.jpg" alt="">
								<div class="content-date">
									<h4>01/06<span>triathlon</span></h4>
									<div class="infos-location">
										<h5>Maratona de Porto Alegre</h5>
										<hr>
										<p><strong>Distância:</strong> 5, 10, 21, 42km, desafio (21 + 42km) kids <strong>Local:</strong> Porto Alegre</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Provas -->

		<!-- Bora Treinar -->
		<section id="bora-treinar">
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2>
							<img src="images/ic-7.png" alt="">
							<span>BORA TREINAR?</span>
							<i>Venha treinar com nossa alcateia. Veja os <strong>pontos de treinos.</strong></i>
						</h2>
						
						<div class="row">
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
							<div class="w-3 location">
								<a href="https://maps.goo.gl/">
									<h5>
										<i class="fa-solid fa-location-dot"></i>
										<span>CORRIDA</span>
									</h5>
									<p>
										<strong>Chácara Inglesa</strong><br>
										<strong>São Bernardo do Campo</strong><br>
										Av. Barão de Mauá<br>
										(Praça Quinzio Júlio Rossi)<br>
										<strong>Segunda, Quarta e Sexta-feira </strong><br>
										<strong>6:00 às 7:45</strong><br>
									</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Bora Treinar -->

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="w-3">
						<a href="#topo" title="Lobo Bombas">
							<img loading="lazy" src="images/logo.png" alt="Lobo">
						</a>
					</div>

					<div class="w-4 lined-separator"></div>

					<div class="w-4 social-icons">
						<h3>ACESSE NOSSAS REDES SOCIAIS</h3>
						<p class="social-links">
							<a href="https://wa.me/5519996172707" target="_blank" title="Whatsapp Lobo">
								<i class="fab fa-whatsapp"></i>
							</a>
							<a href="https://www.instagram.com/bombasLobo/" title="Instagram Lobo" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="https://www.instagram.com/bombasLobo/" title="Instagram Lobo" target="_blank">
								<i class="fab fa-youtube"></i>
							</a>
							<a href="https://www.instagram.com/bombasLobo/" title="Instagram Lobo" target="_blank">
								<i class="fa-brands fa-strava"></i>
							</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer -->

		<a href="#topo" title="Voltar ao topo">
			<button class="go-top">
				<i class="fa-solid fa-chevron-up"></i>
			</button>
		</a>
	</main>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script>
		// Scroll
		$('a[href^="#"]').on('click',function(e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top-100
			}, 500, 'swing', function(){});
		});

		$(document).ready(function() {
			// abrir e fechar menu
			$('.ent-menu-responsivo a').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('.ent-menu-responsivo button').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('section').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('header').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('.open-menu').on('click', function() {
				$('.ent-menu-responsivo').addClass('active');
			})

			// Voltar ao topo e menu fixo
			$(window).scroll(function () {
				if($(window).scrollTop() > 240) {
					$("nav").addClass('stick');
					$(".go-top").addClass('active');
				} else {
					$("nav").removeClass('stick');
					$(".go-top").removeClass('active');
				}
			});

			let $links = $('.menu-link');

			$(window).on('scroll', function () {
				let scrollPos = $(window).scrollTop() + ($(window).height() / 2);

				$links.each(function () {
					let href = $(this).attr('href');
					let target = $(href);

					if (target.length) {
						let top = target.offset().top;
						let bottom = top + target.outerHeight();

						if (scrollPos >= top && scrollPos < bottom) {
							$links.removeClass('active');
							$(this).addClass('active');
						}
					}
				});
			});

		    // Inicializa o slick com centerMode
		    $('.carrosel').slick({
		        dots: false,
		        arrows: true,
		        infinite: true,
		        speed: 400,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true, // Ativa centralização
		        centerPadding: '30%', // Espaço para mostrar anterior/próximo
		        prevArrow: $('.carrosel-prev'),
		        nextArrow: $('.carrosel-next')
		    });

		    // Função para atualizar nome do produto central
		    function atualizarNomeProduto() {
		        var slideAtual = $('.carrosel .slick-center img');
		        var nome = slideAtual.data('name');
		        $('.nome-produto').text(nome);
		    }

		    // Função para remover foco de slides ocultos (acessibilidade)
		    function corrigirAcessibilidade() {
		        $('.carrosel .slick-slide').each(function() {
		            const $el = $(this);
		            const isHidden = $el.attr('aria-hidden') === 'true';

		            if (isHidden) {
		                $el.attr('tabindex', '-1');
		                $el.find('*').attr('tabindex', '-1'); // evita foco em filhos
		            } else {
		                $el.removeAttr('tabindex');
		                $el.find('*').removeAttr('tabindex');
		            }
		        });
		    }

		    // Chama ao iniciar
		    atualizarNomeProduto();
		    corrigirAcessibilidade();

		    // Chama sempre que mudar o slide
		    $('.carrosel').on('afterChange', function(event, slick, currentSlide){
		        atualizarNomeProduto();
		        corrigirAcessibilidade();
		    });
		});
	</script>
</body>
</html>