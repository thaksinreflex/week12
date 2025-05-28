<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Class_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',function(){
   $student = Classroom::getStudent();
    return response()->json($student);
});
Route::get('/teacher',function(){
    $teacher = Classroom::getTeacher();
    return response()->json($teacher);
});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Route::get('/students', function() {
//     $students = Classroom::getStudents();
//     return response()->json($students);
// });

// Route::get('/teachers', function() {
//     $teachers = Classroom::getTeachers();
//     return response()->json($teachers);
// });

// Route::get('/students/{id}', function($id) {
//     $students = Classroom::getStudentById($id);
//     if (!$students) {
//         return response()->json(['message' => 'Student not found'], 404);
//     }
//     return response()->json($students);
// });

// Route::delete('/students/{id}', function($id) {
//     $deleted = Classroom::deleteStudentById($id);
//     if (!$deleted) {
//         return response()->json(['message' => 'Student not found'], 404);
//     }
//     return response()->json(['message' => 'Student deleted successfully']);
// });

// Route::post('/students', function(Request $request) {
//     $student = $request->validate([
//         'name' => 'required|string|max:255',
//         'age' => 'required|integer|min:1',
//     ]);

//     // Assuming you have a method to add a student
//     Classroom::addStudent($student);

//     return response()->json(['message' => 'Student added successfully'], 201);
// });

// Route::put('/students/{id}', function(Request $request, $id) {
//     $student = $request->validate([
//         'name' => 'required|string|max:255',
//         'age' => 'required|integer|min:1',
//     ]);

//     // Assuming you have a method to update a student
//     Classroom::updateStudent($id, $student);

//     return response()->json(['message' => 'Student updated successfully']);
// });

// // add teacher
// Route::post('/teachers', function(Request $request) {
//     $teacher = $request->validate([
//         'name' => 'required|string|max:255',
//         'subject' => 'required|string|max:255',
//     ]);

//     // Assuming you have a method to add a teacher
//     Classroom::addTeacher($teacher);

//     return response()->json(['message' => 'Teacher added successfully'], 201);
// });

// Route::get('/teachers/{id}',function($id){
//     $teacher = Classroom::getTeacherByid($id);
//     if (!$teacher) {
//         return response()->json(['message' => 'Student not found'], 404);
//     }
//     return response()->json($teacher);

// });

// Route::delete('/teachers/{id}', function($id) {
//     $deleted = Classroom::deleteTeacherById($id);
//     if (!$deleted) {
//         return response()->json(['message' => 'Teacher not found'], 404);
//     }
//     return response()->json(['message' => 'Teacher deleted successfully']);
// });

// Route::put('/teachers/{id}', function(Request $request, $id) {
//     $teacher = $request->validate([
//         'name' => 'required|string|max:255',
//         'subject' => 'required|string|max:255',
//     ]);

//     // Assuming you have a method to update a teacher
//     Classroom::updateTeacher($id, $teacher);

//     return response()->json(['message' => 'Teacher updated successfully']);
// });

// // Route::post('/login')
