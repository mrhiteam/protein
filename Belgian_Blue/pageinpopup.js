

function muiza() {
    window.open("muiza.php","muiza","left=200,top=200,width=700,height=200,scrollbars=no,resizable=yes");
} //? 오류였다. f12가 오류 난 곳을 너무 맹신하지 말자. 아무리봐도 아닌 것 같으면 다른 곳에 문제가 있는 거다.

function star() {
    window.open("star.php","star","left=200,top=200,width=700,height=200,scrollbars=no,resizable=yes");
}

function qna() {
    window.open("qna.php","star","left=200,top=200,width=700,height=200,scrollbars=no,resizable=yes")
}

function add_pick(a) {
    window.open("add_pick.php?num=" + a,"pick","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
}

function order(a , b) {
        
    location.replace(`order.php?sendfee=${b}&price=${a}&pcount=${document.querySelector('#count').value}&basket=0&pname=${document.querySelector('#oname').value}`);
}




function basket(){

    window.open("add_basket.php?name=" + document.querySelector('#oname').value+"&count="+document.querySelector('#count').value ,"basket","left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
} //되도록이면 querySelector를 이용하자.

