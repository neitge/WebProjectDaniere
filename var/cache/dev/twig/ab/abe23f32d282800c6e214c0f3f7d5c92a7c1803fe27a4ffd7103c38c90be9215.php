<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_5f7dd656d3b0a26f34e8c8b8dc3cf6a12151d8a3be12a50af7600d6681901dbb extends Twig_Template
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
        $__internal_6d4446676972e7c05180d490e9190a1d931e436ff3741160bfd213ca3d545582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4446676972e7c05180d490e9190a1d931e436ff3741160bfd213ca3d545582->enter($__internal_6d4446676972e7c05180d490e9190a1d931e436ff3741160bfd213ca3d545582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e7c4789fb96edd82cf0a0b8a6bec05bfdf73ecda6e7da4a3eff49cb410d33223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c4789fb96edd82cf0a0b8a6bec05bfdf73ecda6e7da4a3eff49cb410d33223->enter($__internal_e7c4789fb96edd82cf0a0b8a6bec05bfdf73ecda6e7da4a3eff49cb410d33223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6d4446676972e7c05180d490e9190a1d931e436ff3741160bfd213ca3d545582->leave($__internal_6d4446676972e7c05180d490e9190a1d931e436ff3741160bfd213ca3d545582_prof);

        
        $__internal_e7c4789fb96edd82cf0a0b8a6bec05bfdf73ecda6e7da4a3eff49cb410d33223->leave($__internal_e7c4789fb96edd82cf0a0b8a6bec05bfdf73ecda6e7da4a3eff49cb410d33223_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
