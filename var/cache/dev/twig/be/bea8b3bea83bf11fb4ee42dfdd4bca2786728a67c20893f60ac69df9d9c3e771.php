<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_12578b539e9f6c1173c6256a7d2d44209590d6b3e2b2dd510ee73141041d0d3f extends Twig_Template
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
        $__internal_fa5295f43615869aa3cf29bc2354487184dc093fa222e3a9f7a443374cf80608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5295f43615869aa3cf29bc2354487184dc093fa222e3a9f7a443374cf80608->enter($__internal_fa5295f43615869aa3cf29bc2354487184dc093fa222e3a9f7a443374cf80608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8cd1de330c15d7a52272062537959556de5ae2f9551b92e03166b83cd8509fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd1de330c15d7a52272062537959556de5ae2f9551b92e03166b83cd8509fb5->enter($__internal_8cd1de330c15d7a52272062537959556de5ae2f9551b92e03166b83cd8509fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_fa5295f43615869aa3cf29bc2354487184dc093fa222e3a9f7a443374cf80608->leave($__internal_fa5295f43615869aa3cf29bc2354487184dc093fa222e3a9f7a443374cf80608_prof);

        
        $__internal_8cd1de330c15d7a52272062537959556de5ae2f9551b92e03166b83cd8509fb5->leave($__internal_8cd1de330c15d7a52272062537959556de5ae2f9551b92e03166b83cd8509fb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
