<?php

/* @CDPlatform/Advert/view.html.twig */
class __TwigTemplate_c717c95205c55d9c5b6f227c74427ef162dab8ceb9349bfc2105b7aaf2b42806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CDPlatformBundle::layout.html.twig", "@CDPlatform/Advert/view.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_cdplatform_body($context, array $blocks = array())
    {
        // line 9
        echo "     ";
        if ( !(null === $this->getAttribute(($context["advert"] ?? null), "image", array()))) {
            // line 10
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? null), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? null), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 12
        echo "
    
    ";
        // line 14
        if ( !$this->getAttribute($this->getAttribute(($context["advert"] ?? null), "categories", array()), "empty", array())) {
            // line 15
            echo "      <p>
        Cette annonce est parue dans les catégories suivantes :
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["advert"] ?? null), "categories", array()));
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
        if ((twig_length_filter($this->env, ($context["listAdvertPhysique"] ?? null)) > 0)) {
            // line 25
            echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdvertPhysique"] ?? null));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? null), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? null), "content", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cd_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "@CDPlatform/Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 53,  165 => 49,  158 => 45,  148 => 38,  140 => 35,  135 => 34,  130 => 31,  119 => 29,  115 => 28,  110 => 25,  108 => 24,  104 => 22,  100 => 20,  86 => 19,  80 => 18,  63 => 17,  59 => 15,  57 => 14,  53 => 12,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CDPlatform/Advert/view.html.twig", "C:\\wamp\\www\\Symfo\\src\\CD\\PlatformBundle\\Resources\\views\\Advert\\view.html.twig");
    }
}
