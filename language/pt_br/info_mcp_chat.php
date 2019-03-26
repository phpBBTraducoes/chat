<?php
/** 
* info_mcp_chat.php [Brazilian Portuguese [pt_br]] 
* @package cBB Chat
* @version v1.2.0 02/03/2019
* Brazilian Portuguese  translation by eunaumtenhoid [2017][ver 1.2.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2019 CaniDev
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
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
	'MCP_CHAT_BAN'				=> 'Exclusões do Chat',
	
	'CHAT_BAN_CELL'				=> 'Nome de usuário',
	'CHAT_BAN_CELL_EXPLAIN'		=> 'Para especificar mais de um nome de usuário, insira cada um em uma nova linha.<br />
        Use o link <em><u>Encontrar um Usuário</ u> </ em> para encontrar e adicionar usuários automaticamente.',
	'CHAT_BAN_LIST'				=> 'Usuários Excluídos',
	'CHAT_EXCLUSIONS_ADDED'		=> 'As exclusões foram modificadas',
	'CHAT_EXCLUSIONS_DELETED'	=> 'As exclusões foram excluídas',
	'CHAT_EXCLUSIONS_ERROR'		=> 'Ocorreu um erro, verifique os dados inseridos',
	
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> Exclusões adicionadas<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Exclusões removidas<br />» %s',
));
