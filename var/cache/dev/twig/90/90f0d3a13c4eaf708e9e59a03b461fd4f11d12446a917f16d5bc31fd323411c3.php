<?php

/* advertisements/category_adverts.html.twig */
class __TwigTemplate_4339c3fe57faec7194929fed75733a73500dc410cafc7011217b1083b00a3328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "advertisements/category_adverts.html.twig", 1);
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
        $__internal_d71b8459cd277a57c961b3c3df3aceee98fe5859bd1e8452ef6305ed340b8090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71b8459cd277a57c961b3c3df3aceee98fe5859bd1e8452ef6305ed340b8090->enter($__internal_d71b8459cd277a57c961b3c3df3aceee98fe5859bd1e8452ef6305ed340b8090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/category_adverts.html.twig"));

        $__internal_af6bff6b7ec49bc03505ebf00b5b6bc89be1e4fefe36db8d072cc572adf9c350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6bff6b7ec49bc03505ebf00b5b6bc89be1e4fefe36db8d072cc572adf9c350->enter($__internal_af6bff6b7ec49bc03505ebf00b5b6bc89be1e4fefe36db8d072cc572adf9c350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/category_adverts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d71b8459cd277a57c961b3c3df3aceee98fe5859bd1e8452ef6305ed340b8090->leave($__internal_d71b8459cd277a57c961b3c3df3aceee98fe5859bd1e8452ef6305ed340b8090_prof);

        
        $__internal_af6bff6b7ec49bc03505ebf00b5b6bc89be1e4fefe36db8d072cc572adf9c350->leave($__internal_af6bff6b7ec49bc03505ebf00b5b6bc89be1e4fefe36db8d072cc572adf9c350_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_474ef4b0efc43b9149fd56ef2ed2ab5b3eb776d18dc1ed68b7ed68ad325a2b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474ef4b0efc43b9149fd56ef2ed2ab5b3eb776d18dc1ed68b7ed68ad325a2b48->enter($__internal_474ef4b0efc43b9149fd56ef2ed2ab5b3eb776d18dc1ed68b7ed68ad325a2b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2bf194c079af3131ce9599ece580653f40e1b1cedf3a691e844ea52c4acd9d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf194c079af3131ce9599ece580653f40e1b1cedf3a691e844ea52c4acd9d95->enter($__internal_2bf194c079af3131ce9599ece580653f40e1b1cedf3a691e844ea52c4acd9d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h3 class=\"text-center\">Category advertisements</h3>
    <div class=\"row\">
        <div class=\"adverts-items\">
            ";
        // line 7
        if ((array_key_exists("adverts", $context) && (twig_length_filter($this->env, (isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 7, $this->getSourceContext()); })())) > 0))) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 8, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 9
                echo "                    <div class=\"adverts-item\">
                        ";
                // line 10
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method")) {
                    // line 11
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method"), "getPhoto", array(), "method"), "html", null, true);
                    echo "\" alt=\"\">
                        ";
                } else {
                    // line 13
                    echo "                            <img src=\"/images/default.png\" alt=\"\">
                        ";
                }
                // line 15
                echo "                        <a href=\"/app_dev.php/advertisement/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getSlug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getTitle", array()), "html", null, true);
                echo "</a>
                        <div class=\"advert-item-info\">
                            <b>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getPrice", array()), "html", null, true);
                echo " €</b>
                            <span>";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getCreatedAt", array()), "Y-m-d"), "html", null, true);
                echo "</span>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
        } else {
            // line 23
            echo "                <h3 class=\"text-center\">No results for current request</h3>
            ";
        }
        // line 25
        echo "        </div>
    </div>
";
        
        $__internal_2bf194c079af3131ce9599ece580653f40e1b1cedf3a691e844ea52c4acd9d95->leave($__internal_2bf194c079af3131ce9599ece580653f40e1b1cedf3a691e844ea52c4acd9d95_prof);

        
        $__internal_474ef4b0efc43b9149fd56ef2ed2ab5b3eb776d18dc1ed68b7ed68ad325a2b48->leave($__internal_474ef4b0efc43b9149fd56ef2ed2ab5b3eb776d18dc1ed68b7ed68ad325a2b48_prof);

    }

    public function getTemplateName()
    {
        return "advertisements/category_adverts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  101 => 23,  98 => 22,  88 => 18,  84 => 17,  76 => 15,  72 => 13,  66 => 11,  64 => 10,  61 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <h3 class=\"text-center\">Category advertisements</h3>
    <div class=\"row\">
        <div class=\"adverts-items\">
            {% if adverts is defined and adverts|length > 0 %}
                {% for ad in adverts %}
                    <div class=\"adverts-item\">
                        {% if ad.getAdvertsPhotosFirst() %}
                            <img src=\"{{ ad.getAdvertsPhotosFirst().getPhoto()  }}\" alt=\"\">
                        {% else %}
                            <img src=\"/images/default.png\" alt=\"\">
                        {% endif %}
                        <a href=\"/app_dev.php/advertisement/{{ ad.getSlug }}\">{{ ad.getTitle }}</a>
                        <div class=\"advert-item-info\">
                            <b>{{ ad.getPrice }} €</b>
                            <span>{{ ad.getCreatedAt|date(\"Y-m-d\") }}</span>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <h3 class=\"text-center\">No results for current request</h3>
            {% endif %}
        </div>
    </div>
{% endblock %}

", "advertisements/category_adverts.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/advertisements/category_adverts.html.twig");
    }
}
