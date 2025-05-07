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

/* stream/view_stream.html.twig */
class __TwigTemplate_2b3d4d91d426afee26f30f83dcdf738d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/view_stream.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/view_stream.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "stream/view_stream.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
        <style>
        /* Add your custom styles here */
        .message-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        yield "    <div class=\"container\">
        <h1 class=\"mt-3\">";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stream"]) || array_key_exists("stream", $context) ? $context["stream"] : (function () { throw new RuntimeError('Variable "stream" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "firstName", [], "any", false, false, false, 18) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stream"]) || array_key_exists("stream", $context) ? $context["stream"] : (function () { throw new RuntimeError('Variable "stream" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "lastName", [], "any", false, false, false, 18)), "html", null, true);
        yield "'s Stream</h1>

        <div class=\"row mt-3\">
            <div class=\"col-lg-8\">
                <video id=\"userVideo\" width=\"100%\" height=\"auto\" autoplay></video>
            </div>
            <div class=\"col-lg-4\">
                ";
        // line 26
        yield "                <div id=\"messages\" class=\"message-container mt-3\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stream"]) || array_key_exists("stream", $context) ? $context["stream"] : (function () { throw new RuntimeError('Variable "stream" does not exist.', 27, $this->source); })()), "messages", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            yield "                        <p>
                            <strong>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 29), "firstName", [], "any", false, false, false, 29) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 29), "lastName", [], "any", false, false, false, 29)), "html", null, true);
            yield "</strong>:
                            ";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 30), "html", null, true);
            yield "
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                </div>

                ";
        // line 36
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["id" => "message-form"]]);
        yield "
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 37, $this->source); })()), "content", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Type your message..."]]);
        yield "

                ";
        // line 40
        yield "                <button type=\"submit\" class=\"btn btn-primary mt-2\">Send</button>

                ";
        // line 43
        yield "                <button id=\"leaveStreamBtn\" class=\"btn btn-danger mt-2\">Leave Stream</button>

                ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["messageForm"]) || array_key_exists("messageForm", $context) ? $context["messageForm"] : (function () { throw new RuntimeError('Variable "messageForm" does not exist.', 45, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <script>
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                const userVideo = document.getElementById('userVideo');
                userVideo.srcObject = stream;

                // Form submission event handler
                const messageForm = document.getElementById('message-form');
                messageForm.addEventListener('submit', async (event) => {
                    event.preventDefault();

                    // Submit the form using Fetch API or any other preferred method
                    try {
                        const formData = new FormData(messageForm);
                        const response = await fetch('";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_stream", ["streamId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stream"]) || array_key_exists("stream", $context) ? $context["stream"] : (function () { throw new RuntimeError('Variable "stream" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        yield "', {
                            method: 'POST',
                            body: formData,
                        });

                        if (response.ok) {
                            // Handle success, e.g., clear the input field or update the messages dynamically
                            messageForm.reset();
                        } else {
                            // Handle errors
                            console.error('Failed to submit the form');
                        }
                    } catch (error) {
                        console.error('An error occurred:', error);
                    }
                });

                // Leave Stream button event handler
                const leaveStreamBtn = document.getElementById('leaveStreamBtn');
                leaveStreamBtn.addEventListener('click', () => {
                    // Handle leaving the stream, e.g., redirect or perform other actions
                    window.location.href = '";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stream_index");
        yield "';
                });
            })
            .catch((error) => {
                console.error('Error accessing camera and microphone:', error);
            });
    </script>
    ";
        // line 93
        yield "    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
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
        return "stream/view_stream.html.twig";
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
        return array (  213 => 93,  203 => 85,  179 => 64,  157 => 45,  153 => 43,  149 => 40,  144 => 37,  139 => 36,  135 => 33,  126 => 30,  122 => 29,  119 => 28,  115 => 27,  112 => 26,  102 => 18,  99 => 17,  89 => 16,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block stylesheets %}
    {# Include Bootstrap CSS #}
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">
    {# Include your custom styles if needed #}
    <style>
        /* Add your custom styles here */
        .message-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-3\">{{ stream.user.firstName ~ ' ' ~ stream.user.lastName }}'s Stream</h1>

        <div class=\"row mt-3\">
            <div class=\"col-lg-8\">
                <video id=\"userVideo\" width=\"100%\" height=\"auto\" autoplay></video>
            </div>
            <div class=\"col-lg-4\">
                {# Display existing messages in a scrollable container #}
                <div id=\"messages\" class=\"message-container mt-3\">
                    {% for message in stream.messages %}
                        <p>
                            <strong>{{ message.user.firstName ~ ' ' ~ message.user.lastName }}</strong>:
                            {{ message.content }}
                        </p>
                    {% endfor %}
                </div>

                {# Form for adding new messages #}
                {{ form_start(messageForm, {'attr': {'id': 'message-form'}}) }}
                {{ form_row(messageForm.content, {'attr': {'class': 'form-control', 'placeholder': 'Type your message...'}}) }}

                {# Add the submit button here #}
                <button type=\"submit\" class=\"btn btn-primary mt-2\">Send</button>

                {# Leave Stream button #}
                <button id=\"leaveStreamBtn\" class=\"btn btn-danger mt-2\">Leave Stream</button>

                {{ form_end(messageForm) }}
            </div>
        </div>
    </div>

    <script>
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                const userVideo = document.getElementById('userVideo');
                userVideo.srcObject = stream;

                // Form submission event handler
                const messageForm = document.getElementById('message-form');
                messageForm.addEventListener('submit', async (event) => {
                    event.preventDefault();

                    // Submit the form using Fetch API or any other preferred method
                    try {
                        const formData = new FormData(messageForm);
                        const response = await fetch('{{ path('view_stream', {'streamId': stream.id}) }}', {
                            method: 'POST',
                            body: formData,
                        });

                        if (response.ok) {
                            // Handle success, e.g., clear the input field or update the messages dynamically
                            messageForm.reset();
                        } else {
                            // Handle errors
                            console.error('Failed to submit the form');
                        }
                    } catch (error) {
                        console.error('An error occurred:', error);
                    }
                });

                // Leave Stream button event handler
                const leaveStreamBtn = document.getElementById('leaveStreamBtn');
                leaveStreamBtn.addEventListener('click', () => {
                    // Handle leaving the stream, e.g., redirect or perform other actions
                    window.location.href = '{{ path('stream_index') }}';
                });
            })
            .catch((error) => {
                console.error('Error accessing camera and microphone:', error);
            });
    </script>
    {# Include Bootstrap JS and Popper.js #}
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"></script>
{% endblock %}
", "stream/view_stream.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\stream\\view_stream.html.twig");
    }
}
