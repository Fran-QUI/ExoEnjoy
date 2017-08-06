<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a23903b21276f3556b582e664074e677b53626ce3991ff409a99e9e56226ffe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23903b21276f3556b582e664074e677b53626ce3991ff409a99e9e56226ffe5->enter($__internal_a23903b21276f3556b582e664074e677b53626ce3991ff409a99e9e56226ffe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1bd148725df4c08c39fab269a9016ee1aa7b14e043bb4acf125a436666bf9cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd148725df4c08c39fab269a9016ee1aa7b14e043bb4acf125a436666bf9cb2->enter($__internal_1bd148725df4c08c39fab269a9016ee1aa7b14e043bb4acf125a436666bf9cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a23903b21276f3556b582e664074e677b53626ce3991ff409a99e9e56226ffe5->leave($__internal_a23903b21276f3556b582e664074e677b53626ce3991ff409a99e9e56226ffe5_prof);

        
        $__internal_1bd148725df4c08c39fab269a9016ee1aa7b14e043bb4acf125a436666bf9cb2->leave($__internal_1bd148725df4c08c39fab269a9016ee1aa7b14e043bb4acf125a436666bf9cb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_598033f1eeba74ff143260dfd1a78b996b1cb212c84008e530d4c0f91bde3e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_598033f1eeba74ff143260dfd1a78b996b1cb212c84008e530d4c0f91bde3e37->enter($__internal_598033f1eeba74ff143260dfd1a78b996b1cb212c84008e530d4c0f91bde3e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9e34f82f6fc9cb80bb6b8232337474635c061742b495bd09196da2201bf7f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e34f82f6fc9cb80bb6b8232337474635c061742b495bd09196da2201bf7f9d->enter($__internal_b9e34f82f6fc9cb80bb6b8232337474635c061742b495bd09196da2201bf7f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b9e34f82f6fc9cb80bb6b8232337474635c061742b495bd09196da2201bf7f9d->leave($__internal_b9e34f82f6fc9cb80bb6b8232337474635c061742b495bd09196da2201bf7f9d_prof);

        
        $__internal_598033f1eeba74ff143260dfd1a78b996b1cb212c84008e530d4c0f91bde3e37->leave($__internal_598033f1eeba74ff143260dfd1a78b996b1cb212c84008e530d4c0f91bde3e37_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa392f8a33dd50891ff5b91e14dc582ea7798fcaf2156364578d1ed24a96d242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa392f8a33dd50891ff5b91e14dc582ea7798fcaf2156364578d1ed24a96d242->enter($__internal_fa392f8a33dd50891ff5b91e14dc582ea7798fcaf2156364578d1ed24a96d242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2a856cd29a3487e2ded18b73cd47d4dd90eb4ab4a4ea903a50cb01c362a62574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a856cd29a3487e2ded18b73cd47d4dd90eb4ab4a4ea903a50cb01c362a62574->enter($__internal_2a856cd29a3487e2ded18b73cd47d4dd90eb4ab4a4ea903a50cb01c362a62574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2a856cd29a3487e2ded18b73cd47d4dd90eb4ab4a4ea903a50cb01c362a62574->leave($__internal_2a856cd29a3487e2ded18b73cd47d4dd90eb4ab4a4ea903a50cb01c362a62574_prof);

        
        $__internal_fa392f8a33dd50891ff5b91e14dc582ea7798fcaf2156364578d1ed24a96d242->leave($__internal_fa392f8a33dd50891ff5b91e14dc582ea7798fcaf2156364578d1ed24a96d242_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b02b41428623f3158f38458d449c3dd693fd0d5fa4c1f7f9fa8f467c2bf92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b02b41428623f3158f38458d449c3dd693fd0d5fa4c1f7f9fa8f467c2bf92f->enter($__internal_f6b02b41428623f3158f38458d449c3dd693fd0d5fa4c1f7f9fa8f467c2bf92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f54b80a9aea4b07c41e9619a18ac2b71f09c0b6ec71c181fa22715eb8506063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f54b80a9aea4b07c41e9619a18ac2b71f09c0b6ec71c181fa22715eb8506063->enter($__internal_2f54b80a9aea4b07c41e9619a18ac2b71f09c0b6ec71c181fa22715eb8506063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f54b80a9aea4b07c41e9619a18ac2b71f09c0b6ec71c181fa22715eb8506063->leave($__internal_2f54b80a9aea4b07c41e9619a18ac2b71f09c0b6ec71c181fa22715eb8506063_prof);

        
        $__internal_f6b02b41428623f3158f38458d449c3dd693fd0d5fa4c1f7f9fa8f467c2bf92f->leave($__internal_f6b02b41428623f3158f38458d449c3dd693fd0d5fa4c1f7f9fa8f467c2bf92f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/franqui/Developper/Recrutement/exoEnjoy/ExoEnjoy/ExoSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
