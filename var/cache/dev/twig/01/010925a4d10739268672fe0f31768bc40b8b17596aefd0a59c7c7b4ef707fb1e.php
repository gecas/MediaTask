<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_ffe97f5221c38ac5902a05e4c17b92ad8a8c15bef7051052f0b27c38c3cfad2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f32db002289b1f1167be21b3e127ef2e05f0fb2a183fb27d6ca6a7532d1de4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32db002289b1f1167be21b3e127ef2e05f0fb2a183fb27d6ca6a7532d1de4e9->enter($__internal_f32db002289b1f1167be21b3e127ef2e05f0fb2a183fb27d6ca6a7532d1de4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9e5705d5d83718611052b63d0db30250cbde38d9527337ed652cad9354d5f710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5705d5d83718611052b63d0db30250cbde38d9527337ed652cad9354d5f710->enter($__internal_9e5705d5d83718611052b63d0db30250cbde38d9527337ed652cad9354d5f710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32db002289b1f1167be21b3e127ef2e05f0fb2a183fb27d6ca6a7532d1de4e9->leave($__internal_f32db002289b1f1167be21b3e127ef2e05f0fb2a183fb27d6ca6a7532d1de4e9_prof);

        
        $__internal_9e5705d5d83718611052b63d0db30250cbde38d9527337ed652cad9354d5f710->leave($__internal_9e5705d5d83718611052b63d0db30250cbde38d9527337ed652cad9354d5f710_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31f2b2bcaefa20483ced5ff323a738af74dc71cc257a08c6d28af92389996c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f2b2bcaefa20483ced5ff323a738af74dc71cc257a08c6d28af92389996c04->enter($__internal_31f2b2bcaefa20483ced5ff323a738af74dc71cc257a08c6d28af92389996c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d01e5cd5e266225a51d312a92ccb064df757b834e36dde80882611549ea6da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d01e5cd5e266225a51d312a92ccb064df757b834e36dde80882611549ea6da2->enter($__internal_7d01e5cd5e266225a51d312a92ccb064df757b834e36dde80882611549ea6da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7d01e5cd5e266225a51d312a92ccb064df757b834e36dde80882611549ea6da2->leave($__internal_7d01e5cd5e266225a51d312a92ccb064df757b834e36dde80882611549ea6da2_prof);

        
        $__internal_31f2b2bcaefa20483ced5ff323a738af74dc71cc257a08c6d28af92389996c04->leave($__internal_31f2b2bcaefa20483ced5ff323a738af74dc71cc257a08c6d28af92389996c04_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/vagrant/Code/mediapark/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
