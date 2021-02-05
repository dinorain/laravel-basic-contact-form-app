<x-layout>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="Dustin Jourdan" src="{{ asset('images/dustinjourdan.png') }}">
            <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Dustin Jourdan</h1>
            <p class="mb-8 leading-relaxed">Hello, I’m Dustin. I develop softwares to solve problems.</p>
            <div class="flex justify-center">
                <a 
                    href="{{ route('contact-message.create') }}"
                    class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg"
                >Reach me out</a>
            </div>
            </div>
        </div>
    </section>
</x-layout>
