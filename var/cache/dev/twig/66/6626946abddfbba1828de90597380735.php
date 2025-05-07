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

/* FrontOffice/medical_record/edit.html.twig */
class __TwigTemplate_94e910e7884e4c79ba397cf45c44ccd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/medical_record/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/medical_record/edit.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/medical_record/edit.html.twig", 1);
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
    <h1 class=\"mb-4 text-center\">Edit Medical Record</h1>

    <!-- Removed the outer div here and directly start with the card -->
    

   
    <div class=\"row justify-content-center\">
        <div class=\"col-auto\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_medical_record_index");
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-arrow-left\"></i> Back to list</a>
        </div>
        <div class=\"col-auto\">
            ";
        // line 18
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "FrontOffice/medical_record/_delete_form.html.twig");
        yield "
        </div>
                <div class=\"card-body\">
            ";
        // line 22
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "FrontOffice/medical_record/_form.html.twig", ["button_label" => "Update"]);
        yield "
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
        return "FrontOffice/medical_record/edit.html.twig";
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
        return array (  93 => 22,  86 => 18,  80 => 14,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}


{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Edit Medical Record</h1>

    <!-- Removed the outer div here and directly start with the card -->
    

   
    <div class=\"row justify-content-center\">
        <div class=\"col-auto\">
            <a href=\"{{ path('user_medical_record_index') }}\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-arrow-left\"></i> Back to list</a>
        </div>
        <div class=\"col-auto\">
            {# Including the delete form #}
            {{ include('FrontOffice/medical_record/_delete_form.html.twig') }}
        </div>
                <div class=\"card-body\">
            {# Including the form with the specified button label #}
            {{ include('FrontOffice/medical_record/_form.html.twig', {'button_label': 'Update'}) }}
        </div>
    </div>
</div>
{% endblock %}
", "FrontOffice/medical_record/edit.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\medical_record\\edit.html.twig");
    }
}
