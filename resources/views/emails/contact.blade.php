@component('mail::message')
# Contact Us Request Submitted

Customer Name: {{ $input->firstname }} 
Customer Name: {{ $input->lastname }} 

Customer Contacts: <br>
Email: {{ $input->email }} 
Phone: {{ $input->phone }}

Customer message: <br>
{{ $input->message }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
