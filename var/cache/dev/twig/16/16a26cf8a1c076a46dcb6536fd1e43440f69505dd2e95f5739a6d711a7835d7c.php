<?php

/* CDPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_a46cd5619d2be38b188cfafecde496c893ca7eebe07d57d535a96323e30b960e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "CDPlatformBundle:Advert:view.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'cdplatform_body' => array($this, 'block_cdplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CDPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57ae91a41560d4918e0773b08646b7c814c39d5b74a54a2fc722539487c1cd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ae91a41560d4918e0773b08646b7c814c39d5b74a54a2fc722539487c1cd15->enter($__internal_57ae91a41560d4918e0773b08646b7c814c39d5b74a54a2fc722539487c1cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:view.html.twig"));

        $__internal_e19f8b4b5bed460c2d877e1d1d9a06467e53785e5465fa78c148d6491b4614bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19f8b4b5bed460c2d877e1d1d9a06467e53785e5465fa78c148d6491b4614bf->enter($__internal_e19f8b4b5bed460c2d877e1d1d9a06467e53785e5465fa78c148d6491b4614bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CDPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ae91a41560d4918e0773b08646b7c814c39d5b74a54a2fc722539487c1cd15->leave($__internal_57ae91a41560d4918e0773b08646b7c814c39d5b74a54a2fc722539487c1cd15_prof);

        
        $__internal_e19f8b4b5bed460c2d877e1d1d9a06467e53785e5465fa78c148d6491b4614bf->leave($__internal_e19f8b4b5bed460c2d877e1d1d9a06467e53785e5465fa78c148d6491b4614bf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_17fca2901a6b4f2cb91c95c230a5113475fe732690782da4b17609a5931ec844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fca2901a6b4f2cb91c95c230a5113475fe732690782da4b17609a5931ec844->enter($__internal_17fca2901a6b4f2cb91c95c230a5113475fe732690782da4b17609a5931ec844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecc86dbc489e5bcbbf33d5e7690fab89bdc1279334e93ec35c7ab9ded44470eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc86dbc489e5bcbbf33d5e7690fab89bdc1279334e93ec35c7ab9ded44470eb->enter($__internal_ecc86dbc489e5bcbbf33d5e7690fab89bdc1279334e93ec35c7ab9ded44470eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ecc86dbc489e5bcbbf33d5e7690fab89bdc1279334e93ec35c7ab9ded44470eb->leave($__internal_ecc86dbc489e5bcbbf33d5e7690fab89bdc1279334e93ec35c7ab9ded44470eb_prof);

        
        $__internal_17fca2901a6b4f2cb91c95c230a5113475fe732690782da4b17609a5931ec844->leave($__internal_17fca2901a6b4f2cb91c95c230a5113475fe732690782da4b17609a5931ec844_prof);

    }

    // line 8
    public function block_cdplatform_body($context, array $blocks = array())
    {
        $__internal_7830125f41254846f996c16bb93f252dc8e11209feac7fb892cae68123e33bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7830125f41254846f996c16bb93f252dc8e11209feac7fb892cae68123e33bc8->enter($__internal_7830125f41254846f996c16bb93f252dc8e11209feac7fb892cae68123e33bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        $__internal_504e66faa2442c4416de52e273f5317254558fa9da388bc99c3eef0cb16c7aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e66faa2442c4416de52e273f5317254558fa9da388bc99c3eef0cb16c7aa4->enter($__internal_504e66faa2442c4416de52e273f5317254558fa9da388bc99c3eef0cb16c7aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cdplatform_body"));

        // line 9
        echo "     ";
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()))) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 12
        echo "
    
    ";
        // line 14
        if ( !$this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 15
            echo "      <p>
        Cette annonce est parue dans les catégories suivantes :
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 19
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </p>
    ";
        }
        // line 22
        echo "

";
        // line 24
        if ((twig_length_filter($this->env, ($context["listAdvertPhysique"] ?? $this->getContext($context, "listAdvertPhysique"))) > 0)) {
            // line 25
            echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdvertPhysique"] ?? $this->getContext($context, "listAdvertPhysique")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertPhysique"]) {
                // line 29
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertPhysique"], "physique", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertPhysique"], "level", array()), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertPhysique'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </ul>
  </div>
";
        }
        // line 34
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
      
  </div>
   


  <p>
    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_504e66faa2442c4416de52e273f5317254558fa9da388bc99c3eef0cb16c7aa4->leave($__internal_504e66faa2442c4416de52e273f5317254558fa9da388bc99c3eef0cb16c7aa4_prof);

        
        $__internal_7830125f41254846f996c16bb93f252dc8e11209feac7fb892cae68123e33bc8->leave($__internal_7830125f41254846f996c16bb93f252dc8e11209feac7fb892cae68123e33bc8_prof);

    }

    public function getTemplateName()
    {
        return "CDPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 53,  195 => 49,  188 => 45,  178 => 38,  170 => 35,  165 => 34,  160 => 31,  149 => 29,  145 => 28,  140 => 25,  138 => 24,  134 => 22,  130 => 20,  116 => 19,  110 => 18,  93 => 17,  89 => 15,  87 => 14,  83 => 12,  75 => 10,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
{% extends \"CDPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block cdplatform_body %}
     {% if advert.image is not null %}
        <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
    {% endif %}

    
    {% if not advert.categories.empty %}
      <p>
        Cette annonce est parue dans les catégories suivantes :
        {% for category in advert.categories %}
          {{ category.name }}{% if not loop.last %}, {% endif %}
        {% endfor %}
      </p>
    {% endif %}


{% if listAdvertPhysique|length > 0 %}
  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      {% for advertPhysique in listAdvertPhysique %}
        <li>{{ advertPhysique.physique.name }} : niveau {{ advertPhysique.level }}</li>
      {% endfor %}
    </ul>
  </div>
{% endif %}
  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
      
  </div>
   


  <p>
    <a href=\"{{ path('cd_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('cd_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('cd_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}", "CDPlatformBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
