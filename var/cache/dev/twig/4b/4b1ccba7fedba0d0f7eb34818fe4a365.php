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

/* user/_form.html.twig */
class __TwigTemplate_704464179e0bf36ea7e80f7c7771a54e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3", "novalidate" => "novalidate"]]);
        yield "
    <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserFirstName\">First Name</label>
            ";
        // line 5
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "firstName", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "John"]]);
        yield "
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\">Last Name</label>
            ";
        // line 10
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "lastName", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Doe"]]);
        yield "
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\">Email</label>
            ";
        // line 15
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe@gmail.com"]]);
        yield "
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\">Phone Number</label>
            <div class=\"input-group input-group-merge\">
                <span class=\"input-group-text\">+216</span>
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "phoneNumber", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "98 765 243", "aria-label" => "98 765 243"]]);
        yield "          
                ";
        // line 23
        yield "            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "roles", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Roles"]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "roles", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-select", "multiple" => "multiple", "aria-label" => "multiple select example"]]);
        yield "
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditTaxID\">Birth Date</label>
            ";
        // line 32
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "birthdate", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input birthdate-input", "placeholder" => "YYYY-MM-DD", "readonly" => "readonly"]]);
        yield "
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserPhone\">Address</label>
            <div class=\"input-group input-group-merge\">
              ";
        // line 38
        yield "              ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "address", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ariana,Tunis"]]);
        yield "
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Speciality</label>
            ";
        // line 54
        yield "            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "speciality", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "select2 form-select"]]);
        yield "
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Gender</label>
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "gender", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "select2 form-select"]]);
        yield "
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\">Pharmacy Work Hour</label>
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "pharmacytype", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "select2 form-select"]]);
        yield "
          </div>
           <div class=\"col-12 col-md-6\">
            <label class=\"form-label\">Public or Private</label>
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "public_or_private", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "select2 form-select"]]);
        yield "
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
          </div>
";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
          
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/_form.html.twig";
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
        return array (  145 => 72,  136 => 66,  129 => 62,  122 => 58,  114 => 54,  105 => 38,  96 => 32,  89 => 27,  85 => 26,  80 => 23,  76 => 21,  66 => 15,  58 => 10,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr': {'class': 'row g-3','novalidate':'novalidate'}}) }}
    <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserFirstName\">First Name</label>
            {# <input type=\"text\" id=\"modalEditUserFirstName\" name=\"modalEditUserFirstName\" class=\"form-control\" placeholder=\"John\" /> #}
            {{ form_widget(form.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'John'} }) }}
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\">Last Name</label>
            {# <input type=\"text\" id=\"modalEditUserLastName\" name=\"modalEditUserLastName\" class=\"form-control\" placeholder=\"Doe\" /> #}
          {{ form_widget(form.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Doe'} }) }}
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\">Email</label>
            {# <input type=\"text\" id=\"modalEditUserName\" name=\"modalEditUserName\" class=\"form-control\" placeholder=\"john.doe.007\" /> #}
          {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe@gmail.com'} }) }}
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\">Phone Number</label>
            <div class=\"input-group input-group-merge\">
                <span class=\"input-group-text\">+216</span>
                {{ form_widget(form.phoneNumber, { 'attr': {'class': 'form-control phone-mask', 'placeholder': '98 765 243', 'aria-label': '98 765 243'} }) }}          
                {# <input type=\"text\" id=\"modalEditUserPhone\" name=\"modalEditUserPhone\" class=\"form-control phone-number-mask\" placeholder=\"202 555 0111\" /> #}
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            {{ form_label(form.roles, 'Roles', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.roles, {'attr': {'class': 'form-select', 'multiple': 'multiple', 'aria-label': 'multiple select example'}}) }}
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditTaxID\">Birth Date</label>
            {# <input type=\"text\" id=\"modalEditTaxID\" name=\"modalEditTaxID\" class=\"form-control modal-edit-tax-id\" placeholder=\"123 456 7890\" /> #}
            {{ form_widget(form.birthdate, { 'attr': {'class': 'form-control dob-picker flatpickr-input birthdate-input', 'placeholder': 'YYYY-MM-DD', 'readonly': 'readonly'} }) }}
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserPhone\">Address</label>
            <div class=\"input-group input-group-merge\">
              {# <input type=\"text\" id=\"modalEditUserPhone\" name=\"modalEditUserPhone\" class=\"form-control phone-number-mask\" placeholder=\"202 555 0111\" /> #}
              {{ form_widget(form.address, { 'attr': {'class': 'form-control', 'placeholder': 'Ariana,Tunis'} }) }}
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Speciality</label>
            {# <select id=\"modalEditUserLanguage\" name=\"modalEditUserLanguage\" class=\"select2 form-select\" multiple>
              <option value=\"\">Select</option>
              <option value=\"english\" selected>English</option>
              <option value=\"spanish\">Spanish</option>
              <option value=\"french\">French</option>
              <option value=\"german\">German</option>
              <option value=\"dutch\">Dutch</option>
              <option value=\"hebrew\">Hebrew</option>
              <option value=\"sanskrit\">Sanskrit</option>
              <option value=\"hindi\">Hindi</option>
            </select> #}
            {{ form_widget(form.speciality, { 'attr': {'class': 'select2 form-select'} }) }}
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Gender</label>
            {{ form_widget(form.gender, { 'attr': {'class': 'select2 form-select'} }) }}
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\">Pharmacy Work Hour</label>
            {{ form_widget(form.pharmacytype, { 'attr': {'class': 'select2 form-select'} }) }}
          </div>
           <div class=\"col-12 col-md-6\">
            <label class=\"form-label\">Public or Private</label>
            {{ form_widget(form.public_or_private, { 'attr': {'class': 'select2 form-select'} }) }}
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
          </div>
{{ form_end(form) }}
          
", "user/_form.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\user\\_form.html.twig");
    }
}
