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

/* BaseBack.html.twig */
class __TwigTemplate_c7d0be58b30e1856fc13685352f362f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'table' => [$this, 'block_table'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BaseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BaseBack.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\" class=\"light-style layout-compact layout-navbar-fixed layout-menu-fixed     \" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/\" data-base-url=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" data-framework=\"laravel\" data-template=\"vertical-menu-theme-default-light\">
\t<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/list by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:54:43 GMT -->
\t<!-- Added by HTTrack -->
\t<meta
\thttp-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/> <!-- /Added by HTTrack -->
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"/>

\t\t<title>CuraCloud</title>
\t\t<meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\"/>
\t\t<meta
\t\tname=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
\t\t<!-- Canonical SEO -->
\t\t<link
\t\trel=\"canonical\" href=\"https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/\">
\t\t<!-- Favicon -->
\t\t<link
\t\trel=\"icon\" type=\"image/x-icon\" href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico\"/>


\t\t<!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
\t\t<script>
\t\t\t(function (w, d, s, l, i) {
w[l] = w[l] || [];
w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
var f = d.getElementsByTagName(s)[0],
j = d.createElement(s),
dl = l != 'dataLayer' ? '&l=' + l : '';
j.async = true;
j.src = '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
\t\t</script>
\t\t<!-- End Google Tag Manager -->


\t\t<!-- Include Styles -->
\t\t<!-- \$isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
\t\t<!-- BEGIN: Theme CSS-->
\t\t<!-- Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\"> <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da"), "html", null, true);
        yield "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5"), "html", null, true);
        yield "\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d"), "html", null, true);
        yield "\"/>
\t\t<!-- Core CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d"), "html", null, true);
        yield "\"/>
\t\t<!-- Vendors CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b"), "html", null, true);
        yield "\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd"), "html", null, true);
        yield "\"/>

\t\t<!-- Vendor Styles -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 63
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/select2/select2.css"), "html", null, true);
        yield "\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css"), "html", null, true);
        yield "\"/><!-- Page 
    Styles -->

\t\t<!-- Include Scripts for customizer, helper, analytics, config -->
\t\t<!-- \$isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
\t\t<!-- laravel style --><script src=\"";
        // line 71
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"> </script>
\t\t<!-- beautify ignore:start -->
\t\t<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
\t\t<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  --><script src=\"";
        // line 74
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/template-customizer.js"), "html", null, true);
        yield "\"> </script>

\t\t<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
\t\t<script src=\"";
        // line 77
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/config.js"), "html", null, true);
        yield "\"></script>

\t\t<script>
\t\t\twindow.templateCustomizer = new TemplateCustomizer({
cssPath: '',
themesPath: '',
defaultStyle: \"light\",
defaultShowDropdownOnHover: \"true\", // true/false (for horizontal layout only)
displayCustomizer: \"true\",
lang: 'en',
pathResolver: function (path) {
var resolvedPaths = {
// Core stylesheets
'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',

// Themes
'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
'theme-default-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
'theme-bordered-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
'theme-semi-dark-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51'
}
return resolvedPaths[path] || path;
},
'controls': [
\"rtl\",
\"style\",
\"headerType\",
\"contentLayout\",
\"layoutCollapsed\",
\"layoutNavbarOptions\",
\"themes\"
]
});
\t\t</script>
\t</head>

\t<body>

\t\t<!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
\t\t<noscript>
\t\t\t<iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe>
\t\t</noscript>
\t\t<!-- End Google Tag Manager (noscript) -->


\t\t<!-- Layout Content -->
\t\t<div class=\"layout-wrapper layout-content-navbar \">
\t\t\t<div class=\"layout-container\">

\t\t\t\t<aside
\t\t\t\t\tid=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

\t\t\t\t\t<!-- ! Hide app brand if navbar-full -->
\t\t\t\t\t<div class=\"app-brand demo\">
\t\t\t\t\t\t  <a href=\"landing.html\" class=\"app-brand-link\">
    <span class=\"app-brand-logo demo\">
        <img src=\"";
        // line 136
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blogs/LOGO-65ea2b987652d.png"), "html", null, true);
        yield "\" alt=\"Your Logo\" width=\"50\">
    </span>
</a>
\t\t\t\t\t\t\t\t\t<g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
\t\t\t\t\t\t\t\t\t\t\t<g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<mask id=\"mask-2\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"#path-1\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-1\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Path-3\" mask=\"url(#mask-2)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-3\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Path-4\" mask=\"url(#mask-2)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-4\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-5\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"app-brand-text demo menu-text fw-bold ms-2\">CuraCloud</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
\t\t\t\t\t\t\t<i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"menu-inner-shadow\"></div>

\t\t\t\t\t<ul class=\"menu-inner py-1\">
<!-- User Dropdown -->
<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon bx bx-user\"></i> <!-- User icon -->
        <div class=\"text-truncate\">User</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        yield "\" class=\"menu-link\">
                <div>Users List</div>
            </a>
        </li>
    </ul>
</li>

\t\t\t\t<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
<i class='menu-icon bx bx-calendar-alt'></i>
        <div class=\"text-truncate\">Patient Portal</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_appointment_index");
        yield "\" class=\"menu-link\">
                <div>Appointments</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_medical_record_index");
        yield "\" class=\"menu-link\">
                <div>Medical Record</div>
            </a>
        </li>
    </ul>
</li>

<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
<i class='menu-icon bx bx-test-tube'></i>   

        <div class=\"text-truncate\">Laboratory</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bilan_index2");
        yield "\" class=\"menu-link\">
                <div>Bilan</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_diagnostic_request_index2");
        yield "\" class=\"menu-link\">
                <div>Diagnostic request</div>
            </a>
        </li>
    </ul>
</li>

<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
<i class='menu-icon bx bxs-capsule'></i>
        <div class=\"text-truncate\">Pharmacy</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_prescription_index");
        yield "\" class=\"menu-link\">
                <div>Prescriptions</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_meds_index");
        yield "\" class=\"menu-link\">
                <div>Medications</div>
            </a>
        </li>
    </ul>
</li>



<!-- Blog Dropdown -->
<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon bx bx-book\"></i> <!-- Blog icon -->
        <div class=\"text-truncate\">Blog</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_app_blog_index");
        yield "\" class=\"menu-link\">
                <div>Blogs list</div>
            </a>
        </li>
        ";
        // line 268
        yield "    </ul>
</li>



\t\t\t\t\t\t\t\t\t</aside>


\t\t\t\t\t\t\t\t\t<!-- Layout page -->
\t\t\t\t\t\t\t\t\t<div class=\"layout-page\">


\t\t\t\t\t\t\t\t\t\t<!-- BEGIN: Navbar-->
\t\t\t\t\t\t\t\t\t\t<!-- Navbar -->
\t\t\t\t\t\t\t\t\t\t\t<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\"> <!--  Brand demo (display only for navbar-full and hide on below xl) -->

\t\t\t\t\t\t\t\t\t\t\t<!-- ! Not required for layout-without-menu -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none \"> <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-menu bx-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-nav align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-item navbar-search-wrapper mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-item nav-link search-toggler px-0\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-search bx-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Search -->

\t\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"navbar-nav flex-row align-items-center ms-auto\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Language -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-globe bx-sm'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item active\" href=\"list.html\" data-language=\"en\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">English</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item \" href=\"list.html\" data-language=\"fr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">French</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item \" href=\"list.html\" data-language=\"de\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">German</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item \" href=\"list.html\" data-language=\"pt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Portuguese</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ Language -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Quick links  -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-grid-alt bx-sm'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-shortcuts-add text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Add shortcuts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-sm bx-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-list scrollable-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-calendar fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../calendar.html\" class=\"stretched-link\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Appointments</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-food-menu fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../invoice/list.html\" class=\"stretched-link\">Invoice App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Manage Accounts</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"list.html\" class=\"stretched-link\">User App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Manage Users</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-check-shield fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../access-roles.html\" class=\"stretched-link\">Role Management</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Permission</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-pie-chart-alt-2 fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"stretched-link\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">User Profile</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-cog fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../pages/account-settings-account.html\" class=\"stretched-link\">Setting</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Account Settings</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-help-circle fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../pages/faq.html\" class=\"stretched-link\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">FAQs & Articles</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-window-open fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../modal-examples.html\" class=\"stretched-link\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Useful Popups</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Quick links -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Style Switcher -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-style-switcher dropdown me-2 me-xl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-sm'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-styles\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-sun me-2'></i>Light</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-moon me-2\"></i>Dark</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"system\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-desktop me-2\"></i>System</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ Style Switcher -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Notification -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-bell bx-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-header border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-body mb-0 me-auto\">Notification</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark all as read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx fs-4 bx-envelope-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-notifications-list scrollable-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 470
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Won the monthly best seller gold badge</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1h ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Charles Franklin</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Accepted your connection</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">12hr ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 514
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/2.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New Message ✉️</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">You have new message from Natalie</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1h ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Whoo! You have new order 🛒
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1 day ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 561
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/9.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Application has been approved 🚀
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Your ABC project application has been approved.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">2 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-pie-chart-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Monthly report is generated</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">July monthly financial report is generated
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">3 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 609
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/5.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Send connection request</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Peter sent you connection request</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">4 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 631
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/6.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New message from Jane</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Your have new message from Jane</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">5 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-error\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">CPU is running high</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">5 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-footer border-top p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-uppercase w-100\">view all notifications</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ Notification -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- User -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-online\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 686
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-online\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 695
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-medium d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Admin</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">My Profile</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"../../pages/account-settings-billing.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flex-grow-1 align-middle\">Billing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
                              
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 730
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-log-in me-2'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Logout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ User -->
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Search Small Screens -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-search-wrapper search-input-wrapper  d-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control search-input container-xxl border-0\" placeholder=\"Search...\" aria-label=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-x bx-sm search-toggler cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t<!-- / Navbar -->
\t\t\t\t\t\t\t\t\t\t<!-- END: Navbar-->


\t\t\t\t\t\t\t\t\t\t<!-- Content wrapper -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"content-wrapper\"> <!-- Content -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"container-xxl flex-grow-1 container-p-y\">


\t\t\t\t\t\t\t\t\t\t\t\t<!-- Users List Table -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-datatable table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper dt-bootstrap5 no-footer\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 765
        yield from $this->unwrap()->yieldBlock('table', $context, $blocks);
        // line 816
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 817
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Offcanvas to add new user -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasAddUser\" aria-labelledby=\"offcanvasAddUserLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 id=\"offcanvasAddUserLabel\" class=\"offcanvas-title\">Add User</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-body mx-0 flex-grow-0\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- / Content -->

\t\t\t\t\t\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t\t\t\t\t\t<!-- Footer-->
\t\t\t\t\t\t\t\t\t\t\t<footer class=\"content-footer footer bg-footer-theme\"> <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t©
\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t, made with ❤️ by
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link fw-medium\">CuraTeam</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/support/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t\t\t<!--/ Footer-->
\t\t\t\t\t\t\t\t\t\t<!-- / Footer -->
\t\t\t\t\t\t\t\t\t\t<div class=\"content-backdrop fade\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Content wrapper -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- / Layout page -->
\t\t\t\t\t\t</li>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Overlay -->
\t\t\t\t\t<div class=\"layout-overlay layout-menu-toggle\"></div>
\t\t\t\t\t<!-- Drag Target Area To SlideIn Menu On Small Screens -->
\t\t\t\t\t<div class=\"drag-target\"></div>
\t\t\t\t</li>
\t\t\t</div>
\t\t\t<!-- / Layout wrapper -->
\t\t\t<!--/ Layout Content -->


\t\t\t<!-- Include Scripts -->
\t\t\t<!-- \$isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
\t\t\t<!-- BEGIN: Vendor JS--><script src=\"";
        // line 878
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"), "html", null, true);
        yield "\"> </script>
\t\t\t<script src=\"";
        // line 879
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 880
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 881
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 882
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 883
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 884
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 885
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/moment/moment.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 886
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 887
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/select2/select2.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 888
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 889
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 890
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 891
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/cleavejs/cleave.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 892
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/cleavejs/cleave-phone.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 893
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/bootstrap-select/bootstrap-select.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
\t\t\t<script src=\"";
        // line 895
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/myjs.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- END: Page Vendor JS-->
\t\t\t<!-- BEGIN: Theme JS-->
\t\t\t<script src=\"";
        // line 898
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- END: Theme JS-->
\t\t\t<!-- Pricing Modal JS-->
\t\t\t<!-- END: Pricing Modal JS-->
\t\t\t<!-- BEGIN: Page JS--><script src=\"";
        // line 903
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/app-user-list.js"), "html", null, true);
        yield "\"> </script>
\t\t\t<!-- END: Page JS-->
\t\t</body>
\t</body>
</html></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 765
    public function block_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table"));

        // line 766
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 816
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "BaseBack.html.twig";
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
        return array (  1094 => 816,  1082 => 766,  1072 => 765,  1055 => 903,  1047 => 898,  1041 => 895,  1036 => 893,  1032 => 892,  1028 => 891,  1024 => 890,  1020 => 889,  1016 => 888,  1012 => 887,  1008 => 886,  1004 => 885,  1000 => 884,  996 => 883,  992 => 882,  988 => 881,  984 => 880,  980 => 879,  976 => 878,  913 => 817,  910 => 816,  908 => 765,  870 => 730,  832 => 695,  820 => 686,  762 => 631,  737 => 609,  686 => 561,  636 => 514,  589 => 470,  385 => 268,  378 => 259,  358 => 242,  350 => 237,  333 => 223,  325 => 218,  307 => 203,  299 => 198,  282 => 184,  231 => 136,  169 => 77,  163 => 74,  157 => 71,  149 => 66,  145 => 65,  141 => 64,  137 => 63,  133 => 62,  127 => 59,  122 => 57,  117 => 55,  112 => 53,  108 => 52,  103 => 50,  98 => 48,  94 => 47,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\" class=\"light-style layout-compact layout-navbar-fixed layout-menu-fixed     \" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/\" data-base-url=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" data-framework=\"laravel\" data-template=\"vertical-menu-theme-default-light\">
\t<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/list by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:54:43 GMT -->
\t<!-- Added by HTTrack -->
\t<meta
\thttp-equiv=\"content-type\" content=\"text/html;charset=UTF-8\"/> <!-- /Added by HTTrack -->
\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\"/>

\t\t<title>CuraCloud</title>
\t\t<meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\"/>
\t\t<meta
\t\tname=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
\t\t<!-- Canonical SEO -->
\t\t<link
\t\trel=\"canonical\" href=\"https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/\">
\t\t<!-- Favicon -->
\t\t<link
\t\trel=\"icon\" type=\"image/x-icon\" href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico\"/>


\t\t<!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
\t\t<script>
\t\t\t(function (w, d, s, l, i) {
w[l] = w[l] || [];
w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
var f = d.getElementsByTagName(s)[0],
j = d.createElement(s),
dl = l != 'dataLayer' ? '&l=' + l : '';
j.async = true;
j.src = '../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
\t\t</script>
\t\t<!-- End Google Tag Manager -->


\t\t<!-- Include Styles -->
\t\t<!-- \$isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
\t\t<!-- BEGIN: Theme CSS-->
\t\t<!-- Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\"> <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da')}}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5')}}\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"{{asset('back/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d')}}\"/>
\t\t<!-- Core CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8')}}\" class=\"template-customizer-core-css\"/>
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1')}}\" class=\"template-customizer-theme-css\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"{{asset('back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d')}}\"/>
\t\t<!-- Vendors CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b')}}\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd')}}\"/>

\t\t<!-- Vendor Styles -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/select2/select2.css')}}\"/>
\t\t<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css')}}\"/><!-- Page 
    Styles -->

\t\t<!-- Include Scripts for customizer, helper, analytics, config -->
\t\t<!-- \$isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
\t\t<!-- laravel style --><script src=\"{{asset('back/assets/vendor/js/helpers.js')}}\"> </script>
\t\t<!-- beautify ignore:start -->
\t\t<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
\t\t<!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  --><script src=\"{{asset('back/assets/vendor/js/template-customizer.js')}}\"> </script>

\t\t<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
\t\t<script src=\"{{asset('back/assets/js/config.js')}}\"></script>

\t\t<script>
\t\t\twindow.templateCustomizer = new TemplateCustomizer({
cssPath: '',
themesPath: '',
defaultStyle: \"light\",
defaultShowDropdownOnHover: \"true\", // true/false (for horizontal layout only)
displayCustomizer: \"true\",
lang: 'en',
pathResolver: function (path) {
var resolvedPaths = {
// Core stylesheets
'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',

// Themes
'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
'theme-default-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
'theme-bordered-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
'theme-semi-dark-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51'
}
return resolvedPaths[path] || path;
},
'controls': [
\"rtl\",
\"style\",
\"headerType\",
\"contentLayout\",
\"layoutCollapsed\",
\"layoutNavbarOptions\",
\"themes\"
]
});
\t\t</script>
\t</head>

\t<body>

\t\t<!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
\t\t<noscript>
\t\t\t<iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe>
\t\t</noscript>
\t\t<!-- End Google Tag Manager (noscript) -->


\t\t<!-- Layout Content -->
\t\t<div class=\"layout-wrapper layout-content-navbar \">
\t\t\t<div class=\"layout-container\">

\t\t\t\t<aside
\t\t\t\t\tid=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

\t\t\t\t\t<!-- ! Hide app brand if navbar-full -->
\t\t\t\t\t<div class=\"app-brand demo\">
\t\t\t\t\t\t  <a href=\"landing.html\" class=\"app-brand-link\">
    <span class=\"app-brand-logo demo\">
        <img src=\"{{ asset('images/blogs/LOGO-65ea2b987652d.png')}}\" alt=\"Your Logo\" width=\"50\">
    </span>
</a>
\t\t\t\t\t\t\t\t\t<g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t<g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
\t\t\t\t\t\t\t\t\t\t\t<g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<mask id=\"mask-2\" fill=\"white\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"#path-1\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-1\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Path-3\" mask=\"url(#mask-2)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-3\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Path-4\" mask=\"url(#mask-2)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-4\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill=\"var(--bs-primary)\" xlink:href=\"#path-5\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t\t<use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"app-brand-text demo menu-text fw-bold ms-2\">CuraCloud</span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
\t\t\t\t\t\t\t<i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"menu-inner-shadow\"></div>

\t\t\t\t\t<ul class=\"menu-inner py-1\">
<!-- User Dropdown -->
<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon bx bx-user\"></i> <!-- User icon -->
        <div class=\"text-truncate\">User</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"{{ path('app_user')}}\" class=\"menu-link\">
                <div>Users List</div>
            </a>
        </li>
    </ul>
</li>

\t\t\t\t<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
<i class='menu-icon bx bx-calendar-alt'></i>
        <div class=\"text-truncate\">Patient Portal</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"{{ path('admin_app_appointment_index')}}\" class=\"menu-link\">
                <div>Appointments</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('admin_medical_record_index')}}\" class=\"menu-link\">
                <div>Medical Record</div>
            </a>
        </li>
    </ul>
</li>

<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
<i class='menu-icon bx bx-test-tube'></i>   

        <div class=\"text-truncate\">Laboratory</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"{{ path('app_bilan_index2')}}\" class=\"menu-link\">
                <div>Bilan</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_diagnostic_request_index2')}}\" class=\"menu-link\">
                <div>Diagnostic request</div>
            </a>
        </li>
    </ul>
</li>

<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
<i class='menu-icon bx bxs-capsule'></i>
        <div class=\"text-truncate\">Pharmacy</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"{{ path('admin_prescription_index')}}\" class=\"menu-link\">
                <div>Prescriptions</div>
            </a>
        </li>
        <li class=\"menu-item\">
            <a href=\"{{ path('app_meds_index')}}\" class=\"menu-link\">
                <div>Medications</div>
            </a>
        </li>
    </ul>
</li>



<!-- Blog Dropdown -->
<li class=\"menu-item\">
    <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\">
        <i class=\"menu-icon bx bx-book\"></i> <!-- Blog icon -->
        <div class=\"text-truncate\">Blog</div>
    </a>
    <ul class=\"menu-sub\">
        <li class=\"menu-item\">
            <a href=\"{{ path('back_app_blog_index')}}\" class=\"menu-link\">
                <div>Blogs list</div>
            </a>
        </li>
        {# <li class=\"menu-item\">
            <a href=\"{{ path('stream_index')}}\" class=\"menu-link\">
                <div>Stream</div>
            </a>
        </li> #}
    </ul>
</li>



\t\t\t\t\t\t\t\t\t</aside>


\t\t\t\t\t\t\t\t\t<!-- Layout page -->
\t\t\t\t\t\t\t\t\t<div class=\"layout-page\">


\t\t\t\t\t\t\t\t\t\t<!-- BEGIN: Navbar-->
\t\t\t\t\t\t\t\t\t\t<!-- Navbar -->
\t\t\t\t\t\t\t\t\t\t\t<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\"> <!--  Brand demo (display only for navbar-full and hide on below xl) -->

\t\t\t\t\t\t\t\t\t\t\t<!-- ! Not required for layout-without-menu -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none \"> <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-menu bx-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-nav align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"nav-item navbar-search-wrapper mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-item nav-link search-toggler px-0\" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-search bx-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Search -->

\t\t\t\t\t\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"navbar-nav flex-row align-items-center ms-auto\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Language -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-globe bx-sm'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item active\" href=\"list.html\" data-language=\"en\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">English</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item \" href=\"list.html\" data-language=\"fr\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">French</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item \" href=\"list.html\" data-language=\"de\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">German</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item \" href=\"list.html\" data-language=\"pt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Portuguese</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ Language -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Quick links  -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-grid-alt bx-sm'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu-header border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-shortcuts-add text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Add shortcuts\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-sm bx-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-list scrollable-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-calendar fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../calendar.html\" class=\"stretched-link\">Calendar</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Appointments</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-food-menu fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../invoice/list.html\" class=\"stretched-link\">Invoice App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Manage Accounts</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"list.html\" class=\"stretched-link\">User App</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Manage Users</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-check-shield fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../access-roles.html\" class=\"stretched-link\">Role Management</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Permission</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-pie-chart-alt-2 fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"stretched-link\">Dashboard</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">User Profile</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-cog fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../pages/account-settings-account.html\" class=\"stretched-link\">Setting</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Account Settings</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row row-bordered overflow-visible g-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-help-circle fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../pages/faq.html\" class=\"stretched-link\">FAQs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">FAQs & Articles</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-shortcuts-item col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-window-open fs-4\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"../../modal-examples.html\" class=\"stretched-link\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted mb-0\">Useful Popups</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Quick links -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Style Switcher -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-style-switcher dropdown me-2 me-xl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-sm'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end dropdown-styles\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"light\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-sun me-2'></i>Light</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-moon me-2\"></i>Dark</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"system\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-desktop me-2\"></i>System</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ Style Switcher -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Notification -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-bell bx-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger rounded-pill badge-notifications\">5</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end py-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-header border-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header d-flex align-items-center py-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-body mb-0 me-auto\">Notification</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-all text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark all as read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx fs-4 bx-envelope-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-notifications-list scrollable-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Won the monthly best seller gold badge</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1h ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Charles Franklin</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Accepted your connection</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">12hr ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/2.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New Message ✉️</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">You have new message from Natalie</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1h ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Whoo! You have new order 🛒
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">1 day ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/9.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Application has been approved 🚀
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Your ABC project application has been approved.</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">2 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-pie-chart-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Monthly report is generated</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">July monthly financial report is generated
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">3 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/5.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Send connection request</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Peter sent you connection request</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">4 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/6.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New message from Jane</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Your have new message from Jane</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">5 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"avatar-initial rounded-circle bg-label-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-error\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">CPU is running high</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">5 days ago</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 dropdown-notifications-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-dot\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bx bx-x\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-menu-footer border-top p-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary text-uppercase w-100\">view all notifications</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ Notification -->

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- User -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-online\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-online\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-medium d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJohn Doe
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">Admin</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"../../pages/profile-user.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-user me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">My Profile</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"../../pages/account-settings-billing.html\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-flex align-items-center align-middle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"flex-shrink-0 bx bx-credit-card me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flex-grow-1 align-middle\">Billing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20\">4</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
                              
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-log-in me-2'></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"align-middle\">Logout</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!--/ User -->
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- Search Small Screens -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"navbar-search-wrapper search-input-wrapper  d-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control search-input container-xxl border-0\" placeholder=\"Search...\" aria-label=\"Search...\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bx bx-x bx-sm search-toggler cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t<!-- / Navbar -->
\t\t\t\t\t\t\t\t\t\t<!-- END: Navbar-->


\t\t\t\t\t\t\t\t\t\t<!-- Content wrapper -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"content-wrapper\"> <!-- Content -->
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"container-xxl flex-grow-1 container-p-y\">


\t\t\t\t\t\t\t\t\t\t\t\t<!-- Users List Table -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-datatable table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper dt-bootstrap5 no-footer\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block table %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <table class=\"datatables-users table border-top\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>id</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>User</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>Role</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>Plan</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>Billing</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <th>Actions</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <!-- data values-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <!--tbody-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        <!-- <tr class=\"odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td class=\"control dtr-hidden\" tabindex=\"0\" style=\"display: none;\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td class=\"sorting_1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              <div class=\"d-flex justify-content-start align-items-center user-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <div class=\"avatar-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <div class=\"avatar avatar-sm me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <img src=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png\" alt=\"Avatar\" class=\"rounded-circle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <div class=\"d-flex flex-column\"><a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account\" class=\"text-body text-truncate\"><span class=\"fw-medium\">Zsazsa McCleverty</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <small class=\"text-muted\">zmcclevertye@soundcloud.com</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              <span class=\"text-truncate d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <span class=\"badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2\"><i class=\"bx bx-pie-chart-alt bx-xs\"></i></span>Maintainer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td><span class=\"fw-medium\">Enterprise</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td>Auto Debit</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td class=\"\" style=\"\"><span class=\"badge bg-label-success\">Active</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            <td class=\"\" style=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              <div class=\"d-inline-block text-nowrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <button class=\"btn btn-sm btn-icon\"><i class=\"bx bx-edit\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                <button class=\"btn btn-sm btn-icon delete-record\"><i class=\"bx bx-trash\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                {# <button class=\"btn btn-sm btn-icon dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"bx bx-dots-vertical-rounded me-2\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  <div class=\"dropdown-menu dropdown-menu-end m-0\" style=\"\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account\" class=\"dropdown-item\">View</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    <a href=\"javascript:;\" class=\"dropdown-item\">Suspend</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        </tr> --> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Offcanvas to add new user -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasAddUser\" aria-labelledby=\"offcanvasAddUserLabel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 id=\"offcanvasAddUserLabel\" class=\"offcanvas-title\">Add User</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-body mx-0 flex-grow-0\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- / Content -->

\t\t\t\t\t\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t\t\t\t\t\t<!-- Footer-->
\t\t\t\t\t\t\t\t\t\t\t<footer class=\"content-footer footer bg-footer-theme\"> <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-2 mb-md-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t©
\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t, made with ❤️ by
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link fw-medium\">CuraTeam</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-none d-lg-inline-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://themeselection.com/support/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</footer>
\t\t\t\t\t\t\t\t\t\t<!--/ Footer-->
\t\t\t\t\t\t\t\t\t\t<!-- / Footer -->
\t\t\t\t\t\t\t\t\t\t<div class=\"content-backdrop fade\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--/ Content wrapper -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- / Layout page -->
\t\t\t\t\t\t</li>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Overlay -->
\t\t\t\t\t<div class=\"layout-overlay layout-menu-toggle\"></div>
\t\t\t\t\t<!-- Drag Target Area To SlideIn Menu On Small Screens -->
\t\t\t\t\t<div class=\"drag-target\"></div>
\t\t\t\t</li>
\t\t\t</div>
\t\t\t<!-- / Layout wrapper -->
\t\t\t<!--/ Layout Content -->


\t\t\t<!-- Include Scripts -->
\t\t\t<!-- \$isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
\t\t\t<!-- BEGIN: Vendor JS--><script src=\"{{asset('back/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a')}}\"> </script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/moment/moment.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/select2/select2.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/cleavejs/cleave.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/cleavejs/cleave-phone.js')}}\"></script>
\t\t\t<script src=\"{{asset('back/assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}\"></script>
\t\t\t<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
\t\t\t<script src=\"{{asset('back/js/myjs.js')}}\"></script>
\t\t\t<!-- END: Page Vendor JS-->
\t\t\t<!-- BEGIN: Theme JS-->
\t\t\t<script src=\"{{asset('back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b')}}\"></script>

\t\t\t<!-- END: Theme JS-->
\t\t\t<!-- Pricing Modal JS-->
\t\t\t<!-- END: Pricing Modal JS-->
\t\t\t<!-- BEGIN: Page JS--><script src=\"{{asset('back/assets/js/app-user-list.js')}}\"> </script>
\t\t\t<!-- END: Page JS-->
\t\t</body>
\t</body>
</html></body></html>
", "BaseBack.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\BaseBack.html.twig");
    }
}
