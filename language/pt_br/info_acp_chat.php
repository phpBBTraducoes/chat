<?php
/** 
* info_acp_chat.php [Brazilian Portuguese [pt_br]] translation by eunaumtenhoid (c) 2017 [ver 1.1.3] (https://github.com/phpBBTraducoes)
* @package cBB Chat
* @version v1.1.3 10/03/2017
* 
* @copyright (c) 2017 CaniDev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_CAT_CHAT'			=> 'Chat',
	
	'ACP_CHAT_CONFIG'		=> 'Configuração principal',
	'ACP_CHAT_PAGES'		=> 'Gerenciar páginas',
	'ACP_CHAT_ROOMS'		=> 'Gerenciar salas',
	'ACP_CHAT_TEXTS'		=> 'Textos e regras estáticas',

	'LOG_CHAT_CONFIG'			=> '<strong>cBB Chat:</strong> Configuração principal alterada',
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Exclusões adicionadas<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Exclusões removidas<br />» %s',
	'LOG_CHAT_ROOM_REMOVED'		=> '<strong>cBB Chat:</strong> Deletada sala <em>%s</em> e suas mensagens',
));
