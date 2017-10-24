<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f50b54d307fdee490b6a4831be0135ff04c7d161a5a70dfc7b7e9171eb331c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50b54d307fdee490b6a4831be0135ff04c7d161a5a70dfc7b7e9171eb331c6d->enter($__internal_f50b54d307fdee490b6a4831be0135ff04c7d161a5a70dfc7b7e9171eb331c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e8ffb5c65187dd3d734de31c35159f4c69f8f3e459056e4033ebc434b372185c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ffb5c65187dd3d734de31c35159f4c69f8f3e459056e4033ebc434b372185c->enter($__internal_e8ffb5c65187dd3d734de31c35159f4c69f8f3e459056e4033ebc434b372185c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50b54d307fdee490b6a4831be0135ff04c7d161a5a70dfc7b7e9171eb331c6d->leave($__internal_f50b54d307fdee490b6a4831be0135ff04c7d161a5a70dfc7b7e9171eb331c6d_prof);

        
        $__internal_e8ffb5c65187dd3d734de31c35159f4c69f8f3e459056e4033ebc434b372185c->leave($__internal_e8ffb5c65187dd3d734de31c35159f4c69f8f3e459056e4033ebc434b372185c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae06c635621b6d0ec11d539271c70c6025cc5dbcc353c08840513921db99bb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae06c635621b6d0ec11d539271c70c6025cc5dbcc353c08840513921db99bb6a->enter($__internal_ae06c635621b6d0ec11d539271c70c6025cc5dbcc353c08840513921db99bb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b3fcceff79d09680cdc9e10a18eb1c9e66e003a329a06e6c6b8e587608989d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fcceff79d09680cdc9e10a18eb1c9e66e003a329a06e6c6b8e587608989d4b->enter($__internal_b3fcceff79d09680cdc9e10a18eb1c9e66e003a329a06e6c6b8e587608989d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3fcceff79d09680cdc9e10a18eb1c9e66e003a329a06e6c6b8e587608989d4b->leave($__internal_b3fcceff79d09680cdc9e10a18eb1c9e66e003a329a06e6c6b8e587608989d4b_prof);

        
        $__internal_ae06c635621b6d0ec11d539271c70c6025cc5dbcc353c08840513921db99bb6a->leave($__internal_ae06c635621b6d0ec11d539271c70c6025cc5dbcc353c08840513921db99bb6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24549d358d0663e94bf8d9fb9987cdc7fa147447fd41558707c31fdd9d435682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24549d358d0663e94bf8d9fb9987cdc7fa147447fd41558707c31fdd9d435682->enter($__internal_24549d358d0663e94bf8d9fb9987cdc7fa147447fd41558707c31fdd9d435682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1830e72393b6d29a90216fd741963a8d483a9d23a2a8d93842c5d0b835991593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1830e72393b6d29a90216fd741963a8d483a9d23a2a8d93842c5d0b835991593->enter($__internal_1830e72393b6d29a90216fd741963a8d483a9d23a2a8d93842c5d0b835991593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1830e72393b6d29a90216fd741963a8d483a9d23a2a8d93842c5d0b835991593->leave($__internal_1830e72393b6d29a90216fd741963a8d483a9d23a2a8d93842c5d0b835991593_prof);

        
        $__internal_24549d358d0663e94bf8d9fb9987cdc7fa147447fd41558707c31fdd9d435682->leave($__internal_24549d358d0663e94bf8d9fb9987cdc7fa147447fd41558707c31fdd9d435682_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed46931f6a2d64f6886380b3748c2f0f6425da3ce2b336ab35af2fdf53aa85c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed46931f6a2d64f6886380b3748c2f0f6425da3ce2b336ab35af2fdf53aa85c3->enter($__internal_ed46931f6a2d64f6886380b3748c2f0f6425da3ce2b336ab35af2fdf53aa85c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fdd782ecb56eb30ddcddb554e603b623de27c5d818cbcd6969f5e77b35fae7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd782ecb56eb30ddcddb554e603b623de27c5d818cbcd6969f5e77b35fae7ef->enter($__internal_fdd782ecb56eb30ddcddb554e603b623de27c5d818cbcd6969f5e77b35fae7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fdd782ecb56eb30ddcddb554e603b623de27c5d818cbcd6969f5e77b35fae7ef->leave($__internal_fdd782ecb56eb30ddcddb554e603b623de27c5d818cbcd6969f5e77b35fae7ef_prof);

        
        $__internal_ed46931f6a2d64f6886380b3748c2f0f6425da3ce2b336ab35af2fdf53aa85c3->leave($__internal_ed46931f6a2d64f6886380b3748c2f0f6425da3ce2b336ab35af2fdf53aa85c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/Code/mediapark/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
