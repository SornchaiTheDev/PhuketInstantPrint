
<div class="modal fade" id="AllPhoto" tabindex="-1" role="dialog" aria-labelledby="AllPhoto"  >
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">รูปถ่าย</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <div class="modal-body">
  <div class="container-fluid">
  <div class="scroll" id="scrollbar">
 
 
  <div id="modalrefresh" class="row p-4"></div>

  </div>
 
  </div>
  
  </div>
  <div class="modal-footer">
  
  </div>
   
      </div>
  </div>  
</div>

          
    <!--Time Update-->

  <script>
  $(document).ready(function(){
    reload();
    $( "#clock_reload" ).load("clock.php");
    function reload(){
      setTimeout(function(){
      $('#clock_reload').load('clock.php');  
      reload();
    }, 2000);
    
    }
        
      
});

  </script>
    
  
 