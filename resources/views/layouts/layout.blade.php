<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TUBES PRAKTIKUM PEMROGRAMAN WEB LANJUTAN</title>
  @vite('resources/css/app.css')
</head>

<body>
{{-- awal navbar --}}
@include('layouts.navbar')
{{-- akhir navbar --}}

{{-- awal header --}}
@include('layouts.header')
{{-- akhir header --}}

{{-- content start --}}
<div class="relative isolate overflow-hidden bg-black px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0">
  <div class="absolute inset-0 -z-10 overflow-hidden">
  </div>
  <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10">
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="lg:max-w-lg">
          <p class="text-base font-semibold leading-7 text-teal-600 ">The Future Library</p>
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl">A Timeless Treasure Trove of Knowledge</h1>
          <p class="mt-6 text-xl leading-8 text-teal-600 ">In a forest north of Oslo, Norway, a unique project is underway. The Future Library, a 100-year art project, aims to collect and preserve original manuscripts from renowned writers from around the world. These manuscripts will remain unpublished for a century, only to be printed on paper made from the trees being planted in the forest today</p>
        </div>
      </div>
    </div>
    <div class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
      <img class="w-[48rem] max-w-none rounded-xl bg-gray-200 shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" src="{{ URL::to('/photos/content.jpeg') }}" alt="">
    </div>
    <div class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
      <div class="lg:pr-4">
        <div class="max-w-xl text-base leading-7 text-teal-600  lg:max-w-lg">
          <p>Every year, a new writer is invited to contribute to the collection, which already includes works by Margaret Atwood, David Mitchell, and Elif Shafak, among others. The manuscripts are stored in a special room in the Oslo public library, known as the Silent Room, where they will remain untouched until 2114</p>
          <ul role="list" class="mt-8 space-y-8 text-gray-300">
            <li class="flex gap-x-3">📕
              <span>"That's the thing about books. They let you travel without moving your feet." <strong class="font-semibold text-gray-100">- Jhumpa Lahiri, "The Namesake"</strong></span>
            </li>
            <li class="flex gap-x-3">📗
              <span> "A reader lives a thousand lives before he dies, said Jojen. The man who never reads lives only one."<strong class="font-semibold text-gray-100"> - George R.R. Martin, "A Dance with Dragons"</strong></span>
            </li>
            <li class="flex gap-x-3">📘
              <span>"Books are mirrors: you only see in them what you already have inside you." <strong class="font-semibold text-gray-100">- Carlos Ruiz Zafón, "The Shadow of the Wind"</strong></span>
            </li>
          </ul>
          <p class="mt-8">The project's creators, Katie Paterson and Anne Beate Hovind, aim to expand people's perspectives on time and their responsibility towards future generations. By doing so, they encourage writers to think about the impact their work will have on readers 100 years from now.</p>
          <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-100">Future Library</h2>
          <p class="mt-6">The Future Library is not just a collection of books, but a symbol of the power of literature to transcend time and connect people across generations. It is a reminder that the stories we tell today will shape the world of tomorrow.</p>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- content finish --}}

{{-- awal footer --}}
@include('layouts.footer')
{{-- akhir footer --}}
</body>

</html>