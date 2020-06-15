<?php namespace App\Controllers;


class CovidController extends BaseController
{


    
	public function dashboard()
	{
		return view('covidTraker');
    }
    

  public function prevention()
{
	return view('prevention');
}

public function symptom()
{
	return view('symptom');
}


public function india(){
	return view('india');
}


}