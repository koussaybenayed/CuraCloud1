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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig */
class __TwigTemplate_6768611c11ec8dfa5592eef1cf63fcd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig"));

        // line 1
        yield "<form class=\"form-inline\" method=\"get\" action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" enctype=\"application/x-www-form-urlencoded\">

    <div class=\"form-group\">

        ";
        // line 5
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 5, $this->source); })())) > 1)) {
            // line 6
            yield "            <select class=\"form-control\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["field"] => $context["label"]) {
                // line 8
                yield "                    <option value=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["field"], "html", null, true);
                yield "\"";
                if (((isset($context["selectedField"]) || array_key_exists("selectedField", $context) ? $context["selectedField"] : (function () { throw new RuntimeError('Variable "selectedField" does not exist.', 8, $this->source); })()) == $context["field"])) {
                    yield " selected=\"selected\"";
                }
                yield ">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["label"], "html", null, true);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "            </select>
        ";
        } else {
            // line 12
            yield "            <input type=\"hidden\" name=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filterFieldName"]) || array_key_exists("filterFieldName", $context) ? $context["filterFieldName"] : (function () { throw new RuntimeError('Variable "filterFieldName" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 12, $this->source); })()))), "html", null, true);
            yield "\" />
        ";
        }
        // line 14
        yield "
        <input class=\"form-control\" type=\"search\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" name=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["filterValueName"]) || array_key_exists("filterValueName", $context) ? $context["filterValueName"] : (function () { throw new RuntimeError('Variable "filterValueName" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("filter_searchword", [], "KnpPaginatorBundle"), "html", null, true);
        yield "\" />

    </div>

    <div class=\"form-group\">
        <button class=\"btn btn-primary\">";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 20, $this->source); })()), "button", [], "any", false, false, false, 20), "html", null, true);
        yield "</button>
    </div>

</form>
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
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig";
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
        return array (  105 => 20,  93 => 15,  90 => 14,  82 => 12,  78 => 10,  63 => 8,  59 => 7,  54 => 6,  52 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"form-inline\" method=\"get\" action=\"{{ action }}\" enctype=\"application/x-www-form-urlencoded\">

    <div class=\"form-group\">

        {% if fields|length > 1 %}
            <select class=\"form-control\" name=\"{{ filterFieldName }}\">
                {% for field, label in fields %}
                    <option value=\"{{ field }}\"{% if selectedField == field %} selected=\"selected\"{% endif %}>{{ label }}</option>
                {% endfor %}
            </select>
        {% else %}
            <input type=\"hidden\" name=\"{{ filterFieldName }}\" value=\"{{ fields|keys|first }}\" />
        {% endif %}

        <input class=\"form-control\" type=\"search\" value=\"{{ selectedValue }}\" name=\"{{ filterValueName }}\" placeholder=\"{{ 'filter_searchword'|trans({}, 'KnpPaginatorBundle') }}\" />

    </div>

    <div class=\"form-group\">
        <button class=\"btn btn-primary\">{{ options.button }}</button>
    </div>

</form>
", "@KnpPaginator/Pagination/twitter_bootstrap_v4_filtration.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\twitter_bootstrap_v4_filtration.html.twig");
    }
}
