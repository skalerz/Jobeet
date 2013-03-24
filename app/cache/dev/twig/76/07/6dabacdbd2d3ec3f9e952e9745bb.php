<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_76076dabacdbd2d3ec3f9e952e9745bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

<head>
\t<title>
\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t</title>
\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
\t<div id=\"container\">
\t\t<div id=\"header\">
\t\t\t<div class=\"content\">
\t\t\t\t<h1><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_homepage"), "html", null, true);
        echo "\">
          <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
        </a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job"), "html", null, true);
        echo "\">Post a Job</a>
              </div>
            </div>
 
            <div class=\"search\">
              <h2>Ask for a job</h2>
              <form action=\"\" method=\"get\">
                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <div class=\"help\">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
\t\t</div>
\t</div>
\t<div id=\"content\">
        ";
        // line 49
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 50
            echo "          <div class=\"flash_notice\">
            ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 54
        echo " 
        ";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 56
            echo "          <div class=\"flash_error\">
            ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 60
        echo " 
        <div class=\"content\">
            ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"\">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
    
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\tJobeet - Your best job board
\t\t";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
        // line 63
        echo "            ";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  176 => 62,  172 => 16,  169 => 15,  162 => 13,  159 => 12,  154 => 8,  151 => 7,  131 => 72,  126 => 70,  118 => 64,  116 => 62,  112 => 60,  106 => 57,  103 => 56,  101 => 55,  98 => 54,  92 => 51,  89 => 50,  57 => 25,  53 => 24,  42 => 17,  39 => 15,  33 => 10,  31 => 7,  23 => 1,  104 => 23,  87 => 49,  81 => 17,  77 => 16,  72 => 14,  67 => 32,  50 => 12,  46 => 10,  43 => 9,  37 => 12,  32 => 4,  29 => 3,);
    }
}
