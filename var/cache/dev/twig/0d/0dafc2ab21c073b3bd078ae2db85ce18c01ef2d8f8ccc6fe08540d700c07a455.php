<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_33944acc91a79d68ad8603dfd0588129a2c4014c546b9111a9038c48c8395e84 extends Twig_Template
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
        $__internal_40ede10788d52629b85dcb65764c96a3f532fd055730924cdca084dcb480fab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ede10788d52629b85dcb65764c96a3f532fd055730924cdca084dcb480fab3->enter($__internal_40ede10788d52629b85dcb65764c96a3f532fd055730924cdca084dcb480fab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1fcce67accd895593884c10fc744586685e74d8a4043315d5570fb39fff149d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcce67accd895593884c10fc744586685e74d8a4043315d5570fb39fff149d4->enter($__internal_1fcce67accd895593884c10fc744586685e74d8a4043315d5570fb39fff149d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_40ede10788d52629b85dcb65764c96a3f532fd055730924cdca084dcb480fab3->leave($__internal_40ede10788d52629b85dcb65764c96a3f532fd055730924cdca084dcb480fab3_prof);

        
        $__internal_1fcce67accd895593884c10fc744586685e74d8a4043315d5570fb39fff149d4->leave($__internal_1fcce67accd895593884c10fc744586685e74d8a4043315d5570fb39fff149d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
