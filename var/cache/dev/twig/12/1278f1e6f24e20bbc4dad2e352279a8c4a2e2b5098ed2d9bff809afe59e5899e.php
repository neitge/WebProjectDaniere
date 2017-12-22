<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c8285102c09d5fce2d96c802385800449930b41363c746a9bc6777ef69ab3bd6 extends Twig_Template
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
        $__internal_8457b5c71664680aaac7ff9ed7ee3a0531242fa171688491e745e66c652e2592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8457b5c71664680aaac7ff9ed7ee3a0531242fa171688491e745e66c652e2592->enter($__internal_8457b5c71664680aaac7ff9ed7ee3a0531242fa171688491e745e66c652e2592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8ffe797b5aab5744463e6dadcaa6b4f0f7d97db6097dde2d508c0a2c866e773c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ffe797b5aab5744463e6dadcaa6b4f0f7d97db6097dde2d508c0a2c866e773c->enter($__internal_8ffe797b5aab5744463e6dadcaa6b4f0f7d97db6097dde2d508c0a2c866e773c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8457b5c71664680aaac7ff9ed7ee3a0531242fa171688491e745e66c652e2592->leave($__internal_8457b5c71664680aaac7ff9ed7ee3a0531242fa171688491e745e66c652e2592_prof);

        
        $__internal_8ffe797b5aab5744463e6dadcaa6b4f0f7d97db6097dde2d508c0a2c866e773c->leave($__internal_8ffe797b5aab5744463e6dadcaa6b4f0f7d97db6097dde2d508c0a2c866e773c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
