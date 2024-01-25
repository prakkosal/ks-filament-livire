<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryControllerStoreRequest;
use App\Http\Requests\CategoryControllerUpdateRequest;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index(Request $request): CategoryCollection
    {
        $categories = Category::all();

        return new CategoryCollection($categories);
    }

    public function store(CategoryControllerStoreRequest $request): CategoryResource
    {
        $category = Category::create($request->validated());

        return new CategoryResource($category);
    }

    public function show(Request $request, Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }

    public function update(CategoryControllerUpdateRequest $request, Category $category): CategoryResource
    {
        $category->update($request->validated());

        return new CategoryResource($category);
    }

    public function destroy(Request $request, Category $category): Response
    {
        $category->delete();

        return response()->noContent();
    }
}
