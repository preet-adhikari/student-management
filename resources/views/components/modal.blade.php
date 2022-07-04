@props(['formAction' => false])

{{--<div class="absolute left-2/4 top-1/2 -translate-x-2/4 -translate-y-2/4">--}}
<div>
    @if($formAction)
        <form wire:submit.prevent="{{ $formAction }}">
            @endif
            <div class="bg-white p-4 sm:px-6 sm:py-4 border-b border-gray-150">
                @if(isset($title))
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $title }}
                    </h3>
                @endif
            </div>
            <div class="bg-white px-4 sm:p-6">
                <div class="space-y-6">
                    {{ $content }}
                </div>
            </div>

            <div class="bg-white px-4 pb-5 sm:px-4 sm:flex">
                {{ $buttons }}
            </div>
            @if($formAction)
        </form>
    @endif
</div>
