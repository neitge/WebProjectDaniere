<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_089b0ddbce0f3f5a4bbfa0fbe134fcaebc31633e3d39ad91f75ae3d0de4e4967 extends Twig_Template
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
        $__internal_f668d7f2801f31662141f1e797e50400b270503a7a2548cd4845f35652bd9da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f668d7f2801f31662141f1e797e50400b270503a7a2548cd4845f35652bd9da8->enter($__internal_f668d7f2801f31662141f1e797e50400b270503a7a2548cd4845f35652bd9da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8efbd1446a5a06119137d9585f17ca3ca2f1d10a0d92d30bb0501e158212422b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efbd1446a5a06119137d9585f17ca3ca2f1d10a0d92d30bb0501e158212422b->enter($__internal_8efbd1446a5a06119137d9585f17ca3ca2f1d10a0d92d30bb0501e158212422b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f668d7f2801f31662141f1e797e50400b270503a7a2548cd4845f35652bd9da8->leave($__internal_f668d7f2801f31662141f1e797e50400b270503a7a2548cd4845f35652bd9da8_prof);

        
        $__internal_8efbd1446a5a06119137d9585f17ca3ca2f1d10a0d92d30bb0501e158212422b->leave($__internal_8efbd1446a5a06119137d9585f17ca3ca2f1d10a0d92d30bb0501e158212422b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
