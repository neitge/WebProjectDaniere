<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_932f19e9621faee0531c159e8cb699006563d530eb694cec1ca0623b275bf2ea extends Twig_Template
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
        $__internal_334d55ef3d0840666966be8ed48ef1c4bae07f57f9832a4a6e57c01baf04b33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334d55ef3d0840666966be8ed48ef1c4bae07f57f9832a4a6e57c01baf04b33a->enter($__internal_334d55ef3d0840666966be8ed48ef1c4bae07f57f9832a4a6e57c01baf04b33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7aad0eb66cd5a7b96f377badd55fa957319cbc1a9e463a4d2622afeb41f266e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aad0eb66cd5a7b96f377badd55fa957319cbc1a9e463a4d2622afeb41f266e0->enter($__internal_7aad0eb66cd5a7b96f377badd55fa957319cbc1a9e463a4d2622afeb41f266e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_334d55ef3d0840666966be8ed48ef1c4bae07f57f9832a4a6e57c01baf04b33a->leave($__internal_334d55ef3d0840666966be8ed48ef1c4bae07f57f9832a4a6e57c01baf04b33a_prof);

        
        $__internal_7aad0eb66cd5a7b96f377badd55fa957319cbc1a9e463a4d2622afeb41f266e0->leave($__internal_7aad0eb66cd5a7b96f377badd55fa957319cbc1a9e463a4d2622afeb41f266e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
