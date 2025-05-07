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

/* meds/index.html.twig */
class __TwigTemplate_3d840482a4688cabc8f4987703b0a437 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meds/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "meds/index.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "meds/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        yield "    <li class=\"menu-item active open\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div class=\"text-truncate\">Users</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item active\">
        <a href=\"list.html\" class=\"menu-link\" >
                    <div>List</div>
        </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        yield "<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Medications Index</h1>

   

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover shadow\">
            <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Dose</th>
                    <th scope=\"col\">Price</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["meds"]) || array_key_exists("meds", $context) ? $context["meds"] : (function () { throw new RuntimeError('Variable "meds" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["med"]) {
            // line 40
            yield "                <tr>
                    <td>";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["med"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                    <td>";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["med"], "name", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                    <td>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["med"], "dose", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                    <td>";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["med"], "price", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 46
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meds_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["med"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn rounded-pill btn-outline-info\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meds_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["med"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn rounded-pill btn-outline-primary\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center\">No medications found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['med'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "            </tbody>
        </table>
         </div>

<div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->

    <div class=\"text-center\"> <!-- Center the button -->
        <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meds_new");
        yield "\" class=\"btn rounded-pill btn-outline-success\"> Create New Medication</a>
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
        return "meds/index.html.twig";
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
        return array (  181 => 62,  172 => 55,  163 => 51,  154 => 47,  150 => 46,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  130 => 40,  125 => 39,  106 => 22,  96 => 21,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block navbar %}
    <li class=\"menu-item active open\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div class=\"text-truncate\">Users</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item active\">
        <a href=\"list.html\" class=\"menu-link\" >
                    <div>List</div>
        </a>
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Medications Index</h1>

   

    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover shadow\">
            <thead class=\"thead-light\">
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Dose</th>
                    <th scope=\"col\">Price</th>
                    <th scope=\"col\" class=\"text-center\">Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for med in meds %}
                <tr>
                    <td>{{ med.id }}</td>
                    <td>{{ med.name }}</td>
                    <td>{{ med.dose }}</td>
                    <td>{{ med.price }}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('app_meds_show', {'id': med.id}) }}\" class=\"btn rounded-pill btn-outline-info\"><i class=\"fas fa-eye\"></i></a>
                        <a href=\"{{ path('app_meds_edit', {'id': med.id}) }}\" class=\"btn rounded-pill btn-outline-primary\"><i class=\"fas fa-edit\"></i></a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">No medications found.</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
         </div>

<div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->

    <div class=\"text-center\"> <!-- Center the button -->
        <a href=\"{{ path('app_meds_new') }}\" class=\"btn rounded-pill btn-outline-success\"> Create New Medication</a>
    </div>
</div>
{% endblock %}
", "meds/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\meds\\index.html.twig");
    }
}
