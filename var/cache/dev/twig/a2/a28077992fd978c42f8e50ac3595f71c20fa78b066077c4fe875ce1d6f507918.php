<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_113717d6c361d3729295ae0a22e6b3442cc024aad8fb94a19ef8a115a0508e4c extends Twig_Template
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
        $__internal_6ecc46d32a47c0e550bcedf82ed5f59b34ed0e9d1f623b5b6142ca2aa471a7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecc46d32a47c0e550bcedf82ed5f59b34ed0e9d1f623b5b6142ca2aa471a7e8->enter($__internal_6ecc46d32a47c0e550bcedf82ed5f59b34ed0e9d1f623b5b6142ca2aa471a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a2129bc4f9b7a87e4fb3b614ea4e2a22c1c868c65683f0d6dd5a0b0072f233b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2129bc4f9b7a87e4fb3b614ea4e2a22c1c868c65683f0d6dd5a0b0072f233b8->enter($__internal_a2129bc4f9b7a87e4fb3b614ea4e2a22c1c868c65683f0d6dd5a0b0072f233b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6ecc46d32a47c0e550bcedf82ed5f59b34ed0e9d1f623b5b6142ca2aa471a7e8->leave($__internal_6ecc46d32a47c0e550bcedf82ed5f59b34ed0e9d1f623b5b6142ca2aa471a7e8_prof);

        
        $__internal_a2129bc4f9b7a87e4fb3b614ea4e2a22c1c868c65683f0d6dd5a0b0072f233b8->leave($__internal_a2129bc4f9b7a87e4fb3b614ea4e2a22c1c868c65683f0d6dd5a0b0072f233b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
