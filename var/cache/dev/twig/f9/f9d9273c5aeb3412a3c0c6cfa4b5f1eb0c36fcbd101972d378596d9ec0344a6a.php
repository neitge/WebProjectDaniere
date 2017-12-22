<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_91b4b33a8d56ac8295cc0d637773a2d242d2b31d62b769568e0934ddb51eb391 extends Twig_Template
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
        $__internal_062070bf8ff52909b9727b06a0c2932333b795d04854cf08fc5a0917e6f0e095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062070bf8ff52909b9727b06a0c2932333b795d04854cf08fc5a0917e6f0e095->enter($__internal_062070bf8ff52909b9727b06a0c2932333b795d04854cf08fc5a0917e6f0e095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a43fe42633f7adf75b15040fef9ebec85ca1f6bb2d40aaaacbfd61ce4edf4f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43fe42633f7adf75b15040fef9ebec85ca1f6bb2d40aaaacbfd61ce4edf4f25->enter($__internal_a43fe42633f7adf75b15040fef9ebec85ca1f6bb2d40aaaacbfd61ce4edf4f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_062070bf8ff52909b9727b06a0c2932333b795d04854cf08fc5a0917e6f0e095->leave($__internal_062070bf8ff52909b9727b06a0c2932333b795d04854cf08fc5a0917e6f0e095_prof);

        
        $__internal_a43fe42633f7adf75b15040fef9ebec85ca1f6bb2d40aaaacbfd61ce4edf4f25->leave($__internal_a43fe42633f7adf75b15040fef9ebec85ca1f6bb2d40aaaacbfd61ce4edf4f25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
