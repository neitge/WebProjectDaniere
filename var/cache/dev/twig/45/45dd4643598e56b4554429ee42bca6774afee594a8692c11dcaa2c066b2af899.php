<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c9428ef6ba41514c21537094d87f26101cea5c7b772695a152cb2b598b5ac52f extends Twig_Template
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
        $__internal_2299f9ee57cd9afec4fc655b7c98672737f0c3a28bd60e56f828c6dd493be638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2299f9ee57cd9afec4fc655b7c98672737f0c3a28bd60e56f828c6dd493be638->enter($__internal_2299f9ee57cd9afec4fc655b7c98672737f0c3a28bd60e56f828c6dd493be638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_de3c56c1f6f945a0fa1f6126240f3b1fee696aa02afb7c507b652f346a5a9be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3c56c1f6f945a0fa1f6126240f3b1fee696aa02afb7c507b652f346a5a9be2->enter($__internal_de3c56c1f6f945a0fa1f6126240f3b1fee696aa02afb7c507b652f346a5a9be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2299f9ee57cd9afec4fc655b7c98672737f0c3a28bd60e56f828c6dd493be638->leave($__internal_2299f9ee57cd9afec4fc655b7c98672737f0c3a28bd60e56f828c6dd493be638_prof);

        
        $__internal_de3c56c1f6f945a0fa1f6126240f3b1fee696aa02afb7c507b652f346a5a9be2->leave($__internal_de3c56c1f6f945a0fa1f6126240f3b1fee696aa02afb7c507b652f346a5a9be2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
