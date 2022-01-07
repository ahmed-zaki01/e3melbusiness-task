<?php

if (!function_exists('set_active')) {

    function set_active($route) {
        return Request::path() == $route ? 'active' : '';
    }

// end of set button active method
}
if (!function_exists('open_menu')) {

    function open_menu($route) {
        return Request::path() == $route ? 'menu-open' : '';
    }

// end of set button active method
}

if (!function_exists('divnum')) {

    function divnum($numerator, $denominator) {
        return $denominator == 0 ? 0 : ($numerator / $denominator);
    }

}

if (!function_exists('fcm')) {

    function fcm($token = [], $title = NULL, $body = NULL, $message = NULL, $type = 'info', $id = '', $expiry = 0, $notif_id = 0) {
        $SERVER_API_KEY = 'AAAAjHK5TEc:APA91bFOSuPMCEX456vArss0GG2PqE29v4FDQaDvrHAtiQAU9h3gwZuGnnpJAYX1XQbMtTQjvFjI2VinmQuifHzNIsQOF-UbCNMDdZsciO_9HI_7C9ADGZTdSCQsb8hp0_ZWTgE0ce7Z';
        $data = array(
            'registration_ids' => $token,
            'notification' => ['title' => $title, 'body' => $body],
            'data' => [
                'title' => $title,
                'body' => $body,
                'message' => $message,
                'click_action' => "FLUTTER_NOTIFICATION_CLICK",
                'sound' => "Default",
                'n_type' => $type,
                'n_data' => $id,
                'id' => $notif_id,
                'n_expiry' => date('Y-m-d H:i:s', strtotime('+' . ($expiry ? $expiry : 3) . ' Days'))
            ],
        );
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        return curl_exec($ch);
    }

}

if (!function_exists('getCCType')) {

    function getCCType($cardNumber) {
        // Remove non-digits from the number
        $cardNumber = preg_replace('/\D/', '', $cardNumber);

        // Validate the length
        $len = strlen($cardNumber);
        if ($len < 15 || $len > 16) {
            throw new Exception("Invalid credit card number. Length does not match");
        } else {
            switch ($cardNumber) {
                case(preg_match('/^5[1-5]/', $cardNumber) >= 1):
                    // Master Card
                    return 0;
                case(preg_match('/^4/', $cardNumber) >= 1):
                    // Visa Card
                    return 1;
                case(preg_match('/^3[47]/', $cardNumber) >= 1):
                    // AMEX Card
                    return 2;
                case(preg_match('/^3(?:0[0-5]|[68])/', $cardNumber) >= 1):
                    return 'Diners Club';
                case(preg_match('/^6(?:011|5)/', $cardNumber) >= 1):
                    // Discover
                    return 4;
                case(preg_match('/^(?:2131|1800|35\d{3})/', $cardNumber) >= 1):
                    // JCB
                    return 6;
                default:
                    return null;
                    break;
            }
        }
    }

}


