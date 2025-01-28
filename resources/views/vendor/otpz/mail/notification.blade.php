<x-mail::message>
{{-- Greeting --}}
# {{ __('Hello!') }}

{{-- Intro Lines --}}
{{ __('Click the button below to securely log in to your account:') }}

{{-- Action Button --}}
<x-mail::button :url="$url">
{{ __('Sign-In to :app_name', ['app_name' => config('app.name')]) }}
</x-mail::button>

{{-- Outro Lines --}}
{{ __('This link expires after 5 minutes and can only be used once.') }}

{{-- Salutation --}}
{{ __('Thank you for using :app.name!', ['app.name' => config('app.name')]) }}

{{-- Subcopy --}}
<x-slot:subcopy>
    @lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => __('Sign-In to :app_name', ['app_name' => config('app.name')]),
    ]
)
<span class="break-all">[{{ $url }}]({{ $url }})</span>
</x-slot:subcopy>
</x-mail::message>
