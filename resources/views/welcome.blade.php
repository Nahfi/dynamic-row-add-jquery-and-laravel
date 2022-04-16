<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="antialiased">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <button id="add" type="submit" class="btn btn-success">add</button>
                    <form action="{{ url('/dynamic') }}" method="post">
                        @csrf

                     <div class="row my-4">
                         <div class="col-lg-5">
                             <div id="input">

                             </div>
                         </div>
                     </div>

                      <button type="submit" class="btn btn-success">submit</button>
                    </form>
                  
                </div>
            </div>
        </div>
    

    </body>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        
        $(function(){
            let c=0;
            $(document).on('click','#add',function(e){
                c+=1;
                $('#input').append(`
                        <label>name</label>
                       <input type="text" name="name[]" class="form-control mt-2" >
                `);
                
                e.preventDefault()

            })

        })
    </script>
</html>
