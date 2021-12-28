@php

$navLinks= [
        ["linkName"=> 'CHARACTERS', "href"=> '#'],
        ["linkName"=> 'COMICS', "href"=> '#'],
        ["linkName"=> 'MOVIES', "href"=> '#'],
        ["linkName"=> 'TV', "href"=> '#'],
        ["linkName"=> 'GAMES', "href"=> '#'],
        ["linkName"=> 'COLLECTIBLES', "href"=> '#'],
        ["linkName"=> 'VIDEOS', "href"=> '#'],
        ["linkName"=> 'FANS', "href"=> '#'],
        ["linkName"=> 'NEWS', "href"=> '#'],
        ["linkName"=> 'SHOP', "href"=> '#']
];

@endphp
{{-- aggiungi currentlink con classe active --}}


<header>
  <nav class="container">
    <img src="{{asset('img/dc-logo.png')}}" alt="dc logo">
    <ul>
      @foreach ($navLinks as $link)
      @if ($link['linkName'] == 'SHOP')
      <li><a class="dropdown-toggle" href="{{ $link['href'] }}">{{ $link['linkName'] }}</a></li>    
      @else
      <li><a href="{{ $link['href'] }}">{{ $link['linkName'] }}</a></li>
      @endif
      @endforeach
    </ul>
  </nav>
</header>