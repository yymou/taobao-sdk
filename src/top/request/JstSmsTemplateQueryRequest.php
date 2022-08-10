<?php
/**
 * TOP API: taobao.jst.sms.template.query request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsTemplateQueryRequest
{
	/** 
	 * 查询短信模板的入参
	 **/
	private $querySmsTemplateRequest;
	
	private $apiParas = array();
	
	public function setQuerySmsTemplateRequest($querySmsTemplateRequest)
	{
		$this->querySmsTemplateRequest = $querySmsTemplateRequest;
		$this->apiParas["query_sms_template_request"] = $querySmsTemplateRequest;
	}

	public function getQuerySmsTemplateRequest()
	{
		return $this->querySmsTemplateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.template.query";
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
