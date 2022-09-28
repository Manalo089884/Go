@component('mail::message')
<div class="row">
	<h1 class="text-dark">Name: {{ $name }}</h1>

        Email: {{ $email }}
        Phone Number:  {{ $phone }}
        Subject  {{ $subject }}
        Message:{!! $message !!}
</div>

@endcomponent
