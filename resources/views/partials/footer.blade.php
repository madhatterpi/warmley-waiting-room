<footer class="footer">
  <div class="footer__inner">
    
    <div class="footer-block">
      <div class="footer-block__content">
        <h3 class="footer-block__title">location</h3>
        <div class="footer-block__text address">
        <a href="https://goo.gl/maps/tf41YcPNfAZza64X8" target="_blank">
        <span>Warmley Waiting Room</span>
          <span>Bristol and Bath Railway Path</span>
          <span>Warmley</span>
          <span>BS30 5JB</span>
        </a>
          
        </div>
      </div>
    </div>
    
    <!-- <div class="footer-breaker">
      <div class="footer-breaker__inner"></div>
    </div> -->
   
    <div class="footer-block">
      <div class="footer-block__content">
        <h3 class="footer-block__title">our hours</h3>
        <div class="footer-block__text">
          
        <table class="footer-open-hours">
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
    
    <!-- <div class="footer-breaker">
      <div class="footer-breaker__inner"></div>
    </div> -->
    
    <div class="footer-block">
      <div class="footer-block__content">
        <h3 class="footer-block__title">follow us</h3>
        <div class="footer-block__text">
          <a href="https://www.facebook.com/WarmleyWaitingRoom/" target="_blank"><i class="fab fa-facebook-f footer__icon"></i></a>
          <a href="https://www.instagram.com/warmley_waiting_room/" target="_blank"><i class="fab fa-instagram footer__icon"></i></a>
        </div>
      </div>
    </div>
    
  </div>
</footer>

<div class="footer-bottom">
  <p> Copyright &copy; 2019 Warmley Waiting Room. 
  Website by <a class="webdev-link" target="_blank" href="https://www.peterbateman.co.uk">Peter Bateman</a></p>
</div>
</div>
