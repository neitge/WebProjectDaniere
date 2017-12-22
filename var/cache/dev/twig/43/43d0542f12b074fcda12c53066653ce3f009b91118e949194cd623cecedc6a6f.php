<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
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
        $__internal_05a6792dc28404a241d18a9bb676f0a18ef479b057dc1c055896f510a87ba387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a6792dc28404a241d18a9bb676f0a18ef479b057dc1c055896f510a87ba387->enter($__internal_05a6792dc28404a241d18a9bb676f0a18ef479b057dc1c055896f510a87ba387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_894e75b7b4a1aeb373eb6f501755f07e91251386d7fabe29bd7699b0f5192542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894e75b7b4a1aeb373eb6f501755f07e91251386d7fabe29bd7699b0f5192542->enter($__internal_894e75b7b4a1aeb373eb6f501755f07e91251386d7fabe29bd7699b0f5192542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_05a6792dc28404a241d18a9bb676f0a18ef479b057dc1c055896f510a87ba387->leave($__internal_05a6792dc28404a241d18a9bb676f0a18ef479b057dc1c055896f510a87ba387_prof);

        
        $__internal_894e75b7b4a1aeb373eb6f501755f07e91251386d7fabe29bd7699b0f5192542->leave($__internal_894e75b7b4a1aeb373eb6f501755f07e91251386d7fabe29bd7699b0f5192542_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc6e2a5eae8eec6ef0f75b943f9c2dba0a239fe59bc3fd8f7899d9fb2e51203b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6e2a5eae8eec6ef0f75b943f9c2dba0a239fe59bc3fd8f7899d9fb2e51203b->enter($__internal_cc6e2a5eae8eec6ef0f75b943f9c2dba0a239fe59bc3fd8f7899d9fb2e51203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37696bd5e38bcf21845e271aa156bddefae92c9321546572dcfa3a937a1696d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37696bd5e38bcf21845e271aa156bddefae92c9321546572dcfa3a937a1696d2->enter($__internal_37696bd5e38bcf21845e271aa156bddefae92c9321546572dcfa3a937a1696d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_37696bd5e38bcf21845e271aa156bddefae92c9321546572dcfa3a937a1696d2->leave($__internal_37696bd5e38bcf21845e271aa156bddefae92c9321546572dcfa3a937a1696d2_prof);

        
        $__internal_cc6e2a5eae8eec6ef0f75b943f9c2dba0a239fe59bc3fd8f7899d9fb2e51203b->leave($__internal_cc6e2a5eae8eec6ef0f75b943f9c2dba0a239fe59bc3fd8f7899d9fb2e51203b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01956592cfc82efdb5536190e84f4e63d1511030ebaa90af382fa05f41eb6cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01956592cfc82efdb5536190e84f4e63d1511030ebaa90af382fa05f41eb6cbb->enter($__internal_01956592cfc82efdb5536190e84f4e63d1511030ebaa90af382fa05f41eb6cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_386e913acbc9a8e8ae69ecf018bc293e58a226dcdf27aabfe0b90e54fb6130de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386e913acbc9a8e8ae69ecf018bc293e58a226dcdf27aabfe0b90e54fb6130de->enter($__internal_386e913acbc9a8e8ae69ecf018bc293e58a226dcdf27aabfe0b90e54fb6130de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_386e913acbc9a8e8ae69ecf018bc293e58a226dcdf27aabfe0b90e54fb6130de->leave($__internal_386e913acbc9a8e8ae69ecf018bc293e58a226dcdf27aabfe0b90e54fb6130de_prof);

        
        $__internal_01956592cfc82efdb5536190e84f4e63d1511030ebaa90af382fa05f41eb6cbb->leave($__internal_01956592cfc82efdb5536190e84f4e63d1511030ebaa90af382fa05f41eb6cbb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bfe746d8f81a88b609212b5e21f34edec057034ea13ff93c566392f263f58b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfe746d8f81a88b609212b5e21f34edec057034ea13ff93c566392f263f58b0->enter($__internal_8bfe746d8f81a88b609212b5e21f34edec057034ea13ff93c566392f263f58b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e767d7d6420c6b2820b85310fe6ebd3b636b9a5295ee6d81a105cf15a9b808d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e767d7d6420c6b2820b85310fe6ebd3b636b9a5295ee6d81a105cf15a9b808d->enter($__internal_8e767d7d6420c6b2820b85310fe6ebd3b636b9a5295ee6d81a105cf15a9b808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e767d7d6420c6b2820b85310fe6ebd3b636b9a5295ee6d81a105cf15a9b808d->leave($__internal_8e767d7d6420c6b2820b85310fe6ebd3b636b9a5295ee6d81a105cf15a9b808d_prof);

        
        $__internal_8bfe746d8f81a88b609212b5e21f34edec057034ea13ff93c566392f263f58b0->leave($__internal_8bfe746d8f81a88b609212b5e21f34edec057034ea13ff93c566392f263f58b0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25ed050931bb47a14290e0ec939fdaa6c571d65bd6e26af4b31391c6de0985f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ed050931bb47a14290e0ec939fdaa6c571d65bd6e26af4b31391c6de0985f7->enter($__internal_25ed050931bb47a14290e0ec939fdaa6c571d65bd6e26af4b31391c6de0985f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1766a60567e47f2cc8b61074c4fdb7b487aa7c95d2491f0979fa54074e5db3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1766a60567e47f2cc8b61074c4fdb7b487aa7c95d2491f0979fa54074e5db3f->enter($__internal_c1766a60567e47f2cc8b61074c4fdb7b487aa7c95d2491f0979fa54074e5db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1766a60567e47f2cc8b61074c4fdb7b487aa7c95d2491f0979fa54074e5db3f->leave($__internal_c1766a60567e47f2cc8b61074c4fdb7b487aa7c95d2491f0979fa54074e5db3f_prof);

        
        $__internal_25ed050931bb47a14290e0ec939fdaa6c571d65bd6e26af4b31391c6de0985f7->leave($__internal_25ed050931bb47a14290e0ec939fdaa6c571d65bd6e26af4b31391c6de0985f7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\Symfo\\app\\Resources\\views\\base.html.twig");
    }
}
