<?php
/**
 * TOP API: taobao.jst.sms.signname.query request
 * 
 * @author auto create
 * @since 1.0, 2021.12.28
 */
class JstSmsSignnameQueryRequest
{
	/** 
	 * 签名查询的入参
	 **/
	private $querySmsSignRequest;
	
	private $apiParas = array();
	
	public function setQuerySmsSignRequest($querySmsSignRequest)
	{
		$this->querySmsSignRequest = $querySmsSignRequest;
		$this->apiParas["query_sms_sign_request"] = $querySmsSignRequest;
	}

	public function getQuerySmsSignRequest()
	{
		return $this->querySmsSignRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.signname.query";
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
