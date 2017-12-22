<?php

/* @CDPlatform/Advert/delete.html.twig */
class __TwigTemplate_7859ac95635fb98e4ca098250756c70dabad6dbbc0b14526003c4d5176bc5cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "@CDPlatform/Advert/delete.html.twig", 3);
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
        $__internal_ec3a27a14c7e5b28effed31870d8d196babd8b1fc78b6dfff4be10da7adc4ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3a27a14c7e5b28effed31870d8d196babd8b1fc78b6dfff4be10da7adc4ebf->enter($__internal_ec3a27a14c7e5b28effed31870d8d196babd8b1fc78b6dfff4be10da7adc4ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/delete.html.twig"));

        $__internal_6502b4f52668f2cc9a25ac28dc69a6851a4137aca1e5e4825d7971a97ccddef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6502b4f52668f2cc9a25ac28dc69a6851a4137aca1e5e4825d7971a97ccddef6->enter($__internal_6502b4f52668f2cc9a25ac28dc69a6851a4137aca1e5e4825d7971a97ccddef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3a27a14c7e5b28effed31870d8d196babd8b1fc78b6dfff4be10da7adc4ebf->leave($__internal_ec3a27a14c7e5b28effed31870d8d196babd8b1fc78b6dfff4be10da7adc4ebf_prof);

        
        $__internal_6502b4f52668f2cc9a25ac28dc69a6851a4137aca1e5e4825d7971a97ccddef6->leave($__internal_6502b4f52668f2cc9a25ac28dc69a6851a4137aca1e5e4825d7971a97ccddef6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b1560884f12b7c405c6a3f783fe50ddd291d77441115b3c4f9d7f20e2cd11d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1560884f12b7c405c6a3f783fe50ddd291d77441115b3c4f9d7f20e2cd11d1->enter($__internal_1b1560884f12b7c405c6a3f783fe50ddd291d77441115b3c4f9d7f20e2cd11d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93470048e20937fb6562d08195b40404d31c839f90fd14dae142d6e14b541334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93470048e20937fb6562d08195b40404d31c839f90fd14dae142d6e14b541334->enter($__internal_93470048e20937fb6562d08195b40404d31c839f90fd14dae142d6e14b541334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_93470048e20937fb6562d08195b40404d31c839f90fd14dae142d6e14b541334->leave($__internal_93470048e20937fb6562d08195b40404d31c839f90fd14dae142d6e14b541334_prof);

        
        $__internal_1b1560884f12b7c405c6a3f783fe50ddd291d77441115b3c4f9d7f20e2cd11d1->leave($__internal_1b1560884f12b7c405c6a3f783fe50ddd291d77441115b3c4f9d7f20e2cd11d1_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b4485d2a8a4e19a9927c42c5ef183fccb77f18141a2ef4257e25ccb1c44a6724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4485d2a8a4e19a9927c42c5ef183fccb77f18141a2ef4257e25ccb1c44a6724->enter($__internal_b4485d2a8a4e19a9927c42c5ef183fccb77f18141a2ef4257e25ccb1c44a6724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_436e1347840e9b83711f99badc0b09323b569c80145727d1b99c68102fe9d249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436e1347840e9b83711f99badc0b09323b569c80145727d1b99c68102fe9d249->enter($__internal_436e1347840e9b83711f99badc0b09323b569c80145727d1b99c68102fe9d249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_436e1347840e9b83711f99badc0b09323b569c80145727d1b99c68102fe9d249->leave($__internal_436e1347840e9b83711f99badc0b09323b569c80145727d1b99c68102fe9d249_prof);

        
        $__internal_b4485d2a8a4e19a9927c42c5ef183fccb77f18141a2ef4257e25ccb1c44a6724->leave($__internal_b4485d2a8a4e19a9927c42c5ef183fccb77f18141a2ef4257e25ccb1c44a6724_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/delete.html.twig";
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

{% endblock %}", "@CDPlatform/Advert/delete.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\delete.html.twig");
    }
}
