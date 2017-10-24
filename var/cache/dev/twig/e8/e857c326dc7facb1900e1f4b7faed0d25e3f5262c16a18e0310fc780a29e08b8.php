<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6e3775490534c14893d1cae83a431c03fd076ab87dbcc47564b9a2080af326da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3775490534c14893d1cae83a431c03fd076ab87dbcc47564b9a2080af326da->enter($__internal_6e3775490534c14893d1cae83a431c03fd076ab87dbcc47564b9a2080af326da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a7b81740f05a136a3fb2b207179dd7eac6a75ec2fd32b8316cf990324441ea3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b81740f05a136a3fb2b207179dd7eac6a75ec2fd32b8316cf990324441ea3a->enter($__internal_a7b81740f05a136a3fb2b207179dd7eac6a75ec2fd32b8316cf990324441ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3775490534c14893d1cae83a431c03fd076ab87dbcc47564b9a2080af326da->leave($__internal_6e3775490534c14893d1cae83a431c03fd076ab87dbcc47564b9a2080af326da_prof);

        
        $__internal_a7b81740f05a136a3fb2b207179dd7eac6a75ec2fd32b8316cf990324441ea3a->leave($__internal_a7b81740f05a136a3fb2b207179dd7eac6a75ec2fd32b8316cf990324441ea3a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0b7432e780bb78796567cb9e25c7257aba561ffb753801dbb055ac5bdfbd000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b7432e780bb78796567cb9e25c7257aba561ffb753801dbb055ac5bdfbd000->enter($__internal_a0b7432e780bb78796567cb9e25c7257aba561ffb753801dbb055ac5bdfbd000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_472c9d28afca4b445015849d6dedf3bbf7f9f30621948460ff302857ca98b4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472c9d28afca4b445015849d6dedf3bbf7f9f30621948460ff302857ca98b4f0->enter($__internal_472c9d28afca4b445015849d6dedf3bbf7f9f30621948460ff302857ca98b4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_472c9d28afca4b445015849d6dedf3bbf7f9f30621948460ff302857ca98b4f0->leave($__internal_472c9d28afca4b445015849d6dedf3bbf7f9f30621948460ff302857ca98b4f0_prof);

        
        $__internal_a0b7432e780bb78796567cb9e25c7257aba561ffb753801dbb055ac5bdfbd000->leave($__internal_a0b7432e780bb78796567cb9e25c7257aba561ffb753801dbb055ac5bdfbd000_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7aef18217107ae3e7e063d78b10236cb5de1fa8113ba94db21b2b0309eb3d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7aef18217107ae3e7e063d78b10236cb5de1fa8113ba94db21b2b0309eb3d4f->enter($__internal_d7aef18217107ae3e7e063d78b10236cb5de1fa8113ba94db21b2b0309eb3d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9e287b5c4c5b45ad480fd2297950d55157aae774e7fa856a1f9e84625f7e78ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e287b5c4c5b45ad480fd2297950d55157aae774e7fa856a1f9e84625f7e78ca->enter($__internal_9e287b5c4c5b45ad480fd2297950d55157aae774e7fa856a1f9e84625f7e78ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9e287b5c4c5b45ad480fd2297950d55157aae774e7fa856a1f9e84625f7e78ca->leave($__internal_9e287b5c4c5b45ad480fd2297950d55157aae774e7fa856a1f9e84625f7e78ca_prof);

        
        $__internal_d7aef18217107ae3e7e063d78b10236cb5de1fa8113ba94db21b2b0309eb3d4f->leave($__internal_d7aef18217107ae3e7e063d78b10236cb5de1fa8113ba94db21b2b0309eb3d4f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4521e8c991676f59d5bb8ac6b54903db965ab17f39b5b6335495a61a818903a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4521e8c991676f59d5bb8ac6b54903db965ab17f39b5b6335495a61a818903a->enter($__internal_e4521e8c991676f59d5bb8ac6b54903db965ab17f39b5b6335495a61a818903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dba1c8a3a881cbf94608116b4e15c50da15abe69d0180aff9d59108736aae436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba1c8a3a881cbf94608116b4e15c50da15abe69d0180aff9d59108736aae436->enter($__internal_dba1c8a3a881cbf94608116b4e15c50da15abe69d0180aff9d59108736aae436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_dba1c8a3a881cbf94608116b4e15c50da15abe69d0180aff9d59108736aae436->leave($__internal_dba1c8a3a881cbf94608116b4e15c50da15abe69d0180aff9d59108736aae436_prof);

        
        $__internal_e4521e8c991676f59d5bb8ac6b54903db965ab17f39b5b6335495a61a818903a->leave($__internal_e4521e8c991676f59d5bb8ac6b54903db965ab17f39b5b6335495a61a818903a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vagrant/Code/mediapark/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
