<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- @if(count($posts)<100)
<h1>
    {{dd($posts)}}
</h1>
@elseif (count($posts)==101)
<h1>Yo have 101 Posts  </h1>
@else
<h1>No Posts</h1>
@endif --}}

{{-- @unless (!$posts)
<h1>Posts have been Added</h1>
@endunless --}}

{{-- @forelse ($posts as $post)
{{-- {{$loop -> index}} --}}
{{-- {{$loop -> iteration}} --}}
{{-- {{$loop -> first}} --}}
{{-- {{$loop -> count}} --}}
{{-- {{$loop -> remaining}} --}}
{{-- {{$loop -> last}}
 @empty
<p>No posts have been set</p>
@endforelse --}}

@foreach ($posts as $post)
<h3>{{$post->title}}</h3>
@endforeach

</body>
</html>
