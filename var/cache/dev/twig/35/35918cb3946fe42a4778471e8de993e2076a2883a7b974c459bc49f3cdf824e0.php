<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8dc19400dffc6207b2952c9d3259751d3466efed668a62b0dc7966d48142f2d1 extends Twig_Template
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
        $__internal_de247a85c003aec224ced5396e9f7d6c0d962adad1d373a141e992cc9334e529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de247a85c003aec224ced5396e9f7d6c0d962adad1d373a141e992cc9334e529->enter($__internal_de247a85c003aec224ced5396e9f7d6c0d962adad1d373a141e992cc9334e529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c099f481d02ac6b3fd0c02162b62aff40ced547fffe9ed117dd3aac9167db4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c099f481d02ac6b3fd0c02162b62aff40ced547fffe9ed117dd3aac9167db4f0->enter($__internal_c099f481d02ac6b3fd0c02162b62aff40ced547fffe9ed117dd3aac9167db4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_de247a85c003aec224ced5396e9f7d6c0d962adad1d373a141e992cc9334e529->leave($__internal_de247a85c003aec224ced5396e9f7d6c0d962adad1d373a141e992cc9334e529_prof);

        
        $__internal_c099f481d02ac6b3fd0c02162b62aff40ced547fffe9ed117dd3aac9167db4f0->leave($__internal_c099f481d02ac6b3fd0c02162b62aff40ced547fffe9ed117dd3aac9167db4f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
