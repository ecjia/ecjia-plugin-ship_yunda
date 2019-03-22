<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');

return array(
    'shipping_code' => 'ship_yunda',
	'insure' 		=> '3%',		/* 支持保价 */
	'cod' 			=> true, 		/* 配送方式是否支持货到付款 */
    'print_support' => true,
	'print_model'	=> 2,			/* 模式编辑器 */
	'print_bg'		=> 'images/dly_yunda.jpg',			/* 打印单背景 */
	'config_lable'	=> 
    't_shop_province,shop_province,116,30,296.55,117.2,b_shop_province||,||t_customer_province,customer_province,114,32,649.95,114.3,b_customer_province||,||t_shop_address,shop_address,260,57,151.75,152.05,b_shop_address||,||t_shop_name,shop_name,259,28,152.65,212.4,b_shop_name||,||t_shop_tel,shop_tel,131,37,138.65,246.5,b_shop_tel||,||t_customer_post,customer_post,104,39,659.2,242.2,b_customer_post||,||t_customer_tel,customer_tel,158,22,461.9,241.9,b_customer_tel||,||t_customer_mobel,customer_mobel,159,21,463.25,265.4,b_customer_mobel||,||t_customer_name,customer_name,109,32,498.9,115.8,b_customer_name||,||t_customer_address,customer_address,264,58,499.6,150.1,b_customer_address||,||t_months,months,35,23,135.85,392.8,b_months||,||t_day,day,24,23,180.1,392.8,b_day||,||',
    
	'forms' => array(
			array('name' => 'fee_compute_mode', 'type' => 'radiobox', 'value' => 'by_weight'), /* 费用计算方式  */
			array('name' => 'item_fee',      'value' => 15),    /* 单件商品配送的价格 */
			array('name' => 'base_fee',      'value' => 10),    /* 1000克以内的价格 */
			array('name' => 'step_fee',      'value' => 5),    /* 续重每1000克增加的价格 */
			array('name' => 'free_money', 'type' => 'text', 'value' => 0), /* 免费额度  */
			array('name' => 'pay_fee', 'type' => 'text', 'value' => 0), /* 货到付款支付费用  */
	),

    'dynamic_option' => array(
        'item_fee' 		            => __('单件商品费用：', 'ship_yunda'),
        'base_fee' 		            => __('首重费用：', 'ship_yunda'),
        'step_fee' 		            => __('续重每1000克或其零数的费用：', 'ship_yunda'),
        'pay_fee'                   => __('货到付款支付费用：', 'ship_yunda'),
        'free_money'                => __('免费额度：', 'ship_yunda'),
        'fee_compute_mode'          => __('费用计算方式：', 'ship_yunda'),
        'fee_compute_mode_range'    => array(
            'by_weight' => __('按重量', 'ship_yunda'),
            'by_number' => __('按件数', 'ship_yunda')
        ),
    ),

    'print_option' => array(
        /* 快递单部分 */
        'lable_select_notice' => __('--选择插入标签--', 'ship_yunda'),

        'lable_box' => array(
        	'shop_name'             => __('网店-名称', 'ship_yunda'),
        	'shop_tel'              => __('网店-联系电话', 'ship_yunda'),
            'shop_country'          => __('网店-国家', 'ship_yunda'),
            'shop_province'         => __('网店-省份', 'ship_yunda'),
            'shop_city'             => __('网店-城市', 'ship_yunda'),
            'shop_district'         => __('网店-区/县', 'ship_yunda'),
        	'shop_street'         	=> __('网店-街道', 'ship_yunda'),
            'shop_address'          => __('网店-地址', 'ship_yunda'),
        		
        	'customer_name'         => __('收件人-姓名', 'ship_yunda'),
        	'customer_tel'          => __('收件人-电话', 'ship_yunda'),
        	'customer_mobel'        => __('收件人-手机', 'ship_yunda'),
        	'customer_post'         => __('收件人-邮编', 'ship_yunda'),
            'customer_country'      => __('收件人-国家', 'ship_yunda'),
            'customer_province'     => __('收件人-省份', 'ship_yunda'),
            'customer_city'         => __('收件人-城市', 'ship_yunda'),
            'customer_district'     => __('收件人-区/县', 'ship_yunda'),
        	'customer_street'     	=> __('收件人-街道', 'ship_yunda'),
            'customer_address'      => __('收件人-详细地址', 'ship_yunda'),
           
            'year'                  => __('年-当日日期', 'ship_yunda'),
            'months'                => __('月-当日日期', 'ship_yunda'),
            'day'                   => __('日-当日日期', 'ship_yunda'),
        		
            'order_no'              => __('订单号-订单', 'ship_yunda'),
            'order_postscript'      => __('备注-订单', 'ship_yunda'),
            'order_best_time'       => __('送货时间-订单', 'ship_yunda'),
        		
            'pigeon'                => __('√-对号', 'ship_yunda'),
            //'custom_content' => '自定义内容',
        ),

        //模板文件
        'shipping_print' 		=> __DIR__ . '/templates/shipping_print.lbi.php',
    ),
);

// end