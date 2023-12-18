$(document).ready(function ()
{
    $('.increment-btn').click(function (e)
    {
        e.preventDefault();
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var value = parseInt(qty,10);
        value = isNaN(value) ? 0 : value;
        if (value < 10)
        {
            value++;    
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('.decrement-btn').click(function (e)
    {
        e.preventDefault();
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var value = parseInt(qty,10);
        value = isNaN(value) ? 0 : value;
        if (value > 1)
        {
            value--;    
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('.addToCartBtn').click(function (e)
    {
        e.preventDefault();
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();

        $.ajax ({
            method: "POST",
            url: "handlecart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "add"
            },
            success: function (response)
            {
                if (response == 201)
                {
                    alertify.success("Produsul a fost adaugat in cos");
                }
                else if (response == "exista")
                {
                    alertify.success("Produsul este deja in cos");
                }
                else if (response == 401)
                {
                    alertify.success("Intra in cont pentru a continua");
                }
                else if (response == 500)
                {
                    alertify.success("A intervenit o eroare");
                }
            }
        });
    });

    $(document).on('click', '.updateQty', function ()
    {
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).closest('.product_data').find('.prodId').val();

        $.ajax ({
            method: "POST",
            url: "handlecart.php",
            data: {
                "prod_id": prod_id,
                "prod_qty": qty,
                "scope": "update"
            },
            success: function (response)
            {
                //alert(response);
            }
        });
    });

    $(document).on('click', '.deleteItem', function ()
    {
        var cart_id = $(this).val();
        $.ajax ({
            method: "POST",
            url: "handlecart.php",
            data: {
                "cart_id": cart_id,
                "scope": "delete"
            },
            success: function (response)
            {
                if (response == 200)
                {
                    alertify.success("Produsul a fost eliminat din cos");
                    $('#mycart').load(location.href + " #mycart");
                }
                else
                {
                    alertify.success(response);
                }
            }
        });
    });
});






