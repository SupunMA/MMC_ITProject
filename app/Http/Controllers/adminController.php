<?php

namespace App\Http\Controllers;
use Redirect;
use PDF;
use App;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\branch;
use App\Models\user;
use App\Models\userMsg;
use App\Models\director;
use App\Models\client;

class adminController extends Controller
{
    
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(){
        return view('admin.index');
    }

    public function addBranch(){
        $bdata=branch::all();
        return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
    
    }

    public function addingBranch(){
        return view('admin.adminWebEdit.adding');
    }

    public function addClient(){
        $ddata=client::all();
        return view('admin.adminWebEdit.addClient')->with('clients',$ddata);
    }

    public function addingClient(Request $clientdata){
        // $ddata=director::all();
        //dd($ownerdata->all());
       // $bidphoto->Photo=$ownerdata->bid;

       //Validation
       $this->validate($clientdata,[

        'url'=>'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'photo'=>'required|mimes:jpeg,jpg,png|max:1000 ',
        
        
    ]);


       $clientID=$clientdata->clientID;
        if($clientdata->hasFile('photo')){
            $clientfilename=$clientdata->photo->getClientOriginalName();
            $clientdname=$clientdata->url;
            

            $clientdata->photo->storeAs('ClientsLogos',$clientfilename,'public');
            client::where('clientid', $clientID)->update(['Photo' => $clientfilename]);
            client::where('clientid', $clientID)->update(['url' => $clientdname]);
            
            
            
        
            return Redirect::route('adminAddClient');

        }
        
        
        //dd($ownerdata->image);
        //return redirect()->back();
        // return view('admin.adminWebEdit.addingOwner');
    
    }

    public function showClient($clientid){
        
        $dshow=client::where('clientid',$clientid)->first();
        $dshow->hide= 0;
        $dshow->save();
        //dd();
        return redirect()->back();


        
    }

    public function hideClient($clientid){
       
        $dhide=client::where('clientid', $clientid)->first();
        $dhide->hide= 1;
        $dhide->save();
        return redirect()->back();
        //dd();

        
    }




    public function addOwner(){
        $ddata=director::all();
        return view('admin.adminWebEdit.addOwner')->with('directors',$ddata);
    }



    //Uploading Images
    public function addingOwner(Request $ownerdata){
       // $ddata=director::all();
        //dd($ownerdata->all());
       // $bidphoto->Photo=$ownerdata->bid;

       //Validation
       $this->validate($ownerdata,[

        'dname'=>'required|max:20|min:4',
        'dposition'=>'required|max:20|min:4',
        'photo'=>'required | mimes:jpeg,jpg,png| max:1000 |',
        //'map'=>'required',
        'fb' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'in' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'twt' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
    ]);


       $directorID=$ownerdata->directorID;
        if($ownerdata->hasFile('photo')){
            $directorfilename=$ownerdata->photo->getClientOriginalName();
            $directordname=$ownerdata->dname;
            $directordposition=$ownerdata->dposition;
            $directorfb=$ownerdata->fb;
            $directorin=$ownerdata->in;
            $directortwt=$ownerdata->twt;

            $ownerdata->photo->storeAs('OwnerPhotos',$directorfilename,'public');
            director::where('did', $directorID)->update(['Photo' => $directorfilename]);
            director::where('did', $directorID)->update(['Name' => $directordname]);
            director::where('did', $directorID)->update(['post' => $directordposition]);
            director::where('did', $directorID)->update(['facebook' => $directorfb]);
            director::where('did', $directorID)->update(['in' => $directorin]);
            director::where('did', $directorID)->update(['twitter' => $directortwt]);
            
            
            
        
            return Redirect::route('adminAddOwner');

        }
        
        
        //dd($ownerdata->image);
        //return redirect()->back();
        // return view('admin.adminWebEdit.addingOwner');
    }

    public function addAdmin(){
       
       $ddata=["branch" => DB::table('branches')
            ->select('*')
            ->join('users','branches.bid','users.bid')
            ->where('users.role','0')
            ->get()];

       
       //dd($ddata);
        // $ddata=user::all();
        // return view('admin.adminAdd.addAdmin')->with('users',$ddata);
       return view('admin.adminAdd.addAdmin',compact(['ddata']));
    }

    public function adminDetails(){

        $ddata=DB::table('branches')
        ->select('*')
        ->join('users','branches.bid','users.bid')
        ->where('users.role','1')
        ->get();

        return view('admin.adminAdd.adminDetails')->with('users',$ddata);
    }

    public function managerDetails(){
        return view('admin.managerAdd.managerDetails');
    }

    public function addManager(){
        return view('admin.managerAdd.addManager');
    }

    public function customerDetails(){
        return view('admin.customerAdd.customerDetails');
    }

    public function addCustomer(){
        return view('admin.customerAdd.addCustomer');
    }

    public function calendar(){
        return view('admin.adminCalen.calendar');
    }

    public function addemp(){
        return view('admin.empAdd.addemp');
    }

    public function empDetails(){
        return view('admin.empAdd.empDetails');
    }

    public function uploadBranch(Request $data){
        
        $branch=new branch;

        $this->validate($data,[

            'Bname'=>'required|max:20|min:4',
            'Baddress'=>'required|max:20|min:4',
            'Tele'=>'required|digits:10',
            //'map'=>'required',
            'map' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/|required'
        ]);

        $branch->Bname=$data->Bname;
        $branch->Baddress=$data->Baddress;
        $branch->Phone=$data->Tele;
        $branch->GoogleURL=$data->map;
        $branch->save();

        $bdata=branch::all();
       
       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
       return Redirect::route('adminAddBranch')->with('branchDATA',$bdata);
    }


    public function showBranch($id){

        $bdata=branch::find($id);
        $bdata->hide= 0;
        $bdata->save();
        return redirect()->back();


        
    }

    public function showDirector($did){
        
        $dshow=director::where('did',$did)->first();
        $dshow->hide= 0;
        $dshow->save();
        //dd();
        return redirect()->back();


        
    }

    public function hideDirector($did){
       
        $dhide=director::where('did', $did)->first();
        $dhide->hide= 1;
        $dhide->save();
        return redirect()->back();
        //dd();

        
    }

    public function hideBranch($id){

        $bdata=branch::find($id);
        $bdata->hide= 1;
        $bdata->save();
        return redirect()->back();
    }

    public function deleteBranch($id){

        $bdata=branch::find($id);
        
        $bdata->delete();
        return redirect()->back();
    }

   
    public function editeBranch($id){

        $bdata=branch::find($id);
        
        //return Redirect::route('editeBranch')->with('branchDATA',$bdata);
        return view('admin.adminWebEdit.editBranch')->with('branchDATA',$bdata);
        //return back()->with('branchDATA',$bdata);
    }

    public function updateBranch(Request $getdata){

        $id=$getdata->bid;
        $Bname=$getdata->Bname;
        $Baddress=$getdata->Baddress;
        $Phone=$getdata->Tele;
        $GoogleURL=$getdata->map;

        $data=branch::find($id);
        $data->Bname=$Bname;
        $data->Baddress=$Baddress;
        $data->Phone=$Phone;
        $data->GoogleURL=$GoogleURL;
        $data->save();

        $bdata=branch::all();
        
        return Redirect::route('adminAddBranch')->with('branchDATA',$bdata);
        //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
        //return back()->with('branchDATA',$bdata);
    }
    function adminPDF()
    {
        $bdata=$this->get_branch_Data();
        return view('admin.adminWebEdit.BranchPDF')->with('branchDATA',$bdata);
    }

    function get_branch_Data()
    {
        $bdata=DB::table('branches')
        ->limit(10)
        ->get();

        return $bdata;

    }

    function convertBranchPDF(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convertToBranch_PDF());
        return $pdf->stream();
    }

    function convertToBranch_PDF(){
        $branchDATA=$this->get_branch_Data();
        $outPut='<center><div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h2 >Madhushanka microcredit(pvt)Ltd</h2>
            </div><!-- /.col -->
           
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container" >
      <div class="row counters">
        </div>
            
            <hr>

    <div class="container-fluid" >  
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card ">
                  <div class="card-header "><h4>ALL BRANCHES</h4></div>
                  <div class="card-body">
  
                      <table align="center" style="width:80%;border-spacing: 30px;" >
                      <thead >

                      <tr align="center" cellspacing="30%">
                      <th>ID</th>
                      <th>Name</th>
                      <th>ADDRESS</th>
                      <th>T-PHONE</th>
                      
                      </tr>
                      </thead><tbody class="text-center">';


                      
                      foreach($branchDATA as $bdata){
                        $outPut.='<tr align="center">
                        <td>'.$bdata->bid.'</td>
                        <td>'.$bdata->Bname.'</td>
                        <td>'.$bdata->Baddress.'</td>
                        <td>'.$bdata->Phone.'</td>
                       
                        </tr>';
                      }
                     
                      $outPut.='</tbody> </table></div>
                      </div>
                  </div>
              </div>
          </div></center>';
                      return $outPut;
 
    }






    public function composeAdmin(){
        
        $users=new user;
        $users=user::all();
       
       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
       return view('admin.message.composeAdmin')->with('users',$users);
    }


    public function AdminUploadMSG(Request $MSGdata){
        
        $addMsg=new userMsg;
        // validate
        $this->validate($MSGdata,[

            'to'=>'required',
            'subject'=>'required|max:150|min:5',
            'content'=>'required',
            
         
        ]);
//Save Data in Database(insert)
        $addMsg->UserID=$MSGdata->userID;
        $addMsg->sendSub=$MSGdata->subject;
        $addMsg->sendMSG=$MSGdata->content;
        $addMsg->ResID=$MSGdata->to;
        $addMsg->sendDate=date('Y-m-d H:i:s');
        $addMsg->save();


        
        $bdata=branch::all();//retrieve
       
       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
       return Redirect::route('sentAdmin')->with('branchDATA',$bdata);
    }


    public function inboxAdmin(){
        
//get Messages to inbox
        $ddata=["adminInbox" => DB::table('users')
        ->select('*')
        ->join('user_msgs','user_msgs.UserID','users.aid')//foreign key connected
        ->where('user_msgs.ResID', Auth::id())
        ->get()
        ,];

       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
      //dd($ddata);
       return view('admin.message.inboxAdmin',compact(['ddata']));//Value returned to inboxAdmin Table
    }


    public function sentAdmin(){
        
       
       

        $ddata=["adminSent" => DB::table('users')
        ->select('*')
        ->join('user_msgs','user_msgs.ResID','users.aid')
        ->where('user_msgs.UserID', Auth::id())
        ->get()
        ,];

       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
      //dd($ddata);
       return view('admin.message.sentAdmin',compact(['ddata']));
    }

    public function TrashAdmin(){
        
       
       

        $ddata=["adminTrash" => DB::table('users')
        ->select('*')
        ->join('user_msgs','user_msgs.ResID','users.aid')
        ->where('user_msgs.UserID', Auth::id())
        ->get()
        ,];

       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
      //dd($ddata);
       return view('admin.message.TrashAdmin',compact(['ddata']));
    }


        


    public function deleteInboxMSG($msgid){
        
        $msgTable=userMsg::where('msgID',$msgid)->first();
        $msgTable->delete= 1;
        $msgTable->save();
        //dd();
        return redirect()->back();
    }

    public function deleteSentMSG($msg){
        

       //$msgTable = DB::table('user_msgs')->where('msgID',$msg)->first();

        $msgTable=userMsg::where('msgID',$msg)->first();
        $msgTable->delete= 1;
        $msgTable->save();
        //dd();
        return redirect()->back();
    }

    public function AdminDeleteMSG($id){

       // $bdata=userMsg::where($id);
        DB::delete('delete from user_msgs where msgID = ?',[$id]);
        //$bdata->delete();
        return redirect()->back();
    }


    public function readAdmin($msgID){
        
       
       

        $ddata=["readAdmin" => DB::table('user_msgs')
        ->select('*')
        ->join('Users','Users.aid','=','user_msgs.UserID')
        ->where('user_msgs.msgID', $msgID)
        ->get()
        ->first()
        ,];

       //return view('admin.adminWebEdit.addBranch')->with('branchDATA',$bdata);
       //return back()->with('branchDATA',$bdata);
      //dd($ddata);
       return view('admin.message.readAdmin',compact(['ddata']));
    }

}

