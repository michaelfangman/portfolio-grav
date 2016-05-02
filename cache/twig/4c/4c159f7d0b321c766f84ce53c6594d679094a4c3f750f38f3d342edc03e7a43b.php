<?php

/* partials/base.html.twig */
class __TwigTemplate_20695425ebd8f60c2bb20063eaaa44de4b1fc591796dced76c215f523122103e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>
<body id=\"top\" class=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('showcase', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "    </div>
    ";
        // line 85
        echo "    ";
        $this->displayBlock('bottom', $context, $blocks);
        // line 101
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 15
        echo "    <script src=\"https://use.typekit.net/alj5fvl.js\"></script>  
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/normalize.css", 1 => 101), "method");
        // line 20
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/template.css", 1 => 101), "method");
        // line 21
        echo "
        ";
        // line 29
        echo "    ";
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/modernizr-min.js", 1 => 100), "method");
        // line 35
        echo "      ";
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slick.min.js", 1 => 98), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/magnific-popup.js", 1 => 97), "method");
        // line 38
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/min/fangman-v1-min.js", 1 => 95), "method");
        // line 39
        echo "
    ";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
        echo "        <header id=\"site-navigation\">
            <div class=\"site-nav-logo\">
                <a href=\"";
        // line 50
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a>
            </div>
            <div class=\"menu-toggle\">Menu<div class=\"icon\"></div></div>
        </header>
        <div id=\"site-menu\">
            ";
        // line 55
        $this->displayBlock('header_extra', $context, $blocks);
        // line 56
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 57
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 57)->display($context);
            // line 58
            echo "            ";
        }
        // line 59
        echo "            ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 62
        echo "            <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
        </div>
        ";
    }

    // line 55
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 59
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "            ";
    }

    // line 66
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "        </section>
        ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "        <footer id=\"footer\">
        
        </footer>
        ";
    }

    // line 85
    public function block_bottom($context, array $blocks = array())
    {
        // line 86
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
        <script type=\"text/javascript\">
            var s = skrollr.init();
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 86,  259 => 85,  252 => 75,  249 => 74,  244 => 70,  239 => 71,  237 => 70,  232 => 69,  229 => 68,  224 => 66,  220 => 61,  217 => 60,  214 => 59,  209 => 55,  203 => 62,  200 => 59,  197 => 58,  194 => 57,  191 => 56,  189 => 55,  179 => 50,  175 => 48,  172 => 47,  167 => 39,  164 => 38,  161 => 37,  158 => 36,  156 => 35,  153 => 34,  150 => 33,  147 => 32,  143 => 29,  140 => 21,  137 => 20,  134 => 19,  131 => 18,  123 => 41,  121 => 32,  115 => 30,  113 => 18,  108 => 15,  103 => 12,  99 => 11,  96 => 10,  94 => 9,  86 => 8,  83 => 7,  80 => 6,  74 => 101,  71 => 85,  68 => 79,  66 => 74,  63 => 73,  61 => 68,  58 => 67,  56 => 66,  53 => 65,  51 => 47,  46 => 45,  43 => 44,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
    }
}
/* {% set theme_config = attribute(config.themes, config.system.pages.theme) %}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ grav.language.getActive ?: theme_config.default_lang }}">*/
/* <head>*/
/* */
/* {% block head %}*/
/*     <meta charset="utf-8" />*/
/*     <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>*/
/*     {% include 'partials/metadata.html.twig' %}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <link rel="icon" type="image/png" href="{{ url('theme://images/favicon.png', true) }}" />*/
/*     <link rel="canonical" href="{{ page.url(true, true) }}" />*/
/* */
/*     {# Typekit #}*/
/*     <script src="https://use.typekit.net/alj5fvl.js"></script>  */
/*     <script>try{Typekit.load({ async: true });}catch(e){}</script>*/
/* */
/*     {% block stylesheets %}*/
/*         {% do assets.addCss('theme://css/normalize.css',101) %}*/
/*         {% do assets.addCss('theme://css/template.css',101) %}*/
/* */
/*         {# {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie10.css') %}*/
/*         {% endif %}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*             {% do assets.addCss('theme://css/nucleus-ie9.css') %}*/
/*             {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}*/
/*         {% endif %} #}*/
/*     {% endblock %}*/
/*     {{ assets.css() }}*/
/* */
/*     {% block javascripts %}*/
/*         {% do assets.addJs('jquery',101) %}*/
/*         {% do assets.addJs('theme://js/min/modernizr-min.js',100) %}*/
/*       {#   {% do assets.addJs('theme://js/min/skrollr-min.js',99) %} #}*/
/*         {% do assets.addJs('theme://js/slick.min.js' ,98) %}*/
/*         {% do assets.addJs('theme://js/magnific-popup.js' ,97) %}*/
/*         {% do assets.addJs('theme://js/min/fangman-v1-min.js' ,95) %}*/
/* */
/*     {% endblock %}*/
/*     {{ assets.js() }}*/
/* */
/* {% endblock head%}*/
/* </head>*/
/* <body id="top" class="{{ page.header.body_classes }}">*/
/*     <div id="sb-site">*/
/*         {% block header %}*/
/*         <header id="site-navigation">*/
/*             <div class="site-nav-logo">*/
/*                 <a href="{{ base_url == '' ? '/' : base_url }}">{{ config.site.title }}</a>*/
/*             </div>*/
/*             <div class="menu-toggle">Menu<div class="icon"></div></div>*/
/*         </header>*/
/*         <div id="site-menu">*/
/*             {% block header_extra %}{% endblock %}*/
/*             {% if config.plugins.langswitcher.enabled %}*/
/*             {% include 'partials/langswitcher.html.twig' %}*/
/*             {% endif %}*/
/*             {% block header_navigation %}*/
/*             {% include 'partials/navigation.html.twig' %}*/
/*             {% endblock %}*/
/*             <span class="panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars"></span>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*         {% block showcase %}{% endblock %}*/
/* */
/*         {% block body %}*/
/*         <section id="body" class="{{ class }}">*/
/*             {% block content %}{% endblock %}*/
/*         </section>*/
/*         {% endblock %}*/
/* */
/*         {% block footer %}*/
/*         <footer id="footer">*/
/*         */
/*         </footer>*/
/*         {% endblock %}*/
/*     </div>*/
/*     {# <div class="sb-slidebar sb-left sb-width-thin">*/
/*         <div id="panel">*/
/*         {% include 'partials/navigation.html.twig' %}*/
/*         </div>*/
/*     </div> #}*/
/*     {% block bottom %}*/
/*         {{ assets.js('bottom') }}*/
/*         <script>*/
/*         $(function () {*/
/*             $(document).ready(function() {*/
/*               $.slidebars({*/
/*                 hideControlClasses: true,*/
/*                 scrollLock: true*/
/*               });*/
/*             });*/
/*         });*/
/*         </script>*/
/*         <script type="text/javascript">*/
/*             var s = skrollr.init();*/
/*         </script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
