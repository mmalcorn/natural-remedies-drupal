<?php

/* themes/mbase/templates/content/node.html.twig */
class __TwigTemplate_4c478a9f560d30122e64d42757fe4c1de534b1a8769834d8aa1716d4fb313ae9 extends Twig_Template
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
        $tags = array("set" => 69, "if" => 85);
        $filters = array("clean_class" => 74, "without" => 92);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'without'),
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

        // line 69
        $context["classes"] = array(0 => "node", 1 => "clearfix", 2 => "panel", 3 => "panel-default", 4 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 5 => (($this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 6 => (($this->getAttribute(        // line 76
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 7 => (( !$this->getAttribute(        // line 77
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 8 => ((        // line 78
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 81
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

  <div class = \"panel-body\">
    ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 85
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 86
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
    <a href=\"";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
    </h2>
    ";
        }
        // line 90
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
    <div";
        // line 91
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "links", "comment", "comment_forum"), "html", null, true));
        echo "
    </div>
  </div>

  ";
        // line 96
        if (((isset($context["display_submitted"]) ? $context["display_submitted"] : null) || $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()))) {
            // line 97
            echo "  <footer class=\"node__meta panel-footer\">
    <div class=\"submitted row\">

    <div";
            // line 100
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["author_attributes"]) ? $context["author_attributes"] : null), "addClass", array(0 => "node__submitted col-xs-12 col-sm-9 col-md-10"), "method"), "html", null, true));
            echo ">
      <div class = \"clearfix\">
        Submitted by <strong>";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_name"]) ? $context["author_name"] : null), "html", null, true));
            echo "</strong> on <strong>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true));
            echo "</strong>
      </div>
      ";
            // line 104
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
                // line 105
                echo "        <div class = \"clearfix margin-sm-top\">
          ";
                // line 106
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
                echo "
        </div>  
      ";
            }
            // line 109
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo " 
    </div>
    
    ";
            // line 112
            if ((isset($context["author_picture"]) ? $context["author_picture"] : null)) {
                // line 113
                echo "      <div class = \"col-xs-12 col-sm-3 col-md-2 text-right meta-data-user-picture\">
        ";
                // line 114
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 117
            echo "    </div>
    

    
  </footer>
  ";
        }
        // line 123
        echo "
</article>
";
        // line 125
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array())) {
            // line 126
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
            echo "
";
        }
        // line 128
        echo "
";
        // line 129
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment_forum", array())) {
            // line 130
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment_forum", array()), "html", null, true));
            echo "
";
        }
        // line 131
        echo " ";
    }

    public function getTemplateName()
    {
        return "themes/mbase/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 131,  165 => 130,  163 => 129,  160 => 128,  154 => 126,  152 => 125,  148 => 123,  140 => 117,  134 => 114,  131 => 113,  129 => 112,  122 => 109,  116 => 106,  113 => 105,  111 => 104,  104 => 102,  99 => 100,  94 => 97,  92 => 96,  85 => 92,  81 => 91,  76 => 90,  68 => 87,  63 => 86,  61 => 85,  57 => 84,  50 => 81,  48 => 78,  47 => 77,  46 => 76,  45 => 75,  44 => 74,  43 => 69,);
    }
}
/* {#*/
/* /***/
/* * @file*/
/* * Theme override to display a node.*/
/* **/
/* * Available variables:*/
/* * - node: Full node entity.*/
/* *   - id: The node ID.*/
/* *   - bundle: The type of the node, for example, "page" or "article".*/
/* *   - authorid: The user ID of the node author.*/
/* *   - createdtime: Time the node was published formatted in Unix timestamp.*/
/* *   - changedtime: Time the node was changed formatted in Unix timestamp.*/
/* * - label: The title of the node.*/
/* * - content: All node items. Use {{ content }} to print them all,*/
/* *   or print a subset such as {{ content.field_example }}. Use*/
/* *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/* *   of a given child element.*/
/* * - author_picture: The node author user entity, rendered using the "compact"*/
/* *   view mode.*/
/* * - metadata: Metadata for this node.*/
/* * - date: Themed creation date field.*/
/* * - author_name: Themed author name field.*/
/* * - url: Direct URL of the current node.*/
/* * - display_submitted: Whether submission information should be displayed.*/
/* * - attributes: HTML attributes for the containing element.*/
/* *   The attributes.class element may contain one or more of the following*/
/* *   classes:*/
/* *   - node: The current template type (also known as a "theming hook").*/
/* *   - node--type-[type]: The current node type. For example, if the node is an*/
/* *     "Article" it would result in "node--type-article". Note that the machine*/
/* *     name will often be in a short form of the human readable label.*/
/* *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/* *     teaser would result in: "node--view-mode-teaser", and*/
/* *     full: "node--view-mode-full".*/
/* *   The following are controlled through the node publishing options.*/
/* *   - node--promoted: Appears on nodes promoted to the front page.*/
/* *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/* *     teaser listings.*/
/* *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/* *     admins.*/
/* * - title_attributes: Same as attributes, except applied to the main title*/
/* *   tag that appears in the template.*/
/* * - content_attributes: Same as attributes, except applied to the main*/
/* *   content tag that appears in the template.*/
/* * - author_attributes: Same as attributes, except applied to the author of*/
/* *   the node tag that appears in the template.*/
/* * - title_prefix: Additional output populated by modules, intended to be*/
/* *   displayed in front of the main title tag that appears in the template.*/
/* * - title_suffix: Additional output populated by modules, intended to be*/
/* *   displayed after the main title tag that appears in the template.*/
/* * - view_mode: View mode; for example, "teaser" or "full".*/
/* * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/* * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/* * - readmore: Flag for more state. Will be true if the teaser content of the*/
/* *   node cannot hold the main body content.*/
/* * - logged_in: Flag for authenticated user status. Will be true when the*/
/* *   current user is a logged-in member.*/
/* * - is_admin: Flag for admin user status. Will be true when the current user*/
/* *   is an administrator.*/
/* **/
/* * @see template_preprocess_node()*/
/* **/
/* * @todo Remove the id attribute (or make it a class), because if that gets*/
/* *   rendered twice on a page this is invalid CSS for example: two lists*/
/* *   in different view modes.*/
/* *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'node',*/
/*     'clearfix',*/
/*     'panel',*/
/*     'panel-default',*/
/*     'node--type-' ~ node.bundle|clean_class,*/
/*     node.isPromoted() ? 'node--promoted',*/
/*     node.isSticky() ? 'node--sticky',*/
/*     not node.isPublished() ? 'node--unpublished',*/
/*     view_mode ? 'node--view-mode-' ~ view_mode|clean_class,*/
/*   ]*/
/* %}*/
/* <article{{ attributes.addClass(classes) }}>*/
/* */
/*   <div class = "panel-body">*/
/*     {{ title_prefix }}*/
/*     {% if not page %}*/
/*     <h2{{ title_attributes }}>*/
/*     <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*     </h2>*/
/*     {% endif %}*/
/*     {{ title_suffix }}*/
/*     <div{{ content_attributes.addClass('node__content') }}>*/
/*       {{ content|without('links','comment', 'comment_forum') }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if display_submitted or content.links %}*/
/*   <footer class="node__meta panel-footer">*/
/*     <div class="submitted row">*/
/* */
/*     <div{{ author_attributes.addClass('node__submitted col-xs-12 col-sm-9 col-md-10') }}>*/
/*       <div class = "clearfix">*/
/*         Submitted by <strong>{{ author_name }}</strong> on <strong>{{ date }}</strong>*/
/*       </div>*/
/*       {% if content.links %}*/
/*         <div class = "clearfix margin-sm-top">*/
/*           {{ content.links }}*/
/*         </div>  */
/*       {% endif %}*/
/*       {{ metadata }} */
/*     </div>*/
/*     */
/*     {% if author_picture %}*/
/*       <div class = "col-xs-12 col-sm-3 col-md-2 text-right meta-data-user-picture">*/
/*         {{ author_picture }}*/
/*       </div>*/
/*     {% endif %}*/
/*     </div>*/
/*     */
/* */
/*     */
/*   </footer>*/
/*   {% endif %}*/
/* */
/* </article>*/
/* {% if content.comment %}*/
/*   {{ content.comment }}*/
/* {% endif %}*/
/* */
/* {% if content.comment_forum %}*/
/*   {{ content.comment_forum }}*/
/* {% endif %} */
