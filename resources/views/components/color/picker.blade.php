<div class="card mb-1">
    <label class="card-header">Color Picker</label>
    <div class="flex flex-row w-full items-stretch p-1 bg-grey-lighter border border-grey-light rounded shadow-inner mb-2">
        @foreach(['grey','red','pink','yellow','orange','green','teal','blue', 'purple'] as $color)
            <div class="flex flex-grow flex-col w-full items-stretch">
                @foreach(['-lightest','-lighter','-light',' ','-dark','-darker','-darkest'] as $shade)
                    <button class="flex-grow bg-{{$color}}{{$shade}} py-3 mr-px mb-px border border-px border-grey rounded rounded-sm"></button>
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="w-full flex flex-col items-center">
        <button class="bg-blue text-white px-3 py-2 w-full border border-blue-dark rounded">Done</button>
    </div>
</div>