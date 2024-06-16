@component('mail::message')
# Appointment Confirmation

Dear {{ $appointmentData['recipient_name'] }},

An appointment has been Cancelled with the following details:

### Appointment Details:
- **Date:** {{ $appointmentData['date'] }}
- **Time:** {{ $appointmentData['time'] }}
- **Location:** {{ $appointmentData['location'] }}

### Patient Details:
- **Name:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### Doctor Details:
- **Name:** {{ $appointmentData['doctor_name'] }}
- **Specialization:** {{ $appointmentData['doctor_specialization'] }}

### Appointment Cancelled by:
- **Name:** {{ $appointmentData['cancelled_by'] }}
@if ($appointmentData['cancelled_by'] == 1)
- **Role:** Doctor
@elseif($appointmentData['cancelled_by'] == 2)
- **Role:** Admin
@else
- **Role:** Patient
@endif


@if($appointmentData['role'] == 2)
## Admin Notification
You are receiving this email because an appointment has been scheduled in your system.
@endif

@if($appointmentData['role'] == 1)
## Doctor Notification
You have a cancelled appointment.
@endif

@if($appointmentData['role'] == 0)
## Patient Notification
Your appointment has been successfully cancelled. Still you can book another appointment.
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
