
<form action="rfo-notifications-por.php" method="POST">

    <div class="form-group">
        <div class="form-row">
      
          <div class="form-group col-md-5">
            <label for="id"><b>ID (Put value = <?php echo $row['id']; ?> in the id field )</b></label></br>
            <input type="text" class="form-control" id="id" name="id" placeholder="ID" required>
          </div>

          <div class="form-group col-md-6">
              <label for="commencement_date" style="margin-left: 100px;"><b>Commencement Date ( प्रारंभ दिनांक ) </b></label></br>
              <input type="date" id="commencement_date" name="commencement_date" style="margin-left: 100px;" required>
          </div>
        </div>
      </div>

    <div class="form-group">
        <label for="first_reaction"><b>First reaction ( प्रथम प्रतिवृत्त )</b></label>
        <textarea class="form-control" id="first_reaction" name="first_reaction" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="desc_of_crime"><b>Description of the crime ( अपराधाचे वर्णन )</b></label>
        <textarea class="form-control" id="desc_of_crime" name="desc_of_crime" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="investigation"><b>Investigation ( तपासणी )</b></label>
        <textarea class="form-control" id="investigation" name="investigation" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="supplementory_particulars_of_offence"><b>Supplementary particulars of offence ( अपराधाचा पुरवणी तपशील )</b></label>
        <textarea class="form-control" id="supplementory_particulars_of_offence" name="supplementory_particulars_of_offence" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="arrangements"><b>What arrangement was made ( कोणती व्यवस्था केली ) </b></label>
        <textarea class="form-control" id="arrangements" name="arrangements" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label> <b>Name and place of the accused ( आरोपीचे नाव व ठिकाण )</b></label></br>
          <div class="form-row">
      
            <div class="form-group col-md-6">
              <label for="accused_name">Name ( नाव )</label>
              <input type="text" class="form-control" id="accused_name" name="accused_name" placeholder="नाव ">
            </div>

            <div class="form-group col-md-6">
              <label for="accused_address">Address ( पत्ता )</label>
              <input type="text" class="form-control" id="accused_address" name="accused_address" placeholder="पत्ता">
            </div>
          </div>
      </div>

      <div class="form-group">
        <label for="accused_statement"><b>Accused's statement ( आरोपीची जबानी )</b></label>
        <textarea class="form-control" id="accused_statement" name="accused_statement" rows="3" required></textarea>
      </div>

    <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:40%">

</form>
