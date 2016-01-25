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
$cbc_data_report_icon = "img/cd-icon-location.svg";
$cbc_feedback_icon = "img/cd-icon-movie.svg";
$cbc_plan_icon = "img/cd-icon-picture.svg";
$cbc_progress_icon = "img/cd-icon-test.svg";
$cbc_data_review_icon = "img/cd-icon-picture.svg";



// key: tags->slug, value: Icon address
$type2icon = array(
	"cbc-data-report" => $cbc_data_report_icon,
	"cbc-feedback" => $cbc_feedback_icon,
	"cbc-plan" => $cbc_plan_icon,
	"cbc-progress" => $cbc_progress_icon,
	"cbc-data-review" => $cbc_data_review_icon,
);



// category idenfication
$tags = get_the_tags();
// print_r($tags);
$tag = $tags[0];
$postType = $tag->slug;
// echo $postType;


?>

<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="<?php echo $timelinePath.$type2icon[$postType];?>" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<p></p>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php the_permalink(); ?>" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 14</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
