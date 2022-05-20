<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout Etudaint</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" data-parsley-validate>
          <div class="modal-body d-flex gap-3">
            <input class="form-control w-50" type="text" placeholder="Usermane" required data-parsley-minlength="3">
            <select class="form-select w-25" required>
              <option selected>Genre</option>
              <option>Male</option>
              <option>Female</option>
            </select>
            <input class="form-control w-25" type="date" placeholder="Date de naissance" required>
          </div>
          <div class="modal-body d-flex gap-3">
            <input class="form-control form-control-lg w-75" type="email" placeholder="Email Adress" required data-parsley-type="email">
            <select class="form-select w-25" required>
              <option selected>Choose Your Class</option>
              <option>Class 1</option>
              <option>Class 2</option>
              <option>Class 3</option>
            </select>
          </div>
          <div class="modal-body d-flex gap-3">
            <input class="form-control form-control-lg" type="text" placeholder="Parents" required data-parsley-minlength="3">
          </div>
          <div class="modal-body">
            <textarea class="form-control form-control-lg" required>Adresse</textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <input type="button" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
    </div>
  </div>
</div>