<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2a53bc253a0b4816d6894cf7a3fb288f9368a4ad6f2639f7d55629ac07c7171e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9b407ec142070abdec1309e0b3c863dbac31c64b12eac2815cd068b0391f7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b407ec142070abdec1309e0b3c863dbac31c64b12eac2815cd068b0391f7d0->enter($__internal_c9b407ec142070abdec1309e0b3c863dbac31c64b12eac2815cd068b0391f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_dc12af8c9b26a3f142a9fe483a805051923a2c6b491c77ec34b6429a3adb6e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc12af8c9b26a3f142a9fe483a805051923a2c6b491c77ec34b6429a3adb6e89->enter($__internal_dc12af8c9b26a3f142a9fe483a805051923a2c6b491c77ec34b6429a3adb6e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c9b407ec142070abdec1309e0b3c863dbac31c64b12eac2815cd068b0391f7d0->leave($__internal_c9b407ec142070abdec1309e0b3c863dbac31c64b12eac2815cd068b0391f7d0_prof);

        
        $__internal_dc12af8c9b26a3f142a9fe483a805051923a2c6b491c77ec34b6429a3adb6e89->leave($__internal_dc12af8c9b26a3f142a9fe483a805051923a2c6b491c77ec34b6429a3adb6e89_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_33402e63ad521b05e97e5af2871a4ee990a6981c35e8843eb413fa86f2349461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33402e63ad521b05e97e5af2871a4ee990a6981c35e8843eb413fa86f2349461->enter($__internal_33402e63ad521b05e97e5af2871a4ee990a6981c35e8843eb413fa86f2349461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a1a470bdd13d6579be894d7b13cebf7511d85c3c92ff654f91725611c4ff2fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a470bdd13d6579be894d7b13cebf7511d85c3c92ff654f91725611c4ff2fb1->enter($__internal_a1a470bdd13d6579be894d7b13cebf7511d85c3c92ff654f91725611c4ff2fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a1a470bdd13d6579be894d7b13cebf7511d85c3c92ff654f91725611c4ff2fb1->leave($__internal_a1a470bdd13d6579be894d7b13cebf7511d85c3c92ff654f91725611c4ff2fb1_prof);

        
        $__internal_33402e63ad521b05e97e5af2871a4ee990a6981c35e8843eb413fa86f2349461->leave($__internal_33402e63ad521b05e97e5af2871a4ee990a6981c35e8843eb413fa86f2349461_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
