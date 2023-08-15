<?php

namespace CLSystems\PhalCMS\Lib\Mvc\Model;

use CLSystems\PhalCMS\Lib\Form\Form;
use CLSystems\PhalCMS\Lib\Form\FormsManager;
use CLSystems\PhalCMS\Lib\Helper\Config as ConfigHelper;

class Config extends ModelBase
{
	/**
	 *
	 * @var integer
	 */
	public int $id;

	/**
	 *
	 * @var string
	 */
	public string $context;

	/**
	 *
	 * @var mixed
	 */
	public mixed $data;

	/**
	 *
	 * @var integer
	 */
	public int $ordering;

	/**
	 * Initialize method for model.
	 */
	public function initialize(): void
    {
		$this->setSource('config_data');
	}

	public function beforeSave()
	{
		if (is_array($this->data)
			|| is_object($this->data)
		)
		{
			$this->data = json_encode($this->data);
		}

		return parent::beforeSave();
	}

	public function getFormsManager($bindData = true): FormsManager
    {
		// Create forms
		$siteForm    = new Form('FormData', __DIR__ . '/Form/Config/Site.php');
		$localeForm  = new Form('FormData', __DIR__ . '/Form/Config/Locale.php');
		$userForm    = new Form('FormData', __DIR__ . '/Form/Config/User.php');
//		$commentForm = new Form('FormData', __DIR__ . '/Form/Config/Comment.php');
		$systemForm  = new Form('FormData', __DIR__ . '/Form/Config/System.php');

		// Append forms to forms manager
		$formsManager = new FormsManager;
		$formsManager->set('site', $siteForm);
		$formsManager->set('locale', $localeForm);
		$formsManager->set('user', $userForm);
//		$formsManager->set('comment', $commentForm);
		$formsManager->set('system', $systemForm);

		if ($bindData)
		{
			$formsManager->bind(ConfigHelper::get()->toArray());
		}

		return $formsManager;
	}
}
