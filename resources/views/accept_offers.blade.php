<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Принятые предложения</title>
</head>
<body>
@foreach ($offers as $offer)
<div class="accept-content">
    {{$offer->text}}
    {{$offer->name}}
    {{$offer->status}}
</div>
    @endforeach
</body>
</html>

<style>
    .accept-content{
        margin-top: 15px;
        padding: 10px;
        background-color: #7dedbd;
        max-width: 100px;
    }
</style>