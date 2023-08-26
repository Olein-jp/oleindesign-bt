<?php
/**
 * Title: search
 * Slug: /search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}},"className":"site-contents","layout":{"type":"default"}} -->
<main class="wp-block-group site-contents" style="margin-top:0"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/medicos-scaled-1.jpg","id":5622,"dimRatio":30,"isDark":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-contrast-color has-text-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5622" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/medicos-scaled-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">検索結果</h1>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"},"margin":{"top":"0","bottom":"var:preset|spacing|l"}}},"backgroundColor":"wild-sand","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-wild-sand-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--l);padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)"><!-- wp:query-title {"type":"search","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xs"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|xs"}},"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--xs);line-height:1"><!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">投稿日：</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"fontSize":"xs"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.3"}},"fontSize":"m"} /-->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"クエリーが結果を返さない場合に表示するテキスト、またはブロックを追加してください。"} -->
<p>表示できる投稿がありません。</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->