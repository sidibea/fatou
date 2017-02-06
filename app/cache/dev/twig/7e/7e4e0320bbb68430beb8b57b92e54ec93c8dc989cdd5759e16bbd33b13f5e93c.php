<?php

/* NBMainBundle::custInfo.html.twig */
class __TwigTemplate_31c7aba452607ae4c0ee534c2b0b4d0ee04ed91f82e04305571b70fb9d91d6d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::custInfo.html.twig", 1);
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
        $__internal_a629957a8000bd66883637647525e3614feb90a5e25654a5a8f6240a417ff6ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a629957a8000bd66883637647525e3614feb90a5e25654a5a8f6240a417ff6ca->enter($__internal_a629957a8000bd66883637647525e3614feb90a5e25654a5a8f6240a417ff6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::custInfo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a629957a8000bd66883637647525e3614feb90a5e25654a5a8f6240a417ff6ca->leave($__internal_a629957a8000bd66883637647525e3614feb90a5e25654a5a8f6240a417ff6ca_prof);

    }

    // line 3
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_884a48165fe2e7b13afbb941dbb3ed1215957771161aba27713b2d5699f66d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884a48165fe2e7b13afbb941dbb3ed1215957771161aba27713b2d5699f66d9f->enter($__internal_884a48165fe2e7b13afbb941dbb3ed1215957771161aba27713b2d5699f66d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

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
                <li class=\"active\">Confirmation des achats</li>
            </ul>
        </div>
    </div>
";
        
        $__internal_884a48165fe2e7b13afbb941dbb3ed1215957771161aba27713b2d5699f66d9f->leave($__internal_884a48165fe2e7b13afbb941dbb3ed1215957771161aba27713b2d5699f66d9f_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1fa137dbc0f7c1ad370c9c0c0163776478562a4a8cf9fb7f2139f842f01bc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fa137dbc0f7c1ad370c9c0c0163776478562a4a8cf9fb7f2139f842f01bc4f->enter($__internal_c1fa137dbc0f7c1ad370c9c0c0163776478562a4a8cf9fb7f2139f842f01bc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
    <section id=\"content\" class=\"gray-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"main\" class=\"col-sms-6 col-sm-8 col-md-9\">
                    <div class=\"booking-section travelo-box\">

                        <form class=\"booking-form\" method=\"post\">
                            <div class=\"person-information\">
                                <h2>Vos Informations personnelles</h2>
                                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "
                                   <h4 class=\"red-color\"> ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h4>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Prenom</label>
                                        <input type=\"text\" name=\"firstname\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Nom de famille</label>
                                        <input type=\"text\" name=\"lastname\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Adresse Email</label>
                                        <input type=\"text\" name=\"email\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                    <div class=\"col-sm-6 col-md-5\">
                                        <div class=\"col-sm-6 col-md-5\">
                                            <label>Age </label>
                                            <input type=\"text\" name=\"age\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                        </div>
                                        <div class=\"col-sm-6 col-md-6\">
                                            <label>Sexe </label>
                                            <select class=\"selector\" name=\"sexe\">
                                                <option value=\"m\">Homme</option>
                                                <option value=\"f\">Femme</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Numéro de Téléphone</label>
                                        <input type=\"text\" name=\"telephone\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                    <div class=\"col-sm-6 text-center col-md-5\">
                                        <h3><b>Paiement 100% sécurisé via</b></h3>
                                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl("assets/images/om.png"), "html", null, true);
        echo "\" />
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label>
                                       En continuant  vous acceptez les <a href=\"#\"><span class=\"skin-color\">Termes et Conditions</span></a>.
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 col-md-5\">
                                    <div class=\"loader\" style=\"text-align: center; display: none;\"></div>
                                    <button type=\"submit\" id=\"booking\" class=\"full-width btn-large\">CONFIRMER & PAYER </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"sidebar col-sms-6 col-sm-4 col-md-3\">
                    <div class=\"booking-details travelo-box\">
                        <h4>Booking Details</h4>
                        <article class=\"flight-booking-details\">
                            <figure class=\"clearfix\">
                                <a title=\"\" href=\"flight-detailed.html\" class=\"middle-block\"><img class=\"middle-item\" alt=\"\" src=\"http://placehold.it/75x75\"></a>
                                <div class=\"travel-title\">
                                    <h5 class=\"box-title\">Indianapolis to paris<small>Oneway flight</small></h5>
                                    <a href=\"flight-detailed.html\" class=\"button\">EDIT</a>
                                </div>
                            </figure>
                            <div class=\"details\">
                                <div class=\"constant-column-3 timing clearfix\">
                                    <div class=\"check-in\">
                                        <label>Take off</label>
                                        <span>NOV 30, 2013<br />7:50 am</span>
                                    </div>
                                    <div class=\"duration text-center\">
                                        <i class=\"soap-icon-clock\"></i>
                                        <span>13h, 40m</span>
                                    </div>
                                    <div class=\"check-out\">
                                        <label>landing</label>
                                        <span>Nov 13 2013<br />9:20 am</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <h4>Other Details</h4>
                        <dl class=\"other-details\">
                            <dt class=\"feature\">Airline:</dt><dd class=\"value\">Delta</dd>
                            <dt class=\"feature\">Flight type:</dt><dd class=\"value\">Economy</dd>
                            <dt class=\"feature\">base fare:</dt><dd class=\"value\">\$320</dd>
                            <dt class=\"feature\">taxes and fees:</dt><dd class=\"value\">\$300</dd>
                            <dt class=\"total-price\">Total Price</dt><dd class=\"total-price-value\">\$620</dd>
                        </dl>
                    </div>

                    <div class=\"travelo-box contact-box\">
                        <h4>Need Travelo Help?</h4>
                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                        <address class=\"contact-details\">
                            <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 1-800-123-HELLO</span>
                            <br>
                            <a class=\"contact-email\" href=\"#\">help@travelo.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_c1fa137dbc0f7c1ad370c9c0c0163776478562a4a8cf9fb7f2139f842f01bc4f->leave($__internal_c1fa137dbc0f7c1ad370c9c0c0163776478562a4a8cf9fb7f2139f842f01bc4f_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::custInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 70,  96 => 33,  87 => 30,  84 => 29,  80 => 28,  68 => 18,  62 => 17,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
                <li class=\"active\">Confirmation des achats</li>
            </ul>
        </div>
    </div>
{% endblock %}

{% block content %}

    <section id=\"content\" class=\"gray-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"main\" class=\"col-sms-6 col-sm-8 col-md-9\">
                    <div class=\"booking-section travelo-box\">

                        <form class=\"booking-form\" method=\"post\">
                            <div class=\"person-information\">
                                <h2>Vos Informations personnelles</h2>
                                {% for flashMessage in app.session.flashbag.get('error') %}

                                   <h4 class=\"red-color\"> {{ flashMessage }}</h4>

                                {% endfor %}
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Prenom</label>
                                        <input type=\"text\" name=\"firstname\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Nom de famille</label>
                                        <input type=\"text\" name=\"lastname\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Adresse Email</label>
                                        <input type=\"text\" name=\"email\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                    <div class=\"col-sm-6 col-md-5\">
                                        <div class=\"col-sm-6 col-md-5\">
                                            <label>Age </label>
                                            <input type=\"text\" name=\"age\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                        </div>
                                        <div class=\"col-sm-6 col-md-6\">
                                            <label>Sexe </label>
                                            <select class=\"selector\" name=\"sexe\">
                                                <option value=\"m\">Homme</option>
                                                <option value=\"f\">Femme</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <div class=\"col-sm-6 col-md-5\">
                                        <label>Numéro de Téléphone</label>
                                        <input type=\"text\" name=\"telephone\" class=\"input-text full-width\" value=\"\" placeholder=\"\" />
                                    </div>
                                    <div class=\"col-sm-6 text-center col-md-5\">
                                        <h3><b>Paiement 100% sécurisé via</b></h3>
                                        <img src=\"{{ absolute_url('assets/images/om.png') }}\" />
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label>
                                       En continuant  vous acceptez les <a href=\"#\"><span class=\"skin-color\">Termes et Conditions</span></a>.
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 col-md-5\">
                                    <div class=\"loader\" style=\"text-align: center; display: none;\"></div>
                                    <button type=\"submit\" id=\"booking\" class=\"full-width btn-large\">CONFIRMER & PAYER </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"sidebar col-sms-6 col-sm-4 col-md-3\">
                    <div class=\"booking-details travelo-box\">
                        <h4>Booking Details</h4>
                        <article class=\"flight-booking-details\">
                            <figure class=\"clearfix\">
                                <a title=\"\" href=\"flight-detailed.html\" class=\"middle-block\"><img class=\"middle-item\" alt=\"\" src=\"http://placehold.it/75x75\"></a>
                                <div class=\"travel-title\">
                                    <h5 class=\"box-title\">Indianapolis to paris<small>Oneway flight</small></h5>
                                    <a href=\"flight-detailed.html\" class=\"button\">EDIT</a>
                                </div>
                            </figure>
                            <div class=\"details\">
                                <div class=\"constant-column-3 timing clearfix\">
                                    <div class=\"check-in\">
                                        <label>Take off</label>
                                        <span>NOV 30, 2013<br />7:50 am</span>
                                    </div>
                                    <div class=\"duration text-center\">
                                        <i class=\"soap-icon-clock\"></i>
                                        <span>13h, 40m</span>
                                    </div>
                                    <div class=\"check-out\">
                                        <label>landing</label>
                                        <span>Nov 13 2013<br />9:20 am</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <h4>Other Details</h4>
                        <dl class=\"other-details\">
                            <dt class=\"feature\">Airline:</dt><dd class=\"value\">Delta</dd>
                            <dt class=\"feature\">Flight type:</dt><dd class=\"value\">Economy</dd>
                            <dt class=\"feature\">base fare:</dt><dd class=\"value\">\$320</dd>
                            <dt class=\"feature\">taxes and fees:</dt><dd class=\"value\">\$300</dd>
                            <dt class=\"total-price\">Total Price</dt><dd class=\"total-price-value\">\$620</dd>
                        </dl>
                    </div>

                    <div class=\"travelo-box contact-box\">
                        <h4>Need Travelo Help?</h4>
                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                        <address class=\"contact-details\">
                            <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 1-800-123-HELLO</span>
                            <br>
                            <a class=\"contact-email\" href=\"#\">help@travelo.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "NBMainBundle::custInfo.html.twig", "/var/www/html/nextBusNew/src/NB/MainBundle/Resources/views/custInfo.html.twig");
    }
}
