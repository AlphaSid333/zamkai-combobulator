<?php
/**
 * Pattern
 *
 * @author Themegrill
 * @package online-courses-fse
 * @since 1.0.1
 *
 * slug: reviews
 * title: Reviews
 * categories: OnlineCourseFSE
 * keywords: reviews, teachers, team
 */

use OnlineCoursesFSE\Assets_Manager;

$online_course_fse_review1 = Assets_Manager::get_image_url( 'review-1.png' );
$online_course_fse_review2 = Assets_Manager::get_image_url( 'review-2.png' );
$online_course_fse_review3 = Assets_Manager::get_image_url( 'review-3.png' );
$online_course_fse_review4 = Assets_Manager::get_image_url( 'review-4.png' );
$online_course_fse_star    = Assets_Manager::get_image_url( 'star.png' );

$reviews_tag_text       = esc_html__( 'Reviews', 'online-courses-fse' );
$what_students_say_text = esc_html__( 'What Our Students Say', 'online-courses-fse' );
$real_stories_text      = esc_html__( 'Real stories from students who learned with us', 'online-courses-fse' );

$review1_text           = esc_html__( 'This Marketing course changed how I work online. The teachers explain clearly & the lessons are easy to follow.', 'online-courses-fse' );
$michael_thompson_text  = esc_html__( 'Michael Thompson', 'online-courses-fse' );
$marketing_manager_text = esc_html__( 'Marketing Manager', 'online-courses-fse' );

$review2_text       = esc_html__( 'I took the Website Development course and got my dream job in 6 months. The projects really helped me learn.', 'online-courses-fse' );
$jennifer_lee_text  = esc_html__( 'Jennifer Lee', 'online-courses-fse' );
$web_developer_text = esc_html__( 'Web Developer', 'online-courses-fse' );

$review3_text        = esc_html__( 'Great teachers and easy-to-understand lessons. I tell everyone about Online Academy!', 'online-courses-fse' );
$david_martinez_text = esc_html__( 'David Martinez', 'online-courses-fse' );
$designer_text       = esc_html__( 'Designer', 'online-courses-fse' );

$happy_students_text = esc_html__( '750+ Happy Students', 'online-courses-fse' );
$rating_text         = esc_html__( '4.9 out of 5 Stars', 'online-courses-fse' );
$get_started_text    = esc_html__( 'Get started', 'online-courses-fse' );

return array(
	'title'      => __( 'Reviews', 'online-courses-fse' ),
	'categories' => array( 'online-courses-fse-reviews' ),
	'keywords'   => array( 'reviews', 'teachers', 'team' ),
	'content'    => '
<!-- wp:group {"metadata":{"name":"Reviews"},"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px","left":"20px","right":"20px"},"blockGap":"60px"}},"backgroundColor":"background-2","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-background-2-background-color has-background" style="padding-top:120px;padding-right:20px;padding-bottom:120px;padding-left:20px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"686px"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"},"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-bottom:10px">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"9px","bottom":"9px","left":"20px","right":"20px"}},"border":{"radius":"20px"}},"backgroundColor":"background-3","textColor":"accent-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-accent-2-color has-background-3-background-color has-text-color has-background" style="border-radius:20px;padding-top:9px;padding-right:20px;padding-bottom:9px;padding-left:20px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontWeight":"700","letterSpacing":"1.4px","fontStyle":"normal"}},"textColor":"primary"} -->
			<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase">
								' . $reviews_tag_text . '
							</h6>
			<!-- /wp:heading --></div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontSize":"gigantic","fontFamily":"manrope"} -->
			<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-manrope-font-family has-gigantic-font-size" style="text-transform:capitalize">
				' . $what_students_say_text . '
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"accent-3","fontSize":"regular"} -->
			<p class="has-text-align-center has-accent-3-color has-text-color has-regular-font-size">
				' . $real_stories_text . '
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"},"margin":{"top":"60px"}}}} -->
	<div class="wp-block-columns" style="margin-top:60px">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"39px","right":"39px"}},"border":{"radius":"16px","width":"1px"},"shadow":"none"},"backgroundColor":"background-1","borderColor":"background-3","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-background-3-border-color has-background-1-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:40px;padding-right:39px;padding-bottom:40px;padding-left:39px;box-shadow:none"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_star ) . '" alt="" class="wp-image-452"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.82"}},"textColor":"accent-3","fontSize":"button"} -->
					<p class="has-text-align-left has-accent-3-color has-text-color has-button-font-size" style="line-height:1.82">
						"' . $review1_text . '"
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":912,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_review1 ) . '" alt="" class="wp-image-912" style="object-fit:cover;width:60px;height:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontSize":"small"} -->
						<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-small-font-size" style="text-transform:capitalize">
							' . $michael_thompson_text . '
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#7a7a7a"}}},"typography":{"textTransform":"capitalize","lineHeight":"1.93"},"color":{"text":"#7a7a7a"}},"fontSize":"petite"} -->
						<p class="has-text-align-left has-text-color has-link-color has-petite-font-size" style="color:#7a7a7a;line-height:1.93;text-transform:capitalize">
							' . $marketing_manager_text . '
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"39px","right":"39px"}},"border":{"radius":"16px","width":"1px"},"shadow":"none"},"backgroundColor":"background-1","borderColor":"background-3","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-background-3-border-color has-background-1-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:40px;padding-right:39px;padding-bottom:40px;padding-left:39px;box-shadow:none"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_star ) . '" alt="" class="wp-image-452"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.82"}},"textColor":"accent-3","fontSize":"button"} -->
					<p class="has-text-align-left has-accent-3-color has-text-color has-button-font-size" style="line-height:1.82">
						"' . $review2_text . '"
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":914,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_review2 ) . '" alt="" class="wp-image-914" style="object-fit:cover;width:60px;height:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontSize":"small"} -->
						<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-small-font-size" style="text-transform:capitalize">
							' . $jennifer_lee_text . '
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#7a7a7a"}}},"typography":{"textTransform":"capitalize","lineHeight":"1.93"},"color":{"text":"#7a7a7a"}},"fontSize":"petite"} -->
						<p class="has-text-align-left has-text-color has-link-color has-petite-font-size" style="color:#7a7a7a;line-height:1.93;text-transform:capitalize">
							' . $web_developer_text . '&nbsp;
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"39px","right":"39px"}},"border":{"radius":"16px","width":"1px"},"shadow":"none"},"backgroundColor":"background-1","borderColor":"background-3","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color has-background-3-border-color has-background-1-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:40px;padding-right:39px;padding-bottom:40px;padding-left:39px;box-shadow:none"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_star ) . '" alt="" class="wp-image-452"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.82"}},"textColor":"accent-3","fontSize":"button"} -->
					<p class="has-text-align-left has-accent-3-color has-text-color has-button-font-size" style="line-height:1.82">
						"' . $review3_text . '"
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":915,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_review3 ) . '" alt="" class="wp-image-915" style="object-fit:cover;width:60px;height:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontSize":"small"} -->
						<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-small-font-size" style="text-transform:capitalize">
							' . $david_martinez_text . '
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#7a7a7a"}}},"typography":{"textTransform":"capitalize","lineHeight":"1.93"},"color":{"text":"#7a7a7a"}},"fontSize":"petite"} -->
						<p class="has-text-align-left has-text-color has-link-color has-petite-font-size" style="color:#7a7a7a;line-height:1.93;text-transform:capitalize">
							' . $designer_text . '&nbsp;
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"35px"}},"border":{"top":{"color":"#e6e6e6","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="border-top-color:#e6e6e6;border-top-width:1px;padding-top:35px">
		<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"id":916,"width":"130px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_review4 ) . '" alt="" class="wp-image-916" style="width:130px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontSize":"small"} -->
				<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-small-font-size" style="text-transform:capitalize">
					' . $happy_students_text . '&nbsp;
				</h5>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"#7a7a7a"}}},"typography":{"textTransform":"none","lineHeight":"1.93"},"color":{"text":"#7a7a7a"}},"fontSize":"petite"} -->
				<p class="has-text-align-left has-text-color has-link-color has-petite-font-size" style="color:#7a7a7a;line-height:1.93;text-transform:none">
					' . $rating_text . '&nbsp;
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","textColor":"background-1","fontSize":"button"} -->
			<div class="wp-block-button has-custom-font-size has-button-font-size">
				<a class="wp-block-button__link has-background-1-color has-primary-background-color has-text-color has-background wp-element-button">
					' . $get_started_text . '
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
