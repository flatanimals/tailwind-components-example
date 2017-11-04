<div class="card mb-1">
    <label class="card-header">Item</label>
    <div class="select w-full mb-2">
        <select class="select">
            <option>Classic</option>
            <option>Search</option>
            <option selected>By Brand</option>
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
    <div class="flex flex-row mb-2 items-center">
        <input list="brands" placeholder="Select a Brand..." value="Budweiser" class="rounded w-full mr-1">
        <button class="border-grey-light border rounded p-1">
            <svg class="h-4 w-4">
                <use xlink:href="#icon-lock"></use>
            </svg>
        </button>
    </div>

    <div class="check-list">
        <label>
            <input type="checkbox"><span>40oz. Bottle</span>
        </label>
        <label>
            <input type="checkbox"><span>6 Pack Bottles</span>
        </label>
        <label>
            <input type="checkbox"><span>12 Pack Bottles</span>
        </label>
        <label>
            <input type="checkbox"><span>6 Pack Cans</span>
        </label>
        <label>
            <input type="checkbox"><span>12 Pack Cans</span>
        </label>
        <label>
            <input type="checkbox"><span>24 Pack Cans</span>
        </label>
    </div>
</div>
