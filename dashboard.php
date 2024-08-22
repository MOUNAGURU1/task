<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<style>
    .card{
        border:2px solid orange;
        width:400px;
        margin:20px;
        height:400px;
        background-color:blue;
    }
    h3{
        text-align:center;
    }
    h1{
        text-align:center;
    }
    .row{
        display: flex;
        flex-direction:column;
        width: 300px;
        
        
        
        
    }
    button{
        margin-left:50px;
        height:50px;
    }
</style>
<body>
    <div class="card">
        <h1>Admin Dashboard</h1>
        <div class="row">
           <a href="mech.php"> <button>MECHANICAL</button></a><br>
            <button>COMPUTER SCIENCE</button><br>
            <button>ELCTRONICS</button><br>
            <button>INFORMATION TECHNOLOGY</button>
                


        </div>


    </div>
</body>
</html>