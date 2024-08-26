<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Test;
use App\Models\Bookings;
use App\Models\Admins;
use App\Models\User;


class TestController extends Controller
{


    public function userResults(){  

        return view('userresuilts'); 

    }

    public function uploadResults(Request $request){

        $validatedData=$request->validate([

            'candidateId'=>'required|exists:tests,candidateId',

        ]);

        $test= Test::where('candidateId', $validatedData['candidateId'])->first();

        if($test){

            $user=Bookings::where('id',$test['candidateId'])->first();

            if($user){

                if($test->theoryTest==='Passed' && $test->practicalTest==='Passed'){


                 $user->results='Passed';

                 $user->save();

                 return redirect()->route('resuilts')->with('success','Success!! results uploaded.');
    
                }

                else{

                    $user->results='Failed';

                    $user->save();

                    return redirect()->route('resuilts')->with('success','Success results uploadeded.');
                    

                }

                $user->save();

            }
        } 

        else{

            return redirect()->route('resuilts')->with('error','The user either didnt take the test or failed either');



        }

/**/
        //
        
    }


    public function resuilts(){

        return view('test.results');
    }



    public function application(){

        if(Auth::check()){

       return view('application');  

       }

       else{

        return view('welcome');

       }
        
    }



   
  public function applicationForm(Request $request)  
  {

     //dd($request);
     //  dd($request->all());

         $request->validate([
    

         'deviceModel'=>['required','string','max:65'],
         'serialNumber'=>['required','string','min:11','max:11'],
         'imeiNumber'=>['required','min:15','max:16'], 
         'cashPrice'=>['required','string','min:0'],
         'deposit'=>['required','string','min:0'],
         'clientIdPassport'=>['required','min:7'],
         'amountFinanced'=>['required','numeric','min:0'],
         'insurancePremium'=>['required'], 
         'weeklyPayment'=>['required'],
         'loanTenure'=>['required','string'],
         'totalAmountDue'=>['required'],


         'agreementDate' => [
            'required', 
            'date', 

             function ($attribute, $value, $fail) {
            if ($value !== now()->toDateString()) {
                $fail('The ' . $attribute . ' must be today.');
            }
          }
         ],

         'condition'=>['required','string'],  
         'shopName'=>['required','string'],
        // 'signature' => ['required','string'],

      ],[

         // Custom error messages (if any) can be added here


        'deviceModel.required' => 'Please provide the device model.',
        'serialNumber.required' => 'The serial number is required.',
        'serialNumber.min' => 'The serial number is invalid.',
        'imeiNumber.required' => 'The IMEI number is required.', 
        'imeiNumber.min' => 'The IMEI number is Invalid.',
        'imeiNumber.max' => 'The IMEI number is Invalid.', 
        'cashPrice.required' => 'The cash price is required.', 

        'amountFinanced.required' => 'This is required.', 
        'insurancePremium.required' => 'This is required.', 
        'weeklyPayment.required' => 'This is required.', 
        'loanTenure.required' => 'This is required.', 
        'totalAmountDue.required' => 'This is required.',  

        

         'condition.required' => 'The field can not be blank.',
          'shopName.required' => 'This field can not be blank.',
           


        'deposit.required' => 'The field can not be blank.',
        'clientIdPassport.required' => 'The client identification is required.',
        'clientIdPassport.unique' => 'The client ID has already been used.',
        
        'agreementDate.date' => 'The agreement date must be a valid date.',
        'agreementDate.custom' => 'The agreement date must be today.', // Custom validation message for 'today' rule

        // Add other custom messages as needed


                

      ]);

      


      $booked = Bookings::create([

        
        'deviceModel'=> $request->deviceModel,
        'serialNumber'=> $request->serialNumber,
        'imeiNumber'=> $request->imeiNumber,
        'cashPrice'=> $request->cashPrice,
        'deposit'=> $request->deposit,
        'clientIdPassport'=> $request->clientIdPassport,
        'amountFinanced'=> $request->amountFinanced,
        'insurancePremium'=> $request->insurancePremium,
        'weeklyPayment'=> $request->weeklyPayment,
        'loanTenure'=> $request->loanTenure,
        'totalAmountDue'=> $request->totalAmountDue,
        'agreementDate'=>$request->agreementDate,
        'condition'=> $request->condition,
        'shopName'=> $request->shopName,
    
       // 'signature' => $request->signature,


      ]);
    
   

      

      if($booked){

        return redirect()->route('dashboard')->with('success','Loan Application Succesfull, Your phone will be set up and ready to go');

      }

      else{

        return redirect()->route('welcome');

      }

  }



    public function theoryTest(Request $request)
    {

        $validateInfo= $request->validate([

            'candidateId'=>'required|exists:bookings,id',
            'officerId'=>'required|exists:admins,id',  
            'theoryTest'=>'required|in:Passed,Failed'                                    

        ]);

     //store the test in db

        Test::create($validateInfo);

    return redirect()->route('admin.home')->with('success','TEST SUCCESSFULLY ADMINISTERED. PROCEED TO PRACTICALS!');  


    }





    public function testVerify(){

          return view('test.verify');
     
    }





    public function practical(){
          
        return view('test.practical');

    }



          public function testPractical(Request $request)
       {

    
            // Validate the form data
            $validatedData = $request->validate([
              'candidateId' => 'required|exists:tests,candidateId',  
               'practicalTestAdmin' => 'required', 
            'pracTest' => 'required|in:Passed,Failed',
    ]);


    // Find the test record based on the candidateId
    $test = Test::where('candidateId', $validatedData['candidateId'])->first();
    

    // Update the practicalTest field
    if ($test) {
        $test->practicalTest = $validatedData['pracTest'];
        $test->practicalTestAdmin = $validatedData['practicalTestAdmin'];
        $test->save();

        //add a practical officer field.



        return redirect()->route('practical')->with('success', 'CONGRATULATIONS!!! THE DRIVERS TEST IS COMPLETED');
    } else {
        return redirect()->back()->with('error', 'Test record not found');
    }
}
   
    


     // Client verify 

    public function pTest(Request $request){

        $validateInfo=$request->validate([

            'userId' => 'required|exists:users,idPp',

        ]);

        $user=$validateInfo;

        if($user){

            return redirect()->route('pTest')-> with('success','THE USER EXISTS IN SYSTEM'); 

        }

        else {
            
            return "Hello the user is not registered on our system";
        }
    }




    public function testUpload(){

        $test=Test()->where('theoryTest','practicalTest');

        return view('prac',$test);
    }
}
