<?php

/* CDPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_f5693866bce5393f4e8ccbd7d005d664672a4c8de266212ce88464bb4e058998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "CDPlatformBundle:Advert:index.html.twig", 2);
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
        $__internal_1240e21079c495c57eeed2e388460d94c5822698a97d919ca4d1099917d3314e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1240e21079c495c57eeed2e388460d94c5822698a97d919ca4d1099917d3314e->enter($__internal_1240e21079c495c57eeed2e388460d94c5822698a97d919ca4d1099917d3314e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:index.html.twig"));

        $__internal_7b2eeac1714a07d8b7fb0b6aa8e97df10df243fcc30142b739d7f43f8954d56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2eeac1714a07d8b7fb0b6aa8e97df10df243fcc30142b739d7f43f8954d56b->enter($__internal_7b2eeac1714a07d8b7fb0b6aa8e97df10df243fcc30142b739d7f43f8954d56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1240e21079c495c57eeed2e388460d94c5822698a97d919ca4d1099917d3314e->leave($__internal_1240e21079c495c57eeed2e388460d94c5822698a97d919ca4d1099917d3314e_prof);

        
        $__internal_7b2eeac1714a07d8b7fb0b6aa8e97df10df243fcc30142b739d7f43f8954d56b->leave($__internal_7b2eeac1714a07d8b7fb0b6aa8e97df10df243fcc30142b739d7f43f8954d56b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b0286bebee3067b56b84cdf5b8071989f124404d1418dce4c0684a42d7c6755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0286bebee3067b56b84cdf5b8071989f124404d1418dce4c0684a42d7c6755->enter($__internal_5b0286bebee3067b56b84cdf5b8071989f124404d1418dce4c0684a42d7c6755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4fbb8cceb6e896235c3c5c741869e79f9cd1cfd1da1c979c20fbef0e5a6b7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fbb8cceb6e896235c3c5c741869e79f9cd1cfd1da1c979c20fbef0e5a6b7b1->enter($__internal_b4fbb8cceb6e896235c3c5c741869e79f9cd1cfd1da1c979c20fbef0e5a6b7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b4fbb8cceb6e896235c3c5c741869e79f9cd1cfd1da1c979c20fbef0e5a6b7b1->leave($__internal_b4fbb8cceb6e896235c3c5c741869e79f9cd1cfd1da1c979c20fbef0e5a6b7b1_prof);

        
        $__internal_5b0286bebee3067b56b84cdf5b8071989f124404d1418dce4c0684a42d7c6755->leave($__internal_5b0286bebee3067b56b84cdf5b8071989f124404d1418dce4c0684a42d7c6755_prof);

    }

    // line 8
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_26cfaeb5e3c2f1c1e60c1d31de80ed3ba224224c1cf04e8649a992605f096afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26cfaeb5e3c2f1c1e60c1d31de80ed3ba224224c1cf04e8649a992605f096afb->enter($__internal_26cfaeb5e3c2f1c1e60c1d31de80ed3ba224224c1cf04e8649a992605f096afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_0e0692d4fc444f519a1a658f07b8f99c73fc96548aca3c07567b22e79dd52ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0692d4fc444f519a1a658f07b8f99c73fc96548aca3c07567b22e79dd52ff2->enter($__internal_0e0692d4fc444f519a1a658f07b8f99c73fc96548aca3c07567b22e79dd52ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

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
        
        $__internal_0e0692d4fc444f519a1a658f07b8f99c73fc96548aca3c07567b22e79dd52ff2->leave($__internal_0e0692d4fc444f519a1a658f07b8f99c73fc96548aca3c07567b22e79dd52ff2_prof);

        
        $__internal_26cfaeb5e3c2f1c1e60c1d31de80ed3ba224224c1cf04e8649a992605f096afb->leave($__internal_26cfaeb5e3c2f1c1e60c1d31de80ed3ba224224c1cf04e8649a992605f096afb_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle:Advert:index.html.twig";
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

{% endblock %}", "CDPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
