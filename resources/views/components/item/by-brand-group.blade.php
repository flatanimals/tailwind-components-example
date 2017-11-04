<div class="card mb-1">
    <label class="card-header">Item</label>
    <div class="select w-full mb-2">
        <select class="select">
            <option>Classic</option>
            <option>Search</option>
            <option>By Brand</option>
            <option selected>By Brand Group</option>
            <option>By Item Internal Ref</option>
            <option>By Item SKU</option>
        </select>
        <div class="caret">
            <svg class="h-4 w-4">
                <use xlink:href="#caret"></use>
            </svg>
        </div>
    </div>
    <div class="flex flex-row mb-2 items-center">
        <input type="text" placeholder="Select a Brand Group..." class="rounded w-full mr-1">
        <button class="border-grey-light border rounded p-1"><svg class="h-4 w-4"><use xlink:href="#icon-lock"></use></svg></button>
    </div>
    <div class="flex flex-row items-center">
        <input type="text" placeholder="Select a Package..." class="rounded w-full mr-1">
        <button class="border-grey-light border rounded p-1"><svg class="h-4 w-4"><use xlink:href="#icon-lock"></use></svg></button>
    </div>
</div>