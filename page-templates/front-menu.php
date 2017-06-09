<?php
/*
Template Name: Front page with menu
*/
get_header(); ?>

<div class="main-wrap full-width" role="main">
	<header class="text-center tagline">
		<h1>Zdrada Niewierność Romans</h1>
		<h4 class="subheader">
			<ul class="no-bullet">
				<li>Czym jest zdrada?</li>
				<li>Jak sie odnaleźć?</li>
				<li>Jak postępować?</li>
			</ul>
		</h4>
	</header>

	<section class="visualMenu">

		<div class="small-6 medium-3 columns">
			<a class="infidelity" href="<?php echo esc_url( home_url( '/zdradzono-mnie/' ) ); ?>" alt="Zdradzono mnie">
			</a>
		</div>

		<div class="small-6 medium-3 columns">
			<a class="romance" href="<?php echo esc_url( home_url( '/mam-romans/' ) ); ?>" alt="Mam romans">
			</a>
		</div>

		<div class="small-6 medium-3 columns">
			<a class="stories" href="<?php echo esc_url( home_url( '/historie/' ) ); ?>" alt="Historie">
			</a>
		</div>

		<div class="small-6 medium-3 columns">
			<a class="support" href="<?php echo esc_url( home_url( '/wsparcie/' ) ); ?>" alt="Wsparcie">
			</a>
		</div>
	</section>
	<section class="invitation row \">
		<article class="small-1 columns">
			&nbsp;
		</article>
		<article class="small-10 columns">

			<h5 class="white-color text-center">Jakiś tekst na stronie głównej zchęcający do dalszego czytania</h5>
		</article>
		<article class="small-1 columns">
			&nbsp;
		</article>
	</section>
</div>



<?php get_footer();
