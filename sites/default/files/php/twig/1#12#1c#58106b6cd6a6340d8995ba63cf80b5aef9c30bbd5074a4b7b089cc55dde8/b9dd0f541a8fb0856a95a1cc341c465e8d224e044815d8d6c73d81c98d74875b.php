<?php

/* core/modules/system/templates/dropbutton-wrapper.html.twig */
class __TwigTemplate_121c58106b6cd6a6340d8995ba63cf80b5aef9c30bbd5074a4b7b089cc55dde8 extends Twig_Template
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
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 16
            echo "  ";
            ob_start();
            // line 17
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 19
            echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 29,  31 => 27,  73 => 46,  65 => 44,  62 => 43,  56 => 41,  43 => 37,  41 => 36,  33 => 33,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  42 => 30,  32 => 26,  27 => 24,  26 => 31,  54 => 40,  49 => 39,  45 => 31,  39 => 29,  36 => 28,  30 => 22,  28 => 19,  24 => 17,  21 => 16,  35 => 28,  29 => 25,  23 => 25,  19 => 15,);
    }
}
