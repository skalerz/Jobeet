<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_bb44b37342d43f6783d7bd14ac0b251a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

        <h1>Job creation</h1>

        <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <p>
                <button type=\"submit\">Create</button>
            </p>
        </form>

            <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job"), "html", null, true);
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  81 => 17,  77 => 16,  179 => 63,  172 => 16,  159 => 12,  118 => 64,  23 => 1,  53 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  235 => 74,  229 => 73,  224 => 71,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 15,  143 => 56,  140 => 55,  132 => 51,  128 => 49,  119 => 42,  107 => 36,  71 => 19,  38 => 6,  155 => 58,  135 => 47,  126 => 70,  114 => 42,  84 => 28,  70 => 20,  67 => 13,  61 => 21,  94 => 22,  89 => 50,  85 => 25,  75 => 23,  68 => 14,  56 => 9,  87 => 20,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 7,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 3,  25 => 3,  19 => 1,  79 => 18,  72 => 14,  69 => 25,  47 => 9,  40 => 8,  37 => 8,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 50,  131 => 72,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 37,  101 => 55,  98 => 54,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 15,  52 => 21,  50 => 12,  43 => 9,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 62,  173 => 74,  168 => 72,  164 => 59,  162 => 13,  154 => 8,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 62,  112 => 60,  109 => 41,  106 => 57,  103 => 56,  99 => 30,  95 => 34,  92 => 51,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 25,  54 => 17,  51 => 14,  48 => 13,  45 => 17,  42 => 17,  39 => 15,  36 => 5,  33 => 10,  30 => 7,);
    }
}
