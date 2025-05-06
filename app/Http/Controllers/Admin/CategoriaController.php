<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('admin.categoria.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $validator->validate();

            $category = Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'status' => true // Por defecto activo
            ]);

            return redirect()->route('admin.categoria.index')
                ->with('success', 'La categoría fue registrada correctamente.');

        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        }
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $validator->validate();

            $category = Category::findOrFail($id);
            $category->update([
                'name' => $request->name,
                'description' => $request->description
            ]);

            return redirect()->route('admin.categoria.index')
                ->with('success', 'La categoría fue actualizada correctamente.');

        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        }
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->update(['status' => false]);

        return redirect()->route('admin.categoria.index')
            ->with('success', 'La categoría fue eliminado correctamente.');
    }
}
