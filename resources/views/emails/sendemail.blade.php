@component('mail::message')
    # {{ $subject }}

    {{-- Full Name: {{ $fullname }}
    Email: {{ $email }}
    Phone: {{ $phone }}
    Inquiry Type: {{ $inquiry_type }} --}}

    {{ $message }}
@endcomponent
