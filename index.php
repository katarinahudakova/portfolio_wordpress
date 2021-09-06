
<?php 
get_header(); ?>    

<div class="main">      
      <div class="container">
      <?php while(have_posts()) : the_post() ?>
        <img src=" <?php echo get_template_directory_uri() ?>/images/cloud.svg" height="128" width="196"/>

        <h2><?php the_title(); ?></h2>
        <p><?php the_content (); ?></p>
      </div>
    </div>

    <?php endwhile; ?>
    <div class="jumbotron">
      <div class="container"> 
      
      <h1>
      <?php the_field("jumbotron") ?>
        </h1>
        <p>
        <?php the_field("jumbotron_description") ?>
        </p>
        <?php 
          $secondButton = get_field('jumbotron_btn');
        ?>
        <a 
        class="btn"
        role='button'
        href="<?php echo $secondButton['url']; ?>"
        target="<?php echo $secondButton['target']; ?>">
        <?php echo $secondButton['title'];?>
       </a>
      </div>
    </div>

<?php get_footer(); ?>  