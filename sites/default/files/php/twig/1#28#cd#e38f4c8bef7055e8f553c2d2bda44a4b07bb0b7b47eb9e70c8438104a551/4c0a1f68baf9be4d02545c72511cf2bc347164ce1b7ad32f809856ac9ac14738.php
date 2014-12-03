<?php

/* core/modules/comment/templates/field--comment.html.twig */
class __TwigTemplate_28cde38f4c8bef7055e8f553c2d2bda44a4b07bb0b7b47eb9e70c8438104a551 extends Twig_Template
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
        // line 25
        echo "<section";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 26
        if (((isset($context["comments"]) ? $context["comments"] : null) && (!(isset($context["label_hidden"]) ? $context["label_hidden"] : null)))) {
            // line 27
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
            echo "
    <h2";
            // line 28
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
    ";
            // line 29
            echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
            echo "
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        echo twig_drupal_escape_filter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true);
        echo "

  ";
        // line 34
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 35
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_render_var(t("Add new comment"));
            echo "</h2>
    ";
            // line 36
            echo twig_drupal_escape_filter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true);
            echo "
  ";
        }
        // line 38
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "core/modules/comment/templates/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 38,  59 => 36,  52 => 35,  50 => 34,  45 => 32,  42 => 31,  37 => 29,  31 => 28,  54 => 41,  43 => 39,  26 => 27,  24 => 26,  105 => 109,  102 => 108,  96 => 105,  93 => 104,  91 => 103,  85 => 100,  81 => 99,  77 => 97,  71 => 94,  68 => 93,  66 => 92,  62 => 91,  58 => 90,  55 => 89,  53 => 88,  47 => 86,  39 => 38,  34 => 37,  32 => 81,  28 => 80,  29 => 30,  21 => 77,  33 => 24,  27 => 22,  23 => 21,  19 => 25,);
    }
}
