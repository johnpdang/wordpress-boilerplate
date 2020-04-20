// Add [data-notab] to any html element you don't want to be tabbable 
const focusable = ["a[href]", " area[href]", " input:not([disabled])", " select:not([disabled])", " textarea:not([disabled])", " button:not([disabled])", "object", "embed", " *[tabindex]", " *[contenteditable]", '*[data-notab]'];

const Modal = {
    open: function(target){
        for (let element of focusable) {   
            $(element).attr('tabindex', '-1');
            if(element !== '*[data-notab]'){
                target.find(element).attr('tabindex', '1');
            }
        }
    },
    close: function(target){
        for (let element of focusable) {
            element !== '*[data-notab]' 
              ? $(element).attr('tabindex', '1')
              : $(element).attr('tabindex', '-1');

            target.find(element).attr('tabindex', '-1');
        }
    }
}

export default Modal;
