<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_43ab81fdb888b510bca746e4dc1017173ce1e7b190a9139f80edcdcf1e6f8122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87970250b155f14b41fbb8adca9cff0f2650ee0aa032cf6db563ed3d02a991cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87970250b155f14b41fbb8adca9cff0f2650ee0aa032cf6db563ed3d02a991cc->enter($__internal_87970250b155f14b41fbb8adca9cff0f2650ee0aa032cf6db563ed3d02a991cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_958723fbde3027170457801d9f4b65b2926518c80825baf216b8f82f55479090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958723fbde3027170457801d9f4b65b2926518c80825baf216b8f82f55479090->enter($__internal_958723fbde3027170457801d9f4b65b2926518c80825baf216b8f82f55479090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87970250b155f14b41fbb8adca9cff0f2650ee0aa032cf6db563ed3d02a991cc->leave($__internal_87970250b155f14b41fbb8adca9cff0f2650ee0aa032cf6db563ed3d02a991cc_prof);

        
        $__internal_958723fbde3027170457801d9f4b65b2926518c80825baf216b8f82f55479090->leave($__internal_958723fbde3027170457801d9f4b65b2926518c80825baf216b8f82f55479090_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4294755cae0680f436409ab77a5bffbd3fadd38505c6d2a5d5032bc84fb8474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4294755cae0680f436409ab77a5bffbd3fadd38505c6d2a5d5032bc84fb8474->enter($__internal_d4294755cae0680f436409ab77a5bffbd3fadd38505c6d2a5d5032bc84fb8474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4f71ed403e7b07f9f74d3557b51418b5eefcccb353eae72cd6a0218b1799d5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f71ed403e7b07f9f74d3557b51418b5eefcccb353eae72cd6a0218b1799d5ec->enter($__internal_4f71ed403e7b07f9f74d3557b51418b5eefcccb353eae72cd6a0218b1799d5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4f71ed403e7b07f9f74d3557b51418b5eefcccb353eae72cd6a0218b1799d5ec->leave($__internal_4f71ed403e7b07f9f74d3557b51418b5eefcccb353eae72cd6a0218b1799d5ec_prof);

        
        $__internal_d4294755cae0680f436409ab77a5bffbd3fadd38505c6d2a5d5032bc84fb8474->leave($__internal_d4294755cae0680f436409ab77a5bffbd3fadd38505c6d2a5d5032bc84fb8474_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
