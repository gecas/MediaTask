<?php

/* advertisements/create.html.twig */
class __TwigTemplate_ecec066a855953abf56253fa8fb90d62f6da560978ff4d20d6addf393281b4cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "advertisements/create.html.twig", 1);
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
        $__internal_2bbdcfc5a20f3e8ad8bf1a343b82593ec068c07ab7bd5966f3455330fd66d81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbdcfc5a20f3e8ad8bf1a343b82593ec068c07ab7bd5966f3455330fd66d81e->enter($__internal_2bbdcfc5a20f3e8ad8bf1a343b82593ec068c07ab7bd5966f3455330fd66d81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/create.html.twig"));

        $__internal_b043dabb5b487b474cacee4a5b6620e57477f4dbb011aa146c519e91aace26e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b043dabb5b487b474cacee4a5b6620e57477f4dbb011aa146c519e91aace26e3->enter($__internal_b043dabb5b487b474cacee4a5b6620e57477f4dbb011aa146c519e91aace26e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advertisements/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bbdcfc5a20f3e8ad8bf1a343b82593ec068c07ab7bd5966f3455330fd66d81e->leave($__internal_2bbdcfc5a20f3e8ad8bf1a343b82593ec068c07ab7bd5966f3455330fd66d81e_prof);

        
        $__internal_b043dabb5b487b474cacee4a5b6620e57477f4dbb011aa146c519e91aace26e3->leave($__internal_b043dabb5b487b474cacee4a5b6620e57477f4dbb011aa146c519e91aace26e3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9db1f49af02b973c8a176270ce6f6c809d9a327fc488ad651de21026f500f32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db1f49af02b973c8a176270ce6f6c809d9a327fc488ad651de21026f500f32e->enter($__internal_9db1f49af02b973c8a176270ce6f6c809d9a327fc488ad651de21026f500f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_31ed5e279d0852e2378bed78978ca58803342f96813728310d3751a6bbed3980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ed5e279d0852e2378bed78978ca58803342f96813728310d3751a6bbed3980->enter($__internal_31ed5e279d0852e2378bed78978ca58803342f96813728310d3751a6bbed3980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1 class=\"text-center\">Create new advertisement</h1>
    <div class=\"container\">
        <div class=\"col-md-8 common-form\">
            ";
        // line 7
        $context["errors"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method");
        // line 8
        echo "            ";
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 8, $this->getSourceContext()); })())) > 0))) {
            // line 9
            echo "                ";
            $this->loadTemplate("errors/list.html.twig", "advertisements/create.html.twig", 9)->display($context);
            // line 10
            echo "            ";
        }
        // line 11
        echo "            <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("store_adverts");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"title\">Title</label>
                    <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"price\">Price</label>
                    <input type=\"number\" step=\"0.01\" id=\"title\" name=\"price\" class=\"form-control\" value=\"\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"category_id\">Category</label>
                    <select name=\"category_id\" id=\"category_id\" class=\"form-control\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 25, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "title", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"photos\">Advertisement photos</label>
                    <input type=\"file\" multiple id=\"photos\" name=\"photos[]\" class=\"form-control\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"description\">Description</label>
                    <textarea name=\"description\" id=\"description\" class=\"form-control\" cols=\"30\" rows=\"10\"></textarea>
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-warning\" id=\"_submit\" name=\"_submit\">Create!</button>
                </div>
            </form>
        </div>
    </div>

";
        
        $__internal_31ed5e279d0852e2378bed78978ca58803342f96813728310d3751a6bbed3980->leave($__internal_31ed5e279d0852e2378bed78978ca58803342f96813728310d3751a6bbed3980_prof);

        
        $__internal_9db1f49af02b973c8a176270ce6f6c809d9a327fc488ad651de21026f500f32e->leave($__internal_9db1f49af02b973c8a176270ce6f6c809d9a327fc488ad651de21026f500f32e_prof);

    }

    public function getTemplateName()
    {
        return "advertisements/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  87 => 26,  83 => 25,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    <h1 class=\"text-center\">Create new advertisement</h1>
    <div class=\"container\">
        <div class=\"col-md-8 common-form\">
            {% set errors = app.session.flashbag.get('errors') %}
            {% if errors is defined and errors|length > 0 %}
                {% include 'errors/list.html.twig' %}
            {% endif %}
            <form action=\"{{ path(\"store_adverts\") }}\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"title\">Title</label>
                    <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"\"/>
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"price\">Price</label>
                    <input type=\"number\" step=\"0.01\" id=\"title\" name=\"price\" class=\"form-control\" value=\"\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"category_id\">Category</label>
                    <select name=\"category_id\" id=\"category_id\" class=\"form-control\">
                        {% for category in categories %}
                            <option value=\"{{ category.id }}\">{{ category.title }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"photos\">Advertisement photos</label>
                    <input type=\"file\" multiple id=\"photos\" name=\"photos[]\" class=\"form-control\" required=\"required\" />
                </div>

                <div class=\"form-group\">
                    <label class=\"label-control\" for=\"description\">Description</label>
                    <textarea name=\"description\" id=\"description\" class=\"form-control\" cols=\"30\" rows=\"10\"></textarea>
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn btn-warning\" id=\"_submit\" name=\"_submit\">Create!</button>
                </div>
            </form>
        </div>
    </div>

{% endblock %}", "advertisements/create.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/advertisements/create.html.twig");
    }
}
