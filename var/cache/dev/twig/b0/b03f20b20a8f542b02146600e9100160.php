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

/* prescription/show.html.twig */
class __TwigTemplate_1a8e5d2fe8372847ad37fa3df286b318 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/show.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "prescription/show.html.twig", 1);
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

        yield "Prescription Details";
        
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
                    <h4 class=\"mb-0\">Prescription Details</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            <tr>
                                <th>Prescription</th>
                                <td>";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 18, $this->source); })()), "duration", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Creation Date</th>
                                <td>";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 22, $this->source); })()), "creationDate", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th>Medication</th>
                                <td>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 26, $this->source); })()), "medication", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prescription_index");
        yield "\" class=\"btn btn-outline-secondary\">Back to list</a>
                        <div>
                            <a href=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prescription_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\" class=\"btn rounded-pill btn-outline-primary\">Edit</a>
                            ";
        // line 35
        yield "                        </div>
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
        return "prescription/show.html.twig";
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
        return array (  135 => 35,  131 => 33,  126 => 31,  118 => 26,  111 => 22,  104 => 18,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}Prescription Details{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header\">
                    <h4 class=\"mb-0\">Prescription Details</h4>
                </div>
                <div class=\"card-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            <tr>
                                <th>Prescription</th>
                                <td>{{ prescription.duration }}</td>
                            </tr>
                            <tr>
                                <th>Creation Date</th>
                                <td>{{ prescription.creationDate|date('Y-m-d') }}</td>
                            </tr>
                            <tr>
                                <th>Medication</th>
                                <td>{{ prescription.medication }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('admin_prescription_index') }}\" class=\"btn btn-outline-secondary\">Back to list</a>
                        <div>
                            <a href=\"{{ path('admin_prescription_edit', {'id': prescription.id}) }}\" class=\"btn rounded-pill btn-outline-primary\">Edit</a>
                            {# Add delete functionality if needed #}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "prescription/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\prescription\\show.html.twig");
    }
}
