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
        <div id="catalogue">
            <h3>
                <a href="#ruigu_product_outstock_detail">
                    ruigu_product_outstock_detail - 商品出库详细表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_member_order_shop">
                    ruigu_member_order_shop - 订单明细表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_member_order">
                    ruigu_member_order - 销售订单表
                </a>
            </h3>
            <h3>
                <a href="#wyz_sale_member_info">
                    wyz_sale_member_info - 店铺表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_intent_group">
                    ruigu_intent_group - 销售组表
                </a>
            </h3>
            <h3>
                <a href="#think_shop">
                    think_shop - 商品表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_supplier">
                    ruigu_supplier - 供应商表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_product_weighted_cost_price">
                    ruigu_product_weighted_cost_price - 商品每日加权平均价记录表
                </a>
            </h3>
        </div>
        <img src="{{ asset('img/london.jpg') }}" style=width:100%>
        <div id="ruigu_product_outstock_detail">
            <h3>ruigu_product_outstock_detail - 商品出库详细表</h3>
            <pre>
                sm_order  出库单ID,
                related_order_no  关联单号,
                order_type  订单类型,
                warehouse_id  仓库ID,
                product_code 商品编码,
                product_id  商品id,
                quantity  出库数量,
                oustock_time  出库时间,
                remark  备注,
                synced  财务系统同步标记0未操作1.已同步2同步单报错3.已处理无需同步4.未找到同步方案
            </pre>
        </div>
        <div id="ruigu_member_order_shop">
            <h3>ruigu_member_order_shop - 订单明细表</h3>
            <pre>
                createTime  创建时间,
                orderNumber  订单编号,
                shop_id  商品ID,
                shopAmount  购买数量,
                giftAmount  赠送数量,
                unitName 购买单位,
                shopAmountMin  购买数量(最小计价单位),
                purchasePrice  实售价格,
                weight  单位重量(kg),
                volume 单位体积(cm3),
                commentStatus  评论状态（1：已评论 0：未评论）,
                withdrawAmount  退货数量,
                replaceAmount  换货数量,
                originalAmount  商品原始数量,
                originalAmountMin  商品原始数量最小值,
                no_invoice  是否为不开票商品 （1不开票商品  0开票商品）,
                invoiced_amount  已开票数量,
                promotion_price  享受促销后的价格,
                is_gift  赠品数量,
                assembly_info  组件信息（json，格式{"bianma":"count"...}）,
                returns_amount 退货数量,
                promotion_id 活动ID,
                gift_info  赠品关联信息,
                update_flag  允许修改意向单商品数量的标志：0可任意修改，1只能修改为0，2禁止修改,
                get_vm_min  购买每个最小单位商品可获得金币数量,
                use_vm 下单时该商品消耗金币总额,
                use_vm_org  下单时该商品消耗金币原始总额,
                use_coupon  下单时该商品消耗金券总额,
                use_coupon_org  下单时该商品消耗金券原始总额,
                get_point_min  购买每个最小单位商品可获得积分数量,
                use_point  下单时该商品消耗积分值,
                use_point_org  下单时该商品消耗积分值原始,
                use_point_money  下单时该商品消耗积分金额,
                occupy_shop_quantity  占货数
            </pre>
        </div>
        <div id="ruigu_member_order">
            <h3>ruigu_member_order - 销售订单表</h3>
            <pre>
                createTime  订单创建时间,
                orderNumber  订单编号,
                orderStatus  订单状态(1：创建2：已付款3：正发货4：已发货5：已收货6：已完成，7：召回中，-1已取消，-2异常,-10已拒收),
                orderType  订单类型(1普通网络订单2换货订单3门店订单4小B订单5企业订单6团购配件订单7团购商品订单8RDC订单9赔付单),
                orderSource  订单来源(0.网站订单 1.IOS订单 2.andorid订单 3.客服订单 4.客服改单 5.微信 6.意向单),
                user_id  用户ID,
                pay_type  支付类型：0线上1线下,
                payTypeID  支付ID: 1支付宝,2微信,3银联,4线下,5银联APP,6现金余额,7锐锢白条,8意向单面对面支付,
                payNumber  订单支付流水号（如：支付宝交易号）,
                payTypeName  支付名称,
                payTime  支付时间,
                payStatus  支付状态 0:未支付 1：已支付,
                payResponse_str  支付返回参数,
                totalMoney  商品金额,
                deliveFee  运费,
                discount  折扣/优惠,
                use_money  使用现金,
                use_money_org  使用余额抵扣原始值,
                use_money_accessory  使用配件余额,
                use_dealer_money  使用保证金额度,
                use_gold_ticket  使用金券,
                dueMoney  应付金额(商+运-已),
                paidMoney  已付金额,
                paid_money_org  支付金额原始值,
                deliverType  配送方式0配送1自提,
                location_id  收货地址ID,
                location_provinceCode  省Code,
                location_regionCode 市code,
                location_cityCode  区Code,
                locationPrefix 省市区,
                locationAddress  详细地址,
                locationConsignee  收货人姓名,
                locationConsignee_mobile  收货人手机,
                location_postCode  收货邮编,
                invoice_siteId  发票地址ID,
                invoice_provinceCode  发票省Code,
                invoice_regionCode 发票市Code,
                invoice_cityCode  发票区Code,
                invoicePrefix  发票省市区,
                invoiceAddress  发票详细地址,
                invoiceConsignee 发票收录人,
                invoiceConsignee_mobile  发票收录手机,
                invoice_postCode 发票邮编,
                invoice_id 发票：ID,
                invoice_name  发票：抬头,
                invoice_content_type 发票：内容类型：0明细2自定义,
                invoice_content  发票：内容,
                invoice_type  发票：类型：0普票1增票,
                invoice_deliver_type  发票配送方式：0平邮1快递,
                deliveStatus  配送状态(0：未发货1：已发货2：已签收),
                departTime  发货时间,
                receiveTime  签收时间,
                order_commentStatus  评论状态(0：不可评论1：可评论2：已评论,
                order_returnsStatus  退换货状态(0：不可退换1：可退换2：部分退换3：全退换,
                is_show  是否显示： 1显示 0隐藏,
                is_draw  是否领取过配件额度,0未领取，1领取,
                invoice_comment  发票号,
                invoiced  是否开过发票0未开发票,1已开发票,
                pre_comfirmed 财务预确认,
                pre_comfirmed_user  财务预确认操作者,
                comfirm_comment  确认备注,
                confirmed_user 确认人,
                invoice_comment_delive  运费发票号/备注,
                invoiced_for_delive  运费是否已开票,
                syncedWithLCForPostageInvoice  邮费发票信息是否与财务同步过,
                syncedWithLcForPayment  财务系统同步字段1,
                syncedWithLcForSubsidy 财务系统同步字段2,
                syncedWithLcForExtra  财务系统同步字段3,
                syncedWithLcForExpress  财务系统同步字段4,
                syncedWithLcForExpressPayment 财务系统同步字段5,
                is_replace_product  是否含替换商品,
                payment_reason  赔付单原因(1保修期内2保修期外3货损4少货5活动6赠送7其他原因8配件货损9配件保修期内10配件保修期外11 其他原因配件赔付),
                discount_deliver  运费折扣金额,
                discount_reason 折扣原因,
                promotion_point 促销活动积分,
                real_store_creator_id  门店订单创建者ID：可为员工账号，为0表后台,
                rdc_invoice_flag  RDC开大票标记：0默认 1开大票前（计入大票） 2部分开大票前,
                returns_product_money  退货总金额（商品）,
                returns_deliver_money  退运费总金额,
                invoice_time 开票时间,
                deny_pay  是否禁止支付：0可支付，1不可支付,
                salesman_id  意向单下单时店铺所属的销售员ID,
                invoice_number  寄售发票号码，如果订单中出现不开票商品但是开票了，则需要填入此发票号,
                special_invoice_time  居间商品如果开票，则在填入发票号码时录入此时间,
                salesman_path  销售组ID,
                is_delivered_pay  是否到付，1是，0否,
                creator_type  订单创建者类型：0默认，1销售所下意向单转化或销售所下B端订单，2客服所下地推，3地推自主下单,
                rejection_money  拒收金额,
                use_virtual_money  使用金币,
                use_virtual_money_org  使用金币原始值,
                virtual_money_add  已发放金币,
                use_point  使用积分,
                use_point_money 使用积分金额,
                point_add  已发放积分,
                distribution_date  配送时间,
                middle_coupon_sn  中台优惠券编码，默认未使用中台券,
                invoice_flag  开票逻辑，1订单开17税，0订单开16税
            </pre>
        </div>
        <div id="wyz_sale_member_info">
            <h3>wyz_sale_member_info - 店铺表</h3>
            <pre>
                type  踩点状态,
                name  店铺名,
                consignee 收件人/联系人,
                mobile 手机,
                tel 固话,
                img_url 店铺照片,
                lat 纬度,
                lng 经度,
                province_code 省级代码,
                region_code 市级代码,
                city_code 区县代码,
                address 地址,
                remarks 备注,
                sale_user_id 销售人员用户id,
                user_id 店铺对应用户id,
                ass_sale_user_id 联营销售ID,
                create_time 创建时间,
                last_time 更新时间,
                order_count  有效下单数,
                order_money 成交订单总额,
                order_count_week 下单数（不包括取消和关闭）,
                order_money_week 下单累计交易额,
                order_count_month 下单数（不包括取消和关闭）,
                order_money_month 下单累计交易额,
                order_channel  下单品类集合（逗号隔开）,
                order_first 首次成交时间,
                order_last 最终成交时间,
                level 等级（由销售划分ABCD）,
                nature 性质（1234,
                spot 污点,
                dealer_id 对应仓库,
                correct_data 纠正数据json,
                creator_id 创建者ID,
                sale_group_id 销售组,
                consign_region_code 用户对应配送区域编号,
                is_hide 是否隐藏,
                c_names 主营分类,
                c_ids 分类id逗号分隔,
                customer_type 客户分类1：工厂2：家用3：装修4：批发5：工地,
                sales_volume_range 销量范围，1小于5w，2：5-10w，3：10-20w，4：20-50w，5：大于50w
            </pre>
        </div>
        <div id="ruigu_intent_group">
            <h3>ruigu_intent_group - 销售组表</h3>
            <pre>
                name  组名,
                parent_id  父级分组，0表顶级,
                path  分组路径,
                is_sales  是否为最底层的销售小组,
                bd_create_order  是否允许BD为客户下单,
                i_enable  状态：0未启用，1启用,
                sort  COMMENT 排序,
                remark  COMMENT 备注,
                created  创建时间,
                modified  更新时间
            </pre>
        </div>
        <div id="think_shop">
            <h3>think_shop - 商品表</h3>
            <pre>
                i_enable  是否启用内容,
                i_order  排序,
                i_disable  禁用标志：若&pow(2,orderType)为1则对此orderType禁用,
                i_flag  商品标记：二进制右起依次为新品、居间、秒杀、促销,
                i_picture  缩略图,
                i_name  标题,
                product_name  新增显示品名,
                i_parent  分类的ID,
                brand_id  COMMENT 品牌ID,
                i_seoname  SEO标题,
                i_key  关键字,
                i_des  描述,
                i_notice  温馨提醒,
                can_sale  基础信息是否完备：1未检查，2完备，3缺失,
                oldmoney  原价,
                dlmoney  代理价,
                marketmoney  市场价,
                is_index 是否首页显示,
                is_promote  是否推荐商品,
                is_hot  是否热销商品,
                is_select  是否精选商品,
                xiaoliang  销量,
                comment_num  评论数,
                bianma 产品编码,
                productModel  产品供应商型号,
                internalModel  商城内部型号,
                displayModel  规格,
                specification  产品技术规格,
                minUnitName  最小计价单位的计量单位,
                partsincluded  组件个数,
                supplierId  供应商Id,
                displaySupplier  详情显示供应商,
                entityTypeString  商品类别可视化字符串,
                entityType  商品实体类别(BOM相关）,
                status  产品状态：-1废弃产品，0待审核,1已审核,
                qrCodeLocation  用于生成二维码的包装信息Id,
                deliveryTimeSpan  交付期限,
                product_weight  最小单位重量,
                product_volume  最小单位体积,
                purchasing_price  最小单位采购价,
                remark  备注,
                createdOn  创建时间-框架生成,
                createdBy  创建者-框架生成,
                modifiedOn  最后修改日期-框架生成,
                modifiedBy  最后修改者-框架生成,
                syncedWithLC 已经更新到财务系统,
                invoice_category_code  税收分类编码（G3开票软件使用）,
                tax_rate  税率,
                rate_id  税率ID,
                invoice_extra_rate  COMMENT 开票额外费率,
                is_new  是否为新品，1新品，0上过架,
                min_order_quantity  向供应商采购时的最小起订量,
                draft_status  草稿状态:0,审核通过:100,
                check_status  提交申请审批状态:0,待审批.1,审批通过,2未通过,
                owner_id  属主ID（例如仓ID和店铺ID，默认1，表示锐锢,2:崔国荣）,
                after_sale_state  售后类型:1无售后，2无退货，3无换货,
                first_online  首次上线时间,
                last_offline  最后一次下线时间,
                warehouse_updated  仓库是否更新体积重量,
                w_update_time  仓库校准时间,
                product_vm  1个最小单位的该商品附带赠送元宝数量,
                can_use_vm  是否可用元宝,
                can_presell  是否可预售,
                source  来源，a=锐锢自营 b=工厂直营 c=品牌商品,
                suit_store  适合售卖店铺,
                product_level  商品等级,
                product_point  产品亮点，显示在列表详情,
                similar_name  用来构建显示名称,
                model_name  用来构建显示名称：参数标记,
                standard_name  用来构建显示名称：标准名称,
                is_platform  是否为平台商品,
                is_consignment  是否寄售（非启用入驻宝标记）
            </pre>
        </div>
        <div id="ruigu_supplier">
            <h3>ruigu_supplier - 供应商表</h3>
            <pre>
                SupplierId 自增id,
                CompanyName  公司名称,
                type  供应商类型：1生产加工，2经销批发, 3寄售,
                company_another_name  公司别名,
                CompanyEmail  公司邮箱,
                CompanyRepresentative  公司代表,
                CompanyRepresentativeLandline  公司座机,
                CompanyRepresentativeMobile  公司联系人移动电话,
                order_time  下单时间,
                createdBy  创建者,
                createdOn  创建时间-CRM生成,
                SupplierCode  供应商编码,
                CompanyDescription  公司描述,
                Active  是否启用,
                company_fax  传真,
                developer_name  品牌开发人,
                zip_code  邮编,
                web_site  网址,
                tax_rate_no  税率编号,
                account_bank  开户行,
                pay_company_name 支付公司名称,
                bank_account 开户行账号,
                weight_unit  重量单位,
                product_interactively  产品交互地,
                opening_permit  开户许可证,
                business_regist_number  营业执照注册号,
                taxpayer_identification_number  纳税人识别号,
                currency  币种,
                management_system_certification  管理体系认证,
                general_taxpayer_code  一般纳税人编码,
                brand_name   商标名称,
                remark   备注,
                company_adress  公司地址,
                organization_code  组织机构代码,
                supplies  供应产品,
                accessory_rate  配件额度比例,
                status  -1：已废弃；0：待审核；1：审核通过；2：审核未通过,
                is_cash  1支持现金支付,
                is_draft  0表示草稿，1表示(正规数据或待审核数据),
                delivery_pay_type  运费付款方式：1供应商付款， 2.仓库到付,
                delivery_span  交货周期,
                wechat_code  微信号,
                alipay_code  支付宝账号
            </pre>
        </div>
        <div id="ruigu_product_weighted_cost_price">
            <h3>ruigu_product_weighted_cost_price - 商品每日加权平均价记录表</h3>
            <pre>
                product_code  COMMENT 商品编码,
                warehouse_code  COMMENT 仓库,
                weighted_price  加权平均价格,
                created_time  创建时间,
                source_id  来源的record表ID
            </pre>
        </div>
    </body>
</html>