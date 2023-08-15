<?php

return [
	[
		'name'    => 'required',
		'type'    => 'Select',
		'label'   => 'attr-required',
		'value'   => 'N',
		'options' => [
			'Y' => 'yes',
			'N' => 'no',
		],
		'filters' => ['yesNo'],
	],
	[
		'name'      => 'hint',
		'type'      => 'Text',
		'label'     => 'placeholder',
		'translate' => true,
		'filters'   => ['string', 'trim'],
	],
	[
		'name'     => 'rules',
		'type'     => 'Select',
		'label'    => 'field-rules',
		'multiple' => true,
		'options'  => [
			'Regex' => 'regex-pattern',
		],
		'rules'    => ['Options'],
	],
	[
		'name'    => 'regex',
		'type'    => 'Text',
		'label'   => 'regex-string',
		'filters' => ['string', 'trim'],
		'showOn'  => 'rules : Regex',
	],
	[
		'name'    => 'checkboxValue',
		'type'    => 'Text',
		'label'   => 'checkbox-value',
		'filters' => ['string', 'trim'],
		'showOn'  => 'FormData.type : Check',
	],
	[
		'name'          => 'checked',
		'type'          => 'Check',
		'label'         => 'checked',
		'checkboxValue' => 'Y',
		'filters'       => ['yesNo'],
		'showOn'        => 'FormData.type : Check',
	],
	[
		'name'    => 'value',
		'type'    => 'TextArea',
		'label'   => 'default-value',
		'rows'    => 2,
		'cols'    => 15,
		'filters' => ['string', 'trim'],
		'showOn'  => 'FormData.type : !Check',
	],
	[
		'name'          => 'translate',
		'type'          => 'Check',
		'checkboxValue' => 'Y',
		'label'         => 'translatable',
		'filters'       => ['yesNo'],
	],
	[
		'name'          => 'multiple',
		'type'          => 'Check',
		'label'         => 'multiple',
		'rows'          => 2,
		'cols'          => 15,
		'checkboxValue' => 'Y',
		'filters'       => ['yesNo'],
		'showOn'        => 'FormData.type : Select',
	],
	[
		'name'    => 'cols',
		'type'    => 'Number',
		'label'   => 'cols',
		'min'     => 1,
		'value'   => 15,
		'filters' => ['uint'],
		'showOn'  => 'FormData.type : TextArea',
	],
	[
		'name'    => 'rows',
		'type'    => 'Number',
		'label'   => 'rows',
		'min'     => 1,
		'value'   => 3,
		'filters' => ['uint'],
		'showOn'  => 'FormData.type : TextArea',
	],
	[
		'name'      => 'options',
		'type'      => 'CmsOptionRepeat',
		'label'     => 'options',
		'translate' => true,
		'showOn'    => 'FormData.type : Select,Radio',
	],
];