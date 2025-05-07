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

/* user/index.html.twig */
class __TwigTemplate_4d406ce06c9ca8b0e60e129a0cbaadf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'notif' => [$this, 'block_notif'],
            'user' => [$this, 'block_user'],
            'table' => [$this, 'block_table'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "crud.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("crud.html.twig", "user/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_notif($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "notif"));

        // line 4
        yield "
        <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
            <i class=\"bx bx-bell bx-sm\"></i>
            <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end py-0\">
            <li class=\"dropdown-menu-header border-bottom\">
              <div class=\"dropdown-header d-flex align-items-center py-3\">
                <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                <a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark all as read\"><i class=\"bx fs-4 bx-envelope-open\"></i></a>
              </div>
            </li>
            ";
        // line 18
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 19
            yield "            <li class=\"dropdown-notifications-list scrollable-container\">
              <ul class=\"list-group list-group-flush\"> 
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-success\"><i class='bx bx-user'></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notif"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield " 🎉 </h6>
                      <p class=\"mb-0\">";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notif"], "message", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                      <small class=\"text-muted\">created at ";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["notif"], "creation_date", [], "any", false, false, false, 31), "Y-m-d H:i:s"), "html", null, true);
            yield "</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            ";
        // line 43
        yield "            <li class=\"dropdown-menu-footer border-top p-3\">
              <button class=\"btn btn-primary text-uppercase w-100\">view all notifications</button>
            </li>
          </ul>
        </li>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 51
    public function block_user($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "user"));

        // line 52
        yield "    <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <div class=\"avatar avatar-online\">
              <img src=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
            </div>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
                <div class=\"d-flex\">
                  <div class=\"flex-shrink-0 me-3\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                    </div>
                  </div>
                  <div class=\"flex-grow-1\">
                    <span class=\"fw-medium d-block\">
                                            ";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "firstname", [], "any", false, false, false, 69), "html", null, true);
        yield " ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "lastName", [], "any", false, false, false, 69), "html", null, true);
        yield "
                                          </span>
                    <small class=\"text-muted\">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class=\"dropdown-divider\"></div>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
                <i class=\"bx bx-user me-2\"></i>
                <span class=\"align-middle\">My Profile</span>
              </a>
            </li>
                        <li>
              <a class=\"dropdown-item\" href=\"../../pages/account-settings-billing.html\">
                <span class=\"d-flex align-items-center align-middle\">
                  <i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
                  <span class=\"flex-grow-1 align-middle\">Billing</span>
                  <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
                </span>
              </a>
            </li>
                          <li>
                <div class=\"dropdown-divider\"></div>
              </li>
                            <li>
                <a class=\"dropdown-item\" href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
                  <i class='bx bx-log-in me-2'></i>
                  <span class=\"align-middle\">Logout</span>
                </a>
              </li>
                          </ul>
          </li>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 108
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 109
        yield "
    <table class=\"datatables-users table border-top\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Roles</th>
                <th>PhoneNumber</th>
                <th>Inscription</th>
                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 122, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 123
            yield "            <tr>
                <td>";
            // line 124
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                
                ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", true, true, false, 126) && CoreExtension::inFilter("ROLE_PATIENT", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 126)))) {
                // line 127
                yield "                   <td class=\"\"> <span class=\"badge bg-label-primary me-1\">Patient</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 128
$context["user"], "roles", [], "any", true, true, false, 128) && CoreExtension::inFilter("ROLE_DOCTOR", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 128)))) {
                // line 129
                yield "                   <td><span class=\"badge bg-label-success me-1\">Doctor</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 130
$context["user"], "roles", [], "any", true, true, false, 130) && CoreExtension::inFilter("ROLE_PHARMACY", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 130)))) {
                // line 131
                yield "                   <td><span class=\"badge bg-label-info me-1\">Pharmacy</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["user"], "roles", [], "any", true, true, false, 132) && CoreExtension::inFilter("ROLE_RADIOLOGY", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 132)))) {
                // line 133
                yield "                   <td><span class=\"badge bg-label-warning me-1\"> Radiology</span>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 134
$context["user"], "roles", [], "any", true, true, false, 134) && CoreExtension::inFilter("ROLE_LAB", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 134)))) {
                // line 135
                yield "                   <td> <span class=\"badge bg-label-warning me-1\">Laboratory</span>
                ";
            } else {
                // line 137
                yield "                   <td> No specific role
                ";
            }
            // line 139
            yield "                </td>
                <td>";
            // line 140
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "phoneNumber", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
                ";
            // line 142
            yield "                <td>";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "inscriptionDate", [], "any", false, false, false, 142)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "inscriptionDate", [], "any", false, false, false, 142), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 143
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isbanned", [], "any", false, false, false, 143)) {
                yield "🛑";
            } else {
                yield "✔️";
            }
            yield "</td>
                <td>
                    <div class=\"d-inline-block text-nowrap\">
                        <button class=\"btn btn-sm btn-icon\"><a href=\"";
            // line 146
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\"><i class=\"bx bx-show-alt\"></i></a></button>
                        <button class=\"btn btn-sm btn-icon\"><a href=\"";
            // line 147
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ban_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\"><i class='bx bxs-user-x'></i></a></button>
                        <button class=\"btn btn-sm btn-icon\"><a href=\"";
            // line 148
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_unban_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\"><i class='bx bxs-user-plus'></i></a></button>                    
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 153
            yield "            <tr>
                <td colspan=\"16\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        yield "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 162
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 163
        yield "
    ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_start', ["attr" => ["class" => "add-new-user pt-0", "novalidate" => "novalidate"]]);
        yield "
        <div class=\"mb-3\">
          <label class=\"form-label\">First Name</label>
          ";
        // line 168
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "firstName", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "John"]]);
        yield "                         
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Last Name</label>
          ";
        // line 173
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "lastName", [], "any", false, false, false, 173), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Doe"]]);
        yield "
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Email</label>
          ";
        // line 178
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "email", [], "any", false, false, false, 178), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe@gmail.com"]]);
        yield "                                 
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Password</label>
          ";
        // line 183
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "password", [], "any", false, false, false, 183), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "············"]]);
        yield "                                 
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Phone Number</label>
          ";
        // line 188
        yield "          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "phoneNumber", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "98 765 245"]]);
        yield "                                 
        </div>
        <div class=\"mb-3\">
            ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "roles", [], "any", false, false, false, 191), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Roles"]);
        yield "
            ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "roles", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-select", "multiple" => "multiple", "aria-label" => "multiple select example"]]);
        yield "
        </div>


        <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1 data-submit\">Submit</button>
        <button type=\"reset\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"offcanvas\">Cancel</button>
    ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_end');
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
        return "user/index.html.twig";
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
        return array (  439 => 198,  430 => 192,  426 => 191,  419 => 188,  411 => 183,  403 => 178,  395 => 173,  387 => 168,  381 => 164,  378 => 163,  368 => 162,  354 => 157,  345 => 153,  335 => 148,  331 => 147,  327 => 146,  317 => 143,  312 => 142,  308 => 140,  305 => 139,  301 => 137,  297 => 135,  295 => 134,  292 => 133,  290 => 132,  287 => 131,  285 => 130,  282 => 129,  280 => 128,  277 => 127,  275 => 126,  270 => 124,  267 => 123,  262 => 122,  247 => 109,  237 => 108,  217 => 98,  183 => 69,  175 => 64,  163 => 55,  158 => 52,  148 => 51,  131 => 43,  129 => 42,  112 => 31,  108 => 30,  104 => 29,  92 => 19,  87 => 18,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'crud.html.twig' %}

{% block notif %}

        <li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
            <i class=\"bx bx-bell bx-sm\"></i>
            <span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end py-0\">
            <li class=\"dropdown-menu-header border-bottom\">
              <div class=\"dropdown-header d-flex align-items-center py-3\">
                <h5 class=\"text-body mb-0 me-auto\">Notification</h5>
                <a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark all as read\"><i class=\"bx fs-4 bx-envelope-open\"></i></a>
              </div>
            </li>
            {# notifications begins here #}
            {% for notif in notifications %}
            <li class=\"dropdown-notifications-list scrollable-container\">
              <ul class=\"list-group list-group-flush\"> 
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-success\"><i class='bx bx-user'></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">{{notif.title}} 🎉 </h6>
                      <p class=\"mb-0\">{{notif.message}}</p>
                      <small class=\"text-muted\">created at {{notif.creation_date|date('Y-m-d H:i:s')}}</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            {% endfor %}
            {# notifications ends here #}
            <li class=\"dropdown-menu-footer border-top p-3\">
              <button class=\"btn btn-primary text-uppercase w-100\">view all notifications</button>
            </li>
          </ul>
        </li>

{% endblock %}

{% block user %}
    <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <div class=\"avatar avatar-online\">
              <img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
            </div>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
                <div class=\"d-flex\">
                  <div class=\"flex-shrink-0 me-3\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                    </div>
                  </div>
                  <div class=\"flex-grow-1\">
                    <span class=\"fw-medium d-block\">
                                            {{app.user.firstname}} {{app.user.lastName}}
                                          </span>
                    <small class=\"text-muted\">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class=\"dropdown-divider\"></div>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
                <i class=\"bx bx-user me-2\"></i>
                <span class=\"align-middle\">My Profile</span>
              </a>
            </li>
                        <li>
              <a class=\"dropdown-item\" href=\"../../pages/account-settings-billing.html\">
                <span class=\"d-flex align-items-center align-middle\">
                  <i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
                  <span class=\"flex-grow-1 align-middle\">Billing</span>
                  <span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
                </span>
              </a>
            </li>
                          <li>
                <div class=\"dropdown-divider\"></div>
              </li>
                            <li>
                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">
                  <i class='bx bx-log-in me-2'></i>
                  <span class=\"align-middle\">Logout</span>
                </a>
              </li>
                          </ul>
          </li>

{% endblock %}

{% block table %}

    <table class=\"datatables-users table border-top\">
        <thead>
            <tr>
                <th>Email</th>
                <th>Roles</th>
                <th>PhoneNumber</th>
                <th>Inscription</th>
                <th>Status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.email }}</td>
                
                {% if user.roles is defined and 'ROLE_PATIENT' in user.roles %}
                   <td class=\"\"> <span class=\"badge bg-label-primary me-1\">Patient</span>
                {% elseif user.roles is defined and 'ROLE_DOCTOR' in user.roles %}
                   <td><span class=\"badge bg-label-success me-1\">Doctor</span>
                {% elseif user.roles is defined and 'ROLE_PHARMACY' in user.roles %}
                   <td><span class=\"badge bg-label-info me-1\">Pharmacy</span>
                {% elseif user.roles is defined and 'ROLE_RADIOLOGY' in user.roles %}
                   <td><span class=\"badge bg-label-warning me-1\"> Radiology</span>
                {% elseif user.roles is defined and 'ROLE_LAB' in user.roles %}
                   <td> <span class=\"badge bg-label-warning me-1\">Laboratory</span>
                {% else %}
                   <td> No specific role
                {% endif %}
                </td>
                <td>{{ user.phoneNumber }}</td>
                {# <td>{{ user.gender ? 'Yes' : 'No' }}</td> #}
                <td>{{ user.inscriptionDate ? user.inscriptionDate|date('Y-m-d H:i:s') : '' }}</td>
                <td>{% if user.isbanned %}🛑{% else %}✔️{% endif %}</td>
                <td>
                    <div class=\"d-inline-block text-nowrap\">
                        <button class=\"btn btn-sm btn-icon\"><a href=\"{{ path('app_user_show', {'id': user.id}) }}\"><i class=\"bx bx-show-alt\"></i></a></button>
                        <button class=\"btn btn-sm btn-icon\"><a href=\"{{ path('admin_ban_user', {'id': user.id}) }}\"><i class='bx bxs-user-x'></i></a></button>
                        <button class=\"btn btn-sm btn-icon\"><a href=\"{{ path('admin_unban_user', {'id': user.id}) }}\"><i class='bx bxs-user-plus'></i></a></button>                    
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"16\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}

{% block body %}

    {{ form_start(form,{'attr': {'class': 'add-new-user pt-0','novalidate':'novalidate'}}) }}
        <div class=\"mb-3\">
          <label class=\"form-label\">First Name</label>
          {# <input type=\"text\" class=\"form-control\" id=\"add-user-fullname\" placeholder=\"John Doe\" name=\"userFullname\" aria-label=\"John Doe\" /> #}
          {{ form_widget(form.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'John'} }) }}                         
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Last Name</label>
          {# <input type=\"text\" id=\"add-user-email\" class=\"form-control\" placeholder=\"john.doe@example.com\" aria-label=\"john.doe@example.com\" name=\"userEmail\" /> #}
          {{ form_widget(form.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Doe'} }) }}
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Email</label>
          {# <input type=\"text\" id=\"add-user-contact\" class=\"form-control phone-mask\" placeholder=\"+1 (609) 988-44-11\" aria-label=\"john.doe@example.com\" name=\"userContact\" /> #}
          {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe@gmail.com'} }) }}                                 
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Password</label>
          {# <input type=\"text\" id=\"add-user-company\" class=\"form-control\" placeholder=\"Web Developer\" aria-label=\"jdoe1\" name=\"companyName\" /> #}
          {{ form_widget(form.password, { 'attr': {'class': 'form-control', 'placeholder': '············'} }) }}                                 
        </div>
        <div class=\"mb-3\">
          <label class=\"form-label\">Phone Number</label>
          {# <input type=\"text\" id=\"add-user-company\" class=\"form-control\" placeholder=\"Web Developer\" aria-label=\"jdoe1\" name=\"companyName\" /> #}
          {{ form_widget(form.phoneNumber, { 'attr': {'class': 'form-control', 'placeholder': '98 765 245'} }) }}                                 
        </div>
        <div class=\"mb-3\">
            {{ form_label(form.roles, 'Roles', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(form.roles, {'attr': {'class': 'form-select', 'multiple': 'multiple', 'aria-label': 'multiple select example'}}) }}
        </div>


        <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1 data-submit\">Submit</button>
        <button type=\"reset\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"offcanvas\">Cancel</button>
    {{ form_end(form) }}

{% endblock %}
", "user/index.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\user\\index.html.twig");
    }
}
