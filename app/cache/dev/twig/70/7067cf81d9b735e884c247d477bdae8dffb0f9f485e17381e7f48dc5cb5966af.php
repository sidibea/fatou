<?php

/* NBMainBundle::index.html.twig */
class __TwigTemplate_d00b5746dcfb1c8975b31d40c617794aa43de7a9e7e0aeed4c4dfc62ee9c9fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb1e8be3081d1dc62ac657e0210b087cf4d6f8724e4454724e8cf8b8941d5d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1e8be3081d1dc62ac657e0210b087cf4d6f8724e4454724e8cf8b8941d5d49->enter($__internal_bb1e8be3081d1dc62ac657e0210b087cf4d6f8724e4454724e8cf8b8941d5d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1e8be3081d1dc62ac657e0210b087cf4d6f8724e4454724e8cf8b8941d5d49->leave($__internal_bb1e8be3081d1dc62ac657e0210b087cf4d6f8724e4454724e8cf8b8941d5d49_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfbb803b5415f065d53183cfe54568666826b756473b69109e36f1e320340e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbb803b5415f065d53183cfe54568666826b756473b69109e36f1e320340e41->enter($__internal_bfbb803b5415f065d53183cfe54568666826b756473b69109e36f1e320340e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " nextBus - La première plateforme d'achat et de réservation de billet de bus en ligne au Mali !";
        
        $__internal_bfbb803b5415f065d53183cfe54568666826b756473b69109e36f1e320340e41->leave($__internal_bfbb803b5415f065d53183cfe54568666826b756473b69109e36f1e320340e41_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_194e9063232d7a0e171aecca23d61f3cc5348ab04c98b11eb02a4cedcc566b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194e9063232d7a0e171aecca23d61f3cc5348ab04c98b11eb02a4cedcc566b89->enter($__internal_194e9063232d7a0e171aecca23d61f3cc5348ab04c98b11eb02a4cedcc566b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 4
        echo "    voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,
    billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,
    plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente
    de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,
    billet de bus mali, plateforme de reservation de billet de bus au Mali
";
        
        $__internal_194e9063232d7a0e171aecca23d61f3cc5348ab04c98b11eb02a4cedcc566b89->leave($__internal_194e9063232d7a0e171aecca23d61f3cc5348ab04c98b11eb02a4cedcc566b89_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c4a5da12a681288ce99508f07e81c978d70ab923150521c7f00e69e3b3dfc9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4a5da12a681288ce99508f07e81c978d70ab923150521c7f00e69e3b3dfc9fb->enter($__internal_c4a5da12a681288ce99508f07e81c978d70ab923150521c7f00e69e3b3dfc9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <style>
        section#content {  min-height: 1000px; padding: 0; position: relative; overflow: hidden; }
        #main { padding-top: 200px; }
        .page-title, .page-description { color: #fff; }
        .page-title { font-size: 4.1667em; font-weight: bold; }
        .page-description { font-size: 2.5em; margin-bottom: 50px; }
        .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }
        .featured figure a { border: 2px solid #fff; }
        .featured .details { margin-right: 10px; }
        .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }
    </style>
    <section id=\"content\" class=\"slideshow-bg\">
        <div id=\"slideshow\">
            <div class=\"flexslider\">
                <ul class=\"slides\">
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url(";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/slider1.png")), "html", null, true);
        echo ");\"></div>
                    </li>
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/slider2.png")), "html", null, true);
        echo ");\"></div>
                    </li>
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url(";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/slider3.png")), "html", null, true);
        echo ");\"></div>
                    </li>
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url(";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/slider4.png")), "html", null, true);
        echo ");\"></div>
                    </li>

                </ul>
            </div>
        </div>
        <div class=\"container\">
            <div id=\"main\">
                <h1 class=\"page-title\">Voyagez Autrement avec nextBus!</h1>
                <h2 class=\"page-description col-md-6 no-float no-padding\">Nous vous apportons une expérience de voyage moderne, confortable et connectée.</h2>
                <div class=\"search-box-wrapper style2\">
                    <div class=\"search-box\">
                        <ul class=\"search-tabs clearfix\">
                            <li class=\"active\"><a href=\"#national-tab\" data-toggle=\"tab\"><i class=\"soap-icon-hotel\"></i><span>NATIONAL</span></a></li>
                            <li><a href=\"#international-tab\" data-toggle=\"tab\"><i class=\"soap-icon-plane-right takeoff-effect\"></i><span>INTERNATIONAL</span></a></li>
                        </ul>
                        <div class=\"visible-mobile\">
                            <ul id=\"mobile-search-tabs\" class=\"search-tabs clearfix\">
                                <li class=\"active\"><a href=\"#national-tab\">NATIONAL</a></li>
                                <li><a href=\"#international-tab\">INTERNATIONAL</a></li>
                            </ul>
                        </div>

                        <div class=\"search-tab-content\">
                            <div class=\"tab-pane fade active in\" id=\"national-tab\">
                                <form action=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_listing");
        echo "\" method=\"get\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>De</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\" name=\"from\">
                                                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["national"]) || array_key_exists("national", $context) ? $context["national"] : (function () { throw new Twig_Error_Runtime('Variable "national" does not exist.', 69, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 70
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "nom", array()), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>A</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\" name=\"to\">
                                                        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["national"]) || array_key_exists("national", $context) ? $context["national"] : (function () { throw new Twig_Error_Runtime('Variable "national" does not exist.', 81, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 82
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "nom", array()), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>Date de voyage</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" name=\"dateJ\" class=\"input-text full-width\" placeholder=\"\" />
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <label>Date de retour</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" name=\"dateR\" class=\"input-text full-width\" placeholder=\"\" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>&nbsp; </label>
                                                    <button class=\"full-width\">RECHERCHER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class=\"tab-pane fade\" id=\"international-tab\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>De</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\">
                                                        <option value=\"\">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>A</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\">
                                                        <option value=\"\">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>Date de retour</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" class=\"input-text full-width\" placeholder=\"Departure Date\" />
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <label>Date de voyage</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" class=\"input-text full-width\" placeholder=\"Departure Date\" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>&nbsp; </label>
                                                    <button class=\"full-width\">RECHERCHER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"featured image-box\">
            <div class=\"details pull-left\">
                <h3>Tropical Beach,<br/>Hotel and Resorts</h3>
                <h5>THAILAND</h5>
            </div>
            <figure class=\"pull-left\">
                <a class=\"badge-container\" href=\"#\">
                    <span class=\"badge-content right-side\">From \$200</span>
                    <img width=\"64\" height=\"64\" alt=\"\" src=\"http://placehold.it/64x64\" class=\"\">
                </a>
            </figure>
        </div>
    </section>
";
        
        $__internal_c4a5da12a681288ce99508f07e81c978d70ab923150521c7f00e69e3b3dfc9fb->leave($__internal_c4a5da12a681288ce99508f07e81c978d70ab923150521c7f00e69e3b3dfc9fb_prof);

    }

    // line 247
    public function block_footer($context, array $blocks = array())
    {
        $__internal_24029a823f786f87a1c1ec7a6a42c22cc95db395f4e6aa429e5c14aa22035bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24029a823f786f87a1c1ec7a6a42c22cc95db395f4e6aa429e5c14aa22035bb8->enter($__internal_24029a823f786f87a1c1ec7a6a42c22cc95db395f4e6aa429e5c14aa22035bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_24029a823f786f87a1c1ec7a6a42c22cc95db395f4e6aa429e5c14aa22035bb8->leave($__internal_24029a823f786f87a1c1ec7a6a42c22cc95db395f4e6aa429e5c14aa22035bb8_prof);

    }

    // line 250
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6fec03843b25536335451a55c403b5877aa6d6ca06a2d06140aff73be70e51a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fec03843b25536335451a55c403b5877aa6d6ca06a2d06140aff73be70e51a3->enter($__internal_6fec03843b25536335451a55c403b5877aa6d6ca06a2d06140aff73be70e51a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 251
        echo "    <script type=\"text/javascript\">
        tjq(\".flexslider\").flexslider({
            animation: \"fade\",
            controlNav: false,
            animationLoop: true,
            directionNav: false,
            slideshow: true,
            slideshowSpeed: 5000
        });
    </script>
";
        
        $__internal_6fec03843b25536335451a55c403b5877aa6d6ca06a2d06140aff73be70e51a3->leave($__internal_6fec03843b25536335451a55c403b5877aa6d6ca06a2d06140aff73be70e51a3_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 251,  368 => 250,  356 => 247,  189 => 84,  178 => 82,  174 => 81,  163 => 72,  152 => 70,  148 => 69,  138 => 62,  110 => 37,  104 => 34,  98 => 31,  92 => 28,  74 => 12,  68 => 11,  56 => 4,  50 => 3,  38 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %} nextBus - La première plateforme d'achat et de réservation de billet de bus en ligne au Mali !{% endblock %}
{% block keywords %}
    voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,
    billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,
    plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente
    de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,
    billet de bus mali, plateforme de reservation de billet de bus au Mali
{% endblock %}

{% block content %}
    <style>
        section#content {  min-height: 1000px; padding: 0; position: relative; overflow: hidden; }
        #main { padding-top: 200px; }
        .page-title, .page-description { color: #fff; }
        .page-title { font-size: 4.1667em; font-weight: bold; }
        .page-description { font-size: 2.5em; margin-bottom: 50px; }
        .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }
        .featured figure a { border: 2px solid #fff; }
        .featured .details { margin-right: 10px; }
        .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }
    </style>
    <section id=\"content\" class=\"slideshow-bg\">
        <div id=\"slideshow\">
            <div class=\"flexslider\">
                <ul class=\"slides\">
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url({{ absolute_url(asset('assets/images/slider/slider1.png')) }});\"></div>
                    </li>
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url({{ absolute_url(asset('assets/images/slider/slider2.png')) }});\"></div>
                    </li>
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url({{ absolute_url(asset('assets/images/slider/slider3.png')) }});\"></div>
                    </li>
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url({{ absolute_url(asset('assets/images/slider/slider4.png')) }});\"></div>
                    </li>

                </ul>
            </div>
        </div>
        <div class=\"container\">
            <div id=\"main\">
                <h1 class=\"page-title\">Voyagez Autrement avec nextBus!</h1>
                <h2 class=\"page-description col-md-6 no-float no-padding\">Nous vous apportons une expérience de voyage moderne, confortable et connectée.</h2>
                <div class=\"search-box-wrapper style2\">
                    <div class=\"search-box\">
                        <ul class=\"search-tabs clearfix\">
                            <li class=\"active\"><a href=\"#national-tab\" data-toggle=\"tab\"><i class=\"soap-icon-hotel\"></i><span>NATIONAL</span></a></li>
                            <li><a href=\"#international-tab\" data-toggle=\"tab\"><i class=\"soap-icon-plane-right takeoff-effect\"></i><span>INTERNATIONAL</span></a></li>
                        </ul>
                        <div class=\"visible-mobile\">
                            <ul id=\"mobile-search-tabs\" class=\"search-tabs clearfix\">
                                <li class=\"active\"><a href=\"#national-tab\">NATIONAL</a></li>
                                <li><a href=\"#international-tab\">INTERNATIONAL</a></li>
                            </ul>
                        </div>

                        <div class=\"search-tab-content\">
                            <div class=\"tab-pane fade active in\" id=\"national-tab\">
                                <form action=\"{{ path('nb_main_listing') }}\" method=\"get\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>De</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\" name=\"from\">
                                                        {% for key, val in national %}
                                                            <option value=\"{{ val.id }}\">{{ val.nom }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>A</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\" name=\"to\">
                                                        {% for key, val in national %}
                                                            <option value=\"{{ val.id }}\">{{ val.nom }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>Date de voyage</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" name=\"dateJ\" class=\"input-text full-width\" placeholder=\"\" />
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <label>Date de retour</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" name=\"dateR\" class=\"input-text full-width\" placeholder=\"\" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>&nbsp; </label>
                                                    <button class=\"full-width\">RECHERCHER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class=\"tab-pane fade\" id=\"international-tab\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"row\">
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>De</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\">
                                                        <option value=\"\">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-2\">
                                            <div class=\"form-group\">
                                                <label>A</label>
                                                <div class=\"selector\">
                                                    <select class=\"full-width\">
                                                        <option value=\"\">select cruise line</option>
                                                        <option>Azamara Club Cruises</option>
                                                        <option>Carnival Cruise Lines</option>
                                                        <option>Celebrity Cruises</option>
                                                        <option>Costa Cruise Lines</option>
                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                        <option>Crystal Cruises</option>
                                                        <option>Cunard Line Ltd.</option>
                                                        <option>Disney Cruise Line</option>
                                                        <option>Holland America Line</option>
                                                        <option>Hurtigruten Cruise Line</option>
                                                        <option>MSC Cruises</option>
                                                        <option>Norwegian Cruise Line</option>
                                                        <option>Oceania Cruises</option>
                                                        <option>Orion Expedition Cruises</option>
                                                        <option>P&amp;O Cruises</option>
                                                        <option>Paul Gauguin Cruises</option>
                                                        <option>Peter Deilmann Cruises</option>
                                                        <option>Princess Cruises</option>
                                                        <option>Regent Seven Seas Cruises</option>
                                                        <option>Royal Caribbean International</option>
                                                        <option>Seabourn Cruise Line</option>
                                                        <option>Silversea Cruises</option>
                                                        <option>Star Clippers</option>
                                                        <option>Swan Hellenic Cruises</option>
                                                        <option>Thomson Cruises</option>
                                                        <option>Viking River Cruises</option>
                                                        <option>Windstar Cruises</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>Date de retour</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" class=\"input-text full-width\" placeholder=\"Departure Date\" />
                                                    </div>
                                                </div>
                                                <div class=\"col-xs-6\">
                                                    <label>Date de voyage</label>
                                                    <div class=\"datepicker-wrap\">
                                                        <input type=\"text\" class=\"input-text full-width\" placeholder=\"Departure Date\" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class=\"col-md-4\">
                                            <div class=\"form-group row\">
                                                <div class=\"col-xs-6\">
                                                    <label>&nbsp; </label>
                                                    <button class=\"full-width\">RECHERCHER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"featured image-box\">
            <div class=\"details pull-left\">
                <h3>Tropical Beach,<br/>Hotel and Resorts</h3>
                <h5>THAILAND</h5>
            </div>
            <figure class=\"pull-left\">
                <a class=\"badge-container\" href=\"#\">
                    <span class=\"badge-content right-side\">From \$200</span>
                    <img width=\"64\" height=\"64\" alt=\"\" src=\"http://placehold.it/64x64\" class=\"\">
                </a>
            </figure>
        </div>
    </section>
{% endblock %}


{% block footer %} {% endblock %}


{% block scripts %}
    <script type=\"text/javascript\">
        tjq(\".flexslider\").flexslider({
            animation: \"fade\",
            controlNav: false,
            animationLoop: true,
            directionNav: false,
            slideshow: true,
            slideshowSpeed: 5000
        });
    </script>
{% endblock %}", "NBMainBundle::index.html.twig", "/var/www/html/nextBusNew/src/NB/MainBundle/Resources/views/index.html.twig");
    }
}
