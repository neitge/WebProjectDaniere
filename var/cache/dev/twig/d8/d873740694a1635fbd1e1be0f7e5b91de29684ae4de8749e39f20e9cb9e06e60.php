<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_92831d4470acc03589f641d1084c9a5ed6caf834ae7038dfb2a16299d317f7e1 extends Twig_Template
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
        $__internal_e5b1c036e43411b97aebbcc27d15c53764a58f3c115755789e1f00ae126165db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b1c036e43411b97aebbcc27d15c53764a58f3c115755789e1f00ae126165db->enter($__internal_e5b1c036e43411b97aebbcc27d15c53764a58f3c115755789e1f00ae126165db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8d85b16dd7ac1f59acc302d7bc2ae2bc9d2e07a9b91fb72a47a1033a7f93d8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d85b16dd7ac1f59acc302d7bc2ae2bc9d2e07a9b91fb72a47a1033a7f93d8a8->enter($__internal_8d85b16dd7ac1f59acc302d7bc2ae2bc9d2e07a9b91fb72a47a1033a7f93d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e5b1c036e43411b97aebbcc27d15c53764a58f3c115755789e1f00ae126165db->leave($__internal_e5b1c036e43411b97aebbcc27d15c53764a58f3c115755789e1f00ae126165db_prof);

        
        $__internal_8d85b16dd7ac1f59acc302d7bc2ae2bc9d2e07a9b91fb72a47a1033a7f93d8a8->leave($__internal_8d85b16dd7ac1f59acc302d7bc2ae2bc9d2e07a9b91fb72a47a1033a7f93d8a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
