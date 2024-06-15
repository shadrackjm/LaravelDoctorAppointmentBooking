<?php 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $appointmentData;

    /**
     * Create a new message instance.
     *
     * @param array $appointmentData
     * @return void
     */
    public function __construct($appointmentData)
    {
        $this->appointmentData = $appointmentData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.appointment_created')
                    ->with('appointmentData', $this->appointmentData);
    }
}
