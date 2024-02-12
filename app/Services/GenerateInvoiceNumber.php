<?php

namespace App\Services;

use App\Models\InvoiceNo;


class GenerateInvoiceNumber
{



    
    public function setNextInvoiceNo($company_id=1, $type, $year)
    {
        $invoice_no = InvoiceNo::query()->firstOrCreate([

            'type'          => $type,
            'year'          => $year,
            'company_id'    => $company_id
        ]);

        $invoice_no->increment('next_id');

        return $invoice_no;
    }




    public function getInvoiceNumber($type, $date = null)
    {
        $year = fdate($date ?? now(), 'Y');


        $invoice_number = InvoiceNo::where('year', $year)->where('type', $type)->first();

        if (!$invoice_number) {

            $invoice_number = InvoiceNo::create([
                'year'          => $year,
                'type'          => $type,
                'next_id'       => $this->startFrom($type),
                'company_id'    => 1
            ]);
        }

        return  $this->getPrefix($type) . date('y') . $invoice_number->next_id;
    }








    private function startFrom($type)
    {
        $prefix = 1;

        return $prefix;
    }



    private function getPrefix($type)
    {
        $prefix = 'S-';
        return $prefix;
    }

}
