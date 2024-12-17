<x-account-layout>
    <x-slot:header>{{ $title }}</x-slot>
    <div>
        {!! $chart->container() !!}
    </div>

    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</x-account-layout>
