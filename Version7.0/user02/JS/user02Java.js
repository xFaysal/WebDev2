var space = " ";
var pos = 0;
var msg = document.title;

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);
    pos++
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 500);
}
Scroll();

function login() {
    $inputs = $('input')
    $email = $inputs.filter("#inputEmail").val()
}


$(function () {
    $('.menuCollapse').hide()

    $('.menuButton').on('mousedown', function () {
        fa = $('.menuButton span')
        nav = $('.menuCollapse')
        nav.slideToggle(500)
    })

    $('.emb').on('mouseenter', function () {
        $this = $(this)
        if ($this.height() < 85) {
            $this.animate({
                'height': '320px'
            }, 200)
            window.setTimeout("window.scrollTo(0, document.body.scrollHeight)", 200);
        } else {
            $this.stop()
        }
    })

    $('.emb').on('mouseleave', function () {
        $this = $(this)
        $this.animate({
            'height': '80px'
        }, 200)
    })

    $('dd').hide()
    $('dt').on('mouseenter', function () {
        $(this).next()
            .siblings('dd')
            .slideUp(200)
            .end()
            .slideDown(200)
    })

    $('.greyOut').on('mouseenter', function () {
        $this = $(this)
        $this.css("background-color", "#bbbbbb")
    })

    $('.greyOut').on('mouseleave', function () {
        $this = $(this)
        $this.css("background-color", "#ffffff")
    })

    $('#showPass').on('mouseenter', function () {
        $this = $('.pass')
        $this.attr("type", "text")
    })

    $('#showPass').on('mouseleave', function () {
        $this = $('.pass')
        $this.attr("type", "password")
    })

    $('.dropBar').hide();
    $('.dropItems').children('div').hide()

    $('.topBar').on('mousedown', function () {
        $this = $(this)
        $this.next()
            .siblings('.dropBar')
            .slideToggle(300)
            .end()
        $this = $('.topBar .fa') //This changes the symbol
        if ($this.hasClass('fa-caret-right')) {
            $this.removeClass('fa-caret-right')
            $this.addClass('fa-caret-down')
        } else if ($this.hasClass('fa-caret-down')) {
            $this.removeClass('fa-caret-down')
            $this.addClass('fa-caret-right')
        }
    })

    $('.dropBar').on('mousedown', function () {
        var $this = $(this)
        var div = $(this).data('div');

        $('.topBar').next()
            .siblings('.dropBar')
            .slideUp(300)
            .end()
        $(div).siblings('div')
            .slideUp(300)
            .end()
            .slideToggle(300)

        $this = $('.topBar .fa') //This changes the symbol
        if ($this.hasClass('fa-caret-right')) {
            $this.removeClass('fa-caret-right')
            $this.addClass('fa-caret-down')
        } else if ($this.hasClass('fa-caret-down')) {
            $this.removeClass('fa-caret-down')
            $this.addClass('fa-caret-right')
        }
    })

})
