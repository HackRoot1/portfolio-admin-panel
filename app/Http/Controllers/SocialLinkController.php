<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    //
    public function index()
    {
        $socialLinks = SocialLink::all();
        return view('admin.social_links.index', compact('socialLinks'));
    }

    public function create()
    {
        return view('admin.social_links.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new social link
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'platform_name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon_class' => 'nullable|string|max:255',
            'icon_color' => 'nullable|string|max:7', // Assuming hex color code
        ]);

        SocialLink::create($request->all());

        return redirect()->route('admin.social_links.index')->with('success', 'Social link created successfully.');
    }

    public function edit($id)
    {
        $socialLink = SocialLink::findOrFail($id);
        return view('admin.social_links.edit', compact('socialLink'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the social link
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'platform_name' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'icon_class' => 'nullable|string|max:255',
            'icon_color' => 'nullable|string|max:7', // Assuming hex color code
        ]);

        $socialLink = SocialLink::findOrFail($id);
        $socialLink->update($request->all());

        return redirect()->route('admin.social_links.index')->with('success', 'Social link updated successfully.');
    }

    public function destroy($id)
    {
        $socialLink = SocialLink::findOrFail($id);
        $socialLink->delete();

        return redirect()->route('admin.social_links.index')->with('success', 'Social link deleted successfully.');
    }
}
