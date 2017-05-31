<?php

use \yii\web\Request;

$baseUrl = str_replace('/web', '', (new Request)->getBaseUrl());

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [	
		
		'awssdk' => [
            'class' => 'fedemotta\awssdk\AwsSdk',
            'credentials' => [ //you can use a different method to grant access
                'key' => 'AKIAJMJO2L5ZO476VDZQ',
                'secret' => '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',
            ],
            'region' => 'us-west-2', //i.e.: 'us-east-1'
            'version' => 'latest', //i.e.: 'latest'
        ],
	
	
		 'assetManager' => [
		    'linkAssets' => false,
		    'appendTimestamp' => true, // timestamp for cache busting assets
		    'hashCallback' => function ($path) { //for autoscaling in different servers
		   		 return hash('md4', $path);
		    },
			'bundles' => [
            'yii\bootstrap\BootstrapPluginAsset' => [
                'js'=>[]
            ],
        ],
	    ],
		
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'WbgPGcx5OL4WatyoVsHv-kgX2jLVe9Xw',
			'baseUrl' => $baseUrl,
			'enableCsrfValidation' => false,
        ],
		 
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'AccessRule' => [
        	'class' => 'app\components\AccessRuleComponent',
        ],
        'SessionCheck' => [
        'class' => 'app\components\SessionCheckComponent',
        ],
        'EncryptDecrypt' => [
        'class' => 'app\components\EncryptDecryptComponent',
        ],
        'user' => [
			//'class' => 'listfixer\remember\RememberMe',
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
		
        'errorHandler' => [
            'errorAction' => 'site/error',
			'maxSourceLines' => 20,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
         'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
               'file' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'except' => ['yii\web\HttpException:404'],
                    'logFile' => '@runtime/logs/404.log',
                ],
                'email' => [
                                 'class' => 'yii\log\EmailTarget',
                                 'mailer' => 'mailer',
                                 'except' => ['yii\web\HttpException:404'],
                                 'levels' => ['error', 'warning'],
                                 'message' => [
                                     	'from' => ['admin@bc.com'],
                                      	'to' => ['banelasainath@gmail.com', 'ankamranjithkumar@gmail.com'],
                                      	'subject' => 'Log message',
                                  ],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'modules' => [
	    'admin' => [
	    	'class' => 'app\modules\admin\Module',
	    ],
	    'firm' => [
	    	'class' => 'app\modules\firm\Module',
	    ],
	    'client' => [
	    	'class' => 'app\modules\client\Module',
	    ],
		'gridview'=> [
			'class'=>'\kartik\grid\Module'
					// other module settings
			],
			'design' => [
	    	'class' => 'app\modules\design\Module',
	    ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
