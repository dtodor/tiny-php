<?php

$enqueuedStylesheets = array();

function enqueueStylesheet($stylesheet) {
	global $enqueuedStylesheets;
	$enqueuedStylesheets[] = $stylesheet;
}

$enqueuedScripts = array(false=>array(), true=>array());

function enqueueScript($script, $isFooterScript = false) {
	global $enqueuedScripts;
	$enqueuedScripts[$isFooterScript][] = $script;
}

$mainNavigationItems = array();

function addMainNavigationItem($itemUrl, $itemTitle) {
	global $mainNavigationItems;
	$mainNavigationItems[$itemTitle] = $itemUrl;
}

$title = "";

function setTitle($pageTitle) {
	global $title;
	$title = $pageTitle;
}

?>