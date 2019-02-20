$(function search() {
    $('a[href="#searchForm"]').on('click', function (event) {
        event.preventDefault();
        $('#searchForm').addClass('open');
        $('#searchForm > form > input[type="search"]').focus();
    });

    $('#searchForm, #searchForm button.close').on('click keyup', function (event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    var result = '<h2">Filterable List</h2>' +
        '<ul class="list-group" id="myList"></ul>';
    $(".resultSearch").html(result);

    var lstAll = '';
    DrinkList.forEach(function (item) {
        if (isLogin()) {
            lstAll += "<li class='list-group-item flex-justify' style='max-height: 400px'>" +
                "<a href='detailDrink.php?drink=" + item.name + "&user=" + getUser() + "'>" +
                "<img src='" + item.pathImg + "' style='height: 80px; margin: auto 15px'>" +
                "<h2 style='display: inline-block; color: #242424 !important;'>" + item.name + "</h2></a>" +
                "</li>";
        } else {
            lstAll += "<li class='list-group-item flex-justify' style='max-height: 400px'>" +
                "<a href='detailDrink.php?drink=" + item.name + "'>" +
                "<img src='" + item.pathImg + "' style='height: 80px; margin: auto 15px'>" +
                "<h2 style='display: inline-block; color: #242424 !important;'>" + item.name + "</h2></a>" +
                "</li>";
        }

    });

    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myList").html(lstAll);
        $("#myList").css({
            'overflow-y': 'auto',
            'max-height': '400px'
        });
        $("#myList li").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

});
