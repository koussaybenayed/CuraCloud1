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

/* prescription/showf.html.twig */
class __TwigTemplate_a07e55aee6d87adf448e3de98985661e extends Template
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
        return "newbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/showf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/showf.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "prescription/showf.html.twig", 1);
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
        yield "    <title>Prescription Details</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <div class=\"container mt-5\">
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
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 20, $this->source); })()), "duration", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Creation Date</th>
                                    <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 24, $this->source); })()), "creationDate", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Medication</th>
                                    <td>
                                        <button type=\"button\" class=\"btn btn-primary view-medication-details\">View Medication Details</button>
                                        <!-- Medication Details Modal -->
                                        <div class=\"modal fade\" id=\"medicationDetailsModal\" tabindex=\"-1\" aria-labelledby=\"medicationDetailsModalLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\" id=\"medicationDetailsModalLabel\">Medication Details</h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <table class=\"table table-hover\">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <td>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medicationDetails"]) || array_key_exists("medicationDetails", $context) ? $context["medicationDetails"] : (function () { throw new RuntimeError('Variable "medicationDetails" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Dose</th>
                                                                    <td>";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medicationDetails"]) || array_key_exists("medicationDetails", $context) ? $context["medicationDetails"] : (function () { throw new RuntimeError('Variable "medicationDetails" does not exist.', 47, $this->source); })()), "dose", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td>";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medicationDetails"]) || array_key_exists("medicationDetails", $context) ? $context["medicationDetails"] : (function () { throw new RuntimeError('Variable "medicationDetails" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <a href=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_prescription_checkout_alternative", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">Pay Online</a>
                                                        <a href=\"";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_prescription", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["prescription"]) || array_key_exists("prescription", $context) ? $context["prescription"] : (function () { throw new RuntimeError('Variable "prescription" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">Send Prescription</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_prescription_index");
        yield "\" class=\"btn btn-outline-primary\">Back to list</a>
                            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_map");
        yield "\" class=\"btn btn-outline-primary\">Check Map</a>
                             <!-- Add Payment button -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const viewMedicationBtn = document.querySelector('.view-medication-details');
            const medicationModal = new bootstrap.Modal(document.getElementById('medicationDetailsModal'));

            viewMedicationBtn.addEventListener('click', function () {
                medicationModal.show();
            });
        });
    </script>
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
        return "prescription/showf.html.twig";
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
        return array (  179 => 69,  175 => 68,  162 => 58,  158 => 57,  149 => 51,  142 => 47,  135 => 43,  113 => 24,  106 => 20,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block title %}
    <title>Prescription Details</title>
{% endblock %}

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
                                    <td>
                                        <button type=\"button\" class=\"btn btn-primary view-medication-details\">View Medication Details</button>
                                        <!-- Medication Details Modal -->
                                        <div class=\"modal fade\" id=\"medicationDetailsModal\" tabindex=\"-1\" aria-labelledby=\"medicationDetailsModalLabel\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\" id=\"medicationDetailsModalLabel\">Medication Details</h5>
                                                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <table class=\"table table-hover\">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <td>{{ medicationDetails.name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Dose</th>
                                                                    <td>{{ medicationDetails.dose }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Price</th>
                                                                    <td>{{ medicationDetails.price }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class=\"modal-footer\">
                                                        <a href=\"{{ path('user_prescription_checkout_alternative', {'id': prescription.id}) }}\" class=\"btn btn-outline-primary\">Pay Online</a>
                                                        <a href=\"{{ path('send_prescription', {'id': prescription.id}) }}\" class=\"btn btn-outline-primary\">Send Prescription</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"{{ path('user_prescription_index') }}\" class=\"btn btn-outline-primary\">Back to list</a>
                            <a href=\"{{ path('user_map') }}\" class=\"btn btn-outline-primary\">Check Map</a>
                             <!-- Add Payment button -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const viewMedicationBtn = document.querySelector('.view-medication-details');
            const medicationModal = new bootstrap.Modal(document.getElementById('medicationDetailsModal'));

            viewMedicationBtn.addEventListener('click', function () {
                medicationModal.show();
            });
        });
    </script>
{% endblock %}
", "prescription/showf.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\prescription\\showf.html.twig");
    }
}
