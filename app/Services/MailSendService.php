<?php


namespace App\Services;

use App\Mail\DynamicEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;


class MailSendService
{

    /**
     * configuration    => get configure from database,
     * template_path    => target view path
     * subject          => mail title/subject
     * user_email       => targetted user email address
     * data             => set data as array via multiple variable
     */
    public function sendEmail($configuration, $template_path, $subject, $user_email, $data, $attach = null)
    {

        try {
            /**
             * SET DYNAMIC CONFIGURATION
             */
            $config = array(
                'driver'     =>     $configuration->driver,
                'host'       =>     $configuration->host,
                'port'       =>     $configuration->port,
                'username'   =>     $configuration->user_name,
                'password'   =>     $configuration->password,
                'encryption' =>     $configuration->encryption,
                'from'       =>     array('address' => $configuration->sender_email, 'name' => $configuration->sender_name, $attach),
            );

            /**
             * UPDATE CONFIG MAIL ENVIRONMENT
             */
            Config::set('mail', $config);


            /**
             * SET MAIL
             */
            Mail::to($user_email)->send(new DynamicEmail($template_path, $subject, $data, $attach));

            if (Mail::failures() != 0) {
                return "E-mail sent successfully!";
            } else {
                return "E-mail not sent!";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
