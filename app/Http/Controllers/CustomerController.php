<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Auth;
use Hash;
use App\Models\customer;
class CustomerController extends Controller
{
    
   public function __construct()
   {
       $this->middleware('auth:customers');
   }

    public function index(){
        return view('customer.index');
    }

    public function edit(){
        return view('customer.cusFirstPage');
    }
    

    public function CusEditProfile(){

        
            $ddata=["customer" => DB::table('branches')
            ->select('*')
            ->join('customers','branches.bid','customers.bid')
            ->where('customers.cid', Auth::id())
            ->get()
            ->first()];
            
          
        
        return view('customer.editProfile',compact(['ddata']));
    }

    public function editCusDetails(Request $cusdata){
        // $ddata=director::all();
         //dd($cusdata->all());
        // $bidphoto->Photo=$ownerdata->bid;
 
        //Validation
        $this->validate($cusdata,[
 
            'name'=>'required|min:4|max:50',
            'address'=>'required',
            'mobile'=>'required|digits:10',
            
       
         
     ]);
 
 
             $ID=$cusdata->cid;
             $name=$cusdata->name;
             $address=$cusdata->address;
             $mobile=$cusdata->mobile;
           
             customer::where('cid', $ID)->update(['nameWithIn' => $name]);
             customer::where('cid', $ID)->update(['address' => $address]);
             customer::where('cid', $ID)->update(['mobile' => $mobile]);
             
         
             $ddata=["customer" => DB::table('branches')
            ->select('*')
            ->join('customers','branches.bid','customers.bid')
            ->where('customers.cid', Auth::id())
            ->get()
            ->first()];

       
   // dd($ddata);
    //return view('customer.editProfile',compact(['ddata']));
    return Redirect::route('CusEditProfile',compact(['ddata']));
      }



      public function customerMyloan(){
        $ddata=["loan" => DB::table('customers')
        ->select('*')
        ->join('loan_details','loan_details.cid','customers.cid')
        ->where('customers.cid', Auth::id())
        ->get(),
      
    ];
   // dd($ddata);
        return view('customer.myloan',compact(['ddata']));
      
    }

    
    public function deleteCusAccount($id){

        // $bdata=userMsg::where($id);
         //DB::delete('delete from customers where cid = ?',[$id]);
         customer::where('cid', $id)->delete();
         //$bdata->delete();
         return Redirect::route('loginCus');
         
     }


}
