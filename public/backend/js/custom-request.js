//hide flash message after 8 sec.
window.setTimeout(function () {
    $(".flash_message").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
    });
}, 8000);

//ajax call to make Item Active
function makeItemActive(url, data) {
    //const data = { '_method': 'DELETE' , data };
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to Active this.",
        type: 'warning',
        confirmButtonColor: '#28a745',
        confirmButtonText: 'Yes, Active',
        showCancelButton: true,
        cancelButtonColor: '#18100f',
        buttonsStyling: true,
    }).then(function (result) {

        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                success: function (response) {
                    if (response)
                        location.reload();
                },
                error: function (response) {
                    console.log(response);
                    Swal.fire(
                        "Internal Error",
                        "Oops, operation failed.", // had a missing comma
                        "error"
                    )
                }
            });
        }
    });
    return false;
}


//ajax call to make Item Inactive
function makeItemInactive(url, data) {
    //const data = { '_method': 'DELETE' , data };
    Swal.fire({
        title: 'Are you sure?',
        text: "You want to Inactive this.",
        type: 'warning',
        confirmButtonColor: '#dc3545',
        confirmButtonText: 'Yes, Inactive',
        showCancelButton: true,
        cancelButtonColor: '#18100f',
        buttonsStyling: true,
    }).then(function (result) {

        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                success: function (response) {
                    if (response)
                        location.reload();
                },
                error: function (response) {
                    console.log(response);
                    Swal.fire(
                        "Internal Error",
                        "Oops, operation failed.", // had a missing comma
                        "error"
                    )
                }
            });
        }
    });
    return false;
}


//ajax call to delete item
function deleteItem(url, data) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        confirmButtonColor: '#ff8b2c',
        confirmButtonText: 'Yes, delete it!',
        showCancelButton: true,
        cancelButtonColor: '#dc3545',
        buttonsStyling: true,
    }).then(function (result) {

        if (result.value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                success: function (response) {
                    if (response) {
                        location.reload();
                    }

                },
                error: function (response) {
                    console.log(response);
                    Swal.fire(
                        "Internal Error",
                        "Oops, operation failed.", // had a missing comma
                        "error"
                    )
                }
            });
        }
    });
    return false;
}

//get populate dropdown List
function populateDropdown(url, resFun) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "GET",
        url: url,
        success: function (response) {
            if (response) {
                resFun(response); //for dating ui
            }

        },
        error: function (response) {
            console.log(response);
            Swal.fire(
                "Internal Error",
                "Oops, operation failed.", // had a missing comma
                "error"
            )
        }
    });
}


//get populate dropdown List
function retrieveData(url, data, resFun) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function (response) {
            if (response) {
                resFun(response); //for dating ui
            }

        },
        error: function (response) {
            console.log(response);
            Swal.fire(
                "Internal Error",
                "Oops, operation failed.", // had a missing comma
                "error"
            )
        }
    });
}

function strLimit(string, length) {
    return string.length > length ? string.substring(0, length - 3) + "..." : string
}

//
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}


