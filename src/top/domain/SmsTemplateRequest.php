<?php

/**
 * 存量短信模板上报入参
 * @author auto create
 */
class SmsTemplateRequest
{
	
	/** 
	 * 描述信息
	 **/
	public $desc;
	
	/** 
	 * 1-- 普通模板  2--数字短信模板
	 **/
	public $template_class;
	
	/** 
	 * 模板CODE
	 **/
	public $template_code;
	
	/** 
	 * 模板内容
	 **/
	public $template_content;
	
	/** 
	 * 模板名称
	 **/
	public $template_name;
	
	/** 
	 * 0--验证码 1--短信通知 2-- 推广短信 3--国际/港澳台消息
	 **/
	public $template_type;	
}
?>