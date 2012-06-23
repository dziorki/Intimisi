<?php

/* KlientBundle:Portfel:kup.html.twig */
class __TwigTemplate_2b01d77a88c510a119b63ac826aea311 extends Twig_Template
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
<div class=\"title\"><h5>Kupno akcji</h5></div>




<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"mainForm\">
    <fieldset>
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iLocked2\">Ustawienia kupna</h5>
            </div>                    
            <div class=\"rowElem searchDrop\">
                <label>Nazwa:</label>
                <div class=\"formRight\">
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nazwa"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Cena akcji:</label>
                <div class=\"formRight\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "cena"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Ilość:</label>
                <div class=\"formRight\">
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "ilosc"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Prowizja:</label>
                <div class=\"formRight\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "prowizja"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
                

";
        // line 45
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo " 

            <div class=\"submitForm\">
                <input type=\"submit\" value=\"Kup\" class=\"greyishBtn\">
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>  
</form>





";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Portfel:kup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
