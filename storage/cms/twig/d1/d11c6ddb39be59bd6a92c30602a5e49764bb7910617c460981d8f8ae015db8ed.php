<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/XAMPP/xamppfiles/htdocs/install-master/plugins/tung/booking/components/componentsearch/default.htm */
class __TwigTemplate_dc9afced2b1fc2750d8a78b2397949c9a7aac1e599d11450e4b20c600670b429 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"form-group\">
    <input required id=\"search\"/>
    <div id=\"show_kq\" style=\"display:none;\">
        <ul class=\"list-group show_kq\">
            
        </ul>
    </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$(\"#search\").keyup(function(){
            let key_search = \$('#search').val();
            if(key_search){
                \$.request('onSearch', {
                data: {key_search : key_search},
                success: function(data) {
                    \$('#show_kq').css('display','block');
                    console.log(data);
                    \$('.show_kq').html(data.result);
                    }
                })
            }else{
                \$('#show_kq').css('display','none');
            }
            
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/install-master/plugins/tung/booking/components/componentsearch/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    <input required id=\"search\"/>
    <div id=\"show_kq\" style=\"display:none;\">
        <ul class=\"list-group show_kq\">
            
        </ul>
    </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$(\"#search\").keyup(function(){
            let key_search = \$('#search').val();
            if(key_search){
                \$.request('onSearch', {
                data: {key_search : key_search},
                success: function(data) {
                    \$('#show_kq').css('display','block');
                    console.log(data);
                    \$('.show_kq').html(data.result);
                    }
                })
            }else{
                \$('#show_kq').css('display','none');
            }
            
        });
    });
</script>
", "/Applications/XAMPP/xamppfiles/htdocs/install-master/plugins/tung/booking/components/componentsearch/default.htm", "");
    }
}
