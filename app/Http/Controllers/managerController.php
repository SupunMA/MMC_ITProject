<?php

namespace App\Http\Controllers;
use Auth;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\lands;
use App\Models\loanDetails;
class managerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first()];

   
   //dd($ddata);
    // $ddata=user::all();
    // return view('admin.adminAdd.addAdmin')->with('users',$ddata);
   return view('manager.index',compact(['ddata']));
      
    }


    public function ManageraddCustomer(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first()];
        return view('manager.customer.addcus',compact(['ddata']));
      
    }


    public function ManagerCustomerDetails(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first()];
        return view('manager.customer.cusDetails',compact(['ddata']));
      
    }

    public function ManagerAddEmployees(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first()];
        return view('manager.emp.addemp',compact(['ddata']));
      
    }

    public function ManagerEmployeeDetails(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first()];
        return view('manager.emp.empDetails',compact(['ddata']));
      
    }

    public function ManagerAddLoan(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first(),
    //Join 3 Tables
        "nic"=>DB::table('branches')
        ->select('customers.nic','customers.cid')
        ->join('customers','branches.bid','=','customers.bid')
        ->join('users','branches.bid','=','users.bid')
        ->where('users.aid',Auth::id())
        ->get()
    ];

        //dd($ddata);

        return view('manager.Loan.addloan',compact(['ddata']));
      
    }

    public function ManagerAddLoanDetails(){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first(),

        "loandetails"=>DB::table('branches')
        ->select('*')
        ->join('customers','customers.bid','=','branches.bid')
        ->join('users','branches.bid','=','users.bid')
        ->join('loan_Details','loan_Details.cid','=','customers.cid')
        
        ->where('users.aid',Auth::id())
        ->get(),

        "nic"=>DB::table('branches')
        ->select('customers.nic','customers.cid')
        ->join('customers','branches.bid','=','customers.bid')
        ->join('users','branches.bid','=','users.bid')
        ->where('users.aid',Auth::id())
        ->get(),

       
        
    
    
    ];
    //dd($ddata);
        return view('manager.Loan.loanDetails',compact(['ddata']));
      
    }
   

    

    
    public function uploadLoan(Request $loanData){
        $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first(),
    
    
        "loandetails"=>DB::table('branches')
        ->select('*')
        ->join('customers','customers.bid','=','branches.bid')
        ->join('users','branches.bid','=','users.bid')
        ->join('loan_Details','loan_Details.cid','=','customers.cid')
        
        ->where('users.aid',Auth::id())
        ->get()];


        $this->validate($loanData,[

            'loanDate'=>'required | before:tomorrow|',
            
        ]);
        $loan=new loanDetails;

        $loan->cid=$loanData->nicList;
        $loan->LoanAmount=$loanData->loan;
        $loan->IntRate=$loanData->intRate;
        $loan->lateRate=$loanData->lateFeeRate;
        $loan->loanDate=$loanData->loanDate;
        $loan->save();

        //return view('manager.Loan.loanDetails'
        return Redirect::route('ManagerAddLoanDetails',compact(['ddata']));
      
    }


    public function editLoan(Request $ownerdata){
        // $ddata=director::all();
         //dd($ownerdata->all());
        // $bidphoto->Photo=$ownerdata->bid;
 
        //Validation
        $this->validate($ownerdata,[
 
            'loanDate'=>'required | before:tomorrow|',
       
         
     ]);
 
 
        $LID=$ownerdata->LoanID;
         
            
            
             $loanCid=$ownerdata->nicList;
             $loanAmount=$ownerdata->loan;
             $IntRate=$ownerdata->intRate;
             $lateRate=$ownerdata->lateFeeRate;
             $loanDATE=$ownerdata->loanDate;
 
           
             loanDetails::where('LoanID', $LID)->update(['cid' => $loanCid]);
             loanDetails::where('LoanID', $LID)->update(['LoanAmount' => $loanAmount]);
             loanDetails::where('LoanID', $LID)->update(['IntRate' => $IntRate]);
             loanDetails::where('LoanID', $LID)->update(['lateRate' => $lateRate]);
             loanDetails::where('LoanID', $LID)->update(['loanDate' => $loanDATE]);
             
             
             
         
         
             $ddata=["branch" => DB::table('users')
        ->select('*')
        ->join('branches','branches.bid','users.bid')
        ->where('users.aid', Auth::id())
        ->get()
        ->first(),

        "loandetails"=>DB::table('branches')
        ->select('*')
        ->join('customers','customers.bid','=','branches.bid')
        ->join('users','branches.bid','=','users.bid')
        ->join('loan_Details','loan_Details.cid','=','customers.cid')
        
        ->where('users.aid',Auth::id())
        ->get(),

        "nic"=>DB::table('branches')
        ->select('customers.nic','customers.cid')
        ->join('customers','branches.bid','=','customers.bid')
        ->join('users','branches.bid','=','users.bid')
        ->where('users.aid',Auth::id())
        ->get(),

       
        
    
    
    ];
    //dd($ddata);
        return view('manager.Loan.loanDetails',compact(['ddata']));
      
 
         

        }

        public function deleteLoanDetails($id){
           
            DB::delete('delete from loan_details where LoanID = ?',[$id]);
            return redirect()->back();
        }


        public function ManagerAddLandDetails(){
            $ddata=["branch" => DB::table('users')
            ->select('*')
            ->join('branches','branches.bid','users.bid')
            ->where('users.aid', Auth::id())
            ->get()
            ->first(),
        
            "landdetails"=>DB::table('branches')
            ->select('*')
            ->join('customers','customers.bid','=','branches.bid')
            ->join('users','branches.bid','=','users.bid')
            ->join('lands','lands.UserID','=','customers.cid')
            
            ->where('users.aid',Auth::id())
            ->get()];
            return view('manager.Land.landDetails',compact(['ddata']));
          
        }





        public function ManagerAddLand(){
            $ddata=["branch" => DB::table('users')
            ->select('*')
            ->join('branches','branches.bid','users.bid')
            ->where('users.aid', Auth::id())
            ->get()
            ->first(),
        //Join 3 Tables
            "nic"=>DB::table('branches')
            ->select('customers.nic','customers.cid')
            ->join('customers','branches.bid','=','customers.bid')
            ->join('users','branches.bid','=','users.bid')
            ->where('users.aid',Auth::id())
            ->get()
        ];
    
            //dd($ddata);
    
            return view('manager.Land.addland',compact(['ddata']));
          
        }



        public function uploadLand(Request $landData){
            $ddata=["branch" => DB::table('users')
            ->select('*')
            ->join('branches','branches.bid','users.bid')
            ->where('users.aid', Auth::id())
            ->get()
            ->first(),
        
        
            "landdetails"=>DB::table('branches')
            ->select('*')
            ->join('customers','customers.bid','=','branches.bid')
            ->join('users','branches.bid','=','users.bid')
            ->join('lands','lands.UserID','=','customers.cid')
            
            ->where('users.aid',Auth::id())
            ->get()];
    
    
            $this->validate($landData,[
    
                'landDate'=>'required | before:tomorrow|',
                'LandMap'=>'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
                'LandImages'=>'required|mimes:jpeg,jpg,png|max:1000 ',
                
                
            ]);


            $LID=$landData->landID;
            if($landData->hasFile('LandImages')){
                $landPhotoName=$landData->LandImages->getClientOriginalName();
                $LandLocation=$landData->LandMap;
            
                $landData->LandImages->storeAs('LandImages',$landPhotoName,'public');
                
            }

            $land=new lands;
    
            $land->UserID=$landData->nicList;
            $land->MapLocation=$landData->LandMap;
            $land->LandImages=$landPhotoName;
            $land->valueOfLand=$landData->land;
            $land->LandDate=$landData->landDate;
            $land->perches=$landData->perches;
            $land->save();
    
            //return view('manager.Loan.loanDetails'
            return Redirect::route('ManagerAddLandDetails',compact(['ddata']));
          
        }

    
}
