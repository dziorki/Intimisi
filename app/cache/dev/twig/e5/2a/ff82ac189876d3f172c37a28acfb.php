<?php

/* KlientBundle:Default:index.html.twig */
class __TwigTemplate_e52aff82ac189876d3f172c37a28acfb extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
