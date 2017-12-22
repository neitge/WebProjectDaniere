<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_91dbc3321693230917e97bf55971fb937058d95715e8fe6e9c1156f0664691ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a8ea8b97f144b890a71c4d6edac63045a4d9560b199b55e381e48903e84d386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a8ea8b97f144b890a71c4d6edac63045a4d9560b199b55e381e48903e84d386->enter($__internal_8a8ea8b97f144b890a71c4d6edac63045a4d9560b199b55e381e48903e84d386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_ace9c2a90d1a5148f35ea1d5c2de85d6d0fd6d250590719bffdd0fce12ab2552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace9c2a90d1a5148f35ea1d5c2de85d6d0fd6d250590719bffdd0fce12ab2552->enter($__internal_ace9c2a90d1a5148f35ea1d5c2de85d6d0fd6d250590719bffdd0fce12ab2552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a8ea8b97f144b890a71c4d6edac63045a4d9560b199b55e381e48903e84d386->leave($__internal_8a8ea8b97f144b890a71c4d6edac63045a4d9560b199b55e381e48903e84d386_prof);

        
        $__internal_ace9c2a90d1a5148f35ea1d5c2de85d6d0fd6d250590719bffdd0fce12ab2552->leave($__internal_ace9c2a90d1a5148f35ea1d5c2de85d6d0fd6d250590719bffdd0fce12ab2552_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b0048f552413a4aaa1ee11b9bd738b57ef9d645be8620513c0d6337face07f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0048f552413a4aaa1ee11b9bd738b57ef9d645be8620513c0d6337face07f1f->enter($__internal_b0048f552413a4aaa1ee11b9bd738b57ef9d645be8620513c0d6337face07f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_315e392ebd5c9756856196b6c3bf2bb3c508f923e824ed705ad1d124f17c4e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315e392ebd5c9756856196b6c3bf2bb3c508f923e824ed705ad1d124f17c4e18->enter($__internal_315e392ebd5c9756856196b6c3bf2bb3c508f923e824ed705ad1d124f17c4e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_315e392ebd5c9756856196b6c3bf2bb3c508f923e824ed705ad1d124f17c4e18->leave($__internal_315e392ebd5c9756856196b6c3bf2bb3c508f923e824ed705ad1d124f17c4e18_prof);

        
        $__internal_b0048f552413a4aaa1ee11b9bd738b57ef9d645be8620513c0d6337face07f1f->leave($__internal_b0048f552413a4aaa1ee11b9bd738b57ef9d645be8620513c0d6337face07f1f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_768880fd6eb8fd9f7982f25e0d9d1ea94e623714b3ece3f5979c9b332bcc0749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768880fd6eb8fd9f7982f25e0d9d1ea94e623714b3ece3f5979c9b332bcc0749->enter($__internal_768880fd6eb8fd9f7982f25e0d9d1ea94e623714b3ece3f5979c9b332bcc0749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4e7380ccaca66be6eb13e79bde0970d2a908fd0086446b12e5eaad736938cbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7380ccaca66be6eb13e79bde0970d2a908fd0086446b12e5eaad736938cbca->enter($__internal_4e7380ccaca66be6eb13e79bde0970d2a908fd0086446b12e5eaad736938cbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4e7380ccaca66be6eb13e79bde0970d2a908fd0086446b12e5eaad736938cbca->leave($__internal_4e7380ccaca66be6eb13e79bde0970d2a908fd0086446b12e5eaad736938cbca_prof);

        
        $__internal_768880fd6eb8fd9f7982f25e0d9d1ea94e623714b3ece3f5979c9b332bcc0749->leave($__internal_768880fd6eb8fd9f7982f25e0d9d1ea94e623714b3ece3f5979c9b332bcc0749_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f20f238a39a3f26add28e60d19578e448ebe99d73dfbf1b3f71c5c184bea26ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20f238a39a3f26add28e60d19578e448ebe99d73dfbf1b3f71c5c184bea26ae->enter($__internal_f20f238a39a3f26add28e60d19578e448ebe99d73dfbf1b3f71c5c184bea26ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_5f789fdcaef7f8484512987c3aa3a1d1f32dd8ee9fb834f03fae98f4a5d5b23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f789fdcaef7f8484512987c3aa3a1d1f32dd8ee9fb834f03fae98f4a5d5b23b->enter($__internal_5f789fdcaef7f8484512987c3aa3a1d1f32dd8ee9fb834f03fae98f4a5d5b23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_5f789fdcaef7f8484512987c3aa3a1d1f32dd8ee9fb834f03fae98f4a5d5b23b->leave($__internal_5f789fdcaef7f8484512987c3aa3a1d1f32dd8ee9fb834f03fae98f4a5d5b23b_prof);

        
        $__internal_f20f238a39a3f26add28e60d19578e448ebe99d73dfbf1b3f71c5c184bea26ae->leave($__internal_f20f238a39a3f26add28e60d19578e448ebe99d73dfbf1b3f71c5c184bea26ae_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ec3b405e7cae1553e29d9e31c05a2814d10bca653bd239d9454f40b5b0c06f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3b405e7cae1553e29d9e31c05a2814d10bca653bd239d9454f40b5b0c06f56->enter($__internal_ec3b405e7cae1553e29d9e31c05a2814d10bca653bd239d9454f40b5b0c06f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e48996ce8a028ed0d7ce6160144e585b4852160dc78367b82e39c0ba98e5d284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48996ce8a028ed0d7ce6160144e585b4852160dc78367b82e39c0ba98e5d284->enter($__internal_e48996ce8a028ed0d7ce6160144e585b4852160dc78367b82e39c0ba98e5d284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_e48996ce8a028ed0d7ce6160144e585b4852160dc78367b82e39c0ba98e5d284->leave($__internal_e48996ce8a028ed0d7ce6160144e585b4852160dc78367b82e39c0ba98e5d284_prof);

        
        $__internal_ec3b405e7cae1553e29d9e31c05a2814d10bca653bd239d9454f40b5b0c06f56->leave($__internal_ec3b405e7cae1553e29d9e31c05a2814d10bca653bd239d9454f40b5b0c06f56_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_f039aa2be097a53e77c6024503a072f0128d461d3e478fe95ecfef0ae4abcd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f039aa2be097a53e77c6024503a072f0128d461d3e478fe95ecfef0ae4abcd2e->enter($__internal_f039aa2be097a53e77c6024503a072f0128d461d3e478fe95ecfef0ae4abcd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_404df431a4efe4fdffcb60ae8be2353d307112aa8d3eaee0b8c29ac8273a95c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404df431a4efe4fdffcb60ae8be2353d307112aa8d3eaee0b8c29ac8273a95c7->enter($__internal_404df431a4efe4fdffcb60ae8be2353d307112aa8d3eaee0b8c29ac8273a95c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_404df431a4efe4fdffcb60ae8be2353d307112aa8d3eaee0b8c29ac8273a95c7->leave($__internal_404df431a4efe4fdffcb60ae8be2353d307112aa8d3eaee0b8c29ac8273a95c7_prof);

        
        $__internal_f039aa2be097a53e77c6024503a072f0128d461d3e478fe95ecfef0ae4abcd2e->leave($__internal_f039aa2be097a53e77c6024503a072f0128d461d3e478fe95ecfef0ae4abcd2e_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d7192c2dd1a0be5b24285aa3b8da6135f8ca02d2349f549b9b8ba9d28bdbdcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7192c2dd1a0be5b24285aa3b8da6135f8ca02d2349f549b9b8ba9d28bdbdcfd->enter($__internal_d7192c2dd1a0be5b24285aa3b8da6135f8ca02d2349f549b9b8ba9d28bdbdcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_cac1abbdfe88114fbe11c35603027863995678a4e2987d95cec16236fb364cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac1abbdfe88114fbe11c35603027863995678a4e2987d95cec16236fb364cf8->enter($__internal_cac1abbdfe88114fbe11c35603027863995678a4e2987d95cec16236fb364cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_cac1abbdfe88114fbe11c35603027863995678a4e2987d95cec16236fb364cf8->leave($__internal_cac1abbdfe88114fbe11c35603027863995678a4e2987d95cec16236fb364cf8_prof);

        
        $__internal_d7192c2dd1a0be5b24285aa3b8da6135f8ca02d2349f549b9b8ba9d28bdbdcfd->leave($__internal_d7192c2dd1a0be5b24285aa3b8da6135f8ca02d2349f549b9b8ba9d28bdbdcfd_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4c7ce1f5a934f62cee91af5e1b276dc736871822a4b26a88c232b0d705effbe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7ce1f5a934f62cee91af5e1b276dc736871822a4b26a88c232b0d705effbe3->enter($__internal_4c7ce1f5a934f62cee91af5e1b276dc736871822a4b26a88c232b0d705effbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_95de9139c9caf9e22c678e8560b27896fa1ff3b6f89c82d836c0f6b60188b93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95de9139c9caf9e22c678e8560b27896fa1ff3b6f89c82d836c0f6b60188b93c->enter($__internal_95de9139c9caf9e22c678e8560b27896fa1ff3b6f89c82d836c0f6b60188b93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_95de9139c9caf9e22c678e8560b27896fa1ff3b6f89c82d836c0f6b60188b93c->leave($__internal_95de9139c9caf9e22c678e8560b27896fa1ff3b6f89c82d836c0f6b60188b93c_prof);

        
        $__internal_4c7ce1f5a934f62cee91af5e1b276dc736871822a4b26a88c232b0d705effbe3->leave($__internal_4c7ce1f5a934f62cee91af5e1b276dc736871822a4b26a88c232b0d705effbe3_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a2f3d31e3fc3e019f65d72585efcefe8fc19228bf26b678051cc479bded3e9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f3d31e3fc3e019f65d72585efcefe8fc19228bf26b678051cc479bded3e9f0->enter($__internal_a2f3d31e3fc3e019f65d72585efcefe8fc19228bf26b678051cc479bded3e9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0245f7510568fe0448eb75083986f6381a6a93a54885eef6c7980a9a370cc2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0245f7510568fe0448eb75083986f6381a6a93a54885eef6c7980a9a370cc2de->enter($__internal_0245f7510568fe0448eb75083986f6381a6a93a54885eef6c7980a9a370cc2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_0245f7510568fe0448eb75083986f6381a6a93a54885eef6c7980a9a370cc2de->leave($__internal_0245f7510568fe0448eb75083986f6381a6a93a54885eef6c7980a9a370cc2de_prof);

        
        $__internal_a2f3d31e3fc3e019f65d72585efcefe8fc19228bf26b678051cc479bded3e9f0->leave($__internal_a2f3d31e3fc3e019f65d72585efcefe8fc19228bf26b678051cc479bded3e9f0_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2972ffabdd155a0f957dd70ca44b27997efb8043a5ed6bf9a607b98881d6ac8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2972ffabdd155a0f957dd70ca44b27997efb8043a5ed6bf9a607b98881d6ac8b->enter($__internal_2972ffabdd155a0f957dd70ca44b27997efb8043a5ed6bf9a607b98881d6ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d72a984ae412ef071ce7a7cd1b285056c5362f7d198a7cf445753e6294208269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72a984ae412ef071ce7a7cd1b285056c5362f7d198a7cf445753e6294208269->enter($__internal_d72a984ae412ef071ce7a7cd1b285056c5362f7d198a7cf445753e6294208269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_d72a984ae412ef071ce7a7cd1b285056c5362f7d198a7cf445753e6294208269->leave($__internal_d72a984ae412ef071ce7a7cd1b285056c5362f7d198a7cf445753e6294208269_prof);

        
        $__internal_2972ffabdd155a0f957dd70ca44b27997efb8043a5ed6bf9a607b98881d6ac8b->leave($__internal_2972ffabdd155a0f957dd70ca44b27997efb8043a5ed6bf9a607b98881d6ac8b_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_11cefbed9412167717a87bc30efb4c61603ebcfe5174a4de9672c9443b5a3eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cefbed9412167717a87bc30efb4c61603ebcfe5174a4de9672c9443b5a3eec->enter($__internal_11cefbed9412167717a87bc30efb4c61603ebcfe5174a4de9672c9443b5a3eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2b329040411f30a67bfbd47cc38d80ad818f07c9b4644c1fab8ef6ef0e2c7ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b329040411f30a67bfbd47cc38d80ad818f07c9b4644c1fab8ef6ef0e2c7ba0->enter($__internal_2b329040411f30a67bfbd47cc38d80ad818f07c9b4644c1fab8ef6ef0e2c7ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_2b329040411f30a67bfbd47cc38d80ad818f07c9b4644c1fab8ef6ef0e2c7ba0->leave($__internal_2b329040411f30a67bfbd47cc38d80ad818f07c9b4644c1fab8ef6ef0e2c7ba0_prof);

        
        $__internal_11cefbed9412167717a87bc30efb4c61603ebcfe5174a4de9672c9443b5a3eec->leave($__internal_11cefbed9412167717a87bc30efb4c61603ebcfe5174a4de9672c9443b5a3eec_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2d2f0450ec3a21dc09001eda552a3ce8074367bc7a87f5ab37ebe70ce73f65a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2f0450ec3a21dc09001eda552a3ce8074367bc7a87f5ab37ebe70ce73f65a1->enter($__internal_2d2f0450ec3a21dc09001eda552a3ce8074367bc7a87f5ab37ebe70ce73f65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_dbb71c04175caf6bb5fca4b00cdb267be502c1ac33a0a046b839acb8d437c7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb71c04175caf6bb5fca4b00cdb267be502c1ac33a0a046b839acb8d437c7dc->enter($__internal_dbb71c04175caf6bb5fca4b00cdb267be502c1ac33a0a046b839acb8d437c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_dbb71c04175caf6bb5fca4b00cdb267be502c1ac33a0a046b839acb8d437c7dc->leave($__internal_dbb71c04175caf6bb5fca4b00cdb267be502c1ac33a0a046b839acb8d437c7dc_prof);

        
        $__internal_2d2f0450ec3a21dc09001eda552a3ce8074367bc7a87f5ab37ebe70ce73f65a1->leave($__internal_2d2f0450ec3a21dc09001eda552a3ce8074367bc7a87f5ab37ebe70ce73f65a1_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_baae90d01fb3aee3d81b049ae5c68e50a662f1e1a19cbcbf2aac26e93150725c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baae90d01fb3aee3d81b049ae5c68e50a662f1e1a19cbcbf2aac26e93150725c->enter($__internal_baae90d01fb3aee3d81b049ae5c68e50a662f1e1a19cbcbf2aac26e93150725c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c58a91d68bb0f173759b0da3885247d25711e0293a037641df4a14c07029efd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58a91d68bb0f173759b0da3885247d25711e0293a037641df4a14c07029efd9->enter($__internal_c58a91d68bb0f173759b0da3885247d25711e0293a037641df4a14c07029efd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_c58a91d68bb0f173759b0da3885247d25711e0293a037641df4a14c07029efd9->leave($__internal_c58a91d68bb0f173759b0da3885247d25711e0293a037641df4a14c07029efd9_prof);

        
        $__internal_baae90d01fb3aee3d81b049ae5c68e50a662f1e1a19cbcbf2aac26e93150725c->leave($__internal_baae90d01fb3aee3d81b049ae5c68e50a662f1e1a19cbcbf2aac26e93150725c_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b11412bc570b37f3282e7ef7f3b668c4eac9b6a7d51cd3d97770101bfeeb35ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11412bc570b37f3282e7ef7f3b668c4eac9b6a7d51cd3d97770101bfeeb35ba->enter($__internal_b11412bc570b37f3282e7ef7f3b668c4eac9b6a7d51cd3d97770101bfeeb35ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0c11948389d460e940e11b1ad9239f186ac885618a3a601bc0debcffceda3dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c11948389d460e940e11b1ad9239f186ac885618a3a601bc0debcffceda3dd9->enter($__internal_0c11948389d460e940e11b1ad9239f186ac885618a3a601bc0debcffceda3dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0c11948389d460e940e11b1ad9239f186ac885618a3a601bc0debcffceda3dd9->leave($__internal_0c11948389d460e940e11b1ad9239f186ac885618a3a601bc0debcffceda3dd9_prof);

        
        $__internal_b11412bc570b37f3282e7ef7f3b668c4eac9b6a7d51cd3d97770101bfeeb35ba->leave($__internal_b11412bc570b37f3282e7ef7f3b668c4eac9b6a7d51cd3d97770101bfeeb35ba_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2cdfc6bdf4f7c278a875f60de271d3c3479cca4f5be64c364ee54f9a120a7912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdfc6bdf4f7c278a875f60de271d3c3479cca4f5be64c364ee54f9a120a7912->enter($__internal_2cdfc6bdf4f7c278a875f60de271d3c3479cca4f5be64c364ee54f9a120a7912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e8d3371820d5a52aa6c0bcf6486df632fcaec53ca24d7165f74e05511f78fd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8d3371820d5a52aa6c0bcf6486df632fcaec53ca24d7165f74e05511f78fd8c->enter($__internal_e8d3371820d5a52aa6c0bcf6486df632fcaec53ca24d7165f74e05511f78fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e8d3371820d5a52aa6c0bcf6486df632fcaec53ca24d7165f74e05511f78fd8c->leave($__internal_e8d3371820d5a52aa6c0bcf6486df632fcaec53ca24d7165f74e05511f78fd8c_prof);

        
        $__internal_2cdfc6bdf4f7c278a875f60de271d3c3479cca4f5be64c364ee54f9a120a7912->leave($__internal_2cdfc6bdf4f7c278a875f60de271d3c3479cca4f5be64c364ee54f9a120a7912_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_314e7aa0fb92234472f7d3ee8dd20fd1dc8ef3a0296ca3b1819f6a9db3884295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314e7aa0fb92234472f7d3ee8dd20fd1dc8ef3a0296ca3b1819f6a9db3884295->enter($__internal_314e7aa0fb92234472f7d3ee8dd20fd1dc8ef3a0296ca3b1819f6a9db3884295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_df8eec01e3c57830b78122a4d187bbbfa082e08da7d786969aa5f62752465cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8eec01e3c57830b78122a4d187bbbfa082e08da7d786969aa5f62752465cad->enter($__internal_df8eec01e3c57830b78122a4d187bbbfa082e08da7d786969aa5f62752465cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_df8eec01e3c57830b78122a4d187bbbfa082e08da7d786969aa5f62752465cad->leave($__internal_df8eec01e3c57830b78122a4d187bbbfa082e08da7d786969aa5f62752465cad_prof);

        
        $__internal_314e7aa0fb92234472f7d3ee8dd20fd1dc8ef3a0296ca3b1819f6a9db3884295->leave($__internal_314e7aa0fb92234472f7d3ee8dd20fd1dc8ef3a0296ca3b1819f6a9db3884295_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5eb9de28de5668cdc229b11869c8eebcff91c08553a13e9d37e63e13d31a494b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb9de28de5668cdc229b11869c8eebcff91c08553a13e9d37e63e13d31a494b->enter($__internal_5eb9de28de5668cdc229b11869c8eebcff91c08553a13e9d37e63e13d31a494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_af3d3662d30f75ea9767dcf2dfcc252b322baec8147f68e897ee06999bc9c782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3d3662d30f75ea9767dcf2dfcc252b322baec8147f68e897ee06999bc9c782->enter($__internal_af3d3662d30f75ea9767dcf2dfcc252b322baec8147f68e897ee06999bc9c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_af3d3662d30f75ea9767dcf2dfcc252b322baec8147f68e897ee06999bc9c782->leave($__internal_af3d3662d30f75ea9767dcf2dfcc252b322baec8147f68e897ee06999bc9c782_prof);

        
        $__internal_5eb9de28de5668cdc229b11869c8eebcff91c08553a13e9d37e63e13d31a494b->leave($__internal_5eb9de28de5668cdc229b11869c8eebcff91c08553a13e9d37e63e13d31a494b_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_8023edc5e13281a2f778f5adf16b577b918699722b6eef31c0d6f20e28a66d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8023edc5e13281a2f778f5adf16b577b918699722b6eef31c0d6f20e28a66d56->enter($__internal_8023edc5e13281a2f778f5adf16b577b918699722b6eef31c0d6f20e28a66d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_dad755b28f66da97f7bbd15e449750edac47cee63e041a7548124d4e6a182fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad755b28f66da97f7bbd15e449750edac47cee63e041a7548124d4e6a182fb3->enter($__internal_dad755b28f66da97f7bbd15e449750edac47cee63e041a7548124d4e6a182fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_dad755b28f66da97f7bbd15e449750edac47cee63e041a7548124d4e6a182fb3->leave($__internal_dad755b28f66da97f7bbd15e449750edac47cee63e041a7548124d4e6a182fb3_prof);

        
        $__internal_8023edc5e13281a2f778f5adf16b577b918699722b6eef31c0d6f20e28a66d56->leave($__internal_8023edc5e13281a2f778f5adf16b577b918699722b6eef31c0d6f20e28a66d56_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a23108bc4b05c57dbd1286ee2ddc7710591124aad38ee33b0ac9ed766759de41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23108bc4b05c57dbd1286ee2ddc7710591124aad38ee33b0ac9ed766759de41->enter($__internal_a23108bc4b05c57dbd1286ee2ddc7710591124aad38ee33b0ac9ed766759de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1675b6c5442ebf32520fa0c5d02922d43013aa72cec34fe218c315611b3dd13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1675b6c5442ebf32520fa0c5d02922d43013aa72cec34fe218c315611b3dd13c->enter($__internal_1675b6c5442ebf32520fa0c5d02922d43013aa72cec34fe218c315611b3dd13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_1675b6c5442ebf32520fa0c5d02922d43013aa72cec34fe218c315611b3dd13c->leave($__internal_1675b6c5442ebf32520fa0c5d02922d43013aa72cec34fe218c315611b3dd13c_prof);

        
        $__internal_a23108bc4b05c57dbd1286ee2ddc7710591124aad38ee33b0ac9ed766759de41->leave($__internal_a23108bc4b05c57dbd1286ee2ddc7710591124aad38ee33b0ac9ed766759de41_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5735e42442213df834c591236058d63e2f87ab3d15466e2dad89f7c1e6b09d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5735e42442213df834c591236058d63e2f87ab3d15466e2dad89f7c1e6b09d4b->enter($__internal_5735e42442213df834c591236058d63e2f87ab3d15466e2dad89f7c1e6b09d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5fcb13cc149653f389356b72e45da05d1a47e4a73b8782161086f89a7221a0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcb13cc149653f389356b72e45da05d1a47e4a73b8782161086f89a7221a0f2->enter($__internal_5fcb13cc149653f389356b72e45da05d1a47e4a73b8782161086f89a7221a0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5fcb13cc149653f389356b72e45da05d1a47e4a73b8782161086f89a7221a0f2->leave($__internal_5fcb13cc149653f389356b72e45da05d1a47e4a73b8782161086f89a7221a0f2_prof);

        
        $__internal_5735e42442213df834c591236058d63e2f87ab3d15466e2dad89f7c1e6b09d4b->leave($__internal_5735e42442213df834c591236058d63e2f87ab3d15466e2dad89f7c1e6b09d4b_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f37abd4984f666cfcb8ed0b5e527651d21749eedb509c1556cdc0ccab799cc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37abd4984f666cfcb8ed0b5e527651d21749eedb509c1556cdc0ccab799cc77->enter($__internal_f37abd4984f666cfcb8ed0b5e527651d21749eedb509c1556cdc0ccab799cc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2ec72eb810a22ace7b6148d7b20bfeaad55dbdcf4acc58452a3dfeb7b5483cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec72eb810a22ace7b6148d7b20bfeaad55dbdcf4acc58452a3dfeb7b5483cb9->enter($__internal_2ec72eb810a22ace7b6148d7b20bfeaad55dbdcf4acc58452a3dfeb7b5483cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2ec72eb810a22ace7b6148d7b20bfeaad55dbdcf4acc58452a3dfeb7b5483cb9->leave($__internal_2ec72eb810a22ace7b6148d7b20bfeaad55dbdcf4acc58452a3dfeb7b5483cb9_prof);

        
        $__internal_f37abd4984f666cfcb8ed0b5e527651d21749eedb509c1556cdc0ccab799cc77->leave($__internal_f37abd4984f666cfcb8ed0b5e527651d21749eedb509c1556cdc0ccab799cc77_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_333138f9a5ed92ca7e52b4556315f11c1c78d3d2b8f68e01cc5ded90b6a36df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333138f9a5ed92ca7e52b4556315f11c1c78d3d2b8f68e01cc5ded90b6a36df7->enter($__internal_333138f9a5ed92ca7e52b4556315f11c1c78d3d2b8f68e01cc5ded90b6a36df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_24507e7d79e55897d58c01bc1773c226fdd7c57c8ffc7f95b360378ff956d1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24507e7d79e55897d58c01bc1773c226fdd7c57c8ffc7f95b360378ff956d1c5->enter($__internal_24507e7d79e55897d58c01bc1773c226fdd7c57c8ffc7f95b360378ff956d1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_24507e7d79e55897d58c01bc1773c226fdd7c57c8ffc7f95b360378ff956d1c5->leave($__internal_24507e7d79e55897d58c01bc1773c226fdd7c57c8ffc7f95b360378ff956d1c5_prof);

        
        $__internal_333138f9a5ed92ca7e52b4556315f11c1c78d3d2b8f68e01cc5ded90b6a36df7->leave($__internal_333138f9a5ed92ca7e52b4556315f11c1c78d3d2b8f68e01cc5ded90b6a36df7_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9e1f245f4b656ffcd5315fcc90ace57eb6da67888b0c728e4b714bf7049cfbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1f245f4b656ffcd5315fcc90ace57eb6da67888b0c728e4b714bf7049cfbc9->enter($__internal_9e1f245f4b656ffcd5315fcc90ace57eb6da67888b0c728e4b714bf7049cfbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_b1aa450233bc938bf92d1e8f0fdeed3440f6a1587102e563313fca2ca0327bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1aa450233bc938bf92d1e8f0fdeed3440f6a1587102e563313fca2ca0327bd5->enter($__internal_b1aa450233bc938bf92d1e8f0fdeed3440f6a1587102e563313fca2ca0327bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b1aa450233bc938bf92d1e8f0fdeed3440f6a1587102e563313fca2ca0327bd5->leave($__internal_b1aa450233bc938bf92d1e8f0fdeed3440f6a1587102e563313fca2ca0327bd5_prof);

        
        $__internal_9e1f245f4b656ffcd5315fcc90ace57eb6da67888b0c728e4b714bf7049cfbc9->leave($__internal_9e1f245f4b656ffcd5315fcc90ace57eb6da67888b0c728e4b714bf7049cfbc9_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9e6819e3344f154f42018a3e4edd63bd6502ebfed2658c9a3157c2d49816f056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6819e3344f154f42018a3e4edd63bd6502ebfed2658c9a3157c2d49816f056->enter($__internal_9e6819e3344f154f42018a3e4edd63bd6502ebfed2658c9a3157c2d49816f056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_01c03c6240deab9e22790db5e95ebc38fdd3300c6b1a8a0942f4cd777ea25c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c03c6240deab9e22790db5e95ebc38fdd3300c6b1a8a0942f4cd777ea25c50->enter($__internal_01c03c6240deab9e22790db5e95ebc38fdd3300c6b1a8a0942f4cd777ea25c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_01c03c6240deab9e22790db5e95ebc38fdd3300c6b1a8a0942f4cd777ea25c50->leave($__internal_01c03c6240deab9e22790db5e95ebc38fdd3300c6b1a8a0942f4cd777ea25c50_prof);

        
        $__internal_9e6819e3344f154f42018a3e4edd63bd6502ebfed2658c9a3157c2d49816f056->leave($__internal_9e6819e3344f154f42018a3e4edd63bd6502ebfed2658c9a3157c2d49816f056_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_fb0e570c1291fa112c016ef797aa204b305b6c607215196e22f04cb32a072203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0e570c1291fa112c016ef797aa204b305b6c607215196e22f04cb32a072203->enter($__internal_fb0e570c1291fa112c016ef797aa204b305b6c607215196e22f04cb32a072203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a358d54dbb49b613abfe05ed3a3351f056c5501bf9f0dbd8430260350aec5f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a358d54dbb49b613abfe05ed3a3351f056c5501bf9f0dbd8430260350aec5f90->enter($__internal_a358d54dbb49b613abfe05ed3a3351f056c5501bf9f0dbd8430260350aec5f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a358d54dbb49b613abfe05ed3a3351f056c5501bf9f0dbd8430260350aec5f90->leave($__internal_a358d54dbb49b613abfe05ed3a3351f056c5501bf9f0dbd8430260350aec5f90_prof);

        
        $__internal_fb0e570c1291fa112c016ef797aa204b305b6c607215196e22f04cb32a072203->leave($__internal_fb0e570c1291fa112c016ef797aa204b305b6c607215196e22f04cb32a072203_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5eff7c60477a57033137845c495e87a1479f273cfbd19af34dc29ef4ffdc1b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eff7c60477a57033137845c495e87a1479f273cfbd19af34dc29ef4ffdc1b4c->enter($__internal_5eff7c60477a57033137845c495e87a1479f273cfbd19af34dc29ef4ffdc1b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_7e56bb098683b6a887c14baacdeeffbb27533bea9934e9113ceef8020d72c26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e56bb098683b6a887c14baacdeeffbb27533bea9934e9113ceef8020d72c26d->enter($__internal_7e56bb098683b6a887c14baacdeeffbb27533bea9934e9113ceef8020d72c26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_7e56bb098683b6a887c14baacdeeffbb27533bea9934e9113ceef8020d72c26d->leave($__internal_7e56bb098683b6a887c14baacdeeffbb27533bea9934e9113ceef8020d72c26d_prof);

        
        $__internal_5eff7c60477a57033137845c495e87a1479f273cfbd19af34dc29ef4ffdc1b4c->leave($__internal_5eff7c60477a57033137845c495e87a1479f273cfbd19af34dc29ef4ffdc1b4c_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
