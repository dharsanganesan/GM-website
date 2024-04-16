<form  method="POST">
 <?php
$eid=$_GET['editid'];
$ret=mysqli_query($conn,"select * from tblusers where ID='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
<h2>Update </h2>
<p class="hint-text">Update your info.</p>
<div class="form-group">
<div class="row"> 
<div class="form-group">
<div class="control">
                    <input type="date"  class="date input"  name="outdate"required>
                    <label>Out-Date</label>
                    </div>
                    <div>
                        <select name="choice" id="cars" class="come" requried>
                          <option value="choose" style="color:#21E6C1;">Choose</option>
                          <option value="folded"  style="color:#21E6C1;">Folded</option>
                          <option value="unfolded"  style="color:#21E6C1;">Unfolded</option>
                        </select>
                      </div>
                      <div class="control">
                        <input type="text" maxlength="10" name="bending" required>
                        <label>Pending saree</label>
                      </div>       
<?php 
}?>
<div class="form-group">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>