<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Modules\User\Entities\User;
use Image;

class CitizenController extends Controller
{
    
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = User::findOrFail($data['id']);
        $signature = 'signature-' . time() . '.png';

        if (@$data['draw_signature'] && !@$data['upload_signature']) {
            $dataUri = $data['draw_signature'];
            $encodedImage = explode(",", $dataUri)[1];
            $decodedImage = base64_decode($encodedImage);
            $path = public_path() . "/images/signature/" . $signature;
            $newSignature = Storage::put('public/upload/images/' . $signature, $decodedImage);
            $data['signature'] = $signature; 
        }

        if (@$data['upload_signature']) {
            $path = base_path() . '/storage/public/upload/images';
            @$data['upload_signature']->move(public_path('storage/upload/images'), $signature);
            $data['signature'] = $signature; 
        }

        if (@$data['photo_upload']) {
            $photo = 'photo-' . time() . '.png';
            $path = base_path() . '/storage/public/upload/images';
            @$data['photo_upload']->move(public_path('storage/upload/images'), $photo);
            $data['photo'] = $photo; 
        }

        if (@$data['valid_id_upload']) {
            $validId = 'valid_id-' . time() . '.png';
            $path = base_path() . '/storage/public/upload/images';
            @$data['valid_id_upload']->move(public_path('storage/upload/images'), $validId);
            $data['valid_id'] = $validId;
        }

        $user->update($data);
        return redirect()->back()
            ->with('success', 'User updated successfully');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
		return view('citizen.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        if (auth()->id() != $user->id) {
            abort(404);
        }
		return view('citizen.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
