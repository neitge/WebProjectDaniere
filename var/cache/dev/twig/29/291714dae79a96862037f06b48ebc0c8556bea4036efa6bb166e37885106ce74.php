<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_63ee2cb00a14a96d8b8e2f8ed7058e4a3d3c86fca6b4a15b07a0881d3af6047b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_866817bebfcda497865ae16d55dfe5285c822c18e2a47aba81ed9e07d8d3be68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866817bebfcda497865ae16d55dfe5285c822c18e2a47aba81ed9e07d8d3be68->enter($__internal_866817bebfcda497865ae16d55dfe5285c822c18e2a47aba81ed9e07d8d3be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_bc6bc96ebcda091e2969d8771485a7e5250c66b2c3d375422349829b0da5e79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6bc96ebcda091e2969d8771485a7e5250c66b2c3d375422349829b0da5e79b->enter($__internal_bc6bc96ebcda091e2969d8771485a7e5250c66b2c3d375422349829b0da5e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_866817bebfcda497865ae16d55dfe5285c822c18e2a47aba81ed9e07d8d3be68->leave($__internal_866817bebfcda497865ae16d55dfe5285c822c18e2a47aba81ed9e07d8d3be68_prof);

        
        $__internal_bc6bc96ebcda091e2969d8771485a7e5250c66b2c3d375422349829b0da5e79b->leave($__internal_bc6bc96ebcda091e2969d8771485a7e5250c66b2c3d375422349829b0da5e79b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18c41f548e2de1f0a6194ddecb6080658b163d1834f8351ae0a5ab98648a221a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c41f548e2de1f0a6194ddecb6080658b163d1834f8351ae0a5ab98648a221a->enter($__internal_18c41f548e2de1f0a6194ddecb6080658b163d1834f8351ae0a5ab98648a221a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_05c161fcd3f52cc7a32465b15da19daea6a39ec00ee5ea00b6962820b36b2bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c161fcd3f52cc7a32465b15da19daea6a39ec00ee5ea00b6962820b36b2bda->enter($__internal_05c161fcd3f52cc7a32465b15da19daea6a39ec00ee5ea00b6962820b36b2bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05c161fcd3f52cc7a32465b15da19daea6a39ec00ee5ea00b6962820b36b2bda->leave($__internal_05c161fcd3f52cc7a32465b15da19daea6a39ec00ee5ea00b6962820b36b2bda_prof);

        
        $__internal_18c41f548e2de1f0a6194ddecb6080658b163d1834f8351ae0a5ab98648a221a->leave($__internal_18c41f548e2de1f0a6194ddecb6080658b163d1834f8351ae0a5ab98648a221a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f4d7847a7ecf71f144bd24dbf377e2a1dcb7bc69b975641d8508e3e76b6282a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4d7847a7ecf71f144bd24dbf377e2a1dcb7bc69b975641d8508e3e76b6282a->enter($__internal_2f4d7847a7ecf71f144bd24dbf377e2a1dcb7bc69b975641d8508e3e76b6282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_873c94c0c90744f6e68d4ee462c87399c92aa55bc2f5ed34f565a0671ef6fa28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873c94c0c90744f6e68d4ee462c87399c92aa55bc2f5ed34f565a0671ef6fa28->enter($__internal_873c94c0c90744f6e68d4ee462c87399c92aa55bc2f5ed34f565a0671ef6fa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_873c94c0c90744f6e68d4ee462c87399c92aa55bc2f5ed34f565a0671ef6fa28->leave($__internal_873c94c0c90744f6e68d4ee462c87399c92aa55bc2f5ed34f565a0671ef6fa28_prof);

        
        $__internal_2f4d7847a7ecf71f144bd24dbf377e2a1dcb7bc69b975641d8508e3e76b6282a->leave($__internal_2f4d7847a7ecf71f144bd24dbf377e2a1dcb7bc69b975641d8508e3e76b6282a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cea2347070426ee90513a01bb7005ed942787024dfd9aab9f4416db9ccf42863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea2347070426ee90513a01bb7005ed942787024dfd9aab9f4416db9ccf42863->enter($__internal_cea2347070426ee90513a01bb7005ed942787024dfd9aab9f4416db9ccf42863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7e4172c9b743947e359d4abdd474f019be5c5ddc82d65ffa0c53123fa813e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e4172c9b743947e359d4abdd474f019be5c5ddc82d65ffa0c53123fa813e2e->enter($__internal_f7e4172c9b743947e359d4abdd474f019be5c5ddc82d65ffa0c53123fa813e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7e4172c9b743947e359d4abdd474f019be5c5ddc82d65ffa0c53123fa813e2e->leave($__internal_f7e4172c9b743947e359d4abdd474f019be5c5ddc82d65ffa0c53123fa813e2e_prof);

        
        $__internal_cea2347070426ee90513a01bb7005ed942787024dfd9aab9f4416db9ccf42863->leave($__internal_cea2347070426ee90513a01bb7005ed942787024dfd9aab9f4416db9ccf42863_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
