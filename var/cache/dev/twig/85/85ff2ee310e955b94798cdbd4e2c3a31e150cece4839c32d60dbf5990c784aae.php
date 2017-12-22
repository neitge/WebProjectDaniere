<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b5834edb95961d1cf1dbffc82ab474d9c7e33d60330ccf53ebb13e9ea0f653f7 extends Twig_Template
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
        $__internal_cee2e720ced5cef0cf3bf6981f45befa74150bdd59880a98447f39623737959b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee2e720ced5cef0cf3bf6981f45befa74150bdd59880a98447f39623737959b->enter($__internal_cee2e720ced5cef0cf3bf6981f45befa74150bdd59880a98447f39623737959b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9cd8eefefe83c3e02fddbc51e967434313295b6a4811fec2e4bc2933aaad310a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd8eefefe83c3e02fddbc51e967434313295b6a4811fec2e4bc2933aaad310a->enter($__internal_9cd8eefefe83c3e02fddbc51e967434313295b6a4811fec2e4bc2933aaad310a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cee2e720ced5cef0cf3bf6981f45befa74150bdd59880a98447f39623737959b->leave($__internal_cee2e720ced5cef0cf3bf6981f45befa74150bdd59880a98447f39623737959b_prof);

        
        $__internal_9cd8eefefe83c3e02fddbc51e967434313295b6a4811fec2e4bc2933aaad310a->leave($__internal_9cd8eefefe83c3e02fddbc51e967434313295b6a4811fec2e4bc2933aaad310a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
