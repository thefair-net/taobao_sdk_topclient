<?php

/**
 * 电子凭证码
 * @author auto create
 */
class EticketCode
{
	
	/** 
	 * 电子凭证码
	 **/
	public $code;
	
	/** 
	 * 可用数量
	 **/
	public $num;
	
	/** 
	 * 订单ID
	 **/
	public $order_id;
	
	/** 
	 * 二维码的图片地址
	 **/
	public $qrcode_url;
	
	/** 
	 * 码状态
	 **/
	public $status;	
}
?>