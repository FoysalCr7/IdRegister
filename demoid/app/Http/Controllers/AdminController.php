<?php

namespace App\Http\Controllers;

use App\Idcard;

use App\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function checklogin(Request $request)
    {


        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    public function successlogin()

    {
        $idcard = Idcard::where('approve','0')->get();
        return view('admin.dashboard', ['idcard' => $idcard]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin-login');
    }

    public function AddRegister()
    {
        return view('admin.add-register');
    }

    public function InsertRegister( Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'comapnyname' => 'required|max:255',
            'caddress' => 'required|max:255',
            'joindate' => 'required',
            'regsignature' => 'required| dimensions:min_width=100,min_height=100',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $register = new Register();

        if ($request->hasFile('regsignature')) {
            $regsign = $request->file('regsignature');
            $directory = "RegisterSign/";
            $name = "IMG_" . date("Ymd_his") . "." . $regsign->getClientOriginalExtension();
            $regsignURL = $directory . $name;
            $regsign->move($directory, $name);




            $register->name = $request->name;
            $register->comapnyname = $request->comapnyname;
            $register->caddress = $request->caddress;
            $register->joindate = $request->joindate;
            $register->regsignature = $regsignURL;
            $register->save();

            return redirect('/all-register')->with('message', 'Register Information Save Successfully');

        }

    }
    public  function AllRegister(){
        $register= Register::all();
        return view('admin.all-register',['register'=>$register]);
    }

    public  function DeleteRegister($id){
$register=Register::find($id);

        $register->delete();
        $photo = $register->regsignature;
        unlink($photo);

        return redirect('/all-register')->with('message', 'Register Delete Successfully');

    }
    public  function EditRegister($id){
        $register=Register::find($id);
        return view('admin.edit-register',['register'=>$register]);
    }
    public function UpdateRegister(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'comapnyname' => 'required|max:255',
            'caddress' => 'required|max:255',
            'joindate' => 'required',


        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $register=Register::find($request->id);

            $register->name = $request->name;
            $register->comapnyname = $request->comapnyname;
            $register->caddress = $request->caddress;
            $register->joindate = $request->joindate;

            $register->save();

            return redirect('/all-register')->with('message', 'Register Information Save Successfully');

        }

        public function Approve(Request  $request){
       $approve=Idcard::find($request->id);
            $approve->approve = $request->approve;

            $approve->save();

            return redirect('/dashboard')->with('message', 'Id Approve Successfully');
        }
public function ApprovedId(){
    $idcard=Idcard::where('approve','1')->get();
        return view('admin.approved-id',['idcard'=>$idcard]);
}

}
