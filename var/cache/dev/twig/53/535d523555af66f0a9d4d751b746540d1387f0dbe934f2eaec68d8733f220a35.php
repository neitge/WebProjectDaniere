<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3e74ffd0525fc3233db6002dbd32a6402605dad1b791f8bc0450f88f3fba53b7 extends Twig_Template
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
        $__internal_dd73ec4eab72f0504f4aa9b0350c24024c76ea1290fe26db5cb399cc3c4f93cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd73ec4eab72f0504f4aa9b0350c24024c76ea1290fe26db5cb399cc3c4f93cc->enter($__internal_dd73ec4eab72f0504f4aa9b0350c24024c76ea1290fe26db5cb399cc3c4f93cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6938fa756877b836fbea910ed584456c594365f1d3156babe1663124b8cdb433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6938fa756877b836fbea910ed584456c594365f1d3156babe1663124b8cdb433->enter($__internal_6938fa756877b836fbea910ed584456c594365f1d3156babe1663124b8cdb433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dd73ec4eab72f0504f4aa9b0350c24024c76ea1290fe26db5cb399cc3c4f93cc->leave($__internal_dd73ec4eab72f0504f4aa9b0350c24024c76ea1290fe26db5cb399cc3c4f93cc_prof);

        
        $__internal_6938fa756877b836fbea910ed584456c594365f1d3156babe1663124b8cdb433->leave($__internal_6938fa756877b836fbea910ed584456c594365f1d3156babe1663124b8cdb433_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
