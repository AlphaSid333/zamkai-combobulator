<?php
/**
 * Title: Training Courses – Site Header
 * Slug: training-courses-fse/header
 * Description: Main site header with brand mark, primary navigation, sign-in link and CTA button.
 * Area: header
 *
 */

$logo_url = get_template_directory_uri() . '/assets/images/Training Courses Logo.png';
?>

<!-- wp:group {"tagName":"header","metadata":{"patternName":"training-courses-fse/header","name":"Training Courses – Site Header"},"align":"full","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"48px","right":"48px"}},"border":{"bottom":{"color":"#E5E7EE","width":"1px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<header class="wp-block-group alignfull has-base-background-color has-background" style="border-bottom-color:#E5E7EE;border-bottom-width:1px;padding-top:16px;padding-right:48px;padding-bottom:16px;padding-left:48px"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"constrained","contentSize":"180px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":217,"width":"160px","height":"auto","aspectRatio":"7.078341013824885","sizeSlug":"full","linkDestination":"none","align":"left"} -->
<figure class="wp-block-image alignleft size-full is-resized"><img src="<?php echo esc_url( $logo_url ); ?>" alt="" class="wp-image-217" style="aspect-ratio:7.078341013824885;width:160px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:navigation {"ref":4,"textColor":"ink-2","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","alignItems":"center","style":{"spacing":{"blockGap":"10px"}},"justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill","style":{"border":{"radius":"6px"},"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-font-size wp-element-button" style="border-radius:6px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;font-size:13px;font-weight:500">Sign in</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"ink-2","textColor":"base","style":{"border":{"radius":"6px"},"typography":{"fontSize":"13px","fontWeight":"500"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-ink-2-background-color has-text-color has-background has-custom-font-size wp-element-button" style="border-radius:6px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px;font-size:13px;font-weight:500">Enrol your team</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></header>
<!-- /wp:group -->
