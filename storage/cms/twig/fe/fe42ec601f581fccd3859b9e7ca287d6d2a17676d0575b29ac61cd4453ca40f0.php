<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/XAMPP/xamppfiles/htdocs/install-master/themes/tungtest/layouts/layout_1.htm */
class __TwigTemplate_7b3d77f38ea1aa8da2544fd72d62b30ff0a732037f582b1cbde5cc6678e9bf13 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Layout Test</title>
\t<!-- ======== META TAGS ======== -->
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- ======== FAVICONS ======== -->
\t<link rel=\"icon\" href=\"favicon.ico\">
\t<link rel=\"apple-touch-icon\" href=\"favicon.png\">
\t<!-- ======== STYLESHEETS ======== -->
\t<!-- Stylesheet -->
\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/normalize.css"]);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/typography.css"]);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/fontawesome.css"]);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/weathericons.css"]);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/colors.css"]);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/style.css"]);
        echo "\"><link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/demo.css"]);
        echo "\">
\t<!-- ======== RESPONSIVE ======== -->
\t<link rel=\"stylesheet\" media=\"(max-width:767px)\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/0-responsive.css"]);
        echo "\">
\t<link rel=\"stylesheet\" media=\"(min-width:768px) and (max-width:1024px)\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/768-responsive.css"]);
        echo "\">
\t<link rel=\"stylesheet\" media=\"(min-width:1025px) and (max-width:1199px)\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/1025-responsive.css"]);
        echo "\">
\t<link rel=\"stylesheet\" media=\"(min-width:1200px)\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/1200-responsive.css"]);
        echo "\">
\t<!-- ======== GOOGLE FONTS ======== -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
\t<div id=\"wrapper\" class=\"wide\">
\t\t<!-- Header -->
\t\t<header id=\"header\">
\t\t\t<!-- Header meta -->
\t\t\t<div class=\"header_meta\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- WEATHER REPORT -->
\t\t\t\t\t<div class=\"weather_report\">
\t\t\t\t\t\t<span class=\"location\">London, UK</span>
\t\t\t\t\t\t<i class=\"wi wi-cloudy\"></i>
\t\t\t\t\t\t<span class=\"temp\">+25°</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TOP MENU -->
\t\t\t\t\t<div class=\"open_top_menu\"><i class=\"fa fa-bars\"></i></div>
\t\t\t\t\t<nav class=\"top_menu\">
\t\t\t\t\t\t<ul class=\"top_main_menu\">
\t\t\t\t\t\t\t<li><a href=\"index-2.html\"><span>Homepages</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Homepage - default</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_1.html\">Homepage - fullwidth slider</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_5.html\">Homepage - no sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_3.html\">Homepage - timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_4.html\">Homepage - standard posts</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\"><span>Blog</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog standard</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_1.html\">Blog list</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_2.html\">Blog timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_3.html\">Blog full</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_4.html\">Blog minimal</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_5.html\">Blog no sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"post_standard.html\"><span>Posts</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"post_standard.html\">Standard post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_gallery.html\">Gallery post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_video.html\">Video post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_audio.html\">Audio post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_no_featured.html\">No featured post</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"page_shortcodes.html\"><span>Pages</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"page_shortcodes.html\">Shortcodes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_fullwidth.html\">Full width</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_404.html\">404 Page</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_contact.html\">Contact page</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_left_sidebar.html\">Left sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"shop_category.html\"><span>Shop</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"shop_category.html\">Shop category</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"shop_single.html\">Shop single</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"shop_single_fullwidth.html\">Shop single full width</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"gallery_category.html\"><span>Gallery</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_category.html\">Gallery category</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_single.html\">Gallery single</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"http://themeforest.net/?ref=CodeoStudio\" target=\"_blank\">Buy template</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Header body -->
\t\t\t<div class=\"header_body\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Banner -->
\t\t\t\t\t<div class=\"header_ad\">
\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Tim kiem -->
\t\t\t\t\t";
        // line 109
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("componentSearch"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 110
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Header menu -->
\t\t\t<div class=\"header_menu\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"open_main_menu\"><i class=\"fa fa-bars\"></i></div>
\t\t\t\t\t<nav class=\"main_menu dark clearfix\">
\t\t\t\t\t\t<ul class=\"header_main_menu clearfix\">
\t\t\t\t\t\t\t<li class=\"current-menu-item\" style=\"border-bottom-color: #ff6600\"><a href=\"#\"><span>Home</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Homepage - default</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_1.html\">Homepage - fullwidth slider</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_5.html\">Homepage - no sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_3.html\">Homepage - timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_4.html\">Homepage - standard posts</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #3aadff\"><a href=\"#\"><span>Blog</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog standard</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_1.html\">Blog list</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_2.html\">Blog timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_3.html\">Blog full</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_4.html\">Blog minimal</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_5.html\">Blog no sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #ff8927\"><a href=\"page_shortcodes.html\">Shortcodes</a></li>
\t\t\t\t\t\t\t<li class=\"has_dt_mega_menu\" style=\"border-bottom-color: #b43ce3\"><a href=\"page_shortcodes.html\"><span>Mega menu</span></a>
\t\t\t\t\t\t\t\t<ul class=\"dt_mega_menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Timeline posts</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget_timeline_posts\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">12:15 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pin_holder\"><div class=\"inside\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Sneaker Stories Industrial M. Jordan</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">Sep 24</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">16:14 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pin_holder\"><div class=\"inside\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">NASCAR Offers to Confederate Flag</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">Oct 31</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">23:54 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pin_holder\"><div class=\"inside\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Wimbledon 2015: Heat Break Rule</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Recent posts</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget_custom_posts\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_format\"><i class=\"fa fa-volume-up\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Real Madrid Worth More Than the Dallas Cowboys</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_format\"><i class=\"fa fa-quote-left\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Doc Explores the Rush of Extreme</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_format\"><i class=\"fa fa-camera\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">The Shrinking Pool Cup</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget widget_categories\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Categories</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Travel</a>&nbsp;(5)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Sport</a>&nbsp;(0)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Entertainment</a>&nbsp;(38)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">People</a>&nbsp;(685)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Fashion</a>&nbsp;(3)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Movies/TV</a>&nbsp;(12)</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Advertisement</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget_advertisement_300x250\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://themeforest.net/?ref=CodeoStudio\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #37c082\"><a href=\"post_standard.html\"><span>Posts</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"post_standard.html\">Standard post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_gallery.html\">Gallery post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_video.html\">Video post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_audio.html\">Audio post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_no_featured.html\">No featured post</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #3aadff\"><a href=\"blog.html\">Business</a></li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #7cc038\"><a href=\"blog.html\">Photography</a></li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #3aadff\"><a href=\"blog.html\">Music</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<br/>
\t\t\t\t\t";
        // line 243
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 244
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t</div>
\t
\t<!-- Javascripts -->
\t<script src=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 251
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
\t\t\t\t\t\t\t";
        // line 252
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 253
        echo "\t<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-ui.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 254
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-stickykit.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 255
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-lightbox.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 256
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-fitvids.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 257
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-carousel.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 258
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-init.js"]);
        echo "\"></script>
\t<script src=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-demo.js"]);
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/install-master/themes/tungtest/layouts/layout_1.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 259,  361 => 258,  357 => 257,  353 => 256,  349 => 255,  345 => 254,  340 => 253,  336 => 252,  332 => 251,  328 => 250,  320 => 244,  318 => 243,  183 => 110,  179 => 109,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>Layout Test</title>
\t<!-- ======== META TAGS ======== -->
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- ======== FAVICONS ======== -->
\t<link rel=\"icon\" href=\"favicon.ico\">
\t<link rel=\"apple-touch-icon\" href=\"favicon.png\">
\t<!-- ======== STYLESHEETS ======== -->
\t<!-- Stylesheet -->
\t<link rel=\"stylesheet\" href=\"{{['assets/css/normalize.css']|theme}}\">
\t<link rel=\"stylesheet\" href=\"{{['assets/css/typography.css']|theme}}\">
\t<link rel=\"stylesheet\" href=\"{{['assets/css/fontawesome.css']|theme}}\">
\t<link rel=\"stylesheet\" href=\"{{['assets/css/weathericons.css']|theme}}\">
\t<link rel=\"stylesheet\" href=\"{{['assets/css/colors.css']|theme}}\">
\t<link rel=\"stylesheet\" href=\"{{['assets/css/style.css']|theme}}\"><link rel=\"stylesheet\" href=\"{{['assets/css/demo.css']|theme}}\">
\t<!-- ======== RESPONSIVE ======== -->
\t<link rel=\"stylesheet\" media=\"(max-width:767px)\" href=\"{{['assets/css/0-responsive.css']|theme}}\">
\t<link rel=\"stylesheet\" media=\"(min-width:768px) and (max-width:1024px)\" href=\"{{['assets/css/768-responsive.css']|theme}}\">
\t<link rel=\"stylesheet\" media=\"(min-width:1025px) and (max-width:1199px)\" href=\"{{['assets/css/1025-responsive.css']|theme}}\">
\t<link rel=\"stylesheet\" media=\"(min-width:1200px)\" href=\"{{['assets/css/1200-responsive.css']|theme}}\">
\t<!-- ======== GOOGLE FONTS ======== -->
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
\t<div id=\"wrapper\" class=\"wide\">
\t\t<!-- Header -->
\t\t<header id=\"header\">
\t\t\t<!-- Header meta -->
\t\t\t<div class=\"header_meta\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- WEATHER REPORT -->
\t\t\t\t\t<div class=\"weather_report\">
\t\t\t\t\t\t<span class=\"location\">London, UK</span>
\t\t\t\t\t\t<i class=\"wi wi-cloudy\"></i>
\t\t\t\t\t\t<span class=\"temp\">+25°</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- TOP MENU -->
\t\t\t\t\t<div class=\"open_top_menu\"><i class=\"fa fa-bars\"></i></div>
\t\t\t\t\t<nav class=\"top_menu\">
\t\t\t\t\t\t<ul class=\"top_main_menu\">
\t\t\t\t\t\t\t<li><a href=\"index-2.html\"><span>Homepages</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Homepage - default</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_1.html\">Homepage - fullwidth slider</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_5.html\">Homepage - no sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_3.html\">Homepage - timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_4.html\">Homepage - standard posts</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\"><span>Blog</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog standard</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_1.html\">Blog list</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_2.html\">Blog timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_3.html\">Blog full</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_4.html\">Blog minimal</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_5.html\">Blog no sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"post_standard.html\"><span>Posts</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"post_standard.html\">Standard post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_gallery.html\">Gallery post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_video.html\">Video post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_audio.html\">Audio post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_no_featured.html\">No featured post</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"page_shortcodes.html\"><span>Pages</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"page_shortcodes.html\">Shortcodes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_fullwidth.html\">Full width</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_404.html\">404 Page</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_contact.html\">Contact page</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"page_left_sidebar.html\">Left sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"shop_category.html\"><span>Shop</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"shop_category.html\">Shop category</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"shop_single.html\">Shop single</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"shop_single_fullwidth.html\">Shop single full width</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"gallery_category.html\"><span>Gallery</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_category.html\">Gallery category</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"gallery_single.html\">Gallery single</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"http://themeforest.net/?ref=CodeoStudio\" target=\"_blank\">Buy template</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Header body -->
\t\t\t<div class=\"header_body\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Banner -->
\t\t\t\t\t<div class=\"header_ad\">
\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Tim kiem -->
\t\t\t\t\t{% component 'componentSearch' %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Header menu -->
\t\t\t<div class=\"header_menu\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"open_main_menu\"><i class=\"fa fa-bars\"></i></div>
\t\t\t\t\t<nav class=\"main_menu dark clearfix\">
\t\t\t\t\t\t<ul class=\"header_main_menu clearfix\">
\t\t\t\t\t\t\t<li class=\"current-menu-item\" style=\"border-bottom-color: #ff6600\"><a href=\"#\"><span>Home</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Homepage - default</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_1.html\">Homepage - fullwidth slider</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_5.html\">Homepage - no sidebar</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_3.html\">Homepage - timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"index_4.html\">Homepage - standard posts</a></li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #3aadff\"><a href=\"#\"><span>Blog</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog standard</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_1.html\">Blog list</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_2.html\">Blog timeline</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_3.html\">Blog full</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_4.html\">Blog minimal</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"blog_5.html\">Blog no sidebar</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #ff8927\"><a href=\"page_shortcodes.html\">Shortcodes</a></li>
\t\t\t\t\t\t\t<li class=\"has_dt_mega_menu\" style=\"border-bottom-color: #b43ce3\"><a href=\"page_shortcodes.html\"><span>Mega menu</span></a>
\t\t\t\t\t\t\t\t<ul class=\"dt_mega_menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Timeline posts</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget_timeline_posts\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 3</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">12:15 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pin_holder\"><div class=\"inside\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Sneaker Stories Industrial M. Jordan</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">Sep 24</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">16:14 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pin_holder\"><div class=\"inside\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">NASCAR Offers to Confederate Flag</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">Oct 31</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"time\">23:54 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pin_holder\"><div class=\"inside\"></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Wimbledon 2015: Heat Break Rule</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Recent posts</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget_custom_posts\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_format\"><i class=\"fa fa-volume-up\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Real Madrid Worth More Than the Dallas Cowboys</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_format\"><i class=\"fa fa-quote-left\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">Doc Explores the Rush of Extreme</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_format\"><i class=\"fa fa-camera\"></i></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item_content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"post_standard.html\">The Shrinking Pool Cup</a></h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget widget_categories\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Categories</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Travel</a>&nbsp;(5)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Sport</a>&nbsp;(0)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Entertainment</a>&nbsp;(38)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">People</a>&nbsp;(685)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Fashion</a>&nbsp;(3)</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Movies/TV</a>&nbsp;(12)</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Widget -->
\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"widget_title\"><span>Advertisement</span></h3>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget_advertisement_300x250\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"http://themeforest.net/?ref=CodeoStudio\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #37c082\"><a href=\"post_standard.html\"><span>Posts</span></a>
\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"post_standard.html\">Standard post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_gallery.html\">Gallery post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_video.html\">Video post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_audio.html\">Audio post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"post_no_featured.html\">No featured post</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #3aadff\"><a href=\"blog.html\">Business</a></li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #7cc038\"><a href=\"blog.html\">Photography</a></li>
\t\t\t\t\t\t\t<li style=\"border-bottom-color: #3aadff\"><a href=\"blog.html\">Music</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<br/>
\t\t\t\t\t{% page %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t</div>
\t
\t<!-- Javascripts -->
\t<script src=\"{{['assets/js/jquery.js']|theme}}\"></script>
\t<script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
\t\t\t\t\t\t\t{% framework %}
\t<script src=\"{{['assets/js/jquery-ui.js']|theme}}\"></script>
\t<script src=\"{{['assets/js/jquery-stickykit.js']|theme}}\"></script>
\t<script src=\"{{['assets/js/jquery-lightbox.js']|theme}}\"></script>
\t<script src=\"{{['assets/js/jquery-fitvids.js']|theme}}\"></script>
\t<script src=\"{{['assets/js/jquery-carousel.js']|theme}}\"></script>
\t<script src=\"{{['assets/js/jquery-init.js']|theme}}\"></script>
\t<script src=\"{{['assets/js/jquery-demo.js']|theme}}\"></script>

</body>
</html>", "/Applications/XAMPP/xamppfiles/htdocs/install-master/themes/tungtest/layouts/layout_1.htm", "");
    }
}
