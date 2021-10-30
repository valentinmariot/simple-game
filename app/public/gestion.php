<?php

if      (isset($_GET['home'])) 			    { 		include("home.php");				}
elseif  (isset($_GET['msg'])) 			    { 		include("home.php");		    	}
elseif  (isset($_GET['create'])) 			{ 		include("create.php");		    	}
elseif  (isset($_GET['fight'])) 			{ 		include("fight.php");		        }
else 										{ 		include("home.php");				}