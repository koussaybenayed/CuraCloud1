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

/* blog/show.html.twig */
class __TwigTemplate_c1aa98d10f92dec1d634f6950d8ea5a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "blog/show.html.twig", 1);
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
        yield "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-8\">
            <div class=\"post\">
                <div class=\"post-thumbnail\">
                    <a href=\"#\">
                        <img src=\"";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/blogs/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10))), "html", null, true);
        yield "\" alt=\"Blog Image\" class=\"img-fluid\">
                    </a>
                </div>
                <div class=\"post-header font-alt\">
                    <h1 class=\"post-title\">
                        <a href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" class=\"post-link\">
                            ";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "
                        </a>
                    </h1>
                    <div class=\"post-meta\">
                        <a href=\"#\">";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 20, $this->source); })()), "subject", [], "any", false, false, false, 20), "html", null, true);
        yield "</a>
                    </div>
                </div>

                <div class=\"post-entry\">
                    <p>";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 25, $this->source); })()), "content", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                </div>

                ";
        // line 29
        yield "                <div class=\"d-flex justify-content-end mt-2\">
                    <form id=\"likeForm\" action=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" method=\"POST\">
                        <button type=\"button\" class=\"btn btn-primary btn-round me-2\" onclick=\"toggleLike()\">Like (";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 31, $this->source); })()), "likes", [], "any", false, false, false, 31)), "html", null, true);
        yield ")</button>
                    </form>

                    <form id=\"dislikeForm\" action=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_dislike", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        yield "\" method=\"POST\">
                        <button type=\"button\" class=\"btn btn-primary btn-round\" onclick=\"toggleDislike()\">Dislike (";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 35, $this->source); })()), "dislikes", [], "any", false, false, false, 35)), "html", null, true);
        yield ")</button>
                    </form>
                </div>

                ";
        // line 40
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 40, $this->source); })()), "author", [], "any", false, false, false, 40))) {
            // line 41
            yield "                    <div class=\"d-flex justify-content-end\">
                        <a href=\"";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-primary me-2\">Edit</a>
                        <a href=\"";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-danger\">Delete</a>
                    </div>
                ";
        }
        // line 46
        yield "
                <div>
                    <h2>Comments on this Post</h2>

                    <div class=\"card bg-primary text-white mb-3\">
                        <ul class=\"list-unstyled\">
                            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 52, $this->source); })()), "comments", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["blogComment"]) {
            // line 53
            yield "                                <li class=\"card-body\">
                                    ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "user", [], "any", false, false, false, 54)) {
                // line 55
                yield "                                                                            ";
            } else {
                // line 57
                yield "                                        <div class=\"mr-3 rounded-circle placeholder\"></div>
                                    ";
            }
            // line 59
            yield "                                    <div class=\"media-body\">
                                        <div class=\"comment-content-container\">
                                            <div class=\"card-title header-elements\">
                                                <h5 class=\"m-0 me-2\">";
            // line 62
            ((CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "user", [], "any", false, false, false, 62)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "user", [], "any", false, false, false, 62), "firstName", [], "any", false, false, false, 62), "html", null, true)) : (yield "Anonymous"));
            yield " ";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "user", [], "any", false, false, false, 62)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "user", [], "any", false, false, false, 62), "lastName", [], "any", false, false, false, 62), "html", null, true)) : (yield "Anonymous"));
            yield "</h5>
                                            </div>
                                            
                                            <p class=\"card-text\">";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "content", [], "any", false, false, false, 65), "html", null, true);
            yield " - ";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "submissionDate", [], "any", false, false, false, 65)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blogComment"], "submissionDate", [], "any", false, false, false, 65), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</p>
                                        </div>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                        </ul>
                    </div>

                    ";
        // line 74
        yield "                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "comments/_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleLike() {
        document.getElementById('likeForm').submit();
    }

    function toggleDislike() {
        document.getElementById('dislikeForm').submit();
    }
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
        return "blog/show.html.twig";
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
        return array (  205 => 74,  200 => 70,  187 => 65,  179 => 62,  174 => 59,  170 => 57,  167 => 55,  165 => 54,  162 => 53,  158 => 52,  150 => 46,  144 => 43,  140 => 42,  137 => 41,  134 => 40,  127 => 35,  123 => 34,  117 => 31,  113 => 30,  110 => 29,  104 => 25,  96 => 20,  89 => 16,  85 => 15,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-sm-8\">
            <div class=\"post\">
                <div class=\"post-thumbnail\">
                    <a href=\"#\">
                        <img src=\"{{ asset('images/blogs/' ~ blog.image) }}\" alt=\"Blog Image\" class=\"img-fluid\">
                    </a>
                </div>
                <div class=\"post-header font-alt\">
                    <h1 class=\"post-title\">
                        <a href=\"{{ path('app_blog_show', {'id': blog.id}) }}\" class=\"post-link\">
                            {{ blog.title }}
                        </a>
                    </h1>
                    <div class=\"post-meta\">
                        <a href=\"#\">{{ blog.subject }}</a>
                    </div>
                </div>

                <div class=\"post-entry\">
                    <p>{{ blog.content }}</p>
                </div>

                {# Like/Dislike buttons above the comments section #}
                <div class=\"d-flex justify-content-end mt-2\">
                    <form id=\"likeForm\" action=\"{{ path('app_blog_like', {'id': blog.id}) }}\" method=\"POST\">
                        <button type=\"button\" class=\"btn btn-primary btn-round me-2\" onclick=\"toggleLike()\">Like ({{ blog.likes|length }})</button>
                    </form>

                    <form id=\"dislikeForm\" action=\"{{ path('app_blog_dislike', {'id': blog.id}) }}\" method=\"POST\">
                        <button type=\"button\" class=\"btn btn-primary btn-round\" onclick=\"toggleDislike()\">Dislike ({{ blog.dislikes|length }})</button>
                    </form>
                </div>

                {# Display edit and delete buttons for the author #}
                {% if app.user == blog.author %}
                    <div class=\"d-flex justify-content-end\">
                        <a href=\"{{ path('app_blog_edit', {'id': blog.id}) }}\" class=\"btn btn-primary me-2\">Edit</a>
                        <a href=\"{{ path('app_blog_delete', {'id': blog.id}) }}\" class=\"btn btn-danger\">Delete</a>
                    </div>
                {% endif %}

                <div>
                    <h2>Comments on this Post</h2>

                    <div class=\"card bg-primary text-white mb-3\">
                        <ul class=\"list-unstyled\">
                            {% for blogComment in blog.comments %}
                                <li class=\"card-body\">
                                    {% if blogComment.user %}
                                        {# <img class=\"mr-3 rounded-circle\" src=\"{{ path_to_your_user_profile_picture(blogComment.user.profilePicture) }}\" alt=\"User Profile Picture\"> #}
                                    {% else %}
                                        <div class=\"mr-3 rounded-circle placeholder\"></div>
                                    {% endif %}
                                    <div class=\"media-body\">
                                        <div class=\"comment-content-container\">
                                            <div class=\"card-title header-elements\">
                                                <h5 class=\"m-0 me-2\">{{ blogComment.user ? blogComment.user.firstName : 'Anonymous' }} {{ blogComment.user ? blogComment.user.lastName : 'Anonymous' }}</h5>
                                            </div>
                                            
                                            <p class=\"card-text\">{{ blogComment.content }} - {{ blogComment.submissionDate ? blogComment.submissionDate|date('Y-m-d') : '' }}</p>
                                        </div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>

                    {# New comment form #}
                    {{ include('comments/_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleLike() {
        document.getElementById('likeForm').submit();
    }

    function toggleDislike() {
        document.getElementById('dislikeForm').submit();
    }
</script>
{% endblock %}
", "blog/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\blog\\show.html.twig");
    }
}
