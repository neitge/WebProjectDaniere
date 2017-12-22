<?php

/* @CDPlatform/layout.html.twig */
class __TwigTemplate_6d1a1997f45eee0913aa52d765d7937312a1f0b224062bbb95b5aa9e94928a80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "@CDPlatform/layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'cdplatform_body' => array($this, 'block_cdplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e824573673f4b1939ec211847990778d926d07af74f5ed1f0da15eaf22bb3537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e824573673f4b1939ec211847990778d926d07af74f5ed1f0da15eaf22bb3537->enter($__internal_e824573673f4b1939ec211847990778d926d07af74f5ed1f0da15eaf22bb3537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/layout.html.twig"));

        $__internal_499ea7a247fc3b3c7c5026c890c40ca23e0f8d468d9a31d98ed7603883b2141b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499ea7a247fc3b3c7c5026c890c40ca23e0f8d468d9a31d98ed7603883b2141b->enter($__internal_499ea7a247fc3b3c7c5026c890c40ca23e0f8d468d9a31d98ed7603883b2141b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e824573673f4b1939ec211847990778d926d07af74f5ed1f0da15eaf22bb3537->leave($__internal_e824573673f4b1939ec211847990778d926d07af74f5ed1f0da15eaf22bb3537_prof);

        
        $__internal_499ea7a247fc3b3c7c5026c890c40ca23e0f8d468d9a31d98ed7603883b2141b->leave($__internal_499ea7a247fc3b3c7c5026c890c40ca23e0f8d468d9a31d98ed7603883b2141b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaaac0ed734353e974755d23324e5077d9a3c264258d324aa581857ceb1eafaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaaac0ed734353e974755d23324e5077d9a3c264258d324aa581857ceb1eafaf->enter($__internal_eaaac0ed734353e974755d23324e5077d9a3c264258d324aa581857ceb1eafaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1a50d14c95cdd527571f7fce1f998d1b420f49a35aec68fe87e5e9e489fa35a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a50d14c95cdd527571f7fce1f998d1b420f49a35aec68fe87e5e9e489fa35a1->enter($__internal_1a50d14c95cdd527571f7fce1f998d1b420f49a35aec68fe87e5e9e489fa35a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1a50d14c95cdd527571f7fce1f998d1b420f49a35aec68fe87e5e9e489fa35a1->leave($__internal_1a50d14c95cdd527571f7fce1f998d1b420f49a35aec68fe87e5e9e489fa35a1_prof);

        
        $__internal_eaaac0ed734353e974755d23324e5077d9a3c264258d324aa581857ceb1eafaf->leave($__internal_eaaac0ed734353e974755d23324e5077d9a3c264258d324aa581857ceb1eafaf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cbdd4bd30b870791e1a308948fe5b0cb765788b30fd475c34893f3e1865846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cbdd4bd30b870791e1a308948fe5b0cb765788b30fd475c34893f3e1865846->enter($__internal_33cbdd4bd30b870791e1a308948fe5b0cb765788b30fd475c34893f3e1865846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3bc0ebe66e7c562a5cba9d8896f17feaf8937765ac8de211510e76e3265326a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bc0ebe66e7c562a5cba9d8896f17feaf8937765ac8de211510e76e3265326a->enter($__internal_a3bc0ebe66e7c562a5cba9d8896f17feaf8937765ac8de211510e76e3265326a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  ";
        // line 11
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('cdplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_a3bc0ebe66e7c562a5cba9d8896f17feaf8937765ac8de211510e76e3265326a->leave($__internal_a3bc0ebe66e7c562a5cba9d8896f17feaf8937765ac8de211510e76e3265326a_prof);

        
        $__internal_33cbdd4bd30b870791e1a308948fe5b0cb765788b30fd475c34893f3e1865846->leave($__internal_33cbdd4bd30b870791e1a308948fe5b0cb765788b30fd475c34893f3e1865846_prof);

    }

    // line 16
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_9193a210a8f1e7ce9744e282d3329ff0945a13a7532671f3a666335974f6ca73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9193a210a8f1e7ce9744e282d3329ff0945a13a7532671f3a666335974f6ca73->enter($__internal_9193a210a8f1e7ce9744e282d3329ff0945a13a7532671f3a666335974f6ca73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_7c7b350dfcc3ac7ca038efdd54884c64938d6c6bac69bfdcc214369f12c36390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7b350dfcc3ac7ca038efdd54884c64938d6c6bac69bfdcc214369f12c36390->enter($__internal_7c7b350dfcc3ac7ca038efdd54884c64938d6c6bac69bfdcc214369f12c36390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_7c7b350dfcc3ac7ca038efdd54884c64938d6c6bac69bfdcc214369f12c36390->leave($__internal_7c7b350dfcc3ac7ca038efdd54884c64938d6c6bac69bfdcc214369f12c36390_prof);

        
        $__internal_9193a210a8f1e7ce9744e282d3329ff0945a13a7532671f3a666335974f6ca73->leave($__internal_9193a210a8f1e7ce9744e282d3329ff0945a13a7532671f3a666335974f6ca73_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  96 => 16,  85 => 18,  82 => 16,  76 => 11,  73 => 9,  64 => 8,  51 => 5,  42 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block cdplatform_body %}
  {% endblock %}

{% endblock %}", "@CDPlatform/layout.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
