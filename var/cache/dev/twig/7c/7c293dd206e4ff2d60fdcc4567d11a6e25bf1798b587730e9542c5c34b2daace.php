<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_470c80ead6e850c7423cea9f7deb079feca303988a77197e6db68c230f12672d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64764c3109c9412597c311a28fc7cade033fe59a7822c243e63f277667b4d103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64764c3109c9412597c311a28fc7cade033fe59a7822c243e63f277667b4d103->enter($__internal_64764c3109c9412597c311a28fc7cade033fe59a7822c243e63f277667b4d103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f1eb56660df6ecb8e6534868e0d0cc10e71f7e6e32b20fbbf3a9bd9acc85c226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eb56660df6ecb8e6534868e0d0cc10e71f7e6e32b20fbbf3a9bd9acc85c226->enter($__internal_f1eb56660df6ecb8e6534868e0d0cc10e71f7e6e32b20fbbf3a9bd9acc85c226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64764c3109c9412597c311a28fc7cade033fe59a7822c243e63f277667b4d103->leave($__internal_64764c3109c9412597c311a28fc7cade033fe59a7822c243e63f277667b4d103_prof);

        
        $__internal_f1eb56660df6ecb8e6534868e0d0cc10e71f7e6e32b20fbbf3a9bd9acc85c226->leave($__internal_f1eb56660df6ecb8e6534868e0d0cc10e71f7e6e32b20fbbf3a9bd9acc85c226_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f41db7991a828cf3040d35aa4e0bdc24e6a5a6ced780d210c218849c185926e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f41db7991a828cf3040d35aa4e0bdc24e6a5a6ced780d210c218849c185926e->enter($__internal_9f41db7991a828cf3040d35aa4e0bdc24e6a5a6ced780d210c218849c185926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3c0de771a71d601368f2394e1a257aac21df3a81ee01723957fd80cf4a741401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0de771a71d601368f2394e1a257aac21df3a81ee01723957fd80cf4a741401->enter($__internal_3c0de771a71d601368f2394e1a257aac21df3a81ee01723957fd80cf4a741401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3c0de771a71d601368f2394e1a257aac21df3a81ee01723957fd80cf4a741401->leave($__internal_3c0de771a71d601368f2394e1a257aac21df3a81ee01723957fd80cf4a741401_prof);

        
        $__internal_9f41db7991a828cf3040d35aa4e0bdc24e6a5a6ced780d210c218849c185926e->leave($__internal_9f41db7991a828cf3040d35aa4e0bdc24e6a5a6ced780d210c218849c185926e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/vagrant/Code/mediapark/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
