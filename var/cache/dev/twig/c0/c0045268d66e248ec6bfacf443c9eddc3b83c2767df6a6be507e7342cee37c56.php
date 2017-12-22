<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_dc0f8ae5e05c9971c5f64207ea7dc37af6e4a6722d174c02ebbfa97d57123f3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_015a6150010119c07da896182eaefbc02555f9e6302d8b89445ad28cb0b4b44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015a6150010119c07da896182eaefbc02555f9e6302d8b89445ad28cb0b4b44b->enter($__internal_015a6150010119c07da896182eaefbc02555f9e6302d8b89445ad28cb0b4b44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_90be898a94c6c0fdbeac7456053ede534c08dd40faa782696933695fad09bf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90be898a94c6c0fdbeac7456053ede534c08dd40faa782696933695fad09bf57->enter($__internal_90be898a94c6c0fdbeac7456053ede534c08dd40faa782696933695fad09bf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_015a6150010119c07da896182eaefbc02555f9e6302d8b89445ad28cb0b4b44b->leave($__internal_015a6150010119c07da896182eaefbc02555f9e6302d8b89445ad28cb0b4b44b_prof);

        
        $__internal_90be898a94c6c0fdbeac7456053ede534c08dd40faa782696933695fad09bf57->leave($__internal_90be898a94c6c0fdbeac7456053ede534c08dd40faa782696933695fad09bf57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b392cdd32bccd3c6f2c8a825448b158b9ffe818ddc2d938de02c81796cfb16d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b392cdd32bccd3c6f2c8a825448b158b9ffe818ddc2d938de02c81796cfb16d->enter($__internal_9b392cdd32bccd3c6f2c8a825448b158b9ffe818ddc2d938de02c81796cfb16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2adba6444c8fb550031fc80c6ba4c5a7c4e7ee1eb4fd4314166676f6c7c8cf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adba6444c8fb550031fc80c6ba4c5a7c4e7ee1eb4fd4314166676f6c7c8cf4b->enter($__internal_2adba6444c8fb550031fc80c6ba4c5a7c4e7ee1eb4fd4314166676f6c7c8cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2adba6444c8fb550031fc80c6ba4c5a7c4e7ee1eb4fd4314166676f6c7c8cf4b->leave($__internal_2adba6444c8fb550031fc80c6ba4c5a7c4e7ee1eb4fd4314166676f6c7c8cf4b_prof);

        
        $__internal_9b392cdd32bccd3c6f2c8a825448b158b9ffe818ddc2d938de02c81796cfb16d->leave($__internal_9b392cdd32bccd3c6f2c8a825448b158b9ffe818ddc2d938de02c81796cfb16d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e51bfcf9d87a568611d15b697054ee48cc45c3789364f2f309cb789738131de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51bfcf9d87a568611d15b697054ee48cc45c3789364f2f309cb789738131de8->enter($__internal_e51bfcf9d87a568611d15b697054ee48cc45c3789364f2f309cb789738131de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6db452026d36633f727cd9838987f4faaf7436c1db1728720503a7a51fd8f8ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db452026d36633f727cd9838987f4faaf7436c1db1728720503a7a51fd8f8ba->enter($__internal_6db452026d36633f727cd9838987f4faaf7436c1db1728720503a7a51fd8f8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6db452026d36633f727cd9838987f4faaf7436c1db1728720503a7a51fd8f8ba->leave($__internal_6db452026d36633f727cd9838987f4faaf7436c1db1728720503a7a51fd8f8ba_prof);

        
        $__internal_e51bfcf9d87a568611d15b697054ee48cc45c3789364f2f309cb789738131de8->leave($__internal_e51bfcf9d87a568611d15b697054ee48cc45c3789364f2f309cb789738131de8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
