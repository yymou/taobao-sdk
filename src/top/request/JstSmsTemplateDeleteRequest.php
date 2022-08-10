<?php
/**
 * TOP API: taobao.jst.sms.template.delete request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsTemplateDeleteRequest
{
	/** 
	 * 删除模板的入参
	 **/
	private $deleteSmsTemplateRequest;
	
	private $apiParas = array();
	
	public function setDeleteSmsTemplateRequest($deleteSmsTemplateRequest)
	{
		$this->deleteSmsTemplateRequest = $deleteSmsTemplateRequest;
		$this->apiParas["delete_sms_template_request"] = $deleteSmsTemplateRequest;
	}

	public function getDeleteSmsTemplateRequest()
	{
		return $this->deleteSmsTemplateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.template.delete";
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
