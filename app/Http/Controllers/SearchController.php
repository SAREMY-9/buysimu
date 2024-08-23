<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Models\Sellers; 

use App\Models\Bookings;

class SearchController extends Controller
{

      public function search(Request $request)
      {

         $verify=$request->validate([
            
          'idPp'=>'required|exists:bookings,clientIdPassport', 

         //  'search'=>'required|exists:admins,name',  


         ] ,  [

               'idPp.required'=>'This field is required',
               'idPp.exists'=>'This user does not exist in our system',    

         ]
      
      
      
      );

         
         //check if user exists
        
         $idPp=$verify;
         $user=Bookings::where('clientIdPassport',$idPp)->first();

         if($user)
         {

           // return view('userDetails');

            return view('userDetails',compact('user'))->with('success','This user is booked for the test');

         }

         else
      {
         
 
         return redirect()->route('search')->with('error','The Loan application does not exist'); 

           }        
      }    




      // new admin search




       public function userSearch(Request $request)


      {

         $verify=$request->validate([
            
          'idpassport'=>'required|exists:bookings,clientIdPassport', 

         //  'search'=>'required|exists:admins,name',  


         ] ,  [

               'idpassport.required'=>'This field is required',
               'idpassport.exists'=>'This user does not exist in our system',    

         ]
      
      
      
      );

         
         //check if user exists
        
         $idpassport=$verify;

         $user=Bookings::where('clientIdPassport',$idpassport)->first();

         if($user)
         {

           // return view('userDetails');

            return view('user_data',compact('user'))->with('success','This user is booked for the test');

         }

         else
      {
         
 
         return redirect()->route('admin/home')->with('error','The Loan application does not exist'); 

           }        
      }    



      


      

      // end of admin search


      public function pTest(Request $request)

      {
    
            $validateNo=$request-> validate([
    
            'candidateId' => 'required|exists|tests,candidateId',
    
          ]);
    
            $info=$validateNo;
    
            $val= Test::where('candidateId',$info)->first();
    
            if($val)
    
            return redirect()->route('admin');  
    
            else{
    
                return back()->with('error','The learner theory test doent exist');
            }
    
    
        //  return view('userDetails',['user'=>Test::findOrFail($user)]);
    
    
      }


      public function userResuilts(){

         return view('userresuilts');

      }



}


