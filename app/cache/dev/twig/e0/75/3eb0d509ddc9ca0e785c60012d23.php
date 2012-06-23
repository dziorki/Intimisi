<?php

/* KlientBundle:Pomoc:index.html.twig */
class __TwigTemplate_e0753eb0d509ddc9ca0e785c60012d23 extends Twig_Template
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
<div class=\"title\"><h5>Pomoc</h5></div>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Pomoc:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
