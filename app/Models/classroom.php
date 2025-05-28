<?php

namespace App\Models;

use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Support\Facades\DB;

class Classroom
{

    protected static $data = [
        'students' => [
            ['name' => 'John Doe', 'age' => 20, 'id' => 1],
            ['name' => 'Jane Smith', 'age' => 22, 'id' => 2],
            ['name' => 'Sam Brown', 'age' => 19, 'id' => 3],
        ],
        'teachers' => [
            ['name' => 'KSDsfsf', 'subject' => 'Math', 'id' => 1],
            ['name' => 'Ms. Johnson', 'subject' => 'Science', 'id' => 2],
            ['name' => 'Mrs. Brown', 'subject' => 'English', 'id' => 3]
        ]
    ];
    public static function getStudent(){
        return DB::table('student')->get();
    }
    public static function getTeacher(){
        return DB::table('teacher')->get();
    }
}

// class Classroom
// {
// protected static $data =[
// make data
// ];
//     public static function getStudents()
//     {
//         return self::$data['students'];
//     }

//     public static function getTeachers()
//     {
//         return self::$data['teachers'];

//     }

//     // get student by id
//     public static function getStudentById($id)
//     {
//         foreach (self::$data['students'] as $student) {
//             if ($student['id'] == $id) {
//                 return $student;
//             }
//         }
//         return null;
//     }

//  // delete student by id
//  public static function deleteStudentById($id)
//     {
//     foreach (self::$data['students'] as $key => $student) {
//         if ($student['id'] == $id) {
//             unset(self::$data['students'][$key]);
//             self::$data['students'] = array_values(self::$data['students']); // optional
//             return true;
//         }
//     };
//     return false;
// }

// // add student
// public static function addStudent($student)
//     {
//         $student['id'] = count(self::$data['students']) + 1; // simple ID generation
//         self::$data['students'][] = $student;
//         return $student;
//     }

//     // add teacher
//     public static function addTeacher($teacher)
//     {
//         $teacher['id'] = count(self::$data['teachers']) + 1; // simple ID generation
//         self::$data['teachers'][] = $teacher;
//         return $teacher;
//     }

//     // delete teacher by id
//     public static function deleteTeacherById($id)
//     {
//         foreach (self::$data['teachers'] as $key => $teacher) {
//             if ($teacher['id'] == $id) {
//                 unset(self::$data['teachers'][$key]);
//                 self::$data['teachers'] = array_values(self::$data['teachers']); // optional
//                 return true;
//             }
//         };
//         return false;
//     }
//     public static function getTeacherByid($id){
//         foreach (self::$data['teachers'] as $teacher) {
//             if ($teacher['id'] == $id) {
//                 return $teacher;
//             }
//         }
//         return null;
//     }

//    public static function updateStudent($id, $studentData)
// {
//     foreach (self::$data['students'] as $key => $student) {
//         if ($student['id'] == $id) {
//             self::$data['students'][$key] = array_merge($student, $studentData);
//             return true;
//         }
//     }

//     return false;
// }
//     public static function updateTeacher($id , $teacherData){
//         foreach(self::$data['teachers'] as $key => $teacher){
//             if($teacher['id']== $id){
//                 self::$data['teachers'][$key] = array_merge($teacher ,$teacherData);
//                 return true;
//             }
//         }
//         return false;
//     }

// }
