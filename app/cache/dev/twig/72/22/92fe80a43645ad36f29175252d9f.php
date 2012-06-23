<?php

/* KlientBundle:Portfele:index.html.twig */
class __TwigTemplate_722292fe80a43645ad36f29175252d9f extends Twig_Template
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
<div class=\"title\"><h5>Lista portfeli użytkowników</h5></div>

<!-- Dynamic table --> 
<div class=\"table\">
    <div class=\"head\">
        <h5 class=\"iFrames\">Portfele</h5></div>
    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"notowania\">
        <thead>
        <tr>
            <td>Lp.</td>
            <td>Nazwa portfela</td>
            <td>Zysk/Strata</td>
            <td>Nazwa użytkownika</td>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
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
            // line 21
            echo "                <tr>
                    <td class=\"right\">";
            // line 22
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "loop"), "index0") + 1), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nazwa_portfela"), "html", null, true);
            echo "</td>
                    <td class=\"right\" style=\"text-align: right\">";
            // line 24
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "zysk") / twig_number_format_filter($this->env, 100, 2, ".", ",")), "html", null, true);
            echo "</td>
                    <td class=\"left\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "username"), "html", null, true);
            echo "</td>
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
        // line 28
        echo "        </tbody>
    </table>
</div>


";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Portfele:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
