<?php

/* NBMainBundle::listing.html.twig */
class __TwigTemplate_161d222f4822a0c2cb86924ee8c4a2189b875b477059413b2efdcea9b37d5ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::listing.html.twig", 1);
        $this->blocks = array(
            'breadcumb' => array($this, 'block_breadcumb'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82077445bc185a64941e2a6d524b1de7a544405cfa95d284b17af6d778381eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82077445bc185a64941e2a6d524b1de7a544405cfa95d284b17af6d778381eb2->enter($__internal_82077445bc185a64941e2a6d524b1de7a544405cfa95d284b17af6d778381eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::listing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82077445bc185a64941e2a6d524b1de7a544405cfa95d284b17af6d778381eb2->leave($__internal_82077445bc185a64941e2a6d524b1de7a544405cfa95d284b17af6d778381eb2_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_3ad018c4284530d8ff61dc0e4f5de38d74db27dcfe280440cb57974e322e7a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad018c4284530d8ff61dc0e4f5de38d74db27dcfe280440cb57974e322e7a4f->enter($__internal_3ad018c4284530d8ff61dc0e4f5de38d74db27dcfe280440cb57974e322e7a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "    <div class=\"page-title-container\">
        <div class=\"container\">
            <div class=\"page-title pull-left\">
                <h2 class=\"entry-title\">Résultat de la recherche</h2>
            </div>
            <ul class=\"breadcrumbs pull-right\">
                <li><a href=\"\">Acceuil</a></li>
                <li class=\"active\">Résultat des recherches</li>
            </ul>
        </div>
    </div>
";
        
        $__internal_3ad018c4284530d8ff61dc0e4f5de38d74db27dcfe280440cb57974e322e7a4f->leave($__internal_3ad018c4284530d8ff61dc0e4f5de38d74db27dcfe280440cb57974e322e7a4f_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1732686cef5e060b7ecd5a7d98a140d751e78d1d827ecfdc62c603c6baa63ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1732686cef5e060b7ecd5a7d98a140d751e78d1d827ecfdc62c603c6baa63ab->enter($__internal_a1732686cef5e060b7ecd5a7d98a140d751e78d1d827ecfdc62c603c6baa63ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <section id=\"content\">
        <div class=\"container\">
            <div id=\"main\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-3\">
                        <h4 class=\"search-results-title\"><i class=\"soap-icon-search\"></i><b>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new Twig_Error_Runtime('Variable "search" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
        echo "</b> résultat(s) trouvé(s).</h4>
                        <div class=\"toggle-container filters-container\">
                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#price-filter\" class=\"collapsed\">Prix</a>
                                </h4>
                                <div id=\"price-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <div id=\"price-range\"></div>
                                        <br />
                                        <span class=\"min-price-label pull-left\"></span>
                                        <span class=\"max-price-label pull-right\"></span>
                                        <div class=\"clearer\"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#flight-times-filter\" class=\"collapsed\">Heure de départ</a>
                                </h4>
                                <div id=\"flight-times-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <div id=\"flight-times\" class=\"slider-color-yellow\"></div>
                                        <br />
                                        <span class=\"start-time-label pull-left\"></span>
                                        <span class=\"end-time-label pull-right\"></span>
                                        <div class=\"clearer\"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#airlines-filter\" class=\"collapsed\">Compagnies de Transport</a>
                                </h4>
                                <div id=\"airlines-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <ul class=\"check-square filters-option\">
                                            <li><a href=\"#\">Major Airline<small>(\$620)</small></a></li>
                                            <li><a href=\"#\">United Airlines<small>(\$982)</small></a></li>
                                            <li class=\"active\"><a href=\"#\">delta airlines<small>(\$1,127)</small></a></li>
                                            <li><a href=\"#\">Alitalia<small>(\$2,322)</small></a></li>
                                            <li><a href=\"#\">US airways<small>(\$3,158)</small></a></li>
                                            <li><a href=\"#\">Air France<small>(\$4,239)</small></a></li>
                                            <li><a href=\"#\">Air tahiti nui<small>(\$5,872)</small></a></li>
                                        </ul>
                                        <a class=\"button btn-mini\">MORE</a>
                                    </div>
                                </div>
                            </div>


                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#inflight-experience-filter\" class=\"collapsed\">Expérience à bord</a>
                                </h4>
                                <div id=\"inflight-experience-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <ul class=\"check-square filters-option\">
                                            <li><a href=\"#\">Inflight Dining</a></li>
                                            <li><a href=\"#\">Music</a></li>
                                            <li class=\"active\"><a href=\"#\">Sky Shopping</a></li>
                                            <li><a href=\"#\">Wi-fi</a></li>
                                            <li><a href=\"#\">Seats &amp; Cabin</a></li>
                                        </ul>
                                        <a class=\"button btn-mini\">MORE</a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#modify-search-panel\" class=\"collapsed\">Modifier recherche</a>
                                </h4>
                                <div id=\"modify-search-panel\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <form method=\"post\">
                                            <div class=\"form-group\">
                                                <label>Leaving from</label>
                                                <input type=\"text\" class=\"input-text full-width\" placeholder=\"\" value=\"city, district, or specific airpot\" />
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Departure on</label>
                                                <div class=\"datepicker-wrap\">
                                                    <input type=\"text\" class=\"input-text full-width\" placeholder=\"mm/dd/yy\" />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Arriving On</label>
                                                <div class=\"datepicker-wrap\">
                                                    <input type=\"text\" class=\"input-text full-width\" placeholder=\"mm/dd/yy\" />
                                                </div>
                                            </div>
                                            <br />
                                            <button class=\"btn-medium icon-check uppercase full-width\">search again</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8 col-md-9\">

                        <div class=\"flight-list image-box listing-style3 flight\">
                            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new Twig_Error_Runtime('Variable "search" does not exist.', 128, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 129
            echo "                                <article class=\"box\">
                                    <figure class=\"col-xs-3 col-sm-2\">
                                        <span><img alt=\"\" src=\"";
            // line 131
            echo twig_escape_filter($this->env, (((isset($context["admin_link"]) || array_key_exists("admin_link", $context) ? $context["admin_link"] : (function () { throw new Twig_Error_Runtime('Variable "admin_link" does not exist.', 131, $this->getSourceContext()); })()) . "logo/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "comapanyLogo", array())), "html", null, true);
            echo "\"></span>
                                        ";
            // line 132
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "promo_price", array()) > 0)) {
                // line 133
                echo "                                            <span class=\"discount\">
                                                <span class=\"discount-text\">
                                                   En Promotion
                                                </span>
                                            </span>


                                        ";
            }
            // line 141
            echo "

                                    </figure>
                                    <div class=\"details col-xs-9 col-sm-10\">
                                        <div class=\"details-wrapper\">
                                            <div class=\"first-row\">
                                                <div>
                                                    <h4 class=\"box-title\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "busCompany", array()), "html", null, true);
            echo "<small>Oneway flight</small></h4>
                                                    <a class=\"button btn-mini stop\">";
            // line 149
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "busCapacity", array()) - twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "bookedSeat", array())), "html", null, true);
            echo " PLACES</a>
                                                    <div class=\"amenities\">
                                                        <i class=\"soap-icon-wifi circle\"></i>
                                                        <i class=\"soap-icon-entertainment circle\"></i>
                                                        <i class=\"soap-icon-fork circle\"></i>
                                                        <i class=\"soap-icon-suitcase circle\"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class=\"price\">
                                                        <small>TARIF/PERSONNE</small>
                                                        ";
            // line 160
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "promo_price", array()) > 0)) {
                // line 161
                echo "                                                            <s>";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "price", array()), 0, ".", ","), "html", null, true);
                echo " FCFA</s> <br>
                                                            ";
                // line 162
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "promo_price", array()), 0, ".", ","), "html", null, true);
                echo " FCFA
                                                        ";
            } else {
                // line 164
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "price", array()), 0, ".", ","), "html", null, true);
                echo " FCFA
                                                        ";
            }
            // line 166
            echo "                                                    </span>
                                                </div>
                                            </div>
                                            <div class=\"second-row\">
                                                <div class=\"time\">
                                                    <div class=\"take-off col-sm-4\">
                                                        <div class=\"icon\"><i class=\"soap-icon-plane-right yellow-color\"></i></div>
                                                        <div>
                                                            <span class=\"skin-color\">Départ </span><br /> ";
            // line 174
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateJ"]) || array_key_exists("dateJ", $context) ? $context["dateJ"] : (function () { throw new Twig_Error_Runtime('Variable "dateJ" does not exist.', 174, $this->getSourceContext()); })()), "d M Y"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "boardingTime", array()), "H:i"), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"landing col-sm-4\">
                                                        <div class=\"icon\"><i class=\"soap-icon-plane-right yellow-color\"></i></div>
                                                        <div>
                                                            <span class=\"skin-color\">Arrivée </span><br />";
            // line 180
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["dateJ"]) || array_key_exists("dateJ", $context) ? $context["dateJ"] : (function () { throw new Twig_Error_Runtime('Variable "dateJ" does not exist.', 180, $this->getSourceContext()); })()), "d M Y"), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "arrivalTime", array()), "H:i"), "html", null, true);
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"total-time col-sm-4\">
                                                        <div class=\"icon\"><i class=\"soap-icon-clock yellow-color\"></i></div>
                                                        <div>
                                                            <span class=\"skin-color\">Durée Total</span><br />13 Heures, 40 minutes
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"action\">
                                                    <a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_travel_details", array("travel" => twig_get_attribute($this->env, $this->getSourceContext(), $context["val"], "id", array()), "goingDate" => twig_date_format_filter($this->env, (isset($context["dateJ"]) || array_key_exists("dateJ", $context) ? $context["dateJ"] : (function () { throw new Twig_Error_Runtime('Variable "dateJ" does not exist.', 191, $this->getSourceContext()); })()), "d-m-Y"))), "html", null, true);
            echo "\" class=\"button btn-small full-width\">RESERVER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                        </div>
                        <a class=\"button uppercase full-width btn-large\">load more listings</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



";
        
        $__internal_a1732686cef5e060b7ecd5a7d98a140d751e78d1d827ecfdc62c603c6baa63ab->leave($__internal_a1732686cef5e060b7ecd5a7d98a140d751e78d1d827ecfdc62c603c6baa63ab_prof);

    }

    // line 212
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_38541849c3efd15c02f9b9252eaf9203a64766f994c187b812bc8146b7fe2f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38541849c3efd15c02f9b9252eaf9203a64766f994c187b812bc8146b7fe2f4f->enter($__internal_38541849c3efd15c02f9b9252eaf9203a64766f994c187b812bc8146b7fe2f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 213
        echo "    <script type=\"text/javascript\">
        tjq(document).ready(function() {
            tjq(\"#price-range\").slider({
                range: true,
                min: 0,
                max: 100000,
                values: [ 100, 800 ],
                slide: function( event, ui ) {
                    tjq(\".min-price-label\").html(ui.values[ 0 ] + \" FCFA\");
                    tjq(\".max-price-label\").html(ui.values[ 1 ] + \" FCFA\");
                }
            });
            tjq(\".min-price-label\").html(tjq(\"#price-range\").slider( \"values\", 0 ) + \" FCFA\");
            tjq(\".max-price-label\").html(tjq(\"#price-range\").slider( \"values\", 1 ) + \" FCFA\");

            function convertTimeToHHMM(t) {
                var minutes = t % 60;
                var hour = (t - minutes) / 60;
                var timeStr = (hour + \"\").lpad(\"0\", 2) + \":\" + (minutes + \"\").lpad(\"0\", 2);
                var date = new Date(\"2014/01/01 \" + timeStr + \":00\");
                var hhmm = date.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
                return hhmm;
            }
            tjq(\"#flight-times\").slider({
                range: true,
                min: 0,
                max: 1440,
                step: 5,
                values: [ 360, 1200 ],
                slide: function( event, ui ) {

                    tjq(\".start-time-label\").html( convertTimeToHHMM(ui.values[0]) );
                    tjq(\".end-time-label\").html( convertTimeToHHMM(ui.values[1]) );
                }
            });
            tjq(\".start-time-label\").html( convertTimeToHHMM(tjq(\"#flight-times\").slider( \"values\", 0 )) );
            tjq(\".end-time-label\").html( convertTimeToHHMM(tjq(\"#flight-times\").slider( \"values\", 1 )) );
        });




    </script>
";
        
        $__internal_38541849c3efd15c02f9b9252eaf9203a64766f994c187b812bc8146b7fe2f4f->leave($__internal_38541849c3efd15c02f9b9252eaf9203a64766f994c187b812bc8146b7fe2f4f_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 213,  318 => 212,  301 => 199,  287 => 191,  271 => 180,  260 => 174,  250 => 166,  244 => 164,  239 => 162,  234 => 161,  232 => 160,  218 => 149,  214 => 148,  205 => 141,  195 => 133,  193 => 132,  189 => 131,  185 => 129,  181 => 128,  73 => 23,  66 => 18,  60 => 17,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block breadcumb %}
    <div class=\"page-title-container\">
        <div class=\"container\">
            <div class=\"page-title pull-left\">
                <h2 class=\"entry-title\">Résultat de la recherche</h2>
            </div>
            <ul class=\"breadcrumbs pull-right\">
                <li><a href=\"\">Acceuil</a></li>
                <li class=\"active\">Résultat des recherches</li>
            </ul>
        </div>
    </div>
{% endblock %}

{% block content %}
    <section id=\"content\">
        <div class=\"container\">
            <div id=\"main\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-3\">
                        <h4 class=\"search-results-title\"><i class=\"soap-icon-search\"></i><b>{{ search | length }}</b> résultat(s) trouvé(s).</h4>
                        <div class=\"toggle-container filters-container\">
                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#price-filter\" class=\"collapsed\">Prix</a>
                                </h4>
                                <div id=\"price-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <div id=\"price-range\"></div>
                                        <br />
                                        <span class=\"min-price-label pull-left\"></span>
                                        <span class=\"max-price-label pull-right\"></span>
                                        <div class=\"clearer\"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#flight-times-filter\" class=\"collapsed\">Heure de départ</a>
                                </h4>
                                <div id=\"flight-times-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <div id=\"flight-times\" class=\"slider-color-yellow\"></div>
                                        <br />
                                        <span class=\"start-time-label pull-left\"></span>
                                        <span class=\"end-time-label pull-right\"></span>
                                        <div class=\"clearer\"></div>
                                    </div><!-- end content -->
                                </div>
                            </div>

                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#airlines-filter\" class=\"collapsed\">Compagnies de Transport</a>
                                </h4>
                                <div id=\"airlines-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <ul class=\"check-square filters-option\">
                                            <li><a href=\"#\">Major Airline<small>(\$620)</small></a></li>
                                            <li><a href=\"#\">United Airlines<small>(\$982)</small></a></li>
                                            <li class=\"active\"><a href=\"#\">delta airlines<small>(\$1,127)</small></a></li>
                                            <li><a href=\"#\">Alitalia<small>(\$2,322)</small></a></li>
                                            <li><a href=\"#\">US airways<small>(\$3,158)</small></a></li>
                                            <li><a href=\"#\">Air France<small>(\$4,239)</small></a></li>
                                            <li><a href=\"#\">Air tahiti nui<small>(\$5,872)</small></a></li>
                                        </ul>
                                        <a class=\"button btn-mini\">MORE</a>
                                    </div>
                                </div>
                            </div>


                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#inflight-experience-filter\" class=\"collapsed\">Expérience à bord</a>
                                </h4>
                                <div id=\"inflight-experience-filter\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <ul class=\"check-square filters-option\">
                                            <li><a href=\"#\">Inflight Dining</a></li>
                                            <li><a href=\"#\">Music</a></li>
                                            <li class=\"active\"><a href=\"#\">Sky Shopping</a></li>
                                            <li><a href=\"#\">Wi-fi</a></li>
                                            <li><a href=\"#\">Seats &amp; Cabin</a></li>
                                        </ul>
                                        <a class=\"button btn-mini\">MORE</a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"panel style1 arrow-right\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" href=\"#modify-search-panel\" class=\"collapsed\">Modifier recherche</a>
                                </h4>
                                <div id=\"modify-search-panel\" class=\"panel-collapse collapse\">
                                    <div class=\"panel-content\">
                                        <form method=\"post\">
                                            <div class=\"form-group\">
                                                <label>Leaving from</label>
                                                <input type=\"text\" class=\"input-text full-width\" placeholder=\"\" value=\"city, district, or specific airpot\" />
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Departure on</label>
                                                <div class=\"datepicker-wrap\">
                                                    <input type=\"text\" class=\"input-text full-width\" placeholder=\"mm/dd/yy\" />
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Arriving On</label>
                                                <div class=\"datepicker-wrap\">
                                                    <input type=\"text\" class=\"input-text full-width\" placeholder=\"mm/dd/yy\" />
                                                </div>
                                            </div>
                                            <br />
                                            <button class=\"btn-medium icon-check uppercase full-width\">search again</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-8 col-md-9\">

                        <div class=\"flight-list image-box listing-style3 flight\">
                            {% for key, val in search %}
                                <article class=\"box\">
                                    <figure class=\"col-xs-3 col-sm-2\">
                                        <span><img alt=\"\" src=\"{{ admin_link~\"logo/\"~val.comapanyLogo }}\"></span>
                                        {% if val.promo_price > 0 %}
                                            <span class=\"discount\">
                                                <span class=\"discount-text\">
                                                   En Promotion
                                                </span>
                                            </span>


                                        {% endif %}


                                    </figure>
                                    <div class=\"details col-xs-9 col-sm-10\">
                                        <div class=\"details-wrapper\">
                                            <div class=\"first-row\">
                                                <div>
                                                    <h4 class=\"box-title\">{{ val.busCompany }}<small>Oneway flight</small></h4>
                                                    <a class=\"button btn-mini stop\">{{ (val.busCapacity - val.bookedSeat)  }} PLACES</a>
                                                    <div class=\"amenities\">
                                                        <i class=\"soap-icon-wifi circle\"></i>
                                                        <i class=\"soap-icon-entertainment circle\"></i>
                                                        <i class=\"soap-icon-fork circle\"></i>
                                                        <i class=\"soap-icon-suitcase circle\"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class=\"price\">
                                                        <small>TARIF/PERSONNE</small>
                                                        {% if val.promo_price > 0 %}
                                                            <s>{{ val.price|number_format(0, '.', ',')  }} FCFA</s> <br>
                                                            {{ val.promo_price|number_format(0, '.', ',')  }} FCFA
                                                        {% else %}
                                                            {{ val.price|number_format(0, '.', ',')  }} FCFA
                                                        {% endif %}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class=\"second-row\">
                                                <div class=\"time\">
                                                    <div class=\"take-off col-sm-4\">
                                                        <div class=\"icon\"><i class=\"soap-icon-plane-right yellow-color\"></i></div>
                                                        <div>
                                                            <span class=\"skin-color\">Départ </span><br /> {{ dateJ | date('d M Y') }}  {{ val.boardingTime |date('H:i') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"landing col-sm-4\">
                                                        <div class=\"icon\"><i class=\"soap-icon-plane-right yellow-color\"></i></div>
                                                        <div>
                                                            <span class=\"skin-color\">Arrivée </span><br />{{ dateJ | date('d M Y') }}  {{ val.arrivalTime |date('H:i') }}
                                                        </div>
                                                    </div>
                                                    <div class=\"total-time col-sm-4\">
                                                        <div class=\"icon\"><i class=\"soap-icon-clock yellow-color\"></i></div>
                                                        <div>
                                                            <span class=\"skin-color\">Durée Total</span><br />13 Heures, 40 minutes
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"action\">
                                                    <a href=\"{{ path('nb_main_travel_details', {'travel': val.id, 'goingDate': dateJ| date('d-m-Y')}) }}\" class=\"button btn-small full-width\">RESERVER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                            {% endfor %}
                        </div>
                        <a class=\"button uppercase full-width btn-large\">load more listings</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



{% endblock %}


{% block scripts %}
    <script type=\"text/javascript\">
        tjq(document).ready(function() {
            tjq(\"#price-range\").slider({
                range: true,
                min: 0,
                max: 100000,
                values: [ 100, 800 ],
                slide: function( event, ui ) {
                    tjq(\".min-price-label\").html(ui.values[ 0 ] + \" FCFA\");
                    tjq(\".max-price-label\").html(ui.values[ 1 ] + \" FCFA\");
                }
            });
            tjq(\".min-price-label\").html(tjq(\"#price-range\").slider( \"values\", 0 ) + \" FCFA\");
            tjq(\".max-price-label\").html(tjq(\"#price-range\").slider( \"values\", 1 ) + \" FCFA\");

            function convertTimeToHHMM(t) {
                var minutes = t % 60;
                var hour = (t - minutes) / 60;
                var timeStr = (hour + \"\").lpad(\"0\", 2) + \":\" + (minutes + \"\").lpad(\"0\", 2);
                var date = new Date(\"2014/01/01 \" + timeStr + \":00\");
                var hhmm = date.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
                return hhmm;
            }
            tjq(\"#flight-times\").slider({
                range: true,
                min: 0,
                max: 1440,
                step: 5,
                values: [ 360, 1200 ],
                slide: function( event, ui ) {

                    tjq(\".start-time-label\").html( convertTimeToHHMM(ui.values[0]) );
                    tjq(\".end-time-label\").html( convertTimeToHHMM(ui.values[1]) );
                }
            });
            tjq(\".start-time-label\").html( convertTimeToHHMM(tjq(\"#flight-times\").slider( \"values\", 0 )) );
            tjq(\".end-time-label\").html( convertTimeToHHMM(tjq(\"#flight-times\").slider( \"values\", 1 )) );
        });




    </script>
{% endblock %}", "NBMainBundle::listing.html.twig", "/var/www/html/nextBusNew/src/NB/MainBundle/Resources/views/listing.html.twig");
    }
}
