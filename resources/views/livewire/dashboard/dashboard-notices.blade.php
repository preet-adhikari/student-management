<div>
    @if(!isset($notices))
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-2">
            <div class="p-6 bg-white border-b border-gray-200 text-center text-xl">
                No updates for today!!
            </div>
        </div>
    @else
        <x-custom-notice>
            @foreach($notices as $notice)
                <div class="noticeAccordion">
                    <x-custom-notice>
                        <a href="#" class="noticeHeading">
                            <h3 class="text-center text-xl ">{{ $notice->title }}</h3>
                        </a>
                        <br>
                        <div class="noticeView">
                            <p class="p-2 justify-center">{!! $notice->body !!}</p>
                        </div>
                    </x-custom-notice>
                </div>

            @endforeach
        </x-custom-notice>
    @endif
</div>
