<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/assignment/templates/node/node--card-component--teaser.html.twig */
class __TwigTemplate_4b49146cf2fec6c25339b213901f866fb1b0ea0406dc2e2a77f7dbefe5bf9153 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "
";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("assignment/card-component"), "html", null, true);
        echo "
<article";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 73, $this->source), "html", null, true);
        echo ">
<div class='card-content'>
";
        // line 75
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_featured_conferences", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75)) {
            // line 76
            echo "   <span class='featured-wrapper'>
      <img src='/themes/myproject/images/triangle.svg' alt='tag-icon' class='featured-wrapper--triangle-img'/>
      <img src='/themes/myproject/images/star.svg' alt='calendar-icon' class='featured-wrapper--star-img'/>
   </span>
";
        }
        // line 81
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_card_image", [], "any", false, false, true, 81), "value", [], "any", false, false, true, 81)) {
            // line 82
            echo "  <div class='card-content__image'>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_image", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "</div>
";
        } else {
            // line 84
            echo "   <img src='/themes/myproject/images/tags.svg' alt='tag-icon'/>
   <span>Default Fallback Image</span>
";
        }
        // line 87
        echo "  <div class='card-content__body'>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "</div>
  <div class='card-content__leadership'>
     <span class='card-content__leadership--icon'>
       <img src='/themes/myproject/images/tags.svg' alt='tag-icon'/>
     </span>
     <span class='card-content__leadership--text'>";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_card_management", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "</span>
  </div>
  <div class='card-content__calendar'>
    <span class='card-content__calendar--icon'>
      <img src='/themes/myproject/images/calender-icon.svg' alt='calendar-icon'/>
    </span>
    <span class='card-content__calendar--date-field'>";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_date", [], "any", false, false, true, 98), "value", [], "any", false, false, true, 98), 98, $this->source), "d M Y"), "html", null, true);
        echo "</span>
  </div>
  <div class='card-content__location'>
    <span class='card-content__location--icon'>
      <img src='/themes/myproject/images/location-icon.svg' alt='location-icon'/>
    </span>
    <span class='card-content__location--text'>Park Plaza Hotel,Bangalore,India</span>
  </div>
<hr />
  <div class='card-bottom'>
    <span class='card-bottom__favourite-icon'>
     <a href='#'><img src='/themes/myproject/images/favourite.svg' alt='favourite-icon'/></a>
    </span>
    <span class='card-bottom__download-icon'>
      <a href='#'><img src='/themes/myproject/images/download.svg' alt='download-icon' /></a>
    </span>
    <span class='card-bottom__share-icon'>
      <a href='#'><img src='/themes/myproject/images/share.svg' alt='share-icon' /></a>
    </span>
    <span class='card-bottom__link'>
      <a href='#'>View More</a>
    </span>
  </div>
</div>

</article>


";
    }

    public function getTemplateName()
    {
        return "themes/custom/assignment/templates/node/node--card-component--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 98,  82 => 92,  73 => 87,  68 => 84,  62 => 82,  60 => 81,  53 => 76,  51 => 75,  46 => 73,  42 => 72,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('assignment/card-component')}}
<article{{ attributes }}>
<div class='card-content'>
{% if node.field_featured_conferences.value %}
   <span class='featured-wrapper'>
      <img src='/themes/myproject/images/triangle.svg' alt='tag-icon' class='featured-wrapper--triangle-img'/>
      <img src='/themes/myproject/images/star.svg' alt='calendar-icon' class='featured-wrapper--star-img'/>
   </span>
{% endif %}
{% if node.field_card_image.value %}
  <div class='card-content__image'>{{ content.field_card_image }}</div>
{% else %}
   <img src='/themes/myproject/images/tags.svg' alt='tag-icon'/>
   <span>Default Fallback Image</span>
{% endif %}
  <div class='card-content__body'>{{ content.body }}</div>
  <div class='card-content__leadership'>
     <span class='card-content__leadership--icon'>
       <img src='/themes/myproject/images/tags.svg' alt='tag-icon'/>
     </span>
     <span class='card-content__leadership--text'>{{ content.field_card_management}}</span>
  </div>
  <div class='card-content__calendar'>
    <span class='card-content__calendar--icon'>
      <img src='/themes/myproject/images/calender-icon.svg' alt='calendar-icon'/>
    </span>
    <span class='card-content__calendar--date-field'>{{ content.field_date.value|date(\"d M Y\") }}</span>
  </div>
  <div class='card-content__location'>
    <span class='card-content__location--icon'>
      <img src='/themes/myproject/images/location-icon.svg' alt='location-icon'/>
    </span>
    <span class='card-content__location--text'>Park Plaza Hotel,Bangalore,India</span>
  </div>
<hr />
  <div class='card-bottom'>
    <span class='card-bottom__favourite-icon'>
     <a href='#'><img src='/themes/myproject/images/favourite.svg' alt='favourite-icon'/></a>
    </span>
    <span class='card-bottom__download-icon'>
      <a href='#'><img src='/themes/myproject/images/download.svg' alt='download-icon' /></a>
    </span>
    <span class='card-bottom__share-icon'>
      <a href='#'><img src='/themes/myproject/images/share.svg' alt='share-icon' /></a>
    </span>
    <span class='card-bottom__link'>
      <a href='#'>View More</a>
    </span>
  </div>
</div>

</article>


", "themes/custom/assignment/templates/node/node--card-component--teaser.html.twig", "/var/www/html/web/themes/custom/assignment/templates/node/node--card-component--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 75);
        static $filters = array("escape" => 72, "date" => 98);
        static $functions = array("attach_library" => 72);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
