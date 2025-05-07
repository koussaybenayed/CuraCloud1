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

/* comments/show.html.twig */
class __TwigTemplate_06aa7aaf24ab6cd7c449572681b58641 extends Template
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
        // line 33
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comments/show.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Comments";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        yield "    <h1>Comments</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 48, $this->source); })()), "content", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>";
        // line 52
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "submissionDate", [], "any", false, false, false, 52)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "submissionDate", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <h2>Comments on this Post</h2>
    <ul>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 59, $this->source); })()), "blog", [], "any", false, false, false, 59), "comments", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["blogComment"]) {
            // line 60
            yield "            <li>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "content", [], "any", false, false, false, 60), "html", null, true);
            yield " - ";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "submissionDate", [], "any", false, false, false, 60)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "submissionDate", [], "any", false, false, false, 60), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "    </ul>

    <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_index");
        yield "\">Back to Comment List</a>

    <a href=\"";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
        yield "\">Edit</a>

    ";
        // line 68
        yield Twig\Extension\CoreExtension::include($this->env, $context, "comments/_delete_form.html.twig");
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
        return "comments/show.html.twig";
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
        return array (  151 => 68,  146 => 66,  141 => 64,  137 => 62,  126 => 60,  122 => 59,  112 => 52,  105 => 48,  98 => 44,  90 => 38,  80 => 37,  60 => 35,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Comments{% endblock %}

{% block body %}
    <h1>Comments</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ comment.id }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ comment.content }}</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>{{ comment.submissionDate ? comment.submissionDate|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_comments_index') }}\">back to list</a>

    <a href=\"{{ path('app_comments_edit', {'id': comment.id}) }}\">edit</a>

    {{ include('comments/_delete_form.html.twig') }}
{% endblock %} #}


{% extends 'base.html.twig' %}

{% block title %}Comments{% endblock %}

{% block body %}
    <h1>Comments</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ comment.id }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ comment.content }}</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>{{ comment.submissionDate ? comment.submissionDate|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <h2>Comments on this Post</h2>
    <ul>
        {% for blogComment in comment.blog.comments %}
            <li>{{ blogComment.content }} - {{ blogComment.submissionDate ? blogComment.submissionDate|date('Y-m-d') : '' }}</li>
        {% endfor %}
    </ul>

    <a href=\"{{ path('app_comments_index') }}\">Back to Comment List</a>

    <a href=\"{{ path('app_comments_edit', {'id': comment.id}) }}\">Edit</a>

    {{ include('comments/_delete_form.html.twig') }}
{% endblock %}

", "comments/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\comments\\show.html.twig");
    }
}
