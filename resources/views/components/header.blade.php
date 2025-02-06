<div>
    The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk<br>

    {{ $company }}

    <ul>
        @foreach($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</div>