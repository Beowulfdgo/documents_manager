<?php



return [

    /*
    |--------------------------------------------------------------------------
    | Default Session server
    |--------------------------------------------------------------------------
    |
    | This option controls the default session "driver" that will be used on
    | requests. By default, we will use the lightweight native driver but
    | you may specify any of the other wonderful drivers provided here.
    |
    */

    'server' => 'ldap.forumsys.com',

    /*
    |--------------------------------------------------------------------------
    | port
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |
    */
    'port' => 389,


    /*
    |--------------------------------------------------------------------------
    | user
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'username' =>  env('LDAP_USERNAME', 'cn=read-only-admin,dc=example,dc=com'),
     /*
    |--------------------------------------------------------------------------
    | password
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'password' => env('LDAP_PASSWORD', 'password'),

    /*
    |--------------------------------------------------------------------------
    | base_dn
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it is stored. All encryption will be run
    | automatically by Laravel and you can use the Session like normal.
    |
    */

    'base_dn' => env('LDAP_BASE_DN', 'dc=example,dc=com'),


 
   

];
