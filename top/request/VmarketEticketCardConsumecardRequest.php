<?php
/**
 * TOP API: taobao.vmarket.eticket.card.consumecard request
 * 
 * @author auto create
 * @since 1.0, 2015.07.17
 */
class VmarketEticketCardConsumecardRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 卡号
	 **/
	private $cardId;
	
	/** 
	 * 卡内等级
	 **/
	private $cardLevel;
	
	/** 
	 * 核销code
	 **/
	private $consumeCode;
	
	/** 
	 * 核销流水号，外部ISV全局唯一
	 **/
	private $consumeSerialNum;
	
	/** 
	 * 核销金额，精确到分，例如1.99元=199
	 **/
	private $consumeValue;
	
	/** 
	 * 操作人id
	 **/
	private $operatorId;
	
	/** 
	 * 核销原因
	 **/
	private $reason;
	
	/** 
	 * 门店id
	 **/
	private $storeId;
	
	/** 
	 * 安全token
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCardId($cardId)
	{
		$this->cardId = $cardId;
		$this->apiParas["card_id"] = $cardId;
	}

	public function getCardId()
	{
		return $this->cardId;
	}

	public function setCardLevel($cardLevel)
	{
		$this->cardLevel = $cardLevel;
		$this->apiParas["card_level"] = $cardLevel;
	}

	public function getCardLevel()
	{
		return $this->cardLevel;
	}

	public function setConsumeCode($consumeCode)
	{
		$this->consumeCode = $consumeCode;
		$this->apiParas["consume_code"] = $consumeCode;
	}

	public function getConsumeCode()
	{
		return $this->consumeCode;
	}

	public function setConsumeSerialNum($consumeSerialNum)
	{
		$this->consumeSerialNum = $consumeSerialNum;
		$this->apiParas["consume_serial_num"] = $consumeSerialNum;
	}

	public function getConsumeSerialNum()
	{
		return $this->consumeSerialNum;
	}

	public function setConsumeValue($consumeValue)
	{
		$this->consumeValue = $consumeValue;
		$this->apiParas["consume_value"] = $consumeValue;
	}

	public function getConsumeValue()
	{
		return $this->consumeValue;
	}

	public function setOperatorId($operatorId)
	{
		$this->operatorId = $operatorId;
		$this->apiParas["operator_id"] = $operatorId;
	}

	public function getOperatorId()
	{
		return $this->operatorId;
	}

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setStoreId($storeId)
	{
		$this->storeId = $storeId;
		$this->apiParas["store_id"] = $storeId;
	}

	public function getStoreId()
	{
		return $this->storeId;
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
		return "taobao.vmarket.eticket.card.consumecard";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->buyerNick,"buyerNick");
		RequestCheckUtil::checkNotNull($this->cardId,"cardId");
		RequestCheckUtil::checkNotNull($this->cardLevel,"cardLevel");
		RequestCheckUtil::checkNotNull($this->consumeSerialNum,"consumeSerialNum");
		RequestCheckUtil::checkNotNull($this->consumeValue,"consumeValue");
		RequestCheckUtil::checkNotNull($this->operatorId,"operatorId");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->token,"token");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
