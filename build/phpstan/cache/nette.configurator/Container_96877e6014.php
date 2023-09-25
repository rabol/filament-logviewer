<?php
// source: phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.neon
// source: phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../nesbot/carbon/extension.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../nunomaduro/larastan/extension.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-deprecation-rules/rules.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/extension.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/rules.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../spatie/invade/phpstan-extension.neon
// source: /Users/rabol/code/web/packages/filament-logviewer/phpstan.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_96877e6014 extends _PHPStan_3334735b2\Nette\DI\Container
{
	protected $tags = [
		'phpstan.parser.richParserNodeVisitor' => [
			'04' => true,
			'05' => true,
			'06' => true,
			'07' => true,
			'010' => true,
			'011' => true,
			'012' => true,
			'013' => true,
			'014' => true,
			'015' => true,
			'070' => true,
		],
		'phpstan.stubFilesExtension' => ['035' => true, '037' => true, '0458' => true],
		'phpstan.broker.methodsClassReflectionExtension' => [
			'087' => true,
			'091' => true,
			'0377' => true,
			'0378' => true,
			'0379' => true,
			'0380' => true,
			'0381' => true,
			'0382' => true,
			'0383' => true,
			'0384' => true,
			'0385' => true,
			'0386' => true,
			'0387' => true,
			'0388' => true,
			'0501' => true,
		],
		'phpstan.broker.propertiesClassReflectionExtension' => [
			'088' => true,
			'093' => true,
			'0222' => true,
			'0389' => true,
			'0390' => true,
			'0391' => true,
			'0399' => true,
			'0500' => true,
		],
		'phpstan.broker.allowedSubTypesClassReflectionExtension' => ['092' => true],
		'phpstan.broker.dynamicFunctionReturnTypeExtension' => [
			'0145' => true,
			'0146' => true,
			'0147' => true,
			'0148' => true,
			'0149' => true,
			'0150' => true,
			'0151' => true,
			'0152' => true,
			'0153' => true,
			'0154' => true,
			'0155' => true,
			'0157' => true,
			'0158' => true,
			'0159' => true,
			'0160' => true,
			'0161' => true,
			'0162' => true,
			'0163' => true,
			'0164' => true,
			'0165' => true,
			'0166' => true,
			'0167' => true,
			'0168' => true,
			'0169' => true,
			'0170' => true,
			'0171' => true,
			'0173' => true,
			'0174' => true,
			'0177' => true,
			'0178' => true,
			'0182' => true,
			'0183' => true,
			'0185' => true,
			'0187' => true,
			'0188' => true,
			'0189' => true,
			'0191' => true,
			'0194' => true,
			'0195' => true,
			'0202' => true,
			'0203' => true,
			'0205' => true,
			'0206' => true,
			'0207' => true,
			'0208' => true,
			'0209' => true,
			'0210' => true,
			'0211' => true,
			'0212' => true,
			'0213' => true,
			'0215' => true,
			'0224' => true,
			'0227' => true,
			'0228' => true,
			'0229' => true,
			'0230' => true,
			'0231' => true,
			'0233' => true,
			'0234' => true,
			'0235' => true,
			'0236' => true,
			'0237' => true,
			'0238' => true,
			'0239' => true,
			'0240' => true,
			'0241' => true,
			'0242' => true,
			'0243' => true,
			'0244' => true,
			'0245' => true,
			'0246' => true,
			'0247' => true,
			'0248' => true,
			'0250' => true,
			'0251' => true,
			'0252' => true,
			'0253' => true,
			'0254' => true,
			'0255' => true,
			'0256' => true,
			'0257' => true,
			'0260' => true,
			'0269' => true,
			'0273' => true,
			'0274' => true,
			'0277' => true,
			'0278' => true,
			'0279' => true,
			'0280' => true,
			'0281' => true,
			'0282' => true,
			'0418' => true,
			'0419' => true,
			'0420' => true,
			'0421' => true,
			'0422' => true,
			'0433' => true,
			'0434' => true,
			'0435' => true,
			'0474' => true,
			'0475' => true,
		],
		'phpstan.typeSpecifier.functionTypeSpecifyingExtension' => [
			'0156' => true,
			'0172' => true,
			'0186' => true,
			'0221' => true,
			'0225' => true,
			'0226' => true,
			'0258' => true,
			'0259' => true,
			'0261' => true,
			'0262' => true,
			'0263' => true,
			'0264' => true,
			'0265' => true,
			'0266' => true,
			'0267' => true,
			'0268' => true,
			'0270' => true,
			'0272' => true,
			'0429' => true,
			'0430' => true,
			'0431' => true,
			'0432' => true,
			'0485' => true,
		],
		'phpstan.dynamicFunctionThrowTypeExtension' => ['0175' => true, '0214' => true, '0216' => true],
		'phpstan.broker.dynamicStaticMethodReturnTypeExtension' => [
			'0176' => true,
			'0179' => true,
			'0181' => true,
			'0193' => true,
			'0283' => true,
			'0289' => true,
			'0400' => true,
			'0401' => true,
			'0402' => true,
			'0403' => true,
			'0404' => true,
			'0406' => true,
			'0414' => true,
			'0428' => true,
			'0436' => true,
		],
		'phpstan.broker.dynamicMethodReturnTypeExtension' => [
			'0180' => true,
			'0190' => true,
			'0196' => true,
			'0197' => true,
			'0200' => true,
			'0224' => true,
			'0249' => true,
			'0275' => true,
			'0276' => true,
			'0283' => true,
			'0284' => true,
			'0285' => true,
			'0286' => true,
			'0287' => true,
			'0288' => true,
			'0392' => true,
			'0393' => true,
			'0394' => true,
			'0395' => true,
			'0396' => true,
			'0397' => true,
			'0398' => true,
			'0405' => true,
			'0407' => true,
			'0408' => true,
			'0409' => true,
			'0410' => true,
			'0411' => true,
			'0412' => true,
			'0413' => true,
			'0415' => true,
			'0416' => true,
			'0423' => true,
			'0424' => true,
			'0425' => true,
			'0426' => true,
			'0427' => true,
			'0445' => true,
			'0467' => true,
			'0468' => true,
			'0469' => true,
			'0470' => true,
			'0471' => true,
			'0472' => true,
			'0473' => true,
			'0488' => true,
			'0489' => true,
			'0490' => true,
		],
		'phpstan.dynamicStaticMethodThrowTypeExtension' => [
			'0192' => true,
			'0198' => true,
			'0199' => true,
			'0217' => true,
			'0218' => true,
			'0219' => true,
			'0220' => true,
			'0223' => true,
		],
		'phpstan.dynamicMethodThrowTypeExtension' => ['0201' => true],
		'phpstan.typeSpecifier.methodTypeSpecifyingExtension' => ['0232' => true, '0486' => true],
		'phpstan.rules.rule' => [
			'0300' => true,
			'0304' => true,
			'0305' => true,
			'0306' => true,
			'0307' => true,
			'0308' => true,
			'0309' => true,
			'0311' => true,
			'0312' => true,
			'0313' => true,
			'0314' => true,
			'0315' => true,
			'0316' => true,
			'0317' => true,
			'0318' => true,
			'0320' => true,
			'0323' => true,
			'0324' => true,
			'0325' => true,
			'0326' => true,
			'0327' => true,
			'0330' => true,
			'0333' => true,
			'0336' => true,
			'0337' => true,
			'0338' => true,
			'0340' => true,
			'0342' => true,
			'0343' => true,
			'0344' => true,
			'0345' => true,
			'0346' => true,
			'0347' => true,
			'0348' => true,
			'0352' => true,
			'0353' => true,
			'0354' => true,
			'0355' => true,
			'0356' => true,
			'0357' => true,
			'0358' => true,
			'0359' => true,
			'0360' => true,
			'0361' => true,
			'0362' => true,
			'0363' => true,
			'0364' => true,
			'0365' => true,
			'0367' => true,
			'0368' => true,
			'0369' => true,
			'0370' => true,
			'0371' => true,
			'0372' => true,
			'0373' => true,
			'0439' => true,
			'0440' => true,
			'0441' => true,
			'0442' => true,
			'0443' => true,
			'0454' => true,
			'0455' => true,
			'0456' => true,
			'rules.0' => true,
			'rules.1' => true,
			'rules.10' => true,
			'rules.100' => true,
			'rules.101' => true,
			'rules.102' => true,
			'rules.103' => true,
			'rules.104' => true,
			'rules.105' => true,
			'rules.106' => true,
			'rules.107' => true,
			'rules.108' => true,
			'rules.109' => true,
			'rules.11' => true,
			'rules.110' => true,
			'rules.111' => true,
			'rules.112' => true,
			'rules.113' => true,
			'rules.114' => true,
			'rules.115' => true,
			'rules.116' => true,
			'rules.117' => true,
			'rules.118' => true,
			'rules.119' => true,
			'rules.12' => true,
			'rules.120' => true,
			'rules.121' => true,
			'rules.122' => true,
			'rules.123' => true,
			'rules.124' => true,
			'rules.125' => true,
			'rules.126' => true,
			'rules.127' => true,
			'rules.128' => true,
			'rules.129' => true,
			'rules.13' => true,
			'rules.130' => true,
			'rules.131' => true,
			'rules.132' => true,
			'rules.133' => true,
			'rules.134' => true,
			'rules.135' => true,
			'rules.136' => true,
			'rules.137' => true,
			'rules.138' => true,
			'rules.139' => true,
			'rules.14' => true,
			'rules.140' => true,
			'rules.141' => true,
			'rules.142' => true,
			'rules.143' => true,
			'rules.144' => true,
			'rules.145' => true,
			'rules.146' => true,
			'rules.147' => true,
			'rules.148' => true,
			'rules.149' => true,
			'rules.15' => true,
			'rules.150' => true,
			'rules.151' => true,
			'rules.152' => true,
			'rules.153' => true,
			'rules.154' => true,
			'rules.155' => true,
			'rules.156' => true,
			'rules.157' => true,
			'rules.158' => true,
			'rules.159' => true,
			'rules.16' => true,
			'rules.160' => true,
			'rules.161' => true,
			'rules.162' => true,
			'rules.163' => true,
			'rules.164' => true,
			'rules.17' => true,
			'rules.18' => true,
			'rules.19' => true,
			'rules.2' => true,
			'rules.20' => true,
			'rules.21' => true,
			'rules.22' => true,
			'rules.23' => true,
			'rules.24' => true,
			'rules.25' => true,
			'rules.26' => true,
			'rules.27' => true,
			'rules.28' => true,
			'rules.29' => true,
			'rules.3' => true,
			'rules.30' => true,
			'rules.31' => true,
			'rules.32' => true,
			'rules.33' => true,
			'rules.34' => true,
			'rules.35' => true,
			'rules.36' => true,
			'rules.37' => true,
			'rules.38' => true,
			'rules.39' => true,
			'rules.4' => true,
			'rules.40' => true,
			'rules.41' => true,
			'rules.42' => true,
			'rules.43' => true,
			'rules.44' => true,
			'rules.45' => true,
			'rules.46' => true,
			'rules.47' => true,
			'rules.48' => true,
			'rules.49' => true,
			'rules.5' => true,
			'rules.50' => true,
			'rules.51' => true,
			'rules.52' => true,
			'rules.53' => true,
			'rules.54' => true,
			'rules.55' => true,
			'rules.56' => true,
			'rules.57' => true,
			'rules.58' => true,
			'rules.59' => true,
			'rules.6' => true,
			'rules.60' => true,
			'rules.61' => true,
			'rules.62' => true,
			'rules.63' => true,
			'rules.64' => true,
			'rules.65' => true,
			'rules.66' => true,
			'rules.67' => true,
			'rules.68' => true,
			'rules.69' => true,
			'rules.7' => true,
			'rules.70' => true,
			'rules.71' => true,
			'rules.72' => true,
			'rules.73' => true,
			'rules.74' => true,
			'rules.75' => true,
			'rules.76' => true,
			'rules.77' => true,
			'rules.78' => true,
			'rules.79' => true,
			'rules.8' => true,
			'rules.80' => true,
			'rules.81' => true,
			'rules.82' => true,
			'rules.83' => true,
			'rules.84' => true,
			'rules.85' => true,
			'rules.86' => true,
			'rules.87' => true,
			'rules.88' => true,
			'rules.89' => true,
			'rules.9' => true,
			'rules.90' => true,
			'rules.91' => true,
			'rules.92' => true,
			'rules.93' => true,
			'rules.94' => true,
			'rules.95' => true,
			'rules.96' => true,
			'rules.97' => true,
			'rules.98' => true,
			'rules.99' => true,
		],
		'phpstan.phpDoc.typeNodeResolverExtension' => [
			'0437' => true,
			'0438' => true,
			'0444' => true,
			'0446' => true,
			'0484' => true,
		],
		'phpstan.collector' => ['0460' => true, '0461' => true, '0462' => true, '0463' => true, '0464' => true],
		'phpstan.deprecations.deprecatedScopeResolver' => ['0483' => true],
		'phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension' => ['0487' => true],
	];

	protected $types = ['container' => '_PHPStan_3334735b2\Nette\DI\Container'];
	protected $aliases = [];

	protected $wiring = [
		'_PHPStan_3334735b2\Nette\DI\Container' => [['container']],
		'PHPStan\Rules\Rule' => [
			[
				'0109',
				'0110',
				'0112',
				'0113',
				'0126',
				'0298',
				'0299',
				'0300',
				'0301',
				'0302',
				'0303',
				'0304',
				'0305',
				'0306',
				'0307',
				'0308',
				'0309',
				'0310',
				'0311',
				'0312',
				'0313',
				'0314',
				'0315',
				'0316',
				'0317',
				'0318',
				'0319',
				'0320',
				'0321',
				'0322',
				'0323',
				'0324',
				'0325',
				'0326',
				'0327',
				'0329',
				'0330',
				'0331',
				'0332',
				'0333',
				'0334',
				'0335',
				'0336',
				'0337',
				'0338',
				'0339',
				'0340',
				'0341',
				'0342',
				'0343',
				'0344',
				'0345',
				'0346',
				'0347',
				'0348',
				'0349',
				'0350',
				'0351',
				'0352',
				'0353',
				'0354',
				'0355',
				'0356',
				'0357',
				'0358',
				'0359',
				'0360',
				'0361',
				'0362',
				'0363',
				'0364',
				'0365',
				'0366',
				'0367',
				'0368',
				'0369',
				'0370',
				'0371',
				'0372',
				'0373',
				'0376',
				'0439',
				'0440',
				'0441',
				'0442',
				'0443',
				'0454',
				'0455',
				'0456',
				'0459',
				'0495',
				'0496',
				'0497',
				'0498',
				'0499',
			],
			[
				'rules.0',
				'rules.1',
				'rules.2',
				'rules.3',
				'rules.4',
				'rules.5',
				'rules.6',
				'rules.7',
				'rules.8',
				'rules.9',
				'rules.10',
				'rules.11',
				'rules.12',
				'rules.13',
				'rules.14',
				'rules.15',
				'rules.16',
				'rules.17',
				'rules.18',
				'rules.19',
				'rules.20',
				'rules.21',
				'rules.22',
				'rules.23',
				'rules.24',
				'rules.25',
				'rules.26',
				'rules.27',
				'rules.28',
				'rules.29',
				'rules.30',
				'rules.31',
				'rules.32',
				'rules.33',
				'rules.34',
				'rules.35',
				'rules.36',
				'rules.37',
				'rules.38',
				'rules.39',
				'rules.40',
				'rules.41',
				'rules.42',
				'rules.43',
				'rules.44',
				'rules.45',
				'rules.46',
				'rules.47',
				'rules.48',
				'rules.49',
				'rules.50',
				'rules.51',
				'rules.52',
				'rules.53',
				'rules.54',
				'rules.55',
				'rules.56',
				'rules.57',
				'rules.58',
				'rules.59',
				'rules.60',
				'rules.61',
				'rules.62',
				'rules.63',
				'rules.64',
				'rules.65',
				'rules.66',
				'rules.67',
				'rules.68',
				'rules.69',
				'rules.70',
				'rules.71',
				'rules.72',
				'rules.73',
				'rules.74',
				'rules.75',
				'rules.76',
				'rules.77',
				'rules.78',
				'rules.79',
				'rules.80',
				'rules.81',
				'rules.82',
				'rules.83',
				'rules.84',
				'rules.85',
				'rules.86',
				'rules.87',
				'rules.88',
				'rules.89',
				'rules.90',
				'rules.91',
				'rules.92',
				'rules.93',
				'rules.94',
				'rules.95',
				'rules.96',
				'rules.97',
				'rules.98',
				'rules.99',
				'rules.100',
				'rules.101',
				'rules.102',
				'rules.103',
				'rules.104',
				'rules.105',
				'rules.106',
				'rules.107',
				'rules.108',
				'rules.109',
				'rules.110',
				'rules.111',
				'rules.112',
				'rules.113',
				'rules.114',
				'rules.115',
				'rules.116',
				'rules.117',
				'rules.118',
				'rules.119',
				'rules.120',
				'rules.121',
				'rules.122',
				'rules.123',
				'rules.124',
				'rules.125',
				'rules.126',
				'rules.127',
				'rules.128',
				'rules.129',
				'rules.130',
				'rules.131',
				'rules.132',
				'rules.133',
				'rules.134',
				'rules.135',
				'rules.136',
				'rules.137',
				'rules.138',
				'rules.139',
				'rules.140',
				'rules.141',
				'rules.142',
				'rules.143',
				'rules.144',
				'rules.145',
				'rules.146',
				'rules.147',
				'rules.148',
				'rules.149',
				'rules.150',
				'rules.151',
				'rules.152',
				'rules.153',
				'rules.154',
				'rules.155',
				'rules.156',
				'rules.157',
				'rules.158',
				'rules.159',
				'rules.160',
				'rules.161',
				'rules.162',
				'rules.163',
				'rules.164',
			],
		],
		'PHPStan\Rules\Debug\DumpTypeRule' => [['rules.0']],
		'PHPStan\Rules\Debug\FileAssertRule' => [['rules.1']],
		'PHPStan\Rules\Api\ApiInstantiationRule' => [['rules.2']],
		'PHPStan\Rules\Api\ApiClassExtendsRule' => [['rules.3']],
		'PHPStan\Rules\Api\ApiClassImplementsRule' => [['rules.4']],
		'PHPStan\Rules\Api\ApiInterfaceExtendsRule' => [['rules.5']],
		'PHPStan\Rules\Api\ApiMethodCallRule' => [['rules.6']],
		'PHPStan\Rules\Api\ApiStaticCallRule' => [['rules.7']],
		'PHPStan\Rules\Api\ApiTraitUseRule' => [['rules.8']],
		'PHPStan\Rules\Api\GetTemplateTypeRule' => [['rules.9']],
		'PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule' => [['rules.10']],
		'PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule' => [['rules.11']],
		'PHPStan\Rules\Arrays\EmptyArrayItemRule' => [['rules.12']],
		'PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule' => [['rules.13']],
		'PHPStan\Rules\Cast\UnsetCastRule' => [['rules.14']],
		'PHPStan\Rules\Classes\AllowedSubTypesRule' => [['rules.15']],
		'PHPStan\Rules\Classes\ClassAttributesRule' => [['rules.16']],
		'PHPStan\Rules\Classes\ClassConstantAttributesRule' => [['rules.17']],
		'PHPStan\Rules\Classes\ClassConstantRule' => [['rules.18']],
		'PHPStan\Rules\Classes\DuplicateDeclarationRule' => [['rules.19']],
		'PHPStan\Rules\Classes\EnumSanityRule' => [['rules.20']],
		'PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule' => [['rules.21']],
		'PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule' => [['rules.22']],
		'PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule' => [['rules.23']],
		'PHPStan\Rules\Classes\ExistingClassInTraitUseRule' => [['rules.24']],
		'PHPStan\Rules\Classes\InstantiationRule' => [['rules.25']],
		'PHPStan\Rules\Classes\InstantiationCallableRule' => [['rules.26']],
		'PHPStan\Rules\Classes\InvalidPromotedPropertiesRule' => [['rules.27']],
		'PHPStan\Rules\Classes\LocalTypeAliasesRule' => [['rules.28']],
		'PHPStan\Rules\Classes\LocalTypeTraitAliasesRule' => [['rules.29']],
		'PHPStan\Rules\Classes\NewStaticRule' => [['rules.30']],
		'PHPStan\Rules\Classes\NonClassAttributeClassRule' => [['rules.31']],
		'PHPStan\Rules\Classes\TraitAttributeClassRule' => [['rules.32']],
		'PHPStan\Rules\Constants\FinalConstantRule' => [['rules.33']],
		'PHPStan\Rules\EnumCases\EnumCaseAttributesRule' => [['rules.34']],
		'PHPStan\Rules\Exceptions\ThrowExpressionRule' => [['rules.35']],
		'PHPStan\Rules\Functions\ArrowFunctionAttributesRule' => [['rules.36']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule' => [['rules.37']],
		'PHPStan\Rules\Functions\ClosureAttributesRule' => [['rules.38']],
		'PHPStan\Rules\Functions\DefineParametersRule' => [['rules.39']],
		'PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule' => [['rules.40']],
		'PHPStan\Rules\Functions\CallToFunctionParametersRule' => [['rules.41']],
		'PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule' => [['rules.42']],
		'PHPStan\Rules\Functions\ExistingClassesInTypehintsRule' => [['rules.43']],
		'PHPStan\Rules\Functions\FunctionAttributesRule' => [['rules.44']],
		'PHPStan\Rules\Functions\InnerFunctionRule' => [['rules.45']],
		'PHPStan\Rules\Functions\ParamAttributesRule' => [['rules.46']],
		'PHPStan\Rules\Functions\PrintfParametersRule' => [['rules.47']],
		'PHPStan\Rules\Functions\ReturnNullsafeByRefRule' => [['rules.48']],
		'PHPStan\Rules\Keywords\ContinueBreakInLoopRule' => [['rules.49']],
		'PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule' => [['rules.50']],
		'PHPStan\Rules\Methods\CallMethodsRule' => [['rules.51']],
		'PHPStan\Rules\Methods\CallStaticMethodsRule' => [['rules.52']],
		'PHPStan\Rules\Methods\ConstructorReturnTypeRule' => [['rules.53']],
		'PHPStan\Rules\Methods\ExistingClassesInTypehintsRule' => [['rules.54']],
		'PHPStan\Rules\Methods\FinalPrivateMethodRule' => [['rules.55']],
		'PHPStan\Rules\Methods\MethodCallableRule' => [['rules.56']],
		'PHPStan\Rules\Methods\MissingMethodImplementationRule' => [['rules.57']],
		'PHPStan\Rules\Methods\MethodAttributesRule' => [['rules.58']],
		'PHPStan\Rules\Methods\StaticMethodCallableRule' => [['rules.59']],
		'PHPStan\Rules\Operators\InvalidAssignVarRule' => [['rules.60']],
		'PHPStan\Rules\Properties\AccessPropertiesInAssignRule' => [['rules.61']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule' => [['rules.62']],
		'PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule' => [['rules.63']],
		'PHPStan\Rules\Properties\PropertyAttributesRule' => [['rules.64']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyRule' => [['rules.65']],
		'PHPStan\Rules\Variables\UnsetRule' => [['rules.66']],
		'PHPStan\Rules\Whitespace\FileWhitespaceRule' => [['rules.67']],
		'PHPStan\Rules\Classes\UnusedConstructorParametersRule' => [['rules.68']],
		'PHPStan\Rules\Constants\ConstantRule' => [['rules.69']],
		'PHPStan\Rules\Functions\UnusedClosureUsesRule' => [['rules.70']],
		'PHPStan\Rules\Variables\EmptyRule' => [['rules.71']],
		'PHPStan\Rules\Variables\IssetRule' => [['rules.72']],
		'PHPStan\Rules\Variables\NullCoalesceRule' => [['rules.73']],
		'PHPStan\Rules\Cast\EchoRule' => [['rules.74']],
		'PHPStan\Rules\Cast\InvalidCastRule' => [['rules.75']],
		'PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule' => [['rules.76']],
		'PHPStan\Rules\Cast\PrintRule' => [['rules.77']],
		'PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule' => [['rules.78']],
		'PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule' => [['rules.79']],
		'PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule' => [['rules.80']],
		'PHPStan\Rules\Generics\ClassAncestorsRule' => [['rules.81']],
		'PHPStan\Rules\Generics\ClassTemplateTypeRule' => [['rules.82']],
		'PHPStan\Rules\Generics\EnumAncestorsRule' => [['rules.83']],
		'PHPStan\Rules\Generics\EnumTemplateTypeRule' => [['rules.84']],
		'PHPStan\Rules\Generics\FunctionTemplateTypeRule' => [['rules.85']],
		'PHPStan\Rules\Generics\FunctionSignatureVarianceRule' => [['rules.86']],
		'PHPStan\Rules\Generics\InterfaceAncestorsRule' => [['rules.87']],
		'PHPStan\Rules\Generics\InterfaceTemplateTypeRule' => [['rules.88']],
		'PHPStan\Rules\Generics\MethodTemplateTypeRule' => [['rules.89']],
		'PHPStan\Rules\Generics\MethodSignatureVarianceRule' => [['rules.90']],
		'PHPStan\Rules\Generics\TraitTemplateTypeRule' => [['rules.91']],
		'PHPStan\Rules\Generics\UsedTraitsRule' => [['rules.92']],
		'PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule' => [['rules.93']],
		'PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule' => [['rules.94']],
		'PHPStan\Rules\Operators\InvalidBinaryOperationRule' => [['rules.95']],
		'PHPStan\Rules\Operators\InvalidUnaryOperationRule' => [['rules.96']],
		'PHPStan\Rules\Operators\InvalidComparisonOperationRule' => [['rules.97']],
		'PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule' => [['rules.98']],
		'PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule' => [['rules.99']],
		'PHPStan\Rules\PhpDoc\FunctionAssertRule' => [['rules.100']],
		'PHPStan\Rules\PhpDoc\MethodAssertRule' => [['rules.101']],
		'PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule' => [['rules.102']],
		'PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule' => [['rules.103']],
		'PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule' => [['rules.104']],
		'PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule' => [['rules.105']],
		'PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule' => [['rules.106']],
		'PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule' => [['rules.107']],
		'PHPStan\Rules\Arrays\ArrayDestructuringRule' => [['rules.108']],
		'PHPStan\Rules\Arrays\IterableInForeachRule' => [['rules.109']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignmentRule' => [['rules.110']],
		'PHPStan\Rules\Arrays\OffsetAccessAssignOpRule' => [['rules.111']],
		'PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule' => [['rules.112']],
		'PHPStan\Rules\Arrays\UnpackIterableInArrayRule' => [['rules.113']],
		'PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule' => [['rules.114']],
		'PHPStan\Rules\Functions\ClosureReturnTypeRule' => [['rules.115']],
		'PHPStan\Rules\Functions\ReturnTypeRule' => [['rules.116']],
		'PHPStan\Rules\Generators\YieldTypeRule' => [['rules.117']],
		'PHPStan\Rules\Methods\ReturnTypeRule' => [['rules.118']],
		'PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule' => [['rules.119']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule' => [['rules.120']],
		'PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule' => [['rules.121']],
		'PHPStan\Rules\Properties\TypesAssignedToPropertiesRule' => [['rules.122']],
		'PHPStan\Rules\Variables\ThrowTypeRule' => [['rules.123']],
		'PHPStan\Rules\Variables\VariableCloningRule' => [['rules.124']],
		'PHPStan\Rules\Arrays\DeadForeachRule' => [['rules.125']],
		'PHPStan\Rules\DeadCode\NoopRule' => [['rules.126']],
		'PHPStan\Rules\DeadCode\UnreachableStatementRule' => [['rules.127']],
		'PHPStan\Rules\DeadCode\UnusedPrivateConstantRule' => [['rules.128']],
		'PHPStan\Rules\DeadCode\UnusedPrivateMethodRule' => [['rules.129']],
		'PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule' => [['rules.130']],
		'PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule' => [['rules.131']],
		'PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule' => [['rules.132']],
		'PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule' => [['rules.133']],
		'PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule' => [['rules.134']],
		'PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule' => [['rules.135']],
		'PHPStan\Rules\Methods\NullsafeMethodCallRule' => [['rules.136']],
		'PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule' => [['rules.137']],
		'PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule' => [['rules.138']],
		'PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule' => [['rules.139']],
		'NunoMaduro\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule' => [['rules.140']],
		'NunoMaduro\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule' => [['rules.141']],
		'NunoMaduro\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule' => [['rules.142']],
		'NunoMaduro\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule' => [['rules.143']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule' => [['rules.144']],
		'PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule' => [['rules.145']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule' => [['rules.146']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule' => [['rules.147']],
		'PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule' => [['rules.148']],
		'PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule' => [['rules.149']],
		'PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule' => [['rules.150']],
		'PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule' => [['rules.151']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule' => [['rules.152']],
		'PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule' => [['rules.153']],
		'PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule' => [['rules.154']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule' => [['rules.155']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule' => [['rules.156']],
		'PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule' => [['rules.157']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule' => [['rules.158']],
		'PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule' => [['rules.159']],
		'PHPStan\Rules\PHPUnit\AssertSameBooleanExpectedRule' => [['rules.160']],
		'PHPStan\Rules\PHPUnit\AssertSameNullExpectedRule' => [['rules.161']],
		'PHPStan\Rules\PHPUnit\AssertSameWithCountRule' => [['rules.162']],
		'PHPStan\Rules\PHPUnit\MockMethodCallRule' => [['rules.163']],
		'PHPStan\Rules\PHPUnit\ShouldCallParentMethodsRule' => [['rules.164']],
		'PhpParser\BuilderFactory' => [['01']],
		'PHPStan\Parser\LexerFactory' => [['02']],
		'PhpParser\NodeVisitorAbstract' => [
			['03', '04', '05', '06', '07', '08', '09', '010', '011', '012', '013', '014', '015', '058', '070', '079'],
		],
		'PhpParser\NodeVisitor' => [
			['03', '04', '05', '06', '07', '08', '09', '010', '011', '012', '013', '014', '015', '058', '070', '079'],
		],
		'PhpParser\NodeVisitor\NameResolver' => [['03']],
		'PHPStan\Parser\ArrayFilterArgVisitor' => [['04']],
		'PHPStan\Parser\ArrayMapArgVisitor' => [['05']],
		'PHPStan\Parser\ArrayWalkArgVisitor' => [['06']],
		'PHPStan\Parser\ClosureArgVisitor' => [['07']],
		'PHPStan\Parser\CurlSetOptArgVisitor' => [['08']],
		'PHPStan\Parser\TypeTraverserInstanceofVisitor' => [['09']],
		'PHPStan\Parser\ArrowFunctionArgVisitor' => [['010']],
		'PHPStan\Parser\NewAssignedToPropertyVisitor' => [['011']],
		'PHPStan\Parser\ParentStmtTypesVisitor' => [['012']],
		'PHPStan\Parser\TryCatchTypeVisitor' => [['013']],
		'PHPStan\Parser\LastConditionVisitor' => [['014']],
		'PhpParser\NodeVisitor\NodeConnectingVisitor' => [['015']],
		'PHPStan\Node\Printer\ExprPrinter' => [['016']],
		'PhpParser\PrettyPrinter\Standard' => [['017']],
		'PhpParser\PrettyPrinterAbstract' => [['017']],
		'PHPStan\Node\Printer\Printer' => [['017']],
		'PHPStan\Broker\AnonymousClassNameHelper' => [['018']],
		'PHPStan\Php\PhpVersion' => [['019']],
		'PHPStan\Php\PhpVersionFactory' => [['020']],
		'PHPStan\Php\PhpVersionFactoryFactory' => [['021']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['022']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['023']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['024']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['025']],
		'PHPStan\PhpDoc\ConstExprParserFactory' => [['026']],
		'PHPStan\PhpDoc\PhpDocInheritanceResolver' => [['027']],
		'PHPStan\PhpDoc\PhpDocNodeResolver' => [['028']],
		'PHPStan\PhpDoc\PhpDocStringResolver' => [['029']],
		'PHPStan\PhpDoc\ConstExprNodeResolver' => [['030']],
		'PHPStan\PhpDoc\TypeNodeResolver' => [['031']],
		'PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider' => [['032']],
		'PHPStan\PhpDoc\TypeStringResolver' => [['033']],
		'PHPStan\PhpDoc\StubValidator' => [['034']],
		'PHPStan\PhpDoc\StubFilesExtension' => [['035', '037', '0458']],
		'PHPStan\PhpDoc\CountableStubFilesExtension' => [['035']],
		'PHPStan\PhpDoc\StubFilesProvider' => [['036']],
		'PHPStan\PhpDoc\DefaultStubFilesProvider' => [['036']],
		'PHPStan\PhpDoc\JsonValidateStubFilesExtension' => [['037']],
		'PHPStan\Analyser\Analyser' => [['038']],
		'PHPStan\Analyser\FileAnalyser' => [['039']],
		'PHPStan\Analyser\RuleErrorTransformer' => [['040']],
		'PHPStan\Analyser\IgnoredErrorHelper' => [['041']],
		'PHPStan\Analyser\InternalScopeFactory' => [['042']],
		'PHPStan\Analyser\LazyInternalScopeFactory' => [['042']],
		'PHPStan\Analyser\ScopeFactory' => [['043']],
		'PHPStan\Analyser\NodeScopeResolver' => [['044']],
		'PHPStan\Analyser\ConstantResolver' => [['045']],
		'PHPStan\Analyser\ConstantResolverFactory' => [['046']],
		'PHPStan\Analyser\ResultCache\ResultCacheManagerFactory' => [['047']],
		'PHPStan\Analyser\ResultCache\ResultCacheClearer' => [['048']],
		'PHPStan\Cache\Cache' => [['049']],
		'PHPStan\Collectors\Registry' => [['050']],
		'PHPStan\Collectors\RegistryFactory' => [['051']],
		'PHPStan\Command\AnalyseApplication' => [['052']],
		'PHPStan\Command\AnalyserRunner' => [['053']],
		'PHPStan\Command\FixerApplication' => [['054']],
		'PHPStan\Dependency\DependencyResolver' => [['055']],
		'PHPStan\Dependency\ExportedNodeFetcher' => [['056']],
		'PHPStan\Dependency\ExportedNodeResolver' => [['057']],
		'PHPStan\Dependency\ExportedNodeVisitor' => [['058']],
		'PHPStan\DependencyInjection\Container' => [['059'], ['060']],
		'PHPStan\DependencyInjection\Nette\NetteContainer' => [['060']],
		'PHPStan\DependencyInjection\DerivativeContainerFactory' => [['061']],
		'PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider' => [['062']],
		'PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider' => [['063']],
		'PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider' => [['064']],
		'PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider' => [['065']],
		'PHPStan\File\FileHelper' => [['066']],
		'PHPStan\File\FileExcluderFactory' => [['067']],
		'PHPStan\File\FileExcluderRawFactory' => [['068']],
		'PHPStan\File\FileExcluder' => [2 => ['fileExcluderAnalyse', 'fileExcluderScan']],
		'PHPStan\File\FileFinder' => [2 => ['fileFinderAnalyse', 'fileFinderScan']],
		'PHPStan\File\FileMonitor' => [['069']],
		'PHPStan\NodeVisitor\StatementOrderVisitor' => [['070']],
		'PHPStan\Parallel\ParallelAnalyser' => [['071']],
		'PHPStan\Parallel\Scheduler' => [['072']],
		'PHPStan\Parser\FunctionCallStatementFinder' => [['073']],
		'PHPStan\Process\CpuCoreCounter' => [['074']],
		'PHPStan\Reflection\FunctionReflectionFactory' => [['075']],
		'PHPStan\Reflection\InitializerExprTypeResolver' => [['076']],
		'PHPStan\Reflection\MethodsClassReflectionExtension' => [
			[
				'077',
				'087',
				'089',
				'091',
				'0377',
				'0378',
				'0379',
				'0380',
				'0381',
				'0382',
				'0383',
				'0384',
				'0385',
				'0386',
				'0387',
				'0388',
				'0501',
			],
		],
		'PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension' => [['077']],
		'PHPStan\Reflection\PropertiesClassReflectionExtension' => [
			['078', '088', '089', '093', '0222', '0389', '0390', '0391', '0399', '0500'],
		],
		'PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension' => [['078']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor' => [['079']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher' => [['080']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker' => [['081']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory' => [['082']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository' => [['083']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory' => [['084']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory' => [['085']],
		'PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository' => [['086']],
		'PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension' => [['087']],
		'PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension' => [['088']],
		'PHPStan\Reflection\Php\PhpClassReflectionExtension' => [['089']],
		'PHPStan\Reflection\Php\PhpMethodReflectionFactory' => [['090']],
		'PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension' => [['091']],
		'PHPStan\Reflection\AllowedSubTypesClassReflectionExtension' => [['092']],
		'PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension' => [['092']],
		'PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension' => [['093']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider' => [['094']],
		'PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider' => [['095']],
		'PHPStan\Reflection\SignatureMap\SignatureMapParser' => [['096']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProvider' => [['0100'], ['097', '098']],
		'PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider' => [['097']],
		'PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider' => [['098']],
		'PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory' => [['099']],
		'PHPStan\Rules\Api\ApiRuleHelper' => [['0101']],
		'PHPStan\Rules\AttributesCheck' => [['0102']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck' => [['0103']],
		'PHPStan\Rules\ClassCaseSensitivityCheck' => [['0104']],
		'PHPStan\Rules\Classes\LocalTypeAliasesCheck' => [['0105']],
		'PHPStan\Rules\Comparison\ConstantConditionRuleHelper' => [['0106']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper' => [['0107']],
		'PHPStan\Rules\Exceptions\ExceptionTypeResolver' => [1 => ['0108'], [1 => 'exceptionTypeResolver']],
		'PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver' => [['0108']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule' => [['0109']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule' => [['0110']],
		'PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck' => [['0111']],
		'PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule' => [['0112']],
		'PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule' => [['0113']],
		'PHPStan\Rules\Exceptions\TooWideThrowTypeCheck' => [['0114']],
		'PHPStan\Rules\FunctionCallParametersCheck' => [['0115']],
		'PHPStan\Rules\FunctionDefinitionCheck' => [['0116']],
		'PHPStan\Rules\FunctionReturnTypeCheck' => [['0117']],
		'PHPStan\Rules\Generics\CrossCheckInterfacesHelper' => [['0118']],
		'PHPStan\Rules\Generics\GenericAncestorsCheck' => [['0119']],
		'PHPStan\Rules\Generics\GenericObjectTypeCheck' => [['0120']],
		'PHPStan\Rules\Generics\TemplateTypeCheck' => [['0121']],
		'PHPStan\Rules\Generics\VarianceCheck' => [['0122']],
		'PHPStan\Rules\IssetCheck' => [['0123']],
		'PHPStan\Rules\Methods\MethodCallCheck' => [['0124']],
		'PHPStan\Rules\Methods\StaticMethodCallCheck' => [['0125']],
		'PHPStan\Rules\Methods\MethodSignatureRule' => [['0126']],
		'PHPStan\Rules\Methods\MethodParameterComparisonHelper' => [['0127']],
		'PHPStan\Rules\MissingTypehintCheck' => [['0128']],
		'PHPStan\Rules\NullsafeCheck' => [['0129']],
		'PHPStan\Rules\Constants\AlwaysUsedClassConstantsExtensionProvider' => [['0130']],
		'PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider' => [['0130']],
		'PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper' => [['0131']],
		'PHPStan\Rules\PhpDoc\AssertRuleHelper' => [['0132']],
		'PHPStan\Rules\PhpDoc\UnresolvableTypeHelper' => [['0133']],
		'PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper' => [['0134']],
		'PHPStan\Rules\Playground\NeverRuleHelper' => [['0135']],
		'PHPStan\Rules\Properties\ReadWritePropertiesExtensionProvider' => [['0136']],
		'PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider' => [['0136']],
		'PHPStan\Rules\Properties\PropertyDescriptor' => [['0137']],
		'PHPStan\Rules\Properties\PropertyReflectionFinder' => [['0138']],
		'PHPStan\Rules\RuleLevelHelper' => [['0139']],
		'PHPStan\Rules\UnusedFunctionParametersCheck' => [['0140']],
		'PHPStan\Type\FileTypeMapper' => [['0141']],
		'PHPStan\Type\TypeAliasResolver' => [['0142']],
		'PHPStan\Type\TypeAliasResolverProvider' => [['0143']],
		'PHPStan\Type\BitwiseFlagHelper' => [['0144']],
		'PHPStan\Type\DynamicFunctionReturnTypeExtension' => [
			[
				'0145',
				'0146',
				'0147',
				'0148',
				'0149',
				'0150',
				'0151',
				'0152',
				'0153',
				'0154',
				'0155',
				'0157',
				'0158',
				'0159',
				'0160',
				'0161',
				'0162',
				'0163',
				'0164',
				'0165',
				'0166',
				'0167',
				'0168',
				'0169',
				'0170',
				'0171',
				'0173',
				'0174',
				'0177',
				'0178',
				'0182',
				'0183',
				'0185',
				'0187',
				'0188',
				'0189',
				'0191',
				'0194',
				'0195',
				'0202',
				'0203',
				'0205',
				'0206',
				'0207',
				'0208',
				'0209',
				'0210',
				'0211',
				'0212',
				'0213',
				'0215',
				'0224',
				'0227',
				'0228',
				'0229',
				'0230',
				'0231',
				'0233',
				'0234',
				'0235',
				'0236',
				'0237',
				'0238',
				'0239',
				'0240',
				'0241',
				'0242',
				'0243',
				'0244',
				'0245',
				'0246',
				'0247',
				'0248',
				'0250',
				'0251',
				'0252',
				'0253',
				'0254',
				'0255',
				'0256',
				'0257',
				'0260',
				'0269',
				'0273',
				'0274',
				'0277',
				'0278',
				'0279',
				'0280',
				'0281',
				'0282',
				'0418',
				'0419',
				'0420',
				'0421',
				'0422',
				'0433',
				'0434',
				'0435',
				'0474',
				'0475',
			],
		],
		'PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension' => [['0145']],
		'PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension' => [['0146']],
		'PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension' => [['0147']],
		'PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension' => [['0148']],
		'PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension' => [['0149']],
		'PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension' => [['0150']],
		'PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension' => [['0151']],
		'PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension' => [['0152']],
		'PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension' => [['0153']],
		'PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension' => [['0154']],
		'PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension' => [['0155']],
		'PHPStan\Type\FunctionTypeSpecifyingExtension' => [
			[
				'0156',
				'0172',
				'0186',
				'0221',
				'0225',
				'0226',
				'0258',
				'0259',
				'0261',
				'0262',
				'0263',
				'0264',
				'0265',
				'0266',
				'0267',
				'0268',
				'0270',
				'0272',
				'0429',
				'0430',
				'0431',
				'0432',
				'0485',
			],
		],
		'PHPStan\Analyser\TypeSpecifierAwareExtension' => [
			[
				'0156',
				'0172',
				'0186',
				'0221',
				'0225',
				'0226',
				'0232',
				'0258',
				'0259',
				'0261',
				'0262',
				'0263',
				'0264',
				'0265',
				'0266',
				'0267',
				'0268',
				'0270',
				'0272',
				'0274',
				'0429',
				'0430',
				'0431',
				'0432',
				'0485',
				'0486',
				'0487',
			],
		],
		'PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension' => [['0156']],
		'PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension' => [['0157']],
		'PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension' => [['0158']],
		'PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension' => [['0159']],
		'PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension' => [['0160']],
		'PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension' => [['0161']],
		'PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension' => [['0162']],
		'PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension' => [['0163']],
		'PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension' => [['0164']],
		'PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension' => [['0165']],
		'PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension' => [['0166']],
		'PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension' => [['0167']],
		'PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension' => [['0168']],
		'PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension' => [['0169']],
		'PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension' => [['0170']],
		'PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension' => [['0171']],
		'PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension' => [['0172']],
		'PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension' => [['0173']],
		'PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension' => [['0174']],
		'PHPStan\Type\DynamicFunctionThrowTypeExtension' => [['0175', '0214', '0216']],
		'PHPStan\Type\Php\AssertThrowTypeExtension' => [['0175']],
		'PHPStan\Type\DynamicStaticMethodReturnTypeExtension' => [
			[
				'0176',
				'0179',
				'0181',
				'0193',
				'0283',
				'0289',
				'0400',
				'0401',
				'0402',
				'0403',
				'0404',
				'0406',
				'0414',
				'0428',
				'0436',
			],
		],
		'PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension' => [['0176']],
		'PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension' => [['0177']],
		'PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension' => [['0178']],
		'PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension' => [['0179']],
		'PHPStan\Type\DynamicMethodReturnTypeExtension' => [
			[
				'0180',
				'0190',
				'0196',
				'0197',
				'0200',
				'0224',
				'0249',
				'0275',
				'0276',
				'0283',
				'0284',
				'0285',
				'0286',
				'0287',
				'0288',
				'0392',
				'0393',
				'0394',
				'0395',
				'0396',
				'0397',
				'0398',
				'0405',
				'0407',
				'0408',
				'0409',
				'0410',
				'0411',
				'0412',
				'0413',
				'0415',
				'0416',
				'0423',
				'0424',
				'0425',
				'0426',
				'0427',
				'0445',
				'0467',
				'0468',
				'0469',
				'0470',
				'0471',
				'0472',
				'0473',
				'0488',
				'0489',
				'0490',
			],
		],
		'PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension' => [['0180']],
		'PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension' => [['0181']],
		'PHPStan\Type\Php\CompactFunctionReturnTypeExtension' => [['0182']],
		'PHPStan\Type\Php\ConstantFunctionReturnTypeExtension' => [['0183']],
		'PHPStan\Type\Php\ConstantHelper' => [['0184']],
		'PHPStan\Type\Php\CountFunctionReturnTypeExtension' => [['0185']],
		'PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension' => [['0186']],
		'PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension' => [['0187']],
		'PHPStan\Type\Php\CurlInitReturnTypeExtension' => [['0188']],
		'PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension' => [['0189']],
		'PHPStan\Type\Php\DateFormatMethodReturnTypeExtension' => [['0190']],
		'PHPStan\Type\Php\DateFunctionReturnTypeExtension' => [['0191']],
		'PHPStan\Type\DynamicStaticMethodThrowTypeExtension' => [
			['0192', '0198', '0199', '0217', '0218', '0219', '0220', '0223'],
		],
		'PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension' => [['0192']],
		'PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension' => [['0193']],
		'PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension' => [['0194']],
		'PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension' => [['0195']],
		'PHPStan\Type\Php\DateTimeModifyReturnTypeExtension' => [['0196', '0197']],
		'PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension' => [['0198']],
		'PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension' => [['0199']],
		'PHPStan\Type\Php\DsMapDynamicReturnTypeExtension' => [['0200']],
		'PHPStan\Type\DynamicMethodThrowTypeExtension' => [['0201']],
		'PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension' => [['0201']],
		'PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension' => [['0202']],
		'PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension' => [['0203']],
		'PHPStan\Type\Php\FilterFunctionReturnTypeHelper' => [['0204']],
		'PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension' => [['0205']],
		'PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension' => [['0206']],
		'PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension' => [['0207']],
		'PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension' => [['0208']],
		'PHPStan\Type\Php\GetClassDynamicReturnTypeExtension' => [['0209']],
		'PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension' => [['0210']],
		'PHPStan\Type\Php\GettypeFunctionReturnTypeExtension' => [['0211']],
		'PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension' => [['0212']],
		'PHPStan\Type\Php\HashFunctionsReturnTypeExtension' => [['0213']],
		'PHPStan\Type\Php\IntdivThrowTypeExtension' => [['0214']],
		'PHPStan\Type\Php\IniGetReturnTypeExtension' => [['0215']],
		'PHPStan\Type\Php\JsonThrowTypeExtension' => [['0216']],
		'PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension' => [['0217']],
		'PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension' => [['0218']],
		'PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension' => [['0219']],
		'PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension' => [['0220']],
		'PHPStan\Type\Php\StrContainingTypeSpecifyingExtension' => [['0221']],
		'PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension' => [['0222']],
		'PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension' => [['0223']],
		'PHPStan\Type\Php\StatDynamicReturnTypeExtension' => [['0224']],
		'PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension' => [['0225']],
		'PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension' => [['0226']],
		'PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension' => [['0227']],
		'PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension' => [['0228']],
		'PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension' => [['0229']],
		'PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension' => [['0230']],
		'PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension' => [['0231']],
		'PHPStan\Type\MethodTypeSpecifyingExtension' => [['0232', '0486']],
		'PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension' => [['0232']],
		'PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension' => [['0233']],
		'PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension' => [['0234']],
		'PHPStan\Type\Php\LtrimFunctionReturnTypeExtension' => [['0235']],
		'PHPStan\Type\Php\MbFunctionsReturnTypeExtension' => [['0236']],
		'PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension' => [['0237']],
		'PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension' => [['0238']],
		'PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension' => [['0239']],
		'PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension' => [['0240']],
		'PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension' => [['0241']],
		'PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension' => [['0242']],
		'PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension' => [['0243']],
		'PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension' => [['0244']],
		'PHPStan\Type\Php\StrlenFunctionReturnTypeExtension' => [['0245']],
		'PHPStan\Type\Php\StrPadFunctionReturnTypeExtension' => [['0246']],
		'PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension' => [['0247']],
		'PHPStan\Type\Php\SubstrDynamicReturnTypeExtension' => [['0248']],
		'PHPStan\Type\Php\ThrowableReturnTypeExtension' => [['0249']],
		'PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension' => [['0250']],
		'PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension' => [['0251']],
		'PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension' => [['0252']],
		'PHPStan\Type\Php\PowFunctionReturnTypeExtension' => [['0253']],
		'PHPStan\Type\Php\RoundFunctionReturnTypeExtension' => [['0254']],
		'PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension' => [['0255']],
		'PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension' => [['0256']],
		'PHPStan\Type\Php\RangeFunctionReturnTypeExtension' => [['0257']],
		'PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension' => [['0258']],
		'PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension' => [['0259']],
		'PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension' => [['0260']],
		'PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension' => [['0261']],
		'PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension' => [['0262']],
		'PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension' => [['0263']],
		'PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension' => [['0264']],
		'PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension' => [['0265']],
		'PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension' => [['0266']],
		'PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension' => [['0267']],
		'PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension' => [['0268']],
		'PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension' => [['0269']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension' => [['0270']],
		'PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper' => [['0271']],
		'PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension' => [['0272']],
		'PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension' => [['0273']],
		'PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension' => [['0274']],
		'PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension' => [['0275']],
		'PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension' => [['0276']],
		'PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension' => [['0277']],
		'PHPStan\Type\Php\StrTokFunctionReturnTypeExtension' => [['0278']],
		'PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension' => [['0279']],
		'PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension' => [['0280']],
		'PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension' => [['0281']],
		'PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension' => [['0282']],
		'PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension' => [['0283']],
		'PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension' => [['0284', '0285', '0286', '0287', '0288']],
		'PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension' => [['0289']],
		'PHPStan\Type\ClosureTypeFactory' => [['0290']],
		'PHPStan\Type\Constant\OversizedArrayBuilder' => [['0291']],
		'PHPStan\Analyser\TypeSpecifier' => [['typeSpecifier']],
		'PHPStan\Analyser\TypeSpecifierFactory' => [['typeSpecifierFactory']],
		'PHPStan\File\RelativePathHelper' => [
			0 => ['relativePathHelper'],
			2 => [1 => 'simpleRelativePathHelper', 'parentDirectoryRelativePathHelper'],
		],
		'PHPStan\File\ParentDirectoryRelativePathHelper' => [2 => ['parentDirectoryRelativePathHelper']],
		'PHPStan\Reflection\ReflectionProvider' => [['reflectionProvider'], ['broker'], [2 => 'betterReflectionProvider']],
		'PHPStan\Broker\Broker' => [['broker']],
		'PHPStan\Broker\BrokerFactory' => [['brokerFactory']],
		'PHPStan\Cache\CacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Cache\FileCacheStorage' => [2 => ['cacheStorage']],
		'PHPStan\Parser\Parser' => [
			2 => [
				'currentPhpVersionRichParser',
				'currentPhpVersionSimpleParser',
				'currentPhpVersionSimpleDirectParser',
				'defaultAnalysisParser',
				'php8Parser',
				'pathRoutingParser',
			],
		],
		'PHPStan\Parser\RichParser' => [2 => ['currentPhpVersionRichParser']],
		'PHPStan\Parser\CleaningParser' => [2 => ['currentPhpVersionSimpleParser']],
		'PHPStan\Parser\SimpleParser' => [2 => ['currentPhpVersionSimpleDirectParser', 'php8Parser']],
		'PHPStan\Parser\CachedParser' => [2 => ['defaultAnalysisParser']],
		'PhpParser\Parser' => [2 => ['phpParserDecorator', 'currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Parser\PhpParserDecorator' => [2 => ['phpParserDecorator']],
		'PhpParser\Lexer' => [2 => ['currentPhpVersionLexer', 'php8Lexer']],
		'PhpParser\ParserAbstract' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PhpParser\Parser\Php7' => [2 => ['currentPhpVersionPhpParser', 'php8PhpParser']],
		'PHPStan\Rules\Registry' => [['registry']],
		'PHPStan\Rules\LazyRegistry' => [['registry']],
		'PHPStan\PhpDoc\StubPhpDocProvider' => [['stubPhpDocProvider']],
		'PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory' => [['reflectionProviderFactory']],
		'PHPStan\BetterReflection\SourceLocator\Type\SourceLocator' => [2 => ['betterReflectionSourceLocator']],
		'PHPStan\BetterReflection\Reflector\Reflector' => [
			0 => ['originalBetterReflectionReflector'],
			2 => [
				1 => 'betterReflectionReflector',
				'betterReflectionClassReflector',
				'betterReflectionFunctionReflector',
				'betterReflectionConstantReflector',
				'nodeScopeResolverReflector',
			],
		],
		'PHPStan\BetterReflection\Reflector\DefaultReflector' => [['originalBetterReflectionReflector']],
		'PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector' => [
			2 => ['betterReflectionReflector', 'nodeScopeResolverReflector'],
		],
		'PHPStan\BetterReflection\Reflector\ClassReflector' => [2 => ['betterReflectionClassReflector']],
		'PHPStan\BetterReflection\Reflector\FunctionReflector' => [2 => ['betterReflectionFunctionReflector']],
		'PHPStan\BetterReflection\Reflector\ConstantReflector' => [2 => ['betterReflectionConstantReflector']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProvider' => [2 => ['betterReflectionProvider']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory' => [['0292']],
		'PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory' => [['0293']],
		'PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory' => [['0294']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\SourceStubber' => [1 => ['0295', '0296']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber' => [['0295']],
		'PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber' => [['0296']],
		'PhpParser\Lexer\Emulative' => [2 => ['php8Lexer']],
		'PHPStan\Parser\PathRoutingParser' => [2 => ['pathRoutingParser']],
		'PHPStan\Command\ErrorFormatter\ErrorFormatter' => [
			[
				'errorFormatter.raw',
				'errorFormatter.table',
				'errorFormatter.checkstyle',
				'errorFormatter.json',
				'errorFormatter.junit',
				'errorFormatter.prettyJson',
				'errorFormatter.gitlab',
				'errorFormatter.github',
				'errorFormatter.teamcity',
			],
			['0297'],
		],
		'PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter' => [['0297']],
		'PHPStan\Command\ErrorFormatter\RawErrorFormatter' => [['errorFormatter.raw']],
		'PHPStan\Command\ErrorFormatter\TableErrorFormatter' => [['errorFormatter.table']],
		'PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter' => [['errorFormatter.checkstyle']],
		'PHPStan\Command\ErrorFormatter\JsonErrorFormatter' => [['errorFormatter.json', 'errorFormatter.prettyJson']],
		'PHPStan\Command\ErrorFormatter\JunitErrorFormatter' => [['errorFormatter.junit']],
		'PHPStan\Command\ErrorFormatter\GitlabErrorFormatter' => [['errorFormatter.gitlab']],
		'PHPStan\Command\ErrorFormatter\GithubErrorFormatter' => [['errorFormatter.github']],
		'PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter' => [['errorFormatter.teamcity']],
		'PHPStan\Rules\Api\ApiClassConstFetchRule' => [['0298']],
		'PHPStan\Rules\Api\ApiInstanceofRule' => [['0299']],
		'PHPStan\Rules\Api\ApiInstanceofTypeRule' => [['0300']],
		'PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule' => [['0301']],
		'PHPStan\Rules\Api\RuntimeReflectionFunctionRule' => [['0302']],
		'PHPStan\Rules\Api\RuntimeReflectionInstantiationRule' => [['0303']],
		'PHPStan\Rules\Classes\ExistingClassInClassExtendsRule' => [['0304']],
		'PHPStan\Rules\Classes\ExistingClassInInstanceOfRule' => [['0305']],
		'PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule' => [['0306']],
		'PHPStan\Rules\Functions\CallToNonExistentFunctionRule' => [['0307']],
		'PHPStan\Rules\Constants\OverridingConstantRule' => [['0308']],
		'PHPStan\Rules\Methods\OverridingMethodRule' => [['0309']],
		'PHPStan\Rules\Methods\ConsistentConstructorRule' => [['0310']],
		'PHPStan\Rules\Missing\MissingReturnRule' => [['0311']],
		'PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule' => [['0312']],
		'PHPStan\Rules\Namespaces\ExistingNamesInUseRule' => [['0313']],
		'PHPStan\Rules\Operators\InvalidIncDecOperationRule' => [['0314']],
		'PHPStan\Rules\Properties\AccessPropertiesRule' => [['0315']],
		'PHPStan\Rules\Properties\AccessStaticPropertiesRule' => [['0316']],
		'PHPStan\Rules\Properties\ExistingClassesInPropertiesRule' => [['0317']],
		'PHPStan\Rules\Functions\FunctionCallableRule' => [['0318']],
		'PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule' => [['0319']],
		'PHPStan\Rules\Properties\OverridingPropertyRule' => [['0320']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule' => [['0321']],
		'PHPStan\Rules\Properties\UninitializedPropertyRule' => [['0322']],
		'PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule' => [['0323']],
		'PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule' => [['0324']],
		'PHPStan\Rules\Variables\CompactVariablesRule' => [['0325']],
		'PHPStan\Rules\Variables\DefinedVariableRule' => [['0326']],
		'PHPStan\Rules\Regexp\RegularExpressionPatternRule' => [['0327']],
		'PHPStan\Reflection\ConstructorsHelper' => [['0328']],
		'PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule' => [['0329']],
		'PHPStan\Rules\Classes\MixinRule' => [['0330']],
		'PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule' => [['0331']],
		'PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule' => [['0332']],
		'PHPStan\Rules\Functions\CallCallablesRule' => [['0333']],
		'PHPStan\Rules\Methods\IllegalConstructorMethodCallRule' => [['0334']],
		'PHPStan\Rules\Methods\IllegalConstructorStaticCallRule' => [['0335']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule' => [['0336']],
		'PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule' => [['0337']],
		'PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule' => [['0338']],
		'PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule' => [['0339']],
		'PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule' => [['0340']],
		'PHPStan\Rules\Generics\PropertyVarianceRule' => [['0341']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule' => [['0342']],
		'PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule' => [['0343']],
		'PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule' => [['0344']],
		'PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule' => [['0345']],
		'PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule' => [['0346']],
		'PHPStan\Rules\Generators\YieldFromTypeRule' => [['0347']],
		'PHPStan\Rules\Generators\YieldInGeneratorRule' => [['0348']],
		'PHPStan\Rules\Arrays\ArrayUnpackingRule' => [['0349']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule' => [['0350']],
		'PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule' => [['0351']],
		'PHPStan\Rules\Classes\ImpossibleInstanceOfRule' => [['0352']],
		'PHPStan\Rules\Comparison\BooleanAndConstantConditionRule' => [['0353']],
		'PHPStan\Rules\Comparison\BooleanOrConstantConditionRule' => [['0354']],
		'PHPStan\Rules\Comparison\BooleanNotConstantConditionRule' => [['0355']],
		'PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule' => [['0356']],
		'PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule' => [['0357']],
		'PHPStan\Rules\Comparison\ElseIfConstantConditionRule' => [['0358']],
		'PHPStan\Rules\Comparison\IfConstantConditionRule' => [['0359']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule' => [['0360']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule' => [['0361']],
		'PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule' => [['0362']],
		'PHPStan\Rules\Comparison\MatchExpressionRule' => [['0363']],
		'PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule' => [['0364']],
		'PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule' => [['0365']],
		'PHPStan\Rules\Comparison\ConstantLooseComparisonRule' => [['0366']],
		'PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule' => [['0367']],
		'PHPStan\Rules\Comparison\UnreachableIfBranchesRule' => [['0368']],
		'PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule' => [['0369']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule' => [['0370']],
		'PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule' => [['0371']],
		'PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule' => [['0372']],
		'PHPStan\Rules\Properties\NullsafePropertyFetchRule' => [['0373']],
		'PHPStan\Collectors\Collector' => [['0374', '0375', '0460', '0461', '0462', '0463', '0464']],
		'PHPStan\Rules\Traits\TraitDeclarationCollector' => [['0374']],
		'PHPStan\Rules\Traits\TraitUseCollector' => [['0375']],
		'PHPStan\Rules\Traits\NotAnalysedTraitRule' => [['0376']],
		'Carbon\PHPStan\MacroExtension' => [['0377']],
		'NunoMaduro\Larastan\Methods\RelationForwardsCallsExtension' => [['0378']],
		'NunoMaduro\Larastan\Methods\ModelForwardsCallsExtension' => [['0379']],
		'NunoMaduro\Larastan\Methods\EloquentBuilderForwardsCallsExtension' => [['0380']],
		'NunoMaduro\Larastan\Methods\HigherOrderTapProxyExtension' => [['0381']],
		'NunoMaduro\Larastan\Methods\HigherOrderCollectionProxyExtension' => [['0382']],
		'NunoMaduro\Larastan\Methods\StorageMethodsClassReflectionExtension' => [['0383']],
		'NunoMaduro\Larastan\Methods\Extension' => [['0384']],
		'NunoMaduro\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension' => [['0385']],
		'NunoMaduro\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension' => [['0386']],
		'NunoMaduro\Larastan\Methods\MacroMethodsClassReflectionExtension' => [['0387']],
		'NunoMaduro\Larastan\Methods\ViewWithMethodsClassReflectionExtension' => [['0388']],
		'NunoMaduro\Larastan\Properties\ModelAccessorExtension' => [['0389']],
		'NunoMaduro\Larastan\Properties\ModelPropertyExtension' => [['0390']],
		'NunoMaduro\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension' => [['0391']],
		'NunoMaduro\Larastan\Types\RelationDynamicMethodReturnTypeExtension' => [['0392']],
		'NunoMaduro\Larastan\Types\ModelRelationsDynamicMethodReturnTypeExtension' => [['0393']],
		'NunoMaduro\Larastan\ReturnTypes\HigherOrderTapProxyExtension' => [['0394']],
		'NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension' => [
			['0395', '0396', '0397', '0398'],
		],
		'NunoMaduro\Larastan\Properties\ModelRelationsExtension' => [['0399']],
		'NunoMaduro\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension' => [['0400']],
		'NunoMaduro\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension' => [['0401']],
		'NunoMaduro\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension' => [['0402']],
		'NunoMaduro\Larastan\ReturnTypes\AuthExtension' => [['0403']],
		'NunoMaduro\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension' => [['0404']],
		'NunoMaduro\Larastan\ReturnTypes\AuthManagerExtension' => [['0405']],
		'NunoMaduro\Larastan\ReturnTypes\DateExtension' => [['0406']],
		'NunoMaduro\Larastan\ReturnTypes\GuardExtension' => [['0407']],
		'NunoMaduro\Larastan\ReturnTypes\RequestFileExtension' => [['0408']],
		'NunoMaduro\Larastan\ReturnTypes\RequestRouteExtension' => [['0409']],
		'NunoMaduro\Larastan\ReturnTypes\RequestUserExtension' => [['0410']],
		'NunoMaduro\Larastan\ReturnTypes\EloquentBuilderExtension' => [['0411']],
		'NunoMaduro\Larastan\ReturnTypes\RelationFindExtension' => [['0412']],
		'NunoMaduro\Larastan\ReturnTypes\RelationCollectionExtension' => [['0413']],
		'NunoMaduro\Larastan\ReturnTypes\ModelFindExtension' => [['0414']],
		'NunoMaduro\Larastan\ReturnTypes\BuilderModelFindExtension' => [['0415']],
		'NunoMaduro\Larastan\ReturnTypes\TestCaseExtension' => [['0416']],
		'NunoMaduro\Larastan\Support\CollectionHelper' => [['0417']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\AuthExtension' => [['0418']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\CollectExtension' => [['0419']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\NowAndTodayExtension' => [['0420']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\ResponseExtension' => [['0421']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\ValidatorExtension' => [['0422']],
		'NunoMaduro\Larastan\ReturnTypes\CollectionFilterDynamicReturnTypeExtension' => [['0423']],
		'NunoMaduro\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension' => [['0424']],
		'NunoMaduro\Larastan\ReturnTypes\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension' => [['0425']],
		'NunoMaduro\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension' => [['0426']],
		'NunoMaduro\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension' => [['0427']],
		'NunoMaduro\Larastan\ReturnTypes\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension' => [['0428']],
		'NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension' => [['0429', '0430', '0431', '0432']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\AppExtension' => [['0433']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\ValueExtension' => [['0434']],
		'NunoMaduro\Larastan\ReturnTypes\Helpers\TapExtension' => [['0435']],
		'NunoMaduro\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension' => [['0436']],
		'PHPStan\PhpDoc\TypeNodeResolverExtension' => [['0437', '0438', '0444', '0446', '0484']],
		'NunoMaduro\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension' => [['0437']],
		'NunoMaduro\Larastan\Types\ViewStringTypeNodeResolverExtension' => [['0438']],
		'NunoMaduro\Larastan\Rules\OctaneCompatibilityRule' => [['0439']],
		'NunoMaduro\Larastan\Rules\NoModelMakeRule' => [['0440']],
		'NunoMaduro\Larastan\Rules\NoUnnecessaryCollectionCallRule' => [['0441']],
		'NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertyRule' => [['0442']],
		'NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertyStaticCallRule' => [['0443']],
		'NunoMaduro\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension' => [['0444']],
		'NunoMaduro\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension' => [['0445']],
		'NunoMaduro\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension' => [['0446']],
		'NunoMaduro\Larastan\Types\RelationParserHelper' => [['0447']],
		'NunoMaduro\Larastan\Properties\MigrationHelper' => [['0448']],
		'NunoMaduro\Larastan\Properties\SquashedMigrationHelper' => [['0449']],
		'NunoMaduro\Larastan\Properties\ModelCastHelper' => [['0450']],
		'NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertiesRuleHelper' => [['0451']],
		'NunoMaduro\Larastan\Rules\ModelRuleHelper' => [['0452']],
		'NunoMaduro\Larastan\Methods\BuilderHelper' => [['0453']],
		'NunoMaduro\Larastan\Rules\RelationExistenceRule' => [['0454']],
		'NunoMaduro\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule' => [['0455', '0456']],
		'NunoMaduro\Larastan\Properties\Schema\PhpMyAdminDataTypeToPhpTypeConverter' => [['0457']],
		'NunoMaduro\Larastan\LarastanStubFilesExtension' => [['0458']],
		'NunoMaduro\Larastan\Rules\UnusedViewsRule' => [['0459']],
		'NunoMaduro\Larastan\Collectors\UsedViewFunctionCollector' => [['0460']],
		'NunoMaduro\Larastan\Collectors\UsedEmailViewCollector' => [['0461']],
		'NunoMaduro\Larastan\Collectors\UsedViewMakeCollector' => [['0462']],
		'NunoMaduro\Larastan\Collectors\UsedViewFacadeMakeCollector' => [['0463']],
		'NunoMaduro\Larastan\Collectors\UsedRouteFacadeViewCollector' => [['0464']],
		'NunoMaduro\Larastan\Collectors\UsedViewInAnotherViewCollector' => [['0465']],
		'NunoMaduro\Larastan\Support\ViewFileHelper' => [['0466']],
		'NunoMaduro\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension' => [['0467']],
		'NunoMaduro\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension' => [['0468']],
		'NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension' => [['0469']],
		'NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension' => [['0470']],
		'NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension' => [['0471']],
		'NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension' => [['0472']],
		'NunoMaduro\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension' => [['0473']],
		'NunoMaduro\Larastan\ReturnTypes\TransHelperReturnTypeExtension' => [['0474']],
		'NunoMaduro\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension' => [['0475']],
		'NunoMaduro\Larastan\ReturnTypes\AppMakeHelper' => [['0476']],
		'NunoMaduro\Larastan\Internal\ConsoleApplicationResolver' => [['0477']],
		'NunoMaduro\Larastan\Internal\ConsoleApplicationHelper' => [['0478']],
		'NunoMaduro\Larastan\Support\HigherOrderCollectionProxyHelper' => [['0479']],
		'PHPStan\Rules\Deprecations\DeprecatedClassHelper' => [['0480']],
		'PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider' => [['0481']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeHelper' => [['0482']],
		'PHPStan\Rules\Deprecations\DeprecatedScopeResolver' => [['0483']],
		'PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver' => [['0483']],
		'PHPStan\PhpDoc\TypeNodeResolverAwareExtension' => [['0484']],
		'PHPStan\PhpDoc\PHPUnit\MockObjectTypeNodeResolverExtension' => [['0484']],
		'PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension' => [['0485']],
		'PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension' => [['0486']],
		'PHPStan\Type\StaticMethodTypeSpecifyingExtension' => [['0487']],
		'PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension' => [['0487']],
		'PHPStan\Type\PHPUnit\InvocationMockerDynamicReturnTypeExtension' => [['0488']],
		'PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension' => [['0489']],
		'PHPStan\Type\PHPUnit\MockObjectDynamicReturnTypeExtension' => [['0490']],
		'PHPStan\Rules\PHPUnit\CoversHelper' => [['0491']],
		'PHPStan\Rules\PHPUnit\AnnotationHelper' => [['0492']],
		'PHPStan\Rules\PHPUnit\DataProviderHelper' => [['0493']],
		'PHPStan\Rules\PHPUnit\DataProviderHelperFactory' => [['0494']],
		'PHPStan\Rules\PHPUnit\ClassCoversExistsRule' => [['0495']],
		'PHPStan\Rules\PHPUnit\ClassMethodCoversExistsRule' => [['0496']],
		'PHPStan\Rules\PHPUnit\DataProviderDeclarationRule' => [['0497']],
		'PHPStan\Rules\PHPUnit\NoMissingSpaceInClassAnnotationRule' => [['0498']],
		'PHPStan\Rules\PHPUnit\NoMissingSpaceInMethodAnnotationRule' => [['0499']],
		'Spatie\Invade\PHPStan\InvadePropertiesReflectionExtension' => [['0500']],
		'Spatie\Invade\PHPStan\InvadeMethodsReflectionExtension' => [['0501']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [
			'bootstrapFiles' => [
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/nunomaduro/larastan/bootstrap.php',
			],
			'excludes_analyse' => [],
			'excludePaths' => ['analyseAndScan' => ['*.blade.php'], 'analyse' => []],
			'level' => 4,
			'paths' => [
				'/Users/rabol/code/web/packages/filament-logviewer/src',
				'/Users/rabol/code/web/packages/filament-logviewer/config',
				'/Users/rabol/code/web/packages/filament-logviewer/database',
			],
			'exceptions' => [
				'implicitThrows' => true,
				'uncheckedExceptionRegexes' => ['#^PHPUnit\\\#', '#^SebastianBergmann\\\#'],
				'uncheckedExceptionClasses' => [],
				'checkedExceptionRegexes' => [],
				'checkedExceptionClasses' => [],
				'check' => ['missingCheckedExceptionInThrows' => false, 'tooWideThrowType' => false],
			],
			'featureToggles' => [
				'bleedingEdge' => false,
				'disableRuntimeReflectionProvider' => true,
				'skipCheckGenericClasses' => [
					'DatePeriod',
					'CallbackFilterIterator',
					'FilterIterator',
					'RecursiveCallbackFilterIterator',
					'AppendIterator',
					'NoRewindIterator',
					'LimitIterator',
					'InfiniteIterator',
					'CachingIterator',
					'RegexIterator',
				],
				'explicitMixedInUnknownGenericNew' => false,
				'explicitMixedForGlobalVariables' => false,
				'explicitMixedViaIsArray' => false,
				'arrayFilter' => false,
				'arrayUnpacking' => false,
				'nodeConnectingVisitorCompatibility' => true,
				'nodeConnectingVisitorRule' => false,
				'illegalConstructorMethodCall' => false,
				'disableCheckMissingIterableValueType' => false,
				'strictUnnecessaryNullsafePropertyFetch' => false,
				'looseComparison' => false,
				'consistentConstructor' => false,
				'checkUnresolvableParameterTypes' => false,
				'readOnlyByPhpDoc' => false,
				'phpDocParserRequireWhitespaceBeforeDescription' => false,
				'runtimeReflectionRules' => false,
				'notAnalysedTrait' => false,
				'curlSetOptTypes' => false,
				'listType' => false,
				'missingMagicSerializationRule' => false,
				'nullContextForVoidReturningFunctions' => false,
				'unescapeStrings' => false,
				'duplicateStubs' => false,
				'invarianceComposition' => false,
				'alwaysTrueAlwaysReported' => false,
				'disableUnreachableBranchesRules' => false,
				'varTagType' => false,
				'closureDefaultParameterTypeRule' => false,
				'newRuleLevelHelper' => false,
				'instanceofType' => false,
				'paramOutVariance' => false,
				'allInvalidPhpDocs' => false,
				'strictStaticMethodTemplateTypeVariance' => false,
				'propertyVariance' => false,
				'genericPrototypeMessage' => false,
				'stricterFunctionMap' => false,
				'invalidPhpDocTagLine' => false,
				'detectDeadTypeInMultiCatch' => false,
				'zeroFiles' => false,
				'callUserFunc' => false,
			],
			'fileExtensions' => ['php'],
			'checkAdvancedIsset' => true,
			'checkAlwaysTrueCheckTypeFunctionCall' => false,
			'checkAlwaysTrueInstanceof' => false,
			'checkAlwaysTrueStrictComparison' => false,
			'checkAlwaysTrueLooseComparison' => false,
			'reportAlwaysTrueInLastCondition' => false,
			'checkClassCaseSensitivity' => true,
			'checkExplicitMixed' => false,
			'checkImplicitMixed' => false,
			'checkFunctionArgumentTypes' => false,
			'checkFunctionNameCase' => false,
			'checkGenericClassInNonGenericObjectType' => false,
			'checkInternalClassCaseSensitivity' => false,
			'checkMissingIterableValueType' => false,
			'checkMissingCallableSignature' => false,
			'checkMissingVarTagTypehint' => false,
			'checkArgumentsPassedByReference' => false,
			'checkMaybeUndefinedVariables' => true,
			'checkNullables' => false,
			'checkThisOnly' => false,
			'checkUnionTypes' => false,
			'checkBenevolentUnionTypes' => false,
			'checkExplicitMixedMissingReturn' => false,
			'checkPhpDocMissingReturn' => false,
			'checkPhpDocMethodSignatures' => true,
			'checkExtraArguments' => true,
			'checkMissingTypehints' => false,
			'checkTooWideReturnTypesInProtectedAndPublicMethods' => false,
			'checkUninitializedProperties' => false,
			'checkDynamicProperties' => false,
			'deprecationRulesInstalled' => true,
			'inferPrivatePropertyTypeFromConstructor' => false,
			'reportMaybes' => false,
			'reportMaybesInMethodSignatures' => false,
			'reportMaybesInPropertyPhpDocTypes' => false,
			'reportStaticMethodSignatures' => false,
			'reportWrongPhpDocTypeInVarTag' => false,
			'mixinExcludeClasses' => ['Eloquent'],
			'scanFiles' => [],
			'scanDirectories' => [],
			'parallel' => [
				'jobSize' => 20,
				'processTimeout' => 600.0,
				'maximumNumberOfProcesses' => 32,
				'minimumNumberOfJobsPerProcess' => 2,
				'buffer' => 134217728,
			],
			'phpVersion' => null,
			'polluteScopeWithLoopInitialAssignments' => true,
			'polluteScopeWithAlwaysIterableForeach' => true,
			'propertyAlwaysWrittenTags' => [],
			'propertyAlwaysReadTags' => [],
			'additionalConstructors' => ['PHPUnit\Framework\TestCase::setUp'],
			'treatPhpDocTypesAsCertain' => true,
			'usePathConstantsAsConstantString' => false,
			'rememberPossiblyImpureFunctionValues' => true,
			'tipsOfTheDay' => true,
			'reportMagicMethods' => true,
			'reportMagicProperties' => true,
			'ignoreErrors' => [],
			'internalErrorsCountLimit' => 50,
			'cache' => ['nodesByFileCountMax' => 1024, 'nodesByStringCountMax' => 256],
			'reportUnmatchedIgnoredErrors' => true,
			'scopeClass' => 'PHPStan\Analyser\MutatingScope',
			'typeAliases' => [],
			'universalObjectCratesClasses' => ['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			'stubFiles' => [
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/InvocationMocker.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/MockBuilder.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/MockObject.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/Stub.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/TestCase.stub',
			],
			'earlyTerminatingMethodCalls' => ['PHPUnit\Framework\Assert' => ['fail', 'markTestIncomplete', 'markTestSkipped']],
			'earlyTerminatingFunctionCalls' => ['abort', 'dd'],
			'memoryLimitFile' => '/Users/rabol/code/web/packages/filament-logviewer/build/phpstan/.memory_limit',
			'tempResultCachePath' => '/Users/rabol/code/web/packages/filament-logviewer/build/phpstan/resultCaches',
			'resultCachePath' => '/Users/rabol/code/web/packages/filament-logviewer/build/phpstan/resultCache.php',
			'resultCacheChecksProjectExtensionFilesDependencies' => false,
			'staticReflectionClassNamePatterns' => [],
			'dynamicConstantNames' => [
				'ICONV_IMPL',
				'LIBXML_VERSION',
				'LIBXML_DOTTED_VERSION',
				'Memcached::HAVE_ENCODING',
				'Memcached::HAVE_IGBINARY',
				'Memcached::HAVE_JSON',
				'Memcached::HAVE_MSGPACK',
				'Memcached::HAVE_SASL',
				'Memcached::HAVE_SESSION',
				'PHP_VERSION',
				'PHP_MAJOR_VERSION',
				'PHP_MINOR_VERSION',
				'PHP_RELEASE_VERSION',
				'PHP_VERSION_ID',
				'PHP_EXTRA_VERSION',
				'PHP_WINDOWS_VERSION_MAJOR',
				'PHP_WINDOWS_VERSION_MINOR',
				'PHP_WINDOWS_VERSION_BUILD',
				'PHP_ZTS',
				'PHP_DEBUG',
				'PHP_MAXPATHLEN',
				'PHP_OS',
				'PHP_OS_FAMILY',
				'PHP_SAPI',
				'PHP_EOL',
				'PHP_INT_MAX',
				'PHP_INT_MIN',
				'PHP_INT_SIZE',
				'PHP_FLOAT_DIG',
				'PHP_FLOAT_EPSILON',
				'PHP_FLOAT_MIN',
				'PHP_FLOAT_MAX',
				'DEFAULT_INCLUDE_PATH',
				'PEAR_INSTALL_DIR',
				'PEAR_EXTENSION_DIR',
				'PHP_EXTENSION_DIR',
				'PHP_PREFIX',
				'PHP_BINDIR',
				'PHP_BINARY',
				'PHP_MANDIR',
				'PHP_LIBDIR',
				'PHP_DATADIR',
				'PHP_SYSCONFDIR',
				'PHP_LOCALSTATEDIR',
				'PHP_CONFIG_FILE_PATH',
				'PHP_CONFIG_FILE_SCAN_DIR',
				'PHP_SHLIB_SUFFIX',
				'PHP_FD_SETSIZE',
				'OPENSSL_VERSION_NUMBER',
				'ZEND_DEBUG_BUILD',
				'ZEND_THREAD_SAFE',
			],
			'customRulesetUsed' => false,
			'editorUrl' => null,
			'editorUrlTitle' => null,
			'errorFormat' => null,
			'pro' => ['dnsServers' => ['1.1.1.2']],
			'__validate' => true,
			'checkOctaneCompatibility' => true,
			'noModelMake' => true,
			'noUnnecessaryCollectionCall' => true,
			'noUnnecessaryCollectionCallOnly' => [],
			'noUnnecessaryCollectionCallExcept' => [],
			'squashedMigrationsPath' => [],
			'databaseMigrationsPath' => [],
			'disableMigrationScan' => false,
			'disableSchemaScan' => false,
			'viewDirectories' => [],
			'checkModelProperties' => true,
			'checkUnusedViews' => false,
			'phpunit' => ['convertUnionToIntersectionType' => true],
			'tmpDir' => '/Users/rabol/code/web/packages/filament-logviewer/build/phpstan',
			'debugMode' => true,
			'productionMode' => false,
			'tempDir' => '/Users/rabol/code/web/packages/filament-logviewer/build/phpstan',
			'rootDir' => '/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan',
			'currentWorkingDirectory' => '/Users/rabol/code/web/packages/filament-logviewer',
			'cliArgumentsVariablesRegistered' => true,
			'additionalConfigFiles' => [
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../nesbot/carbon/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../nunomaduro/larastan/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-deprecation-rules/rules.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/rules.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../spatie/invade/phpstan-extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/phpstan.neon',
			],
			'allConfigFiles' => [
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/parametersSchema.neon',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level3.neon',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level2.neon',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level1.neon',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level0.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/nesbot/carbon/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/nunomaduro/larastan/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-deprecation-rules/rules.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/rules.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/spatie/invade/phpstan-extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/phpstan.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/phpstan-baseline.neon',
			],
			'composerAutoloaderProjectPaths' => [
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/..',
				'/Users/rabol/code/web/packages/filament-logviewer',
			],
			'generateBaselineFile' => null,
			'usedLevel' => '4',
			'cliAutoloadFile' => null,
			'fixerTmpDir' => '/var/folders/_h/94r_5d_95s55n0bbsfbpnsc00000gn/T/phpstan-fixer',
			'analysedPaths' => $this->parameters['analysedPaths'],
			'analysedPathsFromConfig' => $this->parameters['analysedPathsFromConfig'],
			'env' => $this->parameters['env'],
		];
	}


	public function createService01(): PhpParser\BuilderFactory
	{
		return new PhpParser\BuilderFactory;
	}


	public function createService02(): PHPStan\Parser\LexerFactory
	{
		return new PHPStan\Parser\LexerFactory($this->getService('019'));
	}


	public function createService03(): PhpParser\NodeVisitor\NameResolver
	{
		return new PhpParser\NodeVisitor\NameResolver(options: ['preserveOriginalNames' => true]);
	}


	public function createService04(): PHPStan\Parser\ArrayFilterArgVisitor
	{
		return new PHPStan\Parser\ArrayFilterArgVisitor;
	}


	public function createService05(): PHPStan\Parser\ArrayMapArgVisitor
	{
		return new PHPStan\Parser\ArrayMapArgVisitor;
	}


	public function createService06(): PHPStan\Parser\ArrayWalkArgVisitor
	{
		return new PHPStan\Parser\ArrayWalkArgVisitor;
	}


	public function createService07(): PHPStan\Parser\ClosureArgVisitor
	{
		return new PHPStan\Parser\ClosureArgVisitor;
	}


	public function createService08(): PHPStan\Parser\CurlSetOptArgVisitor
	{
		return new PHPStan\Parser\CurlSetOptArgVisitor;
	}


	public function createService09(): PHPStan\Parser\TypeTraverserInstanceofVisitor
	{
		return new PHPStan\Parser\TypeTraverserInstanceofVisitor;
	}


	public function createService010(): PHPStan\Parser\ArrowFunctionArgVisitor
	{
		return new PHPStan\Parser\ArrowFunctionArgVisitor;
	}


	public function createService011(): PHPStan\Parser\NewAssignedToPropertyVisitor
	{
		return new PHPStan\Parser\NewAssignedToPropertyVisitor;
	}


	public function createService012(): PHPStan\Parser\ParentStmtTypesVisitor
	{
		return new PHPStan\Parser\ParentStmtTypesVisitor;
	}


	public function createService013(): PHPStan\Parser\TryCatchTypeVisitor
	{
		return new PHPStan\Parser\TryCatchTypeVisitor;
	}


	public function createService014(): PHPStan\Parser\LastConditionVisitor
	{
		return new PHPStan\Parser\LastConditionVisitor;
	}


	public function createService015(): PhpParser\NodeVisitor\NodeConnectingVisitor
	{
		return new PhpParser\NodeVisitor\NodeConnectingVisitor;
	}


	public function createService016(): PHPStan\Node\Printer\ExprPrinter
	{
		return new PHPStan\Node\Printer\ExprPrinter($this->getService('017'));
	}


	public function createService017(): PHPStan\Node\Printer\Printer
	{
		return new PHPStan\Node\Printer\Printer;
	}


	public function createService018(): PHPStan\Broker\AnonymousClassNameHelper
	{
		return new PHPStan\Broker\AnonymousClassNameHelper($this->getService('066'), $this->getService('simpleRelativePathHelper'));
	}


	public function createService019(): PHPStan\Php\PhpVersion
	{
		return $this->getService('020')->create();
	}


	public function createService020(): PHPStan\Php\PhpVersionFactory
	{
		return $this->getService('021')->create();
	}


	public function createService021(): PHPStan\Php\PhpVersionFactoryFactory
	{
		return new PHPStan\Php\PhpVersionFactoryFactory(
			null,
			[
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/..',
				'/Users/rabol/code/web/packages/filament-logviewer',
			]
		);
	}


	public function createService022(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer;
	}


	public function createService023(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('024'), false);
	}


	public function createService024(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return $this->getService('026')->create();
	}


	public function createService025(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser($this->getService('023'), $this->getService('024'), false, true);
	}


	public function createService026(): PHPStan\PhpDoc\ConstExprParserFactory
	{
		return new PHPStan\PhpDoc\ConstExprParserFactory(false);
	}


	public function createService027(): PHPStan\PhpDoc\PhpDocInheritanceResolver
	{
		return new PHPStan\PhpDoc\PhpDocInheritanceResolver($this->getService('0141'), $this->getService('stubPhpDocProvider'));
	}


	public function createService028(): PHPStan\PhpDoc\PhpDocNodeResolver
	{
		return new PHPStan\PhpDoc\PhpDocNodeResolver($this->getService('031'), $this->getService('030'), $this->getService('0133'));
	}


	public function createService029(): PHPStan\PhpDoc\PhpDocStringResolver
	{
		return new PHPStan\PhpDoc\PhpDocStringResolver($this->getService('022'), $this->getService('025'));
	}


	public function createService030(): PHPStan\PhpDoc\ConstExprNodeResolver
	{
		return new PHPStan\PhpDoc\ConstExprNodeResolver;
	}


	public function createService031(): PHPStan\PhpDoc\TypeNodeResolver
	{
		return new PHPStan\PhpDoc\TypeNodeResolver(
			$this->getService('032'),
			$this->getService('094'),
			$this->getService('0143'),
			$this->getService('045'),
			$this->getService('076')
		);
	}


	public function createService032(): PHPStan\PhpDoc\TypeNodeResolverExtensionRegistryProvider
	{
		return new PHPStan\PhpDoc\LazyTypeNodeResolverExtensionRegistryProvider($this->getService('059'));
	}


	public function createService033(): PHPStan\PhpDoc\TypeStringResolver
	{
		return new PHPStan\PhpDoc\TypeStringResolver($this->getService('022'), $this->getService('023'), $this->getService('031'));
	}


	public function createService034(): PHPStan\PhpDoc\StubValidator
	{
		return new PHPStan\PhpDoc\StubValidator($this->getService('061'), false);
	}


	public function createService035(): PHPStan\PhpDoc\CountableStubFilesExtension
	{
		return new PHPStan\PhpDoc\CountableStubFilesExtension(false);
	}


	public function createService036(): PHPStan\PhpDoc\DefaultStubFilesProvider
	{
		return new PHPStan\PhpDoc\DefaultStubFilesProvider(
			$this->getService('059'),
			[
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionAttribute.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClassConstant.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionMethod.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionParameter.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionProperty.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ImagickPixel.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/ibm_db2.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/mysqli.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/arrayFunctions.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/core.stub',
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/typeCheckingFunctions.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/InvocationMocker.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/MockBuilder.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/MockObject.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/Stub.stub',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan-phpunit/stubs/TestCase.stub',
			],
			'/Users/rabol/code/web/packages/filament-logviewer'
		);
	}


	public function createService037(): PHPStan\PhpDoc\JsonValidateStubFilesExtension
	{
		return new PHPStan\PhpDoc\JsonValidateStubFilesExtension($this->getService('019'));
	}


	public function createService038(): PHPStan\Analyser\Analyser
	{
		return new PHPStan\Analyser\Analyser(
			$this->getService('039'),
			$this->getService('registry'),
			$this->getService('050'),
			$this->getService('044'),
			50
		);
	}


	public function createService039(): PHPStan\Analyser\FileAnalyser
	{
		return new PHPStan\Analyser\FileAnalyser(
			$this->getService('043'),
			$this->getService('044'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('055'),
			$this->getService('040'),
			true
		);
	}


	public function createService040(): PHPStan\Analyser\RuleErrorTransformer
	{
		return new PHPStan\Analyser\RuleErrorTransformer;
	}


	public function createService041(): PHPStan\Analyser\IgnoredErrorHelper
	{
		return new PHPStan\Analyser\IgnoredErrorHelper($this->getService('066'), [], true);
	}


	public function createService042(): PHPStan\Analyser\LazyInternalScopeFactory
	{
		return new PHPStan\Analyser\LazyInternalScopeFactory('PHPStan\Analyser\MutatingScope', $this->getService('059'));
	}


	public function createService043(): PHPStan\Analyser\ScopeFactory
	{
		return new PHPStan\Analyser\ScopeFactory($this->getService('042'));
	}


	public function createService044(): PHPStan\Analyser\NodeScopeResolver
	{
		return new PHPStan\Analyser\NodeScopeResolver(
			$this->getService('reflectionProvider'),
			$this->getService('076'),
			$this->getService('nodeScopeResolverReflector'),
			$this->getService('062'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('0141'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('019'),
			$this->getService('027'),
			$this->getService('066'),
			$this->getService('typeSpecifier'),
			$this->getService('065'),
			$this->getService('0136'),
			$this->getService('043'),
			true,
			true,
			['PHPUnit\Framework\Assert' => ['fail', 'markTestIncomplete', 'markTestSkipped']],
			['abort', 'dd'],
			true,
			true,
			false
		);
	}


	public function createService045(): PHPStan\Analyser\ConstantResolver
	{
		return $this->getService('046')->create();
	}


	public function createService046(): PHPStan\Analyser\ConstantResolverFactory
	{
		return new PHPStan\Analyser\ConstantResolverFactory($this->getService('094'), $this->getService('059'));
	}


	public function createService047(): PHPStan\Analyser\ResultCache\ResultCacheManagerFactory
	{
		return new class ($this) implements PHPStan\Analyser\ResultCache\ResultCacheManagerFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(): PHPStan\Analyser\ResultCache\ResultCacheManager
			{
				return new PHPStan\Analyser\ResultCache\ResultCacheManager(
					$this->container->getService('056'),
					$this->container->getService('fileFinderScan'),
					$this->container->getService('reflectionProvider'),
					$this->container->getService('036'),
					'/Users/rabol/code/web/packages/filament-logviewer/build/phpstan/resultCache.php',
					$this->container->parameters['analysedPaths'],
					[
						'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/..',
						'/Users/rabol/code/web/packages/filament-logviewer',
					],
					'4',
					null,
					[
						'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php',
						'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php',
						'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php',
						'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php',
						'/Users/rabol/code/web/packages/filament-logviewer/vendor/nunomaduro/larastan/bootstrap.php',
					],
					[],
					[],
					false
				);
			}
		};
	}


	public function createService048(): PHPStan\Analyser\ResultCache\ResultCacheClearer
	{
		return new PHPStan\Analyser\ResultCache\ResultCacheClearer('/Users/rabol/code/web/packages/filament-logviewer/build/phpstan/resultCache.php');
	}


	public function createService049(): PHPStan\Cache\Cache
	{
		return new PHPStan\Cache\Cache($this->getService('cacheStorage'));
	}


	public function createService050(): PHPStan\Collectors\Registry
	{
		return $this->getService('051')->create();
	}


	public function createService051(): PHPStan\Collectors\RegistryFactory
	{
		return new PHPStan\Collectors\RegistryFactory($this->getService('059'));
	}


	public function createService052(): PHPStan\Command\AnalyseApplication
	{
		return new PHPStan\Command\AnalyseApplication(
			$this->getService('053'),
			$this->getService('034'),
			$this->getService('047'),
			$this->getService('041'),
			50,
			$this->getService('036'),
			$this->getService('registry'),
			$this->getService('043'),
			$this->getService('040')
		);
	}


	public function createService053(): PHPStan\Command\AnalyserRunner
	{
		return new PHPStan\Command\AnalyserRunner(
			$this->getService('072'),
			$this->getService('038'),
			$this->getService('071'),
			$this->getService('074')
		);
	}


	public function createService054(): PHPStan\Command\FixerApplication
	{
		return new PHPStan\Command\FixerApplication(
			$this->getService('069'),
			$this->getService('047'),
			$this->getService('041'),
			$this->parameters['analysedPaths'],
			'/Users/rabol/code/web/packages/filament-logviewer',
			'/var/folders/_h/94r_5d_95s55n0bbsfbpnsc00000gn/T/phpstan-fixer',
			['1.1.1.2']
		);
	}


	public function createService055(): PHPStan\Dependency\DependencyResolver
	{
		return new PHPStan\Dependency\DependencyResolver(
			$this->getService('066'),
			$this->getService('reflectionProvider'),
			$this->getService('057'),
			$this->getService('0141')
		);
	}


	public function createService056(): PHPStan\Dependency\ExportedNodeFetcher
	{
		return new PHPStan\Dependency\ExportedNodeFetcher($this->getService('defaultAnalysisParser'), $this->getService('058'));
	}


	public function createService057(): PHPStan\Dependency\ExportedNodeResolver
	{
		return new PHPStan\Dependency\ExportedNodeResolver($this->getService('0141'), $this->getService('016'));
	}


	public function createService058(): PHPStan\Dependency\ExportedNodeVisitor
	{
		return new PHPStan\Dependency\ExportedNodeVisitor($this->getService('057'));
	}


	public function createService059(): PHPStan\DependencyInjection\Container
	{
		return new PHPStan\DependencyInjection\MemoizingContainer($this->getService('060'));
	}


	public function createService060(): PHPStan\DependencyInjection\Nette\NetteContainer
	{
		return new PHPStan\DependencyInjection\Nette\NetteContainer($this);
	}


	public function createService061(): PHPStan\DependencyInjection\DerivativeContainerFactory
	{
		return new PHPStan\DependencyInjection\DerivativeContainerFactory(
			'/Users/rabol/code/web/packages/filament-logviewer',
			'/Users/rabol/code/web/packages/filament-logviewer/build/phpstan',
			[
				'phar:///Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/phpstan.phar/conf/config.level4.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../nesbot/carbon/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../nunomaduro/larastan/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-deprecation-rules/rules.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../phpstan-phpunit/rules.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/extension-installer/src/../../../spatie/invade/phpstan-extension.neon',
				'/Users/rabol/code/web/packages/filament-logviewer/phpstan.neon',
			],
			$this->parameters['analysedPaths'],
			[
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/..',
				'/Users/rabol/code/web/packages/filament-logviewer',
			],
			$this->parameters['analysedPathsFromConfig'],
			'4',
			null,
			null
		);
	}


	public function createService062(): PHPStan\DependencyInjection\Reflection\ClassReflectionExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Reflection\LazyClassReflectionExtensionRegistryProvider($this->getService('059'));
	}


	public function createService063(): PHPStan\DependencyInjection\Type\DynamicReturnTypeExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicReturnTypeExtensionRegistryProvider($this->getService('059'));
	}


	public function createService064(): PHPStan\DependencyInjection\Type\OperatorTypeSpecifyingExtensionRegistryProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyOperatorTypeSpecifyingExtensionRegistryProvider($this->getService('059'));
	}


	public function createService065(): PHPStan\DependencyInjection\Type\DynamicThrowTypeExtensionProvider
	{
		return new PHPStan\DependencyInjection\Type\LazyDynamicThrowTypeExtensionProvider($this->getService('059'));
	}


	public function createService066(): PHPStan\File\FileHelper
	{
		return new PHPStan\File\FileHelper('/Users/rabol/code/web/packages/filament-logviewer');
	}


	public function createService067(): PHPStan\File\FileExcluderFactory
	{
		return new PHPStan\File\FileExcluderFactory(
			$this->getService('068'),
			[],
			['analyseAndScan' => ['*.blade.php'], 'analyse' => []]
		);
	}


	public function createService068(): PHPStan\File\FileExcluderRawFactory
	{
		return new class ($this) implements PHPStan\File\FileExcluderRawFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(array $analyseExcludes): PHPStan\File\FileExcluder
			{
				return new PHPStan\File\FileExcluder($this->container->getService('066'), $analyseExcludes);
			}
		};
	}


	public function createService069(): PHPStan\File\FileMonitor
	{
		return new PHPStan\File\FileMonitor($this->getService('fileFinderAnalyse'));
	}


	public function createService070(): PHPStan\NodeVisitor\StatementOrderVisitor
	{
		return new PHPStan\NodeVisitor\StatementOrderVisitor;
	}


	public function createService071(): PHPStan\Parallel\ParallelAnalyser
	{
		return new PHPStan\Parallel\ParallelAnalyser(50, 600.0, 134217728);
	}


	public function createService072(): PHPStan\Parallel\Scheduler
	{
		return new PHPStan\Parallel\Scheduler(20, 32, 2);
	}


	public function createService073(): PHPStan\Parser\FunctionCallStatementFinder
	{
		return new PHPStan\Parser\FunctionCallStatementFinder;
	}


	public function createService074(): PHPStan\Process\CpuCoreCounter
	{
		return new PHPStan\Process\CpuCoreCounter;
	}


	public function createService075(): PHPStan\Reflection\FunctionReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\FunctionReflectionFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\BetterReflection\Reflection\Adapter\ReflectionFunction $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?string $filename,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?string $phpDocComment,
				array $phpDocParameterOutTypes
			): PHPStan\Reflection\Php\PhpFunctionReflection {
				return new PHPStan\Reflection\Php\PhpFunctionReflection(
					$this->container->getService('076'),
					$reflection,
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('073'),
					$this->container->getService('049'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$filename,
					$isPure,
					$asserts,
					$phpDocComment,
					$phpDocParameterOutTypes
				);
			}
		};
	}


	public function createService076(): PHPStan\Reflection\InitializerExprTypeResolver
	{
		return new PHPStan\Reflection\InitializerExprTypeResolver(
			$this->getService('045'),
			$this->getService('094'),
			$this->getService('019'),
			$this->getService('064'),
			$this->getService('0291'),
			false
		);
	}


	public function createService077(): PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
	}


	public function createService078(): PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Annotations\AnnotationsPropertiesClassReflectionExtension;
	}


	public function createService079(): PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\CachingVisitor;
	}


	public function createService080(): PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\FileNodesFetcher(
			$this->getService('079'),
			$this->getService('defaultAnalysisParser')
		);
	}


	public function createService081(): PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\ComposerJsonAndInstalledJsonSourceLocatorMaker(
			$this->getService('083'),
			$this->getService('084'),
			$this->getService('082'),
			$this->getService('019')
		);
	}


	public function createService082(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorFactory(
			$this->getService('080'),
			$this->getService('fileFinderScan'),
			$this->getService('019'),
			$this->getService('049')
		);
	}


	public function createService083(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedDirectorySourceLocatorRepository($this->getService('082'));
	}


	public function createService084(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocatorFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\SourceLocator\Type\Composer\Psr\PsrAutoloaderMapping $mapping): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedPsrAutoloaderLocator($mapping, $this->container->getService('086'));
			}
		};
	}


	public function createService085(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(string $fileName): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator
			{
				return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocator(
					$this->container->getService('080'),
					$fileName
				);
			}
		};
	}


	public function createService086(): PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository
	{
		return new PHPStan\Reflection\BetterReflection\SourceLocator\OptimizedSingleFileSourceLocatorRepository($this->getService('085'));
	}


	public function createService087(): PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinMethodsClassReflectionExtension(['Eloquent']);
	}


	public function createService088(): PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension
	{
		return new PHPStan\Reflection\Mixin\MixinPropertiesClassReflectionExtension(['Eloquent']);
	}


	public function createService089(): PHPStan\Reflection\Php\PhpClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\PhpClassReflectionExtension(
			$this->getService('043'),
			$this->getService('044'),
			$this->getService('090'),
			$this->getService('027'),
			$this->getService('077'),
			$this->getService('078'),
			$this->getService('0100'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('094'),
			$this->getService('0141'),
			false,
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional']
		);
	}


	public function createService090(): PHPStan\Reflection\Php\PhpMethodReflectionFactory
	{
		return new class ($this) implements PHPStan\Reflection\Php\PhpMethodReflectionFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(
				PHPStan\Reflection\ClassReflection $declaringClass,
				?PHPStan\Reflection\ClassReflection $declaringTrait,
				PHPStan\Reflection\Php\BuiltinMethodReflection $reflection,
				PHPStan\Type\Generic\TemplateTypeMap $templateTypeMap,
				array $phpDocParameterTypes,
				?PHPStan\Type\Type $phpDocReturnType,
				?PHPStan\Type\Type $phpDocThrowType,
				?string $deprecatedDescription,
				bool $isDeprecated,
				bool $isInternal,
				bool $isFinal,
				?bool $isPure,
				PHPStan\Reflection\Assertions $asserts,
				?PHPStan\Type\Type $selfOutType,
				?string $phpDocComment,
				array $phpDocParameterOutTypes
			): PHPStan\Reflection\Php\PhpMethodReflection {
				return new PHPStan\Reflection\Php\PhpMethodReflection(
					$this->container->getService('076'),
					$declaringClass,
					$declaringTrait,
					$reflection,
					$this->container->getService('reflectionProvider'),
					$this->container->getService('defaultAnalysisParser'),
					$this->container->getService('073'),
					$this->container->getService('049'),
					$templateTypeMap,
					$phpDocParameterTypes,
					$phpDocReturnType,
					$phpDocThrowType,
					$deprecatedDescription,
					$isDeprecated,
					$isInternal,
					$isFinal,
					$isPure,
					$asserts,
					$selfOutType,
					$phpDocComment,
					$phpDocParameterOutTypes
				);
			}
		};
	}


	public function createService091(): PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\Soap\SoapClientMethodsClassReflectionExtension;
	}


	public function createService092(): PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\EnumAllowedSubTypesClassReflectionExtension;
	}


	public function createService093(): PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension
	{
		return new PHPStan\Reflection\Php\UniversalObjectCratesClassReflectionExtension(
			$this->getService('reflectionProvider'),
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			$this->getService('078')
		);
	}


	public function createService094(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderProvider
	{
		return new PHPStan\Reflection\ReflectionProvider\LazyReflectionProviderProvider($this->getService('059'));
	}


	public function createService095(): PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider
	{
		return new PHPStan\Reflection\SignatureMap\NativeFunctionReflectionProvider(
			$this->getService('0100'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0141'),
			$this->getService('stubPhpDocProvider')
		);
	}


	public function createService096(): PHPStan\Reflection\SignatureMap\SignatureMapParser
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapParser($this->getService('033'));
	}


	public function createService097(): PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\FunctionSignatureMapProvider(
			$this->getService('096'),
			$this->getService('076'),
			$this->getService('019'),
			false
		);
	}


	public function createService098(): PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider
	{
		return new PHPStan\Reflection\SignatureMap\Php8SignatureMapProvider(
			$this->getService('097'),
			$this->getService('080'),
			$this->getService('0141'),
			$this->getService('019'),
			$this->getService('076')
		);
	}


	public function createService099(): PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory
	{
		return new PHPStan\Reflection\SignatureMap\SignatureMapProviderFactory(
			$this->getService('019'),
			$this->getService('097'),
			$this->getService('098')
		);
	}


	public function createService0100(): PHPStan\Reflection\SignatureMap\SignatureMapProvider
	{
		return $this->getService('099')->create();
	}


	public function createService0101(): PHPStan\Rules\Api\ApiRuleHelper
	{
		return new PHPStan\Rules\Api\ApiRuleHelper;
	}


	public function createService0102(): PHPStan\Rules\AttributesCheck
	{
		return new PHPStan\Rules\AttributesCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0115'),
			$this->getService('0104'),
			true
		);
	}


	public function createService0103(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchCheck($this->getService('0139'), false, false);
	}


	public function createService0104(): PHPStan\Rules\ClassCaseSensitivityCheck
	{
		return new PHPStan\Rules\ClassCaseSensitivityCheck($this->getService('reflectionProvider'), false);
	}


	public function createService0105(): PHPStan\Rules\Classes\LocalTypeAliasesCheck
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesCheck([], $this->getService('reflectionProvider'), $this->getService('031'));
	}


	public function createService0106(): PHPStan\Rules\Comparison\ConstantConditionRuleHelper
	{
		return new PHPStan\Rules\Comparison\ConstantConditionRuleHelper($this->getService('0107'), true, false);
	}


	public function createService0107(): PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeHelper(
			$this->getService('reflectionProvider'),
			$this->getService('typeSpecifier'),
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			true,
			false
		);
	}


	public function createService0108(): PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver
	{
		return new PHPStan\Rules\Exceptions\DefaultExceptionTypeResolver(
			$this->getService('reflectionProvider'),
			['#^PHPUnit\\\#', '#^SebastianBergmann\\\#'],
			[],
			[],
			[]
		);
	}


	public function createService0109(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInFunctionThrowsRule($this->getService('0111'));
	}


	public function createService0110(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInMethodThrowsRule($this->getService('0111'));
	}


	public function createService0111(): PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck
	{
		return new PHPStan\Rules\Exceptions\MissingCheckedExceptionInThrowsCheck($this->getService('exceptionTypeResolver'));
	}


	public function createService0112(): PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideFunctionThrowTypeRule($this->getService('0114'));
	}


	public function createService0113(): PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule
	{
		return new PHPStan\Rules\Exceptions\TooWideMethodThrowTypeRule($this->getService('0141'), $this->getService('0114'));
	}


	public function createService0114(): PHPStan\Rules\Exceptions\TooWideThrowTypeCheck
	{
		return new PHPStan\Rules\Exceptions\TooWideThrowTypeCheck;
	}


	public function createService0115(): PHPStan\Rules\FunctionCallParametersCheck
	{
		return new PHPStan\Rules\FunctionCallParametersCheck(
			$this->getService('0139'),
			$this->getService('0129'),
			$this->getService('019'),
			$this->getService('0133'),
			$this->getService('0138'),
			false,
			false,
			true,
			false,
			false
		);
	}


	public function createService0116(): PHPStan\Rules\FunctionDefinitionCheck
	{
		return new PHPStan\Rules\FunctionDefinitionCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			$this->getService('0133'),
			$this->getService('019'),
			true,
			false
		);
	}


	public function createService0117(): PHPStan\Rules\FunctionReturnTypeCheck
	{
		return new PHPStan\Rules\FunctionReturnTypeCheck($this->getService('0139'));
	}


	public function createService0118(): PHPStan\Rules\Generics\CrossCheckInterfacesHelper
	{
		return new PHPStan\Rules\Generics\CrossCheckInterfacesHelper;
	}


	public function createService0119(): PHPStan\Rules\Generics\GenericAncestorsCheck
	{
		return new PHPStan\Rules\Generics\GenericAncestorsCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0120'),
			$this->getService('0122'),
			false,
			[
				'DatePeriod',
				'CallbackFilterIterator',
				'FilterIterator',
				'RecursiveCallbackFilterIterator',
				'AppendIterator',
				'NoRewindIterator',
				'LimitIterator',
				'InfiniteIterator',
				'CachingIterator',
				'RegexIterator',
			]
		);
	}


	public function createService0120(): PHPStan\Rules\Generics\GenericObjectTypeCheck
	{
		return new PHPStan\Rules\Generics\GenericObjectTypeCheck;
	}


	public function createService0121(): PHPStan\Rules\Generics\TemplateTypeCheck
	{
		return new PHPStan\Rules\Generics\TemplateTypeCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			$this->getService('0120'),
			$this->getService('0142'),
			true
		);
	}


	public function createService0122(): PHPStan\Rules\Generics\VarianceCheck
	{
		return new PHPStan\Rules\Generics\VarianceCheck(false, false);
	}


	public function createService0123(): PHPStan\Rules\IssetCheck
	{
		return new PHPStan\Rules\IssetCheck($this->getService('0137'), $this->getService('0138'), true, true, false);
	}


	public function createService0124(): PHPStan\Rules\Methods\MethodCallCheck
	{
		return new PHPStan\Rules\Methods\MethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			false,
			true
		);
	}


	public function createService0125(): PHPStan\Rules\Methods\StaticMethodCallCheck
	{
		return new PHPStan\Rules\Methods\StaticMethodCallCheck(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0104'),
			false,
			true
		);
	}


	public function createService0126(): PHPStan\Rules\Methods\MethodSignatureRule
	{
		return new PHPStan\Rules\Methods\MethodSignatureRule(false, false);
	}


	public function createService0127(): PHPStan\Rules\Methods\MethodParameterComparisonHelper
	{
		return new PHPStan\Rules\Methods\MethodParameterComparisonHelper($this->getService('019'), false);
	}


	public function createService0128(): PHPStan\Rules\MissingTypehintCheck
	{
		return new PHPStan\Rules\MissingTypehintCheck(
			false,
			false,
			false,
			false,
			[
				'DatePeriod',
				'CallbackFilterIterator',
				'FilterIterator',
				'RecursiveCallbackFilterIterator',
				'AppendIterator',
				'NoRewindIterator',
				'LimitIterator',
				'InfiniteIterator',
				'CachingIterator',
				'RegexIterator',
			]
		);
	}


	public function createService0129(): PHPStan\Rules\NullsafeCheck
	{
		return new PHPStan\Rules\NullsafeCheck;
	}


	public function createService0130(): PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider
	{
		return new PHPStan\Rules\Constants\LazyAlwaysUsedClassConstantsExtensionProvider($this->getService('059'));
	}


	public function createService0131(): PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\ConditionalReturnTypeRuleHelper;
	}


	public function createService0132(): PHPStan\Rules\PhpDoc\AssertRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\AssertRuleHelper($this->getService('076'));
	}


	public function createService0133(): PHPStan\Rules\PhpDoc\UnresolvableTypeHelper
	{
		return new PHPStan\Rules\PhpDoc\UnresolvableTypeHelper;
	}


	public function createService0134(): PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper
	{
		return new PHPStan\Rules\PhpDoc\VarTagTypeRuleHelper(false);
	}


	public function createService0135(): PHPStan\Rules\Playground\NeverRuleHelper
	{
		return new PHPStan\Rules\Playground\NeverRuleHelper;
	}


	public function createService0136(): PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider
	{
		return new PHPStan\Rules\Properties\LazyReadWritePropertiesExtensionProvider($this->getService('059'));
	}


	public function createService0137(): PHPStan\Rules\Properties\PropertyDescriptor
	{
		return new PHPStan\Rules\Properties\PropertyDescriptor;
	}


	public function createService0138(): PHPStan\Rules\Properties\PropertyReflectionFinder
	{
		return new PHPStan\Rules\Properties\PropertyReflectionFinder;
	}


	public function createService0139(): PHPStan\Rules\RuleLevelHelper
	{
		return new PHPStan\Rules\RuleLevelHelper(
			$this->getService('reflectionProvider'),
			false,
			false,
			false,
			false,
			false,
			false,
			false
		);
	}


	public function createService0140(): PHPStan\Rules\UnusedFunctionParametersCheck
	{
		return new PHPStan\Rules\UnusedFunctionParametersCheck($this->getService('reflectionProvider'));
	}


	public function createService0141(): PHPStan\Type\FileTypeMapper
	{
		return new PHPStan\Type\FileTypeMapper(
			$this->getService('094'),
			$this->getService('defaultAnalysisParser'),
			$this->getService('029'),
			$this->getService('028'),
			$this->getService('018'),
			$this->getService('066')
		);
	}


	public function createService0142(): PHPStan\Type\TypeAliasResolver
	{
		return new PHPStan\Type\UsefulTypeAliasResolver(
			[],
			$this->getService('033'),
			$this->getService('031'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0143(): PHPStan\Type\TypeAliasResolverProvider
	{
		return new PHPStan\Type\LazyTypeAliasResolverProvider($this->getService('059'));
	}


	public function createService0144(): PHPStan\Type\BitwiseFlagHelper
	{
		return new PHPStan\Type\BitwiseFlagHelper($this->getService('reflectionProvider'));
	}


	public function createService0145(): PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArgumentBasedFunctionReturnTypeExtension;
	}


	public function createService0146(): PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayIntersectKeyFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0147(): PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayChunkFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0148(): PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayColumnFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0149(): PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCombineFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0150(): PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayCurrentDynamicReturnTypeExtension;
	}


	public function createService0151(): PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0152(): PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFillKeysFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0153(): PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFilterFunctionReturnTypeReturnTypeExtension;
	}


	public function createService0154(): PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayFlipFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0155(): PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyDynamicReturnTypeExtension;
	}


	public function createService0156(): PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArrayKeyExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0157(): PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyFirstDynamicReturnTypeExtension;
	}


	public function createService0158(): PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeyLastDynamicReturnTypeExtension;
	}


	public function createService0159(): PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayKeysFunctionDynamicReturnTypeExtension($this->getService('019'));
	}


	public function createService0160(): PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMapFunctionReturnTypeExtension;
	}


	public function createService0161(): PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayMergeFunctionDynamicReturnTypeExtension;
	}


	public function createService0162(): PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayNextDynamicReturnTypeExtension;
	}


	public function createService0163(): PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPopFunctionReturnTypeExtension;
	}


	public function createService0164(): PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayRandFunctionReturnTypeExtension;
	}


	public function createService0165(): PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReduceFunctionReturnTypeExtension;
	}


	public function createService0166(): PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReplaceFunctionReturnTypeExtension;
	}


	public function createService0167(): PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayReverseFunctionReturnTypeExtension;
	}


	public function createService0168(): PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayShiftFunctionReturnTypeExtension;
	}


	public function createService0169(): PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySliceFunctionReturnTypeExtension;
	}


	public function createService0170(): PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySpliceFunctionReturnTypeExtension;
	}


	public function createService0171(): PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionDynamicReturnTypeExtension($this->getService('019'));
	}


	public function createService0172(): PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ArraySearchFunctionTypeSpecifyingExtension;
	}


	public function createService0173(): PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayValuesFunctionDynamicReturnTypeExtension($this->getService('019'));
	}


	public function createService0174(): PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArraySumFunctionDynamicReturnTypeExtension;
	}


	public function createService0175(): PHPStan\Type\Php\AssertThrowTypeExtension
	{
		return new PHPStan\Type\Php\AssertThrowTypeExtension;
	}


	public function createService0176(): PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\BackedEnumFromMethodDynamicReturnTypeExtension;
	}


	public function createService0177(): PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\Base64DecodeDynamicFunctionReturnTypeExtension;
	}


	public function createService0178(): PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension
	{
		return new PHPStan\Type\Php\BcMathStringOrNullReturnTypeExtension($this->getService('019'));
	}


	public function createService0179(): PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindDynamicReturnTypeExtension;
	}


	public function createService0180(): PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureBindToDynamicReturnTypeExtension;
	}


	public function createService0181(): PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClosureFromCallableDynamicReturnTypeExtension;
	}


	public function createService0182(): PHPStan\Type\Php\CompactFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CompactFunctionReturnTypeExtension(true);
	}


	public function createService0183(): PHPStan\Type\Php\ConstantFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ConstantFunctionReturnTypeExtension($this->getService('0184'));
	}


	public function createService0184(): PHPStan\Type\Php\ConstantHelper
	{
		return new PHPStan\Type\Php\ConstantHelper;
	}


	public function createService0185(): PHPStan\Type\Php\CountFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\CountFunctionReturnTypeExtension;
	}


	public function createService0186(): PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CountFunctionTypeSpecifyingExtension;
	}


	public function createService0187(): PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlGetinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0188(): PHPStan\Type\Php\CurlInitReturnTypeExtension
	{
		return new PHPStan\Type\Php\CurlInitReturnTypeExtension;
	}


	public function createService0189(): PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatFunctionReturnTypeExtension;
	}


	public function createService0190(): PHPStan\Type\Php\DateFormatMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFormatMethodReturnTypeExtension;
	}


	public function createService0191(): PHPStan\Type\Php\DateFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateFunctionReturnTypeExtension;
	}


	public function createService0192(): PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalConstructorThrowTypeExtension;
	}


	public function createService0193(): PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateIntervalDynamicReturnTypeExtension;
	}


	public function createService0194(): PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeCreateDynamicReturnTypeExtension;
	}


	public function createService0195(): PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeDynamicReturnTypeExtension;
	}


	public function createService0196(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension('DateTime');
	}


	public function createService0197(): PHPStan\Type\Php\DateTimeModifyReturnTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeModifyReturnTypeExtension('DateTimeImmutable');
	}


	public function createService0198(): PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeConstructorThrowTypeExtension;
	}


	public function createService0199(): PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\DateTimeZoneConstructorThrowTypeExtension;
	}


	public function createService0200(): PHPStan\Type\Php\DsMapDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicReturnTypeExtension;
	}


	public function createService0201(): PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension
	{
		return new PHPStan\Type\Php\DsMapDynamicMethodThrowTypeExtension;
	}


	public function createService0202(): PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\DioStatDynamicFunctionReturnTypeExtension;
	}


	public function createService0203(): PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ExplodeFunctionDynamicReturnTypeExtension($this->getService('019'));
	}


	public function createService0204(): PHPStan\Type\Php\FilterFunctionReturnTypeHelper
	{
		return new PHPStan\Type\Php\FilterFunctionReturnTypeHelper($this->getService('reflectionProvider'), $this->getService('019'));
	}


	public function createService0205(): PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterInputDynamicReturnTypeExtension($this->getService('0204'));
	}


	public function createService0206(): PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarDynamicReturnTypeExtension($this->getService('0204'));
	}


	public function createService0207(): PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\FilterVarArrayDynamicReturnTypeExtension(
			$this->getService('0204'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0208(): PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetCalledClassDynamicReturnTypeExtension;
	}


	public function createService0209(): PHPStan\Type\Php\GetClassDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetClassDynamicReturnTypeExtension;
	}


	public function createService0210(): PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GetParentClassDynamicFunctionReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0211(): PHPStan\Type\Php\GettypeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettypeFunctionReturnTypeExtension;
	}


	public function createService0212(): PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\GettimeofdayDynamicFunctionReturnTypeExtension;
	}


	public function createService0213(): PHPStan\Type\Php\HashFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\HashFunctionsReturnTypeExtension($this->getService('019'));
	}


	public function createService0214(): PHPStan\Type\Php\IntdivThrowTypeExtension
	{
		return new PHPStan\Type\Php\IntdivThrowTypeExtension;
	}


	public function createService0215(): PHPStan\Type\Php\IniGetReturnTypeExtension
	{
		return new PHPStan\Type\Php\IniGetReturnTypeExtension;
	}


	public function createService0216(): PHPStan\Type\Php\JsonThrowTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowTypeExtension($this->getService('reflectionProvider'), $this->getService('0144'));
	}


	public function createService0217(): PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionClassConstructorThrowTypeExtension;
	}


	public function createService0218(): PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionFunctionConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0219(): PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionMethodConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0220(): PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionPropertyConstructorThrowTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0221(): PHPStan\Type\Php\StrContainingTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\StrContainingTypeSpecifyingExtension;
	}


	public function createService0222(): PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementClassPropertyReflectionExtension;
	}


	public function createService0223(): PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementConstructorThrowTypeExtension;
	}


	public function createService0224(): PHPStan\Type\Php\StatDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StatDynamicReturnTypeExtension;
	}


	public function createService0225(): PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\MethodExistsTypeSpecifyingExtension;
	}


	public function createService0226(): PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\PropertyExistsTypeSpecifyingExtension($this->getService('0138'));
	}


	public function createService0227(): PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MinMaxFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0228(): PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\NumberFormatFunctionDynamicReturnTypeExtension;
	}


	public function createService0229(): PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PathinfoFunctionDynamicReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0230(): PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregFilterFunctionReturnTypeExtension;
	}


	public function createService0231(): PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\PregSplitDynamicReturnTypeExtension($this->getService('0144'));
	}


	public function createService0232(): PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ReflectionClassIsSubclassOfTypeSpecifyingExtension;
	}


	public function createService0233(): PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReplaceFunctionsDynamicReturnTypeExtension;
	}


	public function createService0234(): PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ArrayPointerFunctionsDynamicReturnTypeExtension;
	}


	public function createService0235(): PHPStan\Type\Php\LtrimFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\LtrimFunctionReturnTypeExtension;
	}


	public function createService0236(): PHPStan\Type\Php\MbFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbFunctionsReturnTypeExtension($this->getService('019'));
	}


	public function createService0237(): PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbConvertEncodingFunctionReturnTypeExtension;
	}


	public function createService0238(): PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbSubstituteCharacterDynamicReturnTypeExtension($this->getService('019'));
	}


	public function createService0239(): PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MbStrlenFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0240(): PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\MicrotimeFunctionReturnTypeExtension;
	}


	public function createService0241(): PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\HrtimeFunctionReturnTypeExtension;
	}


	public function createService0242(): PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ImplodeFunctionReturnTypeExtension;
	}


	public function createService0243(): PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\NonEmptyStringFunctionsReturnTypeExtension;
	}


	public function createService0244(): PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrCaseFunctionsReturnTypeExtension;
	}


	public function createService0245(): PHPStan\Type\Php\StrlenFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrlenFunctionReturnTypeExtension;
	}


	public function createService0246(): PHPStan\Type\Php\StrPadFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrPadFunctionReturnTypeExtension;
	}


	public function createService0247(): PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrRepeatFunctionReturnTypeExtension;
	}


	public function createService0248(): PHPStan\Type\Php\SubstrDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SubstrDynamicReturnTypeExtension;
	}


	public function createService0249(): PHPStan\Type\Php\ThrowableReturnTypeExtension
	{
		return new PHPStan\Type\Php\ThrowableReturnTypeExtension;
	}


	public function createService0250(): PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\ParseUrlFunctionDynamicReturnTypeExtension;
	}


	public function createService0251(): PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TriggerErrorDynamicReturnTypeExtension($this->getService('019'));
	}


	public function createService0252(): PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\VersionCompareFunctionDynamicReturnTypeExtension;
	}


	public function createService0253(): PHPStan\Type\Php\PowFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\PowFunctionReturnTypeExtension;
	}


	public function createService0254(): PHPStan\Type\Php\RoundFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RoundFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0255(): PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrtotimeFunctionReturnTypeExtension;
	}


	public function createService0256(): PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RandomIntFunctionReturnTypeExtension;
	}


	public function createService0257(): PHPStan\Type\Php\RangeFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\RangeFunctionReturnTypeExtension;
	}


	public function createService0258(): PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0259(): PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\ClassExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0260(): PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\ClassImplementsFunctionReturnTypeExtension;
	}


	public function createService0261(): PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefineConstantTypeSpecifyingExtension;
	}


	public function createService0262(): PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\DefinedConstantTypeSpecifyingExtension($this->getService('0184'));
	}


	public function createService0263(): PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\FunctionExistsFunctionTypeSpecifyingExtension;
	}


	public function createService0264(): PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\InArrayFunctionTypeSpecifyingExtension;
	}


	public function createService0265(): PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsArrayFunctionTypeSpecifyingExtension(false);
	}


	public function createService0266(): PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsCallableFunctionTypeSpecifyingExtension($this->getService('0225'));
	}


	public function createService0267(): PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsIterableFunctionTypeSpecifyingExtension;
	}


	public function createService0268(): PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsSubclassOfFunctionTypeSpecifyingExtension($this->getService('0271'));
	}


	public function createService0269(): PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\IteratorToArrayFunctionReturnTypeExtension;
	}


	public function createService0270(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingExtension($this->getService('0271'));
	}


	public function createService0271(): PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper
	{
		return new PHPStan\Type\Php\IsAFunctionTypeSpecifyingHelper;
	}


	public function createService0272(): PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\Php\CtypeDigitFunctionTypeSpecifyingExtension;
	}


	public function createService0273(): PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\JsonThrowOnErrorDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0144')
		);
	}


	public function createService0274(): PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\TypeSpecifyingFunctionsDynamicReturnTypeExtension(
			$this->getService('reflectionProvider'),
			true,
			['stdClass', 'Illuminate\Http\Request', 'Illuminate\Support\Optional'],
			false
		);
	}


	public function createService0275(): PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementAsXMLMethodReturnTypeExtension;
	}


	public function createService0276(): PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\SimpleXMLElementXpathMethodReturnTypeExtension;
	}


	public function createService0277(): PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrSplitFunctionReturnTypeExtension($this->getService('019'));
	}


	public function createService0278(): PHPStan\Type\Php\StrTokFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrTokFunctionReturnTypeExtension;
	}


	public function createService0279(): PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SprintfFunctionDynamicReturnTypeExtension;
	}


	public function createService0280(): PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\SscanfFunctionDynamicReturnTypeExtension;
	}


	public function createService0281(): PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrvalFamilyFunctionReturnTypeExtension;
	}


	public function createService0282(): PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension
	{
		return new PHPStan\Type\Php\StrWordCountFunctionDynamicReturnTypeExtension;
	}


	public function createService0283(): PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension
	{
		return new PHPStan\Type\Php\XMLReaderOpenReturnTypeExtension;
	}


	public function createService0284(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClass');
	}


	public function createService0285(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionClassConstant');
	}


	public function createService0286(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionFunctionAbstract');
	}


	public function createService0287(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionParameter');
	}


	public function createService0288(): PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension
	{
		return new PHPStan\Type\Php\ReflectionGetAttributesMethodReturnTypeExtension('ReflectionProperty');
	}


	public function createService0289(): PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension
	{
		return new PHPStan\Type\Php\DatePeriodConstructorReturnTypeExtension;
	}


	public function createService0290(): PHPStan\Type\ClosureTypeFactory
	{
		return new PHPStan\Type\ClosureTypeFactory(
			$this->getService('076'),
			$this->getService('0296'),
			$this->getService('originalBetterReflectionReflector'),
			$this->getService('currentPhpVersionPhpParser')
		);
	}


	public function createService0291(): PHPStan\Type\Constant\OversizedArrayBuilder
	{
		return new PHPStan\Type\Constant\OversizedArrayBuilder;
	}


	public function createService0292(): PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionSourceLocatorFactory(
			$this->getService('phpParserDecorator'),
			$this->getService('php8PhpParser'),
			$this->getService('0295'),
			$this->getService('0296'),
			$this->getService('086'),
			$this->getService('083'),
			$this->getService('081'),
			$this->getService('084'),
			$this->getService('080'),
			[],
			[],
			$this->parameters['analysedPaths'],
			[
				'/Users/rabol/code/web/packages/filament-logviewer/vendor/phpstan/phpstan/..',
				'/Users/rabol/code/web/packages/filament-logviewer',
			],
			$this->parameters['analysedPathsFromConfig']
		);
	}


	public function createService0293(): PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory
	{
		return new class ($this) implements PHPStan\Reflection\BetterReflection\BetterReflectionProviderFactory {
			private $container;


			public function __construct(Container_96877e6014 $container)
			{
				$this->container = $container;
			}


			public function create(PHPStan\BetterReflection\Reflector\Reflector $reflector): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
			{
				return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
					$this->container->getService('094'),
					$this->container->getService('076'),
					$this->container->getService('062'),
					$reflector,
					$this->container->getService('0141'),
					$this->container->getService('027'),
					$this->container->getService('019'),
					$this->container->getService('095'),
					$this->container->getService('stubPhpDocProvider'),
					$this->container->getService('075'),
					$this->container->getService('relativePathHelper'),
					$this->container->getService('018'),
					$this->container->getService('066'),
					$this->container->getService('0295')
				);
			}
		};
	}


	public function createService0294(): PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory
	{
		return new PHPStan\Reflection\BetterReflection\SourceStubber\PhpStormStubsSourceStubberFactory(
			$this->getService('php8PhpParser'),
			$this->getService('019')
		);
	}


	public function createService0295(): PHPStan\BetterReflection\SourceLocator\SourceStubber\PhpStormStubsSourceStubber
	{
		return $this->getService('0294')->create();
	}


	public function createService0296(): PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber
	{
		return new PHPStan\BetterReflection\SourceLocator\SourceStubber\ReflectionSourceStubber;
	}


	public function createService0297(): PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CiDetectedErrorFormatter(
			$this->getService('errorFormatter.github'),
			$this->getService('errorFormatter.teamcity')
		);
	}


	public function createService0298(): PHPStan\Rules\Api\ApiClassConstFetchRule
	{
		return new PHPStan\Rules\Api\ApiClassConstFetchRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createService0299(): PHPStan\Rules\Api\ApiInstanceofRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createService0300(): PHPStan\Rules\Api\ApiInstanceofTypeRule
	{
		return new PHPStan\Rules\Api\ApiInstanceofTypeRule($this->getService('reflectionProvider'), false, true);
	}


	public function createService0301(): PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule
	{
		return new PHPStan\Rules\Api\NodeConnectingVisitorAttributesRule($this->getService('059'));
	}


	public function createService0302(): PHPStan\Rules\Api\RuntimeReflectionFunctionRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionFunctionRule($this->getService('reflectionProvider'));
	}


	public function createService0303(): PHPStan\Rules\Api\RuntimeReflectionInstantiationRule
	{
		return new PHPStan\Rules\Api\RuntimeReflectionInstantiationRule($this->getService('reflectionProvider'));
	}


	public function createService0304(): PHPStan\Rules\Classes\ExistingClassInClassExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInClassExtendsRule(
			$this->getService('0104'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0305(): PHPStan\Rules\Classes\ExistingClassInInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInInstanceOfRule(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			true
		);
	}


	public function createService0306(): PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule
	{
		return new PHPStan\Rules\Exceptions\CaughtExceptionExistenceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			true
		);
	}


	public function createService0307(): PHPStan\Rules\Functions\CallToNonExistentFunctionRule
	{
		return new PHPStan\Rules\Functions\CallToNonExistentFunctionRule($this->getService('reflectionProvider'), false);
	}


	public function createService0308(): PHPStan\Rules\Constants\OverridingConstantRule
	{
		return new PHPStan\Rules\Constants\OverridingConstantRule(true);
	}


	public function createService0309(): PHPStan\Rules\Methods\OverridingMethodRule
	{
		return new PHPStan\Rules\Methods\OverridingMethodRule(
			$this->getService('019'),
			$this->getService('0126'),
			true,
			$this->getService('0127'),
			false
		);
	}


	public function createService0310(): PHPStan\Rules\Methods\ConsistentConstructorRule
	{
		return new PHPStan\Rules\Methods\ConsistentConstructorRule($this->getService('0127'));
	}


	public function createService0311(): PHPStan\Rules\Missing\MissingReturnRule
	{
		return new PHPStan\Rules\Missing\MissingReturnRule(false, false);
	}


	public function createService0312(): PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInGroupUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			false
		);
	}


	public function createService0313(): PHPStan\Rules\Namespaces\ExistingNamesInUseRule
	{
		return new PHPStan\Rules\Namespaces\ExistingNamesInUseRule(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			false
		);
	}


	public function createService0314(): PHPStan\Rules\Operators\InvalidIncDecOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidIncDecOperationRule(false);
	}


	public function createService0315(): PHPStan\Rules\Properties\AccessPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			true,
			false
		);
	}


	public function createService0316(): PHPStan\Rules\Properties\AccessStaticPropertiesRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0104')
		);
	}


	public function createService0317(): PHPStan\Rules\Properties\ExistingClassesInPropertiesRule
	{
		return new PHPStan\Rules\Properties\ExistingClassesInPropertiesRule(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			$this->getService('0133'),
			$this->getService('019'),
			true,
			false
		);
	}


	public function createService0318(): PHPStan\Rules\Functions\FunctionCallableRule
	{
		return new PHPStan\Rules\Functions\FunctionCallableRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('019'),
			false,
			false
		);
	}


	public function createService0319(): PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyByPhpDocPropertyAssignRule($this->getService('0328'));
	}


	public function createService0320(): PHPStan\Rules\Properties\OverridingPropertyRule
	{
		return new PHPStan\Rules\Properties\OverridingPropertyRule(true, false);
	}


	public function createService0321(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyRule;
	}


	public function createService0322(): PHPStan\Rules\Properties\UninitializedPropertyRule
	{
		return new PHPStan\Rules\Properties\UninitializedPropertyRule($this->getService('0328'));
	}


	public function createService0323(): PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\WritingToReadOnlyPropertiesRule(
			$this->getService('0139'),
			$this->getService('0137'),
			$this->getService('0138'),
			false
		);
	}


	public function createService0324(): PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule
	{
		return new PHPStan\Rules\Properties\ReadingWriteOnlyPropertiesRule(
			$this->getService('0137'),
			$this->getService('0138'),
			$this->getService('0139'),
			false
		);
	}


	public function createService0325(): PHPStan\Rules\Variables\CompactVariablesRule
	{
		return new PHPStan\Rules\Variables\CompactVariablesRule(true);
	}


	public function createService0326(): PHPStan\Rules\Variables\DefinedVariableRule
	{
		return new PHPStan\Rules\Variables\DefinedVariableRule(true, true);
	}


	public function createService0327(): PHPStan\Rules\Regexp\RegularExpressionPatternRule
	{
		return new PHPStan\Rules\Regexp\RegularExpressionPatternRule;
	}


	public function createService0328(): PHPStan\Reflection\ConstructorsHelper
	{
		return new PHPStan\Reflection\ConstructorsHelper($this->getService('059'), ['PHPUnit\Framework\TestCase::setUp']);
	}


	public function createService0329(): PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule
	{
		return new PHPStan\Rules\Methods\MissingMagicSerializationMethodsRule($this->getService('019'));
	}


	public function createService0330(): PHPStan\Rules\Classes\MixinRule
	{
		return new PHPStan\Rules\Classes\MixinRule(
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			$this->getService('0120'),
			$this->getService('0128'),
			$this->getService('0133'),
			true
		);
	}


	public function createService0331(): PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleArrowFunctionDefaultParameterTypeRule;
	}


	public function createService0332(): PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleClosureDefaultParameterTypeRule;
	}


	public function createService0333(): PHPStan\Rules\Functions\CallCallablesRule
	{
		return new PHPStan\Rules\Functions\CallCallablesRule($this->getService('0115'), $this->getService('0139'), false);
	}


	public function createService0334(): PHPStan\Rules\Methods\IllegalConstructorMethodCallRule
	{
		return new PHPStan\Rules\Methods\IllegalConstructorMethodCallRule;
	}


	public function createService0335(): PHPStan\Rules\Methods\IllegalConstructorStaticCallRule
	{
		return new PHPStan\Rules\Methods\IllegalConstructorStaticCallRule;
	}


	public function createService0336(): PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocTagValueRule($this->getService('022'), $this->getService('025'), false, false);
	}


	public function createService0337(): PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPhpDocVarTagTypeRule(
			$this->getService('0141'),
			$this->getService('reflectionProvider'),
			$this->getService('0104'),
			$this->getService('0120'),
			$this->getService('0128'),
			$this->getService('0133'),
			true,
			false
		);
	}


	public function createService0338(): PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidPHPStanDocTagRule($this->getService('022'), $this->getService('025'), false);
	}


	public function createService0339(): PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule
	{
		return new PHPStan\Rules\PhpDoc\VarTagChangedExpressionTypeRule($this->getService('0134'));
	}


	public function createService0340(): PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule
	{
		return new PHPStan\Rules\PhpDoc\WrongVariableNameInVarTagRule($this->getService('0141'), $this->getService('0134'), false);
	}


	public function createService0341(): PHPStan\Rules\Generics\PropertyVarianceRule
	{
		return new PHPStan\Rules\Generics\PropertyVarianceRule($this->getService('0122'), false);
	}


	public function createService0342(): PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayDimFetchRule($this->getService('0139'), false);
	}


	public function createService0343(): PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule
	{
		return new PHPStan\Rules\Arrays\InvalidKeyInArrayItemRule(false);
	}


	public function createService0344(): PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule
	{
		return new PHPStan\Rules\Arrays\NonexistentOffsetInArrayDimFetchRule(
			$this->getService('0139'),
			$this->getService('0103'),
			false
		);
	}


	public function createService0345(): PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidFunctionWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0346(): PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule
	{
		return new PHPStan\Rules\Exceptions\ThrowsVoidMethodWithExplicitThrowPointRule(
			$this->getService('exceptionTypeResolver'),
			false
		);
	}


	public function createService0347(): PHPStan\Rules\Generators\YieldFromTypeRule
	{
		return new PHPStan\Rules\Generators\YieldFromTypeRule($this->getService('0139'), false);
	}


	public function createService0348(): PHPStan\Rules\Generators\YieldInGeneratorRule
	{
		return new PHPStan\Rules\Generators\YieldInGeneratorRule(false);
	}


	public function createService0349(): PHPStan\Rules\Arrays\ArrayUnpackingRule
	{
		return new PHPStan\Rules\Arrays\ArrayUnpackingRule($this->getService('019'), $this->getService('0139'));
	}


	public function createService0350(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRefRule($this->getService('0138'));
	}


	public function createService0351(): PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyByPhpDocPropertyAssignRule($this->getService('0138'), $this->getService('0328'));
	}


	public function createService0352(): PHPStan\Rules\Classes\ImpossibleInstanceOfRule
	{
		return new PHPStan\Rules\Classes\ImpossibleInstanceOfRule(false, true, false);
	}


	public function createService0353(): PHPStan\Rules\Comparison\BooleanAndConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanAndConstantConditionRule($this->getService('0106'), true, false, false);
	}


	public function createService0354(): PHPStan\Rules\Comparison\BooleanOrConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanOrConstantConditionRule($this->getService('0106'), true, false, false);
	}


	public function createService0355(): PHPStan\Rules\Comparison\BooleanNotConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\BooleanNotConstantConditionRule($this->getService('0106'), true, false);
	}


	public function createService0356(): PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivatePropertyRule($this->getService('0136'), [], [], false);
	}


	public function createService0357(): PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\DoWhileLoopConstantConditionRule($this->getService('0106'), true);
	}


	public function createService0358(): PHPStan\Rules\Comparison\ElseIfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\ElseIfConstantConditionRule($this->getService('0106'), true, false);
	}


	public function createService0359(): PHPStan\Rules\Comparison\IfConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\IfConstantConditionRule($this->getService('0106'), true);
	}


	public function createService0360(): PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeFunctionCallRule($this->getService('0107'), false, true, false);
	}


	public function createService0361(): PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeMethodCallRule($this->getService('0107'), false, true, false);
	}


	public function createService0362(): PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule
	{
		return new PHPStan\Rules\Comparison\ImpossibleCheckTypeStaticMethodCallRule($this->getService('0107'), false, true, false);
	}


	public function createService0363(): PHPStan\Rules\Comparison\MatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\MatchExpressionRule($this->getService('0106'), false, false, false, true);
	}


	public function createService0364(): PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\NumberComparisonOperatorsConstantConditionRule(true);
	}


	public function createService0365(): PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule
	{
		return new PHPStan\Rules\Comparison\StrictComparisonOfDifferentTypesRule(false, true, false);
	}


	public function createService0366(): PHPStan\Rules\Comparison\ConstantLooseComparisonRule
	{
		return new PHPStan\Rules\Comparison\ConstantLooseComparisonRule(false, true, false);
	}


	public function createService0367(): PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule
	{
		return new PHPStan\Rules\Comparison\TernaryOperatorConstantConditionRule($this->getService('0106'), true);
	}


	public function createService0368(): PHPStan\Rules\Comparison\UnreachableIfBranchesRule
	{
		return new PHPStan\Rules\Comparison\UnreachableIfBranchesRule($this->getService('0106'), true, false);
	}


	public function createService0369(): PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule
	{
		return new PHPStan\Rules\Comparison\UnreachableTernaryElseBranchRule($this->getService('0106'), true, false);
	}


	public function createService0370(): PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysFalseConditionRule($this->getService('0106'), true);
	}


	public function createService0371(): PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule
	{
		return new PHPStan\Rules\Comparison\WhileLoopAlwaysTrueConditionRule($this->getService('0106'), true);
	}


	public function createService0372(): PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideMethodReturnTypehintRule(false);
	}


	public function createService0373(): PHPStan\Rules\Properties\NullsafePropertyFetchRule
	{
		return new PHPStan\Rules\Properties\NullsafePropertyFetchRule;
	}


	public function createService0374(): PHPStan\Rules\Traits\TraitDeclarationCollector
	{
		return new PHPStan\Rules\Traits\TraitDeclarationCollector;
	}


	public function createService0375(): PHPStan\Rules\Traits\TraitUseCollector
	{
		return new PHPStan\Rules\Traits\TraitUseCollector;
	}


	public function createService0376(): PHPStan\Rules\Traits\NotAnalysedTraitRule
	{
		return new PHPStan\Rules\Traits\NotAnalysedTraitRule;
	}


	public function createService0377(): Carbon\PHPStan\MacroExtension
	{
		return new Carbon\PHPStan\MacroExtension($this->getService('090'), $this->getService('reflectionProvider'));
	}


	public function createService0378(): NunoMaduro\Larastan\Methods\RelationForwardsCallsExtension
	{
		return new NunoMaduro\Larastan\Methods\RelationForwardsCallsExtension(
			$this->getService('0453'),
			$this->getService('reflectionProvider'),
			$this->getService('0380')
		);
	}


	public function createService0379(): NunoMaduro\Larastan\Methods\ModelForwardsCallsExtension
	{
		return new NunoMaduro\Larastan\Methods\ModelForwardsCallsExtension(
			$this->getService('0453'),
			$this->getService('reflectionProvider'),
			$this->getService('0380')
		);
	}


	public function createService0380(): NunoMaduro\Larastan\Methods\EloquentBuilderForwardsCallsExtension
	{
		return new NunoMaduro\Larastan\Methods\EloquentBuilderForwardsCallsExtension(
			$this->getService('0453'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0381(): NunoMaduro\Larastan\Methods\HigherOrderTapProxyExtension
	{
		return new NunoMaduro\Larastan\Methods\HigherOrderTapProxyExtension;
	}


	public function createService0382(): NunoMaduro\Larastan\Methods\HigherOrderCollectionProxyExtension
	{
		return new NunoMaduro\Larastan\Methods\HigherOrderCollectionProxyExtension($this->getService('0479'));
	}


	public function createService0383(): NunoMaduro\Larastan\Methods\StorageMethodsClassReflectionExtension
	{
		return new NunoMaduro\Larastan\Methods\StorageMethodsClassReflectionExtension($this->getService('reflectionProvider'));
	}


	public function createService0384(): NunoMaduro\Larastan\Methods\Extension
	{
		return new NunoMaduro\Larastan\Methods\Extension($this->getService('090'), $this->getService('reflectionProvider'));
	}


	public function createService0385(): NunoMaduro\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension
	{
		return new NunoMaduro\Larastan\Methods\ModelFactoryMethodsClassReflectionExtension;
	}


	public function createService0386(): NunoMaduro\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension
	{
		return new NunoMaduro\Larastan\Methods\RedirectResponseMethodsClassReflectionExtension;
	}


	public function createService0387(): NunoMaduro\Larastan\Methods\MacroMethodsClassReflectionExtension
	{
		return new NunoMaduro\Larastan\Methods\MacroMethodsClassReflectionExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0290')
		);
	}


	public function createService0388(): NunoMaduro\Larastan\Methods\ViewWithMethodsClassReflectionExtension
	{
		return new NunoMaduro\Larastan\Methods\ViewWithMethodsClassReflectionExtension;
	}


	public function createService0389(): NunoMaduro\Larastan\Properties\ModelAccessorExtension
	{
		return new NunoMaduro\Larastan\Properties\ModelAccessorExtension;
	}


	public function createService0390(): NunoMaduro\Larastan\Properties\ModelPropertyExtension
	{
		return new NunoMaduro\Larastan\Properties\ModelPropertyExtension(
			$this->getService('033'),
			$this->getService('0448'),
			$this->getService('0449'),
			$this->getService('0450')
		);
	}


	public function createService0391(): NunoMaduro\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension
	{
		return new NunoMaduro\Larastan\Properties\HigherOrderCollectionProxyPropertyExtension($this->getService('0479'));
	}


	public function createService0392(): NunoMaduro\Larastan\Types\RelationDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\Types\RelationDynamicMethodReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0393(): NunoMaduro\Larastan\Types\ModelRelationsDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\Types\ModelRelationsDynamicMethodReturnTypeExtension($this->getService('0447'));
	}


	public function createService0394(): NunoMaduro\Larastan\ReturnTypes\HigherOrderTapProxyExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\HigherOrderTapProxyExtension;
	}


	public function createService0395(): NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Contracts\Container\Container');
	}


	public function createService0396(): NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Container\Container');
	}


	public function createService0397(): NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Foundation\Application');
	}


	public function createService0398(): NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ContainerArrayAccessDynamicMethodReturnTypeExtension('Illuminate\Contracts\Foundation\Application');
	}


	public function createService0399(): NunoMaduro\Larastan\Properties\ModelRelationsExtension
	{
		return new NunoMaduro\Larastan\Properties\ModelRelationsExtension($this->getService('0447'), $this->getService('0417'));
	}


	public function createService0400(): NunoMaduro\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ModelFactoryDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0401(): NunoMaduro\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ModelDynamicStaticMethodReturnTypeExtension(
			$this->getService('0453'),
			$this->getService('0417'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0402(): NunoMaduro\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\AppMakeDynamicReturnTypeExtension($this->getService('0476'));
	}


	public function createService0403(): NunoMaduro\Larastan\ReturnTypes\AuthExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\AuthExtension;
	}


	public function createService0404(): NunoMaduro\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\GuardDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0405(): NunoMaduro\Larastan\ReturnTypes\AuthManagerExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\AuthManagerExtension;
	}


	public function createService0406(): NunoMaduro\Larastan\ReturnTypes\DateExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\DateExtension;
	}


	public function createService0407(): NunoMaduro\Larastan\ReturnTypes\GuardExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\GuardExtension;
	}


	public function createService0408(): NunoMaduro\Larastan\ReturnTypes\RequestFileExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\RequestFileExtension;
	}


	public function createService0409(): NunoMaduro\Larastan\ReturnTypes\RequestRouteExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\RequestRouteExtension;
	}


	public function createService0410(): NunoMaduro\Larastan\ReturnTypes\RequestUserExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\RequestUserExtension;
	}


	public function createService0411(): NunoMaduro\Larastan\ReturnTypes\EloquentBuilderExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\EloquentBuilderExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0417')
		);
	}


	public function createService0412(): NunoMaduro\Larastan\ReturnTypes\RelationFindExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\RelationFindExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0417')
		);
	}


	public function createService0413(): NunoMaduro\Larastan\ReturnTypes\RelationCollectionExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\RelationCollectionExtension($this->getService('0417'));
	}


	public function createService0414(): NunoMaduro\Larastan\ReturnTypes\ModelFindExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ModelFindExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0417')
		);
	}


	public function createService0415(): NunoMaduro\Larastan\ReturnTypes\BuilderModelFindExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\BuilderModelFindExtension(
			$this->getService('reflectionProvider'),
			$this->getService('0417')
		);
	}


	public function createService0416(): NunoMaduro\Larastan\ReturnTypes\TestCaseExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\TestCaseExtension;
	}


	public function createService0417(): NunoMaduro\Larastan\Support\CollectionHelper
	{
		return new NunoMaduro\Larastan\Support\CollectionHelper($this->getService('reflectionProvider'));
	}


	public function createService0418(): NunoMaduro\Larastan\ReturnTypes\Helpers\AuthExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\AuthExtension;
	}


	public function createService0419(): NunoMaduro\Larastan\ReturnTypes\Helpers\CollectExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\CollectExtension($this->getService('0417'));
	}


	public function createService0420(): NunoMaduro\Larastan\ReturnTypes\Helpers\NowAndTodayExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\NowAndTodayExtension;
	}


	public function createService0421(): NunoMaduro\Larastan\ReturnTypes\Helpers\ResponseExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\ResponseExtension;
	}


	public function createService0422(): NunoMaduro\Larastan\ReturnTypes\Helpers\ValidatorExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\ValidatorExtension;
	}


	public function createService0423(): NunoMaduro\Larastan\ReturnTypes\CollectionFilterDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\CollectionFilterDynamicReturnTypeExtension;
	}


	public function createService0424(): NunoMaduro\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\CollectionWhereNotNullDynamicReturnTypeExtension;
	}


	public function createService0425(): NunoMaduro\Larastan\ReturnTypes\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\CollectionGenericStaticMethodDynamicMethodReturnTypeExtension;
	}


	public function createService0426(): NunoMaduro\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\NewModelQueryDynamicMethodReturnTypeExtension($this->getService('0453'));
	}


	public function createService0427(): NunoMaduro\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\FactoryDynamicMethodReturnTypeExtension;
	}


	public function createService0428(): NunoMaduro\Larastan\ReturnTypes\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\CollectionGenericStaticMethodDynamicStaticMethodReturnTypeExtension($this->getService('reflectionProvider'));
	}


	public function createService0429(): NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(false, 'abort');
	}


	public function createService0430(): NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(true, 'abort');
	}


	public function createService0431(): NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(false, 'throw');
	}


	public function createService0432(): NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension
	{
		return new NunoMaduro\Larastan\Types\AbortIfFunctionTypeSpecifyingExtension(true, 'throw');
	}


	public function createService0433(): NunoMaduro\Larastan\ReturnTypes\Helpers\AppExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\AppExtension($this->getService('0476'));
	}


	public function createService0434(): NunoMaduro\Larastan\ReturnTypes\Helpers\ValueExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\ValueExtension;
	}


	public function createService0435(): NunoMaduro\Larastan\ReturnTypes\Helpers\TapExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\Helpers\TapExtension;
	}


	public function createService0436(): NunoMaduro\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\StorageDynamicStaticMethodReturnTypeExtension;
	}


	public function createService0437(): NunoMaduro\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension
	{
		return new NunoMaduro\Larastan\Types\GenericEloquentCollectionTypeNodeResolverExtension($this->getService('031'));
	}


	public function createService0438(): NunoMaduro\Larastan\Types\ViewStringTypeNodeResolverExtension
	{
		return new NunoMaduro\Larastan\Types\ViewStringTypeNodeResolverExtension;
	}


	public function createService0439(): NunoMaduro\Larastan\Rules\OctaneCompatibilityRule
	{
		return new NunoMaduro\Larastan\Rules\OctaneCompatibilityRule;
	}


	public function createService0440(): NunoMaduro\Larastan\Rules\NoModelMakeRule
	{
		return new NunoMaduro\Larastan\Rules\NoModelMakeRule($this->getService('reflectionProvider'));
	}


	public function createService0441(): NunoMaduro\Larastan\Rules\NoUnnecessaryCollectionCallRule
	{
		return new NunoMaduro\Larastan\Rules\NoUnnecessaryCollectionCallRule(
			$this->getService('reflectionProvider'),
			$this->getService('0390'),
			[],
			[]
		);
	}


	public function createService0442(): NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertyRule
	{
		return new NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertyRule(
			$this->getService('0451'),
			$this->getService('0139'),
			$this->getService('0452')
		);
	}


	public function createService0443(): NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertyStaticCallRule
	{
		return new NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertyStaticCallRule(
			$this->getService('reflectionProvider'),
			$this->getService('0451'),
			$this->getService('0139')
		);
	}


	public function createService0444(): NunoMaduro\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension
	{
		return new NunoMaduro\Larastan\Types\GenericEloquentBuilderTypeNodeResolverExtension($this->getService('reflectionProvider'));
	}


	public function createService0445(): NunoMaduro\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\AppEnvironmentReturnTypeExtension;
	}


	public function createService0446(): NunoMaduro\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension
	{
		return new NunoMaduro\Larastan\Types\ModelProperty\ModelPropertyTypeNodeResolverExtension($this->getService('031'), true);
	}


	public function createService0447(): NunoMaduro\Larastan\Types\RelationParserHelper
	{
		return new NunoMaduro\Larastan\Types\RelationParserHelper(
			$this->getService('currentPhpVersionSimpleDirectParser'),
			$this->getService('043'),
			$this->getService('reflectionProvider')
		);
	}


	public function createService0448(): NunoMaduro\Larastan\Properties\MigrationHelper
	{
		return new NunoMaduro\Larastan\Properties\MigrationHelper(
			$this->getService('currentPhpVersionSimpleDirectParser'),
			[],
			$this->getService('066'),
			false,
			$this->getService('reflectionProvider')
		);
	}


	public function createService0449(): NunoMaduro\Larastan\Properties\SquashedMigrationHelper
	{
		return new NunoMaduro\Larastan\Properties\SquashedMigrationHelper(
			[],
			$this->getService('066'),
			$this->getService('0457'),
			false
		);
	}


	public function createService0450(): NunoMaduro\Larastan\Properties\ModelCastHelper
	{
		return new NunoMaduro\Larastan\Properties\ModelCastHelper($this->getService('reflectionProvider'));
	}


	public function createService0451(): NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertiesRuleHelper
	{
		return new NunoMaduro\Larastan\Rules\ModelProperties\ModelPropertiesRuleHelper;
	}


	public function createService0452(): NunoMaduro\Larastan\Rules\ModelRuleHelper
	{
		return new NunoMaduro\Larastan\Rules\ModelRuleHelper;
	}


	public function createService0453(): NunoMaduro\Larastan\Methods\BuilderHelper
	{
		return new NunoMaduro\Larastan\Methods\BuilderHelper($this->getService('reflectionProvider'), true, $this->getService('0387'));
	}


	public function createService0454(): NunoMaduro\Larastan\Rules\RelationExistenceRule
	{
		return new NunoMaduro\Larastan\Rules\RelationExistenceRule($this->getService('0452'));
	}


	public function createService0455(): NunoMaduro\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule
	{
		return new NunoMaduro\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule(
			$this->getService('reflectionProvider'),
			$this->getService('0115'),
			'Illuminate\Foundation\Bus\Dispatchable'
		);
	}


	public function createService0456(): NunoMaduro\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule
	{
		return new NunoMaduro\Larastan\Rules\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule(
			$this->getService('reflectionProvider'),
			$this->getService('0115'),
			'Illuminate\Foundation\Events\Dispatchable'
		);
	}


	public function createService0457(): NunoMaduro\Larastan\Properties\Schema\PhpMyAdminDataTypeToPhpTypeConverter
	{
		return new NunoMaduro\Larastan\Properties\Schema\PhpMyAdminDataTypeToPhpTypeConverter;
	}


	public function createService0458(): NunoMaduro\Larastan\LarastanStubFilesExtension
	{
		return new NunoMaduro\Larastan\LarastanStubFilesExtension;
	}


	public function createService0459(): NunoMaduro\Larastan\Rules\UnusedViewsRule
	{
		return new NunoMaduro\Larastan\Rules\UnusedViewsRule($this->getService('0465'), $this->getService('0466'));
	}


	public function createService0460(): NunoMaduro\Larastan\Collectors\UsedViewFunctionCollector
	{
		return new NunoMaduro\Larastan\Collectors\UsedViewFunctionCollector;
	}


	public function createService0461(): NunoMaduro\Larastan\Collectors\UsedEmailViewCollector
	{
		return new NunoMaduro\Larastan\Collectors\UsedEmailViewCollector;
	}


	public function createService0462(): NunoMaduro\Larastan\Collectors\UsedViewMakeCollector
	{
		return new NunoMaduro\Larastan\Collectors\UsedViewMakeCollector;
	}


	public function createService0463(): NunoMaduro\Larastan\Collectors\UsedViewFacadeMakeCollector
	{
		return new NunoMaduro\Larastan\Collectors\UsedViewFacadeMakeCollector;
	}


	public function createService0464(): NunoMaduro\Larastan\Collectors\UsedRouteFacadeViewCollector
	{
		return new NunoMaduro\Larastan\Collectors\UsedRouteFacadeViewCollector;
	}


	public function createService0465(): NunoMaduro\Larastan\Collectors\UsedViewInAnotherViewCollector
	{
		return new NunoMaduro\Larastan\Collectors\UsedViewInAnotherViewCollector(
			$this->getService('currentPhpVersionSimpleDirectParser'),
			$this->getService('0466')
		);
	}


	public function createService0466(): NunoMaduro\Larastan\Support\ViewFileHelper
	{
		return new NunoMaduro\Larastan\Support\ViewFileHelper([], $this->getService('066'));
	}


	public function createService0467(): NunoMaduro\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ApplicationMakeDynamicReturnTypeExtension($this->getService('0476'));
	}


	public function createService0468(): NunoMaduro\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ContainerMakeDynamicReturnTypeExtension($this->getService('0476'));
	}


	public function createService0469(): NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\ArgumentDynamicReturnTypeExtension(
			$this->getService('0477'),
			$this->getService('0478')
		);
	}


	public function createService0470(): NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\HasArgumentDynamicReturnTypeExtension($this->getService('0477'));
	}


	public function createService0471(): NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\OptionDynamicReturnTypeExtension(
			$this->getService('0477'),
			$this->getService('0478')
		);
	}


	public function createService0472(): NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\ConsoleCommand\HasOptionDynamicReturnTypeExtension($this->getService('0477'));
	}


	public function createService0473(): NunoMaduro\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\TranslatorGetReturnTypeExtension;
	}


	public function createService0474(): NunoMaduro\Larastan\ReturnTypes\TransHelperReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\TransHelperReturnTypeExtension;
	}


	public function createService0475(): NunoMaduro\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension
	{
		return new NunoMaduro\Larastan\ReturnTypes\DoubleUnderscoreHelperReturnTypeExtension;
	}


	public function createService0476(): NunoMaduro\Larastan\ReturnTypes\AppMakeHelper
	{
		return new NunoMaduro\Larastan\ReturnTypes\AppMakeHelper;
	}


	public function createService0477(): NunoMaduro\Larastan\Internal\ConsoleApplicationResolver
	{
		return new NunoMaduro\Larastan\Internal\ConsoleApplicationResolver;
	}


	public function createService0478(): NunoMaduro\Larastan\Internal\ConsoleApplicationHelper
	{
		return new NunoMaduro\Larastan\Internal\ConsoleApplicationHelper($this->getService('0477'));
	}


	public function createService0479(): NunoMaduro\Larastan\Support\HigherOrderCollectionProxyHelper
	{
		return new NunoMaduro\Larastan\Support\HigherOrderCollectionProxyHelper($this->getService('reflectionProvider'));
	}


	public function createService0480(): PHPStan\Rules\Deprecations\DeprecatedClassHelper
	{
		return new PHPStan\Rules\Deprecations\DeprecatedClassHelper($this->getService('reflectionProvider'));
	}


	public function createService0481(): PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider
	{
		return new PHPStan\DependencyInjection\LazyDeprecatedScopeResolverProvider($this->getService('059'));
	}


	public function createService0482(): PHPStan\Rules\Deprecations\DeprecatedScopeHelper
	{
		return $this->getService('0481')->get();
	}


	public function createService0483(): PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver
	{
		return new PHPStan\Rules\Deprecations\DefaultDeprecatedScopeResolver;
	}


	public function createService0484(): PHPStan\PhpDoc\PHPUnit\MockObjectTypeNodeResolverExtension
	{
		return new PHPStan\PhpDoc\PHPUnit\MockObjectTypeNodeResolverExtension;
	}


	public function createService0485(): PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertFunctionTypeSpecifyingExtension;
	}


	public function createService0486(): PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertMethodTypeSpecifyingExtension;
	}


	public function createService0487(): PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension
	{
		return new PHPStan\Type\PHPUnit\Assert\AssertStaticMethodTypeSpecifyingExtension;
	}


	public function createService0488(): PHPStan\Type\PHPUnit\InvocationMockerDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\InvocationMockerDynamicReturnTypeExtension;
	}


	public function createService0489(): PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\MockBuilderDynamicReturnTypeExtension;
	}


	public function createService0490(): PHPStan\Type\PHPUnit\MockObjectDynamicReturnTypeExtension
	{
		return new PHPStan\Type\PHPUnit\MockObjectDynamicReturnTypeExtension;
	}


	public function createService0491(): PHPStan\Rules\PHPUnit\CoversHelper
	{
		return new PHPStan\Rules\PHPUnit\CoversHelper($this->getService('reflectionProvider'));
	}


	public function createService0492(): PHPStan\Rules\PHPUnit\AnnotationHelper
	{
		return new PHPStan\Rules\PHPUnit\AnnotationHelper;
	}


	public function createService0493(): PHPStan\Rules\PHPUnit\DataProviderHelper
	{
		return $this->getService('0494')->create();
	}


	public function createService0494(): PHPStan\Rules\PHPUnit\DataProviderHelperFactory
	{
		return new PHPStan\Rules\PHPUnit\DataProviderHelperFactory($this->getService('reflectionProvider'), $this->getService('0141'));
	}


	public function createService0495(): PHPStan\Rules\PHPUnit\ClassCoversExistsRule
	{
		return new PHPStan\Rules\PHPUnit\ClassCoversExistsRule($this->getService('0491'), $this->getService('reflectionProvider'));
	}


	public function createService0496(): PHPStan\Rules\PHPUnit\ClassMethodCoversExistsRule
	{
		return new PHPStan\Rules\PHPUnit\ClassMethodCoversExistsRule($this->getService('0491'), $this->getService('0141'));
	}


	public function createService0497(): PHPStan\Rules\PHPUnit\DataProviderDeclarationRule
	{
		return new PHPStan\Rules\PHPUnit\DataProviderDeclarationRule($this->getService('0493'), false, true);
	}


	public function createService0498(): PHPStan\Rules\PHPUnit\NoMissingSpaceInClassAnnotationRule
	{
		return new PHPStan\Rules\PHPUnit\NoMissingSpaceInClassAnnotationRule($this->getService('0492'));
	}


	public function createService0499(): PHPStan\Rules\PHPUnit\NoMissingSpaceInMethodAnnotationRule
	{
		return new PHPStan\Rules\PHPUnit\NoMissingSpaceInMethodAnnotationRule($this->getService('0492'));
	}


	public function createService0500(): Spatie\Invade\PHPStan\InvadePropertiesReflectionExtension
	{
		return new Spatie\Invade\PHPStan\InvadePropertiesReflectionExtension;
	}


	public function createService0501(): Spatie\Invade\PHPStan\InvadeMethodsReflectionExtension
	{
		return new Spatie\Invade\PHPStan\InvadeMethodsReflectionExtension;
	}


	public function createServiceBetterReflectionClassReflector(): PHPStan\BetterReflection\Reflector\ClassReflector
	{
		return new PHPStan\BetterReflection\Reflector\ClassReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionConstantReflector(): PHPStan\BetterReflection\Reflector\ConstantReflector
	{
		return new PHPStan\BetterReflection\Reflector\ConstantReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionFunctionReflector(): PHPStan\BetterReflection\Reflector\FunctionReflector
	{
		return new PHPStan\BetterReflection\Reflector\FunctionReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceBetterReflectionProvider(): PHPStan\Reflection\BetterReflection\BetterReflectionProvider
	{
		return new PHPStan\Reflection\BetterReflection\BetterReflectionProvider(
			$this->getService('094'),
			$this->getService('076'),
			$this->getService('062'),
			$this->getService('betterReflectionReflector'),
			$this->getService('0141'),
			$this->getService('027'),
			$this->getService('019'),
			$this->getService('095'),
			$this->getService('stubPhpDocProvider'),
			$this->getService('075'),
			$this->getService('relativePathHelper'),
			$this->getService('018'),
			$this->getService('066'),
			$this->getService('0295')
		);
	}


	public function createServiceBetterReflectionReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return new PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector($this->getService('originalBetterReflectionReflector'));
	}


	public function createServiceBetterReflectionSourceLocator(): PHPStan\BetterReflection\SourceLocator\Type\SourceLocator
	{
		return $this->getService('0292')->create();
	}


	public function createServiceBroker(): PHPStan\Broker\Broker
	{
		return $this->getService('brokerFactory')->create();
	}


	public function createServiceBrokerFactory(): PHPStan\Broker\BrokerFactory
	{
		return new PHPStan\Broker\BrokerFactory($this->getService('059'));
	}


	public function createServiceCacheStorage(): PHPStan\Cache\FileCacheStorage
	{
		return new PHPStan\Cache\FileCacheStorage('/Users/rabol/code/web/packages/filament-logviewer/build/phpstan/cache/PHPStan');
	}


	public function createServiceContainer(): Container_96877e6014
	{
		return $this;
	}


	public function createServiceCurrentPhpVersionLexer(): PhpParser\Lexer
	{
		return $this->getService('02')->create();
	}


	public function createServiceCurrentPhpVersionPhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('currentPhpVersionLexer'));
	}


	public function createServiceCurrentPhpVersionRichParser(): PHPStan\Parser\RichParser
	{
		return new PHPStan\Parser\RichParser(
			$this->getService('currentPhpVersionPhpParser'),
			$this->getService('currentPhpVersionLexer'),
			$this->getService('03'),
			$this->getService('059')
		);
	}


	public function createServiceCurrentPhpVersionSimpleDirectParser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('currentPhpVersionPhpParser'), $this->getService('03'));
	}


	public function createServiceCurrentPhpVersionSimpleParser(): PHPStan\Parser\CleaningParser
	{
		return new PHPStan\Parser\CleaningParser($this->getService('currentPhpVersionSimpleDirectParser'), $this->getService('019'));
	}


	public function createServiceDefaultAnalysisParser(): PHPStan\Parser\CachedParser
	{
		return new PHPStan\Parser\CachedParser($this->getService('pathRoutingParser'), 256);
	}


	public function createServiceErrorFormatter__checkstyle(): PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\CheckstyleErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__github(): PHPStan\Command\ErrorFormatter\GithubErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GithubErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__gitlab(): PHPStan\Command\ErrorFormatter\GitlabErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\GitlabErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__json(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(false);
	}


	public function createServiceErrorFormatter__junit(): PHPStan\Command\ErrorFormatter\JunitErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JunitErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceErrorFormatter__prettyJson(): PHPStan\Command\ErrorFormatter\JsonErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\JsonErrorFormatter(true);
	}


	public function createServiceErrorFormatter__raw(): PHPStan\Command\ErrorFormatter\RawErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\RawErrorFormatter;
	}


	public function createServiceErrorFormatter__table(): PHPStan\Command\ErrorFormatter\TableErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TableErrorFormatter(
			$this->getService('relativePathHelper'),
			$this->getService('simpleRelativePathHelper'),
			$this->getService('0297'),
			true,
			null,
			null
		);
	}


	public function createServiceErrorFormatter__teamcity(): PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter
	{
		return new PHPStan\Command\ErrorFormatter\TeamcityErrorFormatter($this->getService('simpleRelativePathHelper'));
	}


	public function createServiceExceptionTypeResolver(): PHPStan\Rules\Exceptions\ExceptionTypeResolver
	{
		return $this->getService('0108');
	}


	public function createServiceFileExcluderAnalyse(): PHPStan\File\FileExcluder
	{
		return $this->getService('067')->createAnalyseFileExcluder();
	}


	public function createServiceFileExcluderScan(): PHPStan\File\FileExcluder
	{
		return $this->getService('067')->createScanFileExcluder();
	}


	public function createServiceFileFinderAnalyse(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderAnalyse'), $this->getService('066'), ['php']);
	}


	public function createServiceFileFinderScan(): PHPStan\File\FileFinder
	{
		return new PHPStan\File\FileFinder($this->getService('fileExcluderScan'), $this->getService('066'), ['php']);
	}


	public function createServiceNodeScopeResolverReflector(): PHPStan\Reflection\BetterReflection\Reflector\MemoizingReflector
	{
		return $this->getService('betterReflectionReflector');
	}


	public function createServiceOriginalBetterReflectionReflector(): PHPStan\BetterReflection\Reflector\DefaultReflector
	{
		return new PHPStan\BetterReflection\Reflector\DefaultReflector($this->getService('betterReflectionSourceLocator'));
	}


	public function createServiceParentDirectoryRelativePathHelper(): PHPStan\File\ParentDirectoryRelativePathHelper
	{
		return new PHPStan\File\ParentDirectoryRelativePathHelper('/Users/rabol/code/web/packages/filament-logviewer');
	}


	public function createServicePathRoutingParser(): PHPStan\Parser\PathRoutingParser
	{
		return new PHPStan\Parser\PathRoutingParser(
			$this->getService('066'),
			$this->getService('currentPhpVersionRichParser'),
			$this->getService('currentPhpVersionSimpleParser'),
			$this->getService('php8Parser')
		);
	}


	public function createServicePhp8Lexer(): PhpParser\Lexer\Emulative
	{
		return $this->getService('02')->createEmulative();
	}


	public function createServicePhp8Parser(): PHPStan\Parser\SimpleParser
	{
		return new PHPStan\Parser\SimpleParser($this->getService('php8PhpParser'), $this->getService('03'));
	}


	public function createServicePhp8PhpParser(): PhpParser\Parser\Php7
	{
		return new PhpParser\Parser\Php7($this->getService('php8Lexer'));
	}


	public function createServicePhpParserDecorator(): PHPStan\Parser\PhpParserDecorator
	{
		return new PHPStan\Parser\PhpParserDecorator($this->getService('defaultAnalysisParser'));
	}


	public function createServiceReflectionProvider(): PHPStan\Reflection\ReflectionProvider
	{
		return $this->getService('reflectionProviderFactory')->create();
	}


	public function createServiceReflectionProviderFactory(): PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory
	{
		return new PHPStan\Reflection\ReflectionProvider\ReflectionProviderFactory($this->getService('betterReflectionProvider'));
	}


	public function createServiceRegistry(): PHPStan\Rules\LazyRegistry
	{
		return new PHPStan\Rules\LazyRegistry($this->getService('059'));
	}


	public function createServiceRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\FuzzyRelativePathHelper(
			$this->getService('parentDirectoryRelativePathHelper'),
			'/Users/rabol/code/web/packages/filament-logviewer',
			$this->parameters['analysedPaths']
		);
	}


	public function createServiceRules__0(): PHPStan\Rules\Debug\DumpTypeRule
	{
		return new PHPStan\Rules\Debug\DumpTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__1(): PHPStan\Rules\Debug\FileAssertRule
	{
		return new PHPStan\Rules\Debug\FileAssertRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__10(): PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule
	{
		return new PHPStan\Rules\Api\PhpStanNamespaceIn3rdPartyPackageRule($this->getService('0101'));
	}


	public function createServiceRules__100(): PHPStan\Rules\PhpDoc\FunctionAssertRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionAssertRule($this->getService('0132'));
	}


	public function createServiceRules__101(): PHPStan\Rules\PhpDoc\MethodAssertRule
	{
		return new PHPStan\Rules\PhpDoc\MethodAssertRule($this->getService('0132'));
	}


	public function createServiceRules__102(): PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleSelfOutTypeRule;
	}


	public function createServiceRules__103(): PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatibleClassConstantPhpDocTypeRule(
			$this->getService('0120'),
			$this->getService('0133'),
			$this->getService('076')
		);
	}


	public function createServiceRules__104(): PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePhpDocTypeRule(
			$this->getService('0141'),
			$this->getService('0120'),
			$this->getService('0133')
		);
	}


	public function createServiceRules__105(): PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule
	{
		return new PHPStan\Rules\PhpDoc\IncompatiblePropertyPhpDocTypeRule($this->getService('0120'), $this->getService('0133'));
	}


	public function createServiceRules__106(): PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule
	{
		return new PHPStan\Rules\PhpDoc\InvalidThrowsPhpDocValueRule($this->getService('0141'));
	}


	public function createServiceRules__107(): PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule
	{
		return new PHPStan\Rules\Properties\AccessPrivatePropertyThroughStaticRule;
	}


	public function createServiceRules__108(): PHPStan\Rules\Arrays\ArrayDestructuringRule
	{
		return new PHPStan\Rules\Arrays\ArrayDestructuringRule($this->getService('0139'), $this->getService('0103'));
	}


	public function createServiceRules__109(): PHPStan\Rules\Arrays\IterableInForeachRule
	{
		return new PHPStan\Rules\Arrays\IterableInForeachRule($this->getService('0139'));
	}


	public function createServiceRules__11(): PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule
	{
		return new PHPStan\Rules\Arrays\DuplicateKeysInLiteralArraysRule($this->getService('016'));
	}


	public function createServiceRules__110(): PHPStan\Rules\Arrays\OffsetAccessAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignmentRule($this->getService('0139'));
	}


	public function createServiceRules__111(): PHPStan\Rules\Arrays\OffsetAccessAssignOpRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessAssignOpRule($this->getService('0139'));
	}


	public function createServiceRules__112(): PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessValueAssignmentRule($this->getService('0139'));
	}


	public function createServiceRules__113(): PHPStan\Rules\Arrays\UnpackIterableInArrayRule
	{
		return new PHPStan\Rules\Arrays\UnpackIterableInArrayRule($this->getService('0139'));
	}


	public function createServiceRules__114(): PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnTypeRule($this->getService('0117'));
	}


	public function createServiceRules__115(): PHPStan\Rules\Functions\ClosureReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ClosureReturnTypeRule($this->getService('0117'));
	}


	public function createServiceRules__116(): PHPStan\Rules\Functions\ReturnTypeRule
	{
		return new PHPStan\Rules\Functions\ReturnTypeRule($this->getService('0117'));
	}


	public function createServiceRules__117(): PHPStan\Rules\Generators\YieldTypeRule
	{
		return new PHPStan\Rules\Generators\YieldTypeRule($this->getService('0139'));
	}


	public function createServiceRules__118(): PHPStan\Rules\Methods\ReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ReturnTypeRule($this->getService('0117'));
	}


	public function createServiceRules__119(): PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\DefaultValueTypesAssignedToPropertiesRule($this->getService('0139'));
	}


	public function createServiceRules__12(): PHPStan\Rules\Arrays\EmptyArrayItemRule
	{
		return new PHPStan\Rules\Arrays\EmptyArrayItemRule;
	}


	public function createServiceRules__120(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRule($this->getService('0138'), $this->getService('0328'));
	}


	public function createServiceRules__121(): PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyAssignRefRule($this->getService('0138'));
	}


	public function createServiceRules__122(): PHPStan\Rules\Properties\TypesAssignedToPropertiesRule
	{
		return new PHPStan\Rules\Properties\TypesAssignedToPropertiesRule($this->getService('0139'), $this->getService('0138'));
	}


	public function createServiceRules__123(): PHPStan\Rules\Variables\ThrowTypeRule
	{
		return new PHPStan\Rules\Variables\ThrowTypeRule($this->getService('0139'));
	}


	public function createServiceRules__124(): PHPStan\Rules\Variables\VariableCloningRule
	{
		return new PHPStan\Rules\Variables\VariableCloningRule($this->getService('0139'));
	}


	public function createServiceRules__125(): PHPStan\Rules\Arrays\DeadForeachRule
	{
		return new PHPStan\Rules\Arrays\DeadForeachRule;
	}


	public function createServiceRules__126(): PHPStan\Rules\DeadCode\NoopRule
	{
		return new PHPStan\Rules\DeadCode\NoopRule($this->getService('016'));
	}


	public function createServiceRules__127(): PHPStan\Rules\DeadCode\UnreachableStatementRule
	{
		return new PHPStan\Rules\DeadCode\UnreachableStatementRule;
	}


	public function createServiceRules__128(): PHPStan\Rules\DeadCode\UnusedPrivateConstantRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateConstantRule($this->getService('0130'));
	}


	public function createServiceRules__129(): PHPStan\Rules\DeadCode\UnusedPrivateMethodRule
	{
		return new PHPStan\Rules\DeadCode\UnusedPrivateMethodRule;
	}


	public function createServiceRules__13(): PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule
	{
		return new PHPStan\Rules\Arrays\OffsetAccessWithoutDimForReadingRule;
	}


	public function createServiceRules__130(): PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule
	{
		return new PHPStan\Rules\Exceptions\CatchWithUnthrownExceptionRule;
	}


	public function createServiceRules__131(): PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule
	{
		return new PHPStan\Rules\Exceptions\OverwrittenExitPointByFinallyRule;
	}


	public function createServiceRules__132(): PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__133(): PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToConstructorStatementWithoutSideEffectsRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__134(): PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToMethodStatementWithoutSideEffectsRule($this->getService('0139'));
	}


	public function createServiceRules__135(): PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule
	{
		return new PHPStan\Rules\Methods\CallToStaticMethodStatementWithoutSideEffectsRule(
			$this->getService('0139'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__136(): PHPStan\Rules\Methods\NullsafeMethodCallRule
	{
		return new PHPStan\Rules\Methods\NullsafeMethodCallRule;
	}


	public function createServiceRules__137(): PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideArrowFunctionReturnTypehintRule;
	}


	public function createServiceRules__138(): PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideClosureReturnTypehintRule;
	}


	public function createServiceRules__139(): PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule
	{
		return new PHPStan\Rules\TooWideTypehints\TooWideFunctionReturnTypehintRule;
	}


	public function createServiceRules__14(): PHPStan\Rules\Cast\UnsetCastRule
	{
		return new PHPStan\Rules\Cast\UnsetCastRule($this->getService('019'));
	}


	public function createServiceRules__140(): NunoMaduro\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule
	{
		return new NunoMaduro\Larastan\Rules\UselessConstructs\NoUselessWithFunctionCallsRule;
	}


	public function createServiceRules__141(): NunoMaduro\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule
	{
		return new NunoMaduro\Larastan\Rules\UselessConstructs\NoUselessValueFunctionCallsRule;
	}


	public function createServiceRules__142(): NunoMaduro\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule
	{
		return new NunoMaduro\Larastan\Rules\DeferrableServiceProviderMissingProvidesRule;
	}


	public function createServiceRules__143(): NunoMaduro\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule
	{
		return new NunoMaduro\Larastan\Rules\ConsoleCommand\UndefinedArgumentOrOptionRule($this->getService('0477'));
	}


	public function createServiceRules__144(): PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__145(): PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule
	{
		return new PHPStan\Rules\Deprecations\AccessDeprecatedStaticPropertyRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__146(): PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedFunctionRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__147(): PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__148(): PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule
	{
		return new PHPStan\Rules\Deprecations\CallToDeprecatedStaticMethodRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__149(): PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\FetchingClassConstOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__15(): PHPStan\Rules\Classes\AllowedSubTypesRule
	{
		return new PHPStan\Rules\Classes\AllowedSubTypesRule;
	}


	public function createServiceRules__150(): PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule
	{
		return new PHPStan\Rules\Deprecations\FetchingDeprecatedConstRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__151(): PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\ImplementationOfDeprecatedInterfaceRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__152(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__153(): PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule
	{
		return new PHPStan\Rules\Deprecations\InheritanceOfDeprecatedInterfaceRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__154(): PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule
	{
		return new PHPStan\Rules\Deprecations\InstantiationOfDeprecatedClassRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__155(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClassMethodSignatureRule(
			$this->getService('0480'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__156(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInClosureSignatureRule(
			$this->getService('0480'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__157(): PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule
	{
		return new PHPStan\Rules\Deprecations\TypeHintDeprecatedInFunctionSignatureRule(
			$this->getService('0480'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__158(): PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedCastRule($this->getService('0482'));
	}


	public function createServiceRules__159(): PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule
	{
		return new PHPStan\Rules\Deprecations\UsageOfDeprecatedTraitRule(
			$this->getService('reflectionProvider'),
			$this->getService('0482')
		);
	}


	public function createServiceRules__16(): PHPStan\Rules\Classes\ClassAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__160(): PHPStan\Rules\PHPUnit\AssertSameBooleanExpectedRule
	{
		return new PHPStan\Rules\PHPUnit\AssertSameBooleanExpectedRule;
	}


	public function createServiceRules__161(): PHPStan\Rules\PHPUnit\AssertSameNullExpectedRule
	{
		return new PHPStan\Rules\PHPUnit\AssertSameNullExpectedRule;
	}


	public function createServiceRules__162(): PHPStan\Rules\PHPUnit\AssertSameWithCountRule
	{
		return new PHPStan\Rules\PHPUnit\AssertSameWithCountRule;
	}


	public function createServiceRules__163(): PHPStan\Rules\PHPUnit\MockMethodCallRule
	{
		return new PHPStan\Rules\PHPUnit\MockMethodCallRule;
	}


	public function createServiceRules__164(): PHPStan\Rules\PHPUnit\ShouldCallParentMethodsRule
	{
		return new PHPStan\Rules\PHPUnit\ShouldCallParentMethodsRule;
	}


	public function createServiceRules__17(): PHPStan\Rules\Classes\ClassConstantAttributesRule
	{
		return new PHPStan\Rules\Classes\ClassConstantAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__18(): PHPStan\Rules\Classes\ClassConstantRule
	{
		return new PHPStan\Rules\Classes\ClassConstantRule(
			$this->getService('reflectionProvider'),
			$this->getService('0139'),
			$this->getService('0104'),
			$this->getService('019')
		);
	}


	public function createServiceRules__19(): PHPStan\Rules\Classes\DuplicateDeclarationRule
	{
		return new PHPStan\Rules\Classes\DuplicateDeclarationRule;
	}


	public function createServiceRules__2(): PHPStan\Rules\Api\ApiInstantiationRule
	{
		return new PHPStan\Rules\Api\ApiInstantiationRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__20(): PHPStan\Rules\Classes\EnumSanityRule
	{
		return new PHPStan\Rules\Classes\EnumSanityRule;
	}


	public function createServiceRules__21(): PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInClassImplementsRule(
			$this->getService('0104'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__22(): PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInEnumImplementsRule(
			$this->getService('0104'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__23(): PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule
	{
		return new PHPStan\Rules\Classes\ExistingClassesInInterfaceExtendsRule(
			$this->getService('0104'),
			$this->getService('reflectionProvider')
		);
	}


	public function createServiceRules__24(): PHPStan\Rules\Classes\ExistingClassInTraitUseRule
	{
		return new PHPStan\Rules\Classes\ExistingClassInTraitUseRule($this->getService('0104'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__25(): PHPStan\Rules\Classes\InstantiationRule
	{
		return new PHPStan\Rules\Classes\InstantiationRule(
			$this->getService('reflectionProvider'),
			$this->getService('0115'),
			$this->getService('0104')
		);
	}


	public function createServiceRules__26(): PHPStan\Rules\Classes\InstantiationCallableRule
	{
		return new PHPStan\Rules\Classes\InstantiationCallableRule;
	}


	public function createServiceRules__27(): PHPStan\Rules\Classes\InvalidPromotedPropertiesRule
	{
		return new PHPStan\Rules\Classes\InvalidPromotedPropertiesRule($this->getService('019'));
	}


	public function createServiceRules__28(): PHPStan\Rules\Classes\LocalTypeAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeAliasesRule($this->getService('0105'));
	}


	public function createServiceRules__29(): PHPStan\Rules\Classes\LocalTypeTraitAliasesRule
	{
		return new PHPStan\Rules\Classes\LocalTypeTraitAliasesRule($this->getService('0105'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__3(): PHPStan\Rules\Api\ApiClassExtendsRule
	{
		return new PHPStan\Rules\Api\ApiClassExtendsRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__30(): PHPStan\Rules\Classes\NewStaticRule
	{
		return new PHPStan\Rules\Classes\NewStaticRule;
	}


	public function createServiceRules__31(): PHPStan\Rules\Classes\NonClassAttributeClassRule
	{
		return new PHPStan\Rules\Classes\NonClassAttributeClassRule;
	}


	public function createServiceRules__32(): PHPStan\Rules\Classes\TraitAttributeClassRule
	{
		return new PHPStan\Rules\Classes\TraitAttributeClassRule;
	}


	public function createServiceRules__33(): PHPStan\Rules\Constants\FinalConstantRule
	{
		return new PHPStan\Rules\Constants\FinalConstantRule($this->getService('019'));
	}


	public function createServiceRules__34(): PHPStan\Rules\EnumCases\EnumCaseAttributesRule
	{
		return new PHPStan\Rules\EnumCases\EnumCaseAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__35(): PHPStan\Rules\Exceptions\ThrowExpressionRule
	{
		return new PHPStan\Rules\Exceptions\ThrowExpressionRule($this->getService('019'));
	}


	public function createServiceRules__36(): PHPStan\Rules\Functions\ArrowFunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__37(): PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ArrowFunctionReturnNullsafeByRefRule($this->getService('0129'));
	}


	public function createServiceRules__38(): PHPStan\Rules\Functions\ClosureAttributesRule
	{
		return new PHPStan\Rules\Functions\ClosureAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__39(): PHPStan\Rules\Functions\DefineParametersRule
	{
		return new PHPStan\Rules\Functions\DefineParametersRule($this->getService('019'));
	}


	public function createServiceRules__4(): PHPStan\Rules\Api\ApiClassImplementsRule
	{
		return new PHPStan\Rules\Api\ApiClassImplementsRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__40(): PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInArrowFunctionTypehintsRule($this->getService('0116'));
	}


	public function createServiceRules__41(): PHPStan\Rules\Functions\CallToFunctionParametersRule
	{
		return new PHPStan\Rules\Functions\CallToFunctionParametersRule(
			$this->getService('reflectionProvider'),
			$this->getService('0115')
		);
	}


	public function createServiceRules__42(): PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInClosureTypehintsRule($this->getService('0116'));
	}


	public function createServiceRules__43(): PHPStan\Rules\Functions\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Functions\ExistingClassesInTypehintsRule($this->getService('0116'));
	}


	public function createServiceRules__44(): PHPStan\Rules\Functions\FunctionAttributesRule
	{
		return new PHPStan\Rules\Functions\FunctionAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__45(): PHPStan\Rules\Functions\InnerFunctionRule
	{
		return new PHPStan\Rules\Functions\InnerFunctionRule;
	}


	public function createServiceRules__46(): PHPStan\Rules\Functions\ParamAttributesRule
	{
		return new PHPStan\Rules\Functions\ParamAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__47(): PHPStan\Rules\Functions\PrintfParametersRule
	{
		return new PHPStan\Rules\Functions\PrintfParametersRule($this->getService('019'));
	}


	public function createServiceRules__48(): PHPStan\Rules\Functions\ReturnNullsafeByRefRule
	{
		return new PHPStan\Rules\Functions\ReturnNullsafeByRefRule($this->getService('0129'));
	}


	public function createServiceRules__49(): PHPStan\Rules\Keywords\ContinueBreakInLoopRule
	{
		return new PHPStan\Rules\Keywords\ContinueBreakInLoopRule;
	}


	public function createServiceRules__5(): PHPStan\Rules\Api\ApiInterfaceExtendsRule
	{
		return new PHPStan\Rules\Api\ApiInterfaceExtendsRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__50(): PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule
	{
		return new PHPStan\Rules\Methods\AbstractMethodInNonAbstractClassRule;
	}


	public function createServiceRules__51(): PHPStan\Rules\Methods\CallMethodsRule
	{
		return new PHPStan\Rules\Methods\CallMethodsRule($this->getService('0124'), $this->getService('0115'));
	}


	public function createServiceRules__52(): PHPStan\Rules\Methods\CallStaticMethodsRule
	{
		return new PHPStan\Rules\Methods\CallStaticMethodsRule($this->getService('0125'), $this->getService('0115'));
	}


	public function createServiceRules__53(): PHPStan\Rules\Methods\ConstructorReturnTypeRule
	{
		return new PHPStan\Rules\Methods\ConstructorReturnTypeRule;
	}


	public function createServiceRules__54(): PHPStan\Rules\Methods\ExistingClassesInTypehintsRule
	{
		return new PHPStan\Rules\Methods\ExistingClassesInTypehintsRule($this->getService('0116'));
	}


	public function createServiceRules__55(): PHPStan\Rules\Methods\FinalPrivateMethodRule
	{
		return new PHPStan\Rules\Methods\FinalPrivateMethodRule($this->getService('019'));
	}


	public function createServiceRules__56(): PHPStan\Rules\Methods\MethodCallableRule
	{
		return new PHPStan\Rules\Methods\MethodCallableRule($this->getService('0124'), $this->getService('019'));
	}


	public function createServiceRules__57(): PHPStan\Rules\Methods\MissingMethodImplementationRule
	{
		return new PHPStan\Rules\Methods\MissingMethodImplementationRule;
	}


	public function createServiceRules__58(): PHPStan\Rules\Methods\MethodAttributesRule
	{
		return new PHPStan\Rules\Methods\MethodAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__59(): PHPStan\Rules\Methods\StaticMethodCallableRule
	{
		return new PHPStan\Rules\Methods\StaticMethodCallableRule($this->getService('0125'), $this->getService('019'));
	}


	public function createServiceRules__6(): PHPStan\Rules\Api\ApiMethodCallRule
	{
		return new PHPStan\Rules\Api\ApiMethodCallRule($this->getService('0101'));
	}


	public function createServiceRules__60(): PHPStan\Rules\Operators\InvalidAssignVarRule
	{
		return new PHPStan\Rules\Operators\InvalidAssignVarRule($this->getService('0129'));
	}


	public function createServiceRules__61(): PHPStan\Rules\Properties\AccessPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessPropertiesInAssignRule($this->getService('0315'));
	}


	public function createServiceRules__62(): PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule
	{
		return new PHPStan\Rules\Properties\AccessStaticPropertiesInAssignRule($this->getService('0316'));
	}


	public function createServiceRules__63(): PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule
	{
		return new PHPStan\Rules\Properties\MissingReadOnlyPropertyAssignRule($this->getService('0328'));
	}


	public function createServiceRules__64(): PHPStan\Rules\Properties\PropertyAttributesRule
	{
		return new PHPStan\Rules\Properties\PropertyAttributesRule($this->getService('0102'));
	}


	public function createServiceRules__65(): PHPStan\Rules\Properties\ReadOnlyPropertyRule
	{
		return new PHPStan\Rules\Properties\ReadOnlyPropertyRule($this->getService('019'));
	}


	public function createServiceRules__66(): PHPStan\Rules\Variables\UnsetRule
	{
		return new PHPStan\Rules\Variables\UnsetRule;
	}


	public function createServiceRules__67(): PHPStan\Rules\Whitespace\FileWhitespaceRule
	{
		return new PHPStan\Rules\Whitespace\FileWhitespaceRule;
	}


	public function createServiceRules__68(): PHPStan\Rules\Classes\UnusedConstructorParametersRule
	{
		return new PHPStan\Rules\Classes\UnusedConstructorParametersRule($this->getService('0140'));
	}


	public function createServiceRules__69(): PHPStan\Rules\Constants\ConstantRule
	{
		return new PHPStan\Rules\Constants\ConstantRule;
	}


	public function createServiceRules__7(): PHPStan\Rules\Api\ApiStaticCallRule
	{
		return new PHPStan\Rules\Api\ApiStaticCallRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__70(): PHPStan\Rules\Functions\UnusedClosureUsesRule
	{
		return new PHPStan\Rules\Functions\UnusedClosureUsesRule($this->getService('0140'));
	}


	public function createServiceRules__71(): PHPStan\Rules\Variables\EmptyRule
	{
		return new PHPStan\Rules\Variables\EmptyRule($this->getService('0123'));
	}


	public function createServiceRules__72(): PHPStan\Rules\Variables\IssetRule
	{
		return new PHPStan\Rules\Variables\IssetRule($this->getService('0123'));
	}


	public function createServiceRules__73(): PHPStan\Rules\Variables\NullCoalesceRule
	{
		return new PHPStan\Rules\Variables\NullCoalesceRule($this->getService('0123'));
	}


	public function createServiceRules__74(): PHPStan\Rules\Cast\EchoRule
	{
		return new PHPStan\Rules\Cast\EchoRule($this->getService('0139'));
	}


	public function createServiceRules__75(): PHPStan\Rules\Cast\InvalidCastRule
	{
		return new PHPStan\Rules\Cast\InvalidCastRule($this->getService('reflectionProvider'), $this->getService('0139'));
	}


	public function createServiceRules__76(): PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule
	{
		return new PHPStan\Rules\Cast\InvalidPartOfEncapsedStringRule($this->getService('016'), $this->getService('0139'));
	}


	public function createServiceRules__77(): PHPStan\Rules\Cast\PrintRule
	{
		return new PHPStan\Rules\Cast\PrintRule($this->getService('0139'));
	}


	public function createServiceRules__78(): PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule
	{
		return new PHPStan\Rules\Classes\AccessPrivateConstantThroughStaticRule;
	}


	public function createServiceRules__79(): PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule
	{
		return new PHPStan\Rules\Comparison\UsageOfVoidMatchExpressionRule;
	}


	public function createServiceRules__8(): PHPStan\Rules\Api\ApiTraitUseRule
	{
		return new PHPStan\Rules\Api\ApiTraitUseRule($this->getService('0101'), $this->getService('reflectionProvider'));
	}


	public function createServiceRules__80(): PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Functions\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__81(): PHPStan\Rules\Generics\ClassAncestorsRule
	{
		return new PHPStan\Rules\Generics\ClassAncestorsRule($this->getService('0119'), $this->getService('0118'));
	}


	public function createServiceRules__82(): PHPStan\Rules\Generics\ClassTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\ClassTemplateTypeRule($this->getService('0121'));
	}


	public function createServiceRules__83(): PHPStan\Rules\Generics\EnumAncestorsRule
	{
		return new PHPStan\Rules\Generics\EnumAncestorsRule($this->getService('0119'), $this->getService('0118'));
	}


	public function createServiceRules__84(): PHPStan\Rules\Generics\EnumTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\EnumTemplateTypeRule;
	}


	public function createServiceRules__85(): PHPStan\Rules\Generics\FunctionTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\FunctionTemplateTypeRule($this->getService('0141'), $this->getService('0121'));
	}


	public function createServiceRules__86(): PHPStan\Rules\Generics\FunctionSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\FunctionSignatureVarianceRule($this->getService('0122'));
	}


	public function createServiceRules__87(): PHPStan\Rules\Generics\InterfaceAncestorsRule
	{
		return new PHPStan\Rules\Generics\InterfaceAncestorsRule($this->getService('0119'), $this->getService('0118'));
	}


	public function createServiceRules__88(): PHPStan\Rules\Generics\InterfaceTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\InterfaceTemplateTypeRule($this->getService('0121'));
	}


	public function createServiceRules__89(): PHPStan\Rules\Generics\MethodTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\MethodTemplateTypeRule($this->getService('0141'), $this->getService('0121'));
	}


	public function createServiceRules__9(): PHPStan\Rules\Api\GetTemplateTypeRule
	{
		return new PHPStan\Rules\Api\GetTemplateTypeRule($this->getService('reflectionProvider'));
	}


	public function createServiceRules__90(): PHPStan\Rules\Generics\MethodSignatureVarianceRule
	{
		return new PHPStan\Rules\Generics\MethodSignatureVarianceRule($this->getService('0122'));
	}


	public function createServiceRules__91(): PHPStan\Rules\Generics\TraitTemplateTypeRule
	{
		return new PHPStan\Rules\Generics\TraitTemplateTypeRule($this->getService('0141'), $this->getService('0121'));
	}


	public function createServiceRules__92(): PHPStan\Rules\Generics\UsedTraitsRule
	{
		return new PHPStan\Rules\Generics\UsedTraitsRule($this->getService('0141'), $this->getService('0119'));
	}


	public function createServiceRules__93(): PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule
	{
		return new PHPStan\Rules\Methods\CallPrivateMethodThroughStaticRule;
	}


	public function createServiceRules__94(): PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule
	{
		return new PHPStan\Rules\Methods\IncompatibleDefaultParameterTypeRule;
	}


	public function createServiceRules__95(): PHPStan\Rules\Operators\InvalidBinaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidBinaryOperationRule($this->getService('016'), $this->getService('0139'));
	}


	public function createServiceRules__96(): PHPStan\Rules\Operators\InvalidUnaryOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidUnaryOperationRule;
	}


	public function createServiceRules__97(): PHPStan\Rules\Operators\InvalidComparisonOperationRule
	{
		return new PHPStan\Rules\Operators\InvalidComparisonOperationRule($this->getService('0139'));
	}


	public function createServiceRules__98(): PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\FunctionConditionalReturnTypeRule($this->getService('0131'));
	}


	public function createServiceRules__99(): PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule
	{
		return new PHPStan\Rules\PhpDoc\MethodConditionalReturnTypeRule($this->getService('0131'));
	}


	public function createServiceSimpleRelativePathHelper(): PHPStan\File\RelativePathHelper
	{
		return new PHPStan\File\SimpleRelativePathHelper('/Users/rabol/code/web/packages/filament-logviewer');
	}


	public function createServiceStubPhpDocProvider(): PHPStan\PhpDoc\StubPhpDocProvider
	{
		return new PHPStan\PhpDoc\StubPhpDocProvider(
			$this->getService('defaultAnalysisParser'),
			$this->getService('0141'),
			$this->getService('036')
		);
	}


	public function createServiceTypeSpecifier(): PHPStan\Analyser\TypeSpecifier
	{
		return $this->getService('typeSpecifierFactory')->create();
	}


	public function createServiceTypeSpecifierFactory(): PHPStan\Analyser\TypeSpecifierFactory
	{
		return new PHPStan\Analyser\TypeSpecifierFactory($this->getService('059'));
	}


	public function initialize()
	{
	}
}
