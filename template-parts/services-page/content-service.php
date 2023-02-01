<?php
/**
 * Service Content
 *
 * @package OXHU
 */

$serviceImage  = get_field( 'service_image' );
$serviceButton = get_field( 'service_button' );
?>



<!--    <img src='--><?//= $serviceImage['url'] ?><!--' alt='--><?//= $serviceImage['alt'] ?><!--' class='service__image'>-->
    <h1 class='service__title'><?= get_the_title() ?></h1>
<!--    <h2 class='service__price'>--><?//= get_field( 'service_price' ) ?><!--</h2>-->
    <p class='service__excerpt'><?= get_field( 'service_excerpt' ) ?></p>

	  <?php
	  if ( have_rows( 'service_benefits' ) ): ?>
		  <?php
		  while ( have_rows( 'service_benefits' ) ):
			  the_row();

			  // Get sub field values.
			  $benefit1 = get_sub_field( 'benefit_1' );
			  $benefit2 = get_sub_field( 'benefit_2' );
			  $benefit3 = get_sub_field( 'benefit_3' );
			  ?>

            <ul class='service__benefit-list' role='list'>
              <li class='service__benefit-item'><?= $benefit1 ?></li>
              <li class='service__benefit-item'><?= $benefit2 ?></li>
              <li class='service__benefit-item'><?= $benefit3 ?></li>
            </ul>


		  <?php
		  endwhile; ?>
		  <?php
		  wp_reset_postdata() ?>
	  <?php
	  endif; ?>


    <!--<a href='--><?
	  //= get_permalink( get_the_ID() ) ?><!--' class='service__button btn'>sign up</a>-->


	  <?php
	  if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
			<?php
			edit_post_link( sprintf( wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */ __( 'Edit <span class="screen-reader-text">%s</span>',
				'oxhu' ), array(
				'span' => array(
					'class' => array(),
				),
			) ), wp_kses_post( get_the_title() ) ), '<span class="edit-link">', '</span>' );
			?>
        </footer><!-- .entry-footer -->
	  <?php
	  endif; ?>
</article><!-- #post-<?php
the_ID(); ?> -->