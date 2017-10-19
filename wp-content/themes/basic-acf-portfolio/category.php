<?php
// Template name : Category
?>
<?php get_header(); ?>
<?php the_post(); ?>

 <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Portfolio 1
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Portfolio 1</li>
      </ol>

      <!-- Project One -->
       <?php
          $curernt_category = $wp_query->get_queried_object();
          $slug = $curernt_category->slug;
          // echo "<pre>";
          // var_dump($curernt_category);
          // echo "</pre>";
          $arguments = [
            "post_type" => "post",
            "orderby" => "date",
            "order" => "DESC",
            'category_name' => $slug
          ];
          $posts = new WP_Query($arguments); 
          while($posts->have_posts()):
            $posts->the_post();
          ?>
      <div class="row">
       
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><?= the_title();?></h3>
          <p><?=excerpt(get_the_content())?></p>
          <a class="btn btn-primary" href="#">View Project
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
    
      </div>
      <!-- /.row -->

      <hr>
        <?php endwhile; ?>

      

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->
<?php get_footer(); ?>
