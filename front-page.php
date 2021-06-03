<?php get_header(); ?>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    	<h1><?php the_title(); ?></h1>

        <article class="post">
			<h2><?php the_title(); ?></h2>
        	<?php the_post_thumbnail(); ?>
            <p class="post__meta">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>
      		<?php the_excerpt(); ?>
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
		</article>

		<div class="row">
             <div class="col-md-12 col-lg-3">
                 <div class="thumnail">
                            <a href="image/aspargus.jpg">
                                <img src="http://localhost/lepays/wp-content/uploads/2021/06/6c8d4c04-4f30-39ee-8df1-fd0f0a2a776e.jpg" alt="nbhfg" style="width:100%">
                            </a>
                </div>
        </div>

		


    
    	<?php the_content(); ?>

      
	<?php endwhile; endif; ?>


	<?php get_sidebar();?>
	
<?php get_footer(); ?>