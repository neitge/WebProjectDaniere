<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95712cb5621cc7e9aadc0750b7264ba081c1b2e755c07cf5ac99faf4eb44463b extends Twig_Template
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
        $__internal_ceb7f2c7244676cc9f130ff7e279a54d1b80078e3a0983e3e924a49c754a4986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb7f2c7244676cc9f130ff7e279a54d1b80078e3a0983e3e924a49c754a4986->enter($__internal_ceb7f2c7244676cc9f130ff7e279a54d1b80078e3a0983e3e924a49c754a4986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_aac6278e930f7c4a274811d42c570ae2f338ed574f887df758a2be0553eeb387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac6278e930f7c4a274811d42c570ae2f338ed574f887df758a2be0553eeb387->enter($__internal_aac6278e930f7c4a274811d42c570ae2f338ed574f887df758a2be0553eeb387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ceb7f2c7244676cc9f130ff7e279a54d1b80078e3a0983e3e924a49c754a4986->leave($__internal_ceb7f2c7244676cc9f130ff7e279a54d1b80078e3a0983e3e924a49c754a4986_prof);

        
        $__internal_aac6278e930f7c4a274811d42c570ae2f338ed574f887df758a2be0553eeb387->leave($__internal_aac6278e930f7c4a274811d42c570ae2f338ed574f887df758a2be0553eeb387_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
