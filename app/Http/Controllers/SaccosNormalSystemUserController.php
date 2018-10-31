<?php

namespace App\Http\Controllers;

use App\SaccosLoan;
use Illuminate\Http\Request;

class SaccosNormalSystemUserController extends Controller
{
    /* USER LOAN FUNCTIONS */
   public function loan()
   {
       return view('user.loan.index');

   }

   public function createLoan()
   {
       return view('user.loan.create');
   }
   public function storeLoan()
   {
       $this->validate($request,[
           'member_full_name'=>'required',
           'created_date'=>'required',
           'duration'=>'required',
           'issued_date'=>'required',
           'end_date'=>'required',
           'interest_per_day'=>'required',
           'total_interest'=>'required',
           'total_amount'=>'required',
           'payment_principal'=>'required',
           'payment_interest'=>'required',
           'loan_status'=>'required',
           'maximum_amount'=>'required',

       ]);

       $loan = new SaccosLoan;
       $loan->member_full_name = $request->member_full_name;
       $loan->created_date = $request->created_date;
       $loan->duration = $request->duration;
       $loan->issued_date = $request->issued_date;
       $loan->end_date = $request->end_date;
       $loan->interest_per_day = $request->interest_per_day;
       $loan->total_interest = $request->total_interest;
       $loan->total_amount = $request->total_amount;
       $loan->payment_principal = $request->payment_principal;
       $loan->payment_interest = $request->payment_interest;
       $loan->loan_status = $request->loan_status;
       $loan->maximum_amount = $request->maximum_amount;

       $loan->save();
       return redirect()->back()->with('success','Loan created successful');
   }

    /* END OF USER LOAN FUNCTIONS */
    /* USER PAYMENT AND CONTRIBUTION FUNCTIONS */
   public function contributionAndPayment(){
       return view('user.contribution_and_payment.index');
   }
    /* END OF  FUNCTIONS */

    /*USER SHARE FUNCTIONS*/

    Public function share()
    {
        return view('user.share.index');
    }


    /*END OF USER SHARE FUNCTIONS*/
}
