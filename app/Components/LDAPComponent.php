<?php

namespace App\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class  LDAPComponent
{
    private $ldapServer;
    private $ldapPort;
    private $ldapUser;
    private $ldapPassword;
    private $ldapBaseDn;

    public function __construct()
    {
        $this->ldapServer = Config::get('ldap.server');
        $this->ldapPort = Config::get('ldap.port');
        $this->ldapUser = Config::get('ldap.username');
        $this->ldapPassword = Config::get('ldap.password');
        $this->ldapBaseDn = Config::get('ldap.base_dn');
    }

    public function authenticate($username, $password)
    {
        // Conectar al servidor LDAP
        $ldap = ldap_connect($this->ldapServer, $this->ldapPort) or die("Could not connect to".$this->ldapServer); 
        if ($ldap){ 
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);    
        // Autenticar al usuario en el servidor LDAP
        //dd($this->ldapUser);
        //dd($this->ldapPassword);
        $ldapBind = ldap_bind($ldap, $this->ldapUser, $this->ldapPassword) ;
        if (!$ldapBind) {
            return false;
        }
       
        // Buscar al usuario en el servidor LDAP
        $search = ldap_search($ldap, $this->ldapBaseDn, "(uid=$username)");
       // dd($search);
        $entries = ldap_get_entries($ldap, $search);
        if ($entries['count'] != 1) {
            return false;
        }

        // Autenticar al usuario con su nombre de usuario y contraseña
        $ldapBind = ldap_bind($ldap, $entries[0]['dn'], $password);
        if (!$ldapBind) {
            return false;
        }
       }

        return true;
    }
    public function close($ldap)
    {
        ldap_close($ldap);
    }
}