<x-guest-layout>
    <div class="h-screen pb-14 bg-right bg-cover">
    <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center bg-yellow-50">
        <!--左側-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden ">
            <h1 class="my-4 text-3xl md:text-5xl text-green-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">ペット可物件情報交換広場
            </h1>
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">
                ペットと共に住める物件の情報を交換する場です。<br>
                みんなで情報交換しましょう♪
            </p>
        
            <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center md:text-left fade-in">
                会員募集中。お気軽にひょっこりきてください。
            </p>
            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in ">
                {{-- ボタン設定 --}}
                <a href="{{ route('contact.create') }}"><x-primary-button class="btnsetg">お問い合わせ</x-primary-button></a>
                <a href="{{ route('register') }}"><x-primary-button class="btnsetr">ご登録はこちら</x-primary-button></a>
            </div>
        </div>
        {{-- 右側 --}}
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
            <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom rounded-lg shadow-xl" src="{{asset('logo/inuneko.jpg')}}">
        </div>
    </div>
    <div class="container pt-10 md:pt-18 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="w-full text-sm text-center md:text-left fade-in border-2 p-4 text-red-800 leading-8 mb-8">
            <P> コロナ禍により在宅勤務が広がり、おうち時間が増えてきた今日この頃。ペットがいたらいいなぁ…と思うことはありませんか？<br>
                いざペットを飼いたいと思ったとき、まず初めに整えるのは飼育環境。特に賃貸だと、競争率の高い中でペット可物件を探さなければなりません。<br>
                持ち家であっても、ペットにとって住みやすい環境を整えてあげることは重要です。<br>
                ここでは、そんなペットのお迎えをお考えのあなたのために、ペットと共に住めるお家探しのコツや、ペットにとって最適な住環境を整えるための情報などを交換しましょう！
            </p>
        </div>
        <!--フッタ-->
        <div class="w-full pt-10 pb-6 text-sm md:text-left fade-in">
            <p class="text-gray-500 text-center">@2022 Laravelの教科書サンプル</p>
        </div>
    </div>
</div>
</x-guest-layout>