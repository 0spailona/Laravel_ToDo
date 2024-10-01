<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function showGroupList()
    {
        $groups = Group::all();
        $groupData = [];

        foreach ($groups as $group) {
            $groupData[] = ['title' => $group->title, 'id' => $group->id];
        }

        return view('groupList', ['pageName' => 'Group list', 'groupData' => $groupData]);
    }

    public function showCreateGroupForm()
    {
        return view('createGroupForm', ['pageName' => 'Create Group']);
    }

    public function createGroup(Request $request):RedirectResponse
    {
        $data = $request->request->all();
        $dataGroup = ['title' => $data['title'], 'start_from' => $data['start_from'], 'is_active' => $data['is_active']];
        $newGroup = Group::firstOrCreate($dataGroup);
        return redirect()->action([StudentController::class, 'showGroupList']);
    }


    public function showGroup(string $id)
    {
        $intId = (int)$id;
        $groupDataFromTable = DB::table('groups')->find($intId);
        $groupData = [];
        foreach ($groupDataFromTable as $key => $value) {
            $groupData[$key] = $value;
        }
        $students = Group::find($intId)->students;
        $studentsData = [];
        foreach ($students as $student) {
            $studentsData[] = ['id' => $student->id, 'name' => $student->name, 'surname' => $student->surname];
        }
        $groupData['students'] = $studentsData;
        return view('groupInfo', ['groupData' => $groupData]);
    }


    public function createStudent(Request $request, string $id):RedirectResponse
    {
        $data = $request->request->all();
        $intId = (int)$id;
        $dataStudent = ['name' => $data['name'], 'surname' => $data['surname'], 'group_id' => $intId];
        var_dump($dataStudent);
        $newStudent = Student::firstOrCreate($dataStudent);
        return redirect()->action([StudentController::class, 'showGroup'], ['id' => $id]);
    }

    public function showCreateStudentForm(string $id)
    {
        return view('createStudentForm', ['id' => $id]);
    }

    public function showStudent(string $groupId, string $studentId)
    {
        $intId = (int)$studentId;
        var_dump($intId);
        $studentDataFromTable = DB::table('students')->find($intId);
        $studentData = [];
        foreach ($studentDataFromTable as $key => $value) {
            $studentData[$key] = $value;
        }
        return view('studentInfo', ['studentData' => $studentData]);
    }
}
