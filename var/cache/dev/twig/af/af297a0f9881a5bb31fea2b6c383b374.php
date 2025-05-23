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

/* reset_password/post_request.html.twig */
class __TwigTemplate_74d77f4bcd93a9a11df845d6106ec3dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/post_request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/post_request.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<html lang=\"en\" class=\"light-style   layout-menu-fixed  customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-template=\"blank-menu-theme-default-light\">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/forgot-password-basic by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:55:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>Forgot Password</title>
  <meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\" />
  <meta name=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
  <!-- laravel CRUD token -->
  <meta name=\"csrf-token\" content=\"0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn\">
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
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
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
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d"), "html", null, true);
        yield "\" />
<!-- Core CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8\" class=\"template-customizer-core-css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1\" class=\"template-customizer-theme-css"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 55
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d"), "html", null, true);
        yield "\" />
<!-- Vendors CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b"), "html", null, true);
        yield "\" />
<link rel=\"stylesheet\" href=\"";
        // line 58
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd"), "html", null, true);
        yield "\" />

<!-- Vendor Styles -->
<!-- Vendor -->
<link rel=\"stylesheet\" href=\"";
        // line 62
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/styles/index.min.css"), "html", null, true);
        yield "\" />


<!-- Page Styles -->
<!-- Page -->
<link rel=\"stylesheet\" href=\"";
        // line 67
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/css/pages/page-auth.css"), "html", null, true);
        yield "\">

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- \$isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src=\"";
        // line 72
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/helpers.js"), "html", null, true);
        yield "\"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src=\"";
        // line 76
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/template-customizer.js"), "html", null, true);
        yield "\"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src=\"";
        // line 79
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/config.js"), "html", null, true);
        yield "\"></script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  
<!-- Content -->
<div class=\"container-xxl\">
  <div class=\"authentication-wrapper authentication-basic container-p-y\">
    <div class=\"authentication-inner py-4\">

      <!-- Forgot Password -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- Logo -->
          <div class=\"app-brand justify-content-center\">
            <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"app-brand-link gap-2\">
              <span class=\"app-brand-logo demo\"><svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
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
              <span class=\"app-brand-text demo text-body fw-bold\">CuraCloud</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class=\"mb-2\">Password Reset Email Sent 📨</h4>
          <p class=\"mb-4\">An email was just sent that contains a link that you can use to reset your password. This link will expire in ";
        // line 140
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 140, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 140), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 140, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 140), "ResetPasswordBundle"), "html", null, true);
        yield ".</p>
            <p class=\"mb-4\">If you don't receive an email please check your spam folder or <a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\"> try again.</p>
          <div class=\"text-center\">
            <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"d-flex align-items-center justify-content-center\">
              <i class=\"bx bx-chevron-left scaleX-n1-rtl bx-sm\"></i>
              Back to login
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
    </div>
  </div>
</div>
<!--/ Content -->

  <!--/ Layout Content -->
  

  <!-- Include Scripts -->
  <!-- \$isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src=\"";
        // line 162
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 163
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 164
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 165
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 166
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 167
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 168
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 169
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 170
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 171
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"), "html", null, true);
        yield "\"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src=\"";
        // line 174
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b"), "html", null, true);
        yield "\"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src=\"";
        // line 180
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/pages-auth.js"), "html", null, true);
        yield "\"></script>
<!-- END: Page JS-->

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reset_password/post_request.html.twig";
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
        return array (  306 => 180,  297 => 174,  291 => 171,  287 => 170,  283 => 169,  279 => 168,  275 => 167,  271 => 166,  267 => 165,  263 => 164,  259 => 163,  255 => 162,  233 => 143,  228 => 141,  224 => 140,  160 => 79,  154 => 76,  147 => 72,  139 => 67,  131 => 62,  124 => 58,  120 => 57,  115 => 55,  111 => 54,  107 => 53,  102 => 51,  98 => 50,  94 => 49,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\" class=\"light-style   layout-menu-fixed  customizer-hide\" dir=\"ltr\" data-theme=\"theme-default\" data-template=\"blank-menu-theme-default-light\">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/auth/forgot-password-basic by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:55:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" /><!-- /Added by HTTrack -->
<head>
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />

  <title>Forgot Password</title>
  <meta name=\"description\" content=\"Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!\" />
  <meta name=\"keywords\" content=\"dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5\">
  <!-- laravel CRUD token -->
  <meta name=\"csrf-token\" content=\"0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn\">
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
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
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
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8\" class=\"template-customizer-core-css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1\" class=\"template-customizer-theme-css')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d')}}\" />
<!-- Vendors CSS -->
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b')}}\" />
<link rel=\"stylesheet\" href=\"{{asset('back/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd')}}\" />

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
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP\" height=\"0\" width=\"0\" style=\"display: none; visibility: hidden\"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  
<!-- Content -->
<div class=\"container-xxl\">
  <div class=\"authentication-wrapper authentication-basic container-p-y\">
    <div class=\"authentication-inner py-4\">

      <!-- Forgot Password -->
      <div class=\"card\">
        <div class=\"card-body\">
          <!-- Logo -->
          <div class=\"app-brand justify-content-center\">
            <a href=\"https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1\" class=\"app-brand-link gap-2\">
              <span class=\"app-brand-logo demo\"><svg width=\"25\" viewBox=\"0 0 25 42\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
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
              <span class=\"app-brand-text demo text-body fw-bold\">CuraCloud</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class=\"mb-2\">Password Reset Email Sent 📨</h4>
          <p class=\"mb-4\">An email was just sent that contains a link that you can use to reset your password. This link will expire in {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.</p>
            <p class=\"mb-4\">If you don't receive an email please check your spam folder or <a href=\"{{ path('app_forgot_password_request') }}\"> try again.</p>
          <div class=\"text-center\">
            <a href=\"{{path('app_login')}}\" class=\"d-flex align-items-center justify-content-center\">
              <i class=\"bx bx-chevron-left scaleX-n1-rtl bx-sm\"></i>
              Back to login
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
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
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src=\"{{asset('back/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b')}}\"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src=\"{{asset('back/assets/js/pages-auth.js')}}\"></script>
<!-- END: Page JS-->

</body>
</html>
", "reset_password/post_request.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\reset_password\\post_request.html.twig");
    }
}
