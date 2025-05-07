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

/* bilan/index2.html.twig */
class __TwigTemplate_7ca701fe3b62af67a4425350c9df2163 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/index2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/index2.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "bilan/index2.html.twig", 1);
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



<link rel=\"stylesheet\" href=\"";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/css/flashy.css"), "html", null, true);
        yield "\">
 <script src=\"//code.jquery.com/jquery.js\"></script>
 <script src=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/mercuryseriesflashy/js/flashy.js"), "html", null, true);
        yield "\"></script>
    <h1>Bilan index</h1>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "    <div id=\"flashy-messages\">
        ";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["message"], "html", null, true);
            yield "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Realisation Date</th>
                <th>Result</th>
                <th>LabComment</th>
                <th>Submission Date</th>
                <th>Price</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bilans"]) || array_key_exists("bilans", $context) ? $context["bilans"] : (function () { throw new RuntimeError('Variable "bilans" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bilan"]) {
            // line 35
            yield "            <tr>
                <td>";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                <td>";
            // line 37
            ((CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "realisationDate", [], "any", false, false, false, 37)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "realisationDate", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "result", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "labComment", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            ((CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "submissionDate", [], "any", false, false, false, 40)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "submissionDate", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "price", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            yield "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bilan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "
        
        </tbody>
    </table>

    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_new");
        yield "\">Create new</a>
";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MercurySeriesFlashy/flashy.html.twig");
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
        return "bilan/index2.html.twig";
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
        return array (  205 => 58,  201 => 57,  194 => 52,  185 => 48,  176 => 44,  172 => 43,  167 => 41,  163 => 40,  159 => 39,  155 => 38,  151 => 37,  147 => 36,  144 => 35,  139 => 34,  122 => 19,  113 => 16,  110 => 15,  106 => 14,  101 => 12,  96 => 10,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}<title>Bilan index</title>{% endblock %}

{% block body %}




<link rel=\"stylesheet\" href=\"{{ asset('bundles/mercuryseriesflashy/css/flashy.css') }}\">
 <script src=\"//code.jquery.com/jquery.js\"></script>
 <script src=\"{{ asset('bundles/mercuryseriesflashy/js/flashy.js') }}\"></script>
    <h1>Bilan index</h1>
{% for message in app.flashes('success') %}
    <div id=\"flashy-messages\">
        {{ message }}
    </div>
{% endfor %}


    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Realisation Date</th>
                <th>Result</th>
                <th>LabComment</th>
                <th>Submission Date</th>
                <th>Price</th>
                <th>actions</th>
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
                    <a href=\"{{ path('app_bilan_show', {'id': bilan.id}) }}\">show</a>
                    <a href=\"{{ path('app_bilan_edit', {'id': bilan.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}

        
        </tbody>
    </table>

    <a href=\"{{ path('app_bilan_new') }}\">Create new</a>
{{ include('@MercurySeriesFlashy/flashy.html.twig') }}

{% endblock %}
", "bilan/index2.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\bilan\\index2.html.twig");
    }
}
