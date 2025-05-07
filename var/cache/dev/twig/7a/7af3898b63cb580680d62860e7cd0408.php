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

/* stream/view_streams.html.twig */
class __TwigTemplate_480fdbbab3b9767adc4c0f8a9cc36172 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/view_streams.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/view_streams.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "stream/view_streams.html.twig", 1);
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
                <div class=\"row\">
            <div class=\"col-md-9\">
                <h2 class=\"card-header mb-4\">Active Streams</h2>
            </div>
            <div class=\"col-md-3 text-end\">
                ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DOCTOR")) {
            // line 11
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stream_create");
            yield "\" class=\"btn btn-label-success\">Start your own stream</a>
                ";
        }
        // line 13
        yield "            </div>
        </div>

        ";
        // line 16
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["activeStreams"]) || array_key_exists("activeStreams", $context) ? $context["activeStreams"] : (function () { throw new RuntimeError('Variable "activeStreams" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "            <div class=\"row\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeStreams"]) || array_key_exists("activeStreams", $context) ? $context["activeStreams"] : (function () { throw new RuntimeError('Variable "activeStreams" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stream"]) {
                // line 19
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"embed-responsive embed-responsive-16by9\">
                                <video class=\"userVideo embed-responsive-item\" width=\"100%\" height=\"auto\" autoplay></video>
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 25
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["stream"], "title", [], "any", false, false, false, 25), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">";
                // line 26
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stream"], "user", [], "any", false, false, false, 26), "firstname", [], "any", false, false, false, 26) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["stream"], "user", [], "any", false, false, false, 26), "lastname", [], "any", false, false, false, 26)), "html", null, true);
                yield "</p>
                            </div>
                            <div class=\"card-footer text-center\">
                                <a href=\"";
                // line 29
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_stream", ["streamId" => CoreExtension::getAttribute($this->env, $this->source, $context["stream"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">Join Stream</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stream'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "            </div>
        ";
        } else {
            // line 36
            yield "            <p>No active streams at the moment.</p>
        ";
        }
        // line 38
        yield "    </div>

    <script>
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                const userVideos = document.querySelectorAll('.userVideo');
                userVideos.forEach(video => video.srcObject = stream);
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
        return "stream/view_streams.html.twig";
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
        return array (  136 => 38,  132 => 36,  128 => 34,  117 => 29,  111 => 26,  107 => 25,  99 => 19,  95 => 18,  92 => 17,  90 => 16,  85 => 13,  79 => 11,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}
    <div class=\"container\">
                <div class=\"row\">
            <div class=\"col-md-9\">
                <h2 class=\"card-header mb-4\">Active Streams</h2>
            </div>
            <div class=\"col-md-3 text-end\">
                {% if is_granted('ROLE_DOCTOR') %}
                    <a href=\"{{ path('stream_create') }}\" class=\"btn btn-label-success\">Start your own stream</a>
                {% endif %}
            </div>
        </div>

        {% if activeStreams is not empty %}
            <div class=\"row\">
                {% for stream in activeStreams %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <div class=\"embed-responsive embed-responsive-16by9\">
                                <video class=\"userVideo embed-responsive-item\" width=\"100%\" height=\"auto\" autoplay></video>
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ stream.title }}</h5>
                                <p class=\"card-text\">{{ stream.user.firstname ~ ' ' ~ stream.user.lastname }}</p>
                            </div>
                            <div class=\"card-footer text-center\">
                                <a href=\"{{ path('view_stream', {'streamId': stream.id}) }}\" class=\"btn btn-primary\">Join Stream</a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>No active streams at the moment.</p>
        {% endif %}
    </div>

    <script>
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                const userVideos = document.querySelectorAll('.userVideo');
                userVideos.forEach(video => video.srcObject = stream);
            });
    </script>
{% endblock %}
", "stream/view_streams.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\stream\\view_streams.html.twig");
    }
}
