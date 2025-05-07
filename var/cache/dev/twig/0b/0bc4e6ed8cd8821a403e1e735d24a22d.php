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

/* FrontOffice/appointment/index.html.twig */
class __TwigTemplate_a10f7b734c02256c43aa07f9f2de67c8 extends Template
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
        return "newbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/appointment/index.html.twig", 1);
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
        yield "
\t<div class=\"container mt-4\">

\t\t<div class=\"mb-3\">
\t\t\t<a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctors_list");
        yield "\" class=\"btn btn-primary\">
\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\tCreate New Appointment</a>
\t\t</div>
\t\t<div class=\"mb-3\"></div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover shadow-sm\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t
\t\t\t\t\t\t<th class=\"text-center\">Description</th>
\t\t\t\t\t\t<th class=\"text-center\">Status</th>
\t\t\t\t\t\t<th class=\"text-center\">Rating</th>
\t\t\t\t\t\t<th class=\"text-center\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 27
            yield "\t\t\t\t\t\t<td class=\"text-center\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "description", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<span class=\"badge rounded-pill\" style=\"background-color:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    ";
            // line 30
            if ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 30)) == "accepted")) {
                // line 31
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #28a745
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    ";
            } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 32
$context["appointment"], "status", [], "any", false, false, false, 32)) == "completed")) {
                // line 33
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #007bff
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    ";
            } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 34
$context["appointment"], "status", [], "any", false, false, false, 34)) == "scheduled")) {
                // line 35
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #ffc107
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    ";
            } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,             // line 36
$context["appointment"], "status", [], "any", false, false, false, 36)) == "cancelled")) {
                // line 37
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #dc3545
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    ";
            } else {
                // line 39
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #6c757d
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    ";
            }
            // line 41
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    \">
\t\t\t\t\t\t\t\t";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "status", [], "any", false, false, false, 42), "html", null, true);
            yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t";
            // line 46
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "rating", [], "any", false, false, false, 46))) {
                // line 47
                yield "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 48
                    yield "\t\t\t\t\t\t\t\t\t";
                    if (($context["i"] <= CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "rating", [], "any", false, false, false, 48))) {
                        // line 49
                        yield "\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 51
                        yield "\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 53
                    yield "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "\t\t\t\t\t\t\t";
            } else {
                // line 55
                yield "\t\t\t\t\t\t\t\t<a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rating_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm\">
\t\t\t\t\t\t\t\t\tAdd Rating
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 59
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"";
            // line 61
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm me-1\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 64
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm me-1\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\" class=\"text-center\">No appointments found.</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "\t\t\t</tr>
\t\t</tbody>
\t</tbody>
</table></div></div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "FrontOffice/appointment/index.html.twig";
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
        return array (  208 => 74,  199 => 70,  188 => 64,  182 => 61,  178 => 59,  170 => 55,  167 => 54,  161 => 53,  157 => 51,  153 => 49,  150 => 48,  145 => 47,  143 => 46,  136 => 42,  133 => 41,  129 => 39,  125 => 37,  123 => 36,  120 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  108 => 30,  101 => 27,  96 => 26,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}

\t<div class=\"container mt-4\">

\t\t<div class=\"mb-3\">
\t\t\t<a href=\"{{ path('doctors_list') }}\" class=\"btn btn-primary\">
\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\tCreate New Appointment</a>
\t\t</div>
\t\t<div class=\"mb-3\"></div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover shadow-sm\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t
\t\t\t\t\t\t<th class=\"text-center\">Description</th>
\t\t\t\t\t\t<th class=\"text-center\">Status</th>
\t\t\t\t\t\t<th class=\"text-center\">Rating</th>
\t\t\t\t\t\t<th class=\"text-center\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t
\t\t\t\t\t{% for appointment in appointments %}
\t\t\t\t\t\t<td class=\"text-center\">{{ appointment.description }}</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<span class=\"badge rounded-pill\" style=\"background-color:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    {% if appointment.status|lower == 'accepted' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #28a745
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    {% elseif appointment.status|lower == 'completed' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #007bff
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    {% elseif appointment.status|lower == 'scheduled' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #ffc107
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    {% elseif appointment.status|lower == 'cancelled' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #dc3545
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    #6c757d
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                                    \">
\t\t\t\t\t\t\t\t{{ appointment.status }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t{% if appointment.rating is not null %}
\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t{% if i <= appointment.rating %}
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('rating_add', {'id': appointment.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
\t\t\t\t\t\t\t\t\tAdd Rating
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('user_app_appointment_show', {'id': appointment.id}) }}\" class=\"btn btn-outline-info btn-sm me-1\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{ path('user_app_appointment_edit', {'id': appointment.id}) }}\" class=\"btn btn-outline-warning btn-sm me-1\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"4\" class=\"text-center\">No appointments found.</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t</tbody>
\t</tbody>
</table></div></div>{% endblock %}
", "FrontOffice/appointment/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\index.html.twig");
    }
}
