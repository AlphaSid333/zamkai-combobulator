<?php
/**
 * Title: All Courses – Hero
 * Slug: all-courses-fse/hero
 * Categories: featured, banner
 * Description: Full-width hero with headline, sub-copy, two CTA buttons, and proof stats row.
 */

$hero_image_url = get_template_directory_uri() . '/assets/images/Hero image.png';
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","fontWeight":"500","letterSpacing":"0"},"color":{"text":"#1F1F1E"},"border":{"width":"1px","color":"#71716C","radius":{"topLeft":"999px","topRight":"999px","bottomLeft":"999px","bottomRight":"999px"}},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"margin":{"top":"20px","bottom":"20px"}}},"backgroundColor":"tertiary"} -->
<p class="has-text-align-center has-border-color has-tertiary-background-color has-text-color has-background" style="border-color:#71716C;border-width:1px;border-top-left-radius:999px;border-top-right-radius:999px;border-bottom-left-radius:999px;border-bottom-right-radius:999px;color:#1F1F1E;margin-top:20px;margin-bottom:20px;padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px;font-size:13px;font-weight:500;letter-spacing:0"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">●</mark> New cohort — enrolment open</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"88px","fontWeight":"500","lineHeight":"1.02","letterSpacing":"-0.035em"},"spacing":{"margin":{"bottom":"28px"}}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:28px;font-size:88px;font-weight:500;letter-spacing:-0.035em;line-height:1.02">Learning, delivered<br>with <span style="color:accent"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-accent-color">clarity.</mark></span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"19px","lineHeight":"1.55"},"color":{"text":"#71716C"},"spacing":{"margin":{"bottom":"40px"}}}} -->
<p class="has-text-align-center has-text-color" style="color:#71716C;margin-bottom:40px;font-size:19px;line-height:1.55">A quiet, focused platform for online courses. Structured lessons, progress you can see, and the tools teachers actually need.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"80px"},"blockGap":"12px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-bottom:80px"><!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"8px"},"typography":{"fontSize":"14px","fontWeight":"500"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"20px","right":"20px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:8px;padding-top:12px;padding-right:20px;padding-bottom:12px;padding-left:20px;font-size:14px;font-weight:500">Start learning free</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"8px","color":"#D4D4D0","width":"1px"},"typography":{"fontSize":"14px","fontWeight":"500"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"20px","right":"20px"}},"color":{"background":"#FFFFFF","text":"#0A0A0A"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background has-border-color has-custom-font-size wp-element-button" style="border-color:#D4D4D0;border-width:1px;border-radius:8px;color:#0A0A0A;background-color:#FFFFFF;padding-top:12px;padding-right:20px;padding-bottom:12px;padding-left:20px;font-size:14px;font-weight:500">Browse courses</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":29,"width":"1079px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url( $hero_image_url ); ?>" alt="" class="wp-image-29" style="width:1079px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"28px","fontWeight":"500","letterSpacing":"-0.025em"}}} -->
<p class="has-text-align-center" style="font-size:28px;font-weight:500;letter-spacing:-0.025em">400k+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px"},"color":{"text":"#71716C"}}} -->
<p class="has-text-align-center has-text-color" style="color:#71716C;font-size:13px">learners</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"28px","fontWeight":"500","letterSpacing":"-0.025em"}}} -->
<p class="has-text-align-center" style="font-size:28px;font-weight:500;letter-spacing:-0.025em">4.9/5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px"},"color":{"text":"#71716C"}}} -->
<p class="has-text-align-center has-text-color" style="color:#71716C;font-size:13px">avg rating</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"28px","fontWeight":"500","letterSpacing":"-0.025em"}}} -->
<p class="has-text-align-center" style="font-size:28px;font-weight:500;letter-spacing:-0.025em">96%</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px"},"color":{"text":"#71716C"}}} -->
<p class="has-text-align-center has-text-color" style="color:#71716C;font-size:13px">completion</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"28px","fontWeight":"500","letterSpacing":"-0.025em"}}} -->
<p class="has-text-align-center" style="font-size:28px;font-weight:500;letter-spacing:-0.025em">200+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px"},"color":{"text":"#71716C"}}} -->
<p class="has-text-align-center has-text-color" style="color:#71716C;font-size:13px">courses</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
