<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_52833beb038fded28479f80c18adb0c8ea7635faba1e1fe4eef04140bfac8e75 extends Twig_Template
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
        $__internal_ca9882099972839058c3dec308f585e50938e0909748d0cee67cf0f83c427d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9882099972839058c3dec308f585e50938e0909748d0cee67cf0f83c427d5c->enter($__internal_ca9882099972839058c3dec308f585e50938e0909748d0cee67cf0f83c427d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f80d66a5e4fe1fefa5a8932c0f144645675bf133d0315689977b699dddcfc92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80d66a5e4fe1fefa5a8932c0f144645675bf133d0315689977b699dddcfc92a->enter($__internal_f80d66a5e4fe1fefa5a8932c0f144645675bf133d0315689977b699dddcfc92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ca9882099972839058c3dec308f585e50938e0909748d0cee67cf0f83c427d5c->leave($__internal_ca9882099972839058c3dec308f585e50938e0909748d0cee67cf0f83c427d5c_prof);

        
        $__internal_f80d66a5e4fe1fefa5a8932c0f144645675bf133d0315689977b699dddcfc92a->leave($__internal_f80d66a5e4fe1fefa5a8932c0f144645675bf133d0315689977b699dddcfc92a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
