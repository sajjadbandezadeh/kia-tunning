<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('رمز عبور خود را فراموش کرده اید؟ مشکلی نیست. فقط آدرس ایمیل خود را به ما اطلاع دهید و ما یک پیوند بازنشانی رمز عبور را برای شما ایمیل می کنیم که به شما امکان می دهد رمز جدیدی را انتخاب کنید.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" style="direction: rtl">
        @csrf

        <!-- Email Address -->
        <div style="direction: rtl; text-align: right">
            <x-input-label for="email" :value="__('ایمیل')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('دریافت لینک بازنشانی کلمه عبور') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
