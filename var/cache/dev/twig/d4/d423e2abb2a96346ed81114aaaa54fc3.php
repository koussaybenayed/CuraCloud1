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

/* bilan/pdf_template.html.twig */
class __TwigTemplate_cec905c868e9df6cf160505fa4c0e507 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bilan PDF</title>
</head>
<body>
    <h1>Bilan Report</h1>

    <table border=\"1\" cellpadding=\"5\" cellspacing=\"0\">
        <tr>
            <th>ID</th>
            <th>Realisation Date</th>
            <th>Result</th>
            <th>Lab Comment</th>
            <th>Submission Date</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
            <td>";
        // line 22
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 22, $this->source); })()), "realisationDate", [], "any", false, false, false, 22)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 22, $this->source); })()), "realisationDate", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            <td>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 23, $this->source); })()), "result", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
            <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 24, $this->source); })()), "labComment", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            <td>";
        // line 25
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 25, $this->source); })()), "submissionDate", [], "any", false, false, false, 25)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 25, $this->source); })()), "submissionDate", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            <td>";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["bilan"]) || array_key_exists("bilan", $context) ? $context["bilan"] : (function () { throw new RuntimeError('Variable "bilan" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
        </tr>
    </table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bilan/pdf_template.html.twig";
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
        return array (  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bilan PDF</title>
</head>
<body>
    <h1>Bilan Report</h1>

    <table border=\"1\" cellpadding=\"5\" cellspacing=\"0\">
        <tr>
            <th>ID</th>
            <th>Realisation Date</th>
            <th>Result</th>
            <th>Lab Comment</th>
            <th>Submission Date</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ bilan.id }}</td>
            <td>{{ bilan.realisationDate ? bilan.realisationDate|date('Y-m-d') : '' }}</td>
            <td>{{ bilan.result }}</td>
            <td>{{ bilan.labComment }}</td>
            <td>{{ bilan.submissionDate ? bilan.submissionDate|date('Y-m-d') : '' }}</td>
            <td>{{ bilan.price }}</td>
        </tr>
    </table>
</body>
</html>
", "bilan/pdf_template.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\bilan\\pdf_template.html.twig");
    }
}
