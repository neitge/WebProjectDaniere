<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_3791ffa54039ce2a6a502944c80f963281f6134c886358317f982a75bec8f39c extends Twig_Template
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
        $__internal_705d276bb8cb71315bb94147a4f681dd8b5737cc5771530f7bd4a22c9d53b8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_705d276bb8cb71315bb94147a4f681dd8b5737cc5771530f7bd4a22c9d53b8f2->enter($__internal_705d276bb8cb71315bb94147a4f681dd8b5737cc5771530f7bd4a22c9d53b8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6154c6a1b5df5e3de238d6a08f6159f5fe7620b7f129bb7bd38a2f1621459243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6154c6a1b5df5e3de238d6a08f6159f5fe7620b7f129bb7bd38a2f1621459243->enter($__internal_6154c6a1b5df5e3de238d6a08f6159f5fe7620b7f129bb7bd38a2f1621459243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_705d276bb8cb71315bb94147a4f681dd8b5737cc5771530f7bd4a22c9d53b8f2->leave($__internal_705d276bb8cb71315bb94147a4f681dd8b5737cc5771530f7bd4a22c9d53b8f2_prof);

        
        $__internal_6154c6a1b5df5e3de238d6a08f6159f5fe7620b7f129bb7bd38a2f1621459243->leave($__internal_6154c6a1b5df5e3de238d6a08f6159f5fe7620b7f129bb7bd38a2f1621459243_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ff66cc387346d40939906a48f1589a35a9c57a2a9315526987d61abe12b0f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff66cc387346d40939906a48f1589a35a9c57a2a9315526987d61abe12b0f7d->enter($__internal_2ff66cc387346d40939906a48f1589a35a9c57a2a9315526987d61abe12b0f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e79deef9121f7ed696879977b90a0fbeb1f86b72d5bbefda417e1a25838a9eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79deef9121f7ed696879977b90a0fbeb1f86b72d5bbefda417e1a25838a9eea->enter($__internal_e79deef9121f7ed696879977b90a0fbeb1f86b72d5bbefda417e1a25838a9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e79deef9121f7ed696879977b90a0fbeb1f86b72d5bbefda417e1a25838a9eea->leave($__internal_e79deef9121f7ed696879977b90a0fbeb1f86b72d5bbefda417e1a25838a9eea_prof);

        
        $__internal_2ff66cc387346d40939906a48f1589a35a9c57a2a9315526987d61abe12b0f7d->leave($__internal_2ff66cc387346d40939906a48f1589a35a9c57a2a9315526987d61abe12b0f7d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccf1dca08fff6f0b3069b38870bc37d8b7b92f69ad3ce265708ee570456225cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf1dca08fff6f0b3069b38870bc37d8b7b92f69ad3ce265708ee570456225cc->enter($__internal_ccf1dca08fff6f0b3069b38870bc37d8b7b92f69ad3ce265708ee570456225cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5b8da2cfbdc1625b984bf68e89fe4ef312772d1d2e221e2330bea411762f061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b8da2cfbdc1625b984bf68e89fe4ef312772d1d2e221e2330bea411762f061->enter($__internal_b5b8da2cfbdc1625b984bf68e89fe4ef312772d1d2e221e2330bea411762f061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b5b8da2cfbdc1625b984bf68e89fe4ef312772d1d2e221e2330bea411762f061->leave($__internal_b5b8da2cfbdc1625b984bf68e89fe4ef312772d1d2e221e2330bea411762f061_prof);

        
        $__internal_ccf1dca08fff6f0b3069b38870bc37d8b7b92f69ad3ce265708ee570456225cc->leave($__internal_ccf1dca08fff6f0b3069b38870bc37d8b7b92f69ad3ce265708ee570456225cc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ce7bf5402fc9a637730fd2c86d292e0dcddc3f95fdf75ea2d28e6afc226165e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce7bf5402fc9a637730fd2c86d292e0dcddc3f95fdf75ea2d28e6afc226165e->enter($__internal_6ce7bf5402fc9a637730fd2c86d292e0dcddc3f95fdf75ea2d28e6afc226165e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66e704afd33e2ba475e0b026df1b39ad3e9302e592be1ba57386181edc70e854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e704afd33e2ba475e0b026df1b39ad3e9302e592be1ba57386181edc70e854->enter($__internal_66e704afd33e2ba475e0b026df1b39ad3e9302e592be1ba57386181edc70e854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_66e704afd33e2ba475e0b026df1b39ad3e9302e592be1ba57386181edc70e854->leave($__internal_66e704afd33e2ba475e0b026df1b39ad3e9302e592be1ba57386181edc70e854_prof);

        
        $__internal_6ce7bf5402fc9a637730fd2c86d292e0dcddc3f95fdf75ea2d28e6afc226165e->leave($__internal_6ce7bf5402fc9a637730fd2c86d292e0dcddc3f95fdf75ea2d28e6afc226165e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
