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

/* FrontOffice/appointment/show.html.twig */
class __TwigTemplate_ce93da8863b2d0c0b5fc878d7f3605bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FrontOffice/appointment/show.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "FrontOffice/appointment/show.html.twig", 1);
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Appointment Details</h1>

        <div class=\"card\">
            <div class=\"card-header\">
                <button class=\"btn btn-primary\" id=\"showQRCode\">Show QR Code</button>
            </div>

            <div class=\"card-body\">
                <h5 class=\"card-title\">Appointment #";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</h5>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr></tr>

                            <tr>
                                <th scope=\"row\">Description</th>
                                <td>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Status</th>
                                <td>
                                    <span style=\"color:
                                        ";
        // line 27
        if ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27)) == "accepted")) {
            // line 28
            yield "                                            #28a745
                                        ";
        } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29)) == "completed")) {
            // line 30
            yield "                                            #007bff
                                        ";
        } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31)) == "scheduled")) {
            // line 32
            yield "                                            #ffc107
                                        ";
        } elseif ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33)) == "cancelled")) {
            // line 34
            yield "                                            #dc3545
                                        ";
        } else {
            // line 36
            yield "                                            #6c757d
                                        ";
        }
        // line 38
        yield "                                        \">
                                        ";
        // line 39
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39), "html", null, true);
        yield "
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Start Date</th>
                                <td>
                                    ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 46, $this->source); })()), "startDate", [], "any", false, false, false, 46)) {
            // line 47
            yield "                                        ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 47, $this->source); })()), "startDate", [], "any", false, false, false, 47), "l, F j, Y, g:i A"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 49
            yield "                                        N/A
                                    ";
        }
        // line 51
        yield "                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\">End Date</th>
                                <td>
                                    ";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 56, $this->source); })()), "endDate", [], "any", false, false, false, 56)) {
            // line 57
            yield "                                        ";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 57, $this->source); })()), "endDate", [], "any", false, false, false, 57), "l, F j, Y, g:i A"), "html", null, true);
            yield "
                                    ";
        } else {
            // line 59
            yield "                                        N/A
                                    ";
        }
        // line 61
        yield "                                </td>
                            </tr>
                            ";
        // line 63
        if ((Twig\Extension\CoreExtension::lowerFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63)) == "completed")) {
            // line 64
            yield "                                <tr>
                                    <td colspan=\"2\">
                                        <button id=\"showRatingPopup\" class=\"btn btn-primary mt-4\">Rate this Appointment</button>
                                    </td>
                                </tr>
                            ";
        }
        // line 70
        yield "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
                <div>
                    <a href=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_app_appointment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Edit</a>
                    ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "/FrontOffice/appointment/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </div>

\t<div id=\"qrPopup\" style=\"display: none; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 100; background: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px;\">
\t\t<img src=\"";
        // line 85
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_qr", ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "status" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 85, $this->source); })()), "status", [], "any", false, false, false, 85), "startDate" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 85, $this->source); })()), "startDate", [], "any", false, false, false, 85), "Y-m-d"), "endDate" => Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 85, $this->source); })()), "endDate", [], "any", false, false, false, 85), "Y-m-d")]), "html", null, true);
        yield "\" alt=\"QR Code\">
\t\t<button id=\"closePopup\">Close</button>
\t</div>
\t<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>



    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#showRatingPopup\").click(function() {
            Swal.fire({
                title: 'Rate this Appointment',
                html: `
                    <div id=\"starRating\" style=\"font-size: 2em;\"> 
                        <i class=\"far fa-star\" data-rating=\"1\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"2\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"3\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"4\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"5\" style=\"color: gold;\"></i>
                    </div>
                    <input type=\"hidden\" id=\"selectedRating\" value=\"\">
                `,
                showCancelButton: true,
                confirmButtonText: 'Submit Rating',
                preConfirm: () => {
                    const rating = \$(\"#selectedRating\").val();
                    if (!rating) {
                        Swal.showValidationMessage('Please select a rating');
                    }
                    return { rating: rating };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // AJAX request to update the rating
                    \$.ajax({
                        url: \"";
        // line 121
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_rating", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
        yield "\",
                        method: \"POST\",
                        data: {
                            rating: result.value.rating
                        },
                        success: function(response) {
                            // Handle success response, if needed
                            console.log(\"Rating updated successfully!\");
                            Swal.fire('Success', 'Your rating has been submitted!', 'success');
                        },
                        error: function(xhr, status, error) {
                            // Handle error response, if needed
                            console.error(\"Error updating rating:\", error);
                            Swal.fire('Error', 'An error occurred while submitting your rating.', 'error');
                        }
                    });
                }
            });
        });

        \$(document).on('click', '#starRating i', function() {
            var rating = \$(this).attr(\"data-rating\");
            \$(\"#starRating i\").removeClass(\"fas\").addClass(\"far\").css('color', 'gold');
            \$(this).prevAll().addBack().removeClass(\"far\").addClass(\"fas\").css('color', 'gold'); 
            \$(\"#selectedRating\").val(rating);
        });

        \$(\"#closePopup\").click(function() {
            \$(\"#ratingPopup\").hide();
        });
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
        return "FrontOffice/appointment/show.html.twig";
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
        return array (  248 => 121,  209 => 85,  199 => 78,  195 => 77,  190 => 75,  183 => 70,  175 => 64,  173 => 63,  169 => 61,  165 => 59,  159 => 57,  157 => 56,  150 => 51,  146 => 49,  140 => 47,  138 => 46,  128 => 39,  125 => 38,  121 => 36,  117 => 34,  115 => 33,  112 => 32,  110 => 31,  107 => 30,  105 => 29,  102 => 28,  100 => 27,  91 => 21,  80 => 13,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Appointment Details</h1>

        <div class=\"card\">
            <div class=\"card-header\">
                <button class=\"btn btn-primary\" id=\"showQRCode\">Show QR Code</button>
            </div>

            <div class=\"card-body\">
                <h5 class=\"card-title\">Appointment #{{ appointment.id }}</h5>
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <tbody>
                            <tr></tr>

                            <tr>
                                <th scope=\"row\">Description</th>
                                <td>{{ appointment.description }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Status</th>
                                <td>
                                    <span style=\"color:
                                        {% if appointment.status|lower == 'accepted' %}
                                            #28a745
                                        {% elseif appointment.status|lower == 'completed' %}
                                            #007bff
                                        {% elseif appointment.status|lower == 'scheduled' %}
                                            #ffc107
                                        {% elseif appointment.status|lower == 'cancelled' %}
                                            #dc3545
                                        {% else %}
                                            #6c757d
                                        {% endif %}
                                        \">
                                        {{ appointment.status }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Start Date</th>
                                <td>
                                    {% if appointment.startDate %}
                                        {{ appointment.startDate|date('l, F j, Y, g:i A') }}
                                    {% else %}
                                        N/A
                                    {% endif %}
                                </td>
                            </tr>
                            <tr>
                                <th scope=\"row\">End Date</th>
                                <td>
                                    {% if appointment.endDate %}
                                        {{ appointment.endDate|date('l, F j, Y, g:i A') }}
                                    {% else %}
                                        N/A
                                    {% endif %}
                                </td>
                            </tr>
                            {% if appointment.status|lower == 'completed' %}
                                <tr>
                                    <td colspan=\"2\">
                                        <button id=\"showRatingPopup\" class=\"btn btn-primary mt-4\">Rate this Appointment</button>
                                    </td>
                                </tr>
                            {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"card-footer d-flex justify-content-between\">
                <a href=\"{{ path('user_app_appointment_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                <div>
                    <a href=\"{{ path('user_app_appointment_edit', {'id': appointment.id}) }}\" class=\"btn btn-primary\">Edit</a>
                    {{ include('/FrontOffice/appointment/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>

\t<div id=\"qrPopup\" style=\"display: none; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 100; background: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px;\">
\t\t<img src=\"{{ path('generate_qr', { 'description': appointment.description, 'status': appointment.status, 'startDate': appointment.startDate|date('Y-m-d'), 'endDate': appointment.endDate|date('Y-m-d') }) }}\" alt=\"QR Code\">
\t\t<button id=\"closePopup\">Close</button>
\t</div>
\t<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>



    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#showRatingPopup\").click(function() {
            Swal.fire({
                title: 'Rate this Appointment',
                html: `
                    <div id=\"starRating\" style=\"font-size: 2em;\"> 
                        <i class=\"far fa-star\" data-rating=\"1\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"2\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"3\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"4\" style=\"color: gold;\"></i>
                        <i class=\"far fa-star\" data-rating=\"5\" style=\"color: gold;\"></i>
                    </div>
                    <input type=\"hidden\" id=\"selectedRating\" value=\"\">
                `,
                showCancelButton: true,
                confirmButtonText: 'Submit Rating',
                preConfirm: () => {
                    const rating = \$(\"#selectedRating\").val();
                    if (!rating) {
                        Swal.showValidationMessage('Please select a rating');
                    }
                    return { rating: rating };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // AJAX request to update the rating
                    \$.ajax({
                        url: \"{{ path('submit_rating', {'id': appointment.id}) }}\",
                        method: \"POST\",
                        data: {
                            rating: result.value.rating
                        },
                        success: function(response) {
                            // Handle success response, if needed
                            console.log(\"Rating updated successfully!\");
                            Swal.fire('Success', 'Your rating has been submitted!', 'success');
                        },
                        error: function(xhr, status, error) {
                            // Handle error response, if needed
                            console.error(\"Error updating rating:\", error);
                            Swal.fire('Error', 'An error occurred while submitting your rating.', 'error');
                        }
                    });
                }
            });
        });

        \$(document).on('click', '#starRating i', function() {
            var rating = \$(this).attr(\"data-rating\");
            \$(\"#starRating i\").removeClass(\"fas\").addClass(\"far\").css('color', 'gold');
            \$(this).prevAll().addBack().removeClass(\"far\").addClass(\"fas\").css('color', 'gold'); 
            \$(\"#selectedRating\").val(rating);
        });

        \$(\"#closePopup\").click(function() {
            \$(\"#ratingPopup\").hide();
        });
    });
</script>

{% endblock %}
", "FrontOffice/appointment/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\FrontOffice\\appointment\\show.html.twig");
    }
}
