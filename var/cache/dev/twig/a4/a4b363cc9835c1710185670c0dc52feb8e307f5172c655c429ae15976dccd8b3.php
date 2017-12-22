<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3b622aea4606ea9e13b3585431ec4edd49d1a40573c3a3808567b97f745136cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d30ac80f2331311b7e23c3f99b58e74009d5b564681fb7919720d8ace3a80f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d30ac80f2331311b7e23c3f99b58e74009d5b564681fb7919720d8ace3a80f5->enter($__internal_8d30ac80f2331311b7e23c3f99b58e74009d5b564681fb7919720d8ace3a80f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d0f1f6c4881c8eff598ac9935c2ea07be48d2eb94617cd83e1d45002a295d810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f1f6c4881c8eff598ac9935c2ea07be48d2eb94617cd83e1d45002a295d810->enter($__internal_d0f1f6c4881c8eff598ac9935c2ea07be48d2eb94617cd83e1d45002a295d810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_8d30ac80f2331311b7e23c3f99b58e74009d5b564681fb7919720d8ace3a80f5->leave($__internal_8d30ac80f2331311b7e23c3f99b58e74009d5b564681fb7919720d8ace3a80f5_prof);

        
        $__internal_d0f1f6c4881c8eff598ac9935c2ea07be48d2eb94617cd83e1d45002a295d810->leave($__internal_d0f1f6c4881c8eff598ac9935c2ea07be48d2eb94617cd83e1d45002a295d810_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2fd96c36be4a3e1b79cb8e008736259ee0ee01b0f7341aea397a6fc74a90936a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd96c36be4a3e1b79cb8e008736259ee0ee01b0f7341aea397a6fc74a90936a->enter($__internal_2fd96c36be4a3e1b79cb8e008736259ee0ee01b0f7341aea397a6fc74a90936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d7e58a2385308ccb435e7411deb5391b4e928bf62c187df9c1108f734df4bd96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e58a2385308ccb435e7411deb5391b4e928bf62c187df9c1108f734df4bd96->enter($__internal_d7e58a2385308ccb435e7411deb5391b4e928bf62c187df9c1108f734df4bd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d7e58a2385308ccb435e7411deb5391b4e928bf62c187df9c1108f734df4bd96->leave($__internal_d7e58a2385308ccb435e7411deb5391b4e928bf62c187df9c1108f734df4bd96_prof);

        
        $__internal_2fd96c36be4a3e1b79cb8e008736259ee0ee01b0f7341aea397a6fc74a90936a->leave($__internal_2fd96c36be4a3e1b79cb8e008736259ee0ee01b0f7341aea397a6fc74a90936a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_63b67a6f204fef3534473d2aea9e7462972198156c2729cdec0244c8769f0e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b67a6f204fef3534473d2aea9e7462972198156c2729cdec0244c8769f0e31->enter($__internal_63b67a6f204fef3534473d2aea9e7462972198156c2729cdec0244c8769f0e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_38c966379f7b5d6fadd2fc1851d272321f60fb8b6c9a11c0d5329e2e409e2022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c966379f7b5d6fadd2fc1851d272321f60fb8b6c9a11c0d5329e2e409e2022->enter($__internal_38c966379f7b5d6fadd2fc1851d272321f60fb8b6c9a11c0d5329e2e409e2022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_38c966379f7b5d6fadd2fc1851d272321f60fb8b6c9a11c0d5329e2e409e2022->leave($__internal_38c966379f7b5d6fadd2fc1851d272321f60fb8b6c9a11c0d5329e2e409e2022_prof);

        
        $__internal_63b67a6f204fef3534473d2aea9e7462972198156c2729cdec0244c8769f0e31->leave($__internal_63b67a6f204fef3534473d2aea9e7462972198156c2729cdec0244c8769f0e31_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1fde6b9ef324e2f5201150e334f17368d746f36b4f97937c8b06576804d767f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fde6b9ef324e2f5201150e334f17368d746f36b4f97937c8b06576804d767f2->enter($__internal_1fde6b9ef324e2f5201150e334f17368d746f36b4f97937c8b06576804d767f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_5537f3ac4ef6f7932e78e1361a93cd0682eb6377cedcda07b5b041beef994b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5537f3ac4ef6f7932e78e1361a93cd0682eb6377cedcda07b5b041beef994b66->enter($__internal_5537f3ac4ef6f7932e78e1361a93cd0682eb6377cedcda07b5b041beef994b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_5537f3ac4ef6f7932e78e1361a93cd0682eb6377cedcda07b5b041beef994b66->leave($__internal_5537f3ac4ef6f7932e78e1361a93cd0682eb6377cedcda07b5b041beef994b66_prof);

        
        $__internal_1fde6b9ef324e2f5201150e334f17368d746f36b4f97937c8b06576804d767f2->leave($__internal_1fde6b9ef324e2f5201150e334f17368d746f36b4f97937c8b06576804d767f2_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e631b4671167ec08aa2365316072d9043a2a7dee754ac3a1721edbea333c8321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e631b4671167ec08aa2365316072d9043a2a7dee754ac3a1721edbea333c8321->enter($__internal_e631b4671167ec08aa2365316072d9043a2a7dee754ac3a1721edbea333c8321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4d6222e7a61456015bdc1667805ea5441190749d9ea27144895892befe70ac15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6222e7a61456015bdc1667805ea5441190749d9ea27144895892befe70ac15->enter($__internal_4d6222e7a61456015bdc1667805ea5441190749d9ea27144895892befe70ac15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_4d6222e7a61456015bdc1667805ea5441190749d9ea27144895892befe70ac15->leave($__internal_4d6222e7a61456015bdc1667805ea5441190749d9ea27144895892befe70ac15_prof);

        
        $__internal_e631b4671167ec08aa2365316072d9043a2a7dee754ac3a1721edbea333c8321->leave($__internal_e631b4671167ec08aa2365316072d9043a2a7dee754ac3a1721edbea333c8321_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d8ad9e1780442ed6517e51b6c838d3263e9e163acddbab6fadfbf009b376ad24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ad9e1780442ed6517e51b6c838d3263e9e163acddbab6fadfbf009b376ad24->enter($__internal_d8ad9e1780442ed6517e51b6c838d3263e9e163acddbab6fadfbf009b376ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_626d58ec2b38d9dcf85c60fdd6359810c9cfc22c94071b68223f8a1176ba96c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626d58ec2b38d9dcf85c60fdd6359810c9cfc22c94071b68223f8a1176ba96c0->enter($__internal_626d58ec2b38d9dcf85c60fdd6359810c9cfc22c94071b68223f8a1176ba96c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_626d58ec2b38d9dcf85c60fdd6359810c9cfc22c94071b68223f8a1176ba96c0->leave($__internal_626d58ec2b38d9dcf85c60fdd6359810c9cfc22c94071b68223f8a1176ba96c0_prof);

        
        $__internal_d8ad9e1780442ed6517e51b6c838d3263e9e163acddbab6fadfbf009b376ad24->leave($__internal_d8ad9e1780442ed6517e51b6c838d3263e9e163acddbab6fadfbf009b376ad24_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1fd46608794d3e0fb3500b51655ac40540043fdb34c665eec8d19f207e9986bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd46608794d3e0fb3500b51655ac40540043fdb34c665eec8d19f207e9986bc->enter($__internal_1fd46608794d3e0fb3500b51655ac40540043fdb34c665eec8d19f207e9986bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7de140068126bcb71d53949f7db1d7049668bb23590a951e3f099dbded74215c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de140068126bcb71d53949f7db1d7049668bb23590a951e3f099dbded74215c->enter($__internal_7de140068126bcb71d53949f7db1d7049668bb23590a951e3f099dbded74215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7de140068126bcb71d53949f7db1d7049668bb23590a951e3f099dbded74215c->leave($__internal_7de140068126bcb71d53949f7db1d7049668bb23590a951e3f099dbded74215c_prof);

        
        $__internal_1fd46608794d3e0fb3500b51655ac40540043fdb34c665eec8d19f207e9986bc->leave($__internal_1fd46608794d3e0fb3500b51655ac40540043fdb34c665eec8d19f207e9986bc_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_147c2219c5ec8648bc50112129b6b52c30a0c581cc0d1f21665afb7b700d13a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147c2219c5ec8648bc50112129b6b52c30a0c581cc0d1f21665afb7b700d13a1->enter($__internal_147c2219c5ec8648bc50112129b6b52c30a0c581cc0d1f21665afb7b700d13a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_74e76364358e951ffe7425077b3d2f062395814e5714f9990bd6256eaaad5386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e76364358e951ffe7425077b3d2f062395814e5714f9990bd6256eaaad5386->enter($__internal_74e76364358e951ffe7425077b3d2f062395814e5714f9990bd6256eaaad5386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_74e76364358e951ffe7425077b3d2f062395814e5714f9990bd6256eaaad5386->leave($__internal_74e76364358e951ffe7425077b3d2f062395814e5714f9990bd6256eaaad5386_prof);

        
        $__internal_147c2219c5ec8648bc50112129b6b52c30a0c581cc0d1f21665afb7b700d13a1->leave($__internal_147c2219c5ec8648bc50112129b6b52c30a0c581cc0d1f21665afb7b700d13a1_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1d5a86c0a4cd802bf53fa08746abfcdbbb7c97ca7f6db54c840abcf6aed0fe23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5a86c0a4cd802bf53fa08746abfcdbbb7c97ca7f6db54c840abcf6aed0fe23->enter($__internal_1d5a86c0a4cd802bf53fa08746abfcdbbb7c97ca7f6db54c840abcf6aed0fe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ba6d3971f9bb3ebb4cdf9154e12c83fed838605df31da86a9b9e914e6f64b5ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6d3971f9bb3ebb4cdf9154e12c83fed838605df31da86a9b9e914e6f64b5ba->enter($__internal_ba6d3971f9bb3ebb4cdf9154e12c83fed838605df31da86a9b9e914e6f64b5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ba6d3971f9bb3ebb4cdf9154e12c83fed838605df31da86a9b9e914e6f64b5ba->leave($__internal_ba6d3971f9bb3ebb4cdf9154e12c83fed838605df31da86a9b9e914e6f64b5ba_prof);

        
        $__internal_1d5a86c0a4cd802bf53fa08746abfcdbbb7c97ca7f6db54c840abcf6aed0fe23->leave($__internal_1d5a86c0a4cd802bf53fa08746abfcdbbb7c97ca7f6db54c840abcf6aed0fe23_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fa3bde15dfa18220f95705ec4384b0404dc36a4b0909d74e961922e16d8f4ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3bde15dfa18220f95705ec4384b0404dc36a4b0909d74e961922e16d8f4ad3->enter($__internal_fa3bde15dfa18220f95705ec4384b0404dc36a4b0909d74e961922e16d8f4ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6d9b33dabe05d2e6be3d91c523597567d8accb416c848285338a77236a6b385c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9b33dabe05d2e6be3d91c523597567d8accb416c848285338a77236a6b385c->enter($__internal_6d9b33dabe05d2e6be3d91c523597567d8accb416c848285338a77236a6b385c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6d9b33dabe05d2e6be3d91c523597567d8accb416c848285338a77236a6b385c->leave($__internal_6d9b33dabe05d2e6be3d91c523597567d8accb416c848285338a77236a6b385c_prof);

        
        $__internal_fa3bde15dfa18220f95705ec4384b0404dc36a4b0909d74e961922e16d8f4ad3->leave($__internal_fa3bde15dfa18220f95705ec4384b0404dc36a4b0909d74e961922e16d8f4ad3_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0e1c9aa7fa94d67eb972a1e3233edf4e4bbd58c78edc46cb1557d8172bfeaa18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e1c9aa7fa94d67eb972a1e3233edf4e4bbd58c78edc46cb1557d8172bfeaa18->enter($__internal_0e1c9aa7fa94d67eb972a1e3233edf4e4bbd58c78edc46cb1557d8172bfeaa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6a1403496379c92a382c072d82b150954076a1d97081b630d244a8dd759415ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1403496379c92a382c072d82b150954076a1d97081b630d244a8dd759415ec->enter($__internal_6a1403496379c92a382c072d82b150954076a1d97081b630d244a8dd759415ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_6a1403496379c92a382c072d82b150954076a1d97081b630d244a8dd759415ec->leave($__internal_6a1403496379c92a382c072d82b150954076a1d97081b630d244a8dd759415ec_prof);

        
        $__internal_0e1c9aa7fa94d67eb972a1e3233edf4e4bbd58c78edc46cb1557d8172bfeaa18->leave($__internal_0e1c9aa7fa94d67eb972a1e3233edf4e4bbd58c78edc46cb1557d8172bfeaa18_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
