<?php

/* advertisements/my.html.twig */
class __TwigTemplate_33cb89fab7e2ce4ac810f2128577ccd6fea4b0f00fbfcc3bf8dc4a635e73f596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "advertisements/my.html.twig", 1);
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
        $__internal_618d4cfe28ab372058179a972d71236d56bf4e8da5068cce3477260d558b108b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618d4cfe28ab372058179a972d71236d56bf4e8da5068cce3477260d558b108b->enter($__internal_618d4cfe28ab372058179a972d71236d56bf4e8da5068cce3477260d558b108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/my.html.twig"));

        $__internal_158d0f2513b742b2f9d02ed907cd60ae6f1e37321ab549c2ae340c43ffea8956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158d0f2513b742b2f9d02ed907cd60ae6f1e37321ab549c2ae340c43ffea8956->enter($__internal_158d0f2513b742b2f9d02ed907cd60ae6f1e37321ab549c2ae340c43ffea8956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/my.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618d4cfe28ab372058179a972d71236d56bf4e8da5068cce3477260d558b108b->leave($__internal_618d4cfe28ab372058179a972d71236d56bf4e8da5068cce3477260d558b108b_prof);

        
        $__internal_158d0f2513b742b2f9d02ed907cd60ae6f1e37321ab549c2ae340c43ffea8956->leave($__internal_158d0f2513b742b2f9d02ed907cd60ae6f1e37321ab549c2ae340c43ffea8956_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e45b2c06ccb128cdd9e42a4f48c8af1a9491293e0e00da09a6d8a127f92309af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45b2c06ccb128cdd9e42a4f48c8af1a9491293e0e00da09a6d8a127f92309af->enter($__internal_e45b2c06ccb128cdd9e42a4f48c8af1a9491293e0e00da09a6d8a127f92309af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cc019057928ff6108cc7874c095eb550eed0f9c152e4ed2d60da9805df8f3581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc019057928ff6108cc7874c095eb550eed0f9c152e4ed2d60da9805df8f3581->enter($__internal_cc019057928ff6108cc7874c095eb550eed0f9c152e4ed2d60da9805df8f3581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"text-center\">My advertisements</h3>
    <div class=\"row\">
        <div class=\"adverts-items\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 8
            echo "                <div class=\"adverts-item\">
                    ";
            // line 9
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method")) {
                // line 10
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method"), "getPhoto", array(), "method"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } else {
                // line 12
                echo "                        <img src=\"/images/default.png\" alt=\"\">
                    ";
            }
            // line 14
            echo "                    <a href=\"/advertisement/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getSlug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getTitle", array()), "html", null, true);
            echo "</a>
                    <div class=\"advert-item-info\">
                        <b>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getPrice", array()), "html", null, true);
            echo " €</b>
                        <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getCreatedAt", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
    </div>
";
        
        $__internal_cc019057928ff6108cc7874c095eb550eed0f9c152e4ed2d60da9805df8f3581->leave($__internal_cc019057928ff6108cc7874c095eb550eed0f9c152e4ed2d60da9805df8f3581_prof);

        
        $__internal_e45b2c06ccb128cdd9e42a4f48c8af1a9491293e0e00da09a6d8a127f92309af->leave($__internal_e45b2c06ccb128cdd9e42a4f48c8af1a9491293e0e00da09a6d8a127f92309af_prof);

    }

    public function getTemplateName()
    {
        return "advertisements/my.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  85 => 17,  81 => 16,  73 => 14,  69 => 12,  63 => 10,  61 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <h3 class=\"text-center\">My advertisements</h3>
    <div class=\"row\">
        <div class=\"adverts-items\">
            {% for ad in adverts %}
                <div class=\"adverts-item\">
                    {% if ad.getAdvertsPhotosFirst() %}
                        <img src=\"{{ ad.getAdvertsPhotosFirst().getPhoto()  }}\" alt=\"\">
                    {% else %}
                        <img src=\"/images/default.png\" alt=\"\">
                    {% endif %}
                    <a href=\"/advertisement/{{ ad.getSlug }}\">{{ ad.getTitle }}</a>
                    <div class=\"advert-item-info\">
                        <b>{{ ad.getPrice }} €</b>
                        <span>{{ ad.getCreatedAt|date(\"Y-m-d\") }}</span>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

", "advertisements/my.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/advertisements/my.html.twig");
    }
}
