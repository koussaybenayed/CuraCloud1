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

/* meds/show.html.twig */
class __TwigTemplate_37747b2935fc0b7221b7b4eeac862219 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BaseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meds/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meds/show.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "meds/show.html.twig", 1);
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

        yield "Medication Details";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header\">
                    <h4 class=\"mb-0\">Medication Details</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["med"]) || array_key_exists("med", $context) ? $context["med"] : (function () { throw new RuntimeError('Variable "med" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Dose</th>
                                <td>";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["med"]) || array_key_exists("med", $context) ? $context["med"] : (function () { throw new RuntimeError('Variable "med" does not exist.', 22, $this->source); })()), "dose", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["med"]) || array_key_exists("med", $context) ? $context["med"] : (function () { throw new RuntimeError('Variable "med" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meds_index");
        yield "\" class=\"btn btn-outline-secondary\">Back to list</a>
                        <div>
                            <a href=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meds_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["med"]) || array_key_exists("med", $context) ? $context["med"] : (function () { throw new RuntimeError('Variable "med" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\" class=\"btn rounded-pill btn-outline-primary\">Edit</a>
                            ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "meds/_delete_form.html.twig", ["button_css" => "btn rounded-pill btn-outline-danger"]);
        yield "
                        </div>
                    </div>
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
        return "meds/show.html.twig";
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
        return array (  135 => 34,  131 => 33,  126 => 31,  118 => 26,  111 => 22,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}Medication Details{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header\">
                    <h4 class=\"mb-0\">Medication Details</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{ med.name }}</td>
                            </tr>
                            <tr>
                                <th>Dose</th>
                                <td>{{ med.dose }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ med.price }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('app_meds_index') }}\" class=\"btn btn-outline-secondary\">Back to list</a>
                        <div>
                            <a href=\"{{ path('app_meds_edit', {'id': med.id}) }}\" class=\"btn rounded-pill btn-outline-primary\">Edit</a>
                            {{ include('meds/_delete_form.html.twig', {'button_css': \"btn rounded-pill btn-outline-danger\"}) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "meds/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\meds\\show.html.twig");
    }
}
