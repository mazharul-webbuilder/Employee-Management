<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employye extends Model
{
    use HasFactory;
    private static $employee;
    private static $employyes;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image     = $request->file('e_image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'employee-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl  = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function getNewEmployee($request)
    {
        self::$employyes                = new Employye();
        self::$employyes->first_name    = $request->first_name;
        self::$employyes->last_name     = $request->last_name;
        self::$employyes->e_bc          = $request->e_bc;
        self::$employyes->e_nid         = $request->e_nid;
        self::$employyes->e_designation = $request->e_designation;
        self::$employyes->e_salary      = $request->e_salary;
        self::$employyes->edu_name      = $request->edu_name;
        self::$employyes->edu_result    = $request->edu_result;
        self::$employyes->edu_year      = $request->edu_year;
        self::$employyes->address       = $request->address;
        self::$employyes->e_image       = self::getImageUrl($request);
        self::$employyes->save();
    }

    public static function updateEmployee($request, $id)
    {
        self::$employee = Employye:: find($id);
        if ($request->file('e_image'))
        {
            if (file_exists(self::$employee->e_image))
            {
                unlink(self::$employee->e_image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$employee->e_image;
        }
        self::$employee->first_name    = $request->first_name;
        self::$employee->last_name     = $request->last_name;
        self::$employee->e_bc          = $request->e_bc;
        self::$employee->e_nid         = $request->e_nid;
        self::$employee->e_designation = $request->e_designation;
        self::$employee->e_salary      = $request->e_salary;
        self::$employee->edu_name      = $request->edu_name;
        self::$employee->edu_result    = $request->edu_result;
        self::$employee->edu_year      = $request->edu_year;
        self::$employee->address       = $request->address;
        self::$employee->e_image       = self::$imageUrl;
        self::$employee->save();

    }

    public static function deleteEmployee($id)
    {
        self::$employee = Employye:: find($id);
        if (file_exists(self::$employee->e_image))
        {
            unlink(self::$employee->e_image);
        }
        self::$employee->delete();
    }
}
