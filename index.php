<?php

include(dirname(__FILE__) . "/header.php");

setTitle("Hallo world");
addMainNavigationItem("#", "Item 1");

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

