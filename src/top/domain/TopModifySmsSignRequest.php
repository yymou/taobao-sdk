<?php

/**
 * 修改签名入参
 * @author auto create
 */
class TopModifySmsSignRequest
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
	 * 要修改的签名,不能修改签名
	 **/
	public $sign_name;
	
	/** 
	 * 0--企事业单位的全程或简称   1--已备案网站  2--已上线APP  3--公众号或小程序 4--电商平台店铺名 5--已注册商标名
	 **/
	public $sign_source;	
}
?>