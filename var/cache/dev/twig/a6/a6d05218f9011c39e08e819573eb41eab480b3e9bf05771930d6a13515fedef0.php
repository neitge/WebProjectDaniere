<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_160ddd6e734ee41808f5f77e31bfadf5e7bb8e7368aa83d79f46aae3edb828fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7cb8afe87f0e9a2ba596f001fd5853f3eb5363a6acfb6c4d81582a4266950394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cb8afe87f0e9a2ba596f001fd5853f3eb5363a6acfb6c4d81582a4266950394->enter($__internal_7cb8afe87f0e9a2ba596f001fd5853f3eb5363a6acfb6c4d81582a4266950394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_bd9f1d402d39ac9728d0746c4ad8fa26a88befd794091bc4e04babf7ac4512b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9f1d402d39ac9728d0746c4ad8fa26a88befd794091bc4e04babf7ac4512b3->enter($__internal_bd9f1d402d39ac9728d0746c4ad8fa26a88befd794091bc4e04babf7ac4512b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb8afe87f0e9a2ba596f001fd5853f3eb5363a6acfb6c4d81582a4266950394->leave($__internal_7cb8afe87f0e9a2ba596f001fd5853f3eb5363a6acfb6c4d81582a4266950394_prof);

        
        $__internal_bd9f1d402d39ac9728d0746c4ad8fa26a88befd794091bc4e04babf7ac4512b3->leave($__internal_bd9f1d402d39ac9728d0746c4ad8fa26a88befd794091bc4e04babf7ac4512b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_830996654c84ab03942e4d0932b3fdbb5025ea8723107a3935106dfe97530e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830996654c84ab03942e4d0932b3fdbb5025ea8723107a3935106dfe97530e0a->enter($__internal_830996654c84ab03942e4d0932b3fdbb5025ea8723107a3935106dfe97530e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25c32f7105dfc1a489798d2b36c8916f9e787018b4bc39e1d09939286d5eb413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c32f7105dfc1a489798d2b36c8916f9e787018b4bc39e1d09939286d5eb413->enter($__internal_25c32f7105dfc1a489798d2b36c8916f9e787018b4bc39e1d09939286d5eb413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_25c32f7105dfc1a489798d2b36c8916f9e787018b4bc39e1d09939286d5eb413->leave($__internal_25c32f7105dfc1a489798d2b36c8916f9e787018b4bc39e1d09939286d5eb413_prof);

        
        $__internal_830996654c84ab03942e4d0932b3fdbb5025ea8723107a3935106dfe97530e0a->leave($__internal_830996654c84ab03942e4d0932b3fdbb5025ea8723107a3935106dfe97530e0a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_320f712cd1384effcba077661c3537dae00889dde1d629f7b9d29f6843e5ba21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_320f712cd1384effcba077661c3537dae00889dde1d629f7b9d29f6843e5ba21->enter($__internal_320f712cd1384effcba077661c3537dae00889dde1d629f7b9d29f6843e5ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fbdd78439aad5021df77a6fc8acd2021cfba54ffe52af299fe9211d599bb4d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbdd78439aad5021df77a6fc8acd2021cfba54ffe52af299fe9211d599bb4d9->enter($__internal_4fbdd78439aad5021df77a6fc8acd2021cfba54ffe52af299fe9211d599bb4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4fbdd78439aad5021df77a6fc8acd2021cfba54ffe52af299fe9211d599bb4d9->leave($__internal_4fbdd78439aad5021df77a6fc8acd2021cfba54ffe52af299fe9211d599bb4d9_prof);

        
        $__internal_320f712cd1384effcba077661c3537dae00889dde1d629f7b9d29f6843e5ba21->leave($__internal_320f712cd1384effcba077661c3537dae00889dde1d629f7b9d29f6843e5ba21_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
