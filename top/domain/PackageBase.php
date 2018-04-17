<?php

/**
 * 包基本信息
 * @author auto create
 */
class PackageBase
{
	
	/** 
	 * 如果是宝贝分账，即billType为2，则必须填写宝贝分账模板 (key-value 格式, 以 ; 分隔)
	 **/
	public $account_to_bill_map_str;
	
	/** 
	 * 包分账类型    0：不分账，1：门店分账，2：宝贝分账，3：账号分账。
	 **/
	public $bill_type;
	
	/** 
	 * 系统自动生成，传入无效
	 **/
	public $bill_version;
	
	/** 
	 * 核销码商id
	 **/
	public $consume_merchant_id;
	
	/** 
	 * 核销码商名字
	 **/
	public $consume_merchant_name;
	
	/** 
	 * 是否关联门店：0:不关联，1:关联
	 **/
	public $has_pos;
	
	/** 
	 * 是否核销放行   0：不核销放行，1：核销放行
	 **/
	public $is_consume_pass;
	
	/** 
	 * 是否支持身份证核销：0:不支持，1:支持
	 **/
	public $is_id_card;
	
	/** 
	 * 是否支持子账号核销：0不支持，1支持
	 **/
	public $is_subaccount;
	
	/** 
	 * 备注
	 **/
	public $memo;
	
	/** 
	 * 系统自动生成，传入无效
	 **/
	public $package_id;
	
	/** 
	 * 包名
	 **/
	public $package_name;
	
	/** 
	 * 卖家ID
	 **/
	public $seller_id;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 发码方   0：淘宝，码商userId：码商，poolId：码池
	 **/
	public $send_id;
	
	/** 
	 * 发码码商名字
	 **/
	public $send_merchant_name;
	
	/** 
	 * 发码类型 0 不发码，1 淘宝发码， 2 信任卖家发码， 3 码商发码， 4 码库发码
	 **/
	public $send_type;
	
	/** 
	 * 系统自动生成，传入无效
	 **/
	public $version;	
}
?>