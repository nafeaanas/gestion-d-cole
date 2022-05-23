document.querySelectorAll('.edite_parent').forEach(function(btn){
    btn.addEventListener('click',function(event){
            let select = event.target.closest('.item_parent');
            let id = select.querySelector('.id').textContent;
            let username = select.querySelector('.username').textContent;
            let genre = select.querySelector('.genre').textContent;
            let job = select.querySelector('.job').textContent;
            let adresse = select.querySelector('.adresse').textContent;
            let phone = select.querySelector('.phone').textContent;
          
            document.querySelector('#editModal .id').value = id;
            document.querySelector('#editModal .username').value = username;
            document.querySelector('#editModal .genre').value = genre;
            document.querySelector('#editModal .job').value = job;
            document.querySelector('#editModal .adresse').value = adresse;
            document.querySelector('#editModal .phone').value = phone;
    })
  })