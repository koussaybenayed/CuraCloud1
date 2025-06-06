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

/* account_details.html.twig */
class __TwigTemplate_588d30db4169442646a1085da59521ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'edit' => [$this, 'block_edit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account_details.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\" class=\"light-style layout-compact layout-navbar-fixed layout-menu-fixed     \" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/\" data-base-url=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" data-framework=\"laravel\" data-template=\"vertical-menu-theme-default-light\">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:54:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>User View</title>
  <meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\" />
  <meta name=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
  <!-- laravel CRUD token -->
  <meta name=\"csrf-token\" content=\"0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn\">
  <!-- Canonical SEO -->
  <link rel=\"canonical\" href=\"https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/\">
  <!-- Favicon -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico\" />

  
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
        '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->
    

  <!-- Include Styles -->
  <!-- \$isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap\" rel=\"stylesheet\">

<link rel=\"stylesheet\" href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d"), "html", null, true);
        yield "\" />
<!-- Core CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8"), "html", null, true);
        yield "\" class=\"template-customizer-core-css\" />
<link rel=\"stylesheet\" href=\"";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1"), "html", null, true);
        yield "\" class=\"template-customizer-theme-css\" />
<link rel=\"stylesheet\" href=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d"), "html", null, true);
        yield "\" />
<!-- Vendors CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 59
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 61
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/flatpickr/flatpickr.css"), "html", null, true);
        yield "\">
<!-- Vendor Styles -->
<link rel=\"stylesheet\" href=\"";
        // line 63
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 64
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 66
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/animate-css/animate.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/sweetalert2/sweetalert2.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 68
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/select2/select2.css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css"), "html", null, true);
        yield "\" />


<!-- Page Styles -->
<link rel=\"stylesheet\" href=\"";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/pages/page-user-view.css"), "html", null, true);
        yield "\" />

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- \$isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src=\"";
        // line 78
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src=\"";
        // line 82
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"";
        // line 85
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
  <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  <div class=\"layout-wrapper layout-content-navbar \">
  <div class=\"layout-container\">

        <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

  <!-- ! Hide app brand if navbar-full -->
    <div class=\"app-brand demo\">
    <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"app-brand-link\">
      <span class=\"app-brand-logo demo\">
        <svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
  <defs>
    <path d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\" id=\"path-1\"></path>
    <path d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\" id=\"path-3\"></path>
    <path d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\" id=\"path-4\"></path>
    <path d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\" id=\"path-5\"></path>
  </defs>
  <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
    <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
      <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
        <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
          <mask id=\"mask-2\" fill=\"white\">
            <use xlink:href=\"#path-1\"></use>
          </mask>
          <use fill=\"var(--bs-primary)\" xlink:href=\"#path-1\"></use>
          <g id=\"Path-3\" mask=\"url(#mask-2)\">
            <use fill=\"var(--bs-primary)\" xlink:href=\"#path-3\"></use>
            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
          </g>
          <g id=\"Path-4\" mask=\"url(#mask-2)\">
            <use fill=\"var(--bs-primary)\" xlink:href=\"#path-4\"></use>
            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
          </g>
        </g>
        <g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
          <use fill=\"var(--bs-primary)\" xlink:href=\"#path-5\"></use>
          <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
        </g>
      </g>
    </g>
  </g>
</svg>
      </span>
      <span class=\"app-brand-text demo menu-text fw-bold ms-2\">CuraCloud</span>
    </a>

    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
      <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
    </a>
  </div>
  
  <div class=\"menu-inner-shadow\"></div>

  <ul class=\"menu-inner py-1\">
    
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div class=\"text-truncate\">Dashboards</div>
                  <div class=\"badge bg-danger rounded-pill ms-auto\">5</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"menu-link\" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../dashboard/crm.html\" class=\"menu-link\" >
                    <div>CRM</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/dashboard.html\" class=\"menu-link\" >
                    <div>eCommerce</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../logistics/dashboard.html\" class=\"menu-link\" >
                    <div>Logistics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/dashboard.html\" class=\"menu-link\" >
                    <div>Academy</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                <div class=\"text-truncate\">Layouts</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/collapsed-menu.html\" class=\"menu-link\" >
                    <div>Collapsed menu</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/content-navbar.html\" class=\"menu-link\" >
                    <div>Content navbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/content-nav-sidebar.html\" class=\"menu-link\" >
                    <div>Content nav + Sidebar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/horizontal.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Horizontal</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/without-menu.html\" class=\"menu-link\" >
                    <div>Without menu</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/without-navbar.html\" class=\"menu-link\" >
                    <div>Without navbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/fluid.html\" class=\"menu-link\" >
                    <div>Fluid</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/container.html\" class=\"menu-link\" >
                    <div>Container</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/blank.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Blank</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-store\"></i>
                <div class=\"text-truncate\">Front Pages</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/landing.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Landing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/pricing.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/payment.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Payment</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/checkout.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/help-center.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Help Center</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bxl-php\"></i>
                <div class=\"text-truncate\">Laravel Example</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../laravel/user-management.html\" class=\"menu-link\" >
                    <div>User Management</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Apps &amp; Pages</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../email.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-envelope\"></i>
                <div class=\"text-truncate\">Email</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../chat.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-chat\"></i>
                <div class=\"text-truncate\">Chat</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../calendar.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div class=\"text-truncate\">Calendar</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../kanban.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-grid\"></i>
                <div class=\"text-truncate\">Kanban</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-cart-alt\"></i>
                <div class=\"text-truncate\">eCommerce</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/dashboard.html\" class=\"menu-link\" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Products</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/product/list.html\" class=\"menu-link\" >
                    <div>Product List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/product/add.html\" class=\"menu-link\" >
                    <div>Add Product</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/product/category.html\" class=\"menu-link\" >
                    <div>Category List</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Order</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/order/list.html\" class=\"menu-link\" >
                    <div>Order List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/order/details.html\" class=\"menu-link\" >
                    <div> Order Details</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Customer</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/all.html\" class=\"menu-link\" >
                    <div>All Customers</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Customer Details</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/overview.html\" class=\"menu-link\" >
                    <div>Overview</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/security.html\" class=\"menu-link\" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/billing.html\" class=\"menu-link\" >
                    <div>Address &amp; Billing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/manage/reviews.html\" class=\"menu-link\" >
                    <div>Manage Reviews</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/referrals.html\" class=\"menu-link\" >
                    <div>Referrals</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Settings</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/details.html\" class=\"menu-link\" >
                    <div>Store details</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/payments.html\" class=\"menu-link\" >
                    <div>Payments</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/checkout.html\" class=\"menu-link\" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/shipping.html\" class=\"menu-link\" >
                    <div>Shipping &amp; Delivery</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/locations.html\" class=\"menu-link\" >
                    <div>Locations</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-book-open\"></i>
                <div class=\"text-truncate\">Academy</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/dashboard.html\" class=\"menu-link\" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/course.html\" class=\"menu-link\" >
                    <div>My Course</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/course-details.html\" class=\"menu-link\" >
                    <div>Course Details</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-car\"></i>
                <div class=\"text-truncate\">Logistics</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../logistics/dashboard.html\" class=\"menu-link\" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../logistics/fleet.html\" class=\"menu-link\" >
                    <div>Fleet</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-food-menu\"></i>
                <div class=\"text-truncate\">Invoice</div>
                  <div class=\"badge bg-success rounded-pill ms-auto\">4</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/list.html\" class=\"menu-link\" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/preview.html\" class=\"menu-link\" >
                    <div>Preview</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/edit.html\" class=\"menu-link\" >
                    <div>Edit</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/add.html\" class=\"menu-link\" >
                    <div>Add</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item active open\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div class=\"text-truncate\">Users</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../list.html\" class=\"menu-link\" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item active open\">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>View</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item active\">
        <a href=\"account.html\" class=\"menu-link\" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"security.html\" class=\"menu-link\" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"billing.html\" class=\"menu-link\" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"connections.html\" class=\"menu-link\" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-check-shield\"></i>
                <div class=\"text-truncate\">Roles &amp; Permissions</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../access-roles.html\" class=\"menu-link\" >
                    <div>Roles</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../access-permission.html\" class=\"menu-link\" >
                    <div>Permission</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-dock-top\"></i>
                <div class=\"text-truncate\">Pages</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>User Profile</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-user.html\" class=\"menu-link\" >
                    <div>Profile</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-teams.html\" class=\"menu-link\" >
                    <div>Teams</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-projects.html\" class=\"menu-link\" >
                    <div>Projects</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-connections.html\" class=\"menu-link\" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Account Settings</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-account.html\" class=\"menu-link\" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-security.html\" class=\"menu-link\" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-billing.html\" class=\"menu-link\" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-connections.html\" class=\"menu-link\" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/faq.html\" class=\"menu-link\" >
                    <div>FAQ</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/pricing.html\" class=\"menu-link\" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Misc</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-error.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Error</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-under-maintenance.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Under Maintenance</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-comingsoon.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Coming Soon</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-not-authorized.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Not Authorized</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-lock-open-alt\"></i>
                <div class=\"text-truncate\">Authentications</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Login</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/login-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/login-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Register</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/register-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/register-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/register-multisteps.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Multi-steps</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Verify Email</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/verify-email-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/verify-email-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Reset Password</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/reset-password-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/reset-password-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Forgot Password</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/forgot-password-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/forgot-password-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Two Steps</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/two-steps-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/two-steps-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-spreadsheet\"></i>
                <div class=\"text-truncate\">Wizard Examples</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../wizard/ex-checkout.html\" class=\"menu-link\" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../wizard/ex-property-listing.html\" class=\"menu-link\" >
                    <div>Property Listing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../wizard/ex-create-deal.html\" class=\"menu-link\" >
                    <div>Create Deal</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../modal-examples.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-window-open\"></i>
                <div class=\"text-truncate\">Modal Examples</div>
              </a>

      
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Components</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-collection\"></i>
                <div class=\"text-truncate\">Cards</div>
                  <div class=\"badge bg-danger rounded-pill ms-auto\">6</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/basic.html\" class=\"menu-link\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/advance.html\" class=\"menu-link\" >
                    <div>Advance</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/statistics.html\" class=\"menu-link\" >
                    <div>Statistics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/analytics.html\" class=\"menu-link\" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/gamifications.html\" class=\"menu-link\" >
                    <div>Gamifications</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/actions.html\" class=\"menu-link\" >
                    <div>Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-box\"></i>
                <div class=\"text-truncate\">User interface</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/accordion.html\" class=\"menu-link\" >
                    <div>Accordion</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/alerts.html\" class=\"menu-link\" >
                    <div>Alerts</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/badges.html\" class=\"menu-link\" >
                    <div>Badges</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/buttons.html\" class=\"menu-link\" >
                    <div>Buttons</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/carousel.html\" class=\"menu-link\" >
                    <div>Carousel</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/collapse.html\" class=\"menu-link\" >
                    <div>Collapse</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/dropdowns.html\" class=\"menu-link\" >
                    <div>Dropdowns</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/footer.html\" class=\"menu-link\" >
                    <div>Footer</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/list-groups.html\" class=\"menu-link\" >
                    <div>List Groups</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/modals.html\" class=\"menu-link\" >
                    <div>Modals</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/navbar.html\" class=\"menu-link\" >
                    <div>Navbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/offcanvas.html\" class=\"menu-link\" >
                    <div>Offcanvas</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/pagination-breadcrumbs.html\" class=\"menu-link\" >
                    <div>Pagination &amp; Breadcrumbs</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/progress.html\" class=\"menu-link\" >
                    <div>Progress</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/spinners.html\" class=\"menu-link\" >
                    <div>Spinners</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/tabs-pills.html\" class=\"menu-link\" >
                    <div>Tabs &amp; Pills</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/toasts.html\" class=\"menu-link\" >
                    <div>Toasts</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/tooltips-popovers.html\" class=\"menu-link\" >
                    <div>Tooltips &amp; popovers</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/typography.html\" class=\"menu-link\" >
                    <div>Typography</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-copy\"></i>
                <div class=\"text-truncate\">Extended UI</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-avatar.html\" class=\"menu-link\" >
                    <div>Avatar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-blockui.html\" class=\"menu-link\" >
                    <div>BlockUI</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-drag-and-drop.html\" class=\"menu-link\" >
                    <div>Drag &amp; Drop</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-media-player.html\" class=\"menu-link\" >
                    <div>Media Player</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-perfect-scrollbar.html\" class=\"menu-link\" >
                    <div>Perfect scrollbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-star-ratings.html\" class=\"menu-link\" >
                    <div>Star Ratings</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-sweetalert2.html\" class=\"menu-link\" >
                    <div>SweetAlert2</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-text-divider.html\" class=\"menu-link\" >
                    <div>Text Divider</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Timeline</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-timeline-basic.html\" class=\"menu-link\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-timeline-fullscreen.html\" class=\"menu-link\" >
                    <div>Fullscreen</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-tour.html\" class=\"menu-link\" >
                    <div>Tour</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-treeview.html\" class=\"menu-link\" >
                    <div>Treeview</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-misc.html\" class=\"menu-link\" >
                    <div>Miscellaneous</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-crown\"></i>
                <div class=\"text-truncate\">Icons</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../icons/boxicons.html\" class=\"menu-link\" >
                    <div>Boxicons</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../icons/font-awesome.html\" class=\"menu-link\" >
                    <div>Fontawesome</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Forms &amp; Tables</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-detail\"></i>
                <div class=\"text-truncate\">Form Elements</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/basic-inputs.html\" class=\"menu-link\" >
                    <div>Basic Inputs</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/input-groups.html\" class=\"menu-link\" >
                    <div>Input groups</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/custom-options.html\" class=\"menu-link\" >
                    <div>Custom Options</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/editors.html\" class=\"menu-link\" >
                    <div>Editors</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/file-upload.html\" class=\"menu-link\" >
                    <div>File Upload</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/pickers.html\" class=\"menu-link\" >
                    <div>Pickers</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/selects.html\" class=\"menu-link\" >
                    <div>Select &amp; Tags</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/sliders.html\" class=\"menu-link\" >
                    <div>Sliders</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/switches.html\" class=\"menu-link\" >
                    <div>Switches</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/extras.html\" class=\"menu-link\" >
                    <div>Extras</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-detail\"></i>
                <div class=\"text-truncate\">Form Layouts</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/layouts-vertical.html\" class=\"menu-link\" >
                    <div>Vertical Form</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/layouts-horizontal.html\" class=\"menu-link\" >
                    <div>Horizontal Form</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/layouts-sticky.html\" class=\"menu-link\" >
                    <div>Sticky Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-carousel\"></i>
                <div class=\"text-truncate\">Form Wizard</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/wizard-numbered.html\" class=\"menu-link\" >
                    <div>Numbered</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/wizard-icons.html\" class=\"menu-link\" >
                    <div>Icons</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../form/validation.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-list-check\"></i>
                <div class=\"text-truncate\">Form Validation</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../tables/basic.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-table\"></i>
                <div class=\"text-truncate\">Tables</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-grid\"></i>
                <div class=\"text-truncate\">Datatables</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../tables/datatables-basic.html\" class=\"menu-link\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../tables/datatables-advanced.html\" class=\"menu-link\" >
                    <div>Advanced</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../tables/datatables-extensions.html\" class=\"menu-link\" >
                    <div>Extensions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Charts &amp; Maps</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-chart\"></i>
                <div class=\"text-truncate\">Charts</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../charts/apex.html\" class=\"menu-link\" >
                    <div>Apex Charts</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../charts/chartjs.html\" class=\"menu-link\" >
                    <div>ChartJS</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../maps/leaflet.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-map-alt\"></i>
                <div class=\"text-truncate\">Leaflet Maps</div>
              </a>

      
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"https://themeselection.com/support/\" class=\"menu-link\"  target=\"_blank\" >
                <i class=\"menu-icon tf-icons bx bx-support\"></i>
                <div class=\"text-truncate\">Support</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html\" class=\"menu-link\"  target=\"_blank\" >
                <i class=\"menu-icon tf-icons bx bx-file\"></i>
                <div class=\"text-truncate\">Documentation</div>
              </a>

      
          </li>
          </ul>

</aside>
    

    <!-- Layout page -->
    <div class=\"layout-page\">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
    
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none \">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
          <i class=\"bx bx-menu bx-sm\"></i>
        </a>
      </div>
      
      <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">

                <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
          <div class=\"nav-item navbar-search-wrapper mb-0\">
            <a class=\"nav-item nav-link search-toggler px-0\" href=\"javascript:void(0);\">
              <i class=\"bx bx-search bx-sm\"></i>
              <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
      <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
        
        <!-- Language -->
        <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <i class='bx bx-globe bx-sm'></i>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item active\" href=\"account.html\" data-language=\"en\">
                <span class=\"align-middle\">English</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item \" href=\"account.html\" data-language=\"fr\">
                <span class=\"align-middle\">French</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item \" href=\"account.html\" data-language=\"de\">
                <span class=\"align-middle\">German</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item \" href=\"account.html\" data-language=\"pt\">
                <span class=\"align-middle\">Portuguese</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Language -->

        <!-- Quick links  -->
        <li class=\"nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
            <i class='bx bx-grid-alt bx-sm'></i>
          </a>
          <div class=\"dropdown-menu dropdown-menu-end py-0\">
            <div class=\"dropdown-menu-header border-bottom\">
              <div class=\"dropdown-header d-flex align-items-center py-3\">
                <h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
                <a href=\"javascript:void(0)\" class=\"dropdown-shortcuts-add text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Add shortcuts\"><i class=\"bx bx-sm bx-plus-circle\"></i></a>
              </div>
            </div>
            <div class=\"dropdown-shortcuts-list scrollable-container\">
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-calendar fs-4\"></i>
                  </span>
                  <a href=\"../../calendar.html\" class=\"stretched-link\">Calendar</a>
                  <small class=\"text-muted mb-0\">Appointments</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-food-menu fs-4\"></i>
                  </span>
                  <a href=\"../../invoice/list.html\" class=\"stretched-link\">Invoice App</a>
                  <small class=\"text-muted mb-0\">Manage Accounts</small>
                </div>
              </div>
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-user fs-4\"></i>
                  </span>
                  <a href=\"../list.html\" class=\"stretched-link\">User App</a>
                  <small class=\"text-muted mb-0\">Manage Users</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-check-shield fs-4\"></i>
                  </span>
                  <a href=\"../../access-roles.html\" class=\"stretched-link\">Role Management</a>
                  <small class=\"text-muted mb-0\">Permission</small>
                </div>
              </div>
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-pie-chart-alt-2 fs-4\"></i>
                  </span>
                  <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"stretched-link\">Dashboard</a>
                  <small class=\"text-muted mb-0\">User Profile</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-cog fs-4\"></i>
                  </span>
                  <a href=\"../../../pages/account-settings-account.html\" class=\"stretched-link\">Setting</a>
                  <small class=\"text-muted mb-0\">Account Settings</small>
                </div>
              </div>
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-help-circle fs-4\"></i>
                  </span>
                  <a href=\"../../../pages/faq.html\" class=\"stretched-link\">FAQs</a>
                  <small class=\"text-muted mb-0\">FAQs & Articles</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-window-open fs-4\"></i>
                  </span>
                  <a href=\"../../../modal-examples.html\" class=\"stretched-link\">Modals</a>
                  <small class=\"text-muted mb-0\">Useful Popups</small>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- Quick links -->

                <!-- Style Switcher -->
        <li class=\"nav-item dropdown-style-switcher dropdown me-2 me-xl-0\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <i class='bx bx-sm'></i>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end dropdown-styles\">
            <li>
              <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"light\">
                <span class=\"align-middle\"><i class='bx bx-sun me-2'></i>Light</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"dark\">
                <span class=\"align-middle\"><i class=\"bx bx-moon me-2\"></i>Dark</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"system\">
                <span class=\"align-middle\"><i class=\"bx bx-desktop me-2\"></i>System</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Style Switcher -->
        
        <!-- Notification -->
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
            <li class=\"dropdown-notifications-list scrollable-container\">
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"";
        // line 2636
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
                      <p class=\"mb-0\">Won the monthly best seller gold badge</p>
                      <small class=\"text-muted\">1h ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Charles Franklin</h6>
                      <p class=\"mb-0\">Accepted your connection</p>
                      <small class=\"text-muted\">12hr ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"";
        // line 2672
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/2.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">New Message ✉️</h6>
                      <p class=\"mb-0\">You have new message from Natalie</p>
                      <small class=\"text-muted\">1h ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-success\"><i class=\"bx bx-cart\"></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Whoo! You have new order 🛒 </h6>
                      <p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
                      <small class=\"text-muted\">1 day ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"";
        // line 2708
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/9.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Application has been approved 🚀 </h6>
                      <p class=\"mb-0\">Your ABC project application has been approved.</p>
                      <small class=\"text-muted\">2 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-success\"><i class=\"bx bx-pie-chart-alt\"></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Monthly report is generated</h6>
                      <p class=\"mb-0\">July monthly financial report is generated </p>
                      <small class=\"text-muted\">3 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"";
        // line 2744
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/5.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Send connection request</h6>
                      <p class=\"mb-0\">Peter sent you connection request</p>
                      <small class=\"text-muted\">4 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"";
        // line 2762
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/6.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">New message from Jane</h6>
                      <p class=\"mb-0\">Your have new message from Jane</p>
                      <small class=\"text-muted\">5 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-warning\"><i class=\"bx bx-error\"></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">CPU is running high</h6>
                      <p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
                      <small class=\"text-muted\">5 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class=\"dropdown-menu-footer border-top p-3\">
              <button class=\"btn btn-primary text-uppercase w-100\">view all notifications</button>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <div class=\"avatar avatar-online\">
              <img src=\"";
        // line 2807
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
            </div>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item\" href=\"../../../pages/profile-user.html\">
                <div class=\"d-flex\">
                  <div class=\"flex-shrink-0 me-3\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"";
        // line 2816
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/1.png"), "html", null, true);
        yield "\" alt class=\"w-px-40 h-auto rounded-circle\">
                    </div>
                  </div>
                  <div class=\"flex-grow-1\">
                    <span class=\"fw-medium d-block\">
                                            John Doe
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
              <a class=\"dropdown-item\" href=\"../../../pages/profile-user.html\">
                <i class=\"bx bx-user me-2\"></i>
                <span class=\"align-middle\">My Profile</span>
              </a>
            </li>
                        <li>
              <a class=\"dropdown-item\" href=\"../../../pages/account-settings-billing.html\">
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
                <a class=\"dropdown-item\" href=\"../../../auth/login-basic.html\">
                  <i class='bx bx-log-in me-2'></i>
                  <span class=\"align-middle\">Login</span>
                </a>
              </li>
                          </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class=\"navbar-search-wrapper search-input-wrapper  d-none\">
        <input type=\"text\" class=\"form-control search-input container-xxl border-0\" placeholder=\"Search...\" aria-label=\"Search...\">
        <i class=\"bx bx-x bx-sm search-toggler cursor-pointer\"></i>
      </div>

        </nav>
  <!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class=\"content-wrapper\">

        <!-- Content -->
                  <div class=\"container-xxl flex-grow-1 container-p-y\">
            
            <h4 class=\"py-3 mb-4\">
  <span class=\"text-muted fw-light\">User / View /</span> Account
</h4>
<div class=\"row\">
  <!-- User Sidebar -->
  <div class=\"col-xl-4 col-lg-5 col-md-5 order-1 order-md-0\">
    <!-- User Card -->
    ";
        // line 2885
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 2961
        yield "    <!-- /User Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class=\"col-xl-8 col-lg-7 col-md-7 order-0 order-md-1\">
    <!-- User Pills -->
    <ul class=\"nav nav-pills flex-column flex-md-row mb-3\">
      <li class=\"nav-item\"><a class=\"nav-link active\" href=\"javascript:void(0);\"><i class=\"bx bx-user me-1\"></i>Account</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"security.html\"><i class=\"bx bx-lock-alt me-1\"></i>Security</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"billing.html\"><i class=\"bx bx-detail me-1\"></i>Billing & Plans</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"notifications.html\"><i class=\"bx bx-bell me-1\"></i>Notifications</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"connections.html\"><i class=\"bx bx-link-alt me-1\"></i>Connections</a></li>
    </ul>
    <!--/ User Pills -->

    <!-- Project table -->
    <div class=\"card mb-4\">
      <h5 class=\"card-header\">User's Projects List</h5>
      <div class=\"table-responsive mb-3\">
        <table class=\"table datatable-project border-top\">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Project</th>
              <th class=\"text-nowrap\">Total Task</th>
              <th>Progress</th>
              <th>Hours</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Project table -->

    <!-- Activity Timeline -->
    <div class=\"card mb-4\">
      <h5 class=\"card-header\">User Activity Timeline</h5>
      <div class=\"card-body\">
        <ul class=\"timeline\">
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-primary\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">12 Invoices have been paid</h6>
                <small class=\"text-muted\">12 min ago</small>
              </div>
              <p class=\"mb-2\">Invoices have been paid to the company</p>
              <div class=\"d-flex\">
                <a href=\"javascript:void(0)\" class=\"me-3\">
                  <img src=\"";
        // line 3013
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/icons/misc/pdf.png"), "html", null, true);
        yield "\" alt=\"PDF image\" width=\"15\" class=\"me-2\">
                  <span class=\"fw-medium text-body\">invoices.pdf</span>
                </a>
              </div>
            </div>
          </li>
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-warning\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">Client Meeting</h6>
                <small class=\"text-muted\">45 min ago</small>
              </div>
              <p class=\"mb-2\">Project meeting with john @10:15am</p>
              <div class=\"d-flex flex-wrap\">
                <div class=\"avatar me-3\">
                  <img src=\"";
        // line 3029
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/3.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\" />
                </div>
                <div>
                  <h6 class=\"mb-0\">Lester McCarthy (Client)</h6>
                  <span class=\"text-muted\">CEO of ThemeSelection</span>
                </div>
              </div>
            </div>
          </li>
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-info\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">Create a new project for client</h6>
                <small class=\"text-muted\">2 Day Ago</small>
              </div>
              <p class=\"mb-2\">5 team members in a project</p>
              <div class=\"d-flex align-items-center avatar-group\">
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Vinnie Mostowy\">
                  <img src=\"";
        // line 3048
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/5.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Marrie Patty\">
                  <img src=\"";
        // line 3051
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/12.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Jimmy Jackson\">
                  <img src=\"";
        // line 3054
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/9.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Kristine Gill\">
                  <img src=\"";
        // line 3057
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/6.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Nelson Wilson\">
                  <img src=\"";
        // line 3060
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/14.png"), "html", null, true);
        yield "\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
              </div>
            </div>
          </li>
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-success\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">Design Review</h6>
                <small class=\"text-muted\">5 days Ago</small>
              </div>
              <p class=\"mb-0\">Weekly review of freshly prepared design for our new app.</p>
            </div>
          </li>
          <li class=\"timeline-end-indicator\">
            <i class=\"bx bx-check-circle\"></i>
          </li>
        </ul>
      </div>
    </div>
    <!-- /Activity Timeline -->

    <!-- Invoice table -->
    <div class=\"card mb-4\">
      <div class=\"table-responsive mb-3\">
        <table class=\"table datatable-invoice border-top\">
          <thead>
            <tr>
              <th></th>
              <th>ID</th>
              <th><i class='bx bx-trending-up'></i></th>
              <th>Total</th>
              <th>Issued Date</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Invoice table -->
  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
<!-- Edit User Modal -->

<div class=\"modal fade\" id=\"editUser\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-simple modal-edit-user\">
    <div class=\"modal-content p-3 p-md-5\">
      <div class=\"modal-body\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        <div class=\"text-center mb-4\">
          <h3>Edit User Information</h3>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        ";
        // line 3117
        yield from $this->unwrap()->yieldBlock('edit', $context, $blocks);
        // line 3215
        yield "      </div>
    </div>
  </div>
</div>

<!--/ Edit User Modal -->
<!-- Add New Credit Card Modal -->
<div class=\"modal fade\" id=\"upgradePlanModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan\">
    <div class=\"modal-content p-3 p-md-5\">
      <div class=\"modal-body\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        <div class=\"text-center mb-4\">
          <h3>Upgrade Plan</h3>
          <p>Choose the best plan for user.</p>
        </div>
        <form id=\"upgradePlanForm\" class=\"row g-3\" onsubmit=\"return false\">
          <div class=\"col-sm-9\">
            <label class=\"form-label\" for=\"choosePlan\">Choose Plan</label>
            <select id=\"choosePlan\" name=\"choosePlan\" class=\"form-select\" aria-label=\"Choose Plan\">
              <option selected>Choose Plan</option>
              <option value=\"standard\">Standard - \$99/month</option>
              <option value=\"exclusive\">Exclusive - \$249/month</option>
              <option value=\"Enterprise\">Enterprise - \$499/month</option>
            </select>
          </div>
          <div class=\"col-sm-3 d-flex align-items-end\">
            <button type=\"submit\" class=\"btn btn-primary\">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class=\"mx-md-n5 mx-n3\">
      <div class=\"modal-body\">
        <h6 class=\"mb-0\">User current plan is standard plan</h6>
        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
          <div class=\"d-flex justify-content-center me-2 mt-3\">
            <sup class=\"h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary\">\$</sup>
            <h1 class=\"display-3 mb-0 text-primary\">99</h1>
            <sub class=\"h5 pricing-duration mt-auto mb-2\">/month</sub>
          </div>
          <button class=\"btn btn-label-danger cancel-subscription mt-3\">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
<!-- /Modal -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class=\"content-footer footer bg-footer-theme\">
  <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
    <div class=\"mb-2 mb-md-0\">
      © <script>document.write(new Date().getFullYear())</script>
      , made with ❤️ by <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link fw-medium\">CuraCloud</a>
    </div>
    <div  class=\"d-none d-lg-inline-block\">
      <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
      <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
      <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
      <a href=\"https://themeselection.com/support/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class=\"content-backdrop fade\"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class=\"drag-target\"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->
  

  <!-- Include Scripts -->
  <!-- \$isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 3304
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3305
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3306
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3307
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3308
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3309
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3310
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3311
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/moment/moment.js"), "html", null, true);
        yield "\"></script>
";
        // line 3313
        yield "<script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/sweetalert2/sweetalert2.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3314
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/cleavejs/cleave.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3315
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/cleavejs/cleave-phone.js"), "html", null, true);
        yield "\"></script>
";
        // line 3317
        yield "<script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3318
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3319
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3320
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/flatpickr/flatpickr.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3321
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/js/myjs.js"), "html", null, true);
        yield "\"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 3324
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b"), "html", null, true);
        yield "\"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src=\"";
        // line 3330
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/modal-edit-user.js"), "html", null, true);
        yield "\"></script>
";
        // line 3332
        yield "<script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/app-user-view-account.js"), "html", null, true);
        yield "\"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:54:46 GMT -->
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 2885
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2886
        yield "    <div class=\"card mb-4\">
      <div class=\"card-body\">
        <div class=\"user-avatar-section\">
          <div class=\" d-flex align-items-center flex-column\">
            <img class=\"img-fluid rounded my-4\" src=\"";
        // line 2890
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/img/avatars/10.png"), "html", null, true);
        yield "\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">Violet Mendoza</h4>
              <span class=\"badge bg-label-secondary\">Author</span>
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
              <h5 class=\"mb-0\">568</h5>
              <span>Projects Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">vafgot@vultukir.org</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Password:</span>
              <span>noob</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>(123) 456-7890</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Birth Date:</span>
              <span>9/5/2001</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">inscription Date:</span>
              <span>9/5/2022</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Gender:</span>
              <span>Female</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Tax id:</span>
              <span>Tax-8965</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Languages:</span>
              <span>French</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Country:</span>
              <span>England</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            <a href=\"javascript:;\" class=\"btn btn-label-danger suspend-user\">Delete</a>
          </div>
        </div>
      </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3117
    public function block_edit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 3118
        yield "        <form id=\"editUserForm\" class=\"row g-3\" onsubmit=\"return false\">
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserFirstName\">First Name</label>
            <input type=\"text\" id=\"modalEditUserFirstName\" name=\"modalEditUserFirstName\" class=\"form-control\" placeholder=\"John\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLastName\">Last Name</label>
            <input type=\"text\" id=\"modalEditUserLastName\" name=\"modalEditUserLastName\" class=\"form-control\" placeholder=\"Doe\" />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalEditUserName\">Username</label>
            <input type=\"text\" id=\"modalEditUserName\" name=\"modalEditUserName\" class=\"form-control\" placeholder=\"john.doe.007\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserEmail\">Email</label>
            <input type=\"text\" id=\"modalEditUserEmail\" name=\"modalEditUserEmail\" class=\"form-control\" placeholder=\"example@domain.com\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserStatus\">Status</label>
            <select id=\"modalEditUserStatus\" name=\"modalEditUserStatus\" class=\"form-select\" aria-label=\"Default select example\">
              <option selected>Status</option>
              <option value=\"1\">Active</option>
              <option value=\"2\">Inactive</option>
              <option value=\"3\">Suspended</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditTaxID\">Tax ID</label>
            <input type=\"text\" id=\"modalEditTaxID\" name=\"modalEditTaxID\" class=\"form-control modal-edit-tax-id\" placeholder=\"123 456 7890\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserPhone\">Phone Number</label>
            <div class=\"input-group input-group-merge\">
              <span class=\"input-group-text\">+1</span>
              <input type=\"text\" id=\"modalEditUserPhone\" name=\"modalEditUserPhone\" class=\"form-control phone-number-mask\" placeholder=\"202 555 0111\" />
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Language</label>
            <select id=\"modalEditUserLanguage\" name=\"modalEditUserLanguage\" class=\"select2 form-select\" multiple>
              <option value=\"\">Select</option>
              <option value=\"english\" selected>English</option>
              <option value=\"spanish\">Spanish</option>
              <option value=\"french\">French</option>
              <option value=\"german\">German</option>
              <option value=\"dutch\">Dutch</option>
              <option value=\"hebrew\">Hebrew</option>
              <option value=\"sanskrit\">Sanskrit</option>
              <option value=\"hindi\">Hindi</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserCountry\">Country</label>
            <select id=\"modalEditUserCountry\" name=\"modalEditUserCountry\" class=\"select2 form-select\" data-allow-clear=\"true\">
              <option value=\"\">Select</option>
              <option value=\"Australia\">Australia</option>
              <option value=\"Bangladesh\">Bangladesh</option>
              <option value=\"Belarus\">Belarus</option>
              <option value=\"Brazil\">Brazil</option>
              <option value=\"Canada\">Canada</option>
              <option value=\"China\">China</option>
              <option value=\"France\">France</option>
              <option value=\"Germany\">Germany</option>
              <option value=\"India\">India</option>
              <option value=\"Indonesia\">Indonesia</option>
              <option value=\"Israel\">Israel</option>
              <option value=\"Italy\">Italy</option>
              <option value=\"Japan\">Japan</option>
              <option value=\"Korea\">Korea, Republic of</option>
              <option value=\"Mexico\">Mexico</option>
              <option value=\"Philippines\">Philippines</option>
              <option value=\"Russia\">Russian Federation</option>
              <option value=\"South Africa\">South Africa</option>
              <option value=\"Thailand\">Thailand</option>
              <option value=\"Turkey\">Turkey</option>
              <option value=\"Ukraine\">Ukraine</option>
              <option value=\"United Arab Emirates\">United Arab Emirates</option>
              <option value=\"United Kingdom\">United Kingdom</option>
              <option value=\"United States\">United States</option>
            </select>
          </div>
          <div class=\"col-12\">
            <label class=\"switch\">
              <input type=\"checkbox\" class=\"switch-input\">
              <span class=\"switch-toggle-slider\">
                <span class=\"switch-on\"></span>
                <span class=\"switch-off\"></span>
              </span>
              <span class=\"switch-label\">Use as a billing address?</span>
            </label>
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
          </div>
        </form>
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
        return "account_details.html.twig";
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
        return array (  3497 => 3118,  3487 => 3117,  3405 => 2890,  3399 => 2886,  3389 => 2885,  3368 => 3332,  3364 => 3330,  3355 => 3324,  3349 => 3321,  3345 => 3320,  3341 => 3319,  3337 => 3318,  3332 => 3317,  3328 => 3315,  3324 => 3314,  3319 => 3313,  3315 => 3311,  3311 => 3310,  3307 => 3309,  3303 => 3308,  3299 => 3307,  3295 => 3306,  3291 => 3305,  3287 => 3304,  3196 => 3215,  3194 => 3117,  3134 => 3060,  3128 => 3057,  3122 => 3054,  3116 => 3051,  3110 => 3048,  3088 => 3029,  3069 => 3013,  3015 => 2961,  3013 => 2885,  2941 => 2816,  2929 => 2807,  2881 => 2762,  2860 => 2744,  2821 => 2708,  2782 => 2672,  2743 => 2636,  189 => 85,  183 => 82,  176 => 78,  168 => 73,  161 => 69,  157 => 68,  153 => 67,  149 => 66,  145 => 65,  141 => 64,  137 => 63,  132 => 61,  128 => 60,  124 => 59,  119 => 57,  115 => 56,  111 => 55,  106 => 53,  102 => 52,  98 => 51,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\" class=\"light-style layout-compact layout-navbar-fixed layout-menu-fixed     \" dir=\"ltr\" data-theme=\"theme-default\" data-assets-path=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/\" data-base-url=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" data-framework=\"laravel\" data-template=\"vertical-menu-theme-default-light\">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:54:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>User View</title>
  <meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\" />
  <meta name=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
  <!-- laravel CRUD token -->
  <meta name=\"csrf-token\" content=\"0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn\">
  <!-- Canonical SEO -->
  <link rel=\"canonical\" href=\"https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/\">
  <!-- Favicon -->
  <link rel=\"icon\" type=\"image/x-icon\" href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico\" />

  
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
        '../../../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->
    

  <!-- Include Styles -->
  <!-- \$isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap\" rel=\"stylesheet\">

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
<!-- Vendor Styles -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}\">
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/animate-css/animate.css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/sweetalert2/sweetalert2.css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/select2/select2.css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css')}}\" />


<!-- Page Styles -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/pages/page-user-view.css')}}\" />

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
  <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  <div class=\"layout-wrapper layout-content-navbar \">
  <div class=\"layout-container\">

        <aside id=\"layout-menu\" class=\"layout-menu menu-vertical menu bg-menu-theme\">

  <!-- ! Hide app brand if navbar-full -->
    <div class=\"app-brand demo\">
    <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"app-brand-link\">
      <span class=\"app-brand-logo demo\">
        <svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
  <defs>
    <path d=\"M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z\" id=\"path-1\"></path>
    <path d=\"M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z\" id=\"path-3\"></path>
    <path d=\"M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z\" id=\"path-4\"></path>
    <path d=\"M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z\" id=\"path-5\"></path>
  </defs>
  <g id=\"g-app-brand\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
    <g id=\"Brand-Logo\" transform=\"translate(-27.000000, -15.000000)\">
      <g id=\"Icon\" transform=\"translate(27.000000, 15.000000)\">
        <g id=\"Mask\" transform=\"translate(0.000000, 8.000000)\">
          <mask id=\"mask-2\" fill=\"white\">
            <use xlink:href=\"#path-1\"></use>
          </mask>
          <use fill=\"var(--bs-primary)\" xlink:href=\"#path-1\"></use>
          <g id=\"Path-3\" mask=\"url(#mask-2)\">
            <use fill=\"var(--bs-primary)\" xlink:href=\"#path-3\"></use>
            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-3\"></use>
          </g>
          <g id=\"Path-4\" mask=\"url(#mask-2)\">
            <use fill=\"var(--bs-primary)\" xlink:href=\"#path-4\"></use>
            <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-4\"></use>
          </g>
        </g>
        <g id=\"Triangle\" transform=\"translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) \">
          <use fill=\"var(--bs-primary)\" xlink:href=\"#path-5\"></use>
          <use fill-opacity=\"0.2\" fill=\"#FFFFFF\" xlink:href=\"#path-5\"></use>
        </g>
      </g>
    </g>
  </g>
</svg>
      </span>
      <span class=\"app-brand-text demo menu-text fw-bold ms-2\">CuraCloud</span>
    </a>

    <a href=\"javascript:void(0);\" class=\"layout-menu-toggle menu-link text-large ms-auto\">
      <i class=\"bx bx-chevron-left bx-sm align-middle\"></i>
    </a>
  </div>
  
  <div class=\"menu-inner-shadow\"></div>

  <ul class=\"menu-inner py-1\">
    
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-home-circle\"></i>
                <div class=\"text-truncate\">Dashboards</div>
                  <div class=\"badge bg-danger rounded-pill ms-auto\">5</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"menu-link\" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../dashboard/crm.html\" class=\"menu-link\" >
                    <div>CRM</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/dashboard.html\" class=\"menu-link\" >
                    <div>eCommerce</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../logistics/dashboard.html\" class=\"menu-link\" >
                    <div>Logistics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/dashboard.html\" class=\"menu-link\" >
                    <div>Academy</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-layout\"></i>
                <div class=\"text-truncate\">Layouts</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/collapsed-menu.html\" class=\"menu-link\" >
                    <div>Collapsed menu</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/content-navbar.html\" class=\"menu-link\" >
                    <div>Content navbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/content-nav-sidebar.html\" class=\"menu-link\" >
                    <div>Content nav + Sidebar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/horizontal.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Horizontal</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/without-menu.html\" class=\"menu-link\" >
                    <div>Without menu</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/without-navbar.html\" class=\"menu-link\" >
                    <div>Without navbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/fluid.html\" class=\"menu-link\" >
                    <div>Fluid</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/container.html\" class=\"menu-link\" >
                    <div>Container</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../layouts/blank.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Blank</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-store\"></i>
                <div class=\"text-truncate\">Front Pages</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/landing.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Landing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/pricing.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/payment.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Payment</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/checkout.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../front-pages/help-center.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Help Center</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bxl-php\"></i>
                <div class=\"text-truncate\">Laravel Example</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../laravel/user-management.html\" class=\"menu-link\" >
                    <div>User Management</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Apps &amp; Pages</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../email.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-envelope\"></i>
                <div class=\"text-truncate\">Email</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../chat.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-chat\"></i>
                <div class=\"text-truncate\">Chat</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../calendar.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-calendar\"></i>
                <div class=\"text-truncate\">Calendar</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../kanban.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-grid\"></i>
                <div class=\"text-truncate\">Kanban</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-cart-alt\"></i>
                <div class=\"text-truncate\">eCommerce</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/dashboard.html\" class=\"menu-link\" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Products</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/product/list.html\" class=\"menu-link\" >
                    <div>Product List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/product/add.html\" class=\"menu-link\" >
                    <div>Add Product</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/product/category.html\" class=\"menu-link\" >
                    <div>Category List</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Order</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/order/list.html\" class=\"menu-link\" >
                    <div>Order List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/order/details.html\" class=\"menu-link\" >
                    <div> Order Details</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Customer</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/all.html\" class=\"menu-link\" >
                    <div>All Customers</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Customer Details</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/overview.html\" class=\"menu-link\" >
                    <div>Overview</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/security.html\" class=\"menu-link\" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/billing.html\" class=\"menu-link\" >
                    <div>Address &amp; Billing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/customer/details/notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/manage/reviews.html\" class=\"menu-link\" >
                    <div>Manage Reviews</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/referrals.html\" class=\"menu-link\" >
                    <div>Referrals</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Settings</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/details.html\" class=\"menu-link\" >
                    <div>Store details</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/payments.html\" class=\"menu-link\" >
                    <div>Payments</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/checkout.html\" class=\"menu-link\" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/shipping.html\" class=\"menu-link\" >
                    <div>Shipping &amp; Delivery</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/locations.html\" class=\"menu-link\" >
                    <div>Locations</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../ecommerce/settings/notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-book-open\"></i>
                <div class=\"text-truncate\">Academy</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/dashboard.html\" class=\"menu-link\" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/course.html\" class=\"menu-link\" >
                    <div>My Course</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../academy/course-details.html\" class=\"menu-link\" >
                    <div>Course Details</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-car\"></i>
                <div class=\"text-truncate\">Logistics</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../logistics/dashboard.html\" class=\"menu-link\" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../logistics/fleet.html\" class=\"menu-link\" >
                    <div>Fleet</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-food-menu\"></i>
                <div class=\"text-truncate\">Invoice</div>
                  <div class=\"badge bg-success rounded-pill ms-auto\">4</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/list.html\" class=\"menu-link\" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/preview.html\" class=\"menu-link\" >
                    <div>Preview</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/edit.html\" class=\"menu-link\" >
                    <div>Edit</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../invoice/add.html\" class=\"menu-link\" >
                    <div>Add</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item active open\">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-user\"></i>
                <div class=\"text-truncate\">Users</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../list.html\" class=\"menu-link\" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item active open\">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>View</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item active\">
        <a href=\"account.html\" class=\"menu-link\" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"security.html\" class=\"menu-link\" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"billing.html\" class=\"menu-link\" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"connections.html\" class=\"menu-link\" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-check-shield\"></i>
                <div class=\"text-truncate\">Roles &amp; Permissions</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../access-roles.html\" class=\"menu-link\" >
                    <div>Roles</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../access-permission.html\" class=\"menu-link\" >
                    <div>Permission</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-dock-top\"></i>
                <div class=\"text-truncate\">Pages</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>User Profile</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-user.html\" class=\"menu-link\" >
                    <div>Profile</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-teams.html\" class=\"menu-link\" >
                    <div>Teams</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-projects.html\" class=\"menu-link\" >
                    <div>Projects</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/profile-connections.html\" class=\"menu-link\" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Account Settings</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-account.html\" class=\"menu-link\" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-security.html\" class=\"menu-link\" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-billing.html\" class=\"menu-link\" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-notifications.html\" class=\"menu-link\" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/account-settings-connections.html\" class=\"menu-link\" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/faq.html\" class=\"menu-link\" >
                    <div>FAQ</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/pricing.html\" class=\"menu-link\" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Misc</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-error.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Error</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-under-maintenance.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Under Maintenance</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-comingsoon.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Coming Soon</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../pages/misc-not-authorized.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Not Authorized</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-lock-open-alt\"></i>
                <div class=\"text-truncate\">Authentications</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Login</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/login-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/login-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Register</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/register-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/register-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/register-multisteps.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Multi-steps</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Verify Email</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/verify-email-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/verify-email-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Reset Password</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/reset-password-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/reset-password-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Forgot Password</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/forgot-password-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/forgot-password-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Two Steps</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/two-steps-basic.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../auth/two-steps-cover.html\" class=\"menu-link\"  target=\"_blank\" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-spreadsheet\"></i>
                <div class=\"text-truncate\">Wizard Examples</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../wizard/ex-checkout.html\" class=\"menu-link\" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../wizard/ex-property-listing.html\" class=\"menu-link\" >
                    <div>Property Listing</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../wizard/ex-create-deal.html\" class=\"menu-link\" >
                    <div>Create Deal</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../modal-examples.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-window-open\"></i>
                <div class=\"text-truncate\">Modal Examples</div>
              </a>

      
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Components</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-collection\"></i>
                <div class=\"text-truncate\">Cards</div>
                  <div class=\"badge bg-danger rounded-pill ms-auto\">6</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/basic.html\" class=\"menu-link\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/advance.html\" class=\"menu-link\" >
                    <div>Advance</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/statistics.html\" class=\"menu-link\" >
                    <div>Statistics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/analytics.html\" class=\"menu-link\" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/gamifications.html\" class=\"menu-link\" >
                    <div>Gamifications</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../cards/actions.html\" class=\"menu-link\" >
                    <div>Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-box\"></i>
                <div class=\"text-truncate\">User interface</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/accordion.html\" class=\"menu-link\" >
                    <div>Accordion</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/alerts.html\" class=\"menu-link\" >
                    <div>Alerts</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/badges.html\" class=\"menu-link\" >
                    <div>Badges</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/buttons.html\" class=\"menu-link\" >
                    <div>Buttons</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/carousel.html\" class=\"menu-link\" >
                    <div>Carousel</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/collapse.html\" class=\"menu-link\" >
                    <div>Collapse</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/dropdowns.html\" class=\"menu-link\" >
                    <div>Dropdowns</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/footer.html\" class=\"menu-link\" >
                    <div>Footer</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/list-groups.html\" class=\"menu-link\" >
                    <div>List Groups</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/modals.html\" class=\"menu-link\" >
                    <div>Modals</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/navbar.html\" class=\"menu-link\" >
                    <div>Navbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/offcanvas.html\" class=\"menu-link\" >
                    <div>Offcanvas</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/pagination-breadcrumbs.html\" class=\"menu-link\" >
                    <div>Pagination &amp; Breadcrumbs</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/progress.html\" class=\"menu-link\" >
                    <div>Progress</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/spinners.html\" class=\"menu-link\" >
                    <div>Spinners</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/tabs-pills.html\" class=\"menu-link\" >
                    <div>Tabs &amp; Pills</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/toasts.html\" class=\"menu-link\" >
                    <div>Toasts</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/tooltips-popovers.html\" class=\"menu-link\" >
                    <div>Tooltips &amp; popovers</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../ui/typography.html\" class=\"menu-link\" >
                    <div>Typography</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-copy\"></i>
                <div class=\"text-truncate\">Extended UI</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-avatar.html\" class=\"menu-link\" >
                    <div>Avatar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-blockui.html\" class=\"menu-link\" >
                    <div>BlockUI</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-drag-and-drop.html\" class=\"menu-link\" >
                    <div>Drag &amp; Drop</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-media-player.html\" class=\"menu-link\" >
                    <div>Media Player</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-perfect-scrollbar.html\" class=\"menu-link\" >
                    <div>Perfect scrollbar</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-star-ratings.html\" class=\"menu-link\" >
                    <div>Star Ratings</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-sweetalert2.html\" class=\"menu-link\" >
                    <div>SweetAlert2</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-text-divider.html\" class=\"menu-link\" >
                    <div>Text Divider</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"javascript:void(0)\" class=\"menu-link menu-toggle\" >
                    <div>Timeline</div>
        </a>

        
                  <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-timeline-basic.html\" class=\"menu-link\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-timeline-fullscreen.html\" class=\"menu-link\" >
                    <div>Fullscreen</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-tour.html\" class=\"menu-link\" >
                    <div>Tour</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-treeview.html\" class=\"menu-link\" >
                    <div>Treeview</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../extended/ui-misc.html\" class=\"menu-link\" >
                    <div>Miscellaneous</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-crown\"></i>
                <div class=\"text-truncate\">Icons</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../icons/boxicons.html\" class=\"menu-link\" >
                    <div>Boxicons</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../icons/font-awesome.html\" class=\"menu-link\" >
                    <div>Fontawesome</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Forms &amp; Tables</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-detail\"></i>
                <div class=\"text-truncate\">Form Elements</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/basic-inputs.html\" class=\"menu-link\" >
                    <div>Basic Inputs</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/input-groups.html\" class=\"menu-link\" >
                    <div>Input groups</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/custom-options.html\" class=\"menu-link\" >
                    <div>Custom Options</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/editors.html\" class=\"menu-link\" >
                    <div>Editors</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/file-upload.html\" class=\"menu-link\" >
                    <div>File Upload</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/pickers.html\" class=\"menu-link\" >
                    <div>Pickers</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/selects.html\" class=\"menu-link\" >
                    <div>Select &amp; Tags</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/sliders.html\" class=\"menu-link\" >
                    <div>Sliders</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/switches.html\" class=\"menu-link\" >
                    <div>Switches</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../forms/extras.html\" class=\"menu-link\" >
                    <div>Extras</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-detail\"></i>
                <div class=\"text-truncate\">Form Layouts</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/layouts-vertical.html\" class=\"menu-link\" >
                    <div>Vertical Form</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/layouts-horizontal.html\" class=\"menu-link\" >
                    <div>Horizontal Form</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/layouts-sticky.html\" class=\"menu-link\" >
                    <div>Sticky Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-carousel\"></i>
                <div class=\"text-truncate\">Form Wizard</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/wizard-numbered.html\" class=\"menu-link\" >
                    <div>Numbered</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../form/wizard-icons.html\" class=\"menu-link\" >
                    <div>Icons</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../form/validation.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-list-check\"></i>
                <div class=\"text-truncate\">Form Validation</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../tables/basic.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-table\"></i>
                <div class=\"text-truncate\">Tables</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-grid\"></i>
                <div class=\"text-truncate\">Datatables</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../tables/datatables-basic.html\" class=\"menu-link\" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../tables/datatables-advanced.html\" class=\"menu-link\" >
                    <div>Advanced</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../tables/datatables-extensions.html\" class=\"menu-link\" >
                    <div>Extensions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Charts &amp; Maps</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"javascript:void(0);\" class=\"menu-link menu-toggle\" >
                <i class=\"menu-icon tf-icons bx bx-chart\"></i>
                <div class=\"text-truncate\">Charts</div>
              </a>

      
            <ul class=\"menu-sub\">
      
    
    
      <li class=\"menu-item \">
        <a href=\"../../../charts/apex.html\" class=\"menu-link\" >
                    <div>Apex Charts</div>
        </a>

        
              </li>
    
    
    
      <li class=\"menu-item \">
        <a href=\"../../../charts/chartjs.html\" class=\"menu-link\" >
                    <div>ChartJS</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"../../../maps/leaflet.html\" class=\"menu-link\" >
                <i class=\"menu-icon tf-icons bx bx-map-alt\"></i>
                <div class=\"text-truncate\">Leaflet Maps</div>
              </a>

      
          </li>
        
    

    
        <li class=\"menu-header small text-uppercase\">
      <span class=\"menu-header-text\">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"https://themeselection.com/support/\" class=\"menu-link\"  target=\"_blank\" >
                <i class=\"menu-icon tf-icons bx bx-support\"></i>
                <div class=\"text-truncate\">Support</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class=\"menu-item \">
      <a href=\"https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html\" class=\"menu-link\"  target=\"_blank\" >
                <i class=\"menu-icon tf-icons bx bx-file\"></i>
                <div class=\"text-truncate\">Documentation</div>
              </a>

      
          </li>
          </ul>

</aside>
    

    <!-- Layout page -->
    <div class=\"layout-page\">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class=\"layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme\" id=\"layout-navbar\">
    
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class=\"layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none \">
        <a class=\"nav-item nav-link px-0 me-xl-4\" href=\"javascript:void(0)\">
          <i class=\"bx bx-menu bx-sm\"></i>
        </a>
      </div>
      
      <div class=\"navbar-nav-right d-flex align-items-center\" id=\"navbar-collapse\">

                <!-- Search -->
        <div class=\"navbar-nav align-items-center\">
          <div class=\"nav-item navbar-search-wrapper mb-0\">
            <a class=\"nav-item nav-link search-toggler px-0\" href=\"javascript:void(0);\">
              <i class=\"bx bx-search bx-sm\"></i>
              <span class=\"d-none d-md-inline-block text-muted\">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
      <ul class=\"navbar-nav flex-row align-items-center ms-auto\">
        
        <!-- Language -->
        <li class=\"nav-item dropdown-language dropdown me-2 me-xl-0\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <i class='bx bx-globe bx-sm'></i>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item active\" href=\"account.html\" data-language=\"en\">
                <span class=\"align-middle\">English</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item \" href=\"account.html\" data-language=\"fr\">
                <span class=\"align-middle\">French</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item \" href=\"account.html\" data-language=\"de\">
                <span class=\"align-middle\">German</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item \" href=\"account.html\" data-language=\"pt\">
                <span class=\"align-middle\">Portuguese</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Language -->

        <!-- Quick links  -->
        <li class=\"nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
            <i class='bx bx-grid-alt bx-sm'></i>
          </a>
          <div class=\"dropdown-menu dropdown-menu-end py-0\">
            <div class=\"dropdown-menu-header border-bottom\">
              <div class=\"dropdown-header d-flex align-items-center py-3\">
                <h5 class=\"text-body mb-0 me-auto\">Shortcuts</h5>
                <a href=\"javascript:void(0)\" class=\"dropdown-shortcuts-add text-body\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Add shortcuts\"><i class=\"bx bx-sm bx-plus-circle\"></i></a>
              </div>
            </div>
            <div class=\"dropdown-shortcuts-list scrollable-container\">
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-calendar fs-4\"></i>
                  </span>
                  <a href=\"../../calendar.html\" class=\"stretched-link\">Calendar</a>
                  <small class=\"text-muted mb-0\">Appointments</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-food-menu fs-4\"></i>
                  </span>
                  <a href=\"../../invoice/list.html\" class=\"stretched-link\">Invoice App</a>
                  <small class=\"text-muted mb-0\">Manage Accounts</small>
                </div>
              </div>
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-user fs-4\"></i>
                  </span>
                  <a href=\"../list.html\" class=\"stretched-link\">User App</a>
                  <small class=\"text-muted mb-0\">Manage Users</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-check-shield fs-4\"></i>
                  </span>
                  <a href=\"../../access-roles.html\" class=\"stretched-link\">Role Management</a>
                  <small class=\"text-muted mb-0\">Permission</small>
                </div>
              </div>
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-pie-chart-alt-2 fs-4\"></i>
                  </span>
                  <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"stretched-link\">Dashboard</a>
                  <small class=\"text-muted mb-0\">User Profile</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-cog fs-4\"></i>
                  </span>
                  <a href=\"../../../pages/account-settings-account.html\" class=\"stretched-link\">Setting</a>
                  <small class=\"text-muted mb-0\">Account Settings</small>
                </div>
              </div>
              <div class=\"row row-bordered overflow-visible g-0\">
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-help-circle fs-4\"></i>
                  </span>
                  <a href=\"../../../pages/faq.html\" class=\"stretched-link\">FAQs</a>
                  <small class=\"text-muted mb-0\">FAQs & Articles</small>
                </div>
                <div class=\"dropdown-shortcuts-item col\">
                  <span class=\"dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2\">
                    <i class=\"bx bx-window-open fs-4\"></i>
                  </span>
                  <a href=\"../../../modal-examples.html\" class=\"stretched-link\">Modals</a>
                  <small class=\"text-muted mb-0\">Useful Popups</small>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- Quick links -->

                <!-- Style Switcher -->
        <li class=\"nav-item dropdown-style-switcher dropdown me-2 me-xl-0\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <i class='bx bx-sm'></i>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end dropdown-styles\">
            <li>
              <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"light\">
                <span class=\"align-middle\"><i class='bx bx-sun me-2'></i>Light</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"dark\">
                <span class=\"align-middle\"><i class=\"bx bx-moon me-2\"></i>Dark</span>
              </a>
            </li>
            <li>
              <a class=\"dropdown-item\" href=\"javascript:void(0);\" data-theme=\"system\">
                <span class=\"align-middle\"><i class=\"bx bx-desktop me-2\"></i>System</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Style Switcher -->
        
        <!-- Notification -->
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
            <li class=\"dropdown-notifications-list scrollable-container\">
              <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Congratulation Lettie 🎉</h6>
                      <p class=\"mb-0\">Won the monthly best seller gold badge</p>
                      <small class=\"text-muted\">1h ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-danger\">CF</span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Charles Franklin</h6>
                      <p class=\"mb-0\">Accepted your connection</p>
                      <small class=\"text-muted\">12hr ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"{{asset('back/assets/img/avatars/2.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">New Message ✉️</h6>
                      <p class=\"mb-0\">You have new message from Natalie</p>
                      <small class=\"text-muted\">1h ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-success\"><i class=\"bx bx-cart\"></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Whoo! You have new order 🛒 </h6>
                      <p class=\"mb-0\">ACME Inc. made new order \$1,154</p>
                      <small class=\"text-muted\">1 day ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"{{asset('back/assets/img/avatars/9.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Application has been approved 🚀 </h6>
                      <p class=\"mb-0\">Your ABC project application has been approved.</p>
                      <small class=\"text-muted\">2 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-success\"><i class=\"bx bx-pie-chart-alt\"></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Monthly report is generated</h6>
                      <p class=\"mb-0\">July monthly financial report is generated </p>
                      <small class=\"text-muted\">3 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"{{asset('back/assets/img/avatars/5.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">Send connection request</h6>
                      <p class=\"mb-0\">Peter sent you connection request</p>
                      <small class=\"text-muted\">4 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <img src=\"{{asset('back/assets/img/avatars/6.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">New message from Jane</h6>
                      <p class=\"mb-0\">Your have new message from Jane</p>
                      <small class=\"text-muted\">5 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
                <li class=\"list-group-item list-group-item-action dropdown-notifications-item marked-as-read\">
                  <div class=\"d-flex\">
                    <div class=\"flex-shrink-0 me-3\">
                      <div class=\"avatar\">
                        <span class=\"avatar-initial rounded-circle bg-label-warning\"><i class=\"bx bx-error\"></i></span>
                      </div>
                    </div>
                    <div class=\"flex-grow-1\">
                      <h6 class=\"mb-1\">CPU is running high</h6>
                      <p class=\"mb-0\">CPU Utilization Percent is currently at 88.63%,</p>
                      <small class=\"text-muted\">5 days ago</small>
                    </div>
                    <div class=\"flex-shrink-0 dropdown-notifications-actions\">
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-read\"><span class=\"badge badge-dot\"></span></a>
                      <a href=\"javascript:void(0)\" class=\"dropdown-notifications-archive\"><span class=\"bx bx-x\"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class=\"dropdown-menu-footer border-top p-3\">
              <button class=\"btn btn-primary text-uppercase w-100\">view all notifications</button>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class=\"nav-item navbar-dropdown dropdown-user dropdown\">
          <a class=\"nav-link dropdown-toggle hide-arrow\" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
            <div class=\"avatar avatar-online\">
              <img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
            </div>
          </a>
          <ul class=\"dropdown-menu dropdown-menu-end\">
            <li>
              <a class=\"dropdown-item\" href=\"../../../pages/profile-user.html\">
                <div class=\"d-flex\">
                  <div class=\"flex-shrink-0 me-3\">
                    <div class=\"avatar avatar-online\">
                      <img src=\"{{asset('back/assets/img/avatars/1.png')}}\" alt class=\"w-px-40 h-auto rounded-circle\">
                    </div>
                  </div>
                  <div class=\"flex-grow-1\">
                    <span class=\"fw-medium d-block\">
                                            John Doe
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
              <a class=\"dropdown-item\" href=\"../../../pages/profile-user.html\">
                <i class=\"bx bx-user me-2\"></i>
                <span class=\"align-middle\">My Profile</span>
              </a>
            </li>
                        <li>
              <a class=\"dropdown-item\" href=\"../../../pages/account-settings-billing.html\">
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
                <a class=\"dropdown-item\" href=\"../../../auth/login-basic.html\">
                  <i class='bx bx-log-in me-2'></i>
                  <span class=\"align-middle\">Login</span>
                </a>
              </li>
                          </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class=\"navbar-search-wrapper search-input-wrapper  d-none\">
        <input type=\"text\" class=\"form-control search-input container-xxl border-0\" placeholder=\"Search...\" aria-label=\"Search...\">
        <i class=\"bx bx-x bx-sm search-toggler cursor-pointer\"></i>
      </div>

        </nav>
  <!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class=\"content-wrapper\">

        <!-- Content -->
                  <div class=\"container-xxl flex-grow-1 container-p-y\">
            
            <h4 class=\"py-3 mb-4\">
  <span class=\"text-muted fw-light\">User / View /</span> Account
</h4>
<div class=\"row\">
  <!-- User Sidebar -->
  <div class=\"col-xl-4 col-lg-5 col-md-5 order-1 order-md-0\">
    <!-- User Card -->
    {% block body %}
    <div class=\"card mb-4\">
      <div class=\"card-body\">
        <div class=\"user-avatar-section\">
          <div class=\" d-flex align-items-center flex-column\">
            <img class=\"img-fluid rounded my-4\" src=\"{{asset('back/assets/img/avatars/10.png')}}\" height=\"110\" width=\"110\" alt=\"User avatar\" />
            <div class=\"user-info text-center\">
              <h4 class=\"mb-2\">Violet Mendoza</h4>
              <span class=\"badge bg-label-secondary\">Author</span>
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
              <h5 class=\"mb-0\">568</h5>
              <span>Projects Done</span>
            </div>
          </div>
        </div>
        <h5 class=\"pb-2 border-bottom mb-4\">Details</h5>
        <div class=\"info-container\">
          <ul class=\"list-unstyled\">
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Email:</span>
              <span class=\"badge bg-label-success\">vafgot@vultukir.org</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Password:</span>
              <span>noob</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Contact:</span>
              <span>(123) 456-7890</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Birth Date:</span>
              <span>9/5/2001</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">inscription Date:</span>
              <span>9/5/2022</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Gender:</span>
              <span>Female</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Tax id:</span>
              <span>Tax-8965</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Languages:</span>
              <span>French</span>
            </li>
            <li class=\"mb-3\">
              <span class=\"fw-medium me-2\">Country:</span>
              <span>England</span>
            </li>
          </ul>
          <div class=\"d-flex justify-content-center pt-3\">
            <a href=\"javascript:;\" class=\"btn btn-primary me-3\" data-bs-target=\"#editUser\" data-bs-toggle=\"modal\">Edit</a>
            <a href=\"javascript:;\" class=\"btn btn-label-danger suspend-user\">Delete</a>
          </div>
        </div>
      </div>
    </div>
    {% endblock %}
    <!-- /User Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class=\"col-xl-8 col-lg-7 col-md-7 order-0 order-md-1\">
    <!-- User Pills -->
    <ul class=\"nav nav-pills flex-column flex-md-row mb-3\">
      <li class=\"nav-item\"><a class=\"nav-link active\" href=\"javascript:void(0);\"><i class=\"bx bx-user me-1\"></i>Account</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"security.html\"><i class=\"bx bx-lock-alt me-1\"></i>Security</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"billing.html\"><i class=\"bx bx-detail me-1\"></i>Billing & Plans</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"notifications.html\"><i class=\"bx bx-bell me-1\"></i>Notifications</a></li>
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"connections.html\"><i class=\"bx bx-link-alt me-1\"></i>Connections</a></li>
    </ul>
    <!--/ User Pills -->

    <!-- Project table -->
    <div class=\"card mb-4\">
      <h5 class=\"card-header\">User's Projects List</h5>
      <div class=\"table-responsive mb-3\">
        <table class=\"table datatable-project border-top\">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>Project</th>
              <th class=\"text-nowrap\">Total Task</th>
              <th>Progress</th>
              <th>Hours</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Project table -->

    <!-- Activity Timeline -->
    <div class=\"card mb-4\">
      <h5 class=\"card-header\">User Activity Timeline</h5>
      <div class=\"card-body\">
        <ul class=\"timeline\">
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-primary\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">12 Invoices have been paid</h6>
                <small class=\"text-muted\">12 min ago</small>
              </div>
              <p class=\"mb-2\">Invoices have been paid to the company</p>
              <div class=\"d-flex\">
                <a href=\"javascript:void(0)\" class=\"me-3\">
                  <img src=\"{{asset('back/assets/img/icons/misc/pdf.png')}}\" alt=\"PDF image\" width=\"15\" class=\"me-2\">
                  <span class=\"fw-medium text-body\">invoices.pdf</span>
                </a>
              </div>
            </div>
          </li>
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-warning\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">Client Meeting</h6>
                <small class=\"text-muted\">45 min ago</small>
              </div>
              <p class=\"mb-2\">Project meeting with john @10:15am</p>
              <div class=\"d-flex flex-wrap\">
                <div class=\"avatar me-3\">
                  <img src=\"{{asset('back/assets/img/avatars/3.png')}}\" alt=\"Avatar\" class=\"rounded-circle\" />
                </div>
                <div>
                  <h6 class=\"mb-0\">Lester McCarthy (Client)</h6>
                  <span class=\"text-muted\">CEO of ThemeSelection</span>
                </div>
              </div>
            </div>
          </li>
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-info\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">Create a new project for client</h6>
                <small class=\"text-muted\">2 Day Ago</small>
              </div>
              <p class=\"mb-2\">5 team members in a project</p>
              <div class=\"d-flex align-items-center avatar-group\">
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Vinnie Mostowy\">
                  <img src=\"{{asset('back/assets/img/avatars/5.png')}}\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Marrie Patty\">
                  <img src=\"{{asset('back/assets/img/avatars/12.png')}}\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Jimmy Jackson\">
                  <img src=\"{{asset('back/assets/img/avatars/9.png')}}\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Kristine Gill\">
                  <img src=\"{{asset('back/assets/img/avatars/6.png')}}\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
                <div class=\"avatar pull-up\" data-bs-toggle=\"tooltip\" data-popup=\"tooltip-custom\" data-bs-placement=\"top\" title=\"Nelson Wilson\">
                  <img src=\"{{asset('back/assets/img/avatars/14.png')}}\" alt=\"Avatar\" class=\"rounded-circle\">
                </div>
              </div>
            </div>
          </li>
          <li class=\"timeline-item timeline-item-transparent\">
            <span class=\"timeline-point-wrapper\"><span class=\"timeline-point timeline-point-success\"></span></span>
            <div class=\"timeline-event\">
              <div class=\"timeline-header mb-1\">
                <h6 class=\"mb-0\">Design Review</h6>
                <small class=\"text-muted\">5 days Ago</small>
              </div>
              <p class=\"mb-0\">Weekly review of freshly prepared design for our new app.</p>
            </div>
          </li>
          <li class=\"timeline-end-indicator\">
            <i class=\"bx bx-check-circle\"></i>
          </li>
        </ul>
      </div>
    </div>
    <!-- /Activity Timeline -->

    <!-- Invoice table -->
    <div class=\"card mb-4\">
      <div class=\"table-responsive mb-3\">
        <table class=\"table datatable-invoice border-top\">
          <thead>
            <tr>
              <th></th>
              <th>ID</th>
              <th><i class='bx bx-trending-up'></i></th>
              <th>Total</th>
              <th>Issued Date</th>
              <th>Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Invoice table -->
  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
<!-- Edit User Modal -->

<div class=\"modal fade\" id=\"editUser\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-simple modal-edit-user\">
    <div class=\"modal-content p-3 p-md-5\">
      <div class=\"modal-body\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        <div class=\"text-center mb-4\">
          <h3>Edit User Information</h3>
          <p>Updating user details will receive a privacy audit.</p>
        </div>
        {% block edit %}
        <form id=\"editUserForm\" class=\"row g-3\" onsubmit=\"return false\">
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserFirstName\">First Name</label>
            <input type=\"text\" id=\"modalEditUserFirstName\" name=\"modalEditUserFirstName\" class=\"form-control\" placeholder=\"John\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLastName\">Last Name</label>
            <input type=\"text\" id=\"modalEditUserLastName\" name=\"modalEditUserLastName\" class=\"form-control\" placeholder=\"Doe\" />
          </div>
          <div class=\"col-12\">
            <label class=\"form-label\" for=\"modalEditUserName\">Username</label>
            <input type=\"text\" id=\"modalEditUserName\" name=\"modalEditUserName\" class=\"form-control\" placeholder=\"john.doe.007\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserEmail\">Email</label>
            <input type=\"text\" id=\"modalEditUserEmail\" name=\"modalEditUserEmail\" class=\"form-control\" placeholder=\"example@domain.com\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserStatus\">Status</label>
            <select id=\"modalEditUserStatus\" name=\"modalEditUserStatus\" class=\"form-select\" aria-label=\"Default select example\">
              <option selected>Status</option>
              <option value=\"1\">Active</option>
              <option value=\"2\">Inactive</option>
              <option value=\"3\">Suspended</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditTaxID\">Tax ID</label>
            <input type=\"text\" id=\"modalEditTaxID\" name=\"modalEditTaxID\" class=\"form-control modal-edit-tax-id\" placeholder=\"123 456 7890\" />
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserPhone\">Phone Number</label>
            <div class=\"input-group input-group-merge\">
              <span class=\"input-group-text\">+1</span>
              <input type=\"text\" id=\"modalEditUserPhone\" name=\"modalEditUserPhone\" class=\"form-control phone-number-mask\" placeholder=\"202 555 0111\" />
            </div>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserLanguage\">Language</label>
            <select id=\"modalEditUserLanguage\" name=\"modalEditUserLanguage\" class=\"select2 form-select\" multiple>
              <option value=\"\">Select</option>
              <option value=\"english\" selected>English</option>
              <option value=\"spanish\">Spanish</option>
              <option value=\"french\">French</option>
              <option value=\"german\">German</option>
              <option value=\"dutch\">Dutch</option>
              <option value=\"hebrew\">Hebrew</option>
              <option value=\"sanskrit\">Sanskrit</option>
              <option value=\"hindi\">Hindi</option>
            </select>
          </div>
          <div class=\"col-12 col-md-6\">
            <label class=\"form-label\" for=\"modalEditUserCountry\">Country</label>
            <select id=\"modalEditUserCountry\" name=\"modalEditUserCountry\" class=\"select2 form-select\" data-allow-clear=\"true\">
              <option value=\"\">Select</option>
              <option value=\"Australia\">Australia</option>
              <option value=\"Bangladesh\">Bangladesh</option>
              <option value=\"Belarus\">Belarus</option>
              <option value=\"Brazil\">Brazil</option>
              <option value=\"Canada\">Canada</option>
              <option value=\"China\">China</option>
              <option value=\"France\">France</option>
              <option value=\"Germany\">Germany</option>
              <option value=\"India\">India</option>
              <option value=\"Indonesia\">Indonesia</option>
              <option value=\"Israel\">Israel</option>
              <option value=\"Italy\">Italy</option>
              <option value=\"Japan\">Japan</option>
              <option value=\"Korea\">Korea, Republic of</option>
              <option value=\"Mexico\">Mexico</option>
              <option value=\"Philippines\">Philippines</option>
              <option value=\"Russia\">Russian Federation</option>
              <option value=\"South Africa\">South Africa</option>
              <option value=\"Thailand\">Thailand</option>
              <option value=\"Turkey\">Turkey</option>
              <option value=\"Ukraine\">Ukraine</option>
              <option value=\"United Arab Emirates\">United Arab Emirates</option>
              <option value=\"United Kingdom\">United Kingdom</option>
              <option value=\"United States\">United States</option>
            </select>
          </div>
          <div class=\"col-12\">
            <label class=\"switch\">
              <input type=\"checkbox\" class=\"switch-input\">
              <span class=\"switch-toggle-slider\">
                <span class=\"switch-on\"></span>
                <span class=\"switch-off\"></span>
              </span>
              <span class=\"switch-label\">Use as a billing address?</span>
            </label>
          </div>
          <div class=\"col-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary me-sm-3 me-1\">Submit</button>
            <button type=\"reset\" class=\"btn btn-label-secondary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Cancel</button>
          </div>
        </form>
        {% endblock %}
      </div>
    </div>
  </div>
</div>

<!--/ Edit User Modal -->
<!-- Add New Credit Card Modal -->
<div class=\"modal fade\" id=\"upgradePlanModal\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan\">
    <div class=\"modal-content p-3 p-md-5\">
      <div class=\"modal-body\">
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
        <div class=\"text-center mb-4\">
          <h3>Upgrade Plan</h3>
          <p>Choose the best plan for user.</p>
        </div>
        <form id=\"upgradePlanForm\" class=\"row g-3\" onsubmit=\"return false\">
          <div class=\"col-sm-9\">
            <label class=\"form-label\" for=\"choosePlan\">Choose Plan</label>
            <select id=\"choosePlan\" name=\"choosePlan\" class=\"form-select\" aria-label=\"Choose Plan\">
              <option selected>Choose Plan</option>
              <option value=\"standard\">Standard - \$99/month</option>
              <option value=\"exclusive\">Exclusive - \$249/month</option>
              <option value=\"Enterprise\">Enterprise - \$499/month</option>
            </select>
          </div>
          <div class=\"col-sm-3 d-flex align-items-end\">
            <button type=\"submit\" class=\"btn btn-primary\">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class=\"mx-md-n5 mx-n3\">
      <div class=\"modal-body\">
        <h6 class=\"mb-0\">User current plan is standard plan</h6>
        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
          <div class=\"d-flex justify-content-center me-2 mt-3\">
            <sup class=\"h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary\">\$</sup>
            <h1 class=\"display-3 mb-0 text-primary\">99</h1>
            <sub class=\"h5 pricing-duration mt-auto mb-2\">/month</sub>
          </div>
          <button class=\"btn btn-label-danger cancel-subscription mt-3\">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
<!-- /Modal -->

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class=\"content-footer footer bg-footer-theme\">
  <div class=\"container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column\">
    <div class=\"mb-2 mb-md-0\">
      © <script>document.write(new Date().getFullYear())</script>
      , made with ❤️ by <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link fw-medium\">CuraCloud</a>
    </div>
    <div  class=\"d-none d-lg-inline-block\">
      <a href=\"https://themeselection.com/license/\" class=\"footer-link me-4\" target=\"_blank\">License</a>
      <a href=\"https://themeselection.com/\" target=\"_blank\" class=\"footer-link me-4\">More Themes</a>
      <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html\" target=\"_blank\" class=\"footer-link me-4\">Documentation</a>
      <a href=\"https://themeselection.com/support/\" target=\"_blank\" class=\"footer-link d-none d-sm-inline-block\">Support</a>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class=\"content-backdrop fade\"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class=\"layout-overlay layout-menu-toggle\"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class=\"drag-target\"></div>
  </div>
  <!-- / Layout wrapper -->
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
<script src=\"{{asset('back/assets/vendor/libs/moment/moment.js')}}\"></script>
{# <script src=\"{{asset('back/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js\"></script> #}
<script src=\"{{asset('back/assets/vendor/libs/sweetalert2/sweetalert2.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/cleavejs/cleave.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/cleavejs/cleave-phone.js')}}\"></script>
{# <script src=\"{{asset('back/assets/vendor/libs/select2/select2.js\"></script> #}
<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js')}}\"></script>
<script src=\"{{asset('back/assets/vendor/libs/flatpickr/flatpickr.js')}}\"></script>
<script src=\"{{asset('back/js/myjs.js')}}\"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src=\"{{asset('back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b')}}\"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src=\"{{asset('back/assets/js/modal-edit-user.js')}}\"></script>
{# <script src=\"{{asset('back/assets/js/app-user-view.js')}}\"></script> #}
<script src=\"{{asset('back/assets/js/app-user-view-account.js')}}\"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:54:46 GMT -->
</html>
", "account_details.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\account_details.html.twig");
    }
}
