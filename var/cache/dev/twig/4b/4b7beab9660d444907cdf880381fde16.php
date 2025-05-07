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

/* blog/index.html.twig */
class __TwigTemplate_03d1fea6828c86fcc7054e4521be0968 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "blog/index.html.twig", 1);
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
        yield "    <div class=\"container\">
        <script src=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("path/js/search.js"), "html", null, true);
        yield "\"></script>
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h2 class=\"card-header mb-4\">Latest Blog Posts</h2>
            </div>
            <div class=\"col-md-3 text-end\">
                ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCTOR")) {
            // line 12
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_new");
            yield "\" class=\"btn btn-label-success\">Create New Post</a>
                ";
        }
        // line 14
        yield "            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 19
            yield "                <div class=\"col-md-4 mb-3\">
                    <div class=\"card h-100\">
                        <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/blogs/" . CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 21))), "html", null, true);
            yield "\" alt=\"Blog Image\" style=\"max-width: 100%; height: 600px;\"></a></div>
                        <div class=\"card-body\">
                            <h2 class=\"card-title\"><a href=\"";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" class=\"card-link\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 23), "html", null, true);
            yield "</a></h2>
                            <div class=\"card-text\">";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, (Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 24), 0, 200) . (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 24)) > 200)) ? ("...") : (""))), "html", null, true);
            yield "</div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"post-submission\">
                                ";
            // line 28
            ((CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "submissionDate", [], "any", false, false, false, 28)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "submissionDate", [], "any", false, false, false, 28), "Y-m-d H:i"), "html", null, true)) : (yield ""));
            yield "
                            </div>
                            <div class=\"post-more\"><a class=\"btn btn-primary\" href=\"";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\">Read more</a></div>
                        </div>
                    </div>
                </div>
                ";
            // line 34
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34) % 3) == 0)) {
                // line 35
                yield "                    </div><div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
                ";
            }
            // line 37
            yield "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 38
            yield "                ";
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 38, $this->source); })())) == 0)) {
                // line 39
                yield "                    <p class=\"col-md-12\">No blog posts found</p>
                ";
            }
            // line 41
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </div>

        ";
        // line 44
        if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 44, $this->source); })()) > 1)) {
            // line 45
            yield "            <nav aria-label=\"Blog pagination\">
                <ul class=\"pagination justify-content-center\">
                    ";
            // line 47
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 47, $this->source); })()) > 1)) {
                // line 48
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })()) - 1)]), "html", null, true);
                yield "\">Previous</a></li>
                    ";
            }
            // line 50
            yield "
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 51, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 52
                yield "                        <li class=\"page-item";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()))) {
                    yield " active";
                }
                yield "\"><a class=\"page-link\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index", ["page" => $context["p"]]), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["p"], "html", null, true);
                yield "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "
                    ";
            // line 55
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 55, $this->source); })()))) {
                // line 56
                yield "                        <li class=\"page-item\"><a class=\"page-link\" href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_index", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) + 1)]), "html", null, true);
                yield "\">Next</a></li>
                    ";
            }
            // line 58
            yield "                </ul>
            </nav>
        ";
        }
        // line 61
        yield "    </div>
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
        return "blog/index.html.twig";
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
        return array (  235 => 61,  230 => 58,  224 => 56,  222 => 55,  219 => 54,  204 => 52,  200 => 51,  197 => 50,  191 => 48,  189 => 47,  185 => 45,  183 => 44,  179 => 42,  173 => 41,  169 => 39,  166 => 38,  153 => 37,  149 => 35,  147 => 34,  140 => 30,  135 => 28,  128 => 24,  122 => 23,  117 => 21,  113 => 19,  95 => 18,  89 => 14,  83 => 12,  81 => 11,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}
    <div class=\"container\">
        <script src=\"{{ asset('path/js/search.js') }}\"></script>
        <div class=\"row\">
            <div class=\"col-md-9\">
                <h2 class=\"card-header mb-4\">Latest Blog Posts</h2>
            </div>
            <div class=\"col-md-3 text-end\">
                {% if is_granted('ROLE_DOCTOR') %}
                    <a href=\"{{ path('app_blog_new') }}\" class=\"btn btn-label-success\">Create New Post</a>
                {% endif %}
            </div>
        </div>

        <div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
            {% for blog in blogs %}
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card h-100\">
                        <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"{{ asset('images/blogs/' ~ blog.image) }}\" alt=\"Blog Image\" style=\"max-width: 100%; height: 600px;\"></a></div>
                        <div class=\"card-body\">
                            <h2 class=\"card-title\"><a href=\"{{ path('app_blog_show', {'id': blog.id}) }}\" class=\"card-link\">{{ blog.title }}</a></h2>
                            <div class=\"card-text\">{{ blog.content|slice(0, 200) ~ (blog.content|length > 200 ? '...' : '') }}</div>
                        </div>
                        <div class=\"card-footer\">
                            <div class=\"post-submission\">
                                {{ blog.submissionDate ? blog.submissionDate|date('Y-m-d H:i') : '' }}
                            </div>
                            <div class=\"post-more\"><a class=\"btn btn-primary\" href=\"{{ path('app_blog_show', {'id': blog.id}) }}\">Read more</a></div>
                        </div>
                    </div>
                </div>
                {% if loop.index % 3 == 0 %}
                    </div><div class=\"row row-cols-1 row-cols-md-3 g-4 mb-5\">
                {% endif %}
            {% else %}
                {% if blogs|length == 0 %}
                    <p class=\"col-md-12\">No blog posts found</p>
                {% endif %}
            {% endfor %}
        </div>

        {% if totalPages > 1 %}
            <nav aria-label=\"Blog pagination\">
                <ul class=\"pagination justify-content-center\">
                    {% if page > 1 %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_blog_index', {'page': page - 1}) }}\">Previous</a></li>
                    {% endif %}

                    {% for p in 1..totalPages %}
                        <li class=\"page-item{% if p == page %} active{% endif %}\"><a class=\"page-link\" href=\"{{ path('app_blog_index', {'page': p}) }}\">{{ p }}</a></li>
                    {% endfor %}

                    {% if page < totalPages %}
                        <li class=\"page-item\"><a class=\"page-link\" href=\"{{ path('app_blog_index', {'page': page + 1}) }}\">Next</a></li>
                    {% endif %}
                </ul>
            </nav>
        {% endif %}
    </div>
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\blog\\index.html.twig");
    }
}
