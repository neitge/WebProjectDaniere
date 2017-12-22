<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b4917099ad595ef29c5fb2e3ae42e3c47ff931bacceb4ea3f9ba1bf60a57196a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c624653b9f904201e2d58973100f8de67f65c9c0d553889a5c5555377d75c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c624653b9f904201e2d58973100f8de67f65c9c0d553889a5c5555377d75c04->enter($__internal_6c624653b9f904201e2d58973100f8de67f65c9c0d553889a5c5555377d75c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d2be5086b18c9e9f93e00265913ac06aedc28543a7c0e8e4297cf1f128259e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2be5086b18c9e9f93e00265913ac06aedc28543a7c0e8e4297cf1f128259e79->enter($__internal_d2be5086b18c9e9f93e00265913ac06aedc28543a7c0e8e4297cf1f128259e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c624653b9f904201e2d58973100f8de67f65c9c0d553889a5c5555377d75c04->leave($__internal_6c624653b9f904201e2d58973100f8de67f65c9c0d553889a5c5555377d75c04_prof);

        
        $__internal_d2be5086b18c9e9f93e00265913ac06aedc28543a7c0e8e4297cf1f128259e79->leave($__internal_d2be5086b18c9e9f93e00265913ac06aedc28543a7c0e8e4297cf1f128259e79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4feaa0b3a046df0c32c155b7a042dfd1d12e8b26543ee32ee3e48f68ac0c3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4feaa0b3a046df0c32c155b7a042dfd1d12e8b26543ee32ee3e48f68ac0c3e6->enter($__internal_c4feaa0b3a046df0c32c155b7a042dfd1d12e8b26543ee32ee3e48f68ac0c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc490b0db3865b1cc034a8c0462273af255b14046ab557b98ae8c9622b9671ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc490b0db3865b1cc034a8c0462273af255b14046ab557b98ae8c9622b9671ca->enter($__internal_cc490b0db3865b1cc034a8c0462273af255b14046ab557b98ae8c9622b9671ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cc490b0db3865b1cc034a8c0462273af255b14046ab557b98ae8c9622b9671ca->leave($__internal_cc490b0db3865b1cc034a8c0462273af255b14046ab557b98ae8c9622b9671ca_prof);

        
        $__internal_c4feaa0b3a046df0c32c155b7a042dfd1d12e8b26543ee32ee3e48f68ac0c3e6->leave($__internal_c4feaa0b3a046df0c32c155b7a042dfd1d12e8b26543ee32ee3e48f68ac0c3e6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a448e4b3d0ae3a6d2e97f091024f4e5b458e6b93b7ee64868137acf026203408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a448e4b3d0ae3a6d2e97f091024f4e5b458e6b93b7ee64868137acf026203408->enter($__internal_a448e4b3d0ae3a6d2e97f091024f4e5b458e6b93b7ee64868137acf026203408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eadbf7ddb437ccbc98eea813b303913d419091ab245c50c85c2d079e23276986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadbf7ddb437ccbc98eea813b303913d419091ab245c50c85c2d079e23276986->enter($__internal_eadbf7ddb437ccbc98eea813b303913d419091ab245c50c85c2d079e23276986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eadbf7ddb437ccbc98eea813b303913d419091ab245c50c85c2d079e23276986->leave($__internal_eadbf7ddb437ccbc98eea813b303913d419091ab245c50c85c2d079e23276986_prof);

        
        $__internal_a448e4b3d0ae3a6d2e97f091024f4e5b458e6b93b7ee64868137acf026203408->leave($__internal_a448e4b3d0ae3a6d2e97f091024f4e5b458e6b93b7ee64868137acf026203408_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_626a46da4e57939513a2f645473611eaaca29ec335d6cbdafbd78b6943c50454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626a46da4e57939513a2f645473611eaaca29ec335d6cbdafbd78b6943c50454->enter($__internal_626a46da4e57939513a2f645473611eaaca29ec335d6cbdafbd78b6943c50454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ada0e3f7061f2ad703cdb47b5b0c95fa7a32586cf99cd109b68f9ea6fbdb5385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada0e3f7061f2ad703cdb47b5b0c95fa7a32586cf99cd109b68f9ea6fbdb5385->enter($__internal_ada0e3f7061f2ad703cdb47b5b0c95fa7a32586cf99cd109b68f9ea6fbdb5385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ada0e3f7061f2ad703cdb47b5b0c95fa7a32586cf99cd109b68f9ea6fbdb5385->leave($__internal_ada0e3f7061f2ad703cdb47b5b0c95fa7a32586cf99cd109b68f9ea6fbdb5385_prof);

        
        $__internal_626a46da4e57939513a2f645473611eaaca29ec335d6cbdafbd78b6943c50454->leave($__internal_626a46da4e57939513a2f645473611eaaca29ec335d6cbdafbd78b6943c50454_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
