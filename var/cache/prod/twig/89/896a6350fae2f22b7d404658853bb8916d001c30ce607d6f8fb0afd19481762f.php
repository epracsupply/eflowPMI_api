<?php

/* base.html.twig */
class __TwigTemplate_4aac67d9874209da2e4f8860f0ea96680e61c8e5fd2357b43b6a7e182f96ba3a extends Twig_Template
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
        $__internal_955729686fd24fc0560071098905487070a53860af164a65b2378cb401830eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955729686fd24fc0560071098905487070a53860af164a65b2378cb401830eb0->enter($__internal_955729686fd24fc0560071098905487070a53860af164a65b2378cb401830eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_955729686fd24fc0560071098905487070a53860af164a65b2378cb401830eb0->leave($__internal_955729686fd24fc0560071098905487070a53860af164a65b2378cb401830eb0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7bb5c53df93c9ff1344803accbb7bddcd13fe4656904764eb96dc70d437662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bb5c53df93c9ff1344803accbb7bddcd13fe4656904764eb96dc70d437662a->enter($__internal_b7bb5c53df93c9ff1344803accbb7bddcd13fe4656904764eb96dc70d437662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b7bb5c53df93c9ff1344803accbb7bddcd13fe4656904764eb96dc70d437662a->leave($__internal_b7bb5c53df93c9ff1344803accbb7bddcd13fe4656904764eb96dc70d437662a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2916e6938a61d70aa8a6690a9f5cf77de251ae0d8e6c4d4f7631fff3c6944eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2916e6938a61d70aa8a6690a9f5cf77de251ae0d8e6c4d4f7631fff3c6944eff->enter($__internal_2916e6938a61d70aa8a6690a9f5cf77de251ae0d8e6c4d4f7631fff3c6944eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2916e6938a61d70aa8a6690a9f5cf77de251ae0d8e6c4d4f7631fff3c6944eff->leave($__internal_2916e6938a61d70aa8a6690a9f5cf77de251ae0d8e6c4d4f7631fff3c6944eff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f915fd45af6474ded7da8c2c01d6afe6fe5ae764eb50cd6fdf23cdd355488d9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f915fd45af6474ded7da8c2c01d6afe6fe5ae764eb50cd6fdf23cdd355488d9e->enter($__internal_f915fd45af6474ded7da8c2c01d6afe6fe5ae764eb50cd6fdf23cdd355488d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f915fd45af6474ded7da8c2c01d6afe6fe5ae764eb50cd6fdf23cdd355488d9e->leave($__internal_f915fd45af6474ded7da8c2c01d6afe6fe5ae764eb50cd6fdf23cdd355488d9e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7edad5acc5d3ae027356ce2fb396d4f2ff72dd49e430a8a910a05a85d3e788da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edad5acc5d3ae027356ce2fb396d4f2ff72dd49e430a8a910a05a85d3e788da->enter($__internal_7edad5acc5d3ae027356ce2fb396d4f2ff72dd49e430a8a910a05a85d3e788da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7edad5acc5d3ae027356ce2fb396d4f2ff72dd49e430a8a910a05a85d3e788da->leave($__internal_7edad5acc5d3ae027356ce2fb396d4f2ff72dd49e430a8a910a05a85d3e788da_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
", "base.html.twig", "C:\\xampp2\\htdocs\\API_3PL\\app\\Resources\\views\\base.html.twig");
    }
}
