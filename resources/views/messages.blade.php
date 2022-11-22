<!DOCTYPE html>
<html lang="en">
<head>
    <title>Messages page</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
</head>
<body class="text-center">

    <div class="form-message w-100 m-auto">
        <form method="post" action="{{ route('message.add') }}">
            @csrf
            <svg class="svg-icon Header_logoImg__cOT79" width="208" height="36" viewBox="0 0 208 36" fill="none"><path d="M74.8133 12.0374C78.5258 12.0374 80.3258 14.3999 80.3258 17.9999C80.3258 21.5999 78.4133 23.9624 74.8133 23.9624H69.8633V12.0374H74.8133ZM74.4758 21.7124C76.8383 21.7124 77.7383 20.0249 77.7383 17.9999C77.7383 15.9749 76.8383 14.2874 74.4758 14.2874H72.3383V21.8249L74.4758 21.7124Z" fill="#3A3E45"></path><path d="M91.2381 21.7124V23.9624H82.3506V12.0374H91.2381V14.2874H84.9381V16.8749H91.2381V19.1249H84.9381V21.8249H91.2381V21.7124Z" fill="#3A3E45"></path><path d="M125.438 21.7124V23.9624H116.551V12.0374H125.438V14.2874H119.138V16.8749H125.438V19.1249H119.138V21.8249H125.438V21.7124Z" fill="#3A3E45"></path><path d="M111.713 15.3C111.488 14.4 110.813 13.95 109.576 13.95C108.563 13.95 107.663 14.4 107.663 15.3C107.663 16.0875 108.338 16.425 109.126 16.5375L111.376 16.9875C113.288 17.325 114.638 18.3375 114.638 20.475C114.638 22.4999 113.063 24.2999 109.801 24.2999C106.763 24.2999 104.963 22.8374 104.738 20.475H107.326C107.551 21.8249 108.676 22.1624 110.026 22.1624C111.376 22.1624 112.276 21.6 112.276 20.7C112.276 19.8 111.601 19.3499 110.701 19.2374L108.451 18.7875C106.426 18.45 105.413 17.325 105.413 15.525C105.413 13.6125 106.988 11.925 109.913 11.925C112.501 11.925 114.301 13.275 114.638 15.4125L111.713 15.3Z" fill="#3A3E45"></path><path d="M53.2131 23.9624H55.6881L51.8631 12.0374H50.5131H49.5006H48.1506L44.1006 23.9624H46.5756L47.4756 21.0374H52.3131L53.2131 23.9624ZM48.1506 18.8999L49.8381 13.6124L51.5256 18.8999H48.1506Z" fill="#3A3E45"></path><path d="M103.388 23.9624L101.138 19.1249C101.251 19.0124 101.363 19.0124 101.588 18.8999C102.713 18.1124 103.388 17.2124 103.388 15.7499C103.388 13.3874 101.813 12.0374 99.2256 12.0374H93.6006V23.9624H96.0756V19.4624H99.0006L101.138 23.9624H103.388ZM95.9631 14.1749H98.5506C100.238 14.1749 100.801 14.6249 100.801 15.7499C100.801 16.7624 100.238 17.3249 98.7756 17.3249H95.9631V14.1749Z" fill="#3A3E45"></path><path d="M135.676 12.0374V20.8124L130.951 12.0374H130.276H128.588H127.801V23.9624H130.276V15.1874L134.888 23.9624H135.676H137.363H138.151V12.0374H135.676Z" fill="#3A3E45"></path><path d="M65.0254 12.0374V20.8124L60.4129 12.0374H59.6254H57.9379H57.1504V23.9624H59.6254V15.1874L64.3504 23.9624H65.0254H66.7129H67.5004V12.0374H65.0254Z" fill="#3A3E45"></path><path d="M11.8125 28.575C9.67499 27.675 4.72499 24.8625 4.72499 19.35C8.77499 22.3875 12.7125 23.175 14.9625 23.4C13.1625 21.9375 9.22499 17.8875 10.6875 12.6C13.725 16.65 17.2125 18.5625 19.35 19.35C18 17.4375 15.3 12.375 18.1125 7.76249C19.9125 12.4875 22.8375 15.3 24.6375 16.65C23.9625 14.4 22.725 8.88749 26.6625 5.17499C27.1125 10.2375 29.1375 13.725 30.4875 15.525C30.4875 13.8375 30.6 10.2375 32.625 7.53749C29.3625 3.0375 24.075 0 18 0C8.09999 0 0 8.09999 0 18C0 21.825 1.12499 25.3125 3.14999 28.125C6.86249 29.1375 9.89999 28.9125 11.8125 28.575Z" fill="#FFDB00"></path><path d="M12.1502 32.7375C11.9252 33.4125 11.8127 34.2 11.7002 34.875C13.6127 35.55 15.7502 36 18.0002 36C27.6752 36 35.5502 28.35 36.0002 18.6751C25.6502 16.3126 15.1877 22.3875 12.1502 32.7375Z" fill="#FFDB00"></path><path d="M152.662 15.4125C152.662 13.275 151.2 12.0375 148.837 12.0375H144V23.9625H144.787V18.7875H148.837C151.2 18.9 152.662 17.6625 152.662 15.4125ZM144.675 18.1125V12.7125H148.5C150.637 12.7125 151.762 13.6125 151.762 15.4125C151.762 17.2125 150.75 18.1125 148.5 18.1125H144.675Z" fill="#3A3E45"></path><path d="M162.9 12.7125V12.0375H154.913V23.9625H162.9V23.2875H155.7V18.3375H162.9V17.6625H155.7V12.7125H162.9Z" fill="#3A3E45"></path><path d="M207.45 12.7125V12.0375H199.462V23.9625H207.45V23.2875H200.25V18.3375H207.45V17.6625H200.25V12.7125H207.45Z" fill="#3A3E45"></path><path d="M165.263 18C165.263 21.7125 167.4 24.1875 170.775 24.1875C174.038 24.1875 176.288 21.7125 176.288 18C176.288 14.2875 174.15 11.8125 170.775 11.8125C167.4 11.8125 165.263 14.2875 165.263 18ZM175.388 18C175.388 20.5875 174.15 23.5125 170.775 23.5125C167.288 23.5125 166.163 20.5875 166.163 18C166.163 15.4125 167.4 12.4875 170.775 12.4875C174.15 12.4875 175.388 15.4125 175.388 18Z" fill="#3A3E45"></path><path d="M186.975 15.4125C186.975 13.275 185.512 12.0375 183.15 12.0375H178.312V23.9625H179.1V18.7875H183.15C185.512 18.9 186.975 17.6625 186.975 15.4125ZM178.987 18.1125V12.7125H182.812C184.95 12.7125 186.075 13.6125 186.075 15.4125C186.075 17.2125 185.062 18.1125 182.812 18.1125H178.987Z" fill="#3A3E45"></path><path d="M189.45 12.0375V23.9625H197.325V23.2875H190.238V12.0375H189.45Z" fill="#3A3E45"></path></svg>
            <h1 class="h3 mb-3 fw-normal">Enter your message to the world!</h1>
            <!--errors/infos-->
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success">
                    {{ Illuminate\Support\Facades\Session::get('message') }}
                </div>
            @endif
            <!--#errors/infos-->

            <!--fields-->
            <div class="form-floating">
                <input type="text" class="form-control mb-2" id="floatingName" placeholder="John Doe" name="name">
                <label for="floatingName">Your name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control mb-2" id="floatingEmail" placeholder="name@example.com" name="email">
                <label for="floatingEmail">Your email address</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control mb-1" id="floatingMessage" placeholder="Hello World" name="message">
                <label for="floatingMessage">Your message</label>
            </div>
            <!--#fields-->

            <button class="w-100 btn btn-lg btn-primary" type="submit">Submit message</button>
        </form>
    </div>
    @if(!$messages->isEmpty())
    <div class="m-auto w-50">
        <table class="table caption-top">
            <caption>Previous Messages</caption>
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Creation Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
                <td>{{$message->created_at->setTimezone(config('app.timezone', 'Europe/Helsinki'))->format('d-m-Y')}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="justify-content-center">
            {{$messages->links()}}
        </div>
    </div>
    @endif
</body>
</html>
