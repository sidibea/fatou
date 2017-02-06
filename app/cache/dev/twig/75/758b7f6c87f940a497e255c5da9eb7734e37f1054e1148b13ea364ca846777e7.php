<?php

/* includes/header.html.twig */
class __TwigTemplate_f09242f1e9704de8e2a1abb3c7a6b0c8549006a40e985fba1358f859d0c4cf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d615f8767582deec0e0630f3fbd872aa621ef3bbe3cc96a74fc0698acb128a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d615f8767582deec0e0630f3fbd872aa621ef3bbe3cc96a74fc0698acb128a4->enter($__internal_9d615f8767582deec0e0630f3fbd872aa621ef3bbe3cc96a74fc0698acb128a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<div class=\"topnav hidden-xs\">
    <div class=\"container\">
        <ul class=\"quick-menu pull-left\">
            <li><a href=\"#\">MON COMPTE</a></li>
            <li class=\"ribbon\">
                <a href=\"#\">Français</a>
                <ul class=\"menu mini\">
                    <li><a href=\"#\" title=\"Dansk\">Anglais</a></li>
                    <li><a href=\"#\" title=\"Deutsch\">Bambara</a></li>
                </ul>
            </li>
        </ul>
        <ul class=\"quick-menu pull-right\">
            <li><a href=\"#travelo-login\" class=\"soap-popupbox\">SE CONNECTER</a></li>
            <li><a href=\"#travelo-signup\" class=\"soap-popupbox\">S'INSCRIRE</a></li>
        </ul>
    </div>
</div>

<div class=\"main-header\">

    <a href=\"#mobile-menu-01\" data-toggle=\"collapse\" class=\"mobile-menu-toggle\">
        Mobile Menu
    </a>

    <div class=\"container\">
        <h1 class=\"logo navbar-brand\">
            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\" title=\"Travelo - home\">
                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png")), "html", null, true);
        echo "\" alt=\"nextBus la première réservation de billet de bus en ligne\" />
            </a>
        </h1>

        <nav id=\"main-menu\" role=\"navigation\">
            <ul class=\"menu\">
                <li class=\"\">
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\">Accueil</a>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"hotel-index.html\">Destination</a>
                    <ul>
                        <li><a href=\"hotel-index.html\">Réseau International</a></li>
                        <li><a href=\"hotel-list-view.html\">Réseau International</a></li>
                        <li><a href=\"hotel-grid-view.html\">Horaires</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"flight-index.html\">Votre voyage</a>
                    <ul>
                        <li><a href=\"flight-index.html\">Pourquoi nextBus</a></li>
                        <li><a href=\"flight-list-view.html\">Acheter votre billet</a></li>
                        <li><a href=\"flight-grid-view.html\">Modifier votre billet</a></li>
                        <li><a href=\"flight-block-view.html\">Préparer votre voyage</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"car-index.html\">A Propos</a>
                    <ul>
                        <li><a href=\"car-index.html\">Qui sommes Nous ?</a></li>
                        <li><a href=\"car-list-view.html\">Nouveautés</a></li>
                        <li><a href=\"car-grid-view.html\">Inscription newsletter</a></li>
                        <li><a href=\"car-block-view.html\">Droit des passagers</a></li>
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"cruise-index.html\">Blog</a>
                </li>
                <li class=\"\">
                    <a href=\"cruise-index.html\">Professionnel</a>
                </li>
                <li class=\"\">
                    <a href=\"cruise-index.html\">Contact</a>
                </li>

            </ul>
        </nav>
    </div>

    <nav id=\"mobile-menu-01\" class=\"mobile-menu collapse\">
        <ul id=\"mobile-primary-menu\" class=\"menu\">
            <li class=\"\">
                <a href=\"index.html\">Accueil</a>
            </li>
            <li class=\"menu-item-has-children\">
                <a href=\"hotel-index.html\">Destination</a>
                <ul>
                    <li><a href=\"hotel-index.html\">Réseau International</a></li>
                    <li><a href=\"hotel-list-view.html\">Réseau International</a></li>
                    <li><a href=\"hotel-grid-view.html\">Horaires</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <a href=\"flight-index.html\">Votre voyage</a>
                <ul>
                    <li><a href=\"flight-index.html\">Pourquoi nextBus</a></li>
                    <li><a href=\"flight-list-view.html\">Acheter votre billet</a></li>
                    <li><a href=\"flight-grid-view.html\">Modifier votre billet</a></li>
                    <li><a href=\"flight-block-view.html\">Préparer votre voyage</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <a href=\"car-index.html\">A Propos</a>
                <ul>
                    <li><a href=\"car-index.html\">Qui sommes Nous ?</a></li>
                    <li><a href=\"car-list-view.html\">Nouveautés</a></li>
                    <li><a href=\"car-grid-view.html\">Inscription newsletter</a></li>
                    <li><a href=\"car-block-view.html\">Droit des passagers</a></li>
                </ul>
            </li>
            <li class=\"\">
                <a href=\"cruise-index.html\">Blog</a>
            </li>
            <li class=\"\">
                <a href=\"cruise-index.html\">Professionnel</a>
            </li>
            <li class=\"\">
                <a href=\"cruise-index.html\">Contact</a>
            </li>
        </ul>

    </nav>
</div>
<div id=\"travelo-signup\" class=\"travelo-signup-box travelo-box\">
    <div class=\"login-social\">
        <a href=\"#\" class=\"button login-facebook\"><i class=\"soap-icon-facebook\"></i>Login with Facebook</a>
        <a href=\"#\" class=\"button login-googleplus\"><i class=\"soap-icon-googleplus\"></i>Login with Google+</a>
    </div>
    <div class=\"seperator\"><label>OR</label></div>
    <div class=\"simple-signup\">
        <div class=\"text-center signup-email-section\">
            <a href=\"#\" class=\"signup-email\"><i class=\"soap-icon-letter\"></i>Sign up with Email</a>
        </div>
        <p class=\"description\">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
    </div>
    <div class=\"email-signup\">
        <form>
            <div class=\"form-group\">
                <input type=\"text\" class=\"input-text full-width\" placeholder=\"first name\">
            </div>
            <div class=\"form-group\">
                <input type=\"text\" class=\"input-text full-width\" placeholder=\"last name\">
            </div>
            <div class=\"form-group\">
                <input type=\"text\" class=\"input-text full-width\" placeholder=\"email address\">
            </div>
            <div class=\"form-group\">
                <input type=\"password\" class=\"input-text full-width\" placeholder=\"password\">
            </div>
            <div class=\"form-group\">
                <input type=\"password\" class=\"input-text full-width\" placeholder=\"confirm password\">
            </div>
            <div class=\"form-group\">
                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\"> Tell me about Travelo news
                    </label>
                </div>
            </div>
            <div class=\"form-group\">
                <p class=\"description\">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
            </div>
            <button type=\"submit\" class=\"full-width btn-medium\">SIGNUP</button>
        </form>
    </div>
    <div class=\"seperator\"></div>
    <p>Already a Travelo member? <a href=\"#travelo-login\" class=\"goto-login soap-popupbox\">Login</a></p>
</div>
<div id=\"travelo-login\" class=\"travelo-login-box travelo-box\">
    <div class=\"login-social\">
        <a href=\"#\" class=\"button login-facebook\"><i class=\"soap-icon-facebook\"></i>Login with Facebook</a>
        <a href=\"#\" class=\"button login-googleplus\"><i class=\"soap-icon-googleplus\"></i>Login with Google+</a>
    </div>
    <div class=\"seperator\"><label>OR</label></div>
    <form>
        <div class=\"form-group\">
            <input type=\"text\" class=\"input-text full-width\" placeholder=\"email address\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" class=\"input-text full-width\" placeholder=\"password\">
        </div>
        <div class=\"form-group\">
            <a href=\"#\" class=\"forgot-password pull-right\">Forgot password?</a>
            <div class=\"checkbox checkbox-inline\">
                <label>
                    <input type=\"checkbox\"> Remember me
                </label>
            </div>
        </div>
    </form>
    <div class=\"seperator\"></div>
    <p>Don't have an account? <a href=\"#travelo-signup\" class=\"goto-signup soap-popupbox\">Sign up</a></p>
</div>";
        
        $__internal_9d615f8767582deec0e0630f3fbd872aa621ef3bbe3cc96a74fc0698acb128a4->leave($__internal_9d615f8767582deec0e0630f3fbd872aa621ef3bbe3cc96a74fc0698acb128a4_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 36,  55 => 29,  51 => 28,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"topnav hidden-xs\">
    <div class=\"container\">
        <ul class=\"quick-menu pull-left\">
            <li><a href=\"#\">MON COMPTE</a></li>
            <li class=\"ribbon\">
                <a href=\"#\">Français</a>
                <ul class=\"menu mini\">
                    <li><a href=\"#\" title=\"Dansk\">Anglais</a></li>
                    <li><a href=\"#\" title=\"Deutsch\">Bambara</a></li>
                </ul>
            </li>
        </ul>
        <ul class=\"quick-menu pull-right\">
            <li><a href=\"#travelo-login\" class=\"soap-popupbox\">SE CONNECTER</a></li>
            <li><a href=\"#travelo-signup\" class=\"soap-popupbox\">S'INSCRIRE</a></li>
        </ul>
    </div>
</div>

<div class=\"main-header\">

    <a href=\"#mobile-menu-01\" data-toggle=\"collapse\" class=\"mobile-menu-toggle\">
        Mobile Menu
    </a>

    <div class=\"container\">
        <h1 class=\"logo navbar-brand\">
            <a href=\"{{ path('nb_main_homepage') }}\" title=\"Travelo - home\">
                <img src=\"{{ absolute_url(asset('assets/images/logo.png')) }}\" alt=\"nextBus la première réservation de billet de bus en ligne\" />
            </a>
        </h1>

        <nav id=\"main-menu\" role=\"navigation\">
            <ul class=\"menu\">
                <li class=\"\">
                    <a href=\"{{ path('nb_main_homepage') }}\">Accueil</a>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"hotel-index.html\">Destination</a>
                    <ul>
                        <li><a href=\"hotel-index.html\">Réseau International</a></li>
                        <li><a href=\"hotel-list-view.html\">Réseau International</a></li>
                        <li><a href=\"hotel-grid-view.html\">Horaires</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"flight-index.html\">Votre voyage</a>
                    <ul>
                        <li><a href=\"flight-index.html\">Pourquoi nextBus</a></li>
                        <li><a href=\"flight-list-view.html\">Acheter votre billet</a></li>
                        <li><a href=\"flight-grid-view.html\">Modifier votre billet</a></li>
                        <li><a href=\"flight-block-view.html\">Préparer votre voyage</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"car-index.html\">A Propos</a>
                    <ul>
                        <li><a href=\"car-index.html\">Qui sommes Nous ?</a></li>
                        <li><a href=\"car-list-view.html\">Nouveautés</a></li>
                        <li><a href=\"car-grid-view.html\">Inscription newsletter</a></li>
                        <li><a href=\"car-block-view.html\">Droit des passagers</a></li>
                    </ul>
                </li>
                <li class=\"\">
                    <a href=\"cruise-index.html\">Blog</a>
                </li>
                <li class=\"\">
                    <a href=\"cruise-index.html\">Professionnel</a>
                </li>
                <li class=\"\">
                    <a href=\"cruise-index.html\">Contact</a>
                </li>

            </ul>
        </nav>
    </div>

    <nav id=\"mobile-menu-01\" class=\"mobile-menu collapse\">
        <ul id=\"mobile-primary-menu\" class=\"menu\">
            <li class=\"\">
                <a href=\"index.html\">Accueil</a>
            </li>
            <li class=\"menu-item-has-children\">
                <a href=\"hotel-index.html\">Destination</a>
                <ul>
                    <li><a href=\"hotel-index.html\">Réseau International</a></li>
                    <li><a href=\"hotel-list-view.html\">Réseau International</a></li>
                    <li><a href=\"hotel-grid-view.html\">Horaires</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <a href=\"flight-index.html\">Votre voyage</a>
                <ul>
                    <li><a href=\"flight-index.html\">Pourquoi nextBus</a></li>
                    <li><a href=\"flight-list-view.html\">Acheter votre billet</a></li>
                    <li><a href=\"flight-grid-view.html\">Modifier votre billet</a></li>
                    <li><a href=\"flight-block-view.html\">Préparer votre voyage</a></li>
                </ul>
            </li>
            <li class=\"menu-item-has-children\">
                <a href=\"car-index.html\">A Propos</a>
                <ul>
                    <li><a href=\"car-index.html\">Qui sommes Nous ?</a></li>
                    <li><a href=\"car-list-view.html\">Nouveautés</a></li>
                    <li><a href=\"car-grid-view.html\">Inscription newsletter</a></li>
                    <li><a href=\"car-block-view.html\">Droit des passagers</a></li>
                </ul>
            </li>
            <li class=\"\">
                <a href=\"cruise-index.html\">Blog</a>
            </li>
            <li class=\"\">
                <a href=\"cruise-index.html\">Professionnel</a>
            </li>
            <li class=\"\">
                <a href=\"cruise-index.html\">Contact</a>
            </li>
        </ul>

    </nav>
</div>
<div id=\"travelo-signup\" class=\"travelo-signup-box travelo-box\">
    <div class=\"login-social\">
        <a href=\"#\" class=\"button login-facebook\"><i class=\"soap-icon-facebook\"></i>Login with Facebook</a>
        <a href=\"#\" class=\"button login-googleplus\"><i class=\"soap-icon-googleplus\"></i>Login with Google+</a>
    </div>
    <div class=\"seperator\"><label>OR</label></div>
    <div class=\"simple-signup\">
        <div class=\"text-center signup-email-section\">
            <a href=\"#\" class=\"signup-email\"><i class=\"soap-icon-letter\"></i>Sign up with Email</a>
        </div>
        <p class=\"description\">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
    </div>
    <div class=\"email-signup\">
        <form>
            <div class=\"form-group\">
                <input type=\"text\" class=\"input-text full-width\" placeholder=\"first name\">
            </div>
            <div class=\"form-group\">
                <input type=\"text\" class=\"input-text full-width\" placeholder=\"last name\">
            </div>
            <div class=\"form-group\">
                <input type=\"text\" class=\"input-text full-width\" placeholder=\"email address\">
            </div>
            <div class=\"form-group\">
                <input type=\"password\" class=\"input-text full-width\" placeholder=\"password\">
            </div>
            <div class=\"form-group\">
                <input type=\"password\" class=\"input-text full-width\" placeholder=\"confirm password\">
            </div>
            <div class=\"form-group\">
                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\"> Tell me about Travelo news
                    </label>
                </div>
            </div>
            <div class=\"form-group\">
                <p class=\"description\">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
            </div>
            <button type=\"submit\" class=\"full-width btn-medium\">SIGNUP</button>
        </form>
    </div>
    <div class=\"seperator\"></div>
    <p>Already a Travelo member? <a href=\"#travelo-login\" class=\"goto-login soap-popupbox\">Login</a></p>
</div>
<div id=\"travelo-login\" class=\"travelo-login-box travelo-box\">
    <div class=\"login-social\">
        <a href=\"#\" class=\"button login-facebook\"><i class=\"soap-icon-facebook\"></i>Login with Facebook</a>
        <a href=\"#\" class=\"button login-googleplus\"><i class=\"soap-icon-googleplus\"></i>Login with Google+</a>
    </div>
    <div class=\"seperator\"><label>OR</label></div>
    <form>
        <div class=\"form-group\">
            <input type=\"text\" class=\"input-text full-width\" placeholder=\"email address\">
        </div>
        <div class=\"form-group\">
            <input type=\"password\" class=\"input-text full-width\" placeholder=\"password\">
        </div>
        <div class=\"form-group\">
            <a href=\"#\" class=\"forgot-password pull-right\">Forgot password?</a>
            <div class=\"checkbox checkbox-inline\">
                <label>
                    <input type=\"checkbox\"> Remember me
                </label>
            </div>
        </div>
    </form>
    <div class=\"seperator\"></div>
    <p>Don't have an account? <a href=\"#travelo-signup\" class=\"goto-signup soap-popupbox\">Sign up</a></p>
</div>", "includes/header.html.twig", "/var/www/html/nextBusNew/app/Resources/views/includes/header.html.twig");
    }
}
