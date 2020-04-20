import Modal from './accessibility';

$(document).ready(() => {
    const modalTrigger = $('[modal-target]');
    const closeModal   = $('[data-dismiss="modal"]');
    const btnGroup     = $('.close-btn-group');
    const closeButton  = $('[close-button]');
    const bodyElem     = $('body');
   
    modalTrigger.on('click keypress', e => {
        e.preventDefault();
        if(e.type === 'click' || e.key === 'Enter' ){
            let target = $(e.currentTarget).attr('modal-target');
            $(`#${target}`).addClass('active').attr('aria-hidden', 'false').attr('tabindex','1')
            bodyElem.addClass('scroll-lock modal-active');
            
            // Handles trapping focus in modal
            Modal.open($(`#${target}`))
        }
    });

    closeModal.on('click keypress', e => {
        if(e.key === 'Enter' || e.type === 'click'){
            let target = $(e.currentTarget).data('target');
            $(`${target}`).removeClass('active').attr('aria-hidden', 'true').attr('tabindex','-1');
            bodyElem.removeClass('scroll-lock modal-active');
            
            // Handles un-trapping focus in modal
            Modal.close($(`${target}`));

            if(e.key === 'Enter'){
                const dataTarget = target.split('#')[1];
                $(`[modal-target="${dataTarget}"]`).focus();
            }
        }
    });
    
    // Handles focus states
    btnGroup.focus((e) => { $(e.currentTarget).find(closeButton).addClass('hover-active') });
    btnGroup.focusout((e) => { $(e.currentTarget).find(closeButton).removeClass('hover-active') });

    btnGroup.hover(
        // On hover add this class
        (e) => { $(e.currentTarget).find(closeButton).addClass('hover-active'); },
        // on hover exit remove this class
        (e) => {
            $(e.currentTarget).find(closeButton).removeClass('hover-active');
        }
    )

});