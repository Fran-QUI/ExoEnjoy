<?php

/* ExoEnjoyArticleBundle:Articles:index.html.twig */
class __TwigTemplate_6f9abe7fa1eb22ffb0114a1abb435845863fc61b0b127ca3843d9874ef8a9c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97235f825363d44d3a0f0b44fea2c9ff34211f04eb7bc835f2397b26e391f5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97235f825363d44d3a0f0b44fea2c9ff34211f04eb7bc835f2397b26e391f5eb->enter($__internal_97235f825363d44d3a0f0b44fea2c9ff34211f04eb7bc835f2397b26e391f5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExoEnjoyArticleBundle:Articles:index.html.twig"));

        $__internal_681c0370891e527b3058b21e6973d0355617e2dec15d2fb2b978e79350e8981d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681c0370891e527b3058b21e6973d0355617e2dec15d2fb2b978e79350e8981d->enter($__internal_681c0370891e527b3058b21e6973d0355617e2dec15d2fb2b978e79350e8981d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExoEnjoyArticleBundle:Articles:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>

        <title>Bienvenue sur l'exercice de EnjoyYourBusiness</title>

    </head>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <body>

        <h1>Index des articles</h1>

        <ul>
            ";
        // line 25
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listArticles"] ?? $this->getContext($context, "listArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "                ";
            // line 28
            echo "                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exo_enjoy_article_articlepage", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a> (";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "creationDate", array()), "d/m/Y"), "html", null, true);
            echo ") </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </ul>

    </body>

</html>";
        
        $__internal_97235f825363d44d3a0f0b44fea2c9ff34211f04eb7bc835f2397b26e391f5eb->leave($__internal_97235f825363d44d3a0f0b44fea2c9ff34211f04eb7bc835f2397b26e391f5eb_prof);

        
        $__internal_681c0370891e527b3058b21e6973d0355617e2dec15d2fb2b978e79350e8981d->leave($__internal_681c0370891e527b3058b21e6973d0355617e2dec15d2fb2b978e79350e8981d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c409258ccb7a50e6415878f5b91a9090494e792c319681e9e4b165efdf9483c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c409258ccb7a50e6415878f5b91a9090494e792c319681e9e4b165efdf9483c->enter($__internal_4c409258ccb7a50e6415878f5b91a9090494e792c319681e9e4b165efdf9483c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_64bdc037d0e22db1a48a687d01d77a4e4ca0b540505b589273802716f209bf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bdc037d0e22db1a48a687d01d77a4e4ca0b540505b589273802716f209bf70->enter($__internal_64bdc037d0e22db1a48a687d01d77a4e4ca0b540505b589273802716f209bf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/exoenjoyarticle/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 16
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    ";
        
        $__internal_64bdc037d0e22db1a48a687d01d77a4e4ca0b540505b589273802716f209bf70->leave($__internal_64bdc037d0e22db1a48a687d01d77a4e4ca0b540505b589273802716f209bf70_prof);

        
        $__internal_4c409258ccb7a50e6415878f5b91a9090494e792c319681e9e4b165efdf9483c->leave($__internal_4c409258ccb7a50e6415878f5b91a9090494e792c319681e9e4b165efdf9483c_prof);

    }

    public function getTemplateName()
    {
        return "ExoEnjoyArticleBundle:Articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 16,  93 => 13,  91 => 12,  82 => 11,  68 => 30,  55 => 28,  53 => 26,  48 => 25,  40 => 18,  38 => 11,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

    <head>

        <title>Bienvenue sur l'exercice de EnjoyYourBusiness</title>

    </head>

    {% block stylesheets %}
        {# My personal stylsheet #}
        <link href=\"{{ asset('/bundles/exoenjoyarticle/style.css') }}\" rel=\"stylesheet\" />
        {# A google font : Indie Flower
        for css code : font-family: 'Indie Flower', cursive; #}
        <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    {% endblock %}

    <body>

        <h1>Index des articles</h1>

        <ul>
            {#Browse the listArticles array generated with the controller...#}
            {% for article in listArticles %}
                {# ...and show each article title and date
                and generate link to article view#}
                <li><a href=\"{{ path('exo_enjoy_article_articlepage', {'id': article.id}) }}\">{{ article.title }}</a> ({{ article.creationDate|date('d/m/Y') }}) </li>
            {% endfor %}
        </ul>

    </body>

</html>", "ExoEnjoyArticleBundle:Articles:index.html.twig", "/home/franqui/Developper/Recrutement/exoEnjoy/ExoEnjoy/ExoSymfony/src/ExoEnjoy/ArticleBundle/Resources/views/Articles/index.html.twig");
    }
}
