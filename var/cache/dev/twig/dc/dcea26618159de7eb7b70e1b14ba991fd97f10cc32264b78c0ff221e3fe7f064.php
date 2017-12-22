<?php

/* CDPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_c17a54d96260065d57f36e47c7ad9e6b43d71cfc6ffbf4de545099e69c4c0478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_861f9b45041de65d69dd7f316078e94c5dc255702e49113063933fe9dae9a5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861f9b45041de65d69dd7f316078e94c5dc255702e49113063933fe9dae9a5a8->enter($__internal_861f9b45041de65d69dd7f316078e94c5dc255702e49113063933fe9dae9a5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:menu.html.twig"));

        $__internal_791ac12dd718b250d7f4bd02b08d8b8c65446b728f04c8886f510966adc2cdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791ac12dd718b250d7f4bd02b08d8b8c65446b728f04c8886f510966adc2cdfb->enter($__internal_791ac12dd718b250d7f4bd02b08d8b8c65446b728f04c8886f510966adc2cdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:menu.html.twig"));

        // line 1
        echo "

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 5
            echo "    <li>
      <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
        
        $__internal_861f9b45041de65d69dd7f316078e94c5dc255702e49113063933fe9dae9a5a8->leave($__internal_861f9b45041de65d69dd7f316078e94c5dc255702e49113063933fe9dae9a5a8_prof);

        
        $__internal_791ac12dd718b250d7f4bd02b08d8b8c65446b728f04c8886f510966adc2cdfb->leave($__internal_791ac12dd718b250d7f4bd02b08d8b8c65446b728f04c8886f510966adc2cdfb_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  41 => 7,  37 => 6,  34 => 5,  30 => 4,  25 => 1,);
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

<ul class=\"nav nav-pills nav-stacked\">
  {% for advert in listAdverts %}
    <li>
      <a href=\"{{ path('cd_platform_view', {'id': advert.id}) }}\">
        {{ advert.title }}
      </a>
    </li>
  {% endfor %}
</ul>", "CDPlatformBundle:Advert:menu.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/Advert/menu.html.twig");
    }
}
