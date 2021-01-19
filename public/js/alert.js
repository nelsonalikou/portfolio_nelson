function  sweetAlertError(){
    Swal.fire('Désolé...', 'Une erreur est survenue !', 'error')
}

function sweetAlertSuccess(){
    Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this imaginary file!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deleted!',
                'Your imaginary file has been deleted.',
                'success'
            )
            // For more information about handling dismissals please visit
            // https://sweetalert2.github.io/#handling-dismissals
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            )
        }
    })
}

function  sweetAlertSuccess2(){
    Swal.fire('Bravooo...', 'Téléchargement effectué !', 'success')
}

//var x=0;
function compteur()
{
    var elt = document.getElementById('nbClicks');
    var monTexte = elt.innerText || elt.textContent;
    var x = parseInt(monTexte);
    x = x+1;
    document.getElementById('nbClicks').innerHTML = x;
}