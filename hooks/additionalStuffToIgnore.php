//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class releasehelper_hook_additionalStuffToIgnore extends _HOOK_CLASS_
{

	static $filesToIgnore = [
		'readme.md',
		'.gitignore',
	];

	protected function getDirectoriesToIgnore()
	{
		return array_merge( parent::getDirectoriesToIgnore(), array(
			'.idea'
			)
		);
	}

	public function accept()
	{
		if ( $this->isFile() )
		{
			return !\in_array( mb_strtolower( $this->getFilename() ), static::$filesToIgnore, true);
		}
		return parent::accept();
	}

}
