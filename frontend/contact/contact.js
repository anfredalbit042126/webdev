$(document).ready(function () {

    let cities = [];
    let barangays = [];

    $.getJSON("/webdev/backend/get-address.php", function (data) {

        // Load provinces
        data.provinces.forEach(function(province){

            $("#province").append(
                `<option value="${province}">
                    ${province}
                </option>`
            );

        });

        cities = data.cities;
        barangays = data.barangays;

    });

    // Province change
    $("#province").change(function () {

        let province = $(this).val();

        $("#city").html('<option value="">Select City</option>');
        $("#barangay").html('<option value="">Select Barangay</option>');

        cities.forEach(function (item) {

            if (item.province === province) {

                $("#city").append(
                    `<option value="${item.city}">
                        ${item.city}
                    </option>`
                );

            }

        });

    });

    $("#city").change(function () {

    let city = $(this).val();

    $("#barangay").html(
        '<option value="">Select Barangay</option>'
    );

    let found = false;

    barangays.forEach(function (item) {

        if (item.city === city) {

            found = true;

            $("#barangay").append(
                `<option value="${item.barangay}">
                    ${item.barangay}
                </option>`
            );

        }

    });
        
    if (!found) {

        $("#barangay").html(
            '<option value="">No Barangay Available</option>'
        );

    }
  
});

});