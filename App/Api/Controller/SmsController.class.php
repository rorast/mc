<?php
/**
SMS短信介面類別
@author		sms.cn
@link		http://www.sms.cn
*/
namespace Api\Controller;

use Think\Controller;

class SmsController extends Controller {
	/**
	* SMSAPI請求位址
	*/
	const API_URL = 'http://api.sms.cn/sms/';

	/**
	* 介面帳號
	* 
	* @var string
	*/
	protected $uid;

	/**
	* 介面密碼
	* 
	* @var string
	* @link http://sms.sms.cn/ 請到此處（短信設置->介面密碼）獲取
	*/
	protected $pwd;

	/**
	* sms api請求位址
	* @var string
	*/
	protected $apiURL;


	/**
	* 短信發送請求參數
	* @var string
	*/
	protected $smsParams;

	/**
	* 介面返回資訊
	* @var string
	*/
    protected $resultMsg;

	/**
	* 介面返回資訊格式
	* @var string
	*/
	protected $format;

	/**
	* 構造方法
	* 
	* @param string $uid 介面帳號
	* @param string $pwd 介面密碼
	*/
    public function __construct($uid = '', $pwd = '')
    {
		//使用者和密碼可直接寫在類裡
		$def_uid = '***';
		$def_pwd = '***';
        $this->uid	= $uid ?: $def_uid;
        $this->pwd	= $pwd ?: $def_pwd;
        $this->apiURL = self::API_URL;
		$this->format = 'json';
    }
	/**
	* SMS公共參數
	* @return array 
	*/
    protected function publicParams()
    {
        return array(
            'uid'		=> $this->uid,
            'pwd'		=> md5($this->pwd.$this->uid),
            'format'	=> $this->format,
        );
    }
	/**
	* 發送變數範本短信
	*
	* @param string $mobile 手機號碼
	* @param string $content 短信內容參數
	* @param string $template 短信範本ID
	* @return array
	*/
	public function send($mobile, $contentParam,$template='') {
		//短信發送參數
		$this->smsParams = array(
			'ac'		=> 'send',
			'mobile'	=> $mobile,
			'content'	=> $this->array_to_json($contentParam),
			'template'	=> $template
		);
		$this->resultMsg = $this->request();
		return $this->json_to_array($this->resultMsg, true);
	}

	/**
	* 發送全文範本短信
	*
	* @param string $mobile 手機號碼
	* @param string $content 短信內容
	* @return array
	*/
	public function sendAll($mobile, $content) {
		//短信發送參數
		$this->smsParams = array(
			'ac'		=> 'send',
			'mobile'	=> $mobile,
			'content'	=> $content,
		);
		$this->resultMsg = $this->request();

		return $this->json_to_array($this->resultMsg, true);
	}

	/**
	* 取剩餘短信條數
	*
	* @return array
	*/
	public function getNumber() {
		//參數
		$this->smsParams = array(
			'ac'		=> 'number',
		);
		$this->resultMsg = $this->request();
		return $this->json_to_array($this->resultMsg, true);
	}


	/**
	* 獲取發送狀態
	*
	* @return array
	*/
	public function getStatus() {
		//參數
		$this->smsParams = array(
			'ac'		=> 'status',
		);
		$this->resultMsg = $this->request();
		return $this->json_to_array($this->resultMsg, true);
	}
	/**
	* 接收上行短信（回復）
	*
	* @return array
	*/
	public function getReply() {
		//參數
		$this->smsParams = array(
			'ac'		=> 'reply',
		);
		$this->resultMsg = $this->request();
		return $this->json_to_array($this->resultMsg, true);
	}
	/**
	* 取已發送總條數
	*
	* @return array
	*/
	public function getSendTotal() {
		//參數
		$this->smsParams = array(
			'ac'		=> 'number',
			'cmd'		=> 'send',
		);
		$this->resultMsg = $this->request();
		return $this->json_to_array($this->resultMsg, true);
	}

	/**
	* 取發送記錄
	*
	* @return array
	*/
	public function getQuery() {
		//參數
		$this->smsParams = array(
			'ac'		=> 'query',
		);
		$this->resultMsg = $this->request();
		return $this->json_to_array($this->resultMsg, true);
	}

	/**
	* 發送HTTP請求
	* @return string
	*/
	private function request()
	{
		$params = array_merge($this->publicParams(),$this->smsParams);
		if( function_exists('curl_init') )
		{
			return $this->curl_request($this->apiURL,$params);
		}
		else
		{
			return $this->file_get_request($this->apiURL,$params);
		}
	}
	/**
	* 通過CURL發送HTTP請求
	* @param string $url		 //請求URL
	* @param array $postFields //請求參數 
	* @return string
	*/
	private function curl_request($url,$postFields){
		$postFields = http_build_query($postFields);
		//echo $url.'?'.$postFields;
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		curl_setopt ( $ch, CURLOPT_HEADER, 0 );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $postFields );
		$result = curl_exec ( $ch );
		curl_close ( $ch );
		return $result;
	}
	/**
	* 通過file_get_contents發送HTTP請求
	* @param string $url  //請求URL
	* @param array $postFields //請求參數 
	* @return string
	*/
	private function file_get_request($url,$postFields)
	{
		$post='';
		while (list($k,$v) = each($postFields)) 
		{
			$post .= rawurlencode($k)."=".rawurlencode($v)."&";	//轉URL標準碼
		}
		return file_get_contents($url.'?'.$post);
	}
	/**
	* 獲取當前HTTP請返回資訊
	* @return string
	*/
	public function getResult()
	{
		$this->resultMsg;
	}
	/**
	* 獲取隨機位元數數位
	* @param  integer $len 長度
	* @return string       
	*/
	public function randNumber($len = 6)
	{
		$chars = str_repeat('0123456789', 10);
		$chars = str_shuffle($chars);
		$str   = substr($chars, 0, $len);
		return $str;
	}

	//把陣列轉json字串
	function array_to_json($p)
	{
		return urldecode(json_encode($this->json_urlencode($p)));
	}
	//url轉碼
	function json_urlencode($p)
	{
		if( is_array($p) )
		{
			foreach( $p as $key => $value )$p[$key] = $this->json_urlencode($value);
		}
		else
		{
			$p = urlencode($p);
		}
		return $p;
	}

	//把json字串轉陣列
	function json_to_array($p)
	{
		if( mb_detect_encoding($p,array('ASCII','UTF-8','GB2312','GBK')) != 'UTF-8' )
		{
			$p = iconv('GBK','UTF-8',$p);
		}
		return json_decode($p, true);
	}
}

?>
