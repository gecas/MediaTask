<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7922fccac352df51d49021583f863013ace86e93f7c5ae8a13ed8a14fa3d826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7922fccac352df51d49021583f863013ace86e93f7c5ae8a13ed8a14fa3d826->enter($__internal_a7922fccac352df51d49021583f863013ace86e93f7c5ae8a13ed8a14fa3d826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8cccbf3c164cf0699b8ee17266fe19454d49d3843961aae46bbde5671323e458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cccbf3c164cf0699b8ee17266fe19454d49d3843961aae46bbde5671323e458->enter($__internal_8cccbf3c164cf0699b8ee17266fe19454d49d3843961aae46bbde5671323e458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7922fccac352df51d49021583f863013ace86e93f7c5ae8a13ed8a14fa3d826->leave($__internal_a7922fccac352df51d49021583f863013ace86e93f7c5ae8a13ed8a14fa3d826_prof);

        
        $__internal_8cccbf3c164cf0699b8ee17266fe19454d49d3843961aae46bbde5671323e458->leave($__internal_8cccbf3c164cf0699b8ee17266fe19454d49d3843961aae46bbde5671323e458_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d2e39b9d0aaf069ac6c378ccecd855e126f45e9b97783bae9ee0eb36b00eb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2e39b9d0aaf069ac6c378ccecd855e126f45e9b97783bae9ee0eb36b00eb6b->enter($__internal_4d2e39b9d0aaf069ac6c378ccecd855e126f45e9b97783bae9ee0eb36b00eb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28af22af0c8c2a1f7ecb95ffaffa27162b34377e92d3f1194a513b53da915501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28af22af0c8c2a1f7ecb95ffaffa27162b34377e92d3f1194a513b53da915501->enter($__internal_28af22af0c8c2a1f7ecb95ffaffa27162b34377e92d3f1194a513b53da915501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_28af22af0c8c2a1f7ecb95ffaffa27162b34377e92d3f1194a513b53da915501->leave($__internal_28af22af0c8c2a1f7ecb95ffaffa27162b34377e92d3f1194a513b53da915501_prof);

        
        $__internal_4d2e39b9d0aaf069ac6c378ccecd855e126f45e9b97783bae9ee0eb36b00eb6b->leave($__internal_4d2e39b9d0aaf069ac6c378ccecd855e126f45e9b97783bae9ee0eb36b00eb6b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d5953cec2fd1ce72261fafe3f07ad314cdc8a5974e84824b56c8f1e246e6b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5953cec2fd1ce72261fafe3f07ad314cdc8a5974e84824b56c8f1e246e6b26->enter($__internal_3d5953cec2fd1ce72261fafe3f07ad314cdc8a5974e84824b56c8f1e246e6b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_74aa9af8bcc4c9559b3d02e347ce87e38c3a29849713a1e4458f3f2619d588cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74aa9af8bcc4c9559b3d02e347ce87e38c3a29849713a1e4458f3f2619d588cc->enter($__internal_74aa9af8bcc4c9559b3d02e347ce87e38c3a29849713a1e4458f3f2619d588cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_74aa9af8bcc4c9559b3d02e347ce87e38c3a29849713a1e4458f3f2619d588cc->leave($__internal_74aa9af8bcc4c9559b3d02e347ce87e38c3a29849713a1e4458f3f2619d588cc_prof);

        
        $__internal_3d5953cec2fd1ce72261fafe3f07ad314cdc8a5974e84824b56c8f1e246e6b26->leave($__internal_3d5953cec2fd1ce72261fafe3f07ad314cdc8a5974e84824b56c8f1e246e6b26_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_348b8da5a1b2b0bb0d998c6849841313a92ac7dc41ae41386d3fb4eb0313d25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348b8da5a1b2b0bb0d998c6849841313a92ac7dc41ae41386d3fb4eb0313d25c->enter($__internal_348b8da5a1b2b0bb0d998c6849841313a92ac7dc41ae41386d3fb4eb0313d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_daf3b957a2cbf4cb7a9efeca0c04484db6435af8026d322fb67f0ed572b04ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf3b957a2cbf4cb7a9efeca0c04484db6435af8026d322fb67f0ed572b04ffd->enter($__internal_daf3b957a2cbf4cb7a9efeca0c04484db6435af8026d322fb67f0ed572b04ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_daf3b957a2cbf4cb7a9efeca0c04484db6435af8026d322fb67f0ed572b04ffd->leave($__internal_daf3b957a2cbf4cb7a9efeca0c04484db6435af8026d322fb67f0ed572b04ffd_prof);

        
        $__internal_348b8da5a1b2b0bb0d998c6849841313a92ac7dc41ae41386d3fb4eb0313d25c->leave($__internal_348b8da5a1b2b0bb0d998c6849841313a92ac7dc41ae41386d3fb4eb0313d25c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vagrant/Code/mediapark/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
