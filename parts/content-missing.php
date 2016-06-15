<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e( 'Sorry, Geen resultaten.', 'jointswp' );?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Probeer opnieuw te zoeken.', 'jointswp' );?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<footer class="article-footer">
			<p><?php _e( 'Dit is het foutbericht in het parts/content-missing.php template bestand.', 'jointswp' ); ?></p>
		</footer>
		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e( 'Oops, Geen berichten gevonden', 'jointswp' ); ?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e( 'Oh nee. Er mist iets. Probeer alles nog eens te controleren.', 'jointswp' ); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<footer class="article-footer">
		  <p><?php _e( 'Dit is het foutbericht in het  parts/missing-content.php template bestand.', 'jointswp' ); ?></p>
		</footer>
			
	<?php endif; ?>
	
</div>
