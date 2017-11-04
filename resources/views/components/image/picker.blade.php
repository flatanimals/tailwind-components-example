
<div class="card mb-1">
    <label class="card-header">Image Picker</label>

    <div class="flex flex-row flex-wrap justify-around px-3 mb-2 ">
        @for($i=0; $i<5;$i++)
        <div class="p-1 bg-grey-lighter border border-grey-light hover:border-blue hover:inner-shadow rounded mx-1 mb-2 cursor-pointer">
            <div class="w-24 h-24 bg-contain bg-center" style="background-repeat: no-repeat;background-image: url('https://s3.amazonaws.com/coolertags/cds/10000/xs_LUY96KPh83hQE22Ne4ysp9g0.jpg')"></div>
        </div>
        @endfor
    </div>
    <div class="w-full flex flex-col items-center">
        <button class="bg-blue text-white px-3 py-2 border border-blue-dark rounded w-full">Done</button>
    </div>
</div>