<?php

namespace App;
use DB;
use Auth;

use Illuminate\Database\Eloquent\Model;

use File;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class Generic extends Model
{
	public static function insertValue($tableName, $data)
    {
        return DB::table($tableName)->insert($data); //insert value
    }

    public static function updateData($tableName, $column, $identifier, $data)
    {
        return DB::table($tableName)->where($column, $identifier)->update($data); //insert value
    }

    public static function getData($tableName)
    {
        return DB::table($tableName)->get(); //insert value
    }

    public static function deleteValue($tableName, $column, $identifier)
    {
        return DB::table($tableName)->where($column, $identifier)->delete(); //insert value
    }

    public static function getRow($tableName, $column, $identifier)
    {
    	return DB::table($tableName)->where($column, $identifier)->get();
    }

    public static function getMultRow($tableName, $column, $identifier, $column2, $identifier2)
    {
    	return DB::table($tableName)->where($column, $identifier)->where($column2, $identifier2)->get();
    }

    public static function getMult3Row($tableName, $column, $identifier, $column2, $identifier2, $column3, $identifier3)
    {
    	return DB::table($tableName)->where($column, $identifier)->where($column2, $identifier2)->where($column3, $identifier3)->get();
    }

    public static function getGroups($tableName, $groupBy, $column, $identifier)
    {
    	return DB::table($tableName)->distinct()->where($column, $identifier)->get([$groupBy]);
    }
}