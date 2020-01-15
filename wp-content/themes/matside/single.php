<?php the_post(); get_header(); ?>

<article id="featured">
				<h2>Blog</h2>
			</article>                
			<section id="content" class="cols-a">
				<div class="news-a">
					<article>
						<header>
							<h3><?php the_title(); ?></h3>
							<ul>
								<li><a href="./"><img src="http://placehold.it/40" alt="Placeholder" width="40" height="40"> by <?php the_author(); ?></a></li>
								<li><i class="icon-basic" data-icon="x"></i> <?php echo get_the_date("M,d, Y"); ?></li>
								<li><a href="./"><i class="icon-basic" data-icon=","></i> <?php echo get_comments_number(); ?></a></li>
							</ul>
						</header>
	<?php if(has_post_thumbnail()){ ?>
						<figure><img src="<?php the_post_thumbnail_url() ?>" alt="Placeholder" height="315"></figure>

						<?php } else { ?>
							<figure><img src="http://placehold.it/700x315" alt="Placeholder" width="700" height="315"></figure>

						<?php } ?>						<?php the_content(); ?>
					</article>
					<!-- <form action="./" method="post" class="form-a">
						<fieldset>
							<p>
								<span>
									<label for="fa">Name</label>
									<input type="text" id="fa" name="fa" required>
								</span>
								<span>
									<label for="fb">Email</label>
									<input type="email" id="fb" name="fb" required>
								</span>
								<span>
									<label for="fc">Website</label>
									<input type="url" id="fc" name="fc">
								</span>
							</p>
							<p>
								<label for="fd">Message</label>
								<textarea id="fd" name="fd" required></textarea>
							</p>
							<p><button type="submit">Send</button></p>
						</fieldset>
					</form>
					<ul class="comments-a">
						<li><span><img src="http://placehold.it/81" alt="Placeholder" width="81" height="81"><span class="title">John Doe said :</span> I am a superhero, and I like this ! Nice work. <span class="date">2 hrs ago</span></span>
							<ul>
								<li><span><img src="http://placehold.it/81" alt="Placeholder" width="81" height="81"><span class="title">John Doe said :</span> I agree with <span class="scheme-c">@John Doe</span> . This is great. <span class="date">1 hr ago</span></span></li>
							</ul>
						</li>
						<li><span><img src="http://placehold.it/81" alt="Placeholder" width="81" height="81"><span class="title">Alex (you) said :</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <span class="date">few seconds ago</span></span></li>
					</ul> -->
				</div>
				<aside>
					>
					<form action="./" method="post" class="search-a">
						<fieldset>
							<p>
								<label for="sa">Search</label>
								<input type="text" id="sa" name="sa" required>
								<button type="submit"><i class="icon-basic" data-icon="#"></i> <span class="hidden">Submit</span></button>
							</p>
						</fieldset>
					</form>
				</aside>
			</section>

<?php get_footer(); ?>