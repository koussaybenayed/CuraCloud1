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

/* FrontOffice/appointment/edit.html.twig */
class __TwigTemplate_a5eff1413a59089bd3ead9d260f84977 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/edit.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/appointment/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"card shadow-sm\">
                <h5 class=\"card-header\">Edit Appointment</h5>
                <div class=\"card-body\">
                    ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "FrontOffice/appointment/_form.html.twig", ["button_label" => "Update"]);
        yield "
                </div>
            </div>
            <div class=\"mt-3 d-flex justify-content-between\">
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_index");
        yield "\" class=\"btn btn-outline-secondary\">Back to list</a>
                ";
        // line 16
        yield Twig\Extension\CoreExtension::include($this->env, $context, "FrontOffice/appointment/_delete_form.html.twig", ["button_css" => "btn btn-danger"]);
        yield "
            </div>
        </div>
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
        return "FrontOffice/appointment/edit.html.twig";
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
        return array (  88 => 16,  84 => 15,  77 => 11,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}


{% block body %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            <div class=\"card shadow-sm\">
                <h5 class=\"card-header\">Edit Appointment</h5>
                <div class=\"card-body\">
                    {{ include('FrontOffice/appointment/_form.html.twig', {'button_label': 'Update'}) }}
                </div>
            </div>
            <div class=\"mt-3 d-flex justify-content-between\">
                <a href=\"{{ path('user_app_appointment_index') }}\" class=\"btn btn-outline-secondary\">Back to list</a>
                {{ include('FrontOffice/appointment/_delete_form.html.twig', {'button_css': 'btn btn-danger'}) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}

", "FrontOffice/appointment/edit.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\edit.html.twig");
    }
}
