<?php
/**
 * TOP API: taobao.vmarket.eticket.flow.resend request
 * 
 * @author auto create
 * @since 1.0, 2016.02.26
 */
class VmarketEticketFlowResendRequest
{
	/** 
	 * 业务类型值，可联系淘宝业务运营取得具体值
	 **/
	private $bizType;
	
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
		return "taobao.vmarket.eticket.flow.resend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->outerId,"outerId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
