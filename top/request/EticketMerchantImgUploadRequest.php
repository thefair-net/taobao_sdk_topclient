<?php
/**
 * TOP API: taobao.eticket.merchant.img.upload request
 * 
 * @author auto create
 * @since 1.0, 2016.07.01
 */
class EticketMerchantImgUploadRequest
{
	/** 
	 * 二维码图片
	 **/
	private $imgBytes;
	
	private $apiParas = array();
	
	public function setImgBytes($imgBytes)
	{
		$this->imgBytes = $imgBytes;
		$this->apiParas["img_bytes"] = $imgBytes;
	}

	public function getImgBytes()
	{
		return $this->imgBytes;
	}

	public function getApiMethodName()
	{
		return "taobao.eticket.merchant.img.upload";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->imgBytes,"imgBytes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
