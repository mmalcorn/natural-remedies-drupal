<?php

/* field--text.html.twig */
class __TwigTemplate_bbbbc136ad0d4c0d0990c8f569dbb0c136eddb511c92469631a2326784016dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field.html.twig", "field--text.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "clearfix"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "field--text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 1,  48 => 20,  11 => 1,);
    }
}
/* {% extends "field.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a text field.*/
/*  **/
/*  * A 'clearfix' class is added, because 'text' fields have a 'format' property*/
/*  * that allows a Text Format to be associated with the entered text, which then*/
/*  * applies filtering on output. A common use case is to align images to the left*/
/*  * or right, and without this 'clearfix' class, such aligned images may be*/
/*  * rendered outside of the 'text' field formatter's boundaries, and hence*/
/*  * overlap with other fields. By setting the 'clearfix' class on all 'text'*/
/*  * fields, we prevent that.*/
/*  **/
/*  * @see https://www.drupal.org/node/2358529*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% set attributes = attributes.addClass('clearfix') %}*/
/* */
