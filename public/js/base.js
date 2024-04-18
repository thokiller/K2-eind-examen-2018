$( document ).ready(() => {
    $('.editPromo').on('click', (e) => {
        let el = e.currentTarget;
        let id = $(el).closest('tr').find('#promoID').html();
        location.href = '/promos/info/' + id;
    });

    $('.confirm-action').on('click', (e) => {
        e.preventDefault();

        if(confirm('Weet je het zeker?')) {
            window.location.replace(e.target.href);
        }
    });

    $('.deletePromo').on('click', (e) => {
        let el = e.currentTarget;
        let row = $(el).closest('tr');
        let id = row.find('#promoID').html();

        $.post("/promos/delpromo", {id: id}, function(result){
            row.remove();
        });

    });

    $('.deactivateUser').on('click', (e) => {
        let el = e.currentTarget;
        let row = $(el).closest('tr');
        let id = row.find('#userID').html();

        $.post("/users/deactivate", {id: id}, function(result){
            location.reload()
        });
    });


    function postDelete(id) {
        $.post("/users/deactivate", {id: id}, function(result){
            $.post("/logout", {id: id}, function(result){
                location.reload()
            });
        });
    }

    $('#deleteAccount').on('click', (e) => {
        let el = e.currentTarget;
        let id = $(el).attr('data-id');
        if (confirm("wilt u uw account deactiveren?")) {
            postDelete(id)
        }
    });

    $('.deleteUser').on('click', (e) => {
        let el = e.currentTarget;
        let row = $(el).closest('tr');
        let id = row.find('#userID').html();

        $.post("/users/delete", {id: id}, function(response){
            if (response.trim() !== 'error') {
                row.remove();
            }else{
                alert('Gebruiker kan niet verwijderd worden.');
            }
        });

    });
});
