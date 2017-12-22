<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d428abc728fc7632698bbf226d2fdc4b0ffe50afa32859bbdbe7dfa08e7b3e8d extends Twig_Template
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
        $__internal_5b531c7e06017a3b532471adcb7cd4efc543beec80e0682708af7b140ce1504d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b531c7e06017a3b532471adcb7cd4efc543beec80e0682708af7b140ce1504d->enter($__internal_5b531c7e06017a3b532471adcb7cd4efc543beec80e0682708af7b140ce1504d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e6721fc6c2512a90ee0e42ca96416e8c767d15a403fe6a9a2a8836136eb26999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6721fc6c2512a90ee0e42ca96416e8c767d15a403fe6a9a2a8836136eb26999->enter($__internal_e6721fc6c2512a90ee0e42ca96416e8c767d15a403fe6a9a2a8836136eb26999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5b531c7e06017a3b532471adcb7cd4efc543beec80e0682708af7b140ce1504d->leave($__internal_5b531c7e06017a3b532471adcb7cd4efc543beec80e0682708af7b140ce1504d_prof);

        
        $__internal_e6721fc6c2512a90ee0e42ca96416e8c767d15a403fe6a9a2a8836136eb26999->leave($__internal_e6721fc6c2512a90ee0e42ca96416e8c767d15a403fe6a9a2a8836136eb26999_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
