<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d7c9841e33d27822315b0d77d96384d940b2fa010c7b0c041b18b2b395210632 extends Twig_Template
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
        $__internal_c08f62a063834fb41049f6aeb0965926a19a1f750bd9a874ff18cc1765b831e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08f62a063834fb41049f6aeb0965926a19a1f750bd9a874ff18cc1765b831e6->enter($__internal_c08f62a063834fb41049f6aeb0965926a19a1f750bd9a874ff18cc1765b831e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e77771ed0912fd464c24e5c065569ee21ff1aaf6db550e7c4f5546c1d0090479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77771ed0912fd464c24e5c065569ee21ff1aaf6db550e7c4f5546c1d0090479->enter($__internal_e77771ed0912fd464c24e5c065569ee21ff1aaf6db550e7c4f5546c1d0090479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c08f62a063834fb41049f6aeb0965926a19a1f750bd9a874ff18cc1765b831e6->leave($__internal_c08f62a063834fb41049f6aeb0965926a19a1f750bd9a874ff18cc1765b831e6_prof);

        
        $__internal_e77771ed0912fd464c24e5c065569ee21ff1aaf6db550e7c4f5546c1d0090479->leave($__internal_e77771ed0912fd464c24e5c065569ee21ff1aaf6db550e7c4f5546c1d0090479_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
