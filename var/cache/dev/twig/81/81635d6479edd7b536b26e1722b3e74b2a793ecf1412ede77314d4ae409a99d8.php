<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_34ae3fe40e13f0d75d580d9e4a2cfd8f48fcc702f37c327e35635305b5750c0f extends Twig_Template
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
        $__internal_9277abd054706aa168a426b8d2987e55be122429f3decf47a3cf4be7773754e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9277abd054706aa168a426b8d2987e55be122429f3decf47a3cf4be7773754e9->enter($__internal_9277abd054706aa168a426b8d2987e55be122429f3decf47a3cf4be7773754e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7dc35a53125029307b479795cc6ba4bc6511619e408e90fb6e4f91b9e608a3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc35a53125029307b479795cc6ba4bc6511619e408e90fb6e4f91b9e608a3ff->enter($__internal_7dc35a53125029307b479795cc6ba4bc6511619e408e90fb6e4f91b9e608a3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9277abd054706aa168a426b8d2987e55be122429f3decf47a3cf4be7773754e9->leave($__internal_9277abd054706aa168a426b8d2987e55be122429f3decf47a3cf4be7773754e9_prof);

        
        $__internal_7dc35a53125029307b479795cc6ba4bc6511619e408e90fb6e4f91b9e608a3ff->leave($__internal_7dc35a53125029307b479795cc6ba4bc6511619e408e90fb6e4f91b9e608a3ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
