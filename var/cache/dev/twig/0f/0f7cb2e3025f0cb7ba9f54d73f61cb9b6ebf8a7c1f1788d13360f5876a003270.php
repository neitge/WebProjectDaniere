<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c226424450d01cd958170363524947f923f26a79ad5d4dc2ca407dba618e5e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_3f660136b2c7d9e7d3439d113b27dcba9c7e57de8f0307d51d54c6d368b2df5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f660136b2c7d9e7d3439d113b27dcba9c7e57de8f0307d51d54c6d368b2df5f->enter($__internal_3f660136b2c7d9e7d3439d113b27dcba9c7e57de8f0307d51d54c6d368b2df5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c505973adb0779483f64fcf4a0e40b87c751ec914a3877336c486c621028a414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c505973adb0779483f64fcf4a0e40b87c751ec914a3877336c486c621028a414->enter($__internal_c505973adb0779483f64fcf4a0e40b87c751ec914a3877336c486c621028a414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f660136b2c7d9e7d3439d113b27dcba9c7e57de8f0307d51d54c6d368b2df5f->leave($__internal_3f660136b2c7d9e7d3439d113b27dcba9c7e57de8f0307d51d54c6d368b2df5f_prof);

        
        $__internal_c505973adb0779483f64fcf4a0e40b87c751ec914a3877336c486c621028a414->leave($__internal_c505973adb0779483f64fcf4a0e40b87c751ec914a3877336c486c621028a414_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cd12052c26bc68246f8c4c57a3570617dd91ec52f26cafee8a2b9469b480a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd12052c26bc68246f8c4c57a3570617dd91ec52f26cafee8a2b9469b480a7d->enter($__internal_3cd12052c26bc68246f8c4c57a3570617dd91ec52f26cafee8a2b9469b480a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3ea260b9813a5058a32a42535e33975a2d456cad905a7a83e611e9b1be5a7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ea260b9813a5058a32a42535e33975a2d456cad905a7a83e611e9b1be5a7d1->enter($__internal_f3ea260b9813a5058a32a42535e33975a2d456cad905a7a83e611e9b1be5a7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f3ea260b9813a5058a32a42535e33975a2d456cad905a7a83e611e9b1be5a7d1->leave($__internal_f3ea260b9813a5058a32a42535e33975a2d456cad905a7a83e611e9b1be5a7d1_prof);

        
        $__internal_3cd12052c26bc68246f8c4c57a3570617dd91ec52f26cafee8a2b9469b480a7d->leave($__internal_3cd12052c26bc68246f8c4c57a3570617dd91ec52f26cafee8a2b9469b480a7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97277aa68e9c0f8fc745a83e8116ebe80417607ffb5bde6e71e8e58e70c56479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97277aa68e9c0f8fc745a83e8116ebe80417607ffb5bde6e71e8e58e70c56479->enter($__internal_97277aa68e9c0f8fc745a83e8116ebe80417607ffb5bde6e71e8e58e70c56479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a15a85c2d68cce0816083bad085cc1c8fb4633b3f3246a9a46b4eb1f03fa40e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15a85c2d68cce0816083bad085cc1c8fb4633b3f3246a9a46b4eb1f03fa40e4->enter($__internal_a15a85c2d68cce0816083bad085cc1c8fb4633b3f3246a9a46b4eb1f03fa40e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a15a85c2d68cce0816083bad085cc1c8fb4633b3f3246a9a46b4eb1f03fa40e4->leave($__internal_a15a85c2d68cce0816083bad085cc1c8fb4633b3f3246a9a46b4eb1f03fa40e4_prof);

        
        $__internal_97277aa68e9c0f8fc745a83e8116ebe80417607ffb5bde6e71e8e58e70c56479->leave($__internal_97277aa68e9c0f8fc745a83e8116ebe80417607ffb5bde6e71e8e58e70c56479_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
