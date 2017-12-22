<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4b015228be77339945d22d7c6f3c719d38972772ee6eb26443f9ad0549b54973 extends Twig_Template
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
        $__internal_a0faf35323c0978e103d6931e0df5a48aebe96e0371b3750bf6a4b65acb2343f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0faf35323c0978e103d6931e0df5a48aebe96e0371b3750bf6a4b65acb2343f->enter($__internal_a0faf35323c0978e103d6931e0df5a48aebe96e0371b3750bf6a4b65acb2343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3b30a07c50f245bc6e8753bd7032e3b7eefb6710cfef68348da7aad8d111f279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b30a07c50f245bc6e8753bd7032e3b7eefb6710cfef68348da7aad8d111f279->enter($__internal_3b30a07c50f245bc6e8753bd7032e3b7eefb6710cfef68348da7aad8d111f279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a0faf35323c0978e103d6931e0df5a48aebe96e0371b3750bf6a4b65acb2343f->leave($__internal_a0faf35323c0978e103d6931e0df5a48aebe96e0371b3750bf6a4b65acb2343f_prof);

        
        $__internal_3b30a07c50f245bc6e8753bd7032e3b7eefb6710cfef68348da7aad8d111f279->leave($__internal_3b30a07c50f245bc6e8753bd7032e3b7eefb6710cfef68348da7aad8d111f279_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
