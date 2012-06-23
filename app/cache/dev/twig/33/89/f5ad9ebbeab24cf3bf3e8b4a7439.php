<?php

/* KlientBundle:Portfel:show.html.twig */
class __TwigTemplate_3389f5ad9ebbeab24cf3bf3e8b4a7439 extends Twig_Template
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
<div class=\"title\"><h5>Portfel inwestycyjny</h5></div>
<fieldset>
    <div class=\"widget\">
        <div class=\"head\">
            <h5 class=\"iLocked2\">Konfiguracja</h5>
        </div>                    
        <div class=\"rowElem\">
            <label>Nazwa:</label>
            <div class=\"formRight\">
            ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "nazwa"), "nazwa"), "html", null, true);
        echo "
            </div>                        
            <div class=\"fix\"></div>
        </div>
        <div class=\"rowElem\">
            <label>Cena akcji:</label>
            <div class=\"formRight\">
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cena"), "html", null, true);
        echo "
            </div>                        
            <div class=\"fix\"></div>
        </div>
        <div class=\"rowElem\">
            <label>Ilość zakupionych akcji:</label>
            <div class=\"formRight\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ilosc"), "html", null, true);
        echo "
            </div>                        
            <div class=\"fix\"></div>
        </div>
        <div class=\"rowElem\">
            <label>Prowizja:</label>
            <div class=\"formRight\">
            ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prowizja"), "html", null, true);
        echo "
            </div>                        
            <div class=\"fix\"></div>
        </div>
        <div class=\"submitForm\">
            
            
        <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "delete_form"));
        echo "
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_history"), "html", null, true);
        echo "\"><button class=\"greyishBtn\">Cofnij</button></a>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\"><button class=\"greenBtn\">Edytuj</button></a>
            <button type=\"submit\" class=\"redBtn\">Usuń</button>
        </form>
            
        </div>
        <div class=\"fix\"></div>
    </div>
</fieldset>  

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Portfel:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
