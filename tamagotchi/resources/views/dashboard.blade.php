<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="{{asset('sprites/png/cat/Idle (1).png')}}" />
    <script src="assets/js/tamagotchi.js"></script>
    <link rel="stylesheet" href="{{asset('css/tamagotchi.css')}}">

</head>

<body>
    <main>
        <div class="container jumbotron">

            <div class="col-xs-12 container">
                <center>
                    <h1>Tamagotchi</h1>
                </center>
            </div>

            <div>
                
                <div class="col-sm-6">

                    {{-- USER'S INFO --}}
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="rounded" src="{{asset('sprites/png/cat/Idle (1).png')}}" height="100%" width="100%" alt="Card image cap">
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="card col-sm-6">
                            <div class="card-body">
                                <h3 class="card-title">Azlan</h3>
                                <h5 class="card-title">Age : 21 years</h5>
                                <h5 class="card-title"><i>syedsalifmoin@gmail.com</i></h5>
                            </div>
                        </div>
                        <div class="col-sm-1"></div> 
                    </div>

                    {{-- USER'S PET'S INFO --}}
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="rounded" src="{{asset('sprites/png/cat/Idle (1).png')}}" height="100%" width="100%" alt="Card image cap">
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="card col-sm-6">
                            <div class="card-body">
                                <h3 class="card-title">Gatagotchi</h3>
                                <h5 class="card-title">Age : 6 months</h5>
                            <a href="{{url('/view-pet')}}"><button class="btn btn-success">View Pet</button></a>
                            </div>
                        </div>
                        <div class="col-sm-1"></div> 
                    </div>

                </div>

                <div class="col-sm-6">
                    <div>
                        <h3>Log</h3>
                        <div class="card">
                            <img class="img-fluid" src="https://www.quickanddirtytips.com/sites/default/files/images/5360/line_graph.png" width="80%" alt="Card image cap">
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <div class="col-sm-6">
                    <div>
                        <h3>Attendence</h3>
                        <div class="card">
                                <img class="img-fluid" src="https://www.quickanddirtytips.com/sites/default/files/images/5360/line_graph.png"width="80%" alt="Card image cap">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <h3>Badges</h3>
                        <div class="card">
                                <img class="img-fluid" src="https://www.badgehungry.com/wp-content/uploads/2011/07/pogo_generic_rank1.png" width="60%" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>