<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_1db79dc363d80aefae011d12fc1b172d0948a6d36e71cb49ecb5b1fb5c4b78f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db79dc363d80aefae011d12fc1b172d0948a6d36e71cb49ecb5b1fb5c4b78f3->enter($__internal_1db79dc363d80aefae011d12fc1b172d0948a6d36e71cb49ecb5b1fb5c4b78f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d0a572a2b60374439e93fdd12a86a82c5297334ae123ecc539865a7416a4977c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a572a2b60374439e93fdd12a86a82c5297334ae123ecc539865a7416a4977c->enter($__internal_d0a572a2b60374439e93fdd12a86a82c5297334ae123ecc539865a7416a4977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db79dc363d80aefae011d12fc1b172d0948a6d36e71cb49ecb5b1fb5c4b78f3->leave($__internal_1db79dc363d80aefae011d12fc1b172d0948a6d36e71cb49ecb5b1fb5c4b78f3_prof);

        
        $__internal_d0a572a2b60374439e93fdd12a86a82c5297334ae123ecc539865a7416a4977c->leave($__internal_d0a572a2b60374439e93fdd12a86a82c5297334ae123ecc539865a7416a4977c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_855c38be32c767e44a22790bc697952985b8b61965c919be6d7683e7fc9fa6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855c38be32c767e44a22790bc697952985b8b61965c919be6d7683e7fc9fa6ab->enter($__internal_855c38be32c767e44a22790bc697952985b8b61965c919be6d7683e7fc9fa6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8fde05d68a20be0b63569dc8bde7ff449b53a31720c9fb35a4ab262e9b7b92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fde05d68a20be0b63569dc8bde7ff449b53a31720c9fb35a4ab262e9b7b92d->enter($__internal_a8fde05d68a20be0b63569dc8bde7ff449b53a31720c9fb35a4ab262e9b7b92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a8fde05d68a20be0b63569dc8bde7ff449b53a31720c9fb35a4ab262e9b7b92d->leave($__internal_a8fde05d68a20be0b63569dc8bde7ff449b53a31720c9fb35a4ab262e9b7b92d_prof);

        
        $__internal_855c38be32c767e44a22790bc697952985b8b61965c919be6d7683e7fc9fa6ab->leave($__internal_855c38be32c767e44a22790bc697952985b8b61965c919be6d7683e7fc9fa6ab_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab2f153c48433f1b9f58dec843986a861b5da70814b8417087b36505e1fd4806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2f153c48433f1b9f58dec843986a861b5da70814b8417087b36505e1fd4806->enter($__internal_ab2f153c48433f1b9f58dec843986a861b5da70814b8417087b36505e1fd4806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71e17b60aa33eb54b1c8f0d3a5167e86742b1289d095d1c3a8ac3a67916d2b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e17b60aa33eb54b1c8f0d3a5167e86742b1289d095d1c3a8ac3a67916d2b3c->enter($__internal_71e17b60aa33eb54b1c8f0d3a5167e86742b1289d095d1c3a8ac3a67916d2b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_71e17b60aa33eb54b1c8f0d3a5167e86742b1289d095d1c3a8ac3a67916d2b3c->leave($__internal_71e17b60aa33eb54b1c8f0d3a5167e86742b1289d095d1c3a8ac3a67916d2b3c_prof);

        
        $__internal_ab2f153c48433f1b9f58dec843986a861b5da70814b8417087b36505e1fd4806->leave($__internal_ab2f153c48433f1b9f58dec843986a861b5da70814b8417087b36505e1fd4806_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ea7aed74e6b8834b2e1233e095e82c6b45f3f1ae82a30ca99f60c7bd4ee05f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea7aed74e6b8834b2e1233e095e82c6b45f3f1ae82a30ca99f60c7bd4ee05f5->enter($__internal_3ea7aed74e6b8834b2e1233e095e82c6b45f3f1ae82a30ca99f60c7bd4ee05f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_952c792839c7620e0e86c6984967e1682ce9e2d0e44b7d3b5942837cb4d1e3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952c792839c7620e0e86c6984967e1682ce9e2d0e44b7d3b5942837cb4d1e3c4->enter($__internal_952c792839c7620e0e86c6984967e1682ce9e2d0e44b7d3b5942837cb4d1e3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_952c792839c7620e0e86c6984967e1682ce9e2d0e44b7d3b5942837cb4d1e3c4->leave($__internal_952c792839c7620e0e86c6984967e1682ce9e2d0e44b7d3b5942837cb4d1e3c4_prof);

        
        $__internal_3ea7aed74e6b8834b2e1233e095e82c6b45f3f1ae82a30ca99f60c7bd4ee05f5->leave($__internal_3ea7aed74e6b8834b2e1233e095e82c6b45f3f1ae82a30ca99f60c7bd4ee05f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
