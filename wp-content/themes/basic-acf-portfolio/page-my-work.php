<?php 
 // Template Name: Portfolio expose Template
get_header();
the_post();
?>


<!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Services
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
      <?php

        $hero = get_field('hero_image');
      ?>


      <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="<?= hero['sizes']['']" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">

        <?php 
          // $query = new WP_Query([
          //   'post_type' => 'post',
          // ]);
          // while($query->have_posts()):
          //   $query->the_post();
            $categories = get_categories();
            foreach ($categories as $category):
              // echo "<pre>";
              // var_dump($category);
          // echo "</pre>";
            ?>
      

        <!-- <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"><?=the_title()?></h4>
            <div class="card-body">
              <p class="card-text"><?=excerpt(get_the_content())?></p>
            </div>
            <div class="card-footer">
              <a href="<?=get_permalink()?>" class="btn btn-primary">learn more</a>
            </div>
          </div>
        </div> -->
         <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header"> <?= $category->name ?> </h4>
          <div class="card-body">
            <p class="card-text"><?= $category->description ?></p>
          </div>
          <div class="card-footer">
            <a href="<?= get_category_link($category->cat_ID); ?>" class="btn btn-primary">Learn More</a>
          </div>
         </div>
        </div>

        <?php 
          endforeach;
          wp_reset_postdata();
        ?>
       
       
      </div>
      <!-- /.row -->
<?php get_footer(); ?>