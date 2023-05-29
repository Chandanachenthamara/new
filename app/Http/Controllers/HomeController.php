<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PaymentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Purchase;
use App\Models\Token;
use App\Models\Customer;
use App\Models\Payment;
use DB;

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
        $token_count = Purchase::groupBy('token')->select('token', DB::raw('count(*) as token_count'))->get();
        return view('home', compact(['token_count']));
    }

    public function customers()
    {
        $customers=Customer::orderBy('id', 'desc')->paginate(5);
        return view('customers', compact(['customers']));
    }

    // public function purchase()
    // {
    //     $purchase=Purchase::with(['tokens', 'customer'])->orderBy('id', 'desc')->paginate(5);
    //     return view('purchase', compact(['purchase']));
    // }


    public function purchase()
    {
        $purchase=Purchase::with(['tokens', 'customer'])->orderBy('id', 'desc');

        $table_search ="";

        if(isset($_GET['table_search'])){
            $table_search = $_GET['table_search'];
            $purchase->whereHas('customer', function($q){
               $q->where('name', 'like', '%' . $_GET['table_search'] . '%');
               $q->orWhere('phone_number', 'like', '%' . $_GET['table_search'] . '%');                  
            });
        }
        $purchase=$purchase->paginate(5);


        return view('purchase', compact(['purchase', 'table_search']));
    }



    public function customers_view($id='')
    {
        $customers_view =Customer::where('id', $id)->first();
        return view('customers_view', compact(['customers_view']));
    }

    public function purchase_view($id='')
    {
        $purchase_view=Purchase::with(['payments', 'customer', 'tokens'])->where('id', $id)->first();
        return view('purchase_view', compact(['purchase_view']));
    }

    public function payment_view($id='')
    {                                                                      
//\DB::enableQueryLog();
        $payment_view=Payment::with(['purchase'])->orderBy('id', 'DESC');
        $from ="";
        $to="";
    

       


$from_date='';
$to_date='';

        if(isset($_GET['from_search'])){



             $from_date=$_GET['from_search'];
            // dd($from_date);
            $from = date('Y-m-d',strtotime($_GET['from_search']));
            $from = $from.' 00:00:00';
           // $payment_view->where('payments', function($q)  use($from){
                $payment_view->where('paymnet_date','>=',$from);
               
           // });
           //dd(\DB::getQueryLog());



        }
        if(isset($_GET['to_search']) && $_GET['to_search']!=""){

            $to_date=$_GET['to_search'];
             $to = date('Y-m-d',strtotime($_GET['to_search']));
             $to = $to.' 00:00:00';
            // $payment_view->where('payments', function($q) use($to){
               $payment_view->where('paymnet_date', '<=', $to);
               
            // });
         }
         if(isset($_GET['to_search']) && isset($_GET['from_search'])){
         if(($_GET['to_search']!="") && ($_GET['from_search']!="")){


        
            $from_date=$_GET['from_search'];
            $from = date('Y-m-d',strtotime($_GET['from_search']));
            $from = $from.' 00:00:00';

            $to_date=$_GET['to_search'];
             $to = date('Y-m-d',strtotime($_GET['to_search']));
             $to = $to.' 00:00:00';
             
            // $payment_view->where('payments', function($q) use($from,$to){
                $payment_view->where('paymnet_date', '>=', $from)->where('paymnet_date', '<=', $to);
               
           // });                                                                                                  
         }
     }
        
        if($id){
            $payment_view=Payment::with(['purchase'])->where('fk_purchase_id', $id)->orderBy('id', 'DESC')->paginate(10);
        }else{
            $payment_view= $payment_view->orderBy('id', 'DESC')->paginate(10);
        }
    // $payment_view=$payment_view->paginate(5);
     //dd($payment_view);
 
        //dd($payment_view[0]->purchase->customer->name);
        return view('payment_view', compact(['payment_view','from_date','to_date']));
    }


    


    public function tokens($id='')
    {
        $tokens=Token::all();
        return view('tokens', compact(['tokens']));
    }


    public function update_confirm_status(Request $request)
    {
        Payment::where('id', $request->pid)->update(['is_confirmed'=> $request->is_confirmed]);
        // code...
    }
    public function export($from_date="", $to_date="") 
    {

        return Excel::download(new PaymentExport($from_date,$to_date), 'payment.xlsx');
    }



}
