<?php
/**
 * TOP API: taobao.eticket.merchant.tbma.get request
 * 
 * @author auto create
 * @since 1.0, 2016.12.29
 */
class EticketMerchantTbmaGetRequest
{
	/** 
	 * 查询淘宝码请求
	 **/
	private $queryTbMaCallbackReq;
	
	private $apiParas = array();
	
	public function setQueryTbMaCallbackReq($queryTbMaCallbackReq)
	{
		$this->queryTbMaCallbackReq = $queryTbMaCallbackReq;
		$this->apiParas["query_tb_ma_callback_req"] = $queryTbMaCallbackReq;
	}

	public function getQueryTbMaCallbackReq()
	{
		return $this->queryTbMaCallbackReq;
	}

	public function getApiMethodName()
	{
		return "taobao.eticket.merchant.tbma.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
