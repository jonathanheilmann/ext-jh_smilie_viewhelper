<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Add static files
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Javascript', 'Smilies by Javascript');


?>