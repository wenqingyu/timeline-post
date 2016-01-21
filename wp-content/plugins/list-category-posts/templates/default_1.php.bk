<?php
/*
Plugin Name: List Category Posts - Template "Default"
Plugin URI: http://picandocodigo.net/programacion/wordpress/list-category-posts-wordpress-plugin-english/
Description: Template file for List Category Post Plugin for Wordpress which is used by plugin by argument template=value.php
Version: 0.9
Author: Radek Uldrych & Fernando Briano
Author URI: http://picandocodigo.net http://radoviny.net
*/

/*
Copyright 2009 Radek Uldrych (email : verex@centrum.cz)
Copyright 2009-2015 Fernando Briano (http://picandocodigo.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or any
later version.

This program is distributed in the hope that it will be useful, but
WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301
USA
*/

/**
* The format for templates changed since version 0.17.  Since this
* code is included inside CatListDisplayer, $this refers to the
* instance of CatListDisplayer that called this file.
*/

/* This is the string which will gather all the information.*/
$lcp_display_output = '';

$lcp_display_output .= '
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js">
';

// Show category link:
$lcp_display_output .= $this->get_category_link('strong');

// Show the conditional title:
// $lcp_display_output .= $this->get_conditional_title();

// title display
$lcp_display_output .= '
<header>
		<h1>'.$this->get_conditional_title().'</h1>
	</header>
';

//Add 'starting' tag. Here, I'm using an unordered list (ul) as an example:
// $lcp_display_output .= '<ul class="lcp_catlist">';

// section header -> replace <ul>
$lcp_display_output .= '<section id="cd-timeline" class="cd-container">';


/* Posts Loop
 *
 * The code here will be executed for every post in the category.  As
 * you can see, the different options are being called from functions
 * on the $this variable which is a CatListDisplayer.
 *
 * CatListDisplayer has a function for each field we want to show.  So
 * you'll see get_excerpt, get_thumbnail, etc.  You can now pass an
 * html tag as a parameter. This tag will sorround the info you want
 * to display. You can also assign a specific CSS class to each field.
*/
global $post;
while ( have_posts() ):
  the_post();

/* ------ Loop Start ------- */

$lcp_display_output .= '
<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/cd-icon-picture.svg" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>Title of section 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">Jan 14</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->




';
/* ------ Loop End --------- */











  //Start a List Item for each post:
  $lcp_display_output .= "<li>";

  //Show the title and link to the post:
  $lcp_display_output .= $this->get_post_title($post, 'h3', 'lcp_post');

  //Show comments:
  $lcp_display_output .= $this->get_comments($post);

  //Show date:
  $lcp_display_output .= ' ' . $this->get_date($post);

  //Show date modified:
  $lcp_display_output .= ' ' . $this->get_modified_date($post);

  //Show author
  $lcp_display_output .= $this->get_author($post);

  //Custom fields:
  $lcp_display_output .= $this->get_custom_fields($post);

  //Post Thumbnail
  $lcp_display_output .= $this->get_thumbnail($post);

  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<p class="lcp_content">The content</p>
   */
  $lcp_display_output .= $this->get_content($post, 'p', 'lcp_content');

  /**
   * Post content - Example of how to use tag and class parameters:
   * This will produce:<div class="lcp_excerpt">The content</div>
   */
  $lcp_display_output .= $this->get_excerpt($post, 'div', 'lcp_excerpt');

  // Get Posts "More" link:
  $lcp_display_output .= $this->get_posts_morelink($post);

  //Close li tag
  $lcp_display_output .= '</li>';
  
  
endwhile;

// Close the wrapper I opened at the beginning:
// $lcp_display_output .= '</ul>';

// Section end
$lcp_display_output .= '	</section> <!-- cd-timeline -->';

// If there's a "more link", show it:
$lcp_display_output .= $this->get_morelink();

// Get category posts count
$lcp_display_output .= $this->get_category_count();

//Pagination
$lcp_display_output .= $this->get_pagination();

// include 
$lcp_display_output .= '
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script>
';

$this->lcp_output = $lcp_display_output;