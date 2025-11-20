<x-guest-layout>
    <!-- <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div> -->

    <section class="h-screen bg-gray-50 overflow-hidden relative">

        <!-- Floating Background Shapes -->
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>

        <div class="relative z-10 h-full flex items-center justify-center px-6">
            <div class="w-full max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-0 bg-white rounded-3xl shadow-2xl overflow-hidden">

                    <!-- Left Panel - Success Message & Illustration -->
                    <div class="hidden lg:flex flex-col justify-center bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 p-12 text-white">
                        <div class="max-w-md">
                            <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-8">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h1 class="text-4xl font-bold">Check your inbox</h1>
                            <p class="mt-4 text-lg text-indigo-100">
                                We've sent a 6-digit verification code to your email address.
                            </p>
                            <div class="mt-10 p-6 bg-white/10 backdrop-blur rounded-2xl">
                                <p class="text-5xl font-bold">98%</p>
                                <p class="text-indigo-200 mt-2">of users verify in under 30 seconds</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Panel - OTP Form -->
                    <div class="flex flex-col justify-center px-10 py-16 lg:px-20 bg-white">
                        <div class="max-w-md mx-auto w-full">

                            <!-- Mobile illustration -->
                            <div class="flex justify-center lg:hidden mb-10">
                                <div class="w-20 h-20 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>

                            <h2 class="text-3xl font-bold text-gray-900 text-center lg:text-left">Enter verification code</h2>
                            <p class="mt-3 text-gray-600 text-center lg:text-left">
                                We sent a code to <span class="font-semibold">john.doe@company.com</span>
                            </p>

                            <form class="mt-10" onsubmit="event.preventDefault()">
                                <!-- 6-Digit OTP Input (Auto-focus next) -->
                                <div class="grid grid-cols-6 gap-3">
                                    <input type="text" maxlength="1" class="otp-input" required autofocus
                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); if(this.value) this.nextElementSibling?.focus();">
                                    <input type="text" maxlength="1" class="otp-input" required
                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); if(this.value) this.nextElementSibling?.focus(); else this.previousElementSibling?.focus();"
                                        onkeydown="if(event.key==='Backspace' && !this.value) this.previousElementSibling?.focus();">
                                    <input type="text" maxlength="1" class="otp-input" required
                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); if(this.value) this.nextElementSibling?.focus(); else this.previousElementSibling?.focus();"
                                        onkeydown="if(event.key==='Backspace' && !this.value) this.previousElementSibling?.focus();">
                                    <input type="text" maxlength="1" class="otp-input" required
                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); if(this.value) this.nextElementSibling?.focus(); else this.previousElementSibling?.focus();"
                                        onkeydown="if(event.key==='Backspace' && !this.value) this.previousElementSibling?.focus();">
                                    <input type="text" maxlength="1" class="otp-input" required
                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); if(this.value) this.nextElementSibling?.focus(); else this.previousElementSibling?.focus();"
                                        onkeydown="if(event.key==='Backspace' && !this.value) this.previousElementSibling?.focus();">
                                    <input type="text" maxlength="1" class="otp-input" required
                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); if(this.value) this.nextElementSibling?.focus(); else this.previousElementSibling?.focus();"
                                        onkeydown="if(event.key==='Backspace' && !this.value) this.previousElementSibling?.focus();">
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" id="verifyBtn" disabled
                                    class="w-full mt-8 py-5 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-60 text-white font-semibold text-lg rounded-xl shadow-lg transition-all duration-300 transform hover:scale-105 active:scale-95 disabled:cursor-not-allowed disabled:hover:scale-100">
                                    Verify & Continue
                                </button>
                            </form>

                            <!-- Resend & Timer -->
                            <div class="mt-8 text-center">
                                <p class="text-sm text-gray-600">
                                    Didn't receive the code?
                                    <button class="font-semibold text-indigo-600 hover:text-indigo-500" id="resendBtn" disabled>
                                        Resend code
                                    </button>
                                </p>
                                <p class="mt-3 text-xs text-gray-500" id="timer">Resend available in <span class="font-bold">0:59</span></p>
                            </div>

                            <div class="mt-10 text-center">
                                <a href="register.html" class="text-sm text-gray-500 hover:text-gray-700">
                                    Back to registration
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </section>
        <!-- Simple JS for OTP experience + Timer -->
        <script>
            const inputs = document.querySelectorAll('.otp-input');
            const verifyBtn = document.getElementById('verifyBtn');
            const resendBtn = document.getElementById('resendBtn');
            const timerEl = document.getElementById('timer').querySelector('span');

            // Enable verify button when all filled
            inputs.forEach(input => {
                input.addEventListener('input', () => {
                    const allFilled = [...inputs].every(i => i.value.length === 1);
                    verifyBtn.disabled = !allFilled;
                    verifyBtn.classList.toggle('opacity-60', !allFilled);
                    verifyBtn.classList.toggle('opacity-100', allFilled);
                });
            });

            // 60-second countdown
            let seconds = 59;
            const countdown = setInterval(() => {
                timerEl.textContent = `0:${seconds.toString().padStart(2, '0')}`;
                seconds--;
                if (seconds < 0) {
                    clearInterval(countdown);
                    resendBtn.disabled = false;
                    resendBtn.classList.remove('text-gray-400');
                    resendBtn.classList.add('text-indigo-600');
                    timerEl.parentElement.textContent = 'You can now request a new code';
                }
            }, 1000);
        </script>
</x-guest-layout>