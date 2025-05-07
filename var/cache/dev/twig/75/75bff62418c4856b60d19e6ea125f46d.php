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

/* diagnostic_request/index.html.twig */
class __TwigTemplate_b71942a3f989afb3fdba087c4d80ed29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/index.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "diagnostic_request/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "<br>
<br>
<br>
<br>
<br>
<br>  

<div class=\"card-datatable table-responsive\"style=\"padding: 0 40px;\">
    <div id=\"DataTables_Table_2_wrapper\" class=\"dataTables_wrapper dt-bootstrap5\"><div class=\"row\">
      <div class=\"col-sm-12 col-md-6\">
      <h4>Diagnostic Request</h4>
        <div class=\"dataTables_length\" id=\"DataTables_Table_2_length\"><label>Show <select name=\"DataTables_Table_2_length\" aria-controls=\"DataTables_Table_2\" class=\"form-select\"><option value=\"7\">7</option><option value=\"10\">10</option><option value=\"25\">25</option><option value=\"50\">50</option><option value=\"75\">75</option><option value=\"100\">100</option></select> entries</label></div></div><div class=\"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end\"><div id=\"DataTables_Table_2_filter\" class=\"dataTables_filter\"><label>Search:<input type=\"search\" class=\"form-control\" placeholder=\"\" aria-controls=\"DataTables_Table_2\"></label></div></div></div>
        <table class=\"dt-row-grouping table border-top dataTable dtr-column\" id=\"DataTables_Table_2\" aria-describedby=\"DataTables_Table_2_info\" style=\"width: 1131px;\">
        <tbody>
          <thead>
                 <tr>
                      <th class=\"control sorting_disabled dtr-hidden\" rowspan=\"1\" colspan=\"1\" style=\"width: 33px; display: none;\" aria-label=\"\"></th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 98px;\" aria-label=\"Name: activate to sort column ascending\">Patient Name</th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 102px;\" aria-label=\"Email: activate to sort column ascending\">Phone number</th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 102px;\" aria-label=\"Email: activate to sort column ascending\">Doctor Name</th>
                       <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 121px;\" aria-label=\"Salary: activate to sort column ascending\">Analyse Type</th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 121px;\" aria-label=\"Salary: activate to sort column ascending\">RadioType Type</th>
                       <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 84px;\" aria-label=\"City: activate to sort column ascending\">Doctor Notes</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 118px;\" aria-label=\"Status: activate to sort column ascending\">Status</th>
                       <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 89px;\" aria-label=\"Date: activate to sort column ascending\">Date</th>
                     ";
        // line 32
        yield "                      <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 126px;\" aria-label=\"Actions\"> Result</th>
                  </tr>
                   ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["diagnostic_requests"]) || array_key_exists("diagnostic_requests", $context) ? $context["diagnostic_requests"] : (function () { throw new RuntimeError('Variable "diagnostic_requests" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["diagnostic_request"]) {
            // line 35
            yield "                    <tr>
                    <td ></td>
                     <td ></td>
                     <td></td>
                       ";
            // line 40
            yield "                        <td>
                            <h6 class=\"product-title font-alt\">";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "analyseType", [], "any", false, false, false, 41), "html", null, true);
            yield "</h6>
                        </td>
                         <td>
                            <h6 class=\"product-title font-alt\">";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "radioType", [], "any", false, false, false, 44), "html", null, true);
            yield "</h6>
                        </td> 
                         <td>
                            <h6 class=\"product-title font-alt\">";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "doctorNotes", [], "any", false, false, false, 47), "html", null, true);
            yield "</h6>
                        </td>
                         <td>
                            <h6 class=\"product-title font-alt\">";
            // line 50
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "status", [], "any", false, false, false, 50), "html", null, true);
            yield "</h6>
                        </td>
                        <td class=\"hidden-xs\">
                            <h6 class=\"product-title font-alt\">";
            // line 53
            ((CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "creationDate", [], "any", false, false, false, 53)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "creationDate", [], "any", false, false, false, 53), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</h6>
                        </td>
                        <td></td>
                       
                        ";
            // line 60
            yield "                       ";
            // line 70
            yield "                       ";
            // line 74
            yield "                       
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            yield "                    <tr>
                        <td colspan=\"9\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diagnostic_request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "      </thead>
      </tbody>
    </table>
     ";
        // line 85
        yield "<br>
<br>

            ";
        // line 92
        yield "            
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
        return "diagnostic_request/index.html.twig";
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
        return array (  175 => 92,  170 => 85,  165 => 81,  156 => 77,  149 => 74,  147 => 70,  145 => 60,  138 => 53,  132 => 50,  126 => 47,  120 => 44,  114 => 41,  111 => 40,  105 => 35,  100 => 34,  96 => 32,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}


{% block body %}
<br>
<br>
<br>
<br>
<br>
<br>  

<div class=\"card-datatable table-responsive\"style=\"padding: 0 40px;\">
    <div id=\"DataTables_Table_2_wrapper\" class=\"dataTables_wrapper dt-bootstrap5\"><div class=\"row\">
      <div class=\"col-sm-12 col-md-6\">
      <h4>Diagnostic Request</h4>
        <div class=\"dataTables_length\" id=\"DataTables_Table_2_length\"><label>Show <select name=\"DataTables_Table_2_length\" aria-controls=\"DataTables_Table_2\" class=\"form-select\"><option value=\"7\">7</option><option value=\"10\">10</option><option value=\"25\">25</option><option value=\"50\">50</option><option value=\"75\">75</option><option value=\"100\">100</option></select> entries</label></div></div><div class=\"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end\"><div id=\"DataTables_Table_2_filter\" class=\"dataTables_filter\"><label>Search:<input type=\"search\" class=\"form-control\" placeholder=\"\" aria-controls=\"DataTables_Table_2\"></label></div></div></div>
        <table class=\"dt-row-grouping table border-top dataTable dtr-column\" id=\"DataTables_Table_2\" aria-describedby=\"DataTables_Table_2_info\" style=\"width: 1131px;\">
        <tbody>
          <thead>
                 <tr>
                      <th class=\"control sorting_disabled dtr-hidden\" rowspan=\"1\" colspan=\"1\" style=\"width: 33px; display: none;\" aria-label=\"\"></th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 98px;\" aria-label=\"Name: activate to sort column ascending\">Patient Name</th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 102px;\" aria-label=\"Email: activate to sort column ascending\">Phone number</th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 102px;\" aria-label=\"Email: activate to sort column ascending\">Doctor Name</th>
                       <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 121px;\" aria-label=\"Salary: activate to sort column ascending\">Analyse Type</th>
                      <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 121px;\" aria-label=\"Salary: activate to sort column ascending\">RadioType Type</th>
                       <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 84px;\" aria-label=\"City: activate to sort column ascending\">Doctor Notes</th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 118px;\" aria-label=\"Status: activate to sort column ascending\">Status</th>
                       <th class=\"sorting\" tabindex=\"0\" aria-controls=\"DataTables_Table_2\" rowspan=\"1\" colspan=\"1\" style=\"width: 89px;\" aria-label=\"Date: activate to sort column ascending\">Date</th>
                     {#  <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 126px;\" aria-label=\"Actions\">Actions</th>
                      <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 126px;\" aria-label=\"Actions\">Remove</th>#}
                      <th class=\"sorting_disabled\" rowspan=\"1\" colspan=\"1\" style=\"width: 126px;\" aria-label=\"Actions\"> Result</th>
                  </tr>
                   {% for diagnostic_request in diagnostic_requests %}
                    <tr>
                    <td ></td>
                     <td ></td>
                     <td></td>
                       {# <td class=\"hidden-xs\">{{ diagnostic_request.id }}</td>#}
                        <td>
                            <h6 class=\"product-title font-alt\">{{ diagnostic_request.analyseType }}</h6>
                        </td>
                         <td>
                            <h6 class=\"product-title font-alt\">{{ diagnostic_request.radioType }}</h6>
                        </td> 
                         <td>
                            <h6 class=\"product-title font-alt\">{{ diagnostic_request.doctorNotes }}</h6>
                        </td>
                         <td>
                            <h6 class=\"product-title font-alt\">{{ diagnostic_request.status }}</h6>
                        </td>
                        <td class=\"hidden-xs\">
                            <h6 class=\"product-title font-alt\">{{ diagnostic_request.creationDate ? diagnostic_request.creationDate|date('Y-m-d') : '' }}</h6>
                        </td>
                        <td></td>
                       
                        {#<td>
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.type }}</h5>
                        </td>#}
                       {#
                        <td>
                            <a href=\"{{ path('app_diagnostic_request_show', {'id': diagnostic_request.id}) }}\">Show</a>
                            <a href=\"{{ path('app_diagnostic_request_edit', {'id': diagnostic_request.id}) }}\">Edit</a>
                        </td>
                        <td class=\"pr-remove\">
                            <a href=\"#\" title=\"Remove\"><i class=\"fa fa-times\"></i></a>
                              {{ include('diagnostic_request/_delete_form.html.twig') }}
                        </td>
#}
                       {#  <td>
                            <a href=\"{{ path('app_bilan_index', {'id': diagnostic_request.id}) }}\">Result</a>
                            
                        </td>#}
                       
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"9\">No records found</td>
                    </tr>
                {% endfor %}
      </thead>
      </tbody>
    </table>
     {#<a href=\"{{ path('app_diagnostic_request_new') }}\" class=\"back-to-list-link\">#}
<br>
<br>

            {#  <button class=\"btn btn-label-secondary btn-prev\" disabled=\"\">
                  <i class=\"bx bx-chevron-left bx-sm ms-sm-n2\"></i>
                  <span class=\"align-middle d-sm-inline-block d-none\">Create new</span>
                </button>#}
            
  </div>

{% endblock %}



{#
{% block body %}
<br><br>
   <h1 style=\"color: #011663; text-align: center; text-decoration: underline; font-style: italic;\">DiagnosticRequest index</h1>
    <div class=\"container\">
     <br> <br>
            <form class=\"row\">
              <div class=\"col-sm-4 mb-sm-20\">
                <select class=\"form-control\">
                  <option selected=\"selected\">Diagnostic Type</option>
                  <option>Analye</option>
                  <option>Radiologie</option>
                </select>
              </div>
              <div class=\"col-sm-2 mb-sm-20\">
                <select class=\"form-control\">
                  <option selected=\"selected\">Woman</option>
                  <option>Man</option>
                </select>
              </div>
              <div class=\"col-sm-3 mb-sm-20\">
                <select class=\"form-control\">
                  <option selected=\"selected\">All</option>
                  <option>Pending</option>
                  <option>In Progress</option>
                  <option>Completed</option>
                </select>
              </div>
              <div class=\"col-sm-3\">
                <button class=\"btn btn-block btn-round btn-g\" type=\"submit\">Apply</button>
              </div>
            </form>
          </div>
          <br> <br>
          

   <div class=\"row\">
    <div class=\"col-sm-12\">
<table class=\"table table-striped table-border checkout-table\" style=\"margin-left: 20px;\">
            <tbody>
                <tr>
                    <th class=\"hidden-xs\">Id</th>
                    <th>AnalyseType</th>
                    <th>CreationDate</th>
                    <th>Status</th>
                    <th>DoctorNotes</th>
                    <th>Type</th>
                    <th>RadioType</th>
                    <th>Actions</th>
                    <th>Remove</th>
                </tr>
                {% for diagnostic_request in diagnostic_requests %}
                    <tr>
                        <td class=\"hidden-xs\">{{ diagnostic_request.id }}</td>
                        <td>
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.analyseType }}</h5>
                        </td>
                        <td class=\"hidden-xs\">
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.creationDate ? diagnostic_request.creationDate|date('Y-m-d') : '' }}</h5>
                        </td>
                        <td>
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.status }}</h5>
                        </td>
                        <td>
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.doctorNotes }}</h5>
                        </td>
                        <td>
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.type }}</h5>
                        </td>
                        <td>
                            <h5 class=\"product-title font-alt\">{{ diagnostic_request.radioType }}</h5>
                        </td>
                        <td>
                            <a href=\"{{ path('app_diagnostic_request_show', {'id': diagnostic_request.id}) }}\">Show</a>
                            <a href=\"{{ path('app_diagnostic_request_edit', {'id': diagnostic_request.id}) }}\">Edit</a>
                        </td>
                        <td class=\"pr-remove\">
                            <a href=\"#\" title=\"Remove\"><i class=\"fa fa-times\"></i></a>
                              {{ include('diagnostic_request/_delete_form.html.twig') }}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"9\">No records found</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
  <a href=\"{{ path('app_diagnostic_request_new') }}\" class=\"btn btn-primary\">Create New</a>
<br> <br>

{% endblock %}
#}
", "diagnostic_request/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\diagnostic_request\\index.html.twig");
    }
}
