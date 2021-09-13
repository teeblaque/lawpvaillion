@component('mail::message')
# Hello {{ $details['name'] }}

You are required to send your passport to the firm.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
