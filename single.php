<?php get_header(); ?>
<?php the_content(); ?>
	

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<article class="containeur">
			<h2><?php the_title(); ?></h2>
      
        	<?php the_post_thumbnail(); ?>
            <div class="conteneur">
				<p class="post__meta">
					Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
					par <?php the_author(); ?> • <?php comments_number(); ?>
				</p>
			</div>
      		<?php the_excerpt(); ?>
              
      		<p>
            	<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>