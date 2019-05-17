<?php

namespace App\Http\Controllers;

use App\Material;
use App\Subject;
use App\Theme;
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
        $term = array('name' =>array('Audial','Visual'));
        $subject_id = Subject::where('isPsychological',1)->first()->id;
        $themes = Theme::where('subject_id', '!=', $subject_id)->get();
        return view('admin.materials.create')
            ->with('themes', $themes);
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
            'theme' => 'required',
            'name' => 'required'
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
        else{
            $extension->move('uploads/documents',$new_extension);
            $paths='/uploads/documents/'.$new_extension;
            $type = 'Document';
        }

        Material::create([
            'extension' => $paths,
            'title' => $type,
            'name' => $request->name,
            'theme_id' => $request->theme,
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
            'name' => 'required'
        ]);

        $material = Material::findOrFail($id);
        $material->title = $request->title;
        $material->name = $request->name;
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
