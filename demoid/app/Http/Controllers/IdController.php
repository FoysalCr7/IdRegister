<?php

namespace App\Http\Controllers;

use App\Idcard;

use App\Register;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class IdController extends Controller
{
    public function index()
    {
        return view('front-end.idRegistration');
    }


    public function insertId(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'idnumber' => 'required|unique:idcards|max:255',
            'email' => 'required|unique:idcards|max:255',
            'phone' => 'required|max:13',
            'image' => 'required| dimensions:min_width=300,min_height=300',
            'signature' => 'required|dimensions:min_width=100,min_height=100'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $card = new Idcard();

        if ($request->hasFile('image') && $request->hasFile('signature')) {
            $image = $request->file('image');
            $directory = "images/";
            $name = "IMG_" . date("Ymd_his") . "." . $image->getClientOriginalExtension();
            $imageUrl = $directory . $name;
            $image->move($directory, $name);


            $signature = $request->file('signature');
            $directory = "Signature/";
            $names = "IMG_" . date("Ymd_his") . "." . $signature->getClientOriginalExtension();
            $signUrl = $directory . $names;
            $signature->move($directory, $names);

            $card->name = $request->name;
            $card->idnumber = $request->idnumber;
            $card->email = $request->email;
            $card->phone = $request->phone;
            $card->designation = $request->designation;
            $card->blood = $request->blood;
            $card->image = $imageUrl;
            $card->signature = $signUrl;

            $card->save();

            return redirect('/')->with('message', 'Id Information Save Successfully');

        }

    }

    public function DeleteCard($id)
    {
        $idcard = Idcard::find($id);
        $idcard->delete();
        $photo = $idcard->image;
        unlink($photo);

        return redirect('/dashboard')->with('message', 'Id Delete Successfully');
    }

    public function EditCard($id)
    {
        $idcard = Idcard::find($id);
        return view('admin.edit-id', ['idcard' => $idcard]);
    }

    public function UpdateCard(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'idnumber' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:13',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $card = Idcard::find($request->id);


        $card->name = $request->name;
        $card->idnumber = $request->idnumber;
        $card->email = $request->email;
        $card->phone = $request->phone;
        $card->designation = $request->designation;
        $card->blood = $request->blood;


        $card->save();

        return redirect('/dashboard')->with('message', 'Id Information Update Successfully');

    }

    public function ViewApprovedId(){
        $idcard=Idcard::where('approve','1')->get();
        $register=Register::where('id','1') ->get();




        return view('completeId',[
            'idcard'=>$idcard,
            'register'=>$register
            ]);
    }


}
