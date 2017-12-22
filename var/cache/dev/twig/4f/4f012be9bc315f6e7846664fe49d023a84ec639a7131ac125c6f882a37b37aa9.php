<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_725548b338eedc6c46ee3de02a8aa95131ead8954a4e2422c00f4878513a43ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_71c5e78349ec049322c645a87de723ca44b45f2873f0f5a269a5efa9512e5d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c5e78349ec049322c645a87de723ca44b45f2873f0f5a269a5efa9512e5d04->enter($__internal_71c5e78349ec049322c645a87de723ca44b45f2873f0f5a269a5efa9512e5d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b9111cd6bcfa5fd495a715c4f04fbe300633385a56b6acac7aec3bd446e63e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9111cd6bcfa5fd495a715c4f04fbe300633385a56b6acac7aec3bd446e63e04->enter($__internal_b9111cd6bcfa5fd495a715c4f04fbe300633385a56b6acac7aec3bd446e63e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c5e78349ec049322c645a87de723ca44b45f2873f0f5a269a5efa9512e5d04->leave($__internal_71c5e78349ec049322c645a87de723ca44b45f2873f0f5a269a5efa9512e5d04_prof);

        
        $__internal_b9111cd6bcfa5fd495a715c4f04fbe300633385a56b6acac7aec3bd446e63e04->leave($__internal_b9111cd6bcfa5fd495a715c4f04fbe300633385a56b6acac7aec3bd446e63e04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42918f17a4644aa638f8d0f6ac623921a774b3c0722fb85cff6861c1ec3ba2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42918f17a4644aa638f8d0f6ac623921a774b3c0722fb85cff6861c1ec3ba2a5->enter($__internal_42918f17a4644aa638f8d0f6ac623921a774b3c0722fb85cff6861c1ec3ba2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_189e69b0eb2c46bc93afa14e49bae4ba0382860ec693bed8d244ff0e9ab677e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189e69b0eb2c46bc93afa14e49bae4ba0382860ec693bed8d244ff0e9ab677e1->enter($__internal_189e69b0eb2c46bc93afa14e49bae4ba0382860ec693bed8d244ff0e9ab677e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_189e69b0eb2c46bc93afa14e49bae4ba0382860ec693bed8d244ff0e9ab677e1->leave($__internal_189e69b0eb2c46bc93afa14e49bae4ba0382860ec693bed8d244ff0e9ab677e1_prof);

        
        $__internal_42918f17a4644aa638f8d0f6ac623921a774b3c0722fb85cff6861c1ec3ba2a5->leave($__internal_42918f17a4644aa638f8d0f6ac623921a774b3c0722fb85cff6861c1ec3ba2a5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3bb97f46e720b161329c24cc38a428d9838f9be274b75307b6efcb56a45c32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bb97f46e720b161329c24cc38a428d9838f9be274b75307b6efcb56a45c32d->enter($__internal_c3bb97f46e720b161329c24cc38a428d9838f9be274b75307b6efcb56a45c32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9153e914213c3bc7d52cff5dd0691bab258e79216f7ce309ce85fb617b1d5755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9153e914213c3bc7d52cff5dd0691bab258e79216f7ce309ce85fb617b1d5755->enter($__internal_9153e914213c3bc7d52cff5dd0691bab258e79216f7ce309ce85fb617b1d5755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9153e914213c3bc7d52cff5dd0691bab258e79216f7ce309ce85fb617b1d5755->leave($__internal_9153e914213c3bc7d52cff5dd0691bab258e79216f7ce309ce85fb617b1d5755_prof);

        
        $__internal_c3bb97f46e720b161329c24cc38a428d9838f9be274b75307b6efcb56a45c32d->leave($__internal_c3bb97f46e720b161329c24cc38a428d9838f9be274b75307b6efcb56a45c32d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77c35d3a1e1ce5926e6cd80cdf37b96abcf89e6020116f1a27501d5fd696fcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c35d3a1e1ce5926e6cd80cdf37b96abcf89e6020116f1a27501d5fd696fcf1->enter($__internal_77c35d3a1e1ce5926e6cd80cdf37b96abcf89e6020116f1a27501d5fd696fcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26e36e0a07322b19a475812c25ad93b0d960aa5caae4fb5cd92c0dd1a7b9fc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e36e0a07322b19a475812c25ad93b0d960aa5caae4fb5cd92c0dd1a7b9fc2c->enter($__internal_26e36e0a07322b19a475812c25ad93b0d960aa5caae4fb5cd92c0dd1a7b9fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_26e36e0a07322b19a475812c25ad93b0d960aa5caae4fb5cd92c0dd1a7b9fc2c->leave($__internal_26e36e0a07322b19a475812c25ad93b0d960aa5caae4fb5cd92c0dd1a7b9fc2c_prof);

        
        $__internal_77c35d3a1e1ce5926e6cd80cdf37b96abcf89e6020116f1a27501d5fd696fcf1->leave($__internal_77c35d3a1e1ce5926e6cd80cdf37b96abcf89e6020116f1a27501d5fd696fcf1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
