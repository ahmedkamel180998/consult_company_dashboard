<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $testimonials = Testimonial::paginate(config('pagination.default'));

        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request): RedirectResponse
    {
        $data = $request->validated();
        // image uploading
        // 1- get image
        $image = $request->image;
        // 2- change it's current name
        $new_image_name = time().'-'.$image->getClientOriginalName();
        // 3- move image to my project
        $image->storeAs('testimonials', $new_image_name, 'public');
        // 4- save new name to database record
        $data['image'] = $new_image_name;

        Testimonial::create($data);

        return to_route('admin.testimonials.index')->with('success', __('keywords.testimonial_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial): View
    {
        return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial): View
    {
        return view('admin.testimonials.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            // image uploading
            // 0- delete old image
            Storage::delete("public/blogs/$testimonial->image");
            // 1- get image
            $image = $request->image;
            // 2- change it's current name
            $new_image_name = time().'-'.$image->getClientOriginalName();
            // 3- move image to my project
            $image->storeAs('blogs', $new_image_name, 'public');
            // 4- save new name to database record
            $data['image'] = $new_image_name;
        }
        $testimonial->update($data);

        return to_route('admin.testimonials.index')->with('success', __('keywords.testimonial_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->delete();
        Storage::delete("public/testimonials/$testimonial->image");

        return to_route('admin.testimonials.index')->with('success', __('keywords.testimonial_deleted_successfully'));
    }
}
