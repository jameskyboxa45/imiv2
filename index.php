<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>                                                                                                                            
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Web Graph</title>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
    
</head>
<body>

    <div class="container mt-3 bg-success">
        <h1 style="background-color:DodgerBlue;">P R O J E C T</h1>
<p style="background-color:Tomato;">เซ็นเซอร์วัดอุณหภูมิและวัดอัตราการเต้นหัวใจเพื่อตรวจความเสี่ยง...</p>
      <div id="test" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#test" data-slide-to="0" class="active"></li>
          <li data-target="#test" data-slide-to="1"></li>
          <li data-target="#test" data-slide-to="2"></li>
        </ul>
      
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://dm.lnwfile.com/pejlgo.jpg" alt="sensorวัดการเต้นของหัวใจ" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://fw.lnwfile.com/a80m9d.jpg" alt="sensoวัดอุณหภูมิร่างกาย" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://j.lnwfile.com/hiu7t7.jpg" alt="NodeMCU" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://www.programmersought.com/images/576/b733fc6c6efddb5d5295894739ea5200.png" alt="ThinkSpeak" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://fh.lnwfile.com/82d5cg.jpg" alt="Monitor" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBhUIBxIWFhUXGBcXGBcYFR0YGxoYHxgXGBoeHhsaHSgnGSAnHRcVITEkKCkuMi4wHyAzODMtOCgtLisBCgoKDg0OGxAQGjUlHSU1Ly0tNzc3Nys3Mjc1Ny8vKy0tLS8rLTUtNy8vLTA3Li03LS0tLSstNys3LSsvLi0rLf/AABEIAKgBLAMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABAUCBwEDBgj/xAA3EAACAQIDBgMFCAEFAAAAAAAAAQIDBAURIQYSEzFBURRhoSNxgbHwByIyQpHB0eFiJDNSkvH/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAwQCBQYBB//EACsRAQACAQMEAAMJAQAAAAAAAAABAgMEERIFITFBUWHBFCIyYnGx4fDxE//aAAwDAQACEQMRAD8A3iAAAAAAAAAABjUluQcsm8uiMgBFsr6ndpqOjXNPmSitxCxlv+JtNJLp3O7Dr6N3DdlpJc0BMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACrv1c29x4mk811XTLt/ZaHDSksmB1WlzTuqW/T+K6pkTELGUpeJtNJr1Oi5t6thX8Rbcuq/Zlla3NO6pcSn8V2YHRh99G6juT0muaJpXYhYOcvEW2k16nZh18rlcOppNc0BNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcSSkspFRcUKuH1/EW2qfNFwcSipR3ZcgOq1uKdzS4lL/wiYjYOo+PbaTXqR69Grh1fj2+sXzX11LS2uKdzS4lJ6fICNh1+rlcOrpNc0TiuxKwdV8e20mvUyw3EPELhVtJrmmBPAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAcSjGcd2XIp61Krhtxx6GsXzXf+y5OJxjOO7LkB129encUlUpPQh4nh7r+3t9Jr18mR6tOrhlxxqOsXzXf+y1t61O4pKpSejAh4biCuPY1tJrRp9SwK7E8P4/trfSa9fJjDMQ4/sLjSa016gWIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADGcI1I7s1mmU9WFXC6/FpawfNfXUujGcI1Ibs1oBjQrQr0lUpPNMh4nh/iFxaGk1yffyZFqRq4VX4lPWD5r65MtqFaFemqlN5pgQsNv3W9jcaTXfr/ZYlfieH+IXGoaTXJ9/JnGG37qvgXGk16gWIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADGpCNSG5NaFNNVcJuN+OsHzX1yZdmFWnCrTcKizTA4o1YV6aqU3mmQ8Tw/xPtaOk16+TITVbCbnOOsH9fqXVGrCvTVSm80wIGG4hxX4e40mvX+yyK7FMO8R7ehpUXqYYViar+wuNJrR5/XP5gWgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADCtShWpunUWaZSrjYRcd4P5fyXp03dtTu7d0KqzT7rMDKhWhXp8Sm9CsxuxnUSuLbmvxea8/Ui0lWwir97Pd5PPXNe/r8y8VxRdvx95buWbfZdc+wEDDMR4uVKvz6Pu+xjiW0uEYa3G6rRzXOK+8/0XI1rtttury68JgC05Oa/M/JLn9fDyNxaVLWKq4rOSb1UU85P9iC2aPTe6botr1i2aeO/iPbduH7aYFfXis6dXdnL8KmnHe8k+WflmehPmx1adam3Gi5RXV1Nfekbe+zXaSrjFi7S6k5Sgk4zf4pR5ZS7taLPr6v3Hl5TtKLX9LnT0508e/H0e1ABM04AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADrr0adek6dVZpmmvtQxi8sryWB28pKno5vlvtpSS9yTWZuk0xtu6dxtHcSqpPKWmfeMUvmiHPvx7Nr0eK/aOVo32/d5GzuXhqVaKUqnTNaQ+HV+RCvK11cVvEXrk3LXel193l7jC8jXpTyqa9c+76ki0vYVqPg73WP5ZdYv8Ago7zvtLtO1fvxG8+/wCHVbXU7eopU2ep2X2kq4HiCv7SClB6VafJ7vVx7NZZ/WnlLq1q2tXdlquaa5NC3rToz3oklbd/mxzYaZ6THmJfTGFYlaYvYRvbCSlCSzT+aa6NdUTDQmym011s/eeKs1vU5f7tHPn/AJR7SXqbvwnE7TGLCN9h81KElo+3dNdGuxcpfl+riNfoL6W/5Z8T9J/vdMABI14AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGn9ssLvLLGqtW5jpUc5U5fllm80s+jXLI3AR76ztr+2dveRUovmn9aPzML15QtaTUzgvy23j20DXt4zp5VFo/LUob2xnbSzWse5vTENg7GdnKFlKSlzipPNe7ln6mrcZwmvaVpW9zFprmmVMmKfbp9D1GmS20SpqFzSjZ8Ctqn+sfcRa1KVGeUuXR9GcXFKVKWTMOJKUFBvRENu3aW+rtPerso1ZUpb0D0eym1txs3f8elrTk/aU+kvNf8Zrv15M87aW1a8uFQtouUnySMr2zuLG4dC7i4yXNNGUZJiN9kWbFizROO/ff0+mcOvbfErGF7Zy3oTSlF+T+T6ZEk159it7UrbP1LSb0p1Pu+Sks8v+yk/ibDNhS3KsS+e6vB/wzWx/Cf8AAAGSuAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABTbR7P22N22U8lNL7sv2fdFyDyY38sqXmk8q+Xz/tHgdfD60qNxHJr607nlXFpn0rtBgdtjdm6NdZS/LLLVfyjTW0Wxl/hlducHl0ktYv4lbJidb0rqlLxwyTtKh2fxSrguKwv6KTcejJG0eK1doMWlfVI5Z5JJIkYbhlKD/1UJSfRckev2X2Gr3lyrm7g6dPnrzfkl+5HWkzHGF/Pq9NivOa34ojbf4/KHofskwmphuzsq1dZSqzcsv8AFJRX7nuDCjShQoqlSWSSSS7IzLla8Y2cRqc058tsk+5AAZIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4aTWTAA64W1vCW9CEU+6ikdoAAAAAAAAAAAAAAB//9k=" alt="ไฟ LED" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="https://j.lnwfile.com/q792v8.jpg" alt="อุปกรณ์เสียงเเจ้งเตือน" width="1100" height="500">
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#test" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#test" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

        
      
      </div>
      
      <div class="container bg-dark"><br>
        <h2 align = 'center' class="text-white"><b>PROJECT</b></h2>
  
         

        <h4 class="text-white">เซ็นเซอร์วัดอุณหภูมิและวัดอัตราการเต้นหัวใจเพื่อตรวจความเสี่ยง</h4>
        <div class = "row">
          <div class="col-3">
            <div class="row">
               <div class="col-20">
               <b class="text-white">Heartrate: </b>
                
                 
                   <span id ="lastHeartlate" class="text-white">  </span>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="class col-6">
                    <canvas id="myChart" width="400" height="200"></canvas>
                  </div>
                </div>

              
                <div class="row">
                  <div class="col-20">
                    
                    <b class="text-white">Update: </b> 
                 
                      <span id ="lastupdate" class="text-white">  </span>
                    
            </div>
          </div>
       </div> 
        <h5 class="text-white">สมาชิกในกลุ่ม</h5>
        <h5 class="text-white">นายรชต เตชะปฐมานนท์ รหัสประจำตัว 62107883</h5>
        <h5 class="text-white">นางสาว ปุญญิศา แก้วชื่น รหัสประจำตัว 62106182</h5>
        <h5 class="text-white">นางสาว นริสรา หมิดสะเเหล้ รหัสประจำตัว 62115662</h5>

        

                          <button type="button" class="btn btn-success" data-dismiss="modal">ปิดเสียงแจ้งเตือน</button>
    </div>
    </form>
</body>
<script>
  function loaddata(){
    let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=2"
       $.getJSON(url).done(function(data){
         console.log(data);
         let feed = data.feeds;
         console.log(feed);
             $("#lastHeartlate").text(feed[0].field1 + "ครั้งต่อวิ");
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
            color: 'white',
             labels:plot_data.xlabel,
             datasets:[{
               label: plot_data.label,
               data: plot_data.data,
               borderColor: 'rgba(222, 111,33, 0.4)	'
               
             }]
           }
     });
   }

  
    $(()=>{
       
       let url = "https://api.thingspeak.com/channels/1458407/feeds.json?results=2"
       
       $.getJSON(url).done(function(data){
        let channel=data.channel;
         let feed = data.feeds;
         console.log(feed);
      
       var plot_data=Object();
           var xlabel=[];
           var heartrate=[];
              
           
           $.each(feed,(k,v)=>{
              xlabel.push(v.entry_id);
              heartrate.push(v.field1);
          
              
           });
                      
           plot_data.xlabel=xlabel;
           plot_data.data=heartrate;
           plot_data.label=channel.field1;
            showchart(plot_data);

                  
       })
       .fail(function(error){

      });
       loaddata();

       $("button").click(function(){
$.post("https://api.thingspeak.com/update.json&quot",{
api_key: "MK9S5I8G2ECORCB7",
field2: "0" })
location.reload(true);
 });
  }    )
</script>
</html>
</html>