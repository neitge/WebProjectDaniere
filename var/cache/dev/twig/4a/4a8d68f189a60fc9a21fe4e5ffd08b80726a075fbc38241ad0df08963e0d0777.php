<?php

/* CDPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_a316c1b3def188616afaaf3a839de1dae3b04e122041a458230952aa5d6141dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "CDPlatformBundle:Advert:delete.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CDPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a24a6ed6fd74a491f6bb8169fec1a823b25d6ccafc6b9c1fa66e302b602e0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a24a6ed6fd74a491f6bb8169fec1a823b25d6ccafc6b9c1fa66e302b602e0f2->enter($__internal_4a24a6ed6fd74a491f6bb8169fec1a823b25d6ccafc6b9c1fa66e302b602e0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:delete.html.twig"));

        $__internal_af1714ec43758587fc72136ab9c699eae40fb4f70bc35c50132134680d1c5827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1714ec43758587fc72136ab9c699eae40fb4f70bc35c50132134680d1c5827->enter($__internal_af1714ec43758587fc72136ab9c699eae40fb4f70bc35c50132134680d1c5827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a24a6ed6fd74a491f6bb8169fec1a823b25d6ccafc6b9c1fa66e302b602e0f2->leave($__internal_4a24a6ed6fd74a491f6bb8169fec1a823b25d6ccafc6b9c1fa66e302b602e0f2_prof);

        
        $__internal_af1714ec43758587fc72136ab9c699eae40fb4f70bc35c50132134680d1c5827->leave($__internal_af1714ec43758587fc72136ab9c699eae40fb4f70bc35c50132134680d1c5827_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59a8193d1c545eb797d8495eba824d4b157baef757aedff5b441b7ff1b19d9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a8193d1c545eb797d8495eba824d4b157baef757aedff5b441b7ff1b19d9cb->enter($__internal_59a8193d1c545eb797d8495eba824d4b157baef757aedff5b441b7ff1b19d9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3a9c0a29934de5508da5c8609e93ef18c09d9d19ef7ed695fb940d74c88fca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a9c0a29934de5508da5c8609e93ef18c09d9d19ef7ed695fb940d74c88fca2->enter($__internal_b3a9c0a29934de5508da5c8609e93ef18c09d9d19ef7ed695fb940d74c88fca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3a9c0a29934de5508da5c8609e93ef18c09d9d19ef7ed695fb940d74c88fca2->leave($__internal_b3a9c0a29934de5508da5c8609e93ef18c09d9d19ef7ed695fb940d74c88fca2_prof);

        
        $__internal_59a8193d1c545eb797d8495eba824d4b157baef757aedff5b441b7ff1b19d9cb->leave($__internal_59a8193d1c545eb797d8495eba824d4b157baef757aedff5b441b7ff1b19d9cb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_7e3f1229298478f8aab14bf57f67e343568719123968d59bba261aa3bf8cdc40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3f1229298478f8aab14bf57f67e343568719123968d59bba261aa3bf8cdc40->enter($__internal_7e3f1229298478f8aab14bf57f67e343568719123968d59bba261aa3bf8cdc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_1feffc35be6080249718fbf5fd718b5de85cbf1eaee6c12989ac7422e136a4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1feffc35be6080249718fbf5fd718b5de85cbf1eaee6c12989ac7422e136a4be->enter($__internal_1feffc35be6080249718fbf5fd718b5de85cbf1eaee6c12989ac7422e136a4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_1feffc35be6080249718fbf5fd718b5de85cbf1eaee6c12989ac7422e136a4be->leave($__internal_1feffc35be6080249718fbf5fd718b5de85cbf1eaee6c12989ac7422e136a4be_prof);

        
        $__internal_7e3f1229298478f8aab14bf57f67e343568719123968d59bba261aa3bf8cdc40->leave($__internal_7e3f1229298478f8aab14bf57f67e343568719123968d59bba261aa3bf8cdc40_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  96 => 24,  89 => 19,  84 => 18,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('cd_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('cd_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}", "CDPlatformBundle:Advert:delete.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
