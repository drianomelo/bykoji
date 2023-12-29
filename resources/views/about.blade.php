<x-layout title="Quem somos">
    <x-title title="Quem somos" japanese="私たちについて"></x-title>

    <main class="flex items-center gap-44">
        <div class="flex flex-col gap-8">
            <div class="flex items-center">
                <span class="relative z-50 bg-orange-600 rounded-full w-14 h-14 -me-10"></span>
                <span class="relative z-40 bg-orange-500 rounded-full w-[54px] h-[54px] -me-10"></span>
                <span class="relative z-30 bg-orange-400 rounded-full w-[53px] h-[53px] -me-10"></span>
                <span class="relative z-20 bg-orange-300 rounded-full w-[51px] h-[51px] -me-10"></span>
                <span class="relative z-10 bg-orange-200 rounded-full w-[49px] h-[49px] "></span>
            </div>
            <p class="text-[#FFF8F3] font-markazi text-2xl text-justify">
                Conhecido e respeitado pela sua habilidade em escolher pessoalmente os melhores peixes, chef <span class="text-orange-500">Koji
                    Yokomizo</span> é o nome à frente do By Koji. Com 2 casas em São Paulo – uma no Estádio do Morumbi e outra no
                Hospital Albert Einstein –, Koji traz para o público paulistano requintes da mais tradicional
                gastronomia japonesa ao mesmo tempo que emprega com maestria elementos contemporâneos na sua cozinha.
                Uma história que começou ainda criança, através da paixão que nasceu com seu próprio pai pela pesca,
                responsável pelo fascínio do chef pelos peixes e que culminou no sucesso de quem conhece tão bem o
                ingrediente principal da culinária japonesa, que baseou o seu trabalho na habilidade de extrair os
                melhores cortes, tornando o prazer de degustar sushis e sashimis uma experiência única.
            </p>
            <div class="flex items-center">
                <span class="text-3xl text-[#FFF8F3] font-markazi">CARDÁPIOS</span>
                <img class="relative z-0 ml-5 -mr-7 w-[55px]" src="{{asset('images/icons/Arrow.svg')}}" alt="seta preta apontada para a direita">
                <a class="bg-orange-500 rounded-full w-14 h-14" href="{{route('cardapios')}}"></a>
            </div>
        </div>
        <div class="flex flex-col items-center gap-3">
            <div class="relative w-[300px] h-[450px] bg-[url('../../public/images/foto-about.jpg')] bg-cover border border-orange-500
                        before:content-[''] before:block before:w-full before:h-full before:border before:border-orange-500 before:absolute before:bottom-5 before:left-5
                        after:content-[''] after:block after:w-full after:h-full after:border after:border-orange-500 after:absolute after:bottom-10 after:left-10"></div>
            <div class="flex items-center gap-9">
                <span class="w-5 h-5 bg-orange-200 rounded-full"></span>
                <span class="w-5 h-5 bg-orange-300 rounded-full"></span>
                <span class="w-5 h-5 bg-orange-400 rounded-full"></span>
                <span class="w-5 h-5 bg-orange-500 rounded-full"></span>
                <span class="w-5 h-5 bg-orange-600 rounded-full"></span>
            </div>
        </div>
    </main>
</x-layout>
