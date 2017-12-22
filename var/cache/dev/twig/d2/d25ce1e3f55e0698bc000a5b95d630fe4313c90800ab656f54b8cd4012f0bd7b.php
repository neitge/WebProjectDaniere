<?php

/* @CDPlatform/Advert/add.html.twig */
class __TwigTemplate_08e37eef7d83ba3dd25c5379a1cdb5fcf827261492974cdba657cc25e4c7e779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "@CDPlatform/Advert/add.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CDPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3782fa0e49bad71a0f7c9bf1140a95c62ed20b85877de5016a02f69983d05ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3782fa0e49bad71a0f7c9bf1140a95c62ed20b85877de5016a02f69983d05ee2->enter($__internal_3782fa0e49bad71a0f7c9bf1140a95c62ed20b85877de5016a02f69983d05ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/add.html.twig"));

        $__internal_c651eafbc4588373b037f0c532c5db82e36dbe38e23a7dcb81f47c5a01dc0fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c651eafbc4588373b037f0c532c5db82e36dbe38e23a7dcb81f47c5a01dc0fb7->enter($__internal_c651eafbc4588373b037f0c532c5db82e36dbe38e23a7dcb81f47c5a01dc0fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3782fa0e49bad71a0f7c9bf1140a95c62ed20b85877de5016a02f69983d05ee2->leave($__internal_3782fa0e49bad71a0f7c9bf1140a95c62ed20b85877de5016a02f69983d05ee2_prof);

        
        $__internal_c651eafbc4588373b037f0c532c5db82e36dbe38e23a7dcb81f47c5a01dc0fb7->leave($__internal_c651eafbc4588373b037f0c532c5db82e36dbe38e23a7dcb81f47c5a01dc0fb7_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_413be210139615329e7f4cfb42ab3019e4aa126e37e8a132300e96f14a9784e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_413be210139615329e7f4cfb42ab3019e4aa126e37e8a132300e96f14a9784e8->enter($__internal_413be210139615329e7f4cfb42ab3019e4aa126e37e8a132300e96f14a9784e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1f357e12a7584af02cd5ac22007d9e6f56f305c8812daccb9e868af88206754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f357e12a7584af02cd5ac22007d9e6f56f305c8812daccb9e868af88206754->enter($__internal_a1f357e12a7584af02cd5ac22007d9e6f56f305c8812daccb9e868af88206754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 8
        echo twig_include($this->env, $context, "CDPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_a1f357e12a7584af02cd5ac22007d9e6f56f305c8812daccb9e868af88206754->leave($__internal_a1f357e12a7584af02cd5ac22007d9e6f56f305c8812daccb9e868af88206754_prof);

        
        $__internal_413be210139615329e7f4cfb42ab3019e4aa126e37e8a132300e96f14a9784e8->leave($__internal_413be210139615329e7f4cfb42ab3019e4aa126e37e8a132300e96f14a9784e8_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  49 => 5,  40 => 4,  11 => 2,);
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
{% extends \"CDPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"CDPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}", "@CDPlatform/Advert/add.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
