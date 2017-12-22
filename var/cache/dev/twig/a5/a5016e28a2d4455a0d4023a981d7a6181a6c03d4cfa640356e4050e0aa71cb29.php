<?php

/* CDPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_2e5dfb78f2780e972630ca7d3249345466f9b36f0db61714096d7f3f37cd83fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "CDPlatformBundle:Advert:add.html.twig", 2);
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
        $__internal_b691fd7b0020336b65cbd975f7334f102a51716e499f65b11dde19b02fec13da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b691fd7b0020336b65cbd975f7334f102a51716e499f65b11dde19b02fec13da->enter($__internal_b691fd7b0020336b65cbd975f7334f102a51716e499f65b11dde19b02fec13da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:add.html.twig"));

        $__internal_fd2a39d920e076c55be89d0a3888c526650fa13f1c882b8a8caa1ecf959148df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2a39d920e076c55be89d0a3888c526650fa13f1c882b8a8caa1ecf959148df->enter($__internal_fd2a39d920e076c55be89d0a3888c526650fa13f1c882b8a8caa1ecf959148df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b691fd7b0020336b65cbd975f7334f102a51716e499f65b11dde19b02fec13da->leave($__internal_b691fd7b0020336b65cbd975f7334f102a51716e499f65b11dde19b02fec13da_prof);

        
        $__internal_fd2a39d920e076c55be89d0a3888c526650fa13f1c882b8a8caa1ecf959148df->leave($__internal_fd2a39d920e076c55be89d0a3888c526650fa13f1c882b8a8caa1ecf959148df_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ee3753f45b649c42fb7743ad75fc060a1674ccb7410d4b29ac8172e0b857bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee3753f45b649c42fb7743ad75fc060a1674ccb7410d4b29ac8172e0b857bb8->enter($__internal_5ee3753f45b649c42fb7743ad75fc060a1674ccb7410d4b29ac8172e0b857bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee74c4bdbb7febcdc33f6b7b06a0e6fc823528219f330f8a7e924603b76f348c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee74c4bdbb7febcdc33f6b7b06a0e6fc823528219f330f8a7e924603b76f348c->enter($__internal_ee74c4bdbb7febcdc33f6b7b06a0e6fc823528219f330f8a7e924603b76f348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee74c4bdbb7febcdc33f6b7b06a0e6fc823528219f330f8a7e924603b76f348c->leave($__internal_ee74c4bdbb7febcdc33f6b7b06a0e6fc823528219f330f8a7e924603b76f348c_prof);

        
        $__internal_5ee3753f45b649c42fb7743ad75fc060a1674ccb7410d4b29ac8172e0b857bb8->leave($__internal_5ee3753f45b649c42fb7743ad75fc060a1674ccb7410d4b29ac8172e0b857bb8_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle:Advert:add.html.twig";
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

{% endblock %}", "CDPlatformBundle:Advert:add.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
