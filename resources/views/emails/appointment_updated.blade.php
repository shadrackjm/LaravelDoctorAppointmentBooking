@component('mail::message')
# Appointment Notification

Dear {{ $appointmentData['recipient_name'] }},

An appointment has been Updated with the following details:

### New Appointment Details:
- **Date:** {{ $appointmentData['date'] }}
- **Time:** {{ $appointmentData['time'] }}
- **Location:** {{ $appointmentData['location'] }}

### Old Appointment Details:
- **Date:** {{ $appointmentData['old_date'] }}
- **Time:** {{ $appointmentData['old_time'] }}
- **Location:** {{ $appointmentData['location'] }}

### Patient Details:
- **Name:** {{ $appointmentData['patient_name'] }}
- **Email:** {{ $appointmentData['patient_email'] }}

### Doctor Details:
- **Name:** {{ $appointmentData['doctor_name'] }}
- **Specialization:** {{ $appointmentData['doctor_specialization'] }}


@if($appointmentData['recipient_role'] == 'admin')
## Admin Notification
You are receiving this email because an appointment has been scheduled in your system.
@endif

@if($appointmentData['recipient_role'] == 'doctor')
## Doctor Notification
Appointment has been update with the above details.
@endif

@if($appointmentData['recipient_role'] == 'patient')
## Patient Notification
Your appointment has been successfully rescheduled. See the above details.
@endif

Thanks,<br>
{{ config('app.name') }}
@endcomponent
