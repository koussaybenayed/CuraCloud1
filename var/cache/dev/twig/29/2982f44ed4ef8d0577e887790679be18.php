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

/* registration/register.html.twig */
class __TwigTemplate_347ad5aa5717d13a021f2fdd38f20a85 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\" class=\"light-style   layout-menu-fixed     customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/\" data-base-url=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" data-framework=\"laravel\" data-template=\"blank-menu-theme-default-light\">

<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-basic by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:55:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>Register</title>
  <meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\" />
  <meta name=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
  <!-- laravel CRUD token -->
  <meta name=\"csrf-token\" content=\"0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn\">
  <!-- Canonical SEO -->
  <link rel=\"canonical\" href=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/"), "html", null, true);
        yield "\">
  <!-- Favicon -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/favicon/favicon.ico"), "html", null, true);
        yield "\" />

  
      <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->
    

  <!-- Include Styles -->
  <!-- \$isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel=\"preconnect\" href=\"";
        // line 46
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/"), "html", null, true);
        yield "\">
<link rel=\"preconnect\" href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.gstatic.com/"), "html", null, true);
        yield "\" crossorigin>
<link href=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"), "html", null, true);
        yield "\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d"), "html", null, true);
        yield "\" />
<!-- Core CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
<link rel=\"stylesheet\" href=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
<link rel=\"stylesheet\" href=\"";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d"), "html", null, true);
        yield "\" />
<!-- Vendors CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/flatpickr/flatpickr.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/dropzone/dropzone.css"), "html", null, true);
        yield "\" />
<!-- Vendor Styles -->
<!-- Vendor -->
<link rel=\"stylesheet\" href=\"";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css"), "html", null, true);
        yield "\" />


<!-- Page Styles -->
<!-- Page -->
<link rel=\"stylesheet\" href=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\">

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- \$isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src=\"";
        // line 74
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"";
        // line 81
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/config.js"), "html", null, true);
        yield "\"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultStyle: \"light\",
      defaultShowDropdownOnHover: \"true\", // true/false (for horizontal layout only)
      displayCustomizer: \"true\",
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
            'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',
          
          // Themes
                      'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
            'theme-default-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
                      'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
            'theme-bordered-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
                      'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
            'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': [\"rtl\",\"style\",\"headerType\",\"contentLayout\",\"layoutCollapsed\",\"layoutNavbarOptions\",\"themes\"],
    });
  </script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src=\"";
        // line 118
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"), "html", null, true);
        yield "\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  
<!-- Content -->
<div class=\"container-xxl\">
  <div class=\"authentication-wrapper authentication-basic container-p-y\">
    <div>

      <!-- Register Card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- Logo -->
          <div class=\"app-brand justify-content-center\">
            <a href=\"";
        // line 134
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"), "html", null, true);
        yield "\" class=\"app-brand-link gap-2\">
              <span class=\"app-brand-logo demo\"><i class='bx bxs-vial'></i></span>
              <span class=\"app-brand-text demo text-body fw-bold\">CuraCloud</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class=\"mb-2\">Adventure starts here 🚀</h4>
          <p class=\"mb-4\">Make your app management easy and fun!</p>
          <div id=\"formAuthentication\" class=\"mb-3\">
            <div class=\"nav-align-top mb-3\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-patient\" role=\"tab\" aria-selected=\"true\">Patient</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-doctor\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Doctor</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-pharmacy\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Pharmacy</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-radiology\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Radiology center</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-labcenter\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Lab Center</button>
                </li>
              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane fade active show\" id=\"form-tabs-patient\" role=\"tabpanel\">
                  ";
        // line 163
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 163, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-first-name\">First Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 169, $this->source); })()), "firstName", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "John"]]);
        yield "                         
                          </div>
                          ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 171, $this->source); })()), "firstName", [], "any", false, false, false, 171), 'errors');
        yield " 
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-last-name\">Last Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class='bx bx-id-card'></i></span>
                            ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 177, $this->source); })()), "lastName", [], "any", false, false, false, 177), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Doe"]]);
        yield "
                          </div>
                          ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 179, $this->source); })()), "lastName", [], "any", false, false, false, 179), 'errors');
        yield " 
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            ";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 186, $this->source); })()), "email", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe"]]);
        yield "                            
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                          ";
        // line 189
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "email", [], "any", false, false, false, 189), 'errors');
        yield " 
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            ";
        // line 198
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 198, $this->source); })()), "password", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "············"]]);
        yield "
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                          ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 201, $this->source); })()), "password", [], "any", false, false, false, 201), 'errors');
        yield "                          
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-birthdate\">Birth Date</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                          ";
        // line 209
        yield "                          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 209, $this->source); })()), "birthdate", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input birthdate-input", "placeholder" => "YYYY-MM-DD", "readonly" => "readonly"]]);
        yield "
                        </div>
                        ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 211, $this->source); })()), "birthdate", [], "any", false, false, false, 211), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            ";
        // line 218
        yield "                             ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 218, $this->source); })()), "phoneNumber", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "(+216) 98 765 243", "aria-label" => "98 765 243"]]);
        yield "
                          </div>
                          ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 220, $this->source); })()), "phoneNumber", [], "any", false, false, false, 220), 'errors');
        yield "
                      </div>
                            
                            <div class=\"col-md-6\">
                               <label class=\"form-check-label\">Gender</label>
                              <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 227, $this->source); })()), "gender", [], "any", false, false, false, 227), 0, [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "form-check-input", "checked" => "checked"]]);
        yield "
                                    <label for=\"";
        // line 228
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 228, $this->source); })()), "gender", [], "any", false, false, false, 228), 0, [], "any", false, false, false, 228), "vars", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228), "html", null, true);
        yield "\" class=\"form-check-label required\">Male</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 231, $this->source); })()), "gender", [], "any", false, false, false, 231), 1, [], "any", false, false, false, 231), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                    <label for=\"";
        // line 232
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 232, $this->source); })()), "gender", [], "any", false, false, false, 232), 1, [], "any", false, false, false, 232), "vars", [], "any", false, false, false, 232), "id", [], "any", false, false, false, 232), "html", null, true);
        yield "\" class=\"form-check-label required\">Female</label>
                                </div>
                              </div>                  
                            </div> 
                            <div class=\"col-md-6\">
                              <div class=\"row g-2\">
                                <div class=\"col-md-6\">
                                   ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 239, $this->source); })()), "captcha", [], "any", false, false, false, 239), 'widget');
        yield "  
                                </div>
                                <div class=\"col-md-5\">
                                   ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 242, $this->source); })()), "captcha", [], "any", false, false, false, 242), 'errors');
        yield "  
                                </div>                 
                              </div>
                            </div>  
                    </div>
                    <div class=\"pt-4\">
                      <input type=\"hidden\" name=\"registration_type\" value=\"patient\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  ";
        // line 252
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 252, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-doctor\" role=\"tabpanel\">
                  ";
        // line 255
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 255, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-first-name\">First Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 261, $this->source); })()), "firstName", [], "any", false, false, false, 261), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "John"]]);
        yield "                         
                          </div>
                          ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 263, $this->source); })()), "firstName", [], "any", false, false, false, 263), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-last-name\">Last Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class='bx bx-id-card'></i></span>
                            ";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 269, $this->source); })()), "lastName", [], "any", false, false, false, 269), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Doe"]]);
        yield "
                          </div>
                          ";
        // line 271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 271, $this->source); })()), "lastName", [], "any", false, false, false, 271), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            ";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 278, $this->source); })()), "email", [], "any", false, false, false, 278), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe"]]);
        yield "                            
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                          ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 281, $this->source); })()), "email", [], "any", false, false, false, 281), 'errors');
        yield "
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            ";
        // line 290
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 290, $this->source); })()), "password", [], "any", false, false, false, 290), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "············"]]);
        yield "
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        ";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 294, $this->source); })()), "password", [], "any", false, false, false, 294), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-birthdate\">Birth Date</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                          ";
        // line 301
        yield "                          ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 301, $this->source); })()), "birthdate", [], "any", false, false, false, 301), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input birthdate-input", "placeholder" => "YYYY-MM-DD", "readonly" => "readonly"]]);
        yield "
                        </div>
                        ";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 303, $this->source); })()), "birthdate", [], "any", false, false, false, 303), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            ";
        // line 310
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 310, $this->source); })()), "phoneNumber", [], "any", false, false, false, 310), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "(+216) 98 765 243", "aria-label" => "98 765 243"]]);
        yield "
                          </div>
                          ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 312, $this->source); })()), "phoneNumber", [], "any", false, false, false, 312), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            ";
        // line 319
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 319, $this->source); })()), "address", [], "any", false, false, false, 319), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ariana,Tunis"]]);
        yield "
                          </div>
                          ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 321, $this->source); })()), "address", [], "any", false, false, false, 321), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"collapsible-state\">Speciality</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-briefcase'></i></span>
                            ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 327, $this->source); })()), "speciality", [], "any", false, false, false, 327), 'widget', ["attr" => ["class" => "select2 form-select", "placeholder" => "select one job"]]);
        yield "
                          </div>
                          ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 329, $this->source); })()), "speciality", [], "any", false, false, false, 329), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 333, $this->source); })()), "certification", [], "any", false, false, false, 333), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-check-label\">Gender</label>
                        <div class=\"col mt-2\">
                          <div class=\"form-check form-check-inline\">
                            ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 339, $this->source); })()), "gender", [], "any", false, false, false, 339), 0, [], "any", false, false, false, 339), 'widget', ["attr" => ["class" => "form-check-input", "checked" => "checked"]]);
        yield "
                            <label for=\"";
        // line 340
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 340, $this->source); })()), "gender", [], "any", false, false, false, 340), 0, [], "any", false, false, false, 340), "vars", [], "any", false, false, false, 340), "id", [], "any", false, false, false, 340), "html", null, true);
        yield "\" class=\"form-check-label required\">Male</label>
                          </div>
                          <div class=\"form-check form-check-inline\">
                            ";
        // line 343
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 343, $this->source); })()), "gender", [], "any", false, false, false, 343), 1, [], "any", false, false, false, 343), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                            <label for=\"";
        // line 344
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 344, $this->source); })()), "gender", [], "any", false, false, false, 344), 1, [], "any", false, false, false, 344), "vars", [], "any", false, false, false, 344), "id", [], "any", false, false, false, 344), "html", null, true);
        yield "\" class=\"form-check-label required\">Female</label>
                          </div>
                        </div> 
                      </div>
                      <div class=\"mx-auto\" style=\"width:fit-content;\">
                        ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 349, $this->source); })()), "captcha", [], "any", false, false, false, 349), 'widget');
        yield "    
                        ";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 350, $this->source); })()), "captcha", [], "any", false, false, false, 350), 'errors');
        yield "                 
                      </div>  
                    </div>
                    <div class=\"pt-4\">
                      <input type=\"hidden\" name=\"registration_type\" value=\"doctor\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  ";
        // line 358
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm2"]) || array_key_exists("registrationForm2", $context) ? $context["registrationForm2"] : (function () { throw new RuntimeError('Variable "registrationForm2" does not exist.', 358, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-pharmacy\" role=\"tabpanel\">
                  ";
        // line 361
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 361, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            ";
        // line 369
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 369, $this->source); })()), "email", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe"]]);
        yield "
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                          ";
        // line 372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 372, $this->source); })()), "email", [], "any", false, false, false, 372), 'errors');
        yield "
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            ";
        // line 381
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 381, $this->source); })()), "password", [], "any", false, false, false, 381), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "············"]]);
        yield "
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        ";
        // line 385
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 385, $this->source); })()), "password", [], "any", false, false, false, 385), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Pharmacy name</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                           ";
        // line 391
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 391, $this->source); })()), "firstName", [], "any", false, false, false, 391), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input", "placeholder" => "joe pharmacy"]]);
        yield "
                          ";
        // line 393
        yield "                        </div>
                        ";
        // line 394
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 394, $this->source); })()), "firstName", [], "any", false, false, false, 394), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            ";
        // line 400
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 400, $this->source); })()), "phoneNumber", [], "any", false, false, false, 400), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "(+216) 98 765 243", "aria-label" => "98 765 243"]]);
        yield "
                            ";
        // line 402
        yield "                          </div>
                          ";
        // line 403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 403, $this->source); })()), "phoneNumber", [], "any", false, false, false, 403), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            ";
        // line 410
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 410, $this->source); })()), "address", [], "any", false, false, false, 410), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ariana,Tunis"]]);
        yield "                         
                          </div>
                          ";
        // line 412
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 412, $this->source); })()), "address", [], "any", false, false, false, 412), 'errors');
        yield "
                      </div>
                      
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        ";
        // line 418
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 418, $this->source); })()), "certification", [], "any", false, false, false, 418), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                      
                          <div class=\"col-md-6\">
                             <label class=\"form-check-label\">Work time</label>
                            <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 425
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 425, $this->source); })()), "pharmacytype", [], "any", false, false, false, 425), 0, [], "any", false, false, false, 425), 'widget', ["attr" => ["class" => "form-check-input", "checked" => "checked"]]);
        yield "
                                    <label for=\"";
        // line 426
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 426, $this->source); })()), "pharmacytype", [], "any", false, false, false, 426), 0, [], "any", false, false, false, 426), "vars", [], "any", false, false, false, 426), "id", [], "any", false, false, false, 426), "html", null, true);
        yield "\" class=\"form-check-label required\">Day</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 429
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 429, $this->source); })()), "pharmacytype", [], "any", false, false, false, 429), 1, [], "any", false, false, false, 429), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                    <label for=\"";
        // line 430
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 430, $this->source); })()), "pharmacytype", [], "any", false, false, false, 430), 1, [], "any", false, false, false, 430), "vars", [], "any", false, false, false, 430), "id", [], "any", false, false, false, 430), "html", null, true);
        yield "\" class=\"form-check-label required\">Night</label>
                                </div>
                            </div>                    
                          </div>  
                          <div class=\"col-md-6\">
                            ";
        // line 435
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 435, $this->source); })()), "captcha", [], "any", false, false, false, 435), 'widget');
        yield "    
                            ";
        // line 436
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 436, $this->source); })()), "captcha", [], "any", false, false, false, 436), 'errors');
        yield "                 
                          </div>  
                    </div>
                    <div class=\"pt-4\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  ";
        // line 443
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm3"]) || array_key_exists("registrationForm3", $context) ? $context["registrationForm3"] : (function () { throw new RuntimeError('Variable "registrationForm3" does not exist.', 443, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-radiology\" role=\"tabpanel\">
                  ";
        // line 446
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 446, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            ";
        // line 454
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 454, $this->source); })()), "email", [], "any", false, false, false, 454), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe"]]);
        yield "                            
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                        </div>
                        ";
        // line 458
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 458, $this->source); })()), "email", [], "any", false, false, false, 458), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            ";
        // line 466
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 466, $this->source); })()), "password", [], "any", false, false, false, 466), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "············"]]);
        yield "                           
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        ";
        // line 470
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 470, $this->source); })()), "password", [], "any", false, false, false, 470), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Radiology center name</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                          ";
        // line 477
        yield "                           ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 477, $this->source); })()), "firstName", [], "any", false, false, false, 477), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input", "placeholder" => "joe radiology center"]]);
        yield "
                        </div>
                        ";
        // line 479
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 479, $this->source); })()), "firstName", [], "any", false, false, false, 479), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            ";
        // line 486
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 486, $this->source); })()), "phoneNumber", [], "any", false, false, false, 486), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "(+216) 98 765 243", "aria-label" => "98 765 243"]]);
        yield "
                          </div>
                          ";
        // line 488
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 488, $this->source); })()), "phoneNumber", [], "any", false, false, false, 488), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            ";
        // line 495
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 495, $this->source); })()), "address", [], "any", false, false, false, 495), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ariana,Tunis"]]);
        yield "                         
                          </div>
                          ";
        // line 497
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 497, $this->source); })()), "address", [], "any", false, false, false, 497), 'errors');
        yield "
                      </div>
                      
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        ";
        // line 503
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 503, $this->source); })()), "certification", [], "any", false, false, false, 503), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-check-label\">center type</label>
                        <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 509
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 509, $this->source); })()), "public_or_private", [], "any", false, false, false, 509), 0, [], "any", false, false, false, 509), 'widget', ["attr" => ["class" => "form-check-input", "checked" => "checked"]]);
        yield "
                                    <label for=\"";
        // line 510
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 510, $this->source); })()), "public_or_private", [], "any", false, false, false, 510), 0, [], "any", false, false, false, 510), "vars", [], "any", false, false, false, 510), "id", [], "any", false, false, false, 510), "html", null, true);
        yield "\" class=\"form-check-label required\">Public</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 513
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 513, $this->source); })()), "public_or_private", [], "any", false, false, false, 513), 1, [], "any", false, false, false, 513), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                    <label for=\"";
        // line 514
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 514, $this->source); })()), "public_or_private", [], "any", false, false, false, 514), 1, [], "any", false, false, false, 514), "vars", [], "any", false, false, false, 514), "id", [], "any", false, false, false, 514), "html", null, true);
        yield "\" class=\"form-check-label required\">Private</label>
                                </div>
                        </div>
                      </div> 
                      <div class=\"col-md-6\">
                        ";
        // line 519
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 519, $this->source); })()), "captcha", [], "any", false, false, false, 519), 'widget');
        yield "                    
                        ";
        // line 520
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 520, $this->source); })()), "captcha", [], "any", false, false, false, 520), 'errors');
        yield " 
                      </div>  
                    </div>
                    <div class=\"pt-4\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  ";
        // line 527
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm4"]) || array_key_exists("registrationForm4", $context) ? $context["registrationForm4"] : (function () { throw new RuntimeError('Variable "registrationForm4" does not exist.', 527, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-labcenter\" role=\"tabpanel\">
                  ";
        // line 530
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 530, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            ";
        // line 538
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 538, $this->source); })()), "email", [], "any", false, false, false, 538), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "john.doe"]]);
        yield "                                                        
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                        </div>
                        ";
        // line 542
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 542, $this->source); })()), "email", [], "any", false, false, false, 542), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            ";
        // line 550
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 550, $this->source); })()), "password", [], "any", false, false, false, 550), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "············"]]);
        yield "                           
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        ";
        // line 554
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 554, $this->source); })()), "password", [], "any", false, false, false, 554), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Lab name</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                           ";
        // line 560
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 560, $this->source); })()), "firstName", [], "any", false, false, false, 560), 'widget', ["attr" => ["class" => "form-control dob-picker flatpickr-input", "placeholder" => "joe laboratory"]]);
        yield "
                          ";
        // line 562
        yield "                        </div>
                        ";
        // line 563
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 563, $this->source); })()), "firstName", [], "any", false, false, false, 563), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            ";
        // line 570
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 570, $this->source); })()), "phoneNumber", [], "any", false, false, false, 570), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "(+216) 98 765 243", "aria-label" => "98 765 243"]]);
        yield "                          
                          </div>
                          ";
        // line 572
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 572, $this->source); })()), "phoneNumber", [], "any", false, false, false, 572), 'errors');
        yield "
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            ";
        // line 578
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 578, $this->source); })()), "address", [], "any", false, false, false, 578), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ariana,Tunis"]]);
        yield "                         
                            ";
        // line 580
        yield "                          </div>
                          ";
        // line 581
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 581, $this->source); })()), "address", [], "any", false, false, false, 581), 'errors');
        yield "
                      </div>
                      
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        ";
        // line 586
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 586, $this->source); })()), "certification", [], "any", false, false, false, 586), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                        
                        ";
        // line 588
        yield "                    </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-check-label\">Lab type type</label>
                        <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 593
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 593, $this->source); })()), "public_or_private", [], "any", false, false, false, 593), 0, [], "any", false, false, false, 593), 'widget', ["attr" => ["class" => "form-check-input", "checked" => "checked"]]);
        yield "
                                    <label for=\"";
        // line 594
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 594, $this->source); })()), "public_or_private", [], "any", false, false, false, 594), 0, [], "any", false, false, false, 594), "vars", [], "any", false, false, false, 594), "id", [], "any", false, false, false, 594), "html", null, true);
        yield "\" class=\"form-check-label required\">Public</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    ";
        // line 597
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 597, $this->source); })()), "public_or_private", [], "any", false, false, false, 597), 1, [], "any", false, false, false, 597), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                    <label for=\"";
        // line 598
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 598, $this->source); })()), "public_or_private", [], "any", false, false, false, 598), 1, [], "any", false, false, false, 598), "vars", [], "any", false, false, false, 598), "id", [], "any", false, false, false, 598), "html", null, true);
        yield "\" class=\"form-check-label required\">Private</label>
                                </div>
                        </div>
                      </div> 
                      <div class=\"col-md-6\">
                        ";
        // line 603
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 603, $this->source); })()), "captcha", [], "any", false, false, false, 603), 'widget');
        yield "                    
                        ";
        // line 604
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 604, $this->source); })()), "captcha", [], "any", false, false, false, 604), 'errors');
        yield " 
                      </div> 
                    </div>
                    <div class=\"pt-4\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  ";
        // line 611
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm5"]) || array_key_exists("registrationForm5", $context) ? $context["registrationForm5"] : (function () { throw new RuntimeError('Variable "registrationForm5" does not exist.', 611, $this->source); })()), 'form_end');
        yield "
                </div>
              </div>
            </div>
          </div>

          <p class=\"text-center\">
            <span>Already have an account?</span>
            <a href=\"";
        // line 619
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
              <span>Sign in instead</span>
            </a>
          </p>

          <div class=\"divider my-4\">
            <div class=\"divider-text\">or</div>
          </div>

          <div class=\"d-flex justify-content-center\">
            <a href=\"\" class=\"btn btn-icon btn-label-facebook me-3\">
              <i class=\"tf-icons bx bxl-facebook\"></i>
            </a>

            <a href=\"";
        // line 633
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google_start");
        yield "\" class=\"btn btn-icon btn-label-google-plus me-3\">
              <i class=\"tf-icons bx bxl-google-plus\"></i>
            </a>

            <a href=\"\" class=\"btn btn-icon btn-label-twitter\">
              <i class=\"tf-icons bx bxl-twitter\"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
<!--/ Content -->

  <!--/ Layout Content -->
  

  <!-- Include Scripts -->
  <!-- \$isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 655
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 656
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 657
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 658
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 659
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 660
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 661
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 662
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 663
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 664
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 665
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 666
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/dropzone/dropzone.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 667
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/myjs.js"), "html", null, true);
        yield "\"></script>

<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src=\"back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b')}}\"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src=\"";
        // line 677
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/pages-auth.js"), "html", null, true);
        yield "\"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-basic by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:55:19 GMT -->
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
        return "registration/register.html.twig";
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
        return array (  1144 => 677,  1131 => 667,  1127 => 666,  1123 => 665,  1119 => 664,  1115 => 663,  1111 => 662,  1107 => 661,  1103 => 660,  1099 => 659,  1095 => 658,  1091 => 657,  1087 => 656,  1083 => 655,  1058 => 633,  1041 => 619,  1030 => 611,  1020 => 604,  1016 => 603,  1008 => 598,  1004 => 597,  998 => 594,  994 => 593,  987 => 588,  983 => 586,  975 => 581,  972 => 580,  968 => 578,  959 => 572,  953 => 570,  944 => 563,  941 => 562,  937 => 560,  928 => 554,  920 => 550,  910 => 542,  902 => 538,  892 => 530,  886 => 527,  876 => 520,  872 => 519,  864 => 514,  860 => 513,  854 => 510,  850 => 509,  840 => 503,  832 => 497,  826 => 495,  817 => 488,  811 => 486,  802 => 479,  796 => 477,  787 => 470,  779 => 466,  769 => 458,  761 => 454,  751 => 446,  745 => 443,  735 => 436,  731 => 435,  723 => 430,  719 => 429,  713 => 426,  709 => 425,  698 => 418,  690 => 412,  684 => 410,  675 => 403,  672 => 402,  668 => 400,  659 => 394,  656 => 393,  652 => 391,  643 => 385,  635 => 381,  624 => 372,  617 => 369,  607 => 361,  601 => 358,  590 => 350,  586 => 349,  578 => 344,  574 => 343,  568 => 340,  564 => 339,  555 => 333,  548 => 329,  543 => 327,  534 => 321,  528 => 319,  519 => 312,  513 => 310,  504 => 303,  498 => 301,  489 => 294,  481 => 290,  470 => 281,  464 => 278,  454 => 271,  449 => 269,  440 => 263,  435 => 261,  426 => 255,  420 => 252,  407 => 242,  401 => 239,  391 => 232,  387 => 231,  381 => 228,  377 => 227,  367 => 220,  361 => 218,  352 => 211,  346 => 209,  336 => 201,  329 => 198,  318 => 189,  312 => 186,  302 => 179,  297 => 177,  288 => 171,  283 => 169,  274 => 163,  242 => 134,  223 => 118,  183 => 81,  177 => 78,  170 => 74,  162 => 69,  154 => 64,  148 => 61,  144 => 60,  140 => 59,  136 => 58,  131 => 56,  127 => 55,  123 => 54,  118 => 52,  114 => 51,  110 => 50,  105 => 48,  101 => 47,  97 => 46,  67 => 19,  62 => 17,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\" class=\"light-style   layout-menu-fixed     customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/\" data-base-url=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" data-framework=\"laravel\" data-template=\"blank-menu-theme-default-light\">

<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-basic by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:55:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>Register</title>
  <meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\" />
  <meta name=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
  <!-- laravel CRUD token -->
  <meta name=\"csrf-token\" content=\"0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn\">
  <!-- Canonical SEO -->
  <link rel=\"canonical\" href=\"{{asset('https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/')}}\">
  <!-- Favicon -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{asset('back/assets/img/favicon/favicon.ico')}}\" />

  
      <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->
    

  <!-- Include Styles -->
  <!-- \$isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel=\"preconnect\" href=\"{{asset('https://fonts.googleapis.com/')}}\">
<link rel=\"preconnect\" href=\"{{asset('https://fonts.gstatic.com/')}}\" crossorigin>
<link href=\"{{asset('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap')}}\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d')}}\" />
<!-- Core CSS -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8')}}\" class=\"template-customizer-core-css\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1')}}\" class=\"template-customizer-theme-css\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d')}}\" />
<!-- Vendors CSS -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/flatpickr/flatpickr.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/dropzone/dropzone.css')}}\" />
<!-- Vendor Styles -->
<!-- Vendor -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css')}}\" />


<!-- Page Styles -->
<!-- Page -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/pages/page-auth.css')}}\">

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- \$isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src=\"{{asset('back/assets/vendor/js/helpers.js')}}\"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src=\"{{asset('back/assets/vendor/js/template-customizer.js')}}\"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"{{asset('back/assets/js/config.js')}}\"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultStyle: \"light\",
      defaultShowDropdownOnHover: \"true\", // true/false (for horizontal layout only)
      displayCustomizer: \"true\",
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
            'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',
          
          // Themes
                      'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
            'theme-default-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
                      'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
            'theme-bordered-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
                      'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
            'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': [\"rtl\",\"style\",\"headerType\",\"contentLayout\",\"layoutCollapsed\",\"layoutNavbarOptions\",\"themes\"],
    });
  </script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src=\"{{asset('https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP')}}\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  
<!-- Content -->
<div class=\"container-xxl\">
  <div class=\"authentication-wrapper authentication-basic container-p-y\">
    <div>

      <!-- Register Card -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- Logo -->
          <div class=\"app-brand justify-content-center\">
            <a href=\"{{asset('https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1')}}\" class=\"app-brand-link gap-2\">
              <span class=\"app-brand-logo demo\"><i class='bx bxs-vial'></i></span>
              <span class=\"app-brand-text demo text-body fw-bold\">CuraCloud</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class=\"mb-2\">Adventure starts here 🚀</h4>
          <p class=\"mb-4\">Make your app management easy and fun!</p>
          <div id=\"formAuthentication\" class=\"mb-3\">
            <div class=\"nav-align-top mb-3\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-patient\" role=\"tab\" aria-selected=\"true\">Patient</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-doctor\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Doctor</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-pharmacy\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Pharmacy</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-radiology\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Radiology center</button>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                  <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#form-tabs-labcenter\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">Lab Center</button>
                </li>
              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane fade active show\" id=\"form-tabs-patient\" role=\"tabpanel\">
                  {{ form_start(registrationForm,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-first-name\">First Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            {{ form_widget(registrationForm.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'John'} }) }}                         
                          </div>
                          {{ form_errors(registrationForm.firstName) }} 
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-last-name\">Last Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class='bx bx-id-card'></i></span>
                            {{ form_widget(registrationForm.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Doe'} }) }}
                          </div>
                          {{ form_errors(registrationForm.lastName) }} 
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe'} }) }}                            
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                          {{ form_errors(registrationForm.email) }} 
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            {# <input type=\"password\" id=\"formtabs-password\" class=\"form-control\" placeholder=\"············\" aria-describedby=\"formtabs-password2\" aria-autocomplete=\"list\"> #}
                            {{ form_widget(registrationForm.password, { 'attr': {'class': 'form-control', 'placeholder': '············'} }) }}
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                          {{ form_errors(registrationForm.password) }}                          
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-birthdate\">Birth Date</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                          {# <input type=\"text\" id=\"formtabs-birthdate\" class=\"form-control dob-picker flatpickr-input\" placeholder=\"YYYY-MM-DD\" readonly=\"readonly\"> #}
                          {{ form_widget(registrationForm.birthdate, { 'attr': {'class': 'form-control dob-picker flatpickr-input birthdate-input', 'placeholder': 'YYYY-MM-DD', 'readonly': 'readonly'} }) }}
                        </div>
                        {{ form_errors(registrationForm.birthdate) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-phone\" class=\"form-control phone-mask\" placeholder=\"(+216) 98 765 243\" aria-label=\"98 765 243\"> #}
                             {{ form_widget(registrationForm.phoneNumber, { 'attr': {'class': 'form-control phone-mask', 'placeholder': '(+216) 98 765 243', 'aria-label': '98 765 243'} }) }}
                          </div>
                          {{ form_errors(registrationForm.phoneNumber) }}
                      </div>
                            
                            <div class=\"col-md-6\">
                               <label class=\"form-check-label\">Gender</label>
                              <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm.gender.0, {'attr': {'class': 'form-check-input', 'checked': 'checked'}}) }}
                                    <label for=\"{{ registrationForm.gender.0.vars.id }}\" class=\"form-check-label required\">Male</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm.gender.1, {'attr': {'class': 'form-check-input'}}) }}
                                    <label for=\"{{ registrationForm.gender.1.vars.id }}\" class=\"form-check-label required\">Female</label>
                                </div>
                              </div>                  
                            </div> 
                            <div class=\"col-md-6\">
                              <div class=\"row g-2\">
                                <div class=\"col-md-6\">
                                   {{ form_widget(registrationForm.captcha) }}  
                                </div>
                                <div class=\"col-md-5\">
                                   {{ form_errors(registrationForm.captcha) }}  
                                </div>                 
                              </div>
                            </div>  
                    </div>
                    <div class=\"pt-4\">
                      <input type=\"hidden\" name=\"registration_type\" value=\"patient\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  {{ form_end(registrationForm) }}
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-doctor\" role=\"tabpanel\">
                  {{ form_start(registrationForm2,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-first-name\">First Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                            {{ form_widget(registrationForm2.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'John'} }) }}                         
                          </div>
                          {{ form_errors(registrationForm2.firstName) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-last-name\">Last Name</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-fullname2\" class=\"input-group-text\"><i class='bx bx-id-card'></i></span>
                            {{ form_widget(registrationForm2.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Doe'} }) }}
                          </div>
                          {{ form_errors(registrationForm2.lastName) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            {{ form_widget(registrationForm2.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe'} }) }}                            
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                          {{ form_errors(registrationForm2.email) }}
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            {# <input type=\"password\" id=\"formtabs-password\" class=\"form-control\" placeholder=\"············\" aria-describedby=\"formtabs-password2\" aria-autocomplete=\"list\"> #}
                            {{ form_widget(registrationForm2.password, { 'attr': {'class': 'form-control', 'placeholder': '············'} }) }}
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        {{ form_errors(registrationForm2.password) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-birthdate\">Birth Date</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                          {# <input type=\"text\" id=\"formtabs-birthdate\" class=\"form-control dob-picker flatpickr-input\" placeholder=\"YYYY-MM-DD\" readonly=\"readonly\"> #}
                          {{ form_widget(registrationForm2.birthdate, { 'attr': {'class': 'form-control dob-picker flatpickr-input birthdate-input', 'placeholder': 'YYYY-MM-DD', 'readonly': 'readonly'} }) }}
                        </div>
                        {{ form_errors(registrationForm2.birthdate) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-phone\" class=\"form-control phone-mask\" placeholder=\"(+216) 98 765 243\" aria-label=\"98 765 243\"> #}
                            {{ form_widget(registrationForm2.phoneNumber, { 'attr': {'class': 'form-control phone-mask', 'placeholder': '(+216) 98 765 243', 'aria-label': '98 765 243'} }) }}
                          </div>
                          {{ form_errors(registrationForm2.phoneNumber) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            {# <input type=\"text\" class=\"form-control\" placeholder=\"Ariana,Tunis\">#}
                            {{ form_widget(registrationForm2.address, { 'attr': {'class': 'form-control', 'placeholder': 'Ariana,Tunis'} }) }}
                          </div>
                          {{ form_errors(registrationForm2.address) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"collapsible-state\">Speciality</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-briefcase'></i></span>
                            {{ form_widget(registrationForm2.speciality, { 'attr': {'class': 'select2 form-select', 'placeholder': 'select one job'} }) }}
                          </div>
                          {{ form_errors(registrationForm2.speciality) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        {{ form_widget(registrationForm2.certification, { 'attr': {'class': 'form-control'} }) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-check-label\">Gender</label>
                        <div class=\"col mt-2\">
                          <div class=\"form-check form-check-inline\">
                            {{ form_widget(registrationForm2.gender.0, {'attr': {'class': 'form-check-input', 'checked': 'checked'}}) }}
                            <label for=\"{{ registrationForm2.gender.0.vars.id }}\" class=\"form-check-label required\">Male</label>
                          </div>
                          <div class=\"form-check form-check-inline\">
                            {{ form_widget(registrationForm2.gender.1, {'attr': {'class': 'form-check-input'}}) }}
                            <label for=\"{{ registrationForm2.gender.1.vars.id }}\" class=\"form-check-label required\">Female</label>
                          </div>
                        </div> 
                      </div>
                      <div class=\"mx-auto\" style=\"width:fit-content;\">
                        {{ form_widget(registrationForm2.captcha) }}    
                        {{ form_errors(registrationForm2.captcha) }}                 
                      </div>  
                    </div>
                    <div class=\"pt-4\">
                      <input type=\"hidden\" name=\"registration_type\" value=\"doctor\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  {{ form_end(registrationForm2) }}
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-pharmacy\" role=\"tabpanel\">
                  {{ form_start(registrationForm3,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-email\" class=\"form-control\" placeholder=\"john.doe\" aria-label=\"john.doe\" aria-describedby=\"formtabs-email2\"> #}
                            {{ form_widget(registrationForm3.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe'} }) }}
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                          {{ form_errors(registrationForm3.email) }}
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            {# <input type=\"password\" id=\"formtabs-password\" class=\"form-control\" placeholder=\"············\" aria-describedby=\"formtabs-password2\" aria-autocomplete=\"list\"> #}
                            {{ form_widget(registrationForm3.password, { 'attr': {'class': 'form-control', 'placeholder': '············'} }) }}
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        {{ form_errors(registrationForm3.password) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Pharmacy name</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                           {{ form_widget(registrationForm3.firstName, { 'attr': {'class': 'form-control dob-picker flatpickr-input', 'placeholder': 'joe pharmacy'} }) }}
                          {# <input type=\"text\" id=\"formtabs-first-name\" class=\"form-control dob-picker flatpickr-input\" placeholder=\"joe pharmacy\"> #}
                        </div>
                        {{ form_errors(registrationForm3.firstName) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            {{ form_widget(registrationForm3.phoneNumber, { 'attr': {'class': 'form-control phone-mask', 'placeholder': '(+216) 98 765 243', 'aria-label': '98 765 243'} }) }}
                            {# <input type=\"text\" id=\"formtabs-phone\" class=\"form-control phone-mask\" placeholder=\"(+216) 98 765 243\" aria-label=\"98 765 243\"> #}
                          </div>
                          {{ form_errors(registrationForm3.phoneNumber) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            {# <input type=\"text\" class=\"form-control\" placeholder=\"Ariana,Tunis\">  #}
                            {{ form_widget(registrationForm3.address, { 'attr': {'class': 'form-control', 'placeholder': 'Ariana,Tunis'} }) }}                         
                          </div>
                          {{ form_errors(registrationForm3.address) }}
                      </div>
                      
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        {# <input class=\"form-control\" type=\"file\" id=\"formFile\"> #}
                        {{ form_widget(registrationForm3.certification, { 'attr': {'class': 'form-control'} }) }}
                    </div>
                      
                          <div class=\"col-md-6\">
                             <label class=\"form-check-label\">Work time</label>
                            <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm3.pharmacytype.0, {'attr': {'class': 'form-check-input', 'checked': 'checked'}}) }}
                                    <label for=\"{{ registrationForm3.pharmacytype.0.vars.id }}\" class=\"form-check-label required\">Day</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm3.pharmacytype.1, {'attr': {'class': 'form-check-input'}}) }}
                                    <label for=\"{{ registrationForm3.pharmacytype.1.vars.id }}\" class=\"form-check-label required\">Night</label>
                                </div>
                            </div>                    
                          </div>  
                          <div class=\"col-md-6\">
                            {{ form_widget(registrationForm3.captcha) }}    
                            {{ form_errors(registrationForm3.captcha) }}                 
                          </div>  
                    </div>
                    <div class=\"pt-4\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  {{ form_end(registrationForm3) }}
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-radiology\" role=\"tabpanel\">
                  {{ form_start(registrationForm4,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-email\" class=\"form-control\" placeholder=\"john.doe\" aria-label=\"john.doe\" aria-describedby=\"formtabs-email2\"> #}
                            {{ form_widget(registrationForm4.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe'} }) }}                            
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                        </div>
                        {{ form_errors(registrationForm4.email) }}
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            {# <input type=\"password\" id=\"formtabs-password\" class=\"form-control\" placeholder=\"············\" aria-describedby=\"formtabs-password2\" aria-autocomplete=\"list\"> #}
                            {{ form_widget(registrationForm4.password, { 'attr': {'class': 'form-control', 'placeholder': '············'} }) }}                           
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        {{ form_errors(registrationForm4.password) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Radiology center name</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                          {# <input type=\"text\" id=\"formtabs-first-name\" class=\"form-control dob-picker flatpickr-input\" placeholder=\"joe radiology center\"> #}
                           {{ form_widget(registrationForm4.firstName, { 'attr': {'class': 'form-control dob-picker flatpickr-input', 'placeholder': 'joe radiology center'} }) }}
                        </div>
                        {{ form_errors(registrationForm4.firstName) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-phone\" class=\"form-control phone-mask\" placeholder=\"(+216) 98 765 243\" aria-label=\"98 765 243\"> #}
                            {{ form_widget(registrationForm4.phoneNumber, { 'attr': {'class': 'form-control phone-mask', 'placeholder': '(+216) 98 765 243', 'aria-label': '98 765 243'} }) }}
                          </div>
                          {{ form_errors(registrationForm4.phoneNumber) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            {# <input type=\"text\" class=\"form-control\" placeholder=\"Ariana,Tunis\">  #}
                            {{ form_widget(registrationForm4.address, { 'attr': {'class': 'form-control', 'placeholder': 'Ariana,Tunis'} }) }}                         
                          </div>
                          {{ form_errors(registrationForm4.address) }}
                      </div>
                      
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        {# <input class=\"form-control\" type=\"file\" id=\"formFile\"> #}
                        {{ form_widget(registrationForm4.certification, { 'attr': {'class': 'form-control'} }) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-check-label\">center type</label>
                        <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm4.public_or_private.0, {'attr': {'class': 'form-check-input', 'checked': 'checked'}}) }}
                                    <label for=\"{{ registrationForm4.public_or_private.0.vars.id }}\" class=\"form-check-label required\">Public</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm4.public_or_private.1, {'attr': {'class': 'form-check-input'}}) }}
                                    <label for=\"{{ registrationForm4.public_or_private.1.vars.id }}\" class=\"form-check-label required\">Private</label>
                                </div>
                        </div>
                      </div> 
                      <div class=\"col-md-6\">
                        {{ form_widget(registrationForm4.captcha) }}                    
                        {{ form_errors(registrationForm4.captcha) }} 
                      </div>  
                    </div>
                    <div class=\"pt-4\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  {{ form_end(registrationForm4) }}
                </div>
                <div class=\"tab-pane fade\" id=\"form-tabs-labcenter\" role=\"tabpanel\">
                  {{ form_start(registrationForm5,{'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row g-3\">
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-email\">Email</label>
                        <div class=\"input-group input-group-merge\">
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-email\" class=\"form-control\" placeholder=\"john.doe\" aria-label=\"john.doe\" aria-describedby=\"formtabs-email2\"> #}
                            {{ form_widget(registrationForm5.email, { 'attr': {'class': 'form-control', 'placeholder': 'john.doe'} }) }}                                                        
                            <span class=\"input-group-text\" id=\"formtabs-email2\">@example.com</span>
                          </div>
                        </div>
                        {{ form_errors(registrationForm5.email) }}
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-password-toggle\">
                          <label class=\"form-label\" for=\"formtabs-password\">Password</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-lock-alt'></i></span>
                            {# <input type=\"password\" id=\"formtabs-password\" class=\"form-control\" placeholder=\"············\" aria-describedby=\"formtabs-password2\" aria-autocomplete=\"list\"> #}
                            {{ form_widget(registrationForm5.password, { 'attr': {'class': 'form-control', 'placeholder': '············'} }) }}                           
                            <span class=\"input-group-text cursor-pointer\" id=\"formtabs-password2\"><i class=\"bx bx-hide\"></i></span>
                          </div>
                        </div>
                        {{ form_errors(registrationForm5.password) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Lab name</label>
                        <div class=\"input-group input-group-merge\">
                          <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                           {{ form_widget(registrationForm5.firstName, { 'attr': {'class': 'form-control dob-picker flatpickr-input', 'placeholder': 'joe laboratory'} }) }}
                          {# <input type=\"text\" id=\"formtabs-first-name\" class=\"form-control dob-picker flatpickr-input\" placeholder=\"joe laboratory\"> #}
                        </div>
                        {{ form_errors(registrationForm5.firstName) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\" for=\"formtabs-phone\">Phone No</label>
                          <div class=\"input-group input-group-merge\">
                            <span id=\"basic-icon-default-phone2\" class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                            {# <input type=\"text\" id=\"formtabs-phone\" class=\"form-control phone-mask\" placeholder=\"(+216) 98 765 243\" aria-label=\"98 765 243\"> #}
                            {{ form_widget(registrationForm5.phoneNumber, { 'attr': {'class': 'form-control phone-mask', 'placeholder': '(+216) 98 765 243', 'aria-label': '98 765 243'} }) }}                          
                          </div>
                          {{ form_errors(registrationForm5.phoneNumber) }}
                      </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-label\">Address</label>
                          <div class=\"input-group input-group-merge\">
                            <span class=\"input-group-text\"><i class='bx bx-buildings'></i></span>
                            {{ form_widget(registrationForm5.address, { 'attr': {'class': 'form-control', 'placeholder': 'Ariana,Tunis'} }) }}                         
                            {# <input type=\"text\" class=\"form-control\" placeholder=\"Ariana,Tunis\">  #}
                          </div>
                          {{ form_errors(registrationForm5.address) }}
                      </div>
                      
                      <div class=\"col-md-6\">
                        <label for=\"formFile\" class=\"form-label\">Certification</label>
                        {{ form_widget(registrationForm5.certification, { 'attr': {'class': 'form-control'} }) }}                        
                        {# <input class=\"form-control\" type=\"file\" id=\"formFile\"> #}
                    </div>
                      <div class=\"col-md-6\">
                        <label class=\"form-check-label\">Lab type type</label>
                        <div class=\"col mt-2\">
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm5.public_or_private.0, {'attr': {'class': 'form-check-input', 'checked': 'checked'}}) }}
                                    <label for=\"{{ registrationForm5.public_or_private.0.vars.id }}\" class=\"form-check-label required\">Public</label>
                                </div>
                                <div class=\"form-check form-check-inline\">
                                    {{ form_widget(registrationForm5.public_or_private.1, {'attr': {'class': 'form-check-input'}}) }}
                                    <label for=\"{{ registrationForm5.public_or_private.1.vars.id }}\" class=\"form-check-label required\">Private</label>
                                </div>
                        </div>
                      </div> 
                      <div class=\"col-md-6\">
                        {{ form_widget(registrationForm5.captcha) }}                    
                        {{ form_errors(registrationForm5.captcha) }} 
                      </div> 
                    </div>
                    <div class=\"pt-4\">
                      <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
                      <button type=\"reset\" class=\"btn btn-label-secondary\">Cancel</button>
                    </div>
                  {{ form_end(registrationForm5) }}
                </div>
              </div>
            </div>
          </div>

          <p class=\"text-center\">
            <span>Already have an account?</span>
            <a href=\"{{path('app_login')}}\">
              <span>Sign in instead</span>
            </a>
          </p>

          <div class=\"divider my-4\">
            <div class=\"divider-text\">or</div>
          </div>

          <div class=\"d-flex justify-content-center\">
            <a href=\"\" class=\"btn btn-icon btn-label-facebook me-3\">
              <i class=\"tf-icons bx bxl-facebook\"></i>
            </a>

            <a href=\"{{path('connect_google_start')}}\" class=\"btn btn-icon btn-label-google-plus me-3\">
              <i class=\"tf-icons bx bxl-google-plus\"></i>
            </a>

            <a href=\"\" class=\"btn btn-icon btn-label-twitter\">
              <i class=\"tf-icons bx bxl-twitter\"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>
<!--/ Content -->

  <!--/ Layout Content -->
  

  <!-- Include Scripts -->
  <!-- \$isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src=\"{{asset('back/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c')}}\"></script>
<script src=\"{{asset('back/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6')}}\"></script>
<script src=\"{{asset('back/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/flatpickr/flatpickr.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/dropzone/dropzone.js')}}\"></script>
<script src=\"{{asset('back/js/myjs.js')}}\"></script>

<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src=\"back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b')}}\"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src=\"{{asset('back/assets/js/pages-auth.js')}}\"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/register-basic by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:55:19 GMT -->
</html>", "registration/register.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\registration\\register.html.twig");
    }
}
