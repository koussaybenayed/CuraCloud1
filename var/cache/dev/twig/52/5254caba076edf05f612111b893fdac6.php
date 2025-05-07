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

/* diagnostic_request/new.html.twig */
class __TwigTemplate_6db02c7dd14d2aa6bfb2d90fe8d1815a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/new.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "diagnostic_request/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield " <title>
New DiagnosticRequest</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        yield "
  <div class=\"main\">
    <section class=\"module\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-8 col-sm-offset-2\">
             <h1 style=\"color: #011663; text-align: center; font-style: italic;\">Add new diagnostic</h1>
             <br><br>
            <hr class=\"divider-w mt-10 mb-20\">
            
         ";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["type", "analyseType", "radioType", "doctorNotes", "status", "creationDate", "id_patient"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fieldName"]) {
            // line 34
            yield "              ";
            $context["currentField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), $context["fieldName"], [], "array", false, false, false, 34);
            // line 35
            yield "              <div class=\"form-group\">
                <label for=\"";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "label", [], "any", false, false, false, 36), "html", null, true);
            yield "</label>
                ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 37, $this->source); })()), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 38, $this->source); })()), 'errors');
            yield "
      
               
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
            ";
        // line 45
        yield "            ";
        // line 46
        yield "            ";
        // line 48
        yield "            <button class=\"btn btn-primary\">Submit</button>

            ";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        yield "
          </div>
        </div>
      </div>
    </section>
    

  </div>
  <script>
    // Get the radio buttons and the content container
    const radioButtons = document.querySelectorAll('input[name=\"radioType\"]');
    const contentContainer = document.getElementById('contentContainer');

    // Add click event listeners to the radio buttons
    radioButtons.forEach(radioButton => {
        radioButton.addEventListener('click', () => {
            // Update the content container with the selected radio button's value
            contentContainer.textContent = `Selected option: \${radioButton.value}`;
        });
    });
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
        return "diagnostic_request/new.html.twig";
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
        return array (  151 => 50,  147 => 48,  145 => 46,  143 => 45,  140 => 43,  129 => 38,  125 => 37,  119 => 36,  116 => 35,  113 => 34,  109 => 33,  104 => 31,  92 => 21,  82 => 20,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}


{% block title %} <title>
New DiagnosticRequest</title>
{% endblock %}


{#{% block body %}

    <h1>Create new DiagnosticRequest</h1>

    {{ include('diagnostic_request/_form.html.twig') }}

    <a href=\"{{ path('app_diagnostic_request_index') }}\">back to list</a> 
{% endblock %}#}



{% block body %}

  <div class=\"main\">
    <section class=\"module\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-8 col-sm-offset-2\">
             <h1 style=\"color: #011663; text-align: center; font-style: italic;\">Add new diagnostic</h1>
             <br><br>
            <hr class=\"divider-w mt-10 mb-20\">
            
         {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% for fieldName in ['type', 'analyseType', 'radioType', 'doctorNotes', 'status', 'creationDate','id_patient'] %}
              {% set currentField = form[fieldName] %}
              <div class=\"form-group\">
                <label for=\"{{ currentField.vars.id }}\">{{ currentField.vars.label }}</label>
                {{ form_widget(currentField, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(currentField) }}
      
               
              </div>
            {% endfor %}

            {##########################################################################}
            {# andi mochkla houni ki nheb j'affiche fi index2 il ne s'ajoute pas #}
            {#<a href=\"{{ path('app_diagnostic_request_index2') }}\" class=\"btn btn-primary\">Submit</a>
             #}
            <button class=\"btn btn-primary\">Submit</button>

            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </section>
    

  </div>
  <script>
    // Get the radio buttons and the content container
    const radioButtons = document.querySelectorAll('input[name=\"radioType\"]');
    const contentContainer = document.getElementById('contentContainer');

    // Add click event listeners to the radio buttons
    radioButtons.forEach(radioButton => {
        radioButton.addEventListener('click', () => {
            // Update the content container with the selected radio button's value
            contentContainer.textContent = `Selected option: \${radioButton.value}`;
        });
    });
</script>
{% endblock %}
", "diagnostic_request/new.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\diagnostic_request\\new.html.twig");
    }
}
