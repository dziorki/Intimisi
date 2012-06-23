<?php

/* KlientBundle:Aktualnosci:index2.html.twig */
class __TwigTemplate_de30ce4f40302c0797148af8bb8ec3db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "

<div class=\"title\"><h5>Aktualności</h5></div>

<div class=\"widget\">       
    <ul class=\"tabs\">
        <li class=\"activeTab\"><a href=\"#tab1\">Money.pl</a></li>
        <li class=\"\"><a href=\"#tab2\">Bankier.pl</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"tab1\" class=\"tab_content\" style=\"display: none; \">
        
        
        </div>
        <div id=\"tab2\" class=\"tab_content\" style=\"display: block; \">
        
        
        </div>
    </div>\t
    <div class=\"fix\"></div>\t\t 
</div>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Aktualnosci:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
