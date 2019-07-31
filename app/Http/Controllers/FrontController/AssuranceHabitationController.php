<?php

namespace App\Http\Controllers\FrontController;

use App\Models\Client;
use CinetPay\CinetPay;
use App\Models\Payment;
use Illuminate\Http\Request;
use Mediumart\Orange\SMS\SMS;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class AssuranceHabitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('client');  
        return view('frontend.assurances_habitations.index');
    }


    public function create()
    {

        return view('frontend.assurances_habitations.create');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        //$request->session()->forget('client'); 
        $client = $request->session()->get('client');

        return view('frontend.assurances_habitations.create-step1')
        ->with('name',$client['name'])
        ->with('email',$client['email'])
        ->with('tel',$client['tel']);

    }

    public function postCreateStep1(Request $request,SMS $sms){


        $validatedData = $request->validate([
            'email' => 'required',
            'tel' => 'required|max:16',
            'name' => 'required',
            'code' => 'nullable'
        ]);

        $client = new Client;
        $code = rand(111111,999999);
        $client->code = $code;
        $client->product_id = 1;

        if(empty($request->session()->get('client'))){
            //$client = new Client;
            $client->fill($validatedData);
            $request->session()->put('client', $client);

            $response = $sms->to(str_replace(' ', '', $request->tel))
            ->from('+2250000', 'Safe Assurance')
            ->message('Bonjour '.$request->name.'Safe Assurance Code de Verification : '.$code)
            ->send();
        }else{
            $client = $request->session()->get('client');
            $client->fill($validatedData);
            $request->session()->put('client', $client);

            $client->fill($validatedData);
            $request->session()->put('client', $client);

            $response = $sms->to(str_replace(' ', '', $request->tel))
            ->from('+2250000', 'Safe Assurance')
            ->message('Bonjour '.$request->name.'Safe Assurance Code de Verification : '.$code)
            ->send();
        }

        return redirect()->route('assuranceh.step2');

    }

    public function createStep2(Request $request)
    {

        $client = $request->session()->get('client');
         //dd($client);


        if(!empty(isset($client->email)) && !empty(isset($client->name)) && !empty(isset($client->tel))){

            return view('frontend.assurances_habitations.create-step2')->with('client', $client);

        }else{

            return redirect()->back();
        }
        
    }

    public function postCreateStep2(Request $request){

        $validatedData = $request->validate([
            'code' => 'required',
        ]); 

        $client = $request->session()->get('client');

        if($client->code != str_replace('-', '', $request->code)){

            Session::flash('message', "Le code d'activation est errone!!! Veuillez resaisir le bon code svp "); 

            return view('frontend.assurances_habitations.create-step2')->with('message');             
        }

        $client->code = null;
        if(empty($request->session()->get('client'))){
            $client = new Client;
            //$client->isVerified = 1;
            $client = $request->session()->get('client');
            $client->fill($validatedData);
            $request->session()->put('client', $client);   

        }

        return redirect()->route('assuranceh.step3');
    }


    public function createStep3(Request $request)
    {

        $client = $request->session()->get('client');

        if(!empty(isset($client->email)) && !empty(isset($client->name)) && !empty(isset($client->tel)) &&  empty(isset($client->code))){

           return view('frontend.assurances_habitations.create-step3')->with('client', $client)
           ->with('prenom',$client['prenom'])
           ->with('date_de_naissance',$client['date_de_naissance'])
           ->with('genre',$client['genre']);

       }else{

           return redirect()->back();
       }

   }



   public function postCreateStep3(Request $request,SMS $sms){

    $validatedData = $request->validate([
        'date_de_naissance' => 'required',
        'prenom' => 'required',
        'genre' => 'required|boolean',

    ]);

    if(empty($request->session()->get('client'))){
        $client = new Client;
        $client->fill($validatedData);
        $request->session()->put('client', $client);

    }else{

        $client = $request->session()->get('client');
        $client->fill($validatedData);
        $request->session()->put('client', $client);
        $client->fill($validatedData);
        $request->session()->put('client', $client);

    }
    return redirect()->route('assuranceh.step4');

}

public function createStep4(Request $request)
{

    $client = $request->session()->get('client');

    if(!empty(isset($client->email)) && !empty(isset($client->name)) && !empty(isset($client->tel)) &&  empty(isset($client->code)) && !empty(isset($client->prenom)) && !empty(isset($client->genre)) && !empty(isset($client->date_de_naissance))){
        return view('frontend.assurances_habitations.create-step4')->with('client', $client);
    }else{

        return redirect()->back();
    }

}

public function postCreateStep4(Request $request){

    $validatedData = $request->validate([
        'terms' => 'required|boolean',
    ]); 

    $checked = $request->has('terms') ? 1 : 0;
    $client = $request->session()->get('client');
    $client->terms=$checked;

    if(empty($request->session()->get('client'))){
        $client = $request->session()->get('client');
        $client->fill($validatedData);
        $request->session()->put('client', $client);   

    }else {

        $client = $request->session()->get('client');
        $client->fill($validatedData);
        $request->session()->put('client', $client);
        $client->fill($validatedData);
        $request->session()->put('client', $client);
        
    }

    return redirect()->route('assuranceh.step5');
}

public function createStep5(Request $request)
{
    $client = $request->session()->get('client');
    if(!empty(isset($client->email)) && !empty(isset($client->name)) && !empty(isset($client->tel)) &&  empty(isset($client->code)) && !empty(isset($client->prenom)) && !empty(isset($client->terms)) && !empty(isset($client->date_de_naissance)) && $client->terms == 1){

        return view('frontend.assurances_habitations.create-step5')->with('client', $client);
    }else{

        return redirect()->back();
    }

}


public function checkout(Request $request)
{
    $validatedData = $request->validate([
        'prix' => 'required|numeric|min:100',
    ]);

    $client = $request->session()->get('client');

    if($client->save()){
       $client_id = $client->id;
       $total_amount = str_replace(' ', '', $request->prix);


       $apiKey = "2097650736582f4b83822059.88799022";
       $site_id = "988239";
       $id_transaction = CinetPay::generateTransId();
       $description_du_paiement = sprintf('Mon produit de ref %s', $id_transaction);
       $date_transaction = date("Y-m-d H:i:s");
       $montant_a_payer = $total_amount;
       $nummero_phone = str_replace(' ', '', $client->tel);
       $_custom =$client_id;
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
            'cel_phone_num' =>$nummero_phone,
            'formName' => $formName,
            'btnType' => $btnType,
            'btnSize' => $btnSize,
            'notify_url' => $notify_url,
            'return_url' => $return_url,
            'cancel_url' => $cancel_url,
        ];

    }

    return view('frontend.payments.checkout', compact('cp', 'cp_info'));
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
            $custom = $cp->_cpm_custom;
                //$courses = explode(',' , $custom[1]);
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
                    "client_id" => $custom
                ]);

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
                    "client_id" => $custom
                ]);
            }
        }
    }
}


}
