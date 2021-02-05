<div>
    <form
        method="POST"
        enctype="multipart/form-data"
        action="{{ route('contact-message.store') }}"
    >
        @csrf
        <div class="lg:w-1/2 md:w-2/3 mx-auto">

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