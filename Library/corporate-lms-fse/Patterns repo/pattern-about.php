<?php
/**
 * Title: All Courses – About Mosaic
 * Slug: all-courses-fse/about
 * Categories: about
 * Description: About section with two-column headline/text header and a 3-column card+image mosaic grid.
 */

$about_image_1 = get_template_directory_uri() . '/assets/images/about-us-3.jpg';
$about_image_2 = get_template_directory_uri() . '/assets/images/about-us-1.jpg';
$about_image_3 = get_template_directory_uri() . '/assets/images/about-us-2.jpg';
?>
<!-- wp:group {"metadata":{"categories":["about"],"patternName":"all-courses-fse/about","name":"All Courses – About Mosaic"},"align":"full","style":{"border":{"top":{"color":"#EAEAE7","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-top-color:#EAEAE7;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"64px","margin":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-bottom:48px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#71716C"},"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.02em","textTransform":"uppercase"}}} -->
<p class="has-text-color" style="color:#71716C;font-size:12px;font-weight:500;letter-spacing:0.02em;text-transform:uppercase">About us</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"12px","bottom":"0"}},"typography":{"fontSize":"56px","fontWeight":"500","lineHeight":"1.05","letterSpacing":"-0.03em"}}} -->
<h2 class="wp-block-heading" style="margin-top:12px;margin-bottom:0;font-size:56px;font-weight:500;letter-spacing:-0.03em;line-height:1.05">A calm place<br>to learn well.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#71716C"},"typography":{"fontSize":"17px","lineHeight":"1.55"}}} -->
<p class="has-text-color" style="color:#71716C;font-size:17px;line-height:1.55">We started All Courses in 2019 after teaching at three bigger platforms and watching attention become the product. Here, the product is the lesson.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"padding":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:column {"style":{"border":{"color":"#EAEAE7","radius":"12px","style":"solid","width":"1px"},"color":{"background":"#FAFAF9"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}}} -->
<div class="wp-block-column has-border-color has-background" style="border-color:#EAEAE7;border-style:solid;border-width:1px;border-radius:12px;background-color:#FAFAF9;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:paragraph {"style":{"color":{"text":"#71716C"},"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.02em","textTransform":"uppercase"}}} -->
<p class="has-text-color" style="color:#71716C;font-size:12px;font-weight:500;letter-spacing:0.02em;text-transform:uppercase">Mission</p>
<!-- /wp:paragraph -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"8px"}},"typography":{"fontSize":"22px","fontWeight":"600","letterSpacing":"-0.015em"}}} -->
<h3 class="wp-block-heading" style="margin-bottom:8px;font-size:22px;font-weight:600;letter-spacing:-0.015em">Learning that lasts</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#71716C"},"typography":{"fontSize":"14px","lineHeight":"1.55"}}} -->
<p class="has-text-color" style="color:#71716C;font-size:14px;line-height:1.55">We teach subjects the way they're practiced — not the way they're marketed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":260,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $about_image_1 ); ?>" alt="" class="wp-image-260" style="border-radius:12px;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"#0A0A0A","radius":"12px","style":"solid","width":"1px"},"color":{"background":"#0A0A0A","text":"#FFFFFF"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}}} -->
<div class="wp-block-column has-border-color has-text-color has-background" style="border-color:#0A0A0A;border-style:solid;border-width:1px;border-radius:12px;color:#FFFFFF;background-color:#0A0A0A;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:paragraph {"style":{"color":{"text":"#A3A39E"},"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.02em","textTransform":"uppercase"}}} -->
<p class="has-text-color" style="color:#A3A39E;font-size:12px;font-weight:500;letter-spacing:0.02em;text-transform:uppercase">Technique</p>
<!-- /wp:paragraph -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"color":{"text":"#FFFFFF"},"spacing":{"margin":{"bottom":"8px"}},"typography":{"fontSize":"22px","fontWeight":"600","letterSpacing":"-0.015em"}}} -->
<h3 class="wp-block-heading has-text-color" style="color:#FFFFFF;margin-bottom:8px;font-size:22px;font-weight:600;letter-spacing:-0.015em">Patient pedagogy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#A3A39E"},"typography":{"fontSize":"14px","lineHeight":"1.55"}}} -->
<p class="has-text-color" style="color:#A3A39E;font-size:14px;line-height:1.55">Small cohorts, clear structure, and instructors who read what you write.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":261,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $about_image_2 ); ?>" alt="" class="wp-image-261" style="border-radius:12px;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"#EAEAE7","radius":"12px","style":"solid","width":"1px"},"color":{"background":"#FAFAF9"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}}} -->
<div class="wp-block-column has-border-color has-background" style="border-color:#EAEAE7;border-style:solid;border-width:1px;border-radius:12px;background-color:#FAFAF9;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:paragraph {"style":{"color":{"text":"#71716C"},"typography":{"fontSize":"12px","fontWeight":"500","letterSpacing":"0.02em","textTransform":"uppercase"}}} -->
<p class="has-text-color" style="color:#71716C;font-size:12px;font-weight:500;letter-spacing:0.02em;text-transform:uppercase">Purpose</p>
<!-- /wp:paragraph -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"8px"}},"typography":{"fontSize":"22px","fontWeight":"600","letterSpacing":"-0.015em"}}} -->
<h3 class="wp-block-heading" style="margin-bottom:8px;font-size:22px;font-weight:600;letter-spacing:-0.015em">Quiet confidence</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#71716C"},"typography":{"fontSize":"14px","lineHeight":"1.55"}}} -->
<p class="has-text-color" style="color:#71716C;font-size:14px;line-height:1.55">Help each learner build a skill they can name and a portfolio they can defend.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"id":262,"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $about_image_3 ); ?>" alt="" class="wp-image-262" style="border-radius:12px;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
