# Basic WordPress Functions
Repository with some basic and useful PHP functions and tags for WordPress developers. You can use in your theme.

All this functions can be found in [WordPress Code Reference](https://developer.wordpress.org/reference/).

## Show home URL
```php
<?php echo home_url(); ?>
```
**Output:** http://yoururl.com

## Show theme path
```php
<?php echo get_template_directory_uri(); ?>
```
**Output:** http://yoururl.com/wp-content/themes/theme_name

## Show page title
```php
<?php wp_title(); ?>
```
**Output:** Page Title

## Defining page template
```php
<?php /* Template Name: Home */ ?>
```

## Header indicator
```php
<?php wp_head(); ?>
```

## Footer indicator
```php
<?php wp_footer(); ?>
```

## Get header
```php
<?php get_header(); ?>
```
**Output:** header.php code

## Get footer
```php
<?php get_footer(); ?>
```
**Output:** footer.php code

## Get sidebar
```php
<?php get_sidebar(); ?>
```
**Output:** sidebar.php code

## Show the term of the search
```php
<?php echo get_search_query(); ?>
```
**Output:** search term

## Show the term of the search
```php
<?php echo get_search_query(); ?>
```
**Output:** search term

## Posts loop
```php
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
        // Post Content
 
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'No posts found' ); ?></p>
<?php endif; ?
```
**Output:** All Posts

## Show post or page title
```php
<?php the_title(); ?>
```
**Output:** Post or page title

## Show post content
```php
<?php the_content(); ?>
```
**Output:** Post content

## Show post or page link
```php
<?php the_permalink() ?>
```
**Output:** Post or page URL

## Show post excerpt
```php
<?php the_excerpt(); ?>
```
**Output:** Post excerpt

## Show post image
```php
<?php the_post_thumbnail(); ?>
```
**Output:** Post image

## Show post date
```php
<?php the_date(); ?>
```
**Output:** Post date

## Show post category
```php
<?php the_category( ', ' ); ?>
```
**Output:** Post category

## Show post author
```php
<?php the_author(); ?>
```
**Output:** Post author name

## Show categories list
```php
<?php wp_list_categories(); ?>
```
**Output:** All categories

## Reset Post Loop
```php
<?php wp_reset_postdata(); ?>
```

## If is a page
```php
<?php if (is_page( 'About' && 12 )) {
	// Is about page with id = 12
} ?>
```

## If is the website front page
```php
<?php if (is_front_page()) {
	// Is the front page
} ?>
```
