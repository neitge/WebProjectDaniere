<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_057fd96f4c4f70718795b3438c121e5106fdf92611d5b2d0ecf51ec91f78baed extends Twig_Template
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
        $__internal_55526bb0c029a5bfb47c7bdbc604561baecaf7454760e116fb31565be96eaaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55526bb0c029a5bfb47c7bdbc604561baecaf7454760e116fb31565be96eaaa9->enter($__internal_55526bb0c029a5bfb47c7bdbc604561baecaf7454760e116fb31565be96eaaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b961bb56744d086a412e9c484d1f47eac445df441f8f0fb49a6657600eece0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b961bb56744d086a412e9c484d1f47eac445df441f8f0fb49a6657600eece0d6->enter($__internal_b961bb56744d086a412e9c484d1f47eac445df441f8f0fb49a6657600eece0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_55526bb0c029a5bfb47c7bdbc604561baecaf7454760e116fb31565be96eaaa9->leave($__internal_55526bb0c029a5bfb47c7bdbc604561baecaf7454760e116fb31565be96eaaa9_prof);

        
        $__internal_b961bb56744d086a412e9c484d1f47eac445df441f8f0fb49a6657600eece0d6->leave($__internal_b961bb56744d086a412e9c484d1f47eac445df441f8f0fb49a6657600eece0d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
