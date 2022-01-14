<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:50',
            'post.category' => 'required|string|max:50',
            'post.time' => 'required|string|max:50',
            'post.location' => 'required|string|max:50',
            'post.requirement' => 'required|string|max:200',
        ];
    }
}
