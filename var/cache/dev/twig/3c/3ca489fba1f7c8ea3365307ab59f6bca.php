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

/* BackOffice/appointment/show.html.twig */
class __TwigTemplate_d814a67048020e4de695795ef34ad80a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/appointment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/appointment/show.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "BackOffice/appointment/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<div class=\"container mt-4\">
<h1 class=\"mb-4\">Appointment Details</h1>

<!-- Edit button with tooltip -->
<div class=\"mb-3\">
    <a href=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_appointment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\" class=\"btn btn-primary me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Edit this appointment\">
        <i class=\"fas fa-edit\"></i> Edit
    </a>

    <!-- Back to List button with tooltip -->
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_appointment_index");
        yield "\" class=\"btn btn-secondary me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Go back to the list of appointments\">
        <i class=\"fas fa-arrow-left\"></i> Back to List
    </a>

    <!-- Delete button included from another template with tooltip -->
    ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/BackOffice/appointment/_delete_form.html.twig", ["class" => "d-inline-block", "button_class" => "btn btn-danger", "button_text" => "<i class=\"fas fa-trash-alt\"></i> Delete", "tooltip" => "Delete this appointment"]);
        yield "
</div>

    </div>
    <div class=\"card-body\">
        <h3 class=\"card-title\">Appointment #";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th scope=\"row\">Description</th>
                        <td>";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Status</th>
                        <td>
                            <span style=\"color:
                                ";
        // line 36
        $context["status_color"] = ["accepted" => "#28a745", "completed" => "#007bff", "scheduled" => "#ffc107", "cancelled" => "#dc3545"];
        // line 42
        yield "                                ";
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_color"] ?? null), Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42)), [], "array", true, true, false, 42) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["status_color"] ?? null), Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42)), [], "array", false, false, false, 42)))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["status_color"] ?? null), Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42)), [], "array", false, false, false, 42), "html", null, true)) : (yield "#6c757d"));
        yield "\">
                                ";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), "html", null, true);
        yield "
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Start Date</th>
                        <td>";
        // line 49
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 49, $this->source); })()), "startDate", [], "any", false, false, false, 49)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 49, $this->source); })()), "startDate", [], "any", false, false, false, 49), "l, F j, Y, g:i A"), "html", null, true)) : (yield "N/A"));
        yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">End Date</th>
                        <td>";
        // line 53
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 53, $this->source); })()), "endDate", [], "any", false, false, false, 53)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 53, $this->source); })()), "endDate", [], "any", false, false, false, 53), "l, F j, Y, g:i A"), "html", null, true)) : (yield "N/A"));
        yield "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"card-footer\">
        <div class=\"d-flex justify-content-between\">
            <a href=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" class=\"btn btn-success me-2\" onclick=\"return confirm('Are you sure you want to accept this appointment?');\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Accept this appointment\">
                <i class=\"fas fa-check-circle\"></i> Accept
            </a>
            <a href=\"";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_decline", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\" onclick=\"return confirm('Are you sure you want to decline this appointment?');\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Decline this appointment\">
                <i class=\"fas fa-ban\"></i> Decline
            </a>
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
        return "BackOffice/appointment/show.html.twig";
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
        return array (  158 => 64,  152 => 61,  141 => 53,  134 => 49,  125 => 43,  120 => 42,  118 => 36,  109 => 30,  100 => 24,  92 => 19,  84 => 14,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block body %}
<div class=\"container mt-4\">
<h1 class=\"mb-4\">Appointment Details</h1>

<!-- Edit button with tooltip -->
<div class=\"mb-3\">
    <a href=\"{{ path('admin_app_appointment_edit', {'id': appointment.id}) }}\" class=\"btn btn-primary me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Edit this appointment\">
        <i class=\"fas fa-edit\"></i> Edit
    </a>

    <!-- Back to List button with tooltip -->
    <a href=\"{{ path('admin_app_appointment_index') }}\" class=\"btn btn-secondary me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Go back to the list of appointments\">
        <i class=\"fas fa-arrow-left\"></i> Back to List
    </a>

    <!-- Delete button included from another template with tooltip -->
    {{ include('/BackOffice/appointment/_delete_form.html.twig', {'class': 'd-inline-block', 'button_class': 'btn btn-danger', 'button_text': '<i class=\"fas fa-trash-alt\"></i> Delete', 'tooltip': 'Delete this appointment'}) }}
</div>

    </div>
    <div class=\"card-body\">
        <h3 class=\"card-title\">Appointment #{{ appointment.id }}</h3>
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\">
                <tbody>
                    <tr>
                        <th scope=\"row\">Description</th>
                        <td>{{ appointment.description }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Status</th>
                        <td>
                            <span style=\"color:
                                {% set status_color = {
                                    'accepted': '#28a745',
                                    'completed': '#007bff',
                                    'scheduled': '#ffc107',
                                    'cancelled': '#dc3545'
                                } %}
                                {{ status_color[appointment.status|lower] ?? '#6c757d' }}\">
                                {{ appointment.status }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Start Date</th>
                        <td>{{ appointment.startDate ? appointment.startDate|date('l, F j, Y, g:i A') : 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">End Date</th>
                        <td>{{ appointment.endDate ? appointment.endDate|date('l, F j, Y, g:i A') : 'N/A' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"card-footer\">
        <div class=\"d-flex justify-content-between\">
            <a href=\"{{ path('appointment_accept', {'id': appointment.id}) }}\" class=\"btn btn-success me-2\" onclick=\"return confirm('Are you sure you want to accept this appointment?');\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Accept this appointment\">
                <i class=\"fas fa-check-circle\"></i> Accept
            </a>
            <a href=\"{{ path('appointment_decline', {'id': appointment.id}) }}\" class=\"btn btn-warning me-2\" onclick=\"return confirm('Are you sure you want to decline this appointment?');\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Decline this appointment\">
                <i class=\"fas fa-ban\"></i> Decline
            </a>
        </div>
    </div>
</div>
{% endblock %}
", "BackOffice/appointment/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\BackOffice\\appointment\\show.html.twig");
    }
}
