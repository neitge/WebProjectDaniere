<?php

/* form_table_layout.html.twig */
class __TwigTemplate_40c922390da733fd34c5fb79fcf193d3a7f351a8b0a0a930fb5c106b58b30cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bcccb75626929e0a1229727edb1a316eea5c555a768a247fc38cdbcf35b7c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcccb75626929e0a1229727edb1a316eea5c555a768a247fc38cdbcf35b7c81->enter($__internal_2bcccb75626929e0a1229727edb1a316eea5c555a768a247fc38cdbcf35b7c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a27ae578b414dbdf869e204facf14f4eeb85eba8826fdc8c2470c4b005ae7491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a27ae578b414dbdf869e204facf14f4eeb85eba8826fdc8c2470c4b005ae7491->enter($__internal_a27ae578b414dbdf869e204facf14f4eeb85eba8826fdc8c2470c4b005ae7491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_2bcccb75626929e0a1229727edb1a316eea5c555a768a247fc38cdbcf35b7c81->leave($__internal_2bcccb75626929e0a1229727edb1a316eea5c555a768a247fc38cdbcf35b7c81_prof);

        
        $__internal_a27ae578b414dbdf869e204facf14f4eeb85eba8826fdc8c2470c4b005ae7491->leave($__internal_a27ae578b414dbdf869e204facf14f4eeb85eba8826fdc8c2470c4b005ae7491_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_850559c132b4edbf4c2411bc659831ec58bb52853d4ecf514555f0263d63e3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850559c132b4edbf4c2411bc659831ec58bb52853d4ecf514555f0263d63e3af->enter($__internal_850559c132b4edbf4c2411bc659831ec58bb52853d4ecf514555f0263d63e3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2581c0c8bf6dfdf4b05f0a5b647007123772c10c94f4547feb66a2eb0b5893fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2581c0c8bf6dfdf4b05f0a5b647007123772c10c94f4547feb66a2eb0b5893fa->enter($__internal_2581c0c8bf6dfdf4b05f0a5b647007123772c10c94f4547feb66a2eb0b5893fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2581c0c8bf6dfdf4b05f0a5b647007123772c10c94f4547feb66a2eb0b5893fa->leave($__internal_2581c0c8bf6dfdf4b05f0a5b647007123772c10c94f4547feb66a2eb0b5893fa_prof);

        
        $__internal_850559c132b4edbf4c2411bc659831ec58bb52853d4ecf514555f0263d63e3af->leave($__internal_850559c132b4edbf4c2411bc659831ec58bb52853d4ecf514555f0263d63e3af_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ed392516358c41b5aacd4a8da6ebe337b75c6952c9ff02f57e0c3f79e06de446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed392516358c41b5aacd4a8da6ebe337b75c6952c9ff02f57e0c3f79e06de446->enter($__internal_ed392516358c41b5aacd4a8da6ebe337b75c6952c9ff02f57e0c3f79e06de446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f09b985021b2b078ca2c2b8caf5d3e2ff7fcb2f1df881d5550a56bc2d5066bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09b985021b2b078ca2c2b8caf5d3e2ff7fcb2f1df881d5550a56bc2d5066bea->enter($__internal_f09b985021b2b078ca2c2b8caf5d3e2ff7fcb2f1df881d5550a56bc2d5066bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_f09b985021b2b078ca2c2b8caf5d3e2ff7fcb2f1df881d5550a56bc2d5066bea->leave($__internal_f09b985021b2b078ca2c2b8caf5d3e2ff7fcb2f1df881d5550a56bc2d5066bea_prof);

        
        $__internal_ed392516358c41b5aacd4a8da6ebe337b75c6952c9ff02f57e0c3f79e06de446->leave($__internal_ed392516358c41b5aacd4a8da6ebe337b75c6952c9ff02f57e0c3f79e06de446_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_0dcf68ad86ee0c2c14ccb5a2d93872f84d45c8818cd26c86356ca2696c5bf8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcf68ad86ee0c2c14ccb5a2d93872f84d45c8818cd26c86356ca2696c5bf8bc->enter($__internal_0dcf68ad86ee0c2c14ccb5a2d93872f84d45c8818cd26c86356ca2696c5bf8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_551b79fac11cf410fd12826f748d1487cf4f515d6dfc311e73e1616014587876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551b79fac11cf410fd12826f748d1487cf4f515d6dfc311e73e1616014587876->enter($__internal_551b79fac11cf410fd12826f748d1487cf4f515d6dfc311e73e1616014587876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_551b79fac11cf410fd12826f748d1487cf4f515d6dfc311e73e1616014587876->leave($__internal_551b79fac11cf410fd12826f748d1487cf4f515d6dfc311e73e1616014587876_prof);

        
        $__internal_0dcf68ad86ee0c2c14ccb5a2d93872f84d45c8818cd26c86356ca2696c5bf8bc->leave($__internal_0dcf68ad86ee0c2c14ccb5a2d93872f84d45c8818cd26c86356ca2696c5bf8bc_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_160deed1c4b9644fbd745cafb703d64b3c869f37f74b568e490bf4b67046627d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160deed1c4b9644fbd745cafb703d64b3c869f37f74b568e490bf4b67046627d->enter($__internal_160deed1c4b9644fbd745cafb703d64b3c869f37f74b568e490bf4b67046627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_947673a27139f874c5ee18763fd075845afcd0e1438857d916750c29a7b763b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947673a27139f874c5ee18763fd075845afcd0e1438857d916750c29a7b763b7->enter($__internal_947673a27139f874c5ee18763fd075845afcd0e1438857d916750c29a7b763b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_947673a27139f874c5ee18763fd075845afcd0e1438857d916750c29a7b763b7->leave($__internal_947673a27139f874c5ee18763fd075845afcd0e1438857d916750c29a7b763b7_prof);

        
        $__internal_160deed1c4b9644fbd745cafb703d64b3c869f37f74b568e490bf4b67046627d->leave($__internal_160deed1c4b9644fbd745cafb703d64b3c869f37f74b568e490bf4b67046627d_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp\\www\\Symfo\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
