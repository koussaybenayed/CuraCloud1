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

/* FrontOffice/medical_record/new.html.twig */
class __TwigTemplate_2fa26337cb825dbb4a51b9a8db6388d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/medical_record/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/medical_record/new.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/medical_record/new.html.twig", 1);
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
        yield "<div class=\"container mt-4\">
    <h5>Create New Medical Record</h5>
    <div class=\"mb-3\">
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_medical_record_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
    </div>
    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form"]]);
        yield "
          
     <div class=\"mb-3\">
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "patientName", [], "any", false, false, false, 13), 'label');
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "patientName", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write the patient's name"]]);
        yield "
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "patientName", [], "any", false, false, false, 15), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "medicalHistory", [], "any", false, false, false, 19), 'label');
        yield "
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "medicalHistory", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Detailed medical history"]]);
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "medicalHistory", [], "any", false, false, false, 21), 'errors');
        yield "
    </div>
    
    <div class=\"mb-3\">
        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 25), 'label');
        yield "
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Any surgical history"]]);
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "surgicalHistory", [], "any", false, false, false, 27), 'errors');
        yield "
    </div>
    
    <div class=\"mb-3\">
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "familyHistory", [], "any", false, false, false, 31), 'label');
        yield "
        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "familyHistory", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Family medical history"]]);
        yield "
        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "familyHistory", [], "any", false, false, false, 33), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "allergies", [], "any", false, false, false, 37), 'label');
        yield "
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "allergies", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Known allergies"]]);
        yield "
        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "allergies", [], "any", false, false, false, 39), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "height", [], "any", false, false, false, 43), 'label');
        yield "
        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "height", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 175 cm"]]);
        yield "
        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "height", [], "any", false, false, false, 45), 'errors');
        yield "
    </div>

    <div class=\"mb-3\">
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "weight", [], "any", false, false, false, 49), 'label');
        yield "
        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "weight", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 70 kg"]]);
        yield "
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "weight", [], "any", false, false, false, 51), 'errors');
        yield "
    </div>

        <div class=\"mb-3\">
        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "bloodType", [], "any", false, false, false, 55), 'label');
        yield "
        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "bloodType", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., A+, O-, AB, B+"]]);
        yield "
        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "bloodType", [], "any", false, false, false, 57), 'errors');
        yield "
    </div>    
         <div class=\"mb-3\">
        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "diseases", [], "any", false, false, false, 60), 'label');
        yield "
        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "diseases", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Diabetes, Hypertension, Asthma"]]);
        yield "
        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "diseases", [], "any", false, false, false, 62), 'errors');
        yield "
    </div>     
        <div class=\"mb-3\">
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "medications", [], "any", false, false, false, 65), 'label');
        yield "
        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "medications", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Metformin, Lisinopril, Amoxicillin"]]);
        yield "
        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "medications", [], "any", false, false, false, 67), 'errors');
        yield "
    </div>    
           <div class=\"mb-3\">
        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vaccines", [], "any", false, false, false, 70), 'label');
        yield "
        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "vaccines", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Hepatitis B, MMR, COVID-19"]]);
        yield "
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vaccines", [], "any", false, false, false, 72), 'errors');
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
        return "FrontOffice/medical_record/new.html.twig";
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
        return array (  248 => 77,  240 => 72,  236 => 71,  232 => 70,  226 => 67,  222 => 66,  218 => 65,  212 => 62,  208 => 61,  204 => 60,  198 => 57,  194 => 56,  190 => 55,  183 => 51,  179 => 50,  175 => 49,  168 => 45,  164 => 44,  160 => 43,  153 => 39,  149 => 38,  145 => 37,  138 => 33,  134 => 32,  130 => 31,  123 => 27,  119 => 26,  115 => 25,  108 => 21,  104 => 20,  100 => 19,  93 => 15,  89 => 14,  85 => 13,  79 => 10,  74 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}


{% block body %}
<div class=\"container mt-4\">
    <h5>Create New Medical Record</h5>
    <div class=\"mb-3\">
        <a href=\"{{ path('user_medical_record_index') }}\" class=\"btn btn-secondary\">Back to list</a>
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
", "FrontOffice/medical_record/new.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\medical_record\\new.html.twig");
    }
}
