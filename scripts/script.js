/*
* Le code Javascript
* */


function supprimerLivre(){
    const listItemDeleteButton = document.querySelectorAll('#book-list ul li .delete');
    Array.from(listItemDeleteButton).forEach(function(item){
        item.addEventListener('click', (e) => {
            const li = e.target.parentElement;
            li.parentNode.removeChild(li);

        });
    });
}

supprimerLivre();


