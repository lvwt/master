<?php
defined('DS') or define('DS',DIRECTORY_SEPARATOR);
defined('BASEURL') or define('BASEURL', Yii::app()->baseUrl);
defined('BASEPATH') or define('BASEPATH', Yii::app()->basePath);defined('IMGPATH') or define('IMGPATH', Yii::app()->params['imgpld_path']);//截取中文字符串function s($str,$length=10,$encoding='utf-8'){	if(mb_strlen($str,$encoding)<=$length)		return $str;	return mb_substr($str,0,$length,$encoding).'..';}//应用简写
function p()
{
	return Yii::app();
}
function getopenid($code='')
{
    $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx786ba25bc23973fa&secret=9caf55763f3189a69fae660865974e22&code='.$code.'&grant_type=authorization_code';
    $html = file_get_contents($url);
    if(isset(json_decode($html)->openid))
        return json_decode($html)->openid;
    return ;
}
