<?php
/**
 * TOP API: taobao.jst.sms.template.modify request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsTemplateModifyRequest
{
	/** 
	 * 修改模板的入参
	 **/
	private $modifySmsTemplateRequest;
	
	private $apiParas = array();
	
	public function setModifySmsTemplateRequest($modifySmsTemplateRequest)
	{
		$this->modifySmsTemplateRequest = $modifySmsTemplateRequest;
		$this->apiParas["modify_sms_template_request"] = $modifySmsTemplateRequest;
	}

	public function getModifySmsTemplateRequest()
	{
		return $this->modifySmsTemplateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.template.modify";
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
