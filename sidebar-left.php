<div id="sidebar1" class="sidebar large-4 medium-4 large-pull-8 medium-pull-8 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Activeer enkele widgets a.u.b.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>