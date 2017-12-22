<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d72059634d795f833e249e67e86d64eacecc06862deb6f875f777b1a1222b037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_630e27d3b1a049910231511229891fec6be018b692ee735320a13baad84ac11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630e27d3b1a049910231511229891fec6be018b692ee735320a13baad84ac11d->enter($__internal_630e27d3b1a049910231511229891fec6be018b692ee735320a13baad84ac11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e574760f99e3829b6b7e67862cffdf3a5c67d79b4744ab82b6d35ee7163bf957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e574760f99e3829b6b7e67862cffdf3a5c67d79b4744ab82b6d35ee7163bf957->enter($__internal_e574760f99e3829b6b7e67862cffdf3a5c67d79b4744ab82b6d35ee7163bf957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630e27d3b1a049910231511229891fec6be018b692ee735320a13baad84ac11d->leave($__internal_630e27d3b1a049910231511229891fec6be018b692ee735320a13baad84ac11d_prof);

        
        $__internal_e574760f99e3829b6b7e67862cffdf3a5c67d79b4744ab82b6d35ee7163bf957->leave($__internal_e574760f99e3829b6b7e67862cffdf3a5c67d79b4744ab82b6d35ee7163bf957_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ea6862cc69fa2555233531c2aaf3a623895011aaed7d453e46992b52cc37149f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6862cc69fa2555233531c2aaf3a623895011aaed7d453e46992b52cc37149f->enter($__internal_ea6862cc69fa2555233531c2aaf3a623895011aaed7d453e46992b52cc37149f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c8ed2e6e7a120d810ff7a584c7138a4f7bc039f9018481a4b9ee6da88c3b2d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ed2e6e7a120d810ff7a584c7138a4f7bc039f9018481a4b9ee6da88c3b2d35->enter($__internal_c8ed2e6e7a120d810ff7a584c7138a4f7bc039f9018481a4b9ee6da88c3b2d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c8ed2e6e7a120d810ff7a584c7138a4f7bc039f9018481a4b9ee6da88c3b2d35->leave($__internal_c8ed2e6e7a120d810ff7a584c7138a4f7bc039f9018481a4b9ee6da88c3b2d35_prof);

        
        $__internal_ea6862cc69fa2555233531c2aaf3a623895011aaed7d453e46992b52cc37149f->leave($__internal_ea6862cc69fa2555233531c2aaf3a623895011aaed7d453e46992b52cc37149f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1a738595e3095c5aab590d193a3a70f63d7853e92143949bfdf9796f1df7a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a738595e3095c5aab590d193a3a70f63d7853e92143949bfdf9796f1df7a6d->enter($__internal_f1a738595e3095c5aab590d193a3a70f63d7853e92143949bfdf9796f1df7a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_49cc991d1b08c307c6488cb8c0509677146f39641a58c185acb6b7d82d8e535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cc991d1b08c307c6488cb8c0509677146f39641a58c185acb6b7d82d8e535e->enter($__internal_49cc991d1b08c307c6488cb8c0509677146f39641a58c185acb6b7d82d8e535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_49cc991d1b08c307c6488cb8c0509677146f39641a58c185acb6b7d82d8e535e->leave($__internal_49cc991d1b08c307c6488cb8c0509677146f39641a58c185acb6b7d82d8e535e_prof);

        
        $__internal_f1a738595e3095c5aab590d193a3a70f63d7853e92143949bfdf9796f1df7a6d->leave($__internal_f1a738595e3095c5aab590d193a3a70f63d7853e92143949bfdf9796f1df7a6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
