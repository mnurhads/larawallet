<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Token;
use App\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        // $user->transaction = $tran;
        // $bal = $user->point - $tran->withdrawal + $tran->deposit;
        return view('website.index', compact('user'));
    } 
    
    public function fund()
    {
        $user = auth()->user();
        return view('website.fundwallet', compact('user'));
    }
     
    public function createGst(Request $request)
    { 
        $gst = $request->input('gst');
        $user = auth()->user();
        
        $withdrawal = $gst * 400 ;
        $balance = $user->point - $withdrawal;
        if($withdrawal > $user->point){
            return (url('/#tab-3'));
        }
        else{
        for($i=1; $i <= $gst; $i++){
            $ourtoken = bin2hex(random_bytes(3));
            $ourtoken2 = bin2hex(random_bytes(2));
        
        DB::table('tokens')->insert([
            'access_token' => "5h".$ourtoken.$user->id.date("is").$ourtoken2,
            'is_used' => false,
            'user_id' => $user->id,
    ]);
        }
         DB::table('transactions')->insert([
        'user_id' => $user->id,
        'withdrawal' => $withdrawal,
        'amount' => $gst,
        'balance' => $balance,
    ]);
    
            $user->point = $balance;
            $user->save();
              return redirect( route('token.list'));
        }
       
    }

    public function createFst(Request $request)
    { 
        $fst = $request->input('fst');
        $user = auth()->user();
        
        $withdrawal = $fst * 800 ;
        $balance = $user->point - $withdrawal;
        if($withdrawal > $user->point){
            return (url('/#tab-3'));
        }
        else{
        for($i=1; $i <= $fst; $i++){
            $ourtoken = bin2hex(random_bytes(3));
            $ourtoken2 = bin2hex(random_bytes(2));
        
        DB::table('tokens')->insert([
            'access_token' => "1k".$ourtoken.$user->id.date("is").$ourtoken2,
            'is_used' => false,
            'user_id' => $user->id,
    ]);
        }
         DB::table('transactions')->insert([
        'user_id' => $user->id,
        'withdrawal' => $withdrawal,
        'amount' => $fst,
        'balance' => $balance,
    ]);
    
            $user->point = $balance;
            $user->save();
              return redirect( route('token.list'));
        }
       
    }

    public function viewToken()
    {

        $users = auth()->user();
        $tokens = Token::orderBy('id', 'ASC')->paginate(10);
    return view('website.tokenList', compact('users', 'tokens'));
    
    }
    public function confirm($ref){
        $curl = curl_init();
        if(!$ref){
          die('No reference supplied');
        }
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_65761f009e9bc95ca535a6913f6acf90274dc967",
            "Cache-Control: no-cache",
            ),
        ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
            echo "cURL Error #:" . $err;
            } else { 
                $result = json_decode($response, true);
                $deposit = $result['data']['amount'] / 100;
                $user = auth()->user();
                $bal = $user->point + $deposit;
                if($deposit >= 0)
                {
                DB::table('transactions')->insert([
                    'user_id' => $user->id,
                    'deposit' => $deposit,
                    'reference' => $ref,
                    'balance' => $bal,
                ]);
                     $user->point = $bal;
                     $user->save();
                    return redirect(route('home'));
                } else {
                    return 'nothing here';
                }  
            }
    }
}
