<?php if (is_singular() ) { ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php }
// Determins if we should hide the page title
$showsHeadline=get_post_meta( $post->ID, 'shows_headline', true );
?>

<div class="bg-light pt-5 alignfull<?php if ($showsHeadline == "yes") {   echo(" visually-hidden");  }; ?>">
<div class="container-xxl">
  <div class="row no-gutters mb-3 pb-3">
