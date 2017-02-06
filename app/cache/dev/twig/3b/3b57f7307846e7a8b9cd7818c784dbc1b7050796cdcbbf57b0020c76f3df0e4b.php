<?php

/* ::base.html.twig */
class __TwigTemplate_d9bde2dbf5565163a03294b96996a90ea749f8d5ff8c199a91efb87dce3faac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'themeStyles' => array($this, 'block_themeStyles'),
            'currentPageStyles' => array($this, 'block_currentPageStyles'),
            'mainStyles' => array($this, 'block_mainStyles'),
            'customStyles' => array($this, 'block_customStyles'),
            'updatedStyles' => array($this, 'block_updatedStyles'),
            'ResponsiveStyles' => array($this, 'block_ResponsiveStyles'),
            'header' => array($this, 'block_header'),
            'breadcumb' => array($this, 'block_breadcumb'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b6a13dd3467b44b76f865110632255191f1c479b34dc1495bc353a2f26698d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6a13dd3467b44b76f865110632255191f1c479b34dc1495bc353a2f26698d8->enter($__internal_9b6a13dd3467b44b76f865110632255191f1c479b34dc1495bc353a2f26698d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>          <html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>          <html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Meta Tags -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"Next Group SARL\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">


    <!-- Theme Styles -->
    ";
        // line 19
        $this->displayBlock('themeStyles', $context, $blocks);
        // line 28
        echo "
    <!-- Current Page Styles -->
    ";
        // line 30
        $this->displayBlock('currentPageStyles', $context, $blocks);
        // line 41
        echo "
    <!-- Main Style -->
    ";
        // line 43
        $this->displayBlock('mainStyles', $context, $blocks);
        // line 51
        echo "
    <!-- Custom Styles -->
    ";
        // line 53
        $this->displayBlock('customStyles', $context, $blocks);
        // line 61
        echo "
    <!-- Updated Styles -->
    ";
        // line 63
        $this->displayBlock('updatedStyles', $context, $blocks);
        // line 71
        echo "
    <!-- Responsive Styles -->
    ";
        // line 73
        $this->displayBlock('ResponsiveStyles', $context, $blocks);
        // line 81
        echo "
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie.css\" />
    <![endif]-->



    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ie.css")), "html", null, true);
        echo "\" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <script type='text/javascript' src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js\"></script>
    <![endif]-->

</head>
<body>
<div id=\"page-wrapper\">
    <header id=\"header\" class=\"navbar-static-top\">
        ";
        // line 108
        $this->displayBlock('header', $context, $blocks);
        // line 112
        echo "
    </header>

    ";
        // line 115
        $this->displayBlock('breadcumb', $context, $blocks);
        // line 116
        echo "
    ";
        // line 117
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "


    <footer id=\"footer\">

            ";
        // line 125
        $this->displayBlock('footer', $context, $blocks);
        // line 206
        echo "        <div class=\"bottom\">
            <div class=\"container\">
                <div class=\"logo pull-left\">
                    <a href=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nb_main_homepage");
        echo "\" title=\"nextBus - Accueil\">
                        <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png")), "html", null, true);
        echo "\" alt=\"nextBus la première plateforme de vente de billet de bus en ligne\" />
                    </a>
                </div>
                <div class=\"pull-right\">
                    <a id=\"back-to-top\" href=\"#\" class=\"animated\" data-animation-type=\"bounce\"><i class=\"soap-icon-longarrow-up circle\"></i></a>
                </div>
                <div class=\"copyright pull-right\">
                    <p>&copy; ";
        // line 217
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " nextBus</p>
                </div>
            </div>
        </div>
    </footer>
</div>


";
        // line 225
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a34b95a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery-1.11.1.min_1.js");
            // line 243
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery.noconflict_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_modernizr.2.7.1.min_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery-migrate-1.2.1.min_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery.placeholder_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery-ui.1.10.4.min_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_bootstrap_7.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery.themepunch.plugins.min_8.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery.flexslider-min_9.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery.bxslider.min_10.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_jquery.stellar.min_11.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_waypoints.min_12.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_theme-scripts_13.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a34b95a_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a_scripts_14.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "a34b95a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a34b95a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a34b95a.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 243, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('scripts', $context, $blocks);
        // line 249
        echo "
</body>
</html>

";
        
        $__internal_9b6a13dd3467b44b76f865110632255191f1c479b34dc1495bc353a2f26698d8->leave($__internal_9b6a13dd3467b44b76f865110632255191f1c479b34dc1495bc353a2f26698d8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3811ac2a60162dd250f4ba17e3d52b0cc175f197035923e670129fcbf5aa58a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3811ac2a60162dd250f4ba17e3d52b0cc175f197035923e670129fcbf5aa58a7->enter($__internal_3811ac2a60162dd250f4ba17e3d52b0cc175f197035923e670129fcbf5aa58a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_3811ac2a60162dd250f4ba17e3d52b0cc175f197035923e670129fcbf5aa58a7->leave($__internal_3811ac2a60162dd250f4ba17e3d52b0cc175f197035923e670129fcbf5aa58a7_prof);

    }

    // line 11
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_26a5a492f5db3b108e267447e7cbc5861277bc0a85cb1ba6ae173843dbf581a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a5a492f5db3b108e267447e7cbc5861277bc0a85cb1ba6ae173843dbf581a3->enter($__internal_26a5a492f5db3b108e267447e7cbc5861277bc0a85cb1ba6ae173843dbf581a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo " ";
        
        $__internal_26a5a492f5db3b108e267447e7cbc5861277bc0a85cb1ba6ae173843dbf581a3->leave($__internal_26a5a492f5db3b108e267447e7cbc5861277bc0a85cb1ba6ae173843dbf581a3_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_cd954ec669a0d7e564c98465098439589c7186b323113b94564b24ac09f6b8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd954ec669a0d7e564c98465098439589c7186b323113b94564b24ac09f6b8bc->enter($__internal_cd954ec669a0d7e564c98465098439589c7186b323113b94564b24ac09f6b8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Avec nextBus, voyagez en bus au Mali et en Afrique de l'Ouest à prix discount. Découvrez la solution pour voyager simplement et moins chèr. Réservez/acheter votre billet en ligne en quelques clics ! ";
        
        $__internal_cd954ec669a0d7e564c98465098439589c7186b323113b94564b24ac09f6b8bc->leave($__internal_cd954ec669a0d7e564c98465098439589c7186b323113b94564b24ac09f6b8bc_prof);

    }

    // line 19
    public function block_themeStyles($context, array $blocks = array())
    {
        $__internal_2ececa77570dbff77ac3635eb69f6f7bb8234990345e2c0ab4b743743611b152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ececa77570dbff77ac3635eb69f6f7bb8234990345e2c0ab4b743743611b152->enter($__internal_2ececa77570dbff77ac3635eb69f6f7bb8234990345e2c0ab4b743743611b152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "themeStyles"));

        // line 20
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0241b45_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0241b45_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0241b45_bootstrap.min_1.css");
            // line 25
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
            // asset "0241b45_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0241b45_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0241b45_font-awesome.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "0241b45"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0241b45") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0241b45.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    ";
        
        $__internal_2ececa77570dbff77ac3635eb69f6f7bb8234990345e2c0ab4b743743611b152->leave($__internal_2ececa77570dbff77ac3635eb69f6f7bb8234990345e2c0ab4b743743611b152_prof);

    }

    // line 30
    public function block_currentPageStyles($context, array $blocks = array())
    {
        $__internal_72f2fbeb7dc016adb096b344a592f2896caba2dc32341a7ea8c5ea5d5663f50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f2fbeb7dc016adb096b344a592f2896caba2dc32341a7ea8c5ea5d5663f50f->enter($__internal_72f2fbeb7dc016adb096b344a592f2896caba2dc32341a7ea8c5ea5d5663f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "currentPageStyles"));

        // line 31
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "dda70a3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dda70a3_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dda70a3_settings_1.css");
            // line 38
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
            // asset "dda70a3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dda70a3_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dda70a3_style_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
            // asset "dda70a3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dda70a3_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dda70a3_jquery.bxslider_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
            // asset "dda70a3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dda70a3_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dda70a3_flexslider_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "dda70a3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_dda70a3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/dda70a3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "    ";
        
        $__internal_72f2fbeb7dc016adb096b344a592f2896caba2dc32341a7ea8c5ea5d5663f50f->leave($__internal_72f2fbeb7dc016adb096b344a592f2896caba2dc32341a7ea8c5ea5d5663f50f_prof);

    }

    // line 43
    public function block_mainStyles($context, array $blocks = array())
    {
        $__internal_3793b6fad6f5b6f1bd12000f9bc741c99b561a8f2a0d83ab274f4f0405c6b035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3793b6fad6f5b6f1bd12000f9bc741c99b561a8f2a0d83ab274f4f0405c6b035->enter($__internal_3793b6fad6f5b6f1bd12000f9bc741c99b561a8f2a0d83ab274f4f0405c6b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainStyles"));

        // line 44
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "15878e7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_15878e7_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/15878e7_style_1.css");
            // line 48
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "15878e7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_15878e7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/15878e7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 50
        echo "    ";
        
        $__internal_3793b6fad6f5b6f1bd12000f9bc741c99b561a8f2a0d83ab274f4f0405c6b035->leave($__internal_3793b6fad6f5b6f1bd12000f9bc741c99b561a8f2a0d83ab274f4f0405c6b035_prof);

    }

    // line 53
    public function block_customStyles($context, array $blocks = array())
    {
        $__internal_4ca967009aafa38121983fddbdce60da86f5e959d16681f38d41849abab418e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca967009aafa38121983fddbdce60da86f5e959d16681f38d41849abab418e4->enter($__internal_4ca967009aafa38121983fddbdce60da86f5e959d16681f38d41849abab418e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "customStyles"));

        // line 54
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "033effa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_033effa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/033effa_custom_1.css");
            // line 58
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "033effa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_033effa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/033effa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 60
        echo "    ";
        
        $__internal_4ca967009aafa38121983fddbdce60da86f5e959d16681f38d41849abab418e4->leave($__internal_4ca967009aafa38121983fddbdce60da86f5e959d16681f38d41849abab418e4_prof);

    }

    // line 63
    public function block_updatedStyles($context, array $blocks = array())
    {
        $__internal_7e50dfc8754a5cc7e815570ee3955367c9956669e83ec85270ed3c2eea2ac962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e50dfc8754a5cc7e815570ee3955367c9956669e83ec85270ed3c2eea2ac962->enter($__internal_7e50dfc8754a5cc7e815570ee3955367c9956669e83ec85270ed3c2eea2ac962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updatedStyles"));

        // line 64
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "825ebaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_825ebaa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/825ebaa_updates_1.css");
            // line 68
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "825ebaa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_825ebaa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/825ebaa.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 68, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 70
        echo "    ";
        
        $__internal_7e50dfc8754a5cc7e815570ee3955367c9956669e83ec85270ed3c2eea2ac962->leave($__internal_7e50dfc8754a5cc7e815570ee3955367c9956669e83ec85270ed3c2eea2ac962_prof);

    }

    // line 73
    public function block_ResponsiveStyles($context, array $blocks = array())
    {
        $__internal_d6bb35f0e78f5c3bd7f9cf3d79f2b8b465215c1931e66b423467f325a18bb6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bb35f0e78f5c3bd7f9cf3d79f2b8b465215c1931e66b423467f325a18bb6a2->enter($__internal_d6bb35f0e78f5c3bd7f9cf3d79f2b8b465215c1931e66b423467f325a18bb6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ResponsiveStyles"));

        // line 74
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f3c09b8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f3c09b8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/f3c09b8_responsive_1.css");
            // line 78
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "f3c09b8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f3c09b8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/f3c09b8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 80
        echo "    ";
        
        $__internal_d6bb35f0e78f5c3bd7f9cf3d79f2b8b465215c1931e66b423467f325a18bb6a2->leave($__internal_d6bb35f0e78f5c3bd7f9cf3d79f2b8b465215c1931e66b423467f325a18bb6a2_prof);

    }

    // line 108
    public function block_header($context, array $blocks = array())
    {
        $__internal_9430f66743ec6595172b990cdf0ee9738081913be19ddc25213fb80c2ab99edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9430f66743ec6595172b990cdf0ee9738081913be19ddc25213fb80c2ab99edd->enter($__internal_9430f66743ec6595172b990cdf0ee9738081913be19ddc25213fb80c2ab99edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 109
        echo "            ";
        $this->loadTemplate("includes/header.html.twig", "::base.html.twig", 109)->display($context);
        // line 110
        echo "
        ";
        
        $__internal_9430f66743ec6595172b990cdf0ee9738081913be19ddc25213fb80c2ab99edd->leave($__internal_9430f66743ec6595172b990cdf0ee9738081913be19ddc25213fb80c2ab99edd_prof);

    }

    // line 115
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_e46df7a09c8d8c624ab5ed003b77703c9526f03bd66e493d25e332145d7683bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46df7a09c8d8c624ab5ed003b77703c9526f03bd66e493d25e332145d7683bd->enter($__internal_e46df7a09c8d8c624ab5ed003b77703c9526f03bd66e493d25e332145d7683bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        echo " ";
        
        $__internal_e46df7a09c8d8c624ab5ed003b77703c9526f03bd66e493d25e332145d7683bd->leave($__internal_e46df7a09c8d8c624ab5ed003b77703c9526f03bd66e493d25e332145d7683bd_prof);

    }

    // line 117
    public function block_content($context, array $blocks = array())
    {
        $__internal_aaefe55a8662fc8f78824467f361a22131df3c61a4fd891d0dec010dc9713912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaefe55a8662fc8f78824467f361a22131df3c61a4fd891d0dec010dc9713912->enter($__internal_aaefe55a8662fc8f78824467f361a22131df3c61a4fd891d0dec010dc9713912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 118
        echo "
    ";
        
        $__internal_aaefe55a8662fc8f78824467f361a22131df3c61a4fd891d0dec010dc9713912->leave($__internal_aaefe55a8662fc8f78824467f361a22131df3c61a4fd891d0dec010dc9713912_prof);

    }

    // line 125
    public function block_footer($context, array $blocks = array())
    {
        $__internal_674dbe5bfe668fe45646a069dc8829c6e296444e67f4a3c53083393e1171bfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674dbe5bfe668fe45646a069dc8829c6e296444e67f4a3c53083393e1171bfc4->enter($__internal_674dbe5bfe668fe45646a069dc8829c6e296444e67f4a3c53083393e1171bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 126
        echo "            <div class=\"footer-wrapper\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Découvrez</h2>
                            <ul class=\"discover triangle hover row\">
                                <li class=\"col-xs-6\"><a href=\"#\">Sécurité</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">A Propos</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Picks nextBus</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Récrutements</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Revues de presse</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Why Host</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Blog</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">FAQ</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Conditions d'utilisation</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Politiques</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Travel News</h2>
                            <ul class=\"travel-news\">
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\">
                                            <img src=\"http://placehold.it/63x63\" alt=\"\" width=\"63\" height=\"63\" />
                                        </a>
                                    </div>
                                    <div class=\"description\">
                                        <h5 class=\"s-title\"><a href=\"#\">Amazing Places</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class=\"date\">25 Sep, 2013</span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\">
                                            <img src=\"http://placehold.it/63x63\" alt=\"\" width=\"63\" height=\"63\" />
                                        </a>
                                    </div>
                                    <div class=\"description\">
                                        <h5 class=\"s-title\"><a href=\"#\">Travel Insurance</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class=\"date\">24 Sep, 2013</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Newsletters</h2>
                            <p>Souscrivez à notre newsletter pour avoie les dernièrs mises à jour et nos offres.</p>
                            <br />
                            <div class=\"icon-check\">
                                <input type=\"text\" class=\"input-text full-width\" placeholder=\"votre email\" />
                            </div>
                            <br />
                            <span>Nous respectons votre vie privée</span>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>A Propos de nextBus</h2>
                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                            <br />
                            <address class=\"contact-details\">
                                <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 44-27-27-18-HELLO</span>
                                <br />
                                <a href=\"#\" class=\"contact-email\">aide@next-bus.net</a>
                            </address>
                            <ul class=\"social-icons clearfix\">
                                <li class=\"twitter\"><a title=\"twitter\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-twitter\"></i></a></li>
                                <li class=\"googleplus\"><a title=\"googleplus\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-googleplus\"></i></a></li>
                                <li class=\"facebook\"><a title=\"facebook\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-facebook\"></i></a></li>
                                <li class=\"linkedin\"><a title=\"linkedin\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-linkedin\"></i></a></li>
                                <li class=\"vimeo\"><a title=\"vimeo\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-vimeo\"></i></a></li>
                                <li class=\"dribble\"><a title=\"dribble\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-dribble\"></i></a></li>
                                <li class=\"flickr\"><a title=\"flickr\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-flickr\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_674dbe5bfe668fe45646a069dc8829c6e296444e67f4a3c53083393e1171bfc4->leave($__internal_674dbe5bfe668fe45646a069dc8829c6e296444e67f4a3c53083393e1171bfc4_prof);

    }

    // line 246
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_48dec0be4be278367de35594cf5dcfc363f095d6d8767336e8b23cb9edc79098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dec0be4be278367de35594cf5dcfc363f095d6d8767336e8b23cb9edc79098->enter($__internal_48dec0be4be278367de35594cf5dcfc363f095d6d8767336e8b23cb9edc79098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 247
        echo "
";
        
        $__internal_48dec0be4be278367de35594cf5dcfc363f095d6d8767336e8b23cb9edc79098->leave($__internal_48dec0be4be278367de35594cf5dcfc363f095d6d8767336e8b23cb9edc79098_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 247,  681 => 246,  595 => 126,  589 => 125,  581 => 118,  575 => 117,  563 => 115,  555 => 110,  552 => 109,  546 => 108,  539 => 80,  525 => 78,  520 => 74,  514 => 73,  507 => 70,  493 => 68,  488 => 64,  482 => 63,  475 => 60,  461 => 58,  456 => 54,  450 => 53,  443 => 50,  429 => 48,  424 => 44,  418 => 43,  411 => 40,  379 => 38,  374 => 31,  368 => 30,  361 => 27,  341 => 25,  336 => 20,  330 => 19,  318 => 12,  306 => 11,  294 => 7,  283 => 249,  281 => 246,  278 => 245,  186 => 243,  182 => 225,  171 => 217,  161 => 210,  157 => 209,  152 => 206,  150 => 125,  143 => 120,  141 => 117,  138 => 116,  136 => 115,  131 => 112,  129 => 108,  112 => 94,  97 => 81,  95 => 73,  91 => 71,  89 => 63,  85 => 61,  83 => 53,  79 => 51,  77 => 43,  73 => 41,  71 => 30,  67 => 28,  65 => 19,  55 => 12,  51 => 11,  44 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]>          <html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>          <html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>{% block title %} {% endblock %}</title>

    <!-- Meta Tags -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"{% block keywords %} {% endblock %}\" />
    <meta name=\"description\" content=\"{% block description %}Avec nextBus, voyagez en bus au Mali et en Afrique de l'Ouest à prix discount. Découvrez la solution pour voyager simplement et moins chèr. Réservez/acheter votre billet en ligne en quelques clics ! {% endblock %}\">
    <meta name=\"author\" content=\"Next Group SARL\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">


    <!-- Theme Styles -->
    {% block themeStyles %}
        {% stylesheets filter='cssrewrite, scssphp'
        'assets/css/bootstrap.min.css'
        'assets/css/font-awesome.min.css'

        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    <!-- Current Page Styles -->
    {% block currentPageStyles %}
        {% stylesheets filter='cssrewrite, scssphp'
        'assets/components/revolution_slider/css/settings.css'
        'assets/components/revolution_slider/css/style.css'
        'assets/components/jquery.bxslider/jquery.bxslider.css'
        'assets/components/flexslider/flexslider.css'

        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    <!-- Main Style -->
    {% block mainStyles %}
        {% stylesheets filter='cssrewrite, scssphp'
        'assets/css/style.css'

        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    <!-- Custom Styles -->
    {% block customStyles %}
        {% stylesheets filter='cssrewrite, scssphp'
        'assets/css/custom.css'

        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    <!-- Updated Styles -->
    {% block updatedStyles %}
        {% stylesheets filter='cssrewrite, scssphp'
        'assets/css/updates.css'

        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    <!-- Responsive Styles -->
    {% block ResponsiveStyles %}
        {% stylesheets filter='cssrewrite, scssphp'
        'assets/css/responsive.css'

        %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    {% endblock %}

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie.css\" />
    <![endif]-->



    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ absolute_url(asset('assets/css/ie.css')) }}\" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <script type='text/javascript' src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js\"></script>
    <![endif]-->

</head>
<body>
<div id=\"page-wrapper\">
    <header id=\"header\" class=\"navbar-static-top\">
        {% block header %}
            {% include 'includes/header.html.twig' %}

        {% endblock %}

    </header>

    {% block breadcumb %} {% endblock %}

    {% block content %}

    {% endblock %}



    <footer id=\"footer\">

            {% block footer %}
            <div class=\"footer-wrapper\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Découvrez</h2>
                            <ul class=\"discover triangle hover row\">
                                <li class=\"col-xs-6\"><a href=\"#\">Sécurité</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">A Propos</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Picks nextBus</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Récrutements</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Revues de presse</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Why Host</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Blog</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">FAQ</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Conditions d'utilisation</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Politiques</a></li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Travel News</h2>
                            <ul class=\"travel-news\">
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\">
                                            <img src=\"http://placehold.it/63x63\" alt=\"\" width=\"63\" height=\"63\" />
                                        </a>
                                    </div>
                                    <div class=\"description\">
                                        <h5 class=\"s-title\"><a href=\"#\">Amazing Places</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class=\"date\">25 Sep, 2013</span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"thumb\">
                                        <a href=\"#\">
                                            <img src=\"http://placehold.it/63x63\" alt=\"\" width=\"63\" height=\"63\" />
                                        </a>
                                    </div>
                                    <div class=\"description\">
                                        <h5 class=\"s-title\"><a href=\"#\">Travel Insurance</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class=\"date\">24 Sep, 2013</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Newsletters</h2>
                            <p>Souscrivez à notre newsletter pour avoie les dernièrs mises à jour et nos offres.</p>
                            <br />
                            <div class=\"icon-check\">
                                <input type=\"text\" class=\"input-text full-width\" placeholder=\"votre email\" />
                            </div>
                            <br />
                            <span>Nous respectons votre vie privée</span>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>A Propos de nextBus</h2>
                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                            <br />
                            <address class=\"contact-details\">
                                <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 44-27-27-18-HELLO</span>
                                <br />
                                <a href=\"#\" class=\"contact-email\">aide@next-bus.net</a>
                            </address>
                            <ul class=\"social-icons clearfix\">
                                <li class=\"twitter\"><a title=\"twitter\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-twitter\"></i></a></li>
                                <li class=\"googleplus\"><a title=\"googleplus\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-googleplus\"></i></a></li>
                                <li class=\"facebook\"><a title=\"facebook\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-facebook\"></i></a></li>
                                <li class=\"linkedin\"><a title=\"linkedin\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-linkedin\"></i></a></li>
                                <li class=\"vimeo\"><a title=\"vimeo\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-vimeo\"></i></a></li>
                                <li class=\"dribble\"><a title=\"dribble\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-dribble\"></i></a></li>
                                <li class=\"flickr\"><a title=\"flickr\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-flickr\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
        <div class=\"bottom\">
            <div class=\"container\">
                <div class=\"logo pull-left\">
                    <a href=\"{{ path('nb_main_homepage') }}\" title=\"nextBus - Accueil\">
                        <img src=\"{{ absolute_url(asset('assets/images/logo.png')) }}\" alt=\"nextBus la première plateforme de vente de billet de bus en ligne\" />
                    </a>
                </div>
                <div class=\"pull-right\">
                    <a id=\"back-to-top\" href=\"#\" class=\"animated\" data-animation-type=\"bounce\"><i class=\"soap-icon-longarrow-up circle\"></i></a>
                </div>
                <div class=\"copyright pull-right\">
                    <p>&copy; {{ \"now\" | date('Y') }} nextBus</p>
                </div>
            </div>
        </div>
    </footer>
</div>


{% javascripts filter='jsqueeze'
    'assets/js/jquery-1.11.1.min.js'
    'assets/js/jquery.noconflict.js'
    'assets/js/modernizr.2.7.1.min.js'
    'assets/js/jquery-migrate-1.2.1.min.js'
    'assets/js/jquery.placeholder.js'
    'assets/js/jquery-ui.1.10.4.min.js'
    'assets/js/bootstrap.js'
    'assets/components/revolution_slider/js/jquery.themepunch.plugins.min.js'
    'assets/components/flexslider/jquery.flexslider-min.js'
    'assets/components/jquery.bxslider/jquery.bxslider.min.js'
    'assets/js/jquery.stellar.min.js'
    'assets/js/waypoints.min.js'
    'assets/js/theme-scripts.js'
    'assets/js/scripts.js'


%}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

{% block scripts %}

{% endblock %}

</body>
</html>

", "::base.html.twig", "/var/www/html/nextBusNew/app/Resources/views/base.html.twig");
    }
}
