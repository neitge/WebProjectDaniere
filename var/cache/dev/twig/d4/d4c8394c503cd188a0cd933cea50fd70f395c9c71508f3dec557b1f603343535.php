<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d07e9508ee4a2ce5cabe0f56f327e648e6199659feb57db5a513b73c0eb7a406 extends Twig_Template
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
        $__internal_f52a7c991b0a921d4b90f8f2e6d1a9b5856de51bd6936206423eeb3f02e51c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52a7c991b0a921d4b90f8f2e6d1a9b5856de51bd6936206423eeb3f02e51c7c->enter($__internal_f52a7c991b0a921d4b90f8f2e6d1a9b5856de51bd6936206423eeb3f02e51c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cb9a611ba79798ceec57e356a42f4247c5e98da0c7ba83d1b34f495bef35811e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9a611ba79798ceec57e356a42f4247c5e98da0c7ba83d1b34f495bef35811e->enter($__internal_cb9a611ba79798ceec57e356a42f4247c5e98da0c7ba83d1b34f495bef35811e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f52a7c991b0a921d4b90f8f2e6d1a9b5856de51bd6936206423eeb3f02e51c7c->leave($__internal_f52a7c991b0a921d4b90f8f2e6d1a9b5856de51bd6936206423eeb3f02e51c7c_prof);

        
        $__internal_cb9a611ba79798ceec57e356a42f4247c5e98da0c7ba83d1b34f495bef35811e->leave($__internal_cb9a611ba79798ceec57e356a42f4247c5e98da0c7ba83d1b34f495bef35811e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
