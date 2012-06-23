<?php

/* KlientBundle:Aktualnosci:index.html.twig */
class __TwigTemplate_b7b46dbcd1fb6780b36a5e29a25f6a5b extends Twig_Template
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
        <li class=\"activeTab\"><a href=\"#tab1\">Ostatnie aktualności</a></li>
        <li class=\"\"><a href=\"#tab2\">Bankier.pl</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"tab1\" class=\"tab_content\" style=\"display: block; \">
        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 16
            echo "            <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tytul"), "html", null, true);
            echo "</h2>
            <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "zawartosc"), "html", null, true);
            echo "</p></br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "        
        </div>
        <div id=\"tab2\" class=\"tab_content\" style=\"display: none; \">
        
        
        </div>
    </div>\t
    <div class=\"fix\"></div>\t\t 
</div>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Aktualnosci:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
