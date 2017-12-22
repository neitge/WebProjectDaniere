<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_f4b74ea55c5b95c416ff98c79aa67a9d3c1ecd0b51455513f40febae5658f615 extends Twig_Template
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
        $__internal_8a5130ef77b7ada7ed6874a9bc2db240553f97fb5b4f5186832ef8e1ce0dcb8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5130ef77b7ada7ed6874a9bc2db240553f97fb5b4f5186832ef8e1ce0dcb8a->enter($__internal_8a5130ef77b7ada7ed6874a9bc2db240553f97fb5b4f5186832ef8e1ce0dcb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_3c1a00e4334c01c51ce6e9c69b81c80403cd7c27d41d9994dfbe396ea74be8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1a00e4334c01c51ce6e9c69b81c80403cd7c27d41d9994dfbe396ea74be8f3->enter($__internal_3c1a00e4334c01c51ce6e9c69b81c80403cd7c27d41d9994dfbe396ea74be8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_8a5130ef77b7ada7ed6874a9bc2db240553f97fb5b4f5186832ef8e1ce0dcb8a->leave($__internal_8a5130ef77b7ada7ed6874a9bc2db240553f97fb5b4f5186832ef8e1ce0dcb8a_prof);

        
        $__internal_3c1a00e4334c01c51ce6e9c69b81c80403cd7c27d41d9994dfbe396ea74be8f3->leave($__internal_3c1a00e4334c01c51ce6e9c69b81c80403cd7c27d41d9994dfbe396ea74be8f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
