<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a80ea09f0d34d33f50c2b8156eca3915629f378eba4d6944cc29d814e2c21153 extends Twig_Template
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
        $__internal_a29477a1867e4b86880617146337a5e900ad2f1754a0ef92efd9133940d73c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29477a1867e4b86880617146337a5e900ad2f1754a0ef92efd9133940d73c3e->enter($__internal_a29477a1867e4b86880617146337a5e900ad2f1754a0ef92efd9133940d73c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0065d91665ad553d6d8cd1fda1be2c50f6c119087b2e54979056f14e3075392f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0065d91665ad553d6d8cd1fda1be2c50f6c119087b2e54979056f14e3075392f->enter($__internal_0065d91665ad553d6d8cd1fda1be2c50f6c119087b2e54979056f14e3075392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a29477a1867e4b86880617146337a5e900ad2f1754a0ef92efd9133940d73c3e->leave($__internal_a29477a1867e4b86880617146337a5e900ad2f1754a0ef92efd9133940d73c3e_prof);

        
        $__internal_0065d91665ad553d6d8cd1fda1be2c50f6c119087b2e54979056f14e3075392f->leave($__internal_0065d91665ad553d6d8cd1fda1be2c50f6c119087b2e54979056f14e3075392f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
