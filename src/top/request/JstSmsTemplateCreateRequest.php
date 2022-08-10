<?php
/**
 * TOP API: taobao.jst.sms.template.create request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsTemplateCreateRequest
{
	/** 
	 * 申请模板入参
	 **/
	private $smsTemplateForIsvRequest;
	
	private $apiParas = array();
	
	public function setSmsTemplateForIsvRequest($smsTemplateForIsvRequest)
	{
		$this->smsTemplateForIsvRequest = $smsTemplateForIsvRequest;
		$this->apiParas["sms_template_for_isv_request"] = $smsTemplateForIsvRequest;
	}

	public function getSmsTemplateForIsvRequest()
	{
		return $this->smsTemplateForIsvRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.template.create";
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
