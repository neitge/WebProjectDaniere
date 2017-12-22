<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_91696a6e0cc9aad2b2a6ffbbf8651f1b29e3cbc2e48bd5dda9ee8ccabf53e928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_50574da6de2c9fcb1532428bf6ac7b0f303822665e097b6411bf9095681a8328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50574da6de2c9fcb1532428bf6ac7b0f303822665e097b6411bf9095681a8328->enter($__internal_50574da6de2c9fcb1532428bf6ac7b0f303822665e097b6411bf9095681a8328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_80a5d8af9cd6f7ccb0901ae5d972ca3316835f86e7f8f933ab2dfe9e8278bff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a5d8af9cd6f7ccb0901ae5d972ca3316835f86e7f8f933ab2dfe9e8278bff2->enter($__internal_80a5d8af9cd6f7ccb0901ae5d972ca3316835f86e7f8f933ab2dfe9e8278bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50574da6de2c9fcb1532428bf6ac7b0f303822665e097b6411bf9095681a8328->leave($__internal_50574da6de2c9fcb1532428bf6ac7b0f303822665e097b6411bf9095681a8328_prof);

        
        $__internal_80a5d8af9cd6f7ccb0901ae5d972ca3316835f86e7f8f933ab2dfe9e8278bff2->leave($__internal_80a5d8af9cd6f7ccb0901ae5d972ca3316835f86e7f8f933ab2dfe9e8278bff2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da575970c0b12030b6bffc390735850aaed2b1e040a028d51e6beda8b45c66c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da575970c0b12030b6bffc390735850aaed2b1e040a028d51e6beda8b45c66c3->enter($__internal_da575970c0b12030b6bffc390735850aaed2b1e040a028d51e6beda8b45c66c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd8264d8ebada0eda09139edabf4ba5179ecb6d45fb4fed29b1071934f5de84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8264d8ebada0eda09139edabf4ba5179ecb6d45fb4fed29b1071934f5de84f->enter($__internal_cd8264d8ebada0eda09139edabf4ba5179ecb6d45fb4fed29b1071934f5de84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cd8264d8ebada0eda09139edabf4ba5179ecb6d45fb4fed29b1071934f5de84f->leave($__internal_cd8264d8ebada0eda09139edabf4ba5179ecb6d45fb4fed29b1071934f5de84f_prof);

        
        $__internal_da575970c0b12030b6bffc390735850aaed2b1e040a028d51e6beda8b45c66c3->leave($__internal_da575970c0b12030b6bffc390735850aaed2b1e040a028d51e6beda8b45c66c3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb5aada79c88c0898e43f53572aa1d4d99c40e051bfe3fbafd567fdd5587db4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb5aada79c88c0898e43f53572aa1d4d99c40e051bfe3fbafd567fdd5587db4d->enter($__internal_fb5aada79c88c0898e43f53572aa1d4d99c40e051bfe3fbafd567fdd5587db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca913f5eb623714b74a9ce8b6e0c5edc24c307f87cc3b7014bb276aac364f897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca913f5eb623714b74a9ce8b6e0c5edc24c307f87cc3b7014bb276aac364f897->enter($__internal_ca913f5eb623714b74a9ce8b6e0c5edc24c307f87cc3b7014bb276aac364f897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca913f5eb623714b74a9ce8b6e0c5edc24c307f87cc3b7014bb276aac364f897->leave($__internal_ca913f5eb623714b74a9ce8b6e0c5edc24c307f87cc3b7014bb276aac364f897_prof);

        
        $__internal_fb5aada79c88c0898e43f53572aa1d4d99c40e051bfe3fbafd567fdd5587db4d->leave($__internal_fb5aada79c88c0898e43f53572aa1d4d99c40e051bfe3fbafd567fdd5587db4d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
