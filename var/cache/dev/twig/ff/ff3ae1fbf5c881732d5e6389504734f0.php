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

/* blog/back.html.twig */
class __TwigTemplate_a42107f747e522b1a411512abe89d54f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'table' => [$this, 'block_table'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "crudBlog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/back.html.twig"));

        $this->parent = $this->loadTemplate("crudBlog.html.twig", "blog/back.html.twig", 1);
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

        yield "<h5 class=\"card-title\">List Blogs!<h5>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 9
        yield "<div class=\"card\">
  <div class=\"card-header border-bottom\">


    <div class=\"d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0\">
      <div class=\"col-md-4 user_role\">
       <select id=\"UserRole\" class=\"form-select text-capitalize\"><option value=\"\"> Select Role </option><option value=\"Admin\">Admin</option><option value=\"Author\">Author</option><option value=\"Editor\">Editor</option><option value=\"Maintainer\">Maintainer</option><option value=\"Subscriber\">Subscriber</option></select>
      </div>
      <div class=\"col-md-4 user_plan\">
       <select id=\"UserPlan\" class=\"form-select text-capitalize\"><option value=\"\"> Select Speciality </option><option value=\"Basic\">Basic</option><option value=\"Company\">Company</option><option value=\"Enterprise\">Enterprise</option><option value=\"Team\">Team</option></select>
      </div>
      <div class=\"col-md-4 user_status\">
       <select id=\"FilterTransaction\" class=\"form-select text-capitalize\"><option value=\"\"> Select Status </option><option value=\"Pending\" class=\"text-capitalize\">Pending</option><option value=\"Active\" class=\"text-capitalize\">Active</option><option value=\"Inactive\" class=\"text-capitalize\">Inactive</option></select>
      </div>
    </div>
  </div>
  <div class=\"card-datatable table-responsive\">
    <div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper dt-bootstrap5 no-footer\">
        <div class=\"row mx-2\">
            <div class=\"col-md-2\">
                <div class=\"me-3\">
                    <div class=\"dataTables_length\" id=\"DataTables_Table_0_length\">
                        <label>
                            <select name=\"DataTables_Table_0_length\" aria-controls=\"DataTables_Table_0\" class=\"form-select\">
                                <option value=\"10\">10</option>
                                <option value=\"25\">25</option>
                                <option value=\"50\">50</option>
                                <option value=\"100\">100</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"col-md-10\">
                <div class=\"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0\">
                    <div id=\"DataTables_Table_0_filter\" class=\"dataTables_filter\">
                        <label>
                            <input type=\"search\" class=\"form-control\"placeholder=\"Search..\" aria-controls=\"DataTables_Table_0\">
                        </label>
                    </div>
                    <div class=\"dt-buttons\"> 
                        <button class=\"dt-button buttons-collection dropdown-toggle btn btn-label-secondary mx-3\"tabindex=\"0\" aria-controls=\"DataTables_Table_0\" type=\"button\" aria-haspopup=\"dialog\" aria-expanded=\"false\">
                            <span><i class=\"bx bx-export me-1\"></i>Export</span>
                            <span class=\"dt-down-arrow\">▼</span>
                        </button> 
                        ";
        // line 59
        yield "                    </div>
                </div>
            </div>
        </div>
        <table class=\"datatables-users table border-top\">
        <thead>
            <tr>
            <th>id</th>
            <th>Title</th>
            <th>Subject</th>
            <th>Content</th>
            <th>Image</th>
            <th>Submission Date</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 76, $this->source); })()));
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
            // line 77
            yield "            <tr>
                <td>";
            // line 78
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                <td>";
            // line 79
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "Title", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                <td>";
            // line 80
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "subject", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                <td>";
            // line 81
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                <td>";
            // line 82
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                <td>";
            // line 83
            ((CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "submissionDate", [], "any", false, false, false, 83)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "submissionDate", [], "any", false, false, false, 83), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 85
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\"class=\"btn btn-outline-info btn-sm me-1\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"";
            // line 86
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\"class=\"btn btn-outline-warning btn-sm me-1\"><i class=\"fas fa-edit\"></i></a>
                    ";
            // line 88
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_delete_form.html.twig");
            yield "
                </td>
            </tr>
        ";
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
            // line 92
            yield "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "        </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        yield "    <h1>Latest Blog Posts</h1>

    <div class=\"container\">
    <div class=\"row multi-columns-row post-columns\">

         ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["blogs"]) || array_key_exists("blogs", $context) ? $context["blogs"] : (function () { throw new RuntimeError('Variable "blogs" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            yield " 
            <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"";
            // line 108
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 108), "html", null, true);
            yield "\" alt=\"Blog Image\"></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"";
            // line 110
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_app_blog_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" class=\"post-link\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 110), "html", null, true);
            yield "</a></h2>
                    ";
            // line 112
            yield "                    <div class=\"post-meta\"><a href=\"#\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "subject", [], "any", false, false, false, 112), "html", null, true);
            yield "</a>
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>";
            // line 116
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 116), 0, 200), "html", null, true);
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "content", [], "any", false, false, false, 116)) > 200)) {
                yield "...";
            }
            yield "</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\"href=\"";
            // line 118
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["blog"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\">Read more</a></div>
                </div>
              </div>
         ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 122
            yield "            <p>No blog posts found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield " 

    </div>
    </div>

    <a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog_new");
        yield "\">Create new</a>
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
        return "blog/back.html.twig";
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
        return array (  326 => 128,  319 => 123,  312 => 122,  303 => 118,  295 => 116,  287 => 112,  281 => 110,  276 => 108,  267 => 105,  260 => 100,  250 => 99,  238 => 96,  229 => 92,  211 => 88,  207 => 86,  203 => 85,  198 => 83,  194 => 82,  190 => 81,  186 => 80,  182 => 79,  178 => 78,  175 => 77,  157 => 76,  138 => 59,  91 => 9,  81 => 8,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'crudBlog.html.twig' %} 
{# {% extends 'listBlogs.html.twig' %}  #}

{% block title %}<h5 class=\"card-title\">List Blogs!<h5>{% endblock %}



{% block table %}
<div class=\"card\">
  <div class=\"card-header border-bottom\">


    <div class=\"d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0\">
      <div class=\"col-md-4 user_role\">
       <select id=\"UserRole\" class=\"form-select text-capitalize\"><option value=\"\"> Select Role </option><option value=\"Admin\">Admin</option><option value=\"Author\">Author</option><option value=\"Editor\">Editor</option><option value=\"Maintainer\">Maintainer</option><option value=\"Subscriber\">Subscriber</option></select>
      </div>
      <div class=\"col-md-4 user_plan\">
       <select id=\"UserPlan\" class=\"form-select text-capitalize\"><option value=\"\"> Select Speciality </option><option value=\"Basic\">Basic</option><option value=\"Company\">Company</option><option value=\"Enterprise\">Enterprise</option><option value=\"Team\">Team</option></select>
      </div>
      <div class=\"col-md-4 user_status\">
       <select id=\"FilterTransaction\" class=\"form-select text-capitalize\"><option value=\"\"> Select Status </option><option value=\"Pending\" class=\"text-capitalize\">Pending</option><option value=\"Active\" class=\"text-capitalize\">Active</option><option value=\"Inactive\" class=\"text-capitalize\">Inactive</option></select>
      </div>
    </div>
  </div>
  <div class=\"card-datatable table-responsive\">
    <div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper dt-bootstrap5 no-footer\">
        <div class=\"row mx-2\">
            <div class=\"col-md-2\">
                <div class=\"me-3\">
                    <div class=\"dataTables_length\" id=\"DataTables_Table_0_length\">
                        <label>
                            <select name=\"DataTables_Table_0_length\" aria-controls=\"DataTables_Table_0\" class=\"form-select\">
                                <option value=\"10\">10</option>
                                <option value=\"25\">25</option>
                                <option value=\"50\">50</option>
                                <option value=\"100\">100</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class=\"col-md-10\">
                <div class=\"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0\">
                    <div id=\"DataTables_Table_0_filter\" class=\"dataTables_filter\">
                        <label>
                            <input type=\"search\" class=\"form-control\"placeholder=\"Search..\" aria-controls=\"DataTables_Table_0\">
                        </label>
                    </div>
                    <div class=\"dt-buttons\"> 
                        <button class=\"dt-button buttons-collection dropdown-toggle btn btn-label-secondary mx-3\"tabindex=\"0\" aria-controls=\"DataTables_Table_0\" type=\"button\" aria-haspopup=\"dialog\" aria-expanded=\"false\">
                            <span><i class=\"bx bx-export me-1\"></i>Export</span>
                            <span class=\"dt-down-arrow\">▼</span>
                        </button> 
                        {# <button class=\"dt-button add-new btn btn-primary\" tabindex=\"0\" aria-controls=\"DataTables_Table_0\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasAddUser\">
                            <span><i class=\"bx bx-plus me-0 me-sm-1\"></i>
                                <span class=\"d-none d-sm-inline-block\">Add New User</span>
                            </span>
                        </button>  #}
                    </div>
                </div>
            </div>
        </div>
        <table class=\"datatables-users table border-top\">
        <thead>
            <tr>
            <th>id</th>
            <th>Title</th>
            <th>Subject</th>
            <th>Content</th>
            <th>Image</th>
            <th>Submission Date</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for blog in blogs %}
            <tr>
                <td>{{ blog.id }}</td>
                <td>{{ blog.Title }}</td>
                <td>{{ blog.subject }}</td>
                <td>{{ blog.content }}</td>
                <td>{{ blog.image }}</td>
                <td>{{ blog.submissionDate ? blog.submissionDate|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_blog_show', {'id': blog.id}) }}\"class=\"btn btn-outline-info btn-sm me-1\"><i class=\"fas fa-eye\"></i></a>
                    <a href=\"{{ path('app_blog_edit', {'id': blog.id}) }}\"class=\"btn btn-outline-warning btn-sm me-1\"><i class=\"fas fa-edit\"></i></a>
                    {# <a href=\"{{ include('blog/_delete_form.html.twig') }}\"class=\"btn btn-outline-warning btn-sm me-1\"><i class=\"fas fa-edit\"></i></a> #}
                    {{ include('blog/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
{% endblock %}
        
{% block body %}
    <h1>Latest Blog Posts</h1>

    <div class=\"container\">
    <div class=\"row multi-columns-row post-columns\">

         {% for blog in blogs %} 
            <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"{{ blog.image }}\" alt=\"Blog Image\"></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"{{ path('back_app_blog_index', {'id': blog.id}) }}\" class=\"post-link\">{{ blog.title }}</a></h2>
                    {# <div class=\"post-meta\">By&nbsp;<a href=\"#\">Andy River</a>&nbsp;| 11 November | 4 Comments #}
                    <div class=\"post-meta\"><a href=\"#\">{{ blog.subject }}</a>
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>{{ blog.content|slice(0, 200) }}{% if blog.content|length > 200 %}...{% endif %}</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\"href=\"{{ path('app_blog_show', {'id': blog.id}) }}\">Read more</a></div>
                </div>
              </div>
         {% else %}
            <p>No blog posts found</p>
        {% endfor %} 

    </div>
    </div>

    <a href=\"{{ path('app_blog_new') }}\">Create new</a>
{% endblock %}

", "blog/back.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\blog\\back.html.twig");
    }
}
