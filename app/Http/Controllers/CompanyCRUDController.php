<?php
namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use bcrypt;
use Illuminate\Support\Facades\Hash;

class CompanyCRUDController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

public function index()
{
$companies = Company::orderBy('id','desc')->paginate(20);
return view('companies.index', ['companies'=>$companies]);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('companies.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
/*$request->validate([
'name' => 'required',
'full_name' => 'required',
'email' => 'required',
'email_verified_at'=> 'required' ,
'password'=>'required',
'state'=>'required',
'bloked'=>'required',
'Points_Balance'=>'required',
'title'=>'required',
'phone'=>'required',
'type'=>'required',
'gender'=>'required',
'link_facebook '=>'required',
'link_instgram'=>'required',
'logo'=>'required'
]);*/

$company = new Company;
$company->name = $request->name;
$company->full_name = $request->full_name;
$company->email = $request->email;
$company->password = Hash::make($request->password);
$company->Points_Balance = $request->Points_Balance;
$company->title = $request->title;
$company->email_verified_at=' f';
$company->phone = $request->phone;
$company->type = $request->type;
$company->gender = $request->gender;
$company->link_facebook = $request->link_facebook;
$company->link_instgram = $request->link_instgram;
$company->logo = $request->logo;
//$company->address = $request->address;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $company['image']= $filename;
        }
        $company->save();
       
return redirect()->route('companies.index')
->with('success','Client has been created successfully.');

//return $company;
}
/**
* Display the specified resource.
*
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function show(Company $company)
{
return view('companies.show',compact('company'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Company $company)
{
   
return view('companies.edit',compact('company'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
/*$request->validate([
'name' => 'required',
'email' => 'required',
'address' => 'required',
]);*/
$company = Company::find($id);
$company->name = $request->input('name');
$company->full_name = $request->input('full_name');
$company->email = $request->input('email');
$company->password = $request->input('password');
$company->Points_Balance = $request->input('Points_Balance');
$company->title = $request->input('title');
$company->email_verified_at=' f';
$company->phone = $request->input('phone');
$company->type = $request->input('type');
$company->gender = $request->input('gender');
$company->link_facebook = $request->input('link_facebook');
$company->link_instgram = $request->input('link_instgram');
$company->logo = $request->input('logo');
$company->update();


//return $company;
return redirect()->back()
->with('success','Client Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Company $company)
{
$company->delete();
return redirect()->route('companies.index')
->with('success','Client has been deleted successfully');
}





}
