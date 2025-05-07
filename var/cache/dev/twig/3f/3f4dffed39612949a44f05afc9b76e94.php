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

/* FrontOffice/appointment/Doctor.html.twig */
class __TwigTemplate_9ca0f81f4e9ccc57ebdf0a2d8a14cde0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/Doctor.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/Doctor.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/appointment/Doctor.html.twig", 1);
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
        yield "\t<div class=\"container mt-4\">
\t\t<a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_index");
        yield "\" class=\"btn btn-outline-secondary mb-3\">Back to Appointment List</a>
\t\t<h5 class=\"mb-4\">Doctors List</h5>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover shadow-sm\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>Phone Number</th>
\t\t\t\t\t\t<th>Average Rating</th>
\t\t\t\t\t\t<th class=\"text-center\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
            // line 22
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "firstName", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "lastName", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "email", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "address", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "phoneNumber", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                            <td>
\t\t\t\t\t\t\t\t";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ratings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 30), [], "array", true, true, false, 30)) {
                // line 31
                yield "\t\t\t\t\t\t\t\t\t";
                $context["rating"] = Twig\Extension\CoreExtension::numberFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ratings"]) || array_key_exists("ratings", $context) ? $context["ratings"] : (function () { throw new RuntimeError('Variable "ratings" does not exist.', 31, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 31), [], "array", false, false, false, 31), 2);
                // line 32
                yield "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 33
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    if (($context["i"] <= (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 33, $this->source); })()))) {
                        // line 34
                        yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((                    // line 35
$context["i"] <= Twig\Extension\CoreExtension::round((isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 35, $this->source); })())))) {
                        // line 36
                        yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 38
                        yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 40
                    yield "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "\t\t\t\t\t\t\t\t\t<span>(";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["rating"]) || array_key_exists("rating", $context) ? $context["rating"] : (function () { throw new RuntimeError('Variable "rating" does not exist.', 41, $this->source); })()), "html", null, true);
                yield ")</span>
\t\t\t\t\t\t\t\t";
            } else {
                // line 43
                yield "\t\t\t\t\t\t\t\t\tNo ratings yet
\t\t\t\t\t\t\t\t";
            }
            // line 45
            yield "\t\t\t\t\t\t\t</td>   
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_new", ["id_doctor" => CoreExtension::getAttribute($this->env, $this->source, $context["doctor"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-outline-success btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i> Select
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"7\" class=\"text-center\">No doctors found.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
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
        return "FrontOffice/appointment/Doctor.html.twig";
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
        return array (  187 => 57,  178 => 53,  167 => 47,  163 => 45,  159 => 43,  153 => 41,  147 => 40,  143 => 38,  139 => 36,  137 => 35,  134 => 34,  131 => 33,  126 => 32,  123 => 31,  121 => 30,  116 => 28,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  96 => 22,  91 => 21,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t<a href=\"{{ path('user_app_appointment_index') }}\" class=\"btn btn-outline-secondary mb-3\">Back to Appointment List</a>
\t\t<h5 class=\"mb-4\">Doctors List</h5>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover shadow-sm\">
\t\t\t\t<thead class=\"thead-dark\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Firstname</th>
\t\t\t\t\t\t<th>Lastname</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Address</th>
\t\t\t\t\t\t<th>Phone Number</th>
\t\t\t\t\t\t<th>Average Rating</th>
\t\t\t\t\t\t<th class=\"text-center\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for doctor in doctors %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ doctor.firstName }}</td>
\t\t\t\t\t\t\t<td>{{ doctor.lastName }}</td>
\t\t\t\t\t\t\t<td>{{ doctor.email }}</td>
\t\t\t\t\t\t\t<td>{{ doctor.address }}</td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td>{{ doctor.phoneNumber }}</td>
                            <td>
\t\t\t\t\t\t\t\t{% if ratings[doctor.id] is defined %}
\t\t\t\t\t\t\t\t\t{% set rating = ratings[doctor.id]|number_format(2) %}
\t\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t\t{% if i <= rating %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t\t{% elseif i <= (rating|round) %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-star\" style=\"color: gold;\"></i>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t<span>({{ rating }})</span>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\tNo ratings yet
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>   
\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_app_appointment_new', {'id_doctor': doctor.id}) }}\" class=\"btn btn-outline-success btn-sm\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i> Select
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"7\" class=\"text-center\">No doctors found.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}
", "FrontOffice/appointment/Doctor.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\Doctor.html.twig");
    }
}
