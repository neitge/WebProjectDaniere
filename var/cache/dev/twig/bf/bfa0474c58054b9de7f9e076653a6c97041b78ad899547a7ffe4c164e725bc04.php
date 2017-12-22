<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c36ed3eb1065618a3628c648ce8736b8c44ba21791bd47fd33fcb840b312198a extends Twig_Template
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
        $__internal_7d922fe0a13213d12129541cb512e9417783ce00c077aed8969a41e562e39eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d922fe0a13213d12129541cb512e9417783ce00c077aed8969a41e562e39eda->enter($__internal_7d922fe0a13213d12129541cb512e9417783ce00c077aed8969a41e562e39eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9526be08454ba3f1f6c4898235183c41a66faafe8c44225e2566a02a2a511972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9526be08454ba3f1f6c4898235183c41a66faafe8c44225e2566a02a2a511972->enter($__internal_9526be08454ba3f1f6c4898235183c41a66faafe8c44225e2566a02a2a511972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_7d922fe0a13213d12129541cb512e9417783ce00c077aed8969a41e562e39eda->leave($__internal_7d922fe0a13213d12129541cb512e9417783ce00c077aed8969a41e562e39eda_prof);

        
        $__internal_9526be08454ba3f1f6c4898235183c41a66faafe8c44225e2566a02a2a511972->leave($__internal_9526be08454ba3f1f6c4898235183c41a66faafe8c44225e2566a02a2a511972_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
