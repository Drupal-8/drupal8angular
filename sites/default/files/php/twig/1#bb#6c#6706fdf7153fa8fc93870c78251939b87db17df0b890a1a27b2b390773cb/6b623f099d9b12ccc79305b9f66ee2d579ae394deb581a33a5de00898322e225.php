<?php

/* core/modules/system/templates/menu-local-tasks.html.twig */
class __TwigTemplate_bb6c6706fdf7153fa8fc93870c78251939b87db17df0b890a1a27b2b390773cb extends Twig_Template
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
        // line 18
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 20
            echo twig_drupal_escape_filter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
";
        }
        // line 22
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 24
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 24,  64 => 38,  59 => 36,  52 => 35,  50 => 34,  45 => 32,  42 => 31,  37 => 29,  31 => 22,  54 => 41,  43 => 39,  26 => 20,  24 => 26,  105 => 109,  102 => 108,  96 => 105,  93 => 104,  91 => 103,  85 => 100,  81 => 99,  77 => 97,  71 => 94,  68 => 93,  66 => 92,  62 => 91,  58 => 90,  55 => 89,  53 => 88,  47 => 86,  39 => 38,  34 => 37,  32 => 81,  28 => 80,  29 => 30,  21 => 19,  33 => 23,  27 => 22,  23 => 21,  19 => 18,);
    }
}
