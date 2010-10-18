<?php

// Stylesheets & scripts
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

// Main navigation
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

// Side navigation
$sideNavigationItems = array();

function addSideNavigationItem($itemUrl, $itemTitle, $itemClass = null) {
	global $sideNavigationItems;
	$sideNavigationItems[$itemTitle] = array();
	$sideNavigationItems[$itemTitle]["url"] = $itemUrl;
	$sideNavigationItems[$itemTitle]["class"] = $itemClass;
}

function setSideNavigationItemClass($itemTitle, $itemClass) {
	global $sideNavigationItems;
	if (isset($sideNavigationItems[$itemTitle])) {
		$sideNavigationItems[$itemTitle]["class"] = $itemClass;
	}
}

// Page title
$title = "";

function setTitle($pageTitle) {
	global $title;
	$title = $pageTitle;
}

?>