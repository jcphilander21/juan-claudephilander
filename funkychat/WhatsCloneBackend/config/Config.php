<?php
/**
 * Created by Abderrahim El imame.
 * Email : abderrahim.elimame@gmail.com
 * Date: 19/02/2016
 * Time: 23:18
 */
/*
 * All database connection variables
 */

ob_start();
session_start();
error_reporting(0);
return $_Config = array(
    'DB_SERVER' => 'localhost',// db server
    'DB_USER' => 'funkycha_chat',// db user
    'DB_PASSWORD' => '2xg64zzF',// db password (mention your db password here)
    'DB_NAME' => 'funkycha_chat',// database name
    'DB_TABLE_PREFIX' => 'wa_'//database prefix
);