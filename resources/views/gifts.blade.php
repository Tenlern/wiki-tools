@php
    /**
    * @var \Illuminate\Database\Eloquent\Collection<\App\Models\Gift> $gifts
    */
@endphp
<x-app-layout>
    <x-slot name="header">
        <h1>List of Gifts</h1>
        <div class="container" id="menu">
        </div>
    </x-slot>

    <div class="p-6">
        <div id="app">
            <section>
                @foreach($gifts as $gift)
                    <article class="max-w-7xl mx-auto sm:px-6 sm:py-3 lg:px-8 lg:py-4">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="py-3">
                                    @foreach($gift->tags as $tag)
                                        @foreach($tag->name as $language => $text)
                                            <div v-if="{{ $language === 'en' ? '' : '!' }}isEng"
                                                 class="ml-4 text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 {{ $tag->bg_color }} {{   $tag->text_color }} rounded-full">
                                                {{ $text }}
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>

                                <h3 class="capitalize">
                                    {{ $gift->name }}
                                </h3>
                                <cite class="text-slate-400">
                                    {{ $gift->source }}
                                </cite>
                                @foreach($gift->description as $language => $text)
                                    <p v-if="{{ $language === 'en' ? '' : '!' }}isEng">
                                        {{ $text }}
                                    </p>
                                @endforeach
                                <hr>
                                @foreach($gift->system as $language => $text)
                                    <p v-if="{{ $language === 'en' ? '' : '!' }}isEng">
                                        {{ $text }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>
        </div>
    </div>

</x-app-layout>

