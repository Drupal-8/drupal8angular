<?php

/* core/modules/system/templates/datetime-wrapper.html.twig */
class __TwigTemplate_0adff646425e10a44da3dffa384d9007c5a3ce717102b317089a51b62034d93c extends Twig_Template
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
        // line 19
        $context["title_classes"] = array(0 => "label", 1 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "  <h4";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 27
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
        // line 28
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 29
            echo "  <div class=\"description\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 29,  31 => 27,  73 => 46,  65 => 44,  62 => 43,  56 => 41,  43 => 37,  41 => 36,  33 => 33,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  42 => 30,  32 => 26,  27 => 24,  26 => 31,  54 => 40,  49 => 39,  45 => 31,  39 => 29,  36 => 28,  30 => 22,  28 => 32,  24 => 16,  21 => 24,  35 => 28,  29 => 25,  23 => 25,  19 => 19,);
    }
}
