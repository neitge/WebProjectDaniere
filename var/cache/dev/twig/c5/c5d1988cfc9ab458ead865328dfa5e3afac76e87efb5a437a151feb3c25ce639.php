<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4970a05da6c8ec585c2cccd699a26d76b4d348bb4f2715acf4fe284f570839ca extends Twig_Template
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
        $__internal_d53902b321ceec05d6347d67181bcb4d6ca5fdc1aff470644002d7ad3df650a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53902b321ceec05d6347d67181bcb4d6ca5fdc1aff470644002d7ad3df650a5->enter($__internal_d53902b321ceec05d6347d67181bcb4d6ca5fdc1aff470644002d7ad3df650a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e85a7a8708c0273accaf52479f0694629f05187fc46d57da84de06e9243576eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e85a7a8708c0273accaf52479f0694629f05187fc46d57da84de06e9243576eb->enter($__internal_e85a7a8708c0273accaf52479f0694629f05187fc46d57da84de06e9243576eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d53902b321ceec05d6347d67181bcb4d6ca5fdc1aff470644002d7ad3df650a5->leave($__internal_d53902b321ceec05d6347d67181bcb4d6ca5fdc1aff470644002d7ad3df650a5_prof);

        
        $__internal_e85a7a8708c0273accaf52479f0694629f05187fc46d57da84de06e9243576eb->leave($__internal_e85a7a8708c0273accaf52479f0694629f05187fc46d57da84de06e9243576eb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eed4862e1b2ba688dd6b1fc4e42b7378a542d54a7d9c78a925f2295b322e4be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed4862e1b2ba688dd6b1fc4e42b7378a542d54a7d9c78a925f2295b322e4be9->enter($__internal_eed4862e1b2ba688dd6b1fc4e42b7378a542d54a7d9c78a925f2295b322e4be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5234463b28a7edf3fbf41efc45d5698bd64c43691d20fccbab4f5382f8d2a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5234463b28a7edf3fbf41efc45d5698bd64c43691d20fccbab4f5382f8d2a41->enter($__internal_d5234463b28a7edf3fbf41efc45d5698bd64c43691d20fccbab4f5382f8d2a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d5234463b28a7edf3fbf41efc45d5698bd64c43691d20fccbab4f5382f8d2a41->leave($__internal_d5234463b28a7edf3fbf41efc45d5698bd64c43691d20fccbab4f5382f8d2a41_prof);

        
        $__internal_eed4862e1b2ba688dd6b1fc4e42b7378a542d54a7d9c78a925f2295b322e4be9->leave($__internal_eed4862e1b2ba688dd6b1fc4e42b7378a542d54a7d9c78a925f2295b322e4be9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
