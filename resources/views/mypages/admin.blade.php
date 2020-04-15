<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-commerce</title>
        <link href="style/normalize.css" rel="stylesheet">
        <link href="style/main.css" rel="stylesheet">
    </head>

    <body>
        <div class="hhead">
            <div class="container">
                <div class="nav">
                    <div class="left">E-<span>commer</span>ce</div>
                    <div class="right">
                        <ul id="nav">
                            <li ><a id="active" href="#" data-text="Homepage" >Homepage</a></li>
                            <li><a href="#" data-text="category 1">category 1</a></li>
                            <li><a href="#" data-text="category 2">category 2</a></li>
                            <li><a href="#" data-text="category 3">category 3</a></li>
                            <li><a href="editcat" data-text="ُEdit Category">Edit Category</a></li>
                            <li><a href="editproduct" data-text="Edit Product">Edit Product</a></li>
                            <li style="margin-right: 0px"><a href="history" data-text="cart">cart</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="pd">
            <div class="container">
                <div class="father">
                    <div class="child">
                        <img src="imgs/2/1.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat2<br>
                            product price : 120$<br>
                            <button><a href="cat/1" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/3/2.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat3<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/2/2.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat2<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/3/3.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat3<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/1/2.jpeg" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat1<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/1/3.jpeg" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat1<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/2/3.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat2<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/1/4.jpeg" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat1<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/1/5.jpeg" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat1<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/3/4.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat3<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/1/6.jpeg" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat1<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                    <div class="child">
                        <img src="imgs/2/5.png" alt="hamada" />
                        <div class="text">
                            product name : asdasd<br>
                            product id : 112<br>
                            product category : cat2<br>
                            product price : 120$<br>
                            <button><a href="#" >Read More</a></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft">
            <div class="container">
                copyright reserved to &copy; section 5 team
            </div>

        </div>

    </body>
    <script>
        var active;
        var nav=document.getElementById("nav");
        nav.addEventListener("click",function (e) {
            active=document.getElementById("active");
            e.target.setAttribute("id","active");
            active.removeAttribute("id");
        })
    </script>
</html>
