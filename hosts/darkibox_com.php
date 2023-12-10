<?php
class dl_darkibox_com extends Download {	
	public function FreeLeech($url){
		$linkid = str_replace("https://darkibox.com/", "", $url);
		$linkid = str_replace("http://darkibox.com/", "", $linkid);
		$ch = curl_init();
		// this api key and for free version for premium use your api key
		curl_setopt($ch, CURLOPT_URL, "https://darkibox.com/api/file/direct_link?key=26495ymea59ycbmrkolzq&file_code=" . $linkid . "");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64; rv:120.0) Gecko/20100101 Firefox/120.0");
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
		$hdrs[]="User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:120.0) Gecko/20100101 Firefox/120.0";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $hdrs);
		$res = curl_exec($ch);
		curl_close($ch);
		preg_match('/url":"(.*?)"/', $res, $dl);
		$link1 = $dl[1];
		return $link1;
	}
}
?>
