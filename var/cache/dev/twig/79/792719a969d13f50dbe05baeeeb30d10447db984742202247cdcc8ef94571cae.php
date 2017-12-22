<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ef1491ea5b496dac8595b53d0309b306cda75a7340545492e6bb88cdc131305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef1491ea5b496dac8595b53d0309b306cda75a7340545492e6bb88cdc131305->enter($__internal_3ef1491ea5b496dac8595b53d0309b306cda75a7340545492e6bb88cdc131305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d0bea4ac7fcc4dd99fac7b0723adae2768c404cad34e969eae5a4a30820fa7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bea4ac7fcc4dd99fac7b0723adae2768c404cad34e969eae5a4a30820fa7b7->enter($__internal_d0bea4ac7fcc4dd99fac7b0723adae2768c404cad34e969eae5a4a30820fa7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_3ef1491ea5b496dac8595b53d0309b306cda75a7340545492e6bb88cdc131305->leave($__internal_3ef1491ea5b496dac8595b53d0309b306cda75a7340545492e6bb88cdc131305_prof);

        
        $__internal_d0bea4ac7fcc4dd99fac7b0723adae2768c404cad34e969eae5a4a30820fa7b7->leave($__internal_d0bea4ac7fcc4dd99fac7b0723adae2768c404cad34e969eae5a4a30820fa7b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6057183878257980eb5307f8a6a2be56fb6add11801758806e928dd55558a013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6057183878257980eb5307f8a6a2be56fb6add11801758806e928dd55558a013->enter($__internal_6057183878257980eb5307f8a6a2be56fb6add11801758806e928dd55558a013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fb7298e417ccf040e7f533efa835592c95fcfd0b040282344a83892d897a7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb7298e417ccf040e7f533efa835592c95fcfd0b040282344a83892d897a7dc->enter($__internal_0fb7298e417ccf040e7f533efa835592c95fcfd0b040282344a83892d897a7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0fb7298e417ccf040e7f533efa835592c95fcfd0b040282344a83892d897a7dc->leave($__internal_0fb7298e417ccf040e7f533efa835592c95fcfd0b040282344a83892d897a7dc_prof);

        
        $__internal_6057183878257980eb5307f8a6a2be56fb6add11801758806e928dd55558a013->leave($__internal_6057183878257980eb5307f8a6a2be56fb6add11801758806e928dd55558a013_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_87129a8ddbb35dde6f9ce73faf1bbfc719ebadce4a51c1faee04d788fbadb933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87129a8ddbb35dde6f9ce73faf1bbfc719ebadce4a51c1faee04d788fbadb933->enter($__internal_87129a8ddbb35dde6f9ce73faf1bbfc719ebadce4a51c1faee04d788fbadb933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d0b6ec3aa4eccbfb4d40f0c545545c2069ff56c1520b68e93cf479553cee9d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b6ec3aa4eccbfb4d40f0c545545c2069ff56c1520b68e93cf479553cee9d86->enter($__internal_d0b6ec3aa4eccbfb4d40f0c545545c2069ff56c1520b68e93cf479553cee9d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d0b6ec3aa4eccbfb4d40f0c545545c2069ff56c1520b68e93cf479553cee9d86->leave($__internal_d0b6ec3aa4eccbfb4d40f0c545545c2069ff56c1520b68e93cf479553cee9d86_prof);

        
        $__internal_87129a8ddbb35dde6f9ce73faf1bbfc719ebadce4a51c1faee04d788fbadb933->leave($__internal_87129a8ddbb35dde6f9ce73faf1bbfc719ebadce4a51c1faee04d788fbadb933_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeeb9393735dd84a4e5666a809d98d51464e8574db2d9a889c25978dec3eba05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeb9393735dd84a4e5666a809d98d51464e8574db2d9a889c25978dec3eba05->enter($__internal_eeeb9393735dd84a4e5666a809d98d51464e8574db2d9a889c25978dec3eba05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9c74f0f66ff110d77f6ae07fa62da87db217c36bbd5bcf8172b43f5e97fd7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c74f0f66ff110d77f6ae07fa62da87db217c36bbd5bcf8172b43f5e97fd7ba->enter($__internal_f9c74f0f66ff110d77f6ae07fa62da87db217c36bbd5bcf8172b43f5e97fd7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9c74f0f66ff110d77f6ae07fa62da87db217c36bbd5bcf8172b43f5e97fd7ba->leave($__internal_f9c74f0f66ff110d77f6ae07fa62da87db217c36bbd5bcf8172b43f5e97fd7ba_prof);

        
        $__internal_eeeb9393735dd84a4e5666a809d98d51464e8574db2d9a889c25978dec3eba05->leave($__internal_eeeb9393735dd84a4e5666a809d98d51464e8574db2d9a889c25978dec3eba05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
