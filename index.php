<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Web Graph</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
  </head>
  
  </head>
  <body>
     <div class = "container"> 
       <div class="row">
        <div class="class col-6">
          <canvas id="myChart" width="400" height="200"></canvas>
        </div>
        <div class="class col-6">
          <canvas id="myChart1" width="400" height="200"></canvas>
        </div>
       </div>
     





       <div class = "row">
          <div class="col-3">
            <div class="row">
               <div class="col-4">
                 <b>Temperture</b>
                </div>
                 <div class="col-8">
                   <span id ="lastTemperature">  </span>

                 </div>
                </div>
               
               <div class="row">
                <div class="col-4">
                  <b>Humanity</b>
                </div>
                  <div class="col-8">
                    <span id ="lastHumanity">  </span>
 
                  </div>
 
                </div>
                <div class="row">
                  <div class="col-4">Update</div>
                    
                    <div class="col-8">
                      <span id ="lastupdate">  </span>
                    </div>
            </div>
          </div>
       </div>
     </div>
    
   

    
  </body>
  <script>
    function loaddata(){
      let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=2"
         $.getJSON(url).done(function(data){
           console.log(data);
           let feed = data.feeds;
           console.log(feed);
               $("#lastTemperature").text(feed[0].field2 + "C");
               $("#lastHumanity").text(feed[0].field1 + "%");
               $("#lastupdate").text(feed[0].created_at);
               
               

         })
         .fail(function(error){


         });
    }
     function showchart(plot_data){
       var ctx = document.getElementById('myChart').getContext('2d');

       
       var myChart = new Chart(ctx,{
             type: 'line' ,
             data:{
               labels:plot_data.xlabel,
               datasets:[{
                 label: plot_data.label,
                 data: plot_data.data
               }]
             }
       });
     }
     function showchart1(plot_data1){
       var ctx = document.getElementById('myChart1').getContext('2d');

       
       var myChart1 = new Chart(ctx,{
             type: 'line' ,
             data:{
               labels:plot_data1.xlabel,
               datasets:[{
                 label: plot_data1.label,
                 data: plot_data1.data
               }]
             }
       });
     }
      $(()=>{
         
         let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=50"
         
         $.getJSON(url).done(function(data){
          let channel=data.channel;
           let feed = data.feeds;
           console.log(feed);
        
         var plot_data=Object();
             var xlabel=[];
             var temp=[];
             var huni=[];
             
           
             
             $.each(feed,(k,v)=>{
                xlabel.push(v.entry_id);
                temp.push(v.field1);
                huni.push(v.field2);
               
                
             });
             
              
             plot_data.xlabel=xlabel;
             plot_data.data=temp;
             plot_data.label=channel.field1;
              showchart(plot_data);

              var plot_data1=new Object();
              plot_data1.xlabel=xlabel;
             plot_data1.data=huni;
             plot_data1.label=channel.field2;
              showchart1(plot_data1);
              
         })
         .fail(function(error){


         });
         loaddata();
         
         
        
      

      
    }    )
  </script>
</html>