@extends('layout.main')

@section('main')
<div class="swiper ">
    <div class="swiper-wrapper ">
        <div class="swiper-slide" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRGknJ9rlxcmdQ8aB09Mm4LhlPqgy7aOkGnw&s'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://media.licdn.com/dms/image/C4E12AQHbKM626WzqZA/article-cover_image-shrink_720_1280/0/1596312274123?e=2147483647&v=beta&t=wS-puOUr_VndO60NbsOnCU90obtzHAmzmZZ2ywCIOGQ'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://rukminim2.flixcart.com/image/850/1000/kz5vwy80/poster/i/b/k/medium-tower-of-god-manhwa-series-matte-finish-poster-original-imagb8cdnmzupygf.jpeg?q=90&crop=false'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://www.theouterhaven.net/wp-content/uploads/2021/03/Screenshot_2020-10-12-Official-Manga-Trailer-Chainsaw-Man-Vol-1-VIZ1.png'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://images.squarespace-cdn.com/content/v1/642e96e9c3b3eb7cd2ae9077/1703154116196-FW8ZI5ROJHVLGYHYT86Q/Manga+and+Anime+Brushes+Starter+Pack+for+Adobe+Photoshop+-+Brushapes+Studio+02.jpg?format=1000w'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://static0.gamerantimages.com/wordpress/wp-content/uploads/2023/11/uncanny-charm-salt-friend-monstrous-heart-salad-days-killer-crush.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://m.media-amazon.com/images/I/71DrNf5UJJL.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
        <div class="swiper-slide" style="background-image: url('https://render.fineartamerica.com/images/rendered/default/poster/8/5/break/images/artworkimages/medium/3/sil80-manga-initial-d-jason-carter.jpg'); background-repeat:no-repeat; background-size:cover; background-position:center">
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="search mt-7">
    <form class="max-w-md mx-auto">   
        <div class="relative">
            <input type="search" id="default-search" style="width: 100%; background:#CEE9FF;" class="p-3.5 ps-10 text-md text-white-900 border border-white-300 rounded-lg bg-white-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>

</div>
<div class="catalog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="catalog__nav">
                    <div class="catalog__select-wrap">
                        <select class="catalog__select" name="genres">
                            <option value="All genres">All genres</option>
                            <option value="Action/Adventure">Action/Adventure</option>
                            <option value="Animals">Animals</option>
                            <option value="Animation">Animation</option>
                            <option value="Biography">Biography</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Cooking">Cooking</option>
                            <option value="Dance">Dance</option>
                            <option value="Documentary">Documentary</option>
                            <option value="Drama">Drama</option>
                            <option value="Education">Education</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Family">Family</option>
                            <option value="Fantasy">Fantasy</option>
                            <option value="History">History</option>
                            <option value="Horror">Horror</option>
                            <option value="Independent">Independent</option>
                            <option value="International">International</option>
                            <option value="Kids & Family">Kids & Family</option>
                            <option value="Medical">Medical</option>
                            <option value="Military/War">Military/War</option>
                            <option value="Music">Music</option>
                            <option value="Mystery/Crime">Mystery/Crime</option>
                            <option value="Nature">Nature</option>
                            <option value="Paranormal">Paranormal</option>
                            <option value="Politics">Politics</option>
                            <option value="Racing">Racing</option>
                            <option value="Romance">Romance</option>
                            <option value="Sci-Fi/Horror">Sci-Fi/Horror</option>
                            <option value="Science">Science</option>
                            <option value="Science Fiction">Science Fiction</option>
                            <option value="Science/Nature">Science/Nature</option>
                            <option value="Travel">Travel</option>
                            <option value="Western">Western</option>
                        </select>

                        <select class="catalog__select" name="years">
                            <option value="All the years">All the years</option>
                            <option value="1">'50s</option>
                            <option value="2">'60s</option>
                            <option value="3">'70s</option>
                            <option value="4">'80s</option>
                            <option value="5">'90s</option>
                            <option value="6">2000-10</option>
                            <option value="7">2010-20</option>
                            <option value="8">2021</option>
                        </select>
                    </div>

                    <div class="slider-radio">
                        <input type="radio" name="grade" id="featured" checked="checked"><label for="featured">Featured</label>
                        <input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
                        <input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
                    </div>
                </div>

                @if($apiData)
                <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-7 gap-4">
                    @foreach ($apiData['data'] as $item)
                        <?php
                            $value = "Hello";
                            $sessionKey = 'variableName' . $item['post_id'];
                            Session::put($sessionKey, $item['photo_cover_path']);
                        ?>
                        <div class="">
                            <div class="card">
                                <a href="{{ route('detail', ['post_id' => $item['post_id']]) }}" class="card__cover">
                                    <img src="https://m27comicapi.m27.shop/images/{{$item['photo_cover_path']}}" alt="">
                                </a>
                                
                                <span class="card__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.1</span>
                                <h3 class="card__title"><a href="details.html">{{$item['cm_title']}}</a></h3>
                                <ul class="card__list">
                                    <li>Free</li>
                                    <li>Comedy</li>
                                    <li>{{$item['created_at']}}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                @else
                    <div class="row row--grid flex justify-center">
                        <img class="w-96" src="img/serverError.svg">
                    </div>
                @endif
            </div>
        </div>		

        <div class="row">
            <div class="catalog__paginator-wrap catalog__paginator-wrap--comments">
                <ul class="catalog__paginator">
                    @foreach($apiData['links'] as $page)
                        <li>
                            @if($page['label'] === '&laquo; Previous')
                                <a href="">
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </a>
                            @elseif($page['label'] === 'Next &raquo;')
                            <a href="">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </a>
                            @else
                                <a href="{{route('page' ,['page'=>$page['label']])}}">{{ $page['label'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection