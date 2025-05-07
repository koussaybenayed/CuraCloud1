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

/* base.html.twig */
class __TwigTemplate_dc361ffa09e0e68d2db83d0b00cd6582 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en-US\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--  
    Document Title
    =============================================
    -->
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 14
        yield "    <!--  
    Favicons
    =============================================
    -->
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 59
        yield "  </head>
  
  <body data-spy=\"scroll\" data-target=\".onpage-navigation\" data-offset=\"60\">
    <main>
      <div class=\"page-loader\">
        <div class=\"loader\">Loading...</div>
      </div>
      <nav class=\"navbar navbar-custom navbar-fixed-top navbar-transparent\" role=\"navigation\">
        
        <div class=\"container\">
          <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#custom-collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button><a class=\"navbar-brand\" href=\"index.html\">CuraCloud</a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"custom-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a href=\"#\">Home</a>
                <!--ul class=\"dropdown-menu\">
                  <li><a href=\"index_mp_fullscreen_video_background.html\">Default</a></li>
                  <li><a href=\"index_op_fullscreen_gradient_overlay.html\">One Page</a></li>
                  <li><a href=\"index_agency.html\">Agency</a></li>
                  <li><a href=\"index_portfolio.html\">Portfolio</a></li>
                  <li><a href=\"index_restaurant.html\">Restaurant</a></li>
                  <li><a href=\"index_finance.html\">Finance</a></li>
                  <li><a href=\"index_landing.html\">Landing Page</a></li>
                  <li><a href=\"index_photography.html\">Photography</a></li>
                  <li><a href=\"index_shop.html\">Shop</a></li>
                </ul-->
              </li>
              <li><a href=\"#\">About</a>
                <!--ul class=\"dropdown-menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Static Image Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_static.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_static.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Flexslider Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_flexslider.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_flexslider.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Video Background Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_video_background.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_video_background.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Text Rotator Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_text_rotator.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_text_rotator.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Gradient Overlay Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_gradient_overlay.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_gradient_overlay.html\">Classic</a></li>
                    </ul>
                  </li>
                </ul-->
              </li>
              <li><a href=\"#\">Blog</a>
                <!--ul class=\"dropdown-menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">About</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"about1.html\">About 1</a></li>
                      <li><a href=\"about2.html\">About 2</a></li>
                      <li><a href=\"about3.html\">About 3</a></li>
                      <li><a href=\"about4.html\">About 4</a></li>
                      <li><a href=\"about5.html\">About 5</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Services</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"service1.html\">Service 1</a></li>
                      <li><a href=\"service2.html\">Service 2</a></li>
                      <li><a href=\"service3.html\">Service 3</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Pricing</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"pricing1.html\">Pricing 1</a></li>
                      <li><a href=\"pricing2.html\">Pricing 2</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Gallery</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"gallery_col_2.html\">2 Columns</a></li>
                      <li><a href=\"gallery_col_3.html\">3 Columns</a></li>
                      <li><a href=\"gallery_col_4.html\">4 Columns</a></li>
                      <li><a href=\"gallery_col_6.html\">6 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Contact</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"contact1.html\">Contact 1</a></li>
                      <li><a href=\"contact2.html\">Contact 2</a></li>
                      <li><a href=\"contact3.html\">Contact 3</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Restaurant menu</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"restaurant_menu1.html\">Menu 2 Columns</a></li>
                      <li><a href=\"restaurant_menu2.html\">Menu 3 Columns</a></li>
                    </ul>
                  </li>
                  <li><a href=\"login_register.html\">Login / Register</a></li>
                  <li><a href=\"faq.html\">FAQ</a></li>
                  <li><a href=\"404.html\">Page 404</a></li>
                </ul-->
              </li>
              <li><a href=\"#\">Contact</a>
                <!--ul class=\"dropdown-menu\" role=\"menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Boxed</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_boxed_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_boxed_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_boxed_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Boxed - Gutter</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_boxed_gutter_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_boxed_gutter_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_boxed_gutter_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Full Width</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_full_width_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_full_width_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_full_width_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Full Width - Gutter</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_full_width_gutter_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_full_width_gutter_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_full_width_gutter_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Masonry</a>
                    <ul class=\"dropdown-menu\">
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Boxed</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_masonry_boxed_col_2.html\">2 Columns</a></li>
                          <li><a href=\"portfolio_masonry_boxed_col_3.html\">3 Columns</a></li>
                          <li><a href=\"portfolio_masonry_boxed_col_4.html\">4 Columns</a></li>
                        </ul>
                      </li>
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Full Width</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_masonry_full_width_col_2.html\">2 Columns</a></li>
                          <li><a href=\"portfolio_masonry_full_width_col_3.html\">3 Columns</a></li>
                          <li><a href=\"portfolio_masonry_full_width_col_4.html\">4 Columns</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Hover Style</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_hover_black.html\">Black</a></li>
                      <li><a href=\"portfolio_hover_gradient.html\">Gradient</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Single</a>
                    <ul class=\"dropdown-menu\">
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Featured Image</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_single_featured_image1.html\">Style 1</a></li>
                          <li><a href=\"portfolio_single_featured_image2.html\">Style 2</a></li>
                        </ul>
                      </li>
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Featured Slider</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_single_featured_slider1.html\">Style 1</a></li>
                          <li><a href=\"portfolio_single_featured_slider2.html\">Style 2</a></li>
                        </ul>
                      </li>
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Featured Video</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_single_featured_video1.html\">Style 1</a></li>
                          <li><a href=\"portfolio_single_featured_video2.html\">Style 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul-->
              </li>
              <li><a href=\"#\">Custom</a>
                <!--ul class=\"dropdown-menu\" role=\"menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Standard</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_standard_left_sidebar.html\">Left Sidebar</a></li>
                      <li><a href=\"blog_standard_right_sidebar.html\">Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Grid</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_grid_col_2.html\">2 Columns</a></li>
                      <li><a href=\"blog_grid_col_3.html\">3 Columns</a></li>
                      <li><a href=\"blog_grid_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Masonry</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_grid_masonry_col_2.html\">2 Columns</a></li>
                      <li><a href=\"blog_grid_masonry_col_3.html\">3 Columns</a></li>
                      <li><a href=\"blog_grid_masonry_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Single</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_single_left_sidebar.html\">Left Sidebar</a></li>
                      <li><a href=\"blog_single_right_sidebar.html\">Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul-->
              </li>
              <!--li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Features</a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                  <li><a href=\"alerts-and-wells.html\"><i class=\"fa fa-bolt\"></i> Alerts and Wells</a></li>
                  <li><a href=\"buttons.html\"><i class=\"fa fa-link fa-sm\"></i> Buttons</a></li>
                  <li><a href=\"tabs_and_accordions.html\"><i class=\"fa fa-tasks\"></i> Tabs &amp; Accordions</a></li>
                  <li><a href=\"content_box.html\"><i class=\"fa fa-list-alt\"></i> Contents Box</a></li>
                  <li><a href=\"forms.html\"><i class=\"fa fa-check-square-o\"></i> Forms</a></li>
                  <li><a href=\"icons.html\"><i class=\"fa fa-star\"></i> Icons</a></li>
                  <li><a href=\"progress-bars.html\"><i class=\"fa fa-server\"></i> Progress Bars</a></li>
                  <li><a href=\"typography.html\"><i class=\"fa fa-font\"></i> Typography</a></li>
                </ul>
              </li-->
              <!--li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Shop</a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Product</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"shop_product_col_3.html\">3 columns</a></li>
                      <li><a href=\"shop_product_col_4.html\">4 columns</a></li>
                    </ul>
                  </li>
                  <li><a href=\"shop_single_product.html\">Single Product</a></li>
                  <li><a href=\"shop_checkout.html\">Checkout</a></li>
                </ul>
              </li-->
              ";
        // line 303
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 325
        yield "            </ul>
          </div>
        </div>
      </nav>
     
      <section class=\"home-section home-parallax home-fade\" id=\"home\">
        <div class=\"hero-slider\">
          <ul class=\"slides\">
            <li class=\"bg-dark-30 bg-dark\" style=\"background-image:url(front/images/section-8.jpg);\">
              <div class=\"titan-caption\">
                <div class=\"caption-content\">
                  <div class=\"font-alt mb-30 titan-title-size-1\">Hello &amp; welcome</div>
                  <div class=\"font-alt mb-40 titan-title-size-4\">We are CuraCloud</div><a class=\"section-scroll btn btn-border-w btn-round\" href=\"#about\">Learn More</a>
                </div>
              </div>
            </li>
            <li class=\"bg-dark-30 bg-dark\" style=\"background-image:url(front/images/section-9.jpeg);\">
              <div class=\"titan-caption\">
                <div class=\"caption-content\">
                  <div class=\"font-alt mb-30 titan-title-size-2\">CuraCloud is an EHR system for<br/>tunisian patients and health care providers
                  </div><a class=\"btn btn-border-w btn-round\" href=\"about\">Learn More</a>
                </div>
              </div>
            </li>
            <li class=\"bg-dark-30 bg-dark\" style=\"background-image:url(front/images/section-10.jpg);\">
              <div class=\"titan-caption\">
                <div class=\"caption-content\">
                  <div class=\"font-alt mb-30 titan-title-size-1\">Our website is your companion on every device, providing a smooth and friendly experience</div>
                  <div class=\"font-alt mb-40 titan-title-size-3\">Your device, your rules</div><a class=\"section-scroll btn btn-border-w btn-round\" href=\"#about\">Learn More</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
       ";
        // line 360
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 761
        yield "        <div class=\"module-small bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">About CuraCloud</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href=\"#\">somecompany@example.com</a></p>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">Recent Comments</h5>
                  <ul class=\"icon-list\">
                    <li>Maria on <a href=\"#\">Designer Desk Essentials</a></li>
                    <li>John on <a href=\"#\">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href=\"#\">Eco bag Mockup</a></li>
                    <li>Jack on <a href=\"#\">Bottle Mockup</a></li>
                    <li>Mark on <a href=\"#\">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">Blog Categories</h5>
                  <ul class=\"icon-list\">
                    <li><a href=\"#\">Photography - 7</a></li>
                    <li><a href=\"#\">Web Design - 3</a></li>
                    <li><a href=\"#\">Illustration - 12</a></li>
                    <li><a href=\"#\">Marketing - 1</a></li>
                    <li><a href=\"#\">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">Popular Posts</h5>
                  <ul class=\"widget-posts\">
                    <li class=\"clearfix\">
                      <div class=\"widget-posts-image\"><a href=\"#\"><img src=\"";
        // line 801
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/rp-1.jpg"), "html", null, true);
        yield "\" alt=\"Post Thumbnail\"/></a></div>
                      <div class=\"widget-posts-body\">
                        <div class=\"widget-posts-title\"><a href=\"#\">Designer Desk Essentials</a></div>
                        <div class=\"widget-posts-meta\">23 january</div>
                      </div>
                    </li>
                    <li class=\"clearfix\">
                      <div class=\"widget-posts-image\"><a href=\"#\"><img src=\"";
        // line 808
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/rp-2.jpg"), "html", null, true);
        yield "\" alt=\"Post Thumbnail\"/></a></div>
                      <div class=\"widget-posts-body\">
                        <div class=\"widget-posts-title\"><a href=\"#\">Realistic Business Card Mockup</a></div>
                        <div class=\"widget-posts-meta\">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class=\"divider-d\">
        
        <footer class=\"footer bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <p class=\"copyright font-alt\">&copy; 2017&nbsp;<a href=\"index.html\">CuraCloud</a>, All Rights Reserved</p>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"footer-social-links\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class=\"scroll-up\"><a href=\"#totop\"><i class=\"fa fa-angle-double-up\"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    ";
        // line 842
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 857
        yield "  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        yield "    <title>CuraCloud</title>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 18
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 19
        yield "    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-57x57.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-60x60.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-72x72.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-76x76.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-114x114.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-120x120.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-144x144.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-152x152.png"), "html", null, true);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 27
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/apple-icon-180x180.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/android-icon-192x192.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/favicon-32x32.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/favicon-96x96.png"), "html", null, true);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 31
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/favicon-16x16.png"), "html", null, true);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        yield "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicons/ms-icon-144x144.png"), "html", null, true);
        yield "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href=\"";
        // line 42
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Template specific stylesheets-->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Volkhov:400i\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
    <link href=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/animate.css/animate.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/components-font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 49
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/et-line-font/et-line-font.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/flexslider/flexslider.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/owl.carousel/dist/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/owl.carousel/dist/assets/owl.theme.default.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/simple-text-rotator/simpletextrotator.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <!-- Main stylesheet and color file-->
    <link href=\"";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link id=\"color-scheme\" href=\"";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/colors/default.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 303
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 304
        yield "              <li><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Register</a>
                <!--ul class=\"dropdown-menu\">
                  <li><a href=\"documentation.html#contact\">Contact Form</a></li>
                  <li><a href=\"documentation.html#reservation\">Reservation Form</a></li>
                  <li><a href=\"documentation.html#mailchimp\">Mailchimp</a></li>
                  <li><a href=\"documentation.html#gmap\">Google Map</a></li>
                  <li><a href=\"documentation.html#plugin\">Plugins</a></li>
                  <li><a href=\"documentation.html#changelog\">Changelog</a></li>
                </ul-->
              </li>
              <li><a href=\"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login</a>
                <!--ul class=\"dropdown-menu\">
                  <li><a href=\"documentation.html#contact\">Contact Form</a></li>
                  <li><a href=\"documentation.html#reservation\">Reservation Form</a></li>
                  <li><a href=\"documentation.html#mailchimp\">Mailchimp</a></li>
                  <li><a href=\"documentation.html#gmap\">Google Map</a></li>
                  <li><a href=\"documentation.html#plugin\">Plugins</a></li>
                  <li><a href=\"documentation.html#changelog\">Changelog</a></li>
                </ul-->
              </li>
              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 360
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 361
        yield "      <div class=\"main\">
        <section class=\"module\" id=\"about\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-8 col-sm-offset-2\">
                <h2 class=\"module-title font-alt\">Welcome to CuraCloud</h2>
                <div class=\"module-subtitle font-serif large-text\">a dedicated platform committed to providing a top-tier Electronic Health Records (EHR) experience. Rooted in Tunisia, our focus is on meticulously curating a user-friendly space for efficient healthcare management.</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-2 col-sm-offset-5\">
                <div class=\"large-text align-center\"><a class=\"section-scroll\" href=\"#services\"><i class=\"fa fa-angle-down\"></i></a></div>
              </div>
            </div>
          </div>
        </section>
        <hr class=\"divider-w\">
        <section class=\"module\" id=\"services\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Our Services</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row multi-columns-row\">
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-strategy\"></span></div>
                  <h3 class=\"features-title font-alt\">Patient Data Management</h3>
                  <p>Secure storage of patient records provide seamless access and update capabilities, ensuring high accuracy and up-to-date patient information.</p>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-caution\"></span></div>
                  <h3 class=\"features-title font-alt\">Secure Coding Practices</h3>
                  <p>Robust security protocols and meticulous coding safeguard patient data against unauthorized access and ensure compliance with healthcare regulations.</p>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-mobile\"></span></div>
                  <h3 class=\"features-title font-alt\">Mobile-Ready Design</h3>
                  <p>Responsive design ensures that the EHR system is accessible on various devices, from desktops to tablets and smartphones, providing critical patient information on-the-go.</p>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-gears\"></span></div>
                  <h3 class=\"features-title font-alt\">PERFORMANCE &amp; ACCESSIBILITY</h3>
                  <p>Optimized system architecture allows for rapid retrieval and processing of health records, enhancing efficiency in clinical decision-making and patient care.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class=\"module bg-dark-60\" data-background=\"front/images/section-6.jpg\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div class=\"video-box\">
                  <div class=\"video-box-icon\"><a class=\"video-pop-up\" href=\"https://www.youtube.com/watch?v=TTxZj3DZiIM\"><span class=\"icon-video\"></span></a></div>
                  <div class=\"video-title font-alt\">Presentation</div>
                  <div class=\"video-subtitle font-alt\">Watch the video about our new products</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <section class=\"module-small bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-8 col-lg-6 col-lg-offset-2\">
                <div class=\"callout-text font-alt\">
                  <h3 class=\"callout-title\">Want to see more works?</h3>
                  <p>We are always open to interesting projects.</p>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div class=\"callout-btn-box\"><a class=\"btn btn-w btn-round\" href=\"portfolio_boxed_gutter_col_3.html\">Lets view portfolio</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class=\"module\" id=\"alt-features\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Our features</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-3 col-lg-3\">
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-strategy\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Branding</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-tools-2\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Development</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-target\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Marketing</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-tools\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Design</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
              <div class=\"col-md-6 col-lg-6 hidden-xs hidden-sm\">
                <div class=\"alt-services-image align-center\"><img src=\"";
        // line 475
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/promo.png"), "html", null, true);
        yield "\" alt=\"Feature Image\"></div>
              </div>
              <div class=\"col-sm-6 col-md-3 col-lg-3\">
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-camera\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Photography</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-mobile\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Mobile</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-linegraph\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Music</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-basket\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Shop</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class=\"divider-w\">
        <section class=\"module\" id=\"team\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Meet Our Team</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"";
        // line 510
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team-1.jpg"), "html", null, true);
        yield "\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Hi all</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Jim Stone</div>
                    <div class=\"team-role\">Art Director</div>
                  </div>
                </div>
              </div>
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"";
        // line 525
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team-2.jpg"), "html", null, true);
        yield "\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Good day</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Andy River</div>
                    <div class=\"team-role\">Creative director</div>
                  </div>
                </div>
              </div>
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"";
        // line 540
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team-3.jpg"), "html", null, true);
        yield "\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Hello</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Adele Snow</div>
                    <div class=\"team-role\">Account manager</div>
                  </div>
                </div>
              </div>
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"";
        // line 555
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/team-4.jpg"), "html", null, true);
        yield "\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Yes, it's me</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Dylan Woods</div>
                    <div class=\"team-role\">Developer</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class=\"module bg-dark-60 pt-0 pb-0 parallax-bg testimonial\" data-background=\"";
        // line 571
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/testimonial_bg.jpg"), "html", null, true);
        yield "\">
          <div class=\"testimonials-slider pt-140 pb-140\">
            <ul class=\"slides\">
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <div class=\"module-icon\"><span class=\"icon-quote\"></span></div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                      <blockquote class=\"testimonial-text font-alt\">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                      <div class=\"testimonial-author\">
                        <div class=\"testimonial-caption font-alt\">
                          <div class=\"testimonial-title\">Jack Woods</div>
                          <div class=\"testimonial-descr\">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <div class=\"module-icon\"><span class=\"icon-quote\"></span></div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                      <blockquote class=\"testimonial-text font-alt\">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                      <div class=\"testimonial-author\">
                        <div class=\"testimonial-caption font-alt\">
                          <div class=\"testimonial-title\">Jim Stone</div>
                          <div class=\"testimonial-descr\">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <div class=\"module-icon\"><span class=\"icon-quote\"></span></div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                      <blockquote class=\"testimonial-text font-alt\">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                      <div class=\"testimonial-author\">
                        <div class=\"testimonial-caption font-alt\">
                          <div class=\"testimonial-title\">Adele Snow</div>
                          <div class=\"testimonial-descr\">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class=\"module\" id=\"news\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Latest blog posts</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row multi-columns-row post-columns\">
              <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post mb-20\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"";
        // line 660
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post-1.jpg"), "html", null, true);
        yield "\" alt=\"Blog-post Thumbnail\"/></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"#\">Our trip to the Alps</a></h2>
                    <div class=\"post-meta\">By&nbsp;<a href=\"#\">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\" href=\"#\">Read more</a></div>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post mb-20\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"";
        // line 674
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post-2.jpg"), "html", null, true);
        yield "\" alt=\"Blog-post Thumbnail\"/></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"#\">Shore after the tide</a></h2>
                    <div class=\"post-meta\">By&nbsp;<a href=\"#\">Andy River</a>&nbsp;| 11 November | 4 Comments
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\" href=\"#\">Read more</a></div>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post mb-20\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"";
        // line 688
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/post-3.jpg"), "html", null, true);
        yield "\" alt=\"Blog-post Thumbnail\"/></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"#\">We in New Zealand</a></h2>
                    <div class=\"post-meta\">By&nbsp;<a href=\"#\">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\" href=\"#\">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class=\"module-small bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-6 col-lg-4 col-lg-offset-2\">
                <div class=\"callout-text font-alt\">
                  <h3 class=\"callout-title\">Subscribe now</h3>
                  <p>We will not spam your email.</p>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-6 col-lg-4\">
                <div class=\"callout-btn-box\">
                  <form id=\"subscription-form\" role=\"form\" method=\"post\" action=\"php/subscribe.php\">
                    <div class=\"input-group\">
                      <input class=\"form-control\" type=\"email\" id=\"semail\" name=\"semail\" placeholder=\"Your Email\" data-validation-required-message=\"Please enter your email address.\" required=\"required\"/><span class=\"input-group-btn\">
                        <button class=\"btn btn-g btn-round\" id=\"subscription-form-submit\" type=\"submit\">Submit</button></span>
                    </div>
                  </form>
                  <div class=\"text-center\" id=\"subscription-response\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class=\"module\" id=\"contact\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Get in touch</h2>
                <div class=\"module-subtitle font-serif\"></div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <form id=\"contactForm\" role=\"form\" method=\"post\" action=\"php/contact.php\">
                  <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"name\">Name</label>
                    <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Your Name*\" required=\"required\" data-validation-required-message=\"Please enter your name.\"/>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"email\">Email</label>
                    <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Your Email*\" required=\"required\" data-validation-required-message=\"Please enter your email address.\"/>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <textarea class=\"form-control\" rows=\"7\" id=\"message\" name=\"message\" placeholder=\"Your Message*\" required=\"required\" data-validation-required-message=\"Please enter your message.\"></textarea>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"text-center\">
                    <button class=\"btn btn-block btn-round btn-d\" id=\"cfsubmit\" type=\"submit\">Submit</button>
                  </div>
                </form>
                <div class=\"ajax-response font-alt\" id=\"contactFormResponse\"></div>
              </div>
            </div>
          </div>
        </section>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 842
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 843
        yield "    <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/jquery/dist/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 844
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 845
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/wow/dist/wow.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 846
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 847
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/isotope/dist/isotope.pkgd.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 848
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/imagesloaded/imagesloaded.pkgd.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 849
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/flexslider/jquery.flexslider.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 850
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/owl.carousel/dist/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 851
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/smoothscroll.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 852
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/magnific-popup/dist/jquery.magnific-popup.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 853
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 854
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 855
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "base.html.twig";
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
        return array (  1172 => 855,  1168 => 854,  1164 => 853,  1160 => 852,  1156 => 851,  1152 => 850,  1148 => 849,  1144 => 848,  1140 => 847,  1136 => 846,  1132 => 845,  1128 => 844,  1123 => 843,  1113 => 842,  1029 => 688,  1012 => 674,  995 => 660,  903 => 571,  884 => 555,  866 => 540,  848 => 525,  830 => 510,  792 => 475,  676 => 361,  666 => 360,  644 => 314,  630 => 304,  620 => 303,  607 => 57,  603 => 56,  598 => 54,  594 => 53,  590 => 52,  586 => 51,  582 => 50,  578 => 49,  574 => 48,  570 => 47,  562 => 42,  551 => 34,  546 => 32,  542 => 31,  538 => 30,  534 => 29,  530 => 28,  526 => 27,  522 => 26,  518 => 25,  514 => 24,  510 => 23,  506 => 22,  502 => 21,  498 => 20,  493 => 19,  483 => 18,  471 => 12,  461 => 11,  449 => 857,  447 => 842,  410 => 808,  400 => 801,  358 => 761,  356 => 360,  319 => 325,  317 => 303,  71 => 59,  69 => 18,  63 => 14,  61 => 11,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--  
    Document Title
    =============================================
    -->
    {% block title %}
    <title>CuraCloud</title>
    {% endblock %}
    <!--  
    Favicons
    =============================================
    -->
    {% block css %}
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{asset('front/images/favicons/apple-icon-57x57.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{asset('front/images/favicons/apple-icon-60x60.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{asset('front/images/favicons/apple-icon-72x72.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{asset('front/images/favicons/apple-icon-76x76.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{asset('front/images/favicons/apple-icon-114x114.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{asset('front/images/favicons/apple-icon-120x120.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{asset('front/images/favicons/apple-icon-144x144.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{asset('front/images/favicons/apple-icon-152x152.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{asset('front/images/favicons/apple-icon-180x180.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{asset('front/images/favicons/android-icon-192x192.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{asset('front/images/favicons/favicon-32x32.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{asset('front/images/favicons/favicon-96x96.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('front/images/favicons/favicon-16x16.png')}}\">
    <link rel=\"manifest\" href=\"{{asset('manifest.json')}}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{asset('front/images/favicons/ms-icon-144x144.png')}}\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href=\"{{asset('front/lib/bootstrap/dist/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <!-- Template specific stylesheets-->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Volkhov:400i\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/animate.css/animate.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/components-font-awesome/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/et-line-font/et-line-font.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/flexslider/flexslider.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/owl.carousel/dist/assets/owl.carousel.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/magnific-popup/dist/magnific-popup.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('front/lib/simple-text-rotator/simpletextrotator.css')}}\" rel=\"stylesheet\">
    <!-- Main stylesheet and color file-->
    <link href=\"{{asset('front/css/style.css')}}\" rel=\"stylesheet\">
    <link id=\"color-scheme\" href=\"{{asset('front/css/colors/default.css')}}\" rel=\"stylesheet\">
    {% endblock %}
  </head>
  
  <body data-spy=\"scroll\" data-target=\".onpage-navigation\" data-offset=\"60\">
    <main>
      <div class=\"page-loader\">
        <div class=\"loader\">Loading...</div>
      </div>
      <nav class=\"navbar navbar-custom navbar-fixed-top navbar-transparent\" role=\"navigation\">
        
        <div class=\"container\">
          <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#custom-collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button><a class=\"navbar-brand\" href=\"index.html\">CuraCloud</a>
          </div>
          <div class=\"collapse navbar-collapse\" id=\"custom-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
              <li><a href=\"#\">Home</a>
                <!--ul class=\"dropdown-menu\">
                  <li><a href=\"index_mp_fullscreen_video_background.html\">Default</a></li>
                  <li><a href=\"index_op_fullscreen_gradient_overlay.html\">One Page</a></li>
                  <li><a href=\"index_agency.html\">Agency</a></li>
                  <li><a href=\"index_portfolio.html\">Portfolio</a></li>
                  <li><a href=\"index_restaurant.html\">Restaurant</a></li>
                  <li><a href=\"index_finance.html\">Finance</a></li>
                  <li><a href=\"index_landing.html\">Landing Page</a></li>
                  <li><a href=\"index_photography.html\">Photography</a></li>
                  <li><a href=\"index_shop.html\">Shop</a></li>
                </ul-->
              </li>
              <li><a href=\"#\">About</a>
                <!--ul class=\"dropdown-menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Static Image Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_static.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_static.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Flexslider Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_flexslider.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_flexslider.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Video Background Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_video_background.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_video_background.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Text Rotator Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_text_rotator.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_text_rotator.html\">Classic</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Gradient Overlay Header</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"index_mp_fullscreen_gradient_overlay.html\">Fulscreen</a></li>
                      <li><a href=\"index_mp_classic_gradient_overlay.html\">Classic</a></li>
                    </ul>
                  </li>
                </ul-->
              </li>
              <li><a href=\"#\">Blog</a>
                <!--ul class=\"dropdown-menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">About</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"about1.html\">About 1</a></li>
                      <li><a href=\"about2.html\">About 2</a></li>
                      <li><a href=\"about3.html\">About 3</a></li>
                      <li><a href=\"about4.html\">About 4</a></li>
                      <li><a href=\"about5.html\">About 5</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Services</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"service1.html\">Service 1</a></li>
                      <li><a href=\"service2.html\">Service 2</a></li>
                      <li><a href=\"service3.html\">Service 3</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Pricing</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"pricing1.html\">Pricing 1</a></li>
                      <li><a href=\"pricing2.html\">Pricing 2</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Gallery</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"gallery_col_2.html\">2 Columns</a></li>
                      <li><a href=\"gallery_col_3.html\">3 Columns</a></li>
                      <li><a href=\"gallery_col_4.html\">4 Columns</a></li>
                      <li><a href=\"gallery_col_6.html\">6 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Contact</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"contact1.html\">Contact 1</a></li>
                      <li><a href=\"contact2.html\">Contact 2</a></li>
                      <li><a href=\"contact3.html\">Contact 3</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Restaurant menu</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"restaurant_menu1.html\">Menu 2 Columns</a></li>
                      <li><a href=\"restaurant_menu2.html\">Menu 3 Columns</a></li>
                    </ul>
                  </li>
                  <li><a href=\"login_register.html\">Login / Register</a></li>
                  <li><a href=\"faq.html\">FAQ</a></li>
                  <li><a href=\"404.html\">Page 404</a></li>
                </ul-->
              </li>
              <li><a href=\"#\">Contact</a>
                <!--ul class=\"dropdown-menu\" role=\"menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Boxed</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_boxed_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_boxed_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_boxed_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Boxed - Gutter</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_boxed_gutter_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_boxed_gutter_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_boxed_gutter_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Full Width</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_full_width_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_full_width_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_full_width_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Full Width - Gutter</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_full_width_gutter_col_2.html\">2 Columns</a></li>
                      <li><a href=\"portfolio_full_width_gutter_col_3.html\">3 Columns</a></li>
                      <li><a href=\"portfolio_full_width_gutter_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Masonry</a>
                    <ul class=\"dropdown-menu\">
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Boxed</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_masonry_boxed_col_2.html\">2 Columns</a></li>
                          <li><a href=\"portfolio_masonry_boxed_col_3.html\">3 Columns</a></li>
                          <li><a href=\"portfolio_masonry_boxed_col_4.html\">4 Columns</a></li>
                        </ul>
                      </li>
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Full Width</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_masonry_full_width_col_2.html\">2 Columns</a></li>
                          <li><a href=\"portfolio_masonry_full_width_col_3.html\">3 Columns</a></li>
                          <li><a href=\"portfolio_masonry_full_width_col_4.html\">4 Columns</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Hover Style</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"portfolio_hover_black.html\">Black</a></li>
                      <li><a href=\"portfolio_hover_gradient.html\">Gradient</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Single</a>
                    <ul class=\"dropdown-menu\">
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Featured Image</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_single_featured_image1.html\">Style 1</a></li>
                          <li><a href=\"portfolio_single_featured_image2.html\">Style 2</a></li>
                        </ul>
                      </li>
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Featured Slider</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_single_featured_slider1.html\">Style 1</a></li>
                          <li><a href=\"portfolio_single_featured_slider2.html\">Style 2</a></li>
                        </ul>
                      </li>
                      <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Featured Video</a>
                        <ul class=\"dropdown-menu\">
                          <li><a href=\"portfolio_single_featured_video1.html\">Style 1</a></li>
                          <li><a href=\"portfolio_single_featured_video2.html\">Style 2</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul-->
              </li>
              <li><a href=\"#\">Custom</a>
                <!--ul class=\"dropdown-menu\" role=\"menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Standard</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_standard_left_sidebar.html\">Left Sidebar</a></li>
                      <li><a href=\"blog_standard_right_sidebar.html\">Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Grid</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_grid_col_2.html\">2 Columns</a></li>
                      <li><a href=\"blog_grid_col_3.html\">3 Columns</a></li>
                      <li><a href=\"blog_grid_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Masonry</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_grid_masonry_col_2.html\">2 Columns</a></li>
                      <li><a href=\"blog_grid_masonry_col_3.html\">3 Columns</a></li>
                      <li><a href=\"blog_grid_masonry_col_4.html\">4 Columns</a></li>
                    </ul>
                  </li>
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Single</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"blog_single_left_sidebar.html\">Left Sidebar</a></li>
                      <li><a href=\"blog_single_right_sidebar.html\">Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul-->
              </li>
              <!--li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Features</a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                  <li><a href=\"alerts-and-wells.html\"><i class=\"fa fa-bolt\"></i> Alerts and Wells</a></li>
                  <li><a href=\"buttons.html\"><i class=\"fa fa-link fa-sm\"></i> Buttons</a></li>
                  <li><a href=\"tabs_and_accordions.html\"><i class=\"fa fa-tasks\"></i> Tabs &amp; Accordions</a></li>
                  <li><a href=\"content_box.html\"><i class=\"fa fa-list-alt\"></i> Contents Box</a></li>
                  <li><a href=\"forms.html\"><i class=\"fa fa-check-square-o\"></i> Forms</a></li>
                  <li><a href=\"icons.html\"><i class=\"fa fa-star\"></i> Icons</a></li>
                  <li><a href=\"progress-bars.html\"><i class=\"fa fa-server\"></i> Progress Bars</a></li>
                  <li><a href=\"typography.html\"><i class=\"fa fa-font\"></i> Typography</a></li>
                </ul>
              </li-->
              <!--li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Shop</a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                  <li class=\"dropdown\"><a class=\"dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\">Product</a>
                    <ul class=\"dropdown-menu\">
                      <li><a href=\"shop_product_col_3.html\">3 columns</a></li>
                      <li><a href=\"shop_product_col_4.html\">4 columns</a></li>
                    </ul>
                  </li>
                  <li><a href=\"shop_single_product.html\">Single Product</a></li>
                  <li><a href=\"shop_checkout.html\">Checkout</a></li>
                </ul>
              </li-->
              {% block nav %}
              <li><a href=\"{{ path('app_register') }}\">Register</a>
                <!--ul class=\"dropdown-menu\">
                  <li><a href=\"documentation.html#contact\">Contact Form</a></li>
                  <li><a href=\"documentation.html#reservation\">Reservation Form</a></li>
                  <li><a href=\"documentation.html#mailchimp\">Mailchimp</a></li>
                  <li><a href=\"documentation.html#gmap\">Google Map</a></li>
                  <li><a href=\"documentation.html#plugin\">Plugins</a></li>
                  <li><a href=\"documentation.html#changelog\">Changelog</a></li>
                </ul-->
              </li>
              <li><a href=\"{{ path('app_login') }}\">Login</a>
                <!--ul class=\"dropdown-menu\">
                  <li><a href=\"documentation.html#contact\">Contact Form</a></li>
                  <li><a href=\"documentation.html#reservation\">Reservation Form</a></li>
                  <li><a href=\"documentation.html#mailchimp\">Mailchimp</a></li>
                  <li><a href=\"documentation.html#gmap\">Google Map</a></li>
                  <li><a href=\"documentation.html#plugin\">Plugins</a></li>
                  <li><a href=\"documentation.html#changelog\">Changelog</a></li>
                </ul-->
              </li>
              {% endblock %}
            </ul>
          </div>
        </div>
      </nav>
     
      <section class=\"home-section home-parallax home-fade\" id=\"home\">
        <div class=\"hero-slider\">
          <ul class=\"slides\">
            <li class=\"bg-dark-30 bg-dark\" style=\"background-image:url(front/images/section-8.jpg);\">
              <div class=\"titan-caption\">
                <div class=\"caption-content\">
                  <div class=\"font-alt mb-30 titan-title-size-1\">Hello &amp; welcome</div>
                  <div class=\"font-alt mb-40 titan-title-size-4\">We are CuraCloud</div><a class=\"section-scroll btn btn-border-w btn-round\" href=\"#about\">Learn More</a>
                </div>
              </div>
            </li>
            <li class=\"bg-dark-30 bg-dark\" style=\"background-image:url(front/images/section-9.jpeg);\">
              <div class=\"titan-caption\">
                <div class=\"caption-content\">
                  <div class=\"font-alt mb-30 titan-title-size-2\">CuraCloud is an EHR system for<br/>tunisian patients and health care providers
                  </div><a class=\"btn btn-border-w btn-round\" href=\"about\">Learn More</a>
                </div>
              </div>
            </li>
            <li class=\"bg-dark-30 bg-dark\" style=\"background-image:url(front/images/section-10.jpg);\">
              <div class=\"titan-caption\">
                <div class=\"caption-content\">
                  <div class=\"font-alt mb-30 titan-title-size-1\">Our website is your companion on every device, providing a smooth and friendly experience</div>
                  <div class=\"font-alt mb-40 titan-title-size-3\">Your device, your rules</div><a class=\"section-scroll btn btn-border-w btn-round\" href=\"#about\">Learn More</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
       {% block body %}
      <div class=\"main\">
        <section class=\"module\" id=\"about\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-8 col-sm-offset-2\">
                <h2 class=\"module-title font-alt\">Welcome to CuraCloud</h2>
                <div class=\"module-subtitle font-serif large-text\">a dedicated platform committed to providing a top-tier Electronic Health Records (EHR) experience. Rooted in Tunisia, our focus is on meticulously curating a user-friendly space for efficient healthcare management.</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-2 col-sm-offset-5\">
                <div class=\"large-text align-center\"><a class=\"section-scroll\" href=\"#services\"><i class=\"fa fa-angle-down\"></i></a></div>
              </div>
            </div>
          </div>
        </section>
        <hr class=\"divider-w\">
        <section class=\"module\" id=\"services\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Our Services</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row multi-columns-row\">
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-strategy\"></span></div>
                  <h3 class=\"features-title font-alt\">Patient Data Management</h3>
                  <p>Secure storage of patient records provide seamless access and update capabilities, ensuring high accuracy and up-to-date patient information.</p>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-caution\"></span></div>
                  <h3 class=\"features-title font-alt\">Secure Coding Practices</h3>
                  <p>Robust security protocols and meticulous coding safeguard patient data against unauthorized access and ensure compliance with healthcare regulations.</p>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-mobile\"></span></div>
                  <h3 class=\"features-title font-alt\">Mobile-Ready Design</h3>
                  <p>Responsive design ensures that the EHR system is accessible on various devices, from desktops to tablets and smartphones, providing critical patient information on-the-go.</p>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6 col-xs-12\">
                <div class=\"features-item\">
                  <div class=\"features-icon\"><span class=\"icon-gears\"></span></div>
                  <h3 class=\"features-title font-alt\">PERFORMANCE &amp; ACCESSIBILITY</h3>
                  <p>Optimized system architecture allows for rapid retrieval and processing of health records, enhancing efficiency in clinical decision-making and patient care.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class=\"module bg-dark-60\" data-background=\"front/images/section-6.jpg\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-12\">
                <div class=\"video-box\">
                  <div class=\"video-box-icon\"><a class=\"video-pop-up\" href=\"https://www.youtube.com/watch?v=TTxZj3DZiIM\"><span class=\"icon-video\"></span></a></div>
                  <div class=\"video-title font-alt\">Presentation</div>
                  <div class=\"video-subtitle font-alt\">Watch the video about our new products</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br>
        <section class=\"module-small bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-8 col-lg-6 col-lg-offset-2\">
                <div class=\"callout-text font-alt\">
                  <h3 class=\"callout-title\">Want to see more works?</h3>
                  <p>We are always open to interesting projects.</p>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 col-lg-2\">
                <div class=\"callout-btn-box\"><a class=\"btn btn-w btn-round\" href=\"portfolio_boxed_gutter_col_3.html\">Lets view portfolio</a></div>
              </div>
            </div>
          </div>
        </section>
        <section class=\"module\" id=\"alt-features\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Our features</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-3 col-lg-3\">
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-strategy\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Branding</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-tools-2\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Development</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-target\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Marketing</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-tools\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Design</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
              <div class=\"col-md-6 col-lg-6 hidden-xs hidden-sm\">
                <div class=\"alt-services-image align-center\"><img src=\"{{ asset('front/images/promo.png')}}\" alt=\"Feature Image\"></div>
              </div>
              <div class=\"col-sm-6 col-md-3 col-lg-3\">
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-camera\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Photography</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-mobile\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Mobile</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-linegraph\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Music</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
                <div class=\"alt-features-item\">
                  <div class=\"alt-features-icon\"><span class=\"icon-basket\"></span></div>
                  <h3 class=\"alt-features-title font-alt\">Shop</h3>A wonderful serenity has taken possession of my entire soul like these sweet mornings.
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class=\"divider-w\">
        <section class=\"module\" id=\"team\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Meet Our Team</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"{{ asset('front/images/team-1.jpg')}}\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Hi all</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Jim Stone</div>
                    <div class=\"team-role\">Art Director</div>
                  </div>
                </div>
              </div>
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"{{ asset('front/images/team-2.jpg')}}\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Good day</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Andy River</div>
                    <div class=\"team-role\">Creative director</div>
                  </div>
                </div>
              </div>
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"{{ asset('front/images/team-3.jpg')}}\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Hello</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Adele Snow</div>
                    <div class=\"team-role\">Account manager</div>
                  </div>
                </div>
              </div>
              <div class=\"mb-sm-20 wow fadeInUp col-sm-6 col-md-3\" onclick=\"wow fadeInUp\">
                <div class=\"team-item\">
                  <div class=\"team-image\"><img src=\"{{ asset('front/images/team-4.jpg')}}\" alt=\"Member Photo\"/>
                    <div class=\"team-detail\">
                      <h5 class=\"font-alt\">Yes, it's me</h5>
                      <p class=\"font-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      <div class=\"team-social\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a></div>
                    </div>
                  </div>
                  <div class=\"team-descr font-alt\">
                    <div class=\"team-name\">Dylan Woods</div>
                    <div class=\"team-role\">Developer</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class=\"module bg-dark-60 pt-0 pb-0 parallax-bg testimonial\" data-background=\"{{asset('front/images/testimonial_bg.jpg')}}\">
          <div class=\"testimonials-slider pt-140 pb-140\">
            <ul class=\"slides\">
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <div class=\"module-icon\"><span class=\"icon-quote\"></span></div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                      <blockquote class=\"testimonial-text font-alt\">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                      <div class=\"testimonial-author\">
                        <div class=\"testimonial-caption font-alt\">
                          <div class=\"testimonial-title\">Jack Woods</div>
                          <div class=\"testimonial-descr\">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <div class=\"module-icon\"><span class=\"icon-quote\"></span></div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                      <blockquote class=\"testimonial-text font-alt\">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                      <div class=\"testimonial-author\">
                        <div class=\"testimonial-caption font-alt\">
                          <div class=\"testimonial-title\">Jim Stone</div>
                          <div class=\"testimonial-descr\">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-12\">
                      <div class=\"module-icon\"><span class=\"icon-quote\"></span></div>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-8 col-sm-offset-2\">
                      <blockquote class=\"testimonial-text font-alt\">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-4\">
                      <div class=\"testimonial-author\">
                        <div class=\"testimonial-caption font-alt\">
                          <div class=\"testimonial-title\">Adele Snow</div>
                          <div class=\"testimonial-descr\">SomeCompany INC, CEO</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class=\"module\" id=\"news\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Latest blog posts</h2>
                <div class=\"module-subtitle font-serif\">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class=\"row multi-columns-row post-columns\">
              <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post mb-20\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"{{ asset('front/images/post-1.jpg')}}\" alt=\"Blog-post Thumbnail\"/></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"#\">Our trip to the Alps</a></h2>
                    <div class=\"post-meta\">By&nbsp;<a href=\"#\">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\" href=\"#\">Read more</a></div>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post mb-20\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"{{ asset('front/images/post-2.jpg')}}\" alt=\"Blog-post Thumbnail\"/></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"#\">Shore after the tide</a></h2>
                    <div class=\"post-meta\">By&nbsp;<a href=\"#\">Andy River</a>&nbsp;| 11 November | 4 Comments
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\" href=\"#\">Read more</a></div>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-4 col-lg-4\">
                <div class=\"post mb-20\">
                  <div class=\"post-thumbnail\"><a href=\"#\"><img src=\"{{ asset('front/images/post-3.jpg')}}\" alt=\"Blog-post Thumbnail\"/></a></div>
                  <div class=\"post-header font-alt\">
                    <h2 class=\"post-title\"><a href=\"#\">We in New Zealand</a></h2>
                    <div class=\"post-meta\">By&nbsp;<a href=\"#\">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                    </div>
                  </div>
                  <div class=\"post-entry\">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class=\"post-more\"><a class=\"more-link\" href=\"#\">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class=\"module-small bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-6 col-lg-4 col-lg-offset-2\">
                <div class=\"callout-text font-alt\">
                  <h3 class=\"callout-title\">Subscribe now</h3>
                  <p>We will not spam your email.</p>
                </div>
              </div>
              <div class=\"col-sm-6 col-md-6 col-lg-4\">
                <div class=\"callout-btn-box\">
                  <form id=\"subscription-form\" role=\"form\" method=\"post\" action=\"php/subscribe.php\">
                    <div class=\"input-group\">
                      <input class=\"form-control\" type=\"email\" id=\"semail\" name=\"semail\" placeholder=\"Your Email\" data-validation-required-message=\"Please enter your email address.\" required=\"required\"/><span class=\"input-group-btn\">
                        <button class=\"btn btn-g btn-round\" id=\"subscription-form-submit\" type=\"submit\">Submit</button></span>
                    </div>
                  </form>
                  <div class=\"text-center\" id=\"subscription-response\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class=\"module\" id=\"contact\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <h2 class=\"module-title font-alt\">Get in touch</h2>
                <div class=\"module-subtitle font-serif\"></div>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-sm-offset-3\">
                <form id=\"contactForm\" role=\"form\" method=\"post\" action=\"php/contact.php\">
                  <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"name\">Name</label>
                    <input class=\"form-control\" type=\"text\" id=\"name\" name=\"name\" placeholder=\"Your Name*\" required=\"required\" data-validation-required-message=\"Please enter your name.\"/>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"sr-only\" for=\"email\">Email</label>
                    <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Your Email*\" required=\"required\" data-validation-required-message=\"Please enter your email address.\"/>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"form-group\">
                    <textarea class=\"form-control\" rows=\"7\" id=\"message\" name=\"message\" placeholder=\"Your Message*\" required=\"required\" data-validation-required-message=\"Please enter your message.\"></textarea>
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"text-center\">
                    <button class=\"btn btn-block btn-round btn-d\" id=\"cfsubmit\" type=\"submit\">Submit</button>
                  </div>
                </form>
                <div class=\"ajax-response font-alt\" id=\"contactFormResponse\"></div>
              </div>
            </div>
          </div>
        </section>
        {% endblock %}
        <div class=\"module-small bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">About CuraCloud</h5>
                  <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                  <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                  <p>Email:<a href=\"#\">somecompany@example.com</a></p>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">Recent Comments</h5>
                  <ul class=\"icon-list\">
                    <li>Maria on <a href=\"#\">Designer Desk Essentials</a></li>
                    <li>John on <a href=\"#\">Realistic Business Card Mockup</a></li>
                    <li>Andy on <a href=\"#\">Eco bag Mockup</a></li>
                    <li>Jack on <a href=\"#\">Bottle Mockup</a></li>
                    <li>Mark on <a href=\"#\">Our trip to the Alps</a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">Blog Categories</h5>
                  <ul class=\"icon-list\">
                    <li><a href=\"#\">Photography - 7</a></li>
                    <li><a href=\"#\">Web Design - 3</a></li>
                    <li><a href=\"#\">Illustration - 12</a></li>
                    <li><a href=\"#\">Marketing - 1</a></li>
                    <li><a href=\"#\">Wordpress - 16</a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-sm-3\">
                <div class=\"widget\">
                  <h5 class=\"widget-title font-alt\">Popular Posts</h5>
                  <ul class=\"widget-posts\">
                    <li class=\"clearfix\">
                      <div class=\"widget-posts-image\"><a href=\"#\"><img src=\"{{ asset('front/images/rp-1.jpg')}}\" alt=\"Post Thumbnail\"/></a></div>
                      <div class=\"widget-posts-body\">
                        <div class=\"widget-posts-title\"><a href=\"#\">Designer Desk Essentials</a></div>
                        <div class=\"widget-posts-meta\">23 january</div>
                      </div>
                    </li>
                    <li class=\"clearfix\">
                      <div class=\"widget-posts-image\"><a href=\"#\"><img src=\"{{ asset('front/images/rp-2.jpg')}}\" alt=\"Post Thumbnail\"/></a></div>
                      <div class=\"widget-posts-body\">
                        <div class=\"widget-posts-title\"><a href=\"#\">Realistic Business Card Mockup</a></div>
                        <div class=\"widget-posts-meta\">15 February</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class=\"divider-d\">
        
        <footer class=\"footer bg-dark\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-sm-6\">
                <p class=\"copyright font-alt\">&copy; 2017&nbsp;<a href=\"index.html\">CuraCloud</a>, All Rights Reserved</p>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"footer-social-links\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a><a href=\"#\"><i class=\"fa fa-skype\"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class=\"scroll-up\"><a href=\"#totop\"><i class=\"fa fa-angle-double-up\"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    {% block js %}
    <script src=\"{{asset('front/lib/jquery/dist/jquery.js')}}\"></script>
    <script src=\"{{asset('front/lib/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('front/lib/wow/dist/wow.js')}}\"></script>
    <script src=\"{{asset('front/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}\"></script>
    <script src=\"{{asset('front/lib/isotope/dist/isotope.pkgd.js')}}\"></script>
    <script src=\"{{asset('front/lib/imagesloaded/imagesloaded.pkgd.js')}}\"></script>
    <script src=\"{{asset('front/lib/flexslider/jquery.flexslider.js')}}\"></script>
    <script src=\"{{asset('front/lib/owl.carousel/dist/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('front/lib/smoothscroll.js')}}\"></script>
    <script src=\"{{asset('front/lib/magnific-popup/dist/jquery.magnific-popup.js')}}\"></script>
    <script src=\"{{asset('front/lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}\"></script>
    <script src=\"{{asset('front/js/plugins.js')}}\"></script>
    <script src=\"{{asset('front/js/main.js')}}\"></script>
     {% endblock %}
  </body>
</html>", "base.html.twig", "C:\\Users\\pc\\Desktop\\integration rayhanne - Copie (2)\\CuraCloud\\templates\\base.html.twig");
    }
}
