<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class Info extends Controller
{

	public function userinsert(Request $request){
		 $userinfo = array(
         'name'        =>$request->input('name'),
         'phone'       => $request->input('phone'),
		 'email'       => $request->input('email'),
		 'address'     => $request->input('address'),
		 'description' => $request->input('description')
		 );
		DB::table('infos')->insert($userinfo);
		return redirect('allinfo');
	}
	public function getifo()
	{ 
		$users = DB::table('infos')->paginate(5);

        return view('allinfo', ['users' => $users]);

	}
	public function deleteinfo($id)
	{
	   DB::table('infos')->where('id',$id)->delete();
		return redirect('allinfo');

	} 
	public function edit($editid)
	{
	$editusers = DB::table('infos')->select('*')->where('id',$editid)->get();
    return view('updated',['editusers'=>$editusers]);
	}   
	public function updateuser(Request $request)
	{ 
	      $id = $request->input('id'); 
		  $userinfo = array(
         'name'        => $request->input('name'),
         'phone'       => $request->input('phone'),
		 'email'       => $request->input('email'),
		 'address'     => $request->input('address'),
		 'description' => $request->input('description')
		 );
		DB::table('infos')->where('id',$id)->update($userinfo);
		return redirect('allinfo');
	}
	public function test(Request $request)
	{
/*	   	echo $request->method();
	   	echo $request->url();*/
	   	// Via a request instance...
		$request->session()->put('name', 'nasim');
	 
	}
	public function sessionretrive(Request $request)
	{
		$data = $request->session()->all();
		var_dump($data);
	}
	public function sessiondestory(Request $request)
	{
		$request->session()->forget('key');
		echo "session has been deleted";
	}
}
