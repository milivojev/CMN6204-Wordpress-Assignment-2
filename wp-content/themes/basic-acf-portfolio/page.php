<?php get_header(); 
	the_post();	
?>

  <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Full Width
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Full Width</li>
      </ol>

      <div class="content">
        <?= the_content(); ?>
      </div>
      

    </div>
    <!-- /.container -->


<? get_footer(); ?>


<!-- Create a basic page.php template from HTML blank-page.html. Like in the previous template, you must replace the contents of .content div with the real page content by using the_content() method. This is the page fallback template, so we do not have to specially assign it to any pages. Verify that it works for all pages except Home, by default. -->