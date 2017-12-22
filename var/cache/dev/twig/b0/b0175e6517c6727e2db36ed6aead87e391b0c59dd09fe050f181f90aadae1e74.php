<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_ab75f73eb3264a7290edbfea7e04927f25a38c35f2120a145d3af15fee363549 extends Twig_Template
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
        $__internal_67b83e6728323a9122e8a65b757a0332ab2e677ce004d25df451b4e1ae88f0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b83e6728323a9122e8a65b757a0332ab2e677ce004d25df451b4e1ae88f0f0->enter($__internal_67b83e6728323a9122e8a65b757a0332ab2e677ce004d25df451b4e1ae88f0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3f84738b5d58fce8f017bc84d5ab372456c0ca701be7c0a1f2d2f96ac7a0e511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f84738b5d58fce8f017bc84d5ab372456c0ca701be7c0a1f2d2f96ac7a0e511->enter($__internal_3f84738b5d58fce8f017bc84d5ab372456c0ca701be7c0a1f2d2f96ac7a0e511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_67b83e6728323a9122e8a65b757a0332ab2e677ce004d25df451b4e1ae88f0f0->leave($__internal_67b83e6728323a9122e8a65b757a0332ab2e677ce004d25df451b4e1ae88f0f0_prof);

        
        $__internal_3f84738b5d58fce8f017bc84d5ab372456c0ca701be7c0a1f2d2f96ac7a0e511->leave($__internal_3f84738b5d58fce8f017bc84d5ab372456c0ca701be7c0a1f2d2f96ac7a0e511_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
