<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Team</title>
  @vite('resources/css/app.css')
</head>
<body>
{{-- awal navbar --}}
@include('layouts.navbar')
{{-- akhir navbar --}}

{{-- awal team section --}}
<div class="bg-black">
      <h1 class="font-bold text-white text-8xl text-center mb-20">✨Meet The Team✨</h1>
  <div class="font-mono font-bold text-2xl text-center">
    <div class="flex flex-nowrap space-x-20  px-5 pb-5 ">
     <div class="border-8 rounded-lg border-pink-700"><img  src="{{ URL::to('/photos/adelia.jpg') }}"><p>Adelia Sakinah Pane</p><p>231402026</p><p class="text-sky-500">DELETE</p></div>
     <div class="border-8 rounded-lg border-pink-700"><img  src="{{ URL::to('/photos/chinta.jpg') }}"><p>Chinta Yanggest Br Tarigan</p><p>231402038</p><p class="text-sky-500">Homepage, Table , CRUD</p></div>
     <div class="border-8 rounded-lg border-pink-700"><img  src="{{ URL::to('/photos/joy1.jpg') }}"><p>Joyceline</p><p>231402041</p><p class="text-sky-500">EDIT</p></div>
    </div>
    <div class="flex flex-nowrap space-x-20  px-5 mb-10 pt-5">
     <div class="border-8 rounded-lg border-pink-700"><img  src="{{ URL::to('/photos/mawaddah1.jpg') }}"><p>Mawaddah</p><p>231402020</p><p class="text-sky-500">TABLE</p></div>
     <div class="border-8 rounded-lg border-pink-700"><img  src="{{ URL::to('/photos/najdain1.jpg') }}"><p>Najdain Tafdhila</p><p>231402008</p><p class="text-sky-500">CREATE</p></div>
     <div class="border-8 rounded-lg border-pink-700"><img  src="{{ URL::to('/photos/nabilah.jpg') }}"><p>Najmiyatul Nabilah</p><p>231402011</p><p class="text-sky-500">SHOW</p></div>
    </div>
  </div>
</div>
{{-- akhir team section --}}
</body>
</html>
