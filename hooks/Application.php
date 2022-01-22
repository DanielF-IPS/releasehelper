//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class releasehelper_hook_Application extends _HOOK_CLASS_
{


	/**
	 * Create a new version number and move current working version
	 * code into it
	 *
	 * @param	int		$long	The "long" version number (e.g. 100000)
	 * @param	string	$human	The "human" version number (e.g. "1.0.0")
	 * @return	void
	 */
	public function assignNewVersion( $long, $human )
	{
		parent::assignNewVersion( $long, $human );

		$payload = [
				'application' => $this->directory,
				'long' => $long,
				'human' =>$human
		];

		\IPS\Api\Webhook::fire( 'df_app_newversion', $payload );
	}

}
