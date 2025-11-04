<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Contracts\View\View;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $setting = Setting::findOrFail(1);
        return view('admin.settings.index', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        $data = $request->validated();
        $setting->update($data);
        return to_route('admin.settings.index')->with('success', __('keywords.settings_updated_successfully'));
    }
}
