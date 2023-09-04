<?php



/**
 * Auth Store Function
 * ----------------------------------------------------
 */
if(!function_exists('auth_store')){
    function auth_store(){
        $response = Http::post('http://127.0.0.1:8001/api/V2.0/store/login', [
            'store_auth_email'     => 'taraji@auth.com',
            'store_auth_password'  => 'auth_taraji',
        ]);
        return $response->json();
    }
}


/**
 * Subscriptions Store Function
 * ----------------------------------------------------
 */
if(!function_exists('subscriptions_store')){
    function subscriptions_store(){
        $token = auth_store()['data']['token']['access_token'] ?? '';
        $response = Http::withToken($token)->get('http://127.0.0.1:8001/api/V2.0/subscriptions');
        return $response->json();
    }
}