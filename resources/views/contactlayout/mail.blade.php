@component('mail::message')

You have gotten a message from {{ request('name') }}

{{ request('message') }}

@endcomponent