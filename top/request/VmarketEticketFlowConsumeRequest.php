<?php
/**
 * TOP API: taobao.vmarket.eticket.flow.consume request
 * 
 * @author auto create
 * @since 1.0, 2016.02.26
 */
class VmarketEticketFlowConsumeRequest
{
	/** 
	 * 淘宝业务提供的业务类型值，请联系相关业务运营取得
	 **/
	private $bizType;
	
	/** 
	 * 凭证码
	 **/
	private $code;
	
	/** 
	 * 核销操作人
	 **/
	private $operator;
	
	/** 
	 * 业务单号
	 **/
	private $outerId;
	
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

	public function setOperator($operator)
	{
		$this->operator = $operator;
		$this->apiParas["operator"] = $operator;
	}

	public function getOperator()
	{
		return $this->operator;
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

	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.flow.consume";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->code,"code");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
