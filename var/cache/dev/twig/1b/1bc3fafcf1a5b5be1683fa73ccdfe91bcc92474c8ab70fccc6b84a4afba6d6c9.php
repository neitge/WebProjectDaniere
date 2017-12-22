<?php

/* CDPlatformBundle::layout.html.twig */
class __TwigTemplate_405e01a38afe8cd7961d69e8a994c87a721124ca8e9e891213cc54ec0754c1e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "CDPlatformBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'cdplatform_body' => array($this, 'block_cdplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbe2cc6b6a90ac9fee54f5ffab7164d33d6cbe6aa6abcdda4d640042282e83d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe2cc6b6a90ac9fee54f5ffab7164d33d6cbe6aa6abcdda4d640042282e83d3->enter($__internal_dbe2cc6b6a90ac9fee54f5ffab7164d33d6cbe6aa6abcdda4d640042282e83d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle::layout.html.twig"));

        $__internal_301db606908ad3badecfdef6c0683c6f6a1f322f7cc0c4b8a7f381b01ee551b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301db606908ad3badecfdef6c0683c6f6a1f322f7cc0c4b8a7f381b01ee551b5->enter($__internal_301db606908ad3badecfdef6c0683c6f6a1f322f7cc0c4b8a7f381b01ee551b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe2cc6b6a90ac9fee54f5ffab7164d33d6cbe6aa6abcdda4d640042282e83d3->leave($__internal_dbe2cc6b6a90ac9fee54f5ffab7164d33d6cbe6aa6abcdda4d640042282e83d3_prof);

        
        $__internal_301db606908ad3badecfdef6c0683c6f6a1f322f7cc0c4b8a7f381b01ee551b5->leave($__internal_301db606908ad3badecfdef6c0683c6f6a1f322f7cc0c4b8a7f381b01ee551b5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_80bf3533b8c800d6a775862809e3cc40479fa66832043a72c3f52771518868b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bf3533b8c800d6a775862809e3cc40479fa66832043a72c3f52771518868b3->enter($__internal_80bf3533b8c800d6a775862809e3cc40479fa66832043a72c3f52771518868b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_407e8516e4ab6979ca1986ceb6938c5c2f226e25eb5d1e16c393fc8f7c72de4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407e8516e4ab6979ca1986ceb6938c5c2f226e25eb5d1e16c393fc8f7c72de4b->enter($__internal_407e8516e4ab6979ca1986ceb6938c5c2f226e25eb5d1e16c393fc8f7c72de4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_407e8516e4ab6979ca1986ceb6938c5c2f226e25eb5d1e16c393fc8f7c72de4b->leave($__internal_407e8516e4ab6979ca1986ceb6938c5c2f226e25eb5d1e16c393fc8f7c72de4b_prof);

        
        $__internal_80bf3533b8c800d6a775862809e3cc40479fa66832043a72c3f52771518868b3->leave($__internal_80bf3533b8c800d6a775862809e3cc40479fa66832043a72c3f52771518868b3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d102c93ca3dccd5fa4e3eaef66fa7ff98b408a0845d8758c08c1c9e3e28bbd7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d102c93ca3dccd5fa4e3eaef66fa7ff98b408a0845d8758c08c1c9e3e28bbd7f->enter($__internal_d102c93ca3dccd5fa4e3eaef66fa7ff98b408a0845d8758c08c1c9e3e28bbd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1b763631f027c42236d6dea4809a7cbf1f1ed9581727d3cc4657563e7e0553f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b763631f027c42236d6dea4809a7cbf1f1ed9581727d3cc4657563e7e0553f->enter($__internal_f1b763631f027c42236d6dea4809a7cbf1f1ed9581727d3cc4657563e7e0553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  ";
        // line 11
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('cdplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_f1b763631f027c42236d6dea4809a7cbf1f1ed9581727d3cc4657563e7e0553f->leave($__internal_f1b763631f027c42236d6dea4809a7cbf1f1ed9581727d3cc4657563e7e0553f_prof);

        
        $__internal_d102c93ca3dccd5fa4e3eaef66fa7ff98b408a0845d8758c08c1c9e3e28bbd7f->leave($__internal_d102c93ca3dccd5fa4e3eaef66fa7ff98b408a0845d8758c08c1c9e3e28bbd7f_prof);

    }

    // line 16
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_7589d3632af36f1c8ceb2d365fd4c7f68ebff404b60abf40022e0e2569261eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7589d3632af36f1c8ceb2d365fd4c7f68ebff404b60abf40022e0e2569261eaa->enter($__internal_7589d3632af36f1c8ceb2d365fd4c7f68ebff404b60abf40022e0e2569261eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_892a18b6b9057ae020e79bee806ea185a09feb59ad1f81dce394d89d1b935b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892a18b6b9057ae020e79bee806ea185a09feb59ad1f81dce394d89d1b935b7d->enter($__internal_892a18b6b9057ae020e79bee806ea185a09feb59ad1f81dce394d89d1b935b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_892a18b6b9057ae020e79bee806ea185a09feb59ad1f81dce394d89d1b935b7d->leave($__internal_892a18b6b9057ae020e79bee806ea185a09feb59ad1f81dce394d89d1b935b7d_prof);

        
        $__internal_7589d3632af36f1c8ceb2d365fd4c7f68ebff404b60abf40022e0e2569261eaa->leave($__internal_7589d3632af36f1c8ceb2d365fd4c7f68ebff404b60abf40022e0e2569261eaa_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  96 => 16,  85 => 18,  82 => 16,  76 => 11,  73 => 9,  64 => 8,  51 => 5,  42 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block cdplatform_body %}
  {% endblock %}

{% endblock %}", "CDPlatformBundle::layout.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
