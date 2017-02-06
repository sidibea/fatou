<?php

/* NBMainBundle::details.html.twig */
class __TwigTemplate_ee4c63ec20fbf9b9b6651a1c2784cb11b78718b41487765717f86263189c1b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::details.html.twig", 1);
        $this->blocks = array(
            'breadcumb' => array($this, 'block_breadcumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a59170e2334d4f2b57d61c76aaf3b9400a8e5406aa2e33b165b0ed06152b82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a59170e2334d4f2b57d61c76aaf3b9400a8e5406aa2e33b165b0ed06152b82f->enter($__internal_4a59170e2334d4f2b57d61c76aaf3b9400a8e5406aa2e33b165b0ed06152b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a59170e2334d4f2b57d61c76aaf3b9400a8e5406aa2e33b165b0ed06152b82f->leave($__internal_4a59170e2334d4f2b57d61c76aaf3b9400a8e5406aa2e33b165b0ed06152b82f_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_3016fc324af4528292d9005f94770fb7354dc1fcb3064ee1f30c84e31894f082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3016fc324af4528292d9005f94770fb7354dc1fcb3064ee1f30c84e31894f082->enter($__internal_3016fc324af4528292d9005f94770fb7354dc1fcb3064ee1f30c84e31894f082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        // line 4
        echo "    <div class=\"page-title-container\">
        <div class=\"container\">
            <div class=\"page-title pull-left\">
                <h2 class=\"entry-title\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 7, $this->getSourceContext()); })()), "route", array()), "title", array()), "html", null, true);
        echo "</h2>
            </div>
            <ul class=\"breadcrumbs pull-right\">
                <li><a href=\"\">Acceuil</a></li>
                <li class=\"active\">Résultat des recherches</li>
            </ul>
        </div>
    </div>
";
        
        $__internal_3016fc324af4528292d9005f94770fb7354dc1fcb3064ee1f30c84e31894f082->leave($__internal_3016fc324af4528292d9005f94770fb7354dc1fcb3064ee1f30c84e31894f082_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f203686c23b88f186165a73f35aafc6fd66c86c8f9b3c701452b369c3b6f55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f203686c23b88f186165a73f35aafc6fd66c86c8f9b3c701452b369c3b6f55a->enter($__internal_2f203686c23b88f186165a73f35aafc6fd66c86c8f9b3c701452b369c3b6f55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <section id=\"content\">
        <div class=\"container flight-detail-page\">
            <div class=\"row\">
                <div id=\"main\" class=\"col-md-9\">
                    <div class=\"tab-container style1 box\" id=\"flight-main-content\">
                        <ul class=\"tabs\">
                            <li class=\"active\"><a data-toggle=\"tab\" href=\"#photo-tab\">photo</a></li>
                            <li class=\"pull-right\"><a class=\"button btn-small yellow-bg white-color\" href=\"#\">AVANT DE VOYAGER</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div id=\"photo-tab\" class=\"tab-pane fade in active\">
                                <div class=\"featured-image image-container\">
                                    <img style=\"width: 100%; height: 530px;\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("logo/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 30, $this->getSourceContext()); })()), "bus", array()), "photo", array())))), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"flight-features\" class=\"tab-container\">
                        <ul class=\"tabs\">
                            <li class=\"active\"><a href=\"#flight-details\" data-toggle=\"tab\">Détails du voyage</a></li>
                            <li><a href=\"#flight-fare-rules\" data-toggle=\"tab\">Conditions Générales</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade in active\" id=\"flight-details\">
                                <div class=\"intro table-wrapper full-width hidden-table-sm box\">
                                    <div class=\"col-md-4 table-cell travelo-box\">
                                        <dl class=\"term-description\">
                                            <dt>Compagnie:</dt><dd> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 46, $this->getSourceContext()); })()), "bus", array()), "company", array()), "nom", array()), "html", null, true);
        echo "</dd>
                                            <dt>Type de voyage:</dt><dd>";
        // line 47
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 47, $this->getSourceContext()); })()), "route", array()), "type", array()) == true)) {
            echo " National ";
        } else {
            echo " International ";
        }
        echo " FCFA</dd>
                                            <dt>Type de tarif:</dt><dd>Remboursable</dd>
                                            <dt>Siège &amp; Baggage:</dt><dd>Extra Charge </dd>
                                            <dt>Facilité à board:</dt><dd>Disponible</dd>
                                            <dt>Tarif de base:</dt><dd>";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 51, $this->getSourceContext()); })()), "price", array()), 0, ".", ","), "html", null, true);
        echo " FCFA</dd>
                                            <dt>Reduction:</dt><dd>";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new Twig_Error_Runtime('Variable "promo" does not exist.', 52, $this->getSourceContext()); })()), "montant", array()), 0, ".", ","), "html", null, true);
        echo " FCFA</dd>
                                            <dt>prix total :</dt><dd>";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 53, $this->getSourceContext()); })()), "price", array()) - twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new Twig_Error_Runtime('Variable "promo" does not exist.', 53, $this->getSourceContext()); })()), "montant", array())), 0, ".", ","), "html", null, true);
        echo " FCFA</dd>
                                        </dl>
                                    </div>
                                    <div class=\"col-md-8 table-cell\">
                                        <div class=\"detailed-features booking-details\">
                                            <div class=\"travelo-box\">
                                                <a href=\"#\" class=\"button btn-mini yellow pull-right\">1 STOP</a>
                                                <h4 class=\"box-title\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 60, $this->getSourceContext()); })()), "route", array()), "source", array()), "nom", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 60, $this->getSourceContext()); })()), "route", array()), "destination", array()), "nom", array()), "html", null, true);
        echo " </h4>
                                            </div>
                                            <div class=\"table-wrapper flights\">
                                                <div class=\"table-row first-flight\">
                                                    <div class=\"table-cell logo\">
                                                        <img src=\"http://placehold.it/140x30\" alt=\"\">
                                                        <label>AI-635 Economy</label>
                                                    </div>
                                                    <div class=\"table-cell timing-detail\">
                                                        <div class=\"timing\">
                                                            <div class=\"check-in\">
                                                                <label>Take off</label>
                                                                <span>13 Nov 2013, 7:50 am</span>
                                                            </div>
                                                            <div class=\"duration text-center\">
                                                                <i class=\"soap-icon-clock\"></i>
                                                                <span>1h 30m</span>
                                                            </div>
                                                            <div class=\"check-out\">
                                                                <label>landing</label>
                                                                <span>13 Nov 2013, 9:20 Am</span>
                                                            </div>
                                                        </div>
                                                        <label class=\"layover\">Layover : 3h 50m</label>
                                                    </div>
                                                </div>
                                                <div class=\"table-row second-flight\">
                                                    <div class=\"table-cell logo\">
                                                        <img src=\"http://placehold.it/140x30\" alt=\"\">
                                                        <label>AI-635 Economy</label>
                                                    </div>
                                                    <div class=\"table-cell timing-detail\">
                                                        <div class=\"timing\">
                                                            <div class=\"check-in\">
                                                                <label>Take off</label>
                                                                <span>13 Nov 2013, 7:50 am</span>
                                                            </div>
                                                            <div class=\"duration text-center\">
                                                                <i class=\"soap-icon-clock\"></i>
                                                                <span>8h 20m</span>
                                                            </div>
                                                            <div class=\"check-out\">
                                                                <label>landing</label>
                                                                <span>13 Nov 2013, 9:20 Am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"long-description\">
                                    <h2>A Propos de ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 113, $this->getSourceContext()); })()), "bus", array()), "company", array()), "nom", array()), "html", null, true);
        echo "</h2>
                                    <p>
                                        ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 115, $this->getSourceContext()); })()), "bus", array()), "company", array()), "description", array()), "html", null, true);
        echo "
                                    </p>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"flight-fare-rules\">
                                <h2>Règles de votre voyage</h2>
                                <div class=\"topics\">
                                    <ul class=\"check-square clearfix\">
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Règles et Politiques</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Modification du voyage</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Remboursement</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Pénalités de voyage</a></li>
                                        <li class=\"col-sm-6 col-md-4 active\"><a href=\"#\">Annulation du voyage</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Conditions d'utilisations</a></li>
                                    </ul>
                                </div>
                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <div class=\"toggle-container\">
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question1\" data-toggle=\"collapse\">Flight cancellation charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question1\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question2\" data-toggle=\"collapse\">WAmendment in higher class charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question2\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"\" href=\"#question3\" data-toggle=\"collapse\">Amendment in same class charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse in\" id=\"question3\">
                                            <div class=\"panel-content\">
                                                <p>Sed a justo enim. Vivamus volutpat ipsum ultrices augue porta lacinia. Proin in elementum enim. <span class=\"skin-color\">Duis suscipit justo</span> non purus consequat molestie. Etiam pharetra ipsum sagittis sollicitudin ultricies. Praesent luctus, diam ut tempus aliquam, diam ante euismod risus, euismod viverra quam quam eget turpis. Nam <span class=\"skin-color\">tristique congue</span> arcu, id bibendum diam. Ut hendrerit, leo a pellentesque porttitor, purus arcu tristique erat, in faucibus elit leo in turpis vitae luctus enim, a mollis nulla.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question4\" data-toggle=\"collapse\">Rebooking/cancellation charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question4\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question5\" data-toggle=\"collapse\">Cancellation through the customer support</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question5\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question6\" data-toggle=\"collapse\">Do we accept cancellations through email?</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question6\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question7\" data-toggle=\"collapse\">What is the minimum day limit of cancellation?</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question7\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"sidebar col-md-3\">
                    <article class=\"detailed-logo\">
                        <figure>
                            <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, (((isset($context["admin_link"]) || array_key_exists("admin_link", $context) ? $context["admin_link"] : (function () { throw new Twig_Error_Runtime('Variable "admin_link" does not exist.', 213, $this->getSourceContext()); })()) . "logo/") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 213, $this->getSourceContext()); })()), "bus", array()), "company", array()), "logo", array())), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"details\">
                            <h2 class=\"box-title\">
                                ";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 217, $this->getSourceContext()); })()), "route", array()), "title", array()), "html", null, true);
        echo " </h2>
                                <span class=\"price clearfix\">
                                    <small class=\"pull-left\">tarif/personne</small>
                                    <span class=\"pull-right\">
                                        ";
        // line 221
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new Twig_Error_Runtime('Variable "promo" does not exist.', 221, $this->getSourceContext()); })()), "montant", array()) > 0)) {
            // line 222
            echo "                                            <s class=\"warning \">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 222, $this->getSourceContext()); })()), "price", array()), 0, ".", ","), "html", null, true);
            echo " FCFA</s> <br>
                                            ";
            // line 223
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new Twig_Error_Runtime('Variable "promo" does not exist.', 223, $this->getSourceContext()); })()), "montant", array()), 0, ".", ","), "html", null, true);
            echo " FCFA
                                        ";
        } else {
            // line 225
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 225, $this->getSourceContext()); })()), "price", array()), 0, ".", ","), "html", null, true);
            echo " FCFA
                                        ";
        }
        // line 227
        echo "                                    </span>
                                </span>

                            <div class=\"duration\">
                                <i class=\"soap-icon-clock\"></i>
                                <dl>
                                    <dt class=\"skin-color\">Durée Total:</dt>
                                    <dd>4 Heures 40 minutes</dd>
                                </dl>
                            </div>

                            <p class=\"description\">";
        // line 238
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 238, $this->getSourceContext()); })()), "description", array());
        echo "</p>
                            <a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_customer_info", array("travel" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["travel"]) || array_key_exists("travel", $context) ? $context["travel"] : (function () { throw new Twig_Error_Runtime('Variable "travel" does not exist.', 239, $this->getSourceContext()); })()), "id", array()), "goingDate" => twig_date_format_filter($this->env, (isset($context["dateJ"]) || array_key_exists("dateJ", $context) ? $context["dateJ"] : (function () { throw new Twig_Error_Runtime('Variable "dateJ" does not exist.', 239, $this->getSourceContext()); })()), "d-m-Y"))), "html", null, true);
        echo "\" class=\"button green full-width uppercase btn-medium\">Acheter Maintenant</a>
                        </div>
                    </article>
                    <div class=\"travelo-box contact-box\">
                        <h4>Besoin d'aide ?</h4>
                        <p>Nous serons plus que ravi de vous aider. Notre équipe clientèle est à votre service 24/7 pour vous aider ou vous accompagner.</p>
                        <address class=\"contact-details\">
                            <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 44-27-27-18-HELLO</span>
                            <br>
                            <a class=\"contact-email\" href=\"#\">aide@next-bus.net</a>
                        </address>
                    </div>
                    <div class=\"travelo-box book-with-us-box\">
                        <h4>Pourquoi acheter avec nous ?</h4>
                        <ul>
                            <li>
                                <i class=\"soap-icon-hotel-1 circle\"></i>
                                <h5 class=\"title\"><a href=\"#\">+3,000 points de ventes</a></h5>
                                <p>Avec nextBus acheter vos billets dans les agences CANAL+, Orange Money et les agences de voyage</p>
                            </li>
                            <li><br>
                                <i class=\"soap-icon-savings circle\"></i>
                                <h5 class=\"title\"><a href=\"#\">Réductions &amp; Economie</a></h5>
                                <p>Avec nextBus bénéficiez des meilleurs prix promotionnels sur vos billets.</p>
                            </li>
                            <li>
                                <i class=\"soap-icon-support circle\"></i>
                                <h5 class=\"title\"><a href=\"#\">Excellent Service client</a></h5>
                                <p>nextBus vous offre le meilleur service client, qui reste à votre écoute pour aider à voyager dans le confort et sans tracas.</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_2f203686c23b88f186165a73f35aafc6fd66c86c8f9b3c701452b369c3b6f55a->leave($__internal_2f203686c23b88f186165a73f35aafc6fd66c86c8f9b3c701452b369c3b6f55a_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 239,  343 => 238,  330 => 227,  324 => 225,  319 => 223,  314 => 222,  312 => 221,  305 => 217,  298 => 213,  197 => 115,  192 => 113,  134 => 60,  124 => 53,  120 => 52,  116 => 51,  105 => 47,  101 => 46,  82 => 30,  68 => 18,  62 => 17,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block breadcumb %}
    <div class=\"page-title-container\">
        <div class=\"container\">
            <div class=\"page-title pull-left\">
                <h2 class=\"entry-title\">{{ travel.route.title }}</h2>
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
        <div class=\"container flight-detail-page\">
            <div class=\"row\">
                <div id=\"main\" class=\"col-md-9\">
                    <div class=\"tab-container style1 box\" id=\"flight-main-content\">
                        <ul class=\"tabs\">
                            <li class=\"active\"><a data-toggle=\"tab\" href=\"#photo-tab\">photo</a></li>
                            <li class=\"pull-right\"><a class=\"button btn-small yellow-bg white-color\" href=\"#\">AVANT DE VOYAGER</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div id=\"photo-tab\" class=\"tab-pane fade in active\">
                                <div class=\"featured-image image-container\">
                                    <img style=\"width: 100%; height: 530px;\" src=\"{{ absolute_url(asset('logo/'~travel.bus.photo)) }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=\"flight-features\" class=\"tab-container\">
                        <ul class=\"tabs\">
                            <li class=\"active\"><a href=\"#flight-details\" data-toggle=\"tab\">Détails du voyage</a></li>
                            <li><a href=\"#flight-fare-rules\" data-toggle=\"tab\">Conditions Générales</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade in active\" id=\"flight-details\">
                                <div class=\"intro table-wrapper full-width hidden-table-sm box\">
                                    <div class=\"col-md-4 table-cell travelo-box\">
                                        <dl class=\"term-description\">
                                            <dt>Compagnie:</dt><dd> {{ travel.bus.company.nom }}</dd>
                                            <dt>Type de voyage:</dt><dd>{% if travel.route.type == true %} National {% else %} International {% endif %} FCFA</dd>
                                            <dt>Type de tarif:</dt><dd>Remboursable</dd>
                                            <dt>Siège &amp; Baggage:</dt><dd>Extra Charge </dd>
                                            <dt>Facilité à board:</dt><dd>Disponible</dd>
                                            <dt>Tarif de base:</dt><dd>{{ travel.price|number_format(0, '.', ',')}} FCFA</dd>
                                            <dt>Reduction:</dt><dd>{{ promo.montant|number_format(0, '.', ',') }} FCFA</dd>
                                            <dt>prix total :</dt><dd>{{ (travel.price - promo.montant )|number_format(0, '.', ',')  }} FCFA</dd>
                                        </dl>
                                    </div>
                                    <div class=\"col-md-8 table-cell\">
                                        <div class=\"detailed-features booking-details\">
                                            <div class=\"travelo-box\">
                                                <a href=\"#\" class=\"button btn-mini yellow pull-right\">1 STOP</a>
                                                <h4 class=\"box-title\">{{ travel.route.source.nom }} à {{ travel.route.destination.nom }} </h4>
                                            </div>
                                            <div class=\"table-wrapper flights\">
                                                <div class=\"table-row first-flight\">
                                                    <div class=\"table-cell logo\">
                                                        <img src=\"http://placehold.it/140x30\" alt=\"\">
                                                        <label>AI-635 Economy</label>
                                                    </div>
                                                    <div class=\"table-cell timing-detail\">
                                                        <div class=\"timing\">
                                                            <div class=\"check-in\">
                                                                <label>Take off</label>
                                                                <span>13 Nov 2013, 7:50 am</span>
                                                            </div>
                                                            <div class=\"duration text-center\">
                                                                <i class=\"soap-icon-clock\"></i>
                                                                <span>1h 30m</span>
                                                            </div>
                                                            <div class=\"check-out\">
                                                                <label>landing</label>
                                                                <span>13 Nov 2013, 9:20 Am</span>
                                                            </div>
                                                        </div>
                                                        <label class=\"layover\">Layover : 3h 50m</label>
                                                    </div>
                                                </div>
                                                <div class=\"table-row second-flight\">
                                                    <div class=\"table-cell logo\">
                                                        <img src=\"http://placehold.it/140x30\" alt=\"\">
                                                        <label>AI-635 Economy</label>
                                                    </div>
                                                    <div class=\"table-cell timing-detail\">
                                                        <div class=\"timing\">
                                                            <div class=\"check-in\">
                                                                <label>Take off</label>
                                                                <span>13 Nov 2013, 7:50 am</span>
                                                            </div>
                                                            <div class=\"duration text-center\">
                                                                <i class=\"soap-icon-clock\"></i>
                                                                <span>8h 20m</span>
                                                            </div>
                                                            <div class=\"check-out\">
                                                                <label>landing</label>
                                                                <span>13 Nov 2013, 9:20 Am</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"long-description\">
                                    <h2>A Propos de {{ travel.bus.company.nom }}</h2>
                                    <p>
                                        {{ travel.bus.company.description }}
                                    </p>
                                </div>
                            </div>

                            <div class=\"tab-pane fade\" id=\"flight-fare-rules\">
                                <h2>Règles de votre voyage</h2>
                                <div class=\"topics\">
                                    <ul class=\"check-square clearfix\">
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Règles et Politiques</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Modification du voyage</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Remboursement</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Pénalités de voyage</a></li>
                                        <li class=\"col-sm-6 col-md-4 active\"><a href=\"#\">Annulation du voyage</a></li>
                                        <li class=\"col-sm-6 col-md-4\"><a href=\"#\">Conditions d'utilisations</a></li>
                                    </ul>
                                </div>
                                <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>
                                <div class=\"toggle-container\">
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question1\" data-toggle=\"collapse\">Flight cancellation charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question1\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question2\" data-toggle=\"collapse\">WAmendment in higher class charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question2\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"\" href=\"#question3\" data-toggle=\"collapse\">Amendment in same class charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse in\" id=\"question3\">
                                            <div class=\"panel-content\">
                                                <p>Sed a justo enim. Vivamus volutpat ipsum ultrices augue porta lacinia. Proin in elementum enim. <span class=\"skin-color\">Duis suscipit justo</span> non purus consequat molestie. Etiam pharetra ipsum sagittis sollicitudin ultricies. Praesent luctus, diam ut tempus aliquam, diam ante euismod risus, euismod viverra quam quam eget turpis. Nam <span class=\"skin-color\">tristique congue</span> arcu, id bibendum diam. Ut hendrerit, leo a pellentesque porttitor, purus arcu tristique erat, in faucibus elit leo in turpis vitae luctus enim, a mollis nulla.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question4\" data-toggle=\"collapse\">Rebooking/cancellation charges</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question4\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question5\" data-toggle=\"collapse\">Cancellation through the customer support</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question5\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question6\" data-toggle=\"collapse\">Do we accept cancellations through email?</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question6\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"panel style1 arrow-right\">
                                        <h4 class=\"panel-title\">
                                            <a class=\"collapsed\" href=\"#question7\" data-toggle=\"collapse\">What is the minimum day limit of cancellation?</a>
                                        </h4>
                                        <div class=\"panel-collapse collapse\" id=\"question7\">
                                            <div class=\"panel-content\">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"sidebar col-md-3\">
                    <article class=\"detailed-logo\">
                        <figure>
                            <img src=\"{{ admin_link~\"logo/\"~travel.bus.company.logo }}\" alt=\"\">
                        </figure>
                        <div class=\"details\">
                            <h2 class=\"box-title\">
                                {{ travel.route.title }} </h2>
                                <span class=\"price clearfix\">
                                    <small class=\"pull-left\">tarif/personne</small>
                                    <span class=\"pull-right\">
                                        {% if promo.montant > 0 %}
                                            <s class=\"warning \">{{ travel.price|number_format(0, '.', ',')  }} FCFA</s> <br>
                                            {{ promo.montant|number_format(0, '.', ',')  }} FCFA
                                        {% else %}
                                            {{ travel.price|number_format(0, '.', ',')  }} FCFA
                                        {% endif %}
                                    </span>
                                </span>

                            <div class=\"duration\">
                                <i class=\"soap-icon-clock\"></i>
                                <dl>
                                    <dt class=\"skin-color\">Durée Total:</dt>
                                    <dd>4 Heures 40 minutes</dd>
                                </dl>
                            </div>

                            <p class=\"description\">{{ travel.description| raw }}</p>
                            <a href=\"{{ path('nb_main_customer_info', {'travel': travel.id, 'goingDate': dateJ| date('d-m-Y')}) }}\" class=\"button green full-width uppercase btn-medium\">Acheter Maintenant</a>
                        </div>
                    </article>
                    <div class=\"travelo-box contact-box\">
                        <h4>Besoin d'aide ?</h4>
                        <p>Nous serons plus que ravi de vous aider. Notre équipe clientèle est à votre service 24/7 pour vous aider ou vous accompagner.</p>
                        <address class=\"contact-details\">
                            <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 44-27-27-18-HELLO</span>
                            <br>
                            <a class=\"contact-email\" href=\"#\">aide@next-bus.net</a>
                        </address>
                    </div>
                    <div class=\"travelo-box book-with-us-box\">
                        <h4>Pourquoi acheter avec nous ?</h4>
                        <ul>
                            <li>
                                <i class=\"soap-icon-hotel-1 circle\"></i>
                                <h5 class=\"title\"><a href=\"#\">+3,000 points de ventes</a></h5>
                                <p>Avec nextBus acheter vos billets dans les agences CANAL+, Orange Money et les agences de voyage</p>
                            </li>
                            <li><br>
                                <i class=\"soap-icon-savings circle\"></i>
                                <h5 class=\"title\"><a href=\"#\">Réductions &amp; Economie</a></h5>
                                <p>Avec nextBus bénéficiez des meilleurs prix promotionnels sur vos billets.</p>
                            </li>
                            <li>
                                <i class=\"soap-icon-support circle\"></i>
                                <h5 class=\"title\"><a href=\"#\">Excellent Service client</a></h5>
                                <p>nextBus vous offre le meilleur service client, qui reste à votre écoute pour aider à voyager dans le confort et sans tracas.</p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
{% endblock %}", "NBMainBundle::details.html.twig", "/var/www/html/nextBusNew/src/NB/MainBundle/Resources/views/details.html.twig");
    }
}
