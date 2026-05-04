<?php
/**
 * Pattern
 *
 * @author Themegrill
 * @package online-courses-fse
 * @since 1.0.1
 *
 * slug: testimonials
 * title: Testimonials
 * categories: OnlineCourseFSE
 * keywords: testimonials, questions, accordion
 */

use OnlineCoursesFSE\Assets_Manager;

$online_course_fse_test1 = Assets_Manager::get_image_url( 'review-1.png' );
$online_course_fse_test2 = Assets_Manager::get_image_url( 'review-2.png' );
$online_course_fse_test3 = Assets_Manager::get_image_url( 'review-3.png' );
$online_course_fse_test4 = Assets_Manager::get_image_url( 'review-4.png' );
$online_course_fse_star  = Assets_Manager::get_image_url( 'star.png' );

$reviews_tag_text       = esc_html__( 'REVIEWS', 'online-courses-fse' );
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
$get_started_text    = esc_html__( 'Get Started', 'online-courses-fse' );

return array(
	'title'      => __( 'Testimonials', 'online-courses-fse' ),
	'categories' => array( 'online-courses-fse-testimonials' ),
	'keywords'   => array( 'testimonials', 'questions', 'accordion' ),
	'content'    => '

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"},"blockGap":"60px"}},"backgroundColor":"elearning-color-4","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-elearning-color-4-background-color has-background" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"686px"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"},"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group" style="padding-bottom:10px">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"9px","bottom":"9px","left":"20px","right":"20px"}},"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-1"}}}},"backgroundColor":"elearning-color-3","textColor":"elearning-color-1","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-elearning-color-1-color has-elearning-color-3-background-color has-text-color has-background has-link-color" style="border-radius:20px;padding-top:9px;padding-right:20px;padding-bottom:9px;padding-left:20px">
				<!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-1"}}}},"textColor":"elearning-color-1"} -->
				<h6 class="wp-block-heading has-text-align-center has-elearning-color-1-color has-text-color has-link-color">
					' . $reviews_tag_text . '
				</h6>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-6"}}}},"textColor":"elearning-color-6"} -->
			<h2 class="wp-block-heading has-text-align-center has-elearning-color-6-color has-text-color has-link-color">
				' . $what_students_say_text . '
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"19px"}},"textColor":"elearning-color-7"} -->
			<p class="has-text-align-center has-elearning-color-7-color has-text-color has-link-color" style="font-size:19px">
				' . $real_stories_text . '
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"39px","right":"39px"}},"border":{"radius":"16px","width":"1px"},"shadow":"none"},"backgroundColor":"white","borderColor":"elearning-color-9","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group has-border-color has-elearning-color-9-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:40px;padding-right:39px;padding-bottom:40px;padding-left:39px;box-shadow:none">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_star ) . '" alt="" class="wp-image-452"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"17px"}},"textColor":"elearning-color-7"} -->
					<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:17px">
						"' . $review1_text . '"
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":912,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_test1 ) . '" alt="" class="wp-image-912" style="object-fit:cover;width:60px;height:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-6"}}}},"textColor":"elearning-color-6"} -->
						<h5 class="wp-block-heading has-text-align-left has-elearning-color-6-color has-text-color has-link-color">
							' . $michael_thompson_text . '
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"15px"}},"textColor":"elearning-color-7"} -->
						<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:15px">
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
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"39px","right":"39px"}},"border":{"radius":"16px","width":"1px"},"shadow":"none"},"backgroundColor":"white","borderColor":"elearning-color-9","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group has-border-color has-elearning-color-9-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:40px;padding-right:39px;padding-bottom:40px;padding-left:39px;box-shadow:none">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_star ) . '" alt="" class="wp-image-452"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"17px"}},"textColor":"elearning-color-7"} -->
					<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:17px">
						"' . $review2_text . '"
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":914,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_test2 ) . '" alt="" class="wp-image-914" style="object-fit:cover;width:60px;height:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-6"}}}},"textColor":"elearning-color-6"} -->
						<h5 class="wp-block-heading has-text-align-left has-elearning-color-6-color has-text-color has-link-color">
							' . $jennifer_lee_text . '
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"15px"}},"textColor":"elearning-color-7"} -->
						<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:15px">
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
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"39px","right":"39px"}},"border":{"radius":"16px","width":"1px"},"shadow":"none"},"backgroundColor":"white","borderColor":"elearning-color-9","layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group has-border-color has-elearning-color-9-border-color has-white-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:40px;padding-right:39px;padding-bottom:40px;padding-left:39px;box-shadow:none">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":452,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_star ) . '" alt="" class="wp-image-452"/></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"17px"}},"textColor":"elearning-color-7"} -->
					<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:17px">
						"' . $review3_text . '"
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":915,"width":"60px","height":"60px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_test3 ) . '" alt="" class="wp-image-915" style="object-fit:cover;width:60px;height:60px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-6"}}}},"textColor":"elearning-color-6"} -->
						<h5 class="wp-block-heading has-text-align-left has-elearning-color-6-color has-text-color has-link-color">
							' . $david_martinez_text . '
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"15px"}},"textColor":"elearning-color-7"} -->
						<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:15px">
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

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"35px"}},"border":{"top":{"color":"var:preset|color|elearning-color-9","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"80%"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--elearning-color-9);border-top-width:1px;padding-top:35px">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"32%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:32%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":916,"width":"130px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( $online_course_fse_test4 ) . '" alt="" class="wp-image-916" style="width:130px"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-6"}}}},"textColor":"elearning-color-6"} -->
						<h5 class="wp-block-heading has-text-align-left has-elearning-color-6-color has-text-color has-link-color">
							' . $happy_students_text . '&nbsp;
						</h5>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|elearning-color-7"}}},"typography":{"fontSize":"15px"}},"textColor":"elearning-color-7"} -->
						<p class="has-text-align-left has-elearning-color-7-color has-text-color has-link-color" style="font-size:15px">
							' . $rating_text . '&nbsp;
						</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"14%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:14%">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"heading","textColor":"background-1"} -->
					<div class="wp-block-button">
						<a class="wp-block-button__link has-background-1-color has-heading-background-color has-text-color has-background wp-element-button" href="#">
							' . $get_started_text . '
						</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
',
);
