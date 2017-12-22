<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_072d892dc2028d8769ef8a0105d1954d01b46d8e7caf4b18670b072601f0c10b extends Twig_Template
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
        $__internal_5c99c4a366fb6cba6163c307527d5ac9afb6bb9423d92e92e4e8e48738bc7a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c99c4a366fb6cba6163c307527d5ac9afb6bb9423d92e92e4e8e48738bc7a61->enter($__internal_5c99c4a366fb6cba6163c307527d5ac9afb6bb9423d92e92e4e8e48738bc7a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_7303638245ee37d5382db1755499fb135d4c9063e6c3f88a0f2151d67e9a7a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7303638245ee37d5382db1755499fb135d4c9063e6c3f88a0f2151d67e9a7a0f->enter($__internal_7303638245ee37d5382db1755499fb135d4c9063e6c3f88a0f2151d67e9a7a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5c99c4a366fb6cba6163c307527d5ac9afb6bb9423d92e92e4e8e48738bc7a61->leave($__internal_5c99c4a366fb6cba6163c307527d5ac9afb6bb9423d92e92e4e8e48738bc7a61_prof);

        
        $__internal_7303638245ee37d5382db1755499fb135d4c9063e6c3f88a0f2151d67e9a7a0f->leave($__internal_7303638245ee37d5382db1755499fb135d4c9063e6c3f88a0f2151d67e9a7a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
