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

function addMainNavigationItem($itemUrl, $itemTitle, $itemClass = null) {
	global $mainNavigationItems;
	$mainNavigationItems[$itemTitle] = array();
	$mainNavigationItems[$itemTitle]["url"] = $itemUrl;
	$mainNavigationItems[$itemTitle]["class"] = $itemClass;
}

function setMainNavigationItemClass($itemTitle, $itemClass) {
	global $mainNavigationItems;
	if (isset($mainNavigationItems[$itemTitle])) {
		$mainNavigationItems[$itemTitle]["class"] = $itemClass;
	}
}

$title = "";

function setTitle($pageTitle) {
	global $title;
	$title = $pageTitle;
}

?>