@extends('layout.main')

@section('main')
    <ul id="imageList">
        @foreach($readData as $image)
            <li class="flex justify-center">
                <img src="https://m27comicapi.m27.shop/images/{{$image}}" alt="">
            </li>
        @endforeach
        <div name="bott" id="bott"></div>
    </ul>
    
    <div class="fixed bottom-5 right-5">
        <button onclick="scrollToTop()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go to Top</button>
        <button onclick="scrollToBottom()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Go to Bottom</button>
    </div>

    <script>
      function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function scrollToBottom() {
        const bottomElement = document.getElementById('bott');
        bottomElement.scrollIntoView({ behavior: 'smooth', block: 'end' });
    }
    </script>
@endsection