<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9d1b8654412cf8d0aa98721adae70e2473fa701609508def98796c8c545e5a4c extends Twig_Template
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
        $__internal_e54ee5d8ca9650bf8c028aa87e4d49046063ef471f0754be35a1a61e7cc54c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54ee5d8ca9650bf8c028aa87e4d49046063ef471f0754be35a1a61e7cc54c76->enter($__internal_e54ee5d8ca9650bf8c028aa87e4d49046063ef471f0754be35a1a61e7cc54c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a9ccd8315f395fb76d2b07e0504b3fd96be4f738b83821ee6a6c0aae9e222809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ccd8315f395fb76d2b07e0504b3fd96be4f738b83821ee6a6c0aae9e222809->enter($__internal_a9ccd8315f395fb76d2b07e0504b3fd96be4f738b83821ee6a6c0aae9e222809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e54ee5d8ca9650bf8c028aa87e4d49046063ef471f0754be35a1a61e7cc54c76->leave($__internal_e54ee5d8ca9650bf8c028aa87e4d49046063ef471f0754be35a1a61e7cc54c76_prof);

        
        $__internal_a9ccd8315f395fb76d2b07e0504b3fd96be4f738b83821ee6a6c0aae9e222809->leave($__internal_a9ccd8315f395fb76d2b07e0504b3fd96be4f738b83821ee6a6c0aae9e222809_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
