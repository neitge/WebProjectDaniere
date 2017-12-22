<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a6a8405f86b69c8a1dc44e0b590d73e8d089748347fda5733b42b530be50aa51 extends Twig_Template
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
        $__internal_3500976b81531120c8b84bd2b0c90e8e80e23576a5a1a766e35caade6894d4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3500976b81531120c8b84bd2b0c90e8e80e23576a5a1a766e35caade6894d4d6->enter($__internal_3500976b81531120c8b84bd2b0c90e8e80e23576a5a1a766e35caade6894d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_6d2cedb905dc94afd9aa2cbad04711278f8984b7128ed29008e01be5a7f3ccb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2cedb905dc94afd9aa2cbad04711278f8984b7128ed29008e01be5a7f3ccb6->enter($__internal_6d2cedb905dc94afd9aa2cbad04711278f8984b7128ed29008e01be5a7f3ccb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3500976b81531120c8b84bd2b0c90e8e80e23576a5a1a766e35caade6894d4d6->leave($__internal_3500976b81531120c8b84bd2b0c90e8e80e23576a5a1a766e35caade6894d4d6_prof);

        
        $__internal_6d2cedb905dc94afd9aa2cbad04711278f8984b7128ed29008e01be5a7f3ccb6->leave($__internal_6d2cedb905dc94afd9aa2cbad04711278f8984b7128ed29008e01be5a7f3ccb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
