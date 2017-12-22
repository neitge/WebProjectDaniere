<?php

/* @CDPlatform/Advert/form.html.twig */
class __TwigTemplate_ad044aee4152047ccaf981dbc7ced2d872560b3528a2d73ab80c5761d8224a46 extends Twig_Template
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
        $__internal_8cb5d9a40ab259168bb4e3e51888df1b14a4fb275d5757018f0ed7f9ee36f62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb5d9a40ab259168bb4e3e51888df1b14a4fb275d5757018f0ed7f9ee36f62d->enter($__internal_8cb5d9a40ab259168bb4e3e51888df1b14a4fb275d5757018f0ed7f9ee36f62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/form.html.twig"));

        $__internal_8ddbdc10b0c8e4ff8a2015e6c654b3542780f89cd1e439ce8ef31c8c0d392cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddbdc10b0c8e4ff8a2015e6c654b3542780f89cd1e439ce8ef31c8c0d392cc2->enter($__internal_8ddbdc10b0c8e4ff8a2015e6c654b3542780f89cd1e439ce8ef31c8c0d392cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CDPlatform/Advert/form.html.twig"));

        // line 1
        echo "<h3>Remplissez les champs suivants pour votre annonce</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 7
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 10
        echo "  ";
        if ($this->getAttribute(($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 11
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'row');
            echo "
  ";
        }
        // line 13
        echo "
  ";
        // line 15
        echo "  <div class=\"form-group\">
    ";
        // line 17
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "

    ";
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 24
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 29
        echo "  <div class=\"form-group\">
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'row');
        echo "

  ";
        // line 39
        if ($this->getAttribute(($context["form"] ?? null), "published", array(), "any", true, true)) {
            // line 40
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'row');
            echo "
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'row');
        echo "

  ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()), 'row');
        echo "

  ";
        // line 48
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 51
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 54
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

";
        // line 58
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>


<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#advert_categories');
    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;
    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
      addCategory(\$container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }
    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;
      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);
      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);
      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);
      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }
    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
      // Ajout du lien
      \$prototype.append(\$deleteLink);
      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>";
        
        $__internal_8cb5d9a40ab259168bb4e3e51888df1b14a4fb275d5757018f0ed7f9ee36f62d->leave($__internal_8cb5d9a40ab259168bb4e3e51888df1b14a4fb275d5757018f0ed7f9ee36f62d_prof);

        
        $__internal_8ddbdc10b0c8e4ff8a2015e6c654b3542780f89cd1e439ce8ef31c8c0d392cc2->leave($__internal_8ddbdc10b0c8e4ff8a2015e6c654b3542780f89cd1e439ce8ef31c8c0d392cc2_prof);

    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 58,  134 => 54,  128 => 51,  122 => 48,  117 => 45,  112 => 43,  109 => 42,  103 => 40,  101 => 39,  96 => 37,  89 => 33,  84 => 31,  80 => 30,  77 => 29,  69 => 24,  62 => 20,  56 => 17,  53 => 15,  50 => 13,  44 => 11,  41 => 10,  35 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Remplissez les champs suivants pour votre annonce</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération du label + error + widget pour un champ. #}
  {% if form.date is defined %}
    {{ form_row(form.date) }}
  {% endif %}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.title) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Un nouveau champ #}
  <div class=\"form-group\">
    {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.content) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {{ form_row(form.author) }}

  {% if form.published is defined %}
    {{ form_row(form.published) }}
  {% endif %}

  {{ form_row(form.image) }}

  {{ form_row(form.categories) }}

  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

  {# Génération automatique des champs pas encore écrits. #}
  {{ form_rest(form) }}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>

{# On charge la bibliothèque jQuery. #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>


<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#advert_categories');
    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;
    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
      addCategory(\$container);
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }
    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;
      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);
      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);
      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);
      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }
    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');
      // Ajout du lien
      \$prototype.append(\$deleteLink);
      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();
        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>", "@CDPlatform/Advert/form.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\form.html.twig");
    }
}
