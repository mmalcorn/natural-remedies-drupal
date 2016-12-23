<?php

/* themes/mbase/templates/misc/feed-icon.html.twig */
class __TwigTemplate_c049bd9fe30527a3a4fccb081bcbc2795ee5115564cbee11aabe03bc8f15e477 extends Twig_Template
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
        $tags = array("if" => 17);
        $filters = array("without" => 16);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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

        // line 16
        echo "<a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "href"), "html", null, true));
        echo ">
  ";
        // line 17
        if ((isset($context["icon"]) ? $context["icon"] : null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "
  ";
        } else {
            // line 20
            echo "    <span class=\"label label-warning\"><i class=\"fa fa-rss\"></i> RSS Feed</span>
  ";
        }
        // line 22
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  58 => 20,  52 => 18,  50 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a feed icon.*/
/*  **/
/*  * Available variables:*/
/*  * - url: An internal system path or a fully qualified external URL of the feed.*/
/*  * - icon: The rendered HTML (<img> tag) for the feed icon image.*/
/*  * - attributes: Remaining HTML attributes for the feed link.*/
/*  *   - title: A descriptive title of the feed link.*/
/*  *   - class: HTML classes to be applied to the feed link.*/
/*  **/
/*  * @see template_preprocess_feed_icon()*/
/*  *//* */
/* #}*/
/* <a href="{{ url }}"{{ attributes.addClass('feed-icon')|without('href') }}>*/
/*   {% if icon %}*/
/*     {{ icon }}*/
/*   {% else %}*/
/*     <span class="label label-warning"><i class="fa fa-rss"></i> RSS Feed</span>*/
/*   {% endif %}*/
/* </a>*/
/* */
