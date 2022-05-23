document.querySelectorAll('.edite').forEach(function(btn){
    btn.addEventListener('click',function(event){
            let select = event.target.closest('.item');
            let id = select.querySelector('.id').textContent;
            let username = select.querySelector('.username').textContent;
            let genre = select.querySelector('.genre').textContent;
            let classe = select.querySelector('.class').textContent;
            let parent = select.querySelector('.parent').textContent;
            let adresse = select.querySelector('.adresse').textContent;
            let date_de_naissance = select.querySelector('.date_de_naissance').textContent;
            let email = select.querySelector('.email').textContent;
          
            document.querySelector('#editModal .id').value = id;
            document.querySelector('#editModal .username').value = username;
            document.querySelector('#editModal .genre').value = genre;
            document.querySelector('#editModal .class').value = classe;
            document.querySelector('#editModal .parent').value = parent;
            document.querySelector('#editModal .adresse').value = adresse;
            document.querySelector('#editModal .date_de_naissance').value = date_de_naissance;
            document.querySelector('#editModal .email').value = email;
    })
  })