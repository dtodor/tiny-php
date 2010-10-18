<?php

include(dirname(__FILE__) . "/header.php");

// The title of the page
setTitle("Hallo world");

// Additional main navigation items
addMainNavigationItem("#", "Item 3");
addMainNavigationItem("#", "Item 4");
setMainNavigationItemClass("Item 1", "selected");

// Additional stylesheets & scripts
// enqueueStylesheet("css/test.css");
// enqueueScript("js/test.js");
// enqueueScript("js/test1.js", true);

makeHeader();

?>

    <div id="main">
			<p>Hallo world!</p>
    </div>

<?php

include(dirname(__FILE__) . "/footer.php");

makeFooter();

?>

