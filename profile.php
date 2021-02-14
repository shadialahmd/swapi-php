<?php

include_once "read.php";
$url="https://swapi.dev/api/people/";
$r=new Read();
$data=json_decode($r->getall($url),true);

print_r($data);

?>

<html>
    <head>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <style>
            *{
  font-family: 'Lato';
}

#profile-grid { overflow: auto; white-space: normal; }
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:6px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
        </style>
        <script>
            $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
    	event.preventDefault();
    	var content = $('.modal-body');
    	content.empty();
      	var title = $(this).attr("title");
      	$('.modal-title').html(title);      	
      	content.html($(this).html());
      	$(".modal-profile").modal({show:true});
    });

  });
        </script>
    </head>
    <body>
<section id="profiles" class="page">
  
  <div class="container">
    
      <div class="content text-center">
          <div class="heading">
              <h2>Bootstrap Lightbox using Modal</h2>
              <hr>
          </div>
      </div>
          
      <div class="container-fluid">
          <div class="row" id="profile-grid">
              

              <?php
              
                foreach($data["results"] as $d){
                    ?>

                     <div class="col-sm-4 col-xs-12 profile">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail">
                                        <a href="#" title="image 1" class="thumb">
                                            <img src="//dummyimage.com/900x350.png/c0c0c0&amp;text=image0x201" class="img-responsive img-rounded" data-toggle="modal" data-target=".modal-profile-lg">
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                    <p class="profile-name"><?php echo $d["name"];?></p>
                                    <p>simple description of image 1</p>
                                    </div>
                                </div>
                            </div>

                  <?php      
                }  
            
              ?>

              <button><a href="<?php $r->getall("http://swapi.dev/api/people/?page=2")?>">Next</a></button>


             

              </div>
      </div>
  </div>

</section>

<!-- .modal-profile -->
<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button class="close" type="button" data-dismiss="modal">×</button>
                  <h3 class="modal-title"></h3>
              </div>
              <div class="modal-body">
              </div>
              <div class="modal-footer">
                  <button class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
  
      </div>
  </div>
<!-- //.modal-profile -->
</body>
</html>