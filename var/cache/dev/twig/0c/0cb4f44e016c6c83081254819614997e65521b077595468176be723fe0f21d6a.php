<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_41d85eb6c5462594cb7d218b0d7a31d2993febea285865e142cb03ef165fd8f9 extends Twig_Template
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
        $__internal_627d5c233efb3c53fb2c07cc3c1dd9d8373f65b4e30e989548783c59055f8d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627d5c233efb3c53fb2c07cc3c1dd9d8373f65b4e30e989548783c59055f8d45->enter($__internal_627d5c233efb3c53fb2c07cc3c1dd9d8373f65b4e30e989548783c59055f8d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6f9a9679e9cba52c48890c5ed759f15f330bb5957d3b5a83a480bce83dfe7ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9a9679e9cba52c48890c5ed759f15f330bb5957d3b5a83a480bce83dfe7ef6->enter($__internal_6f9a9679e9cba52c48890c5ed759f15f330bb5957d3b5a83a480bce83dfe7ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_627d5c233efb3c53fb2c07cc3c1dd9d8373f65b4e30e989548783c59055f8d45->leave($__internal_627d5c233efb3c53fb2c07cc3c1dd9d8373f65b4e30e989548783c59055f8d45_prof);

        
        $__internal_6f9a9679e9cba52c48890c5ed759f15f330bb5957d3b5a83a480bce83dfe7ef6->leave($__internal_6f9a9679e9cba52c48890c5ed759f15f330bb5957d3b5a83a480bce83dfe7ef6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
