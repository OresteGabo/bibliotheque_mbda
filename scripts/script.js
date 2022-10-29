/*
* Le code Javascript
* */


function supprimerLivre(){
    const listItems = document.querySelectorAll('#book-list ul li');
    Array.from(listItems).forEach(function(item){
        item.addEventListener('click', (e) => {
            const li = e.target.parentElement;
            li.parentNode.removeChild(li);

        });
    });
}

supprimerLivre()
