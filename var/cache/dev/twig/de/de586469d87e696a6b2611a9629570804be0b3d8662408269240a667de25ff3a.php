<?php

/* @CDPlatform/Advert/menu.html.twig */
class __TwigTemplate_23b4c5a978bc9ebe64cc182e5df018d82da7cc39bc7e294c7ef6097b0740369e extends Twig_Template
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
        $__internal_4bb95d0f58736292a386ad2b884ed4ac44c6fe2652ecf4772632e2d58fda49b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb95d0f58736292a386ad2b884ed4ac44c6fe2652ecf4772632e2d58fda49b3->enter($__internal_4bb95d0f58736292a386ad2b884ed4ac44c6fe2652ecf4772632e2d58fda49b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/menu.html.twig"));

        $__internal_09f8acadab573e58693a7ae7f3a41d343c10eeb11a275969802b0cb630c832c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f8acadab573e58693a7ae7f3a41d343c10eeb11a275969802b0cb630c832c2->enter($__internal_09f8acadab573e58693a7ae7f3a41d343c10eeb11a275969802b0cb630c832c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/menu.html.twig"));

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
        
        $__internal_4bb95d0f58736292a386ad2b884ed4ac44c6fe2652ecf4772632e2d58fda49b3->leave($__internal_4bb95d0f58736292a386ad2b884ed4ac44c6fe2652ecf4772632e2d58fda49b3_prof);

        
        $__internal_09f8acadab573e58693a7ae7f3a41d343c10eeb11a275969802b0cb630c832c2->leave($__internal_09f8acadab573e58693a7ae7f3a41d343c10eeb11a275969802b0cb630c832c2_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/menu.html.twig";
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
</ul>", "@CDPlatform/Advert/menu.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\menu.html.twig");
    }
}
