<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use Session;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.materials.index')->with('materials', Material::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|file',
        ]);

        $paths = '';
        $type = '';

        $extension = $request->file;

        $new_extension = time().$extension->getClientOriginalName();

        if($extension->getClientOriginalExtension() == 'mp4') {
            $extension->move('uploads/videos',$new_extension);
            $paths='/uploads/videos/'.$new_extension;
            $type = 'Video';

        }
        else if($extension->getClientOriginalExtension() == 'mp3'){
            $extension->move('uploads/audios',$new_extension);
            $paths='/uploads/audios/'.$new_extension;
            $type = 'Audio';


        }

        Material::create([
            'extension' => $paths,
            'title' => $type,
]);
            Session::flash('success', 'Material created successfuly');









        return redirect()->route('materials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.materials.edit')->with('material', Material::findOrFail($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
        ]);

        $material = Material::findOrFail($id);
        $material->title = $request->title;
        $material->save();

        Session::flash('success', 'Material updated successfuly');

        return redirect()->route('materials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Material::destroy($id);

        Session::flash('success', 'Material deleted successfuly');

        return redirect()->route('materials.index');
    }
}
