<x-layout title="Culinária japonesa por chef Koji Yokomizo">
    <div class="flex flex-col justify-between w-full h-full">
        <header>
            <nav>
                <ul class="flex items-center justify-end gap-16 pt-10">
                    <li>
                        <a class="font-ubuntu font-semibold text-[#FFF8F3] text-lg relative
                              before:content-[''] before:block before:w-[50px] before:h-[1.5px] before:bg-orange-500 before:absolute before:-left-14 before:top-[60%] before:-translate-y-2/4
                              after:content-[''] after:block after:w-[6px] after:h-[6px] after:rounded-full after:bg-orange-500 after:absolute after:top-[60%] after:-translate-y-2/4 after:-left-[3.8rem]"
                              href="{{route('about')}}">
                            quem somos
                        </a>
                    </li>
                    <li>
                        <a class="font-ubuntu font-semibold text-[#FFF8F3] text-lg relative
                              before:content-[''] before:block before:w-[50px] before:h-[1.5px] before:bg-orange-500 before:absolute before:-left-14 before:top-[60%] before:-translate-y-2/4"
                            href="#">reservas</a>
                    </li>
                    <li>
                        <a class="font-ubuntu font-semibold text-[#FFF8F3] text-lg relative
                              before:content-[''] before:block before:w-[50px] before:h-[1.5px] before:bg-orange-500 before:absolute before:-left-14 before:top-[60%] before:-translate-y-2/4"
                            href="{{route('cardapios')}}">cardápios</a>
                    </li>
                    <li>
                        <a class="font-ubuntu font-semibold text-[#FFF8F3] text-lg relative
                              before:content-[''] before:block before:w-[50px] before:h-[1.5px] before:bg-orange-500 before:absolute before:-left-14 before:top-[60%] before:-translate-y-2/4"
                            href="#">unidades</a>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="flex justify-between w-full pb-14">
            <div class="relative">
                <div class="w-[350px] h-[350px] rounded-full bg-orange-500 shadow-lg shadow-orange-900"></div>
                <h2 class="font-inknut font-bold text-[65px] absolute left-5 top-2/4 -translate-y-2/4">
                    <span class="relative flex items-center text-nowrap -left-2 top-8">O MELH<span
                            class="ml-3 text-[#FFF8F3]">OR</span> <span
                            class="flex justify-center items-center font-krona text-[#FFF8F3] font-medium text-lg  ml-4 relative before:content-[''] before:block before:w-[105%] before:h-[2px] before:-z-10 before:bg-orange-500 before:absolute">CULINÁRIA
                            JAPONESA</span></span>
                    <span class="flex items-center ml-[245px]"><span class="mt-4 text-xl">DO</span>J<span
                            class="ml-3 text-[#FFF8F3]">APÃO</span></span>
                    <span class="flex relative left-[315px] -top-[.85rem] gap-1.5">
                        <span class="w-4 h-4 bg-[#FFF8F3] rounded-full"></span>
                        <span class="w-4 h-4 bg-[#FFF8F3] rounded-full"></span>
                        <span class="w-4 h-4 bg-[#FFF8F3] rounded-full"></span>
                        <span class="w-4 h-4 bg-[#FFF8F3] rounded-full"></span>
                        <span class="w-4 h-4 bg-[#FFF8F3] rounded-full"></span>
                    </span>
                </h2>
            </div>
            <div class="flex gap-4 pr-20">
                <h1 class="font-krona text-[#FFF8F3] flex flex-col justify-center items-center text-6xl">
                    <span class="-mb-2">B</span>
                    <span class="mb-8 text-5xl">y</span>
                    <span class="relative flex flex-col items-center justify-center">
                        <span class="relative z-10 flex flex-col items-center justify-center">
                            <span class="-mb-3">K</span>
                            <span class="mb-0 text-5xl">o</span>
                            <span class="mb-3 text-5xl">j</span>
                            <span class="text-5xl">i</span>
                        </span>
                        <span
                            class="flex flex-col justify-center items-center absolute text-[85px] text-orange-500 opacity-30">
                            <span>こ</span>
                            <span>う</span>
                            <span>じ</span>
                        </span>
                    </span>
                </h1>
                <div
                    class="w-[2.5px] h-full bg-orange-500 relative
            before:content-[''] before:block before:w-[12px] before:h-[12px] before:rounded-full before:bg-orange-500 before:absolute before:-top-3 before:left-2/4 before:-translate-x-2/4
            after:content-[''] after:block after:w-[12px] after:h-[12px] after:rounded-full after:bg-orange-500 after:absolute after:-bottom-3 after:left-2/4 after:-translate-x-2/4">
                </div>
            </div>
        </main>

        <footer class="flex justify-end pb-40">
            <div class="flex items-center">
                <span class="text-4xl text-[#FFF8F3] font-markazi">QUEM SOMOS</span>
                <img class="relative z-0 ml-5 -mr-10 w-[70px]" src="{{ asset('images/icons/Arrow.svg') }}"
                    alt="seta preta apontada para a direita">
                <a class="w-20 h-20 bg-orange-500 rounded-full" href="{{route('about')}}"></a>
            </div>
        </footer>
    </div>
</x-layout>
