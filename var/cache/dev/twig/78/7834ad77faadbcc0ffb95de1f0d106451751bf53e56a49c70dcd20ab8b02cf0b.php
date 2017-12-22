<?php

/* CDPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_c4ee096a96abd6577cd1649e660cccbb3946f1e101e25e3d81ee544d1ec3f836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "CDPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_6cb58dec2d52f51a50e61cba3cb8ca4cdfa688d4816a1ffbb3e63a3ca6cef0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cb58dec2d52f51a50e61cba3cb8ca4cdfa688d4816a1ffbb3e63a3ca6cef0ce->enter($__internal_6cb58dec2d52f51a50e61cba3cb8ca4cdfa688d4816a1ffbb3e63a3ca6cef0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:edit.html.twig"));

        $__internal_f8a23b5678512a818de68347ee82972d26fd161379a9c1167560d78702c0a8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8a23b5678512a818de68347ee82972d26fd161379a9c1167560d78702c0a8ab->enter($__internal_f8a23b5678512a818de68347ee82972d26fd161379a9c1167560d78702c0a8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cb58dec2d52f51a50e61cba3cb8ca4cdfa688d4816a1ffbb3e63a3ca6cef0ce->leave($__internal_6cb58dec2d52f51a50e61cba3cb8ca4cdfa688d4816a1ffbb3e63a3ca6cef0ce_prof);

        
        $__internal_f8a23b5678512a818de68347ee82972d26fd161379a9c1167560d78702c0a8ab->leave($__internal_f8a23b5678512a818de68347ee82972d26fd161379a9c1167560d78702c0a8ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eb380e3cfb0a95a9affaa168cb5907316244dc08e1dcda5a4e024d81ca322fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb380e3cfb0a95a9affaa168cb5907316244dc08e1dcda5a4e024d81ca322fe->enter($__internal_1eb380e3cfb0a95a9affaa168cb5907316244dc08e1dcda5a4e024d81ca322fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c69f7844270b3b13de14d2cb670c6ce343326cf69e5dc28092fac5b0edfe766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c69f7844270b3b13de14d2cb670c6ce343326cf69e5dc28092fac5b0edfe766->enter($__internal_0c69f7844270b3b13de14d2cb670c6ce343326cf69e5dc28092fac5b0edfe766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c69f7844270b3b13de14d2cb670c6ce343326cf69e5dc28092fac5b0edfe766->leave($__internal_0c69f7844270b3b13de14d2cb670c6ce343326cf69e5dc28092fac5b0edfe766_prof);

        
        $__internal_1eb380e3cfb0a95a9affaa168cb5907316244dc08e1dcda5a4e024d81ca322fe->leave($__internal_1eb380e3cfb0a95a9affaa168cb5907316244dc08e1dcda5a4e024d81ca322fe_prof);

    }

    // line 9
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_943e044f4d701ca4c9e69c39eb9ae2977b5028c9ca2a4e978dd97828f160c77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943e044f4d701ca4c9e69c39eb9ae2977b5028c9ca2a4e978dd97828f160c77e->enter($__internal_943e044f4d701ca4c9e69c39eb9ae2977b5028c9ca2a4e978dd97828f160c77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_496c2f528c84e9a7a454bcf8c6908cf1369da5f370692b544e602efc407e24e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496c2f528c84e9a7a454bcf8c6908cf1369da5f370692b544e602efc407e24e8->enter($__internal_496c2f528c84e9a7a454bcf8c6908cf1369da5f370692b544e602efc407e24e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

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
        
        $__internal_496c2f528c84e9a7a454bcf8c6908cf1369da5f370692b544e602efc407e24e8->leave($__internal_496c2f528c84e9a7a454bcf8c6908cf1369da5f370692b544e602efc407e24e8_prof);

        
        $__internal_943e044f4d701ca4c9e69c39eb9ae2977b5028c9ca2a4e978dd97828f160c77e->leave($__internal_943e044f4d701ca4c9e69c39eb9ae2977b5028c9ca2a4e978dd97828f160c77e_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle:Advert:edit.html.twig";
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

{% endblock %}", "CDPlatformBundle:Advert:edit.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
