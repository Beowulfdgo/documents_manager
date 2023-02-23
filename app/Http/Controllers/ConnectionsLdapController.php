<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connectionsldaps;

class ConnectionsLdapController extends Controller
{
    public function index()
    {
        $connectionsLdap = Connectionsldaps::all();
        return view('layouts.connections-ldap.index', compact('connectionsLdap'));
    }

    public function create()
    {
        return view('layouts.connections-ldap.create');
    }

    public function store(Request $request)
    {    
        $data = $request->all(); 
        Connectionsldaps::create($data); 
        
         return redirect()->route('connections-ldap.index');
    }

    public function show($id)
    {
        $connectionLdap = Connectionsldaps::find($id);
        return view('layouts.connections-ldap.show', compact('connectionLdap'));
    }

    public function edit($id)
    {
        $connectionsLdap = Connectionsldaps::find($id);
        return view('layouts.connections-ldap.edit', compact('connectionsLdap'));
    }

    public function update(Request $request, $id)
    {    
        $data = $request->all(); 
        $connectionLdap = Connectionsldaps::find($id);
        //Connectionsldaps::update($data); 

       // $data = $request->all(); // Obtiene todos los datos del formulario
        $connectionLdap->update($data); // Actualiza la conexión LDAP existente con los datos del formulario


        /*$connectionLdap = Connectionsldaps::find($id);
        $connectionLdap->name = $request->name;
        $connectionLdap->server = $request->server;
        $connectionLdap->port = $request->port;
        $connectionLdap->base_dn = $request->base_dn;
        $connectionLdap->username = $request->username;
        $connectionLdap->password = $request->password;
        $connectionLdap->save();*/
        return redirect()->route('connections-ldap.index');
    }

    public function destroy($id)
    {
        $connectionLdap = Connectionsldaps::find($id);
        $connectionLdap->delete();
        return redirect()->route('connections-ldap.index');
    }
}
