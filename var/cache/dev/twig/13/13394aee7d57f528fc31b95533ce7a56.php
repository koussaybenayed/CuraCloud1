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

/* BackOffice/appointment/index.html.twig */
class __TwigTemplate_6baaaa05179f50866cb45e2296ede10f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/appointment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "BackOffice/appointment/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "
<div class=\"container mt-4\">
    <div class=\"mb-3\">
<div style=\"display: flex; justify-content: space-between;\">

    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_appointment_calendar");
        yield "\" class=\"btn btn-primary\">
        <i class=\"far fa-calendar-alt\" style=\"margin-right: 5px;\"></i> Calendar
    </a>
 
</div>


    </div>
    <div class=\"mb-3\">
        <form method=\"GET\" action=\"\" class=\"form-inline\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search records...\" aria-label=\"Search records\" aria-describedby=\"button-addon2\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon2\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </form>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover shadow-sm\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Description</th>
                    <th>Status</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 40
            yield "                <tr>
                    <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "description", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                    <td>
                        <span class=\"badge rounded-pill\" style=\"background-color:
                            ";
            // line 44
            if ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 44)) == "accepted")) {
                // line 45
                yield "                                #28a745
                            ";
            } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["appointment"], "status", [], "any", false, false, false, 46)) == "completed")) {
                // line 47
                yield "                                #007bff
                            ";
            } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["appointment"], "status", [], "any", false, false, false, 48)) == "scheduled")) {
                // line 49
                yield "                                #ffc107
                            ";
            } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 50
$context["appointment"], "status", [], "any", false, false, false, 50)) == "cancelled")) {
                // line 51
                yield "                                #dc3545
                            ";
            } else {
                // line 53
                yield "                                #6c757d
                            ";
            }
            // line 55
            yield "                            \">
                            ";
            // line 56
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 56), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 60
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_appointment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm me-1\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        </a>
                        <!-- Completed Button -->
                        <a href=\"";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_completed", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm me-1\" onclick=\"return confirm('Are you sure you want to set this appointment as complete?');\">
                            <i class=\"fas fa-check-circle\"></i>
                        </a>
            
                        <!-- Accept Button -->
                        <a href=\"";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"btn btn-success btn-sm me-1\" onclick=\"return confirm('Are you sure you want to accept this appointment?');\">
                            <i class=\"fas fa-thumbs-up\"></i>
                        </a>
                        <!-- Decline Button -->
                        <a href=\"";
            // line 74
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_decline", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-sm me-1\" onclick=\"return confirm('Are you sure you want to decline this appointment?');\">
                            <i class=\"fas fa-times-circle\"></i>
      
                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center\">No appointments found.</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "            </tbody>
        </table>
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
        return "BackOffice/appointment/index.html.twig";
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
        return array (  199 => 84,  190 => 80,  179 => 74,  172 => 70,  164 => 65,  156 => 60,  149 => 56,  146 => 55,  142 => 53,  138 => 51,  136 => 50,  133 => 49,  131 => 48,  128 => 47,  126 => 46,  123 => 45,  121 => 44,  115 => 41,  112 => 40,  107 => 39,  76 => 11,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}



{% block body %}

<div class=\"container mt-4\">
    <div class=\"mb-3\">
<div style=\"display: flex; justify-content: space-between;\">

    <a href=\"{{ path('admin_appointment_calendar') }}\" class=\"btn btn-primary\">
        <i class=\"far fa-calendar-alt\" style=\"margin-right: 5px;\"></i> Calendar
    </a>
 
</div>


    </div>
    <div class=\"mb-3\">
        <form method=\"GET\" action=\"\" class=\"form-inline\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search records...\" aria-label=\"Search records\" aria-describedby=\"button-addon2\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon2\">
                    <i class=\"fas fa-search\"></i>
                </button>
            </div>
        </form>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-hover shadow-sm\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Description</th>
                    <th>Status</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for appointment in appointments %}
                <tr>
                    <td>{{ appointment.description }}</td>
                    <td>
                        <span class=\"badge rounded-pill\" style=\"background-color:
                            {% if appointment.status|lower == 'accepted' %}
                                #28a745
                            {% elseif appointment.status|lower == 'completed' %}
                                #007bff
                            {% elseif appointment.status|lower == 'scheduled' %}
                                #ffc107
                            {% elseif appointment.status|lower == 'cancelled' %}
                                #dc3545
                            {% else %}
                                #6c757d
                            {% endif %}
                            \">
                            {{ appointment.status }}
                        </span>
                    </td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_app_appointment_show', {'id': appointment.id}) }}\" class=\"btn btn-outline-info btn-sm me-1\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        </a>
                        <!-- Completed Button -->
                        <a href=\"{{ path('appointment_completed', {'id': appointment.id}) }}\" class=\"btn btn-success btn-sm me-1\" onclick=\"return confirm('Are you sure you want to set this appointment as complete?');\">
                            <i class=\"fas fa-check-circle\"></i>
                        </a>
            
                        <!-- Accept Button -->
                        <a href=\"{{ path('appointment_accept', {'id': appointment.id}) }}\" class=\"btn btn-success btn-sm me-1\" onclick=\"return confirm('Are you sure you want to accept this appointment?');\">
                            <i class=\"fas fa-thumbs-up\"></i>
                        </a>
                        <!-- Decline Button -->
                        <a href=\"{{ path('appointment_decline', {'id': appointment.id}) }}\" class=\"btn btn-danger btn-sm me-1\" onclick=\"return confirm('Are you sure you want to decline this appointment?');\">
                            <i class=\"fas fa-times-circle\"></i>
      
                    </td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"6\" class=\"text-center\">No appointments found.</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}", "BackOffice/appointment/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\BackOffice\\appointment\\index.html.twig");
    }
}
