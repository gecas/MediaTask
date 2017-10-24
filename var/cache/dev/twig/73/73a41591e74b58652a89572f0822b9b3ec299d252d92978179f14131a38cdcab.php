<?php

/* base.html.twig */
class __TwigTemplate_83b5e9b24179292353fe88ba51f5993b124411c8d1e7b755b4a700156f836eec extends Twig_Template
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
        $__internal_6a8314a9e99bbc61597691c59d5b14d1951fe695cbfa78a0e83f8ccae552cc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8314a9e99bbc61597691c59d5b14d1951fe695cbfa78a0e83f8ccae552cc98->enter($__internal_6a8314a9e99bbc61597691c59d5b14d1951fe695cbfa78a0e83f8ccae552cc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5acafb7bf3041ff7888ea6313d8cdda7ae08e6f4e52063e657198793f5b79a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acafb7bf3041ff7888ea6313d8cdda7ae08e6f4e52063e657198793f5b79a2d->enter($__internal_5acafb7bf3041ff7888ea6313d8cdda7ae08e6f4e52063e657198793f5b79a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<script>
    \$('.adverts-item a').on('click', function(e){
        e.preventDefault();
        var ad_id = \$(this).data('advert-id');
        var path = \"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("views_counter");
        echo "\";

        \$.ajax({
            url: path,
            type: 'POST',
            data: {
                advert: ad_id
            },
            error: function() {
                console.log('An error has occurred');
            },
            dataType: 'json',
            success: function(data) {
                console.log(data);
            }
        });
    });
</script>
<script>
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
        // line 103
        $this->loadTemplate("flash.html.twig", "base.html.twig", 103)->display($context);
        // line 104
        echo "</body>
</html>
";
        
        $__internal_6a8314a9e99bbc61597691c59d5b14d1951fe695cbfa78a0e83f8ccae552cc98->leave($__internal_6a8314a9e99bbc61597691c59d5b14d1951fe695cbfa78a0e83f8ccae552cc98_prof);

        
        $__internal_5acafb7bf3041ff7888ea6313d8cdda7ae08e6f4e52063e657198793f5b79a2d->leave($__internal_5acafb7bf3041ff7888ea6313d8cdda7ae08e6f4e52063e657198793f5b79a2d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_803ca2d9b2eac425de87e428c67b9a766b5b631c84eedbc73b60de0f860bb5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803ca2d9b2eac425de87e428c67b9a766b5b631c84eedbc73b60de0f860bb5a9->enter($__internal_803ca2d9b2eac425de87e428c67b9a766b5b631c84eedbc73b60de0f860bb5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcb137ff1d4d6483b13be5217ddaee50cf244b181294f0ff929f8eb8ff229038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb137ff1d4d6483b13be5217ddaee50cf244b181294f0ff929f8eb8ff229038->enter($__internal_bcb137ff1d4d6483b13be5217ddaee50cf244b181294f0ff929f8eb8ff229038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bcb137ff1d4d6483b13be5217ddaee50cf244b181294f0ff929f8eb8ff229038->leave($__internal_bcb137ff1d4d6483b13be5217ddaee50cf244b181294f0ff929f8eb8ff229038_prof);

        
        $__internal_803ca2d9b2eac425de87e428c67b9a766b5b631c84eedbc73b60de0f860bb5a9->leave($__internal_803ca2d9b2eac425de87e428c67b9a766b5b631c84eedbc73b60de0f860bb5a9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c0120ba44580f83a41fd34921237d84d8c029a928f29e3ec6bb24dae2c940ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0120ba44580f83a41fd34921237d84d8c029a928f29e3ec6bb24dae2c940ee->enter($__internal_7c0120ba44580f83a41fd34921237d84d8c029a928f29e3ec6bb24dae2c940ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f9a996dae3ddd3655c3fc36a27f1b7b2045c29070d53591af2005c41cddb2a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a996dae3ddd3655c3fc36a27f1b7b2045c29070d53591af2005c41cddb2a77->enter($__internal_f9a996dae3ddd3655c3fc36a27f1b7b2045c29070d53591af2005c41cddb2a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f9a996dae3ddd3655c3fc36a27f1b7b2045c29070d53591af2005c41cddb2a77->leave($__internal_f9a996dae3ddd3655c3fc36a27f1b7b2045c29070d53591af2005c41cddb2a77_prof);

        
        $__internal_7c0120ba44580f83a41fd34921237d84d8c029a928f29e3ec6bb24dae2c940ee->leave($__internal_7c0120ba44580f83a41fd34921237d84d8c029a928f29e3ec6bb24dae2c940ee_prof);

    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        $__internal_48a82f69001648ba35d08c712a51d670fc5716554197c48b340d004f551dd2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a82f69001648ba35d08c712a51d670fc5716554197c48b340d004f551dd2fb->enter($__internal_48a82f69001648ba35d08c712a51d670fc5716554197c48b340d004f551dd2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bec6270ecb6d596dd08c9ed98e872d25b1f4a571d967dba6853d2f39a6092e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec6270ecb6d596dd08c9ed98e872d25b1f4a571d967dba6853d2f39a6092e2d->enter($__internal_bec6270ecb6d596dd08c9ed98e872d25b1f4a571d967dba6853d2f39a6092e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bec6270ecb6d596dd08c9ed98e872d25b1f4a571d967dba6853d2f39a6092e2d->leave($__internal_bec6270ecb6d596dd08c9ed98e872d25b1f4a571d967dba6853d2f39a6092e2d_prof);

        
        $__internal_48a82f69001648ba35d08c712a51d670fc5716554197c48b340d004f551dd2fb->leave($__internal_48a82f69001648ba35d08c712a51d670fc5716554197c48b340d004f551dd2fb_prof);

    }

    // line 29
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_7bd17d903b84168ff23841b0cd84db1126af496e3138c2db00a69526fe00f58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd17d903b84168ff23841b0cd84db1126af496e3138c2db00a69526fe00f58c->enter($__internal_7bd17d903b84168ff23841b0cd84db1126af496e3138c2db00a69526fe00f58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_fe25a6c452f70f4ea06aacfa77ebafc0eec508d8ac136baa1a5b600bff064f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe25a6c452f70f4ea06aacfa77ebafc0eec508d8ac136baa1a5b600bff064f2c->enter($__internal_fe25a6c452f70f4ea06aacfa77ebafc0eec508d8ac136baa1a5b600bff064f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_fe25a6c452f70f4ea06aacfa77ebafc0eec508d8ac136baa1a5b600bff064f2c->leave($__internal_fe25a6c452f70f4ea06aacfa77ebafc0eec508d8ac136baa1a5b600bff064f2c_prof);

        
        $__internal_7bd17d903b84168ff23841b0cd84db1126af496e3138c2db00a69526fe00f58c->leave($__internal_7bd17d903b84168ff23841b0cd84db1126af496e3138c2db00a69526fe00f58c_prof);

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
        return array (  243 => 29,  226 => 26,  209 => 6,  191 => 5,  179 => 104,  177 => 103,  112 => 41,  104 => 36,  100 => 35,  96 => 34,  90 => 30,  88 => 29,  84 => 27,  82 => 26,  77 => 23,  75 => 22,  73 => 21,  71 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  56 => 12,  52 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('sweetalert/sweetalert.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('swipebox/css/swipebox.min.css') }}\">
</head>
<body>
<header>
    {% include 'partials/nav.html.twig' %}
    {#<div class=\"header-search\">#}
        {#<form class=\"form-inline mt-2 mt-md-0\">#}
            {#<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">#}
            {#<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>#}
        {#</form>#}
    {#</div>#}
</header>

<main role=\"main\" class=\"container\">
    {% block content %}{% endblock %}
</main>

{% block scripts %}{% endblock %}
<script src=\"http://code.jquery.com/jquery-2.2.4.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.slim.js\"></script>
<script src=\"{{ asset('scripts/app.js') }}\"></script>
<script src=\"{{ asset('sweetalert/sweetalert.js') }}\"></script>
<script src=\"{{ asset('swipebox/js/jquery.swipebox.min.js') }}\"></script>
<script>
    \$('.adverts-item a').on('click', function(e){
        e.preventDefault();
        var ad_id = \$(this).data('advert-id');
        var path = \"{{ path('views_counter') }}\";

        \$.ajax({
            url: path,
            type: 'POST',
            data: {
                advert: ad_id
            },
            error: function() {
                console.log('An error has occurred');
            },
            dataType: 'json',
            success: function(data) {
                console.log(data);
            }
        });
    });
</script>
<script>
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
{% include 'flash.html.twig' %}
</body>
</html>
", "base.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/base.html.twig");
    }
}
