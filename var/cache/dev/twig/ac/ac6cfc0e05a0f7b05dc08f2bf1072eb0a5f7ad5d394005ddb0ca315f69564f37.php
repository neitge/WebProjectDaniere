<?php

/* ::base.html.twig */
class __TwigTemplate_7639c67a3a35faf6d191281d20ec396a8ad2ad907a3896b0e29f278f2afa0a76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6714187c63524aa85dc0051ff6ae9685f07c02a8df7e869fc59a43fe3516c5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6714187c63524aa85dc0051ff6ae9685f07c02a8df7e869fc59a43fe3516c5ef->enter($__internal_6714187c63524aa85dc0051ff6ae9685f07c02a8df7e869fc59a43fe3516c5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4befec3b70ccf57e16591fb4a2b747334941d7364b65328b38f4e7c75b0ba09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4befec3b70ccf57e16591fb4a2b747334941d7364b65328b38f4e7c75b0ba09c->enter($__internal_4befec3b70ccf57e16591fb4a2b747334941d7364b65328b38f4e7c75b0ba09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6714187c63524aa85dc0051ff6ae9685f07c02a8df7e869fc59a43fe3516c5ef->leave($__internal_6714187c63524aa85dc0051ff6ae9685f07c02a8df7e869fc59a43fe3516c5ef_prof);

        
        $__internal_4befec3b70ccf57e16591fb4a2b747334941d7364b65328b38f4e7c75b0ba09c->leave($__internal_4befec3b70ccf57e16591fb4a2b747334941d7364b65328b38f4e7c75b0ba09c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e246befdd7abe6423b4edea62ab87985c08ab228de004e0d74cbfcc669943496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e246befdd7abe6423b4edea62ab87985c08ab228de004e0d74cbfcc669943496->enter($__internal_e246befdd7abe6423b4edea62ab87985c08ab228de004e0d74cbfcc669943496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b9588d5a17d28035a0d02ac783b4f1ad7ac9aeff727ef06c8de08f431dd6a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9588d5a17d28035a0d02ac783b4f1ad7ac9aeff727ef06c8de08f431dd6a1d->enter($__internal_3b9588d5a17d28035a0d02ac783b4f1ad7ac9aeff727ef06c8de08f431dd6a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3b9588d5a17d28035a0d02ac783b4f1ad7ac9aeff727ef06c8de08f431dd6a1d->leave($__internal_3b9588d5a17d28035a0d02ac783b4f1ad7ac9aeff727ef06c8de08f431dd6a1d_prof);

        
        $__internal_e246befdd7abe6423b4edea62ab87985c08ab228de004e0d74cbfcc669943496->leave($__internal_e246befdd7abe6423b4edea62ab87985c08ab228de004e0d74cbfcc669943496_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5aeb6a58bfbf635899779acc16fbbb18feb8c7032f54cfdbb6caab936936be7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aeb6a58bfbf635899779acc16fbbb18feb8c7032f54cfdbb6caab936936be7c->enter($__internal_5aeb6a58bfbf635899779acc16fbbb18feb8c7032f54cfdbb6caab936936be7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_19580eeadf6ec5cc6eeaee77ecef4c57c21aa27199e881606b2734ba0a4f0267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19580eeadf6ec5cc6eeaee77ecef4c57c21aa27199e881606b2734ba0a4f0267->enter($__internal_19580eeadf6ec5cc6eeaee77ecef4c57c21aa27199e881606b2734ba0a4f0267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19580eeadf6ec5cc6eeaee77ecef4c57c21aa27199e881606b2734ba0a4f0267->leave($__internal_19580eeadf6ec5cc6eeaee77ecef4c57c21aa27199e881606b2734ba0a4f0267_prof);

        
        $__internal_5aeb6a58bfbf635899779acc16fbbb18feb8c7032f54cfdbb6caab936936be7c->leave($__internal_5aeb6a58bfbf635899779acc16fbbb18feb8c7032f54cfdbb6caab936936be7c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f28b51d7b659735e6da651d4e3b15067c527c78ce80e9a6ee4350d87067c5145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28b51d7b659735e6da651d4e3b15067c527c78ce80e9a6ee4350d87067c5145->enter($__internal_f28b51d7b659735e6da651d4e3b15067c527c78ce80e9a6ee4350d87067c5145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4689cb781a55fce46675419ef7be2da9b7192afdc754e8481bc61fc518d9baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4689cb781a55fce46675419ef7be2da9b7192afdc754e8481bc61fc518d9baa->enter($__internal_a4689cb781a55fce46675419ef7be2da9b7192afdc754e8481bc61fc518d9baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a4689cb781a55fce46675419ef7be2da9b7192afdc754e8481bc61fc518d9baa->leave($__internal_a4689cb781a55fce46675419ef7be2da9b7192afdc754e8481bc61fc518d9baa_prof);

        
        $__internal_f28b51d7b659735e6da651d4e3b15067c527c78ce80e9a6ee4350d87067c5145->leave($__internal_f28b51d7b659735e6da651d4e3b15067c527c78ce80e9a6ee4350d87067c5145_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7801ee342f95022e5274e69ca0202aa24dc7f5ed12498b336f32cd3ad13bfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7801ee342f95022e5274e69ca0202aa24dc7f5ed12498b336f32cd3ad13bfb9->enter($__internal_a7801ee342f95022e5274e69ca0202aa24dc7f5ed12498b336f32cd3ad13bfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_370e3a47671d345c5034adefc1f821bcb3bc8da8380f3315434123169617fe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370e3a47671d345c5034adefc1f821bcb3bc8da8380f3315434123169617fe3f->enter($__internal_370e3a47671d345c5034adefc1f821bcb3bc8da8380f3315434123169617fe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_370e3a47671d345c5034adefc1f821bcb3bc8da8380f3315434123169617fe3f->leave($__internal_370e3a47671d345c5034adefc1f821bcb3bc8da8380f3315434123169617fe3f_prof);

        
        $__internal_a7801ee342f95022e5274e69ca0202aa24dc7f5ed12498b336f32cd3ad13bfb9->leave($__internal_a7801ee342f95022e5274e69ca0202aa24dc7f5ed12498b336f32cd3ad13bfb9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\Symfo\\app/Resources\\views/base.html.twig");
    }
}
