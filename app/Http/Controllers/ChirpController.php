<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Response;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        // return response('Hello, World!');
        return Inertia::render('Chirps/Index', [
            //
            'chirps' => Chirp::with('user:id,name')->latest()->get(), 
            //เป็น Mode chirps ,with('user:id,name')หรือ where เอาข้อมูล latest() และ get หรือดึงขึ้นมา
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // การตรวจสอบเงื่อนไขจาก user กรองข้อมูล
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $request->user()->chirps()->create($validated);
 
        return redirect(route('chirps.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp): RedirectResponse
    {
        //้Gate ตรวจสอบสิทธิ์ในการเข้าถึงการแก้ไขอัพเดทข้อมูล
        Gate::authorize('update', $chirp);
 
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $chirp->update($validated);
 
        return redirect(route('chirps.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp): RedirectResponse
    {
        // การลบ
        Gate::authorize('delete', $chirp);
 
        $chirp->delete();
 
        return redirect(route('chirps.index'));
    }
}
