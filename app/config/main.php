<?php
$config = [
    'name' => 'Yii2 Starter Kit',
    'id' => 'vuejs',
    'basePath'=> dirname(__DIR__),
    'defaultRoute' => 'site/index',
    //'request'=>[
    //    'cookieValidationKey'=>'2wef2r3eg2erg24eg'
    //],
//    'vendorPath' => __DIR__ . '/../../vendor',
//    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
//    'sourceLanguage' => 'en-US',
//    'language' => 'en-US',
//    'bootstrap' => ['log'],
//    'aliases' => [
//        '@bower' => '@vendor/bower-asset',
//        '@npm' => '@vendor/npm-asset',
//    ],
    'components' => [
//        'authManager' => [
//            'class' => yii\rbac\DbManager::class,
//            'itemTable' => '{{%rbac_auth_item}}',
//            'itemChildTable' => '{{%rbac_auth_item_child}}',
//            'assignmentTable' => '{{%rbac_auth_assignment}}',
//            'ruleTable' => '{{%rbac_auth_rule}}'
//        ],


        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => '127.0.0.1',
            'username' => 'root',
            'password' => 1,
            'tablePrefix' => '',
            'charset' => 'utf8',
            'enableSchemaCache' => false,
        ],
     ],
];

return $config;