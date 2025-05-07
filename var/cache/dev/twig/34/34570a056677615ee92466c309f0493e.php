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

/* stream/user_stream.html.twig */
class __TwigTemplate_a5f3b6d04a9415ef0c8b1ee615b3e821 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/user_stream.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stream/user_stream.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "stream/user_stream.html.twig", 1);
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
        /* Optional: Adjust styling for buttons */
        #endStreamBtn, #pauseStreamBtn {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        yield "    <div class=\"container mt-3\">
        <h1>Your Stream</h1>
        <div class=\"row mt-3\">
            <div class=\"col-lg-8\">
                <!-- Video content -->
                <video id=\"userVideo\" width=\"100%\" height=\"auto\" autoplay></video>
            </div>
            <div class=\"col-lg-4\">
                <!-- Message container and buttons -->
                <div id=\"messages\" class=\"message-container mt-3\">
                <h2>Chat</h2>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stream"]) || array_key_exists("stream", $context) ? $context["stream"] : (function () { throw new RuntimeError('Variable "stream" does not exist.', 32, $this->source); })()), "messages", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "                        <p>
                            <strong>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "user", [], "any", false, false, false, 34), "lastName", [], "any", false, false, false, 34)), "html", null, true);
            yield "</strong>:
                            ";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 35), "html", null, true);
            yield "
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                </div>
                
                
                <button id=\"endStreamBtn\" onclick=\"confirmEndStream('";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("end_stream", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "')\" class=\"btn btn-danger\">End Stream</button>
                <button id=\"pauseStreamBtn\" class=\"btn btn-secondary\">Pause Stream</button>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js\"></script>
    <script>
        const endStreamBtn = document.getElementById('endStreamBtn');
        const userVideo = document.getElementById('userVideo');

        endStreamBtn.addEventListener('click', async () => {
            // Using modern async/await to handle the confirmation
            const confirmEndStream = await Swal.fire({
                title: 'Are you sure?',
                text: 'Ending the stream will stop the broadcast.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, end it!'
            });

            if (confirmEndStream.isConfirmed) {
                // Stop the local stream
                const tracks = userVideo.srcObject.getTracks();
                tracks.forEach(track => track.stop());

                // Add your logic to send a request to the server to end the stream
                sendEndStreamRequest();

                // Redirect to the specified route after ending the stream
                window.location.href = '";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stream_index");
        yield "';
            }
        });

        function sendEndStreamRequest() {
            // Use AJAX (you can also use fetch) to send a request to the server
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '";
        // line 80
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("end_stream", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            
            // Add any additional data you want to send in the request body
            const requestData = {
                userId: '";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "', // Replace with the actual user ID
                // Add other data if needed
            };
            
            xhr.send(JSON.stringify(requestData));
        }

        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                userVideo.srcObject = stream;

                // Pause Stream button event handler
                const pauseStreamBtn = document.getElementById('pauseStreamBtn');
                pauseStreamBtn.addEventListener('click', () => {
                    // Pause the local stream
                    const tracks = userVideo.srcObject.getTracks();
                    tracks.forEach(track => track.enabled = !track.enabled);
                });
            })
            .catch((error) => {
                console.error('Error accessing camera and microphone:', error);
            });
    </script>
    ";
        // line 109
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
        return "stream/user_stream.html.twig";
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
        return array (  220 => 109,  194 => 85,  186 => 80,  176 => 73,  141 => 41,  136 => 38,  127 => 35,  123 => 34,  120 => 33,  116 => 32,  103 => 21,  93 => 20,  70 => 4,  60 => 3,  37 => 1,);
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
        /* Optional: Adjust styling for buttons */
        #endStreamBtn, #pauseStreamBtn {
            margin-top: 10px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container mt-3\">
        <h1>Your Stream</h1>
        <div class=\"row mt-3\">
            <div class=\"col-lg-8\">
                <!-- Video content -->
                <video id=\"userVideo\" width=\"100%\" height=\"auto\" autoplay></video>
            </div>
            <div class=\"col-lg-4\">
                <!-- Message container and buttons -->
                <div id=\"messages\" class=\"message-container mt-3\">
                <h2>Chat</h2>
                    {% for message in stream.messages %}
                        <p>
                            <strong>{{ message.user.firstName ~ ' ' ~ message.user.lastName }}</strong>:
                            {{ message.content }}
                        </p>
                    {% endfor %}
                </div>
                
                
                <button id=\"endStreamBtn\" onclick=\"confirmEndStream('{{ path('end_stream', {'id': user.id}) }}')\" class=\"btn btn-danger\">End Stream</button>
                <button id=\"pauseStreamBtn\" class=\"btn btn-secondary\">Pause Stream</button>
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js\"></script>
    <script>
        const endStreamBtn = document.getElementById('endStreamBtn');
        const userVideo = document.getElementById('userVideo');

        endStreamBtn.addEventListener('click', async () => {
            // Using modern async/await to handle the confirmation
            const confirmEndStream = await Swal.fire({
                title: 'Are you sure?',
                text: 'Ending the stream will stop the broadcast.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, end it!'
            });

            if (confirmEndStream.isConfirmed) {
                // Stop the local stream
                const tracks = userVideo.srcObject.getTracks();
                tracks.forEach(track => track.stop());

                // Add your logic to send a request to the server to end the stream
                sendEndStreamRequest();

                // Redirect to the specified route after ending the stream
                window.location.href = '{{ path('stream_index') }}';
            }
        });

        function sendEndStreamRequest() {
            // Use AJAX (you can also use fetch) to send a request to the server
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ path('end_stream', {'id': user.id}) }}', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            
            // Add any additional data you want to send in the request body
            const requestData = {
                userId: '{{ user.id }}', // Replace with the actual user ID
                // Add other data if needed
            };
            
            xhr.send(JSON.stringify(requestData));
        }

        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                userVideo.srcObject = stream;

                // Pause Stream button event handler
                const pauseStreamBtn = document.getElementById('pauseStreamBtn');
                pauseStreamBtn.addEventListener('click', () => {
                    // Pause the local stream
                    const tracks = userVideo.srcObject.getTracks();
                    tracks.forEach(track => track.enabled = !track.enabled);
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
", "stream/user_stream.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\stream\\user_stream.html.twig");
    }
}
