<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4f0ad35677d1e5cbfc45094a81bbae495ca5b05e96e822464f68931d35231ec0 extends Twig_Template
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
        $__internal_85baaca4539ebf04934cbdc7c35f86e80f7890a49e2883a6f3753669ee558b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85baaca4539ebf04934cbdc7c35f86e80f7890a49e2883a6f3753669ee558b13->enter($__internal_85baaca4539ebf04934cbdc7c35f86e80f7890a49e2883a6f3753669ee558b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6d6cbc668d1e8953d76604c7af568622390000dab12a8aa862babce166b39e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6cbc668d1e8953d76604c7af568622390000dab12a8aa862babce166b39e1c->enter($__internal_6d6cbc668d1e8953d76604c7af568622390000dab12a8aa862babce166b39e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_85baaca4539ebf04934cbdc7c35f86e80f7890a49e2883a6f3753669ee558b13->leave($__internal_85baaca4539ebf04934cbdc7c35f86e80f7890a49e2883a6f3753669ee558b13_prof);

        
        $__internal_6d6cbc668d1e8953d76604c7af568622390000dab12a8aa862babce166b39e1c->leave($__internal_6d6cbc668d1e8953d76604c7af568622390000dab12a8aa862babce166b39e1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
