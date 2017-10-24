<?php

/* advertisements/show.html.twig */
class __TwigTemplate_c92e411918c2b67b49938347927a01f74ef6e865d46c6214a2dc661b3cfc135d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "advertisements/show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_279ab8d420a4f86047a75890106682f39d14e42075167a39f4893d7d2826ef75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279ab8d420a4f86047a75890106682f39d14e42075167a39f4893d7d2826ef75->enter($__internal_279ab8d420a4f86047a75890106682f39d14e42075167a39f4893d7d2826ef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/show.html.twig"));

        $__internal_f9259bdd22ac9a5ef58af5d7e207ca6b7d005068cc65e9e91640c6e769765444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9259bdd22ac9a5ef58af5d7e207ca6b7d005068cc65e9e91640c6e769765444->enter($__internal_f9259bdd22ac9a5ef58af5d7e207ca6b7d005068cc65e9e91640c6e769765444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_279ab8d420a4f86047a75890106682f39d14e42075167a39f4893d7d2826ef75->leave($__internal_279ab8d420a4f86047a75890106682f39d14e42075167a39f4893d7d2826ef75_prof);

        
        $__internal_f9259bdd22ac9a5ef58af5d7e207ca6b7d005068cc65e9e91640c6e769765444->leave($__internal_f9259bdd22ac9a5ef58af5d7e207ca6b7d005068cc65e9e91640c6e769765444_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_25baac8bb18a7f139ca19f04f570f348d9af5c46221bc24ca33b1051fefa2cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25baac8bb18a7f139ca19f04f570f348d9af5c46221bc24ca33b1051fefa2cd2->enter($__internal_25baac8bb18a7f139ca19f04f570f348d9af5c46221bc24ca33b1051fefa2cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e08f6271980c8dfad3fb9d9a2bb1282a17a0784fd3d8affd45e1ad0bba3096ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08f6271980c8dfad3fb9d9a2bb1282a17a0784fd3d8affd45e1ad0bba3096ee->enter($__internal_e08f6271980c8dfad3fb9d9a2bb1282a17a0784fd3d8affd45e1ad0bba3096ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"container\">
            <div class=\"advert-item-detail\">
                ";
        // line 7
        if (array_key_exists("advert", $context)) {
            // line 8
            echo "                <h3 class=\"text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), "html", null, true);
            echo "</h3>
                ";
            // line 9
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 9, $this->getSourceContext()); })()), "getAdvertsPhotosFirst", array(), "method")) {
                // line 10
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 10, $this->getSourceContext()); })()), "getAdvertsPhotosFirst", array(), "method"), "getPhoto", array(), "method"), "html", null, true);
                echo "\" class=\"swipebox\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 10, $this->getSourceContext()); })()), "title", array()), "html", null, true);
                echo "\">
                    <img class=\"advert-item-detail-main-image\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 11, $this->getSourceContext()); })()), "getAdvertsPhotosFirst", array(), "method"), "getPhoto", array(), "method"), "html", null, true);
                echo "\" alt=\"\">
                </a>
                ";
            } else {
                // line 14
                echo "                    <img src=\"/images/default.png\" alt=\"\">
                ";
            }
            // line 16
            echo "                <div class=\"advert-item-detail-images-list\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 17, $this->getSourceContext()); })()), "getAdvertsPhotos", array()));
            foreach ($context['_seq'] as $context["key"] => $context["image"]) {
                // line 18
                echo "                        ";
                if (($context["image"] && ($context["key"] > 0))) {
                    // line 19
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "getPhoto", array(), "method"), "html", null, true);
                    echo "\" class=\"swipebox\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 19, $this->getSourceContext()); })()), "title", array()), "html", null, true);
                    echo "\">
                                <img src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "getPhoto", array(), "method"), "html", null, true);
                    echo "\" alt=\"\">
                            </a>
                        ";
                }
                // line 23
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </div>
                <div class=\"advert-item-detail-info\">
                    <div class=\"advert-item-detail-info-first-block\">
                        <b>Price: </b>
                        <span class=\"green-price\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 28, $this->getSourceContext()); })()), "price", array()), "html", null, true);
            echo " €</span>
                    </div>
                    <div>
                        <b>Date of posting: </b>
                        <span>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 32, $this->getSourceContext()); })()), "getCreatedAt", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <h5 class=\"text-center\">Description: </h5>
                <div class=\"advert-item-detail-description\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 37, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "
                </div>
                ";
        } else {
            // line 40
            echo "                    <h3 class=\"text-center\">No results for current request</h3>
                ";
        }
        // line 42
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_e08f6271980c8dfad3fb9d9a2bb1282a17a0784fd3d8affd45e1ad0bba3096ee->leave($__internal_e08f6271980c8dfad3fb9d9a2bb1282a17a0784fd3d8affd45e1ad0bba3096ee_prof);

        
        $__internal_25baac8bb18a7f139ca19f04f570f348d9af5c46221bc24ca33b1051fefa2cd2->leave($__internal_25baac8bb18a7f139ca19f04f570f348d9af5c46221bc24ca33b1051fefa2cd2_prof);

    }

    public function getTemplateName()
    {
        return "advertisements/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 42,  136 => 40,  130 => 37,  122 => 32,  115 => 28,  109 => 24,  103 => 23,  97 => 20,  90 => 19,  87 => 18,  83 => 17,  80 => 16,  76 => 14,  70 => 11,  63 => 10,  61 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"row\">
        <div class=\"container\">
            <div class=\"advert-item-detail\">
                {% if advert is defined %}
                <h3 class=\"text-center\">{{ advert.title }}</h3>
                {% if advert.getAdvertsPhotosFirst() %}
                <a href=\"{{ advert.getAdvertsPhotosFirst().getPhoto()  }}\" class=\"swipebox\" title=\"{{ advert.title }}\">
                    <img class=\"advert-item-detail-main-image\" src=\"{{ advert.getAdvertsPhotosFirst().getPhoto()  }}\" alt=\"\">
                </a>
                {% else %}
                    <img src=\"/images/default.png\" alt=\"\">
                {% endif %}
                <div class=\"advert-item-detail-images-list\">
                    {% for key, image in advert.getAdvertsPhotos %}
                        {% if image and key > 0 %}
                            <a href=\"{{ image.getPhoto()  }}\" class=\"swipebox\" title=\"{{ advert.title }}\">
                                <img src=\"{{ image.getPhoto()  }}\" alt=\"\">
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
                <div class=\"advert-item-detail-info\">
                    <div class=\"advert-item-detail-info-first-block\">
                        <b>Price: </b>
                        <span class=\"green-price\">{{ advert.price }} €</span>
                    </div>
                    <div>
                        <b>Date of posting: </b>
                        <span>{{ advert.getCreatedAt|date(\"Y-m-d\") }}</span>
                    </div>
                </div>
                <h5 class=\"text-center\">Description: </h5>
                <div class=\"advert-item-detail-description\">
                    {{ advert.description }}
                </div>
                {% else %}
                    <h3 class=\"text-center\">No results for current request</h3>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

", "advertisements/show.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/advertisements/show.html.twig");
    }
}
