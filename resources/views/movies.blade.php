<h1>Lista dei film</h1>

<ul>
    @foreach ($movies as $item)
        <li>
            <h3>{{ $item->title }}</h3>
            <h4>{{ $item->original_title }}</h4>
            <p>{{ $item->nationality }}</p>
            <p>{{ $item->date }}</p>
            <p>{{ $item->vote }}</p>
        </li>
    @endforeach
</ul>
