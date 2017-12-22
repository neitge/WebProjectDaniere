<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_2d28f1a8b3b8127c63217b7a627ec029a687ff6fcae79a01a4ffe17451bae726 extends Twig_Template
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
        $__internal_fee98548bd0fd11fc92e47cf8d6bdbec42d49d4bd1e0073408f388084e1cd3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee98548bd0fd11fc92e47cf8d6bdbec42d49d4bd1e0073408f388084e1cd3d5->enter($__internal_fee98548bd0fd11fc92e47cf8d6bdbec42d49d4bd1e0073408f388084e1cd3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_be191619fd5996ff66ae66e967636fb38a2362b06630b0567f2075c95fc86b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be191619fd5996ff66ae66e967636fb38a2362b06630b0567f2075c95fc86b53->enter($__internal_be191619fd5996ff66ae66e967636fb38a2362b06630b0567f2075c95fc86b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fee98548bd0fd11fc92e47cf8d6bdbec42d49d4bd1e0073408f388084e1cd3d5->leave($__internal_fee98548bd0fd11fc92e47cf8d6bdbec42d49d4bd1e0073408f388084e1cd3d5_prof);

        
        $__internal_be191619fd5996ff66ae66e967636fb38a2362b06630b0567f2075c95fc86b53->leave($__internal_be191619fd5996ff66ae66e967636fb38a2362b06630b0567f2075c95fc86b53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
