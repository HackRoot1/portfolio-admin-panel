<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillController extends Controller
{
    public function index(): View
    {
        $skills = Skill::orderBy('sort_order')->get();

        return view('admin.skills.index', compact('skills'));
    }

    public function create(): View
    {
        return view('admin.skills.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'icon' => 'nullable|file|mimes:png,jpg,jpeg,webp|max:2048',
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'icon_class' => 'nullable|string|max:255',
            'icon_color' => 'nullable|string|max:20',
            'level' => 'nullable|string|max:50',
            'sort_order' => 'nullable|integer',
            'status' => 'nullable|in:active,inactive',
        ]);

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('skills', 'public');
            $data['icon'] = $iconPath;
        }

        Skill::create($data);

        return redirect()->route('admin.skills.index')->with('success', 'Skill created successfully.');
    }

    public function show(int $id): View
    {
        $skill = Skill::findOrFail($id);

        return view('admin.skills.view', compact('skill'));
    }

    public function edit(int $id): View
    {
        $skill = Skill::findOrFail($id);

        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $skill = Skill::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:20',
            'level' => 'nullable|string|max:50',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active');

        $skill->update($data);

        return redirect()->route('admin.skills.index')->with('success', 'Skill updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        Skill::findOrFail($id)->delete();

        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted successfully.');
    }
}
