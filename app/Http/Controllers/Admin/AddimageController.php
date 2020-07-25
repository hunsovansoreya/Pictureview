<?php

namespace App\Http\Controllers\Admin;

use DateTime;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;



class AddimageController extends Controller
{
    public function indexs(Request $request)
    {
        if(session('success_message')){
        Alert::success('Success!', session('success_message'));
        }
        return view('admin.addimage');
    }


    public function show($imageId) {

        $image =  Image::where('id', $imageId)->firstOrFail();
      return view('admin.editimage')->with(['image' => $image]);


    }

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
        'name' => ['required','string'],
        'image' => ['required', 'mimes:jpeg,jpg,png','max:10000'],

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $formInput = $request->except('image');
        $image = $request->image;

        if($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('img',$imageName);
            $formInput['image'] = $imageName;
        }

        Image::create($formInput);


        return redirect('/addimage')->withSuccessMessage('Successfully added');

    }

    public function editimage(Request $request, $id) {

        $rule = [
            'image' => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif', 'max:2048'],

            'name' => ['sometimes', 'min:5', 'string'],
        ];

         $validator = Validator::make($request->all(), $rule);
        if ($validator->fails()) {

            return back()
                ->withErrors($validator)
                ->withInput();

        }
        $name = $request->input('name');
        $updated_at = new DateTime;

        $images = Image::find($id);



        if ($request->hasFile('image')) {

            //let delete old image before storing new image
            $imagePath = Image::select('image')->where('id', $id)->first();

            $filePath = public_path('img') . "/" . $imagePath->image;
            if (file_exists($filePath)) {
                @unlink($filePath);
            }

            //storing the very new image
            $image = $request->file('image'); //get the new image from inputting form
            $updated_at = new DateTime;


            $imageName = md5($image->getClientOriginalName() . time()) . "." . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            DB::table('images')->where('id', $id)->update([
                'image' => $imageName,
                'updated_at' => $updated_at
            ]);

        }

        $images->name = $name ?: $images->name;
        $images->save();   //save into database

        return redirect('/listimage')->withSuccessMessage('Successfully updated');
}






    public  function deleteimage($id)
    {
        $images = Image::findOrFail($id);
        $images->delete();
        return response()->json(['status'=> 'Your data is Deleted']);
    }

}
