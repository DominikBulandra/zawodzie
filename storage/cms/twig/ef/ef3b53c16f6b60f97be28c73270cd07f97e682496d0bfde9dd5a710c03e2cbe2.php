<?php

/* C:\xampp\htdocs\strona2/themes/responsiv-clean/partials/site/sidebar.htm */
class __TwigTemplate_d59d180a7f271a14b090c0a9f4984c72a04a773114f784961d990c77a751fbb4 extends Twig_Template
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
        echo "<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>
";
        // line 4
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 5
            echo "   <h5> <p>Witaj ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</p></h5>
     <li><a href=\"/strona2/create\">Nowa wiadomość</a></li>
     <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Wyloguj</a></li>
";
        } else {
            // line 9
            echo "    <p>Nikt nie jest zalogowany</p>
    <li><a href=\"/strona2/login\">Zaloguj</a></li>
";
        }
        // line 12
        echo "
<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h1 class=\"site-name\">
        <a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</a>
    </h1>
    <p class=\"site-motto\">
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_motto", array()), "html", null, true);
        echo "
    </p>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Ostatnie wiadomości</h2>
    
    <ul class=\"segment-list\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </ul>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Follow me</h2>
    <ul class=\"segment-list\">
        ";
        // line 35
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "twitter_url", array())) {
            // line 36
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "twitter_url", array()), "html", null, true);
            echo "\" target=\"_blank\">Twitter</a></li>
        ";
        }
        // line 38
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "facebook_url", array())) {
            // line 39
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "facebook_url", array()), "html", null, true);
            echo "\" target=\"_blank\">Facebook</a></li>
        ";
        }
        // line 41
        echo "        <li><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/rss");
        echo "\">RSS Feed</a></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  97 => 39,  94 => 38,  88 => 36,  86 => 35,  78 => 29,  67 => 27,  63 => 26,  52 => 18,  44 => 15,  39 => 12,  34 => 9,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>
{% if user %}
   <h5> <p>Witaj {{ user.name }}</p></h5>
     <li><a href=\"/strona2/create\">Nowa wiadomość</a></li>
     <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/good-bye'\">Wyloguj</a></li>
{% else %}
    <p>Nikt nie jest zalogowany</p>
    <li><a href=\"/strona2/login\">Zaloguj</a></li>
{% endif %}

<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h1 class=\"site-name\">
        <a href=\"{{ 'home'|page }}\">{{ this.theme.site_name }}</a>
    </h1>
    <p class=\"site-motto\">
        {{ this.theme.site_motto }}
    </p>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Ostatnie wiadomości</h2>
    
    <ul class=\"segment-list\">
        {% for post in blogPosts.posts %}
            <li><a href=\"{{ post.url }}\">{{ post.title }}</a></li>
        {% endfor %}
    </ul>
</div>

<div class=\"sidebar-segment\">
    <h2 class=\"segment-title\">Follow me</h2>
    <ul class=\"segment-list\">
        {% if this.theme.twitter_url %}
            <li><a href=\"{{ this.theme.twitter_url }}\" target=\"_blank\">Twitter</a></li>
        {% endif %}
        {% if this.theme.facebook_url %}
            <li><a href=\"{{ this.theme.facebook_url }}\" target=\"_blank\">Facebook</a></li>
        {% endif %}
        <li><a href=\"{{ 'blog/rss'|page }}\">RSS Feed</a></li>
    </ul>
</div>", "C:\\xampp\\htdocs\\strona2/themes/responsiv-clean/partials/site/sidebar.htm", "");
    }
}
