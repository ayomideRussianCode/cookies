<?php

//the only way to delete a cookie is to set the expiration date to a past  date by subtracting from the past time function


setcookie("username", "", time()- 3600, "/cookies", "localhost" );