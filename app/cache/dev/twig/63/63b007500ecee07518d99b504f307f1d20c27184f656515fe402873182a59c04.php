<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a446570d8cd3b7431db39cc4c448b3c9d9a613a4f19aded78b3bb855577835bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d991f8b789b4fd99660e0c2ca05924e70a61c266a9077a1011e178f11d774c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d991f8b789b4fd99660e0c2ca05924e70a61c266a9077a1011e178f11d774c30->enter($__internal_d991f8b789b4fd99660e0c2ca05924e70a61c266a9077a1011e178f11d774c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d991f8b789b4fd99660e0c2ca05924e70a61c266a9077a1011e178f11d774c30->leave($__internal_d991f8b789b4fd99660e0c2ca05924e70a61c266a9077a1011e178f11d774c30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_70c7b120f51944b6127c413a3d034ebded29c91e022d86751c45c6e01666814f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c7b120f51944b6127c413a3d034ebded29c91e022d86751c45c6e01666814f->enter($__internal_70c7b120f51944b6127c413a3d034ebded29c91e022d86751c45c6e01666814f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_70c7b120f51944b6127c413a3d034ebded29c91e022d86751c45c6e01666814f->leave($__internal_70c7b120f51944b6127c413a3d034ebded29c91e022d86751c45c6e01666814f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_577062673725e1ac5d2c9c9e2948036398aeedaf950791a1b5042e0a5e36812a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577062673725e1ac5d2c9c9e2948036398aeedaf950791a1b5042e0a5e36812a->enter($__internal_577062673725e1ac5d2c9c9e2948036398aeedaf950791a1b5042e0a5e36812a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_577062673725e1ac5d2c9c9e2948036398aeedaf950791a1b5042e0a5e36812a->leave($__internal_577062673725e1ac5d2c9c9e2948036398aeedaf950791a1b5042e0a5e36812a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a7203e0dedb9a0253699636640404409129038e02bd940c2ab9f09a950a2707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7203e0dedb9a0253699636640404409129038e02bd940c2ab9f09a950a2707->enter($__internal_7a7203e0dedb9a0253699636640404409129038e02bd940c2ab9f09a950a2707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7a7203e0dedb9a0253699636640404409129038e02bd940c2ab9f09a950a2707->leave($__internal_7a7203e0dedb9a0253699636640404409129038e02bd940c2ab9f09a950a2707_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/nextBusNew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
