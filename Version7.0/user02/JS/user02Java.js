var space = " ";
var pos = 0;
var msg = document.title;
function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);
    pos += 4;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 2000);
}
Scroll();


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
})
