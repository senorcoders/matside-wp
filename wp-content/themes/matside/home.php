<?php get_header(); ?>

<article id="featured">
				<h2>Blog</h2>
			</article>                
			<section id="content" class="news-b">
				<header class="heading-a">
					<h3><span class="small">Blog</span> <span class="strong">Our latest</span> posts</h3>
					<p>Checkout our blog</p>
				</header>

				<?php $args=array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                );
                                

                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) : $loop->the_post();  
                	$id = get_the_ID();
					$cats = get_the_category($id);
                ?>
				<article>
					<header>
						<?php if(has_post_thumbnail()){ ?>
						<figure><img src="<?php the_post_thumbnail_url() ?>" alt="Placeholder" height="315"></figure>

						<?php } else { ?>
							<figure><img src="http://placehold.it/700x315" alt="Placeholder" width="700" height="315"></figure>

						<?php } ?>
						<p><span><?php echo get_the_date("d"); ?></span> <?php echo get_the_date("M, Y"); ?> <a href="<?php the_permalink(); ?>">by <?php the_author(); ?></a></p>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</header>
					<p><?php the_excerpt(); ?></p>
					<p class="link-a"><a href="<?php the_permalink(); ?>">Read More</a></p>
				</article>

			 <?php endwhile; wp_reset_postdata(); ?>

				
				<!-- <nav class="pagination-a">
					<ol>
						<li><a href="./">1</a></li>
						<li class="active"><a href="./">2</a></li>
						<li><a href="./">Next</a></li>
					</ol>
				</nav> -->
			</section>
<?php get_footer(); ?>