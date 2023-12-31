<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    
    public function rules()
    {
        return [
            'post.title' => 'required|stringmax:100',
            'post.body' => 'required|string¥max:4000',
        ];
    }
}
