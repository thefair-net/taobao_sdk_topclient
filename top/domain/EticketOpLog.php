<?php

/**
 * 电子凭证操作记录
 * @author auto create
 */
class EticketOpLog
{
	
	/** 
	 * 操作金额
	 **/
	public $amount;
	
	/** 
	 * 操作流水号
	 **/
	public $consume_serial_num;
	
	/** 
	 * 手机号码后四位
	 **/
	public $mobile;
	
	/** 
	 * 操作数量
	 **/
	public $num;
	
	/** 
	 * 操作时间
	 **/
	public $op_time;
	
	/** 
	 * 操作类型 1:核销 2:冲正
	 **/
	public $op_type;
	
	/** 
	 * 订单ID
	 **/
	public $order_id;
	
	/** 
	 * 操作员身份ID
	 **/
	public $pos_id;	
}
?>