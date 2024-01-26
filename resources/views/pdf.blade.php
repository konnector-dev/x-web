<x-pdf-layout>
    <h3 class="text-4xl mx-4 pb-4">E-book</h3>
    <div>
        <h4 class="text-xl mx-4 pb-4">Table of Contents</h4>
        <ul class="list-disc list-inside">
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#chapter-1">Chapter 1</a></li>
            <li><a href="#chapter-2">Chapter 2</a></li>
            <li><a href="#chapter-3">Chapter 3</a></li>
        </ul>
    </div>
    <div class="flex flex-col space-y-4 gap-y-6 mt-6">
        <div>
            <h4 class="text-3xl mx-4 pb-4" id="introduction">Introduction</h4>

            <span>{{ fake()->text(1500) }}</span>
        </div>
        <div>
            <h4 class="text-3xl mx-4 pb-4" id="chapter-1">Chapter 1</h4>

            <span>{{ fake()->text(1800) }}</span>
        </div>
        <div>
            <h4 class="text-3xl mx-4 pb-4" id="chapter-2">Chapter 2</h4>

            <span>Lorem ipsum dolor sit amet consectet ur adipisicing elit. Quisquam, voluptas.</span>
            {{ fake()->text(5000) }}
        </div>
    </div>

</x-pdf-layout>
