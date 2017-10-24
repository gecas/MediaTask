<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0cbf792d60ebb0b97679955a7d4cf86ffe937d42261467bb639189577a491ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10c65f729ffcd3594bff3d6fd3e4fba720c05faa3932abb75ae701d3ccce0775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c65f729ffcd3594bff3d6fd3e4fba720c05faa3932abb75ae701d3ccce0775->enter($__internal_10c65f729ffcd3594bff3d6fd3e4fba720c05faa3932abb75ae701d3ccce0775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_2626b542b7f98717e26a1ca012083a5a837ec8c658a1ce2e0eb24b29f9807c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2626b542b7f98717e26a1ca012083a5a837ec8c658a1ce2e0eb24b29f9807c35->enter($__internal_2626b542b7f98717e26a1ca012083a5a837ec8c658a1ce2e0eb24b29f9807c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10c65f729ffcd3594bff3d6fd3e4fba720c05faa3932abb75ae701d3ccce0775->leave($__internal_10c65f729ffcd3594bff3d6fd3e4fba720c05faa3932abb75ae701d3ccce0775_prof);

        
        $__internal_2626b542b7f98717e26a1ca012083a5a837ec8c658a1ce2e0eb24b29f9807c35->leave($__internal_2626b542b7f98717e26a1ca012083a5a837ec8c658a1ce2e0eb24b29f9807c35_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a50efd5c8541f0aeada4a922a43f8ac253ff1730bb620c21af04b476e7982827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50efd5c8541f0aeada4a922a43f8ac253ff1730bb620c21af04b476e7982827->enter($__internal_a50efd5c8541f0aeada4a922a43f8ac253ff1730bb620c21af04b476e7982827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6fe7f13a1199cb19f6494e2927247faaefa732cb3a2bc0f77b8f6aaa16d07423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe7f13a1199cb19f6494e2927247faaefa732cb3a2bc0f77b8f6aaa16d07423->enter($__internal_6fe7f13a1199cb19f6494e2927247faaefa732cb3a2bc0f77b8f6aaa16d07423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <style>
        .btn{
            cursor: pointer;
        }
    </style>
";
        
        $__internal_6fe7f13a1199cb19f6494e2927247faaefa732cb3a2bc0f77b8f6aaa16d07423->leave($__internal_6fe7f13a1199cb19f6494e2927247faaefa732cb3a2bc0f77b8f6aaa16d07423_prof);

        
        $__internal_a50efd5c8541f0aeada4a922a43f8ac253ff1730bb620c21af04b476e7982827->leave($__internal_a50efd5c8541f0aeada4a922a43f8ac253ff1730bb620c21af04b476e7982827_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_5bec4d1b3fbbfbd2ac890ef337cc61ec617b6ac53ab3edf6031fc799e4da9b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bec4d1b3fbbfbd2ac890ef337cc61ec617b6ac53ab3edf6031fc799e4da9b13->enter($__internal_5bec4d1b3fbbfbd2ac890ef337cc61ec617b6ac53ab3edf6031fc799e4da9b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ab7275ec0fa5fc2970eda5041df3928fa87c7a4178195a5feb621e4c5c46f822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7275ec0fa5fc2970eda5041df3928fa87c7a4178195a5feb621e4c5c46f822->enter($__internal_ab7275ec0fa5fc2970eda5041df3928fa87c7a4178195a5feb621e4c5c46f822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div>
        ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 18
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 20
        echo "    </div>

    ";
        // line 22
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 25
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 26
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    <div>
        ";
        // line 33
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 35
        echo "    </div>
";
        
        $__internal_ab7275ec0fa5fc2970eda5041df3928fa87c7a4178195a5feb621e4c5c46f822->leave($__internal_ab7275ec0fa5fc2970eda5041df3928fa87c7a4178195a5feb621e4c5c46f822_prof);

        
        $__internal_5bec4d1b3fbbfbd2ac890ef337cc61ec617b6ac53ab3edf6031fc799e4da9b13->leave($__internal_5bec4d1b3fbbfbd2ac890ef337cc61ec617b6ac53ab3edf6031fc799e4da9b13_prof);

    }

    // line 33
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44404996d384aa98bf93da43eed4d9e57a3191ad2b7b3e3e1354cf5a1c7e47c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44404996d384aa98bf93da43eed4d9e57a3191ad2b7b3e3e1354cf5a1c7e47c7->enter($__internal_44404996d384aa98bf93da43eed4d9e57a3191ad2b7b3e3e1354cf5a1c7e47c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f4d2314fa7e757b40357516e1ea79b3eabb7ab28e13eb40babb5433dca79884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4d2314fa7e757b40357516e1ea79b3eabb7ab28e13eb40babb5433dca79884->enter($__internal_5f4d2314fa7e757b40357516e1ea79b3eabb7ab28e13eb40babb5433dca79884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 34
        echo "        ";
        
        $__internal_5f4d2314fa7e757b40357516e1ea79b3eabb7ab28e13eb40babb5433dca79884->leave($__internal_5f4d2314fa7e757b40357516e1ea79b3eabb7ab28e13eb40babb5433dca79884_prof);

        
        $__internal_44404996d384aa98bf93da43eed4d9e57a3191ad2b7b3e3e1354cf5a1c7e47c7->leave($__internal_44404996d384aa98bf93da43eed4d9e57a3191ad2b7b3e3e1354cf5a1c7e47c7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 34,  159 => 33,  148 => 35,  146 => 33,  142 => 31,  139 => 30,  133 => 29,  124 => 26,  119 => 25,  114 => 24,  109 => 23,  107 => 22,  103 => 20,  95 => 18,  89 => 15,  85 => 14,  80 => 13,  78 => 12,  75 => 11,  66 => 10,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block stylesheets %}
    <style>
        .btn{
            cursor: pointer;
        }
    </style>
{% endblock %}
    
{% block content %}
    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/home/vagrant/Code/mediapark/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
