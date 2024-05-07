
$(".remove-from-cart").click(function (e) {

    e.preventDefault();



    var ele = $(this);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

        url: '/removefromcart',

        method: "DELETE",

        data: {

            id: ele.parents("tr").attr("data-id")

        },
        
        success: function (response) {

            window.location.reload();

        }

    });


});

