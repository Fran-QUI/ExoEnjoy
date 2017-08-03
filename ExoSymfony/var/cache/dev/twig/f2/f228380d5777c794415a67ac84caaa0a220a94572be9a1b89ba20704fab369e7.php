<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9483161c9657b605f9861fe050dcddd12cab79573233ec1aafdd1af255ffa24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9483161c9657b605f9861fe050dcddd12cab79573233ec1aafdd1af255ffa24->enter($__internal_a9483161c9657b605f9861fe050dcddd12cab79573233ec1aafdd1af255ffa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9c1019bbac9cf6d9338637cdb7ddc69cdb51884527437fc11b301a857491e0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1019bbac9cf6d9338637cdb7ddc69cdb51884527437fc11b301a857491e0aa->enter($__internal_9c1019bbac9cf6d9338637cdb7ddc69cdb51884527437fc11b301a857491e0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9483161c9657b605f9861fe050dcddd12cab79573233ec1aafdd1af255ffa24->leave($__internal_a9483161c9657b605f9861fe050dcddd12cab79573233ec1aafdd1af255ffa24_prof);

        
        $__internal_9c1019bbac9cf6d9338637cdb7ddc69cdb51884527437fc11b301a857491e0aa->leave($__internal_9c1019bbac9cf6d9338637cdb7ddc69cdb51884527437fc11b301a857491e0aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b9d9837f993eb6fbef7ed2c6c65741f3e54749cbefbc22e0132f390ccbbe09f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9d9837f993eb6fbef7ed2c6c65741f3e54749cbefbc22e0132f390ccbbe09f->enter($__internal_5b9d9837f993eb6fbef7ed2c6c65741f3e54749cbefbc22e0132f390ccbbe09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_908d217d874b57e375e24e916eac12ca62ad51437d8af3c6918f2e5320c3b710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908d217d874b57e375e24e916eac12ca62ad51437d8af3c6918f2e5320c3b710->enter($__internal_908d217d874b57e375e24e916eac12ca62ad51437d8af3c6918f2e5320c3b710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_908d217d874b57e375e24e916eac12ca62ad51437d8af3c6918f2e5320c3b710->leave($__internal_908d217d874b57e375e24e916eac12ca62ad51437d8af3c6918f2e5320c3b710_prof);

        
        $__internal_5b9d9837f993eb6fbef7ed2c6c65741f3e54749cbefbc22e0132f390ccbbe09f->leave($__internal_5b9d9837f993eb6fbef7ed2c6c65741f3e54749cbefbc22e0132f390ccbbe09f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65d910382e03b4094010b7453e7b8fd1c2ce3a8b796681900c32795c84081cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d910382e03b4094010b7453e7b8fd1c2ce3a8b796681900c32795c84081cc7->enter($__internal_65d910382e03b4094010b7453e7b8fd1c2ce3a8b796681900c32795c84081cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9255c547605e0eb43a2686ed0dd86eb448d921ce05df83ff8f3fc355699c7c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9255c547605e0eb43a2686ed0dd86eb448d921ce05df83ff8f3fc355699c7c8e->enter($__internal_9255c547605e0eb43a2686ed0dd86eb448d921ce05df83ff8f3fc355699c7c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9255c547605e0eb43a2686ed0dd86eb448d921ce05df83ff8f3fc355699c7c8e->leave($__internal_9255c547605e0eb43a2686ed0dd86eb448d921ce05df83ff8f3fc355699c7c8e_prof);

        
        $__internal_65d910382e03b4094010b7453e7b8fd1c2ce3a8b796681900c32795c84081cc7->leave($__internal_65d910382e03b4094010b7453e7b8fd1c2ce3a8b796681900c32795c84081cc7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6c21088f8a7ffadf466bf9bef4bb17314a7fe003cc8e3d3cd366be71d13789e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c21088f8a7ffadf466bf9bef4bb17314a7fe003cc8e3d3cd366be71d13789e->enter($__internal_e6c21088f8a7ffadf466bf9bef4bb17314a7fe003cc8e3d3cd366be71d13789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_503f66d3675bb8b5c240d5ba416bbeb29c277747e532a8ca6aba6eccd80a746d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503f66d3675bb8b5c240d5ba416bbeb29c277747e532a8ca6aba6eccd80a746d->enter($__internal_503f66d3675bb8b5c240d5ba416bbeb29c277747e532a8ca6aba6eccd80a746d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_503f66d3675bb8b5c240d5ba416bbeb29c277747e532a8ca6aba6eccd80a746d->leave($__internal_503f66d3675bb8b5c240d5ba416bbeb29c277747e532a8ca6aba6eccd80a746d_prof);

        
        $__internal_e6c21088f8a7ffadf466bf9bef4bb17314a7fe003cc8e3d3cd366be71d13789e->leave($__internal_e6c21088f8a7ffadf466bf9bef4bb17314a7fe003cc8e3d3cd366be71d13789e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/franqui/Developper/Recrutement/exoEnjoy/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
