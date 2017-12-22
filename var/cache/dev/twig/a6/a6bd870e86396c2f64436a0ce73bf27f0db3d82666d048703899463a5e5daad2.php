<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e880b5cd020890817ddd9a392ba8681e5d2cf6798d15f975e0ee63a394d72a23 extends Twig_Template
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
        $__internal_0020dcbf2866ed825b8fdd9fe37518cef20bd1261b02f6b577774a81266e848c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0020dcbf2866ed825b8fdd9fe37518cef20bd1261b02f6b577774a81266e848c->enter($__internal_0020dcbf2866ed825b8fdd9fe37518cef20bd1261b02f6b577774a81266e848c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_19792d6689a55d85a212a82a4c501e3083e9f522ba67fb79c05d4aeef502e07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19792d6689a55d85a212a82a4c501e3083e9f522ba67fb79c05d4aeef502e07d->enter($__internal_19792d6689a55d85a212a82a4c501e3083e9f522ba67fb79c05d4aeef502e07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0020dcbf2866ed825b8fdd9fe37518cef20bd1261b02f6b577774a81266e848c->leave($__internal_0020dcbf2866ed825b8fdd9fe37518cef20bd1261b02f6b577774a81266e848c_prof);

        
        $__internal_19792d6689a55d85a212a82a4c501e3083e9f522ba67fb79c05d4aeef502e07d->leave($__internal_19792d6689a55d85a212a82a4c501e3083e9f522ba67fb79c05d4aeef502e07d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
