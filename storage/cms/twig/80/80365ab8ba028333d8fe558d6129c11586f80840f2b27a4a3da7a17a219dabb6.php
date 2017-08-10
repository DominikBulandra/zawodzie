<?php

/* C:\xampp\htdocs\strona2/themes/responsiv-clean/partials/blog/post.htm */
class __TwigTemplate_9c64ffb0ee31adf6da91974b7fed15a51a64548cee3096c343dc750c69519e94 extends Twig_Template
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
        // line 1
        $context["image"] = $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "first", array());
        // line 2
        echo "
<article>

    ";
        // line 5
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 6
            echo "        <div class=\"post-image\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "\" /></a>
        </div>
    ";
        } else {
            // line 10
            echo "        <header class=\"post-title\">
            <h1><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "</a></h1>
        </header>
    ";
        }
        // line 14
        echo "
    <div class=\"post-content\">
        ";
        // line 16
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "summary", array());
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "PostAuth", array()), "name", array()), "html", null, true);
        echo " 
    </div>

    <footer>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
        ";
        // line 22
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in
            <span class=\"category\">
                <i class=\"icon icon-folder-open\"></i>
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 27
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </span>
        ";
        }
        // line 30
        echo "    </footer>
</article>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/partials/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  116 => 28,  102 => 27,  93 => 26,  76 => 25,  69 => 22,  65 => 20,  56 => 16,  52 => 14,  44 => 11,  41 => 10,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set image = post.featured_images.first %}

<article>

    {% if image %}
        <div class=\"post-image\">
            <a href=\"{{ post.url }}\"><img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" /></a>
        </div>
    {% else %}
        <header class=\"post-title\">
            <h1><a href=\"{{ post.url }}\">{{ post.title }}</a></h1>
        </header>
    {% endif %}

    <div class=\"post-content\">
        {{ post.summary|raw }} {{ post.PostAuth.name }} 
    </div>

    <footer>
        <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
        {# <span class=\"author\"><i class=\"icon icon-user\"></i> {{ post.author.full_name }}</span> #}
        {% if post.categories.count %} in
            <span class=\"category\">
                <i class=\"icon icon-folder-open\"></i>
                {% for category in post.categories %}
                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                {% endfor %}
            </span>
        {% endif %}
    </footer>
</article>", "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/partials/blog/post.htm", "");
    }
}
