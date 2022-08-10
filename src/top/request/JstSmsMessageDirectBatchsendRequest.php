<?php
/**
 * TOP API: taobao.jst.sms.message.direct.batchsend request
 * 
 * @author auto create
 * @since 1.0, 2022.06.21
 */
class JstSmsMessageDirectBatchsendRequest
{
	/** 
	 * 短信扩展码（JSON字符串数组格式），拓展码个数需要和电话号码个数一致。
	 **/
	private $extendNum;
	
	/** 
	 * 如果传，必须是一个JSON对象格式的字符串。
	 **/
	private $extraData;
	
	/** 
	 * OAID批量发短信的入参，传该参数的时候rec_num不需要传，最大50个。
	 **/
	private $oaids;
	
	/** 
	 * OAID批量发短信时必传，为OAID一一对应的订单ID。
	 **/
	private $orderIds;
	
	/** 
	 * 短信接收号码，json格式，最多200个号码
	 **/
	private $recNum;
	
	/** 
	 * 短信签名（如果是通过OAID发送短信则签名需要是数组格式，数组长度需要和OAID数量保持一致。）
	 **/
	private $signName;
	
	/** 
	 * 模板参数替换方式："[{\"msg\":\"hello1\",\"date\":\"2021-12-03\"},{\"msg\":\"hello2\",\"date\":\"2021-12-04\"},{\"msg\":\"hello3\",\"date\":\"2021-12-05\"}]"
	 **/
	private $smsContent;
	
	/** 
	 * 短信模版Code（明文发送短信和OAID发送均不要传数组格式）
	 **/
	private $smsTemplateCode;
	
	/** 
	 * 废弃字段
	 **/
	private $taskCode;
	
	/** 
	 * 对于taskSign相同的请求平台认为是商家的同一次短信发送，可用于对OAID的明文号码去重。
	 **/
	private $taskSign;
	
	/** 
	 * 废弃字段
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setExtendNum($extendNum)
	{
		$this->extendNum = $extendNum;
		$this->apiParas["extend_num"] = $extendNum;
	}

	public function getExtendNum()
	{
		return $this->extendNum;
	}

	public function setExtraData($extraData)
	{
		$this->extraData = $extraData;
		$this->apiParas["extra_data"] = $extraData;
	}

	public function getExtraData()
	{
		return $this->extraData;
	}

	public function setOaids($oaids)
	{
		$this->oaids = $oaids;
		$this->apiParas["oaids"] = $oaids;
	}

	public function getOaids()
	{
		return $this->oaids;
	}

	public function setOrderIds($orderIds)
	{
		$this->orderIds = $orderIds;
		$this->apiParas["order_ids"] = $orderIds;
	}

	public function getOrderIds()
	{
		return $this->orderIds;
	}

	public function setRecNum($recNum)
	{
		$this->recNum = $recNum;
		$this->apiParas["rec_num"] = $recNum;
	}

	public function getRecNum()
	{
		return $this->recNum;
	}

	public function setSignName($signName)
	{
		$this->signName = $signName;
		$this->apiParas["sign_name"] = $signName;
	}

	public function getSignName()
	{
		return $this->signName;
	}

	public function setSmsContent($smsContent)
	{
		$this->smsContent = $smsContent;
		$this->apiParas["sms_content"] = $smsContent;
	}

	public function getSmsContent()
	{
		return $this->smsContent;
	}

	public function setSmsTemplateCode($smsTemplateCode)
	{
		$this->smsTemplateCode = $smsTemplateCode;
		$this->apiParas["sms_template_code"] = $smsTemplateCode;
	}

	public function getSmsTemplateCode()
	{
		return $this->smsTemplateCode;
	}

	public function setTaskCode($taskCode)
	{
		$this->taskCode = $taskCode;
		$this->apiParas["task_code"] = $taskCode;
	}

	public function getTaskCode()
	{
		return $this->taskCode;
	}

	public function setTaskSign($taskSign)
	{
		$this->taskSign = $taskSign;
		$this->apiParas["task_sign"] = $taskSign;
	}

	public function getTaskSign()
	{
		return $this->taskSign;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.message.direct.batchsend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->signName,"signName");
		RequestCheckUtil::checkNotNull($this->smsTemplateCode,"smsTemplateCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
