<?php

namespace App\Services;



class GenerateInvoiceNumber
{



    public function getInvoiceNumber($type, $date = null)
    {
        $year = fdate($date ?? now(), 'Y');
        $invoice_number = time();

        return  $this->getPrefix($type) . date('y') . $invoice_number;
    }



    private function getPrefix($type)
    {
        $prefix = 'O-';
        return $prefix;
    }

}
