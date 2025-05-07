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

/* blog/edit.html.twig */
class __TwigTemplate_b4209cd47588b503bd701d7de2496f91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/edit.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "blog/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "
<section class=\"module bg-dark-30 about-page-header\" data-background=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5), "html", null, true);
        yield "\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 11
        yield "        </div>
    </div>
</section>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-8\">
            <h4 class=\"font-alt mb-0\">Edit Blog</h4>
            <hr class=\"divider-w mt-10 mb-20\">

            ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_form.html.twig", ["button_label" => "Update"]);
        yield "
            <br></br>
            <button class=\"btn btn-primary btn-round\"><a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index");
        yield "\">Back to Blog List </a></button>
            <br></br>

            ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_delete_form.html.twig");
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
        return "blog/edit.html.twig";
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
        return array (  101 => 26,  95 => 23,  90 => 21,  78 => 11,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}

<section class=\"module bg-dark-30 about-page-header\" data-background=\"{{ blog.image }}\">
    <div class=\"container\">
        <div class=\"row\">
            {# <div class=\"col-sm-6 col-sm-offset-3\">
                <h1 class=\"module-title font-alt mb-0\">Forms</h1>
            </div> #}
        </div>
    </div>
</section>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-8\">
            <h4 class=\"font-alt mb-0\">Edit Blog</h4>
            <hr class=\"divider-w mt-10 mb-20\">

            {{ include('blog/_form.html.twig', {'button_label': 'Update'}) }}
            <br></br>
            <button class=\"btn btn-primary btn-round\"><a href=\"{{ path('app_blog_index') }}\">Back to Blog List </a></button>
            <br></br>

            {{ include('blog/_delete_form.html.twig') }}
        </div>
    </div>
</div>

{% endblock %}
", "blog/edit.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\blog\\edit.html.twig");
    }
}
