<?php

/* partials/nav.html.twig */
class __TwigTemplate_37bdf3acc661d2e9cce3c972f263923b3152bcb385c1945fcdfd41df3b43ce65 extends Twig_Template
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
        return array (  56 => 31,  47 => 24,  34 => 13,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/nav.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/partials/nav.html.twig");
    }
}
