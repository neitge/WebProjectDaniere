<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_27ad885b101a9da558cfdb8aeff587abc7e66721b0fe4d6567ff2f3345f51121 extends Twig_Template
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
        $__internal_00c4663e545a4c9bc97acf2e00649df936211b12b01862b4169ae59e6a347084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c4663e545a4c9bc97acf2e00649df936211b12b01862b4169ae59e6a347084->enter($__internal_00c4663e545a4c9bc97acf2e00649df936211b12b01862b4169ae59e6a347084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3b1ec335e442cce3618151f7348c0f22393eb1ac4c871118a13f9c9a683635f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1ec335e442cce3618151f7348c0f22393eb1ac4c871118a13f9c9a683635f3->enter($__internal_3b1ec335e442cce3618151f7348c0f22393eb1ac4c871118a13f9c9a683635f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_00c4663e545a4c9bc97acf2e00649df936211b12b01862b4169ae59e6a347084->leave($__internal_00c4663e545a4c9bc97acf2e00649df936211b12b01862b4169ae59e6a347084_prof);

        
        $__internal_3b1ec335e442cce3618151f7348c0f22393eb1ac4c871118a13f9c9a683635f3->leave($__internal_3b1ec335e442cce3618151f7348c0f22393eb1ac4c871118a13f9c9a683635f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
