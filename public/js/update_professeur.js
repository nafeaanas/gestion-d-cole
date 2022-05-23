document.querySelectorAll('.edite_professeur').forEach(function(btn){
    btn.addEventListener('click',function(event){
            let select = event.target.closest('.item_professeur');
            let id = select.querySelector('.id').textContent;
            let username = select.querySelector('.username').textContent;
            let genre = select.querySelector('.genre').textContent;
            let classe = select.querySelector('.class').textContent;
            let matiere = select.querySelector('.matiere').textContent;
            let phone = select.querySelector('.phone').textContent;
          
            document.querySelector('#editModal .id').value = id;
            document.querySelector('#editModal .username').value = username;
            document.querySelector('#editModal .genre').value = genre;
            document.querySelector('#editModal .class').value = classe;
            document.querySelector('#editModal .matiere').value = matiere;
            document.querySelector('#editModal .phone').value = phone;
    })
  })