<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_01fc2a3f4246717550f6b0cde8160384f0d313540dfdcee9b1cb39ce24f48a1d extends Twig_Template
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
        $__internal_666eec81dc4a2b263ba35e7631b33fc9f5127f8ca5da405f648249f8139778f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666eec81dc4a2b263ba35e7631b33fc9f5127f8ca5da405f648249f8139778f0->enter($__internal_666eec81dc4a2b263ba35e7631b33fc9f5127f8ca5da405f648249f8139778f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_fe2e158f934a20ee0b18bd5552e9fa95fa50eab2475515e1182d9b4e9d791e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2e158f934a20ee0b18bd5552e9fa95fa50eab2475515e1182d9b4e9d791e6d->enter($__internal_fe2e158f934a20ee0b18bd5552e9fa95fa50eab2475515e1182d9b4e9d791e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_666eec81dc4a2b263ba35e7631b33fc9f5127f8ca5da405f648249f8139778f0->leave($__internal_666eec81dc4a2b263ba35e7631b33fc9f5127f8ca5da405f648249f8139778f0_prof);

        
        $__internal_fe2e158f934a20ee0b18bd5552e9fa95fa50eab2475515e1182d9b4e9d791e6d->leave($__internal_fe2e158f934a20ee0b18bd5552e9fa95fa50eab2475515e1182d9b4e9d791e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
