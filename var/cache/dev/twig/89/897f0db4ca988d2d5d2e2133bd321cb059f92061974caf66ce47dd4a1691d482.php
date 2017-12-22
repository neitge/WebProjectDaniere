<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9b78c2e11f0015f10c9f2c54750a647ab7019c6656e5ee17d23edc8d63415a05 extends Twig_Template
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
        $__internal_6c80de520a78514ae51a5be1a380cfaeca4b4970f975bd2734fc0430561d3fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c80de520a78514ae51a5be1a380cfaeca4b4970f975bd2734fc0430561d3fcb->enter($__internal_6c80de520a78514ae51a5be1a380cfaeca4b4970f975bd2734fc0430561d3fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e0c22db3c2f26cdd3369fbddede79e0e01c198b2c641955467cb9187e26aeded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c22db3c2f26cdd3369fbddede79e0e01c198b2c641955467cb9187e26aeded->enter($__internal_e0c22db3c2f26cdd3369fbddede79e0e01c198b2c641955467cb9187e26aeded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6c80de520a78514ae51a5be1a380cfaeca4b4970f975bd2734fc0430561d3fcb->leave($__internal_6c80de520a78514ae51a5be1a380cfaeca4b4970f975bd2734fc0430561d3fcb_prof);

        
        $__internal_e0c22db3c2f26cdd3369fbddede79e0e01c198b2c641955467cb9187e26aeded->leave($__internal_e0c22db3c2f26cdd3369fbddede79e0e01c198b2c641955467cb9187e26aeded_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
