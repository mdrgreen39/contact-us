<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>


<body>
    <main>
        <div class="thanks__content">
            <div class="thanks__heading">
                <h2>お問い合わせありがとうございます</h2>
            </div>
            <form class="thanks__button" action="/" method="get">
                @csrf
                <button class="thanks__button-submit" type="submit">
                    HOME
                </button>
            </form>
        </div>
    </main>
</body>