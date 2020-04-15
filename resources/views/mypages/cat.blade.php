<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-commerce</title>
        <link href="style/normalize.css" rel="stylesheet">
        <link href="../style/cat.css" rel="stylesheet">
    </head>
    <body>
        <div class="pd">
            <div class="container">
                <div class="pairent">
                @for($i=1;$i<=6;$i++)
                        <div class="child2">
                        @if($n==1)
                            <img src="../imgs/{{$n}}/{{$i}}.jpeg" alt="hamada" />
                        @else
                            <img src="../imgs/{{$n}}/{{$i}}.png" alt="hamada" />
                        @endif
                            <div style="text-align: left">
                                <p><span>product name:</span>asd</p>
                                <p><span>product category:</span>cat {{$n}}</p>
                                <p><span>product price:</span>120$</p>
                                <button><a href="#" >add to cart</a></button>
                            </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    </body>











</html>
