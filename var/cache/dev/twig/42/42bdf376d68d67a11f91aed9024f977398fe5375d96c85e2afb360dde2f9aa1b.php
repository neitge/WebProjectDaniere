<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_a759a908dd270e9b4504436f6763e257f38425ae400fa260a69062c667f07cdd extends Twig_Template
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
        $__internal_ba34290bb35092eedd1aff98c45036bf8f2501e63888b3e3bb6c54a4b99d8c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba34290bb35092eedd1aff98c45036bf8f2501e63888b3e3bb6c54a4b99d8c57->enter($__internal_ba34290bb35092eedd1aff98c45036bf8f2501e63888b3e3bb6c54a4b99d8c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_5ea18deb2ce6e77f5bd5ae065fa0fe5ac11409d0ba5e7e4d76c09f83fb4b2650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea18deb2ce6e77f5bd5ae065fa0fe5ac11409d0ba5e7e4d76c09f83fb4b2650->enter($__internal_5ea18deb2ce6e77f5bd5ae065fa0fe5ac11409d0ba5e7e4d76c09f83fb4b2650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ba34290bb35092eedd1aff98c45036bf8f2501e63888b3e3bb6c54a4b99d8c57->leave($__internal_ba34290bb35092eedd1aff98c45036bf8f2501e63888b3e3bb6c54a4b99d8c57_prof);

        
        $__internal_5ea18deb2ce6e77f5bd5ae065fa0fe5ac11409d0ba5e7e4d76c09f83fb4b2650->leave($__internal_5ea18deb2ce6e77f5bd5ae065fa0fe5ac11409d0ba5e7e4d76c09f83fb4b2650_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
