<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0a05875b8dcd1905ced758d797c16d5bd35942831022184846e48226124ee1f2 extends Twig_Template
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
        $__internal_875a21ea31e63ef145176b314bdb22f0ccc3a571003e53ba8c6383fc85d8f0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875a21ea31e63ef145176b314bdb22f0ccc3a571003e53ba8c6383fc85d8f0e1->enter($__internal_875a21ea31e63ef145176b314bdb22f0ccc3a571003e53ba8c6383fc85d8f0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_76739e85181eddacc6cea4b55867325beb50294b57be5a93f6d92309d02c5d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76739e85181eddacc6cea4b55867325beb50294b57be5a93f6d92309d02c5d7f->enter($__internal_76739e85181eddacc6cea4b55867325beb50294b57be5a93f6d92309d02c5d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_875a21ea31e63ef145176b314bdb22f0ccc3a571003e53ba8c6383fc85d8f0e1->leave($__internal_875a21ea31e63ef145176b314bdb22f0ccc3a571003e53ba8c6383fc85d8f0e1_prof);

        
        $__internal_76739e85181eddacc6cea4b55867325beb50294b57be5a93f6d92309d02c5d7f->leave($__internal_76739e85181eddacc6cea4b55867325beb50294b57be5a93f6d92309d02c5d7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
