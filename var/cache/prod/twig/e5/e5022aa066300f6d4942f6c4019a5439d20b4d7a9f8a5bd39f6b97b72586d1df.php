<?php

/* base.html.twig */
class __TwigTemplate_d13ab0fe59db408763b3a82041ffb9dbb25897067e75b8090797d8a96379ce18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sweetalert/sweetalert.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("swipebox/css/swipebox.min.css"), "html", null, true);
        echo "\">
</head>
<body>
<header>
    ";
        // line 16
        $this->loadTemplate("partials/nav.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "    ";
        // line 18
        echo "        ";
        // line 19
        echo "            ";
        // line 20
        echo "            ";
        // line 21
        echo "        ";
        // line 22
        echo "    ";
        // line 23
        echo "</header>

<main role=\"main\" class=\"container\">
    ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "</main>

";
        // line 29
        $this->displayBlock('scripts', $context, $blocks);
        // line 30
        echo "<script src=\"http://code.jquery.com/jquery-2.2.4.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.slim.js\"></script>
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("scripts/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("sweetalert/sweetalert.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("swipebox/js/jquery.swipebox.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    ( function( \$ ) {

        \$( '.swipebox' ).swipebox();

    } )( jQuery );
</script>
<script>
    var socket = io(':6001');
    socket.on('message', function (msg) {
        msg = JSON.parse(msg);
        var block = \$('.adverts-items');

        console.log(msg);

        var item = \$('<div/>').addClass('adverts-item').attr('style', 'filter: blur(13px)')
            .append(
                \$('<img/>').attr('src', msg.photo_path+msg.photo_name)
            )
            .append(
                \$('<a/>').attr('href', msg.slug).text(msg.title)
            )
            .append(
                \$('<div/>').addClass('advert-item-info')
                    .append(
                        \$('<b/>').text(msg.price + '€')
                    )
                    .append(
                        \$('<span/>').text(msg.created_at)
                    )
            );
        item.prependTo(block);
        setTimeout(function(){
            item.attr('style', '');
        }, 1000);

    });
</script>
<script>
    \$(document).ready(function(){
    });
    \$('.adverts-categories-chevron').on('click', function(){
        \$(this).parent().parent().find('.card-body').toggle(500);
        \$(this).toggleClass('fa-chevron-down fa-chevron-up');
    });
</script>
";
        // line 83
        $this->loadTemplate("flash.html.twig", "base.html.twig", 83)->display($context);
        // line 84
        echo "</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    // line 29
    public function block_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 29,  167 => 26,  162 => 6,  156 => 5,  150 => 84,  148 => 83,  98 => 36,  94 => 35,  90 => 34,  84 => 30,  82 => 29,  78 => 27,  76 => 26,  71 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/base.html.twig");
    }
}
