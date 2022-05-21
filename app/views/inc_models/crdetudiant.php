<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Etudaint</h5>
      </div>
      <form method="POST" action="<?php echo URLROOT ;?>/Etudiants/add" data-parsley-validate>
        <div class="modal-body">
          <div class="modal-body d-flex gap-3">
            <div class="w-75">
              <input class="form-control" name="username" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            </div>
            <div class="w-25">
              <select class="form-select" name="genre" required>
                <option>Genre</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          </div>
          <div class="modal-body d-flex gap-3">
            <div class="w-75">
              <input class="form-control" name="email" type="email" placeholder="Email Adress" required data-parsley-type="email">
            </div>
            <div class="w-25">
              <select class="form-select" name="class" required>
                <option>Chose Your Class</option>
                <option>Class 1</option>
                <option>Class 2</option>
                <option>Class 3</option>
              </select>
            </div>
          </div>
          <div class="modal-body d-flex align-items-center gap-3">
            <div class="w-75">
              <input class="form-control" name="parent" type="text" placeholder="Parent" required data-parsley-minlength="3">
            </div>
            <div class="w-25">
              <input class="form-control" name="date_de_naissance" type="date" placeholder="Date de naissance" required>
            </div>
          </div>
          <div class="modal-body">
            <textarea class="form-control" name="adresse" placeholder="Adresse" required></textarea>
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