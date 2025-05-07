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

/* FrontOffice/appointment/new.html.twig */
class __TwigTemplate_845c5918c025f53de1286420a3ae9539 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/new.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/appointment/new.html.twig", 1);
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
        yield "    

\t<div class=\"container mt-4\">
\t\t<h5>Create New Appointment</h5>
\t\t<div class=\"mb-3\">
\t\t\t<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
\t\t</div>
\t\t";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form", "id" => "appointmentForm"]]);
        yield "

\t\t<div class=\"mb-3\">
\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'label');
        yield "
\t\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Brief description of the appointment"]]);
        yield "
\t\t\t";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'errors');
        yield "
\t\t</div>

\t\t<div class=\"mb-3\">
\t\t\t";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22), 'label');
        yield "
\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Current status of the appointment"]]);
        yield "
\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24), 'errors');
        yield "
\t\t</div>

\t\t<div class=\"mb-3\">
\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "startDate", [], "any", false, false, false, 28), 'label');
        yield "
\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "startDate", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "startDate", [], "any", false, false, false, 30), 'errors');
        yield "
\t\t</div>

\t\t<div class=\"mb-3\">
\t\t\t";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "endDate", [], "any", false, false, false, 34), 'label');
        yield "
\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "endDate", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "endDate", [], "any", false, false, false, 36), 'errors');
        yield "
\t\t</div>
\t

\t\t\t\t<div class=\"mb-3\">
\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "rating", [], "any", false, false, false, 41), 'label');
        yield "
\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "rating", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "rating", [], "any", false, false, false, 43), 'errors');
        yield "
\t\t</div>
\t\t<div id=\"formError\" style=\"color: red;\"></div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
\t</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
\$(document).ready(function() {
    \$('#appointmentForm').submit(function(e) {
        e.preventDefault(); // Prevent the normal form submission

        \$.ajax({
            url: \$(this).attr('action'), // Get the action attribute of the form
            type: 'POST',
            data: new FormData(this),
            processData: false, // Tell jQuery not to process the data
            contentType: false, // Tell jQuery not to set contentType
            success: function(data) {
                if (data.status === 'error') {
                    // Display the error message
                    displayErrorMessage(data.message);
                } else {
                    // Redirect or display success message
                    window.location.href = data.redirectUrl;
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                var errorMessage = xhr.status + ': ' + xhr.statusText;
                displayErrorMessage('Request failed - ' + errorMessage);
            }
        });
    });

    function displayErrorMessage(message) {
        \$('#formError').text(message);
    }
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
        return "FrontOffice/appointment/new.html.twig";
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
        return array (  164 => 48,  156 => 43,  152 => 42,  148 => 41,  140 => 36,  136 => 35,  132 => 34,  125 => 30,  121 => 29,  117 => 28,  110 => 24,  106 => 23,  102 => 22,  95 => 18,  91 => 17,  87 => 16,  81 => 13,  76 => 11,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}



{% block body %}
    

\t<div class=\"container mt-4\">
\t\t<h5>Create New Appointment</h5>
\t\t<div class=\"mb-3\">
\t\t\t<a href=\"{{ path('user_app_appointment_index') }}\" class=\"btn btn-secondary\">Back to list</a>
\t\t</div>
\t\t{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'form', 'id': 'appointmentForm'}}) }}

\t\t<div class=\"mb-3\">
\t\t\t{{ form_label(form.description) }}
\t\t\t{{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Brief description of the appointment'}}) }}
\t\t\t{{ form_errors(form.description) }}
\t\t</div>

\t\t<div class=\"mb-3\">
\t\t\t{{ form_label(form.status) }}
\t\t\t{{ form_widget(form.status, {'attr': {'class': 'form-control', 'placeholder': 'Current status of the appointment'}}) }}
\t\t\t{{ form_errors(form.status) }}
\t\t</div>

\t\t<div class=\"mb-3\">
\t\t\t{{ form_label(form.startDate) }}
\t\t\t{{ form_widget(form.startDate, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.startDate) }}
\t\t</div>

\t\t<div class=\"mb-3\">
\t\t\t{{ form_label(form.endDate) }}
\t\t\t{{ form_widget(form.endDate, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.endDate) }}
\t\t</div>
\t

\t\t\t\t<div class=\"mb-3\">
\t\t\t{{ form_label(form.rating) }}
\t\t\t{{ form_widget(form.rating, {'attr': {'class': 'form-control'}}) }}
\t\t\t{{ form_errors(form.rating) }}
\t\t</div>
\t\t<div id=\"formError\" style=\"color: red;\"></div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t{{ form_end(form) }}
\t</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
\$(document).ready(function() {
    \$('#appointmentForm').submit(function(e) {
        e.preventDefault(); // Prevent the normal form submission

        \$.ajax({
            url: \$(this).attr('action'), // Get the action attribute of the form
            type: 'POST',
            data: new FormData(this),
            processData: false, // Tell jQuery not to process the data
            contentType: false, // Tell jQuery not to set contentType
            success: function(data) {
                if (data.status === 'error') {
                    // Display the error message
                    displayErrorMessage(data.message);
                } else {
                    // Redirect or display success message
                    window.location.href = data.redirectUrl;
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                var errorMessage = xhr.status + ': ' + xhr.statusText;
                displayErrorMessage('Request failed - ' + errorMessage);
            }
        });
    });

    function displayErrorMessage(message) {
        \$('#formError').text(message);
    }
});
</script>

{% endblock %}
", "FrontOffice/appointment/new.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\new.html.twig");
    }
}
