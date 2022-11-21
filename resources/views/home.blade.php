<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex">
        <div class="flex h-screen w-16 flex-col justify-between border-r bg-white">
            <div>
                <div class="inline-flex h-16 w-16 items-center justify-center">
                    <span class="block h-10 w-10 rounded-lg bg-gray-200">
                        <img class="rounded-lg border-gray-200 border-2" src="{{ asset('images/ohnocringe.jpeg') }}"
                            alt="">
                    </span>
                </div>

                <div class="border-t border-gray-100">
                    <nav aria-label="Main Nav" class="flex flex-col p-2">
                        <div class="py-4">
                            <a href="/home"
                                class="t group relative flex justify-center rounded bg-blue-50 px-2 py-1.5 text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <span
                                    class="absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100">
                                    General
                                </span>
                            </a>
                        </div>

                        <ul class="space-y-1 border-t border-gray-100 pt-4">
                            <li>
                                <a href="/accounts"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>

                                    <span
                                        class="absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100">
                                        Accounts
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="/statistics"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>

                                    <span
                                        class="absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100">
                                        Statistics
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href=""
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>

                                    <span
                                        class="absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100">
                                        Informations
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="/profile"
                                    class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>

                                    <span
                                        class="absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100">
                                        Profile
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="sticky inset-x-0 bottom-0 border-t border-gray-100 bg-white p-2">
                <form action="/logout">
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-lg px-2 py-1.5 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>

                        <span
                            class="absolute left-full top-1/2 ml-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white opacity-0 group-hover:opacity-100">
                            Logout
                        </span>
                    </button>
                </form>
            </div>
        </div>
        <div class="w-full">
            <div class="flex justify-center mt-8">
                <div class="mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                      </svg>
                      </div>
                  
                <h1 class="text-center text-3xl font-bold mx-1">Dashboard</h1>
                <div class="mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                      </svg>
                      </div>
                  
            </div>
            <div class="mx-96 mt-10">
                <a class="relative block rounded-xl border border-gray-100 p-8 shadow-xl" href="">
                    <span
                        class="absolute right-4 top-4 rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600">
                        v1.0 beta
                    </span>

                    <div class="mt-4 text-gray-500 sm:pr-8">
                        <svg class="h-8 w-8 sm:h-10 sm:w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
                            aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Hamburger</title>
                            <desc>A solid styled icon from Orion Icon Library.</desc>
                            <rect data-name="layer2" x="2" y="31" width="60" height="12"
                                rx="5" ry="5" fill="#202020"></rect>
                            <path data-name="layer1"
                                d="M5 48a6 6 0 0 0 6 6h42a6 6 0 0 0 6-6v-1H5zm54-23a15 15 0 0 0-15-15H20A15 15 0 0 0 5 25v2h54zm-41-4a2 2 0 1 1 2-2 2 2 0 0 1-2 2zm8 2a2 2 0 1 1 2-2 2 2 0 0 1-2 2zm6-4a2 2 0 1 1 2-2 2 2 0 0 1-2 2zm8 4a2 2 0 1 1 2-2 2 2 0 0 1-2 2zm8-2a2 2 0 1 1 2-2 2 2 0 0 1-2 2z"
                                fill="#202020"></path>
                        </svg>

                        <h3 class="mt-4 text-xl font-bold text-gray-900">BurgerPanel</h3>

                        <p class="mt-2 hidden text-sm sm:block">
                            A beautiful website to manage your BurgerKing accounts if you have many of them :D 
                        </p>
                    </div>
                </a>


            </div>
            <div class="mx-96 mt-10">
                <article class="rounded-xl border border-gray-700 bg-gray-800 p-4">
                    <div class="flex items-center">
                      <img
                        alt="Developer"
                        src="{{asset('images/ohnocringe.jpeg')}}"
                        class="h-16 w-16 rounded-full object-cover"
                      />
                  
                      <div class="ml-3">
                        <h3 class="text-lg font-medium text-white">Loutcho_Q</h3>
                  
                        <div class="flow-root">
                          <ul class="-m-1 flex flex-wrap">
                            <li class="p-1 leading-none">
                              <a href="https://twitter.com/loutchoesport" class="text-xs font-medium text-gray-300"> Twitter </a>
                            </li>
                  
                            <li class="p-1 leading-none">
                              <a href="https://github.com/loutchoo" class="text-xs font-medium text-gray-300"> GitHub </a>
                            </li>
                  
                            <li class="p-1 leading-none">
                              <a href="http://loutchodev.tk" class="text-xs font-medium text-gray-300">Website</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  
                    <ul class="mt-4 space-y-2">
                      <li>
                        <a
                          href="https://github.com/loutchoo/loutchodev"
                          class="block h-full rounded-lg border border-gray-700 p-4 hover:border-pink-600"
                        >
                          <strong class="font-medium text-white">Loutchodev</strong>
                  
                          <p class="mt-1 text-xs font-medium text-gray-300">
                            Un portfolio sur lequel j'ai passé un peu de temps :)
                          </p>
                        </a>
                      </li>
                  
                      <li>
                        <a
                          href="https://github.com/loutchoo/evilscreen"
                          class="block h-full rounded-lg border border-gray-700 p-4 hover:border-pink-600"
                        >
                          <strong class="font-medium text-white">Evilscreen</strong>
                  
                          <p class="mt-1 text-xs font-medium text-gray-300">
                            Un builder python de programme malveillant prenant des captures d'écrans de l'ordinateur de ses victimes et les envoyant sur un serveur FTP.
                          </p>
                        </a>
                      </li>
                    </ul>
                  </article>
                  
                  
            </div>
        </div>
    </div>

</body>

</html>
