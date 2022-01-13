
<?php get_header(); ?>

  <main class="my-auto">
    <div class="row d-flex align-items-center">
      <div class="col-xl-5 col-md-7 text-content ">
      <?php if(have_posts()): ?>    

          <div class="post">

          <div class="logo mx-auto">
            <?php if(function_exists('the_custom_logo')){ 
              the_custom_logo(); }?>
          </div>

            <h2><?php the_title(); ?></h2>
             <p><?php the_content(); ?></p>
             <p class="lead d-flex justify-content-start">
               <a href="#" role="button" class="btn btn-sm"><i class="fab fa-facebook-f"></i></a>
               <a href="#" role="button" class="btn btn-sm"><i class="fab fa-instagram"></i></a>
               <a href="#" role="button" class="btn btn-sm"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>

     <?php endif; ?>
     
      </div>


  </main>

  <?php get_footer(); ?>

</div>
 <?php wp_footer(); ?>

  </body>
</html>
