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

/* FrontOffice/appointment/qr_display.html.twig */
class __TwigTemplate_59244893e9a61d942c8a315d1649c6ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/qr_display.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/qr_display.html.twig"));

        // line 1
        yield "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Qr Code</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
  </head>
  <body>
    <div class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col\">
                <img src=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["simple"]) || array_key_exists("simple", $context) ? $context["simple"] : (function () { throw new RuntimeError('Variable "simple" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "\" />
            </div>
            <div class=\"col\">
                <img src=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["changeColor"]) || array_key_exists("changeColor", $context) ? $context["changeColor"] : (function () { throw new RuntimeError('Variable "changeColor" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" />
            </div>
            <div class=\"col\">
                <img src=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["changeBgColor"]) || array_key_exists("changeBgColor", $context) ? $context["changeBgColor"] : (function () { throw new RuntimeError('Variable "changeBgColor" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\" />
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col\">
                <img src=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["withImage"]) || array_key_exists("withImage", $context) ? $context["withImage"] : (function () { throw new RuntimeError('Variable "withImage" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" />
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "FrontOffice/appointment/qr_display.html.twig";
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
        return array (  78 => 24,  70 => 19,  64 => 16,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Qr Code</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
  </head>
  <body>
    <div class=\"container text-center\">
        <div class=\"row\">
            <div class=\"col\">
                <img src=\"{{ simple }}\" />
            </div>
            <div class=\"col\">
                <img src=\"{{ changeColor }}\" />
            </div>
            <div class=\"col\">
                <img src=\"{{ changeBgColor }}\" />
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col\">
                <img src=\"{{ withImage }}\" />
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
  </body>
</html>", "FrontOffice/appointment/qr_display.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\qr_display.html.twig");
    }
}
