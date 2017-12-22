<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3e0701d7c83b0af07679b170556d693b8b3ba7a4ac1b6849f510fd044c68e189 extends Twig_Template
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
        $__internal_0268ce7db32aa56923d4fb901474bfecb5c49d5e917d02dddd7d9568a0a11d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0268ce7db32aa56923d4fb901474bfecb5c49d5e917d02dddd7d9568a0a11d36->enter($__internal_0268ce7db32aa56923d4fb901474bfecb5c49d5e917d02dddd7d9568a0a11d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_571fa78cdfff84843168fd0f59a945760953cffc7fab1ad97caf38002bb61eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571fa78cdfff84843168fd0f59a945760953cffc7fab1ad97caf38002bb61eef->enter($__internal_571fa78cdfff84843168fd0f59a945760953cffc7fab1ad97caf38002bb61eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0268ce7db32aa56923d4fb901474bfecb5c49d5e917d02dddd7d9568a0a11d36->leave($__internal_0268ce7db32aa56923d4fb901474bfecb5c49d5e917d02dddd7d9568a0a11d36_prof);

        
        $__internal_571fa78cdfff84843168fd0f59a945760953cffc7fab1ad97caf38002bb61eef->leave($__internal_571fa78cdfff84843168fd0f59a945760953cffc7fab1ad97caf38002bb61eef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
