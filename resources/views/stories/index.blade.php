@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Choisissez une histoire</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $stories = [
                ['id' => 1, 'title' => 'Life Simulator', 'description' => 'Une aventure interactive pleine de choix.', 'active' => true, 'image' => 'life-simulator.png'],
                ['id' => 2, 'title' => 'Legacy of Kingdom', 'description' => 'Unissez les royaumes de la Chine impériale.', 'active' => false, 'image' => 'legacy-of-kingdom.png'],
                ['id' => 3, 'title' => 'Le Labyrinthe des ombres', 'description' => 'Explorez un ancien labyrinthe mystique.', 'active' => false, 'image' => 'labyrinthe-ombres.png'],
                ['id' => 4, 'title' => 'Crisis Simulator', 'description' => 'Soyez président en temps de gestion de crise.', 'active' => false, 'image' => 'crisis-simulator.png'],
                ['id' => 5, 'title' => 'Dernier appel', 'description' => 'Enquêtez et trouvez qui est le criminel.', 'active' => false, 'image' => 'dernier-appel.png'],
                ['id' => 6, 'title' => 'Reflet', 'description' => 'Une thérapie virtuelle qui en sait plus que vous...', 'active' => false, 'image' => 'reflet.png'],
            ];
        @endphp

        @foreach ($stories as $story)
            <div class="bg-white shadow rounded p-4">
                <img src="{{ asset('images/stories-img/' . $story['image']) }}" alt="{{ $story['title'] }}" class="mb-4 w-full aspect-[4/3] object-cover rounded">
                <h2 class="text-xl font-semibold mb-2">{{ $story['title'] }}</h2>
                <p class="text-gray-600 text-sm mb-4">{{ $story['description'] }}</p>

                @if ($story['active'])
                    <form method="POST" action="{{ route('story.start') }}">
                        @csrf
                        <input type="hidden" name="story_id" value="{{ $story['id'] }}">
                        <button type="submit" class="restartGame">
                            Commencer
                        </button>
                    </form>
                @else
                    <button disabled class="bg-gray-400 text-white px-4 py-2 rounded opacity-50 cursor-not-allowed">
                        Bientôt disponible
                    </button>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection

<style>
.restartGame {
    background-color: #79aacf;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    justify-content: left;
    align-items: left;
}
.restartGame:hover {
    background-color:rgb(146, 180, 205);
}

</style>
