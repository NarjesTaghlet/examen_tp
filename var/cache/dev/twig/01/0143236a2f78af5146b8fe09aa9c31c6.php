<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template.html.twig */
class __TwigTemplate_b92260c74fa7e58a58828d72f857d8f5 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'PageTitle' => [$this, 'block_PageTitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
</head>
<body>
<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
    <!-- Navbar Brand-->
    <a class=\"navbar-brand ps-3\" href=\"#\">MyProject</a>
    <!-- Sidebar Toggle-->
    <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
            <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Activity Log</a></li>
                <li><hr class=\"dropdown-divider\" /></li>
                <li><a class=\"dropdown-item\" href=\"#\">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">Core</div>
                    <a class=\"nav-link\" href=\"index.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                        Dashboard
                    </a>
                    <div class=\"sb-sidenav-menu-heading\">Pages</div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                        Users
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"#\">Tab</a>
                            <a class=\"nav-link\" href=\"#\"></a>
                        </nav>
                    </div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                        Pages
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                Authentication
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"login.html\">Login</a>
                                    <a class=\"nav-link\" href=\"register.html\">Register</a>
                                    <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                Error
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                    <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                    <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Addons</div>
                    <a class=\"nav-link\" href=\"charts.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                        Charts
                    </a>
                    <a class=\"nav-link\" href=\"tables.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class=\"sb-sidenav-footer\">
                <div class=\"small\">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <h1 class=\"mt-4\">
                    ";
        // line 117
        $this->displayBlock('PageTitle', $context, $blocks);
        // line 120
        echo "                </h1>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "session", [], "any", false, false, false, 124), "flashBag", [], "any", false, false, false, 124), "get", [0 => "info"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
            // line 125
            echo "                            <div class=\"alert alert-info\">
                                ";
            // line 126
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "session", [], "any", false, false, false, 129), "flashBag", [], "any", false, false, false, 129), "get", [0 => "success"], "method", false, false, false, 129));
        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
            // line 130
            echo "                            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "session", [], "any", false, false, false, 132), "flashBag", [], "any", false, false, false, 132), "get", [0 => "erreur"], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["valeur"]) {
            // line 133
            echo "                            <div class=\"alert alert-danger\">
                                ";
            // line 134
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                        ";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 140
        echo "                    </div>
                </div>
                <div style=\"height: 100vh\"></div>
                <div class=\"card mb-4\"><div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
            </div>
        </main>
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Titre par défaut ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_PageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "PageTitle"));

        // line 118
        echo "                        Template
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 138
        echo "                        du contenu
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 138,  351 => 137,  340 => 118,  330 => 117,  320 => 14,  310 => 13,  300 => 12,  290 => 11,  271 => 9,  257 => 161,  234 => 140,  232 => 137,  229 => 136,  221 => 134,  218 => 133,  213 => 132,  204 => 130,  199 => 129,  190 => 126,  187 => 125,  183 => 124,  177 => 120,  175 => 117,  71 => 15,  68 => 13,  66 => 11,  62 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>{% block title%}Titre par défaut {%endblock%}</title>
    <link href=\"{{asset('assets/css/styles.css')}}\" rel=\"stylesheet\"/>
    {% block stylesheets %}
    {% endblock %}
    {% block javascripts %}
    {% endblock %}
    <script src=\"https://use.fontawesome.com/releases/v6.1.0/js/all.js\" crossorigin=\"anonymous\"></script>
</head>
<body>
<nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
    <!-- Navbar Brand-->
    <a class=\"navbar-brand ps-3\" href=\"#\">MyProject</a>
    <!-- Sidebar Toggle-->
    <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
    <!-- Navbar Search-->
    <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
        <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
            <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Activity Log</a></li>
                <li><hr class=\"dropdown-divider\" /></li>
                <li><a class=\"dropdown-item\" href=\"#\">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id=\"layoutSidenav\">
    <div id=\"layoutSidenav_nav\">
        <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
            <div class=\"sb-sidenav-menu\">
                <div class=\"nav\">
                    <div class=\"sb-sidenav-menu-heading\">Core</div>
                    <a class=\"nav-link\" href=\"index.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                        Dashboard
                    </a>
                    <div class=\"sb-sidenav-menu-heading\">Pages</div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                        Users
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav\">
                            <a class=\"nav-link\" href=\"#\">Tab</a>
                            <a class=\"nav-link\" href=\"#\"></a>
                        </nav>
                    </div>
                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                        Pages
                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                    </a>
                    <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                        <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                Authentication
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"login.html\">Login</a>
                                    <a class=\"nav-link\" href=\"register.html\">Register</a>
                                    <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                Error
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                    <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                    <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                </nav>
                            </div>
                        </nav>
                    </div>
                    <div class=\"sb-sidenav-menu-heading\">Addons</div>
                    <a class=\"nav-link\" href=\"charts.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                        Charts
                    </a>
                    <a class=\"nav-link\" href=\"tables.html\">
                        <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class=\"sb-sidenav-footer\">
                <div class=\"small\">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id=\"layoutSidenav_content\">
        <main>
            <div class=\"container-fluid px-4\">
                <h1 class=\"mt-4\">
                    {%block PageTitle%}
                        Template
                    {%endblock%}
                </h1>

                <div class=\"card mb-4\">
                    <div class=\"card-body\">
                        {% for valeur in app.session.flashBag.get('info') %}
                            <div class=\"alert alert-info\">
                                {{ valeur }}
                            </div>
                        {% endfor %}
                        {% for valeur in app.session.flashBag.get('success') %}
                            <div class=\"alert alert-success\">{{ valeur }}</div>
                        {% endfor %}
                        {% for valeur in app.session.flashBag.get('erreur') %}
                            <div class=\"alert alert-danger\">
                                {{ valeur }}</div>
                        {% endfor %}

                        {%block body %}
                        du contenu
                        {%endblock%}
                    </div>
                </div>
                <div style=\"height: 100vh\"></div>
                <div class=\"card mb-4\"><div class=\"card-body\">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
            </div>
        </main>
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
<script src=\"{{asset('assets/js/scripts.js')}}\"></script>
</body>
</html>
", "template.html.twig", "C:\\Symfony-projects\\my_project\\templates\\template.html.twig");
    }
}
