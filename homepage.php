<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php $arrTitle = array();
		$arrID = array();
		$args = array('posts_per_page' => 3, 'category_name' => 'Multimedia');
		$loop = new WP_Query($args);
		while($loop->have_posts()):$loop->the_post();
			array_push($arrTitle, get_the_title());
			array_push($arrID, get_the_ID());
		endwhile; rewind_posts();?>

        <!-- Mobile Latest News Section -->
        <div class="carousel">
            <div class="latHeading">Latest News</div>
            <hr class="yellowLine">
            <?php $args1 = array('posts_per_page' => 1, 'category_name' => 'Top');
			$loop1 = new WP_Query($args1);
			$recentTop = -1;
			$count = 1;
			while($loop1->have_posts()):$loop1->the_post();
				$recentTop = get_the_ID();
			endwhile;
			while(have_posts() && $count < 5):the_post();
				if(get_the_ID() != $recentTop && get_the_title() != $arrTitle[0] && get_the_title() != $arrTitle[1] && get_the_title() != $arrTitle[2]) {?>
            <input class="carousel-open" type="radio" id=<?php echo "carousel-".$count?> name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <div class="caption">
                    <div class="mobPara">
                        <div class="mobTitle">
                            <a title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div class="mobD-A">
                            by
                            <?php the_author(); ?> |
                            <?php the_time('F j, Y'); ?>
                        </div>
                        <div class="mobContent">
                            <?php
									$threshold = 240;
									if (strlen(get_the_content()) >= $threshold) {
										while(substr(get_the_content(), $threshold, 1) != " ")
											$threshold--;
									}
									$content = substr(get_the_content(),0,$threshold)."...";
									echo $content; ?>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <?php $count++;}
			endwhile; rewind_posts()?>
            <label for="carousel-4" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-4" class="carousel-control next control-3">›</label>
            <label for="carousel-3" class="carousel-control prev control-4">‹</label>
            <label for="carousel-1" class="carousel-control next control-4">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-4" class="carousel-bullet">•</label>
                </li>
            </ol>
        </div>







        <!-- Latest News Section -->
        <div class="grid__col latestNews"><span class="latHeading">Latest News</span>
            <hr class="yellowLine">
            <div class="latArticles">
                <?php $args = array('posts_per_page' => 1, 'category_name' => 'Top');
				$loop = new WP_Query($args);
				$recentTop = -1;
				$count = 1;
				while($loop->have_posts()):$loop->the_post();
					$recentTop = get_the_ID();
				endwhile;
				while(have_posts() && $count < 5):the_post();
					if(get_the_ID() != $recentTop && get_the_title() != $arrTitle[0] && get_the_title() != $arrTitle[1] && get_the_title() != $arrTitle[2]) {
						$count++;?>
                <div class="latPara">
                    <div class="latTitle">
                        <a title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="latD-A">
                        by
                        <?php the_author(); ?> |
                        <?php the_time('F j, Y'); ?>
                    </div>
                    <div class="latContent">
                        <?php
								$threshold = 156;
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
					if(get_the_ID() != $recentTop && get_the_title() != $arrTitle[0] && get_the_title() != $arrTitle[1] && get_the_title() != $arrTitle[2]) {
						$count++;?>
                <div class="latPara">
                    <div class="latTitle">
                        <a title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="latD-A">
                        by
                        <?php the_author(); ?> |
                        <?php the_time('F j, Y'); ?>
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
            <div class="btnContainer">
                <div class="moreArtBtn"><span class="moreArtText">More Articles</span></div>
            </div>
        </div>
        <!-- Top Story Section -->
        <div class="grid__col topStory">
            <div class="topHeading"><span class="sizing">TOP STORY</span></div>
            <hr class="yellowLine">
            <a class="topImg">
                <?php echo get_the_post_thumbnail($recentTop, 'full');?>
            </a>
            <div class="topText">
                <a>
                    <?php echo get_the_title($recentTop);?>
                </a>
            </div>
        </div>
        <!-- Calendar Section -->
        <div class="grid__col calendarSect"><span class="calHeading">Calendar</span>
            <hr class="yellowLine line2">Calendar section under construction. Thank you for your patience!</div>
        <!-- Ad Side Bar -->
        <div class="sideAds"><img src="<?php echo bloginfo('template_url'); ?>/pics/spdbAd.jpeg" class="ads"><img src="<?php echo bloginfo('template_url'); ?>/pics/vmdoAd.jpg" class="ads"><img src="<?php echo bloginfo('template_url'); ?>/pics/tree.jpg" class="ads"><img src="<?php echo bloginfo('template_url'); ?>/pics/crozet.jpeg" class="crozet ads"></div>

        <div class="ttffAd"><img src="<?php echo bloginfo('template_url'); ?>/pics/ttffAd.jpg"></div>

        <!-- Categories Section -->
        <div class="catSect">
            <div class="categories catInnovation">
                <div class="catHeading">Innovation</div>
                <div class="catArticles">
                    <?php $args = array('posts_per_page' => 3, 'category_name' => 'Innovation');
				$argsPic = array('posts_per_page' => 1, 'category_name' => 'Innovation');
				$ct = 1;
				$loop = new WP_Query($args);
				$loopPic = new WP_Query($argsPic);
				while($loopPic->have_posts()):$loopPic->the_post();
					$recentInn = get_the_ID();
				endwhile;?>
                    <div class="catPic">
                        <?php echo get_the_post_thumbnail($recentInn, 'full');?>
                    </div>
                    <?php while($loop->have_posts()):$loop->the_post();?>
                    <div class="catPara">
                        <div class="catTitle">
                            <a title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <?php if ($ct == 1) {?>
                        <div class="catD-A">
                            by
                            <?php the_author(); ?>
                        </div>
                        <?php }
						$ct++;?>
                    </div>
                    <?php endwhile; rewind_posts()?>
                </div>
            </div>
            <div class="categories catCity">
                <div class="catHeading">City Land Use</div>
                <div class="catArticles">
                    <?php $args = array('posts_per_page' => 3, 'category_name' => 'Land Use');
				$argsPic = array('posts_per_page' => 1, 'category_name' => 'Land Use');
				$ct = 1;
				$loop = new WP_Query($args);
				$loopPic = new WP_Query($argsPic);
				while($loopPic->have_posts()):$loopPic->the_post();
					$recentInn = get_the_ID();
				endwhile;?>
                    <div class="catPic">
                        <?php echo get_the_post_thumbnail($recentInn, 'full');?>
                    </div>
                    <?php while($loop->have_posts()):$loop->the_post();?>
                    <div class="catPara">
                        <div class="catTitle">
                            <a title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <?php if ($ct == 1) {?>
                        <div class="catD-A">
                            by
                            <?php the_author(); ?>
                        </div>
                        <?php }
						$ct++;?>
                    </div>
                    <?php endwhile; rewind_posts()?>
                </div>
            </div>
            <div class="categories catEducation">
                <div class="catHeading">Education</div>
                <div class="catArticles">
                    <?php $args = array('posts_per_page' => 3, 'category_name' => 'Education');
				$argsPic = array('posts_per_page' => 1, 'category_name' => 'Education');
				$ct = 1;
				$loop = new WP_Query($args);
				$loopPic = new WP_Query($argsPic);
				while($loopPic->have_posts()):$loopPic->the_post();
					$recentInn = get_the_ID();
				endwhile;?>
                    <div class="catPic">
                        <?php echo get_the_post_thumbnail($recentInn, 'full');?>
                    </div>
                    <?php while($loop->have_posts()):$loop->the_post();?>
                    <div class="catPara">
                        <div class="catTitle">
                            <a title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <?php if ($ct == 1) {?>
                        <div class="catD-A">
                            by
                            <?php the_author(); ?>
                        </div>
                        <?php }
						$ct++;?>
                    </div>
                    <?php endwhile; rewind_posts()?>
                </div>
            </div>
        </div>
        <div class="mmSect">
            <div class="mmSlideshow">
                <div class="mmHeading">LATEST MULTIMEDIA</div>
                <div class="mmBox1">
                    <a class="mm1">
                        <?php echo $arrTitle[0]?>
                    </a>
                </div>
                <div class="mmBox2">
                    <a class="mm2">
                        <?php echo $arrTitle[1]?>
                    </a>
                </div>
                <div class="mmBox3">
                    <a class="mm3">
                        <?php echo $arrTitle[2]?>
                    </a>
                </div>
                <div class="mmPics mm1Pic">
                    <a>
                        <?php echo get_the_post_thumbnail($arrID[0], 'full');?>
                    </a>
                </div>
                <div class="mmPics mm2Pic">
                    <a>
                        <?php echo get_the_post_thumbnail($arrID[1], 'full');?>
                    </a>
                </div>
                <div class="mmPics mm3Pic">
                    <a>
                        <?php echo get_the_post_thumbnail($arrID[2], 'full');?>
                    </a>
                </div>
            </div>
        </div>
        <div class="sideBar1"><img src="<?php echo bloginfo('template_url'); ?>/pics/spdbAd.jpeg" class="ads"><img src="<?php echo bloginfo('template_url'); ?>/pics/vmdoAd.jpg" class="ads vmdo"><img src="<?php echo bloginfo('template_url'); ?>/pics/tree.jpg" class="ads"><img src="<?php echo bloginfo('template_url'); ?>/pics/crozet.jpeg" class="crozet ads"></div>
    </main>
</div>