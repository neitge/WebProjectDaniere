<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e50e89ffe675fdeb199d22a64eb9ee7f8c2a5ef0ecbb489458430e0b67d74ccb extends Twig_Template
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
        $__internal_e961c1fedf81891869e13ee9f5c2a1843195c9df3ed8ca26b7c5397a4f45a64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e961c1fedf81891869e13ee9f5c2a1843195c9df3ed8ca26b7c5397a4f45a64a->enter($__internal_e961c1fedf81891869e13ee9f5c2a1843195c9df3ed8ca26b7c5397a4f45a64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c1ece87573d5a262398e174b431122ca51bda529af7647046fcd73d40a939f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ece87573d5a262398e174b431122ca51bda529af7647046fcd73d40a939f8e->enter($__internal_c1ece87573d5a262398e174b431122ca51bda529af7647046fcd73d40a939f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e961c1fedf81891869e13ee9f5c2a1843195c9df3ed8ca26b7c5397a4f45a64a->leave($__internal_e961c1fedf81891869e13ee9f5c2a1843195c9df3ed8ca26b7c5397a4f45a64a_prof);

        
        $__internal_c1ece87573d5a262398e174b431122ca51bda529af7647046fcd73d40a939f8e->leave($__internal_c1ece87573d5a262398e174b431122ca51bda529af7647046fcd73d40a939f8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
