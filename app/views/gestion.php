<?php

if      (isset($_GET['home'])) 			    { 		include("../views/home.php");				}
elseif  (isset($_GET['msg'])) 			    { 		include("../views/home.php");		    	}
elseif  (isset($_GET['create'])) 			{ 		include("../public/create.php");		    		}
// elseif  (isset($_GET['fight'])) 			{ 		include("./fight.php");		        }
elseif  (isset($_GET['test1'])) 			{ 		include("../views/test1.php");				}
elseif  (isset($_GET['test2'])) 			{ 		include("../views/test2.php");				}
else 										{ 		include("../views/home.php");				}