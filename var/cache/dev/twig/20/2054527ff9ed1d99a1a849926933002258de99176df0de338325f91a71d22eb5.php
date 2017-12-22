<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5526634d00e1b3c0fe3d49e51a5d49e6c66d009014c14d98275452aad1d77274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_094ba6e9e95343ddc1ccf570eb09ea733bc9d7da61621c193a87f35042c2a43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094ba6e9e95343ddc1ccf570eb09ea733bc9d7da61621c193a87f35042c2a43e->enter($__internal_094ba6e9e95343ddc1ccf570eb09ea733bc9d7da61621c193a87f35042c2a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_33676f1c0c63a4b34b3f17714924becea39ebda21bf0a9e710206d9cc10aca75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33676f1c0c63a4b34b3f17714924becea39ebda21bf0a9e710206d9cc10aca75->enter($__internal_33676f1c0c63a4b34b3f17714924becea39ebda21bf0a9e710206d9cc10aca75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_094ba6e9e95343ddc1ccf570eb09ea733bc9d7da61621c193a87f35042c2a43e->leave($__internal_094ba6e9e95343ddc1ccf570eb09ea733bc9d7da61621c193a87f35042c2a43e_prof);

        
        $__internal_33676f1c0c63a4b34b3f17714924becea39ebda21bf0a9e710206d9cc10aca75->leave($__internal_33676f1c0c63a4b34b3f17714924becea39ebda21bf0a9e710206d9cc10aca75_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5ccaed9234e82e945a058e2c2a55ef74186bc48efecd1afd79b4ceb23e43df10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ccaed9234e82e945a058e2c2a55ef74186bc48efecd1afd79b4ceb23e43df10->enter($__internal_5ccaed9234e82e945a058e2c2a55ef74186bc48efecd1afd79b4ceb23e43df10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_34d9504d49bcd6e12c9035aaa8092a965fd1243edbf55ecb4847396fef269827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d9504d49bcd6e12c9035aaa8092a965fd1243edbf55ecb4847396fef269827->enter($__internal_34d9504d49bcd6e12c9035aaa8092a965fd1243edbf55ecb4847396fef269827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_34d9504d49bcd6e12c9035aaa8092a965fd1243edbf55ecb4847396fef269827->leave($__internal_34d9504d49bcd6e12c9035aaa8092a965fd1243edbf55ecb4847396fef269827_prof);

        
        $__internal_5ccaed9234e82e945a058e2c2a55ef74186bc48efecd1afd79b4ceb23e43df10->leave($__internal_5ccaed9234e82e945a058e2c2a55ef74186bc48efecd1afd79b4ceb23e43df10_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b53832cbe146b01a7cd909f137e8aec5b35d96f9c8fabd6bfbd3c42f4436ed41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53832cbe146b01a7cd909f137e8aec5b35d96f9c8fabd6bfbd3c42f4436ed41->enter($__internal_b53832cbe146b01a7cd909f137e8aec5b35d96f9c8fabd6bfbd3c42f4436ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_89a94ba592ef3d59c3681ef8dffd3305d5a835011c5c394ccce1f269eda0ecda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a94ba592ef3d59c3681ef8dffd3305d5a835011c5c394ccce1f269eda0ecda->enter($__internal_89a94ba592ef3d59c3681ef8dffd3305d5a835011c5c394ccce1f269eda0ecda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_89a94ba592ef3d59c3681ef8dffd3305d5a835011c5c394ccce1f269eda0ecda->leave($__internal_89a94ba592ef3d59c3681ef8dffd3305d5a835011c5c394ccce1f269eda0ecda_prof);

        
        $__internal_b53832cbe146b01a7cd909f137e8aec5b35d96f9c8fabd6bfbd3c42f4436ed41->leave($__internal_b53832cbe146b01a7cd909f137e8aec5b35d96f9c8fabd6bfbd3c42f4436ed41_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_bdfc7daffa29cced4b61537a708a6e38345aaf6362de54e6fa88897f1f5fec71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfc7daffa29cced4b61537a708a6e38345aaf6362de54e6fa88897f1f5fec71->enter($__internal_bdfc7daffa29cced4b61537a708a6e38345aaf6362de54e6fa88897f1f5fec71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ea4ed5a4687c5833a009dede13bfe6b499a201b68091844e258028005b0bc4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4ed5a4687c5833a009dede13bfe6b499a201b68091844e258028005b0bc4c8->enter($__internal_ea4ed5a4687c5833a009dede13bfe6b499a201b68091844e258028005b0bc4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ea4ed5a4687c5833a009dede13bfe6b499a201b68091844e258028005b0bc4c8->leave($__internal_ea4ed5a4687c5833a009dede13bfe6b499a201b68091844e258028005b0bc4c8_prof);

        
        $__internal_bdfc7daffa29cced4b61537a708a6e38345aaf6362de54e6fa88897f1f5fec71->leave($__internal_bdfc7daffa29cced4b61537a708a6e38345aaf6362de54e6fa88897f1f5fec71_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_598023158053bacf21c7f2695d5c4f225c926111aab12186f76e55a8c7a53965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598023158053bacf21c7f2695d5c4f225c926111aab12186f76e55a8c7a53965->enter($__internal_598023158053bacf21c7f2695d5c4f225c926111aab12186f76e55a8c7a53965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0a910062af3d3cbb5300c9b174ff872be55fce628c65f9e57de760df84e24923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a910062af3d3cbb5300c9b174ff872be55fce628c65f9e57de760df84e24923->enter($__internal_0a910062af3d3cbb5300c9b174ff872be55fce628c65f9e57de760df84e24923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_49b4722aa139c6d1004c30f25ae2f302d3de79fef44debfd9b5728c5734869d4 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_7d5eb88a742fc87a9d879af69785b6e0eb57bd5eab67e98bf9d862ec9545c1e9 = "{{") && ('' === $__internal_7d5eb88a742fc87a9d879af69785b6e0eb57bd5eab67e98bf9d862ec9545c1e9 || 0 === strpos($__internal_49b4722aa139c6d1004c30f25ae2f302d3de79fef44debfd9b5728c5734869d4, $__internal_7d5eb88a742fc87a9d879af69785b6e0eb57bd5eab67e98bf9d862ec9545c1e9)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_0a910062af3d3cbb5300c9b174ff872be55fce628c65f9e57de760df84e24923->leave($__internal_0a910062af3d3cbb5300c9b174ff872be55fce628c65f9e57de760df84e24923_prof);

        
        $__internal_598023158053bacf21c7f2695d5c4f225c926111aab12186f76e55a8c7a53965->leave($__internal_598023158053bacf21c7f2695d5c4f225c926111aab12186f76e55a8c7a53965_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_619e049c530468f39cc402d3fb73974bbcedce02a86a26de3034d32858ddddc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619e049c530468f39cc402d3fb73974bbcedce02a86a26de3034d32858ddddc3->enter($__internal_619e049c530468f39cc402d3fb73974bbcedce02a86a26de3034d32858ddddc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cc21e48c5827f554017bd2440189dd8499e02d805ff48a522ffceded474d8cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc21e48c5827f554017bd2440189dd8499e02d805ff48a522ffceded474d8cfe->enter($__internal_cc21e48c5827f554017bd2440189dd8499e02d805ff48a522ffceded474d8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cc21e48c5827f554017bd2440189dd8499e02d805ff48a522ffceded474d8cfe->leave($__internal_cc21e48c5827f554017bd2440189dd8499e02d805ff48a522ffceded474d8cfe_prof);

        
        $__internal_619e049c530468f39cc402d3fb73974bbcedce02a86a26de3034d32858ddddc3->leave($__internal_619e049c530468f39cc402d3fb73974bbcedce02a86a26de3034d32858ddddc3_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d614824bb8b45dc47a91dcffce80dbf032fe8d2c292543b9cc07cd78119368c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d614824bb8b45dc47a91dcffce80dbf032fe8d2c292543b9cc07cd78119368c7->enter($__internal_d614824bb8b45dc47a91dcffce80dbf032fe8d2c292543b9cc07cd78119368c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_585474f00129d1788cb5330e96be3354ef07cc44896dc3929cf1679eb95d8838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585474f00129d1788cb5330e96be3354ef07cc44896dc3929cf1679eb95d8838->enter($__internal_585474f00129d1788cb5330e96be3354ef07cc44896dc3929cf1679eb95d8838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_585474f00129d1788cb5330e96be3354ef07cc44896dc3929cf1679eb95d8838->leave($__internal_585474f00129d1788cb5330e96be3354ef07cc44896dc3929cf1679eb95d8838_prof);

        
        $__internal_d614824bb8b45dc47a91dcffce80dbf032fe8d2c292543b9cc07cd78119368c7->leave($__internal_d614824bb8b45dc47a91dcffce80dbf032fe8d2c292543b9cc07cd78119368c7_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ce443569732ae52b4ee03c7bceb0f9f981c93b706c71276d77417498da45dbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce443569732ae52b4ee03c7bceb0f9f981c93b706c71276d77417498da45dbd7->enter($__internal_ce443569732ae52b4ee03c7bceb0f9f981c93b706c71276d77417498da45dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_fb62e13be23df9033332ad64fb82671cad607aa9fd316e83ce16a5e28cf4962a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb62e13be23df9033332ad64fb82671cad607aa9fd316e83ce16a5e28cf4962a->enter($__internal_fb62e13be23df9033332ad64fb82671cad607aa9fd316e83ce16a5e28cf4962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_fb62e13be23df9033332ad64fb82671cad607aa9fd316e83ce16a5e28cf4962a->leave($__internal_fb62e13be23df9033332ad64fb82671cad607aa9fd316e83ce16a5e28cf4962a_prof);

        
        $__internal_ce443569732ae52b4ee03c7bceb0f9f981c93b706c71276d77417498da45dbd7->leave($__internal_ce443569732ae52b4ee03c7bceb0f9f981c93b706c71276d77417498da45dbd7_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_00106da05d5683a95870d7ea49027ae0e7f2b8675183bb6b2f6562efd9997e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00106da05d5683a95870d7ea49027ae0e7f2b8675183bb6b2f6562efd9997e94->enter($__internal_00106da05d5683a95870d7ea49027ae0e7f2b8675183bb6b2f6562efd9997e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bcb2b33073d74597bebfe922e96d03f330691583105e257384be8051bc6e084c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb2b33073d74597bebfe922e96d03f330691583105e257384be8051bc6e084c->enter($__internal_bcb2b33073d74597bebfe922e96d03f330691583105e257384be8051bc6e084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_bcb2b33073d74597bebfe922e96d03f330691583105e257384be8051bc6e084c->leave($__internal_bcb2b33073d74597bebfe922e96d03f330691583105e257384be8051bc6e084c_prof);

        
        $__internal_00106da05d5683a95870d7ea49027ae0e7f2b8675183bb6b2f6562efd9997e94->leave($__internal_00106da05d5683a95870d7ea49027ae0e7f2b8675183bb6b2f6562efd9997e94_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f1a5e238b25a043797087db4ddf8c3d7a0cb94e282b3924c62e47a717d6b088e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a5e238b25a043797087db4ddf8c3d7a0cb94e282b3924c62e47a717d6b088e->enter($__internal_f1a5e238b25a043797087db4ddf8c3d7a0cb94e282b3924c62e47a717d6b088e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9799af07a6f0a861bcb4e3367ae1db03f4098248de269f61d96aa0fc9b5a090b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9799af07a6f0a861bcb4e3367ae1db03f4098248de269f61d96aa0fc9b5a090b->enter($__internal_9799af07a6f0a861bcb4e3367ae1db03f4098248de269f61d96aa0fc9b5a090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_9799af07a6f0a861bcb4e3367ae1db03f4098248de269f61d96aa0fc9b5a090b->leave($__internal_9799af07a6f0a861bcb4e3367ae1db03f4098248de269f61d96aa0fc9b5a090b_prof);

        
        $__internal_f1a5e238b25a043797087db4ddf8c3d7a0cb94e282b3924c62e47a717d6b088e->leave($__internal_f1a5e238b25a043797087db4ddf8c3d7a0cb94e282b3924c62e47a717d6b088e_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d6341ecfffff39b4ebe8a73fd20136327e1efd493cd51017cbdf7808615c64d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6341ecfffff39b4ebe8a73fd20136327e1efd493cd51017cbdf7808615c64d7->enter($__internal_d6341ecfffff39b4ebe8a73fd20136327e1efd493cd51017cbdf7808615c64d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_cdf7db3e9bf9c0c058fa7f51b682c6d8ffdd35c0b8570c21be8508e57845e10e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf7db3e9bf9c0c058fa7f51b682c6d8ffdd35c0b8570c21be8508e57845e10e->enter($__internal_cdf7db3e9bf9c0c058fa7f51b682c6d8ffdd35c0b8570c21be8508e57845e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_cdf7db3e9bf9c0c058fa7f51b682c6d8ffdd35c0b8570c21be8508e57845e10e->leave($__internal_cdf7db3e9bf9c0c058fa7f51b682c6d8ffdd35c0b8570c21be8508e57845e10e_prof);

        
        $__internal_d6341ecfffff39b4ebe8a73fd20136327e1efd493cd51017cbdf7808615c64d7->leave($__internal_d6341ecfffff39b4ebe8a73fd20136327e1efd493cd51017cbdf7808615c64d7_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1a2819235fb97ee6cf697d3f0662d9f76014f41fe6d56ad2661379dbc35c7527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2819235fb97ee6cf697d3f0662d9f76014f41fe6d56ad2661379dbc35c7527->enter($__internal_1a2819235fb97ee6cf697d3f0662d9f76014f41fe6d56ad2661379dbc35c7527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_0fd779298dbd7f63a2c26311e7b7dce85871bb13e5407c99b43ce5e2538bff04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd779298dbd7f63a2c26311e7b7dce85871bb13e5407c99b43ce5e2538bff04->enter($__internal_0fd779298dbd7f63a2c26311e7b7dce85871bb13e5407c99b43ce5e2538bff04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_0fd779298dbd7f63a2c26311e7b7dce85871bb13e5407c99b43ce5e2538bff04->leave($__internal_0fd779298dbd7f63a2c26311e7b7dce85871bb13e5407c99b43ce5e2538bff04_prof);

        
        $__internal_1a2819235fb97ee6cf697d3f0662d9f76014f41fe6d56ad2661379dbc35c7527->leave($__internal_1a2819235fb97ee6cf697d3f0662d9f76014f41fe6d56ad2661379dbc35c7527_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_550f2a76e86c0d86e66f9a4092bdcf050dc1e068eafbcccb4feaee8cd241bcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550f2a76e86c0d86e66f9a4092bdcf050dc1e068eafbcccb4feaee8cd241bcfa->enter($__internal_550f2a76e86c0d86e66f9a4092bdcf050dc1e068eafbcccb4feaee8cd241bcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_eaa0c09c2b51168a8022299dabc3145b74475e7120c8928bda977a59c4cd6033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa0c09c2b51168a8022299dabc3145b74475e7120c8928bda977a59c4cd6033->enter($__internal_eaa0c09c2b51168a8022299dabc3145b74475e7120c8928bda977a59c4cd6033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_eaa0c09c2b51168a8022299dabc3145b74475e7120c8928bda977a59c4cd6033->leave($__internal_eaa0c09c2b51168a8022299dabc3145b74475e7120c8928bda977a59c4cd6033_prof);

        
        $__internal_550f2a76e86c0d86e66f9a4092bdcf050dc1e068eafbcccb4feaee8cd241bcfa->leave($__internal_550f2a76e86c0d86e66f9a4092bdcf050dc1e068eafbcccb4feaee8cd241bcfa_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0a4f7ec5165b994334aeff76898352fe635b52aa83d0dee56b143e19e8611663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4f7ec5165b994334aeff76898352fe635b52aa83d0dee56b143e19e8611663->enter($__internal_0a4f7ec5165b994334aeff76898352fe635b52aa83d0dee56b143e19e8611663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_343f123e695eedb23a9a903cb74ac6f121d444846fadda6c09a16b65640b3652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343f123e695eedb23a9a903cb74ac6f121d444846fadda6c09a16b65640b3652->enter($__internal_343f123e695eedb23a9a903cb74ac6f121d444846fadda6c09a16b65640b3652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_343f123e695eedb23a9a903cb74ac6f121d444846fadda6c09a16b65640b3652->leave($__internal_343f123e695eedb23a9a903cb74ac6f121d444846fadda6c09a16b65640b3652_prof);

        
        $__internal_0a4f7ec5165b994334aeff76898352fe635b52aa83d0dee56b143e19e8611663->leave($__internal_0a4f7ec5165b994334aeff76898352fe635b52aa83d0dee56b143e19e8611663_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d5ca41dac2f3c5c23146172b0ae68e24e7fbaaffa0c7b7b0ec432c2688850507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ca41dac2f3c5c23146172b0ae68e24e7fbaaffa0c7b7b0ec432c2688850507->enter($__internal_d5ca41dac2f3c5c23146172b0ae68e24e7fbaaffa0c7b7b0ec432c2688850507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_e1c1e0ed8e5b21ac16c2e518e3fb796cd2554981d64789b0114f8a9347a0cb46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c1e0ed8e5b21ac16c2e518e3fb796cd2554981d64789b0114f8a9347a0cb46->enter($__internal_e1c1e0ed8e5b21ac16c2e518e3fb796cd2554981d64789b0114f8a9347a0cb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_e1c1e0ed8e5b21ac16c2e518e3fb796cd2554981d64789b0114f8a9347a0cb46->leave($__internal_e1c1e0ed8e5b21ac16c2e518e3fb796cd2554981d64789b0114f8a9347a0cb46_prof);

        
        $__internal_d5ca41dac2f3c5c23146172b0ae68e24e7fbaaffa0c7b7b0ec432c2688850507->leave($__internal_d5ca41dac2f3c5c23146172b0ae68e24e7fbaaffa0c7b7b0ec432c2688850507_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_82c4f21e9c9b4f2747e27dfeece60a3ea7cd90e3222f9a622fab98798cae43b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c4f21e9c9b4f2747e27dfeece60a3ea7cd90e3222f9a622fab98798cae43b3->enter($__internal_82c4f21e9c9b4f2747e27dfeece60a3ea7cd90e3222f9a622fab98798cae43b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_532ac35e847928a8a75a6fbd5e5b31662437ea6c618dd9a0057ba5d9be27df5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532ac35e847928a8a75a6fbd5e5b31662437ea6c618dd9a0057ba5d9be27df5e->enter($__internal_532ac35e847928a8a75a6fbd5e5b31662437ea6c618dd9a0057ba5d9be27df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_532ac35e847928a8a75a6fbd5e5b31662437ea6c618dd9a0057ba5d9be27df5e->leave($__internal_532ac35e847928a8a75a6fbd5e5b31662437ea6c618dd9a0057ba5d9be27df5e_prof);

        
        $__internal_82c4f21e9c9b4f2747e27dfeece60a3ea7cd90e3222f9a622fab98798cae43b3->leave($__internal_82c4f21e9c9b4f2747e27dfeece60a3ea7cd90e3222f9a622fab98798cae43b3_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b8ce964c804527448b62534c72b33f312379b572b84dda9863b296cdc7ec4338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ce964c804527448b62534c72b33f312379b572b84dda9863b296cdc7ec4338->enter($__internal_b8ce964c804527448b62534c72b33f312379b572b84dda9863b296cdc7ec4338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_74ca471d4a6fb6deb9ba67dd2ae7cf8139c8c84e9024937189f0d2e2577cd533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ca471d4a6fb6deb9ba67dd2ae7cf8139c8c84e9024937189f0d2e2577cd533->enter($__internal_74ca471d4a6fb6deb9ba67dd2ae7cf8139c8c84e9024937189f0d2e2577cd533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_74ca471d4a6fb6deb9ba67dd2ae7cf8139c8c84e9024937189f0d2e2577cd533->leave($__internal_74ca471d4a6fb6deb9ba67dd2ae7cf8139c8c84e9024937189f0d2e2577cd533_prof);

        
        $__internal_b8ce964c804527448b62534c72b33f312379b572b84dda9863b296cdc7ec4338->leave($__internal_b8ce964c804527448b62534c72b33f312379b572b84dda9863b296cdc7ec4338_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_3ab2633655a3556acfe88c4baa94ec9bb66faa6c36080b818e01749e581e23f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab2633655a3556acfe88c4baa94ec9bb66faa6c36080b818e01749e581e23f8->enter($__internal_3ab2633655a3556acfe88c4baa94ec9bb66faa6c36080b818e01749e581e23f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_7c2404dfe9749e156f4df4fcb2ad78f75c68c29ed94397d9d4c6966697ad277e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2404dfe9749e156f4df4fcb2ad78f75c68c29ed94397d9d4c6966697ad277e->enter($__internal_7c2404dfe9749e156f4df4fcb2ad78f75c68c29ed94397d9d4c6966697ad277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7c2404dfe9749e156f4df4fcb2ad78f75c68c29ed94397d9d4c6966697ad277e->leave($__internal_7c2404dfe9749e156f4df4fcb2ad78f75c68c29ed94397d9d4c6966697ad277e_prof);

        
        $__internal_3ab2633655a3556acfe88c4baa94ec9bb66faa6c36080b818e01749e581e23f8->leave($__internal_3ab2633655a3556acfe88c4baa94ec9bb66faa6c36080b818e01749e581e23f8_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6cce4b629642d7046e225c75c54bcfd381879bcd1eb1f5f47da8c178bab9f78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cce4b629642d7046e225c75c54bcfd381879bcd1eb1f5f47da8c178bab9f78c->enter($__internal_6cce4b629642d7046e225c75c54bcfd381879bcd1eb1f5f47da8c178bab9f78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c033ed393f23392723fa88db5a1e4d9eb1cfad184ae4c89964bfa671a863407d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c033ed393f23392723fa88db5a1e4d9eb1cfad184ae4c89964bfa671a863407d->enter($__internal_c033ed393f23392723fa88db5a1e4d9eb1cfad184ae4c89964bfa671a863407d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
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
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_c033ed393f23392723fa88db5a1e4d9eb1cfad184ae4c89964bfa671a863407d->leave($__internal_c033ed393f23392723fa88db5a1e4d9eb1cfad184ae4c89964bfa671a863407d_prof);

        
        $__internal_6cce4b629642d7046e225c75c54bcfd381879bcd1eb1f5f47da8c178bab9f78c->leave($__internal_6cce4b629642d7046e225c75c54bcfd381879bcd1eb1f5f47da8c178bab9f78c_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3a3636ac14cad89d8b3b7f1b77c29a6d83ab49cb22ebbc8d69a3f9905e01b343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a3636ac14cad89d8b3b7f1b77c29a6d83ab49cb22ebbc8d69a3f9905e01b343->enter($__internal_3a3636ac14cad89d8b3b7f1b77c29a6d83ab49cb22ebbc8d69a3f9905e01b343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6fb943a8e855e4736ee2a18f1242e8db255cc83b5b9442ae98ef15da8b8048e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb943a8e855e4736ee2a18f1242e8db255cc83b5b9442ae98ef15da8b8048e4->enter($__internal_6fb943a8e855e4736ee2a18f1242e8db255cc83b5b9442ae98ef15da8b8048e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_6fb943a8e855e4736ee2a18f1242e8db255cc83b5b9442ae98ef15da8b8048e4->leave($__internal_6fb943a8e855e4736ee2a18f1242e8db255cc83b5b9442ae98ef15da8b8048e4_prof);

        
        $__internal_3a3636ac14cad89d8b3b7f1b77c29a6d83ab49cb22ebbc8d69a3f9905e01b343->leave($__internal_3a3636ac14cad89d8b3b7f1b77c29a6d83ab49cb22ebbc8d69a3f9905e01b343_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_72f5687d59021afa5b3fedc5da881a7fd3b9aa28704a10fa638df7dcb7a4a52a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f5687d59021afa5b3fedc5da881a7fd3b9aa28704a10fa638df7dcb7a4a52a->enter($__internal_72f5687d59021afa5b3fedc5da881a7fd3b9aa28704a10fa638df7dcb7a4a52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b925a11169d5d95cccbe057dae5b54ec723ae4e9cb4ec5695f597cb3ac1fd67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b925a11169d5d95cccbe057dae5b54ec723ae4e9cb4ec5695f597cb3ac1fd67d->enter($__internal_b925a11169d5d95cccbe057dae5b54ec723ae4e9cb4ec5695f597cb3ac1fd67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_b925a11169d5d95cccbe057dae5b54ec723ae4e9cb4ec5695f597cb3ac1fd67d->leave($__internal_b925a11169d5d95cccbe057dae5b54ec723ae4e9cb4ec5695f597cb3ac1fd67d_prof);

        
        $__internal_72f5687d59021afa5b3fedc5da881a7fd3b9aa28704a10fa638df7dcb7a4a52a->leave($__internal_72f5687d59021afa5b3fedc5da881a7fd3b9aa28704a10fa638df7dcb7a4a52a_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b6789cdd9cae83728e477129e34da8c33f3c6e7365dc5b48c8a412599aae21ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6789cdd9cae83728e477129e34da8c33f3c6e7365dc5b48c8a412599aae21ec->enter($__internal_b6789cdd9cae83728e477129e34da8c33f3c6e7365dc5b48c8a412599aae21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d81d087daf0001d1cca94f8fa6d77e85493fb418c87272b3c04d05ed53759371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81d087daf0001d1cca94f8fa6d77e85493fb418c87272b3c04d05ed53759371->enter($__internal_d81d087daf0001d1cca94f8fa6d77e85493fb418c87272b3c04d05ed53759371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d81d087daf0001d1cca94f8fa6d77e85493fb418c87272b3c04d05ed53759371->leave($__internal_d81d087daf0001d1cca94f8fa6d77e85493fb418c87272b3c04d05ed53759371_prof);

        
        $__internal_b6789cdd9cae83728e477129e34da8c33f3c6e7365dc5b48c8a412599aae21ec->leave($__internal_b6789cdd9cae83728e477129e34da8c33f3c6e7365dc5b48c8a412599aae21ec_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ae7866d04175367bf2f55d9b0a00d82a14ddfb75447ea3520a9cc5e98b91edf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7866d04175367bf2f55d9b0a00d82a14ddfb75447ea3520a9cc5e98b91edf3->enter($__internal_ae7866d04175367bf2f55d9b0a00d82a14ddfb75447ea3520a9cc5e98b91edf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_5b2893531ec33d9a9afddfee76331be1989eebd169c424097e8940d643fecc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2893531ec33d9a9afddfee76331be1989eebd169c424097e8940d643fecc10->enter($__internal_5b2893531ec33d9a9afddfee76331be1989eebd169c424097e8940d643fecc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5b2893531ec33d9a9afddfee76331be1989eebd169c424097e8940d643fecc10->leave($__internal_5b2893531ec33d9a9afddfee76331be1989eebd169c424097e8940d643fecc10_prof);

        
        $__internal_ae7866d04175367bf2f55d9b0a00d82a14ddfb75447ea3520a9cc5e98b91edf3->leave($__internal_ae7866d04175367bf2f55d9b0a00d82a14ddfb75447ea3520a9cc5e98b91edf3_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4d013dc6bbeb29aaa442617604ea4015de88d9a3646245631aeabdc495c6767e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d013dc6bbeb29aaa442617604ea4015de88d9a3646245631aeabdc495c6767e->enter($__internal_4d013dc6bbeb29aaa442617604ea4015de88d9a3646245631aeabdc495c6767e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_268013d6e5890d6e5f7205d115811da9e2a3d0b8b8e501a4a02a9d94996d8b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268013d6e5890d6e5f7205d115811da9e2a3d0b8b8e501a4a02a9d94996d8b8b->enter($__internal_268013d6e5890d6e5f7205d115811da9e2a3d0b8b8e501a4a02a9d94996d8b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_268013d6e5890d6e5f7205d115811da9e2a3d0b8b8e501a4a02a9d94996d8b8b->leave($__internal_268013d6e5890d6e5f7205d115811da9e2a3d0b8b8e501a4a02a9d94996d8b8b_prof);

        
        $__internal_4d013dc6bbeb29aaa442617604ea4015de88d9a3646245631aeabdc495c6767e->leave($__internal_4d013dc6bbeb29aaa442617604ea4015de88d9a3646245631aeabdc495c6767e_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5de343d518bfe4f0753aff4e75d255c17d46c2404291646ab76ec5ae54b89318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de343d518bfe4f0753aff4e75d255c17d46c2404291646ab76ec5ae54b89318->enter($__internal_5de343d518bfe4f0753aff4e75d255c17d46c2404291646ab76ec5ae54b89318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_d1521eb49093725a1a2870489e2e87acb55271ecb83557909333c39d3c3f085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1521eb49093725a1a2870489e2e87acb55271ecb83557909333c39d3c3f085f->enter($__internal_d1521eb49093725a1a2870489e2e87acb55271ecb83557909333c39d3c3f085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d1521eb49093725a1a2870489e2e87acb55271ecb83557909333c39d3c3f085f->leave($__internal_d1521eb49093725a1a2870489e2e87acb55271ecb83557909333c39d3c3f085f_prof);

        
        $__internal_5de343d518bfe4f0753aff4e75d255c17d46c2404291646ab76ec5ae54b89318->leave($__internal_5de343d518bfe4f0753aff4e75d255c17d46c2404291646ab76ec5ae54b89318_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5085cc6902913085b67cfb3d6bb367c13ad4d173c22cabc5836cc2b3abb54abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5085cc6902913085b67cfb3d6bb367c13ad4d173c22cabc5836cc2b3abb54abe->enter($__internal_5085cc6902913085b67cfb3d6bb367c13ad4d173c22cabc5836cc2b3abb54abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b188b5c8d52181d1114c5c8366ca727781bf49071f86d27af936dd3afd89b625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b188b5c8d52181d1114c5c8366ca727781bf49071f86d27af936dd3afd89b625->enter($__internal_b188b5c8d52181d1114c5c8366ca727781bf49071f86d27af936dd3afd89b625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_b188b5c8d52181d1114c5c8366ca727781bf49071f86d27af936dd3afd89b625->leave($__internal_b188b5c8d52181d1114c5c8366ca727781bf49071f86d27af936dd3afd89b625_prof);

        
        $__internal_5085cc6902913085b67cfb3d6bb367c13ad4d173c22cabc5836cc2b3abb54abe->leave($__internal_5085cc6902913085b67cfb3d6bb367c13ad4d173c22cabc5836cc2b3abb54abe_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_10ba9f1a4c12bfe4e2058e182d0093cdba40f4f2c8338d7598cf4b00047c61dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ba9f1a4c12bfe4e2058e182d0093cdba40f4f2c8338d7598cf4b00047c61dc->enter($__internal_10ba9f1a4c12bfe4e2058e182d0093cdba40f4f2c8338d7598cf4b00047c61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_31c13128f00ad5c52620a8e1fec31274222bc7ae1bec249fb500d22e654f82ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c13128f00ad5c52620a8e1fec31274222bc7ae1bec249fb500d22e654f82ca->enter($__internal_31c13128f00ad5c52620a8e1fec31274222bc7ae1bec249fb500d22e654f82ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_31c13128f00ad5c52620a8e1fec31274222bc7ae1bec249fb500d22e654f82ca->leave($__internal_31c13128f00ad5c52620a8e1fec31274222bc7ae1bec249fb500d22e654f82ca_prof);

        
        $__internal_10ba9f1a4c12bfe4e2058e182d0093cdba40f4f2c8338d7598cf4b00047c61dc->leave($__internal_10ba9f1a4c12bfe4e2058e182d0093cdba40f4f2c8338d7598cf4b00047c61dc_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_af8c073e1a65f3a1d9b902ca23d2a574fe2248edbcb823cea033c2bc78a7cd49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8c073e1a65f3a1d9b902ca23d2a574fe2248edbcb823cea033c2bc78a7cd49->enter($__internal_af8c073e1a65f3a1d9b902ca23d2a574fe2248edbcb823cea033c2bc78a7cd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fb7facaaeaabaf7fb833e10160e871298efc674d0719967d3024c7c1994788e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7facaaeaabaf7fb833e10160e871298efc674d0719967d3024c7c1994788e4->enter($__internal_fb7facaaeaabaf7fb833e10160e871298efc674d0719967d3024c7c1994788e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fb7facaaeaabaf7fb833e10160e871298efc674d0719967d3024c7c1994788e4->leave($__internal_fb7facaaeaabaf7fb833e10160e871298efc674d0719967d3024c7c1994788e4_prof);

        
        $__internal_af8c073e1a65f3a1d9b902ca23d2a574fe2248edbcb823cea033c2bc78a7cd49->leave($__internal_af8c073e1a65f3a1d9b902ca23d2a574fe2248edbcb823cea033c2bc78a7cd49_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
