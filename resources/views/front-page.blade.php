@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<?php
$hero_image = get_field('hero_image');
?>
<div class="hero" style=" background-image: url('<?php echo $hero_image ?>') ">
  <div class="overlay"></div>
  <div class="hero__inner">
    <h1>Welcome to the Warmley Waiting Room</h1>
  </div>
</div>

<!-- INTRO SECTION  -->
<section>
<div class="container fp-intro">
  <div class="row d-flex justify-content-center">
    <div class="col-md-6 col-md-8 text-center">
      <p class="fp-intro__text fp-intro__text--highlight"><?php the_field('intro_header') ?></p>
      <p class="fp-intro__text"><?php the_field('intro_text') ?></p>
    </div>
  </div>
</div>
</section>

<!-- TWO COLUMN ABOUT SECTION  -->
<section>
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-sm-8 col-md-8 col-lg-10">
    <div class="h-block__outer">
    <?php
$about_image_one = get_field('first_about_image');
?>
  <div class="h-block h-block__image h-block__image--left-clip h-block--1" style=" background-image: url('<?php echo $about_image_one ?>') ">
    </div>
    <div class="h-block h-block--small d-flex">
      <div class="h-block__inner h-block__inner--padded">
        <h2 class="header h-block__header header--max-width"><?php the_field('first_about_header') ?></h2>
        <p><?php the_field('first_about_text') ?></p>
        <a role="button" class="btn btn-primary warmley-link" href="<?php echo get_home_url(); ?>/our-story"><?php the_field('first_about_page_link_text'); ?></a>
      </div>
    </div>
  </div>

  <div class="h-block__outer d-flex">

    <div class="h-block h-block--small order-2 order-lg-1">
      <div class="h-block__inner h-block__inner--padded">
        <h2 class="header h-block__header header--max-width"><?php the_field('second_about_header') ?></h2>
        <p><?php the_field('second_about_text') ?></p>
        <a role="button" class="btn btn-primary warmley-link" href="<?php the_field('second_about_page_link'); ?>"><?php the_field('second_about_page_link_text'); ?></a>
      </div>
    </div>
    <?php
$about_image_two = get_field('second_about_image');
?>
    <div class="h-block h-block__image h-block__image--right-clip h-block--2 order-1 order-lg-2" style=" background-image: url('<?php echo $about_image_two ?>') ">
    </div>

  </div>
    </div>
  </div>
</div>
</section>

<!-- OPENING HOURS SECTION -->
<section>
<div class="container open-hours">
  <div class="row d-flex justify-content-center">
    <div class="col-md-5 text-center">
      <h2 class="header" >opening hours</h2>
      <h3 class="subtitle" ><?php the_field('open_hours_subheader') ?></h3>

            <table class="open-hours__list">
        <?php

// check if the repeater field has rows of data
if( have_rows('opening_hours', 'option') ):

 	// loop through the rows of data
    while ( have_rows('opening_hours', 'option') ) : the_row(); 
    ?>
        
        <tr>
        <td><?php the_sub_field('day'); ?>:</td>
        <td class="open-time"> <?php the_sub_field('hours'); ?></td>
      </tr>
      
      <?php
    endwhile;
    else :

      // no rows found
  
  endif;

?>
      </table>
    </div>
  </div>
</div>
</section>

<!-- INSTAGRAM SECTION -->
<section>
<div class="container-fluid instagram-section">
<h2 class="header header--less-margin-bottom text-center">come visit us</h2>
<a class="instagram-link" href="https://www.instagram.com/warmley_waiting_room/" target="_blank">#WarmleyWaitingRoom</a>
  <div class="row d-flex justify-content-center">
    <div class="col-sm-8 col-md-8 col-lg-10 instagram-row">
    <?php if (have_rows('instagram_section')): ?>

<div class="row">

<?php while (have_rows('instagram_section')): the_row();

// vars
    $image = get_sub_field('image', false);
    $size = 'instagram-high-def';

    ?>


  <div class="col-md-6 col-lg-4 insta-block"><?php echo wp_get_attachment_image( $image, $size ); ?></div>

	<?php endwhile;?>

</div>

<?php endif;?>


      </div>
    </div>
</div>
</section>

<!-- TOILET SECTION -->
<section>
<div class="hp-banner d-flex justify-content-center align-items-center">
<!-- <div class="overlay"></div> -->
  <div class="hp-banner__inner">
    <p class="hp-banner__text">Oh and we happen to be in the book of top 100 toilets in the world...</p>
  </div>
</div>
</section>

<!-- MAP SECTION -->
<div class="container-fluid">
  <div class="row">
    <div class="col p-0 map__column">
    <!-- <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=1920&amp;height=400&amp;hl=en&amp;q=Warmley%20Waiting%20Room%2C%20Bristol%20And%20Bath%20Railway%20Path%2C%20Warmley%2C%20Bristol%20BS30%205JB+(Warmley)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;"></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br /> -->

      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9943.557501089459!2d-2.474882!3d51.4601875!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb758321723e7e13!2sWarmley+Waiting+Room!5e0!3m2!1sen!2suk!4v1562825135720!5m2!1sen!2suk" width="1920" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
@endsection

