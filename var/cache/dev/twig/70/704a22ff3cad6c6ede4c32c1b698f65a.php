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

/* blog/_form.html.twig */
class __TwigTemplate_f2ab4e862886d54abf9e0ad60f32cbac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

<div class=\"form-group\">
    ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), 'label');
        yield "
    ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 6
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), 'errors')) {
            // line 7
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'errors');
            yield "</div>
    ";
        }
        // line 9
        yield "</div>

<div class=\"form-group\">
    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "subject", [], "any", false, false, false, 12), 'label');
        yield "
    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "subject", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 14
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "subject", [], "any", false, false, false, 14), 'errors')) {
            // line 15
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "subject", [], "any", false, false, false, 15), 'errors');
            yield "</div>
    ";
        }
        // line 17
        yield "</div>

<div class=\"form-group\">
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "imageFile", [], "any", false, false, false, 20), 'label');
        yield " ";
        // line 21
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "imageFile", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
    ";
        // line 22
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "imageFile", [], "any", false, false, false, 22), 'errors')) {
            // line 23
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "imageFile", [], "any", false, false, false, 23), 'errors');
            yield "</div>
    ";
        }
        // line 25
        yield "</div>

<div class=\"form-group\">
    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "content", [], "any", false, false, false, 28), 'label');
        yield "
    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 100px;"]]);
        yield "
    ";
        // line 30
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), 'errors')) {
            // line 31
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31), 'errors');
            yield "</div>
    ";
        }
        // line 33
        yield "</div>
<br></br>

<button class=\"btn btn-label-primary\">";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 36, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
<br></br>

";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
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
        return "blog/_form.html.twig";
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
        return array (  140 => 39,  134 => 36,  129 => 33,  123 => 31,  121 => 30,  117 => 29,  113 => 28,  108 => 25,  102 => 23,  100 => 22,  95 => 21,  92 => 20,  87 => 17,  81 => 15,  79 => 14,  75 => 13,  71 => 12,  66 => 9,  60 => 7,  58 => 6,  54 => 5,  50 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"form-group\">
    {{ form_label(form.title) }}
    {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    {% if form_errors(form.title) %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ form_errors(form.title) }}</div>
    {% endif %}
</div>

<div class=\"form-group\">
    {{ form_label(form.subject) }}
    {{ form_widget(form.subject, {'attr': {'class': 'form-control'}}) }}
    {% if form_errors(form.subject) %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ form_errors(form.subject) }}</div>
    {% endif %}
</div>

<div class=\"form-group\">
    {{ form_label(form.imageFile) }} {# Use imageFile instead of image here #}
    {{ form_widget(form.imageFile, {'attr': {'class': 'form-control'}}) }}
    {% if form_errors(form.imageFile) %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ form_errors(form.imageFile) }}</div>
    {% endif %}
</div>

<div class=\"form-group\">
    {{ form_label(form.content) }}
    {{ form_widget(form.content, {'attr': {'class': 'form-control', 'style': 'height: 100px;'}}) }}
    {% if form_errors(form.content) %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ form_errors(form.content) }}</div>
    {% endif %}
</div>
<br></br>

<button class=\"btn btn-label-primary\">{{ button_label|default('Save') }}</button>
<br></br>

{{ form_end(form) }}
", "blog/_form.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\blog\\_form.html.twig");
    }
}
