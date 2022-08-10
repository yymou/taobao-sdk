<?php
/**
 * TOP API: taobao.jst.sms.signname.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsSignnameDeleteRequest
{
	/** 
	 * 删除签名入参
	 **/
	private $deleteSmsSignRequest;
	
	private $apiParas = array();
	
	public function setDeleteSmsSignRequest($deleteSmsSignRequest)
	{
		$this->deleteSmsSignRequest = $deleteSmsSignRequest;
		$this->apiParas["delete_sms_sign_request"] = $deleteSmsSignRequest;
	}

	public function getDeleteSmsSignRequest()
	{
		return $this->deleteSmsSignRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.signname.delete";
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
