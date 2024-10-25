<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{route('index.store')}}" method="POST">
        @csrf
        <h2>Добавить предложение</h2>
        <div class="content">
        <div class="content-text">
            <label form="text">Напишите текст</label>
            <textarea id="text"name="text" class="text"></textarea>
        </div>

        <div class="content-name">
            <label form="name">Напишите название</label>
            <textarea id="name"name="name"></textarea>
        </div>
        <button type="submit">Создать</button>
    </div>
    </form>

    @foreach ($offers as $offer)
    <div class="content-offers">
        {{$offer->text}}
        {{$offer->name}}
        {{$offer->status}}
    </div>
    
    @endforeach
    <a href="{{route('accept_offers')}}">Перейти к принятым заказам</a>
</body>
</html>

<style>
    .content-offers{
        margin-top: 15px;
        padding: 10px;
        background-color: #7dedbd;
        max-width: 100px;
    }
</style>