<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b3c721221b590bc6ff7906c3f841c758d56c085b6fa2b9f997e202488bda381d extends Twig_Template
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
        $__internal_169f683065ac6599c614f82ea007221e0ae9fdd4a94a29c63ff47903d8197536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169f683065ac6599c614f82ea007221e0ae9fdd4a94a29c63ff47903d8197536->enter($__internal_169f683065ac6599c614f82ea007221e0ae9fdd4a94a29c63ff47903d8197536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_871d1321e84ef9d321ecaf6d24f1b0677737caa85db34da799f552f340a66670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871d1321e84ef9d321ecaf6d24f1b0677737caa85db34da799f552f340a66670->enter($__internal_871d1321e84ef9d321ecaf6d24f1b0677737caa85db34da799f552f340a66670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_169f683065ac6599c614f82ea007221e0ae9fdd4a94a29c63ff47903d8197536->leave($__internal_169f683065ac6599c614f82ea007221e0ae9fdd4a94a29c63ff47903d8197536_prof);

        
        $__internal_871d1321e84ef9d321ecaf6d24f1b0677737caa85db34da799f552f340a66670->leave($__internal_871d1321e84ef9d321ecaf6d24f1b0677737caa85db34da799f552f340a66670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
