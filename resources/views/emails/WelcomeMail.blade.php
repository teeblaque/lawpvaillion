@component('mail::message')
# Hi {{ $details['name'] }}

This is really exciting, welcome to our law firm. We are so lucky to have you.

We are her ot help you make sure you get the results you expect from us, so dont hesitate to reach out with questions.

We'd love to hear from you.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
