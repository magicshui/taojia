<?php
/**
 * TOP API: taobao.taohua.audioreader.track.downloadurl.get request
 * 
 * @author auto create
 * @since 1.0, 2011-09-09 13:49:16
 */
class TaohuaAudioreaderTrackDownloadurlGetRequest
{
	/** 
	 * 单曲商品ID
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "taobao.taohua.audioreader.track.downloadurl.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
}
