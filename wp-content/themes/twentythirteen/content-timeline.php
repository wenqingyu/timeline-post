<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<?php global $timelinePath; ?>

<?php 
$locationIcon = "img/cd-icon-location.svg";
$movieIcon = "img/cd-icon-movie.svg";
$pictureIcon = "img/cd-icon-picture.svg";

// category idenfication
$category = "";
$post_categories = wp_get_post_categories( the_ID() );
print_r($post_categories);
$cats = array();
foreach($post_categories as $c){
	$cat = get_category( $c );
	$cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
	// map category
	echo $cat->name. "</br>";
}
			

?>

<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="<?php echo $timelinePath.$locationIcon;?>" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<p></p>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 14</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
