<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6f31eb275bcfe2ff284ee4ce5a897064070e559597f9dbd071c2fb7b99842baf extends Twig_Template
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
        $__internal_275fdb08ac58c39070ee95a424e3f475818552cb380cf52d35ef8f4de4866367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275fdb08ac58c39070ee95a424e3f475818552cb380cf52d35ef8f4de4866367->enter($__internal_275fdb08ac58c39070ee95a424e3f475818552cb380cf52d35ef8f4de4866367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b97e02eb58f73e219dc1229c372cbc0baae4d8a4f72b0a48a2ec4a433181056c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97e02eb58f73e219dc1229c372cbc0baae4d8a4f72b0a48a2ec4a433181056c->enter($__internal_b97e02eb58f73e219dc1229c372cbc0baae4d8a4f72b0a48a2ec4a433181056c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_275fdb08ac58c39070ee95a424e3f475818552cb380cf52d35ef8f4de4866367->leave($__internal_275fdb08ac58c39070ee95a424e3f475818552cb380cf52d35ef8f4de4866367_prof);

        
        $__internal_b97e02eb58f73e219dc1229c372cbc0baae4d8a4f72b0a48a2ec4a433181056c->leave($__internal_b97e02eb58f73e219dc1229c372cbc0baae4d8a4f72b0a48a2ec4a433181056c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
