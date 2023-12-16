<x-mail::message>
    <h2> {{$body['heading']}}</h2>
    <img src="{{ $message->embed(storage_path('app/public/' . $body['imageFile'])) }}" alt="">
<p>{{$body['review']}},</p>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
