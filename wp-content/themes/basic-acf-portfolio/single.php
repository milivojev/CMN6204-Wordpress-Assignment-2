<?php 
get_header(); 
the_post();
?>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Portfolio Item
    <small>Subheading</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Portfolio Item</li>
  </ol>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <?php  
        $content = get_the_content();
        echo $content;
      ?>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Related Projects</h3>

  <div class="row">
    <?php 
     $curent_category = $wp_query->get_queried_object();
      $slug = $cuernt_category->slug;
     $postid = get_the_ID();
     
    $arguments = [
      'post_type' => 'post',
      'category_name' => 'applications',
      'posts_per_page' => 3,
      'post__not_in' => [$postid]
    ];
   
    $query = new WP_Query($arguments);
    while($query->have_posts()):
      $query->the_post();
      ?>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="<?= get_permalink() ?>">
        <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        <?php echo "<h6>".the_title()."</h6>"; ?>
      </a>
    </div>
  <?php endwhile;?>

    

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>