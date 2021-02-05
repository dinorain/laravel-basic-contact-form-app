<x-layout>
    <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Me</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Drop me a message below, I'll get back to you as soon as I can.</p>
        </div>
        <form
            method="POST"
            enctype="multipart/form-data"
            action="{{ route('contact-message.store') }}"
        >
            @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">

            @if (Session::has('success-message'))
            <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                <div slot="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div class="text-xl font-normal  max-w-full flex-initial">{{ Session::get('success-message') }}</div>
            </div>
            @elseif (Session::has('error-message'))
            <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-red-500 bg-red-700 border border-red-700 ">
                <div slot="avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </div>
                <div class="text-xl font-normal  max-w-full flex-initial">{{ Session::get('error-message') }}</div>
            </div>
            @endif

            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-1/2">
                <div class="relative">
                    <label for="from_name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input 
                        type="text" 
                        id="from_name" 
                        name="from_name"
                        required
                        value="{{ old('from_name') ? old('from_name') : '' }}"
                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    />
                    @if ($errors->has('from_name'))
                        <span class="text-red-600" role="alert">
                            <strong>{{ $errors->first('from_name') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
                <div class="p-2 w-1/2">
                <div class="relative">
                    <label for="from_email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input 
                        type="email" 
                        id="from_email" 
                        name="from_email" 
                        required 
                        value="{{ old('from_email') ? old('from_email') : '' }}"
                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    />
                    @if ($errors->has('from_email'))
                        <span class="text-red-600" role="alert">
                            <strong>{{ $errors->first('from_email') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="topic" class="leading-7 text-sm text-gray-600">Topic</label>
                        <input 
                            type="text" 
                            id="topic" 
                            name="topic" 
                            required 
                            value="{{ old('topic') ? old('topic') : '' }}"
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        />
                        @if ($errors->has('topic'))
                            <span class="text-red-600" role="alert">
                                <strong>{{ $errors->first('topic') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="p-2 w-full">
                <div class="relative">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea 
                        id="message" 
                        name="message" 
                        required 
                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                    >{{ old('message') ? old('message') : '' }}</textarea>
                    @if ($errors->has('message'))
                        <span class="text-red-600" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
                </div>
                <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Send message</button>
                </div>
                <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">or email me at
                <a class="text-blue-500">djourdan555@email.com</a>
                <p class="leading-normal my-5">Indonesia</p>
                </div>
            </div>
            </div>
        </form>
    </div>
    </section>
</x-layout>
