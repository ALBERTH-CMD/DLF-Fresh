@component('mail::message')
<title>@yield('title',$config->seo_title)</title>
<h1>
    El Usuario<br>
    {{ $email['nombre'] }}<br>
    Envio Un nuevo Mensaje:<br>
    {{ $email['mensaje'] }}.<br>
    Su Contacto El cual brindo para comunicarse es:<br>
    {{ $email['email'] }}.<br>
    Telefono:<br>
    {{ $email['telefono'] }}<br>
    Favor de Responder en la Brevedad Antes Posible.
</h1>
@component('mail::button', ['url' => ''])
Proessa
@endcomponent

Gracias,<br>

@endcomponent
