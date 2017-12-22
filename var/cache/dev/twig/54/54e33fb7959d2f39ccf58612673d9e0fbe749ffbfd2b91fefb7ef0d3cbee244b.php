<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_00293cc11c953e193e29aeb668d5fb9ee10a13c52a61340590faf6e503a6958f extends Twig_Template
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
        $__internal_5d5d271506f2a1f8ff10b4220be63c3b1df3bcab62d010f53c08cf9740a15b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5d271506f2a1f8ff10b4220be63c3b1df3bcab62d010f53c08cf9740a15b22->enter($__internal_5d5d271506f2a1f8ff10b4220be63c3b1df3bcab62d010f53c08cf9740a15b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_620857760a5efaddc0a674153794b26db87eb29c4b0773064c2c17f86abbc6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620857760a5efaddc0a674153794b26db87eb29c4b0773064c2c17f86abbc6ff->enter($__internal_620857760a5efaddc0a674153794b26db87eb29c4b0773064c2c17f86abbc6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5d5d271506f2a1f8ff10b4220be63c3b1df3bcab62d010f53c08cf9740a15b22->leave($__internal_5d5d271506f2a1f8ff10b4220be63c3b1df3bcab62d010f53c08cf9740a15b22_prof);

        
        $__internal_620857760a5efaddc0a674153794b26db87eb29c4b0773064c2c17f86abbc6ff->leave($__internal_620857760a5efaddc0a674153794b26db87eb29c4b0773064c2c17f86abbc6ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
