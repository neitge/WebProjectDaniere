<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ebc4c8ff5563da45d121e1741d8a0433c353ed68cc82ceb900c5c50db721629e extends Twig_Template
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
        $__internal_45363bf9465b8cd2ce616db7f98e2b90d98750d5ddab9006a415018345e9dc4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45363bf9465b8cd2ce616db7f98e2b90d98750d5ddab9006a415018345e9dc4a->enter($__internal_45363bf9465b8cd2ce616db7f98e2b90d98750d5ddab9006a415018345e9dc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5799dc2f68e9713a6716c661c7481012f21e9dc0dc721b95e04ee10fcc1d5465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5799dc2f68e9713a6716c661c7481012f21e9dc0dc721b95e04ee10fcc1d5465->enter($__internal_5799dc2f68e9713a6716c661c7481012f21e9dc0dc721b95e04ee10fcc1d5465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_45363bf9465b8cd2ce616db7f98e2b90d98750d5ddab9006a415018345e9dc4a->leave($__internal_45363bf9465b8cd2ce616db7f98e2b90d98750d5ddab9006a415018345e9dc4a_prof);

        
        $__internal_5799dc2f68e9713a6716c661c7481012f21e9dc0dc721b95e04ee10fcc1d5465->leave($__internal_5799dc2f68e9713a6716c661c7481012f21e9dc0dc721b95e04ee10fcc1d5465_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
