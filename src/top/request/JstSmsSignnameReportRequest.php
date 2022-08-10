<?php
/**
 * TOP API: taobao.jst.sms.signname.report request
 * 
 * @author auto create
 * @since 1.0, 2021.12.14
 */
class JstSmsSignnameReportRequest
{
	/** 
	 * 上传签名入参
	 **/
	private $smsSignNameRequest;
	
	private $apiParas = array();
	
	public function setSmsSignNameRequest($smsSignNameRequest)
	{
		$this->smsSignNameRequest = $smsSignNameRequest;
		$this->apiParas["sms_sign_name_request"] = $smsSignNameRequest;
	}

	public function getSmsSignNameRequest()
	{
		return $this->smsSignNameRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.signname.report";
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
