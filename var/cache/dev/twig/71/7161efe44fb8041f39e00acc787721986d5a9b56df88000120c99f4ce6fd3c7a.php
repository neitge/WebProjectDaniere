<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_82cfd82d9129f8a3b349e47dec1a796b0ce8bd3a21256b45d109633269475ab8 extends Twig_Template
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
        $__internal_a946937b9b981da4826405ac18301acc412dc05a0ad5242bbc04cce20b83575f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a946937b9b981da4826405ac18301acc412dc05a0ad5242bbc04cce20b83575f->enter($__internal_a946937b9b981da4826405ac18301acc412dc05a0ad5242bbc04cce20b83575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_ba5bafd874711b616cf0f047c5972ffdc6ed01d1cad6d260884472a8205063bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5bafd874711b616cf0f047c5972ffdc6ed01d1cad6d260884472a8205063bd->enter($__internal_ba5bafd874711b616cf0f047c5972ffdc6ed01d1cad6d260884472a8205063bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a946937b9b981da4826405ac18301acc412dc05a0ad5242bbc04cce20b83575f->leave($__internal_a946937b9b981da4826405ac18301acc412dc05a0ad5242bbc04cce20b83575f_prof);

        
        $__internal_ba5bafd874711b616cf0f047c5972ffdc6ed01d1cad6d260884472a8205063bd->leave($__internal_ba5bafd874711b616cf0f047c5972ffdc6ed01d1cad6d260884472a8205063bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
