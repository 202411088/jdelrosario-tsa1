<?php
namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class TaskController extends Controller
{
    public function welcome()
    {
        $model = new TaskModel();
        $data['tasks'] = $model->getTodayTasks();
        return view('welcome', $data);
    }

    public function index()
    {
        $model = new TaskModel();
        $data['tasks'] = $model->getAllOrdered();
        return view('task_list', $data);
    }

    public function profile()
    {
        $model = new UserModel();
        $data['user'] = $model->getDemoUser();
        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}