<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_45ebed97418b2302dc1351f6c63f6ad3d69f594e82617df17a88748da5793106 extends Twig_Template
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
        $__internal_9e23f531713e59e1d61faa79829a5a00e59f48f1504ca4da42e85780ef12892b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e23f531713e59e1d61faa79829a5a00e59f48f1504ca4da42e85780ef12892b->enter($__internal_9e23f531713e59e1d61faa79829a5a00e59f48f1504ca4da42e85780ef12892b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_18586fe3d8d6b788282beb4c94a5b759afce00b26e13a59e79ffd43c176901ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18586fe3d8d6b788282beb4c94a5b759afce00b26e13a59e79ffd43c176901ab->enter($__internal_18586fe3d8d6b788282beb4c94a5b759afce00b26e13a59e79ffd43c176901ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9e23f531713e59e1d61faa79829a5a00e59f48f1504ca4da42e85780ef12892b->leave($__internal_9e23f531713e59e1d61faa79829a5a00e59f48f1504ca4da42e85780ef12892b_prof);

        
        $__internal_18586fe3d8d6b788282beb4c94a5b759afce00b26e13a59e79ffd43c176901ab->leave($__internal_18586fe3d8d6b788282beb4c94a5b759afce00b26e13a59e79ffd43c176901ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
