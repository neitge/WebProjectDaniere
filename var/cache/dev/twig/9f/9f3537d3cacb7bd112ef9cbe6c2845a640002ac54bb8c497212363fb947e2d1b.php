<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_104c38a36f4f796344ca0a3265044b2535031c3e2a1cbe2b43c6a79b54c9a026 extends Twig_Template
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
        $__internal_b5fda62b568c7191859c63550a1a4adcf68d7e783cb30edecd9469431c6431fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fda62b568c7191859c63550a1a4adcf68d7e783cb30edecd9469431c6431fa->enter($__internal_b5fda62b568c7191859c63550a1a4adcf68d7e783cb30edecd9469431c6431fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3d5c3a16a6117d0afc2c7daaf91172cd71c5be92bb9884aca8296aa24a638dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5c3a16a6117d0afc2c7daaf91172cd71c5be92bb9884aca8296aa24a638dd4->enter($__internal_3d5c3a16a6117d0afc2c7daaf91172cd71c5be92bb9884aca8296aa24a638dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b5fda62b568c7191859c63550a1a4adcf68d7e783cb30edecd9469431c6431fa->leave($__internal_b5fda62b568c7191859c63550a1a4adcf68d7e783cb30edecd9469431c6431fa_prof);

        
        $__internal_3d5c3a16a6117d0afc2c7daaf91172cd71c5be92bb9884aca8296aa24a638dd4->leave($__internal_3d5c3a16a6117d0afc2c7daaf91172cd71c5be92bb9884aca8296aa24a638dd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
