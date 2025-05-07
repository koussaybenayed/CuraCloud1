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

/* FrontOffice/medical_record/show.html.twig */
class __TwigTemplate_63db5ad882ad5d834ea49791f80b580e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/medical_record/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/medical_record/show.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/medical_record/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield "<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Medical Record Details</h1>

 
 
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Record n°";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">Patient Name</th>
                            <td>";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 19, $this->source); })()), "patientName", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                        </tr>                      
                        <tr>
                            <th scope=\"row\">Medical History</th>
                            <td>";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 23, $this->source); })()), "medicalHistory", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Surgical History</th>
                            <td>";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 27, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Family History</th>
                            <td>";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 31, $this->source); })()), "familyHistory", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Allergies</th>
                            <td>";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 35, $this->source); })()), "allergies", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Height</th>
                            <td>";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 39, $this->source); })()), "height", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Weight</th>
                            <td>";
        // line 43
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 43, $this->source); })()), "weight", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Blood Type</th>
                            <td>";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 47, $this->source); })()), "bloodType", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Diseases</th>
                            <td>";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 51, $this->source); })()), "diseases", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Medications</th>
                            <td>";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 55, $this->source); })()), "medications", [], "any", false, false, false, 55), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Vaccines</th>
                            <td>";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 59, $this->source); })()), "vaccines", [], "any", false, false, false, 59), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"card-footer d-flex justify-content-between\">
            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_medical_record_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
            <div>
                <a href=\"";
        // line 68
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_medical_record_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["medical_record"]) || array_key_exists("medical_record", $context) ? $context["medical_record"] : (function () { throw new RuntimeError('Variable "medical_record" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Edit</a>
                ";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "FrontOffice/medical_record/_delete_form.html.twig");
        yield "
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
        return "FrontOffice/medical_record/show.html.twig";
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
        return array (  176 => 69,  172 => 68,  167 => 66,  157 => 59,  150 => 55,  143 => 51,  136 => 47,  129 => 43,  122 => 39,  115 => 35,  108 => 31,  101 => 27,  94 => 23,  87 => 19,  78 => 13,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}



{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"mb-4\">Medical Record Details</h1>

 
 
        </div>
        <div class=\"card-body\">
            <h5 class=\"card-title\">Record n°{{ medical_record.id }}</h5>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th scope=\"row\">Patient Name</th>
                            <td>{{ medical_record.patientName }}</td>
                        </tr>                      
                        <tr>
                            <th scope=\"row\">Medical History</th>
                            <td>{{ medical_record.medicalHistory }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Surgical History</th>
                            <td>{{ medical_record.surgicalHistory }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Family History</th>
                            <td>{{ medical_record.familyHistory }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Allergies</th>
                            <td>{{ medical_record.allergies }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Height</th>
                            <td>{{ medical_record.height }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Weight</th>
                            <td>{{ medical_record.weight }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Blood Type</th>
                            <td>{{ medical_record.bloodType }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Diseases</th>
                            <td>{{ medical_record.diseases }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Medications</th>
                            <td>{{ medical_record.medications }}</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">Vaccines</th>
                            <td>{{ medical_record.vaccines }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"card-footer d-flex justify-content-between\">
            <a href=\"{{ path('user_medical_record_index') }}\" class=\"btn btn-secondary\">Back to List</a>
            <div>
                <a href=\"{{ path('user_medical_record_edit', {'id': medical_record.id}) }}\" class=\"btn btn-primary\">Edit</a>
                {{ include('FrontOffice/medical_record/_delete_form.html.twig') }}
            </div>
        
  
</div>
{% endblock %}
", "FrontOffice/medical_record/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\medical_record\\show.html.twig");
    }
}
