<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ERP-database</title>
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <a id="back-header" href="#catalogue" class="btn btn-default toggle">顶部</a>
        <div id="catalogue">
            <h3>
                <a href="#ruigu_product_sale_configuration" class="black">
                    ruigu_product_sale_configuration - 销售配置表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_customer_type" class="black">
                    ruigu_customer_type - 客户类型表
                </a>
            </h3>
            <h3>
                <a href="#think_channel" class="black">
                    think_channel - 分类表
                </a>
            </h3>
        </div>
        <img src="{{ asset('img/paris.jpg') }}" style=width:100%>
        <div id="ruigu_product_sale_configuration">
            <h3>ruigu_product_sale_configuration - 销售配置表</h3>
            <pre>
                id 主键,
                productId 产品ID（ThinkShop主键）,
                customerTypeId  用户类型ID（ruigu_customer_type_id主键）,
                saleQuantity  销售单元内最小计价数量,
                unitName  产品销售单位,
                minOrderPkgQty  针对指定用户类型指定销售单元的最小起订量,
                length
                width
                height
                grossWeight  毛重,
                netWeight  净重,
                volume  体积
            </pre>
        </div>
        <div id="ruigu_customer_type">
            <h3>ruigu_customer_type - 客户类型表</h3>
            <pre>
                id  ID,
                name  客户类型名称,
                description  客户类型描述,
                current_using  是否已使用,
                typeId  与ID相同,
                price_floor  与加权平均采购价比较，价格下限,
                price_ceiling  与加权平均采购价比较，价格上限
            </pre>
        </div>
        <div id="think_channel">
            <h3>think_channel - 分类表</h3>
            <pre>
                id  分类自增id,
                c_enable  是否启用,
                c_order  分类排序,
                c_name  分类名称,
                c_sname  分类简短名称,可用做分类的英文名称,
                c_parent  上级分类，0代表主分类,
                c_index_pic  分类图片,
                c_index_pic_web  分类图片WEB,
                c_seoname  SEO优化标题,
                c_key  关键字,
                c_des  关键描述,
                c_scontent  简短内容,
                path  分类路径,
                createdOn  创建时间,
                invoice_code  税收编码,
                delivery  设置交货期限
            </pre>
        </div>
    </body>
</html>