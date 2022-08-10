<?php
/**
 * TOP API: taobao.jst.sms.signname.create request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsSignnameCreateRequest
{
	/** 
	 * 创建签名入参
	 **/
	private $addSmsSignRequest;
	
	private $apiParas = array();
	
	public function setAddSmsSignRequest($addSmsSignRequest)
	{
		$this->addSmsSignRequest = $addSmsSignRequest;
		$this->apiParas["add_sms_sign_request"] = $addSmsSignRequest;
	}

	public function getAddSmsSignRequest()
	{
		return $this->addSmsSignRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.signname.create";
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
