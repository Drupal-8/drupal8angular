<?php

/* core/modules/file/templates/file-upload-help.html.twig */
class __TwigTemplate_c87f690932fecb2dbecb4164541bd159b9ebb97eef829e3a7d6cac6beb6f1e65 extends Twig_Template
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
        // line 14
        echo twig_render_var(twig_drupal_join_filter((isset($context["descriptions"]) ? $context["descriptions"] : null), "<br />"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/file/templates/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
