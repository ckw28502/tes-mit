@extends("master")
<!-- Title -->
@section("title","Login")
<!-- CSS -->
@section('css')
    <style>
        
    </style>
@endsection
@section('body')
    <!--Navbar-->
    <nav class="px-5 py-3">
        <i class="fa-solid fa-bars fa-2xl"></i>
        <i class="fa-solid fa-magnifying-glass fa-2xl" style="float: right"></i>
    </nav>
    <!--Banner-->
    <div class="container mw-100 py-3 bg-dark text-light">
        <center>
            <h1 >Totally Sale</h1><br>
            <p>
                It was some time before he obtained <br>
                any answers, and the reply, when made, <br>
                was superficial.
            </p>
        </center>
    </div>
    <!-- Item List -->
    <div id="root" class="bg-secondary container"></div>
@endsection
<!-- Javascript -->
@section('js')
    <script>
        const root=ReactDOM.createRoot(document.getElementById("root"));
        const new_list=[]
        fetch('https://fakestoreapi.com/products')
            .then(res=>res.json())
            .then(json=>IsiData(json))
            
    function IsiData(data) { 
        var html=""
        data.forEach(d => {
            html+=`<a href="items/${d.id}"><div class="card col-lg-3 col-md-6 d-inline-block mx-1 my-2
            " style="width: 18rem;">
                        <img class="card-img-top" src="${d.image}" alt="${d.title}">
                        <div class="card-body">
                            <h5 class="card-title">${d.title}</h5>
                            <p class="card-text">${d.category}</p>
                        </div>
                        </div></a>`
        });
        $("#root").html(html);
     }
    </script>
@endsection
