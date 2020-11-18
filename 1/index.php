<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<style>
    body{
        font-family: 'Prompt', sans-serif;

    }
    img{
        margin:auto;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                    $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
                    $response = file_get_contents($url);
                    $result = json_decode($response);

                    echo "<div class='card' style='width: 33%; text-align: center; padding: 5vh;'>";
                        foreach($result->items as $items){
                            $arr1 = json_decode($items, true);
                            foreach($arr1["album"]->images as $images){
                                $arr2 = json_decode($images, true);
                                echo "<img src='$arr2['url']' class='card-img-top'>"; 
                            }
                        }

                    echo "<div class='card-body' style='text-align: center; padding: 5vh;'>";
                        foreach($result->items as $items){
                            $arr1 = json_decode($items, true);
                            foreach($arr1["album"]->artists as $artists){
                                echo "<h4 class='card-title text-info'>$arr1["name"]</h4><hr>"; 
                                $arr2 = json_decode($artist, true);
                                echo "<p class='card-text'>"."Release date: "."$arr2["name"]"."</p><hr>"; 
                                echo "<p class='card-text'>"."Avaliable: "."count($arr1["available_markets"])"."</p>"; 
                            }

                        }
                ?>

            </div>
        </div>
    </div>
    


</body>
</html>