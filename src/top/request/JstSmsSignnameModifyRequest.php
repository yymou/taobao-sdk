<?php
/**
 * TOP API: taobao.jst.sms.signname.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsSignnameModifyRequest
{
	/** 
	 * 修改签名入参
	 **/
	private $modifySmsSignRequest;
	
	private $apiParas = array();
	
	public function setModifySmsSignRequest($modifySmsSignRequest)
	{
		$this->modifySmsSignRequest = $modifySmsSignRequest;
		$this->apiParas["modify_sms_sign_request"] = $modifySmsSignRequest;
	}

	public function getModifySmsSignRequest()
	{
		return $this->modifySmsSignRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.signname.modify";
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
