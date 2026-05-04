<?php
/**
 * Pattern
 *
 * @author Themegrill
 * @package online-courses-fse
 * @since 1.0.1
 *
 * slug: categories
 * title: Categories
 * categories: OnlineCourseFSE
 * keywords: categories, call to action, cover
 */

use OnlineCoursesFSE\Assets_Manager;

$online_course_fse_music        = Assets_Manager::get_image_url( 'music.png' );
$online_course_fse_photography  = Assets_Manager::get_image_url( 'photography.png' );
$online_course_fse_language     = Assets_Manager::get_image_url( 'language.png' );
$online_course_fse_marketing    = Assets_Manager::get_image_url( 'marketing.png' );
$online_course_fse_data_science = Assets_Manager::get_image_url( 'data-science.png' );
$online_course_fse_design       = Assets_Manager::get_image_url( 'design.png' );
$online_course_fse_business     = Assets_Manager::get_image_url( 'business.png' );
$online_course_fse_development  = Assets_Manager::get_image_url( 'development.png' );

$our_categories_tag_text = esc_html__( 'Our Categories', 'online-courses-fse' );
$browse_categories_text  = esc_html__( 'Browse By Categories', 'online-courses-fse' );
$find_courses_text       = esc_html__( 'Find courses that match what you want to learn.', 'online-courses-fse' );

$web_development_text       = esc_html__( 'Web Development', 'online-courses-fse' );
$web_development_count_text = esc_html__( '3 Courses', 'online-courses-fse' );

$business_management_text       = esc_html__( 'Business Management', 'online-courses-fse' );
$business_management_count_text = esc_html__( '7 Courses', 'online-courses-fse' );

$graphic_design_text       = esc_html__( 'Graphic Design', 'online-courses-fse' );
$graphic_design_count_text = esc_html__( '3 Courses', 'online-courses-fse' );

$data_science_text       = esc_html__( 'Data Science', 'online-courses-fse' );
$data_science_count_text = esc_html__( '5 Courses', 'online-courses-fse' );

$digital_marketing_text       = esc_html__( 'Digital Marketing', 'online-courses-fse' );
$digital_marketing_count_text = esc_html__( '4 Courses', 'online-courses-fse' );

$language_text       = esc_html__( 'Language', 'online-courses-fse' );
$language_count_text = esc_html__( '25 Courses', 'online-courses-fse' );

$video_media_text       = esc_html__( 'Video & Media', 'online-courses-fse' );
$video_media_count_text = esc_html__( '1 Course', 'online-courses-fse' );

$music_text       = esc_html__( 'Music', 'online-courses-fse' );
$music_count_text = esc_html__( '50 Courses', 'online-courses-fse' );

$view_all_categories_text = esc_html__( 'View All Categories', 'online-courses-fse' );

return array(
	'title'      => __( 'Categories', 'online-courses-fse' ),
	'categories' => array( 'online-courses-fse-categories' ),
	'keywords'   => array( 'categories', 'call to action' ),
	'content'    => '

<!-- wp:group {"metadata":{"name":"Categories"},"align":"full","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"},"blockGap":"60px"}},"backgroundColor":"background-1","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignfull has-background-1-background-color has-background" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"10px"},"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-bottom:10px">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"9px","bottom":"9px","left":"20px","right":"20px"}},"border":{"radius":"20px"}},"backgroundColor":"background-3","textColor":"accent-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-2-color has-background-3-background-color has-text-color has-background" style="border-radius:20px;padding-top:9px;padding-right:20px;padding-bottom:9px;padding-left:20px"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"textTransform":"uppercase","fontWeight":"700","letterSpacing":"1.4px","fontStyle":"normal"}},"textColor":"primary"} -->
<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase">
				' . $our_categories_tag_text . '
			</h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

		<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"gigantic"} -->
		<h2 class="wp-block-heading has-text-align-center has-gigantic-font-size" style="text-transform:capitalize">
			' . $browse_categories_text . '
		</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size">
			' . $find_courses_text . '
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-2"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-2-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":891,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_development ) . '" alt="" class="wp-image-891"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $web_development_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $web_development_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-1"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-1-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":892,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_business ) . '" alt="" class="wp-image-892"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $business_management_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $business_management_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-2"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-2-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":893,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_design ) . '" alt="" class="wp-image-893"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $graphic_design_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $graphic_design_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-1"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-1-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":894,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_data_science ) . '" alt="" class="wp-image-894"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $data_science_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $data_science_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-1"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-1-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":1103,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_marketing ) . '" alt="" class="wp-image-1103"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $digital_marketing_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $digital_marketing_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-2"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-2-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":896,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_language ) . '" alt="" class="wp-image-896"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $language_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $language_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-1"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-1-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":897,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_photography ) . '" alt="" class="wp-image-897"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $video_media_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $video_media_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"40px","bottom":"40px"},"blockGap":"14px"},"border":{"radius":"16px"}},"backgroundColor":"background-2"} -->
			<div class="wp-block-column is-vertically-aligned-center has-background-2-background-color has-background" style="border-radius:16px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;flex-basis:25%">
				<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"id":898,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( $online_course_fse_music ) . '" alt="" class="wp-image-898"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"heading"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="text-transform:capitalize">
						' . $music_text . '
					</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}}} -->
					<p class="has-text-align-center" style="font-size:15px">
						' . $music_count_text . '
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
				' . $view_all_categories_text . '
			</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:group -->
',
);
