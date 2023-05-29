<?php
  
namespace App\Exports;
  
use App\Models\Payment;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;

 
class PaymentExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $from_date;
    protected $to_date;

 function __construct($from_date,$to_date) {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
 }
    public function collection()
    {
        $payment_view=Payment::with(['purchase'])->orderBy('id', 'DESC');
        $from ="";
        $to="";
       $from_date='';
        $to_date='';

        if(isset($this->from_date)){



             $from_date=$this->from_date;
            $from = date('Y-m-d',strtotime($this->from_date));
            $from = $from.' 00:00:00';
                $payment_view->where('paymnet_date','>=',$from);


        }
        if(isset($this->to_date) && $this->to_date!=""){

            $to_date=$this->to_date;
             $to = date('Y-m-d',strtotime($this->to_date));
             $to = $to.' 00:00:00';
               $payment_view->where('paymnet_date', '<=', $to);
               
         }
         if(isset($this->from_date) && isset($this->to_date)){                                                                  
         if(($this->from_date!="") && ($this->to_date!="")){


        
            $from_date=$this->from_date;
            $from = date('Y-m-d',strtotime($this->from_date));
            $from = $from.' 00:00:00';

            $to_date=$this->to_date;
             $to = date('Y-m-d',strtotime($this->to_date));
             $to = $to.' 00:00:00';
            
                $payment_view->where('paymnet_date', '>=', $from)->where('paymnet_date', '<=', $to);
               
                                                                                                             
         }
     }
        //return Payment::with(['purchase'])->orderBy('id', 'DESC')->get();
         return $payment_view->get();

    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Name", "Payment Mode","Coupon Code","Amount Paid","Payment Date","Payment Description","Is Confirmed"];
    }


    public function map($model): array
    {
        if($model->is_confirmed==1){
            $is_confirmed='ACTIVE';
        }
        else{
            $is_confirmed='INACTIVE';
        }
      
        $rows[] = [
            $model->purchase->customer->name,
            $model->pay_mode,
            $model->purchase->token_string,
            $model->amount,
            //Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $model->paymnet_date)->format('d:m:Y'),
        
			Carbon::parse( $model->paymnet_date)->format('F-d-Y h:i A'),
           // Date::dateTimeToExcel($model->paymnet_date),
            $model->payment_description,
            $is_confirmed
        ];

        return $rows;


       //  foreach($model->purchase->customer->name as $relation)
       //  { 

       //       dd( $relation);


       //         $rows[]= [
       //              $relation->token_string,
       //        ];
       //  }
       // return $rows;
    }



}
