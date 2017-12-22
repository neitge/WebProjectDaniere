<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8662065b47d86599fa1bbb5cd25eeaa3d6f500252b25ece02d39b0f40ad5d700 extends Twig_Template
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
        $__internal_25f413954845ba1b02a3f4083775efaed0616eb1ea44dca9e837479f255a745d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f413954845ba1b02a3f4083775efaed0616eb1ea44dca9e837479f255a745d->enter($__internal_25f413954845ba1b02a3f4083775efaed0616eb1ea44dca9e837479f255a745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dce961dddb64f8a2d0b64642f50ccc3521c12abff83a0bd3ddeb5b5200e9474f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce961dddb64f8a2d0b64642f50ccc3521c12abff83a0bd3ddeb5b5200e9474f->enter($__internal_dce961dddb64f8a2d0b64642f50ccc3521c12abff83a0bd3ddeb5b5200e9474f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_25f413954845ba1b02a3f4083775efaed0616eb1ea44dca9e837479f255a745d->leave($__internal_25f413954845ba1b02a3f4083775efaed0616eb1ea44dca9e837479f255a745d_prof);

        
        $__internal_dce961dddb64f8a2d0b64642f50ccc3521c12abff83a0bd3ddeb5b5200e9474f->leave($__internal_dce961dddb64f8a2d0b64642f50ccc3521c12abff83a0bd3ddeb5b5200e9474f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
