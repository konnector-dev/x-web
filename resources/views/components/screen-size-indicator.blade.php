@if(app()->environment('local'))
    <div class="border border-gray-500/20 p-0.5 px-2 text-white/60" title="Screen size indicator">
        <span class="sm:hidden">
            default &lt;640px
        </span>
        <span class="hidden sm:block md:hidden">
            sm &lt;768px
        </span>
        <span class="hidden md:block lg:hidden">
            md &lt;1024px
        </span>
        <span class="hidden lg:block xl:hidden">
            lg &lt;1280px
        </span>
        <span class="hidden xl:block 2xl:hidden">
            xl &lt;1536px
        </span>
        <span class="hidden 2xl:block">
            2xl &gt;1536px
        </span>
    </div>
@endif
