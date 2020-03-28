<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">
	<?php
		if(isset($_GET['page_id'])){
			switch($_GET['page_id']){
				case 8://登入、註冊頁面
					readfile(__DIR__ . '/html_page/login.html');
				break;
				case 18://訂餐主畫面
				break;
				default:
					//TODO page.php default of switch還沒做到這
			}
		}else{
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				}
			}
		}


	//以下都是預設的
	// if ( have_posts() ) {

	// 	while ( have_posts() ) {
	// 		the_post();
	// 		get_template_part( 'template-parts/content', get_post_type() );
	// 	}
	// }

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
