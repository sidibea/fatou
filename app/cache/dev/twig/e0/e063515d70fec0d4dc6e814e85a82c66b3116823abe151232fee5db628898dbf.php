<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ece537281d667e691b7b82031cdb84f48a123049beb884e7b9e129242d2477e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c026288795d10e39d91d29fcbe03c59416b44c5f866b1a88c6052ebb8a0c8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c026288795d10e39d91d29fcbe03c59416b44c5f866b1a88c6052ebb8a0c8b3->enter($__internal_3c026288795d10e39d91d29fcbe03c59416b44c5f866b1a88c6052ebb8a0c8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c026288795d10e39d91d29fcbe03c59416b44c5f866b1a88c6052ebb8a0c8b3->leave($__internal_3c026288795d10e39d91d29fcbe03c59416b44c5f866b1a88c6052ebb8a0c8b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b53fe33647d98b74ba7041f72aaa16f3f0f97ed0306fabef125807f71cc9055a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53fe33647d98b74ba7041f72aaa16f3f0f97ed0306fabef125807f71cc9055a->enter($__internal_b53fe33647d98b74ba7041f72aaa16f3f0f97ed0306fabef125807f71cc9055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b53fe33647d98b74ba7041f72aaa16f3f0f97ed0306fabef125807f71cc9055a->leave($__internal_b53fe33647d98b74ba7041f72aaa16f3f0f97ed0306fabef125807f71cc9055a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b65d80fef215fb2d1cf8327925808a49b36d6635469308da535097c709f682f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65d80fef215fb2d1cf8327925808a49b36d6635469308da535097c709f682f9->enter($__internal_b65d80fef215fb2d1cf8327925808a49b36d6635469308da535097c709f682f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b65d80fef215fb2d1cf8327925808a49b36d6635469308da535097c709f682f9->leave($__internal_b65d80fef215fb2d1cf8327925808a49b36d6635469308da535097c709f682f9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_abe84903a9620454055cbba85e3e11d5d2ca8030cbc8302c657c95d4d3bc9d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe84903a9620454055cbba85e3e11d5d2ca8030cbc8302c657c95d4d3bc9d5b->enter($__internal_abe84903a9620454055cbba85e3e11d5d2ca8030cbc8302c657c95d4d3bc9d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_abe84903a9620454055cbba85e3e11d5d2ca8030cbc8302c657c95d4d3bc9d5b->leave($__internal_abe84903a9620454055cbba85e3e11d5d2ca8030cbc8302c657c95d4d3bc9d5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/nextBusNew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
