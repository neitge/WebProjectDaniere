<?php

/* layout.html.twig */
class __TwigTemplate_9c0a6474256225a761f197e0c15303167f6e14cc319819609c9a04bdb960c674 extends Twig_Template
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
        $__internal_183c0d1cabe18bd11a6495f97d09c7c562a5730ac6a0b484b1a4ed7e11af3879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183c0d1cabe18bd11a6495f97d09c7c562a5730ac6a0b484b1a4ed7e11af3879->enter($__internal_183c0d1cabe18bd11a6495f97d09c7c562a5730ac6a0b484b1a4ed7e11af3879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_cd4024ad99cce2a79397573b3fc3a94f9d2edf023077e3dbd21943d711607530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4024ad99cce2a79397573b3fc3a94f9d2edf023077e3dbd21943d711607530->enter($__internal_cd4024ad99cce2a79397573b3fc3a94f9d2edf023077e3dbd21943d711607530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("CDPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
</body>
</html>";
        
        $__internal_183c0d1cabe18bd11a6495f97d09c7c562a5730ac6a0b484b1a4ed7e11af3879->leave($__internal_183c0d1cabe18bd11a6495f97d09c7c562a5730ac6a0b484b1a4ed7e11af3879_prof);

        
        $__internal_cd4024ad99cce2a79397573b3fc3a94f9d2edf023077e3dbd21943d711607530->leave($__internal_cd4024ad99cce2a79397573b3fc3a94f9d2edf023077e3dbd21943d711607530_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe7a2f77c0d60bc5345a6edb6619e7167033451871e269a681fd494bbb48dfac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7a2f77c0d60bc5345a6edb6619e7167033451871e269a681fd494bbb48dfac->enter($__internal_fe7a2f77c0d60bc5345a6edb6619e7167033451871e269a681fd494bbb48dfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8810f3b7f85368fee14015fd4eacab54f9e27f7abbe2027db3816dcd63cf47e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8810f3b7f85368fee14015fd4eacab54f9e27f7abbe2027db3816dcd63cf47e3->enter($__internal_8810f3b7f85368fee14015fd4eacab54f9e27f7abbe2027db3816dcd63cf47e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CD Plateforme";
        
        $__internal_8810f3b7f85368fee14015fd4eacab54f9e27f7abbe2027db3816dcd63cf47e3->leave($__internal_8810f3b7f85368fee14015fd4eacab54f9e27f7abbe2027db3816dcd63cf47e3_prof);

        
        $__internal_fe7a2f77c0d60bc5345a6edb6619e7167033451871e269a681fd494bbb48dfac->leave($__internal_fe7a2f77c0d60bc5345a6edb6619e7167033451871e269a681fd494bbb48dfac_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dde1b72019a2d8d2fecb419de6936437c1983c2c43bb5cbe3d1b4b4489e208a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dde1b72019a2d8d2fecb419de6936437c1983c2c43bb5cbe3d1b4b4489e208a->enter($__internal_0dde1b72019a2d8d2fecb419de6936437c1983c2c43bb5cbe3d1b4b4489e208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_498860db08fe3968848bd09afef387954ef19847102a16b0e02dd32ee24f4d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498860db08fe3968848bd09afef387954ef19847102a16b0e02dd32ee24f4d81->enter($__internal_498860db08fe3968848bd09afef387954ef19847102a16b0e02dd32ee24f4d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_498860db08fe3968848bd09afef387954ef19847102a16b0e02dd32ee24f4d81->leave($__internal_498860db08fe3968848bd09afef387954ef19847102a16b0e02dd32ee24f4d81_prof);

        
        $__internal_0dde1b72019a2d8d2fecb419de6936437c1983c2c43bb5cbe3d1b4b4489e208a->leave($__internal_0dde1b72019a2d8d2fecb419de6936437c1983c2c43bb5cbe3d1b4b4489e208a_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_eda81ce4f81e3d30a9c36a8a7008b02e260689202cdca66dba3d4e925f512dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda81ce4f81e3d30a9c36a8a7008b02e260689202cdca66dba3d4e925f512dd6->enter($__internal_eda81ce4f81e3d30a9c36a8a7008b02e260689202cdca66dba3d4e925f512dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0e2808cdc27219320b0b07814ad98df521960e3f0cfc772a0dc6dcf597b31e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e2808cdc27219320b0b07814ad98df521960e3f0cfc772a0dc6dcf597b31e4->enter($__internal_d0e2808cdc27219320b0b07814ad98df521960e3f0cfc772a0dc6dcf597b31e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_d0e2808cdc27219320b0b07814ad98df521960e3f0cfc772a0dc6dcf597b31e4->leave($__internal_d0e2808cdc27219320b0b07814ad98df521960e3f0cfc772a0dc6dcf597b31e4_prof);

        
        $__internal_eda81ce4f81e3d30a9c36a8a7008b02e260689202cdca66dba3d4e925f512dd6->leave($__internal_eda81ce4f81e3d30a9c36a8a7008b02e260689202cdca66dba3d4e925f512dd6_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb194315404ffa0c47b64dcda5e4b0b4530b1f3b291623f1696c9c2fac83a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb194315404ffa0c47b64dcda5e4b0b4530b1f3b291623f1696c9c2fac83a6dd->enter($__internal_bb194315404ffa0c47b64dcda5e4b0b4530b1f3b291623f1696c9c2fac83a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f9bb4bdaada08b6433501f35e306c22c3e35d7d0592b23dbe1be019b9c88d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9bb4bdaada08b6433501f35e306c22c3e35d7d0592b23dbe1be019b9c88d6b->enter($__internal_7f9bb4bdaada08b6433501f35e306c22c3e35d7d0592b23dbe1be019b9c88d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7f9bb4bdaada08b6433501f35e306c22c3e35d7d0592b23dbe1be019b9c88d6b->leave($__internal_7f9bb4bdaada08b6433501f35e306c22c3e35d7d0592b23dbe1be019b9c88d6b_prof);

        
        $__internal_bb194315404ffa0c47b64dcda5e4b0b4530b1f3b291623f1696c9c2fac83a6dd->leave($__internal_bb194315404ffa0c47b64dcda5e4b0b4530b1f3b291623f1696c9c2fac83a6dd_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 57,  184 => 56,  175 => 55,  165 => 44,  156 => 43,  145 => 12,  143 => 11,  134 => 10,  116 => 8,  104 => 60,  102 => 55,  95 => 51,  87 => 45,  85 => 43,  79 => 40,  72 => 36,  68 => 35,  45 => 14,  43 => 10,  38 => 8,  29 => 1,);
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
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}CD Plateforme{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('cd_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('cd_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"CDPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "layout.html.twig", "C:\\wamp\\www\\Symfo\\app\\Resources\\views\\layout.html.twig");
    }
}
