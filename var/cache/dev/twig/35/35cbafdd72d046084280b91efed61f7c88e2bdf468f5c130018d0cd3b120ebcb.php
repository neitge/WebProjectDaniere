<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_5890b53785cd161c0948d869269b75fa8b698db844f0c40bd0366aa9f37f27c5 extends Twig_Template
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
        $__internal_e6fe60b8e84a6ac263a8f45166da51318dd93e107954c4cafd56151a3855c415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fe60b8e84a6ac263a8f45166da51318dd93e107954c4cafd56151a3855c415->enter($__internal_e6fe60b8e84a6ac263a8f45166da51318dd93e107954c4cafd56151a3855c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ef98665d80192e570c5d08567ff74abfe8717576cf32431f7c6dd0a557a98b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef98665d80192e570c5d08567ff74abfe8717576cf32431f7c6dd0a557a98b26->enter($__internal_ef98665d80192e570c5d08567ff74abfe8717576cf32431f7c6dd0a557a98b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e6fe60b8e84a6ac263a8f45166da51318dd93e107954c4cafd56151a3855c415->leave($__internal_e6fe60b8e84a6ac263a8f45166da51318dd93e107954c4cafd56151a3855c415_prof);

        
        $__internal_ef98665d80192e570c5d08567ff74abfe8717576cf32431f7c6dd0a557a98b26->leave($__internal_ef98665d80192e570c5d08567ff74abfe8717576cf32431f7c6dd0a557a98b26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
