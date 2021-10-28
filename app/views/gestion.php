<?php

if      (isset($_GET['start'])) 			{ 		include("../views/start.php");				}
elseif  (isset($_GET['home'])) 			    { 		include("../views/home.php");				}
elseif  (isset($_GET['fight'])) 			{ 		include("../views/fight.php");		        }
elseif  (isset($_GET['test1'])) 			{ 		include("../views/test1.php");				}
elseif  (isset($_GET['test2'])) 			{ 		include("../views/test2.php");				}
else 										{ 		include("../views/home.php");				}