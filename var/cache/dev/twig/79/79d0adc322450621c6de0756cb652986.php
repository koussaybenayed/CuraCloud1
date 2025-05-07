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

/* BackOffice/appointment/calendar.html.twig */
class __TwigTemplate_fe087c8d9280be7095ac7695db0d0c2d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/appointment/calendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BackOffice/appointment/calendar.html.twig"));

        $this->parent = $this->loadTemplate("BaseBack.html.twig", "BackOffice/appointment/calendar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<link rel=\"stylesheet\" href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/fullcalendar/fullcalendar.css\">
<div class=\"container mt-5\">
    <div class=\"row\">
                <h1 class=\"card-header\">Manage All Appointments</h1>
                <div class=\"card-body\">
                    <div id=\"calendar\"></div>
                </div>
            <div class=\"mt-3\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_appointment_index");
        yield "\" class=\"btn btn-outline-secondary\">Back to list</a>
            </div>
    </div>
</div>


    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js\" integrity=\"sha256-dHUNnePy81fXq4D/wfu7cPsEIP7zl6MvLb84jtZf+UY=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                editable: true,
                eventSources: [
                    {
                         url: \"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fc_load_events");
        yield "\",


                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // Handle failure
                        },
                    },
                ],
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                timeZone: 'UTC',
            });
            calendar.render();
        });
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
        return "BackOffice/appointment/calendar.html.twig";
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
        return array (  98 => 30,  79 => 14,  69 => 6,  59 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BaseBack.html.twig' %}



{% block body %}
<link rel=\"stylesheet\" href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/libs/fullcalendar/fullcalendar.css\">
<div class=\"container mt-5\">
    <div class=\"row\">
                <h1 class=\"card-header\">Manage All Appointments</h1>
                <div class=\"card-body\">
                    <div id=\"calendar\"></div>
                </div>
            <div class=\"mt-3\">
                <a href=\"{{ path('admin_app_appointment_index') }}\" class=\"btn btn-outline-secondary\">Back to list</a>
            </div>
    </div>
</div>


    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js\" integrity=\"sha256-dHUNnePy81fXq4D/wfu7cPsEIP7zl6MvLb84jtZf+UY=\" crossorigin=\"anonymous\"></script>
    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', () => {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                defaultView: 'dayGridMonth',
                editable: true,
                eventSources: [
                    {
                         url: \"{{ path('fc_load_events') }}\",


                        method: \"POST\",
                        extraParams: {
                            filters: JSON.stringify({})
                        },
                        failure: () => {
                            // Handle failure
                        },
                    },
                ],
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                timeZone: 'UTC',
            });
            calendar.render();
        });
    </script>
{% endblock %}


", "BackOffice/appointment/calendar.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\BackOffice\\appointment\\calendar.html.twig");
    }
}
