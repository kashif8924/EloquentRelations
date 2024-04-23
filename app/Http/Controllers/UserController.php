<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function UserRoles()
    {
        //$roles = DB::table('role_user')->get();
        $user = User::find(1);

        //$role1 = Role::find(1);
        $role2 = Role::find(2);
        $user->roles()->attach($role2->id);
        return $user->roles()->get();
    }

    public function TeacherStudent()
    {
        $student = student::find(1);
        $teacher1 = Teacher::find(1);

       return  $student->teachers()->attach($teacher1->id);

        return $student->teachers()->get();
    }
}
