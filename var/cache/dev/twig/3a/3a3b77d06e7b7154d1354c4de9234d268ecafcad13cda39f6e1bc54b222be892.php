<?php

/* @CDPlatform/Advert/index.html.twig */
class __TwigTemplate_af12a7fca433c11f42ecb8da31f64a3be5ab7422723253622ec251b21ca19687 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "@CDPlatform/Advert/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cdplatform_body' => array($this, 'block_cdplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CDPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55b2f6326ae347a2f90ed6ef17ee21dec13c4a654fc88c21326aa827d811f8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b2f6326ae347a2f90ed6ef17ee21dec13c4a654fc88c21326aa827d811f8c0->enter($__internal_55b2f6326ae347a2f90ed6ef17ee21dec13c4a654fc88c21326aa827d811f8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/index.html.twig"));

        $__internal_3e34d40b6d7e4c643516c44b9f16d93429b7743a71e784ff65ca061e8025fcc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e34d40b6d7e4c643516c44b9f16d93429b7743a71e784ff65ca061e8025fcc8->enter($__internal_3e34d40b6d7e4c643516c44b9f16d93429b7743a71e784ff65ca061e8025fcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55b2f6326ae347a2f90ed6ef17ee21dec13c4a654fc88c21326aa827d811f8c0->leave($__internal_55b2f6326ae347a2f90ed6ef17ee21dec13c4a654fc88c21326aa827d811f8c0_prof);

        
        $__internal_3e34d40b6d7e4c643516c44b9f16d93429b7743a71e784ff65ca061e8025fcc8->leave($__internal_3e34d40b6d7e4c643516c44b9f16d93429b7743a71e784ff65ca061e8025fcc8_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9be53605f06721d917fac39299ff79547f92194612425008884e3d846dfec5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be53605f06721d917fac39299ff79547f92194612425008884e3d846dfec5fe->enter($__internal_9be53605f06721d917fac39299ff79547f92194612425008884e3d846dfec5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f759e4823aa1448d4ea446021a5e166feba03235903ebe1bcb3c67f7badfec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f759e4823aa1448d4ea446021a5e166feba03235903ebe1bcb3c67f7badfec7->enter($__internal_3f759e4823aa1448d4ea446021a5e166feba03235903ebe1bcb3c67f7badfec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3f759e4823aa1448d4ea446021a5e166feba03235903ebe1bcb3c67f7badfec7->leave($__internal_3f759e4823aa1448d4ea446021a5e166feba03235903ebe1bcb3c67f7badfec7_prof);

        
        $__internal_9be53605f06721d917fac39299ff79547f92194612425008884e3d846dfec5fe->leave($__internal_9be53605f06721d917fac39299ff79547f92194612425008884e3d846dfec5fe_prof);

    }

    // line 8
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_f044d9345685471ae853262ab7466f32b207073ad7ae5ec4b39e817d60447942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f044d9345685471ae853262ab7466f32b207073ad7ae5ec4b39e817d60447942->enter($__internal_f044d9345685471ae853262ab7466f32b207073ad7ae5ec4b39e817d60447942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_c5e921edd197fd1361dc7916c2556f74e9b31344dd1bfd1b45842b4364e121cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e921edd197fd1361dc7916c2556f74e9b31344dd1bfd1b45842b4364e121cb->enter($__internal_c5e921edd197fd1361dc7916c2556f74e9b31344dd1bfd1b45842b4364e121cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        // line 9
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "      <li>
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </ul>

    <ul class=\"pagination\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "    <li";
            if (($context["p"] == ($context["page"] ?? $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</ul>

";
        
        $__internal_c5e921edd197fd1361dc7916c2556f74e9b31344dd1bfd1b45842b4364e121cb->leave($__internal_c5e921edd197fd1361dc7916c2556f74e9b31344dd1bfd1b45842b4364e121cb_prof);

        
        $__internal_f044d9345685471ae853262ab7466f32b207073ad7ae5ec4b39e817d60447942->leave($__internal_f044d9345685471ae853262ab7466f32b207073ad7ae5ec4b39e817d60447942_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 32,  130 => 29,  123 => 28,  119 => 27,  114 => 24,  107 => 22,  99 => 19,  95 => 18,  90 => 16,  86 => 15,  83 => 14,  78 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
  Accueil - {{ parent() }}
{% endblock %}

{% block cdplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('cd_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

    <ul class=\"pagination\">
  {% for p in range(1, nbPages) %}
    <li{% if p == page %} class=\"active\"{% endif %}>
      <a href=\"{{ path('cd_platform_home', {'page': p}) }}\">{{ p }}</a>
    </li>
  {% endfor %}
</ul>

{% endblock %}", "@CDPlatform/Advert/index.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\index.html.twig");
    }
}
