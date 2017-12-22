<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ebd7f9baf3254a5e3756a5891181f29cac2f19c956211fe3dacb9ff304e66210 extends Twig_Template
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
        $__internal_b74b2754d245258a2c63fe324bba9040c5945fc0e30503f96f7bfdf39a25224f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74b2754d245258a2c63fe324bba9040c5945fc0e30503f96f7bfdf39a25224f->enter($__internal_b74b2754d245258a2c63fe324bba9040c5945fc0e30503f96f7bfdf39a25224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e5ebc11d593a3dd20586c3a43232705d82099c8c65b3d18cd568f884e0d320c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ebc11d593a3dd20586c3a43232705d82099c8c65b3d18cd568f884e0d320c3->enter($__internal_e5ebc11d593a3dd20586c3a43232705d82099c8c65b3d18cd568f884e0d320c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b74b2754d245258a2c63fe324bba9040c5945fc0e30503f96f7bfdf39a25224f->leave($__internal_b74b2754d245258a2c63fe324bba9040c5945fc0e30503f96f7bfdf39a25224f_prof);

        
        $__internal_e5ebc11d593a3dd20586c3a43232705d82099c8c65b3d18cd568f884e0d320c3->leave($__internal_e5ebc11d593a3dd20586c3a43232705d82099c8c65b3d18cd568f884e0d320c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
