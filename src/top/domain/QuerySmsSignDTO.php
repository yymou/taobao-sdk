<?php

/**
 * 返回结果（signStatus： 0--待审核  1--通过 2--拒绝）
 * @author auto create
 */
class QuerySmsSignDTO
{
	
	/** 
	 * 签名创建时间
	 **/
	public $create_date;
	
	/** 
	 * 被拒绝的原因
	 **/
	public $reason;
	
	/** 
	 * 申请的签名
	 **/
	public $sign_name;
	
	/** 
	 * 拒绝
	 **/
	public $sign_status;	
}
?>