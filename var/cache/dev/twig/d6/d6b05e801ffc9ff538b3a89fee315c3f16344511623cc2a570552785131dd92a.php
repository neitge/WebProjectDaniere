<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be4c7fa34522bf3f1695469a17d074c8b47b497835287653ed69e68a52e2cad2 extends Twig_Template
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
        $__internal_0e5006f39a825d79c57015d872506593ae8de43222e2efb5ed9c0abac8570e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5006f39a825d79c57015d872506593ae8de43222e2efb5ed9c0abac8570e87->enter($__internal_0e5006f39a825d79c57015d872506593ae8de43222e2efb5ed9c0abac8570e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a1ca699b4fcaa9d08f388362ec1354c3072c6ef84c7b508709fc488b41818d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ca699b4fcaa9d08f388362ec1354c3072c6ef84c7b508709fc488b41818d92->enter($__internal_a1ca699b4fcaa9d08f388362ec1354c3072c6ef84c7b508709fc488b41818d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0e5006f39a825d79c57015d872506593ae8de43222e2efb5ed9c0abac8570e87->leave($__internal_0e5006f39a825d79c57015d872506593ae8de43222e2efb5ed9c0abac8570e87_prof);

        
        $__internal_a1ca699b4fcaa9d08f388362ec1354c3072c6ef84c7b508709fc488b41818d92->leave($__internal_a1ca699b4fcaa9d08f388362ec1354c3072c6ef84c7b508709fc488b41818d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
