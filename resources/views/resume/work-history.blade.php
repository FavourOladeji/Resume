<x-app-layout>

    <div class="bg-white overflow-hidden  sm:rounded-lg w-full mx-10">
        <div class="space-y-3" >
            <h2 class="font-semibold text-3xl text-blue-400">Tell us about your most recent job</h2>
            <p class="text-xl">We’ll start there and work backward.</p>
        </div>

        <div class="flex flex-row w-full">
            <div class="w-full mt-10">
                <form action="" class="w-full">
                    <div class="flex w-full shrink-0 space-x-4">
                        <div class="w-1/2">
                            <x-input-label for="jobtitle" :value="__('Job Title')" />

                            <x-text-input id="jobtitle" class="block mt-1 w-full" type="text" name="jobtitle" :value="old('jobtitle')" required autofocus />
                        </div>
                        <div class="w-1/2">
                            <x-input-label for="employer" :value="__('Employer')" />

                            <x-text-input id="employer" class="block mt-1 w-full" type="text" name="employer" :value="old('employer')" required autofocus />
                        </div>
                    </div>
                    <div class="flex w-full shrink-0 space-x-4 mt-4">
                        <div class="w-1/2">
                            <x-input-label for="city" :value="__('City')" />

                            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus />
                        </div>
                        <div class="w-1/2">
                            <x-input-label for="country" :value="__('Country')" />

                            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus />
                        </div>
                    </div>

                    <div class="flex w-full shrink-0 space-x-4 mt-4">
                        <div class="w-1/2">
                            <x-input-label for="start-date" :value="__('Start Date')" />

                            <x-text-input id="start-date" class="block mt-1 w-full" type="text" name="start-date" :value="old('start-date')" required autofocus />
                        </div>
                        <div class="w-1/2">
                            <x-input-label for="end-date" :value="__('End Date')" />

                            <x-text-input id="end-date" class="block mt-1 w-full" type="text" name="end-date" :value="old('end-date')" required autofocus />
                        </div>
                    </div>

                    <div class="flex w-full items-center h-10 mt-3 space-x-3">
                        <div class="w-1/2"></div>
                        <div class="flex p-0 space-x-3 items-center">
                            <input id="is-current" class="" type="checkbox" name="is-current" value="{{ old('name')  }}" required autofocus />

                            <x-input-label class="text-base font-extralight" for="is-current" :value="__('I currently work here')" />
                        </div>
                    </div>

                    
                    
                </form>
            </div>

        </div>
        
    </div>

    <!- Button Group Footer-->
    <x-button-footer next="work history"></x-button-footer>
    <!- end of Buttom Buttons-->
        
</x-app-layout>
