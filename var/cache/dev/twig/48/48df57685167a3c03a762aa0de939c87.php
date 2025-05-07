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

/* bilan/new.html.twig */
class __TwigTemplate_54dcf8842784bdd97c02a5e3e9574296 extends Template
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
        // line 13
        return "BaseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bilan/new.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "bilan/new.html.twig", 13);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "<title>New Bilan</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        yield "
<div class=\"row my-4\">
  <div class=\"col\">
    <h6>  Add Diagnostic Result </h6>
    <div class=\"accordion\" id=\"collapsibleSection\">
      <div class=\"card accordion-item\">
        <h2 class=\"accordion-header\" id=\"headingDeliveryAddress\">
          <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseDeliveryAddress\" aria-expanded=\"true\" aria-controls=\"collapseDeliveryAddress\"> Diagnostic Result  </button>
        </h2>
            ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        <div id=\"collapseDeliveryAddress\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#collapsibleSection\">
          <div class=\"accordion-body\">
            <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-fullname\">Full Name</label>
                <input type=\"text\" id=\"collapsible-fullname\" class=\"form-control\" placeholder=\"John Doe\" />
              </div>
              <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-phone\">Phone No</label>
                <input type=\"text\" id=\"collapsible-phone\" class=\"form-control phone-mask\" placeholder=\"658 799 8941\" aria-label=\"658 799 8941\" />
              </div>
           <label class=\"form-check-label\">Realisation Date</label>
              <div class=\"col mt-2\">
                  ";
        // line 41
        yield "                  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "realisationDate", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => " form-control dob-picker flatpickr-input active"]]);
        yield "
                       ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "realisationDate", [], "any", false, false, false, 42), 'errors');
        yield "
                  ";
        // line 44
        yield "              </div>
               <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-state\">Submission Date</label>
               ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "submissionDate", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input active"]]);
        yield "
                     ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "submissionDate", [], "any", false, false, false, 48), 'errors');
        yield "
              </div>
                 <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-state\">Result </label>
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "result", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                     ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "result", [], "any", false, false, false, 53), 'errors');
        yield "
              </div>

              <div class=\"row g-3\">
               <div class=\"col-12\">
                <label class=\"form-label\" for=\"collapsible-address\">Lab Comments </label>
               ";
        // line 60
        yield "                 ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "labComment", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                      ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "labComment", [], "any", false, false, false, 61), 'errors');
        yield "
              </div>
               <div class=\"col-md-6\">
                <label class=\"form-label\" for=\"collapsible-state\">Price</label>
                    ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                      ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "price", [], "any", false, false, false, 66), 'errors');
        yield "
                 </div>
                 <br>

                 <div class=\"col-md-6\">
                <label class=\"form-label\" for=\"collapsible-state\">Upload image</label>
                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "imageFile", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                      ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "imageFile", [], "any", false, false, false, 73), 'errors');
        yield "
                 </div>

                <div class=\"mt-1\">
                <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                ";
        // line 79
        yield "                <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
              </div>
            </div>
          </div>
              ";
        // line 83
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        yield "  
                

        </div>
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
        return "bilan/new.html.twig";
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
        return array (  198 => 83,  192 => 79,  184 => 73,  180 => 72,  171 => 66,  167 => 65,  160 => 61,  155 => 60,  146 => 53,  142 => 52,  135 => 48,  131 => 47,  126 => 44,  122 => 42,  117 => 41,  101 => 27,  90 => 18,  80 => 17,  60 => 15,  37 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'BaseBack.html.twig' %}

{% block title %}New Bilan{% endblock %}

{% block body %}
    <h1>Create new Bilan</h1>

    {{ include('bilan/_form.html.twig') }}

    <a href=\"{{ path('app_bilan_index') }}\">back to list</a>
{% endblock %}#}

{% extends 'BaseBack.html.twig' %}

{% block title %}<title>New Bilan</title>{% endblock %}

{% block body %}

<div class=\"row my-4\">
  <div class=\"col\">
    <h6>  Add Diagnostic Result </h6>
    <div class=\"accordion\" id=\"collapsibleSection\">
      <div class=\"card accordion-item\">
        <h2 class=\"accordion-header\" id=\"headingDeliveryAddress\">
          <button type=\"button\" class=\"accordion-button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseDeliveryAddress\" aria-expanded=\"true\" aria-controls=\"collapseDeliveryAddress\"> Diagnostic Result  </button>
        </h2>
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        <div id=\"collapseDeliveryAddress\" class=\"accordion-collapse collapse show\" data-bs-parent=\"#collapsibleSection\">
          <div class=\"accordion-body\">
            <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-fullname\">Full Name</label>
                <input type=\"text\" id=\"collapsible-fullname\" class=\"form-control\" placeholder=\"John Doe\" />
              </div>
              <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-phone\">Phone No</label>
                <input type=\"text\" id=\"collapsible-phone\" class=\"form-control phone-mask\" placeholder=\"658 799 8941\" aria-label=\"658 799 8941\" />
              </div>
           <label class=\"form-check-label\">Realisation Date</label>
              <div class=\"col mt-2\">
                  {#<input name=\"collapsible-address-type\" class=\"form-check-input\" type=\"radio\" value=\"\" id=\"collapsible-address-type-home\" checked=\"\" />#}
                  {{ form_widget(form.realisationDate  ,{'attr':{'class':' form-control dob-picker flatpickr-input active'}}) }}
                       {{ form_errors(form.realisationDate) }}
                  {#<label class=\"form-check-label\" for=\"collapsible-address-type-home\">Analyse (All day delivery)</label>#}
              </div>
               <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-state\">Submission Date</label>
               {{form_widget(form.submissionDate,{'attr':{'class':'form-control dob-picker flatpickr-input active'}})}}
                     {{ form_errors(form.submissionDate) }}
              </div>
                 <div class=\"col mt-2\">
                <label class=\"form-label\" for=\"collapsible-state\">Result </label>
                {{form_widget(form.result,{'attr':{'class':'form-control'}})}}
                     {{ form_errors(form.result) }}
              </div>

              <div class=\"row g-3\">
               <div class=\"col-12\">
                <label class=\"form-label\" for=\"collapsible-address\">Lab Comments </label>
               {# <textarea name=\"collapsible-address\" class=\"form-control\" id=\"collapsible-address\" rows=\"2\" placeholder=\"Anything to add\"></textarea>#}
                 {{form_widget(form.labComment,{'attr':{'class':'form-control'}})}}
                      {{ form_errors(form.labComment) }}
              </div>
               <div class=\"col-md-6\">
                <label class=\"form-label\" for=\"collapsible-state\">Price</label>
                    {{form_widget(form.price,{'attr':{'class':'form-control'}})}}
                      {{ form_errors(form.price) }}
                 </div>
                 <br>

                 <div class=\"col-md-6\">
                <label class=\"form-label\" for=\"collapsible-state\">Upload image</label>
                    {{form_widget(form.imageFile,{'attr':{'class':'form-control'}})}}
                      {{ form_errors(form.imageFile) }}
                 </div>

                <div class=\"mt-1\">
                <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                {#<a href=\"{{ path('app_bilan_index2') }}\">Submit</a>#}
                <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
              </div>
            </div>
          </div>
              {{ form_end(form) }}  
                

        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}

", "bilan/new.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\bilan\\new.html.twig");
    }
}
