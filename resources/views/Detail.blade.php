@extends("master")
<!-- Title -->
@section("title","Detail")
<!-- CSS -->
@section('css')
    <style>
        
    </style>
@endsection
@section('body')
    <!--Navbar-->
    <nav class="px-5 py-3">
        <i class="fa-solid fa-arrow-left fa-2xl"></i>
        <i class="fa-solid fa-plus fa-2xl" style="float: right"></i>
    </nav>
    <!--Banner-->
    <div class="container mw-100 py-3 bg-dark text-light">
        <center>
            <h1 id="title"></h1>
        </center>
    </div>
    <!-- Item List -->
    <div id="root" class="bg-secondary container"></div>
@endsection
<!-- Javascript -->
@section('js')
    <script>
        const root=ReactDOM.createRoot(document.getElementById("root"));
        fetch('https://fakestoreapi.com/products/'+{{$id}})
            .then(res=>res.json())
            .then(json=>IsiData(json))
            
    function IsiData(d) { 
        $("h1").html(d.title)
        $("#root").html(`<center><div class="card col-lg-12 col-md-12 d-inline-block mx-1 my-2
            " style="width: 18rem;">
                        <img class="card-img-top" src="${d.image}" alt="${d.title}">
                        <div class="card-body">
                            <h5 class="card-title">${d.category}</h5>
                            <h5 class="card-text">${d.price}</h5>
                            <p class="card-text">${d.description}</p>
                        </div>
                        </div></center>`);
     }
    </script>
@endsection
