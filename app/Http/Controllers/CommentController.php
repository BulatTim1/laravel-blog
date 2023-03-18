<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required|min:20|max:300',
            'article_id' => 'required|numeric|exists:articles,id',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $validated = $validator->validated();
        $validated['user_id'] = Auth::user()->id;
        Comment::query()->create($validated);

        return redirect()->back();
    }
}
