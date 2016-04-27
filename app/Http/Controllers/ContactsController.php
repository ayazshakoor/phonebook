<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contacts;
use Request;
class ContactsController extends Controller
{
    public function index(){
    	$contacts = Contacts::all()->toArray();
    	$base_url = url('/');
    	return view('contacts.show',compact('contacts','base_url'));	
    }
    public function create($id=""){
    	$url = url('/create');
    	$contact = array();
    	if($id){
    		$contact = Contacts::find(intval($id));
    	}
    	return view('contacts.create',compact('contact','url'));
    }
    public function store(){
    	$data = Request::all();
    	if(intval($data['id'])){
    		Contacts::where('id',intval($data['id']))
    		->update($data);
    	}
    	else{
    	Contacts::create($data);
    	}
    	return redirect(url('/'));
    }
    public function delete($id){
    	if(intval($id)){
    		$contact = Contacts::find(intval($id));
    		$contact->delete();
    	}
    	return redirect(url('/'));
    }

}
