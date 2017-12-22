<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_15cac7b37526b2c0b23674c767ddea7669c8a2217d38e99f500b014ea0bffba2 extends Twig_Template
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
        $__internal_95efc1e42885016d61690a6b70c09feaaa9fb9e511b4b3f79c6bb9d9fb019b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95efc1e42885016d61690a6b70c09feaaa9fb9e511b4b3f79c6bb9d9fb019b5b->enter($__internal_95efc1e42885016d61690a6b70c09feaaa9fb9e511b4b3f79c6bb9d9fb019b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_70ed22654c7fbb3e307ae06b79d5c7190f650a17d2549ce033c03ab02c58b680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ed22654c7fbb3e307ae06b79d5c7190f650a17d2549ce033c03ab02c58b680->enter($__internal_70ed22654c7fbb3e307ae06b79d5c7190f650a17d2549ce033c03ab02c58b680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_95efc1e42885016d61690a6b70c09feaaa9fb9e511b4b3f79c6bb9d9fb019b5b->leave($__internal_95efc1e42885016d61690a6b70c09feaaa9fb9e511b4b3f79c6bb9d9fb019b5b_prof);

        
        $__internal_70ed22654c7fbb3e307ae06b79d5c7190f650a17d2549ce033c03ab02c58b680->leave($__internal_70ed22654c7fbb3e307ae06b79d5c7190f650a17d2549ce033c03ab02c58b680_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
