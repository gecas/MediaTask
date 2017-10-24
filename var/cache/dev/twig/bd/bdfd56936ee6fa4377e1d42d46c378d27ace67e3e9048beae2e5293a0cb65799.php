<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2dd97f27ac5f89f865cd89a67f3139f287d1870106b58a513127a69dba998323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b4ecd35451ba2759a0a63a70f83ed0cedd2f2a62c856ec1bf16685abb2a2d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4ecd35451ba2759a0a63a70f83ed0cedd2f2a62c856ec1bf16685abb2a2d77->enter($__internal_8b4ecd35451ba2759a0a63a70f83ed0cedd2f2a62c856ec1bf16685abb2a2d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_991066596d5e8267259c8224345b5e1b96e678ff65c5c80144d0733f2d580a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991066596d5e8267259c8224345b5e1b96e678ff65c5c80144d0733f2d580a0f->enter($__internal_991066596d5e8267259c8224345b5e1b96e678ff65c5c80144d0733f2d580a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_8b4ecd35451ba2759a0a63a70f83ed0cedd2f2a62c856ec1bf16685abb2a2d77->leave($__internal_8b4ecd35451ba2759a0a63a70f83ed0cedd2f2a62c856ec1bf16685abb2a2d77_prof);

        
        $__internal_991066596d5e8267259c8224345b5e1b96e678ff65c5c80144d0733f2d580a0f->leave($__internal_991066596d5e8267259c8224345b5e1b96e678ff65c5c80144d0733f2d580a0f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0a08bc39b9bcf4e938102aa4c42d9226be6de5f0132a0e9b04b779b5a06e4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a08bc39b9bcf4e938102aa4c42d9226be6de5f0132a0e9b04b779b5a06e4a7->enter($__internal_b0a08bc39b9bcf4e938102aa4c42d9226be6de5f0132a0e9b04b779b5a06e4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc273d694e6a2158ba306a8db5347b85215af75a0d38398ff71a06008a6dc51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc273d694e6a2158ba306a8db5347b85215af75a0d38398ff71a06008a6dc51f->enter($__internal_dc273d694e6a2158ba306a8db5347b85215af75a0d38398ff71a06008a6dc51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_dc273d694e6a2158ba306a8db5347b85215af75a0d38398ff71a06008a6dc51f->leave($__internal_dc273d694e6a2158ba306a8db5347b85215af75a0d38398ff71a06008a6dc51f_prof);

        
        $__internal_b0a08bc39b9bcf4e938102aa4c42d9226be6de5f0132a0e9b04b779b5a06e4a7->leave($__internal_b0a08bc39b9bcf4e938102aa4c42d9226be6de5f0132a0e9b04b779b5a06e4a7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0acecad26bd732bd07ed06ac2446bfbbd018017df7495eec21421c0a5118a9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acecad26bd732bd07ed06ac2446bfbbd018017df7495eec21421c0a5118a9a1->enter($__internal_0acecad26bd732bd07ed06ac2446bfbbd018017df7495eec21421c0a5118a9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5622e612765fa380d36fe00790c4add94a2d9c751c3d08622c3ae741506a0f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5622e612765fa380d36fe00790c4add94a2d9c751c3d08622c3ae741506a0f71->enter($__internal_5622e612765fa380d36fe00790c4add94a2d9c751c3d08622c3ae741506a0f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5622e612765fa380d36fe00790c4add94a2d9c751c3d08622c3ae741506a0f71->leave($__internal_5622e612765fa380d36fe00790c4add94a2d9c751c3d08622c3ae741506a0f71_prof);

        
        $__internal_0acecad26bd732bd07ed06ac2446bfbbd018017df7495eec21421c0a5118a9a1->leave($__internal_0acecad26bd732bd07ed06ac2446bfbbd018017df7495eec21421c0a5118a9a1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d09808537907dc2d46a5697a389f1907a4f76044b84d1b3cb39c3cc17db031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d09808537907dc2d46a5697a389f1907a4f76044b84d1b3cb39c3cc17db031->enter($__internal_d3d09808537907dc2d46a5697a389f1907a4f76044b84d1b3cb39c3cc17db031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33e0da5e734c76ff6ece2a46fb0b821bd53432144be9289c3152110c6f596c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e0da5e734c76ff6ece2a46fb0b821bd53432144be9289c3152110c6f596c10->enter($__internal_33e0da5e734c76ff6ece2a46fb0b821bd53432144be9289c3152110c6f596c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33e0da5e734c76ff6ece2a46fb0b821bd53432144be9289c3152110c6f596c10->leave($__internal_33e0da5e734c76ff6ece2a46fb0b821bd53432144be9289c3152110c6f596c10_prof);

        
        $__internal_d3d09808537907dc2d46a5697a389f1907a4f76044b84d1b3cb39c3cc17db031->leave($__internal_d3d09808537907dc2d46a5697a389f1907a4f76044b84d1b3cb39c3cc17db031_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/vagrant/Code/mediapark/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
