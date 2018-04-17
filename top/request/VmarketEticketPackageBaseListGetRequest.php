<?php
/**
 * TOP API: taobao.vmarket.eticket.package.base.list.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.21
 */
class VmarketEticketPackageBaseListGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.vmarket.eticket.package.base.list.get";
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
