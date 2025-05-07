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

/* BackOffice/medical_record/index.html.twig */
class __TwigTemplate_b398c86261f122f72df3102ef06a7035 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/medical_record/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/medical_record/index.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "BackOffice/medical_record/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<div class=\"container mt-4\">
    <h2 class=\"mb-4\">Medical Records</h2>

    <div class=\"mb-3\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_medical_record_new");
        yield "\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> Create New Record</a>
    </div>

    <!-- Search Form -->
    <div class=\"mb-3\">
        <form method=\"GET\" action=\"\" class=\"form-inline\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search records...\" aria-label=\"Search records\" aria-describedby=\"button-addon2\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon2\"><i class=\"fas fa-search\"></i></button>
            </div>
        </form>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-hover shadow-sm\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Patient Name</th>
                    <th>Height (cm)</th>
                    <th>Weight (kg)</th>
                    <th>Blood Type</th>
                    <th>Diseases</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["medical_records"]) || array_key_exists("medical_records", $context) ? $context["medical_records"] : (function () { throw new RuntimeError('Variable "medical_records" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["medical_record"]) {
            // line 41
            yield "                <tr>
                    <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "patientName", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                    <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "height", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                    <td>";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "weight", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                    <td>";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "bloodType", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                    <td>";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "diseases", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 48
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_medical_record_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn btn-outline-info btn-sm me-1\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
            // line 49
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_medical_record_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["medical_record"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-outline-warning btn-sm me-1\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            yield "                <tr>
                    <td colspan=\"11\" class=\"text-center\">No records found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medical_record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "            </tbody>
        </table>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<!-- If you have additional JS for this page, link or embed them here -->
<script>
    // Optional: JavaScript for custom interactions, like live search or dynamic filtering
</script>
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
        return "BackOffice/medical_record/index.html.twig";
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
        return array (  207 => 65,  197 => 64,  181 => 57,  172 => 53,  163 => 49,  159 => 48,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  135 => 41,  130 => 40,  101 => 14,  95 => 10,  85 => 9,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}


{% block stylesheets %}
{{ parent() }}

{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h2 class=\"mb-4\">Medical Records</h2>

    <div class=\"mb-3\">
            <a href=\"{{ path('admin_medical_record_new') }}\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i> Create New Record</a>
    </div>

    <!-- Search Form -->
    <div class=\"mb-3\">
        <form method=\"GET\" action=\"\" class=\"form-inline\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search records...\" aria-label=\"Search records\" aria-describedby=\"button-addon2\">
                <button class=\"btn btn-outline-secondary\" type=\"submit\" id=\"button-addon2\"><i class=\"fas fa-search\"></i></button>
            </div>
        </form>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-hover shadow-sm\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Patient Name</th>
                    <th>Height (cm)</th>
                    <th>Weight (kg)</th>
                    <th>Blood Type</th>
                    <th>Diseases</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for medical_record in medical_records %}
                <tr>
                    <td>{{ medical_record.patientName }}</td>
                    <td>{{ medical_record.height }}</td>
                    <td>{{ medical_record.weight }}</td>
                    <td>{{ medical_record.bloodType }}</td>
                    <td>{{ medical_record.diseases }}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('admin_medical_record_show', {'id': medical_record.id}) }}\" class=\"btn btn-outline-info btn-sm me-1\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('admin_medical_record_edit', {'id': medical_record.id}) }}\" class=\"btn btn-outline-warning btn-sm me-1\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"11\" class=\"text-center\">No records found.</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<!-- If you have additional JS for this page, link or embed them here -->
<script>
    // Optional: JavaScript for custom interactions, like live search or dynamic filtering
</script>
{% endblock %}
", "BackOffice/medical_record/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\BackOffice\\medical_record\\index.html.twig");
    }
}
