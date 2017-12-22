<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4636f147e5f61754611d1e3378dfab98d1aae296d339b07bbe1163ced9283ca8 extends Twig_Template
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
        $__internal_023795e200d042151f91eea1b51336050be7ea072bae46a8a5ec802b726e2aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023795e200d042151f91eea1b51336050be7ea072bae46a8a5ec802b726e2aed->enter($__internal_023795e200d042151f91eea1b51336050be7ea072bae46a8a5ec802b726e2aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_77568be4a6c1a34b2608929496df4643b23a43e36eed401534816bf0f42f00aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77568be4a6c1a34b2608929496df4643b23a43e36eed401534816bf0f42f00aa->enter($__internal_77568be4a6c1a34b2608929496df4643b23a43e36eed401534816bf0f42f00aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_023795e200d042151f91eea1b51336050be7ea072bae46a8a5ec802b726e2aed->leave($__internal_023795e200d042151f91eea1b51336050be7ea072bae46a8a5ec802b726e2aed_prof);

        
        $__internal_77568be4a6c1a34b2608929496df4643b23a43e36eed401534816bf0f42f00aa->leave($__internal_77568be4a6c1a34b2608929496df4643b23a43e36eed401534816bf0f42f00aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
