<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        $posts = [
            ['title'=>'Primeiro Post','content'=>'Conteúdo do primeiro post'],
            ['title'=>'Segundo Post','content'=>'Conteúdo do segundo post'],
            ['title'=>'Terceiro Post','content'=>'Conteúdo do terceiro post'],
            ['title'=>'Quarto Post','content'=>'Conteúdo do quarto post'],
            ['title'=>'Quinto Post','content'=>'Conteúdo do quinto post']
        ];
        
        return view('blog.index', compact('posts'));
    }
}
