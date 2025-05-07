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

/* FrontOffice/appointment/_delete_form.html.twig */
class __TwigTemplate_e23e812097e0ba897ecdd5def601c257 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/_delete_form.html.twig"));

        // line 1
        yield "<form id=\"deleteForm\" method=\"post\" action=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)]), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2))), "html", null, true);
        yield "\">
<button type=\"button\" id=\"deleteButton\" class=\"btn btn-danger\">
    <i class=\"fas fa-trash-alt\"></i> Delete
</button>
</form>
<script>
document.getElementById('deleteButton').addEventListener('click', function() {
    Swal.fire({
        title: 'Are you sure?',
        text: \"You won't be able to revert this!\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').submit();
        }
    });
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "FrontOffice/appointment/_delete_form.html.twig";
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
        return array (  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"deleteForm\" method=\"post\" action=\"{{ path('user_app_appointment_delete', {'id': appointment.id}) }}\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ appointment.id) }}\">
<button type=\"button\" id=\"deleteButton\" class=\"btn btn-danger\">
    <i class=\"fas fa-trash-alt\"></i> Delete
</button>
</form>
<script>
document.getElementById('deleteButton').addEventListener('click', function() {
    Swal.fire({
        title: 'Are you sure?',
        text: \"You won't be able to revert this!\",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').submit();
        }
    });
});
</script>", "FrontOffice/appointment/_delete_form.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\_delete_form.html.twig");
    }
}
