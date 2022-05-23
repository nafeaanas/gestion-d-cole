<!-- Modal Add Etudiant -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Administrateur</h5>
        <p class="text-danger text-center"><?php if(isset($data['error'])){ echo $data['error'] ;} ?> </p>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/Administrateurs/add" data-parsley-validate>
        <div class="modal-body">
          <div class="modal-body w-100 d-flex gap-3">
            <div class="w-50">
              <input class="form-control" name="nom" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            </div>
            <div class="w-50">
              <input class="form-control" name="prenom" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            </div>
          </div>
          <div class="modal-body w-100 d-flex gap-3">
            <div class="w-75">
              <input class="form-control" name="email" type="email" placeholder="Email Adress" required data-parsley-type="email">
            </div>
            <div class="w-25">
              <select class="form-select" name="role" required>
                <option value="administrateur">Administrateur</option>
                <option value="formateur">Formateur</option>
                <option value="etudiant">Etudiant</option>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <input class="form-control" name="password" type="password" placeholder="Password" required data-parsley-minlength="3">
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