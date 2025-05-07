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

/* @MercurySeriesFlashy/flashy.html.twig */
class __TwigTemplate_1381b832f6eb741f6d596db28d111bf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MercurySeriesFlashy/flashy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MercurySeriesFlashy/flashy.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "flashes", ["mercuryseries_flashy_notification"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            yield "    <script id=\"flashy-template\" type=\"text/template\">
        <div class=\"flashy flashy--";
            // line 3
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 3), "html", null, true);
            yield "\">
            <a href=\"#\" class=\"flashy__body\" target=\"_blank\"></a>
        </div>
    </script>

    <script>
        flashy(\"";
            // line 9
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 9), "html", null, true);
            yield "\", \"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "link", [], "any", false, false, false, 9), "html", null, true);
            yield "\");
    </script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MercurySeriesFlashy/flashy.html.twig";
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
        return array (  60 => 9,  51 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for message in app.flashes('mercuryseries_flashy_notification') %}
    <script id=\"flashy-template\" type=\"text/template\">
        <div class=\"flashy flashy--{{ message.type }}\">
            <a href=\"#\" class=\"flashy__body\" target=\"_blank\"></a>
        </div>
    </script>

    <script>
        flashy(\"{{ message.message }}\", \"{{ message.link }}\");
    </script>
{% endfor %}
", "@MercurySeriesFlashy/flashy.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\vendor\\mercuryseries\\flashy-bundle\\src\\Resources\\views\\flashy.html.twig");
    }
}
