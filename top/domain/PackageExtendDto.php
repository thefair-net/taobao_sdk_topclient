<?php

/**
 * 包扩展信息
 * @author auto create
 */
class PackageExtendDto
{
	
	/** 
	 * 核销账号列表，（以 ； 分隔）
	 **/
	public $account_list_str;
	
	/** 
	 * 分账模板，（key-value形式，以;分隔）
	 **/
	public $account_to_bill_map_str;
	
	/** 
	 * 由系统自动生成，传入无效
	 **/
	public $id;
	
	/** 
	 * 预约电话
	 **/
	public $obs_tel;
	
	/** 
	 * 包id
	 **/
	public $package_id;
	
	/** 
	 * 卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 门店库id
	 **/
	public $store_id;
	
	/** 
	 * 门店名，跟place私有库中的一致
	 **/
	public $store_name;
	
	/** 
	 * 分店名，跟place私有库中的一致
	 **/
	public $store_sub_name;
	
	/** 
	 * 版本控制
	 **/
	public $version;	
}
?>