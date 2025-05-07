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

/* prescription/map.html.twig */
class __TwigTemplate_215c7ddb85ab3d1d16bb5b6960274ad4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/map.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prescription/map.html.twig"));

        $this->parent = $this->loadTemplate("newbase.html.twig", "prescription/map.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "<title>User Map</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "  <div class=\"col-12\">
        <div class=\"card mb-4\">
            <h5 class=\"card-header\">User Location</h5>
            <div class=\"card-body\">
                <div class=\"leaflet-map\" id=\"userLocation\"></div>
            </div>
        </div>
    </div>

    <div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->

    <!-- Include Leaflet library -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
    <script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

    <!-- Include Leaflet.locatecontrol plugin -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.css\" />
    <script src=\"https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.js\"></script>

    <script>
        // Initialize Leaflet map
        var map = L.map('userLocation').setView([51.505, -0.09], 13); // Set your desired initial center and zoom level

        // Add a tile layer to the map (you can use different tile providers)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add Leaflet.locatecontrol plugin to the map
        L.control.locate().addTo(map);

        // Define array of locations
        var locations = [
            {lat: 36.899741119502714, lng: 10.185295979653816, name: 'Pharmacie Radhia Hedfi Rouahi' },
            {lat: 36.899083993668015, lng: 10.183429084300437, name: 'Pharmacie Ines abid kallel'},
            {lat: 36.89909180639492, lng: 10.180820333617724, name: 'Pharmacie de Nuit Jihene Dziri Ghroubi'},
            {lat: 36.90157510008835, lng: 10.183630617123328, name: 'Pharmacie Selima'},
            {lat: 36.90037687753828, lng: 10.180595193680583, name: 'Pharmacie Oueslati Nejib'},
            {lat:  36.89701362615513, lng: 10.181123437699414, name: 'Pharmacie Imen Hammami Ammar'},
        ];

        // Iterate over locations and add markers to the map
        locations.forEach(function(location) {
            var popupContent = `
                <div style=\"text-align: center;\">\${location.name}</div>`;
            L.marker([location.lat, location.lng]).addTo(map)
                .bindPopup(popupContent); // Add a popup with the location name and button
        });  
    </script>
</div>
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
        return "prescription/map.html.twig";
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
        return array (  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'newbase.html.twig' %}
{% block title %}<title>User Map</title>{% endblock %}

{% block body %}
  <div class=\"col-12\">
        <div class=\"card mb-4\">
            <h5 class=\"card-header\">User Location</h5>
            <div class=\"card-body\">
                <div class=\"leaflet-map\" id=\"userLocation\"></div>
            </div>
        </div>
    </div>

    <div style=\"margin-bottom: 50px;\"></div> <!-- Add some space here -->

    <!-- Include Leaflet library -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
    <script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>

    <!-- Include Leaflet.locatecontrol plugin -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.css\" />
    <script src=\"https://unpkg.com/leaflet.locatecontrol/dist/L.Control.Locate.min.js\"></script>

    <script>
        // Initialize Leaflet map
        var map = L.map('userLocation').setView([51.505, -0.09], 13); // Set your desired initial center and zoom level

        // Add a tile layer to the map (you can use different tile providers)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add Leaflet.locatecontrol plugin to the map
        L.control.locate().addTo(map);

        // Define array of locations
        var locations = [
            {lat: 36.899741119502714, lng: 10.185295979653816, name: 'Pharmacie Radhia Hedfi Rouahi' },
            {lat: 36.899083993668015, lng: 10.183429084300437, name: 'Pharmacie Ines abid kallel'},
            {lat: 36.89909180639492, lng: 10.180820333617724, name: 'Pharmacie de Nuit Jihene Dziri Ghroubi'},
            {lat: 36.90157510008835, lng: 10.183630617123328, name: 'Pharmacie Selima'},
            {lat: 36.90037687753828, lng: 10.180595193680583, name: 'Pharmacie Oueslati Nejib'},
            {lat:  36.89701362615513, lng: 10.181123437699414, name: 'Pharmacie Imen Hammami Ammar'},
        ];

        // Iterate over locations and add markers to the map
        locations.forEach(function(location) {
            var popupContent = `
                <div style=\"text-align: center;\">\${location.name}</div>`;
            L.marker([location.lat, location.lng]).addTo(map)
                .bindPopup(popupContent); // Add a popup with the location name and button
        });  
    </script>
</div>
{% endblock %}
", "prescription/map.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\prescription\\map.html.twig");
    }
}
