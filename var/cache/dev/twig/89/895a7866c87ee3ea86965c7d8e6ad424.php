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

/* diagnostic_request/index2.html.twig */
class __TwigTemplate_f659c0249206dde72a42e8f20678c7c8 extends Template
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
        return "BaseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/index2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diagnostic_request/index2.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "diagnostic_request/index2.html.twig", 1);
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
        yield "      <div class=\"table-responsive text-nowrap\">
        <table class=\"table text-nowrap\">
          <thead>
            <tr>
              <th>Patient Name</th>
              <th>Phone Number</th>
              <th>Analyse Type</th>
              <th>Radiologie Type</th>
              <th>Doctor Notes </th>
            <th>Status</th>
            <th>Date</th>
             <th>Actions</th>
             <th>Result</th>
            </tr>
          </thead>
          <tbody class=\"table-border-bottom-0\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["diagnostic_requests"]) || array_key_exists("diagnostic_requests", $context) ? $context["diagnostic_requests"] : (function () { throw new RuntimeError('Variable "diagnostic_requests" does not exist.', 20, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["diagnostic_request"]) {
            // line 21
            yield "            <tr>
            <td>
    ";
            // line 23
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "getIdPatient", [], "method", false, false, false, 23))) {
                // line 24
                yield "        ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "getIdPatient", [], "method", false, false, false, 24), "getFullName", [], "method", false, false, false, 24), "html", null, true);
                yield "
    ";
            } else {
                // line 26
                yield "        N/A
    ";
            }
            // line 28
            yield "</td>

         <td>
                        ";
            // line 31
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "idPatient", [], "any", false, false, false, 31)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "idPatient", [], "any", false, false, false, 31), "phoneNumber", [], "any", false, false, false, 31)))) {
                // line 32
                yield "                            ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "idPatient", [], "any", false, false, false, 32), "phoneNumber", [], "any", false, false, false, 32), "html", null, true);
                yield "
                        ";
            } else {
                // line 34
                yield "                            N/A
                        ";
            }
            // line 36
            yield "                    </td>
               <td>
                 <h6 class=\"product-title font-alt\">";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "analyseType", [], "any", false, false, false, 38), "html", null, true);
            yield "</h6>
                 </td>
             <td>
                 <h6 class=\"product-title font-alt\">";
            // line 41
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "radioType", [], "any", false, false, false, 41), "html", null, true);
            yield "</h6>
             </td> 
                <td>
                            <h6 class=\"product-title font-alt\">";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "doctorNotes", [], "any", false, false, false, 44), "html", null, true);
            yield "</h6>
                        </td>

                        <td>

                            <h6 


                            <span class=\"badge rounded-pill\" style=\"background-color:
\t\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 53
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "status", [], "any", false, false, false, 53) == "Pending")) {
                // line 54
                yield "\t\t\t\t\t\t\t\t\t\t\t\t #28a745
\t\t\t\t\t\t\t\t\t\t\t\t ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 55
$context["diagnostic_request"], "status", [], "any", false, false, false, 55) == "In Progress")) {
                // line 56
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t#007bff
\t\t\t\t\t\t\t\t\t\t\t\t   ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 57
$context["diagnostic_request"], "status", [], "any", false, false, false, 57) == "Completed")) {
                // line 58
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t #ffc107\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                #dc3545
\t\t\t\t\t\t\t\t\t\t\t\t\t  ";
            } else {
                // line 59
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    #6c757d
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 61
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t";
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "status", [], "any", false, false, false, 62), "html", null, true);
            yield "
                
\t\t\t\t\t\t\t</span>
</h6>
                        </td>
                        <td class=\"hidden-xs\">
                            <h6 class=\"product-title font-alt\">";
            // line 68
            ((CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "creationDate", [], "any", false, false, false, 68)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "creationDate", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</h6>
                        </td>
  <td>
    <div class=\"dropdown\">
        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
            <i class=\"bx bx-dots-vertical-rounded\"></i>
        </button>
        <div class=\"dropdown-menu\">
           <a class=\"dropdown-item\" href=\"";
            // line 76
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\"><i class=\"bx bx-edit-alt me-1\"></i> View Details</a>
          ";
            // line 78
            yield "                              ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "diagnostic_request/_delete_form.html.twig");
            yield "
       
        </div> 
    </div>
 </td>

              <td > 
 ";
            // line 86
            yield " <a href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("diagnostic_results", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["diagnostic_request"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\">View Results</a>
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
            // line 93
            yield "                    <tr>
                        <td colspan=\"9\">No records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diagnostic_request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "              <div class=\"card-footer\">
              
                  <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_new");
        yield "\" class=\"btn btn-primary\">
        add diagnosticRequest
    </a>
    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_sorted_by_name");
        yield "\" class=\"btn btn-primary\">
        Sort by Name
    </a>
</div>
          </tbody>
        </table>
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
        return "diagnostic_request/index2.html.twig";
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
        return array (  264 => 102,  258 => 99,  254 => 97,  245 => 93,  224 => 86,  213 => 78,  209 => 76,  198 => 68,  189 => 62,  186 => 61,  182 => 59,  178 => 58,  176 => 57,  173 => 56,  171 => 55,  168 => 54,  166 => 53,  154 => 44,  148 => 41,  142 => 38,  138 => 36,  134 => 34,  128 => 32,  126 => 31,  121 => 28,  117 => 26,  111 => 24,  109 => 23,  105 => 21,  87 => 20,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}

{% block body %}
      <div class=\"table-responsive text-nowrap\">
        <table class=\"table text-nowrap\">
          <thead>
            <tr>
              <th>Patient Name</th>
              <th>Phone Number</th>
              <th>Analyse Type</th>
              <th>Radiologie Type</th>
              <th>Doctor Notes </th>
            <th>Status</th>
            <th>Date</th>
             <th>Actions</th>
             <th>Result</th>
            </tr>
          </thead>
          <tbody class=\"table-border-bottom-0\">
            {% for diagnostic_request in diagnostic_requests %}
            <tr>
            <td>
    {% if diagnostic_request.getIdPatient() is not null %}
        {{ diagnostic_request.getIdPatient().getFullName() }}
    {% else %}
        N/A
    {% endif %}
</td>

         <td>
                        {% if diagnostic_request.idPatient is not null and diagnostic_request.idPatient.phoneNumber is not null %}
                            {{ diagnostic_request.idPatient.phoneNumber }}
                        {% else %}
                            N/A
                        {% endif %}
                    </td>
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

                            <h6 


                            <span class=\"badge rounded-pill\" style=\"background-color:
\t\t\t\t\t\t\t\t\t\t\t\t   {% if diagnostic_request.status == 'Pending' %}
\t\t\t\t\t\t\t\t\t\t\t\t #28a745
\t\t\t\t\t\t\t\t\t\t\t\t {% elseif diagnostic_request.status == 'In Progress' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t#007bff
\t\t\t\t\t\t\t\t\t\t\t\t   {% elseif diagnostic_request.status == 'Completed' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t #ffc107\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                #dc3545
\t\t\t\t\t\t\t\t\t\t\t\t\t  {% else %}\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    #6c757d
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t{{ diagnostic_request.status }}
                
\t\t\t\t\t\t\t</span>
</h6>
                        </td>
                        <td class=\"hidden-xs\">
                            <h6 class=\"product-title font-alt\">{{ diagnostic_request.creationDate ? diagnostic_request.creationDate|date('Y-m-d') : '' }}</h6>
                        </td>
  <td>
    <div class=\"dropdown\">
        <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
            <i class=\"bx bx-dots-vertical-rounded\"></i>
        </button>
        <div class=\"dropdown-menu\">
           <a class=\"dropdown-item\" href=\"{{ path('app_diagnostic_request_show', {'id': diagnostic_request.id}) }}\"><i class=\"bx bx-edit-alt me-1\"></i> View Details</a>
          {# <a class=\"dropdown-item\" href=\"#\" ><i class=\"bx bx-trash me-1\"></i> Delete</a>#}
                              {{ include('diagnostic_request/_delete_form.html.twig') }}
       
        </div> 
    </div>
 </td>

              <td > 
 {#<a class=\"dropdown-item\" href=\"{{ path('app_bilan_index2', {'id': diagnostic_request.id}) }}\"><i class=\"product-title font-alt\"></i>Resultat</a>#}
 <a href=\"{{ path('diagnostic_results', {'id': diagnostic_request.id}) }}\">View Results</a>
              </td>

              
            </tr>
            
            {% else %}
                    <tr>
                        <td colspan=\"9\">No records found</td>
                    </tr>
                {% endfor %}
              <div class=\"card-footer\">
              
                  <a href=\"{{ path('app_diagnostic_request_new') }}\" class=\"btn btn-primary\">
        add diagnosticRequest
    </a>
    <a href=\"{{ path('app_diagnostic_request_sorted_by_name') }}\" class=\"btn btn-primary\">
        Sort by Name
    </a>
</div>
          </tbody>
        </table>
      </div>
{% endblock %}", "diagnostic_request/index2.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\diagnostic_request\\index2.html.twig");
    }
}
