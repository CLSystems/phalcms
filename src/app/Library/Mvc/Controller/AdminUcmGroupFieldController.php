<?php

namespace CLSystems\PhalCMS\Library\Mvc\Controller;

use Phalcon\Mvc\Model\Query\BuilderInterface;
use CLSystems\PhalCMS\Library\Form\FormsManager;
use CLSystems\PhalCMS\Library\Mvc\Model\UcmGroupField;

class AdminUcmGroupFieldController extends AdminControllerBase
{
	/** @var UcmGroupField */
	public $model = 'UcmGroupField';

	/** @var string */
	public $pickedView = 'UcmGroupField';

	/** @var string */
	public $context;

	/** @var string */
	public $stateField = null;

	public function onConstruct()
	{
		parent::onConstruct();
		$this->context = $this->dispatcher->getParam('context');
		$this->uri->setVar('uri', 'group-field/' . $this->context);
		$this->uri->setBaseUri('group-field/' . $this->context);
	}

	protected function prepareFormsManager(FormsManager $formsManager)
	{
		$form = $formsManager->get('general');
		$form->getField('context')->setValue($this->context);
	}

	protected function prepareIndexQuery(BuilderInterface $query)
	{
		$query->andWhere('item.context = :context:', ['context' => $this->context]);
	}
}
