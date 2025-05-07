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

/* diagnostic_request/show.html.twig */
class __TwigTemplate_b9dfcfd56f6de73d91156a985d86856c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/show.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "diagnostic_request/show.html.twig", 1);
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

        yield "<title>
DiagnosticRequestDetails
</title>";
        
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
        yield " <br><br>

 <div class=\"main\">
 
    <br>
   <h1 style=\"color: #011663; text-align: center; font-style: italic;\">Details Diagnostic</h1>
<br><br> <br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>AnalyseType</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 24, $this->source); })()), "analyseType", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>CreationDate</th>
                <td>";
        // line 28
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 28, $this->source); })()), "creationDate", [], "any", false, false, false, 28)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 28, $this->source); })()), "creationDate", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>DoctorNotes</th>
                <td>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 36, $this->source); })()), "doctorNotes", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>RadioType</th>
                <td>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 44, $this->source); })()), "radioType", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_index2");
        yield "\">back to list</a>

    <a href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["diagnostic_request"]) || array_key_exists("diagnostic_request", $context) ? $context["diagnostic_request"] : (function () { throw new RuntimeError('Variable "diagnostic_request" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 53
        yield Twig\Extension\CoreExtension::include($this->env, $context, "diagnostic_request/_delete_form.html.twig");
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
        return "diagnostic_request/show.html.twig";
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
        return array (  166 => 53,  161 => 51,  156 => 49,  148 => 44,  141 => 40,  134 => 36,  127 => 32,  120 => 28,  113 => 24,  106 => 20,  92 => 8,  82 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}<title>
DiagnosticRequestDetails
</title>{% endblock %}

{% block body %}
 <br><br>

 <div class=\"main\">
 
    <br>
   <h1 style=\"color: #011663; text-align: center; font-style: italic;\">Details Diagnostic</h1>
<br><br> <br>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ diagnostic_request.id }}</td>
            </tr>
            <tr>
                <th>AnalyseType</th>
                <td>{{ diagnostic_request.analyseType }}</td>
            </tr>
            <tr>
                <th>CreationDate</th>
                <td>{{ diagnostic_request.creationDate ? diagnostic_request.creationDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ diagnostic_request.status }}</td>
            </tr>
            <tr>
                <th>DoctorNotes</th>
                <td>{{ diagnostic_request.doctorNotes }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ diagnostic_request.type }}</td>
            </tr>
            <tr>
                <th>RadioType</th>
                <td>{{ diagnostic_request.radioType }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_diagnostic_request_index2') }}\">back to list</a>

    <a href=\"{{ path('app_diagnostic_request_edit', {'id': diagnostic_request.id}) }}\">edit</a>

    {{ include('diagnostic_request/_delete_form.html.twig') }}
{% endblock %}
", "diagnostic_request/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\diagnostic_request\\show.html.twig");
    }
}
