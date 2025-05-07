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

/* BackOffice/medical_record/new.html.twig */
class __TwigTemplate_0426e8ced0346df94b5548fc03ab7fc5 extends Template
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
        return "BaseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/medical_record/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/medical_record/new.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "BackOffice/medical_record/new.html.twig", 1);
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
    <h5>Create New Medical Record</h5>
    <div class=\"mb-3\">
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_medical_record_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
    </div>
    ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form"]]);
        yield "
          
     <div class=\"mb-3\">
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "patientName", [], "any", false, false, false, 14), 'label');
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "patientName", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write the patient's name"]]);
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "patientName", [], "any", false, false, false, 16), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "medicalHistory", [], "any", false, false, false, 20), 'label');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "medicalHistory", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Detailed medical history"]]);
        yield "
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "medicalHistory", [], "any", false, false, false, 22), 'errors');
        yield "
    </div>
    
    <div class=\"mb-3\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Any surgical history"]]);
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 28), 'errors');
        yield "
    </div>
    
    <div class=\"mb-3\">
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "familyHistory", [], "any", false, false, false, 32), 'label');
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "familyHistory", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Family medical history"]]);
        yield "
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "familyHistory", [], "any", false, false, false, 34), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "allergies", [], "any", false, false, false, 38), 'label');
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "allergies", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Known allergies"]]);
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "allergies", [], "any", false, false, false, 40), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "height", [], "any", false, false, false, 44), 'label');
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "height", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 175 cm"]]);
        yield "
        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "height", [], "any", false, false, false, 46), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "weight", [], "any", false, false, false, 50), 'label');
        yield "
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "weight", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 70 kg"]]);
        yield "
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "weight", [], "any", false, false, false, 52), 'errors');
        yield "
    </div>

        <div class=\"mb-3\">
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "bloodType", [], "any", false, false, false, 56), 'label');
        yield "
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "bloodType", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., A+, O-, AB, B+"]]);
        yield "
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "bloodType", [], "any", false, false, false, 58), 'errors');
        yield "
    </div>    
         <div class=\"mb-3\">
        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "diseases", [], "any", false, false, false, 61), 'label');
        yield "
        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "diseases", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Diabetes, Hypertension, Asthma"]]);
        yield "
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "diseases", [], "any", false, false, false, 63), 'errors');
        yield "
    </div>     
        <div class=\"mb-3\">
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "medications", [], "any", false, false, false, 66), 'label');
        yield "
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "medications", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Metformin, Lisinopril, Amoxicillin"]]);
        yield "
        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "medications", [], "any", false, false, false, 68), 'errors');
        yield "
    </div>    
           <div class=\"mb-3\">
        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vaccines", [], "any", false, false, false, 71), 'label');
        yield "
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vaccines", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Hepatitis B, MMR, COVID-19"]]);
        yield "
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vaccines", [], "any", false, false, false, 73), 'errors');
        yield "
    </div>   

    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    ";
        // line 77
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_end');
        yield "
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
        return "BackOffice/medical_record/new.html.twig";
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
        return array (  247 => 77,  240 => 73,  236 => 72,  232 => 71,  226 => 68,  222 => 67,  218 => 66,  212 => 63,  208 => 62,  204 => 61,  198 => 58,  194 => 57,  190 => 56,  183 => 52,  179 => 51,  175 => 50,  168 => 46,  164 => 45,  160 => 44,  153 => 40,  149 => 39,  145 => 38,  138 => 34,  134 => 33,  130 => 32,  123 => 28,  119 => 27,  115 => 26,  108 => 22,  104 => 21,  100 => 20,  93 => 16,  89 => 15,  85 => 14,  79 => 11,  74 => 9,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}



{% block body %}
<div class=\"container mt-4\">
    <h5>Create New Medical Record</h5>
    <div class=\"mb-3\">
        <a href=\"{{ path('admin_medical_record_index') }}\" class=\"btn btn-secondary\">Back to list</a>
    </div>
    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'form'}}) }}
          
     <div class=\"mb-3\">
        {{ form_label(form.patientName) }}
        {{ form_widget(form.patientName, {'attr': {'class': 'form-control', 'placeholder': \"Write the patient's name\"}}) }}
        {{ form_errors(form.patientName) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.medicalHistory) }}
        {{ form_widget(form.medicalHistory, {'attr': {'class': 'form-control', 'placeholder': 'Detailed medical history'}}) }}
        {{ form_errors(form.medicalHistory) }}
    </div>
    
    <div class=\"mb-3\">
        {{ form_label(form.surgicalHistory) }}
        {{ form_widget(form.surgicalHistory, {'attr': {'class': 'form-control', 'placeholder': 'Any surgical history'}}) }}
        {{ form_errors(form.surgicalHistory) }}
    </div>
    
    <div class=\"mb-3\">
        {{ form_label(form.familyHistory) }}
        {{ form_widget(form.familyHistory, {'attr': {'class': 'form-control', 'placeholder': 'Family medical history'}}) }}
        {{ form_errors(form.familyHistory) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.allergies) }}
        {{ form_widget(form.allergies, {'attr': {'class': 'form-control', 'placeholder': 'Known allergies'}}) }}
        {{ form_errors(form.allergies) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.height) }}
        {{ form_widget(form.height, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 175 cm'}}) }}
        {{ form_errors(form.height) }}
    </div>

    <div class=\"mb-3\">
        {{ form_label(form.weight) }}
        {{ form_widget(form.weight, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 70 kg'}}) }}
        {{ form_errors(form.weight) }}
    </div>

        <div class=\"mb-3\">
        {{ form_label(form.bloodType) }}
        {{ form_widget(form.bloodType, {'attr': {'class': 'form-control', 'placeholder': 'e.g., A+, O-, AB, B+'}}) }}
        {{ form_errors(form.bloodType) }}
    </div>    
         <div class=\"mb-3\">
        {{ form_label(form.diseases) }}
        {{ form_widget(form.diseases, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Diabetes, Hypertension, Asthma'}}) }}
        {{ form_errors(form.diseases) }}
    </div>     
        <div class=\"mb-3\">
        {{ form_label(form.medications) }}
        {{ form_widget(form.medications, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Metformin, Lisinopril, Amoxicillin'}}) }}
        {{ form_errors(form.medications) }}
    </div>    
           <div class=\"mb-3\">
        {{ form_label(form.vaccines) }}
        {{ form_widget(form.vaccines, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Hepatitis B, MMR, COVID-19'}}) }}
        {{ form_errors(form.vaccines) }}
    </div>   

    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    {{ form_end(form) }}
</div>
{% endblock %}
", "BackOffice/medical_record/new.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\BackOffice\\medical_record\\new.html.twig");
    }
}
