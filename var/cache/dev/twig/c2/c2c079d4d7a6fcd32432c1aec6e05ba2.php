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

/* @Mercure/Icon/mercure.svg */
class __TwigTemplate_020396e55513530a03ef9117804fe938 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Mercure/Icon/mercure.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Mercure/Icon/mercure.svg"));

        yield "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg version=\"1.1\" id=\"Logo_Mercure\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\"
\t y=\"0px\" viewBox=\"0 0 147.5 144\" style=\"enable-background:new 0 0 147.5 144;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:url(#SVGID_1_);}
\t.st1{fill:url(#SVGID_2_);}
</style>
<linearGradient id=\"SVGID_1_\" gradientUnits=\"userSpaceOnUse\" x1=\"0\" y1=\"352\" x2=\"144\" y2=\"352\" gradientTransform=\"matrix(1 0 0 1 0 -280)\">
\t<stop  offset=\"0\" style=\"stop-color:#76C8DD\"/>
\t<stop  offset=\"1\" style=\"stop-color:#2AB3D7\"/>
</linearGradient>
<path class=\"st0\" d=\"M72,144c-39.7,0-72-32.3-72-72S32.3,0,72,0s72,32.3,72,72S111.7,144,72,144z M72,6.1C35.7,6.1,6.1,35.7,6.1,72
\ts29.6,65.9,65.9,65.9s66-29.6,66-65.9S108.4,6.1,72,6.1z\"/>
<linearGradient id=\"SVGID_2_\" gradientUnits=\"userSpaceOnUse\" x1=\"15.5\" y1=\"351.25\" x2=\"128.5\" y2=\"351.25\" gradientTransform=\"matrix(1 0 0 1 0 -280)\">
\t<stop  offset=\"0\" style=\"stop-color:#76C8DD\"/>
\t<stop  offset=\"1\" style=\"stop-color:#2AB3D7\"/>
</linearGradient>
<path class=\"st1\" d=\"M72,14.7c-31.2,0-56.5,25.3-56.5,56.5c0,9.7,2.5,18.9,6.8,26.9c1.5-1.1,3.1-2.2,4.9-3.3
\tc31-18.5,58.4-33.7,76.6-62c0,0-1.3,32-19.7,46.9c-4.1,3.3-7.6,5.9-10.9,8c9.3-4.9,17.4-10.5,23.7-18c0,0-0.5,21.5-16.3,31
\tc-5.9,3.5-10.8,5.5-15.8,7c9-2,14.9-4.5,19.6-7.7c-4,13.3-12.7,20.3-26.2,22.3c-4.9,0.5-9.1-0.5-13.5-1.5c8.1,4.5,17.4,7,27.3,7
\tc31.2,0,56.5-25.3,56.5-56.5S103.3,14.7,72,14.7z\"/>
</svg>
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
        return "@Mercure/Icon/mercure.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<svg version=\"1.1\" id=\"Logo_Mercure\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\"
\t y=\"0px\" viewBox=\"0 0 147.5 144\" style=\"enable-background:new 0 0 147.5 144;\" xml:space=\"preserve\">
<style type=\"text/css\">
\t.st0{fill:url(#SVGID_1_);}
\t.st1{fill:url(#SVGID_2_);}
</style>
<linearGradient id=\"SVGID_1_\" gradientUnits=\"userSpaceOnUse\" x1=\"0\" y1=\"352\" x2=\"144\" y2=\"352\" gradientTransform=\"matrix(1 0 0 1 0 -280)\">
\t<stop  offset=\"0\" style=\"stop-color:#76C8DD\"/>
\t<stop  offset=\"1\" style=\"stop-color:#2AB3D7\"/>
</linearGradient>
<path class=\"st0\" d=\"M72,144c-39.7,0-72-32.3-72-72S32.3,0,72,0s72,32.3,72,72S111.7,144,72,144z M72,6.1C35.7,6.1,6.1,35.7,6.1,72
\ts29.6,65.9,65.9,65.9s66-29.6,66-65.9S108.4,6.1,72,6.1z\"/>
<linearGradient id=\"SVGID_2_\" gradientUnits=\"userSpaceOnUse\" x1=\"15.5\" y1=\"351.25\" x2=\"128.5\" y2=\"351.25\" gradientTransform=\"matrix(1 0 0 1 0 -280)\">
\t<stop  offset=\"0\" style=\"stop-color:#76C8DD\"/>
\t<stop  offset=\"1\" style=\"stop-color:#2AB3D7\"/>
</linearGradient>
<path class=\"st1\" d=\"M72,14.7c-31.2,0-56.5,25.3-56.5,56.5c0,9.7,2.5,18.9,6.8,26.9c1.5-1.1,3.1-2.2,4.9-3.3
\tc31-18.5,58.4-33.7,76.6-62c0,0-1.3,32-19.7,46.9c-4.1,3.3-7.6,5.9-10.9,8c9.3-4.9,17.4-10.5,23.7-18c0,0-0.5,21.5-16.3,31
\tc-5.9,3.5-10.8,5.5-15.8,7c9-2,14.9-4.5,19.6-7.7c-4,13.3-12.7,20.3-26.2,22.3c-4.9,0.5-9.1-0.5-13.5-1.5c8.1,4.5,17.4,7,27.3,7
\tc31.2,0,56.5-25.3,56.5-56.5S103.3,14.7,72,14.7z\"/>
</svg>
", "@Mercure/Icon/mercure.svg", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\vendor\\symfony\\mercure-bundle\\src\\Resources\\views\\Icon\\mercure.svg");
    }
}
