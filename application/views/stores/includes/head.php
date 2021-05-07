    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> -->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />

        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">


        
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>




        <link rel="stylesheet" href="https://supremeking23.github.io/solar-system-view-v2/slick/slick/slick.css">
        <link rel="stylesheet" href="https://supremeking23.github.io/solar-system-view-v2/slick/slick/slick-theme.css">
        <script src="https://supremeking23.github.io/solar-system-view-v2/slick/slick/slick.min.js"></script>

        
        <link rel="stylesheet/less" type="text/css" href="<?= base_url()?>assets/less/site.less" />
        <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

        <script src="<?= base_url()?>assets/js/jquery.fontstar.js"></script>



        
        
        <script>
            $(document).ready(function(){
                $('.multiple-items').slick({
                    infinite: true,
                    slidesToShow: 5,
                    slidesToScroll: 2
                });

                $('.star').fontstar({},function(value,self){
                    console.log("hello "+value);
                });

             

            })
        </script>

        <title>Village88 Store</title>
    </head>