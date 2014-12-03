<?php

/* core/modules/system/templates/radios.html.twig */
class __TwigTemplate_d5923fcff3a21352ad69b3e4a082006b9a15955466901c5b44c24902130efbb0 extends Twig_Template
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
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "form-radios"), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  42 => 30,  32 => 26,  27 => 24,  26 => 20,  54 => 34,  49 => 32,  45 => 31,  39 => 29,  36 => 28,  30 => 22,  28 => 21,  24 => 16,  21 => 22,  35 => 27,  29 => 25,  23 => 22,  19 => 15,);
    }
}
