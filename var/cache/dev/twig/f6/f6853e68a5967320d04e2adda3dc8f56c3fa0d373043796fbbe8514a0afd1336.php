<?php

/* partials/nav.html.twig */
class __TwigTemplate_0e2c0d63a219ddedc4f5970f400c0f920ed807f2a8323c98cb6d4ceed54afb93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f555f2536be3f0f9c7d0e97d958c5f6cc3b0ffc63a097c13dc3a27580f6978e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f555f2536be3f0f9c7d0e97d958c5f6cc3b0ffc63a097c13dc3a27580f6978e8->enter($__internal_f555f2536be3f0f9c7d0e97d958c5f6cc3b0ffc63a097c13dc3a27580f6978e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        $__internal_d30f2ab106c48a869fd2628756c46a6b807678fe8c37a155b8518eb3d582e6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30f2ab106c48a869fd2628756c46a6b807678fe8c37a155b8518eb3d582e6fc->enter($__internal_d30f2ab106c48a869fd2628756c46a6b807678fe8c37a155b8518eb3d582e6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light\">
    <a class=\"navbar-brand\" href=\"/app_dev.php\">Advertisement portal</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">

        </ul>

        <ul class=\"nav justify-content-end profile-info\">
            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Profile
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"/app_dev.php/advertisements/create\">Create new advertisement</a>
                        <a class=\"dropdown-item\" href=\"/app_dev.php/advertisements/my\">View my advertisements</a>
                        <a class=\"dropdown-item\" href=\"/app_dev.php/logout\">Logout</a>
                    </div>
                </li>
            ";
        } else {
            // line 24
            echo "                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/app_dev.php/login\">Login</a>
            </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/app_dev.php/register\">Register</a>
            </li>
            ";
        }
        // line 31
        echo "        </ul>
    </div>
</nav>

";
        
        $__internal_f555f2536be3f0f9c7d0e97d958c5f6cc3b0ffc63a097c13dc3a27580f6978e8->leave($__internal_f555f2536be3f0f9c7d0e97d958c5f6cc3b0ffc63a097c13dc3a27580f6978e8_prof);

        
        $__internal_d30f2ab106c48a869fd2628756c46a6b807678fe8c37a155b8518eb3d582e6fc->leave($__internal_d30f2ab106c48a869fd2628756c46a6b807678fe8c37a155b8518eb3d582e6fc_prof);

    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 31,  53 => 24,  40 => 13,  38 => 12,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-light fixed-top bg-light\">
    <a class=\"navbar-brand\" href=\"/app_dev.php\">Advertisement portal</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">

        </ul>

        <ul class=\"nav justify-content-end profile-info\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Profile
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"/app_dev.php/advertisements/create\">Create new advertisement</a>
                        <a class=\"dropdown-item\" href=\"/app_dev.php/advertisements/my\">View my advertisements</a>
                        <a class=\"dropdown-item\" href=\"/app_dev.php/logout\">Logout</a>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/app_dev.php/login\">Login</a>
            </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/app_dev.php/register\">Register</a>
            </li>
            {% endif %}
        </ul>
    </div>
</nav>

", "partials/nav.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/partials/nav.html.twig");
    }
}
