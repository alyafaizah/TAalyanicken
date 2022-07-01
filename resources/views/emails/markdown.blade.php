@component('mail::message')
# Halo,

Anda baru saja meminta kami untuk mereset password anda. Silahkan klik tombol dibawah untuk melanjutkan reset password

@component('mail::button', ['url' => 'http://127.0.0.1:8000/aturulangpassword'])
Reset Password
@endcomponent

Hiraukan pesan ini jika anda tidak meminta kami untuk mereset password anda 

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
