function add_pick(a) {
    window.open("add_pick.php?num=" + a,"pick","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}

function order(a) {
        
    window.open("order.php?price="+a+"&pcount="+ document.querySelector('#count').value+"&basket=0&pname="+document.querySelector('#oname').value,"order","left=700,top=300,width=700,height=500,scrollbars=no,resizable=yes");
}


function basket(){

    window.open("add_basket.php?name=" + document.querySelector('#oname').value+"&count="+document.querySelector('#count').value ,"basket","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
} //되도록이면 querySelector를 이용하자.

function starReview(){

    window.open("starReview.php?name=" + document.querySelector('#count').value+"&count="+document.form1.opt.count.value ,"StarReview","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}