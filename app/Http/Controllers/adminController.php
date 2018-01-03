<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

use App\Generic;

class adminController extends Controller
{
	public function uploadOptimumPage()
	{	
		//Images
		$optimumImages = Generic::getData('yco_optimum');
		//Groups
		$optimumGroups = Generic::getData('yco_optimum_groups');
		return view('admin/upload')->with('optimumGroups', $optimumGroups)
								   ->with('optimumImages', $optimumImages);
	}

	// YCO DESIGN
	public function uploadYCODesignPage()
	{	
		//Images
		$ycoDesignImages = Generic::getData('yco_design');
		//Groups
		$ycoDesignGroups = Generic::getData('yco_design_groups');
		return view('admin/uploadYCODesign')->with('ycoDesignGroups', $ycoDesignGroups)
								   			  ->with('ycoDesignImages', $ycoDesignImages);
	}

	public function addNewYDResGroup()
	{
		$inputForm = Request::only('ydResGroup');
		$data = array('groupName' => $inputForm['ydResGroup']);
        Generic::insertValue('yco_design_groups', $data);

        return back();
	}

	public function uploadYDRes()
	{
		$request = Request::all();
		$destinationPath    = public_path('img/ycodesign/residential');;
        $file               = Input::file('file');
        $filename           = $file->getClientOriginalName();
        Input::file('file')->move($destinationPath, $filename);

        $data = array('group' => 'ycodesign',
        			  'subgroup' => 'residential',
        			  'projectName' => $request['groupName'],
        			  'image' => $filename);
        Generic::insertValue('yco_design', $data);
        return 'File Uploaded';
	}

	public function uploadYDOfices()
	{
		$request = Request::all();
		$destinationPath    = public_path('img/ycodesign/offices');
        $file               = Input::file('file');
        $filename           = $file->getClientOriginalName();
        Input::file('file')->move($destinationPath, $filename);

        $data = array('group' => 'ycodesign',
        			  'subgroup' => 'offices',
        			  'projectName' => $request['groupName'],
        			  'image' => $filename);
       	Generic::insertValue('yco_design', $data);
        return 'File Uploaded';
	}

	public function uploadYDRetail()
	{
		$request = Request::all();
		$destinationPath    = public_path('img/ycodesign/retail');;
        $file               = Input::file('file');
        $filename           = $file->getClientOriginalName();
        Input::file('file')->move($destinationPath, $filename);

        $data = array('group' => 'ycodesign',
        			  'subgroup' => 'retail',
        			  'projectName' => $request['groupName'],
        			  'image' => $filename);
       	Generic::insertValue('yco_design', $data);
        return 'File Uploaded';
	}

	public function deleteYD($id)
	{
		$imageInfo = Generic::getRow('yco_design', 'id', $id)->first();
		$path = public_path('img/ycodesign'.'/'.$imageInfo->subgroup.'/'.$imageInfo->image);
        unlink($path);
		Generic::deleteValue('yco_design', 'id', $id);
		return back();
	}

	//END OF YCO DESIGN

	public function addNewOptResGroup()
	{
		$inputForm = Request::only('optResGroup');
		$data = array('groupName' => $inputForm['optResGroup']);
        Generic::insertValue('yco_optimum_groups', $data);

        return back();
	}

	public function getImages()
	{
		Generic::getMultRow($tableName, $column, $identifier, $column2, $identifier2);
	}

	public function getSubGroups()
	{
		$request = Request::all();
		$groups = Generic::getGroups($request['tableName'], $request['groupBy'], $request['column'], $request['identifier']);
		return $groups;
	}

	public function getInsideSub()
	{
		$request = Request::all();
		$images = Generic::getMult3Row($request['tableName'], $request['column'], $request['identifier'], $request['column2'], $request['identifier2'], $request['column3'], $request['identifier3']);
		return $images;
	}

	public function uploadOptimumRes()
	{
		$request = Request::all();
		$destinationPath    = public_path('img/optimum/residential');;
        $file               = Input::file('file');
        $filename           = $file->getClientOriginalName();
        Input::file('file')->move($destinationPath, $filename);

        $data = array('group' => 'optimum',
        			  'subgroup' => 'residential',
        			  'projectName' => $request['groupName'],
        			  'image' => $filename);
        Generic::insertValue('yco_optimum', $data);
        return 'File Uploaded';
	}

	public function uploadOptimumOfices()
	{
		$request = Request::all();
		$destinationPath    = public_path('img/optimum/offices');
        $file               = Input::file('file');
        $filename           = $file->getClientOriginalName();
        Input::file('file')->move($destinationPath, $filename);

        $data = array('group' => 'optimum',
        			  'subgroup' => 'offices',
        			  'projectName' => $request['groupName'],
        			  'image' => $filename);
       	Generic::insertValue('yco_optimum', $data);
        return 'File Uploaded';
	}

	public function uploadOptimumRetail()
	{
		$request = Request::all();
		$destinationPath    = public_path('img/optimum/retail');;
        $file               = Input::file('file');
        $filename           = $file->getClientOriginalName();
        Input::file('file')->move($destinationPath, $filename);

        $data = array('group' => 'optimum',
        			  'subgroup' => 'retail',
        			  'projectName' => $request['groupName'],
        			  'image' => $filename);
       	Generic::insertValue('yco_optimum', $data);
        return 'File Uploaded';
	}

	public function deleteOptimum($id)
	{
		$imageInfo = Generic::getRow('yco_optimum', 'id', $id)->first();
		$path = public_path('img/optimum'.'/'.$imageInfo->subgroup.'/'.$imageInfo->image);
        unlink($path);
		Generic::deleteValue('yco_optimum', 'id', $id);
		return back();
	}

	public function addInfo()
	{
		$inputForm = Request::all();
		
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();

		if(count($ycoInfo) === 0)
		{
			$data = array('location' => $inputForm['location'],
						  'number' => $inputForm['number'],
						  'email' => $inputForm['email']);
	        Generic::insertValue('yco_info', $data);
	    } else {
	    	$data = array('location' => $inputForm['location'],
						  'number' => $inputForm['number'],
						  'email' => $inputForm['email']);
	    	Generic::updateData('yco_info', 'id', 1, $data);
	    }
        return back();
	}

	public function viewInfo()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('admin/info')->with('ycoInfo', $ycoInfo);
	}

	public function home()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('home/home')->with('ycoInfo', $ycoInfo);
	}

	public function aboutUs()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('aboutUs/aboutUs')->with('ycoInfo', $ycoInfo);
	}

	public function optimumPage()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('projects/optimum')->with('ycoInfo', $ycoInfo);
	}

	public function ycoDesignPage()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('projects/ycodesign')->with('ycoInfo', $ycoInfo);
	}

	public function ycoBizPage()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('projects/ycobiz')->with('ycoInfo', $ycoInfo);
	}

	public function contactUs()
	{
		$ycoInfo = Generic::getRow('yco_info', 'id', 1)->first();
		return view('contactus/contactus')->with('ycoInfo', $ycoInfo);
	}
}