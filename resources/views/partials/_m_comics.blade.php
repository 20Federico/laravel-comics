<div>
  <div class="component_container">
    <div class="container">
      <div class="label">
        CURRENT SERIES
      </div>
      <div class="cards_box">
        @foreach ($comicsList as $comic)
        <div class="card">
          <div class="cover_box" style="background-image: url({{$comic["thumb"]}})">
          </div>
          <div class="overlay">
            <p>type: {{ $comic["type"] }}</p>
            <p>price: {{ $comic["price"] }}</p>
            <a href="/comic_details" class="btn_outline_primary">more details</a>
          </div>
          <p>{{strtoupper($comic["series"])}}</p>
        </div>
        @endforeach

      </div>
      <button class="btn_primary btn_center">LOAD MORE</button>
    </div>
  </div>
</div>