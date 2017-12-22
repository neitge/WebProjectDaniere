<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_42b0b2b096f4ea4be3b49eeef62f7fff74769e679d0bca1aec10d296fe1f9ba9 extends Twig_Template
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
        $__internal_7c75ed8c068e4d4c88d3e8a85756ae34bf7f7d7f6720a7064bad6549db27f856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c75ed8c068e4d4c88d3e8a85756ae34bf7f7d7f6720a7064bad6549db27f856->enter($__internal_7c75ed8c068e4d4c88d3e8a85756ae34bf7f7d7f6720a7064bad6549db27f856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d82f9aaf72f1a53789c411762bbd58a86b9e88b4de879b49791b01eda92e6ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82f9aaf72f1a53789c411762bbd58a86b9e88b4de879b49791b01eda92e6ef5->enter($__internal_d82f9aaf72f1a53789c411762bbd58a86b9e88b4de879b49791b01eda92e6ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7c75ed8c068e4d4c88d3e8a85756ae34bf7f7d7f6720a7064bad6549db27f856->leave($__internal_7c75ed8c068e4d4c88d3e8a85756ae34bf7f7d7f6720a7064bad6549db27f856_prof);

        
        $__internal_d82f9aaf72f1a53789c411762bbd58a86b9e88b4de879b49791b01eda92e6ef5->leave($__internal_d82f9aaf72f1a53789c411762bbd58a86b9e88b4de879b49791b01eda92e6ef5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
