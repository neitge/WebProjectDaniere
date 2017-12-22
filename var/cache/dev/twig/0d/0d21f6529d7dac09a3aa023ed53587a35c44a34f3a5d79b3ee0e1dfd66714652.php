<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b549632acf015d162fb61593e0530139ac2730a4642372bdb7d60c6e3d7cbb7e extends Twig_Template
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
        $__internal_6dd4d5acf82bc1f93316968c86b1f15c1746b876fa7645f4eefafdf4f6585cfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd4d5acf82bc1f93316968c86b1f15c1746b876fa7645f4eefafdf4f6585cfd->enter($__internal_6dd4d5acf82bc1f93316968c86b1f15c1746b876fa7645f4eefafdf4f6585cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_5c7b53e1fe3ac66ace8eb6cd1fe9022bdf775d5a726e04cfe4824ea024b64f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7b53e1fe3ac66ace8eb6cd1fe9022bdf775d5a726e04cfe4824ea024b64f9f->enter($__internal_5c7b53e1fe3ac66ace8eb6cd1fe9022bdf775d5a726e04cfe4824ea024b64f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6dd4d5acf82bc1f93316968c86b1f15c1746b876fa7645f4eefafdf4f6585cfd->leave($__internal_6dd4d5acf82bc1f93316968c86b1f15c1746b876fa7645f4eefafdf4f6585cfd_prof);

        
        $__internal_5c7b53e1fe3ac66ace8eb6cd1fe9022bdf775d5a726e04cfe4824ea024b64f9f->leave($__internal_5c7b53e1fe3ac66ace8eb6cd1fe9022bdf775d5a726e04cfe4824ea024b64f9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
