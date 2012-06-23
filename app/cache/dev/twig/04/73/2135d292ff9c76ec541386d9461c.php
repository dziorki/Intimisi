<?php

/* KlientBundle:Ustawienia:index.html.twig */
class __TwigTemplate_04732135d292ff9c76ec541386d9461c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
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

    // line 12
    public function block_form_errors($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 15
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 16
                echo "            <div class=\"nNote nFailure hideit\">
                <p>";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "    ";
        }
        echo " 
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"title\"><h5>Ustawienia portfela inwestycyjnego</h5></div>

";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 8
            echo "        <div class=\"nNote nSuccess hideit\">
            <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "</p>
        </div>
";
        }
        // line 12
        $this->displayBlock('form_errors', $context, $blocks);
        // line 23
        echo "
<form action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ustawienia_update"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " id=\"valid\" class=\"mainForm\">
    <fieldset>
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iLocked2\">Konfiguracja prywatności</h5>
            </div>    
            <div class=\"rowElem noborder\">
                <label>Nazwa portfela:</label>
                <div class=\"formRight\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nazwa_portfela"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <div class=\"leftRight\">                      
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "ustawienia_prywatnosci"), 0));
        echo "               
                    <label>";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "ustawienia_prywatnosci"), 0));
        echo "</label>
                </div>                       
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <div class=\"leftRight\">                      
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "ustawienia_prywatnosci"), 1));
        echo "
                    <label>";
        // line 47
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "ustawienia_prywatnosci"), 1));
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"submitForm\">
                <input type=\"submit\" value=\"Zapisz konfiguracje\" class=\"greyishBtn\">
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>
    <fieldset>
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iAbacus\">Ustawienia prowizji</h5>
            </div>                    
            <div class=\"rowElem\">
                <label>Wartość minimalna prowizji:</label>
                <div class=\"formRight\">
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "ustawienia_prowizji_wartosc"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>Wartość procentowa:</label>
                <div class=\"formRight\">
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "ustawienia_prowizji_procent"));
        echo "
                </div>                        
                <div class=\"fix\"></div>
            </div>
            <div class=\"submitForm\">
                <input type=\"submit\" value=\"Zapisz konfiguracje\" class=\"greyishBtn\">
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>  
    <!--<fieldset>
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iRecord\">Ustawienia avatara</h5>
            </div>                    
            <div class=\"rowElem\">
                <label>Avatar:</label>
                <div class=\"formRight\">
                    ";
        // line 90
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "avatar_file"));
        echo "
                </div>                      
                <div class=\"fix\"></div>
            </div>
            ";
        // line 94
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo " 
            <div class=\"submitForm\">
                <input type=\"submit\" value=\"Wyślij\" class=\"greyishBtn\">
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset> 
</form>
-->
";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Ustawienia:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
