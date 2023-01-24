<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index () {
        $posts = Student::all();
        return view('post.index', compact('posts'));
    }
    public function create () {
        return view('post.create');
    }
    public function store() {
        $data = request()->validate([
            'name' => 'string', 
            'surname' => 'string',
            'course' => 'number',
            'language' => 'string',
            'profession' => 'string',
        ]);
        Student::create($data);
        return  redirect()->route('post.idex');
    }

    public function show (Student $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Student $post) {
        return view('post.edit', compact('post'));
    }
    public function update (Student $post) {
        $data = request()->validate([
            "name" => 'string', 
            "surname" => 'string',
            "course" => 'number',  
            'language' => 'string',
            'profession' => 'string',          
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
    public function destroy (Student $post) {
        $post->delete();
        return redirect()->route('post.index');
    }
    
}


