<?php
/**
 * TOP API: taobao.eticket.merchant.ma.resend request
 * 
 * @author auto create
 * @since 1.0, 2017.03.07
 */
class EticketMerchantMaResendRequest
{
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 待重发的码列表
	 **/
	private $isvMaList;
	
	/** 
	 * 业务id（订单号）
	 **/
	private $outerId;
	
	/** 
	 * 需要跟发码通知获取到的参数一致
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

	public function setIsvMaList($isvMaList)
	{
		$this->isvMaList = $isvMaList;
		$this->apiParas["isv_ma_list"] = $isvMaList;
	}

	public function getIsvMaList()
	{
		return $this->isvMaList;
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
		return "taobao.eticket.merchant.ma.resend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
