<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e1b17b672d538b6b91c8a060c36b7e27608c889b2144a6a4e8ee4ce83b0f1b9d extends Twig_Template
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
        $__internal_a57c7b5bd4d16b3f27b8700860ecb8ec7e4d49c3572efc2e27a0e966728548c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57c7b5bd4d16b3f27b8700860ecb8ec7e4d49c3572efc2e27a0e966728548c1->enter($__internal_a57c7b5bd4d16b3f27b8700860ecb8ec7e4d49c3572efc2e27a0e966728548c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ea46c79139035d24e3349be5ade987ee6a87355276d04dd3fecd75efc5b87ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea46c79139035d24e3349be5ade987ee6a87355276d04dd3fecd75efc5b87ca5->enter($__internal_ea46c79139035d24e3349be5ade987ee6a87355276d04dd3fecd75efc5b87ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a57c7b5bd4d16b3f27b8700860ecb8ec7e4d49c3572efc2e27a0e966728548c1->leave($__internal_a57c7b5bd4d16b3f27b8700860ecb8ec7e4d49c3572efc2e27a0e966728548c1_prof);

        
        $__internal_ea46c79139035d24e3349be5ade987ee6a87355276d04dd3fecd75efc5b87ca5->leave($__internal_ea46c79139035d24e3349be5ade987ee6a87355276d04dd3fecd75efc5b87ca5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
