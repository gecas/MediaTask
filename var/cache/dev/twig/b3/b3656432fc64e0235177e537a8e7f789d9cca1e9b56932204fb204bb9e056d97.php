<?php

/* default/index.html.twig */
class __TwigTemplate_415f368335f6820b864a3497c430a08c137ee3fa5f61156db2b006df476f0f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_587d25a75725e561d6d1cc58c8ac2cc2a60e105fe95f70b95ecff5ec181f1b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587d25a75725e561d6d1cc58c8ac2cc2a60e105fe95f70b95ecff5ec181f1b44->enter($__internal_587d25a75725e561d6d1cc58c8ac2cc2a60e105fe95f70b95ecff5ec181f1b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_644260aca7147f2760174e527f09cfabfd2f0975dda2b0fe5a5e96316ba77268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644260aca7147f2760174e527f09cfabfd2f0975dda2b0fe5a5e96316ba77268->enter($__internal_644260aca7147f2760174e527f09cfabfd2f0975dda2b0fe5a5e96316ba77268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587d25a75725e561d6d1cc58c8ac2cc2a60e105fe95f70b95ecff5ec181f1b44->leave($__internal_587d25a75725e561d6d1cc58c8ac2cc2a60e105fe95f70b95ecff5ec181f1b44_prof);

        
        $__internal_644260aca7147f2760174e527f09cfabfd2f0975dda2b0fe5a5e96316ba77268->leave($__internal_644260aca7147f2760174e527f09cfabfd2f0975dda2b0fe5a5e96316ba77268_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1b47a4fcebe067762c5bea2283753c17c77c834b2d082bb43a9d2e07b132e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b47a4fcebe067762c5bea2283753c17c77c834b2d082bb43a9d2e07b132e11->enter($__internal_f1b47a4fcebe067762c5bea2283753c17c77c834b2d082bb43a9d2e07b132e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26338d3c0ef6074827154393ad1cd192e094e4d7d8ea13b913a0b20edb84e5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26338d3c0ef6074827154393ad1cd192e094e4d7d8ea13b913a0b20edb84e5e5->enter($__internal_26338d3c0ef6074827154393ad1cd192e094e4d7d8ea13b913a0b20edb84e5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"card adverts-group-items-card\">
        <div class=\"card-header\">
            Adverts categories

            <i class=\"fa fa-chevron-down pull-right adverts-categories-chevron\" aria-hidden=\"true\"></i>
        </div>
        <div class=\"card-body adverts-group-items-card-body\">

            <div class=\"adverts-group-items\">
                ";
        // line 13
        if ((array_key_exists("groups", $context) && (twig_length_filter($this->env, (isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 13, $this->getSourceContext()); })())) > 0))) {
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 14, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 15
                echo "                    <div class=\"adverts-item\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getTitle", array()), "html", null, true);
                echo " <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getIconClass", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getAdvertsCategories", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 22
                    echo "                                <li class=\"list-group-item\"><a href=\"/app_dev.php/category/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                            </ul>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                ";
        }
        // line 29
        echo "            </div>

        </div>
    </div>

    <h3 class=\"text-center\">Latest advertisements</h3>
    <div class=\"row\">
        <div class=\"adverts-items\">
            ";
        // line 37
        if ((array_key_exists("adverts", $context) && (twig_length_filter($this->env, (isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 37, $this->getSourceContext()); })())) > 0))) {
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adverts"]) || array_key_exists("adverts", $context) ? $context["adverts"] : (function () { throw new Twig_Error_Runtime('Variable "adverts" does not exist.', 38, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
                // line 39
                echo "                <div class=\"adverts-item\">
                    ";
                // line 40
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method")) {
                    // line 41
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method"), "getPhoto", array(), "method"), "html", null, true);
                    echo "\" alt=\"\">
                        ";
                } else {
                    // line 43
                    echo "                            <img src=\"/images/default.png\" alt=\"\">
                    ";
                }
                // line 45
                echo "                    <a data-advert-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "id", array()), "html", null, true);
                echo "\" href=\"/app_dev.php/advertisement/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getSlug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getTitle", array()), "html", null, true);
                echo "</a>
                    <div class=\"advert-item-info\">
                        <b>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getPrice", array()), "html", null, true);
                echo " €</b>
                        <span>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getCreatedAt", array()), "Y-m-d"), "html", null, true);
                echo "</span>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
        } else {
            // line 53
            echo "                <h3 class=\"text-center\">No results for current request</h3>
            ";
        }
        // line 55
        echo "        </div>
    </div>
";
        
        $__internal_26338d3c0ef6074827154393ad1cd192e094e4d7d8ea13b913a0b20edb84e5e5->leave($__internal_26338d3c0ef6074827154393ad1cd192e094e4d7d8ea13b913a0b20edb84e5e5_prof);

        
        $__internal_f1b47a4fcebe067762c5bea2283753c17c77c834b2d082bb43a9d2e07b132e11->leave($__internal_f1b47a4fcebe067762c5bea2283753c17c77c834b2d082bb43a9d2e07b132e11_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  166 => 53,  163 => 52,  153 => 48,  149 => 47,  139 => 45,  135 => 43,  129 => 41,  127 => 40,  124 => 39,  119 => 38,  117 => 37,  107 => 29,  104 => 28,  95 => 24,  84 => 22,  80 => 21,  72 => 18,  67 => 15,  62 => 14,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"card adverts-group-items-card\">
        <div class=\"card-header\">
            Adverts categories

            <i class=\"fa fa-chevron-down pull-right adverts-categories-chevron\" aria-hidden=\"true\"></i>
        </div>
        <div class=\"card-body adverts-group-items-card-body\">

            <div class=\"adverts-group-items\">
                {% if groups is defined and groups|length > 0 %}
                    {% for group in groups %}
                    <div class=\"adverts-item\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                {{ group.getTitle }} <i class=\"{{ group.getIconClass }}\" aria-hidden=\"true\"></i>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                {% for category in group.getAdvertsCategories() %}
                                <li class=\"list-group-item\"><a href=\"/app_dev.php/category/{{ category.slug }}\">{{  category.title }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    {% endfor %}
                {% endif %}
            </div>

        </div>
    </div>

    <h3 class=\"text-center\">Latest advertisements</h3>
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
                    <a data-advert-id=\"{{ ad.id }}\" href=\"/app_dev.php/advertisement/{{ ad.getSlug }}\">{{ ad.getTitle }}</a>
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

", "default/index.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/default/index.html.twig");
    }
}
