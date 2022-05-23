<!-- Modal Add Professeur -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Professeur</h5>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/Professeurs/add" data-parsley-validate>
        <div class="modal-body">
          <div class="modal-body d-flex gap-3">
            <div class="w-75">
              <input class="form-control" name="username" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            </div>
            <div class="w-25">
              <select class="form-select" name="genre" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </div>
          <div class="modal-body d-flex gap-3">
            <div class="w-75">
              <input class="form-control" name="matiere" type="text" placeholder="Matiére" required>
            </div>
            <div class="w-25">
              <select class="form-select" name="class" required>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <input class="form-control" name="phone" type="text" placeholder="Phone" required data-parsley-minlength="6" data-parsley-minlength-message="minlength six number" data-parsley-type="digits" data-parsley-type-message="only numbers">
          </div>
        </div>
        <div class="modal-footer pb-0">
          <input type="button" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
          <input type="submit" class="btn btn-primary" value="Save changes">
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Edite Professeur -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title xyz" id="exampleModalLabel">Edite Professeur</h5>
        <p class="text-danger text-center"><?php if(isset($data['error'])){ echo $data['error'] ;} ?> </p>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/Professeurs/edite" data-parsley-validate>
        <div class="modal-body">
          <div class="modal-body d-flex gap-3">
            <input class="form-control d-none id" name="id" type="text">  
            <div class="w-75">
              <input class="form-control username" name="username" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            </div>
            <div class="w-25">
              <select class="form-select genre" name="genre" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </div>
          <div class="modal-body d-flex gap-3">
            <div class="w-75">
              <input class="form-control matiere" name="matiere" type="text" placeholder="Matiére" required>
            </div>
            <div class="w-25">
              <select class="form-select class" name="class" required>
                <option value="1">Class 1</option>
                <option value="2">Class 2</option>
                <option value="3">Class 3</option>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <input class="form-control phone" name="phone" type="text" placeholder="Phone" data-parsley-type="digits" data-parsley-type-message="only numbers">
          </div>
        </div>
        <div class="modal-footer pb-0">
          <input type="button" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
          <input type="submit" class="btn btn-primary" value="Save changes">
        </div>
      </form>
    </div>
  </div>
</div>


<style>
  .parsley-errors-list{
      color: red;
      list-style: none;
      font-size: 0.8em;
  }
</style>