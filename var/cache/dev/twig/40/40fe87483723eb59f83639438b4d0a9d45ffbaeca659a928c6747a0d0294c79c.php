<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c4a50551a4b7046045ec4d969f5895ea1b3ad16fc3baf7ccafba6ba395ed6f7d extends Twig_Template
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
        $__internal_b03a43337b2cdbd0beddf0b01f7a44087b2044c3ce66edc8f38cea5ecfb21fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03a43337b2cdbd0beddf0b01f7a44087b2044c3ce66edc8f38cea5ecfb21fb0->enter($__internal_b03a43337b2cdbd0beddf0b01f7a44087b2044c3ce66edc8f38cea5ecfb21fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a97b46a2d43bf7f10884e5d986bc934f0def3388e793ad8966ee65a30874b21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97b46a2d43bf7f10884e5d986bc934f0def3388e793ad8966ee65a30874b21e->enter($__internal_a97b46a2d43bf7f10884e5d986bc934f0def3388e793ad8966ee65a30874b21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b03a43337b2cdbd0beddf0b01f7a44087b2044c3ce66edc8f38cea5ecfb21fb0->leave($__internal_b03a43337b2cdbd0beddf0b01f7a44087b2044c3ce66edc8f38cea5ecfb21fb0_prof);

        
        $__internal_a97b46a2d43bf7f10884e5d986bc934f0def3388e793ad8966ee65a30874b21e->leave($__internal_a97b46a2d43bf7f10884e5d986bc934f0def3388e793ad8966ee65a30874b21e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
