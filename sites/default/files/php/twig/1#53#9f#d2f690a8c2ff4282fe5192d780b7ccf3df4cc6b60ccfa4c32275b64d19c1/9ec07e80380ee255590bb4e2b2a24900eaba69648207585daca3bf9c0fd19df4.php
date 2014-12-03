<?php

/* core/modules/system/templates/textarea.html.twig */
class __TwigTemplate_539fd2f690a8c2ff4282fe5192d780b7ccf3df4cc6b60ccfa4c32275b64d19c1 extends Twig_Template
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
        $context["classes"] = array(0 => "form-textarea", 1 => (((isset($context["resizable"]) ? $context["resizable"] : null)) ? (("resize-" . (isset($context["resizable"]) ? $context["resizable"] : null))) : ("")), 2 => (((isset($context["required"]) ? $context["required"] : null)) ? ("required") : ("")));
        // line 25
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "addClass", array(0 => "form-textarea-wrapper"), "method"), "html", null, true);
        echo ">
  <textarea";
        // line 26
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 26,  54 => 34,  49 => 33,  45 => 31,  39 => 29,  36 => 28,  30 => 26,  28 => 25,  24 => 24,  21 => 25,  35 => 28,  29 => 25,  23 => 22,  19 => 19,);
    }
}
