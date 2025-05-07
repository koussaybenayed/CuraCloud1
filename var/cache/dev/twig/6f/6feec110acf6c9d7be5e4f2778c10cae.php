<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* prescription/checkout.html.twig */
class __TwigTemplate_2d8ab5f24fc76012a8163a14b3168586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "newbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/checkout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/checkout.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "prescription/checkout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    <title>Checkout</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "    <style>
        .font-size-lg {
            font-size: 1.2rem; /* Adjust the font size as needed */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6\">
                <div class=\"border rounded p-4 mb-5 pb-5\">
                    <!-- Medication Details -->
                    <h4>Medication Details</h4>
                    <div style=\"margin-bottom: 10px;\"></div>
                    <dl class=\"row mb-4\">
                        <dt class=\"col-6\">Medication Name</dt>
                        <dd class=\"col-6\">";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medicationDetails"]) || array_key_exists("medicationDetails", $context) ? $context["medicationDetails"] : (function () { throw new RuntimeError('Variable "medicationDetails" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "</dd>

                        <dt class=\"col-6\">Dose</dt>
                        <dd class=\"col-6\">";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medicationDetails"]) || array_key_exists("medicationDetails", $context) ? $context["medicationDetails"] : (function () { throw new RuntimeError('Variable "medicationDetails" does not exist.', 28, $this->source); })()), "dose", [], "any", false, false, false, 28), "html", null, true);
        yield "</dd>
                        <div class=\"w-100\"></div>

                        <hr class=\"mx-n4\">
                        <div style=\"margin-bottom: 60px;\"></div>
                        <dt class=\"col-6\">Price</dt>
                        <dd class=\"col-6\">";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medicationDetails"]) || array_key_exists("medicationDetails", $context) ? $context["medicationDetails"] : (function () { throw new RuntimeError('Variable "medicationDetails" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34), "html", null, true);
        yield "</dd>
                    </dl>

                    <div style=\"margin-bottom: 8px;\"></div>

                    <!-- Action Buttons -->
                    <div class=\"d-grid gap-3\">
                        <a href=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_prescription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-block\">Back to details</a>
                    </div>

                    <div class=\"text-center mt-3\"> <!-- Center the \"Pay\" button -->
                        <form action=\"";
        // line 45
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_prescription_pay", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" method=\"GET\">
                            <button type=\"submit\" class=\"btn btn-outline-primary btn-block\">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "prescription/checkout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  162 => 45,  155 => 41,  145 => 34,  136 => 28,  130 => 25,  119 => 16,  109 => 15,  93 => 8,  83 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block title %}
    <title>Checkout</title>
{% endblock %}

{% block stylesheets %}
    <style>
        .font-size-lg {
            font-size: 1.2rem; /* Adjust the font size as needed */
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6\">
                <div class=\"border rounded p-4 mb-5 pb-5\">
                    <!-- Medication Details -->
                    <h4>Medication Details</h4>
                    <div style=\"margin-bottom: 10px;\"></div>
                    <dl class=\"row mb-4\">
                        <dt class=\"col-6\">Medication Name</dt>
                        <dd class=\"col-6\">{{ medicationDetails.name }}</dd>

                        <dt class=\"col-6\">Dose</dt>
                        <dd class=\"col-6\">{{ medicationDetails.dose }}</dd>
                        <div class=\"w-100\"></div>

                        <hr class=\"mx-n4\">
                        <div style=\"margin-bottom: 60px;\"></div>
                        <dt class=\"col-6\">Price</dt>
                        <dd class=\"col-6\">{{ medicationDetails.price }}</dd>
                    </dl>

                    <div style=\"margin-bottom: 8px;\"></div>

                    <!-- Action Buttons -->
                    <div class=\"d-grid gap-3\">
                        <a href=\"{{ path('user_prescription_show' , {'id': prescription.id})}}\" class=\"btn btn-outline-secondary btn-block\">Back to details</a>
                    </div>

                    <div class=\"text-center mt-3\"> <!-- Center the \"Pay\" button -->
                        <form action=\"{{ path('user_prescription_pay', {'id': prescription.id}) }}\" method=\"GET\">
                            <button type=\"submit\" class=\"btn btn-outline-primary btn-block\">Pay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "prescription/checkout.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\prescription\\checkout.html.twig");
    }
}
