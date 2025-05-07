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

/* comments/_form.html.twig */
class __TwigTemplate_f24aa933e5e010e85f867ff14c27ac7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_new", ["blogId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["blog"]) || array_key_exists("blog", $context) ? $context["blog"] : (function () { throw new RuntimeError('Variable "blog" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)])]);
        yield "
    ";
        // line 3
        yield "    <div class=\"form-group\">
    <label for=\"comments_content\" class=\"required\"></label>
                     
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "content", [], "any", false, false, false, 6), 'label');
        yield "
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "content", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "style" => "height: 100px;", "placeholder" => "Comment"]]);
        yield "
   
     ";
        // line 10
        yield "    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-round\">Post Comment</button>
";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_end');
        yield "


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
        return "comments/_form.html.twig";
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
        return array (  66 => 12,  62 => 10,  57 => 7,  53 => 6,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'action': path('app_comments_new', {'blogId': blog.id})}) }}
    {# {{ form_widget(form) }} #}
    <div class=\"form-group\">
    <label for=\"comments_content\" class=\"required\"></label>
                     
        {{ form_label(form.content) }}
        {{ form_widget(form.content, {'attr': {'class': 'form-control', 'style': 'height: 100px;', 'placeholder': 'Comment'}}) }}
   
     {# <textarea class=\"form-control\" id=\"comment\" name=\"comment\" rows=\"4\" placeholder=\"Comment\"></textarea> #}
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-round\">Post Comment</button>
{{ form_end(form) }}


", "comments/_form.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\comments\\_form.html.twig");
    }
}
