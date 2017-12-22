<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_458235b318b33071a538ce04e223129efa512954b323dab0b3a8914ad9e126ab extends Twig_Template
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
        $__internal_e5640cc70a1bd5e5f907da64c6b2081707518c0fbaa2e9d43032b1347844f231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5640cc70a1bd5e5f907da64c6b2081707518c0fbaa2e9d43032b1347844f231->enter($__internal_e5640cc70a1bd5e5f907da64c6b2081707518c0fbaa2e9d43032b1347844f231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_783cee5eb3208e9110381c1cc7e0bc1511c7659696c3cac2a9d08cbed4e94fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783cee5eb3208e9110381c1cc7e0bc1511c7659696c3cac2a9d08cbed4e94fa4->enter($__internal_783cee5eb3208e9110381c1cc7e0bc1511c7659696c3cac2a9d08cbed4e94fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e5640cc70a1bd5e5f907da64c6b2081707518c0fbaa2e9d43032b1347844f231->leave($__internal_e5640cc70a1bd5e5f907da64c6b2081707518c0fbaa2e9d43032b1347844f231_prof);

        
        $__internal_783cee5eb3208e9110381c1cc7e0bc1511c7659696c3cac2a9d08cbed4e94fa4->leave($__internal_783cee5eb3208e9110381c1cc7e0bc1511c7659696c3cac2a9d08cbed4e94fa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
