<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e2bff2c555f05d42429c7a39dc62f1e4d40b84f64feff5f91ae831b77cd06cdf extends Twig_Template
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
        $__internal_379565c2bae6f926a132a1188429b6925a70578c41feb94583929f3964804d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379565c2bae6f926a132a1188429b6925a70578c41feb94583929f3964804d6d->enter($__internal_379565c2bae6f926a132a1188429b6925a70578c41feb94583929f3964804d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_39cbbfca1eb3795fcee535b327b84ddee5708a07d3afc024d579c12d96426f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cbbfca1eb3795fcee535b327b84ddee5708a07d3afc024d579c12d96426f61->enter($__internal_39cbbfca1eb3795fcee535b327b84ddee5708a07d3afc024d579c12d96426f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_379565c2bae6f926a132a1188429b6925a70578c41feb94583929f3964804d6d->leave($__internal_379565c2bae6f926a132a1188429b6925a70578c41feb94583929f3964804d6d_prof);

        
        $__internal_39cbbfca1eb3795fcee535b327b84ddee5708a07d3afc024d579c12d96426f61->leave($__internal_39cbbfca1eb3795fcee535b327b84ddee5708a07d3afc024d579c12d96426f61_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
