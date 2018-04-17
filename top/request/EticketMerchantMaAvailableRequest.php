<?php
/**
 * TOP API: taobao.eticket.merchant.ma.available request
 * 
 * @author auto create
 * @since 1.0, 2017.03.08
 */
class EticketMerchantMaAvailableRequest
{
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 需要被核销的码
	 **/
	private $code;
	
	/** 
	 * 核销份数
	 **/
	private $consumeNum;
	
	/** 
	 * 业务id（订单号）
	 **/
	private $outerId;
	
	/** 
	 * 机具编号
	 **/
	private $posId;
	
	/** 
	 * 核销序列号，需要保证唯一
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

	public function setConsumeNum($consumeNum)
	{
		$this->consumeNum = $consumeNum;
		$this->apiParas["consume_num"] = $consumeNum;
	}

	public function getConsumeNum()
	{
		return $this->consumeNum;
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
		return "taobao.eticket.merchant.ma.available";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->consumeNum,"consumeNum");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
