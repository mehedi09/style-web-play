<section class="container" id="contact">
  <section class="col-md-6 col-sm-8">
    <form class="form-horizontal" methord>
  <fieldset>
    <legend><span class="Norway">Kontakt oss</span>
      <span class="English">Contact Us</span>
  </legend> 
         <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">
        <span class="Norway">Navn</span>
      <span class="English">Name</span></label>
      <div class="col-lg-10">    
        <span class="Norway"><input type="text" class="form-control" id="inputName" placeholder="Navn"></span>
         <span class="English"><input type="text" class="form-control" id="inputName" placeholder="Name"></span></label>
      </div>
    </div>
      <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">
        <span class="Norway">E-post</span>
      <span class="English">Email</span></label>
      <div class="col-lg-10">
         <span class="Norway"><input type="text" class="form-control" id="inputEmail" placeholder="E-post"></span>
         <span class="English"><input type="text" class="form-control" id="inputEmail" placeholder="Email"></span></label>    
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">
        <span class="Norway">Cell Nei</span>
      <span class="English">Cell No</span></label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputCellNo" placeholder="+47">
       </div>
    </div>
    <div class="form-group">
       <label for="inputFeedBack" class="col-lg-2 control-label">
        <span class="Norway">Tilbakeme: </span>
         <span class="English">Feedback</span></label>
         <div class="col-lg-10">
        <span class="Norway"><textarea class="form-control" rows="3" id="inputTextArea" placeholder="Send oss ​​tilbakemelding"></textarea></span>
         <span class="English"><textarea class="form-control" rows="3" id="inputTextArea" placeholder="Send Us Feedback"></textarea></span></label>     
      </div>
    </div>
      <div class="form-group">
       <label for="inputMessage" class="col-lg-2 control-label">
        <span class="Norway">Melding</span>
      <span class="English">Message</span></label>
         <div class="col-lg-10">
        <span class="Norway"><textarea class="form-control" rows="3" id="inputTextArea" placeholder="Send oss en melding"></textarea></span>
        <span class="English">  <textarea class="form-control" rows="3" id="inputTextArea" placeholder="Send Us a message"></textarea></span></label>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <span class="Norway"><input class="btn btn-default" type="submit" name="cancel" value="Avbryte" onclick="cancel()" /></span>
        <span class="English"><input class="btn btn-default" type="submit" name="cancel" value="Cancel" onclick="cancel()" /></span>
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
         <span class="Norway"><button type="submit" class="btn btn-primary">sende inn</button></span>
         <span class="English"><button type="submit" class="btn btn-primary">Submit</button></span>
         </div>
    </div>
  </fieldset>
</form>
  </section>
  <section class="col-md-6 col-sm-4">
    <div class="well"><h3>Style Play <span class="Norway">Melding</span>
      <span class="English">Message</span></label></h3>
    &nbsp;&nbsp; &nbsp;&nbsp;  <span class="Norway">Vårt produkt vil bli levert hjem til deg i løpet av Vestfold. Hvis du bor utenfor Vestfold, vil post kostnad legges til.</span>
      <span class="English">Our product will be delivered to your home within Vestfold. If you live outside of Vestfold, postal charge will be added.</span></label>
    </div>
     </section>
</section>

