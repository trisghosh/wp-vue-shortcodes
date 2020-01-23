=== Wp Vue ===
Contributors: tristup
Donate link: http://www.tristupghosh.com/
Tags: WordPress, Vue, Shortcodes
Requires at least: 4.4
Tested up to: 5.2.2
Stable tag: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

WP Vue plugin will provide you the shortcode to show the Posts using the VUE JS. Page will shows as Single Page Application. 

== Major features in WP Vue include: ==

1. Shows the Posts using Vue-JS

2. Can limit the posts [ Else will take default value from Site Settings ]

3. Shows the Pagination

4. Single Page Appplication

5. Do Not reload the page.


== Shortcode & Attributes ==

#With all default values
[wp-vue-posts]

#With Post Per Page Option 
[wp-vue-posts posts_per_page="20"]

#With Offset Option 
[wp-vue-posts posts_per_page="20" offset="10"]

#With Order Option 
[wp-vue-posts posts_per_page="20" offset="10" order="desc"]
Order Options : "desc" for descending, "asc" for ascending

#With Order By Option 
[wp-vue-posts posts_per_page="20" offset="10" order="desc" orderby="date"]
Order By Options : "id" is deafult value, other valid values are "date", "relevance", "include", "title", and "slug"


== Installation ==
 
This section describes how to install the plugin and get it working.

1. Go to Wordpress Dashboard > Plugins > click on Installed plugins > look for add new at the top most of the screen and click here > Add Plugins > upload plugin > choose file -> click here and upload Simple Demo Importer plugin.

2. Activate Plugin through 'Plugins' menu in WordPress.

You will find 'Import Demos' menu in your WordPress admin panel.

== Files ==

1. demo_info.json : Demo Related JSON Structure
2. plugin_check.json : Required Plugin checking JSON Structure
3. screenshot.png : Default Screenshot for demo
4. theme_data.xml : Demo Content for specific demo
5. widget_data.wie : Widget Import file
6. redux.json : Redux Theme Option import file
7. free-slider-to-test.zip : Revolution Slider Demo file for test

== Screenshots ==
 
1. Plugin Check JSON Structure [ Demos Folder ] <img src="http://www.tristupghosh.com/wpplugins/simple-theme-demo-importer/screenshot_1.png">  
2. Theme Demo JSON Structure [ Demos/Demo Name Folder] <img src="http://www.tristupghosh.com/wpplugins/simple-theme-demo-importer/screenshot_2.png">

3. Required Plugin Notice <img src="http://www.tristupghosh.com/wpplugins/simple-theme-demo-importer/screenshot_3.png">

4. More Than one demo <img src="http://www.tristupghosh.com/wpplugins/simple-theme-demo-importer/screenshot_4.png">

5. Plugin File Structure <img src="http://www.tristupghosh.com/wpplugins/simple-theme-demo-importer/screenshot_5.png">

== Changelog == 

Intially it can be used for the Theme Demo Importer. 

