<?php
/**
 * Y 框架 获取客户端的信息
 * @author yuexinok@126.com
 * @version $Id$
 * @copyright 2012-08-24
 * @package default
 * @license http:://weibo.com/yuexinok
 **/
if(!defined('IN_Y')) die;
class Y_Client{
	//获取浏览器信息
	public static function browser() {
		$user_agent_info = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);		
		if(strpos($user_agent_info,'MSIE 10.0')) {
			return 'IE10';
		}else if(strpos($user_agent_info,'MSIE 9.0')) {
			return 'IE9';
		}else if(strpos($user_agent_info,'MSIE 8.0')) {
			return 'IE8';
		}else if(strpos($user_agent_info,'MSIE 7.0')) {
			return 'IE7';
		}else if(strpos($user_agent_info,'MSIE 6.0')) {
			return 'IE6';
		}else if(strpos($user_agent_info,'Firefox')) {
			return 'Firfox';
		}else if(strpos($user_agent_info,'Chrome')) {
			return 'Chrome';
		}else if(strpos($user_agent_info,'Opera')) {
			return 'Opera';
		}else if(strpos($user_agent_info,'Safari')) {
			return 'Safari';
		}else if(strpos($user_agent_info,'Elinks')) {
			return 'Elinks';
		}else if(strpos($user_agent_info,'OmniWeb')) {
			return 'OmniWeb';
		}else if(strpos($user_agent_info,'Links')) {
			return 'Links';
		}else if(strpos($user_agent_info,'Lynx')) {
			return 'Lynx';
		}else if(strpos($user_agent_info,'Arora')) {
			return 'Arora';
		}else if(strpos($user_agent_info,'Epiphany')) {
			return 'Epiphany';
		}else if(strpos($user_agent_info,'Konqueror')) {
			return 'Konqueror';
		}else if(strpos($user_agent_info,'EudoraWeb')) {
			return 'EudoraWeb';
		}else if(strpos($user_agent_info,'Minimo')) {
			return 'Minimo';
		}else if(strpos($user_agent_info,'NetFront')) {
			return 'NetFront';
		}else if(strpos($user_agent_info,'POLARIS')) {
			return 'Polaris';
		}else if(strpos($user_agent_info,'BlackBerry')) {
			return 'BlackBerry';
		}else if(strpos($user_agent_info,'Nokia')) {
			return 'Nokia';
		}else{
			return 'Others';
		}
	}
	public static function os() {
		$user_agent_info = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
		if(strpos($user_agent_info,'Windows NT 6.1')) {
			return 'Windows 7';
		}else if(strpos($user_agent_info,'Windows NT 6.0')) {
			return 'Windows Vista';
		}else if(strpos($user_agent_info,'Windows NT 5.2')) {
			return 'Windows 2003';
		}else if(strpos($user_agent_info,'Windows NT 5.1')) {
			return 'Windows XP';
		}else if(strpos($user_agent_info,'Windows NT 5.0')) {
			return 'Windows 2000';
		}else if(strpos($user_agent_info,'Windows ME')) {
			return 'Windows ME';
		}else if(strpos($user_agent_info,'PPC Mac OS X')) {
			return 'OS X PPC';
		}else if(strpos($user_agent_info,'Intel Mac OS X')) {
			return 'OS X Intel';
		}else if(strpos($user_agent_info,'Win98')) {
			return 'Windows 98';
		}else if(strpos($user_agent_info,'Win95')) {
			return 'Windows 95';
		}else if(strpos($user_agent_info,'WinNT4.0')) {
			return 'Windows NT4.0';
		}else if(strpos($user_agent_info,'Mac OS X Mach-O')) {
			return 'OS X Mach';
		}else if(strpos($user_agent_info,'Ubuntu')) {
			return 'Ubuntu';
		}else if(strpos($user_agent_info,'Debian')) {
			return 'Debian';
		}else if(strpos($user_agent_info,'AppleWebKit')) {
			return 'WebKit';
		}else if(strpos($user_agent_info,'Mint/8')) {
			return 'Mint 8';
		}else if(strpos($user_agent_info,'Minefield')) {
			return 'Minefield Alpha';
		}else if(strpos($user_agent_info,'gentoo')) {
			return 'Gentoo';
		}else if(strpos($user_agent_info,'Kubuntu')) {
			return 'Kubuntu';
		}else if(strpos($user_agent_info,'Slackware/13.0')) {
			return 'Slackware 13';
		}else if(strpos($user_agent_info,'Fedora')) {
			return 'Fedora';
		}else if(strpos($user_agent_info,'FreeBSD')) {
			return 'FreeBSD';
		}else if(strpos($user_agent_info,'SunOS')) {
			return 'SunOS';
		}else if(strpos($user_agent_info,'OpenBSD')) {
			return 'OpenBSD';
		}else if(strpos($user_agent_info,'NetBSD')) {
			return 'NetBSD';
		}else if(strpos($user_agent_info,'DragonFly')) {
			return 'DragonFly';
		}else if(strpos($user_agent_info,'IRIX')) {
			return 'IRIX';
		}else if(strpos($user_agent_info,'Windows CE')) {
			return 'Windows CE';
		}else if(strpos($user_agent_info,'PalmOS')) {
			return 'PalmOS';
		}else if(strpos($user_agent_info,'Linux')) {
			return 'Linux';
		}else if(strpos($user_agent_info,'DragonFly')) {
			return 'DragonFly';
		}else if(strpos($user_agent_info,'Android')) {
			return 'Android';
		}else if(strpos($user_agent_info,'Mac OS X')) {
			return 'Mac OS X';
		}else if(strpos($user_agent_info,'iPhone')) {
			return 'iPhone OS';
		}else if(strpos($user_agent_info,'Symbian OS')) {
			return 'Symbian';
		}else if(strpos($user_agent_info,'SymbianOS')) {
			return 'SymbianOS';
		}else if(strpos($user_agent_info,'webOS')) {
			return 'webOS';
		}else if(strpos($user_agent_info,'PalmSource')) {
			return 'PalmSource';
		}else{
			return 'Others';
		}		
	}
	//语言
	public static function lang() {
		return htmlspecialchars($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	}
	//IP来源
	public static function ip() {
		if(isset($_SERVER )){
			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
				$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			}else if(isset($_SERVER["HTTP_CLIENT_IP"])){
				$realip = $_SERVER["HTTP_CLIENT_IP"];
			}else{
				$realip = $_SERVER["REMOTE_ADDR"];
			}
		}else{
			if(getenv("HTTP_X_FORWARDED_FOR")){
				$realip = getenv("HTTP_X_FORWARDED_FOR");
			}else if(getenv("HTTP_CLIENT_IP")){
				$realip = getenv("HTTP_CLIENT_IP");
			}else{
				$realip = getenv("REMOTE_ADDR");
			}
		}
		return htmlspecialchars($realip);
	}
	//上级来源
	public static function referer() {
		return htmlspecialchars($_SERVER['HTTP_REFERER']);
	}	
}
?>
