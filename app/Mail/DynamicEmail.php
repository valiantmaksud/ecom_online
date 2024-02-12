<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DynamicEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $subject;
    public $template_path;
    public $attachment;

    public function __construct($template_path, $subject, $data, $attachment = null)
    {
        $this->data             = $data;
        $this->subject          = $subject;
        $this->template_path    = $template_path;
        $this->attachment       = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
            ->view($this->template_path)
        //     ->attach($this->attachment, [
        //         'as' => 'order.pdf',
        //         'mime' => 'application/pdf',
        //    ])
            ->with('data', $this->data);
    }
}
