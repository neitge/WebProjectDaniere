<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_edf8f5f4370ef1ed465f213cf350c52ce575467d23ed70a9cfca832904015759 extends Twig_Template
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
        $__internal_3ad694bd53b156b7371848fc3c697a9c45efd1434cdc4f246f198efa49068416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad694bd53b156b7371848fc3c697a9c45efd1434cdc4f246f198efa49068416->enter($__internal_3ad694bd53b156b7371848fc3c697a9c45efd1434cdc4f246f198efa49068416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5b433055a1ae4837cfb386dceb6de72081d0e26c94ba8642d17e22e4edeef47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b433055a1ae4837cfb386dceb6de72081d0e26c94ba8642d17e22e4edeef47a->enter($__internal_5b433055a1ae4837cfb386dceb6de72081d0e26c94ba8642d17e22e4edeef47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3ad694bd53b156b7371848fc3c697a9c45efd1434cdc4f246f198efa49068416->leave($__internal_3ad694bd53b156b7371848fc3c697a9c45efd1434cdc4f246f198efa49068416_prof);

        
        $__internal_5b433055a1ae4837cfb386dceb6de72081d0e26c94ba8642d17e22e4edeef47a->leave($__internal_5b433055a1ae4837cfb386dceb6de72081d0e26c94ba8642d17e22e4edeef47a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
