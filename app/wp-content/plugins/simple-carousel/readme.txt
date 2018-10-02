=== Simple Carousel ===
Contributors: sean137
Tags: carousel, slides
Requires at least: 4.5
Tested up to: 4.5
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple Carousel is a basic image carousel, allowing the user to flip through slides and click on them to visit the link.

== Description ==

Simple Carousel enables an image carousel, with each slide that could be manually defined or automatically generated from posts in a category. It features a forward and backward button, and skip to slide buttons on the bottom.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= What features does this carousel have? =

Move forward/backwards buttons.

Skip to specific slide buttons.

Multiple carousels can be used per page.

= How do I make a carousel with manually defined slides? =

Each slide is defined with three parameters: img, link and title. Each parameter has a follow number preceded by a _ to define which slide number it is, beginning at 0.


For example a carousel with two slides:

[simple_carousel img_0=“First slide image url” link_0=“First slide link url” title_0=“Title (alternative image tag) for first slide image” img_1=“Second slide image url” link_0=“Second slide link url” title_1=“Second slide text”]

= How do I make a carousel to display posts from a category? =

[simple_carousel type=“category” category_name=“<category name>”]

Accepts parameters that the function get_posts uses (https://codex.wordpress.org/Template_Tags/get_posts) to further refine which posts are displayed.

= What other parameters does this shortcode accept? =

class: adds the value to the div.carousel class tag for CSS styling, ex: “float-left”
width: width of the carousel, usually defined in px, ex: “960px”, default: “100%”

== Screenshots ==

1. Demonstration of the carousel

== Screenshots ==


== Changelog ==

= 1.1.0 =
* CSS and JS are enqueued when the function is called
* Redesigned the animation to be simpler and more reliable
* Basic swipe left/right on mobile

= 1.0 =
* Initial release