<?php
/**
 * TOP API: taobao.eticket.merchant.ma.failsend request
 * 
 * @author auto create
 * @since 1.0, 2017.03.07
 */
class EticketMerchantMaFailsendRequest
{
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 业务id（订单号）
	 **/
	private $outerId;
	
	/** 
	 * 错误原因码
	 **/
	private $subCode;
	
	/** 
	 * 错误码描述
	 **/
	private $subMsg;
	
	/** 
	 * 需要与发码通知获取的值一致
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setSubCode($subCode)
	{
		$this->subCode = $subCode;
		$this->apiParas["sub_code"] = $subCode;
	}

	public function getSubCode()
	{
		return $this->subCode;
	}

	public function setSubMsg($subMsg)
	{
		$this->subMsg = $subMsg;
		$this->apiParas["sub_msg"] = $subMsg;
	}

	public function getSubMsg()
	{
		return $this->subMsg;
	}

	public function setToken($token)
	{
		$this->token = $token;
		$this->apiParas["token"] = $token;
	}

	public function getToken()
	{
		return $this->token;
	}

	public function getApiMethodName()
	{
		return "taobao.eticket.merchant.ma.failsend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->subCode,"subCode");
		RequestCheckUtil::checkNotNull($this->subMsg,"subMsg");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
