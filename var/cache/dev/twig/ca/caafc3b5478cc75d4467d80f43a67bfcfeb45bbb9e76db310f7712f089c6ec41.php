<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_5a826e5feb09b0d5b27c480328c8dc284418a65774e27c1538f16a69d16ddc79 extends Twig_Template
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
        $__internal_815094a7af7edbab6e8eafdc8689b51d2b4d6f90ef341035a8528db0a27183ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815094a7af7edbab6e8eafdc8689b51d2b4d6f90ef341035a8528db0a27183ba->enter($__internal_815094a7af7edbab6e8eafdc8689b51d2b4d6f90ef341035a8528db0a27183ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_6b987af153949f1259e2ee83bea4752bd8dacd08b1135e66a9e425f2c7096a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b987af153949f1259e2ee83bea4752bd8dacd08b1135e66a9e425f2c7096a19->enter($__internal_6b987af153949f1259e2ee83bea4752bd8dacd08b1135e66a9e425f2c7096a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<h1 class=\"text-center\">Login form here</h1>
<div class=\"container\">
    <div class=\"col-md-8\" style=\"margin: 0 auto;\">
        <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 10
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->getSourceContext()); })())) {
            // line 11
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
            ";
        }
        // line 13
        echo "            <div class=\"form-group\">
                <label class=\"label-control\" for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
            </div>

            <div class=\"form-group\">
                <label for=\"password\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
            </div>

            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-warning\" id=\"_submit\" name=\"_submit\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_815094a7af7edbab6e8eafdc8689b51d2b4d6f90ef341035a8528db0a27183ba->leave($__internal_815094a7af7edbab6e8eafdc8689b51d2b4d6f90ef341035a8528db0a27183ba_prof);

        
        $__internal_6b987af153949f1259e2ee83bea4752bd8dacd08b1135e66a9e425f2c7096a19->leave($__internal_6b987af153949f1259e2ee83bea4752bd8dacd08b1135e66a9e425f2c7096a19_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  76 => 25,  67 => 19,  60 => 15,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  41 => 9,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<h1 class=\"text-center\">Login form here</h1>
<div class=\"container\">
    <div class=\"col-md-8\" style=\"margin: 0 auto;\">
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"form-group\">
                <label class=\"label-control\" for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\" required=\"required\" />
            </div>

            <div class=\"form-group\">
                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" />
            </div>

            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-warning\" id=\"_submit\" name=\"_submit\">{{ 'security.login.submit'|trans }}</button>
            </div>
        </form>
    </div>
</div>
", "@FOSUser/Security/login_content.html.twig", "/home/vagrant/Code/mediapark/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
