<?php 
/*
Template Name: ty
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" href="/wp/wp-content/themes/viaflow/landing/css/style.css" type="text/css" />
<main>


	<section class="s-landing-banner s-landing-banner--ty">
		<img src="/wp/wp-content/themes/viaflow/landing/img/like.png" alt="Viaflow" class="s-landing-banner__like">
	</section>
	<section class="s-landing-ty">
		<div class="o-wrapper">
			<h1 class="s-landing-ty__ttl">Obrigado.</h1>
			<h2 class="s-landing-ty__sbttl">
				<?php 

				if (have_posts()){
					while (have_posts()) : the_post();

						the_content();

					endwhile;
				}
				?>
			</h2>
		</div>
	</section>


</main>


<?php get_footer(); ?>