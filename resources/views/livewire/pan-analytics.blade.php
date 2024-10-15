<x-pulse::card :cols="$cols" :rows="$rows" :class="$class">
    <x-pulse::card-header name="Pan analytics">
        <x-slot:icon>
            <x-dynamic-component :component="'pulse::icons.sparkles'" />
        </x-slot:icon>
    </x-pulse::card-header>

    <x-pulse::scroll :expand="$expand" wire:poll.5s="">
        @if (!count($analytics))
            <x-pulse::no-results />
        @else
            <div class="min-h-full flex flex-col">
                <x-pulse::table width="100%">
                    <x-pulse::thead>
                        <tr>
                            <x-pulse::th></x-pulse::th>
                            <x-pulse::th class="text-right">Name</x-pulse::th>
                            <x-pulse::th class="text-right">Impressions</x-pulse::th>
                            <x-pulse::th class="text-right">Hovers</x-pulse::th>
                            <x-pulse::th class="text-right">Clicks</x-pulse::th>
                        </tr>
                    </x-pulse::thead>
                    <tbody>
                    @foreach ($analytics as $item)
                        <tr class="h-2 first:h-0"></tr>
                        <tr wire:key="{{ $item['name'] }}">
                            <x-pulse::td numeric class="text-gray-700 dark:text-gray-300 font-bold">
                                {!! $item['id'] !!}
                            </x-pulse::td>
                            <x-pulse::td numeric class="text-gray-700 dark:text-gray-300 font-bold">
                                {!! $item['name'] !!}
                            </x-pulse::td>
                            <x-pulse::td numeric class="text-gray-700 dark:text-gray-300 font-bold">
                                {{ $item['impressions'] }}
                            </x-pulse::td>
                            <x-pulse::td numeric class="text-gray-700 dark:text-gray-300 font-bold">
                                {{ $item['hovers'] }}
                            </x-pulse::td>
                            <x-pulse::td numeric class="text-gray-700 dark:text-gray-300 font-bold">
                                {{ $item['clicks'] }}
                            </x-pulse::td>
                        </tr>
                    @endforeach
                    </tbody>
                </x-pulse::table>
            </div>
        @endif
    </x-pulse::scroll>
</x-pulse::card>
