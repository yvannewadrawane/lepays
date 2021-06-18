<?php get_header(); ?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <h1><?php the_title(); ?></h1>
    <div class="post">
    <article class="post">
        <div class="row">
            <div class="col-md-6">
			    <h2><?php the_title(); ?></h2>

        	<?php the_post_thumbnail(); ?>
            
            <p class="post__meta">
            <div class="row">
            <div class="col-md-6">
                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
                par <?php the_author(); ?> • <?php comments_number(); ?>
            </p>

      		<?php the_excerpt(); ?>
      		<p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </div>
        </div>
        </div>
       
        <div class="row">
            <div class="col-md-6 ">
                <div class="attachment-post-thumbnail"></div>
                <div class="p"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6"></div>
                <div class="p"></di>

        </div>
	</article>
    </div>
 

		<div class="row">
             <div class="col-md-3">
                 <div class="thumnail">
                 <a href="image/aspargus.jpg">
                                <img src="http://localhost/lepays/wp-content/uploads/2021/06/6c8d4c04-4f30-39ee-8df1-fd0f0a2a776e.jpg" alt="nbhfg" style="width: 1px;">
                            </a>
                </div>     
            </div>
        </div>

		


        
<?php the_content(); ?> 
<?php endwhile; endif; ?>


<?php get_sidebar();?> 
    <div class="sid">
            <div id="search-4" class="widget widget_search">
        <p class="widgettitle">Rechercher</p>
    <div id="text-2" class="widget widget_text">
        <p class="widgettitle">A propos</p>
        
        </div>


<?php get_footer(); ?>