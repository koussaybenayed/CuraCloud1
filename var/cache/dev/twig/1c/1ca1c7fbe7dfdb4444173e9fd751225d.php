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

/* diagnostic_request/edit.html.twig */
class __TwigTemplate_07b51fc6ccc289c404a185913dd5ff96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/edit.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "diagnostic_request/edit.html.twig", 1);
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

        yield "<title>Edit DiagnosticRequest</title>";
        
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
        yield "    <h1>Edit DiagnosticRequest</h1>
    <div class=\"main\">
    <section class=\"module\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-8 col-sm-offset-2\">
             
             <br><br>
             <hr class=\"divider-w mt-10 mb-20\">
                     ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

             ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["type", "analyseType", "radioType", "doctorNotes", "status", "creationDate"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fieldName"]) {
            // line 18
            yield "              ";
            $context["currentField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), $context["fieldName"], [], "array", false, false, false, 18);
            // line 19
            yield "              <div class=\"form-group\">
                <label for=\"";
            // line 20
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "label", [], "any", false, false, false, 20), "html", null, true);
            yield "</label>
                ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 21, $this->source); })()), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["currentField"]) || array_key_exists("currentField", $context) ? $context["currentField"] : (function () { throw new RuntimeError('Variable "currentField" does not exist.', 22, $this->source); })()), 'errors');
            yield "
                
               
              </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
              <button class=\"btn btn-primary\">Update</button>
               ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        yield "

             ";
        // line 32
        yield " 
            </div>
        </div>
      </div>
    </section>
 </div>

    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_index2");
        yield "\">back to list</a>

    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "diagnostic_request/_delete_form.html.twig");
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
        return "diagnostic_request/edit.html.twig";
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
        return array (  160 => 41,  155 => 39,  146 => 32,  141 => 29,  137 => 27,  126 => 22,  122 => 21,  116 => 20,  113 => 19,  110 => 18,  106 => 17,  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block title %}<title>Edit DiagnosticRequest</title>{% endblock %}

{% block body %}
    <h1>Edit DiagnosticRequest</h1>
    <div class=\"main\">
    <section class=\"module\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-8 col-sm-offset-2\">
             
             <br><br>
             <hr class=\"divider-w mt-10 mb-20\">
                     {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

             {% for fieldName in ['type', 'analyseType', 'radioType', 'doctorNotes', 'status', 'creationDate'] %}
              {% set currentField = form[fieldName] %}
              <div class=\"form-group\">
                <label for=\"{{ currentField.vars.id }}\">{{ currentField.vars.label }}</label>
                {{ form_widget(currentField, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(currentField) }}
                
               
              </div>
               {% endfor %}

              <button class=\"btn btn-primary\">Update</button>
               {{ form_end(form) }}

             {#} {{ include('diagnostic_request/_form.html.twig', {'button_label': 'Update'}) }}{#}
 
            </div>
        </div>
      </div>
    </section>
 </div>

    <a href=\"{{ path('app_diagnostic_request_index2') }}\">back to list</a>

    {{ include('diagnostic_request/_delete_form.html.twig') }}
    

   


{#<div class=\"main\">
  <section class=\"module\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8 col-sm-offset-2\">
          <h1 style=\"color: #011663; text-align: center; font-style: italic;\">Edit DiagnosticRequest</h1>
          <br><br>
          <hr class=\"divider-w mt-10 mb-20\">
          
          {{ include('diagnostic_request/_form.html.twig', {'button_label': 'Update'}) }}

          <a href=\"{{ path('app_diagnostic_request_index2') }}\" class=\"btn btn-primary\">Submit</a>

          <a href=\"{{ path('app_diagnostic_request_index2') }}\" class=\"back-to-list-link\">
            <span style=\"font-size: 1.5em; color: #3498db;\">&#9665;</span> Back to list
          </a>

          {{ include('diagnostic_request/_delete_form.html.twig') }}
        </div>
      </div>
    </div>
  </section>
</div>
#}
{% endblock %}



", "diagnostic_request/edit.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\diagnostic_request\\edit.html.twig");
    }
}
