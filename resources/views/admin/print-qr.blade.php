@foreach ($user as $user)
<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate(url('https://siswa.smkmahaputra.sch.id/profile/'.$user->nis.'/student'))) !!}" alt="">
<div> {{$user->name}}</div>
@endforeach