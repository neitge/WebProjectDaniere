<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_450fe5e6df89492527aea074cde423f98d3cbc779be0c3dd15a22c18ceee0832 extends Twig_Template
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
        $__internal_c44987a560146998bd6c2a45d9d8a4e92f6028e0e11cb455b79aca5260606b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44987a560146998bd6c2a45d9d8a4e92f6028e0e11cb455b79aca5260606b7f->enter($__internal_c44987a560146998bd6c2a45d9d8a4e92f6028e0e11cb455b79aca5260606b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a259efb8271a76c6a60ca286fbd25a9a97bb0449e96f221b94ce5832a1ae5cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a259efb8271a76c6a60ca286fbd25a9a97bb0449e96f221b94ce5832a1ae5cd8->enter($__internal_a259efb8271a76c6a60ca286fbd25a9a97bb0449e96f221b94ce5832a1ae5cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c44987a560146998bd6c2a45d9d8a4e92f6028e0e11cb455b79aca5260606b7f->leave($__internal_c44987a560146998bd6c2a45d9d8a4e92f6028e0e11cb455b79aca5260606b7f_prof);

        
        $__internal_a259efb8271a76c6a60ca286fbd25a9a97bb0449e96f221b94ce5832a1ae5cd8->leave($__internal_a259efb8271a76c6a60ca286fbd25a9a97bb0449e96f221b94ce5832a1ae5cd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
