<?php

namespace App\Http\Controllers;

use CinetPay\CinetPay;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    

     public function checkout(Request $request)
    {
        // if( Auth::check() && !Auth::user()->hasRole('student') ) {
        //     return redirect()->route('home');
        // }
        // $this->validate($request, [
        //     'courses.*' => 'required|integer'
        // ]);
        // if( !isset($request->courses) || empty($request->courses) ) {
        //     flash('Veuillez sélectionner au moins un cours.')->error();
        //     return redirect()->route('frontend.myaccount.show');
        // }

        // $courses = [];
        // $total_amount = 0;
        // for($i = 0; $i < count($request->courses); $i++) {
        //     $_course = Course::findOrFail($request->courses[$i]);
        //     $total_amount += $_course->price;
        //     array_push($courses, $_course);
        // }
        // 
         
        
        $apiKey = "2097650736582f4b83822059.88799022";
        $site_id = "721104";
        $id_transaction = CinetPay::generateTransId();
        $description_du_paiement = sprintf('Mon produit de ref %s', $id_transaction);
        $date_transaction = date("Y-m-d H:i:s");
        $montant_a_payer = $total_amount;
        $_custom = auth()->user()->id.'--'.collect($courses)->implode('id' ,',');
        $formName = "goCinetPay";
        $notify_url = route('frontend.payments.notify') ;// Lien de notification CallBack CinetPay (IPN Link)
        $return_url = route('frontend.payments.return'); // Lien de retour CallBack CinetPay
        $cancel_url = route('frontend.payments.cancel'); // Lien d'annulation CinetPay
        // Configuration du bouton
        $btnType = 5;//1-5xwxxw
        $btnSize = 'large';
        $cp = new CinetPay($site_id, $apiKey);
        $cp_info = (object) [
            'apiKey' => $apiKey,
            'site_id' => $site_id,
            'id_transaction' => $id_transaction,
            'description_du_paiement' => $description_du_paiement,
            'date_transaction' => $date_transaction,
            'montant_a_payer' => $montant_a_payer,
            'custom' => $_custom,
            'formName' => $formName,
            'btnType' => $btnType,
            'btnSize' => $btnSize,
            'notify_url' => $notify_url,
            'return_url' => $return_url,
            'cancel_url' => $cancel_url,
        ];

        return view('frontend.payments.checkout', compact('courses', 'cp', 'cp_info'));
    }

     public function return(Request $request)
    {
        return view('frontend.payments.return');
    }

    public function cancel()
    {
        return view('frontend.payments.cancel');
    }

    public function notify(Request $request) 
    {
    
        if( !empty($request->cpm_trans_id) ) 
        {
            $cp = new CinetPay(env('SITE_ID'), env('API_KEY'));
            $payments = Payment::pluck('trans_id');
    
            // Reprise exacte des bonnes données chez CinetPay
            $cp->setTransId($request->cpm_trans_id)->getPayStatus();
            if ( $cp->isValidPayment()) {
                $_payment = Payment::where('trans_id', $request->cpm_trans_id)->first();
                $custom = explode('--' , $cp->_cpm_custom);
                $courses = explode(',' , $custom[1]);
                if( empty($_payment) ) {
                    $_payment = Payment::create([
                        "site_id" => $cp->_cpm_site_id,
                        "signature" => $cp->_signature,
                        "amount" => $cp->_cpm_amount,
                        "trans_id" => $cp->_cpm_trans_id,
                        "custom" => $cp->_cpm_custom,
                        "currency" => $cp->_cpm_currency,
                        "payid" => $cp->_cpm_payid,
                        "payment_date" => $cp->_cpm_payment_date,
                        "payment_time" => $cp->_cpm_payment_time,
                        "error_message" => $cp->_cpm_error_message,
                        "payment_method" => $cp->_payment_method,
                        "phone_prefixe" => $cp->_cpm_phone_prefixe,
                        "cel_phone_num" => $cp->_cel_phone_num,
                        "ipn_ack" => $cp->_cpm_ipn_ack,
                        "created" => $cp->_created_at,
                        "updated" => $cp->_updated_at,
                        "result" => $cp->_cpm_result,
                        "trans_status" => $cp->_cpm_trans_status,
                        "designation" => $cp->_cpm_designation,
                        "buyer_name" => $cp->_buyer_name,
                        "user_id" => $custom[0]
                    ]);
                    $_payment->courses()->attach($courses);
                } else {
                    $_payment->update([
                        "site_id" => $cp->_cpm_site_id,
                        "signature" => $cp->_signature,
                        "amount" => $cp->_cpm_amount,
                        "trans_id" => $cp->_cpm_trans_id,
                        "custom" => $cp->_cpm_custom,
                        "currency" => $cp->_cpm_currency,
                        "payid" => $cp->_cpm_payid,
                        "payment_date" => $cp->_cpm_payment_date,
                        "payment_time" => $cp->_cpm_payment_time,
                        "error_message" => $cp->_cpm_error_message,
                        "payment_method" => $cp->_payment_method,
                        "phone_prefixe" => $cp->_cpm_phone_prefixe,
                        "cel_phone_num" => $cp->_cel_phone_num,
                        "ipn_ack" => $cp->_cpm_ipn_ack,
                        "created" => $cp->_created_at,
                        "updated" => $cp->_updated_at,
                        "result" => $cp->_cpm_result,
                        "trans_status" => $cp->_cpm_trans_status,
                        "designation" => $cp->_cpm_designation,
                        "buyer_name" => $cp->_buyer_name,
                        "user_id" => $custom[0]
                    ]);
                    $_payment->courses()->detach();
                    $_payment->courses()->attach($courses);
                }
            }
        }
    }



}
