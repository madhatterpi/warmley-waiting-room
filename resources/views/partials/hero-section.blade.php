<!-- HERO SECTION -->
<?php
  $featured_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
  ?>
<div class="hero hero--page hero--our-story" style=" background-image: url('<?php echo $featured_img[0];  ?>') ">
  <div class="overlay"></div>
  <div class="hero__inner">
  <h1>{!! App::title() !!}</h1>
  </div>
</div>