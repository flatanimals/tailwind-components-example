<div class="card mb-1">
    <label class="card-header">Item</label>
    <div class="select w-full mb-2">
        <select class="select">
            <option selected>Classic</option>
            <option>Search</option>
            <option>By Brand</option>
            <option>By Brand Group</option>
            <option>By Internal Ref</option>
            <option>By SKU</option>
        </select>
        <div class="caret">
            <svg class="h-4 w-4">
                <use xlink:href="#caret"></use>
            </svg>
        </div>
    </div>
    <div class="flex flex-row items-center mb-2" >
        <input list="brands" placeholder="Select a Brand..." value="Budweiser" class="rounded w-full mr-1">
        <button class="border-green border rounded p-1 bg-green-dark text-white shadow-inner">
            <svg class="h-4 w-4"><use xlink:href="#icon-lock"></use></svg>
        </button>
    </div>
    <div class="flex flex-row items-center">
        <input type="text" placeholder="Select a Package..." class="rounded w-full mr-1">
        <button class="border-grey-light border rounded p-1">
            <svg class="h-4 w-4"><use xlink:href="#icon-lock"></use></svg>
        </button>
    </div>
</div>