<?php
/**
 * @brief		Release Helper Application Class
 * @author		<a href=''>Daniel F</a>
 * @copyright	(c) 2021 Daniel F
 * @package		Invision Community
 * @subpackage	Release Helper
 * @since		02 Apr 2021
 * @version		
 */
 
namespace IPS\releasehelper;

/**
 * Release Helper Application Class
 */
class _Application extends \IPS\Application
{
	public function getWebhooks(): array
	{
		return [
			'df_app_newversion' => [ 'application' => 'The Application Key ( Directory )', 'long' => "The long version number", 'human' => 'The human version number'],
		];
	}
}