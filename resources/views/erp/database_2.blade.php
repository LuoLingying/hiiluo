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
            <h3>
                <a href="#ruigu_product_spec" class="black">
                    ruigu_product_spec - 商品参数
                </a>
            </h3>
            <h3>
                <a href="#ruigu_product_puredesc" class="black">
                    ruigu_product_puredesc - 商品包装清单/售后服务表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_product_package_info" class="black">
                    ruigu_product_package_info - 商品包装信息表
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
        <div id="ruigu_product_spec">
            <h3>ruigu_product_spec - 商品参数</h3>
            <pre>
                parentId,
                specKey 参数名称
                specValue 参数值
                specOrder 显示顺序,
                parentType,
                is_allow_search 是否允许搜索
            </pre>
        </div>
        <div id="ruigu_product_puredesc">
            <h3>ruigu_product_puredesc - 商品包装清单/售后服务表</h3>
            <pre>
                id  自增Id,
                productDescName  描述名称,
                productDesc  描述内容,
                displayOrder  展示顺序,
                type  类型：0默认，1包装清单，2售后服务，3权利声明,
                parentId  CRM 框架所需,
                parentType  CRM 框架所需
            </pre>
        </div>
        <div id="ruigu_product_package_info">
            <h3>ruigu_product_package_info - 商品包装信息表</h3>
            <pre>
                quantity_bak  包装数量,
                unitName  计价单位名称,
                minUnitQuantity  包装内数量,
                width  包装长度,
                height  包装宽度,
                depth  包装高度,
                grossWeight  毛重,
                netWeight  包装净重,
                packageTypeId  1.小2.中3.大,
                parentId  外键ID框架生成(产品Id),
                parentType  外键类型框架生成,
                warehouse_updated
            </pre>
        </div>
        <div id="ruigu_system_role_related">
            <h3>ruigu_system_role_related - 锐锢系统用户类型关联表</h3>
            <pre>
                id  自增主键,
                user_id  用户ID,
                true_name  真实姓名,
                role  角色（取自ruigu_system_role）,
                dc_id  对应总仓ID,
                i_enable  是否启用,
                created  创建时间,
                modified  更新时间,
                erp_user_name  erp系统username,
                is_tester 是否测试账号：0否1是,
                is_lbs  发送坐标
            </pre>
        </div>
    </body>
</html>