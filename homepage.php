<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Latest News Section -->
			<div class="grid__col latestNews"><span class="latHeading">Latest News</span><hr class="yellowLine">
				<div class="latArticles">
					<?php $args = array('posts_per_page' => 1, 'category_name' => 'Top');
					$loop = new WP_Query($args);
					$recentTop = -1;
					$count = 1;
					while($loop->have_posts()):$loop->the_post();
						$recentTop = get_the_ID();
					endwhile;
					while(have_posts() && $count < 5):the_post();
						if(get_the_ID() != $recentTop) {
							$count++;?>
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
						<?php }
					endwhile; rewind_posts()?>
				</div>
				<div class="latArticles1">
					<?php $args = array('posts_per_page' => 1, 'category_name' => 'Top');
					$loop = new WP_Query($args);
					$recentTop = -1;
					$count = 1;
					while($loop->have_posts()):$loop->the_post();
						$recentTop = get_the_ID();
					endwhile;
					while(have_posts() && $count < 5):the_post();
						if(get_the_ID() != $recentTop) {
							$count++;?>
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
						<?php }
					endwhile; rewind_posts()?>
				</div>
				<div class="btnContainer"><div class="moreArtBtn"><span class="moreArtText">See More Articles</span></div></div>
			</div><!-- Top Story Section --><div class="grid__col topStory"><div class="topHeading">TOP STORY</div><div class="topImg"><?php echo get_the_post_thumbnail($recentTop, 'full');?></div><div class="topText"><a><?php echo get_the_title($recentTop);?></a></div></div><!-- Calendar Section --><div class="grid__col calendarSect"><span class="calHeading">Calendar</span><hr class="yellowLine line2">This is the calendar section lol</div>
		</main>
	</div>