<h1>Practicing Blade Now. </h1>
{{10+10}}


@for($i=0; $i<=10; $i++ )
{{$i}}
@endfor
@foreach($user as $user)
<h1>
{{$user}}
</h1>
@endforeach
@include('home');
<script>
var data = @json($user);
console.warn(data);
</script>
@csrf