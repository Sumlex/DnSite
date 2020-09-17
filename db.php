<?php

require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=dnevsky',
        'Sumlex', '9650' );

session_start();