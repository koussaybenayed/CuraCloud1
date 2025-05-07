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

/* prescription/indexf.html.twig */
class __TwigTemplate_e6c56cce5cc58defbac3da9150046103 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/indexf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/indexf.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "prescription/indexf.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["prescriptions"]) || array_key_exists("prescriptions", $context) ? $context["prescriptions"] : (function () { throw new RuntimeError('Variable "prescriptions" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prescription"]) {
            // line 22
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
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_prescription_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["prescription"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn rounded-pill btn-outline-info\"><i class=\"fas fa-eye\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            yield "                <tr>
                    <td colspan=\"4\" class=\"text-center\">No prescriptions found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prescription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </tbody>
        </table>
    </div>

    <div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->
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
        return "prescription/indexf.html.twig";
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
        return array (  141 => 34,  132 => 30,  123 => 26,  118 => 24,  114 => 23,  111 => 22,  106 => 21,  90 => 7,  80 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}


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
                        <a href=\"{{ path('user_prescription_show', {'id': prescription.id}) }}\" class=\"btn rounded-pill btn-outline-info\"><i class=\"fas fa-eye\"></i></a>
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
</div>
{% endblock %}", "prescription/indexf.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\prescription\\indexf.html.twig");
    }
}
