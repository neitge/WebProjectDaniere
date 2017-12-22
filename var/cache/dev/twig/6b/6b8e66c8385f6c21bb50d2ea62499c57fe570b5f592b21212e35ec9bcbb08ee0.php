<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b4fdf6e81c1de259c397928c1c967a3bc5f9edb4626489208ce211ea7ac52aec extends Twig_Template
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
        $__internal_2d67b68797197ece59ae23c3f7884ecb115c6c9b3f40de7c3ac5866d57d5f6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d67b68797197ece59ae23c3f7884ecb115c6c9b3f40de7c3ac5866d57d5f6e2->enter($__internal_2d67b68797197ece59ae23c3f7884ecb115c6c9b3f40de7c3ac5866d57d5f6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_36bcd15de38922f971e5992ff5e23390f25e769631c5cc2064d122b58fe97eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bcd15de38922f971e5992ff5e23390f25e769631c5cc2064d122b58fe97eb9->enter($__internal_36bcd15de38922f971e5992ff5e23390f25e769631c5cc2064d122b58fe97eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2d67b68797197ece59ae23c3f7884ecb115c6c9b3f40de7c3ac5866d57d5f6e2->leave($__internal_2d67b68797197ece59ae23c3f7884ecb115c6c9b3f40de7c3ac5866d57d5f6e2_prof);

        
        $__internal_36bcd15de38922f971e5992ff5e23390f25e769631c5cc2064d122b58fe97eb9->leave($__internal_36bcd15de38922f971e5992ff5e23390f25e769631c5cc2064d122b58fe97eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
