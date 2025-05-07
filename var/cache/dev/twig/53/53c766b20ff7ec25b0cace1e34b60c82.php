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

/* prescription/index.html.twig */
class __TwigTemplate_4eb160a07e4dcee761eb61e4abf5f0ee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/index.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "prescription/index.html.twig", 1);
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

        yield "<title>Prescription Details</title>";
        
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
    <h1 class=\"mb-4 text-center\">Prescriptions Index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover shadow\">
            <thead class=\"thead-light\">
                <tr>
                
                    <th scope=\"col\">Prescription</th>
                    <th scope=\"col\">Creation Date</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prescriptions"]) || array_key_exists("prescriptions", $context) ? $context["prescriptions"] : (function () { throw new RuntimeError('Variable "prescriptions" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
            // line 21
            yield "                <tr>
                   
                    <td>";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "duration", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                    <td>";
            // line 24
            ((CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "creationDate", [], "any", false, false, false, 24)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "creationDate", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prescription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn rounded-pill btn-outline-info\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
            // line 27
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prescription_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn rounded-pill btn-outline-primary\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            yield "                <tr>
                    <td colspan=\"4\" class=\"text-center\">No prescriptions found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "            </tbody>
        </table>
    </div>

    <div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->

    <div class=\"text-center\"> <!-- Center the button -->
        <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prescription_new");
        yield "\" class=\"btn rounded-pill btn-outline-success\"> Create New Prescription</a>
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
        return "prescription/index.html.twig";
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
        return array (  155 => 42,  146 => 35,  137 => 31,  128 => 27,  124 => 26,  119 => 24,  115 => 23,  111 => 21,  106 => 20,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}<title>Prescription Details</title>{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Prescriptions Index</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover shadow\">
            <thead class=\"thead-light\">
                <tr>
                
                    <th scope=\"col\">Prescription</th>
                    <th scope=\"col\">Creation Date</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for prescription in prescriptions %}
                <tr>
                   
                    <td>{{ prescription.duration }}</td>
                    <td>{{ prescription.creationDate ? prescription.creationDate|date('Y-m-d') : '' }}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_prescription_show', {'id': prescription.id}) }}\" class=\"btn rounded-pill btn-outline-info\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('admin_prescription_edit', {'id': prescription.id}) }}\" class=\"btn rounded-pill btn-outline-primary\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-center\">No prescriptions found.</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->

    <div class=\"text-center\"> <!-- Center the button -->
        <a href=\"{{ path('admin_prescription_new') }}\" class=\"btn rounded-pill btn-outline-success\"> Create New Prescription</a>
    </div>
</div>
{% endblock %}
", "prescription/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\prescription\\index.html.twig");
    }
}
