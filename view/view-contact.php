<section class="container" id="contact">
  <section class="col-md-6 col-sm-8">
    <form class="form-horizontal">
  <fieldset>
    <legend>Contact Us</legend>
    
         <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputName" placeholder="Name">
      </div>
    </div>
      <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Cell No</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputCellNo" placeholder="+880">
      </div>
    </div>
    <div class="form-group">
       <label for="inputEmail" class="col-lg-2 control-label">Message</label>
         <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="inputTextArea" placeholder="Send Us a message"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input class="btn btn-default" type="submit" name="cancel" value="Cancel" onclick="cancel()" />
          <?php

            if($_GET){
                if(isset($_GET['cancel'])){
                    cancel();
                }elseif(isset($_GET['submit'])){
                    submit();
                }
            }

          function cancel()
          {
            header('Location: index.php');
          }

          ?>

        <button type="submit" class="btn btn-primary">Submit</button>

      </div>
    </div>
  </fieldset>
</form>

  </section>



  <section class="col-md-6 col-sm-4">

    <div class="well"><h5>Message</h5>
      You can give some message here......



    </div>


  </section>


</section>