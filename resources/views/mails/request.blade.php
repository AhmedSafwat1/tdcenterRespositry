<div style="text-align: center;margin-top: 50px">
    <h3> {{ __("mail.request.title") }} - {{ $request->req_name}} </h3>
</div>
<div style="text-align: center">
    <p  style="color: green ;size: 19px;font-weight: bold"> -- Tdcenter --</p>
    Hi {{ $user->username }} , {{ __("mail.request.message") }}:
    <p style="color: red ;margin: 50px 0px"> {{ $request->req_number}}</p>
    <p>{{  __("mail.request.end") }}</p>
</div>