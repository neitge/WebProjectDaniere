<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fce9fe72597f64b8aec2a1727605f7cdc43eee1850c98cb42a71bebb59b63336 extends Twig_Template
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
        $__internal_e2a70da1569802c5086e05ad22d31c8116dc4c25e26689222674be99c6ecbe17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a70da1569802c5086e05ad22d31c8116dc4c25e26689222674be99c6ecbe17->enter($__internal_e2a70da1569802c5086e05ad22d31c8116dc4c25e26689222674be99c6ecbe17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_82f6bc520c6605a16873fcaa6deec8df0823d1bcfe8b0a2a4ef56a651512f8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f6bc520c6605a16873fcaa6deec8df0823d1bcfe8b0a2a4ef56a651512f8df->enter($__internal_82f6bc520c6605a16873fcaa6deec8df0823d1bcfe8b0a2a4ef56a651512f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e2a70da1569802c5086e05ad22d31c8116dc4c25e26689222674be99c6ecbe17->leave($__internal_e2a70da1569802c5086e05ad22d31c8116dc4c25e26689222674be99c6ecbe17_prof);

        
        $__internal_82f6bc520c6605a16873fcaa6deec8df0823d1bcfe8b0a2a4ef56a651512f8df->leave($__internal_82f6bc520c6605a16873fcaa6deec8df0823d1bcfe8b0a2a4ef56a651512f8df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
