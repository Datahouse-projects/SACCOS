<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaccosNormalSystemUserController extends Controller
{
    /* USER LOAN FUNCTIONS */
   public function loan(){
       return view('user.loan.index');
   }
    /* END OF USER LOAN FUNCTIONS */
    /* USER PAYMENT AND CONTRIBUTION FUNCTIONS */
   public function contributionAndPayment(){
       return view('user.contribution_and_payment.index');
   }
    /* END OF  FUNCTIONS */
}
