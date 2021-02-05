<x-layout>
    <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Edit Message</h1>
        </div>
        <x-contact-form :contact="$contactMessage" :mode="'edit'"/>
    </div>
    </section>
</x-layout>
