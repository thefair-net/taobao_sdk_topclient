<?php
/**
 * TOP API: taobao.eticket.merchant.ma.reverse request
 * 
 * @author auto create
 * @since 1.0, 2017.03.07
 */
class EticketMerchantMaReverseRequest
{
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 码值
	 **/
	private $code;
	
	/** 
	 * 业务id（订单号）
	 **/
	private $outerId;
	
	/** 
	 * 机具编号，如果核销时有则必传
	 **/
	private $posId;
	
	/** 
	 * 冲正份数，需要与核销份数一致
	 **/
	private $reverseNum;
	
	/** 
	 * 需要冲正的核销序列号
	 **/
	private $serialNum;
	
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

	public function setCode($code)
	{
		$this->code = $code;
		$this->apiParas["code"] = $code;
	}

	public function getCode()
	{
		return $this->code;
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

	public function setPosId($posId)
	{
		$this->posId = $posId;
		$this->apiParas["pos_id"] = $posId;
	}

	public function getPosId()
	{
		return $this->posId;
	}

	public function setReverseNum($reverseNum)
	{
		$this->reverseNum = $reverseNum;
		$this->apiParas["reverse_num"] = $reverseNum;
	}

	public function getReverseNum()
	{
		return $this->reverseNum;
	}

	public function setSerialNum($serialNum)
	{
		$this->serialNum = $serialNum;
		$this->apiParas["serial_num"] = $serialNum;
	}

	public function getSerialNum()
	{
		return $this->serialNum;
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
		return "taobao.eticket.merchant.ma.reverse";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->reverseNum,"reverseNum");
		RequestCheckUtil::checkNotNull($this->serialNum,"serialNum");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
