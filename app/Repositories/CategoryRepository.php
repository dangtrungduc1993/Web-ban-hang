<?php

namespace App\Repositories;

use App\Models\Category;
use http\Env\Request;

class CategoryRepository extends BaseRepository
{
//    public $table = 'categorys';
    public function getTable()
    {
        return 'categories';
    }

    public function store($request)
    {
        $category = new Category();
        $category->name = $request->name;
        // $category->description = $request->name;
        // $category->parent_id = $request->parent_id;
        $category->save();

    }

    public function update($request,$id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        // $category->description = $request->name;
        // $category->parent_id = $request->parent_id;
        $category->save();
    }

}
