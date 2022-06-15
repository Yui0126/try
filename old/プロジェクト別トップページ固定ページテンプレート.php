<?php
/*
Template Name: プロジェクト別トップページ
*/
?>
<?php get_header(); ?>
<div class="contentsArea top anchor">
	
	<div class="w1080 mgn40">
		<h1>プロジェクトからえらぶ</h1>
		 
	</div>
	
	<section class="w1080 shadow-base country-list-wrapper" id="volunteer">
		
		<div class="clearfix">
		<p style="text-align:center;">好きなこと、得意なことを活かして、国際貢献！<br>
必要なのは「やる気」と「行動力」！</p>
		 <?php
						$args = array(
						'post_type' => 'project', 
						'posts_per_page' => -1, 
						'tax_query' => array(
						array(
							'taxonomy' => 'project-cat', 
							'field' => 'slug', 
							'terms' => 'renewal', 
							'operator' => 'IN'
						),
					)
);
						$the_query = new WP_Query( $args );
						 ?>
						 <ul class="column3 project-list-aside clearfix">
	<?php if ( $the_query->have_posts() ) :
	  while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	  
	  <a href="<?php the_permalink() ?>"><li class="<?php echo esc_attr($post->post_name); ?>"><span class="title"><?php the_title(); ?></span></li></a>
	  
	  <?php endwhile; endif; ?>
					   <?php wp_reset_postdata(); ?>
					   
					 </ul>  
		 </div>
	</section>
	</div>
	
	
<?php get_footer(); ?>
