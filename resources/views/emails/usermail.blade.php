@component('mail::message')
    # {{ $subject }}

    {{-- Full Name: {{ $fullname }} --}}

    {{-- Date: {{ $date }} --}}

    {{ $message }}
@endcomponent
