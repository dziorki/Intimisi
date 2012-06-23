<?php

/* KlientBundle:Portfel:index.html.twig */
class __TwigTemplate_2c53080ef6c56ee72354691995fb46f6 extends Twig_Template
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

<script type=\"text/javascript\">
//<![CDATA[

\$(function () {
    var previousPoint;
 

    //Display horizontal graph
    var d1_h = [];
    var d2_h = [];
    var i = 0

            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hBar"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                    d1_h.push([";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "koszty"), "html", null, true);
            echo "]);
                    d2_h.push([";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "warte"), "html", null, true);
            echo "]);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "                
    var ds_h = new Array();
    ds_h.push({
        label: 'Wartość w chwili zakupu',
        data:d1_h,
        bars: {
            horizontal:true, 
            show: true, 
            barWidth: 1, 
            order: 1,
        }
    });
    ds_h.push({
        label: 'Wartość teraz',
        data:d2_h,
        bars: {
            horizontal:true, 
            show: true, 
            barWidth: 1, 
            order: 2
        }
    });
    
    var data = [
        {label: 'foo', data: [[1,300], [2,300], [3,300], [4,300], [5,300]]},
        {label: 'bar', data: [[1,800], [2,600], [3,400], [4,200], [5,0]]},
        {label: 'baz', data: [[1,100], [2,200], [3,300], [4,400], [5,500]]},
    ];
    var options = {
        series: {stack: 0,
                 lines: {show: false, steps: false },
                 bars: {show: true, barWidth: 0.9, align: 'center',},},
                legend: {
                        show: true,
                        noColumns: 1, // number of colums in legend table
                        labelFormatter: null, // fn: string -> string
                        labelBoxBorderColor: \"#000\", // border color for the little label boxes
                        container: null, // container (as jQuery object) to put legend in, null means default on top of graph
                        position: \"ne\", // position of default legend container within plot
                        margin: [5, 10], // distance from grid edge to default legend container within plot
                        backgroundColor: \"#efefef\", // null means auto-detect
                        backgroundOpacity: 1 // set to 0 to avoid background
                },
        xaxis: {ticks: [[1,'One'], [2,'Two'], [3,'Three'], [4,'Four'], [5,'Five']]},
    };


    //tooltip function
    function showTooltip(x, y, contents, areAbsoluteXY) {
        var rootElt = 'body';
\t
        \$('<div id=\"tooltip3\" class=\"tooltip\">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y - 35,
            left: x - 5,
            border: '1px solid #000',
            border: '1px solid #000',
            padding: '1px 6px',
            'z-index': '9999',
            'background-color': '#202020',
            'color': '#fff',
            'font-size': '11px',
            'border-radius': '2px',
            '-webkit-border-radius': '2px',
            '-moz-border-radius': '2px',
            opacity: 0.8
        }).prependTo(rootElt).show();
    }

    \$.plot(\$(\"#hBar\"), data, options);
});


\$(function () {
        var data = [];              
        ";
        // line 97
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
            // line 98
            echo "            data[";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index0"), "html", null, true);
            echo "] = { label: \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nazwa"), "html", null, true);
            echo "\", data: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "entity"), "cena") * $this->getAttribute($this->getContext($context, "entity"), "ilosc")) / 100), "html", null, true);
            echo " }
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
        // line 100
        echo "
\$.plot(\$(\"#pie\"), data, 
{
                series: {
                        pie: { 
                                show: true,
                                label: {
                                        show: false,
                                        formatter: function(label, series){
                                                return '<div style=\"font-size:11px;text-align:center;padding:4px;color:white;\">'+label+'<br/>'+Math.round(series.percent)+'%</div>';
                                        },
                                        threshold: 0.1
                                }
                        }
                },
                legend: {
                        show: true,
                        noColumns: 1, // number of colums in legend table
                        labelFormatter: null, // fn: string -> string
                        labelBoxBorderColor: \"#000\", // border color for the little label boxes
                        container: null, // container (as jQuery object) to put legend in, null means default on top of graph
                        position: \"ne\", // position of default legend container within plot
                        margin: [5, 10], // distance from grid edge to default legend container within plot
                        backgroundColor: \"#efefef\", // null means auto-detect
                        backgroundOpacity: 1 // set to 0 to avoid background
                },
                grid: {
                        hoverable: true,
                        clickable: true
                },
});
\$(\"#interactive\").bind(\"plothover\", pieHover);
\$(\"#interactive\").bind(\"plotclick\", pieClick);

});

function pieHover(event, pos, obj) 
{
        if (!obj)
                                return;
        percent = parseFloat(obj.series.percent).toFixed(2);
        \$(\"#hover\").html('<span style=\"font-weight: bold; color: '+obj.series.color+'\">'+obj.series.label+' ('+percent+'%)</span>');
}
function pieClick(event, pos, obj) 
{
        if (!obj)
                                return;
        percent = parseFloat(obj.series.percent).toFixed(2);
        alert(''+obj.series.label+': '+percent+'%');
}
//]]>
</script>

    <div class=\"title\"><h5>Zawartość portfela inwestycyjnego</h5></div>

    <div class=\"widget\">
        <div class=\"head\"><h5 class=\"iFrames\">Lista akcji</h5></div>
        <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"tableStatic\">
            <thead>
                <tr>
                    <td>Lp.</td>
                    <td>Nazwa</td>
                    <td>Cena</td>
                    <td>Ilosc</td>
                    <td>Suma prowizji</td>
                    <td>Cena akcji</td>
                    <td>Akcje</td>
                </tr>
            </thead>
            <tbody>
        ";
        // line 170
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
            // line 171
            echo "                    <tr>
                        <td class=\"right\">";
            // line 172
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "loop"), "index0") + 1), "html", null, true);
            echo "</td>
                        <td>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nazwa"), "html", null, true);
            echo "</td>
                        <td class=\"right\">";
            // line 174
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "cena") / 100), 2, ".", ","), "html", null, true);
            echo "</td>
                        <td class=\"right\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ilosc"), "html", null, true);
            echo "</td>
                        <td class=\"right\">";
            // line 176
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($this->getContext($context, "entity"), "prowizja") / 100), 2, ".", ","), "html", null, true);
            echo "</td>
                        <td class=\"right\">";
            // line 177
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($this->getContext($context, "entity"), "cena") * $this->getAttribute($this->getContext($context, "entity"), "ilosc")) / 100), 2, ".", ","), "html", null, true);
            echo "</td>
                        <td class=\"center\"><a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portfel_history"), "html", null, true);
            echo "\">pokaż historie</a></td>
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
        // line 181
        echo "                </tbody>
            </table>
        </div>

        <div class=\"widgets\">            
            <div class=\"left\">                
                <div class=\"widget\">
                    <!-- Horizontal -->                    
                    <div class=\"head\"><h5 class=\"iStats\">Zyski / Straty</h5></div>
                    <div class=\"body\">
                        <div id=\"hBar\" class=\"pieWidget\"></div>
                    </div>                
                </div>
            </div>
            <div class=\"right\">                
                <div class=\"widget\">
                    <!-- Pie -->                    
                    <div class=\"head\"><h5 class=\"iChart8\">Zawartość portfela</h5></div>
                    <div class=\"body\">                        
                        <div id=\"pie\" class=\"pieWidget\"></div>
                    </div>
                </div>
            </div>            
            <div class=\"fix\"></div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "KlientBundle:Portfel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
