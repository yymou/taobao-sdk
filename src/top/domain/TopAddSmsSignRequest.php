<?php

/**
 * 创建签名入参
 * @author auto create
 */
class TopAddSmsSignRequest
{
	
	/** 
	 * 请输入签名用途（必填）、企业官网链接（可提升通过率）
	 **/
	public $remark;
	
	/** 
	 * 上传的证明文件
	 **/
	public $sign_file_list;
	
	/** 
	 * 签名发送自带【】符号，无须添加【】、()、[]符号，避免重复 不支持如“客户服务”、“友情提醒”等过于宽泛内容、不支持“测试”字样的签名
	 **/
	public $sign_name;
	
	/** 
	 * 0--企事业单位的全程或简称   1--已备案网站  2--已上线APP  3--公众号或小程序 4--电商平台店铺名 5--已注册商标名
	 **/
	public $sign_source;	
}
?>