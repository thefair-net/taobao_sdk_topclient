<?php

/**
 * 需要发送的码列表
 * @author auto create
 */
class IsvMa
{
	
	/** 
	 * 串码码值
	 **/
	public $code;
	
	/** 
	 * 码的可核销份数
	 **/
	public $num;
	
	/** 
	 * 二维码图片文件名。已经申请了上传二维码的码商必填，其它码商无需关心。这个值是taobao.eticket.merchant.img.upload调用后的file_name
	 **/
	public $qr_image;	
}
?>