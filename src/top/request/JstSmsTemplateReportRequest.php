<?php
/**
 * TOP API: taobao.jst.sms.template.report request
 * 
 * @author auto create
 * @since 1.0, 2021.12.14
 */
class JstSmsTemplateReportRequest
{
	/** 
	 * 存量短信模板上报入参
	 **/
	private $smsTemplateRequest;
	
	private $apiParas = array();
	
	public function setSmsTemplateRequest($smsTemplateRequest)
	{
		$this->smsTemplateRequest = $smsTemplateRequest;
		$this->apiParas["sms_template_request"] = $smsTemplateRequest;
	}

	public function getSmsTemplateRequest()
	{
		return $this->smsTemplateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.template.report";
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
