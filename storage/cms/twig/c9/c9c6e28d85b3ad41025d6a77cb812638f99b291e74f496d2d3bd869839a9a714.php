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

/* /Applications/XAMPP/xamppfiles/htdocs/install-master/plugins/tung/booking/components/componentsort/default.htm */
class __TwigTemplate_6a52a9ac5bdf2bf0ebf67867b7db90f76b590780131eb220e18510073bd12008 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"col-md \">
                <span class=\"flex-content-center float-left\">Lọc theo: &nbsp;&nbsp;&nbsp;</span>
                <select id=\"filter\" name=\"item_order\">
                    <option selected=\"selected\" value=\"\">Không có</option>
                    <option value=\"checkin\">Đã checkin</option>
                    <option value=\"do_not_checkin\">Chưa checkin</option>
                    <option value=\"almost_null\">Sắp trống</option>
                </select>
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"col-md\">
                <span class=\"flex-content-center float-left\">Xem theo: &nbsp;&nbsp;&nbsp;</span>
                <select id=\"sorts\" name=\"item_order\">
                    <option selected=\"selected\" value=\"id_asc\">Id Booking nhỏ đến lớn</option>
                    <option value=\"id_desc\">Id Booking lớn đến nhỏ</option>
                </select>
            </div>
        </div>
        <ul class=\"list-group col-md-12 col-xs col-ld pr-0\" id=\"ul_in_booking\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["booking"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 25
            echo "                <li class=\"list-group-item li\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "renter", [], "any", false, false, false, 25), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            
        </ul>
        <button type=\"button\" class=\"btn btn-primary more col-md-12 mt-3\" data-id=\"id_asc\" id=\"more\">Xem them</button>
    </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$(\"#filter\").change(function(){
            let value = \$(this).val();
            \$.request('onFilter', {
                data: {value : value},
                success: function(data) {
                    console.log(data);
                    if(data == \"\"){
                        \$(\"#ul_in_booking\").html(\"Không có dữ liệu\");
                        \$('#more').css('display','none');
                    }else{
                        let obj = '';
                        for(let a in data){
                            obj += '<li class=\"list-group-item li\">'+data[a].renter+'</li>';
                            \$('#ul_in_booking').html(obj);
                            \$('#more').css('display','block');
                        };
                    }
                }
            }) 
        });
        \$(\"#sorts\").change(function(){
            let value = \$(this).val();
            let filter = \$('#filter').val();
            \$.request('onSort', {
                data: {value : value,
                filter:filter},
                success: function(data) {
                    console.log(data);
                    let obj = '';
                    for(let a in data.sort){
                        obj += '<li class=\"list-group-item li\">'+data.sort[a].renter+'</li>';
                        \$('#ul_in_booking').html(obj);
                    };
                    \$('#more').replaceWith('<button type=\"button\" class=\"btn btn-primary more col-md-12 mt-3\" data-id=\"'+data.type+'\" id=\"more\">Xem them</button>');
                }
            }) 
        });
        \$(document).on(\"click\",\".more\", function(){
            let count_li = \$('.li').length;
            let data_id = \$(this).attr(\"data-id\");
            let filter = \$('#filter').val();
            \$.request('onLoadMore', {
                data: {count_li : count_li,
                        sort_type : data_id,
                        filter: filter},
                success: function(data) {
                    let obj = '';
                    for(let a in data){
                            obj = '<li class=\"list-group-item li\">'+data[a].renter+'</li>';
                            \$('#ul_in_booking').append(obj);
                        };
                }
            })
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/install-master/plugins/tung/booking/components/componentsort/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  66 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-6 mb-3\">
            <div class=\"col-md \">
                <span class=\"flex-content-center float-left\">Lọc theo: &nbsp;&nbsp;&nbsp;</span>
                <select id=\"filter\" name=\"item_order\">
                    <option selected=\"selected\" value=\"\">Không có</option>
                    <option value=\"checkin\">Đã checkin</option>
                    <option value=\"do_not_checkin\">Chưa checkin</option>
                    <option value=\"almost_null\">Sắp trống</option>
                </select>
            </div>
        </div>
        <div class=\"col-md-6 mb-3\">
            <div class=\"col-md\">
                <span class=\"flex-content-center float-left\">Xem theo: &nbsp;&nbsp;&nbsp;</span>
                <select id=\"sorts\" name=\"item_order\">
                    <option selected=\"selected\" value=\"id_asc\">Id Booking nhỏ đến lớn</option>
                    <option value=\"id_desc\">Id Booking lớn đến nhỏ</option>
                </select>
            </div>
        </div>
        <ul class=\"list-group col-md-12 col-xs col-ld pr-0\" id=\"ul_in_booking\">
            {% for a in booking %}
                <li class=\"list-group-item li\">{{a.renter}}</li>
            {% endfor %}
            
        </ul>
        <button type=\"button\" class=\"btn btn-primary more col-md-12 mt-3\" data-id=\"id_asc\" id=\"more\">Xem them</button>
    </div>
</div>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function(){
        \$(\"#filter\").change(function(){
            let value = \$(this).val();
            \$.request('onFilter', {
                data: {value : value},
                success: function(data) {
                    console.log(data);
                    if(data == \"\"){
                        \$(\"#ul_in_booking\").html(\"Không có dữ liệu\");
                        \$('#more').css('display','none');
                    }else{
                        let obj = '';
                        for(let a in data){
                            obj += '<li class=\"list-group-item li\">'+data[a].renter+'</li>';
                            \$('#ul_in_booking').html(obj);
                            \$('#more').css('display','block');
                        };
                    }
                }
            }) 
        });
        \$(\"#sorts\").change(function(){
            let value = \$(this).val();
            let filter = \$('#filter').val();
            \$.request('onSort', {
                data: {value : value,
                filter:filter},
                success: function(data) {
                    console.log(data);
                    let obj = '';
                    for(let a in data.sort){
                        obj += '<li class=\"list-group-item li\">'+data.sort[a].renter+'</li>';
                        \$('#ul_in_booking').html(obj);
                    };
                    \$('#more').replaceWith('<button type=\"button\" class=\"btn btn-primary more col-md-12 mt-3\" data-id=\"'+data.type+'\" id=\"more\">Xem them</button>');
                }
            }) 
        });
        \$(document).on(\"click\",\".more\", function(){
            let count_li = \$('.li').length;
            let data_id = \$(this).attr(\"data-id\");
            let filter = \$('#filter').val();
            \$.request('onLoadMore', {
                data: {count_li : count_li,
                        sort_type : data_id,
                        filter: filter},
                success: function(data) {
                    let obj = '';
                    for(let a in data){
                            obj = '<li class=\"list-group-item li\">'+data[a].renter+'</li>';
                            \$('#ul_in_booking').append(obj);
                        };
                }
            })
        });
    });
</script>", "/Applications/XAMPP/xamppfiles/htdocs/install-master/plugins/tung/booking/components/componentsort/default.htm", "");
    }
}
