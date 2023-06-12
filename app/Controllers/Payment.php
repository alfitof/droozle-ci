<?php

namespace App\Controllers;

class Payment extends BaseController
{

    public function index()
    {

        $data = [
            'title' => "Payment - Droozle.co"
        ];
        return view('payment_view', $data);
    }

    public function process($method)
    {
        switch ($method) {
            case 'bca':
                $this->process_bca();
                break;
            case 'bri':
                $this->process_bri();
                break;
            case 'bni':
                $this->process_bni();
                break;
            case 'mandiri':
                $this->process_mandiri();
                break;
            case 'gopay':
                $this->process_gopay();
                break;
            case 'ovo':
                $this->process_ovo();
                break;
            case 'shopeepay':
                $this->process_shopeepay();
                break;
            default:
                echo "Metode pembayaran tidak valid";
                break;
        }
    }

    private function process_bca()
    {
        // Proses pembayaran dengan BCA
        // ...
        echo "Pembayaran dengan BCA";
    }

    private function process_bri()
    {
        // Proses pembayaran dengan BRI
        // ...
        echo "Pembayaran dengan BRI";
    }

    private function process_bni()
    {
        // Proses pembayaran dengan BNI
        // ...
        echo "Pembayaran dengan BNI";
    }

    private function process_mandiri()
    {
        // Proses pembayaran dengan Mandiri
        // ...
        echo "Pembayaran dengan Mandiri";
    }

    private function process_gopay()
    {
        // Proses pembayaran dengan Gopay
        // ...
        echo "Pembayaran dengan Gopay";
    }

    private function process_ovo()
    {
        // Proses pembayaran dengan OVO
        // ...
        echo "Pembayaran dengan OVO";
    }

    private function process_shopeepay()
    {
        // Proses pembayaran dengan Shopeepay
        // ...
        echo "Pembayaran dengan Shopeepay";
    }

    public function success()
    {
        $data = [
            'title' => "Payment Success - Droozle.co"
        ];
        return view('payment_success', $data);
    }
}
