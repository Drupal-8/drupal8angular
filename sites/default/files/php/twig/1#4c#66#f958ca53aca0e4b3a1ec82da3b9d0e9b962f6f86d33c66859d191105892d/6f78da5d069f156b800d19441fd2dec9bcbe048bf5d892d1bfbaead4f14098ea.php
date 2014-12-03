<?php

/* core/modules/user/templates/user.html.twig */
class __TwigTemplate_4c66f958ca53aca0e4b3a1ec82da3b9d0e9b962f6f86d33c66859d191105892d extends Twig_Template
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
        // line 26
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true);
        echo ">
  ";
        // line 27
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 28
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 30
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/user/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 28,  24 => 27,  105 => 109,  102 => 108,  96 => 105,  93 => 104,  91 => 103,  85 => 100,  81 => 99,  77 => 97,  71 => 94,  68 => 93,  66 => 92,  62 => 91,  58 => 90,  55 => 89,  53 => 88,  47 => 86,  39 => 83,  34 => 82,  32 => 81,  28 => 80,  29 => 30,  21 => 77,  33 => 24,  27 => 22,  23 => 21,  19 => 26,);
    }
}
