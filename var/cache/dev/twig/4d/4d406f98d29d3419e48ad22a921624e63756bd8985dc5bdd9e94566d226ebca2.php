<?php

/* errors/list.html.twig */
class __TwigTemplate_d9cbc389433c3928d63598a9649ff56c6e3e303015e5d7b877457571c29b62d1 extends Twig_Template
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
        $__internal_eb1bd83dbb2376d792d47ca1b879c6c44abbb44cdcb4134650bb6fbd40ea38a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1bd83dbb2376d792d47ca1b879c6c44abbb44cdcb4134650bb6fbd40ea38a3->enter($__internal_eb1bd83dbb2376d792d47ca1b879c6c44abbb44cdcb4134650bb6fbd40ea38a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "errors/list.html.twig"));

        $__internal_1932df3c61b0b2d3e53da4bb35f2b4c66f80cf6efeaaf1965da3013552726a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1932df3c61b0b2d3e53da4bb35f2b4c66f80cf6efeaaf1965da3013552726a94->enter($__internal_1932df3c61b0b2d3e53da4bb35f2b4c66f80cf6efeaaf1965da3013552726a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "errors/list.html.twig"));

        // line 1
        echo "    <ul class=\"alert alert-danger\">
        ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 3
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "errors", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "    </ul>
";
        
        $__internal_eb1bd83dbb2376d792d47ca1b879c6c44abbb44cdcb4134650bb6fbd40ea38a3->leave($__internal_eb1bd83dbb2376d792d47ca1b879c6c44abbb44cdcb4134650bb6fbd40ea38a3_prof);

        
        $__internal_1932df3c61b0b2d3e53da4bb35f2b4c66f80cf6efeaaf1965da3013552726a94->leave($__internal_1932df3c61b0b2d3e53da4bb35f2b4c66f80cf6efeaaf1965da3013552726a94_prof);

    }

    public function getTemplateName()
    {
        return "errors/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <ul class=\"alert alert-danger\">
        {% for error in errors %}
            <li>{{ error.errors }}</li>
        {% endfor %}
    </ul>
", "errors/list.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/errors/list.html.twig");
    }
}
