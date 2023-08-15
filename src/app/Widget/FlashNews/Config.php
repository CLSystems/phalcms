<?php

return [
	'name'        => 'FlashNews',
	'title'       => 'widget-flash-news-title',
	'description' => 'widget-flash-news-desc',
	'version'     => '1.0.0',
	'author'      => 'CLSystems',
	'authorEmail' => 'info@clsystems.nl',
	'authorUrl'   => 'https://github.com/CLSystems',
	'updateUrl'   => null,
	'params'      => [
		[
			'name'     => 'categoryIds',
			'type'     => 'CmsModalUcmItem',
			'context'  => 'post-category',
			'multiple' => true,
			'filters'  => ['uint'],
		],
		[
			'name'     => 'postsNum',
			'type'     => 'Number',
			'label'    => 'limit-posts-number',
			'multiple' => true,
			'filters'  => ['uint'],
			'min'      => 1,
			'value'    => 10,
		],
		[
			'name'    => 'displayLayout',
			'type'    => 'Select',
			'label'   => 'display-layout',
			'value'   => 'FlashNews',
			'options' => [
				'FlashNews'  => 'slider-thumb-nav',
				'SliderNews' => 'sub-slider',
				'BlogList'   => 'blog-list',
				'BlogStack'  => 'blog-stack',
			],
			'rules'   => ['Options'],
		],
		[
			'name'    => 'orderBy',
			'type'    => 'Select',
			'label'   => 'order-by',
			'value'   => 'latest',
			'options' => [
				'latest'    => 'order-latest',
				'random'    => 'order-random',
				'views'     => 'order-views',
				'titleAsc'  => 'order-title-asc',
				'titleDesc' => 'order-title-desc',
			],
			'rules'   => ['Options'],
		],
	],
];
