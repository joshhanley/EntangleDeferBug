<div
    x-data="{ alpineShow: @entangle('livewireShow').defer }"
    class="relative w-full h-screen p-4 flex flex-col  items-center bg-gray-100"
>
    <div class="flex space-x-4">

        <div
            class="relative"
            x-on:click.away="alpineShow = false; $wire.someMethod()"
        >
            <div class="font-bold">Input</div>
            <input
                x-on:focus="alpineShow = true"
                class=" w-64 p-4 border border-gray-500 rounded bg-white"
                placeholder="Click here"
            />

            <div
                x-show="alpineShow"
                class="mt-2 absolute w-64 p-4 border border-gray-500 rounded bg-white"
                >
                Some dropdown content
            </div>
        </div>


        {{-- Below is just information --}}
        <div class="space-y-4">
            <div class="font-bold">Instructions</div>

            <p>
                Input with dropdown. <br />
                Click input to show, click away to hide.
            </p>

            <div class="font-bold">Desired result</div>

            <p>
                When clicking in the input the dropdown should be shown, but the changes defered so that a livewire call isn't made.<br/>
                When clicking away to hide dropdown the dropdown should be hidden and a livewire method called also made to do something on the back end.
            </p>

            <div class="font-bold">Problem</div>

            <p>When clicking away to hide dropdown, alpine hides it and livewire is showing it again.</p>

            <p>
                The first alpine change of 'alphineShow = true' is batched but the second is not, and as such livewire is returning '$livewireShow = true'<br/>
                which is causing the dropdown to show again.
            </p>

            <div class="font-bold">Telemetry</div>

            <p>
                $livewireShow: {{ $livewireShow ? 'true' : 'false' }}<br/>
                alpineShow: <span x-text="alpineShow.toString()"></span>
            </p>
        </div>
        {{-- END INFORMATION --}}


    </div>
</div>
