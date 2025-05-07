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

/* bilan/index.html.twig */
class __TwigTemplate_ec0178731cf1a540c94e898d9ab36c89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/index.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "bilan/index.html.twig", 1);
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

        yield "<title>Bilan index</title>";
        
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
        yield "
<br><br><br><br><br><br><br><br><br>
    <h1>Bilan index</h1>
    <input type=\"text\" id=\"search-input\" placeholder=\"Recherchez...\">
<div id=\"results-container\"></div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Realisation Date</th>
                <th>Result</th>
                <th>LabComment</th>
                <th>SubmissionDate</th>
                <th>Price</th>
                <th>PDF</th>
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bilans"]) || array_key_exists("bilans", $context) ? $context["bilans"] : (function () { throw new RuntimeError('Variable "bilans" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bilan"]) {
            // line 27
            yield "            <tr>
                <td>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                <td>";
            // line 29
            ((CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "realisationDate", [], "any", false, false, false, 29)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "realisationDate", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "result", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "labComment", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            ((CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "submissionDate", [], "any", false, false, false, 32)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "submissionDate", [], "any", false, false, false, 32), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "price", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>
            <a href=\"";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_generate_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                Generate PDF
            </a>
        </td>
               
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            yield "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "        </tbody>
    </table>
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
        return "bilan/index.html.twig";
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
        return array (  166 => 46,  157 => 42,  145 => 35,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  117 => 27,  112 => 26,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block title %}<title>Bilan index</title>{% endblock %}

{% block body %}

<br><br><br><br><br><br><br><br><br>
    <h1>Bilan index</h1>
    <input type=\"text\" id=\"search-input\" placeholder=\"Recherchez...\">
<div id=\"results-container\"></div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Realisation Date</th>
                <th>Result</th>
                <th>LabComment</th>
                <th>SubmissionDate</th>
                <th>Price</th>
                <th>PDF</th>
               
            </tr>
        </thead>
        <tbody>
        {% for bilan in bilans %}
            <tr>
                <td>{{ bilan.id }}</td>
                <td>{{ bilan.realisationDate ? bilan.realisationDate|date('Y-m-d') : '' }}</td>
                <td>{{ bilan.result }}</td>
                <td>{{ bilan.labComment }}</td>
                <td>{{ bilan.submissionDate ? bilan.submissionDate|date('Y-m-d') : '' }}</td>
                <td>{{ bilan.price }}</td>
                <td>
            <a href=\"{{ path('app_bilan_generate_pdf', {'id': bilan.id}) }}\" class=\"btn btn-primary\">
                Generate PDF
            </a>
        </td>
               
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "bilan/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\bilan\\index.html.twig");
    }
}
