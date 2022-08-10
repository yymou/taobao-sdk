<?php
/**
 * TOP API: taobao.miniapp.widget.template.instance.update request
 * 
 * @author auto create
 * @since 1.0, 2022.01.19
 */
class MiniappWidgetTemplateInstanceUpdateRequest
{
	/** 
	 * 参数信息
	 **/
	private $paramMiniAppInstantiateTemplateAppUpdateRequest;
	
	private $apiParas = array();
	
	public function setParamMiniAppInstantiateTemplateAppUpdateRequest($paramMiniAppInstantiateTemplateAppUpdateRequest)
	{
		$this->paramMiniAppInstantiateTemplateAppUpdateRequest = $paramMiniAppInstantiateTemplateAppUpdateRequest;
		$this->apiParas["param_mini_app_instantiate_template_app_update_request"] = $paramMiniAppInstantiateTemplateAppUpdateRequest;
	}

	public function getParamMiniAppInstantiateTemplateAppUpdateRequest()
	{
		return $this->paramMiniAppInstantiateTemplateAppUpdateRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.miniapp.widget.template.instance.update";
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
