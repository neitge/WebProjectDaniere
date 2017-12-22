<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f17703f6cb11e73c0eec5fe00f0734ede8dd9c3f67e148fc24fb83573981c91b extends Twig_Template
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
        $__internal_3bf2e1e1e14c5d953abb4051b805cb9875134752acb00cf3e29efcbf102999bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf2e1e1e14c5d953abb4051b805cb9875134752acb00cf3e29efcbf102999bc->enter($__internal_3bf2e1e1e14c5d953abb4051b805cb9875134752acb00cf3e29efcbf102999bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_5bfecd088dbfed3cd92f507c31a3871cb0fe13b6add24bd093f525c0f4d40933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfecd088dbfed3cd92f507c31a3871cb0fe13b6add24bd093f525c0f4d40933->enter($__internal_5bfecd088dbfed3cd92f507c31a3871cb0fe13b6add24bd093f525c0f4d40933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_3bf2e1e1e14c5d953abb4051b805cb9875134752acb00cf3e29efcbf102999bc->leave($__internal_3bf2e1e1e14c5d953abb4051b805cb9875134752acb00cf3e29efcbf102999bc_prof);

        
        $__internal_5bfecd088dbfed3cd92f507c31a3871cb0fe13b6add24bd093f525c0f4d40933->leave($__internal_5bfecd088dbfed3cd92f507c31a3871cb0fe13b6add24bd093f525c0f4d40933_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
