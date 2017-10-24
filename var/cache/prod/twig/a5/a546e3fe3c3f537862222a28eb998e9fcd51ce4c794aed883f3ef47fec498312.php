<?php

/* default/index.html.twig */
class __TwigTemplate_492c694432f69801916522447cf4cdb6a03c36018b5ae4c6f9b34075e87b5d76 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 14
            echo "                <div class=\"adverts-item\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getTitle", array()), "html", null, true);
            echo " <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getIconClass", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getAdvertsCategories", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 21
                echo "                            <li class=\"list-group-item\"><a href=\"/app_dev.php/category/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                        </ul>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

        </div>
    </div>

    <h3 class=\"text-center\">Latest advertisements</h3>
    <div class=\"row\">
        <div class=\"adverts-items\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adverts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 36
            echo "            <div class=\"adverts-item\">
                ";
            // line 37
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method")) {
                // line 38
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getAdvertsPhotosFirst", array(), "method"), "getPhoto", array(), "method"), "html", null, true);
                echo "\" alt=\"\">
                    ";
            } else {
                // line 40
                echo "                        <img src=\"/images/default.png\" alt=\"\">
                ";
            }
            // line 42
            echo "                <a href=\"/app_dev.php/advertisement/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getSlug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getTitle", array()), "html", null, true);
            echo "</a>
                <div class=\"advert-item-info\">
                    <b>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getPrice", array()), "html", null, true);
            echo " €</b>
                    <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ad"], "getCreatedAt", array()), "Y-m-d"), "html", null, true);
            echo "</span>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
";
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
        return array (  134 => 49,  124 => 45,  120 => 44,  112 => 42,  108 => 40,  102 => 38,  100 => 37,  97 => 36,  93 => 35,  83 => 27,  74 => 23,  63 => 21,  59 => 20,  51 => 17,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/index.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/default/index.html.twig");
    }
}
