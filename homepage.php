<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Latest News Section -->
			<div class="grid__col latestNews"><span class="latHeading">Latest News</span><hr class="yellowLine">
				<div class="latArticles">
					<?php $args = array('posts_per_page' => 4);
					$loop = new WP_Query($args);
					while($loop->have_posts()):$loop->the_post();?>
						<div class="latPara">
							<div class="latTitle">
								<a title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="latD-A">
								by <?php the_author(); ?> | <?php the_time('F j, Y'); ?>
							</div>
							<div class="latContent">
								<?php
								$threshold = 165;
								if (strlen(get_the_content()) >= $threshold) {
									while(substr(get_the_content(), $threshold, 1) != " ")
										$threshold--;
								}
								$content = substr(get_the_content(),0,$threshold)."...";
								echo $content; ?>
							</div>
						</div>
						<br>
					<?php endwhile; ?>
				</div>
				<div class="latArticles1">
					<?php $args = array('posts_per_page' => 4);
					$loop = new WP_Query($args);
					while($loop->have_posts()):$loop->the_post();?>
						<div class="latPara">
							<div class="latTitle">
								<a title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="latD-A">
								by <?php the_author(); ?> | <?php the_time('F j, Y'); ?>
							</div>
							<div class="latContent">
								<?php
								$threshold = 100;
								if (strlen(get_the_content()) >= $threshold) {
									while(substr(get_the_content(), $threshold, 1) != " ")
										$threshold--;
								}
								$content = substr(get_the_content(),0,$threshold)."...";
								echo $content; ?>
							</div>
						</div>
						<br>
					<?php endwhile; ?>
				</div>
				<div class="moreArtBtn"></div>
			</div><!-- Top Story Section --><div class="grid__col topStory"><div class="topHeading">TOP STORY</div><img class="topImg" src="<?php bloginfo('template_url'); ?>/pics/rapist.png" /><div class="topText"><a>Former U.Va student charged with rape</a></div></div><!-- Calendar Section --><div class="grid__col calendarSect"><span class="calHeading">Calendar</span><hr class="yellowLine line2">This is the calendar section lol</div>
		</main>
	</div>