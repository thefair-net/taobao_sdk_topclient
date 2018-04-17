<?php
/**
 * TOP API: taobao.vmarket.eticket.failsend request
 * 
 * @author auto create
 * @since 1.0, 2016.03.06
 */
class VmarketEticketFailsendRequest
{
	/** 
	 * 错误码
	 **/
	private $errorCode;
	
	/** 
	 * 错误信息
	 **/
	private $errorMsg;
	
	/** 
	 * 订单号
	 **/
	private $orderId;
	
	/** 
	 * 发码通知时的token
	 **/
	private $token;
	
	private $apiParas = array();
	
	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		$this->apiParas["error_code"] = $errorCode;
	}

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setErrorMsg($errorMsg)
	{
		$this->errorMsg = $errorMsg;
		$this->apiParas["error_msg"] = $errorMsg;
	}

	public function getErrorMsg()
	{
		return $this->errorMsg;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
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
		return "taobao.vmarket.eticket.failsend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->errorCode,"errorCode");
		RequestCheckUtil::checkNotNull($this->orderId,"orderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
