<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php wp_head(); ?>
</head>
<body>

<?php
if ( is_front_page() || is_page( 'About' ) ) :
    get_header( 'home-about' );
else:
    get_header();
endif;
?>
<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
<h3><?php the_title(); ?></h3>
 
<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>
 
<?php endwhile; ?>
 
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>
 
<?php else: ?>
 
<p>No posts found. :(</p>
 
<?php endif; ?>

<?php
if ( is_front_page() || is_page( 'About' ) ) :
    get_footer( 'home-about' );
else:
    get_footer();
endif;
?>

<?php wp_footer(); ?>
</body>
</html>