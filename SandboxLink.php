<?php
/**
 * Add a link to user's personal sandbox to personal tools menu.
 *
 * https://www.mediawiki.org/wiki/Extension:SandboxLink
 *
 * @file
 * @license MIT
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'SandboxLink',
	'author' => array(
		'Bartosz Dziewoński',
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:SandboxLink',
	'descriptionmsg' => 'sandboxlink-desc',
	'license-name' => 'MIT',
);

$wgMessagesDirs['SandboxLink'] = __DIR__ . '/i18n';
$wgAutoloadClasses['SandboxLinkHooks'] = __DIR__ . '/SandboxLinkHooks.php';

$wgHooks['SkinPreloadExistence'][] = 'SandboxLinkHooks::onSkinPreloadExistence';
$wgHooks['PersonalUrls'][] = 'SandboxLinkHooks::onPersonalUrls';

// Configuration settings

// Whether to disable sandbox link functionality for anonymous users.
$wgSandboxLinkDisableAnon = true;
