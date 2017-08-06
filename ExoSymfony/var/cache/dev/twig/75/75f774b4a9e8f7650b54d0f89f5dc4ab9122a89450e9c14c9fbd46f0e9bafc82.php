<?php

/* ExoEnjoyArticleBundle:Articles:view.html.twig */
class __TwigTemplate_e8cd453f6db0d52f368dbfc06b3b5c4741cede37ecad3fa23341d24655f84bae extends Twig_Template
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
        $__internal_5f00a5a08b8ad88ce7271675a8a07703d43003b0cfa7059f5249dde858d9a669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f00a5a08b8ad88ce7271675a8a07703d43003b0cfa7059f5249dde858d9a669->enter($__internal_5f00a5a08b8ad88ce7271675a8a07703d43003b0cfa7059f5249dde858d9a669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExoEnjoyArticleBundle:Articles:view.html.twig"));

        $__internal_0b6c60c8c88027a3b95d1a4e842a7bab53e678fc48b9ed81d9e8d9e0610e2668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6c60c8c88027a3b95d1a4e842a7bab53e678fc48b9ed81d9e8d9e0610e2668->enter($__internal_0b6c60c8c88027a3b95d1a4e842a7bab53e678fc48b9ed81d9e8d9e0610e2668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ExoEnjoyArticleBundle:Articles:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>

        <title>Bienvenue dans l'article ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</title>



        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    </head>

    <body>

    ";
        // line 25
        echo "
        <h1>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h1>


            <div class=\"articleContent\"> <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", array()), "html", null, true);
        echo "</p> </div>
            <div class=\"date\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "creationDate", array()), "d/m/Y"), "html", null, true);
        echo "</div>

        <div class=\"btn\">
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exo_enjoy_article_indexpage");
        echo "\">Retour à l'index</a>
        </div>


    </body>

</html>";
        
        $__internal_5f00a5a08b8ad88ce7271675a8a07703d43003b0cfa7059f5249dde858d9a669->leave($__internal_5f00a5a08b8ad88ce7271675a8a07703d43003b0cfa7059f5249dde858d9a669_prof);

        
        $__internal_0b6c60c8c88027a3b95d1a4e842a7bab53e678fc48b9ed81d9e8d9e0610e2668->leave($__internal_0b6c60c8c88027a3b95d1a4e842a7bab53e678fc48b9ed81d9e8d9e0610e2668_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18aa5862b13279b699198abf04c74190cd22585208da80925ab0ab6da2fbe91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18aa5862b13279b699198abf04c74190cd22585208da80925ab0ab6da2fbe91c->enter($__internal_18aa5862b13279b699198abf04c74190cd22585208da80925ab0ab6da2fbe91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75339e4e3b9120b0f151546129a72934e4272fa084acc657445d6f0e88d39513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75339e4e3b9120b0f151546129a72934e4272fa084acc657445d6f0e88d39513->enter($__internal_75339e4e3b9120b0f151546129a72934e4272fa084acc657445d6f0e88d39513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            ";
        // line 13
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/exoenjoyarticle/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            ";
        // line 16
        echo "            <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
        ";
        
        $__internal_75339e4e3b9120b0f151546129a72934e4272fa084acc657445d6f0e88d39513->leave($__internal_75339e4e3b9120b0f151546129a72934e4272fa084acc657445d6f0e88d39513_prof);

        
        $__internal_18aa5862b13279b699198abf04c74190cd22585208da80925ab0ab6da2fbe91c->leave($__internal_18aa5862b13279b699198abf04c74190cd22585208da80925ab0ab6da2fbe91c_prof);

    }

    public function getTemplateName()
    {
        return "ExoEnjoyArticleBundle:Articles:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 16,  97 => 13,  95 => 12,  86 => 11,  69 => 33,  63 => 30,  59 => 29,  53 => 26,  50 => 25,  43 => 18,  41 => 11,  34 => 7,  26 => 1,);
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

        <title>Bienvenue dans l'article {{ article.id }}</title>



        {% block stylesheets %}
            {# My personal stylsheet #}
            <link href=\"{{ asset('/bundles/exoenjoyarticle/style.css') }}\" rel=\"stylesheet\" />
            {# A google font : Indie Flower
            for css code : font-family: 'Indie Flower', cursive; #}
            <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
        {% endblock %}

    </head>

    <body>

    {# \"article\" is an array generated with the controller,
    it contain all informations for the article with the id entered at the end of the url #}

        <h1>{{ article.title }}</h1>


            <div class=\"articleContent\"> <p>{{ article.content }}</p> </div>
            <div class=\"date\">{{ article.creationDate|date('d/m/Y') }}</div>

        <div class=\"btn\">
            <a href=\"{{ path('exo_enjoy_article_indexpage') }}\">Retour à l'index</a>
        </div>


    </body>

</html>", "ExoEnjoyArticleBundle:Articles:view.html.twig", "/home/franqui/Developper/Recrutement/exoEnjoy/ExoEnjoy/ExoSymfony/src/ExoEnjoy/ArticleBundle/Resources/views/Articles/view.html.twig");
    }
}
