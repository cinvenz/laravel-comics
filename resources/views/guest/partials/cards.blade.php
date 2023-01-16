
    {{-- <div class="contents">
      <img class="img-card" :src="imgUrl" alt="" />
      <p class="card-name">{{ name }}</p>
    </div> --}}

    @foreach ($comics as $comic)
    <div class="card">
        <div class="contents">
            <img class="img-card" src="{{$comic['thumb']}}" alt="" />
            <p class="card-name">{{ $comic['series'] }}</p>
        </div>
    </div>
    @endforeach



