<?php

require_once(dirname(__FILE__) . "/functions.php");

// Side navigation items
addSideNavigationItem("#", "Side Item 1");
addSideNavigationItem("#", "Side Item 2");

function makeSidebar() {
	global $sideNavigationItems;
?>

		<aside>
			<nav>
				<ul>
					<?php foreach ($sideNavigationItems as $navItemTitle => $navItemData) : ?>
					<li class="<?php echo $navItemData['class']; ?>"><a href="<?php echo $navItemData['url']; ?>" title="<?php echo $navItemTitle; ?>"><?php echo $navItemTitle; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</aside>

<?php
}
?>