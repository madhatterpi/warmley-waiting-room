{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) 
<!-- HERO SECTION -->
@include('partials.hero-section')
@php the_post() @endphp
<!-- ABOUT PAGE CONTENT -->
<div class="container my-6">
  <!-- About Nav -->
  <div class="about-nav d-flex justify-content-center">

  <?php 
  global $wp_query;
  $postID = $wp_query->post->ID;

  $theParent = wp_get_post_parent_id(get_the_ID());
  if( $theParent) {
    $findChildren = $theParent;

  } else {
    $findChildren = get_the_ID();
  }

  wp_list_pages(array(
    
    'title_li' => NULL,
    'child_of' => $findChildren

  )); ?>
  </div>

    <!-- First Text Section -->
    <div class="row">
    <div class="col-lg-8 mx-auto">
     <?php the_field("text_section_a"); ?> 
    </div>
  </div>

    <!-- Images Gallery A -->
    <?php 

// vars
$image_gallery_a = get_field('image_gallery_a');	



if( $image_gallery_a['image_left'] ): ?>
<div class="about-images my-5">
<div class="row d-flex justify-content-center about-images__row">
  <div class="col-lg-4 about-images__background-image about-images__a corner-bottom-left" style=" background-image: url('<?php echo $image_gallery_a['image_left']['sizes']['small-abou-high-def'] ?>') "></div>
  <div class="col-lg-6 about-images__background-image about-images__c corner-top-right" style=" background-image: url('<?php echo $image_gallery_a['image_right']['sizes']['large-about-high-def'] ?>') "></div>
</div>
</div>
<?php endif; ?>
  
  <!-- Second Text Section -->
  <?php 

  // vars
  $text_section_b = get_field('text_section_b');	

if( $text_section_b ): ?>
  <div class="row">
    <div class="col-lg-8 mx-auto">
     <?php echo $text_section_b ?> 
    </div>
  </div>
<?php endif; ?>

	<!-- Images Gallery A Two -->
  <?php 

// vars
$image_gallery_a_two = get_field('image_gallery_a_two');	



if( $image_gallery_a_two['image_left'] ): ?>
<div class="about-images my-5">
<div class="row d-flex justify-content-center about-images__row">
  <div class="col-lg-6 about-images__background-image about-images__a corner-bottom-left" style=" background-image: url('<?php echo $image_gallery_a_two['image_left']['sizes']['small-abou-high-def'] ?>') "></div>
  <div class="col-lg-4 about-images__background-image about-images__c corner-top-right" style=" background-image: url('<?php echo $image_gallery_a_two['image_right']['sizes']['large-about-high-def'] ?>') "></div>
</div>
</div>
<?php endif; ?>

  <!-- Images Gallery B -->
  <?php 

  // vars
$image_gallery_b = get_field('image_gallery_b');	

if( $image_gallery_b['image_top_left'] ): ?>
  <div class="about-images my-5">
  <div class="row d-flex justify-content-center about-images__row">
    <div class="col-lg-6 about-images__background-image about-images__a corner-top-right" style=" background-image: url('<?php echo $image_gallery_b['image_top_left']['sizes']['large-about-high-def'] ?>') "></div>
    <div class="col-lg-4 d-flex justify-content-center align-items-center" >
      <p class="about-highlighted-text"><?php echo $image_gallery_b['quote']; ?></p>
    </div>
  </div>
  <div class="row d-flex justify-content-center about-images__row">
    <div class="col-lg-4 about-images__background-image about-images__b corner-bottom-left" style=" background-image: url('<?php echo $image_gallery_b['image_bottom_left']['sizes']['small-abou-high-def'] ?>') "></div>
    <div class="col-lg-6 about-images__background-image about-images__c corner-top-right" style=" background-image: url('<?php echo $image_gallery_b['image_bottom_right']['sizes']['large-about-high-def'] ?>') "></div>
  </div>
  </div>
  <?php endif; ?>
  
  <!-- Third Text Section -->
  <div class="row">
    <div class="col-lg-8 mx-auto">
    <?php the_field("text_section_c"); ?> 
    </div>
  </div>

</div>





@endwhile
@endsection

