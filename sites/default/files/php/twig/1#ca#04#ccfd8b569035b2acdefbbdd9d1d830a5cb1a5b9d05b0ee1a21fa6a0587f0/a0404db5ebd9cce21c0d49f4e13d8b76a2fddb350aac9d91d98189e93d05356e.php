<?php

/* core/modules/system/templates/datetime-form.html.twig */
class __TwigTemplate_ca04ccfd8b569035b2acdefbbdd9d1d830a5cb1a5b9d05b0ee1a21fa6a0587f0 extends Twig_Template
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
        // line 15
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "container-inline"), "method"), "html", null, true);
        echo ">
  ";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/datetime-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 46,  65 => 44,  62 => 43,  56 => 41,  43 => 37,  41 => 36,  33 => 33,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  42 => 30,  32 => 26,  27 => 24,  26 => 31,  54 => 40,  49 => 39,  45 => 31,  39 => 29,  36 => 28,  30 => 22,  28 => 32,  24 => 16,  21 => 22,  35 => 27,  29 => 25,  23 => 22,  19 => 15,);
    }
}
