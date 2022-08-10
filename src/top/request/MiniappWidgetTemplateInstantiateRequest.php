<?php
/**
 * TOP API: taobao.miniapp.widget.template.instantiate request
 * 
 * @author auto create
 * @since 1.0, 2022.01.19
 */
class MiniappWidgetTemplateInstantiateRequest
{
	/** 
	 * 实例化数据
	 **/
	private $paramMiniAppInstantiateTemplateAppSimpleRequest;
	
	private $apiParas = array();
	
	public function setParamMiniAppInstantiateTemplateAppSimpleRequest($paramMiniAppInstantiateTemplateAppSimpleRequest)
	{
		$this->paramMiniAppInstantiateTemplateAppSimpleRequest = $paramMiniAppInstantiateTemplateAppSimpleRequest;
		$this->apiParas["param_mini_app_instantiate_template_app_simple_request"] = $paramMiniAppInstantiateTemplateAppSimpleRequest;
	}

	public function getParamMiniAppInstantiateTemplateAppSimpleRequest()
	{
		return $this->paramMiniAppInstantiateTemplateAppSimpleRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.miniapp.widget.template.instantiate";
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
