$(document).on("ready", function() {
    // start up hidden
    $(".comments").hide();
    $("#errors").hide();
    $(".interface").hide();
    $(".centered").hide();
    $(".centered2").hide();
    $(".commentform").hide();
    // $(".commentform").hide();
    $(".page").hide();
    // show the page
    $(".interface").slideDown(2000);
    $(".centered").slideDown(3000);
    $(".centered2").slideDown(3000);
    $(".page").slideDown(3000);
    $(".showcomments").on("click", function() {
        var th = $(this).closest(".col-6");
        th.children(".comments").slideToggle(2000);
    });
    $(".showcommentform").on("click", function() {
        var th = $(this).closest(".row");
        th.children(".commentform").slideToggle(2000);
    });
    // ajax add comment

    $(".comment_create").on("click", function(e) {
        e.preventDefault();
        var th = $(this).closest(".commentform");
        console.log(th.get(0));
        var th2 = $(this).closest(".card.box");
        var th3 = th2.next();
        $.ajax({
            url: "/posts/comment",
            type: "POST",
            data: th.serialize(),
            dataType: "JSON",
            success: function(data) {
                if (data.status == "success") {
                    alert("your comment has been added");
                    th3.append(
                        ' <div class="col-10 no-pd offset-2"> <div class="card">  <div class="card-header bootstrap">   <div class="row"><div class="pic col-2"><img class="imgcir" src="img/wp1951411.jpg"></div><div class="col-9">  by marioeid <div class="col-12 no-pd"> <p><i class="fa fa-clock-o"></i>' +
                            data.data.updated_at +
                            '</p></div></div></div></div><div class="card-body"><p class="card-text">' +
                            data.data.body +
                            '</p></div><div class="card-footer"></div><div class="row"><a href="#" class="btn col">like</a><a href="#" class="btn col">edit</a><a href="#" class="btn col">delete</a></div></div></div>'
                    );
                } else {
                    console.log("error");
                }
            }
        });
    });
    // ajax add post
    $("#post_create").on("click", function(e) {
        e.preventDefault();
        //  var body=$('#body').val();
        //  var tilte=$('#title').val();
        var toky = $("#toky").data("token");
        $.ajax({
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //   }
            //   ,
            url: "/createpost",
            type: "POST",
            data: $(".postform").serialize(),
            dataType: "JSON",
            success: function(data) {
                if (data.status == "success") {
                    console.log(toky);
                    $("#posts").append(
                        '<div class="col-6 no-pd"><div class="card"><div class="card-header"><div class="row"><img class="col-2 imgsz" src="img/wp1951411.jpg"><div class="col-9">by ' +
                            data.data.name +
                            '<div class="col-12 no-pd"><p><i class="fa fa-clock-o"></i> ' +
                            data.data.created_at +
                            '</p></div> </div></div></div><div class="card-body"><div class="card-title">' +
                            data.data.title +
                            '</div><p class="card-text">' +
                            data.data.body +
                            '</p></div><div class="card-footer">  <div class="row"><div class="col btn">like</div><div class="col btn">comment</div> <div class="col btn">edit</div><a class="col btn post_delete" data-token=' +
                            toky +
                            " data-id=" +
                            data.data.id +
                            ' data-url="/deletepost/' +
                            data.data.id +
                            '">delete</a> <div class="col btn showcomments">show comments</div></div></div></div><div class="comments"></div>'
                    );
                    $(".close").click();
                    $(".postform").each(function() {
                        this.reset();
                    });
                }
            },
            error: function(data) {
                $("#errors").show();
                $("#errors").html("");
                var errors = data.responseJSON;
                $.each(errors, function(v, k) {
                    $("#errors").append(v + "<br/>");
                });
            }
        });
    });
    // ajax delete post
    $(document).on("click", "#posts .post_delete", function(e) {
        e.preventDefault();
        var id = $(this).data("id");
        var url = $(this).data("url");
        var th = $(this)
            .parent()
            .parent()
            .parent();
        var token = $(this).data("token");
        $.ajax({
            url: url,
            type: "DELETE",
            data: {
                _token: token
            },
            dataType: "JSON",
            success: function(data) {
                th.remove();
            }
        });
    });
    $(".post_comment").on("click", function() {
        var th = $(this);
    });
});
