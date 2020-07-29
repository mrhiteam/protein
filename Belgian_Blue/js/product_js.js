function productcs(c,d) {
    if (c == 'k_tab-1') {
        /*
        
        */
        document.querySelector('#k_tab-1').classList.add('checked_tab');
        document.querySelector('#k_tab-2').classList.remove('checked_tab');
        document.querySelector('#k_tab-3').classList.remove('checked_tab');
        document.querySelector('#k_tab-4').classList.remove('checked_tab');
        if(d=='2'){
        document.querySelector('#k_tab-5').classList.remove('checked_tab');
        }
    } else if (c == 'k_tab-2') {
        document.querySelector('#k_tab-1').classList.remove('checked_tab');
        document.querySelector('#k_tab-2').classList.add('checked_tab');
        document.querySelector('#k_tab-3').classList.remove('checked_tab');
        document.querySelector('#k_tab-4').classList.remove('checked_tab');
        if(d=='2'){
        document.querySelector('#k_tab-5').classList.remove('checked_tab');
        }
    } else if (c == 'k_tab-3') {
        document.querySelector('#k_tab-1').classList.remove('checked_tab');
        document.querySelector('#k_tab-2').classList.remove('checked_tab');
        document.querySelector('#k_tab-3').classList.add('checked_tab');
        document.querySelector('#k_tab-4').classList.remove('checked_tab');
        if(d=='2'){
        document.querySelector('#k_tab-5').classList.remove('checked_tab');
        }
    } else if (c == 'k_tab-4') {
        document.querySelector('#k_tab-1').classList.remove('checked_tab');
        document.querySelector('#k_tab-2').classList.remove('checked_tab');
        document.querySelector('#k_tab-3').classList.remove('checked_tab');
        document.querySelector('#k_tab-4').classList.add('checked_tab');
        if(d=='2'){
        document.querySelector('#k_tab-5').classList.remove('checked_tab');
        }
    } else if (c == 'k_tab-5') {
        document.querySelector('#k_tab-1').classList.remove('checked_tab');
        document.querySelector('#k_tab-2').classList.remove('checked_tab');
        document.querySelector('#k_tab-3').classList.remove('checked_tab');
        document.querySelector('#k_tab-4').classList.remove('checked_tab');
        document.querySelector('#k_tab-5').classList.add('checked_tab');
    }
}