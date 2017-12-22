<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3096a43cef1ce004f01c5e29d7da068086df6a2e90f52d15664103c248ee1a7d extends Twig_Template
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
        $__internal_e7938f639794e11781183459201c6a895a1a6bda60d2fc374f3d1bfc24218027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7938f639794e11781183459201c6a895a1a6bda60d2fc374f3d1bfc24218027->enter($__internal_e7938f639794e11781183459201c6a895a1a6bda60d2fc374f3d1bfc24218027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_89fab67fc7aa1ce11dc808ae3e8a8283a78cd8d266757300e330e726ec00c662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fab67fc7aa1ce11dc808ae3e8a8283a78cd8d266757300e330e726ec00c662->enter($__internal_89fab67fc7aa1ce11dc808ae3e8a8283a78cd8d266757300e330e726ec00c662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7938f639794e11781183459201c6a895a1a6bda60d2fc374f3d1bfc24218027->leave($__internal_e7938f639794e11781183459201c6a895a1a6bda60d2fc374f3d1bfc24218027_prof);

        
        $__internal_89fab67fc7aa1ce11dc808ae3e8a8283a78cd8d266757300e330e726ec00c662->leave($__internal_89fab67fc7aa1ce11dc808ae3e8a8283a78cd8d266757300e330e726ec00c662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
