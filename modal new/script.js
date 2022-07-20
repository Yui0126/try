$('#exampleModal').on('show.bs.modal',
    function(event) {
        var li = $(event.relatedTarget)
        var recipient = li.data('whatever')
        var body = document.getElementsByClassName("modal-body")
        var modal = $(this)
        modal.find('.modal-title')
            .text('New message to ' + recipient)
        modal.find('.modal-body')
            .text('Welcome to ')
        console.log(body)
    });