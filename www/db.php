<?php
    require 'sources/redbean/rb.php';
    R::setup( 'mysql:host=localhost;dbname=for7c','root', '' );
    #session_start();
    R::freeze(false);