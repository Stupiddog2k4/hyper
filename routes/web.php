<?php

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Auth\Events\Login;
use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use League\CommonMark\Extension\DescriptionList\Node\Description;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::fallback(function(){
  return 'sai trang roi nhoc';
});

Route::get('/', function() {
  return redirect()->route('landing');
});
Route::view('/logout', 'signout')->name('signout');
Route::view('/login','login')
->name('loginview');

Route::get('/register', [UserController::class,'create'])
->name('users.create');

Route::view('/hyper','landing')
->name('landing');

//USERS
Route::resource('users',UserController::class)->only([
  'store',
]);
Route::post('/hyper/signin',[UserController::class,'signin'])->name('users.signin');
Route::get('/hyper/signin',[UserController::class,'showSignin'])->name('users.showSignin');
Route::post('/hyper/signout',[UserController::class,'signout'])->name('users.signout');
Route::get('/hyper/signup',[UserController::class,'create'])->name('users.showRegister');
Route::get('/hyper/signout',[UserController::class,'showSignout'])->name('users.showSignout');
Route::get('/hyper/profile',[UserController::class,'index'])->name('users.profile');

//TASKS

// Route::get('/tasks', function ()  {
//     return view('index', [
//         'tasks' => Task::latest()->paginate(10)
//     ]);
// })->name('tasks.index');

// Route::view('/tasks/create','create')
//   ->name('tasks.create');

// Route::get('/tasks/{task}/edit', function(Task $task) {
//   return view('edit', [
//     "task"=>$task
//   ]);
// })->name('tasks.edit');

// Route::get('/tasks/{task}', function(Task $task) {
//     return view('show', [
//       "task"=>$task
//     ]);
// })->name('tasks.show');

// Route::post('/tasks', function (TaskRequest $request){
//   $task= Task::create($request->validated());

//   return redirect()->route('tasks.show', ['task'=> $task->id])
//     ->with('success','Task created successfully');
// })->name('tasks.store');

// Route::put('/tasks/{task}', function (Task $task, TaskRequest $request){
//      $task->update($request->validated());

//   return redirect()->route('tasks.show', ['task'=> $task->id])
//     ->with('success','Task updated successfully');
// })->name('tasks.update');

// Route::delete('/task/{task}', function(Task $task) {
//   $task->delete();

//   return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
// })->name('tasks.destroy');

// Route::put('tasks/{task}/toggle-complete', function (Task $task) {
//   $task->toggleComplete();

//   return redirect()->back()->with('success', 'Task updated successfully!');
// })->name('tasks.toggle-complete');

// Route::get('/khon', function () {
//     return "khon";
// })->name('ngu');
// Route::get('/chao/{ten}', function ($ten) {
//     return 'Chao ' . $ten . '!';
// });
