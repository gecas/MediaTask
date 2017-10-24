<?php

/* flash.html.twig */
class __TwigTemplate_2c850d2d0a7f542e26a3c1ac724ca2d90c1129b9575224ec318c4d40fc624276 extends Twig_Template
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
        $__internal_1d2f97bbd75bee6ad290fa3ca65d37724529324b7e7a66fd3342f551771113e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2f97bbd75bee6ad290fa3ca65d37724529324b7e7a66fd3342f551771113e7->enter($__internal_1d2f97bbd75bee6ad290fa3ca65d37724529324b7e7a66fd3342f551771113e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash.html.twig"));

        $__internal_de58a165f95ad6dc64d94e81f284cc02ff63b8054f2776d6cd83f9c7c436fa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de58a165f95ad6dc64d94e81f284cc02ff63b8054f2776d6cd83f9c7c436fa64->enter($__internal_de58a165f95ad6dc64d94e81f284cc02ff63b8054f2776d6cd83f9c7c436fa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "flash.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "has", array(0 => "flash_message"), "method")) {
            // line 2
            echo "
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "flash_message"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "    <script>

        swal({
            title: \"";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "title", array()), "html", null, true);
                echo "\",
            text: \"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "message", array()), "html", null, true);
                echo "\",
            type: \"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["message"], "level", array()), "html", null, true);
                echo "\",
            //timer: 2000,
            showConfirmButton: true
        }).catch(swal.noop);

    </script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
";
        }
        // line 18
        echo "
";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->getSourceContext()); })()), "session", array()), "has", array(0 => "flash_message_overlay"), "method")) {
            // line 20
            echo "
<script>

    swal({
        title: \"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "flash_message_overlay.title"), "method"), "html", null, true);
            echo "\",
        text: \"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 25, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "flash_message_overlay.message"), "method"), "html", null, true);
            echo "\",
        type: \"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "flash_message_overlay.level"), "method"), "html", null, true);
            echo "\",
        confirmButtonText:'Okay'
    });

</script>
";
        }
        // line 32
        echo "
";
        // line 33
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 33, $this->getSourceContext()); })()), "session", array()), "has", array(0 => "flash_message_aside"), "method")) {
            // line 34
            echo "
<script>
    flashMessage(\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "flash_message_aside.message"), "method"), "html", null, true);
            echo "\");
</script>

";
        }
        // line 40
        echo "

";
        
        $__internal_1d2f97bbd75bee6ad290fa3ca65d37724529324b7e7a66fd3342f551771113e7->leave($__internal_1d2f97bbd75bee6ad290fa3ca65d37724529324b7e7a66fd3342f551771113e7_prof);

        
        $__internal_de58a165f95ad6dc64d94e81f284cc02ff63b8054f2776d6cd83f9c7c436fa64->leave($__internal_de58a165f95ad6dc64d94e81f284cc02ff63b8054f2776d6cd83f9c7c436fa64_prof);

    }

    public function getTemplateName()
    {
        return "flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 36,  97 => 34,  95 => 33,  92 => 32,  83 => 26,  79 => 25,  75 => 24,  69 => 20,  67 => 19,  64 => 18,  60 => 16,  47 => 9,  43 => 8,  39 => 7,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if  app.session.flashbag.has('flash_message')  %}

    {% for message in app.session.flashbag.get('flash_message') %}
    <script>

        swal({
            title: \"{{ message.title }}\",
            text: \"{{ message.message }}\",
            type: \"{{ message.level }}\",
            //timer: 2000,
            showConfirmButton: true
        }).catch(swal.noop);

    </script>
    {% endfor %}

{% endif %}

{% if  app.session.has('flash_message_overlay')  %}

<script>

    swal({
        title: \"{{ app.session.get('flash_message_overlay.title') }}\",
        text: \"{{ app.session.get('flash_message_overlay.message') }}\",
        type: \"{{ app.session.get('flash_message_overlay.level') }}\",
        confirmButtonText:'Okay'
    });

</script>
{% endif %}

{% if  app.session.has('flash_message_aside')  %}

<script>
    flashMessage(\"{{ app.session.get('flash_message_aside.message') }}\");
</script>

{% endif %}


", "flash.html.twig", "/home/vagrant/Code/mediapark/app/Resources/views/flash.html.twig");
    }
}
