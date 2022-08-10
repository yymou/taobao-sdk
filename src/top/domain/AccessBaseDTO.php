<?php

/**
 * 返回结果
 * @author auto create
 */
class AccessBaseDTO
{
	
	/** 
	 * 创建时间
	 **/
	public $create_date;
	
	/** 
	 * 审核意见
	 **/
	public $reason;
	
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
	 * 0--待审核  1--通过  2--拒绝
	 **/
	public $template_status;
	
	/** 
	 * 0--验证码 1--短信通知 2-- 推广短信 3--国际/港澳台消息
	 **/
	public $template_type;	
}
?>