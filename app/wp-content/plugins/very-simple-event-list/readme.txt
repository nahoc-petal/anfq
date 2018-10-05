=== Very Simple Event List ===
Contributors: Guido07111975
Version: 8.4
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.6
Tested up to: 4.9
Stable tag: trunk
Tags: simple, event, events, event list, event manager


This is a very simple plugin to display a list of events. Use a shortcode to display events on a page or use the widget.


== DESCRIPTION ==
= About =
This is a very simple plugin to display a list of events.

Use a shortcode to display events on a page or use the widget.

You can personalize your event list via the settingspage or by adding attributes to the shortcode or the widget.

= How to use =
After installation go to menu item "Events" and start adding your events.

Create a page and:

* Use shortcode `[vsel]` to display upcoming events (including today)
* Use shortcode `[vsel-past-events]` to display past events
* Use shortcode `[vsel-current-events]` to display current events
* Use shortcode `[vsel-all-events]` to display all events

Or go to Appearance > Widgets and add the widget to your sidebar.

= Settingspage =
Via Settings > VSEL you can:

* Keep events and settings when uninstalling plugin
* Left or right align meta section and featured image
* Show a summary instead of all content
* Link title to the single event page
* Link featured image to the single event page
* Set size that is being used for the featured image
* Change or hide event labels

= Shortcode attributes =
You can set amount of events per page. This will overwrite amount set in Settings > Reading.

* Example: `[vsel posts_per_page=5]`

You can display events from certain categories. You should enter the category slug. The slug is not always the same as the name of the category.

* Example: `[vsel event_cat="first-category, second-category"]`

The default order of the upcoming and current events list is ascending. The default order of the past and all events list is descending.

* Change order from ascending to descending: `[vsel order=desc]`
* Change order from descending to ascending: `[vsel order=asc]`

You can change the text that is being displayed when there are no events.

* Example: `[vsel no_events_text="your text here"]`

You can also add multiple attributes. Use a single whitespace to separate multiple attributes.

* Example: `[vsel posts_per_page=5 event_cat="first-category, second-category"]`

= Widget attributes =
The widget supports the same attributes. Enter them without shortcode itself and without brackets.

Example 1:

* If shortcode attribute is: `[vsel posts_per_page=5]`
* Widget attribute will be: `posts_per_page=5`

Example 2:

* If shortcode attribute is: `[vsel event_cat="first-category, second-category"]`
* Widget attribute will be: `event_cat="first-category, second-category"`

= Featured image =
WordPress creates duplicate images in different sizes upon upload. These sizes can be set via Settings > Media.

Via the settingspage you can change the default image size that is being used for the featured image.

By default the "post-thumbnail" size of your theme is being used. You might want to change this to avoid a tiny or blurry featured image.

I have set the featured image width at max. 40% of the event content area.

The featured image in a single event is handled by your theme.

= Theme template files =
Plugin has basic support for theme template files that are being used to display a single event, the event category page and the search results page.

It does one thing: it hooks into the `the_content()` and `the_excerpt()` function.

If your theme uses it's own customized version and you visit one of the pages mentioned above, the event(s) might not be displayed properly or not at all.

= Single event =
In most cases PHP file "single" is being used to display a single event. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you can add a PHP file called "single-event" in your theme folder and customize it to your needs.

= Event category page =
In most cases PHP file "archive" is being used to display a category (archive) page. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you can add a PHP file called "taxonomy-event_cat" in your theme folder and customize it to your needs.

You can also use a shortcode on a page to display events from certain categories. For more info check the "Shortcode attributes" section.

The setting to display a summary instead of all content will only work when using a shortcode on a page.

= Search results page =
You can list events on your search results page, using a custom search query.

PHP file "search" is being used to display search results. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you should hook into this file or modify this file.

= Uninstall =
If you uninstall plugin via dashboard all events and settings will be removed from database.

It removes all posts with (custom) post type "event".

You can avoid this via Settings > VSEL.

= Question? = 
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-event-list) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== INSTALLATION ==
Please check Description section for installation info.


== Frequently Asked Questions ==
= How can I change date format? =
You can set date format in dashboard via Settings > General.

The datepicker and date input field in dashboard only support 2 numeric date formats: "day-month-year" (30-01-2016) and "year-month-day" (2016-01-30).

If the date format set in dashboard does not match, it will be changed into 1 of the 2 above.

= How do I set plugin language? =
Plugin will use the site language, set in Settings > General.

If plugin isn't translated into this language, language fallback will be English.

= What do you mean with current events? =
Current events are events I can visit today. So this can be an one-day or multi-day event.

= Are events also listed on time? =
No, because input field for time is a regular text input this is not possible.

= Can I display a summary instead of all content? =
Yes, this is possible.

You can activate the summary via Settings > VSEL.

And you can set a custom summary while adding an event. This will replace the default summary.

= Can I hide event labels on the single event page? =
This is only possible when using custom CSS.

= What does "Link to more info" mean? =
While adding an event you can add a link (an URL) to a post, page or website.

This can be useful in case additional info is available elsewhere.

And you can label this link. Default label is "More info".

= What does "Link to all events" mean? =
While adding a widget you can add a link (an URL) to a page with all events.

This can be useful because in most cases you only display a few events in a widget.

And you can label this link. Default label is "All events".

= Why no pagination in widget? =
Pagination is not available because it's not working properly in a widget.

But you can set a link to a page with all events.

= Can I overwrite plugin template via my (child) theme? =
No, this is currently not possible.

= Why is the page with all events not displayed properly? =
Go to the page in your dashboard and check the shortcode in "Text" mode.

If you have added the shortcode in "Visual" mode, it might be wrapped in HTML tags, such as: `<script>[vsel]</script>`

You should remove the HTML tags and resave the page.

= Why a 404 (nothing found) when I click the pagination? =
This might be caused because the slug of your page ends with "event". This causes a conflict with my plugin.

You should change this slug into something else. The slug is not always the same as the name of the page.

= Why a 404 (nothing found) when I click the title link? =
This is mostly caused by the permalink settings. Please reset the permalink via Settings > Permalinks.

= Can I use multiple shortcodes on the same page? =
Yes, as far as I know there are no issues when using multiple shortcodes.

= Why an error notification instead of a date? =
An error notification is displayed in case start date begins after end date. To solve this please reset date.

= Why no start date in dashboard? =
All events posted with version 4.0 and older have one date only. To solve this please reset date.

= Why no meta, image or categories while adding an event? =
If these boxes are not present, they might be unchecked in Screen Options.

= Can I add or hide columns on the events page in dashboard? =
Yes, but you should install an additional plugin for this.

You could install for example: [Admin Columns](https://wordpress.org/plugins/codepress-admin-columns/)

= Does VSEL support Gutenberg? =
Yes, plugin has basic support for Gutenberg. This means you can add events using the Gutenberg editor.

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link at my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 8.4 =
* new settings to left or right align meta section and featured image
* now you don't have to use custom CSS for this
* added tabbed navigation on settingspage
* some textual changes
* updated stylesheet

= Version 8.3 =
* readme file: removed donate link
* updated theme author info
* credits in changelog: removed all full names (because of the GDPR)

= Version 8.2 =
* fix: the default order of the past and all events list is descending (thanks gahmedova)
* updated both shortcode files

= Version 8.1 =
* dashboard: relocated the event meta section to underneath content area
* minor textual change on settingspage
* minor change in stylesheet
* updated readme file

= Version 8.0 =
* changed css class no-events into vsel-no-events
* file vsel-templates: removed unnecessary escaping from empty variables
* file vsel: changed the id of variable event_date into event_end_date
* file vsel: changed the id of one of the custom columns on the events page (again)
* these id changes have no effect on your events or settings

For all versions please check file changelog.


== Screenshots == 
1. Very Simple Event List (Twenty Seventeen theme).
2. Very Simple Event List single event (Twenty Seventeen theme).
3. Very Simple Event List widget (Twenty Seventeen theme).
4. Very Simple Event List (dashboard).
5. Very Simple Event List single event (dashboard).
6. Very Simple Event List widget (dashboard).
7. Very Simple Event List settingspage (dashboard).
8. Very Simple Event List settingspage (dashboard).