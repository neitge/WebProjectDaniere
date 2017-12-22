<?php

/* @CDPlatform/Advert/edit.html.twig */
class __TwigTemplate_9c7688b37c5629f56ea96956d60c1aa336eef10bfa2d3de059c0efe4d43fd18b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "@CDPlatform/Advert/edit.html.twig", 3);
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
        $__internal_a8c46a23c387547f1bbcbcf7a483ff0903b80e8f476ffad3df65a8d044de1ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c46a23c387547f1bbcbcf7a483ff0903b80e8f476ffad3df65a8d044de1ee8->enter($__internal_a8c46a23c387547f1bbcbcf7a483ff0903b80e8f476ffad3df65a8d044de1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/edit.html.twig"));

        $__internal_96384ad6d5257bec4557c7b0bc8f831f1ccb60cfc67bf49e8aaa2dc83acab335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96384ad6d5257bec4557c7b0bc8f831f1ccb60cfc67bf49e8aaa2dc83acab335->enter($__internal_96384ad6d5257bec4557c7b0bc8f831f1ccb60cfc67bf49e8aaa2dc83acab335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c46a23c387547f1bbcbcf7a483ff0903b80e8f476ffad3df65a8d044de1ee8->leave($__internal_a8c46a23c387547f1bbcbcf7a483ff0903b80e8f476ffad3df65a8d044de1ee8_prof);

        
        $__internal_96384ad6d5257bec4557c7b0bc8f831f1ccb60cfc67bf49e8aaa2dc83acab335->leave($__internal_96384ad6d5257bec4557c7b0bc8f831f1ccb60cfc67bf49e8aaa2dc83acab335_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6885ec4c8f1d4bcd06531d592b1fbca24dce679540985c98b4ae6b76258eea1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6885ec4c8f1d4bcd06531d592b1fbca24dce679540985c98b4ae6b76258eea1d->enter($__internal_6885ec4c8f1d4bcd06531d592b1fbca24dce679540985c98b4ae6b76258eea1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cfdecba36f7a587c9b9c2d156a97f91df26d8ee2ade0d6f54f43a10eff969bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfdecba36f7a587c9b9c2d156a97f91df26d8ee2ade0d6f54f43a10eff969bd->enter($__internal_7cfdecba36f7a587c9b9c2d156a97f91df26d8ee2ade0d6f54f43a10eff969bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7cfdecba36f7a587c9b9c2d156a97f91df26d8ee2ade0d6f54f43a10eff969bd->leave($__internal_7cfdecba36f7a587c9b9c2d156a97f91df26d8ee2ade0d6f54f43a10eff969bd_prof);

        
        $__internal_6885ec4c8f1d4bcd06531d592b1fbca24dce679540985c98b4ae6b76258eea1d->leave($__internal_6885ec4c8f1d4bcd06531d592b1fbca24dce679540985c98b4ae6b76258eea1d_prof);

    }

    // line 9
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_53c278a33d022a0eebef3bb12172931c746677b9fc322f4458163fe16c4d11c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c278a33d022a0eebef3bb12172931c746677b9fc322f4458163fe16c4d11c3->enter($__internal_53c278a33d022a0eebef3bb12172931c746677b9fc322f4458163fe16c4d11c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_9c790b06c619abf58cea3d24be24d195772028cefea27720e17406c69ca68ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c790b06c619abf58cea3d24be24d195772028cefea27720e17406c69ca68ad0->enter($__internal_9c790b06c619abf58cea3d24be24d195772028cefea27720e17406c69ca68ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "CDPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Evitez de changer intégralement l'annonce.
  </p>

  <p>
    <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_view", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_9c790b06c619abf58cea3d24be24d195772028cefea27720e17406c69ca68ad0->leave($__internal_9c790b06c619abf58cea3d24be24d195772028cefea27720e17406c69ca68ad0_prof);

        
        $__internal_53c278a33d022a0eebef3bb12172931c746677b9fc322f4458163fe16c4d11c3->leave($__internal_53c278a33d022a0eebef3bb12172931c746677b9fc322f4458163fe16c4d11c3_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"CDPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block cdplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"CDPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Evitez de changer intégralement l'annonce.
  </p>

  <p>
    <a href=\"{{ path('cd_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "@CDPlatform/Advert/edit.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
