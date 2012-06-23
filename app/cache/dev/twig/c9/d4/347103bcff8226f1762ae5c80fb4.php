<?php

/* KlientBundle:Ulubieni:index.html.twig */
class __TwigTemplate_c9d4347103bcff8226f1762ae5c80fb4 extends Twig_Template
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
<div class=\"title\"><h5>Ulubieni użytkownicy</h5></div>

<div class=\"widget first\">
    <div class=\"head\">
        <h5 class=\"iUsers\">Lista ulubionych użytkowników</h5>
    </div>
    <div id=\"myList-nav\">
        <div class=\"ln-letter-count\" style=\"top: 0px; position: absolute; left: 992px; width: 19px; display: none; \">10</div>
    </div>
    <ul id=\"myList\">
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "        <li class=\"ln-a\" style=\"display: list-item; \"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ulubionyid"), "html", null, true);
            echo "</a>
            <ul class=\"listData\">
                <li><a href=\"#\" title=\"\">email@domain.com</a></li>
                <li><span class=\"red\">+5488734455</span></li>
                <li><span class=\"cNote\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "opis"), "html", null, true);
            echo "</span></li>
                <li><span class=\"rowElem\"><a href=\"\">Usuń</a></span></li>
            </ul>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 24
        echo "        <li class=\"ln-no-match\" style=\"display: none; \">Nothing matched your filter, please click another letter.
        </li>
    </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Ulubieni:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
