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
                <a href="#ruigu_supplier" class="black">
                    ruigu_supplier -------- 供应商表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_supplier_purchasing_order" class="black">
                    ruigu_supplier_purchasing_order -------- 采购单表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_supplier_purchasing_order_item" class="black">
                    ruigu_supplier_purchasing_order_item -------- 采购单明细
                </a>
            </h3>
            <hr><br/>
            <h3>
                <a href="#think_shop" class="black">
                    think_shop -------- 商品表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_member_order" class="black">
                    ruigu_member_order -------- 销售订单表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_member_order_shop" class="black">
                    ruigu_member_order_shop -------- 销售订单明细表
                </a>
            </h3>
            <hr><br/>
            <h3>
                <a href="#wyz_sale_member_info" class="black">
                    wyz_sale_member_info -------- 店铺表
                </a>
            </h3>
            <h3>
                <a href="#think_member" class="black">
                    think_member -------- 网站会员表
                </a>
            </h3>
            <hr><br/>
            <h3>
                <a href="#ruigu_product_instock_detail" class="black">
                    ruigu_product_instock_detail -------- 商品入库明细表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_product_outstock_detail" class="black">
                    ruigu_product_outstock_detail -------- 商品出库明细表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_dealer_stock_log" class="black">
                    ruigu_dealer_stock_log -------- 商品库存日志表
                </a>
            </h3>
            <hr><br/>
            <h3>
                <a href="#ruigu_supplier_return_order" class="black">
                    ruigu_supplier_return_order -------- 采购退换货表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_supplier_return_order_item" class="black">
                    ruigu_supplier_return_order_item -------- 采购退换货明细
                </a>
            </h3>
            <h3>
                <a href="#ruigu_aftersales" class="black">
                    ruigu_aftersales -------- 售后表（退换修）
                </a>
            </h3>
            <h3>
                <a href="#ruigu_aftersales_shop" class="black">
                    ruigu_aftersales_shop -------- 售后商品表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_delivery_reject_detail" class="black">
                    ruigu_delivery_reject_detail -------- 送货拒收明细表
                </a>
            </h3>
            <h3>
                <a href="#think_refund" class="black">
                    think_refund -------- 退款单表
                </a>
            </h3>
            <hr><br/>
            <h3>
                <a href="#ruigu_supplier_invoice" class="black">
                    ruigu_supplier_invoice -------- 供应商发票表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_supplier_invoice_detail" class="black">
                    ruigu_supplier_invoice_detail -------- 供应商发票明细表
                </a>
            </h3>
            
            <h3>
                <a href="#ruigu_invoice_apply" class="black">
                    ruigu_invoice_apply -------- 开票申请表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_invoice_apply_detail" class="black">
                    ruigu_invoice_apply_detail -------- 开票申请详情表
                </a>
            </h3>
            <hr><br/>
            <h3>
                <a href="#think_member_sparemoney_details" class="black">
                    think_member_sparemoney_details -------- 余额流水记录表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_intent_group" class="black">
                    ruigu_intent_group -------- 销售组表
                </a>
            </h3>
            <h3>
                <a href="#ruigu_product_weighted_cost_price" class="black">
                    ruigu_product_weighted_cost_price -------- 商品每日加权平均价记录表
                </a>
            </h3> 
        </div>
        <img src="{{ asset('img/london.jpg') }}" style=width:100%>
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
        <div id="ruigu_supplier_purchasing_order">
            <h3>ruigu_supplier_purchasing_order - 采购单表</h3>
            <pre>
                order_type  订单类型：1采购订单，3货物清单,
                supplier_id  供应商Id,
                supplier_name 供应商名称,
                order_number  订单编号,
                financial_confirmed  财务确认：没确认值为0，确认值为1,
                financial_confirm_user  财务确认人,
                financial_confirm_time  财务确认时间,
                order_status  订单状态-2-取消中,-1-取消，0-未处理，1-采购确认中，2-采购已确认，5-入库通知已发，6-正在入库中,7-全部入库，8-完成,
                is_edit  1-编辑中，不能进行其他操作,
                type_freight  1-供应商付 2-仓库到货付,
                pay_freight  运费,
                payment_method_id  付款方式ID,
                old_payment_method_info  付款方式信息,
                payment_id  付款信息ID,
                brand_developer  品牌开发人,
                total_amount  订单总额,
                paid_total_amount  已付总金额,
                return_amount  退货总货值,
                refund_amount  已退款总金额,
                stamp_confirm  合同是否盖章,
                order_tag 0=>订单标记,1=>团购订单,2=>品牌入驻,3=>线下订单,4=>工厂直发,
                order_time  下单时间,
                supplier_proxy_name 供应方代理人,
                supplier_proxy_contact  供应商代理人联系方式,
                demant_contcat  需求方联系方式,
                demand_proxy_name  需方代理人,
                consign_time  采购更改预计到货时间,
                excepted_consign_time  下单时保存预计交货时间,
                actual_consign_time  实际到货时间,
                assembly_preferential_rate  配件优惠金额，供应商是否赠送配件，配件金额占订单总金额数量,
                product_order_type  商品类型,
                quality_damages  质量有问题时的赔偿额度，总金额百分比,
                package_damages  包装不满足需方要求时赔偿,
                consign_location  交货地,
                consignor  货品交付人,
                consignor_contcat  交货人联系方式,
                comments  备注,
                createdBy 
                IsDraft  是否属于草稿信息0草稿，1正规,
                createdOn 
                modifiedBy 
                modifiedOn 
                product_type  商品订单类型：1非配件，2配件,
                purchasingleader  采购负责人,
                pay_status 支付状态。0：未支付；1：已付款；2：部分支付,
                invoiced_total_amount  已开发票金额,
                discount_amount 折扣金额,
                payment_rate  支付比例,
                balance_payment_time,
                discount_reason 折扣原因,
                confirmdate  确认时间,
                confirmby 确认人,
                can_payment,
                discount_rate 整单折扣率,
                excepted_payment_time 预计付款时间,
                syncedWithLC,
                finished 完成状态：0未完成，1已完成,
                from_new ,
                for_dealer_order 直发订单时写入分单ID,
                is_consignment COMMENT 1寄售,
                is_repair 1 维修,
                warehouseId  收货仓库ID,
                delivery_time  发货时间,
                delivery_remark  发货备注,
                receive_remark  收货备注,
                consignment_status  0:创建 1:部分发货 2:已发货 3:商城收货
            </pre>
        </div>
        <div id="ruigu_supplier_purchasing_order_item">
            <h3>ruigu_supplier_purchasing_order_item - 采购单明细</h3>
            <pre>
                parentId,
                parentType,
                productId 产品自增ID,
                productCode 产品编码,
                productName  产品名称,
                minUnitName  最小单位名称,
                minUnitQuantity  采购数量（寄售订购数量）,
                case_count  箱内数量,
                min_unit_purchasing_price  最小计价单位锐锢核算价格,
                min_unit_promotion_price  折扣价格（确认订单时保存）,
                total_purchasing_price  进货总价,
                instock_plan_quantity  已发送入库通知的数量,
                instocked_quantity 已入库数量,
                return_quantity  退货数量,
                red_invoiced_num  所需开具的红冲发票数量,
                invoicedNum  已开通发票的商品个数(不能大于采购数),
                invoiced  是否已开票 0未开发票，1已开发票,2部分开发票,
                invoiceNo  发票号,
                invoiceDate  开票时间,
                quantity  停止使用，即将删除,
                gift_quantity  赠送数量,
                group_quantity  团购数量,
                transfer_quantity  已转移到团购仓的数量,
                tax_rate  下单时税率,
                disabled  即将删除,
                createdBy 
                createdOn 
                modifiedOn
                modifiedBy 
                syncedQtyWithLc
                syncedWithLc
                paymentTime
                financeComments 财务部门审核说明,
                paymentMeth  支付方式,
                delivery_count  发货数量,
                saled_quantity  寄售销售出库数量，未来可能扩展到采购订单,
                has_tax  含税标志 1含税，0不含税
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
        <div id="ruigu_member_order_shop">
            <h3>ruigu_member_order_shop - 销售订单明细表</h3>
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
        <div id="think_member">
            <h3>think_member - 网站会员表</h3>
            <pre>
                site_member  是否审核会员,
                mname  用户名,
                mname_true  会员的昵称,
                password  会员的密码,
                email  会员的邮箱,
                sex 会员的性别,
                birth  会员出生年月日,
                time  会员注册时间,
                last_time 最后访问时间,
                pic  会员头像,
                ip  会员注册IP,
                level  会员等级,
                mobile  会员的手机号码,
                qq  会员的QQ,
                address  会员的地址,
                pid  找回密码的PID,
                emailid  会员验证的EMAIL,
                money  会员的现金余额,
                virtual_money  元宝,
                money_accessory 配件额度,
                gold_ticket  会员的金券余额,
                point  会员的积分余额,
                payclass 支付类型,
                state  会员状态：0正常，1评论黑名单,
                mobile_true  是否验证手机,
                mobile_yzm  手机验证码,
                pictype  头像存储类型：1 app,2 web,
                channel_str  兴趣/职业,
                customer_type  用户类型,
                price_level_part  价格等级；如果customer_type为4，price_level_part为0则对应price_level为4，price_level_part为非0数字（如12）则对应price_level为412,
                associated_id  关联用户id（如RDC对应的dealer_id）,
                token  登录令牌,
                is_lock  是否锁定：0否,1是,
                syncWithLc  是否与财务同步,
                device_token  手机端设备device_token,
                auth_status  实名状态（二进制，从高到低：身份证，营业执照，手机，店铺，邮箱）,
                wx_unionid 微信登陆unionid,
                qq_openid  qq登陆openid,
                weibo_openid  微博登陆openid,
                wechat_openid  公众平台用户标识,
                web_token  web端token,
                mina_openid  微信小程序openid,
                credit_score  信用分
            </pre>
        </div>
        <div id="ruigu_product_instock_detail">
            <h3>ruigu_product_instock_detail - 商品入库明细表</h3>
            <pre>
                consign_order  入库单号,
                related_order_no  关连单号,
                order_type  订单类型,
                warehouse_id  入库仓库编码,
                product_code  商品编码,
                product_id  商品ID,
                quantity  入库数量,
                instock_time  入库时间,
                remark  备注,
                synced  财务系统同步标记0未操作，1.已同步，2同步不报错，3.已处理无需同步，4.未找到同步方案
            </pre>
        </div>
        <div id="ruigu_product_outstock_detail">
            <h3>ruigu_product_outstock_detail - 商品出库明细表</h3>
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
        <div id="ruigu_dealer_stock_log">
            <h3>ruigu_dealer_stock_log - 商品库存日志表</h3>
            <pre>
                dealer_id  仓库ID,
                product_id  商品ID,
                stock_type  库存类型：1订单产生 2订单付款 3取消订单 4售后退换 5正常入库 6ERP修改库存 7Rdc换修 8下意向单 9取消或关闭意向单 10意向单商品减少 11意向单商品增加 13团购库存调整 20团购锁定库存 21团购释放库存,
                virtual_quantity  虚拟库存,
                real_quantity  实际库存,
                acumulated_quantity  累计库存,
                relevance_number  关联单号,
                timestamp  时间
            </pre>
        </div>
        <div id="ruigu_supplier_return_order">
            <h3>ruigu_supplier_return_order - 采购退换货表</h3>
            <pre>
                supplier_id  供应商Id,
                order_number  订单编号,
                releted_ordernumber,
                total_amount  实际退款金额（折扣后金额）,
                orderType  1换货订单，2退货订单,
                order_status  订单状态：-1已取消,1新建，2采购已确认，3.出库通知已发，4已出库,5入库通知已发，6,已入库,7已收货，8已完成,
                dealer_id  出库时选择的仓库ID,
                is_edit  1-编辑中,
                financial_confirmed  财务确认：没确认值为0，确认值为1,
                order_time  下单时间,
                supplier_proxy_name  供应商代理人,
                supplier_proxy_contact  供应商代理人联系方式,
                demant_contact  需求方联系方式,
                demand_proxy_name  需方代理人,
                sm_consign_time  实际出库时间,
                consign_time  实际到货时间,
                excepted_consign_time  预计交货时间,
                return_time,
                consign_location 交货地,
                consignor  货品交付人,
                consignor_contcat  交货人联系方式,
                pay_status  支付状态。1：未支付；2：部分支付；3：已付款,
                comments  备注,
                createdBy 
                createdOn
                modifiedBy
                modifiedOn
                is_consignment  1寄售,
                logistics_mode  物流方式 : 0 : 自提; 1:第三方物流,
                sponsor  发起方(1:商城发起 2:供应商发起),
                return_reason  退货理由,
                way_bill  运单号,
                barterType  1换货入库，2换货出,
                returnType  1退回，2采购退回,
                img_id  发货图片,
                is_temporary  1:换货入库暂存,
                barterToReturn  1换转退
            </pre>
        </div>
        <div id="ruigu_supplier_return_order_item">
            <h3>ruigu_supplier_return_order_item - 采购退换货明细</h3>
            <pre>
                parentId
                parentType
                productCode 产品编码,
                productName  产品名称,
                minunitQuantity  退货单数量,
                min_purchasing_price,
                minUnitName 最小单位名称,
                outstock_plan_quantity  已计划出库数量,
                outstocked_quantity  已出库数量,
                instock_plan_quantity  已发送入库通知的数量,
                instocked_quantity  已入库数量,
                case_count  装箱数量,
                createdBy 
                createdOn 
                modifiedOn
                modifiedBy
                syncedWithLc 是否与财务系统同步过,
                barterToReturnNum  换转退数量
            </pre>
        </div>
        <div id="ruigu_aftersales">
            <h3>ruigu_aftersales - 售后表（退换修）</h3>
            <pre>
                type  类型：1退 2换 3修,
                repair_type 维修类型：0常规维修，1只换配件的维修,
                refund_only  是否仅退款,
                aftersales_no  售后单号,
                dealer_id  维修仓ID,
                dealer_id_org  对应订单管理仓ID,
                is_pick_up  是否上门取货,
                is_pick_down  是否上门送货,
                status  售后状态:0审核中，1退货中/换货中/维修中，2已完成，-1关闭，-2失败,
                verify_status  审核状态：0未审核，9审核通过,
                receive_status  仓管是否已接收,
                recovery_status  是否回收入库 0未生成 1正在入库 2已入库,
                recovery_apply_time  回收入库时间,
                recovery_type  回收类型：0未回收，1正常回收，2破损回收,
                stock_status  是否入临时库,
                check_status  是否通过技术员的检查：0否1是,
                repair_allowed  是否锁定配件单,
                repair_allow_pay  维修费用是否征得用户同意:1同意 0未同意,
                repair_finish  技术是否完成维修,
                repair_out  维修商品是否出库,
                repair_out_time  维修商品出库时间,
                user_id  客户ID,
                lost_from_aftersales  丢失售后单号（分单造成）,
                system_order_no  系统订单号,
                refund_total_money  退款商品总金额,
                refund_delivery_money  退款运费总金额,
                refund_money  退款总金额,
                refund_money_true  实退总金额,
                refund_money_remark  退款备注,
                refund_status  退款状态 0未生成 1生成单财务未退款 2财务退款,
                refund_time  退款时间,
                repair_total_money  对外维修消耗配件费用,
                repair_total_money_true  真实维修消耗配件费用,
                repair_service_money  对外维修服务费用,
                repair_discount  COMMENT 维修折扣,
                repair_money  对外维修总费用,
                repair_paid_money  已支付维修费用,
                repair_pay_status  维修费支付状态 0无需支付 1待支付 2已支付 3货到后支付,
                contact  联系人,
                contact_mobile  联系人手机号,
                contact_address  联系人地址,
                contact_province_code  省Code,
                contact_region_code  市code,
                contact_city_code  区Code,
                from_bill_no  客户邮寄到仓库时填写的物流运单号,
                to_bill_no  仓库邮寄到客户时填写的物流运单号,
                storage_from_bill_no  厂家邮寄到仓库时填写的物流运单号,
                storage_to_bill_no  仓库邮寄到厂家时填写的物流运单号,
                diff_paid_money  补差价金额,
                device_number  设备编号,
                is_unnormal  是否设置为异常,
                apply_resaon  申请原因，在审核时填写,
                is_free  保内1，保外0,
                is_repair_again  是否多次维修,
                created  创建时间,
                modified  更新时间,
                syncedWithLc  同步至财务系统,
                back_vm  扣除用户金币值
            </pre>
        </div>
        <div id="ruigu_aftersales_shop">
            <h3>ruigu_aftersales_shop - 售后商品表</h3>
            <pre>
                aftersales_no 售后单号,
                product_id  商品ID,
                count  售后数量（申请单位）,
                count_min  售后数量（最小单位）,
                count_org  原始售后数量（申请单位）,
                count_min_org  原始售后数量（最小单位）,
                unit_name  单位,
                weight  重量,
                volume  体积,
                imgs  情况说明图片路径ID（多图逗号隔开）,
                description  情况描述,
                imgs_fb  技术情况说明图片路径ID（多图逗号隔开）,
                description_fb  技术情况描述,
                merge_uuid  合并uuid,
                repair_reason  维修责任方：0锐锢 1客户,
                repair_storage  维修是否处于返仓中,
                created  创建时间,
                modified  更新时间
            </pre>
        </div>
        <div id="ruigu_delivery_reject_detail">
            <h3>ruigu_delivery_reject_detail - 送货拒收明细表</h3>
            <pre>
                delivery_no  送货单,
                waybill_no  装车单,
                related_no  关联单号,
                product_code  商品编码,
                product_id  商品id,
                quantity  操作数量,
                back_qty  退回数量,取消收货时会改变，先进先出冲抵，不可以直接使用这个计算退回数量，此字段用来辅助计算,
                type  操作类型1reject, 2recive, 3cancel,
                op_time  操作时间,
                remark  备注，用来区分去取消收货操作
            </pre>
        </div>
        <div id="think_refund">
            <h3>think_refund - 退款单表</h3>
            <pre>
                return_id  售后记录ID,
                order_id  订单id,
                refund_fee  退款数额,
                refund_money  应退金额,
                refund_pay_type  退款支付类型,
                old_pay_type  原支付类型,
                refund_no  退款流水号,
                reason 退款原因,
                result  退款结果：-1已取消,0未退款,1已退款,2财务确认,
                refund_desc  差异原因(退款税点，金币描述),
                time  时间戳,
                syncedWithLc  是否与财务同步,
                confirmed_user  确认退款的操作者,
                confirmed_comment  确认退款时间（是开票订单，系统记录此值）,
                refund_time  财务退款时间,
                is_offline  是否通过线下方式处理退款，0否1是，线下时将不会实际退款,
                office_remark  线下处理备注,
                pre_check_result  预审核结果 0通过 1有异议,
                pre_check_remark  预审核备注
            </pre>
        </div>
        <div id="ruigu_supplier_invoice">
            <h3>ruigu_supplier_invoice - 供应商发票表</h3>
            <pre>
                invoice_number 发票号(必填),
                supplier_id 供应商编号,
                order_number 供应商采购订单号,
                invoice_type 0普通发票，1红冲发票,
                the_billing_amount 本次开票金额,
                taxpayer_number 纳税人识别号,
                bank_name 开户行,
                bank_account 开户账号,
                invoice_date 开票日期,
                enabled 发票状态 0创建，1采购确认，2财务确认，-1取消,10发起审核,
                is_edit 锁,
                comment 备注,
                purchasing_confirm 采购确认时间,
                financial_confirm 财务确认时间,
                createdOn 创建日期,
                createdBy 创建者,
                modifiedOn 更改日期,
                modifiedBy 更改者,
                draft_status,
                check_status,
                is_consignment 寄售标志0 采购，1寄售
            </pre>
        </div>
        <div id="ruigu_supplier_invoice_detail">
            <h3>ruigu_supplier_invoice_detail - 供应商发票明细表</h3>
            <pre>
                parentId 父级ID,
                product_name,
                product_code,
                spec 规格型号,
                unit_name 单位,
                quantity 采购数量,
                unit_price 无税单价,
                total_money 总金额（含税,
                tax_rate 税率,
                paid_tax 税额,
                parentType 父级类型,
                tax_price 含税单价
            </pre>
        </div>
        <div id="ruigu_invoice_apply">
            <h3>ruigu_invoice_apply - 开票申请表</h3>
            <pre>
                apply_no  开票申请号，BA开头,
                total_money  开票总金额,
                user_id  订单对应用户ID,
                creator_id  创建者ID,
                forced_invoice  是否为居间商品开票，0否1是,
                invoice_type  开票类型：1普票，2增票,
                invoice_id  发票ID，ruigu_member_invoice表ID,
                invoice_title  发票抬头,
                invoice_number  纳税人识别码,
                registered_address  注册地址,
                registered_mobile  注册电话,
                bank_name  开户行,
                bank_account 银行账户,
                status 状态：0已申请未通过，1已通过未受理，2、已受理未完成，3已完成，4已发快递 -1已关闭，-2已驳回,
                invoice_code  发票号,
                invoice_time  开票时间,
                contact_name  发票收货人,
                contact_mobile  发票收货人手机,
                contact_address  发票收货人地址,
                contact_province_code  收货地址省编码,
                contact_region_code  收货地址市编码,
                contact_city_code  收货地址区编码,
                pay_money  应付,
                pay_money_real  实付,
                remark  备注,
                created  创建时间,
                modified  更新时间,
                express_name 物流公司名称,
                express_code 物流公司对应编码（调用接口用）,
                express_no 物流运单编号
            </pre>
        </div>
        <div id="ruigu_invoice_apply_detail">
            <h3>ruigu_invoice_apply_detail - 开票申请详情表</h3>
            <pre>
                apply_no  开票申请号，BA开头,
                order_no  订单号,
                product_id  商品ID,
                count  开票数量（购买数量）,
                count_min  开票数量（最小数量）,
                unit_name  购买单位,
                unit_name_min  最小单位,
                price  最终开票单价（折后之后追加居间开票分摊金额）,
                price_min  最终开票单价min（折后之后追加居间开票分摊金额）,
                price_promotion  购买单价（折后）,
                price_min_promotion  购买单价min（折后）,
                invoice_extra_rate  开票额外费率,
                created  创建时间,
                modified  更新时间,
                syncwithlc  是否与财务系统同步，0未同步，1一同步，2同步出错,
                sync_remark  同步备注
            </pre>
        </div>
        <div id="think_member_sparemoney_details">
            <h3>think_member_sparemoney_details - 余额流水记录表</h3>
            <pre>
                user_id  用户ID,
                createTime  创建时间,
                money_turnovers  交易额度,
                money_total  剩余金额,
                money_type  余额类型: 1现金余额 2金券余额 3配件余额 4RDC保证金，5开票额度，6元宝,
                remark  备注,
                action  动作,
                relate_no  关联ID,
                other_no  另外关联ID
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
        <div id="ruigu_product_weighted_cost_price">
            <h3>ruigu_product_weighted_cost_price - 商品每日加权平均价记录表</h3>
            <pre>
                product_code  商品编码,
                warehouse_code  仓库,
                weighted_price  加权平均价格,
                created_time  创建时间,
                source_id  来源的record表ID
            </pre>
        </div>
    </body>
</html>