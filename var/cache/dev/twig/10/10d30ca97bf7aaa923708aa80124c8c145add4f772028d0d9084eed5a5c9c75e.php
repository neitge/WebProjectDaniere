<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ecbcc6244346e36325e0ed99fff0c1550599eec8f3c95caa08f88a090fdfc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ecbcc6244346e36325e0ed99fff0c1550599eec8f3c95caa08f88a090fdfc05->enter($__internal_6ecbcc6244346e36325e0ed99fff0c1550599eec8f3c95caa08f88a090fdfc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_be648e2877eb2ec661df6d39e753029f7b63f0d333bbf8e8f099af10bbfc6417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be648e2877eb2ec661df6d39e753029f7b63f0d333bbf8e8f099af10bbfc6417->enter($__internal_be648e2877eb2ec661df6d39e753029f7b63f0d333bbf8e8f099af10bbfc6417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecbcc6244346e36325e0ed99fff0c1550599eec8f3c95caa08f88a090fdfc05->leave($__internal_6ecbcc6244346e36325e0ed99fff0c1550599eec8f3c95caa08f88a090fdfc05_prof);

        
        $__internal_be648e2877eb2ec661df6d39e753029f7b63f0d333bbf8e8f099af10bbfc6417->leave($__internal_be648e2877eb2ec661df6d39e753029f7b63f0d333bbf8e8f099af10bbfc6417_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13a5d36aa15f0c8071b2dd20b260ff42dea47592510a49a47c5676d267a60b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a5d36aa15f0c8071b2dd20b260ff42dea47592510a49a47c5676d267a60b20->enter($__internal_13a5d36aa15f0c8071b2dd20b260ff42dea47592510a49a47c5676d267a60b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e7bc8594fb0056b92d593ae7b719fb8720198df544f1e213556adc2dceb8c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7bc8594fb0056b92d593ae7b719fb8720198df544f1e213556adc2dceb8c0c->enter($__internal_3e7bc8594fb0056b92d593ae7b719fb8720198df544f1e213556adc2dceb8c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e7bc8594fb0056b92d593ae7b719fb8720198df544f1e213556adc2dceb8c0c->leave($__internal_3e7bc8594fb0056b92d593ae7b719fb8720198df544f1e213556adc2dceb8c0c_prof);

        
        $__internal_13a5d36aa15f0c8071b2dd20b260ff42dea47592510a49a47c5676d267a60b20->leave($__internal_13a5d36aa15f0c8071b2dd20b260ff42dea47592510a49a47c5676d267a60b20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6d4a753106a372fb349e5972662b3959faea9f4f31690d79b8a4a883b28a0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d4a753106a372fb349e5972662b3959faea9f4f31690d79b8a4a883b28a0d2->enter($__internal_d6d4a753106a372fb349e5972662b3959faea9f4f31690d79b8a4a883b28a0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_068951f9452fbdfd5aff1f433d0d6abb011f4eba4bd831fbcf2eb2572a6e5bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068951f9452fbdfd5aff1f433d0d6abb011f4eba4bd831fbcf2eb2572a6e5bb5->enter($__internal_068951f9452fbdfd5aff1f433d0d6abb011f4eba4bd831fbcf2eb2572a6e5bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_068951f9452fbdfd5aff1f433d0d6abb011f4eba4bd831fbcf2eb2572a6e5bb5->leave($__internal_068951f9452fbdfd5aff1f433d0d6abb011f4eba4bd831fbcf2eb2572a6e5bb5_prof);

        
        $__internal_d6d4a753106a372fb349e5972662b3959faea9f4f31690d79b8a4a883b28a0d2->leave($__internal_d6d4a753106a372fb349e5972662b3959faea9f4f31690d79b8a4a883b28a0d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49037f8db14b0871c43f9f003f4688cb2845b10fc92ce33bb096f6b5abf05f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49037f8db14b0871c43f9f003f4688cb2845b10fc92ce33bb096f6b5abf05f03->enter($__internal_49037f8db14b0871c43f9f003f4688cb2845b10fc92ce33bb096f6b5abf05f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc5750c996b15cebb80a68f63f3fd54b7dbcadd9c7498eb601e588b81847b53f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5750c996b15cebb80a68f63f3fd54b7dbcadd9c7498eb601e588b81847b53f->enter($__internal_dc5750c996b15cebb80a68f63f3fd54b7dbcadd9c7498eb601e588b81847b53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dc5750c996b15cebb80a68f63f3fd54b7dbcadd9c7498eb601e588b81847b53f->leave($__internal_dc5750c996b15cebb80a68f63f3fd54b7dbcadd9c7498eb601e588b81847b53f_prof);

        
        $__internal_49037f8db14b0871c43f9f003f4688cb2845b10fc92ce33bb096f6b5abf05f03->leave($__internal_49037f8db14b0871c43f9f003f4688cb2845b10fc92ce33bb096f6b5abf05f03_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
