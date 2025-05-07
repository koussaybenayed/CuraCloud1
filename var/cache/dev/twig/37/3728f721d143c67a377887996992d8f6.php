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

/* user/show.html.twig */
class __TwigTemplate_4f1931f6d35f57d8d6a177d2b11cc8d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'edit' => [$this, 'block_edit'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "account_details.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("account_details.html.twig", "user/show.html.twig", 1);
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
        yield "    <div class=\"card mb-4\">
      <div class=\"card-body\">
        <div class=\"user-avatar-section\">
          <div class=\" d-flex align-items-center flex-column\">
           ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", true, true, false, 8) && CoreExtension::inFilter("ROLE_PATIENT", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "roles", [], "any", false, false, false, 8)))) {
            // line 9
            yield "            <img class=\"img-fluid rounded my-4\" src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/10.png"), "html", null, true);
            yield "\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">";
            // line 11
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "lastName", [], "any", false, false, false, 11), "html", null, true);
            yield "</h4>
              <span class=\"badge bg-label-secondary\">
                Patient
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Patient Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "phoneNumber", [], "any", false, false, false, 43), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Birth Date:</span>
              <span>";
            // line 47
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "birthDate", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>";
            // line 51
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 51)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 51), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Gender:</span>
              <span>";
            // line 55
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "gender", [], "any", false, false, false, 55)) ? ("Female") : ("Male"));
            yield "</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            ";
            // line 60
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
          </div>
        </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 63
($context["user"] ?? null), "roles", [], "any", true, true, false, 63) && CoreExtension::inFilter("ROLE_DOCTOR", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63)))) {
            // line 64
            yield "        <img class=\"img-fluid rounded my-4\" src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/10.png"), "html", null, true);
            yield "\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "firstName", [], "any", false, false, false, 66), "html", null, true);
            yield " ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "lastName", [], "any", false, false, false, 66), "html", null, true);
            yield "</h4>
              <span class=\"badge bg-label-secondary\">
                Doctor
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Doctor Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">";
            // line 94
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>";
            // line 98
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "phoneNumber", [], "any", false, false, false, 98), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Birth Date:</span>
              <span>";
            // line 102
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "birthDate", [], "any", false, false, false, 102), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>";
            // line 106
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 106)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 106), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Gender:</span>
              <span>";
            // line 110
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "gender", [], "any", false, false, false, 110)) ? ("Female") : ("Male"));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>";
            // line 114
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "address", [], "any", false, false, false, 114), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Speciality:</span>
              <span>";
            // line 118
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "speciality", [], "any", false, false, false, 118), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>";
            // line 122
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "certification", [], "any", false, false, false, 122), "html", null, true);
            yield "</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            ";
            // line 127
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
          </div>
        </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 130
($context["user"] ?? null), "roles", [], "any", true, true, false, 130) && CoreExtension::inFilter("ROLE_PHARMACY", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 130, $this->source); })()), "roles", [], "any", false, false, false, 130)))) {
            // line 131
            yield "        <img class=\"img-fluid rounded my-4\" src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/10.png"), "html", null, true);
            yield "\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">";
            // line 133
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "firstName", [], "any", false, false, false, 133), "html", null, true);
            yield "</h4>
              <span class=\"badge bg-label-secondary\">
                Pharmacy
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Pharmacy Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">";
            // line 161
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "email", [], "any", false, false, false, 161), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>";
            // line 165
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 165, $this->source); })()), "phoneNumber", [], "any", false, false, false, 165), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>";
            // line 169
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 169)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 169), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>";
            // line 173
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 173, $this->source); })()), "address", [], "any", false, false, false, 173), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Work day:</span>
              <span>";
            // line 177
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 177, $this->source); })()), "pharmacytype", [], "any", false, false, false, 177)) ? ("Night") : ("Day"));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>";
            // line 181
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 181, $this->source); })()), "certification", [], "any", false, false, false, 181), "html", null, true);
            yield "</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            ";
            // line 186
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
          </div>
        </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 189
($context["user"] ?? null), "roles", [], "any", true, true, false, 189) && CoreExtension::inFilter("ROLE_RADIOLOGY", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "roles", [], "any", false, false, false, 189)))) {
            // line 190
            yield "        <img class=\"img-fluid rounded my-4\" src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/10.png"), "html", null, true);
            yield "\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">";
            // line 192
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 192, $this->source); })()), "firstName", [], "any", false, false, false, 192), "html", null, true);
            yield "</h4>
              <span class=\"badge bg-label-secondary\">
                Radiology
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Pharmacy Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">";
            // line 220
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "email", [], "any", false, false, false, 220), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>";
            // line 224
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 224, $this->source); })()), "phoneNumber", [], "any", false, false, false, 224), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>";
            // line 228
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 228)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 228, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 228), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>";
            // line 232
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 232, $this->source); })()), "address", [], "any", false, false, false, 232), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Public or Private:</span>
              <span>";
            // line 236
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 236, $this->source); })()), "publicOrPrivate", [], "any", false, false, false, 236)) ? ("Private") : ("Public"));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>";
            // line 240
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 240, $this->source); })()), "certification", [], "any", false, false, false, 240), "html", null, true);
            yield "</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            ";
            // line 245
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
          </div>
        </div>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 248
($context["user"] ?? null), "roles", [], "any", true, true, false, 248) && CoreExtension::inFilter("ROLE_LAB", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 248, $this->source); })()), "roles", [], "any", false, false, false, 248)))) {
            // line 249
            yield "            <img class=\"img-fluid rounded my-4\" src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/10.png"), "html", null, true);
            yield "\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">";
            // line 251
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 251, $this->source); })()), "firstName", [], "any", false, false, false, 251), "html", null, true);
            yield "</h4>
              <span class=\"badge bg-label-secondary\">
                Laboratory                   
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Pharmacy Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">";
            // line 279
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 279, $this->source); })()), "email", [], "any", false, false, false, 279), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>";
            // line 283
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 283, $this->source); })()), "phoneNumber", [], "any", false, false, false, 283), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>";
            // line 287
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 287, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 287)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 287, $this->source); })()), "inscriptionDate", [], "any", false, false, false, 287), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>";
            // line 291
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 291, $this->source); })()), "address", [], "any", false, false, false, 291), "html", null, true);
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Public or Private:</span>
              <span>";
            // line 295
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 295, $this->source); })()), "publicOrPrivate", [], "any", false, false, false, 295)) ? ("Private") : ("Public"));
            yield "</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>";
            // line 299
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 299, $this->source); })()), "certification", [], "any", false, false, false, 299), "html", null, true);
            yield "</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            ";
            // line 304
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
          </div>
        </div>
        ";
        } else {
            // line 308
            yield "        No specific role
        <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            ";
            // line 311
            yield Twig\Extension\CoreExtension::include($this->env, $context, "user/_delete_form.html.twig");
            yield "
        </div>
        ";
        }
        // line 314
        yield "      </div>
    </div>

    ";
        // line 320
        yield "    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 324
    public function block_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 325
        yield "
";
        // line 326
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user/edit.html.twig");
        yield "

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
        return "user/show.html.twig";
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
        return array (  570 => 326,  567 => 325,  557 => 324,  544 => 320,  539 => 314,  533 => 311,  528 => 308,  521 => 304,  513 => 299,  506 => 295,  499 => 291,  492 => 287,  485 => 283,  478 => 279,  447 => 251,  441 => 249,  439 => 248,  433 => 245,  425 => 240,  418 => 236,  411 => 232,  404 => 228,  397 => 224,  390 => 220,  359 => 192,  353 => 190,  351 => 189,  345 => 186,  337 => 181,  330 => 177,  323 => 173,  316 => 169,  309 => 165,  302 => 161,  271 => 133,  265 => 131,  263 => 130,  257 => 127,  249 => 122,  242 => 118,  235 => 114,  228 => 110,  221 => 106,  214 => 102,  207 => 98,  200 => 94,  167 => 66,  161 => 64,  159 => 63,  153 => 60,  145 => 55,  138 => 51,  131 => 47,  124 => 43,  117 => 39,  84 => 11,  78 => 9,  76 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'account_details.html.twig' %}

{% block body %}
    <div class=\"card mb-4\">
      <div class=\"card-body\">
        <div class=\"user-avatar-section\">
          <div class=\" d-flex align-items-center flex-column\">
           {% if user.roles is defined and 'ROLE_PATIENT' in user.roles %}
            <img class=\"img-fluid rounded my-4\" src=\"{{asset('back/assets/img/avatars/10.png')}}\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">{{ user.firstName }} {{ user.lastName }}</h4>
              <span class=\"badge bg-label-secondary\">
                Patient
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Patient Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">{{ user.email }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>{{ user.phoneNumber }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Birth Date:</span>
              <span>{{ user.birthDate }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>{{ user.inscriptionDate ? user.inscriptionDate|date('Y-m-d H:i:s') : '' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Gender:</span>
              <span>{{ user.gender ? 'Female' : 'Male' }}</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            {{ include('user/_delete_form.html.twig') }}
          </div>
        </div>
        {% elseif user.roles is defined and 'ROLE_DOCTOR' in user.roles %}
        <img class=\"img-fluid rounded my-4\" src=\"{{asset('back/assets/img/avatars/10.png')}}\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">{{ user.firstName }} {{ user.lastName }}</h4>
              <span class=\"badge bg-label-secondary\">
                Doctor
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Doctor Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">{{ user.email }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>{{ user.phoneNumber }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Birth Date:</span>
              <span>{{ user.birthDate }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>{{ user.inscriptionDate ? user.inscriptionDate|date('Y-m-d H:i:s') : '' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Gender:</span>
              <span>{{ user.gender ? 'Female' : 'Male' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>{{ user.address }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Speciality:</span>
              <span>{{ user.speciality }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>{{ user.certification }}</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            {{ include('user/_delete_form.html.twig') }}
          </div>
        </div>
        {% elseif user.roles is defined and 'ROLE_PHARMACY' in user.roles %}
        <img class=\"img-fluid rounded my-4\" src=\"{{asset('back/assets/img/avatars/10.png')}}\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">{{ user.firstName }}</h4>
              <span class=\"badge bg-label-secondary\">
                Pharmacy
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Pharmacy Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">{{ user.email }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>{{ user.phoneNumber }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>{{ user.inscriptionDate ? user.inscriptionDate|date('Y-m-d H:i:s') : '' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>{{ user.address }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Work day:</span>
              <span>{{ user.pharmacytype ? 'Night' : 'Day' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>{{ user.certification }}</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            {{ include('user/_delete_form.html.twig') }}
          </div>
        </div>
        {% elseif user.roles is defined and 'ROLE_RADIOLOGY' in user.roles %}
        <img class=\"img-fluid rounded my-4\" src=\"{{asset('back/assets/img/avatars/10.png')}}\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">{{ user.firstName }}</h4>
              <span class=\"badge bg-label-secondary\">
                Radiology
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Pharmacy Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">{{ user.email }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>{{ user.phoneNumber }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>{{ user.inscriptionDate ? user.inscriptionDate|date('Y-m-d H:i:s') : '' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>{{ user.address }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Public or Private:</span>
              <span>{{ user.publicOrPrivate ? 'Private' : 'Public' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>{{ user.certification }}</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            {{ include('user/_delete_form.html.twig') }}
          </div>
        </div>
        {% elseif user.roles is defined and 'ROLE_LAB' in user.roles %}
            <img class=\"img-fluid rounded my-4\" src=\"{{asset('back/assets/img/avatars/10.png')}}\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">{{ user.firstName }}</h4>
              <span class=\"badge bg-label-secondary\">
                Laboratory                   
              </span>
            </div>
          </div>
        </div>
        <div class=\"d-flex justify-content-around flex-wrap my-4 py-3\">
          <div class=\"d-flex align-items-start me-4 mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class=\"d-flex align-items-start mt-3 gap-3\">
            <span class=\"badge bg-label-primary p-2 rounded\"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class=\"mb-0\">15</h5>
              <span>Consultations Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Pharmacy Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">{{ user.email }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>{{ user.phoneNumber }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Inscription Date:</span>
              <span>{{ user.inscriptionDate ? user.inscriptionDate|date('Y-m-d H:i:s') : '' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Address:</span>
              <span>{{ user.address }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Public or Private:</span>
              <span>{{ user.publicOrPrivate ? 'Private' : 'Public' }}</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Certification:</span>
              <span>{{ user.certification }}</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            {{ include('user/_delete_form.html.twig') }}
          </div>
        </div>
        {% else %}
        No specific role
        <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            {{ include('user/_delete_form.html.twig') }}
        </div>
        {% endif %}
      </div>
    </div>

    {# <a href=\"{{ path('app_user') }}\">back to list</a>

    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a> #}
    

{% endblock %}

{% block edit %}

{{ include('user/edit.html.twig') }}

{% endblock %}", "user/show.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\user\\show.html.twig");
    }
}
