<?php

/* ::layout.html.twig */
class __TwigTemplate_64d3ea4929df2ddbdf4c0cc3282f0cc8085155d25c4924dde9413778d0e5bd5d extends Twig_Template
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
        $__internal_967863273a0d5538233191e5f21250ad8412a6478e22a4fe20e6a55e45207b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967863273a0d5538233191e5f21250ad8412a6478e22a4fe20e6a55e45207b2e->enter($__internal_967863273a0d5538233191e5f21250ad8412a6478e22a4fe20e6a55e45207b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_156b03a10f7d56ca4ab574da937ac7a79faa01644e198503d7ffa1edcea8c76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156b03a10f7d56ca4ab574da937ac7a79faa01644e198503d7ffa1edcea8c76e->enter($__internal_156b03a10f7d56ca4ab574da937ac7a79faa01644e198503d7ffa1edcea8c76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_967863273a0d5538233191e5f21250ad8412a6478e22a4fe20e6a55e45207b2e->leave($__internal_967863273a0d5538233191e5f21250ad8412a6478e22a4fe20e6a55e45207b2e_prof);

        
        $__internal_156b03a10f7d56ca4ab574da937ac7a79faa01644e198503d7ffa1edcea8c76e->leave($__internal_156b03a10f7d56ca4ab574da937ac7a79faa01644e198503d7ffa1edcea8c76e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5bc7f0079d4390b27f46ea97d62eb141ffdcd0383035fb3e7c7657120d11d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5bc7f0079d4390b27f46ea97d62eb141ffdcd0383035fb3e7c7657120d11d28->enter($__internal_a5bc7f0079d4390b27f46ea97d62eb141ffdcd0383035fb3e7c7657120d11d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2556ee371a0934a61059e6b6a51e6281024f89383d291cff519f38f03bbe79e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2556ee371a0934a61059e6b6a51e6281024f89383d291cff519f38f03bbe79e5->enter($__internal_2556ee371a0934a61059e6b6a51e6281024f89383d291cff519f38f03bbe79e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CD Plateforme";
        
        $__internal_2556ee371a0934a61059e6b6a51e6281024f89383d291cff519f38f03bbe79e5->leave($__internal_2556ee371a0934a61059e6b6a51e6281024f89383d291cff519f38f03bbe79e5_prof);

        
        $__internal_a5bc7f0079d4390b27f46ea97d62eb141ffdcd0383035fb3e7c7657120d11d28->leave($__internal_a5bc7f0079d4390b27f46ea97d62eb141ffdcd0383035fb3e7c7657120d11d28_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89c696423cb8345c76cf001dcc246eccde5dc44967b267ad1b4a5152fa33f17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c696423cb8345c76cf001dcc246eccde5dc44967b267ad1b4a5152fa33f17e->enter($__internal_89c696423cb8345c76cf001dcc246eccde5dc44967b267ad1b4a5152fa33f17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4a67537d0c88d4baa698353ddd917bc637e2985291c8259532ed3648cb4e8442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a67537d0c88d4baa698353ddd917bc637e2985291c8259532ed3648cb4e8442->enter($__internal_4a67537d0c88d4baa698353ddd917bc637e2985291c8259532ed3648cb4e8442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_4a67537d0c88d4baa698353ddd917bc637e2985291c8259532ed3648cb4e8442->leave($__internal_4a67537d0c88d4baa698353ddd917bc637e2985291c8259532ed3648cb4e8442_prof);

        
        $__internal_89c696423cb8345c76cf001dcc246eccde5dc44967b267ad1b4a5152fa33f17e->leave($__internal_89c696423cb8345c76cf001dcc246eccde5dc44967b267ad1b4a5152fa33f17e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_37a067cd24da861206446498909643c989bdb277710383f8cebf2632d16090d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a067cd24da861206446498909643c989bdb277710383f8cebf2632d16090d0->enter($__internal_37a067cd24da861206446498909643c989bdb277710383f8cebf2632d16090d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_663c361a168d9bee6ce28ca76cfc7e72c84a556bc47ab98a31187e994a991083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663c361a168d9bee6ce28ca76cfc7e72c84a556bc47ab98a31187e994a991083->enter($__internal_663c361a168d9bee6ce28ca76cfc7e72c84a556bc47ab98a31187e994a991083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_663c361a168d9bee6ce28ca76cfc7e72c84a556bc47ab98a31187e994a991083->leave($__internal_663c361a168d9bee6ce28ca76cfc7e72c84a556bc47ab98a31187e994a991083_prof);

        
        $__internal_37a067cd24da861206446498909643c989bdb277710383f8cebf2632d16090d0->leave($__internal_37a067cd24da861206446498909643c989bdb277710383f8cebf2632d16090d0_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4a0b0063bdbfece052e00621303ee0859398fd98d2dec3b54abf7a071920778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a0b0063bdbfece052e00621303ee0859398fd98d2dec3b54abf7a071920778->enter($__internal_f4a0b0063bdbfece052e00621303ee0859398fd98d2dec3b54abf7a071920778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_461814d27dcdf9fb3e2e79a804bb79adc438f38358ea3805d7f5adb28fb7eef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461814d27dcdf9fb3e2e79a804bb79adc438f38358ea3805d7f5adb28fb7eef7->enter($__internal_461814d27dcdf9fb3e2e79a804bb79adc438f38358ea3805d7f5adb28fb7eef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_461814d27dcdf9fb3e2e79a804bb79adc438f38358ea3805d7f5adb28fb7eef7->leave($__internal_461814d27dcdf9fb3e2e79a804bb79adc438f38358ea3805d7f5adb28fb7eef7_prof);

        
        $__internal_f4a0b0063bdbfece052e00621303ee0859398fd98d2dec3b54abf7a071920778->leave($__internal_f4a0b0063bdbfece052e00621303ee0859398fd98d2dec3b54abf7a071920778_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
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
</html>", "::layout.html.twig", "C:\\wamp\\www\\Symfo\\app/Resources\\views/layout.html.twig");
    }
}
