<html>

<body>
         <form action="/peliculas/store" method="POST">

            @csrf
         <input type="text" name="titulo">
         <textarea name="synopsis" id="" cols="30" rows="10"></textarea> 
        <button type="submit"> Guardar </button> 
        </form>    

</body>


</html>