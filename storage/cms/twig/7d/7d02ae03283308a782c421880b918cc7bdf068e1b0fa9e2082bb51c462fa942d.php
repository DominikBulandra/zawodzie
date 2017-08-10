<?php

/* C:\xampp\htdocs\strona2/themes/responsiv-clean/pages/blog/post.htm */
class __TwigTemplate_77faca140694ab79808d80d01a3194e2b577a1253b4efb4b3d6aa4100e8e70b0 extends Twig_Template
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
        $context["nextPost"] = $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "nextPost", array());
        // line 3
        $context["lastPost"] = $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "previousPost", array());
        // line 4
        $context["author"] = $this->getAttribute((isset($context["blogPost"]) ? $context["blogPost"] : null), "PostAuth", array());
        // line 5
        echo "<div class=\"post-single\">
    <article>
        ";
        // line 7
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 8
            echo "            <div class=\"post-image\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "path", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "\" />
            </div>
        ";
        }
        // line 12
        echo "        <header class=\"post-title\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>
        </header>

        <div class=\"post-content\">
            ";
        // line 17
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
            ";
        // line 22
        if ($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "count", array())) {
            // line 23
            echo "            <span class=\"author\"><i class=\"icon icon-user\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "full_name", array()), "html", null, true);
            echo "</span>
            ";
        }
        // line 25
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    ";
            // line 28
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
                // line 29
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 30
                echo "                    ";
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
            // line 31
            echo "                </span>
            ";
        }
        // line 33
        echo "        </footer>
    </article>
    <nav class=\"post-links\">
        ";
        // line 36
        if ((isset($context["lastPost"]) ? $context["lastPost"] : null)) {
            // line 37
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lastPost"]) ? $context["lastPost"] : null), "url", array()), "html", null, true);
            echo "\" class=\"link-previous\">
                <p>Previous</p>
                <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lastPost"]) ? $context["lastPost"] : null), "title", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 42
        echo "        ";
        if ((isset($context["nextPost"]) ? $context["nextPost"] : null)) {
            // line 43
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextPost"]) ? $context["nextPost"] : null), "url", array()), "html", null, true);
            echo "\" class=\"link-next\">
                <p>Next</p>
                <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextPost"]) ? $context["nextPost"] : null), "title", array()), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 48
        echo "    </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  153 => 45,  147 => 43,  144 => 42,  138 => 39,  132 => 37,  130 => 36,  125 => 33,  121 => 31,  107 => 30,  98 => 29,  81 => 28,  74 => 25,  67 => 23,  65 => 22,  61 => 21,  54 => 17,  47 => 13,  44 => 12,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set nextPost = blogPost.nextPost %}
{% set lastPost = blogPost.previousPost %}
{% set author = blogPost.PostAuth %}
<div class=\"post-single\">
    <article>
        {% if image %}
            <div class=\"post-image\">
                <img src=\"{{ image.path }}\" alt=\"{{ post.title }}\" />
            </div>
        {% endif %}
        <header class=\"post-title\">
            <h1>{{ post.title }}</h1>
        </header>

        <div class=\"post-content\">
            {{ post.content_html|raw }}
        </div>

        <footer>
            <span class=\"published\"><i class=\"icon icon-calendar\"></i> {{ post.published_at|date('M d, Y') }}</span>
            {% if author.count %}
            <span class=\"author\"><i class=\"icon icon-user\"></i> {{ author.name }}{{ post.author.full_name }}</span>
            {% endif %}
            {% if post.categories.count %} in
                <span class=\"category\">
                    <i class=\"icon icon-folder-open\"></i>
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                </span>
            {% endif %}
        </footer>
    </article>
    <nav class=\"post-links\">
        {% if lastPost %}
            <a href=\"{{ lastPost.url }}\" class=\"link-previous\">
                <p>Previous</p>
                <span>{{ lastPost.title }}</span>
            </a>
        {% endif %}
        {% if nextPost %}
            <a href=\"{{ nextPost.url }}\" class=\"link-next\">
                <p>Next</p>
                <span>{{ nextPost.title }}</span>
            </a>
        {% endif %}
    </nav>
</div>", "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/pages/blog/post.htm", "");
    }
}
