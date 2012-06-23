<?php

/* KlientBundle:Portfel:history.html.twig */
class __TwigTemplate_659476d3d5496222720a3701ba424597 extends Twig_Template
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
<div class=\"title\"><h5>Historia operacji</h5></div>

<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iFrames\">Tabela listy operacji</h5></div>
    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"tableStatic\">
        <thead>
        <tr>
            <td>Id</td>
            <td>Nazwa</td>
            <td>Cena</td>
            <td>Ilosc</td>
            <td>Prowizja</td>
            <td>Cena akcji</td>
            <td>Czas</td>
            <td>Actions</td>
        </tr>
        </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "loop"), "index0") + 1), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "nazwa"), "nazwa"), "html", null, true);
            echo "</td>
                <td class=\"right\">";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cena"), 2, ".", ","), "html", null, true);
            echo "</td>
                <td class=\"right\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ilosc"), "html", null, true);
            echo "</td>
                <td class=\"right\">";
            // line 28
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prowizja"), 2, ".", ","), "html", null, true);
            echo "</td>
                <td class=\"right\">";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "ilosc") * $this->getAttribute($this->getContext($context, "entity"), "cena")), 2, ".", ","), "html", null, true);
            echo "</td>
                <td class=\"center\">";
            // line 30
            if ($this->getAttribute($this->getContext($context, "entity"), "czas")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "czas"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"center\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">pokaż</a> / <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edytuj</a></td>
            </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "    </tbody>
    </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Portfel:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
