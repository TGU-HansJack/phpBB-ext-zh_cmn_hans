<?php
/**
	* $Quick reply Extended. extends the phpBB Forum Software package.
	* @copyright (c) 2025, Steve, <https://steven-clark.tech/>
	* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace steve\quickreplyextended\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.viewtopic_assign_template_vars_before'	=> 'template_vars_before',
		];
	}

	protected $auth;
	protected $config;
	protected $language;
	protected $helper;
	protected $template;
	protected $php_ext;
	protected $root_path;

	protected $forum_id;
	
	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\language\language $language,
		\phpbb\controller\helper $helper,
		\phpbb\template\template $template,
		$php_ext,
		$root_path)
	{
		$this->auth 		= $auth;
		$this->config 		= $config;
		$this->language 	= $language;
		$this->helper 		= $helper;
		$this->template 	= $template;
		$this->php_ext 		= $php_ext;
		$this->root_path 	= $root_path;
	}

	public function template_vars_before($event)
	{
		$this->language->add_lang('posting');

		$this->forum_id = $forum_id = $event['topic_data']['forum_id'];

		$template_vars = [
			'S_BBCODE_ALLOWED'				=> $this->bbcode_status(),
			'BBCODE_STATUS'					=> $this->bbcode_status() ? $this->language->lang('BBCODE_IS_ON', '<a href="' . $this->helper->route('phpbb_help_bbcode_controller') . '">', '</a>') : $this->language->lang('BBCODE_IS_OFF'),
			'S_BBCODE_FLASH'				=> $this->flash_status(),
			'FLASH_STATUS'					=> $this->flash_status() ? $this->language->lang('FLASH_IS_ON') : $this->language->lang('FLASH_IS_OFF'),
			'S_BBCODE_IMG'					=> $this->img_status(),
			'IMG_STATUS'					=> $this->img_status() ? $this->language->lang('IMAGES_ARE_ON') : $this->language->lang('IMAGES_ARE_OFF'),
			'SMILIES_ALLOWED'				=> $this->smilies_status(),
			'SMILIES_STATUS'				=> $this->smilies_status() ? $this->language->lang('SMILIES_ARE_ON') : $this->language->lang('SMILIES_ARE_OFF'),
			'S_SHOW_SMILEY_LINK' 			=> true,
			'U_MORE_SMILIES'    			=> append_sid("{$this->root_path}posting.$this->php_ext", 'mode=smilies'),			
			'S_LINKS_ALLOWED'				=> $this->url_status(),
			'URL_STATUS'					=> $this->url_status() ? $this->language->lang('URL_IS_ON') : $this->language->lang('URL_IS_OFF'),
			'S_BBCODE_QUOTE'				=> true,
			'S_QUICK_REPLY_EXTENDED'		=> true,
		];

		$this->template->assign_vars($template_vars);

		if ($this->bbcode_status())
		{
			if (!function_exists('display_custom_bbcodes'))
			{
				include_once $this->root_path . 'includes/functions_display.' . $this->php_ext;
			}
			display_custom_bbcodes();

			if ($this->smilies_status())
			{
				if (!function_exists('generate_smilies'))
				{
					include_once $this->root_path . 'includes/functions_posting.' . $this->php_ext;
				}
				generate_smilies('inline', 0);
			}
		}
	}

	private function bbcode_status()
	{
		return $this->config['allow_bbcode'] && $this->auth->acl_get('f_bbcode', $this->forum_id) ? true : false;
	}

	private function flash_status()
	{
		return $this->bbcode_status() && $this->config['allow_post_flash'] && $this->auth->acl_get('f_flash', $this->forum_id) ? true : false;
	}

	private function img_status()
	{
		return $this->bbcode_status() && $this->auth->acl_get('f_img', $this->forum_id) ? true : false;
	}

	private function smilies_status()
	{
		return $this->config['allow_smilies'] && $this->auth->acl_get('f_smilies', $this->forum_id) ? true : false;
	}

	private function url_status()
	{
		return $this->config['allow_post_links'] ? true : false;
	}
}
