<x-app-layout>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full">
        <div class="space-y-3" >
            <h2 class="font-semibold text-3xl text-blue-400">What’s the best way for employers to contact you?</h2>
            <p class="text-xl">We suggest including an email and phone number</p>
        </div>

        <div class="flex flex-row w-full">
            <div class="w-full mt-10">
                <form action="" class="w-full">
                    <div class="flex w-full shrink-0 space-x-4">
                        <div class="w-1/2">
                            <x-input-label for="firstname" :value="__('First Name')" />

                            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                        </div>
                        <div class="w-1/2">
                            <x-input-label for="surname" :value="__('Surname')" />

                            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-input-label for="profession" :value="__('Profession')" />

                            <x-text-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" required autofocus />
                    </div>

                    <div class="flex w-full justify-between shrink-0 space-x-4 mt-4">
                        <div class="">
                            <x-input-label for="state" :value="__('State/Province')" />

                            <x-text-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autofocus />
                        </div>
                        <div class="w-2/5">
                            <x-input-label for="city" :value="__('City')" />

                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
                        </div>
                        <div class="">
                            <x-input-label for="country" :value="__('Country')" />

                            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
                        </div>
                    </div>

                    <div class="mt-4 w-1/4">
                        <x-input-label for="postalcode" :value="__('Postal Code')" />

                            <x-text-input id="postalcode" class="block mt-1 w-full" type="text" name="postalcode" :value="old('postalcode')" required autofocus />
                    </div>

                    <div class="flex w-full shrink-0 space-x-4 mt-4">
                        <div class="w-1/2">
                            <x-input-label for="Phone" :value="__('Phone')" />

                            <x-text-input id="Phone" placeholder="+234119202932" class="block mt-1 w-full" type="text" name="Phone" :value="old('Phone')" required autofocus />
                        </div>
                        <div class="w-1/2">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" placeholder="test@mail.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                    </div>
                </form>
            </div>

            <div class="w-96">

            </div>
        </div>
        
    </div>

    <!- Button Group Footer-->
    <x-button-footer next="work history"></x-button-footer>
    <!- end of Buttom Buttons-->
        
</x-app-layout>
