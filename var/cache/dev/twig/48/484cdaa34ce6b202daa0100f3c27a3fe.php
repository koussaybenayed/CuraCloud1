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

/* bilan/show.html.twig */
class __TwigTemplate_6266508621a0f3c14013ca182700d5ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/show.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "bilan/show.html.twig", 1);
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

        yield "Bilan";
        
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
        yield "    <h1>Bilan</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>RealisationDate</th>
                <td>";
        // line 16
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 16, $this->source); })()), "realisationDate", [], "any", false, false, false, 16)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 16, $this->source); })()), "realisationDate", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Result</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 20, $this->source); })()), "result", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>LabComment</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 24, $this->source); })()), "labComment", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>";
        // line 28
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 28, $this->source); })()), "submissionDate", [], "any", false, false, false, 28)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 28, $this->source); })()), "submissionDate", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_index2");
        yield "\">back to list</a>

    <a href=\"";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "bilan/_delete_form.html.twig");
        yield "
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
        return "bilan/show.html.twig";
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
        return array (  151 => 41,  146 => 39,  141 => 37,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}Bilan{% endblock %}

{% block body %}
    <h1>Bilan</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ bilan.id }}</td>
            </tr>
            <tr>
                <th>RealisationDate</th>
                <td>{{ bilan.realisationDate ? bilan.realisationDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Result</th>
                <td>{{ bilan.result }}</td>
            </tr>
            <tr>
                <th>LabComment</th>
                <td>{{ bilan.labComment }}</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>{{ bilan.submissionDate ? bilan.submissionDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ bilan.price }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_bilan_index2') }}\">back to list</a>

    <a href=\"{{ path('app_bilan_edit', {'id': bilan.id}) }}\">edit</a>

    {{ include('bilan/_delete_form.html.twig') }}
{% endblock %}
", "bilan/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\bilan\\show.html.twig");
    }
}
