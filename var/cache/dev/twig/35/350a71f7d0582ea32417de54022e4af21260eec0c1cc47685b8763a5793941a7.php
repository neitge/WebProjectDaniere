<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_99edfa09d4b87a694806164ee5d791a239314d292bb5d198da36ac375123bf78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8741c7ad43e2fef834e867b0b08a72c61b681fa082847344938fb6325cad72c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8741c7ad43e2fef834e867b0b08a72c61b681fa082847344938fb6325cad72c5->enter($__internal_8741c7ad43e2fef834e867b0b08a72c61b681fa082847344938fb6325cad72c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c9b1aa0e8acc1fabdc24f293b8d255ddf3381199791e3c68a3dc088facee2c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b1aa0e8acc1fabdc24f293b8d255ddf3381199791e3c68a3dc088facee2c45->enter($__internal_c9b1aa0e8acc1fabdc24f293b8d255ddf3381199791e3c68a3dc088facee2c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8741c7ad43e2fef834e867b0b08a72c61b681fa082847344938fb6325cad72c5->leave($__internal_8741c7ad43e2fef834e867b0b08a72c61b681fa082847344938fb6325cad72c5_prof);

        
        $__internal_c9b1aa0e8acc1fabdc24f293b8d255ddf3381199791e3c68a3dc088facee2c45->leave($__internal_c9b1aa0e8acc1fabdc24f293b8d255ddf3381199791e3c68a3dc088facee2c45_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_08c975f335ed77e8c15e5e549b29b806c467c33a9815d2c2aff626691a6a61ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c975f335ed77e8c15e5e549b29b806c467c33a9815d2c2aff626691a6a61ff->enter($__internal_08c975f335ed77e8c15e5e549b29b806c467c33a9815d2c2aff626691a6a61ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_53c532d1d966cbfe43498ca231a31b1dddf88b7e8319e6f692e23be35643a9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c532d1d966cbfe43498ca231a31b1dddf88b7e8319e6f692e23be35643a9c7->enter($__internal_53c532d1d966cbfe43498ca231a31b1dddf88b7e8319e6f692e23be35643a9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_53c532d1d966cbfe43498ca231a31b1dddf88b7e8319e6f692e23be35643a9c7->leave($__internal_53c532d1d966cbfe43498ca231a31b1dddf88b7e8319e6f692e23be35643a9c7_prof);

        
        $__internal_08c975f335ed77e8c15e5e549b29b806c467c33a9815d2c2aff626691a6a61ff->leave($__internal_08c975f335ed77e8c15e5e549b29b806c467c33a9815d2c2aff626691a6a61ff_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdb08cda13bdcb9312b372bb94c64bcd34d928d10bc00a52c2a4b14058843bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb08cda13bdcb9312b372bb94c64bcd34d928d10bc00a52c2a4b14058843bf6->enter($__internal_cdb08cda13bdcb9312b372bb94c64bcd34d928d10bc00a52c2a4b14058843bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_80b5aa92d5e4190924e556b130b5829480a8827d3aa9476b5eefca8c75bd01b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b5aa92d5e4190924e556b130b5829480a8827d3aa9476b5eefca8c75bd01b6->enter($__internal_80b5aa92d5e4190924e556b130b5829480a8827d3aa9476b5eefca8c75bd01b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_80b5aa92d5e4190924e556b130b5829480a8827d3aa9476b5eefca8c75bd01b6->leave($__internal_80b5aa92d5e4190924e556b130b5829480a8827d3aa9476b5eefca8c75bd01b6_prof);

        
        $__internal_cdb08cda13bdcb9312b372bb94c64bcd34d928d10bc00a52c2a4b14058843bf6->leave($__internal_cdb08cda13bdcb9312b372bb94c64bcd34d928d10bc00a52c2a4b14058843bf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
