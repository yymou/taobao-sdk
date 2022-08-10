<?php

/**
 * 修改模板的入参
 * @author auto create
 */
class TopModifySmsTemplateRequest
{
	
	/** 
	 * 使用场景说明，可以修改
	 **/
	public $remark;
	
	/** 
	 * 不能修改
	 **/
	public $template_code;
	
	/** 
	 * 模板内容，占位符用${}标识，可以修改
	 **/
	public $template_content;
	
	/** 
	 * 模板名称，可以修改
	 **/
	public $template_name;
	
	/** 
	 * 不能修改
	 **/
	public $template_type;	
}
?>