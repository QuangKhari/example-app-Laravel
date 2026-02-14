<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::where('is_delete', 0)->get();
        return view('category.index', compact('categories'));
    }

    // 2.2 Form thêm mới
    public function create()
    {
        $parents = Category::whereNull('parent_id')
                    ->where('is_delete',0)
                    ->get();

        return view('category.create', compact('parents'));
    }

    // 2.3 Lưu
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        Category::create($request->all());
        return redirect()->route('category.index');
    }
    private function isChild($id, $parent_id)
{
    if (!$parent_id) return false;

    if ($id == $parent_id) return true;

    $parent = Category::find($parent_id);

    if (!$parent) return false;

    // Đệ quy lên tiếp
    return $this->isChild($id, $parent->parent_id);
}
public function destroy($id)
{
    $category = Category::findOrFail($id);

    $category->update([
        'is_delete' => 1
    ]);

    return redirect()->route('category.index')
                     ->with('success', 'Đã xóa danh mục');
}
}
