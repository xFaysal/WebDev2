(function () {
    var dd = $('dd')
    $('.dropBar').hide();
    $('.cen').children().filter(':nth-child(n+2)').hide();

    dd.filter(':nth-child(n+4)').hide();
    $('dt').on('mouseenter', function () {
        $(this).next()
            .siblings('dd')
            .slideUp(100)
            .end()
            .slideDown(100)
    })

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
        $this = $(this)
        $('.topBar').next()
            .siblings('.dropBar')
            .slideUp(300)
            .end()
        var list = $('.' + $this.text())
        list.slideDown(300)
        list.siblings()
            .slideUp(300)
            .end()
    })
    
    $('input[type="button"]').on('mouseenter', function(){
        $this = $(this)
        $this.css("backgroundColor","#ff4444")
    })
    
    $('input[type="button"]').on('mouseout', function(){
        $this = $(this)
        $this.css("backgroundColor","#fdfdfd")
    })
})();

//function that display value 
function dis(val) {
    document.getElementById("result").value += val
}

//function that evaluates the digit and return result 
function solve() {
    let y = eval(document.getElementById("result").value)
    document.getElementById("result").value = y
}

//function that clear the display 
function clr() {
    document.getElementById("result").value = ""
}
