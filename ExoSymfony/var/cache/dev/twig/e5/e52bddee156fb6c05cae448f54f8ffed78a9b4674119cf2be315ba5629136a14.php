<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9168d084e10d9f59ddc2c03998c2ac73786288bdb1c49d365ae3d63a4b569c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9168d084e10d9f59ddc2c03998c2ac73786288bdb1c49d365ae3d63a4b569c0d->enter($__internal_9168d084e10d9f59ddc2c03998c2ac73786288bdb1c49d365ae3d63a4b569c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_64bf2fa70d2f6d2bd6cde65c5510d86970a91b788881956a5b95f7a89112ddde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bf2fa70d2f6d2bd6cde65c5510d86970a91b788881956a5b95f7a89112ddde->enter($__internal_64bf2fa70d2f6d2bd6cde65c5510d86970a91b788881956a5b95f7a89112ddde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9168d084e10d9f59ddc2c03998c2ac73786288bdb1c49d365ae3d63a4b569c0d->leave($__internal_9168d084e10d9f59ddc2c03998c2ac73786288bdb1c49d365ae3d63a4b569c0d_prof);

        
        $__internal_64bf2fa70d2f6d2bd6cde65c5510d86970a91b788881956a5b95f7a89112ddde->leave($__internal_64bf2fa70d2f6d2bd6cde65c5510d86970a91b788881956a5b95f7a89112ddde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6bd247299e62d02fd98f31501dc24fab97c65d3657da8213284818c7e53c26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bd247299e62d02fd98f31501dc24fab97c65d3657da8213284818c7e53c26b->enter($__internal_c6bd247299e62d02fd98f31501dc24fab97c65d3657da8213284818c7e53c26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d446999caa31c9f98136a4dc26ec977a65fc44e5e6cf35011b07c2f49de46f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d446999caa31c9f98136a4dc26ec977a65fc44e5e6cf35011b07c2f49de46f09->enter($__internal_d446999caa31c9f98136a4dc26ec977a65fc44e5e6cf35011b07c2f49de46f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d446999caa31c9f98136a4dc26ec977a65fc44e5e6cf35011b07c2f49de46f09->leave($__internal_d446999caa31c9f98136a4dc26ec977a65fc44e5e6cf35011b07c2f49de46f09_prof);

        
        $__internal_c6bd247299e62d02fd98f31501dc24fab97c65d3657da8213284818c7e53c26b->leave($__internal_c6bd247299e62d02fd98f31501dc24fab97c65d3657da8213284818c7e53c26b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83a1ba4ede0e558d333754c9a3ae8d1b885293e1b3565c4f867bb7f3357922ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a1ba4ede0e558d333754c9a3ae8d1b885293e1b3565c4f867bb7f3357922ed->enter($__internal_83a1ba4ede0e558d333754c9a3ae8d1b885293e1b3565c4f867bb7f3357922ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_273b11e63d01934d713af5adf0a0d99662cd91fc11688ffad17b8004cad998f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273b11e63d01934d713af5adf0a0d99662cd91fc11688ffad17b8004cad998f1->enter($__internal_273b11e63d01934d713af5adf0a0d99662cd91fc11688ffad17b8004cad998f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_273b11e63d01934d713af5adf0a0d99662cd91fc11688ffad17b8004cad998f1->leave($__internal_273b11e63d01934d713af5adf0a0d99662cd91fc11688ffad17b8004cad998f1_prof);

        
        $__internal_83a1ba4ede0e558d333754c9a3ae8d1b885293e1b3565c4f867bb7f3357922ed->leave($__internal_83a1ba4ede0e558d333754c9a3ae8d1b885293e1b3565c4f867bb7f3357922ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1891fe4928389e460a076a7b9a002625d03b1e09a4e6f1ed0bfd9ec64fe8facb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1891fe4928389e460a076a7b9a002625d03b1e09a4e6f1ed0bfd9ec64fe8facb->enter($__internal_1891fe4928389e460a076a7b9a002625d03b1e09a4e6f1ed0bfd9ec64fe8facb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e5542f20f00636cab52dbec6f542b720957b7c4234c48cc248ffe3975616f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5542f20f00636cab52dbec6f542b720957b7c4234c48cc248ffe3975616f5f->enter($__internal_1e5542f20f00636cab52dbec6f542b720957b7c4234c48cc248ffe3975616f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e5542f20f00636cab52dbec6f542b720957b7c4234c48cc248ffe3975616f5f->leave($__internal_1e5542f20f00636cab52dbec6f542b720957b7c4234c48cc248ffe3975616f5f_prof);

        
        $__internal_1891fe4928389e460a076a7b9a002625d03b1e09a4e6f1ed0bfd9ec64fe8facb->leave($__internal_1891fe4928389e460a076a7b9a002625d03b1e09a4e6f1ed0bfd9ec64fe8facb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be4eef63eee9e16b6f6437108eb31e8738a861d8bfe18ac6a4256abe62a70b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4eef63eee9e16b6f6437108eb31e8738a861d8bfe18ac6a4256abe62a70b6d->enter($__internal_be4eef63eee9e16b6f6437108eb31e8738a861d8bfe18ac6a4256abe62a70b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_75d9b140d7eadd55ae85867f808b166cc2734a8161d4bc39a504ad8641a36c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d9b140d7eadd55ae85867f808b166cc2734a8161d4bc39a504ad8641a36c87->enter($__internal_75d9b140d7eadd55ae85867f808b166cc2734a8161d4bc39a504ad8641a36c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_75d9b140d7eadd55ae85867f808b166cc2734a8161d4bc39a504ad8641a36c87->leave($__internal_75d9b140d7eadd55ae85867f808b166cc2734a8161d4bc39a504ad8641a36c87_prof);

        
        $__internal_be4eef63eee9e16b6f6437108eb31e8738a861d8bfe18ac6a4256abe62a70b6d->leave($__internal_be4eef63eee9e16b6f6437108eb31e8738a861d8bfe18ac6a4256abe62a70b6d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/franqui/Developper/Recrutement/exoEnjoy/app/Resources/views/base.html.twig");
    }
}
