<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_66625ed96b287b922bb2b30aea72ef04e1abf00cccc6ec4ebb3753b9a1b5af01 extends Twig_Template
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
        $__internal_a1401f2aa2479fcab65232b55f3bbf3070345259f2e0a8d2e28077d38c6f7437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1401f2aa2479fcab65232b55f3bbf3070345259f2e0a8d2e28077d38c6f7437->enter($__internal_a1401f2aa2479fcab65232b55f3bbf3070345259f2e0a8d2e28077d38c6f7437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3b6c1fadf5d4172cbbe0ee3f89abf39e8f9193e9c259da14cd17a9a2e5c074cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6c1fadf5d4172cbbe0ee3f89abf39e8f9193e9c259da14cd17a9a2e5c074cc->enter($__internal_3b6c1fadf5d4172cbbe0ee3f89abf39e8f9193e9c259da14cd17a9a2e5c074cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a1401f2aa2479fcab65232b55f3bbf3070345259f2e0a8d2e28077d38c6f7437->leave($__internal_a1401f2aa2479fcab65232b55f3bbf3070345259f2e0a8d2e28077d38c6f7437_prof);

        
        $__internal_3b6c1fadf5d4172cbbe0ee3f89abf39e8f9193e9c259da14cd17a9a2e5c074cc->leave($__internal_3b6c1fadf5d4172cbbe0ee3f89abf39e8f9193e9c259da14cd17a9a2e5c074cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
