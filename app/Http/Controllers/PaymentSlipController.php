<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentSlip;

class PaymentSlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*return $users = Users::select('id','name')->paginate(10);
        $data = PaymentSlip::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paymentSlip = new PaymentSlip;

        $request->validate([
            'cusId' ,
            'term' => 'required',
            'bank' => 'required',
            'paidAmount' => 'required|numeric',
            'slipImg' => 'required|image|max:2048'
        ]);

        $img = $request->file('slipImg');

        $new_img = rand(). '.' . $img->getClientOriginalExtension();
        $img->move(public_path('images'), $new_img);

        $paymentSlip-> CusID = $request->cusId;
        $paymentSlip-> Term  = $request->term;
        $paymentSlip-> Bank  = $request->bank;
        $paymentSlip-> PaidAmount = $request->paidAmount;
        $paymentSlip-> ScanCopyImg = $new_img;


        $paymentSlip->save();
        return redirect()->back();

        $data =PaymentSlip::all();
        $data = PaymentSlip::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('data',$data)
                ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //image show
        $data = PaymentSlip::findOrFail($id);
        return view('imageView', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
