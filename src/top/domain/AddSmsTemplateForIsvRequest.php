<?php

/**
 * 申请模板入参
 * @author auto create
 */
class AddSmsTemplateForIsvRequest
{
	
	/** 
	 * 使用场景说明
	 **/
	public $remark;
	
	/** 
	 * 模板内容，占位符用${}标识
	 **/
	public $template_content;
	
	/** 
	 * 上传文件
	 **/
	public $template_infos;
	
	/** 
	 * 模板名称
	 **/
	public $template_name;
	
	/** 
	 * 0--验证码 1--短信通知 2-- 推广短信 3--国际/港澳台消息
	 **/
	public $template_type;
	
	/** 
	 * NORMAL -- 普通模板  DIGITAL--数字短信模板
	 **/
	public $template_type_class;	
}
?>