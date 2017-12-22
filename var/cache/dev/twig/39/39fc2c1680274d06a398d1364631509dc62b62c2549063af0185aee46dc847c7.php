<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_20425861f47132adc257ebf493848d506df7675517d99887e869f5e631a2ba8e extends Twig_Template
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
        $__internal_c55d6753d202becc88f9ca2c0051e8147eff090eca5e9cc34f59c2f7b2684066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55d6753d202becc88f9ca2c0051e8147eff090eca5e9cc34f59c2f7b2684066->enter($__internal_c55d6753d202becc88f9ca2c0051e8147eff090eca5e9cc34f59c2f7b2684066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_551eaa023856f63e0eeba24a03a0a688fefa65b9e75225d21208efa8cf4f00e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551eaa023856f63e0eeba24a03a0a688fefa65b9e75225d21208efa8cf4f00e7->enter($__internal_551eaa023856f63e0eeba24a03a0a688fefa65b9e75225d21208efa8cf4f00e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_c55d6753d202becc88f9ca2c0051e8147eff090eca5e9cc34f59c2f7b2684066->leave($__internal_c55d6753d202becc88f9ca2c0051e8147eff090eca5e9cc34f59c2f7b2684066_prof);

        
        $__internal_551eaa023856f63e0eeba24a03a0a688fefa65b9e75225d21208efa8cf4f00e7->leave($__internal_551eaa023856f63e0eeba24a03a0a688fefa65b9e75225d21208efa8cf4f00e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
